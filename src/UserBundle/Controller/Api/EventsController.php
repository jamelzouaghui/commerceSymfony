<?php

/* Copyright (C) 2016 OUICARE, All Rights Reserved.
 * Web site : www.ouicare.net
 *
 *  __       .  __  __   __  __
 * /  \ |  | | /   /  | |   |__|
 * \__/ |__| | \__ \__| |   |__
 *
 *
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * This file can not be copied and/or distributed without the express permission of OUICARE
 *
 * @author Mohamed Amine <Mohamed.ABBADI@ouicare.net>, 28/06/2016
 */

namespace UserBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use UserBundle\Entity\Events;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Admin Controller
 * @author zouaghui jamel
 */
class EventsController extends Controller {

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get the list of all events",
     *     section="events"
     * )
     *
     * @Route("/api/events",name="list_events")
     * @Method({"GET"})
     */
    public function listEvents() {

        $events = $this->getDoctrine()->getRepository('UserBundle:Events')->findAll();
        $response = $this->getEventsAsArray($events);
        return new JsonResponse($response, 200);
    }
    
    
    
    
    
    
    

    public function getEventsAsArray($events) {
        $response = array();
        foreach ($events as $event) {
            if ($event->getNom()) {
                $nom = $event->getNom();
            } else {
                $nom = '';
            }
            if ($event->getContent()) {
                $content = $event->getContent();
            } else {
                $content = '';
            }

            $response[] = array('id' => $event->getId(), 'nom' => $nom, 'content' => $content, 'createdBy' => $event->getUser()->getfirstName());
        }
        return $response;
    }
    
     /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get the list of all events interessant",
     *     section="events"
     * )
     *
     * @Route("/api/events/interssed/{id}",name="list_events_interessed")
     * @Method({"GET"})
     */
    public function listEventsInteressed($id) {

        $events = $this->getDoctrine()->getRepository('UserBundle:Events')->find($id);
      
        $response = $this->getEventsInteressedAsArray($events->getUsers());
        return new JsonResponse($response, 200);
    }
    
     public function getEventsInteressedAsArray($events) {
        $response = array();
        foreach ($events as $event) {
            if ($event->getFirstname()) {
                $firstname = $event->getFirstname();
            } else {
                $firstname = '';
            }
            if ($event->getLastname()) {
                $lastname = $event->getLastname();
            } else {
                $lastname = '';
            }
            
            if ($event->getEmail()) {
                $email = $event->getEmail();
            } else {
                $email = '';
            }

            $response[] = array('id' => $event->getId(), 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email);
        }
        return $response;
    }

    /**
     * @ApiDoc(
     * description="Create a new user",
     *
     *    statusCodes = {
     *        201 = "Creation with success",
     *        400 = "invalid form"
     *    },
     *    responseMap={
     *         201 = {"class"=User::class},
     *
     *    },
     *     section="users"
     *
     *
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @Route("/api/events/addnewevents",name="new_events")
     * @Method({"POST"})
     */
    public function createEvents(Request $request) {
        $data = $request->getContent();

        $em = $this->getDoctrine()->getManager();

        $entity = $this->get('jms_serializer')->deserialize($data, 'UserBundle\Entity\Events', 'json');

        $em->persist($entity);
        $entity->setUser($this->getUser());
        $em->flush();
        $response = array(
            'code' => 0,
            'message' => 'EVENTS created!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }

    /**
     * @ApiDoc(
     * description="Edit a  contact",
     *
     *    statusCodes = {
     *        201 = "update with success",
     *        400 = "invalid form"
     *    },
     *    responseMap={
     *         201 = {"class"=Contact::class},
     *
     *    },
     *     section="contacts"
     *
     *
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @Route("/api/events/update/{id}",name="update_contact")
     * @Method({"PUT"})
     */
    public function updateEvents(Request $request, $id) {


        $em = $this->getDoctrine()->getManager();


        $entity = $em->getRepository('UserBundle:Events')->find($id);
        $data = $request->getContent();
        $params = json_decode($data, TRUE);
        $nom = $params['nom'];
        $content = $params["content"];
        $entity->setNom($nom);
        $entity->setContent($content);


        $em->flush();
        $response = array(
            'code' => 0,
            'message' => 'EVENTS updated!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="delete the event by id",
     *     section="events"
     * )
     *
     * @Route("/api/events/deleteevents/{id}",name="delete_event")
     * @Method({"DELETE"})
     */
    public function DeleteEvent(Request $request, $id) {

        $event = $this->getDoctrine()->getRepository('UserBundle:Events')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();


        $response = "ok";

        return new JsonResponse($response, 200);
    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="interesed  the event by id",
     *     section="events"
     * )
     *
     * @Route("/api/events/interessant/{id}",name="event_interesed")
     * @Method({"POST"})
     */
    public function eventinteresed(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $userConnected = $this->getUser();
        $events = $this->getDoctrine()->getRepository('UserBundle:Events')->find($id);
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($userConnected);
        $user->addEvent($events);
        $em->persist($user);

        $em->flush();

        $response = array(
            'code' => 0,
            'message' => 'events inetrssant!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, 200);
    }

}
