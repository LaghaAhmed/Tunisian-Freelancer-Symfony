<?php

namespace MyApp\FreelancerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FreelancerBundle\Entity\Projets;
use MyApp\FreelancerBundle\Form\ProjetsType;

use Symfony\Component\HttpFoundation\Session\Session;

use Ob\HighchartsBundle\Highcharts\Highchart;

class StatPController extends Controller {

    public function StatistiqueAction() {

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Suivie du projet');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT AVG(p.nombreFreelancer) as Nbre,AVG(p.etat) as Etat FROM FreelancerBundle:Projets p')
                                 ->setMaxResults(4);
        
        $resultat = $query->getResult();
        foreach ($resultat as $values)
        {        $data = array(floatval($values['Etat']),floatval($values['Nbre']));

            $a = array(floatval($values['Etat']),floatval($values['Nbre']));
            array_push($data, $a);
            
            
        }
        
        $ob->series(array(array('type' => 'pie', 'name' => 'Projets', 'data' => $data)));
        return $this->render('FreelancerBundle:Stat:StatProj.html.twig', array(
            'chart' => $ob
        ));
    }

}
