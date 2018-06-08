<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 17:40
 */

namespace AppBundle\Controller\STLGenerator;


class InputParam
{
    public $rectX;
    public $rectY;
    public $circR;
    public $rectH;
    public $circH;

    public $circle = array();

    public function set($filepath)
    {

        $content = file_get_contents($filepath);
        $con = explode('/', $content);
        $tp = explode(' ', $con[0]);
        $this->rectX = $tp[0];
        $this->rectY = $tp[1];
        $this->rectH = $tp[2];
        $this->circH = $tp[3];
        $this->circR = $tp[4];
        for ($i = 1; $i < count($con)-1; $i++) {
            $pos = explode(' ', $con[$i]);
            array_push($this->circle, array('x' => $pos[0], 'y' => $pos[1]));
        }

    }

    public function toString()
    {
        $result = $this->RectX . " " . $this->RectY . " " . $this->RectH . " " . $this->CircH . " " . $this->CircR . PHP_EOL;
        for ($i = 0; $i < count($this->circle); $i++) {
            $result = $result . $this->circle[$i]['x'] . " " . $this->circle[$i]['y'] . PHP_EOL;
        }
        return $result;
    }

}