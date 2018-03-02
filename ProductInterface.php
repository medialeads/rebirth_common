<?php

namespace ES\RebirthCommon;

interface ProductInterface
{
    /**
     * @return VariantInterface[]
     */
    public function getVariants();
}
