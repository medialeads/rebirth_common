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
     * @var string
     */
    const KEYS = 'cles';

    /**
     * @var string
     */
    const MARKINGS_COUNT = 'nb_marquages';

    /**
     * @return float|string|null
     */
    public function getLength();

    /**
     * @return float|string|null
     */
    public function getWidth();

    /**
     * @return float|string|null
     */
    public function getSquaredSize();

    /**
     * @return float|string|null
     */
    public function getDiameter();

    /**
     * @return int|null
     */
    public function getNumberOfColors();

    /**
     * @return int|null
     */
    public function getNumberOfPositions();

    /**
     * @return int|null
     */
    public function getNumberOfLogos();

    /**
     * @return bool
     */
    public function isFullColor();
}
