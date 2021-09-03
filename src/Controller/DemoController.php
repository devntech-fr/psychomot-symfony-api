<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route(path="/", name="home", methods={"GET"})
     */
    public function home()
    {
        return new Response("Home page", Response::HTTP_OK, []);
    }

    /**
     * @Route(path="/demo", name="demo", methods={"GET"})
     */
    public function demo()
    {
        return new Response("Demo page", Response::HTTP_OK, []);
    }

    /**
     * @Route(path="/json-demo", name="json_demo", methods={"GET"})
     */
    public function jsonDemo()
    {
        // create event to serialize data before sending response
        return new JsonResponse(['page_title' => "Json Demo"], Response::HTTP_OK, []);
    }
}
