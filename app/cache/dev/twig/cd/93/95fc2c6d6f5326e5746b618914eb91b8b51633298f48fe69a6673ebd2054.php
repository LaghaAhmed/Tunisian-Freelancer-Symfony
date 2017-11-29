<?php

/* JobownerBundle:Projets:projetencours.html.twig */
class __TwigTemplate_cd9395fc2c6d6f5326e5746b618914eb91b8b51633298f48fe69a6673ebd2054 extends Twig_Template
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("my_app_mail1");
        echo "\"><i class=\"fa fa-pencil\"></i> Compose Message</a>
            <!-- Navigation - folders-->
            <div style=\"margin-top: 15px;\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"header\">Folders</li>
                    <li ><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("freelance_AddProjets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajout d'un projet</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Pjob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de mes projets</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Projets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de tous les projets</a></li>
                    <li class=\"active\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Freelance_Projet_encours");
        echo "\"><i class=\"fa fa-star\"></i> Liste des projets en cours</a></li>
                </ul>
            </div>
        </div><!-- /.col (LEFT) -->

















        <div class=\"col-md-9\" align=\"center\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h1>Liste des projets en cours</h1>
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <th>Freelance</th>
                            <th>Jobowner</th>
                            <th>Id_Projet</th>
                                ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 58
            echo "                                <tr>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "freelancer", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "jobowner", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "projetId", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class=\"col-md-9\" align=\"center\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Composer un nouveau message</h3>
                        <div class=\"box-body table-responsive no-padding\">
                            <form action=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("my_app_mail");
        echo "\" method=\"POST\" >
                                </br>
                                <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"from:\"/></br>
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password:\"/></br>                            
                                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"To:\"/></br>
                                <input type=\"text\" name=\"Subject\" class=\"form-control\" placeholder=\"Subject:\"/></br>


                                </br>
                                <div class=\"form-group\">
                                    <textarea type=\"text\" name=\"message\" id=\"compose-textarea\" class=\"form-control\" style=\"height: 300px\"></textarea>
                                </div>

                                <input type=\"submit\" name=\"send\" class=\"btn\"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JobownerBundle:Projets:projetencours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 75,  134 => 64,  125 => 61,  121 => 60,  117 => 59,  114 => 58,  110 => 57,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  57 => 19,  39 => 3,  36 => 2,  11 => 1,);
    }
}
