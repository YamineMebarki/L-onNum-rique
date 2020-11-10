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

/* vendor/symfony/service-contracts/Test/ServiceLocatorTest.php */
class __TwigTemplate_74effe3e158cadbb16ee6a48de68d4ec3c329ae106ae2368581a763e6a925e0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/Test/ServiceLocatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/Test/ServiceLocatorTest.php"));

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

namespace Symfony\\Contracts\\Service\\Test;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;

class ServiceLocatorTest extends TestCase
{
    public function getServiceLocator(array \$factories)
    {
        return new class(\$factories) implements ContainerInterface {
            use ServiceLocatorTrait;
        };
    }

    public function testHas()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
            function () { return 'dummy'; },
        ]);

        \$this->assertTrue(\$locator->has('foo'));
        \$this->assertTrue(\$locator->has('bar'));
        \$this->assertFalse(\$locator->has('dummy'));
    }

    public function testGet()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('baz', \$locator->get('bar'));
    }

    public function testGetDoesNotMemoize()
    {
        \$i = 0;
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$i) {
                ++\$i;

                return 'bar';
            },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame(2, \$i);
    }

    public function testThrowsOnUndefinedInternalService()
    {
        if (!\$this->getExpectedException()) {
            \$this->expectException('Psr\\Container\\NotFoundExceptionInterface');
            \$this->expectExceptionMessage('The service \"foo\" has a dependency on a non-existent service \"bar\". This locator only knows about the \"foo\" service.');
        }
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }

    public function testThrowsOnCircularReference()
    {
        \$this->expectException('Psr\\Container\\ContainerExceptionInterface');
        \$this->expectExceptionMessage('Circular reference detected for service \"bar\", path: \"bar -> baz -> bar\".');
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
            'bar' => function () use (&\$locator) { return \$locator->get('baz'); },
            'baz' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/service-contracts/Test/ServiceLocatorTest.php";
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

namespace Symfony\\Contracts\\Service\\Test;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;

class ServiceLocatorTest extends TestCase
{
    public function getServiceLocator(array \$factories)
    {
        return new class(\$factories) implements ContainerInterface {
            use ServiceLocatorTrait;
        };
    }

    public function testHas()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
            function () { return 'dummy'; },
        ]);

        \$this->assertTrue(\$locator->has('foo'));
        \$this->assertTrue(\$locator->has('bar'));
        \$this->assertFalse(\$locator->has('dummy'));
    }

    public function testGet()
    {
        \$locator = \$this->getServiceLocator([
            'foo' => function () { return 'bar'; },
            'bar' => function () { return 'baz'; },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('baz', \$locator->get('bar'));
    }

    public function testGetDoesNotMemoize()
    {
        \$i = 0;
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$i) {
                ++\$i;

                return 'bar';
            },
        ]);

        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame('bar', \$locator->get('foo'));
        \$this->assertSame(2, \$i);
    }

    public function testThrowsOnUndefinedInternalService()
    {
        if (!\$this->getExpectedException()) {
            \$this->expectException('Psr\\Container\\NotFoundExceptionInterface');
            \$this->expectExceptionMessage('The service \"foo\" has a dependency on a non-existent service \"bar\". This locator only knows about the \"foo\" service.');
        }
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }

    public function testThrowsOnCircularReference()
    {
        \$this->expectException('Psr\\Container\\ContainerExceptionInterface');
        \$this->expectExceptionMessage('Circular reference detected for service \"bar\", path: \"bar -> baz -> bar\".');
        \$locator = \$this->getServiceLocator([
            'foo' => function () use (&\$locator) { return \$locator->get('bar'); },
            'bar' => function () use (&\$locator) { return \$locator->get('baz'); },
            'baz' => function () use (&\$locator) { return \$locator->get('bar'); },
        ]);

        \$locator->get('foo');
    }
}
", "vendor/symfony/service-contracts/Test/ServiceLocatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/service-contracts/Test/ServiceLocatorTest.php");
    }
}
