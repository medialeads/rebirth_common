<?php

namespace ES\RebirthCommon;

interface ProductInterface extends ModelInterface
{
    /**
     * @return VariantInterface[]
     */
    public function getVariants();
}
