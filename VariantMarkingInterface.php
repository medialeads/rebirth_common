<?php

namespace ES\RebirthCommon;

interface VariantMarkingInterface extends ModelInterface, VariantMarkingOptionsInterface
{
    /**
     * @var string
     */
    const TYPE_SIMPLE = 'simple';

    /**
     * @var string
     */
    const TYPE_SUPPLIER = 'supplier';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return float|string|null
     */
    public function getMinimumLength();

    /**
     * @return float|string|null
     */
    public function getMaximumLength();

    /**
     * @return bool
     */
    public function isFreeEntryLength();

    /**
     * @return float|string|null
     */
    public function getMinimumWidth();

    /**
     * @return float|string|null
     */
    public function getMaximumWidth();

    /**
     * @return bool
     */
    public function isFreeEntryWidth();

    /**
     * @return float|string|null
     */
    public function getMinimumSquaredSize();

    /**
     * @return float|string|null
     */
    public function getMaximumSquaredSize();

    /**
     * @return bool
     */
    public function isFreeEntrySquaredSize();

    /**
     * @return float|string|null
     */
    public function getMinimumDiameter();

    /**
     * @return float|string|null
     */
    public function getMaximumDiameter();

    /**
     * @return bool
     */
    public function isFreeEntryDiameter();

    /**
     * @return int
     */
    public function getMinimumNumberOfColors();

    /**
     * @return int
     */
    public function getMaximumNumberOfColors();

    /**
     * @return bool
     */
    public function isFreeEntryNumberOfColors();

    /**
     * @return int
     */
    public function getMinimumNumberOfPositions();

    /**
     * @return int
     */
    public function getMaximumNumberOfPositions();

    /**
     * @return bool
     */
    public function isFreeEntryNumberOfPositions();

    /**
     * @return int
     */
    public function getMinimumNumberOfLogos();

    /**
     * @return int
     */
    public function getMaximumNumberOfLogos();

    /**
     * @return bool
     */
    public function isFreeEntryNumberOfLogos();

    /**
     * @return int|null
     */
    public function getMinimumQuantity();

    /**
     * @return int|null
     */
    public function getMaximumQuantity();

    /**
     * @return bool
     */
    public function isIncludedInVariantPrices();

    /**
     * @return SupplierMarkingInterface|null
     */
    public function getSupplierMarking();

    /**
     * @return DynamicFixedPriceInterface[]
     */
    public function getDynamicFixedPrices();

    /**
     * @return DynamicVariablePriceHolderInterface[]
     */
    public function getDynamicVariablePriceHolders();

    /**
     * @return StaticFixedPriceInterface[]
     */
    public function getStaticFixedPrices();

    /**
     * @return StaticVariablePriceHolderInterface[]
     */
    public function getStaticVariablePriceHolders();
}
