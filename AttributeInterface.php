<?php

namespace ES\RebirthCommon;

interface AttributeInterface extends ModelInterface
{
    /**
     * @return string|null
     */
    public function getValue();

    /**
     * @return AttributeGroupInterface
     */
    public function getAttributeGroup();
}
