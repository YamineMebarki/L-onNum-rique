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

/* var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php */
class __TwigTemplate_5becc70ca0621624aeb1db8340801ef10f79c135337d3406043fdf45924542c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

return \$this->services['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\TemplateController'] = new \\Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController((\$this->services['twig'] ?? \$this->getTwigService()), NULL);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php";
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
// Returns the public 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

return \$this->services['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\TemplateController'] = new \\Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController((\$this->services['twig'] ?? \$this->getTwigService()), NULL);
", "var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getTemplateControllerService.php");
    }
}
