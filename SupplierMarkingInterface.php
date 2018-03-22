<?php

namespace ES\RebirthCommon;

interface SupplierMarkingInterface extends ModelInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string|null
     */
    public function getNameComplement();
}
