<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 11:28
 */

namespace AppBundle\Controller\BraileConvertor;
use ArrayObject;
use Symfony\Component\Config\Definition\Exception\Exception;

class BraileToken
{
    private $index;
    private $symbol;
    private $circlesPositions;

    public function set($symbol, $symbolpath){
        $this->index = 0;
        $this->symbol = mb_strtolower($symbol, 'utf8');
        $this->circlesPositions = array();

            $symbol = @file_get_contents($symbolpath . '/' . $this->symbol . '.txt');
            if($symbol === FALSE) $symbol = @file_get_contents($symbolpath . '/~.txt');
        if ($symbol) {
            $pos = explode(PHP_EOL,$symbol);
            foreach ($pos as $p){
                $xy = explode(';', $p);
                $circPos = new CirclesPosition();
                $circPos->set($xy[0], $xy[1]);
                array_push($this->circlesPositions, $circPos);
            }
        }
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function getCirclesPositions()
    {
        return $this->circlesPositions;
    }

    /*private void getParams() {
        ConfigReader configReader = new ConfigReader();
        try {
            configReader.getConfig(System.getProperty("user.dir") + "\\config\\token.cfg");
            this.circleRadio = configReader.getParamByName("circle_radio");
            this.circlesRatio = configReader.getParamByName("circles_ratio");
            this.widthRatio = configReader.getParamByName("width_ratio");
            this.heigthRatio = configReader.getParamByName("heigth_ratio");
        } catch (IOException e) {
            System.err.println(e.getMessage());
        }
    }*/


}

class CirclesPosition
{

    private $xPosition;
    private $yPosition;


    public function set($xPosition, $yPosition){
        $this->xPosition = $xPosition;
        $this->yPosition = $yPosition;
    }


    public function getXPosition()
    {
        return $this->xPosition;
    }

    public function getYPosition()
    {
        return $this->yPosition;
    }
}