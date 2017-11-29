<?php

namespace MyApp\FreelancerBundle\Controller;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FreelancerBundle\Entity\Mail;
use MyApp\FreelancerBundle\Form\MailType;

class MailController extends Controller
{ 
    public function indexAction()
    {
        return $this->render('FreelancerBundle:Mail:mail.html.twig', array());
    }
    
   public function sendMailAction() {
 $to = "medkhairi.chmengui@esprit.tn";
 $mail = new Mail();
 $request=$this->get('request');
 $form= $this->createForm(new MailType(), $mail);
 $form->handleRequest($request);

 if ($form->isValid()) {
 $message = Swift_Message::newInstance()
 ->setSubject($mail->getNom())
  ->setFrom($mail-> getFrom())
 ->setTo($to)
  ->setBody($mail->getText());
 $this->get('mailer')->send($message);
  return $this->render('FreelancerBundle:Mail:mail.html.twig'
  );
 }
 return $this->render('FreelancerBundle:Mail:mail.html.twig', array ('form'=>$form->createView()));
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
        $entities= $em->getRepository('FreelancerBundle:Projetsuivi')->findAll();
        
        
        } 
       return $this->render('FreelancerBundle:Projetsuivi:index.html.twig',array(
                'entities'=>$entities
        ));    } 
    
 
 public function newAction() {
$mail = new Mail();
$form= $this->container->get('form.factory')->create(new MailType(), $mail);
$request = $this->getRequest();
if ($request->getMethod() == 'POST') {
$form->bind($request);
if ($form->isValid()) {
$this->sendMailAction('medkhairi.chmengui@esprit.tn', $mail-> getFrom(), $mail->getNom(), $mail->getText());
}
}
return $this->render('FreelancerBundle:Mail:new.html.twig', array('form' => $form->createView())); }
}

