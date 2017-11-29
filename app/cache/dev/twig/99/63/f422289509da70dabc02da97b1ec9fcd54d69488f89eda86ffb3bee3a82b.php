<?php

/* JobownerBundle:Default:envoyer.html.twig */
class __TwigTemplate_9963f422289509da70dabc02da97b1ec9fcd54d69488f89eda86ffb3bee3a82b extends Twig_Template
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
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Composer un nouveau message</h3>
                    <div class=\"box-body table-responsive no-padding\">
                        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("my_app_mail1");
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
    </div>

";
    }

    public function getTemplateName()
    {
        return "JobownerBundle:Default:envoyer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}
