<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 11:28
 */

namespace AppBundle\Controller\BraileConvertor;

use AppBundle\Controller\BraileConvertor\BraileToken;


class BraileLine
{
    private $index;
    private $braileToken;

    public function __construct(){
        $this->index = 0;
        $this->braileToken = array();
    }

    public function getIndesx(){
        return $this->index;
    }

    public function add(BraileToken $token){
        $this->index+=1;
        array_push($this->braileToken, $token);
    }

    public function getBraileTokens(){
        return $this->braileToken;
    }

}