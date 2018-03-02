<?php

namespace ES\RebirthCommon;

interface AttributeInterface
{
    /**
     * @return string
     */
    public function getUniqueId();

    /**
     * @return string|null
     */
    public function getValue();

    /**
     * @return AttributeGroupInterface
     */
    public function getAttributeGroup();
}
