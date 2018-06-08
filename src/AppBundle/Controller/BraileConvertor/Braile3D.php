<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 0:01
 */

namespace AppBundle\Controller\BraileConvertor;

use AppBundle\Controller\BraileConvertor\BraileTable;
use AppBundle\Controller\BraileConvertor\BraileLine;
use AppBundle\Controller\BraileConvertor\BraileToken;


class Braile3D
{
    private $filepath;
    private $text;
    private $symbolpath;
    private $name;

    private $linesCount;
    private $circleRadio;
    private $circlesRatio;
    private $widthRatio;
    private $heigthRatio;
    private $rh;
    private $ch;

    public function set($filepath, $text, $symbolpath, $name, $line, $rh, $cr, $ch)
    {
        $this->text = $text;
        $this->filepath = $filepath;
        $this->symbolpath = $symbolpath;
        $this->name = $name;

        $this->linesCount = $line;
        $this->circleRadio = $cr;
        $this->circlesRatio = 25;
        $this->widthRatio = 30;
        $this->heigthRatio = 40;
        $this->rh = $rh;
        $this->ch = $ch;


    }

    public function generateSVG()
    {
        $fileSVG = $this->filepath . '/' . $this->name . '.svg';
        $fpSVG = fopen($fileSVG, "w");
        $fileOUT = $this->filepath . '/' . $this->name . '.txt';
        $fpOUT = fopen($fileOUT, "w");

        $brailleTable = new BraileTable();
        $rest = $this->linesCount - mb_strlen($this->text,'utf8') % $this->linesCount;
        if ($rest!= $this->linesCount)
            for ($i = 0; $i < $rest; $i++) $this->text = $this->text . '~';

        $symbols = $this->str_split_utf8($this->text);
        for ($tableIndex = 0; $tableIndex < mb_strlen($this->text,'utf8'); $tableIndex += $this->linesCount) {
            $brailleLine = new BraileLine();
            for($idx = $tableIndex;$idx < $tableIndex+$this->linesCount; $idx++){
                $token = new BraileToken();
                $token->set($symbols[$idx], $this->symbolpath);
                $brailleLine->add($token);
            }
            $brailleTable->add($brailleLine);
        }

        $currentVerticalPos = 100;
        $currentHorizontalPos = 100;

        $tokenIndex = 0;
        $lineIndex = 0;

        $brailleTableParams = (67*$this->linesCount)." ".(107*count($brailleTable->getBraileLines()))." ".$this->rh." ".$this->ch." ".$this->circleRadio.'/';

        $svg = '<?xml version="1.0" standalone="no"?>'.PHP_EOL.
            '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"'.PHP_EOL.
            '"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">'.PHP_EOL.
            '<svg width="30cm" height="40cm" viewBox="0 0 '.strval(67*$this->linesCount).' '.strval(107*count($brailleTable->getBraileLines())).'"'.PHP_EOL.
            'xmlns="http://www.w3.org/2000/svg" version="1.1">'.PHP_EOL.
            '<desc>Example circle01 - circle filled with red and stroked with blue</desc>'.PHP_EOL.'null';

        foreach ($brailleTable->getBraileLines() as $line) {
            $tokenIndex = 0;
            foreach ($line->getBraileTokens() as $token) {
                $svg = $svg . "<rect " .
                    "x=\"".$this->getRX($tokenIndex)."\" ".
                    "y=\"".$this->getRY($lineIndex)."\" ".
                    "width=\"".($this->widthRatio + 1 * $this->circleRadio + $this->circlesRatio)."\" ".
                    "height=\"".($this->heigthRatio + 2 * $this->circleRadio + 2 * $this->circlesRatio)."\" ".
                    "style=\"fill:none;stroke:black;stroke-width:5\" />";
                for ($circleIndex = 0; $circleIndex < count($token->getCirclesPositions()); $circleIndex++){
                    $cx = $this->getCX($tokenIndex, $token->getCirclesPositions()[$circleIndex]->getXPosition());
                    $cy = $this->getCY($lineIndex, $token->getCirclesPositions()[$circleIndex]->getYPosition());
                    $brailleTableParams = $brailleTableParams.$cx." ".$cy.'/';
                    $svg = $svg.$cx." ".$cy."/";
                    $svg = $svg."<circle ".
                        "cx=\"".$cx."\" ".
                        "cy=\"".$cy."\" ".
                        "r=\"".$this->circleRadio."\" ".
                        "stroke=\"black\" ".
                        "stroke-width=\"1\" ".
                        "fill=\"black\" /> ";
                }
                $currentHorizontalPos += $this->widthRatio;
                $tokenIndex += 1;
            }
            $lineIndex += 1;
            $currentVerticalPos += $this->heigthRatio;
        }

        fwrite($fpSVG, $svg.PHP_EOL.'</svg>');
        fclose($fpSVG);
        fwrite($fpOUT, $brailleTableParams);
        fclose($fpOUT);
    }

    private function getCX($tokenIndex, $circleX)
    {
        return $this->widthRatio / 2 + $tokenIndex * ($this->widthRatio + 2 * $this->circleRadio + $this->circlesRatio) + ($circleX - 1) * ($this->circlesRatio + $this->circleRadio);
    }

    private function getCY($lineIndex, $circleY)
    {

        return $this->heigthRatio / 2 + $lineIndex * ($this->heigthRatio + 3 * $this->circleRadio + 2 * $this->circlesRatio) + ($circleY - 1) * ($this->circlesRatio + $this->circleRadio);
    }

    private function getRX($tokenIndex)
    {
        return $tokenIndex * ($this->widthRatio + 2 * $this->circleRadio + $this->circlesRatio);
    }

    private function getRY($lineIndex)
    {
        return $lineIndex * ($this->heigthRatio + 3 * $this->circleRadio + 2 * $this->circlesRatio);
    }

    function str_split_utf8($str) {
        $split = 1;
        $array = array();
        for ($i=0; $i < strlen($str); ){
            $value = ord($str[$i]);
            if($value > 127){
                if ($value >= 192 && $value <= 223)      $split = 2;
                elseif ($value >= 224 && $value <= 239)  $split = 3;
                elseif ($value >= 240 && $value <= 247)  $split = 4;
            } else $split = 1;
            $key = NULL;
            for ( $j = 0; $j < $split; $j++, $i++ ) $key .= $str[$i];
            array_push( $array, $key );
        }
        return $array;
    }
}