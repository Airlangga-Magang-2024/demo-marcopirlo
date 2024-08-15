<?php

namespace App\Filament\Resources\BlogLinksResource\Pages;

use App\Filament\Resources\BlogLinksResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogLinks extends CreateRecord
{
    protected static string $resource = BlogLinksResource::class;
}
