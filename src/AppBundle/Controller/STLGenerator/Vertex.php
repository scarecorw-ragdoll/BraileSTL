<?php
namespace AppBundle\Controller\STLGenerator;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 16:21
 */

class Vertex
{
    public $x;
    public $y;
    public $z;

    public function set($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        return $this;
    }

    public function toString()
    {
        return $this->x.' '.$this->y.' '.$this->z;
    }

    public function  subs(Vertex $first, Vertex $second){
        $ver = new Vertex();
        return $ver->set($first->x - $second->x,$first->y - $second->y, $first->z - $second->z);
    }

    public function mul(Vertex $first, Vertex $second){
        $ver = new Vertex();
        return $ver->set($first->y*$second->z - $first->z*$second->y,$first->z*$second->x - $first->x*$second->z, $first->x*$second->y - $first->y*$second->x);
    }
}