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

/* vendor/symfony/web-link/README.md */
class __TwigTemplate_7bc042b8611f4699b21fde667d7bec685ca70013ee01bd17db3feacc56869a3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/README.md"));

        // line 1
        echo "WebLink Component
=================

The WebLink component manages links between resources. It is particularly useful to advise clients
to preload and prefetch documents through HTTP and HTTP/2 pushes.

This component implements the [HTML5's Links](https://www.w3.org/TR/html5/links.html), [Preload](https://www.w3.org/TR/preload/)
and [Resource Hints](https://www.w3.org/TR/resource-hints/) W3C's specifications.
It can also be used with extensions defined in the [HTML5 link type extensions wiki](http://microformats.org/wiki/existing-rel-values#HTML5_link_type_extensions).

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/web_link.html)
  * [Contributing](https://symfony.com/doc/current/contributing/site.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-link/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("WebLink Component
=================

The WebLink component manages links between resources. It is particularly useful to advise clients
to preload and prefetch documents through HTTP and HTTP/2 pushes.

This component implements the [HTML5's Links](https://www.w3.org/TR/html5/links.html), [Preload](https://www.w3.org/TR/preload/)
and [Resource Hints](https://www.w3.org/TR/resource-hints/) W3C's specifications.
It can also be used with extensions defined in the [HTML5 link type extensions wiki](http://microformats.org/wiki/existing-rel-values#HTML5_link_type_extensions).

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/web_link.html)
  * [Contributing](https://symfony.com/doc/current/contributing/site.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
", "vendor/symfony/web-link/README.md", "/var/www/public/DevLaon/templates/vendor/symfony/web-link/README.md");
    }
}
