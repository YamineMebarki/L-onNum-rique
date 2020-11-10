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

/* vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php */
class __TwigTemplate_72ceaa2bb5ac1ae8fbe22f7df2d2d8b40e17e8cb099be001253ed85ff839f49c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ExtensionCompilerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;

/**
 * @author Wouter J <wouter@wouterj.nl>
 */
class ExtensionCompilerPassTest extends TestCase
{
    private \$container;
    private \$pass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->pass = new ExtensionCompilerPass();
    }

    public function testProcess()
    {
        \$extension1 = new CompilerPassExtension('extension1');
        \$extension2 = new DummyExtension('extension2');
        \$extension3 = new DummyExtension('extension3');
        \$extension4 = new CompilerPassExtension('extension4');

        \$this->container->registerExtension(\$extension1);
        \$this->container->registerExtension(\$extension2);
        \$this->container->registerExtension(\$extension3);
        \$this->container->registerExtension(\$extension4);

        \$this->pass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('extension1'));
        \$this->assertFalse(\$this->container->hasDefinition('extension2'));
        \$this->assertFalse(\$this->container->hasDefinition('extension3'));
        \$this->assertTrue(\$this->container->hasDefinition('extension4'));
    }
}

class DummyExtension extends Extension
{
    private \$alias;

    public function __construct(\$alias)
    {
        \$this->alias = \$alias;
    }

    public function getAlias()
    {
        return \$this->alias;
    }

    public function load(array \$configs, ContainerBuilder \$container)
    {
    }

    public function process(ContainerBuilder \$container)
    {
        \$container->register(\$this->alias);
    }
}

class CompilerPassExtension extends DummyExtension implements CompilerPassInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ExtensionCompilerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;

/**
 * @author Wouter J <wouter@wouterj.nl>
 */
class ExtensionCompilerPassTest extends TestCase
{
    private \$container;
    private \$pass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->pass = new ExtensionCompilerPass();
    }

    public function testProcess()
    {
        \$extension1 = new CompilerPassExtension('extension1');
        \$extension2 = new DummyExtension('extension2');
        \$extension3 = new DummyExtension('extension3');
        \$extension4 = new CompilerPassExtension('extension4');

        \$this->container->registerExtension(\$extension1);
        \$this->container->registerExtension(\$extension2);
        \$this->container->registerExtension(\$extension3);
        \$this->container->registerExtension(\$extension4);

        \$this->pass->process(\$this->container);

        \$this->assertTrue(\$this->container->hasDefinition('extension1'));
        \$this->assertFalse(\$this->container->hasDefinition('extension2'));
        \$this->assertFalse(\$this->container->hasDefinition('extension3'));
        \$this->assertTrue(\$this->container->hasDefinition('extension4'));
    }
}

class DummyExtension extends Extension
{
    private \$alias;

    public function __construct(\$alias)
    {
        \$this->alias = \$alias;
    }

    public function getAlias()
    {
        return \$this->alias;
    }

    public function load(array \$configs, ContainerBuilder \$container)
    {
    }

    public function process(ContainerBuilder \$container)
    {
        \$container->register(\$this->alias);
    }
}

class CompilerPassExtension extends DummyExtension implements CompilerPassInterface
{
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ExtensionCompilerPassTest.php");
    }
}
