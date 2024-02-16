<?php

namespace App\Filament\Widgets;

use App\Models\PolutanRecord;
use DB;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecordByVillages extends BaseWidget
{
    protected static ?int $sort = 3;

    protected static ?string $heading = 'Daftar Kelurahan';

    protected int | string | array $columnSpan = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                PolutanRecord::query()
                    ->selectRaw("id,district_id, village_id,user_id, pm_two,sum(pm_two) as total, avg(pm_two) as average, '-' as sumarry")
                    ->groupBy('district_id', 'village_id')

            )
            ->columns([
                Tables\Columns\TextColumn::make(name: 'village.name')
                    ->label(label: 'Kelurahan'),
                Tables\Columns\TextColumn::make(name: 'total')
                    ->label(label: 'Total (pm2)'),
                Tables\Columns\TextColumn::make(name: 'average')
                    ->formatStateUsing(fn($state) => round(num: $state))
                    ->label(label: 'Rata-Rata (pm2)'),
                Tables\Columns\TextColumn::make(name: 'sumarry')
                    ->label(label: 'Kesimpulan')
                    ->formatStateUsing(fn(PolutanRecord $record) => \App\Supports\AirQualityIndex::resolveBreakpoint(averageOfConcentrationPoint: $record->average)->airQuality->description()),
            ])
            ->groups(groups: [
                Tables\Grouping\Group::make(id: 'district.name')
                    ->label(label: 'Kecamatan')
            ])
            ->defaultGroup(group: 'district.name');
    }
}
