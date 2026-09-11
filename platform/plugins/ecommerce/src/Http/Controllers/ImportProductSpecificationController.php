<?php

namespace Botble\Ecommerce\Http\Controllers;

use Botble\DataSynchronize\Http\Controllers\ImportController;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Ecommerce\Importers\ProductSpecificationImporter;
use Illuminate\Http\Request;

class ImportProductSpecificationController extends ImportController
{
    protected function getImporter(): Importer
    {
        return ProductSpecificationImporter::make();
    }

    // AMATULLAH_PRODUCT_SPEC_UPDATE_EXISTING_DEFINITIVE
    protected function prepareImporter(Request $request): Importer
    {
        /** @var ProductSpecificationImporter $importer */
        $importer = parent::prepareImporter($request);

        return $importer->setUpdateExisting(
            $request->boolean('update_existing_product_specifications')
        );
    }
}
