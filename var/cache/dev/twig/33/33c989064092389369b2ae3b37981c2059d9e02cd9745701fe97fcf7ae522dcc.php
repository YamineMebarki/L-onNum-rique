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

/* vendor/ocramius/proxy-manager/STABILITY.md */
class __TwigTemplate_ffe98fc3c6e5c6c756e26c5afa656732142ae57cd0ebfa1373f78777a6997b15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/STABILITY.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/STABILITY.md"));

        // line 1
        echo "---
title: Stability
---

This is a list of supported versions, with their expected release/support time-frames:

# 2.0.x

 * Release date: 2016-01-30
 * Bug fixes: till 2017-12-31
 * Security fixes: till 2018-12-31

# 1.0.x

 * Release date: 2014-12-12
 * Bug fixes: till 2015-12-11
 * Security fixes: till 2016-12-11

# 0.5.x

 * Release date: 2013-12-01
 * Bug fixes: till 2015-03-11
 * Security fixes: till 2015-12-11
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/STABILITY.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Stability
---

This is a list of supported versions, with their expected release/support time-frames:

# 2.0.x

 * Release date: 2016-01-30
 * Bug fixes: till 2017-12-31
 * Security fixes: till 2018-12-31

# 1.0.x

 * Release date: 2014-12-12
 * Bug fixes: till 2015-12-11
 * Security fixes: till 2016-12-11

# 0.5.x

 * Release date: 2013-12-01
 * Bug fixes: till 2015-03-11
 * Security fixes: till 2015-12-11
", "vendor/ocramius/proxy-manager/STABILITY.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/STABILITY.md");
    }
}
