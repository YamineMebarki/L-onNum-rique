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

/* var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php */
class __TwigTemplate_e987eb52800bfa1a0fc9bcfc28310c6c417ebf78ec1a49183ba0311c7a3e59bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.variadic' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

return \$this->privates['debug.argument_resolver.variadic'] = new \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver(new \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver(), (\$this->privates['debug.stopwatch'] ?? (\$this->privates['debug.stopwatch'] = new \\Symfony\\Component\\Stopwatch\\Stopwatch(true))));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php";
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
// Returns the private 'debug.argument_resolver.variadic' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

return \$this->privates['debug.argument_resolver.variadic'] = new \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver(new \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver(), (\$this->privates['debug.stopwatch'] ?? (\$this->privates['debug.stopwatch'] = new \\Symfony\\Component\\Stopwatch\\Stopwatch(true))));
", "var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getDebug_ArgumentResolver_VariadicService.php");
    }
}
