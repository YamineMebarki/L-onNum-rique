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

/* vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php */
class __TwigTemplate_fc04797d93b19aec32691afc957d81963fee1e384d4c0bdfcfb818a1ce1d07fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Config;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class ContainerParametersResourceCheckerTest extends TestCase
{
    /** @var ContainerParametersResource */
    private \$resource;

    /** @var ResourceCheckerInterface */
    private \$resourceChecker;

    /** @var ContainerInterface */
    private \$container;

    protected function setUp(): void
    {
        \$this->resource = new ContainerParametersResource(['locales' => ['fr', 'en'], 'default_locale' => 'fr']);
        \$this->container = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$this->resourceChecker = new ContainerParametersResourceChecker(\$this->container);
    }

    public function testSupports()
    {
        \$this->assertTrue(\$this->resourceChecker->supports(\$this->resource));
    }

    /**
     * @dataProvider isFreshProvider
     */
    public function testIsFresh(callable \$mockContainer, \$expected)
    {
        \$mockContainer(\$this->container);

        \$this->assertSame(\$expected, \$this->resourceChecker->isFresh(\$this->resource, time()));
    }

    public function isFreshProvider()
    {
        yield 'not fresh on missing parameter' => [function (MockObject \$container) {
            \$container->method('hasParameter')->with('locales')->willReturn(false);
        }, false];

        yield 'not fresh on different value' => [function (MockObject \$container) {
            \$container->method('getParameter')->with('locales')->willReturn(['nl', 'es']);
        }, false];

        yield 'fresh on every identical parameters' => [function (MockObject \$container) {
            \$container->expects(\$this->exactly(2))->method('hasParameter')->willReturn(true);
            \$container->expects(\$this->exactly(2))->method('getParameter')
                ->withConsecutive(
                    [\$this->equalTo('locales')],
                    [\$this->equalTo('default_locale')]
                )
                ->willReturnMap([
                    ['locales', ['fr', 'en']],
                    ['default_locale', 'fr'],
                ])
            ;
        }, true];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Config;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class ContainerParametersResourceCheckerTest extends TestCase
{
    /** @var ContainerParametersResource */
    private \$resource;

    /** @var ResourceCheckerInterface */
    private \$resourceChecker;

    /** @var ContainerInterface */
    private \$container;

    protected function setUp(): void
    {
        \$this->resource = new ContainerParametersResource(['locales' => ['fr', 'en'], 'default_locale' => 'fr']);
        \$this->container = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$this->resourceChecker = new ContainerParametersResourceChecker(\$this->container);
    }

    public function testSupports()
    {
        \$this->assertTrue(\$this->resourceChecker->supports(\$this->resource));
    }

    /**
     * @dataProvider isFreshProvider
     */
    public function testIsFresh(callable \$mockContainer, \$expected)
    {
        \$mockContainer(\$this->container);

        \$this->assertSame(\$expected, \$this->resourceChecker->isFresh(\$this->resource, time()));
    }

    public function isFreshProvider()
    {
        yield 'not fresh on missing parameter' => [function (MockObject \$container) {
            \$container->method('hasParameter')->with('locales')->willReturn(false);
        }, false];

        yield 'not fresh on different value' => [function (MockObject \$container) {
            \$container->method('getParameter')->with('locales')->willReturn(['nl', 'es']);
        }, false];

        yield 'fresh on every identical parameters' => [function (MockObject \$container) {
            \$container->expects(\$this->exactly(2))->method('hasParameter')->willReturn(true);
            \$container->expects(\$this->exactly(2))->method('getParameter')
                ->withConsecutive(
                    [\$this->equalTo('locales')],
                    [\$this->equalTo('default_locale')]
                )
                ->willReturnMap([
                    ['locales', ['fr', 'en']],
                    ['default_locale', 'fr'],
                ])
            ;
        }, true];
    }
}
", "vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Config/ContainerParametersResourceCheckerTest.php");
    }
}
