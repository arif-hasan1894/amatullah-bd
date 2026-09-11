<?php

namespace Botble\Ecommerce\Http\Controllers;

use Botble\DataSynchronize\Http\Controllers\ImportController;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Ecommerce\Importers\ProductCategoryImporter;
use Illuminate\Http\Request;

class ImportProductCategoryController extends ImportController
{
    protected function getImporter(): Importer
    {
        return ProductCategoryImporter::make();
    }

    protected function prepareImporter(Request $request): Importer
    {
        /** @var ProductCategoryImporter $importer */
        $importer = parent::prepareImporter($request);

        return $importer->setUpdateExisting(
            $request->boolean('update_existing_product_categories')
        );
    }
}
