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

/* vendor/symfony/maker-bundle/src/Resources/config/makers.xml */
class __TwigTemplate_4dcc6c8ffb01d334f273e62ea09ef8e09b4a5451c266b62d115327223dd4c8b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/config/makers.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/config/makers.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

        <services>
            <defaults public=\"false\" />

            <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.security_config_updater\" />
                <argument type=\"service\" id=\"maker.generator\" />
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\">
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument>%kernel.project_dir%</argument>
                <argument type=\"service\" id=\"maker.generator\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\">
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <argument type=\"service\" id=\"router\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\">
                <tag name=\"maker.command\" />
                <argument type=\"service\" id=\"maker.event_registry\" />
            </service>

            <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.user_class_builder\" />
                <argument type=\"service\" id=\"maker.security_config_updater\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\">
                <argument>%kernel.project_dir%</argument>
                <tag name=\"maker.command\" />
            </service>
        </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/config/makers.xml";
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

            <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.security_config_updater\" />
                <argument type=\"service\" id=\"maker.generator\" />
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\">
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument>%kernel.project_dir%</argument>
                <argument type=\"service\" id=\"maker.generator\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\">
                <argument type=\"service\" id=\"maker.doctrine_helper\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.renderer.form_type_renderer\" />
                <argument type=\"service\" id=\"router\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\">
                <tag name=\"maker.command\" />
                <argument type=\"service\" id=\"maker.event_registry\" />
            </service>

            <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\">
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\">
                <argument type=\"service\" id=\"maker.file_manager\" />
                <argument type=\"service\" id=\"maker.user_class_builder\" />
                <argument type=\"service\" id=\"maker.security_config_updater\" />
                <tag name=\"maker.command\" />
            </service>

            <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\">
                <argument>%kernel.project_dir%</argument>
                <tag name=\"maker.command\" />
            </service>
        </services>
</container>
", "vendor/symfony/maker-bundle/src/Resources/config/makers.xml", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/config/makers.xml");
    }
}
