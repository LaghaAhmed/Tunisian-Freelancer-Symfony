<?php

/* JobownerBundle:Projets:recherche.html.twig */
class __TwigTemplate_eac754cf52f0e684c8c8f662fcbca3b3688444d92f9ec028cc48f3406dbcd2d5 extends Twig_Template
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
        echo "    <h1>Liste des projets en cours</h1>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"box-body table-responsive no-padding\">
                        <h1>Projet</h1>



                        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 14
            echo "
                            Titre : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "titre", array()), "html", null, true);
            echo "</br>
                            Description : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "description", array()), "html", null, true);
            echo "</br>
                            Username : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "username", array()), "html", null, true);
            echo "
                            ";
            // line 18
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return "JobownerBundle:Projets:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
