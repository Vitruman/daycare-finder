<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class HeaderMenu extends Page implements HasSchemas
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.header-menu';

    protected static ?string $navigationLabel = 'Header menu';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Link;

    protected static ?int $navigationSort = 50;

    public ?array $data = [];

    public function mount(): void
    {
        $raw = (string) Setting::getValue('header_links', '[]');
        $links = json_decode($raw, true);
        $links = is_array($links) ? $links : [];

        // Fallback defaults if empty.
        if ($links === []) {
            $links = [
                ['label' => 'Home', 'url' => url('/'), 'new_tab' => false],
                ['label' => 'Blog', 'url' => url('/blog'), 'new_tab' => false],
                ['label' => 'About', 'url' => url('/about'), 'new_tab' => false],
            ];
        }

        $this->form->fill([
            'header_links' => $links,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('header_links')
                    ->label('Links in header (desktop + mobile)')
                    ->reorderable()
                    ->defaultItems(0)
                    ->schema([
                        TextInput::make('label')
                            ->label('Text')
                            ->required()
                            ->maxLength(60),
                        TextInput::make('url')
                            ->label('URL')
                            ->required()
                            ->maxLength(2048)
                            ->helperText('Можно относительный путь (/blog) или полный URL.'),
                        Toggle::make('new_tab')
                            ->label('Open in new tab')
                            ->default(false),
                    ])
                    ->columns(3),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = (array) $this->form->getState();
        $links = $state['header_links'] ?? [];
        $links = is_array($links) ? $links : [];

        $links = array_values(array_filter(array_map(function ($row) {
            if (!is_array($row)) {
                return null;
            }

            $label = trim((string) ($row['label'] ?? ''));
            $url = trim((string) ($row['url'] ?? ''));
            $newTab = (bool) ($row['new_tab'] ?? false);

            if ($label === '' || $url === '') {
                return null;
            }

            return [
                'label' => $label,
                'url' => $url,
                'new_tab' => $newTab,
            ];
        }, $links)));

        Setting::setValue('header_links', json_encode($links, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        Notification::make()
            ->title('Header menu saved')
            ->success()
            ->send();
    }
}

