<?php

namespace App\Filament\Widgets;


use App\Enums\Role;
use App\Filament\Pages\VolunteerInvitation;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;
use KoalaFacade\FilamentAlertBox\Widgets\AlertBoxWidget;

class InviteContributorWidget extends AlertBoxWidget
{
    public string $type = 'primary';

    protected static ?int $sort = 1;

    protected string | Closure | null $icon = 'heroicon-o-globe-americas';

    protected string | Htmlable | Closure | null $label = 'Buat Palu jadi lebih baik';

    public function getColumnSpan(): int|string|array
    {
        return 2;
    }


    public function getHelperText(): string|Htmlable|null
    {
        $pageUrl = VolunteerInvitation::getUrl();

        return new HtmlString(
            html: "Jadi kontributor sekarang untuk membuat Palu menjadi daerah yang sehat <a href='{$pageUrl}' wire:navigate class='underline'> disini </a>"
        );
    }

    public static function canView(): bool
    {
        return ! Auth::user()->hasRole(roles: Role::volunteer->value);
    }
}
