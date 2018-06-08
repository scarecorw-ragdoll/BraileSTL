<?php

namespace AppBundle\Controller\STLGenerator;

use AppBundle\Controller\STLGenerator\Vertex;

class Facet
{
    public $A;
    public $B;
    public $C;
    public $N;

    public function set(Vertex $a, Vertex $b, Vertex $c)
    {
        $this->A = $a;
        $this->B = $b;
        $this->C = $c;

        $ba = $this->A->subs($this->B, $this->A);
        $ca = $this->C->subs($this->C, $this->A);

        $this->N = $this->A->mul($ba, $ca);

        $max = abs($this->N->x);
        if (abs($this->N->y) > $max) $max = abs($this->N->y);
        if (abs($this->N->z) > $max) $max = abs($this->N->z);
        if ($max != 0) {
            $N = new Vertex();
            $N->set($this->N->x / $max, $this->N->y / $max, $this->N->z / $max);
            $this->N = $N;
        }
        return $this;
    }
}