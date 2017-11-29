<?php

/* FreelancerBundle:Projetv:affecter.html.twig */
class __TwigTemplate_1b7ca0f8c075b9d33b52d98d52fa91f58be271f22c3d9534260efecc03b5592c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("FreelancerBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'Body' => array($this, 'block_Body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreelancerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste des Projet</h1>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"box-body table-responsive no-padding\">
                        <h1>Vous etes sur ?? </h1>
                        <form method=\"POST\">
                            <input type=\"submit\" value=\"Valider\"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Projetv:affecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 2,);
    }
}
