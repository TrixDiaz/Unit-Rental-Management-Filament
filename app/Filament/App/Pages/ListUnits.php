<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class ListUnits extends Page
{
    protected static ?string $navigationLabel = 'Units';
    
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.list-units';

    public function getTitle(): string
    {
        return 'Units List';
    }
}
