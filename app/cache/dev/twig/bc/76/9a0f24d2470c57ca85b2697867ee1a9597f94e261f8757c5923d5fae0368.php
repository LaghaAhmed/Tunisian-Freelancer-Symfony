<?php

/* FreelancerBundle:Utilisateurs:ParametreJobOwner.html.twig */
class __TwigTemplate_bc769a0f24d2470c57ca85b2697867ee1a9597f94e261f8757c5923d5fae0368 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<center>
<br><br>
<h1 style=\"color: #3c8dbc;\">Modifier votre profile</h1>
<br><br>
 ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobowner"]) ? $context["jobowner"] : $this->getContext($context, "jobowner")));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            echo "  
<form action=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("freelancer_update");
            echo "\" method=\"post\">
    <input type=\"hidden\" name=\"id\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "id", array()), "html", null, true);
            echo "\"/>
    <table> 
    <tr>
    <td>Nom de jobowner:</td>
    <td><input type=\"text\" name=\"nom\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "nom", array()), "html", null, true);
            echo "\" required/><br></td> 
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
    <td>Prénom de jobowner:</td>
    <td><input type=\"text\" name=\"prenom\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "prenom", array()), "html", null, true);
            echo "\" required/><br></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
    <td>Age de jobowner:</td>
    <td><input type=\"number\" name=\"age\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "age", array()), "html", null, true);
            echo "\" required/><br></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
    <td>Adresse de jobowner:</td>
    <td><input type=\"text\" name=\"adresse\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "adresse", array()), "html", null, true);
            echo "\" required/><br></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
    <td>Email de freelancer:</td>
    <td><input type=\"text\" name=\"email\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "email", array()), "html", null, true);
            echo "\" required/><br></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    </table>
    </br>
    <input type=\"submit\" value=\"Modifier votre profile\"/>
</form>
</center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Utilisateurs:ParametreJobOwner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  107 => 51,  92 => 39,  77 => 27,  62 => 15,  55 => 11,  51 => 10,  45 => 9,  39 => 5,  36 => 4,  11 => 1,);
    }
}
