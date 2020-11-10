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

/* vendor/symfony/debug-bundle/DebugBundle.php */
class __TwigTemplate_87c0b4398714307ffef9fbe1b0b64e9e299255d8fd4874f04bdd284d027a1ea7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DebugBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DebugBundle.php"));

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

namespace Symfony\\Bundle\\DebugBundle;

use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\Compiler\\DumpDataCollectorPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugBundle extends Bundle
{
    public function boot()
    {
        if (\$this->container->getParameter('kernel.debug')) {
            \$container = \$this->container;

            // This code is here to lazy load the dump stack. This default
            // configuration is overridden in CLI mode on 'console.command' event.
            // The dump data collector is used by default, so dump output is sent to
            // the WDT. In a CLI context, if dump is used too soon, the data collector
            // will buffer it, and release it at the end of the script.
            VarDumper::setHandler(function (\$var) use (\$container) {
                \$dumper = \$container->get('data_collector.dump');
                \$cloner = \$container->get('var_dumper.cloner');
                \$handler = function (\$var) use (\$dumper, \$cloner) {
                    \$dumper->dump(\$cloner->cloneVar(\$var));
                };
                VarDumper::setHandler(\$handler);
                \$handler(\$var);
            });
        }
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new DumpDataCollectorPass());
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/DebugBundle.php";
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

namespace Symfony\\Bundle\\DebugBundle;

use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\Compiler\\DumpDataCollectorPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugBundle extends Bundle
{
    public function boot()
    {
        if (\$this->container->getParameter('kernel.debug')) {
            \$container = \$this->container;

            // This code is here to lazy load the dump stack. This default
            // configuration is overridden in CLI mode on 'console.command' event.
            // The dump data collector is used by default, so dump output is sent to
            // the WDT. In a CLI context, if dump is used too soon, the data collector
            // will buffer it, and release it at the end of the script.
            VarDumper::setHandler(function (\$var) use (\$container) {
                \$dumper = \$container->get('data_collector.dump');
                \$cloner = \$container->get('var_dumper.cloner');
                \$handler = function (\$var) use (\$dumper, \$cloner) {
                    \$dumper->dump(\$cloner->cloneVar(\$var));
                };
                VarDumper::setHandler(\$handler);
                \$handler(\$var);
            });
        }
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new DumpDataCollectorPass());
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
", "vendor/symfony/debug-bundle/DebugBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/DebugBundle.php");
    }
}
