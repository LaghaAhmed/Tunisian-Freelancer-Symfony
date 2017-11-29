<?php

/* JobownerBundle:Projets:listmp.html.twig */
class __TwigTemplate_5b537a4ad35509515bda988fa502b1a2a948b5beca9cd7fb500f4fa6ecce0393 extends Twig_Template
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
        echo "    <div class=\"row\">
        
        <div class=\"col-md-3 col-sm-4\">
            <!-- BOXES are complex enough to move the .box-header around.
                      This is an example of having the box header within the box body -->
            <div class=\"box-header\">
                <i class=\"fa fa-inbox\"></i>
                <h3 class=\"box-title\">Projet</h3>
            </div>
            <!-- compose message btn -->
            <a class=\"btn btn-block btn-primary\" data-toggle=\"modal\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("my_app_mail1");
        echo "\"><i class=\"fa fa-pencil\"></i> Compose Message</a>
            <!-- Navigation - folders-->
            <div style=\"margin-top: 15px;\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"header\">Folders</li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("freelance_AddProjets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajout d'un projet</a></li>
                    <li    class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Pjob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de mes projets</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Projets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de tous les projets</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("Freelance_Projet_encours");
        echo "\"><i class=\"fa fa-star\"></i> Liste des projets en cours</a></li>
                </ul>
            </div>
        </div><!-- /.col (LEFT) -->

        
        
        <div class=\"col-md-9\" align=\"center\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                        <h1>Liste des Projets non validé</h1>

                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
                            <th>titre</th>
                            <th>description</th>
                            <th>username</th>
                                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 39
            echo "                                <tr>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "username", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Freelance_supp_Pjob", array("id" => $this->getAttribute($context["modele"], "projetId", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Freelance_up_Pjob", array("id" => $this->getAttribute($context["modele"], "projetId", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Freelance_find_Pjob", array("id" => $this->getAttribute($context["modele"], "projetId", array()))), "html", null, true);
            echo "\">Valider</a></td>
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
        return "JobownerBundle:Projets:listmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  95 => 39,  91 => 38,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
