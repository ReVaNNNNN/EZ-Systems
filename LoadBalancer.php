<?php

namespace LoadBalancer;

use LoadBalancer\Algorithms\LoadBalancerAlgorithm;

/**
 * Class LoadBalancer
 * @property array $hosts
 * @property LoadBalancerAlgorithm $algorithm
 */
class LoadBalancer
{
    private $hosts;
    private $algorithm;

    /**
     * LoadBalancer constructor.
     * @param array $hosts
     * @param LoadBalancerAlgorithm $algorithm
     */
    public function __construct(array $hosts, LoadBalancerAlgorithm $algorithm)
    {
        $this->hosts = $hosts;
        $this->algorithm = $algorithm;
    }

    /**
     * @param Request $request
     */
    public function handleRequest(Request $request) : void
    {
        $this->algorithm->loadBalance($this->hosts, $request);
    }
}