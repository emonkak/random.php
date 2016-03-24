<?php

namespace Emonkak\Random\Distribution;

use Emonkak\Random\Engine\AbstractEngine;

class ExponentialDistribution extends AbstractDistribution
{
    /**
     * @var float
     */
    private $lambda;

    /**
     * @param float $probability
     */
    public function __construct($lambda = 1.0)
    {
        assert($lambda > 0);

        $this->lambda = $lambda;
    }

    /**
     * @return float
     */
    public function getLambda()
    {
        return $this->lambda;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(AbstractEngine $engine)
    {
        return -1 / $this->lambda * log(1 - $engine->nextDouble());
    }
}
