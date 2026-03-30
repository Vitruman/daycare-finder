<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Set $set) {
                                $set('slug', \Illuminate\Support\Str::slug($state));
                            }),

                        \Filament\Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        \Filament\Forms\Components\Textarea::make('excerpt')
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        \Filament\Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),

                        \Filament\Forms\Components\CheckboxList::make('categories')
                            ->label('Categories')
                            ->relationship('categories', 'name')
                            ->columns(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->schema([
                        \Filament\Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('blogs')
                            ->imageEditor()
                            ->maxSize(4096),
                    ])
                    ->columns(1),

                Section::make('Publication')
                    ->schema([
                        \Filament\Forms\Components\Select::make('status')
                            ->label('Status')
                            ->required()
                            ->options([
                                'draft' => 'draft',
                                'publish' => 'publish',
                            ])
                            ->default('draft'),

                        \Filament\Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish At')
                            ->seconds(false),
                    ])
                    ->columns(2),

                Section::make('SEO')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('seo_title')
                            ->label('SEO Title')
                            ->maxLength(255)
                            ->placeholder('Custom <title> for the post'),

                        \Filament\Forms\Components\TagsInput::make('meta_keywords')
                            ->placeholder('Add keyword'),

                        \Filament\Forms\Components\Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(160),
                    ])
                    ->columns(2),

                Section::make('Author')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('author_name')
                            ->maxLength(255),
                        \Filament\Forms\Components\TextInput::make('author_email')
                            ->email()
                            ->maxLength(255),
                    ])
                    ->columns(2),
            ]);
    }
}
