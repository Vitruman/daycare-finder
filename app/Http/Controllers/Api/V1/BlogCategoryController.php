<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {
        $items = BlogCategory::query()->orderBy('name')->get();

        return response()->json([
            'data' => $items->map(fn (BlogCategory $c) => $this->serialize($c))->values(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatePayload($request);

        $cat = BlogCategory::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['slug'] ?? $data['name']),
            'description' => $data['description'] ?? null,
        ]);

        return response()->json($this->serialize($cat), 201);
    }

    public function update(Request $request, BlogCategory $category)
    {
        $data = $this->validatePayload($request);

        $category->update(Arr::where([
            'name' => $data['name'],
            'slug' => Str::slug($data['slug'] ?? $data['name']),
            'description' => $data['description'] ?? null,
        ], fn ($v) => $v !== null));

        return response()->json($this->serialize($category->fresh()));
    }

    public function destroy(Request $request, BlogCategory $category)
    {
        $category->delete();

        return response()->json(['deleted' => true]);
    }

    private function validatePayload(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);
    }

    private function serialize(BlogCategory $c): array
    {
        return [
            'id' => (int) $c->id,
            'name' => $c->name,
            'slug' => $c->slug,
            'description' => $c->description,
        ];
    }
}

