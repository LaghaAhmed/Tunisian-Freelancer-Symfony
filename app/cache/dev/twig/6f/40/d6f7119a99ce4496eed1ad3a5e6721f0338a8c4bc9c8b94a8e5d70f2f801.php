<?php

/* JobownerBundle:Projets:listp.html.twig */
class __TwigTemplate_6f40d6f7119a99ce4496eed1ad3a5e6721f0338a8c4bc9c8b94a8e5d70f2f801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("JobownerBundle::layoutJobowner.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JobownerBundle::layoutJobowner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo " 
    <div class=\"row\">
        
        
        <div class=\"col-md-3 col-sm-4\">
            <!-- BOXES are complex enough to move the .box-header around.
                      This is an example of having the box header within the box body -->
            <div class=\"box-header\">
                <i class=\"fa fa-inbox\"></i>
                <h3 class=\"box-title\">Projet</h3>
            </div>
            <!-- compose message btn -->
            <a class=\"btn btn-block btn-primary\" data-toggle=\"modal\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("my_app_mail1");
        echo "\"><i class=\"fa fa-pencil\"></i> Compose Message</a>
            <!-- Navigation - folders-->
            <div style=\"margin-top: 15px;\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"header\">Folders</li>
                    <li ><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("freelance_AddProjets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajout d'un projet</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Pjob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de mes projets</a></li>
                    <li ><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Projets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de tous les projets</a></li>
                    <li ><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("Freelance_Projet_encours");
        echo "\"><i class=\"fa fa-star\"></i> Liste des projets en cours</a></li>
                </ul>
            </div>
        </div><!-- /.col (LEFT) -->

        
        
        
       <div class=\"col-md-9\" align=\"center\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                       <h1>Affecter un freelancer</h1>
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <th>ID</th>
                            <th>Freelance</th>
                                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 40
            echo "                                <tr>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "freelancer", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "jobowner", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "projetId", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Freelance_supprimer_projet", array("id" => $this->getAttribute($context["modele"], "projetId", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Freelance_ajout_Pjob", array("id" => $this->getAttribute($context["modele"], "projetId", array()), "freelancer" => $this->getAttribute($context["modele"], "freelancer", array()), "jobowner" => $this->getAttribute($context["modele"], "jobowner", array()))), "html", null, true);
            echo "\">affecter</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JobownerBundle:Projets:listp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  96 => 40,  92 => 39,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  53 => 15,  39 => 3,  36 => 2,  11 => 1,);
    }
}
