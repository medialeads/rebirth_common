<?php

namespace ES\RebirthCommon;

interface AttributeGroupInterface
{
    /**
     * @return string
     */
    public function getUniqueId();

    /**
     * @return string|null
     */
    public function getName();
}
