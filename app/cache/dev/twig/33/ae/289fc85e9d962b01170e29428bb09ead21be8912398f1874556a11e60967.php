<?php

/* FreelancerBundle::layout.html.twig */
class __TwigTemplate_33ae289fc85e9d962b01170e29428bb09ead21be8912398f1874556a11e60967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'chart' => array($this, 'block_chart'),
            'body' => array($this, 'block_body'),
            'nbreFreelancers' => array($this, 'block_nbreFreelancers'),
            'score' => array($this, 'block_score'),
            'amin' => array($this, 'block_amin'),
            'affichedet' => array($this, 'block_affichedet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    
        <meta charset=\"UTF-8\">
        <title>Tunisian freelancer</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Font Awesome Icons -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Ionicons -->
        <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Morris chart -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- jvectormap -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Daterange picker -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Theme style -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
   
       
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/kkcountdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
      ";
        // line 29
        $this->displayBlock('entete', $context, $blocks);
        // line 31
        echo "        <style class=\"custom-style\">
            .kkc-days{ font-size: 16px;color: #a8bf00; }
            .kkc-days-text{ box-shadow: #000 ; border-color: #000;font-size: 16px;color: #a8bf00;}
            .stars{
    width: 130px;
    height: 26px;
    background: url(http://sandbox.bumbu.ru/ui/external/stars.png) 0 0 repeat-x;
    position: relative;
}

.stars .rating{
    height: 26px;
    background: url(http://sandbox.bumbu.ru/ui/external/stars.png) 0 -26px repeat-x;
}

.stars input{
    display: none;
}

.stars label{
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    height: 26px;
    width: 130px;
    cursor: pointer;
}
.stars:hover label{
    display: block;
}
.stars label:hover{
    background: url(http://sandbox.bumbu.ru/ui/external/stars.png) 0 -52px repeat-x;
}

.stars label + input + label{width: 104px;}
.stars label + input + label + input + label{width: 78px;}
.stars label + input + label + input + label + input + label{width: 52px;}
.stars label + input + label + input + label + input + label + input + label{width: 26px;}

.stars input:checked + label{
    display: block;
    background: url(http://sandbox.bumbu.ru/ui/external/stars.png) 0 -52px repeat-x;
}

       </style>
    
    <body class=\"skin-blue\">
        <div class=\"wrapper\">

            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"\" class=\"logo\"><b>Tunisian </b>Freelancer</a>
                <!-- Header Navbar: style can be found in header.less -->
   <nav class=\"navbar navbar-static-top\">
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
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>

                                    ";
        // line 103
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 104
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                    </a>    </li>
                                <li class=\"dropdown messages-menu\">
                                    <a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                        ";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a>


                                </li>




                            ";
        } else {
            // line 118
            echo "
                                <!-- Commentaire   afsa --> 
                            ";
        }
        // line 121
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
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>Chalouati Mohamed Amine</p>

                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Welcome</li>
                        <li class=\"active treeview\">


                        </li>
                        
                        <li>
                            <!--<a href=\" path('projets')}}\">-->
                                <i class=\"fa fa-th\"></i> <span>Liste des projets</span> <small class=\"label pull-right bg-green\">new</small>
                            </a>
                        </li>
                        <li class=\"treeview\">
                           <!-- <a href=\" path('chart')}}\">-->
                                <i class=\"fa fa-pie-chart\"></i>
                                <span>Suivie des projets</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"\"<!-- path('chart')}}-->><i class=\"fa fa-circle-o\"></i> Suivie des Scores </a></li>
                                <li><a href=\"\"<!-- path('chart1')}}-->><i class=\"fa fa-circle-o\"></i> Suivie d'affectation des projets </a></li>
                            </ul>
                        </li>
                        
                        
                        
                       
                        
                        
                        
                        
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        Espace Freelancer
                        <small>Tunisian Freelancer</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Acceuil</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    <!-- Info boxes -->
                    <div class=\"row\">
                       

                        <!-- fix for small devices only -->
                        <div class=\"clearfix visible-sm-block\"></div>

                        
                       
                    </div><!-- /.row -->

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">     </h3>
                                    <div class=\"box-tools pull-right\">
                                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-box-tool dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-wrench\"></i></button>
                                            
                                        </div>
                                        <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-8\">
                                            <p class=\"text-center\">
                                                <strong> </strong>
                                            </p>
                                            <div class=\"chart-responsive\">
                                                <!-- Sales Chart Canvas -->
                                                
                                                    ";
        // line 243
        $this->displayBlock('chart', $context, $blocks);
        // line 244
        echo "                                               
                                            </div><!-- /.chart-responsive -->
                                        </div><!-- /.col -->
                                        
                                    </div><!-- /.row -->
                                </div><!-- ./box-body -->
                                <div class=\"\" >
                                    <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/freelance-web-developer.jpeg"), "html", null, true);
        echo "\"/>
                                    <div class=\"row\">
                                        
                                       
                                       
                                          
                                    </div><!-- /.row -->
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class=\"row\">
                        <!-- Left col -->
                        <div class=\"col-md-8\">
                            <!-- MAP & BOX PANE -->
                            <div class=\"box box-success\">
                               
                                ";
        // line 270
        $this->displayBlock('body', $context, $blocks);
        // line 272
        echo "                                
                                
                                <div class=\"box-body no-padding\">
                                    <div class=\"row\">
                                        <div class=\"col-md-9 col-sm-8\">
                                            <div class=\"pad\">
                                                <!-- Map will be created here -->
                                                <div id=\"world-map-markers\" style=\"height: 325px;\"></div>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class=\"col-md-3 col-sm-4\">
                                            
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col -->

                        <div class=\"col-md-4\">
                            <!-- Info Boxes Style 2 -->
                            <div class=\"info-box bg-yellow\">
                                <span class=\"info-box-icon\"><i class=\"ion ion-ios-pricetag-outline\"></i></span>
                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Freelancers</span>
                                    <span class=\"info-box-number\">
                                        ";
        // line 298
        $this->displayBlock('nbreFreelancers', $context, $blocks);
        // line 300
        echo "
                                    </span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" style=\"width: 50%\"></div>
                                    </div>
                                    <span class=\"progress-description\">

                                    </span>
                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                            <div class=\"info-box bg-green\">
                                <span class=\"info-box-icon\"><i class=\"ion ion-ios-heart-outline\"></i></span>
                                <div class=\"info-box-content\">
                                    <span class=\"info-box-text\">Feedbacks</span>
                                    <span class=\"info-box-number\">
                                        ";
        // line 315
        $this->displayBlock('score', $context, $blocks);
        // line 317
        echo "                                        
                                       
                                    </span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" style=\"width: 20%\"></div>
                                    </div>
                                    <span class=\"progress-description\">

                                    </span>
                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                           
                            <div class=\"info-box bg-aqua\">
                                                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-people-outline\"></i></span>
                                       
                            
                                    <span class=\"info-box-text\">FACEBOOK LIKE BOX</span>
                                           
                                          <iframe src=\"https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/tunisianfreelancer09&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false\"></iframe>
                                           

                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                        </div><!-- /.col -->
                    <!-- /.row -->

                    <div class='row'>
                        <div class='col-md-4'>
                            <!-- DIRECT CHAT -->
                          
                        </div><!-- /.col -->
                        <div class='col-md-4'>
                            <!-- USERS LIST -->
                            
                        </div><!-- /.col -->
                        <div class='col-md-4'>
                            <div class=\"box box-default\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Feedbacks messsages</h3>
                                    <div src=\"\" class=\"box-tools pull-right\">
                                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                       
                                        
                                        
                                        <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <div src=\"\" class=\"row\" >
                                        
                                        <a href=\"\"<!--path ('feedbacks') }}-->\"> </a>
                                        <div src=\"  \" class=\"col-md-8\">
                                            
                                            <a href=\"\"<!-- path ('chart')}}-->\"<></a>
                                           <!-- ./chart-responsive -->
                                        </div><!-- /.col -->
                                        
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                <div class=\"box-footer no-padding\">
                                    
                                </div><!-- /.footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class=\"row\" width=\"1000%\">
                        
                                    ";
        // line 385
        $this->displayBlock('amin', $context, $blocks);
        // line 387
        echo "
                                    
                                    
                                    
                                    
                            </div><!-- /.col -->
                       <!-- /.row -->
                        
                        
                        
                        
                        
                        
                        <div class=\"row\" width=\"1000%\">
                        
                                   
 ";
        // line 403
        $this->displayBlock('affichedet', $context, $blocks);
        // line 405
        echo "
                                    
                                    
                                    
                                    
                            </div><!-- /.col -->
                        
                        
                                 
                                    
        </div> 
                </section><!-- /.content -->
           <!-- /.content-wrapper -->

            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                   
                </div>
                <strong>Copyright &copy; 2015-2016 <a href=\"http://tunisianfreelancer.tn\">Blitz</a>.</strong> All rights reserved.
            </footer>

        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- FastClick -->
        <script src='";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- ChartJS 1.0.1 -->
        <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>";
    }

    // line 29
    public function block_entete($context, array $blocks = array())
    {
        // line 30
        echo "      ";
    }

    // line 243
    public function block_chart($context, array $blocks = array())
    {
    }

    // line 270
    public function block_body($context, array $blocks = array())
    {
        // line 271
        echo "                                ";
    }

    // line 298
    public function block_nbreFreelancers($context, array $blocks = array())
    {
        echo "   
                                        ";
    }

    // line 315
    public function block_score($context, array $blocks = array())
    {
        echo "  
                                        ";
    }

    // line 385
    public function block_amin($context, array $blocks = array())
    {
        echo " 
                                    ";
    }

    // line 403
    public function block_affichedet($context, array $blocks = array())
    {
        // line 404
        echo " ";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 404,  629 => 403,  622 => 385,  615 => 315,  608 => 298,  604 => 271,  601 => 270,  596 => 243,  592 => 30,  589 => 29,  582 => 456,  576 => 453,  570 => 450,  565 => 448,  560 => 446,  555 => 444,  550 => 442,  545 => 440,  541 => 439,  536 => 437,  531 => 435,  526 => 433,  521 => 431,  516 => 429,  490 => 405,  488 => 403,  470 => 387,  468 => 385,  398 => 317,  396 => 315,  379 => 300,  377 => 298,  349 => 272,  347 => 270,  325 => 251,  316 => 244,  314 => 243,  208 => 140,  187 => 121,  182 => 118,  169 => 108,  165 => 107,  158 => 104,  156 => 103,  151 => 101,  79 => 31,  77 => 29,  72 => 27,  65 => 23,  59 => 20,  54 => 18,  49 => 16,  44 => 14,  35 => 8,  26 => 1,);
    }
}
