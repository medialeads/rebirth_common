<?php

namespace ES\RebirthCommon;

use Money\Money;

interface StaticFixedPriceInterface extends ModelInterface
{
    /**
     * @return string|null
     */
    public function getCondition();

    /**
     * @return Money|float|string
     */
    public function getCalculationValue();

    /**
     * @return bool
     */
    public function isTotalPrice();

    /**
     * @return SupplierProfileInterface
     */
    public function getSupplierProfile();

    /**
     * @return MarkingFeeInterface[]
     */
    public function getMarkingFees();
}
