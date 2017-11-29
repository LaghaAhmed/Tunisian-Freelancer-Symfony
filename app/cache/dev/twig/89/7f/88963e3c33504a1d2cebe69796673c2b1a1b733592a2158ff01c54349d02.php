<?php

/* FreelancerBundle:Map:index.html.twig */
class __TwigTemplate_897f88963e3c33504a1d2cebe69796673c2b1a1b733592a2158ff01c54349d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FreelancerBundle:Map:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreelancerBundle:Map:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <input id=\"lat\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "\"/>
    <input id=\"long\" type=\"hidden\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["langitude"]) ? $context["langitude"] : $this->getContext($context, "langitude")), "html", null, true);
        echo "\"/>
    <div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Map:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
