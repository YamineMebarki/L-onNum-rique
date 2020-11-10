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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php */
class __TwigTemplate_e47544bf24fc84691eaf651d6d770ffcf13bccb57f625aeac799e940c98b6c82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddDebugLogProcessorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }
        if (!\$container->hasDefinition('monolog.logger_prototype')) {
            return;
        }
        if (!\$container->hasDefinition('debug.log_processor')) {
            return;
        }

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$definition->setConfigurator([__CLASS__, 'configureLogger']);
        \$definition->addMethodCall('pushProcessor', [new Reference('debug.log_processor')]);
    }

    public static function configureLogger(\$logger)
    {
        if (method_exists(\$logger, 'removeDebugLogger') && \\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            \$logger->removeDebugLogger();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddDebugLogProcessorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }
        if (!\$container->hasDefinition('monolog.logger_prototype')) {
            return;
        }
        if (!\$container->hasDefinition('debug.log_processor')) {
            return;
        }

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$definition->setConfigurator([__CLASS__, 'configureLogger']);
        \$definition->addMethodCall('pushProcessor', [new Reference('debug.log_processor')]);
    }

    public static function configureLogger(\$logger)
    {
        if (method_exists(\$logger, 'removeDebugLogger') && \\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            \$logger->removeDebugLogger();
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php");
    }
}
