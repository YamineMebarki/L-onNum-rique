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

/* vendor/egulias/email-validator/phpunit.xml.dist */
class __TwigTemplate_4e25e1d718d5be7ee9569a093d39d2635ee83058e2da89c3648d27f154283398 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/phpunit.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit backupGlobals=\"false\"
         backupStaticAttributes=\"false\"
         colors=\"true\"
         convertErrorsToExceptions=\"true\"
         convertNoticesToExceptions=\"true\"
         convertWarningsToExceptions=\"true\"
         processIsolation=\"false\"
         stopOnFailure=\"false\"
         bootstrap=\"vendor/autoload.php\"
>
<testsuites>
  <testsuite name=\"EmailValidator Test Suite\">
    <directory>./Tests/EmailValidator</directory>
    <exclude>./vendor/</exclude>
  </testsuite>
</testsuites>

<filter>
  <whitelist>
    <directory>./EmailValidator/</directory>
  </whitelist>
</filter>

<listeners>
  <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
</listeners>
</phpunit>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit backupGlobals=\"false\"
         backupStaticAttributes=\"false\"
         colors=\"true\"
         convertErrorsToExceptions=\"true\"
         convertNoticesToExceptions=\"true\"
         convertWarningsToExceptions=\"true\"
         processIsolation=\"false\"
         stopOnFailure=\"false\"
         bootstrap=\"vendor/autoload.php\"
>
<testsuites>
  <testsuite name=\"EmailValidator Test Suite\">
    <directory>./Tests/EmailValidator</directory>
    <exclude>./vendor/</exclude>
  </testsuite>
</testsuites>

<filter>
  <whitelist>
    <directory>./EmailValidator/</directory>
  </whitelist>
</filter>

<listeners>
  <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
</listeners>
</phpunit>
", "vendor/egulias/email-validator/phpunit.xml.dist", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/phpunit.xml.dist");
    }
}
