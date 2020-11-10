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

/* var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php */
class __TwigTemplate_96c57a521b353a485b88cf3a223586d2e2f771d736d50d048fc7497cb3e25cce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'web_profiler.controller.exception' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php';

return \$this->services['web_profiler.controller.exception'] = new \\Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController((\$this->services['profiler'] ?? \$this->getProfilerService()), (\$this->services['twig'] ?? \$this->getTwigService()), true, (\$this->privates['debug.file_link_formatter'] ?? \$this->getDebug_FileLinkFormatterService()));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php";
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
// Returns the public 'web_profiler.controller.exception' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php';

return \$this->services['web_profiler.controller.exception'] = new \\Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController((\$this->services['profiler'] ?? \$this->getProfilerService()), (\$this->services['twig'] ?? \$this->getTwigService()), true, (\$this->privates['debug.file_link_formatter'] ?? \$this->getDebug_FileLinkFormatterService()));
", "var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getWebProfiler_Controller_ExceptionService.php");
    }
}
