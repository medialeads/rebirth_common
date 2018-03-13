<?php

namespace ES\RebirthCommon;

use Money\Money;

interface VariantPriceInterface extends ModelInterface
{
    /**
     * @return int
     */
    public function getFromQuantity();

    /**
     * @return Money|float|string
     */
    public function getCalculationValue();

    /**
     * @return SupplierProfileInterface
     */
    public function getSupplierProfile();
}
