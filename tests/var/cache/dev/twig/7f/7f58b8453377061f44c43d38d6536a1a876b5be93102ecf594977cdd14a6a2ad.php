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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml */
class __TwigTemplate_af8ba5f54c9eb3c43b8e5a01fb6443ed321e16de8abb20a7b46013d7aa9e40ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"foo\">%baz%</parameter>
    <parameter key=\"baz\">bar</parameter>
    <parameter key=\"bar\">foo is %%foo bar</parameter>
    <parameter key=\"escape\">@escapeme</parameter>
    <parameter key=\"values\" type=\"collection\">
      <parameter>true</parameter>
      <parameter>false</parameter>
      <parameter>null</parameter>
      <parameter>0</parameter>
      <parameter>1000.3</parameter>
      <parameter type=\"string\">true</parameter>
      <parameter type=\"string\">false</parameter>
      <parameter type=\"string\">null</parameter>
    </parameter>
    <parameter key=\"binary\" type=\"binary\">8PDw8A==</parameter>
    <parameter key=\"binary-control-char\" type=\"binary\">VGhpcyBpcyBhIEJlbGwgY2hhciAH</parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
  </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"foo\">%baz%</parameter>
    <parameter key=\"baz\">bar</parameter>
    <parameter key=\"bar\">foo is %%foo bar</parameter>
    <parameter key=\"escape\">@escapeme</parameter>
    <parameter key=\"values\" type=\"collection\">
      <parameter>true</parameter>
      <parameter>false</parameter>
      <parameter>null</parameter>
      <parameter>0</parameter>
      <parameter>1000.3</parameter>
      <parameter type=\"string\">true</parameter>
      <parameter type=\"string\">false</parameter>
      <parameter type=\"string\">null</parameter>
    </parameter>
    <parameter key=\"binary\" type=\"binary\">8PDw8A==</parameter>
    <parameter key=\"binary-control-char\" type=\"binary\">VGhpcyBpcyBhIEJlbGwgY2hhciAH</parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
  </services>
</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/services8.xml");
    }
}
