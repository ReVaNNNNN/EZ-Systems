<?php

namespace LoadBalancer;

require_once 'Host.php';
require_once 'LoadBalancer.php';
require_once 'Request.php';
require_once 'Algorithms/ThreeQuartersAlgorithm.php';
require_once 'Algorithms/SimpleAlgorithm.php';

use LoadBalancer\Algorithms\SimpleAlgorithm;
use LoadBalancer\Algorithms\ThreeQuartersAlgorithm;

$hosts = [
     new Host('Great service'),
     new Host('Amazing service'),
     new Host('Awesome service'),
];

echo 'Simple Algorithm:<br><br>';

$simpleAlgorithm = new SimpleAlgorithm();

$loadBalancer1 = new LoadBalancer($hosts, $simpleAlgorithm);
$request1 = new Request();
$loadBalancer1->handleRequest($request1);


//*****************************************

echo 'ThreeQuarter Algorithm: <br><br>';
$ThreeQuarterAlgorithm = new ThreeQuartersAlgorithm();

$loadBalancer2 = new LoadBalancer($hosts, $ThreeQuarterAlgorithm);
$request2 = new Request();
$loadBalancer2->handleRequest($request2);
