<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('degree')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('institution')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('duration')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('result')
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
