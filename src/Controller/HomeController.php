<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index/index.html.twig', [
            'background' => '/assets/images/facade.png',
            'icon1' => 'assets/images/quality.png',
            'icon2' => 'assets/images/fast.png',
            'icon3' => 'assets/images/euro-price-tag.png',
            'img1' => 'assets/images/f1.png',
            'img2' => 'assets/images/f2.png'
        ]);
    }

    /**
     * @Route("/vitrerie", name="vitrerie")
     */
    public function vitrerie()
    {
        return $this->render('home/vitrerie/index.html.twig');
    }

    /**
     * @Route("/ouvertures", name="ouvertures")
     */
    public function ouvertures()
    {
        return $this->render('home/index/index.html.twig', [
            'background' => '/assets/images/facade.png',
            'icon1' => 'assets/images/quality.png',
            'icon2' => 'assets/images/fast.png',
            'icon3' => 'assets/images/euro-price-tag.png',
            'img1' => 'assets/images/f1.png',
            'img2' => 'assets/images/f2.png'
        ]);
    }
}
