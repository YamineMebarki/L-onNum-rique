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

/* vendor/symfony/dotenv/CHANGELOG.md */
class __TwigTemplate_f2f98c792a4f069bd06e2d978ffee2b2a4cdc278dfbcd2375860decba5cbe340 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dotenv/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dotenv/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * deprecated use of `putenv()` by default. This feature will be opted-in with a constructor argument to `Dotenv`

4.2.0
-----

 * added `Dotenv::overload()` and `\$overrideExistingVars` as optional parameter of `Dotenv::populate()`
 * added `Dotenv::loadEnv()` to load a .env_GogolejokeVoice file and its corresponding .env_GogolejokeVoice.local, .env_GogolejokeVoice.\$env and .env_GogolejokeVoice.\$env.local files if they exist

3.3.0
-----

 * [BC BREAK] Since v3.3.7, the latest Dotenv files override the previous ones. Real env vars are not affected and are not overridden.
 * added the component
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dotenv/CHANGELOG.md";
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

 * deprecated use of `putenv()` by default. This feature will be opted-in with a constructor argument to `Dotenv`

4.2.0
-----

 * added `Dotenv::overload()` and `\$overrideExistingVars` as optional parameter of `Dotenv::populate()`
 * added `Dotenv::loadEnv()` to load a .env_GogolejokeVoice file and its corresponding .env_GogolejokeVoice.local, .env_GogolejokeVoice.\$env and .env_GogolejokeVoice.\$env.local files if they exist

3.3.0
-----

 * [BC BREAK] Since v3.3.7, the latest Dotenv files override the previous ones. Real env vars are not affected and are not overridden.
 * added the component
", "vendor/symfony/dotenv/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/dotenv/CHANGELOG.md");
    }
}
