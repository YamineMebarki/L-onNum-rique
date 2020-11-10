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

/* vendor/symfony/framework-bundle/Resources/config/annotations.xml */
class __TwigTemplate_c3770c485ebfec81c26147659d90a637628f8fd0e1c0273c734bcc994e04ab30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/annotations.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/annotations.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\">
            <call method=\"addGlobalIgnoredName\">
                <argument>required</argument>
                <!-- dummy arg to register class_exists as annotation loader only when required -->
                <argument type=\"service\" id=\"annotations.dummy_registry\" />
            </call>
        </service>

        <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\">
            <call method=\"registerUniqueLoader\">
                <argument>class_exists</argument>
            </call>
        </service>

        <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\">
            <argument type=\"service\" id=\"annotations.reader\" />
            <argument type=\"service\">
                <service class=\"Doctrine\\Common\\Cache\\ArrayCache\" />
            </argument>
            <argument /><!-- Debug-Flag -->
        </service>

        <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\">
            <argument /><!-- Cache-Directory -->
        </service>

        <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\">
            <argument type=\"service\" id=\"annotations.reader\" />
            <argument>%kernel.cache_dir%/annotations.php</argument>
            <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\">
                    <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
                    <argument>%kernel.cache_dir%/annotations.php</argument>
                    <argument type=\"service\" id=\"cache.annotations\" />
                </service>
            </argument>
        </service>

        <service id=\"annotation_reader\" alias=\"annotations.reader\" />
        <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotation_reader\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/annotations.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\">
            <call method=\"addGlobalIgnoredName\">
                <argument>required</argument>
                <!-- dummy arg to register class_exists as annotation loader only when required -->
                <argument type=\"service\" id=\"annotations.dummy_registry\" />
            </call>
        </service>

        <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\">
            <call method=\"registerUniqueLoader\">
                <argument>class_exists</argument>
            </call>
        </service>

        <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\">
            <argument type=\"service\" id=\"annotations.reader\" />
            <argument type=\"service\">
                <service class=\"Doctrine\\Common\\Cache\\ArrayCache\" />
            </argument>
            <argument /><!-- Debug-Flag -->
        </service>

        <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\">
            <argument /><!-- Cache-Directory -->
        </service>

        <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\">
            <argument type=\"service\" id=\"annotations.reader\" />
            <argument>%kernel.cache_dir%/annotations.php</argument>
            <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\">
                    <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
                    <argument>%kernel.cache_dir%/annotations.php</argument>
                    <argument type=\"service\" id=\"cache.annotations\" />
                </service>
            </argument>
        </service>

        <service id=\"annotation_reader\" alias=\"annotations.reader\" />
        <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotation_reader\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/annotations.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/annotations.xml");
    }
}
