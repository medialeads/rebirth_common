<?php

namespace ES\RebirthCommon;

interface StaticVariablePriceHolderInterface extends ModelInterface
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
     * @return StaticVariablePriceInterface[]
     */
    public function getStaticVariablePrices();

    /**
     * @return MarkingFeeInterface[]
     */
    public function getMarkingFees();
}
