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

/* vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php */
class __TwigTemplate_ad4142bf262d17464f9f21ce3a0ef7822c977f597d8a821d9872d29b5418e33c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php"));

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

namespace Symfony\\Bundle\\DebugBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\Compiler\\DumpDataCollectorPass;
use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class DumpDataCollectorPassTest extends TestCase
{
    public function testProcessWithoutFileLinkFormatParameter()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, null]);
        \$container->setDefinition('data_collector.dump', \$definition);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(1));
    }

    public function testProcessWithToolbarEnabled()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());
        \$requestStack = new RequestStack();

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, \$requestStack]);
        \$container->setDefinition('data_collector.dump', \$definition);
        \$container->setParameter('web_profiler.debug_toolbar.mode', WebDebugToolbarListener::ENABLED);

        \$container->compile();

        \$this->assertSame(\$requestStack, \$definition->getArgument(3));
    }

    public function testProcessWithToolbarDisabled()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, new RequestStack()]);
        \$container->setDefinition('data_collector.dump', \$definition);
        \$container->setParameter('web_profiler.debug_toolbar.mode', WebDebugToolbarListener::DISABLED);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(3));
    }

    public function testProcessWithoutToolbar()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, new RequestStack()]);
        \$container->setDefinition('data_collector.dump', \$definition);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(3));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php";
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

namespace Symfony\\Bundle\\DebugBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\Compiler\\DumpDataCollectorPass;
use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class DumpDataCollectorPassTest extends TestCase
{
    public function testProcessWithoutFileLinkFormatParameter()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, null]);
        \$container->setDefinition('data_collector.dump', \$definition);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(1));
    }

    public function testProcessWithToolbarEnabled()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());
        \$requestStack = new RequestStack();

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, \$requestStack]);
        \$container->setDefinition('data_collector.dump', \$definition);
        \$container->setParameter('web_profiler.debug_toolbar.mode', WebDebugToolbarListener::ENABLED);

        \$container->compile();

        \$this->assertSame(\$requestStack, \$definition->getArgument(3));
    }

    public function testProcessWithToolbarDisabled()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, new RequestStack()]);
        \$container->setDefinition('data_collector.dump', \$definition);
        \$container->setParameter('web_profiler.debug_toolbar.mode', WebDebugToolbarListener::DISABLED);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(3));
    }

    public function testProcessWithoutToolbar()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new DumpDataCollectorPass());

        \$definition = new Definition('Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector', [null, null, null, new RequestStack()]);
        \$container->setDefinition('data_collector.dump', \$definition);

        \$container->compile();

        \$this->assertNull(\$definition->getArgument(3));
    }
}
", "vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/Tests/DependencyInjection/Compiler/DumpDataCollectorPassTest.php");
    }
}
