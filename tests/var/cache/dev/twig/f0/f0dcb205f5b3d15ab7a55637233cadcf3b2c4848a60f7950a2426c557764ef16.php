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

/* vendor/symfony/twig-bundle/CHANGELOG.md */
class __TwigTemplate_9dfdd9ee301be430b90e92fa71cbd79e71894192c0e136dd525d4e0fcb2b135d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\\Bundle\\TwigBundle\\Command\\DebugCommand`, use `Symfony\\Bridge\\Twig\\Command\\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\\Bundle\\TwigBundle\\Command\\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\\\Bundle\\\\TwigBundle\\\\Controller\\\\ExceptionController::showAction`)
 * added support for multiple loaders via the \"twig.loader\" tag.
 * added automatic register of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting (\"paths\") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\\Bundle\\TwigBundle\\Command\\DebugCommand`, use `Symfony\\Bridge\\Twig\\Command\\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\\Bundle\\TwigBundle\\Command\\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\\\Bundle\\\\TwigBundle\\\\Controller\\\\ExceptionController::showAction`)
 * added support for multiple loaders via the \"twig.loader\" tag.
 * added automatic register of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting (\"paths\") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
", "vendor/symfony/twig-bundle/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/CHANGELOG.md");
    }
}
