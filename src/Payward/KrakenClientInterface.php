<?php

declare(strict_types = 1);

namespace Payward;

use Payward\Exception\RuntimeException;

interface KrakenClientInterface
{
    /**
     * Query public methods.
     *
     * @param string $method  method name
     * @param array  $request request parameters
     *
     * @throws RuntimeException
     *
     * @return array request result on success
     */
    public function QueryPublic($method, array $request = []);

    /**
     * Query private methods.
     *
     * @param string $method  method path
     * @param array  $request request parameters
     *
     * @throws RuntimeException
     *
     * @return array request result on success
     */
    public function QueryPrivate($method, array $request = []);
}
