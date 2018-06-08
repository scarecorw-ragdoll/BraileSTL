<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 17:09
 */

namespace AppBundle\Controller\STLGenerator;
use AppBundle\Controller\STLGenerator\Vertex;

class Base
{
    public $vertices = array();

    public function add(Vertex $v){
        array_push($this->vertices, $v);
    }
}