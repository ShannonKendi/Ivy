<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\UserOverview;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class UsersDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    protected static string $view = 'filament.pages.users-dashboard';


    public function getTitle(): string|Htmlable
    {
        return 'Users Dashboard';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Users';
    }

    public static function getNavigationLabel(): string
    {
        return 'Users Dashboard';
    }


    public function getVisibleHeaderWidgets(): array
    {
        return [

            UserOverview::make()

        ];
    }
}
