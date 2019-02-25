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
use UserBundle\Entity\User;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Admin Controller
 * @author zouaghui jamel
 */
class UserController extends Controller {

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get the list of all users",
     *     section="users"
     * )
     *
     * @Route("/api/users",name="list_users")
     * @Method({"GET"})
     */
    public function listUsers() {

        $users = $this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('role' => 1));

        if (!count($users)) {
            $response = array(
                'code' => 1,
                'message' => 'No users found!',
                'errors' => null,
                'result' => null
            );


            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }


        $data = $this->get('jms_serializer')->serialize($users, 'json');

        $response = json_decode($data);

        return new JsonResponse($response, 200);
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
     * @Route("/api/users/addnew",name="new_user")
     * @Method({"POST"})
     */
    public function createUser(Request $request) {
        $data = $request->getContent();

        $em = $this->getDoctrine()->getManager();
        $entity = $this->get('jms_serializer')->deserialize($data, 'UserBundle\Entity\User', 'json');
 $pass = $entity->getPassword();
        $encoder = $this->get('security.password_encoder');
        $password = $encoder->encodePassword($entity, $entity->getPassword());
        $entity->setPassword($password);
        $username = $entity->getEmail();
        $entity->setEnabled('1');
        $entity->setRole('1');
        $entity->setUsername($username);
         $entity->setUsernameCanonical($username);
        $entity->setStatus('0');

        $em->persist($entity);
        $em->flush();
        
        
        $message = (new \Swift_Message(' Email'))
        ->setFrom('jamel.arya@gmail.com')
        ->setTo($entity->getEmail())
        ->setBody(
            $this->renderView(
                'Emails/email.html.twig',
                ['username' => $username,'password' => $pass]
            ),
            'text/html'
        );
        $this->get('mailer')->send($message);
        $response = array(
            'code' => 0,
            'message' => 'User created!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get the user by username",
     *     section="users"
     * )
     *
     * @Route("/api/user/{username}",name="show_user_connected")
     * @Method({"GET"})
     */
    public function showUserByUsername(Request $request, $username) {

        $user = $this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('username' => $username));

        if (!count($user)) {
            $response = array(
                'code' => 1,
                'message' => 'No user connected found!',
                'errors' => null,
                'result' => null
            );


            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }


        $data = $this->get('jms_serializer')->serialize($user, 'json');

        $response = json_decode($data);

        return new JsonResponse($response, 200);
    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="delete the user by id",
     *     section="events"
     * )
     *
     * @Route("/api/user/deleteuser/{id}",name="delete_user")
     * @Method({"DELETE"})
     */
    public function DeleteUser(Request $request, $id) {

        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();


        $response = "ok";

        return new JsonResponse($response, 200);
    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="update the user by username",
     *     section="users"
     * )
     *
     * @Route("/api/users/updateuser/{id}",name="update_user")
     * @Method({"UPDATE"})
     */
    public function UpdateUser(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();
          $data = $request->getContent();
         $params = json_decode($data, TRUE);
       
       
        $entity = $em->getRepository('UserBundle:User')->find($id);
        $firstname = $params['firstname'];
        $lastname = $params["lastname"];
        $phone = $params["phone"];
        $email = $params["email"];
        $password = $params["password"];
        $encoder = $this->get('security.password_encoder');
        $passwordc = $encoder->encodePassword($entity, $password);
        
        
        $entity->setFirstname($firstname);
        $entity->setLastname($lastname);
        $entity->setPhone($phone);
        $entity->setEmail($email);
        $entity->setLastname($lastname);
        $entity->setPassword($passwordc);
        
        $em->flush();
        $response = array(
            'code' => 0,
            'message' => 'user updated!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }

}
