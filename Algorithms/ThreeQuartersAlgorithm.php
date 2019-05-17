<?php

namespace LoadBalancer\Algorithms;

require_once 'LoadBalancerAlgorithm.php';

use LoadBalancer\Host;
use LoadBalancer\Request;

/**
 * Class ThreeQuartersAlgorithm
 */
class ThreeQuartersAlgorithm implements LoadBalancerAlgorithm
{
    const PASS_VALUE = 0.25;
    const MAX_VALUE = 100;

    /**
     * @param array $hosts
     * @param Request $request
     */
    public function loadBalance(array $hosts, Request $request) : void
    {
        /** @var Host $hostToBalance */
        $hostToBalance = $this->getHostToBalance($hosts);
        $hostToBalance->handleRequest($request);
    }

    /**
     * @param float $loadValue
     * @param array $hosts
     * @return Host
     */
    private function getHostToBalance(array $hosts) : Host
    {
        $minimumLoadValue = self::MAX_VALUE;

        /** @var Host $host */
        foreach ($hosts as $host) {
            $loadValue = $host->getLoad();

            if ($loadValue < self::PASS_VALUE) {
                return $host;
            } elseif ($loadValue <= $minimumLoadValue) {
                $minimumLoadValue = $loadValue;
                $leastLoadedHost = $host;
            }
        }

        return $leastLoadedHost;
    }
}