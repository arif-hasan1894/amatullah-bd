<?php

namespace Botble\Page\Http\Controllers;
use Botble\Base\Facades\Assets;

use Botble\DataSynchronize\Http\Controllers\ImportController;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Page\Importers\PageImporter;
use Illuminate\Http\Request;

class ImportPageController extends ImportController
{
    public function index()
    {
        Assets::addScriptsDirectly('/vendor/core/packages/page/js/pages-import-update-existing.js?v=1');

        return parent::index();
    }

    protected function getImporter(): Importer
    {
        return PageImporter::make();
    }

    protected function prepareImporter(Request $request): Importer
    {
        /** @var PageImporter $importer */
        $importer = parent::prepareImporter($request);

        return $importer->setUpdateExisting($request->boolean('update_existing_pages'));
    }
}
