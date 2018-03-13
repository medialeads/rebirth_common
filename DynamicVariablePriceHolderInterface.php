<?php

namespace ES\RebirthCommon;

interface DynamicVariablePriceHolderInterface extends ModelInterface
{
    /**
     * @return string|null
     */
    public function getCondition();

    /**
     * @return bool
     */
    public function isTotalPrice();

    /**
     * @return SupplierProfileInterface
     */
    public function getSupplierProfile();

    /**
     * @return DynamicVariablePriceInterface[]
     */
    public function getDynamicVariablePrices();

    /**
     * @return MarkingFeeInterface[]
     */
    public function getMarkingFees();
}
