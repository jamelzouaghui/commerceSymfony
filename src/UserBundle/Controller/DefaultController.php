<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $securityContext = $this->container->get('security.token_storage');
        $userToken = $securityContext->getToken()->getUser();
        $auth_checker = $this->get('security.authorization_checker');


        if (!$auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {

            $request->getSession()->getFlashBag()->add('notice', array('alert' => 'error', 'title' => 'Erreur', 'message' => 'Vous devez vous connecter'));
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $role = 'admin';
        return $this->redirect($this->generateUrl('admin_accueil'));
    }

}
