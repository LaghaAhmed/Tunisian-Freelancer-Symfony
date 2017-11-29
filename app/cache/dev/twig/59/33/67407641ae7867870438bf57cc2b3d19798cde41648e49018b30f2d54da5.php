<?php

/* JobownerBundle:Transactions:TransactionsJobOwner.html.twig */
class __TwigTemplate_593367407641ae7867870438bf57cc2b3d19798cde41648e49018b30f2d54da5 extends Twig_Template
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
        echo "<center>
<br><br>
<h1 style=\"color: #3c8dbc;\">Panneau du paiement Jobowner</h1><br>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "<h3>Votre montant : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "montant", array()), "html", null, true);
            echo " jetons</h3>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<br><br>

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_addTransactionByJobowner");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"idp\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["idp"]) ? $context["idp"] : $this->getContext($context, "idp")), "html", null, true);
        echo "\"/>
    Email Freelancer: &nbsp;
    <input type=\"text\" name=\"email\" required/>&nbsp;
    Montant :&nbsp;
    <input type=\"number\" name=\"montant\" required min=\"1\"/>&nbsp;
    Date :&nbsp;
     <input type=\"date\" name=\"date\" required/>&nbsp;
    <input type=\"submit\" value=\"payer un freelancer\"/><p style=\"color: red;\"><p>
</form>
<br><br>


<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_searchTransactionByJobowner");
        echo "\" method=\"post\">
  Email Freelancer: &nbsp;
     <select name=\"email\">
                <option value=\"tous\">Tous les emails</option>
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEmailFreelancer"]) ? $context["listEmailFreelancer"] : $this->getContext($context, "listEmailFreelancer")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 29
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "     </select>&nbsp;
    De : &nbsp;
    <input type=\"date\" name=\"date1\" required/>&nbsp;
    à : &nbsp;
    <input type=\"date\" name=\"date2\" required/>&nbsp;
    <input type=\"hidden\" name=\"idp\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["idp"]) ? $context["idp"] : $this->getContext($context, "idp")), "html", null, true);
        echo "\"/>&nbsp;
    <input type=\"submit\" value=\"Rechercher\"/>&nbsp;
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_listTransactionByJobowner");
        echo "\">Montrer tous les transactions</a>
    
</form><br>

";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["listTransactionByjobOwner"]) ? $context["listTransactionByjobOwner"] : $this->getContext($context, "listTransactionByjobOwner"))) > 0)) {
            // line 43
            echo "    
<div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"box-body table-responsive no-padding\">
                        <table class=\"table table-hover\">
    
<tr>
        <th></th>
        <th align=\"center\">Nom de freelancer</th>
        <th align=\"center\">Prénom de freelancer</th>
        <th align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email de freelancer</th>
        <th align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</th>
        <th align=\"center\">Montant</th>
        <th></th>
</tr>  


    ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listTransactionByjobOwner"]) ? $context["listTransactionByjobOwner"] : $this->getContext($context, "listTransactionByjobOwner")));
            foreach ($context['_seq'] as $context["_key"] => $context["lfp"]) {
                // line 63
                echo "        
        
<tr>
        <td align=\"center\"><a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tunisian_freelancer_deleteTransactionByJobowner", array("idt" => $this->getAttribute($context["lfp"], "transactionId", array()), "idp" => (isset($context["idp"]) ? $context["idp"] : $this->getContext($context, "idp")))), "html", null, true);
                echo "\">Supprimer</a></td>
        <td align=\"center\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "nom", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "prenom", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "email", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lfp"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "montant", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">
        <form action=\"";
                // line 73
                echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_updateTransactionByJobowner");
                echo "\" method=\"post\"><br>
        &nbsp;&nbsp;Date: 
        <input type=\"date\" name=\"date\" required/>&nbsp;
        <input type=\"hidden\" name=\"idtransaction\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "transactionId", array()), "html", null, true);
                echo "\"/>&nbsp;
        <input type=\"hidden\" name=\"idp\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["idp"]) ? $context["idp"] : $this->getContext($context, "idp")), "html", null, true);
                echo "\"/>&nbsp;
        <input type=\"submit\" value=\"Modifier le date\"/>&nbsp;&nbsp;
        </form><br>
        </td>
</tr>   


    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lfp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    
    
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"navigation\">
    ";
            // line 95
            echo $this->env->getExtension('knp_pagination')->render((isset($context["listTransactionByjobOwner"]) ? $context["listTransactionByjobOwner"] : $this->getContext($context, "listTransactionByjobOwner")));
            echo "
    </div>
    
    ";
        }
        // line 99
        echo "    
   ";
        // line 100
        if (((isset($context["listTransactionByjobOwner"]) ? $context["listTransactionByjobOwner"] : $this->getContext($context, "listTransactionByjobOwner")) == null)) {
            // line 101
            echo "      <h1 style=\"color: #3c8dbc;\">Pas de transactions :( </h1>  
   ";
        }
        // line 103
        echo "   
   
</center>
   ";
    }

    public function getTemplateName()
    {
        return "JobownerBundle:Transactions:TransactionsJobOwner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 103,  226 => 101,  224 => 100,  221 => 99,  214 => 95,  202 => 85,  188 => 77,  184 => 76,  178 => 73,  173 => 71,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  153 => 66,  148 => 63,  144 => 62,  123 => 43,  121 => 42,  114 => 38,  109 => 36,  102 => 31,  91 => 29,  87 => 28,  80 => 24,  65 => 12,  61 => 11,  57 => 9,  48 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
