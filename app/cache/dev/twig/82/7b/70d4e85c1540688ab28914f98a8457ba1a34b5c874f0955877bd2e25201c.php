<?php

/* FreelancerBundle:Map:base.html.twig */
class __TwigTemplate_827b70d4e85c1540688ab28914f98a8457ba1a34b5c874f0955877bd2e25201c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCq4t8AOUAkZzPAaaFSiq20e27i7uZD8wk\"></script>
        <script>
            function initialize()
            {
                var lat = document.getElementById('lat').value;
                var long = document.getElementById('long').value;
                var myCenter=new google.maps.LatLng(lat,long);
                var mapProp = {
                    center: new google.maps.LatLng(lat, long),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    ";
        // line 28
        $this->displayBlock('container', $context, $blocks);
        // line 30
        echo "</html>";
    }

    // line 28
    public function block_container($context, array $blocks = array())
    {
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FreelancerBundle:Map:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  55 => 28,  51 => 30,  49 => 28,  20 => 1,);
    }
}
