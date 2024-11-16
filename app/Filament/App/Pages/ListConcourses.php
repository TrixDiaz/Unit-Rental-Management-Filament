<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class ListConcourses extends Page
{
    protected static ?string $navigationLabel = 'Units';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static string $view = 'filament.app.pages.list-concourses';

    protected static bool $shouldRegisterNavigation = false;

    public function getTitle(): string
    {
        return 'Units List';
    }
  
}
