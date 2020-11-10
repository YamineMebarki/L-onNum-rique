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

/* var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php */
class __TwigTemplate_84002d4c5e38aa46cb5f3a9b92d5e3e8e97073c6c42b8dd169fc951b5a2d8bf7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.error_listener' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/EventListener/ErrorListener.php';

\$a = new \\Symfony\\Bridge\\Monolog\\Logger('console');
\$a->pushProcessor((\$this->privates['debug.log_processor'] ?? \$this->getDebug_LogProcessorService()));
\$a->pushHandler((\$this->privates['monolog.handler.main'] ?? \$this->getMonolog_Handler_MainService()));
\\Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass::configureLogger(\$a);

return \$this->privates['console.error_listener'] = new \\Symfony\\Component\\Console\\EventListener\\ErrorListener(\$a);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php";
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
// Returns the private 'console.error_listener' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/EventListener/ErrorListener.php';

\$a = new \\Symfony\\Bridge\\Monolog\\Logger('console');
\$a->pushProcessor((\$this->privates['debug.log_processor'] ?? \$this->getDebug_LogProcessorService()));
\$a->pushHandler((\$this->privates['monolog.handler.main'] ?? \$this->getMonolog_Handler_MainService()));
\\Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass::configureLogger(\$a);

return \$this->privates['console.error_listener'] = new \\Symfony\\Component\\Console\\EventListener\\ErrorListener(\$a);
", "var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getConsole_ErrorListenerService.php");
    }
}