<?php

namespace Botble\Blog\Http\Controllers;

use Botble\Blog\Importers\PostImporter;
use Botble\DataSynchronize\Http\Controllers\ImportController;
use Botble\DataSynchronize\Importer\Importer;
use Illuminate\Http\Request;

class ImportPostController extends ImportController
{
    protected function getImporter(): Importer
    {
        return PostImporter::make();
    }
    protected function prepareImporter(Request $request): Importer
    {
        /** @var PostImporter $importer */
        $importer = parent::prepareImporter($request);
        return $importer->setUpdateExisting($request->boolean('update_existing_posts'));
    }
}
