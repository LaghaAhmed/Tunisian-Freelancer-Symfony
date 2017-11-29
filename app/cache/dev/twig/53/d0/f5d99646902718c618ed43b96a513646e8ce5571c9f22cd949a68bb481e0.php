<?php

/* FreelancerBundle:Mail:mail.html.twig */
class __TwigTemplate_53d0f5d99646902718c618ed43b96a513646e8ce5571c9f22cd949a68bb481e0 extends Twig_Template
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
        echo "    
    <h3>Votre demande a été envoyée avec succès</h3>
 
 <div> ";
        // line 6
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Mail:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
