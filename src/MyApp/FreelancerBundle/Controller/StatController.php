<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FreelancerBundle\Entity\Projets;
use FreelancerBundle\Form\ProjetsType;

use Symfony\Component\HttpFoundation\Session\Session;
use MyApp\FreelancerBundle\Entity\Feedbacksuivi;
use MyApp\FreelancerBundle\Entity\Feedbacks;
use Ob\HighchartsBundle\Highcharts\Highchart;

class StatController extends Controller {

    public function StatAction() {

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Feedback Scores');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT AVG(p.score) as Score,AVG(p.utilisateurId) as freelancer FROM FreelancerBundle:Feedbacks p')
                                 ->setMaxResults(4);
        
        $resultat = $query->getResult();
       
        foreach ($resultat as $values)
        {    $data = array(floatval($values['freelancer']),floatval($values['Score']));
            $a = array($values['freelancer'],floatval($values['Score']));
            array_push($data, $a);
            
            
        }
        
        $ob->series(array(array('type' => 'pie', 'name' => 'Score', 'data' => $data)));
        return $this->render('FreelancerBundle:Stat:Stat.html.twig', array(
            'chart' => $ob
        ));
    }

}
