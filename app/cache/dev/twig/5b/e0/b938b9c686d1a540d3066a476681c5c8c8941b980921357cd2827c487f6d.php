<?php

/* JobownerBundle:Projets:add.html.twig */
class __TwigTemplate_5be0b938b9c686d1a540d3066a476681c5c8c8941b980921357cd2827c487f6d extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
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
        // line 14
        echo $this->env->getExtension('routing')->getPath("my_app_mail1");
        echo "\"><i class=\"fa fa-pencil\"></i> Compose Message</a>
            <!-- Navigation - folders-->
            <div style=\"margin-top: 15px;\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"header\">Folders</li>
                    <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("freelance_AddProjets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajout d'un projet</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Pjob");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de mes projets</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Projets");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de tous les projets</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("Freelance_Projet_encours");
        echo "\"><i class=\"fa fa-star\"></i> Liste des projets en cours</a></li>
                </ul>
            </div>
        </div><!-- /.col (LEFT) -->
        
       <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"box-body table-responsive no-padding\">
                        <h1>Ajout d'un Projet</h1>
                        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "JobownerBundle:Projets:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  50 => 14,  39 => 5,  36 => 4,  11 => 1,);
    }
}
