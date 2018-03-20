<?php

namespace ES\RebirthCommon;

interface VariantInterface extends ModelInterface
{
    /**
     * @return string
     */
    public function getSupplierReference();

    /**
     * @return bool
     */
    public function isMandatoryMarking();

    /**
     * @return AttributeInterface[]
     */
    public function getAttributes();

    /**
     * @return VariantPriceInterface[]
     */
    public function getVariantPrices();

    /**
     * @return VariantMarkingInterface[]
     */
    public function getVariantMarkings();

    /**
     * @return VariantMinimumQuantityInterface[]
     */
    public function getVariantMinimumQuantities();
}
