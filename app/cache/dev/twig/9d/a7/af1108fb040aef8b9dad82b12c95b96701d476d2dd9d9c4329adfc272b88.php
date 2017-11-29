<?php

/* FreelancerBundle:Transactions:TransactionsFreelancer.html.twig */
class __TwigTemplate_9da7af1108fb040aef8b9dad82b12c95b96701d476d2dd9d9c4329adfc272b88 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<center>
<br><br>
<h1 style=\"color: #3c8dbc;\">Liste des transactions Freelancer</h1><br>
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
        // line 14
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_searchTransactionByFreelancer");
        echo "\" method=\"post\">
    Email Jobowner: 
     <select name=\"email\">
                <option value=\"tous\">Tous les emails</option>
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEmailJobowner"]) ? $context["listEmailJobowner"] : $this->getContext($context, "listEmailJobowner")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 19
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
        // line 21
        echo "     </select>&nbsp;
    De : 
    <input type=\"date\" name=\"date1\" required/>&nbsp;
    à : 
    <input type=\"date\" name=\"date2\" required/>&nbsp;
    <input type=\"hidden\" name=\"idf\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["idf"]) ? $context["idf"] : $this->getContext($context, "idf")), "html", null, true);
        echo "\"/>&nbsp;
    <input type=\"submit\" value=\"Rechercher\"/>&nbsp;
    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_listTransactionByFreelancer");
        echo "\">Montrer tous les transactions</a>
</form><br><br><br>

";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["listTransactionByfreelancer"]) ? $context["listTransactionByfreelancer"] : $this->getContext($context, "listTransactionByfreelancer"))) > 0)) {
            // line 32
            echo "    
<table border=1>
    
<tr>
        <th align=\"center\">Nom de jobowner</th>
        <th align=\"center\">Prénom de jobowner</th>
        <th align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email de jobowner</th>
        <th align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</th>
        <th align=\"center\">Montant</th>
</tr>  


    ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listTransactionByfreelancer"]) ? $context["listTransactionByfreelancer"] : $this->getContext($context, "listTransactionByfreelancer")));
            foreach ($context['_seq'] as $context["_key"] => $context["lfp"]) {
                // line 45
                echo "        
        
<tr>
        
        <td align=\"center\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "nom", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "prenom", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "email", array()), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lfp"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
        <td align=\"center\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["lfp"], "montant", array()), "html", null, true);
                echo "</td>
</tr>   


    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lfp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    
    
</table>
    <br>
    <div class=\"navigation\">
    ";
            // line 63
            echo $this->env->getExtension('knp_pagination')->render((isset($context["listTransactionByfreelancer"]) ? $context["listTransactionByfreelancer"] : $this->getContext($context, "listTransactionByfreelancer")));
            echo "
</div>
    ";
        }
        // line 66
        echo "    
   ";
        // line 67
        if (((isset($context["listTransactionByfreelancer"]) ? $context["listTransactionByfreelancer"] : $this->getContext($context, "listTransactionByfreelancer")) == null)) {
            // line 68
            echo "      <h1 style=\"color: #3c8dbc;\">Pas de transactions :( </h1>  
   ";
        }
        // line 70
        echo "
</center>
 ";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Transactions:TransactionsFreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 70,  175 => 68,  173 => 67,  170 => 66,  164 => 63,  157 => 58,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  124 => 45,  120 => 44,  106 => 32,  104 => 31,  98 => 28,  93 => 26,  86 => 21,  75 => 19,  71 => 18,  64 => 14,  57 => 9,  48 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
