<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TagsInput::make('skills')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
