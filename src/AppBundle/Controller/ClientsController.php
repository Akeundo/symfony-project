<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class ClientsController extends Controller
{

    private $client_data = [];

    private function callAPI($method, $url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        $result = json_decode($result);
        curl_close($curl);

        return $result->results;
    }

    /**
     * @Route("/guests", name="index_clients")
     */
    public function showIndex()
    {
        $data = [];

        $this->client_data = $this->callAPI("GET", "https://randomuser.me/api/?results=200");
        $data['clients'] = $this->client_data;

        return $this->render("clients/index.html.twig", $data);
        
    }

    /**
     * @Route("/guests/modify/{id_client}", name="modify_client")
     */
    public function showDetails(Request $request, $id_client)
    {

        $data = [];

        $this->client_data = $this->callAPI("GET", "https://randomuser.me/api/?results=200");
        $data['clients'] = $this->client_data;
        $client_data = $this->client_data[$id_client];

        $data['form'] = $client_data;

        return $this->render("clients/form.html.twig", $data);

    }

    /**
     * @Route("/guests/new", name="new_client")
     */
    public function showNew()
    {
        $data = [];

        $data['clients'] = $this->client_data;

        return $this->render("clients/form.html.twig", $data);
        
    }

}