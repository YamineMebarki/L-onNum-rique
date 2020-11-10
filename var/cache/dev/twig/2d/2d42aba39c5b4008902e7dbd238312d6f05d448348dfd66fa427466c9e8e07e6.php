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

/* vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php */
class __TwigTemplate_194f753735e9d0e67143b4ab1af1af3953f6eacb745232deea72b37cdcca6675 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class TraceableValueResolverTest extends TestCase
{
    public function testTimingsInSupports()
    {
        \$stopwatch = new Stopwatch();
        \$resolver = new TraceableValueResolver(new ResolverStub(), \$stopwatch);
        \$argument = new ArgumentMetadata('dummy', 'string', false, false, null);
        \$request = new Request();

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));

        \$event = \$stopwatch->getEvent(ResolverStub::class.'::supports');
        \$this->assertCount(1, \$event->getPeriods());
    }

    public function testTimingsInResolve()
    {
        \$stopwatch = new Stopwatch();
        \$resolver = new TraceableValueResolver(new ResolverStub(), \$stopwatch);
        \$argument = new ArgumentMetadata('dummy', 'string', false, false, null);
        \$request = new Request();

        \$iterable = \$resolver->resolve(\$request, \$argument);

        foreach (\$iterable as \$index => \$resolved) {
            \$event = \$stopwatch->getEvent(ResolverStub::class.'::resolve');
            \$this->assertTrue(\$event->isStarted());
            \$this->assertEmpty(\$event->getPeriods());
            switch (\$index) {
                case 0:
                    \$this->assertEquals('first', \$resolved);
                    break;
                case 1:
                    \$this->assertEquals('second', \$resolved);
                    break;
            }
        }

        \$event = \$stopwatch->getEvent(ResolverStub::class.'::resolve');
        \$this->assertCount(1, \$event->getPeriods());
    }
}

class ResolverStub implements ArgumentValueResolverInterface
{
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        return true;
    }

    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield 'first';
        yield 'second';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class TraceableValueResolverTest extends TestCase
{
    public function testTimingsInSupports()
    {
        \$stopwatch = new Stopwatch();
        \$resolver = new TraceableValueResolver(new ResolverStub(), \$stopwatch);
        \$argument = new ArgumentMetadata('dummy', 'string', false, false, null);
        \$request = new Request();

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));

        \$event = \$stopwatch->getEvent(ResolverStub::class.'::supports');
        \$this->assertCount(1, \$event->getPeriods());
    }

    public function testTimingsInResolve()
    {
        \$stopwatch = new Stopwatch();
        \$resolver = new TraceableValueResolver(new ResolverStub(), \$stopwatch);
        \$argument = new ArgumentMetadata('dummy', 'string', false, false, null);
        \$request = new Request();

        \$iterable = \$resolver->resolve(\$request, \$argument);

        foreach (\$iterable as \$index => \$resolved) {
            \$event = \$stopwatch->getEvent(ResolverStub::class.'::resolve');
            \$this->assertTrue(\$event->isStarted());
            \$this->assertEmpty(\$event->getPeriods());
            switch (\$index) {
                case 0:
                    \$this->assertEquals('first', \$resolved);
                    break;
                case 1:
                    \$this->assertEquals('second', \$resolved);
                    break;
            }
        }

        \$event = \$stopwatch->getEvent(ResolverStub::class.'::resolve');
        \$this->assertCount(1, \$event->getPeriods());
    }
}

class ResolverStub implements ArgumentValueResolverInterface
{
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        return true;
    }

    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield 'first';
        yield 'second';
    }
}
", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/TraceableValueResolverTest.php");
    }
}
