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

/* vendor/symfony/maker-bundle/src/Resources/config/services.xml */
class __TwigTemplate_723789df25f58504fefbcecefc44601abf33b066093dc2ff0be8bc8978f41da0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/config/services.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

        <services>
            <defaults public=\"false\" />

            <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\">
                <argument type=\"service\" id=\"filesystem\" />
                <argument type=\"service\" id=\"maker.autoloader_util\" />
                <argument>%kernel.project_dir%</argument>
                <argument>%twig.default_path%</argument>
            </service>

            <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" >
                <argument /> <!-- root namespace -->
            </service>

            <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\">
                <argument type=\"service\" id=\"maker.autoloader_finder\" />
            </service>

            <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\">
                <argument type=\"service\" id=\"event_dispatcher\" />
            </service>

            <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\">
                <tag name=\"kernel.event_subscriber\" />
            </service>

            <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\">
                <argument /> <!-- entity namespace -->
                <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\" />
            </service>

            <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" abstract=\"true\">
                <argument /> <!-- maker -->
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.generator\" />
            </service>

            <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument /> <!-- root namespace -->
            </service>

            <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\">
                <argument type=\"service\" id=\"maker.generator\" />
            </service>

            <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" />

            <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" />

            <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\">
                <argument type=\"service\" id=\"maker.generator\" />
            </service>
        </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/config/services.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

        <services>
            <defaults public=\"false\" />

            <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\">
                <argument type=\"service\" id=\"filesystem\" />
                <argument type=\"service\" id=\"maker.autoloader_util\" />
                <argument>%kernel.project_dir%</argument>
                <argument>%twig.default_path%</argument>
            </service>

            <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" >
                <argument /> <!-- root namespace -->
            </service>

            <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\">
                <argument type=\"service\" id=\"maker.autoloader_finder\" />
            </service>

            <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\">
                <argument type=\"service\" id=\"event_dispatcher\" />
            </service>

            <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\">
                <tag name=\"kernel.event_subscriber\" />
            </service>

            <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\">
                <argument /> <!-- entity namespace -->
                <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\" />
            </service>

            <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" abstract=\"true\">
                <argument /> <!-- maker -->
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.generator\" />
            </service>

            <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument /> <!-- root namespace -->
            </service>

            <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\">
                <argument type=\"service\" id=\"maker.generator\" />
            </service>

            <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" />

            <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" />

            <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\">
                <argument type=\"service\" id=\"maker.generator\" />
            </service>
        </services>
</container>
", "vendor/symfony/maker-bundle/src/Resources/config/services.xml", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/config/services.xml");
    }
}
