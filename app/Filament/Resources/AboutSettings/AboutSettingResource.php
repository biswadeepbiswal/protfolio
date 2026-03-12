<?php

namespace App\Filament\Resources\AboutSettings;

use App\Filament\Resources\AboutSettings\Pages\ManageAboutSettings;
use App\Models\AboutSetting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutSettingResource extends Resource
{
    protected static ?string $model = AboutSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\FileUpload::make('profile_path')
                    ->image()
                    ->directory('profile'),
                \Filament\Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                \Filament\Forms\Components\Textarea::make('bio')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('github_url')
                    ->url()
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('linkedin_url')
                    ->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('email')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageAboutSettings::route('/'),
        ];
    }
}
