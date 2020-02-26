<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CookiesOrders;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class CookiesOrdersController extends AbstractController
{
    /**
    * @Route("/cookies/orders",methods={"GET"})
    */
    public function index()
    {
        return new Response('To save an order in the database use POST method with a message as a parameter');
    }

    /**
     * @Route("/cookies/orders", name="cookies_orders",methods={"POST"})
     */
    public function createCookiesOrders(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createOrder(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $date = new \DateTime('@'.strtotime('now'));
        $order = new CookiesOrders();
        $order->setTimestamp($date);

        // tell Doctrine you want to (eventually) save the Order (no queries yet)
        $entityManager->persist($order);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new order with id '.$order->getId());
    }
}
