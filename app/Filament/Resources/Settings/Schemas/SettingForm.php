<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Settings')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('key')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->label('Setting Key')
                            ->placeholder('e.g. phone, email, address, hero_title'),

                        \Filament\Forms\Components\Textarea::make('value')
                            ->label('Setting Value')
                            ->rows(3)
                            ->placeholder('Enter value (string/json/text)'),
                    ])
                    ->columns(1),
            ]);
    }
}
