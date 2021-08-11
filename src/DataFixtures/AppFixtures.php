<?php

namespace App\DataFixtures;


use App\Entity\Event;

use App\Repository\EventRepository;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    /**
     * @var EventRepository
     */
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }

    public function load(ObjectManager $manager)
    {


        for ($i = 1; $i < 5; $i++) {
            $event = new Event();

            $event->setName('name');
            $event->setDate(new \DateTime());

            $manager->persist($event);
        }
        $manager->flush();
    }
}
