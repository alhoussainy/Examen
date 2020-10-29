<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function Home(HttpClientInterface $httpClient): Response
    {


//        $_h = curl_init();
//        curl_setopt($_h, CURLOPT_HEADER, 1);
//        curl_setopt($_h, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($_h, CURLOPT_HTTPGET, 1);
//        curl_setopt($_h, CURLOPT_URL, 'https://www.iqair.com/v2/countries?key=aa5fda0d-89cc-48d2-85fe-2f6fb9363de3' );
//        curl_setopt($_h, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
//        curl_setopt($_h, CURLOPT_DNS_CACHE_TIMEOUT, 2 );
//      var_dump(curl_exec($_h));


//        $curl = curl_init();
//
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "{{urlExternalAPI}}v2/France?key={{aa5fda0d-89cc-48d2-85fe-2f6fb9363de3}}",
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "GET",
//        ));
//
//        $response = curl_exec($curl);
//
//          return dump($response);
       // ad569508ef064f59b67364fea2dcee28

        $api= $httpClient->request("GET","https://api.weatherbit.io/v2.0/current/airquality?lat=35.7721&lon=-78.63861&key=ad569508ef064f59b67364fea2dcee28");

//        return $this->render('home/index.html.twig', [
//              'api'=>$api
//        ]);
    }

}
