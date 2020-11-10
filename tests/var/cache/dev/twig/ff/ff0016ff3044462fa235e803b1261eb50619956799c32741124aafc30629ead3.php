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

/* vendor/symfony/translation/CHANGELOG.md */
class __TwigTemplate_159f444ddf8830f3edb836d588404a99e24ef30e3bfba03dfcbd95594f2b3c6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * Improved Xliff 1.2 loader to load the original file's metadata
 * Added `TranslatorPathsPass`

4.2.0
-----

 * Started using ICU parent locales as fallback locales.
 * allow using the ICU message format using domains with the \"+intl-icu\" suffix
 * deprecated `Translator::transChoice()` in favor of using `Translator::trans()` with a `%count%` parameter
 * deprecated `TranslatorInterface` in favor of `Symfony\\Contracts\\Translation\\TranslatorInterface`
 * deprecated `MessageSelector`, `Interval` and `PluralizationRules`; use `IdentityTranslator` instead
 * Added `IntlFormatter` and `IntlFormatterInterface`
 * added support for multiple files and directories in `XliffLintCommand`
 * Marked `Translator::getFallbackLocales()` and `TranslationDataCollector::getFallbackLocales()` as internal

4.1.0
-----

 * The `FileDumper::setBackup()` method is deprecated.
 * The `TranslationWriter::disableBackup()` method is deprecated.
 * The `XliffFileDumper` will write \"name\" on the \"unit\" node when dumping XLIFF 2.0.

4.0.0
-----

 * removed the backup feature of the `FileDumper` class
 * removed `TranslationWriter::writeTranslations()` method
 * removed support for passing `MessageSelector` instances to the constructor of the `Translator` class

3.4.0
-----

 * Added `TranslationDumperPass`
 * Added `TranslationExtractorPass`
 * Added `TranslatorPass`
 * Added `TranslationReader` and `TranslationReaderInterface`
 * Added `<notes>` section to the Xliff 2.0 dumper.
 * Improved Xliff 2.0 loader to load `<notes>` section.
 * Added `TranslationWriterInterface`
 * Deprecated `TranslationWriter::writeTranslations` in favor of `TranslationWriter::write`
 * added support for adding custom message formatter and decoupling the default one.
 * Added `PhpExtractor`
 * Added `PhpStringTokenParser`

3.2.0
-----

 * Added support for escaping `|` in plural translations with double pipe.

3.1.0
-----

 * Deprecated the backup feature of the file dumper classes.

3.0.0
-----

 * removed `FileDumper::format()` method.
 * Changed the visibility of the locale property in `Translator` from protected to private.

2.8.0
-----

 * deprecated FileDumper::format(), overwrite FileDumper::formatCatalogue() instead.
 * deprecated Translator::getMessages(), rely on TranslatorBagInterface::getCatalogue() instead.
 * added `FileDumper::formatCatalogue` which allows format the catalogue without dumping it into file.
 * added option `json_encoding` to JsonFileDumper
 * added options `as_tree`, `inline` to YamlFileDumper
 * added support for XLIFF 2.0.
 * added support for XLIFF target and tool attributes.
 * added message parameters to DataCollectorTranslator.
 * [DEPRECATION] The `DiffOperation` class has been deprecated and
   will be removed in Symfony 3.0, since its operation has nothing to do with 'diff',
   so the class name is misleading. The `TargetOperation` class should be used for
   this use-case instead.

2.7.0
-----

 * added DataCollectorTranslator for collecting the translated messages.

2.6.0
-----

 * added possibility to cache catalogues
 * added TranslatorBagInterface
 * added LoggingTranslator
 * added Translator::getMessages() for retrieving the message catalogue as an array

2.5.0
-----

 * added relative file path template to the file dumpers
 * added optional backup to the file dumpers
 * changed IcuResFileDumper to extend FileDumper

2.3.0
-----

 * added classes to make operations on catalogues (like making a diff or a merge on 2 catalogues)
 * added Translator::getFallbackLocales()
 * deprecated Translator::setFallbackLocale() in favor of the new Translator::setFallbackLocales() method

2.2.0
-----

 * QtTranslationsLoader class renamed to QtFileLoader. QtTranslationsLoader is deprecated and will be removed in 2.3.
 * [BC BREAK] uniformized the exception thrown by the load() method when an error occurs. The load() method now
   throws Symfony\\Component\\Translation\\Exception\\NotFoundResourceException when a resource cannot be found
   and Symfony\\Component\\Translation\\Exception\\InvalidResourceException when a resource is invalid.
 * changed the exception class thrown by some load() methods from \\RuntimeException to \\InvalidArgumentException
   (IcuDatFileLoader, IcuResFileLoader and QtFileLoader)

2.1.0
-----

 * added support for more than one fallback locale
 * added support for extracting translation messages from templates (Twig and PHP)
 * added dumpers for translation catalogs
 * added support for QT, gettext, and ResourceBundles
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/CHANGELOG.md";
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

 * Improved Xliff 1.2 loader to load the original file's metadata
 * Added `TranslatorPathsPass`

4.2.0
-----

 * Started using ICU parent locales as fallback locales.
 * allow using the ICU message format using domains with the \"+intl-icu\" suffix
 * deprecated `Translator::transChoice()` in favor of using `Translator::trans()` with a `%count%` parameter
 * deprecated `TranslatorInterface` in favor of `Symfony\\Contracts\\Translation\\TranslatorInterface`
 * deprecated `MessageSelector`, `Interval` and `PluralizationRules`; use `IdentityTranslator` instead
 * Added `IntlFormatter` and `IntlFormatterInterface`
 * added support for multiple files and directories in `XliffLintCommand`
 * Marked `Translator::getFallbackLocales()` and `TranslationDataCollector::getFallbackLocales()` as internal

4.1.0
-----

 * The `FileDumper::setBackup()` method is deprecated.
 * The `TranslationWriter::disableBackup()` method is deprecated.
 * The `XliffFileDumper` will write \"name\" on the \"unit\" node when dumping XLIFF 2.0.

4.0.0
-----

 * removed the backup feature of the `FileDumper` class
 * removed `TranslationWriter::writeTranslations()` method
 * removed support for passing `MessageSelector` instances to the constructor of the `Translator` class

3.4.0
-----

 * Added `TranslationDumperPass`
 * Added `TranslationExtractorPass`
 * Added `TranslatorPass`
 * Added `TranslationReader` and `TranslationReaderInterface`
 * Added `<notes>` section to the Xliff 2.0 dumper.
 * Improved Xliff 2.0 loader to load `<notes>` section.
 * Added `TranslationWriterInterface`
 * Deprecated `TranslationWriter::writeTranslations` in favor of `TranslationWriter::write`
 * added support for adding custom message formatter and decoupling the default one.
 * Added `PhpExtractor`
 * Added `PhpStringTokenParser`

3.2.0
-----

 * Added support for escaping `|` in plural translations with double pipe.

3.1.0
-----

 * Deprecated the backup feature of the file dumper classes.

3.0.0
-----

 * removed `FileDumper::format()` method.
 * Changed the visibility of the locale property in `Translator` from protected to private.

2.8.0
-----

 * deprecated FileDumper::format(), overwrite FileDumper::formatCatalogue() instead.
 * deprecated Translator::getMessages(), rely on TranslatorBagInterface::getCatalogue() instead.
 * added `FileDumper::formatCatalogue` which allows format the catalogue without dumping it into file.
 * added option `json_encoding` to JsonFileDumper
 * added options `as_tree`, `inline` to YamlFileDumper
 * added support for XLIFF 2.0.
 * added support for XLIFF target and tool attributes.
 * added message parameters to DataCollectorTranslator.
 * [DEPRECATION] The `DiffOperation` class has been deprecated and
   will be removed in Symfony 3.0, since its operation has nothing to do with 'diff',
   so the class name is misleading. The `TargetOperation` class should be used for
   this use-case instead.

2.7.0
-----

 * added DataCollectorTranslator for collecting the translated messages.

2.6.0
-----

 * added possibility to cache catalogues
 * added TranslatorBagInterface
 * added LoggingTranslator
 * added Translator::getMessages() for retrieving the message catalogue as an array

2.5.0
-----

 * added relative file path template to the file dumpers
 * added optional backup to the file dumpers
 * changed IcuResFileDumper to extend FileDumper

2.3.0
-----

 * added classes to make operations on catalogues (like making a diff or a merge on 2 catalogues)
 * added Translator::getFallbackLocales()
 * deprecated Translator::setFallbackLocale() in favor of the new Translator::setFallbackLocales() method

2.2.0
-----

 * QtTranslationsLoader class renamed to QtFileLoader. QtTranslationsLoader is deprecated and will be removed in 2.3.
 * [BC BREAK] uniformized the exception thrown by the load() method when an error occurs. The load() method now
   throws Symfony\\Component\\Translation\\Exception\\NotFoundResourceException when a resource cannot be found
   and Symfony\\Component\\Translation\\Exception\\InvalidResourceException when a resource is invalid.
 * changed the exception class thrown by some load() methods from \\RuntimeException to \\InvalidArgumentException
   (IcuDatFileLoader, IcuResFileLoader and QtFileLoader)

2.1.0
-----

 * added support for more than one fallback locale
 * added support for extracting translation messages from templates (Twig and PHP)
 * added dumpers for translation catalogs
 * added support for QT, gettext, and ResourceBundles
", "vendor/symfony/translation/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/translation/CHANGELOG.md");
    }
}
