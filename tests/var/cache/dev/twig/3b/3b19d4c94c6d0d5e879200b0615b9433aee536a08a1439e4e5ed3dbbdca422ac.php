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

/* vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php */
class __TwigTemplate_7fd4b1682bf9222b8f379d133c0bbb36df8e1cbd05ab48a49349ea2e8a34669c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class DisallowRobotsIndexingListenerTest extends TestCase
{
    /**
     * @dataProvider provideResponses
     */
    public function testInvoke(?string \$expected, Response \$response): void
    {
        \$listener = new DisallowRobotsIndexingListener();

        \$event = new ResponseEvent(\$this->createMock(HttpKernelInterface::class), \$this->createMock(Request::class), KernelInterface::MASTER_REQUEST, \$response);

        \$listener->onResponse(\$event);

        \$this->assertSame(\$expected, \$response->headers->get('X-Robots-Tag'), 'Header doesn\\'t match expectations');
    }

    public function provideResponses(): iterable
    {
        yield 'No header' => ['noindex', new Response()];

        yield 'Header already set' => [
            'something else',
            new Response('', 204, ['X-Robots-Tag' => 'something else']),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class DisallowRobotsIndexingListenerTest extends TestCase
{
    /**
     * @dataProvider provideResponses
     */
    public function testInvoke(?string \$expected, Response \$response): void
    {
        \$listener = new DisallowRobotsIndexingListener();

        \$event = new ResponseEvent(\$this->createMock(HttpKernelInterface::class), \$this->createMock(Request::class), KernelInterface::MASTER_REQUEST, \$response);

        \$listener->onResponse(\$event);

        \$this->assertSame(\$expected, \$response->headers->get('X-Robots-Tag'), 'Header doesn\\'t match expectations');
    }

    public function provideResponses(): iterable
    {
        yield 'No header' => ['noindex', new Response()];

        yield 'Header already set' => [
            'something else',
            new Response('', 204, ['X-Robots-Tag' => 'something else']),
        ];
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/DisallowRobotsIndexingListenerTest.php");
    }
}
