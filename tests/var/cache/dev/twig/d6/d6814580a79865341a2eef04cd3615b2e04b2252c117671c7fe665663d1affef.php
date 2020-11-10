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

/* vendor/symfony/web-profiler-bundle/CHANGELOG.md */
class __TwigTemplate_937afd735d8c8ede4d82b06ec1b95f3c9ff4b66e09af9eb8a4e478cf7ffecf92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * Replaced the canvas performance graph renderer with an SVG renderer

4.1.0
-----

 * added information about orphaned events
 * made the toolbar auto-update with info from ajax reponses when they set the 
   `Symfony-Debug-Toolbar-Replace header` to `1`

4.0.0
-----

 * removed the `WebProfilerExtension::dumpValue()` method
 * removed the `getTemplates()` method of the `TemplateManager` class in favor of the ``getNames()`` method
 * removed the `web_profiler.position` config option and the
   `web_profiler.debug_toolbar.position` container parameter

3.4.0
-----

 * Deprecated the `web_profiler.position` config option (in 4.0 version the toolbar
   will always be displayed at the bottom) and the `web_profiler.debug_toolbar.position`
   container parameter.

3.1.0
-----

 * added information about redirected and forwarded requests to the profiler

3.0.0
-----

 * removed profiler:import and profiler:export commands

2.8.0
-----

 * deprecated profiler:import and profiler:export commands

2.7.0
-----

 * [BC BREAK] if you are using a DB to store profiles, the table must be dropped
 * added the HTTP status code to profiles

2.3.0
-----

 * draw retina canvas if devicePixelRatio is bigger than 1

2.1.0
-----

 * deprecated the verbose setting (not relevant anymore)
 * [BC BREAK] You must clear old profiles after upgrading to 2.1 (don't forget
   to remove the table if you are using a DB)
 * added support for the request method
 * added a routing panel
 * added a timeline panel
 * The toolbar position can now be configured via the `position` option (can
   be `top` or `bottom`)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/CHANGELOG.md";
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

 * Replaced the canvas performance graph renderer with an SVG renderer

4.1.0
-----

 * added information about orphaned events
 * made the toolbar auto-update with info from ajax reponses when they set the 
   `Symfony-Debug-Toolbar-Replace header` to `1`

4.0.0
-----

 * removed the `WebProfilerExtension::dumpValue()` method
 * removed the `getTemplates()` method of the `TemplateManager` class in favor of the ``getNames()`` method
 * removed the `web_profiler.position` config option and the
   `web_profiler.debug_toolbar.position` container parameter

3.4.0
-----

 * Deprecated the `web_profiler.position` config option (in 4.0 version the toolbar
   will always be displayed at the bottom) and the `web_profiler.debug_toolbar.position`
   container parameter.

3.1.0
-----

 * added information about redirected and forwarded requests to the profiler

3.0.0
-----

 * removed profiler:import and profiler:export commands

2.8.0
-----

 * deprecated profiler:import and profiler:export commands

2.7.0
-----

 * [BC BREAK] if you are using a DB to store profiles, the table must be dropped
 * added the HTTP status code to profiles

2.3.0
-----

 * draw retina canvas if devicePixelRatio is bigger than 1

2.1.0
-----

 * deprecated the verbose setting (not relevant anymore)
 * [BC BREAK] You must clear old profiles after upgrading to 2.1 (don't forget
   to remove the table if you are using a DB)
 * added support for the request method
 * added a routing panel
 * added a timeline panel
 * The toolbar position can now be configured via the `position` option (can
   be `top` or `bottom`)
", "vendor/symfony/web-profiler-bundle/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/CHANGELOG.md");
    }
}
