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

/* vendor/symfony/framework-bundle/Resources/config/serializer.xml */
class __TwigTemplate_8797a5065e244e1ba48b8f65232a5a039265186d97a1708e6c924ffe43e36a39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/serializer.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/serializer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"serializer.mapping.cache.file\">%kernel.cache_dir%/serialization.php</parameter>
        <parameter key=\"serializer.mapping.cache.prefix\" />
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"serializer\" class=\"Symfony\\Component\\Serializer\\Serializer\" public=\"true\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\SerializerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\" alias=\"serializer\" />

        <service id=\"serializer.property_accessor\" alias=\"property_accessor\" />

        <!-- Discriminator Map -->
        <service id=\"serializer.mapping.class_discriminator_resolver\" class=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\" alias=\"serializer.mapping.class_discriminator_resolver\" />

        <!-- Normalizer -->
        <service id=\"serializer.normalizer.constraint_violation_list\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer\">
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\" />
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-915\" />
        </service>

        <service id=\"serializer.normalizer.dateinterval\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-915\" />
        </service>

        <service id=\"serializer.normalizer.data_uri\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer\">
            <argument type=\"service\" id=\"mime_types\" on-invalid=\"null\" />
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-920\" />
        </service>

        <service id=\"serializer.normalizer.datetime\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-910\" />
        </service>

        <service id=\"serializer.normalizer.json_serializable\" class=\"Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-900\" />
        </service>

        <service id=\"serializer.normalizer.object\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />
            <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\" />
            <argument type=\"service\" id=\"serializer.property_accessor\" />
            <argument type=\"service\" id=\"property_info\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"serializer.mapping.class_discriminator_resolver\" on-invalid=\"ignore\" />
            <argument>null</argument>
            <argument type=\"collection\" />

            <!-- Run after all custom normalizers -->
            <tag name=\"serializer.normalizer\" priority=\"-1000\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" alias=\"serializer.normalizer.object\" />

        <service id=\"serializer.denormalizer.array\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer\">
            <!-- Run before the object normalizer -->
            <tag name=\"serializer.normalizer\" priority=\"-990\" />
        </service>

        <!-- Loader -->
        <service id=\"serializer.mapping.chain_loader\" class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain\">
            <argument type=\"collection\" />
        </service>

        <!-- Class Metadata Factory -->
        <service id=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory\">
            <argument type=\"service\" id=\"serializer.mapping.chain_loader\" />
            <argument>null</argument>
        </service>

        <service id=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\" alias=\"serializer.mapping.class_metadata_factory\" />

        <!-- Cache -->
        <service id=\"serializer.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer\">
            <argument type=\"collection\" /><!-- Loaders injected by the extension -->
            <argument>%serializer.mapping.cache.file%</argument>
            <tag name=\"kernel.cache_warmer\" />
        </service>

        <service id=\"serializer.mapping.cache.symfony\" class=\"Psr\\Cache\\CacheItemPoolInterface\">
            <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
            <argument>%serializer.mapping.cache.file%</argument>
            <argument type=\"service\" id=\"cache.serializer\" />
        </service>

        <service id=\"serializer.mapping.cache_class_metadata_factory\" decorates=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory\">
            <argument type=\"service\" id=\"serializer.mapping.cache_class_metadata_factory.inner\" />
            <argument type=\"service\" id=\"serializer.mapping.cache.symfony\" />
        </service>

        <!-- Encoders -->
        <service id=\"serializer.encoder.xml\" class=\"Symfony\\Component\\Serializer\\Encoder\\XmlEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.json\" class=\"Symfony\\Component\\Serializer\\Encoder\\JsonEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.yaml\" class=\"Symfony\\Component\\Serializer\\Encoder\\YamlEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.csv\" class=\"Symfony\\Component\\Serializer\\Encoder\\CsvEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <!-- Name converter -->
        <service id=\"serializer.name_converter.camel_case_to_snake_case\" class=\"Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter\" />

        <service id=\"serializer.name_converter.metadata_aware\" class=\"Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter\" >
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
        </service>

        <!-- PropertyInfo extractor -->
        <service id=\"property_info.serializer_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />

            <tag name=\"property_info.list_extractor\" priority=\"-999\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/serializer.xml";
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
        <parameter key=\"serializer.mapping.cache.file\">%kernel.cache_dir%/serialization.php</parameter>
        <parameter key=\"serializer.mapping.cache.prefix\" />
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"serializer\" class=\"Symfony\\Component\\Serializer\\Serializer\" public=\"true\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\SerializerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\" alias=\"serializer\" />
        <service id=\"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\" alias=\"serializer\" />

        <service id=\"serializer.property_accessor\" alias=\"property_accessor\" />

        <!-- Discriminator Map -->
        <service id=\"serializer.mapping.class_discriminator_resolver\" class=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\" alias=\"serializer.mapping.class_discriminator_resolver\" />

        <!-- Normalizer -->
        <service id=\"serializer.normalizer.constraint_violation_list\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer\">
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\" />
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-915\" />
        </service>

        <service id=\"serializer.normalizer.dateinterval\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-915\" />
        </service>

        <service id=\"serializer.normalizer.data_uri\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer\">
            <argument type=\"service\" id=\"mime_types\" on-invalid=\"null\" />
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-920\" />
        </service>

        <service id=\"serializer.normalizer.datetime\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-910\" />
        </service>

        <service id=\"serializer.normalizer.json_serializable\" class=\"Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer\">
            <!-- Run before serializer.normalizer.object -->
            <tag name=\"serializer.normalizer\" priority=\"-900\" />
        </service>

        <service id=\"serializer.normalizer.object\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />
            <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\" />
            <argument type=\"service\" id=\"serializer.property_accessor\" />
            <argument type=\"service\" id=\"property_info\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"serializer.mapping.class_discriminator_resolver\" on-invalid=\"ignore\" />
            <argument>null</argument>
            <argument type=\"collection\" />

            <!-- Run after all custom normalizers -->
            <tag name=\"serializer.normalizer\" priority=\"-1000\" />
        </service>
        <service id=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" alias=\"serializer.normalizer.object\" />

        <service id=\"serializer.denormalizer.array\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer\">
            <!-- Run before the object normalizer -->
            <tag name=\"serializer.normalizer\" priority=\"-990\" />
        </service>

        <!-- Loader -->
        <service id=\"serializer.mapping.chain_loader\" class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain\">
            <argument type=\"collection\" />
        </service>

        <!-- Class Metadata Factory -->
        <service id=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory\">
            <argument type=\"service\" id=\"serializer.mapping.chain_loader\" />
            <argument>null</argument>
        </service>

        <service id=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\" alias=\"serializer.mapping.class_metadata_factory\" />

        <!-- Cache -->
        <service id=\"serializer.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer\">
            <argument type=\"collection\" /><!-- Loaders injected by the extension -->
            <argument>%serializer.mapping.cache.file%</argument>
            <tag name=\"kernel.cache_warmer\" />
        </service>

        <service id=\"serializer.mapping.cache.symfony\" class=\"Psr\\Cache\\CacheItemPoolInterface\">
            <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\" />
            <argument>%serializer.mapping.cache.file%</argument>
            <argument type=\"service\" id=\"cache.serializer\" />
        </service>

        <service id=\"serializer.mapping.cache_class_metadata_factory\" decorates=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory\">
            <argument type=\"service\" id=\"serializer.mapping.cache_class_metadata_factory.inner\" />
            <argument type=\"service\" id=\"serializer.mapping.cache.symfony\" />
        </service>

        <!-- Encoders -->
        <service id=\"serializer.encoder.xml\" class=\"Symfony\\Component\\Serializer\\Encoder\\XmlEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.json\" class=\"Symfony\\Component\\Serializer\\Encoder\\JsonEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.yaml\" class=\"Symfony\\Component\\Serializer\\Encoder\\YamlEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <service id=\"serializer.encoder.csv\" class=\"Symfony\\Component\\Serializer\\Encoder\\CsvEncoder\">
            <tag name=\"serializer.encoder\" />
        </service>

        <!-- Name converter -->
        <service id=\"serializer.name_converter.camel_case_to_snake_case\" class=\"Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter\" />

        <service id=\"serializer.name_converter.metadata_aware\" class=\"Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter\" >
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
        </service>

        <!-- PropertyInfo extractor -->
        <service id=\"property_info.serializer_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor\">
            <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\" />

            <tag name=\"property_info.list_extractor\" priority=\"-999\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/serializer.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/serializer.xml");
    }
}
