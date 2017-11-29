<?php

/* FreelancerBundle:Projetsuivi:index.html.twig */
class __TwigTemplate_62b62abf79d6c02475ced528ca78cde7eb3da885fd8c563b768e1b55d613004c extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Projetsuivi list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Projetid</th>
                <th>Jobowner</th>
                <th>Freelancer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "projetid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "jobowner", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "freelancer", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
        
         <center>
            <div class=\"col-md-9\" align=\"center\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Composer un nouveau message</h3>
                        <div class=\"box-body table-responsive no-padding\">
                            <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("my_app_mailer");
        echo "\" method=\"POST\" >
                                </br>
                                <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"from:\"/></br>
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password:\"/></br>                            
                                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"To:\"/></br>
                                <input type=\"text\" name=\"Subject\" class=\"form-control\" placeholder=\"Subject:\"/></br>


                                </br>
                                <div class=\"form-group\">
                                    <textarea type=\"text\" name=\"message\" id=\"compose-textarea\" class=\"form-control\" style=\"height: 300px\"></textarea>
                                </div>

                                <input type=\"submit\" name=\"send\" class=\"btn\"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </center>

      
    ";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Projetsuivi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  77 => 23,  67 => 19,  63 => 18,  59 => 17,  56 => 16,  52 => 15,  39 => 4,  36 => 3,  11 => 1,);
    }
}
