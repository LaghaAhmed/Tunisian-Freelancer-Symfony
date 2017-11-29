<?php

/* FreelancerBundle:Stat:Stat.html.twig */
class __TwigTemplate_ba72107683e90305aad85dce40907c7b948c01837104c4a472a5e414109ea0cf extends Twig_Template
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
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    ";
        // line 9
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Stat:Stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
