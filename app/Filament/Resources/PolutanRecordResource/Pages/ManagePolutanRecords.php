<?php

namespace App\Filament\Resources\PolutanRecordResource\Pages;

use App\Filament\Resources\PolutanRecordResource;
use Auth;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManagePolutanRecords extends ManageRecords
{
    protected static string $resource = PolutanRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(callback: function (array $data) {
                    data_set(target: $data, key: 'user_id', value: Auth::user()->id);

                    return $data;
                }),
        ];
    }
}
