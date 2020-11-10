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

/* var/cache/dev/UrlMatcher.php.meta */
class __TwigTemplate_eaea9c0e3e0901c25df037a4bc5e790a807e7d8beb830015cbfacf68b35d2b05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/UrlMatcher.php.meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/UrlMatcher.php.meta"));

        // line 1
        echo "a:16:{i:0;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:51:\"/var/www/public/DevLaon/config/routes/dev/twig.yaml\";}i:1;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:86:\"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/config/routing/errors.xml\";}i:2;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:59:\"/var/www/public/DevLaon/config/routes/dev/web_profiler.yaml\";}i:3;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:91:\"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/config/routing/wdt.xml\";}i:4;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:96:\"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml\";}i:5;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:37:\"/{routes}/dev/**/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"c42798056d623fd474add1207271e537\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:6;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:54:\"/var/www/public/DevLaon/config/routes/annotations.yaml\";}i:7;O:51:\"Symfony\\Component\\Config\\Resource\\DirectoryResource\":2:{s:61:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000resource\";s:38:\"/var/www/public/DevLaon/src/Controller\";s:60:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000pattern\";s:8:\"/\\.php\$/\";}i:8;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:60:\"/var/www/public/DevLaon/src/Controller/ArticleController.php\";}i:9;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"/var/www/public/DevLaon/src/Controller/SecurityController.php\";}i:10;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:30:\"/{routes}/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"ee3ef50ef6ad63ff613396bc68e8f55a\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:11;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:42:\"/var/www/public/DevLaon/config/routes.yaml\";}i:12;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:28:\"/{routes}.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"09173407f971c879a88d840de051ea9e\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:13;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:38:\"/var/www/public/DevLaon/src/Kernel.php\";}i:14;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"/var/www/public/DevLaon/vendor/symfony/http-kernel/Kernel.php\";}i:15;O:72:\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\":1:{s:84:\"\000Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\000parameters\";a:0:{}}}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/UrlMatcher.php.meta";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("a:16:{i:0;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:51:\"/var/www/public/DevLaon/config/routes/dev/twig.yaml\";}i:1;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:86:\"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/config/routing/errors.xml\";}i:2;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:59:\"/var/www/public/DevLaon/config/routes/dev/web_profiler.yaml\";}i:3;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:91:\"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/config/routing/wdt.xml\";}i:4;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:96:\"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml\";}i:5;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:37:\"/{routes}/dev/**/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"c42798056d623fd474add1207271e537\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:6;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:54:\"/var/www/public/DevLaon/config/routes/annotations.yaml\";}i:7;O:51:\"Symfony\\Component\\Config\\Resource\\DirectoryResource\":2:{s:61:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000resource\";s:38:\"/var/www/public/DevLaon/src/Controller\";s:60:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000pattern\";s:8:\"/\\.php\$/\";}i:8;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:60:\"/var/www/public/DevLaon/src/Controller/ArticleController.php\";}i:9;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"/var/www/public/DevLaon/src/Controller/SecurityController.php\";}i:10;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:30:\"/{routes}/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"ee3ef50ef6ad63ff613396bc68e8f55a\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:11;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:42:\"/var/www/public/DevLaon/config/routes.yaml\";}i:12;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"/var/www/public/DevLaon/config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:28:\"/{routes}.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"09173407f971c879a88d840de051ea9e\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:13;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:38:\"/var/www/public/DevLaon/src/Kernel.php\";}i:14;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"/var/www/public/DevLaon/vendor/symfony/http-kernel/Kernel.php\";}i:15;O:72:\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\":1:{s:84:\"\000Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\000parameters\";a:0:{}}}", "var/cache/dev/UrlMatcher.php.meta", "/var/www/public/DevLaon/templates/var/cache/dev/UrlMatcher.php.meta");
    }
}
