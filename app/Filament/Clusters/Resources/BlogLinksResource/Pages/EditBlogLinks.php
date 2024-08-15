<?php

namespace App\Filament\Resources\BlogLinksResource\Pages;

use App\Filament\Resources\BlogLinksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogLinks extends EditRecord
{
    protected static string $resource = BlogLinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
