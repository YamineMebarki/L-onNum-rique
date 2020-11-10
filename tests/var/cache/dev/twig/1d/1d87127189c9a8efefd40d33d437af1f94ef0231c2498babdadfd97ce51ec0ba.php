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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml */
class __TwigTemplate_9400fdd10772de168f04d73e77689029658fd1853a192861b5783bd584afb5d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:workflow name=\"article\" type=\"workflow\">
            <framework:initial-marking>draft</framework:initial-marking>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place>draft</framework:place>
            <framework:place>wait_for_journalist</framework:place>
            <framework:place>approved_by_journalist</framework:place>
            <framework:place>wait_for_spellchecker</framework:place>
            <framework:place>approved_by_spellchecker</framework:place>
            <framework:place>published</framework:place>
            <framework:transition name=\"request_review\">
                <framework:from>draft</framework:from>
                <framework:to>wait_for_journalist</framework:to>
                <framework:to>wait_for_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"journalist_approval\">
                <framework:from>wait_for_journalist</framework:from>
                <framework:to>approved_by_journalist</framework:to>
            </framework:transition>
            <framework:transition name=\"spellchecker_approval\">
                <framework:from>wait_for_spellchecker</framework:from>
                <framework:to>approved_by_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>approved_by_journalist</framework:from>
                <framework:from>approved_by_spellchecker</framework:from>
                <framework:to>published</framework:to>
                <framework:guard>!!true</framework:guard>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>draft</framework:from>
                <framework:to>published</framework:to>
                <framework:guard>!!false</framework:guard>
            </framework:transition>
        </framework:workflow>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml";
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
           xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:workflow name=\"article\" type=\"workflow\">
            <framework:initial-marking>draft</framework:initial-marking>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place>draft</framework:place>
            <framework:place>wait_for_journalist</framework:place>
            <framework:place>approved_by_journalist</framework:place>
            <framework:place>wait_for_spellchecker</framework:place>
            <framework:place>approved_by_spellchecker</framework:place>
            <framework:place>published</framework:place>
            <framework:transition name=\"request_review\">
                <framework:from>draft</framework:from>
                <framework:to>wait_for_journalist</framework:to>
                <framework:to>wait_for_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"journalist_approval\">
                <framework:from>wait_for_journalist</framework:from>
                <framework:to>approved_by_journalist</framework:to>
            </framework:transition>
            <framework:transition name=\"spellchecker_approval\">
                <framework:from>wait_for_spellchecker</framework:from>
                <framework:to>approved_by_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>approved_by_journalist</framework:from>
                <framework:from>approved_by_spellchecker</framework:from>
                <framework:to>published</framework:to>
                <framework:guard>!!true</framework:guard>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>draft</framework:from>
                <framework:to>published</framework:to>
                <framework:guard>!!false</framework:guard>
            </framework:transition>
        </framework:workflow>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflow_with_guard_expression.xml");
    }
}
