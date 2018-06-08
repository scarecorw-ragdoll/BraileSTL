<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.06.18
 * Time: 16:52
 */

namespace AppBundle\Controller\STLGenerator;

use AppBundle\Controller\STLGenerator\Vertex;
use AppBundle\Controller\STLGenerator\Facet;
use AppBundle\Controller\STLGenerator\Base;
use AppBundle\Controller\STLGenerator\InputParam;

class STLGenerator
{
    private $pi = 3.14159265;

    public function buildGlif($name, $filepath)
    {
        $in = new InputParam();
        $in->set($filepath . '/' . $name . '.txt');

        $fullRad = 360;
        $countVer = 20;
        $radio = $in->circR;

        $verticesRectDown = array();
        $verticesRectUp = array();

        $rectX = $in->rectX;
        $rectY = $in->rectY;

        array_push($verticesRectDown, (new Vertex())->set(0, 0, 0));
        array_push($verticesRectDown, (new Vertex())->set($rectX, 0, 0));
        array_push($verticesRectDown, (new Vertex())->set($rectX, $rectY, 0));
        array_push($verticesRectDown, (new Vertex())->set(0, $rectY, 0));

        array_push($verticesRectUp, (new Vertex())->set(0, 0, 10));
        array_push($verticesRectUp, (new Vertex())->set($rectX, 0, 10));
        array_push($verticesRectUp, (new Vertex())->set($rectX, $rectY, 10));
        array_push($verticesRectUp, (new Vertex())->set(0, $rectY, 10));


        $circlesDown = array();
        $circlesUp = array();

        $angleStep = $fullRad / $countVer;
        $h = 15;
        for ($i = 0; $i < count($in->circle); $i++) {
            $baseUp = new Base();
            $baseDown = new Base();
            $circle = $in->circle[$i];
            for ($angle = 0; $angle <= $fullRad; $angle += $angleStep) {
                $baseDown->add((new Vertex())->set(0 + $circle['x'] + $radio * cos($angle * $this->pi / 180), $rectY - $circle['y'] + $radio * sin($angle * $this->pi / 180), 10));
                $baseUp->add((new Vertex())->set(0 + $circle['x'] + $radio * cos($angle * $this->pi / 180), $rectY - $circle['y'] + $radio * sin($angle * $this->pi / 180), $h));
            }
            array_push($circlesDown, $baseDown);
            array_push($circlesUp, $baseUp);

            $facetCircles = array();

            for ($z = 0; $z < count($circlesDown); $z++) {
                $facets = array();
                for ($indexDown = 0; $indexDown < $countVer; $indexDown++) {
                    array_push($facets, (new Facet())->set($circlesDown[$z]->vertices[$indexDown], $circlesDown[$z]->vertices[$indexDown + 1], $circlesUp[$z]->vertices[$indexDown]));
                }

                for ($indexUp = $countVer; $indexUp > 0; $indexUp--) {
                    array_push($facets, (new Facet())->set($circlesUp[$z]->vertices[$indexUp], $circlesUp[$z]->vertices[$indexUp - 1], $circlesDown[$z]->vertices[$indexUp]));
                }

                for ($index = 0; $index < $countVer - 2; $index++) {
                    array_push($facets, (new Facet())->set($circlesDown[$z]->vertices[0], $circlesDown[$z]->vertices[$index + 1], $circlesDown[$z]->vertices[$index + 2]));
                    array_push($facets, (new Facet())->set($circlesUp[$z]->vertices[0], $circlesUp[$z]->vertices[$index + 1], $circlesUp[$z]->vertices[$index + 2]));
                }

                array_push($facetCircles, $facets);
            }

            $rectFacets = array();

            for ($indexDown = 0; $indexDown < count($verticesRectDown) - 1; $indexDown++) {
                array_push($rectFacets, (new Facet())->set($verticesRectDown[$indexDown], $verticesRectDown[$indexDown + 1], $verticesRectUp[$indexDown]));
            }

            for ($indexUp = count($verticesRectUp) - 1; $indexUp > 0; $indexUp--) {
                array_push($rectFacets, (new Facet())->set($verticesRectUp[$indexUp], $verticesRectUp[$indexUp - 1], $verticesRectDown[$indexUp]));
            }

            array_push($rectFacets, (new Facet())->set($verticesRectUp[0], $verticesRectUp[3], $verticesRectDown[3]));
            array_push($rectFacets, (new Facet())->set($verticesRectUp[0], $verticesRectDown[0], $verticesRectDown[3]));
            array_push($rectFacets, (new Facet())->set($verticesRectUp[0], $verticesRectUp[3], $verticesRectUp[1]));
            array_push($rectFacets, (new Facet())->set($verticesRectUp[2], $verticesRectUp[1], $verticesRectUp[3]));
            array_push($rectFacets, (new Facet())->set($verticesRectDown[0], $verticesRectDown[3], $verticesRectDown[1]));
            array_push($rectFacets, (new Facet())->set($verticesRectDown[2], $verticesRectDown[1], $verticesRectDown[3]));

            $stl = '';

//        fstream out;
//	out . open("out.stl");

            $stl = $stl . "solid OpenSCAD_Model" . PHP_EOL;
            for ($v = 0; $v < count($facetCircles); $v++) {
                for ($index = 0; $index < count($facetCircles[$v]); $index++) {
                    $stl = $stl . "  facet normal ";
                    $stl = $stl . $facetCircles[$v][$index]->N->toString() . PHP_EOL;
                    $stl = $stl . "    outer loop" . PHP_EOL;
                    $stl = $stl . "      vertex ";
                    $stl = $stl . $facetCircles[$v][$index]->A->toString() . PHP_EOL;
                    $stl = $stl . "      vertex ";
                    $stl = $stl . $facetCircles[$v][$index]->B->toString() . PHP_EOL;
                    $stl = $stl . "      vertex ";
                    $stl = $stl . $facetCircles[$v][$index]->C->toString() . PHP_EOL;
                    $stl = $stl . "    endloop\n";
                    $stl = $stl . "  endfacet\n";
                }
            }
            for ($v = 0; $v < count($rectFacets); $v++) {
                $stl = $stl . "  facet normal ";
                $stl = $stl . $rectFacets[$v]->N->toString() . PHP_EOL;
                $stl = $stl . "    outer loop\n";
                $stl = $stl . "      vertex ";
                $stl = $stl . $rectFacets[$v]->A->toString() . PHP_EOL;
                $stl = $stl . "      vertex ";
                $stl = $stl . $rectFacets[$v]->B->toString() . PHP_EOL;
                $stl = $stl . "      vertex ";
                $stl = $stl . $rectFacets[$v]->C->toString() . PHP_EOL;
                $stl = $stl . "    endloop\n";
                $stl = $stl . "  endfacet\n";
            }

            $stl = $stl . "endsolid OpenSCAD_Model";

            $fileSTL = $filepath . '/' . $name . '.stl';
            $fpSTL = fopen($fileSTL, "w");
            fwrite($fpSTL, $stl);
            fclose($fpSTL);

        }
    }
}