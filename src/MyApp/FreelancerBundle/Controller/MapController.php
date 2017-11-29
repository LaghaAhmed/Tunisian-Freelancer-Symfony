<?php
namespace MyApp\FreelancerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MapController extends Controller{
    public function indexAction(){
        $latitude='36.81881';
        $langitude='10.165960000000041';
        return $this->render('FreelancerBundle:Map:index.html.twig', array('latitude' => $latitude , 'langitude' => $langitude));
}}
