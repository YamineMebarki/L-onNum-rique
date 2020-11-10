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

/* var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php */
class __TwigTemplate_1e00031c218fc0d7315de46ffdd9d5d14472cfbd0d8a104388f66277e4618ca6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriter.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/DumperInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/FileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/PoFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/MoFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/QtFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/IniFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

\$a = new \\Symfony\\Component\\Translation\\Writer\\TranslationWriter();
\$a->addDumper('php', new \\Symfony\\Component\\Translation\\Dumper\\PhpFileDumper());
\$a->addDumper('xlf', new \\Symfony\\Component\\Translation\\Dumper\\XliffFileDumper());
\$a->addDumper('po', new \\Symfony\\Component\\Translation\\Dumper\\PoFileDumper());
\$a->addDumper('mo', new \\Symfony\\Component\\Translation\\Dumper\\MoFileDumper());
\$a->addDumper('yml', new \\Symfony\\Component\\Translation\\Dumper\\YamlFileDumper());
\$a->addDumper('yaml', new \\Symfony\\Component\\Translation\\Dumper\\YamlFileDumper('yaml'));
\$a->addDumper('ts', new \\Symfony\\Component\\Translation\\Dumper\\QtFileDumper());
\$a->addDumper('csv', new \\Symfony\\Component\\Translation\\Dumper\\CsvFileDumper());
\$a->addDumper('ini', new \\Symfony\\Component\\Translation\\Dumper\\IniFileDumper());
\$a->addDumper('json', new \\Symfony\\Component\\Translation\\Dumper\\JsonFileDumper());
\$a->addDumper('res', new \\Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper());

\$this->privates['console.command.translation_update'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand(\$a, (\$this->privates['translation.reader'] ?? \$this->load('getTranslation_ReaderService.php')), (\$this->privates['translation.extractor'] ?? \$this->load('getTranslation_ExtractorService.php')), 'en', (\$this->targetDirs[3].'/translations'), (\$this->targetDirs[3].'/templates'), [0 => (\$this->targetDirs[3].'/vendor/symfony/validator/Resources/translations'), 1 => (\$this->targetDirs[3].'/vendor/symfony/form/Resources/translations'), 2 => (\$this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations')], [0 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'), 1 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\$this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\$this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

\$instance->setName('translation:update');

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Writer/TranslationWriter.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/DumperInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/FileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/PoFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/MoFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/QtFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/IniFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
include_once \$this->targetDirs[3].'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

\$a = new \\Symfony\\Component\\Translation\\Writer\\TranslationWriter();
\$a->addDumper('php', new \\Symfony\\Component\\Translation\\Dumper\\PhpFileDumper());
\$a->addDumper('xlf', new \\Symfony\\Component\\Translation\\Dumper\\XliffFileDumper());
\$a->addDumper('po', new \\Symfony\\Component\\Translation\\Dumper\\PoFileDumper());
\$a->addDumper('mo', new \\Symfony\\Component\\Translation\\Dumper\\MoFileDumper());
\$a->addDumper('yml', new \\Symfony\\Component\\Translation\\Dumper\\YamlFileDumper());
\$a->addDumper('yaml', new \\Symfony\\Component\\Translation\\Dumper\\YamlFileDumper('yaml'));
\$a->addDumper('ts', new \\Symfony\\Component\\Translation\\Dumper\\QtFileDumper());
\$a->addDumper('csv', new \\Symfony\\Component\\Translation\\Dumper\\CsvFileDumper());
\$a->addDumper('ini', new \\Symfony\\Component\\Translation\\Dumper\\IniFileDumper());
\$a->addDumper('json', new \\Symfony\\Component\\Translation\\Dumper\\JsonFileDumper());
\$a->addDumper('res', new \\Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper());

\$this->privates['console.command.translation_update'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand(\$a, (\$this->privates['translation.reader'] ?? \$this->load('getTranslation_ReaderService.php')), (\$this->privates['translation.extractor'] ?? \$this->load('getTranslation_ExtractorService.php')), 'en', (\$this->targetDirs[3].'/translations'), (\$this->targetDirs[3].'/templates'), [0 => (\$this->targetDirs[3].'/vendor/symfony/validator/Resources/translations'), 1 => (\$this->targetDirs[3].'/vendor/symfony/form/Resources/translations'), 2 => (\$this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations')], [0 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'), 1 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\$this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\$this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

\$instance->setName('translation:update');

return \$instance;
", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationUpdateService.php");
    }
}