<?php

namespace ZanimauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ZanimauxBundle\Entity\User;
use ZanimauxBundle\Form\UserType;

class RefugeController extends Controller
{
    public function refugeAction()
    {
        return $this->render('ZanimauxBundle:Refuge:refuge.html.twig', array(
            // ...
        ));
    }
    public function profilAction(){
        return $this->render('ZanimauxBundle:Refuge:profil.html.twig', array(
            // ...
        ));

    }
    public function updateAction( Request $request){
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository(User::class)->find($this->getUser());

        $form = $this->createForm(UserType::class,$users);

        $users->setNom($request->request->get('nom'));
        $users->setPrenom($request->request->get('prenom'));
        $users->setTelephone($request->request->get('telephone'));
        $users->setAdresse($request->request->get('adresse'));
        $users->setVille($request->request->get('ville'));
        $users->setCodePostale($request->request->get('codepostale'));
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $users = $form->getData();
            $em->persist($users);
            $em->flush();
            return $this->redirectToRoute('refuge');

        }
        return $this->render('ZanimauxBundle:Refuge:update.html.twig', array('form' => $form->createView(),)
        );
    }

}
