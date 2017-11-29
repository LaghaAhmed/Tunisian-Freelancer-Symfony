<?php

/* JobownerBundle::layoutJobowner.html.twig */
class __TwigTemplate_74bbb8b67a95120d310b3e1b4a0b95c0a62d8c0041ac46108465fb094d1d1472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>

        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "
    <body class=\"skin-blue\">
        <div class=\"wrapper\">

            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"#\" class=\"logo\"><b>Tunisian</b>Freelancer</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a>
                                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>

                                    ";
        // line 70
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 71
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                    </a>    </li>
                                <li class=\"dropdown messages-menu\">
                                    <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a>


                                </li>




                            ";
        } else {
            // line 85
            echo "
                                <!-- Commentaire   afsa --> 
                            ";
        }
        // line 88
        echo "



                            </span>



                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->

                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">MAIN NAVIGATION</li>
                        <li class=\"treeview\">
                            <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("Freelance_Affichage_Projets");
        echo "\">
                                <i class=\"fa fa-files-o\"></i>
                                <span>Projets</span>
                                <span class=\"label label-primary pull-right\">4</span>
                            </a>
                        </li>
                        <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_listTransactionByJobowner");
        echo "\"><i class=\"fa fa-circle-o\"></i>Panneau de paiement</a></li>
                        <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("tunisian_freelancer_parametreJobowner");
        echo "\"><i class=\"fa fa-circle-o\"></i>Paramétre de compte</a></li>
                        <li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "\"><i class=\"fa fa-circle-o\"></i> CONTACT</a></li>

                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">

                </section>

                <!-- Main content -->
                <section class=\"content\">
                    ";
        // line 134
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2014-2015 BLITZ Studio.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src=\"http://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
        <!-- Morris.js charts -->
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Slimscroll -->
        <script src=\"plugins/slimScroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
        <!-- FastClick -->
        <script src='";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "            <meta charset=\"UTF-8\">
            <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            ";
        // line 10
        $this->displayBlock('links', $context, $blocks);
        // line 35
        echo "            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->
        </head>

    ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "TunisianFreelancer";
    }

    // line 10
    public function block_links($context, array $blocks = array())
    {
        // line 11
        echo "                <!-- Bootstrap 3.3.2 -->
                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
                <!-- FontAwesome 4.3.0 -->
                <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Ionicons 2.0.0 -->
                <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />    
                <!-- Theme style -->
                <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- AdminLTE Skins. Choose a skin from the css/skins 
                     folder instead of downloading all of them to reduce the load. -->
                <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- iCheck -->
                <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Morris chart -->
                <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- jvectormap -->
                <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Date Picker -->
                <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Daterange picker -->
                <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- bootstrap wysihtml5 - text editor -->
                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
    }

    // line 134
    public function block_content($context, array $blocks = array())
    {
        // line 135
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "JobownerBundle::layoutJobowner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 135,  344 => 134,  338 => 33,  333 => 31,  328 => 29,  323 => 27,  318 => 25,  313 => 23,  308 => 21,  302 => 18,  293 => 12,  290 => 11,  287 => 10,  281 => 8,  269 => 35,  267 => 10,  262 => 8,  259 => 7,  256 => 6,  248 => 185,  242 => 182,  236 => 179,  231 => 177,  224 => 173,  219 => 171,  214 => 169,  209 => 167,  204 => 165,  199 => 163,  195 => 162,  190 => 160,  185 => 158,  179 => 155,  168 => 147,  155 => 136,  153 => 134,  133 => 117,  129 => 116,  125 => 115,  116 => 109,  93 => 88,  88 => 85,  75 => 75,  71 => 74,  64 => 71,  62 => 70,  57 => 68,  31 => 44,  29 => 6,  23 => 2,);
    }
}
