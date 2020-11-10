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

/* vendor/symfony/framework-bundle/Resources/config/validator.xml */
class __TwigTemplate_6fdb3a0de6e4df4b4d5b46d212bc39b4d799c51e8854f45bbe55167f528eb1ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/validator.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/validator.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"validator.mapping.cache.prefix\" />
        <parameter key=\"validator.mapping.cache.file\">%kernel.cache_dir%/validation.php</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"validator\" class=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" public=\"true\">
            <factory service=\"validator.builder\" method=\"getValidator\" />
        </service>
        <service id=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" alias=\"validator\" />

        <service id=\"validator.builder\" class=\"Symfony\\Component\\Validator\\ValidatorBuilderInterface\">
            <factory class=\"Symfony\\Component\\Validator\\Validation\" method=\"createValidatorBuilder\" />
            <call method=\"setConstraintValidatorFactory\">
                <argument type=\"service\" id=\"validator.validator_factory\" />
            </call>
            <call method=\"setTranslator\">
                <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
            </call>
            <call method=\"setTranslationDomain\">
                <argument>%validator.translation_domain%</argument>
            </call>
        </service>

        <service id=\"validator.mapping.class_metadata_factory\" alias=\"validator\" />

        <service id=\"validator.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer\">
            <argument type=\"service\" id=\"validator.builder\" />
            <argument>%validator.mapping.cache.file%</argument>
            <tag name=\"kernel.cache_warmer\" />
        </service>

        <service id=\"validator.mapping.cache.symfony\" class=\"Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\">
                    <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
                    <argument>%validator.mapping.cache.file%</argument>
                    <argument type=\"service\" id=\"cache.validator\" />
                </service>
            </argument>
        </service>

        <service id=\"validator.validator_factory\" class=\"Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory\">
            <argument /> <!-- Constraint validators locator -->
        </service>

        <service id=\"validator.expression\" class=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\">
            <tag name=\"validator.constraint_validator\" alias=\"validator.expression\" />
        </service>

        <service id=\"validator.email\" class=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\">
            <argument></argument>
            <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" />
        </service>

        <service id=\"validator.not_compromised_password\" class=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\">
            <argument type=\"service\" id=\"http_client\" on-invalid=\"null\" />
            <argument>%kernel.charset%</argument>
            <argument>false</argument>
            <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" />
        </service>

        <service id=\"validator.property_info_loader\" class=\"Symfony\\Component\\Validator\\Mapping\\Loader\\PropertyInfoLoader\">
            <argument type=\"service\" id=\"property_info\" />
            <argument type=\"service\" id=\"property_info\" />
            <argument type=\"service\" id=\"property_info\" />

            <tag name=\"validator.auto_mapper\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/validator.xml";
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

    <parameters>
        <parameter key=\"validator.mapping.cache.prefix\" />
        <parameter key=\"validator.mapping.cache.file\">%kernel.cache_dir%/validation.php</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"validator\" class=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" public=\"true\">
            <factory service=\"validator.builder\" method=\"getValidator\" />
        </service>
        <service id=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" alias=\"validator\" />

        <service id=\"validator.builder\" class=\"Symfony\\Component\\Validator\\ValidatorBuilderInterface\">
            <factory class=\"Symfony\\Component\\Validator\\Validation\" method=\"createValidatorBuilder\" />
            <call method=\"setConstraintValidatorFactory\">
                <argument type=\"service\" id=\"validator.validator_factory\" />
            </call>
            <call method=\"setTranslator\">
                <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
            </call>
            <call method=\"setTranslationDomain\">
                <argument>%validator.translation_domain%</argument>
            </call>
        </service>

        <service id=\"validator.mapping.class_metadata_factory\" alias=\"validator\" />

        <service id=\"validator.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer\">
            <argument type=\"service\" id=\"validator.builder\" />
            <argument>%validator.mapping.cache.file%</argument>
            <tag name=\"kernel.cache_warmer\" />
        </service>

        <service id=\"validator.mapping.cache.symfony\" class=\"Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\">
                    <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
                    <argument>%validator.mapping.cache.file%</argument>
                    <argument type=\"service\" id=\"cache.validator\" />
                </service>
            </argument>
        </service>

        <service id=\"validator.validator_factory\" class=\"Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory\">
            <argument /> <!-- Constraint validators locator -->
        </service>

        <service id=\"validator.expression\" class=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\">
            <tag name=\"validator.constraint_validator\" alias=\"validator.expression\" />
        </service>

        <service id=\"validator.email\" class=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\">
            <argument></argument>
            <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" />
        </service>

        <service id=\"validator.not_compromised_password\" class=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\">
            <argument type=\"service\" id=\"http_client\" on-invalid=\"null\" />
            <argument>%kernel.charset%</argument>
            <argument>false</argument>
            <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" />
        </service>

        <service id=\"validator.property_info_loader\" class=\"Symfony\\Component\\Validator\\Mapping\\Loader\\PropertyInfoLoader\">
            <argument type=\"service\" id=\"property_info\" />
            <argument type=\"service\" id=\"property_info\" />
            <argument type=\"service\" id=\"property_info\" />

            <tag name=\"validator.auto_mapper\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/validator.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/validator.xml");
    }
}
