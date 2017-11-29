<?php

/* NomayaSocialBundle:Buttons:socialButtons.html.twig */
class __TwigTemplate_37b6b82ec25a832721cd7a10b0c66e9232e91e0e3b89d0f81817733e9535f88d extends Twig_Template
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
        if ( !((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false)) {
            // line 2
            echo "    <span class=\"button facebookButton col-xs-2 col-xs-offset-1\">
      ";
            // line 3
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 6
        echo "
";
        // line 7
        if ( !((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false)) {
            // line 8
            echo "    <span class=\"button googleplus col-xs-2\">
      ";
            // line 9
            echo $this->env->getExtension('nomaya_social_bar')->getGoogleplusButton((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 12
        echo "
";
        // line 13
        if ( !((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false)) {
            // line 14
            echo "    <span class=\"button twitterButton col-xs-2\">
      ";
            // line 15
            echo $this->env->getExtension('nomaya_social_bar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 18
        echo "
";
        // line 19
        if ( !((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")) === false)) {
            // line 20
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 21
            echo $this->env->getExtension('nomaya_social_bar')->getLinkedinButton((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 24
        echo "
";
        // line 25
        if ( !((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")) === false)) {
            // line 26
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 27
            echo $this->env->getExtension('nomaya_social_bar')->getPinterestButton((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")));
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:socialButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  77 => 26,  75 => 25,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  38 => 9,  35 => 8,  33 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
