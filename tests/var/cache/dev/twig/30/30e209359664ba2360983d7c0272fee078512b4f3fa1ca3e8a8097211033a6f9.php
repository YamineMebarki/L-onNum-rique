<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* public/dist/assets/js/date.js */
class __TwigTemplate_dfc84ca725338ca05f35326de5901384e8f4d18470c77e59cf419c88e3d17eed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/date.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/date.js"));

        // line 1
        echo "var hour = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    var h = d.toLocaleTimeString();
    document.getElementById(\"hour\").innerHTML = h
}
/**
 * Created by yamine on 11/10/19.
 */
var date = setInterval(date, 1000);

function date() {
    var d = new Date();
    var dTime = d.getDate();
    document.getElementById(\"date\").innerHTML  = dTime;
}

var days = setInterval(days, 1000);

function days (){
    var d = new Date();
    var tab_days = new Array(\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\");
    var day = tab_days[d.getDay()];
    document.getElementById(\"days\").innerHTML  = day;
}

var month = setInterval(month, 1000);

function month() {
    var d = new Date();
    var tab_month = new Array(\"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\");
    var month = tab_month[d.getMonth()];
    document.getElementById(\"month\").innerHTML  = month;
}

var years = setInterval(years, 1000);

function years(){
var y = new Date();
var year = y.getFullYear();
document.getElementById('years').innerHTML = year ;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/dist/assets/js/date.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var hour = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    var h = d.toLocaleTimeString();
    document.getElementById(\"hour\").innerHTML = h
}
/**
 * Created by yamine on 11/10/19.
 */
var date = setInterval(date, 1000);

function date() {
    var d = new Date();
    var dTime = d.getDate();
    document.getElementById(\"date\").innerHTML  = dTime;
}

var days = setInterval(days, 1000);

function days (){
    var d = new Date();
    var tab_days = new Array(\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\");
    var day = tab_days[d.getDay()];
    document.getElementById(\"days\").innerHTML  = day;
}

var month = setInterval(month, 1000);

function month() {
    var d = new Date();
    var tab_month = new Array(\"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\");
    var month = tab_month[d.getMonth()];
    document.getElementById(\"month\").innerHTML  = month;
}

var years = setInterval(years, 1000);

function years(){
var y = new Date();
var year = y.getFullYear();
document.getElementById('years').innerHTML = year ;
}", "public/dist/assets/js/date.js", "/var/www/public/DevLaon/templates/public/dist/assets/js/date.js");
    }
}
