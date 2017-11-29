<?php

/* FreelancerBundle:Stat:StatProj.html.twig */
class __TwigTemplate_d3f8d40cae6c0052b8977faaf7a3e39f21ef3c6c284c753b70ec74a9c036f6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" 

type=\"text/javascript\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    ";
        // line 8
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Stat:StatProj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
