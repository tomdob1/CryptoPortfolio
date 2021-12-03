<?php


namespace App\Controller;


use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="app_homepage")
     * @IsGranted("ROLE_USER")
     * deny access with is granted route
     * @throws \Exception
     */
    public function index(): Response
    {
        $client = new CoinGeckoClient();
        $data = $client->coins()->getMarkets('usd');

//        var_dump($data);die();
        return $this->render('portfolio/portfolio.html.twig', [
            'data' => $data
        ]);
    }
}