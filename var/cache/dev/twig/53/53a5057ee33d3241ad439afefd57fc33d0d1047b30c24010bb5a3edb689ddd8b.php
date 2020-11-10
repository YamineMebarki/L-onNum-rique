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

/* vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php */
class __TwigTemplate_0ce50b2daf41fc14bae980cf29e40098418ad5cce557b80caef231266b72ef66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\CommandLoader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class ContainerCommandLoaderTest extends TestCase
{
    public function testHas()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertTrue(\$loader->has('foo'));
        \$this->assertTrue(\$loader->has('bar'));
        \$this->assertFalse(\$loader->has('baz'));
    }

    public function testGet()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertInstanceOf(Command::class, \$loader->get('foo'));
        \$this->assertInstanceOf(Command::class, \$loader->get('bar'));
    }

    public function testGetUnknownCommandThrows()
    {
        \$this->expectException('Symfony\\Component\\Console\\Exception\\CommandNotFoundException');
        (new ContainerCommandLoader(new ServiceLocator([]), []))->get('unknown');
    }

    public function testGetCommandNames()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertSame(['foo', 'bar'], \$loader->getNames());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\CommandLoader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class ContainerCommandLoaderTest extends TestCase
{
    public function testHas()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertTrue(\$loader->has('foo'));
        \$this->assertTrue(\$loader->has('bar'));
        \$this->assertFalse(\$loader->has('baz'));
    }

    public function testGet()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertInstanceOf(Command::class, \$loader->get('foo'));
        \$this->assertInstanceOf(Command::class, \$loader->get('bar'));
    }

    public function testGetUnknownCommandThrows()
    {
        \$this->expectException('Symfony\\Component\\Console\\Exception\\CommandNotFoundException');
        (new ContainerCommandLoader(new ServiceLocator([]), []))->get('unknown');
    }

    public function testGetCommandNames()
    {
        \$loader = new ContainerCommandLoader(new ServiceLocator([
            'foo-service' => function () { return new Command('foo'); },
            'bar-service' => function () { return new Command('bar'); },
        ]), ['foo' => 'foo-service', 'bar' => 'bar-service']);

        \$this->assertSame(['foo', 'bar'], \$loader->getNames());
    }
}
", "vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/CommandLoader/ContainerCommandLoaderTest.php");
    }
}
