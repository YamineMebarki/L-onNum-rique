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

/* var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php */
class __TwigTemplate_4b8c97426927fa676e63e746db0a86d10f86eb2c36b8640213586309ef3518f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

\$this->privates['console.command.cache_pool_prune'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => (\$this->services['cache.app'] ?? \$this->getCache_AppService());
    yield 'cache.system' => (\$this->services['cache.system'] ?? \$this->getCache_SystemService());
    yield 'cache.validator' => (\$this->privates['cache.validator'] ?? \$this->getCache_ValidatorService());
    yield 'cache.serializer' => (\$this->privates['cache.serializer'] ?? \$this->getCache_SerializerService());
    yield 'cache.annotations' => (\$this->privates['cache.annotations'] ?? \$this->getCache_AnnotationsService());
    yield 'cache.property_info' => (\$this->privates['cache.property_info'] ?? \$this->getCache_PropertyInfoService());
    yield 'cache.messenger.restart_workers_signal' => (\$this->privates['cache.messenger.restart_workers_signal'] ?? \$this->getCache_Messenger_RestartWorkersSignalService());
    yield 'cache.security_expression_language' => (\$this->privates['cache.security_expression_language'] ?? \$this->getCache_SecurityExpressionLanguageService());
}, 8));

\$instance->setName('cache:pool:prune');

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php";
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
// Returns the private 'console.command.cache_pool_prune' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

\$this->privates['console.command.cache_pool_prune'] = \$instance = new \\Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => (\$this->services['cache.app'] ?? \$this->getCache_AppService());
    yield 'cache.system' => (\$this->services['cache.system'] ?? \$this->getCache_SystemService());
    yield 'cache.validator' => (\$this->privates['cache.validator'] ?? \$this->getCache_ValidatorService());
    yield 'cache.serializer' => (\$this->privates['cache.serializer'] ?? \$this->getCache_SerializerService());
    yield 'cache.annotations' => (\$this->privates['cache.annotations'] ?? \$this->getCache_AnnotationsService());
    yield 'cache.property_info' => (\$this->privates['cache.property_info'] ?? \$this->getCache_PropertyInfoService());
    yield 'cache.messenger.restart_workers_signal' => (\$this->privates['cache.messenger.restart_workers_signal'] ?? \$this->getCache_Messenger_RestartWorkersSignalService());
    yield 'cache.security_expression_language' => (\$this->privates['cache.security_expression_language'] ?? \$this->getCache_SecurityExpressionLanguageService());
}, 8));

\$instance->setName('cache:pool:prune');

return \$instance;
", "var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getConsole_Command_CachePoolPruneService.php");
    }
}
