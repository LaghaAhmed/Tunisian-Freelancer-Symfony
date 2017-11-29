<?php

/* FreelancerBundle:Mail:new.html.twig */
class __TwigTemplate_92eebb54223ad12654764bcd3632141ec8c754dd6a1423a2fabb518e3afe4f65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FreelancerBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'mail' => array($this, 'block_mail'),
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

    // line 2
    public function block_mail($context, array $blocks = array())
    {
        // line 3
        echo " <h2> <strong> Formulaire De Contact</strong> </h2>
 <hr>
 <h3><p> Contacter nous </p></h3>
 <p>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
 <hr>

 <form role=\"form\" id=\"fr\" method=\"POST\"
action='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_freelancer_mail_sendpage");
        echo "' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
 ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 <input type=\"submit\"/>
 </form>
 <div> ";
        // line 14
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Mail:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 11,  51 => 10,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
