<?php

namespace Botble\Ecommerce\Http\Controllers;

use Botble\DataSynchronize\Http\Controllers\ImportController;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Ecommerce\Importers\ProductPriceImporter;
use Illuminate\Http\Request;

class ImportProductPriceController extends ImportController
{
    protected function getImporter(): Importer
    {
        return ProductPriceImporter::make();
    }

    // AMATULLAH_UPDATE_EXISTING_PRODUCT_PRICES_V1
    protected function prepareImporter(Request $request): Importer
    {
        /** @var ProductPriceImporter $importer */
        $importer = parent::prepareImporter($request);

        return $importer->setUpdateExisting(
            $request->boolean('update_existing_product_prices')
        );
    }
}
