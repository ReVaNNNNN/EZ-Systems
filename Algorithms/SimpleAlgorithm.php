<?php

namespace LoadBalancer\Algorithms;

require_once 'LoadBalancerAlgorithm.php';

use LoadBalancer\Host;
use LoadBalancer\Request;

/**
 * Class SimpleAlgorithm
 */
class SimpleAlgorithm implements LoadBalancerAlgorithm
{
    /**
     * @param array $hosts
     * @param Request $request
     */
    public function loadBalance(array $hosts, Request $request) : void
    {
        /** @var Host $host */
        foreach ($hosts as $host) {
            $host->handleRequest($request);
        }
    }

}