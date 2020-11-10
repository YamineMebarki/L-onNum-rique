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

/* vendor/symfony/monolog-bridge/CHANGELOG.md */
class __TwigTemplate_732756ba748107383f561b39e390ce2a3d50b3bc5276cee8e1039836fa75902e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * added `ConsoleCommandProcessor`: monolog processor that adds command name and arguments
 * added `RouteProcessor`: monolog processor that adds route name, controller::action and route params

4.2.0
-----

 * The methods `DebugProcessor::getLogs()`, `DebugProcessor::countErrors()`, `Logger::getLogs()`
   and `Logger::countErrors()` will have a new `\$request` argument in version 5.0, not defining
   it is deprecated

4.1.0
-----

 * `WebProcessor` now implements `EventSubscriberInterface` in order to be easily autoconfigured

4.0.0
-----

 * the `\$format`, `\$dateFormat`, `\$allowInlineLineBreaks`, and `\$ignoreEmptyContextAndExtra`
   constructor arguments of the `ConsoleFormatter` class have been removed, use
   `\$options` instead
 * the `DebugHandler` class has been removed

3.3.0
-----

 * Improved the console handler output formatting by adding var-dumper support

3.0.0
-----

 * deprecated interface `Symfony\\Component\\HttpKernel\\Log\\LoggerInterface` has been removed
 * deprecated methods `Logger::crit()`, `Logger::emerg()`, `Logger::err()` and `Logger::warn()` have been removed

2.4.0
-----

 * added ConsoleHandler and ConsoleFormatter which can be used to show log messages
   in the console output depending on the verbosity settings

2.1.0
-----

 * added ChromePhpHandler
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.3.0
-----

 * added `ConsoleCommandProcessor`: monolog processor that adds command name and arguments
 * added `RouteProcessor`: monolog processor that adds route name, controller::action and route params

4.2.0
-----

 * The methods `DebugProcessor::getLogs()`, `DebugProcessor::countErrors()`, `Logger::getLogs()`
   and `Logger::countErrors()` will have a new `\$request` argument in version 5.0, not defining
   it is deprecated

4.1.0
-----

 * `WebProcessor` now implements `EventSubscriberInterface` in order to be easily autoconfigured

4.0.0
-----

 * the `\$format`, `\$dateFormat`, `\$allowInlineLineBreaks`, and `\$ignoreEmptyContextAndExtra`
   constructor arguments of the `ConsoleFormatter` class have been removed, use
   `\$options` instead
 * the `DebugHandler` class has been removed

3.3.0
-----

 * Improved the console handler output formatting by adding var-dumper support

3.0.0
-----

 * deprecated interface `Symfony\\Component\\HttpKernel\\Log\\LoggerInterface` has been removed
 * deprecated methods `Logger::crit()`, `Logger::emerg()`, `Logger::err()` and `Logger::warn()` have been removed

2.4.0
-----

 * added ConsoleHandler and ConsoleFormatter which can be used to show log messages
   in the console output depending on the verbosity settings

2.1.0
-----

 * added ChromePhpHandler
", "vendor/symfony/monolog-bridge/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/CHANGELOG.md");
    }
}
