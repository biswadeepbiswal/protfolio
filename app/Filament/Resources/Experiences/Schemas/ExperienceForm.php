<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('company')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('duration')
                    ->placeholder('e.g. 3 Months or Jan 2023 - Present')
                    ->maxLength(255),
                \Filament\Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
