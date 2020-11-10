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

/* vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php */
class __TwigTemplate_546c1d197d86daf05f683404fc02a60b5f13644c3821f4a2a9a99f814e387fd6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

class LocaleAwareListenerTest extends TestCase
{
    private \$listener;
    private \$localeAwareService;
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->localeAwareService = \$this->getMockBuilder(LocaleAwareInterface::class)->getMock();
        \$this->requestStack = new RequestStack();
        \$this->listener = new LocaleAwareListener(new \\ArrayIterator([\$this->localeAwareService]), \$this->requestStack);
    }

    public function testLocaleIsSetInOnKernelRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->will(\$this->throwException(new \\InvalidArgumentException()));
        \$this->localeAwareService
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testLocaleIsSetInOnKernelFinishRequestWhenParentRequestExists()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$this->requestStack->push(\$this->createRequest('fr'));
        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testLocaleIsSetToDefaultOnKernelFinishRequestWhenParentRequestDoesNotExist()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelFinishRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->will(\$this->throwException(new \\InvalidArgumentException()));
        \$this->localeAwareService
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->requestStack->push(\$this->createRequest('fr'));
        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    private function createHttpKernel()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
    }

    private function createRequest(\$locale)
    {
        \$request = new Request();
        \$request->setLocale(\$locale);

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

class LocaleAwareListenerTest extends TestCase
{
    private \$listener;
    private \$localeAwareService;
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->localeAwareService = \$this->getMockBuilder(LocaleAwareInterface::class)->getMock();
        \$this->requestStack = new RequestStack();
        \$this->listener = new LocaleAwareListener(new \\ArrayIterator([\$this->localeAwareService]), \$this->requestStack);
    }

    public function testLocaleIsSetInOnKernelRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->will(\$this->throwException(new \\InvalidArgumentException()));
        \$this->localeAwareService
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testLocaleIsSetInOnKernelFinishRequestWhenParentRequestExists()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$this->requestStack->push(\$this->createRequest('fr'));
        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testLocaleIsSetToDefaultOnKernelFinishRequestWhenParentRequestDoesNotExist()
    {
        \$this->localeAwareService
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelFinishRequest()
    {
        \$this->localeAwareService
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->will(\$this->throwException(new \\InvalidArgumentException()));
        \$this->localeAwareService
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->requestStack->push(\$this->createRequest('fr'));
        \$this->requestStack->push(\$subRequest = \$this->createRequest('de'));

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$subRequest, HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    private function createHttpKernel()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
    }

    private function createRequest(\$locale)
    {
        \$request = new Request();
        \$request->setLocale(\$locale);

        return \$request;
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/LocaleAwareListenerTest.php");
    }
}
