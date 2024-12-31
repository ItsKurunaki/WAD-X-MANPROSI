<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormResource\Pages;
use App\Models\Form as FormModel;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class FormResource extends Resource
{
    protected static ?string $model = FormModel::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $modelLabel = 'Form Gempa';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NomorTelepon')
                    ->required()
                    ->tel()
                    ->maxLength(255)
                    ->label('Nomor Telepon'),
                Forms\Components\TextInput::make('Asal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('SkalaGempa')
                    ->required()
                    ->options([
                        'Tidak dirasakan' => 'Tidak dirasakan',
                        'Dirasakan' => 'Dirasakan',
                        'Kerusakan Ringan' => 'Kerusakan Ringan',
                        'Kerusakan Sedang' => 'Kerusakan Sedang',
                        'Kerusakan Berat' => 'Kerusakan Berat',
                    ])
                    ->label('Skala Gempa'),
                Forms\Components\Textarea::make('KataKata')
                    ->required()
                    ->maxLength(65535)
                    ->label('Keterangan'),
                Forms\Components\Textarea::make('admin_comment')
                    ->label('Komentar Admin')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('is_valid')
                    ->label('Status Valid')
                    ->default(false),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NomorTelepon')
                    ->label('Nomor Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Asal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('SkalaGempa')
                    ->label('Skala Gempa'),
                Tables\Columns\TextColumn::make('KataKata')
                    ->label('Keterangan')
                    ->limit(50),
                Tables\Columns\BooleanColumn::make('is_valid')
                    ->label('Status Valid'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Tanggal Dibuat'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('SkalaGempa')
                    ->options([
                        'Tidak dirasakan' => 'Tidak dirasakan',
                        'Dirasakan' => 'Dirasakan',
                        'Kerusakan Ringan' => 'Kerusakan Ringan',
                        'Kerusakan Sedang' => 'Kerusakan Sedang',
                        'Kerusakan Berat' => 'Kerusakan Berat',
                    ])
                    ->label('Filter Skala Gempa'),
                Tables\Filters\TernaryFilter::make('is_valid')
                    ->label('Status Validasi'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListForms::route('/'),
            'edit' => Pages\EditForm::route('/{record}/edit'),
        ];
    }
}