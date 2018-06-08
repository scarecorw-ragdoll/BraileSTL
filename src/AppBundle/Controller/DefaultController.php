<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\BraileConvertor\Braile3D;
use AppBundle\Controller\STLGenerator\STLGenerator;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $this->generateRandomString(10);
            $filepath = $this->getParameter('storage_dir');
            $symbolpath = $this->getParameter('symbols_dir');
            $braile = new Braile3D();
            $braile->set($filepath, $request->request->get('text'), $symbolpath, $name, $request->request->get('line'), $request->request->get('rh'),$request->request->get('cr'),$request->request->get('ch'));
            $braile->generateSVG();
            $stl = new STLGenerator();
            $stl->buildGlif($name, $filepath);
            return $this->redirectToRoute('download', array('uid'=>$name));
    }
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/{uid}", name="download")
     */
    public function donwloadAction($uid){
        return $this->render('default/download.html.twig', [
            'uid' => $uid,
        ]);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}