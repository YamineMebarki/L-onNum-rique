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

/* vendor/symfony/swiftmailer-bundle/phpunit.xml.dist */
class __TwigTemplate_76783afa6f470d14b4520a66545cbef91fc20d7fe9ddbe63de1b0bc3b5f2ddec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/phpunit.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit colors=\"true\" bootstrap=\"vendor/autoload.php\">
    <testsuites>
        <testsuite name=\"SwiftmailerBundle for the Symfony Framework\">
            <directory>./Tests</directory>
        </testsuite>
    </testsuites>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
    </listeners>

    <filter>
        <whitelist>
            <directory>.</directory>
            <exclude>
                <directory>./Resources</directory>
                <directory>./Tests</directory>
                <directory>./vendor</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit colors=\"true\" bootstrap=\"vendor/autoload.php\">
    <testsuites>
        <testsuite name=\"SwiftmailerBundle for the Symfony Framework\">
            <directory>./Tests</directory>
        </testsuite>
    </testsuites>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
    </listeners>

    <filter>
        <whitelist>
            <directory>.</directory>
            <exclude>
                <directory>./Resources</directory>
                <directory>./Tests</directory>
                <directory>./vendor</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
", "vendor/symfony/swiftmailer-bundle/phpunit.xml.dist", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/phpunit.xml.dist");
    }
}
