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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml */
class __TwigTemplate_066555c430cad502ff14858a99ef2eced6f7b78c7d7f7ae12526b51247495b00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter>a string</parameter>
    <parameter key=\"foo\">bar</parameter>
    <parameter key=\"values\" type=\"collection\">
      <parameter>0</parameter>
      <parameter key=\"integer\">4</parameter>
      <parameter key=\"100\">null</parameter>
      <parameter type=\"string\">true</parameter>
      <parameter>true</parameter>
      <parameter>false</parameter>
      <parameter>on</parameter>
      <parameter>off</parameter>
      <parameter key=\"float\">1.3</parameter>
      <parameter>1000.3</parameter>
      <parameter>a string</parameter>
      <parameter type=\"collection\">
        <parameter>foo</parameter>
        <parameter>bar</parameter>
      </parameter>
    </parameter>
    <parameter key=\"mixedcase\" type=\"collection\"> <!-- Should be lower cased -->
      <parameter key=\"MixedCaseKey\">value</parameter> <!-- Should stay mixed case -->
    </parameter>
    <parameter key=\"constant\" type=\"constant\">PHP_EOL</parameter>
  </parameters>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter>a string</parameter>
    <parameter key=\"foo\">bar</parameter>
    <parameter key=\"values\" type=\"collection\">
      <parameter>0</parameter>
      <parameter key=\"integer\">4</parameter>
      <parameter key=\"100\">null</parameter>
      <parameter type=\"string\">true</parameter>
      <parameter>true</parameter>
      <parameter>false</parameter>
      <parameter>on</parameter>
      <parameter>off</parameter>
      <parameter key=\"float\">1.3</parameter>
      <parameter>1000.3</parameter>
      <parameter>a string</parameter>
      <parameter type=\"collection\">
        <parameter>foo</parameter>
        <parameter>bar</parameter>
      </parameter>
    </parameter>
    <parameter key=\"mixedcase\" type=\"collection\"> <!-- Should be lower cased -->
      <parameter key=\"MixedCaseKey\">value</parameter> <!-- Should stay mixed case -->
    </parameter>
    <parameter key=\"constant\" type=\"constant\">PHP_EOL</parameter>
  </parameters>
</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/services2.xml");
    }
}
