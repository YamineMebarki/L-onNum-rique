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

/* vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php */
class __TwigTemplate_ffc6d0c3880a9df56b89fa79bc14bde267c363ecafb7a76c1d71e7752993aeb1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckArgumentsValidityPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CheckArgumentsValidityPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments([null, 1, 'a']);
        \$definition->setMethodCalls([
            ['bar', ['a', 'b']],
            ['baz', ['c', 'd']],
        ]);

        \$pass = new CheckArgumentsValidityPass();
        \$pass->process(\$container);

        \$this->assertEquals([null, 1, 'a'], \$container->getDefinition('foo')->getArguments());
        \$this->assertEquals([
            ['bar', ['a', 'b']],
            ['baz', ['c', 'd']],
        ], \$container->getDefinition('foo')->getMethodCalls());
    }

    /**
     * @dataProvider definitionProvider
     */
    public function testException(array \$arguments, array \$methodCalls)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments(\$arguments);
        \$definition->setMethodCalls(\$methodCalls);

        \$pass = new CheckArgumentsValidityPass();
        \$pass->process(\$container);
    }

    public function definitionProvider()
    {
        return [
            [[null, 'a' => 'a'], []],
            [[1 => 1], []],
            [[], [['baz', [null, 'a' => 'a']]]],
            [[], [['baz', [1 => 1]]]],
        ];
    }

    public function testNoException()
    {
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments([null, 'a' => 'a']);

        \$pass = new CheckArgumentsValidityPass(false);
        \$pass->process(\$container);
        \$this->assertCount(1, \$definition->getErrors());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckArgumentsValidityPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CheckArgumentsValidityPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments([null, 1, 'a']);
        \$definition->setMethodCalls([
            ['bar', ['a', 'b']],
            ['baz', ['c', 'd']],
        ]);

        \$pass = new CheckArgumentsValidityPass();
        \$pass->process(\$container);

        \$this->assertEquals([null, 1, 'a'], \$container->getDefinition('foo')->getArguments());
        \$this->assertEquals([
            ['bar', ['a', 'b']],
            ['baz', ['c', 'd']],
        ], \$container->getDefinition('foo')->getMethodCalls());
    }

    /**
     * @dataProvider definitionProvider
     */
    public function testException(array \$arguments, array \$methodCalls)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments(\$arguments);
        \$definition->setMethodCalls(\$methodCalls);

        \$pass = new CheckArgumentsValidityPass();
        \$pass->process(\$container);
    }

    public function definitionProvider()
    {
        return [
            [[null, 'a' => 'a'], []],
            [[1 => 1], []],
            [[], [['baz', [null, 'a' => 'a']]]],
            [[], [['baz', [1 => 1]]]],
        ];
    }

    public function testNoException()
    {
        \$container = new ContainerBuilder();
        \$definition = \$container->register('foo');
        \$definition->setArguments([null, 'a' => 'a']);

        \$pass = new CheckArgumentsValidityPass(false);
        \$pass->process(\$container);
        \$this->assertCount(1, \$definition->getErrors());
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/CheckArgumentsValidityPassTest.php");
    }
}
