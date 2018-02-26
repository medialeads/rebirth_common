<?php

namespace ES\RebirthCommon;

interface VariantMarkingOptionsInterface
{
    /**
     * @var string
     */
    const LENGTH = 'longueur';

    /**
     * @var string
     */
    const WIDTH = 'largeur';

    /**
     * @var string
     */
    const SQUARED_SIZE = 'superficie';

    /**
     * @var string
     */
    const DIAMETER = 'diametre';

    /**
     * @var string
     */
    const NUMBER_OF_COLORS = 'nb_couleurs';

    /**
     * @var string
     */
    const NUMBER_OF_POSITIONS = 'nb_positions';

    /**
     * @var string
     */
    const NUMBER_OF_LOGOS = 'nb_logos';

    /**
     * @var string
     */
    const FULL_COLOR = 'quadrichromie';

    /**
     * @var string
     */
    const QUANTITY = 'quantite';

    /**
     * @return float|null
     */
    public function getLength();

    /**
     * @param float|null $length
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setLength($length);

    /**
     * @return float|null
     */
    public function getWidth();

    /**
     * @param float|null $width
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setWidth($width);

    /**
     * @return float|null
     */
    public function getSquaredSize();

    /**
     * @param float|null $squaredSize
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setSquaredSize($squaredSize);

    /**
     * @return float|null
     */
    public function getDiameter();

    /**
     * @param float|null $diameter
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setDiameter($diameter);

    /**
     * @return int|null
     */
    public function getNumberOfColors();

    /**
     * @param int|null $numberOfColors
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setNumberOfColors($numberOfColors);

    /**
     * @return int|null
     */
    public function getNumberOfPositions();

    /**
     * @param int|null $numberOfPositions
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setNumberOfPositions($numberOfPositions);

    /**
     * @return int|null
     */
    public function getNumberOfLogos();

    /**
     * @param int|null $numberOfLogos
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setNumberOfLogos($numberOfLogos);

    /**
     * @return bool
     */
    public function isFullColor();

    /**
     * @param bool $fullColor
     *
     * @return VariantMarkingOptionsInterface
     */
    public function setFullColor($fullColor);
}
