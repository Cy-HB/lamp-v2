<?php

namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{

    /**
     * @var EventRepository
     */
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }


    /**
     * @Route("/event", name="events")
     */
    public function events(): Response
    {

        $events = $this->eventRepository->findAll();

        return $this->render('event/events.html.twig', [
            'events' => $events,
        ]);
    }

    /**
     * @Route("/", name="event")
     */
    public function home(): Response
    {
        return $this->render('event/home.html.twig', [
        ]);
    }
}
