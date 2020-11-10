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

/* public/dist/assets/lib/scroll.js */
class __TwigTemplate_876e29ff718b31b062dae69c1349142f05314954b013ff15e397e0c0a7b0224b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/lib/scroll.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/lib/scroll.js"));

        // line 1
        echo "\$(document).ready(function() {
\$(function(){
\$(window).scroll(function() {
if(\$(this).scrollTop() > 500) {
 verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
 element = \$('body');
 offset = element.offset();
 offsetTop = offset.top;
    \$('.scroll-top-wrapper').addClass('show');
}else{
    \$('.scroll-top-wrapper').removeClass('show');
}
});
});
\$('#scroll').click(function () {
\$('body, html').animate({scrollTop:offsetTop}, 1000, 'linear');
return false;
});
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/dist/assets/lib/scroll.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$(document).ready(function() {
\$(function(){
\$(window).scroll(function() {
if(\$(this).scrollTop() > 500) {
 verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
 element = \$('body');
 offset = element.offset();
 offsetTop = offset.top;
    \$('.scroll-top-wrapper').addClass('show');
}else{
    \$('.scroll-top-wrapper').removeClass('show');
}
});
});
\$('#scroll').click(function () {
\$('body, html').animate({scrollTop:offsetTop}, 1000, 'linear');
return false;
});
});
", "public/dist/assets/lib/scroll.js", "/var/www/public/DevLaon/templates/public/dist/assets/lib/scroll.js");
    }
}
