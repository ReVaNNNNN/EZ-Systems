<?php

namespace LoadBalancer;

/**
 * Class Host
 * @property string $name
 */
class Host
{
    private $name;

    /**
     * Host constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getLoad() : float
    {
        return rand(1, 10) / 10;
    }

    /**
     * @param Request $request
     */
    public function handleRequest(Request $request) : void
    {
        // do some magic :)
        // echo $this->name . ': handled request.' . "<br>";
    }
}