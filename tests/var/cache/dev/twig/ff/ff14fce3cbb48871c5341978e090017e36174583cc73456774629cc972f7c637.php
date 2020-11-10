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

/* vendor/symfony/framework-bundle/Resources/config/translation.xml */
class __TwigTemplate_658406059b3e2b70048d07b1da76bd518b33c3d3a520d863e23de9dbfdfc30c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/translation.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/translation.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"translator.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator\">
            <argument /> <!-- translation loaders locator -->
            <argument type=\"service\" id=\"translator.formatter\" />
            <argument>%kernel.default_locale%</argument>
            <argument type=\"collection\" /> <!-- translation loaders ids -->
            <argument type=\"collection\">
                <argument key=\"cache_dir\">%kernel.cache_dir%/translations</argument>
                <argument key=\"debug\">%kernel.debug%</argument>
            </argument>
            <call method=\"setConfigCacheFactory\">
                <argument type=\"service\" id=\"config_cache_factory\" />
            </call>
            <tag name=\"kernel.locale_aware\" />
        </service>
        <service id=\"Symfony\\Component\\Translation\\TranslatorInterface\" alias=\"translator\" />
        <service id=\"Symfony\\Contracts\\Translation\\TranslatorInterface\" alias=\"translator\" />

        <service id=\"translator.logging\" class=\"Symfony\\Component\\Translation\\LoggingTranslator\">
            <argument type=\"service\" id=\"translator.logging.inner\" />
            <argument type=\"service\" id=\"logger\" />
            <tag name=\"monolog.logger\" channel=\"translation\" />
        </service>

        <service id=\"translator.formatter.default\" class=\"Symfony\\Component\\Translation\\Formatter\\MessageFormatter\">
            <argument type=\"service\" id=\"identity_translator\" />
        </service>

        <service id=\"translation.loader.php\" class=\"Symfony\\Component\\Translation\\Loader\\PhpFileLoader\">
            <tag name=\"translation.loader\" alias=\"php\" />
        </service>

        <service id=\"translation.loader.yml\" class=\"Symfony\\Component\\Translation\\Loader\\YamlFileLoader\">
            <tag name=\"translation.loader\" alias=\"yaml\" legacy-alias=\"yml\" />
        </service>

        <service id=\"translation.loader.xliff\" class=\"Symfony\\Component\\Translation\\Loader\\XliffFileLoader\">
            <tag name=\"translation.loader\" alias=\"xlf\" legacy-alias=\"xliff\" />
        </service>

        <service id=\"translation.loader.po\" class=\"Symfony\\Component\\Translation\\Loader\\PoFileLoader\">
            <tag name=\"translation.loader\" alias=\"po\" />
        </service>

        <service id=\"translation.loader.mo\" class=\"Symfony\\Component\\Translation\\Loader\\MoFileLoader\">
            <tag name=\"translation.loader\" alias=\"mo\" />
        </service>

        <service id=\"translation.loader.qt\" class=\"Symfony\\Component\\Translation\\Loader\\QtFileLoader\">
            <tag name=\"translation.loader\" alias=\"ts\" />
        </service>

        <service id=\"translation.loader.csv\" class=\"Symfony\\Component\\Translation\\Loader\\CsvFileLoader\">
            <tag name=\"translation.loader\" alias=\"csv\" />
        </service>

        <service id=\"translation.loader.res\" class=\"Symfony\\Component\\Translation\\Loader\\IcuResFileLoader\">
            <tag name=\"translation.loader\" alias=\"res\" />
        </service>

        <service id=\"translation.loader.dat\" class=\"Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader\">
            <tag name=\"translation.loader\" alias=\"dat\" />
        </service>

        <service id=\"translation.loader.ini\" class=\"Symfony\\Component\\Translation\\Loader\\IniFileLoader\">
            <tag name=\"translation.loader\" alias=\"ini\" />
        </service>

        <service id=\"translation.loader.json\" class=\"Symfony\\Component\\Translation\\Loader\\JsonFileLoader\">
            <tag name=\"translation.loader\" alias=\"json\" />
        </service>

        <service id=\"translation.dumper.php\" class=\"Symfony\\Component\\Translation\\Dumper\\PhpFileDumper\">
            <tag name=\"translation.dumper\" alias=\"php\" />
        </service>

        <service id=\"translation.dumper.xliff\" class=\"Symfony\\Component\\Translation\\Dumper\\XliffFileDumper\">
            <tag name=\"translation.dumper\" alias=\"xlf\" />
        </service>

        <service id=\"translation.dumper.po\" class=\"Symfony\\Component\\Translation\\Dumper\\PoFileDumper\">
            <tag name=\"translation.dumper\" alias=\"po\" />
        </service>

        <service id=\"translation.dumper.mo\" class=\"Symfony\\Component\\Translation\\Dumper\\MoFileDumper\">
            <tag name=\"translation.dumper\" alias=\"mo\" />
        </service>

        <service id=\"translation.dumper.yml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\">
            <tag name=\"translation.dumper\" alias=\"yml\" />
        </service>

        <service id=\"translation.dumper.yaml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\">
            <argument>yaml</argument>
            <tag name=\"translation.dumper\" alias=\"yaml\" />
        </service>

        <service id=\"translation.dumper.qt\" class=\"Symfony\\Component\\Translation\\Dumper\\QtFileDumper\">
            <tag name=\"translation.dumper\" alias=\"ts\" />
        </service>

        <service id=\"translation.dumper.csv\" class=\"Symfony\\Component\\Translation\\Dumper\\CsvFileDumper\">
            <tag name=\"translation.dumper\" alias=\"csv\" />
        </service>

        <service id=\"translation.dumper.ini\" class=\"Symfony\\Component\\Translation\\Dumper\\IniFileDumper\">
            <tag name=\"translation.dumper\" alias=\"ini\" />
        </service>

        <service id=\"translation.dumper.json\" class=\"Symfony\\Component\\Translation\\Dumper\\JsonFileDumper\">
            <tag name=\"translation.dumper\" alias=\"json\" />
        </service>

        <service id=\"translation.dumper.res\" class=\"Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper\">
            <tag name=\"translation.dumper\" alias=\"res\" />
        </service>

        <service id=\"translation.extractor.php\" class=\"Symfony\\Component\\Translation\\Extractor\\PhpExtractor\">
            <tag name=\"translation.extractor\" alias=\"php\" />
        </service>

        <service id=\"translation.reader\" class=\"Symfony\\Component\\Translation\\Reader\\TranslationReader\" />
        <service id=\"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\" alias=\"translation.reader\" />

        <service id=\"translation.extractor\" class=\"Symfony\\Component\\Translation\\Extractor\\ChainExtractor\" />
        <service id=\"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\" alias=\"translation.extractor\" />

        <service id=\"translation.writer\" class=\"Symfony\\Component\\Translation\\Writer\\TranslationWriter\" />
        <service id=\"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\" alias=\"translation.writer\" />

        <service id=\"translation.warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TranslationsCacheWarmer\">
            <tag name=\"container.service_subscriber\" id=\"translator\" />
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/translation.xml";
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

        <service id=\"translator.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator\">
            <argument /> <!-- translation loaders locator -->
            <argument type=\"service\" id=\"translator.formatter\" />
            <argument>%kernel.default_locale%</argument>
            <argument type=\"collection\" /> <!-- translation loaders ids -->
            <argument type=\"collection\">
                <argument key=\"cache_dir\">%kernel.cache_dir%/translations</argument>
                <argument key=\"debug\">%kernel.debug%</argument>
            </argument>
            <call method=\"setConfigCacheFactory\">
                <argument type=\"service\" id=\"config_cache_factory\" />
            </call>
            <tag name=\"kernel.locale_aware\" />
        </service>
        <service id=\"Symfony\\Component\\Translation\\TranslatorInterface\" alias=\"translator\" />
        <service id=\"Symfony\\Contracts\\Translation\\TranslatorInterface\" alias=\"translator\" />

        <service id=\"translator.logging\" class=\"Symfony\\Component\\Translation\\LoggingTranslator\">
            <argument type=\"service\" id=\"translator.logging.inner\" />
            <argument type=\"service\" id=\"logger\" />
            <tag name=\"monolog.logger\" channel=\"translation\" />
        </service>

        <service id=\"translator.formatter.default\" class=\"Symfony\\Component\\Translation\\Formatter\\MessageFormatter\">
            <argument type=\"service\" id=\"identity_translator\" />
        </service>

        <service id=\"translation.loader.php\" class=\"Symfony\\Component\\Translation\\Loader\\PhpFileLoader\">
            <tag name=\"translation.loader\" alias=\"php\" />
        </service>

        <service id=\"translation.loader.yml\" class=\"Symfony\\Component\\Translation\\Loader\\YamlFileLoader\">
            <tag name=\"translation.loader\" alias=\"yaml\" legacy-alias=\"yml\" />
        </service>

        <service id=\"translation.loader.xliff\" class=\"Symfony\\Component\\Translation\\Loader\\XliffFileLoader\">
            <tag name=\"translation.loader\" alias=\"xlf\" legacy-alias=\"xliff\" />
        </service>

        <service id=\"translation.loader.po\" class=\"Symfony\\Component\\Translation\\Loader\\PoFileLoader\">
            <tag name=\"translation.loader\" alias=\"po\" />
        </service>

        <service id=\"translation.loader.mo\" class=\"Symfony\\Component\\Translation\\Loader\\MoFileLoader\">
            <tag name=\"translation.loader\" alias=\"mo\" />
        </service>

        <service id=\"translation.loader.qt\" class=\"Symfony\\Component\\Translation\\Loader\\QtFileLoader\">
            <tag name=\"translation.loader\" alias=\"ts\" />
        </service>

        <service id=\"translation.loader.csv\" class=\"Symfony\\Component\\Translation\\Loader\\CsvFileLoader\">
            <tag name=\"translation.loader\" alias=\"csv\" />
        </service>

        <service id=\"translation.loader.res\" class=\"Symfony\\Component\\Translation\\Loader\\IcuResFileLoader\">
            <tag name=\"translation.loader\" alias=\"res\" />
        </service>

        <service id=\"translation.loader.dat\" class=\"Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader\">
            <tag name=\"translation.loader\" alias=\"dat\" />
        </service>

        <service id=\"translation.loader.ini\" class=\"Symfony\\Component\\Translation\\Loader\\IniFileLoader\">
            <tag name=\"translation.loader\" alias=\"ini\" />
        </service>

        <service id=\"translation.loader.json\" class=\"Symfony\\Component\\Translation\\Loader\\JsonFileLoader\">
            <tag name=\"translation.loader\" alias=\"json\" />
        </service>

        <service id=\"translation.dumper.php\" class=\"Symfony\\Component\\Translation\\Dumper\\PhpFileDumper\">
            <tag name=\"translation.dumper\" alias=\"php\" />
        </service>

        <service id=\"translation.dumper.xliff\" class=\"Symfony\\Component\\Translation\\Dumper\\XliffFileDumper\">
            <tag name=\"translation.dumper\" alias=\"xlf\" />
        </service>

        <service id=\"translation.dumper.po\" class=\"Symfony\\Component\\Translation\\Dumper\\PoFileDumper\">
            <tag name=\"translation.dumper\" alias=\"po\" />
        </service>

        <service id=\"translation.dumper.mo\" class=\"Symfony\\Component\\Translation\\Dumper\\MoFileDumper\">
            <tag name=\"translation.dumper\" alias=\"mo\" />
        </service>

        <service id=\"translation.dumper.yml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\">
            <tag name=\"translation.dumper\" alias=\"yml\" />
        </service>

        <service id=\"translation.dumper.yaml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\">
            <argument>yaml</argument>
            <tag name=\"translation.dumper\" alias=\"yaml\" />
        </service>

        <service id=\"translation.dumper.qt\" class=\"Symfony\\Component\\Translation\\Dumper\\QtFileDumper\">
            <tag name=\"translation.dumper\" alias=\"ts\" />
        </service>

        <service id=\"translation.dumper.csv\" class=\"Symfony\\Component\\Translation\\Dumper\\CsvFileDumper\">
            <tag name=\"translation.dumper\" alias=\"csv\" />
        </service>

        <service id=\"translation.dumper.ini\" class=\"Symfony\\Component\\Translation\\Dumper\\IniFileDumper\">
            <tag name=\"translation.dumper\" alias=\"ini\" />
        </service>

        <service id=\"translation.dumper.json\" class=\"Symfony\\Component\\Translation\\Dumper\\JsonFileDumper\">
            <tag name=\"translation.dumper\" alias=\"json\" />
        </service>

        <service id=\"translation.dumper.res\" class=\"Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper\">
            <tag name=\"translation.dumper\" alias=\"res\" />
        </service>

        <service id=\"translation.extractor.php\" class=\"Symfony\\Component\\Translation\\Extractor\\PhpExtractor\">
            <tag name=\"translation.extractor\" alias=\"php\" />
        </service>

        <service id=\"translation.reader\" class=\"Symfony\\Component\\Translation\\Reader\\TranslationReader\" />
        <service id=\"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\" alias=\"translation.reader\" />

        <service id=\"translation.extractor\" class=\"Symfony\\Component\\Translation\\Extractor\\ChainExtractor\" />
        <service id=\"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\" alias=\"translation.extractor\" />

        <service id=\"translation.writer\" class=\"Symfony\\Component\\Translation\\Writer\\TranslationWriter\" />
        <service id=\"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\" alias=\"translation.writer\" />

        <service id=\"translation.warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TranslationsCacheWarmer\">
            <tag name=\"container.service_subscriber\" id=\"translator\" />
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/translation.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/translation.xml");
    }
}
