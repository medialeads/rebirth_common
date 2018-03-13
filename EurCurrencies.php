<?php

namespace ES\RebirthCommon;

use Money\Currencies;
use Money\Currency;
use Money\Exception\UnknownCurrencyException;

final class EurCurrencies implements Currencies
{
    /**
     * @var string
     */
    const CODE = 'EUR';

    /**
     * @param Currency $currency
     *
     * @return bool
     */
    public function contains(Currency $currency)
    {
        return self::CODE === $currency->getCode();
    }

    /**
     * @param Currency $currency
     *
     * @return int
     */
    public function subunitFor(Currency $currency)
    {
        if (self::CODE !== $currency->getCode()) {
            throw new UnknownCurrencyException();
        }

        return 3;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(array(
            new Currency(self::CODE)
        ));
    }
}
