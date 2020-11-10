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

/* vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php */
class __TwigTemplate_ba69659e988e0c85c294fb9537df2dd518310d4447bf410374c808860771a486 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * @group legacy
 */
class TranslatorListenerTest extends TestCase
{
    private \$listener;
    private \$translator;
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->translator = \$this->getMockBuilder(LocaleAwareInterface::class)->getMock();
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$this->listener = new TranslatorListener(\$this->translator, \$this->requestStack);
    }

    public function testLocaleIsSetInOnKernelRequest()
    {
        \$this->translator
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelRequest()
    {
        \$this->translator
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->willThrowException(new \\InvalidArgumentException());
        \$this->translator
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testLocaleIsSetInOnKernelFinishRequestWhenParentRequestExists()
    {
        \$this->translator
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$this->setMasterRequest(\$this->createRequest('fr'));
        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testLocaleIsNotSetInOnKernelFinishRequestWhenParentRequestDoesNotExist()
    {
        \$this->translator
            ->expects(\$this->never())
            ->method('setLocale');

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelFinishRequest()
    {
        \$this->translator
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->willThrowException(new \\InvalidArgumentException());
        \$this->translator
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->setMasterRequest(\$this->createRequest('fr'));
        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
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

    private function setMasterRequest(\$request)
    {
        \$this->requestStack
            ->expects(\$this->any())
            ->method('getParentRequest')
            ->willReturn(\$request);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php";
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
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * @group legacy
 */
class TranslatorListenerTest extends TestCase
{
    private \$listener;
    private \$translator;
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->translator = \$this->getMockBuilder(LocaleAwareInterface::class)->getMock();
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$this->listener = new TranslatorListener(\$this->translator, \$this->requestStack);
    }

    public function testLocaleIsSetInOnKernelRequest()
    {
        \$this->translator
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelRequest()
    {
        \$this->translator
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->willThrowException(new \\InvalidArgumentException());
        \$this->translator
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$event = new RequestEvent(\$this->createHttpKernel(), \$this->createRequest('fr'), HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);
    }

    public function testLocaleIsSetInOnKernelFinishRequestWhenParentRequestExists()
    {
        \$this->translator
            ->expects(\$this->once())
            ->method('setLocale')
            ->with(\$this->equalTo('fr'));

        \$this->setMasterRequest(\$this->createRequest('fr'));
        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testLocaleIsNotSetInOnKernelFinishRequestWhenParentRequestDoesNotExist()
    {
        \$this->translator
            ->expects(\$this->never())
            ->method('setLocale');

        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
        \$this->listener->onKernelFinishRequest(\$event);
    }

    public function testDefaultLocaleIsUsedOnExceptionsInOnKernelFinishRequest()
    {
        \$this->translator
            ->expects(\$this->at(0))
            ->method('setLocale')
            ->willThrowException(new \\InvalidArgumentException());
        \$this->translator
            ->expects(\$this->at(1))
            ->method('setLocale')
            ->with(\$this->equalTo('en'));

        \$this->setMasterRequest(\$this->createRequest('fr'));
        \$event = new FinishRequestEvent(\$this->createHttpKernel(), \$this->createRequest('de'), HttpKernelInterface::SUB_REQUEST);
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

    private function setMasterRequest(\$request)
    {
        \$this->requestStack
            ->expects(\$this->any())
            ->method('getParentRequest')
            ->willReturn(\$request);
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/TranslatorListenerTest.php");
    }
}
