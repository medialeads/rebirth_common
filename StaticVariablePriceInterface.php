<?php

namespace ES\RebirthCommon;

use Money\Money;

interface StaticVariablePriceInterface extends ModelInterface
{
    /**
     * @return int
     */
    public function getFromQuantity();

    /**
     * @return Money|float|string
     */
    public function getCalculationValue();
}
