<?php

namespace LoadBalancer\Algorithms;

use LoadBalancer\Request;

/**
 * Interface LoadBalancerAlgorithm
 */
interface LoadBalancerAlgorithm
{
    /**
     * @param array $hosts
     * @param Request $request
     */
    public function loadBalance(array $hosts, Request $request) : void;
}