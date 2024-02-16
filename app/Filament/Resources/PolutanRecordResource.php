<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PolutanRecordResource\Pages;
use App\Filament\Resources\PolutanRecordResource\RelationManagers;
use App\Models\District;
use App\Models\PolutanRecord;
use App\Models\Villages;
use Auth;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PolutanRecordResource extends Resource
{
    protected static ?string $model = PolutanRecord::class;

    protected static ?string $label = 'Daftar Histori Polutan';

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make(name: 'pm_two')
                    ->label(label: 'PM2.5')
                    ->numeric()
                    ->required()
                    ->suffix(label: 'mg/m3')
                    ->columnSpan(span: 2),
                Forms\Components\Select::make(name: 'district_id')
                    ->label(label: 'Kecamatan')
                    ->options(options: District::query()->pluck(column: 'name', key: 'id'))
                    ->required()
                    ->live(),
                Forms\Components\Select::make(name: 'village_id')
                    ->label(label: 'Kelurahan / Desa')
                    ->options(options: fn(Forms\Get $get) => Villages::query()
                        ->where(column: 'district_id', operator: '=', value: $get(path: 'district_id'))
                        ->pluck(column: 'name', key: 'id')
                    )
                    ->required()
                    ->live(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make(name: 'pm_two')
                    ->label(label: 'PM2.5'),
                Tables\Columns\TextColumn::make(name: 'district.name')
                    ->label(label: 'Kecamatan'),
                Tables\Columns\TextColumn::make(name: 'village.name')
                    ->label(label: 'Kelurahan / Desa'),
                Tables\Columns\TextColumn::make(name: 'created_at')
                    ->label(label: 'Dibuat Pada')
                    ->sortable()
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where(column: 'user_id', operator: '=', value: Auth::user()->id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePolutanRecords::route('/'),
        ];
    }
}
