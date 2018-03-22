<?php

namespace ES\RebirthCommon;

interface DynamicFixedPriceInterface extends ModelInterface
{
    /**
     * @return string|null
     */
    public function getCondition();

    /**
     * @return string
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
