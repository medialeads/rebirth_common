<?php

namespace ES\RebirthCommon;

interface VariantMinimumQuantityInterface extends ModelInterface
{
    /**
     * @return int
     */
    public function getValue();

    /**
     * @return SupplierProfileInterface
     */
    public function getSupplierProfile();
}
