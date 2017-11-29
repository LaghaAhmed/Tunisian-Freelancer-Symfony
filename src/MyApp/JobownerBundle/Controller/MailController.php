<?php

namespace MyApp\JobownerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MailController extends Controller {
    
  public function indexAction() {
            return $this->render('JobownerBundle:Default:new.html.twig', array());
        }
    
     public function sendMailAction() { 
        $Request = $this->get('request');

        if ($Request->getMethod() == 'POST') { 
	$Subject=$Request->get("Subject");
	$email=$Request->get("email");
	$message=$Request->get("message");

	$mailer=  $this->container->get('mailer');
	$transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('kasdaghli.ghassen@gmail.com')
                    ->setPassword('aa000000') ;
	$mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test')
		    ->setSubject($Subject) 
                    ->setFrom('kasdaghli.ghassen@gmail.com') 
                    ->setTo($email) 
                    ->setBody($message); 
	$this->get('mailer')->send($message);
        } 
       return $this->render('JobownerBundle:Default:new.html.twig');
    } 
    
    
    public function envoyerAction() { 
        $Request = $this->get('request');

        if ($Request->getMethod() == 'POST') { 
	$Subject=$Request->get("Subject");
	$email=$Request->get("email");
	$message=$Request->get("message");
        $password=$Request->get("password");
	$username=$Request->get("username");

	$mailer=  $this->container->get('mailer');
	$transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername($username)
                    ->setPassword($password) ;
	$mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test')
		    ->setSubject($Subject) 
                    ->setFrom($username) 
                    ->setTo($email) 
                    ->setBody($message); 
	$this->get('mailer')->send($message);
        
                $em = $this->getDoctrine()->getEntityManager();
        $modeles = $em->getRepository('JobownerBundle:Projetsuivi')->findAll();
        
        
        } 
       return $this->render('JobownerBundle:Projets:projetencours.html.twig',array(
                'modeles'=>$modeles
        ));
    } 
    
    
        public function envoyer2Action() { 
        $Request = $this->get('request');

        if ($Request->getMethod() == 'POST') { 
	$Subject=$Request->get("Subject");
	$email=$Request->get("email");
	$message=$Request->get("message");
        $password=$Request->get("password");
	$username=$Request->get("username");

	$mailer=  $this->container->get('mailer');
	$transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername($username)
                    ->setPassword($password) ;
	$mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test')
		    ->setSubject($Subject) 
                    ->setFrom($username) 
                    ->setTo($email) 
                    ->setBody($message); 
	$this->get('mailer')->send($message);
        } 
       return $this->render('JobownerBundle:Default:envoyer.html.twig');
    } 
}

