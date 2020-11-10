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

/* vendor/symfony/monolog-bundle/CHANGELOG.md */
class __TwigTemplate_b07c3411ec94a8d7fad016cc140f0b02f414eaf88099501d9c8e6d8b886a2303 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/CHANGELOG.md"));

        // line 1
        echo "## 3.4.0 (2019-06-20)

* Deprecate \"excluded_404s\" option
* Flush loggers on `kernel.reset`
* Register processors (`ProcessorInterface`) for autoconfiguration (tag: `monolog.processor`)
* Expose configuration for the `ConsoleHandler`
* Fixed psr-3 processing being applied to all handlers, only leaf ones are now processing
* Fixed regression when `app` channel is defined explicitly
* Fixed handlers marked as nested not being ignored properly from the stack
* Added support for Redis configuration
* Drop support for Symfony <3

## 3.3.1 (2018-11-04)

* Fixed compatiblity with Symfony 4.2

## 3.3.0 (2018-06-04)

* Fixed the autowiring of the channel logger in autoconfigured services
* Added timeouts to the pushover, hipchat, slack handlers
* Dropped support for PHP 5.3, 5.4, and HHVM
* Added configuration for HttpCodeActivationStrategy
* Deprecated \"excluded_404s\" option for Symfony >= 3.4

## 3.2.0 (2018-03-05)

* Removed randomness from the container build
* Fixed support for the `monolog.logger` tag specifying a channel in combination with Symfony 3.4+ autowiring
* Fixed visibility of channels configured explicitly in the bundle config (they are now public in Symfony 4 too)
* Fixed invalid service definitions

## 3.1.2 (2017-11-06)

* fix invalid usage of count()

## 3.1.1 (2017-09-26)

* added support for Symfony 4

## 3.1.0 (2017-03-26)

* Added support for server_log handler
* Allow configuring VERBOSITY_QUIET in console handlers
* Fixed autowiring
* Fixed slackbot handler not escaping channel names properly
* Fixed slackbot handler requiring `slack_team` instead of `team` to be configured

## 3.0.3 (2017-01-10)

* Fixed deprecation notices when using Symfony 3.3+ and PHP7+

## 3.0.2 (2017-01-03)

* Revert disabling DebugHandler in CLI environments
* Update configuration for slack handlers for Monolog 1.22 new options
* Revert the removal of the DebugHandlerPass (needed for Symfony <3.2)

## 3.0.1 (2016-11-15)

* Removed obsolete code (DebugHandlerPass)

## 3.0.0 (2016-11-06)

* Removed class parameters for the container configuration
* Bumped minimum version of supported Symfony version to 2.7
* Removed `NotFoundActivationStrategy` (the bundle now uses the class from MonologBridge)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("## 3.4.0 (2019-06-20)

* Deprecate \"excluded_404s\" option
* Flush loggers on `kernel.reset`
* Register processors (`ProcessorInterface`) for autoconfiguration (tag: `monolog.processor`)
* Expose configuration for the `ConsoleHandler`
* Fixed psr-3 processing being applied to all handlers, only leaf ones are now processing
* Fixed regression when `app` channel is defined explicitly
* Fixed handlers marked as nested not being ignored properly from the stack
* Added support for Redis configuration
* Drop support for Symfony <3

## 3.3.1 (2018-11-04)

* Fixed compatiblity with Symfony 4.2

## 3.3.0 (2018-06-04)

* Fixed the autowiring of the channel logger in autoconfigured services
* Added timeouts to the pushover, hipchat, slack handlers
* Dropped support for PHP 5.3, 5.4, and HHVM
* Added configuration for HttpCodeActivationStrategy
* Deprecated \"excluded_404s\" option for Symfony >= 3.4

## 3.2.0 (2018-03-05)

* Removed randomness from the container build
* Fixed support for the `monolog.logger` tag specifying a channel in combination with Symfony 3.4+ autowiring
* Fixed visibility of channels configured explicitly in the bundle config (they are now public in Symfony 4 too)
* Fixed invalid service definitions

## 3.1.2 (2017-11-06)

* fix invalid usage of count()

## 3.1.1 (2017-09-26)

* added support for Symfony 4

## 3.1.0 (2017-03-26)

* Added support for server_log handler
* Allow configuring VERBOSITY_QUIET in console handlers
* Fixed autowiring
* Fixed slackbot handler not escaping channel names properly
* Fixed slackbot handler requiring `slack_team` instead of `team` to be configured

## 3.0.3 (2017-01-10)

* Fixed deprecation notices when using Symfony 3.3+ and PHP7+

## 3.0.2 (2017-01-03)

* Revert disabling DebugHandler in CLI environments
* Update configuration for slack handlers for Monolog 1.22 new options
* Revert the removal of the DebugHandlerPass (needed for Symfony <3.2)

## 3.0.1 (2016-11-15)

* Removed obsolete code (DebugHandlerPass)

## 3.0.0 (2016-11-06)

* Removed class parameters for the container configuration
* Bumped minimum version of supported Symfony version to 2.7
* Removed `NotFoundActivationStrategy` (the bundle now uses the class from MonologBridge)
", "vendor/symfony/monolog-bundle/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/CHANGELOG.md");
    }
}
