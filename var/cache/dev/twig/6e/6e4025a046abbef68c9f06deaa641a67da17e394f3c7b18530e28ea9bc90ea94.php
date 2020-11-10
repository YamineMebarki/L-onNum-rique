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

/* vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php */
class __TwigTemplate_36ba0ffead9e2aee725384413053126ef25808fd82c7eba260352d584cc31383 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Profiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector;
use Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

class ProfilerTest extends TestCase
{
    private \$tmp;
    private \$storage;

    public function testCollect()
    {
        \$request = new Request();
        \$request->query->set('foo', 'bar');
        \$response = new Response('', 204);
        \$collector = new RequestDataCollector();

        \$profiler = new Profiler(\$this->storage);
        \$profiler->add(\$collector);
        \$profile = \$profiler->collect(\$request, \$response);
        \$profiler->saveProfile(\$profile);

        \$this->assertSame(204, \$profile->getStatusCode());
        \$this->assertSame('GET', \$profile->getMethod());
        \$this->assertSame('bar', \$profile->getCollector('request')->getRequestQuery()->all()['foo']->getValue());
    }

    public function testReset()
    {
        \$collector = \$this->getMockBuilder(DataCollectorInterface::class)
            ->setMethods(['collect', 'getName', 'reset'])
            ->getMock();
        \$collector->expects(\$this->any())->method('getName')->willReturn('mock');
        \$collector->expects(\$this->once())->method('reset');

        \$profiler = new Profiler(\$this->storage);
        \$profiler->add(\$collector);
        \$profiler->reset();
    }

    public function testFindWorksWithDates()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, '7th April 2014', '9th April 2014'));
    }

    public function testFindWorksWithTimestamps()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, '1396828800', '1397001600'));
    }

    public function testFindWorksWithInvalidDates()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, 'some string', ''));
    }

    public function testFindWorksWithStatusCode()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, null, null, '204'));
    }

    protected function setUp(): void
    {
        \$this->tmp = tempnam(sys_get_temp_dir(), 'sf_profiler');
        if (file_exists(\$this->tmp)) {
            @unlink(\$this->tmp);
        }

        \$this->storage = new FileProfilerStorage('file:'.\$this->tmp);
        \$this->storage->purge();
    }

    protected function tearDown(): void
    {
        if (null !== \$this->storage) {
            \$this->storage->purge();
            \$this->storage = null;

            @unlink(\$this->tmp);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Profiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector;
use Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

class ProfilerTest extends TestCase
{
    private \$tmp;
    private \$storage;

    public function testCollect()
    {
        \$request = new Request();
        \$request->query->set('foo', 'bar');
        \$response = new Response('', 204);
        \$collector = new RequestDataCollector();

        \$profiler = new Profiler(\$this->storage);
        \$profiler->add(\$collector);
        \$profile = \$profiler->collect(\$request, \$response);
        \$profiler->saveProfile(\$profile);

        \$this->assertSame(204, \$profile->getStatusCode());
        \$this->assertSame('GET', \$profile->getMethod());
        \$this->assertSame('bar', \$profile->getCollector('request')->getRequestQuery()->all()['foo']->getValue());
    }

    public function testReset()
    {
        \$collector = \$this->getMockBuilder(DataCollectorInterface::class)
            ->setMethods(['collect', 'getName', 'reset'])
            ->getMock();
        \$collector->expects(\$this->any())->method('getName')->willReturn('mock');
        \$collector->expects(\$this->once())->method('reset');

        \$profiler = new Profiler(\$this->storage);
        \$profiler->add(\$collector);
        \$profiler->reset();
    }

    public function testFindWorksWithDates()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, '7th April 2014', '9th April 2014'));
    }

    public function testFindWorksWithTimestamps()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, '1396828800', '1397001600'));
    }

    public function testFindWorksWithInvalidDates()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, 'some string', ''));
    }

    public function testFindWorksWithStatusCode()
    {
        \$profiler = new Profiler(\$this->storage);

        \$this->assertCount(0, \$profiler->find(null, null, null, null, null, null, '204'));
    }

    protected function setUp(): void
    {
        \$this->tmp = tempnam(sys_get_temp_dir(), 'sf_profiler');
        if (file_exists(\$this->tmp)) {
            @unlink(\$this->tmp);
        }

        \$this->storage = new FileProfilerStorage('file:'.\$this->tmp);
        \$this->storage->purge();
    }

    protected function tearDown(): void
    {
        if (null !== \$this->storage) {
            \$this->storage->purge();
            \$this->storage = null;

            @unlink(\$this->tmp);
        }
    }
}
", "vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Profiler/ProfilerTest.php");
    }
}
