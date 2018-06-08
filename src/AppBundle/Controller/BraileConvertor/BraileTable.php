<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 11:28
 */

namespace AppBundle\Controller\BraileConvertor;

use AppBundle\Controller\BraileConvertor\BraileLine;


class BraileTable
{
    private $braileLines;

    public function __construct(){
        $this->braileLines = array();
    }

    public function add(BraileLine $line){
        array_push($this->braileLines, $line);
    }

    public function getBraileLines(){
        return $this->braileLines;
    }
}