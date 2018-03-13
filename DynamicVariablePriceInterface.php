<?php

namespace ES\RebirthCommon;

interface DynamicVariablePriceInterface extends ModelInterface
{
    /**
     * @return int
     */
    public function getFromQuantity();

    /**
     * @return string
     */
    public function getCalculationValue();
}
