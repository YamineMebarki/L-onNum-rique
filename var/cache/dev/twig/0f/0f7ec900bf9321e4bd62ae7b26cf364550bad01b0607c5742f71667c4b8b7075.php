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

/* var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php */
class __TwigTemplate_1eb9c6b0f7c35df25cec69a44e05db8499985e87cc879dcf069e4cf3180e38d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

\$this->privates['console.command.translation_debug'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand((\$this->services['translator'] ?? \$this->getTranslatorService()), (\$this->privates['translation.reader'] ?? \$this->load('getTranslation_ReaderService.php')), (\$this->privates['translation.extractor'] ?? \$this->load('getTranslation_ExtractorService.php')), (\$this->targetDirs[3].'/translations'), (\$this->targetDirs[3].'/templates'), [0 => (\$this->targetDirs[3].'/vendor/symfony/validator/Resources/translations'), 1 => (\$this->targetDirs[3].'/vendor/symfony/form/Resources/translations'), 2 => (\$this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations')], [0 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'), 1 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\$this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\$this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

\$instance->setName('debug:translation');

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php";
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
// Returns the private 'console.command.translation_debug' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

\$this->privates['console.command.translation_debug'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand((\$this->services['translator'] ?? \$this->getTranslatorService()), (\$this->privates['translation.reader'] ?? \$this->load('getTranslation_ReaderService.php')), (\$this->privates['translation.extractor'] ?? \$this->load('getTranslation_ExtractorService.php')), (\$this->targetDirs[3].'/translations'), (\$this->targetDirs[3].'/templates'), [0 => (\$this->targetDirs[3].'/vendor/symfony/validator/Resources/translations'), 1 => (\$this->targetDirs[3].'/vendor/symfony/form/Resources/translations'), 2 => (\$this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations')], [0 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'), 1 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 2 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\$this->targetDirs[3].'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\$this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\$this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\$this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

\$instance->setName('debug:translation');

return \$instance;
", "var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getConsole_Command_TranslationDebugService.php");
    }
}
