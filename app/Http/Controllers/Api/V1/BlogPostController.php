<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $perPage = max(1, min(100, (int) $request->query('per_page', 100)));

        $query = Blog::query()->orderByDesc('id');

        $paginator = $query->paginate($perPage);

        return response()->json([
            'data' => $paginator->getCollection()->map(fn (Blog $b) => $this->serialize($b))->values(),
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'total' => $paginator->total(),
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatePayload($request);

        $blog = Blog::create($this->mapToBlogAttributes($data));
        if (!empty($data['categories'])) {
            $blog->categories()->sync($data['categories']);
        }

        return response()->json($this->serialize($blog), 201);
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $this->validatePayload($request);

        $blog->update($this->mapToBlogAttributes($data));
        if (array_key_exists('categories', $data)) {
            $blog->categories()->sync($data['categories'] ?? []);
        }

        return response()->json($this->serialize($blog->fresh()));
    }

    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete();

        return response()->json(['deleted' => true]);
    }

    private function validatePayload(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'excerpt' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'string', 'max:2048'],
            'status' => ['nullable', 'string', 'in:draft,publish'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['integer', 'exists:blog_categories,id'],
            'author_name' => ['nullable', 'string', 'max:255'],
            'author_email' => ['nullable', 'string', 'max:255'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'meta_keywords' => ['nullable', 'array'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'published_at' => ['nullable', 'date'],
        ]);
    }

    private function mapToBlogAttributes(array $data): array
    {
        $attrs = [
            'title' => $data['title'],
            'slug' => !empty($data['slug']) ? Str::slug($data['slug']) : null,
            'content' => $data['content'],
            'excerpt' => $data['excerpt'] ?? null,
            'featured_image' => $data['featured_image'] ?? null,
            'author_name' => $data['author_name'] ?? null,
            'author_email' => $data['author_email'] ?? null,
            'seo_title' => $data['seo_title'] ?? null,
            'meta_keywords' => $data['meta_keywords'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
        ];

        if (array_key_exists('status', $data) && $data['status'] !== null) {
            $attrs['status'] = $data['status'];
        }

        if (array_key_exists('published_at', $data) && $data['published_at'] !== null) {
            $attrs['published_at'] = $data['published_at'];
        }

        return Arr::where($attrs, fn ($v) => $v !== null);
    }

    private function serialize(Blog $blog): array
    {
        return [
            'id' => (int) $blog->id,
            'title' => $blog->title,
            'slug' => $blog->slug,
            'excerpt' => $blog->excerpt,
            'content' => $blog->content,
            'featured_image' => $blog->featured_image,
            'status' => $blog->status ?? ($blog->is_published ? 'publish' : 'draft'),
            'categories' => $blog->categories()->pluck('blog_categories.id')->values()->all(),
            'seo_title' => $blog->seo_title,
            'meta_keywords' => $blog->meta_keywords,
            'meta_description' => $blog->meta_description,
            'published_at' => optional($blog->published_at)->toAtomString(),
            'link' => route('blog.show', $blog),
            'updated_at' => optional($blog->updated_at)->toAtomString(),
        ];
    }
}

