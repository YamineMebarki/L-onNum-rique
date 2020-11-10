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

/* vendor/symfony/twig-bridge/Tests/AppVariableTest.php */
class __TwigTemplate_6b3c553fcf4dbc7a5f793b219183c3076d68156c1b6542ad75daec859502dc90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/AppVariableTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/AppVariableTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\Twig\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\AppVariable;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class AppVariableTest extends TestCase
{
    /**
     * @var AppVariable
     */
    protected \$appVariable;

    protected function setUp(): void
    {
        \$this->appVariable = new AppVariable();
    }

    /**
     * @dataProvider debugDataProvider
     */
    public function testDebug(\$debugFlag)
    {
        \$this->appVariable->setDebug(\$debugFlag);

        \$this->assertEquals(\$debugFlag, \$this->appVariable->getDebug());
    }

    public function debugDataProvider()
    {
        return [
            'debug on' => [true],
            'debug off' => [false],
        ];
    }

    public function testEnvironment()
    {
        \$this->appVariable->setEnvironment('dev');

        \$this->assertEquals('dev', \$this->appVariable->getEnvironment());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetSession()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('hasSession')->willReturn(true);
        \$request->method('getSession')->willReturn(\$session = new Session());

        \$this->setRequestStack(\$request);

        \$this->assertEquals(\$session, \$this->appVariable->getSession());
    }

    public function testGetSessionWithNoRequest()
    {
        \$this->setRequestStack(null);

        \$this->assertNull(\$this->appVariable->getSession());
    }

    public function testGetRequest()
    {
        \$this->setRequestStack(\$request = new Request());

        \$this->assertEquals(\$request, \$this->appVariable->getRequest());
    }

    public function testGetToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$this->assertEquals(\$token, \$this->appVariable->getToken());
    }

    public function testGetUser()
    {
        \$this->setTokenStorage(\$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());

        \$this->assertEquals(\$user, \$this->appVariable->getUser());
    }

    public function testGetUserWithUsernameAsTokenUser()
    {
        \$this->setTokenStorage(\$user = 'username');

        \$this->assertNull(\$this->appVariable->getUser());
    }

    public function testGetTokenWithNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$this->assertNull(\$this->appVariable->getToken());
    }

    public function testGetUserWithNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$this->assertNull(\$this->appVariable->getUser());
    }

    public function testEnvironmentNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getEnvironment();
    }

    public function testDebugNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getDebug();
    }

    public function testGetTokenWithTokenStorageNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getToken();
    }

    public function testGetUserWithTokenStorageNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getUser();
    }

    public function testGetRequestWithRequestStackNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getRequest();
    }

    public function testGetSessionWithRequestStackNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getSession();
    }

    public function testGetFlashesWithNoRequest()
    {
        \$this->setRequestStack(null);

        \$this->assertEquals([], \$this->appVariable->getFlashes());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetFlashesWithNoSessionStarted()
    {
        \$flashMessages = \$this->setFlashMessages(false);
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetFlashes()
    {
        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes(null));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes(''));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes([]));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals([], \$this->appVariable->getFlashes('this-does-not-exist'));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['this-does-not-exist'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages['notice'], \$this->appVariable->getFlashes('notice'));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice']],
            \$this->appVariable->getFlashes(['notice'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice'], 'this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['notice', 'this-does-not-exist'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice'], 'error' => \$flashMessages['error']],
            \$this->appVariable->getFlashes(['notice', 'error'])
        );

        \$this->assertEquals(
            ['warning' => \$flashMessages['warning']],
            \$this->appVariable->getFlashes(['warning']),
            'After getting some flash types (e.g. \"notice\" and \"error\"), the rest of flash messages must remain (e.g. \"warning\").'
        );

        \$this->assertEquals(
            ['this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['this-does-not-exist'])
        );
    }

    protected function setRequestStack(\$request)
    {
        \$requestStackMock = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackMock->method('getCurrentRequest')->willReturn(\$request);

        \$this->appVariable->setRequestStack(\$requestStackMock);
    }

    protected function setTokenStorage(\$user)
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$token->method('getUser')->willReturn(\$user);
    }

    private function setFlashMessages(\$sessionHasStarted = true)
    {
        \$flashMessages = [
            'notice' => ['Notice #1 message'],
            'warning' => ['Warning #1 message'],
            'error' => ['Error #1 message', 'Error #2 message'],
        ];
        \$flashBag = new FlashBag();
        \$flashBag->initialize(\$flashMessages);

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')->disableOriginalConstructor()->getMock();
        \$session->method('isStarted')->willReturn(\$sessionHasStarted);
        \$session->method('getFlashBag')->willReturn(\$flashBag);

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('hasSession')->willReturn(true);
        \$request->method('getSession')->willReturn(\$session);
        \$this->setRequestStack(\$request);

        return \$flashMessages;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/AppVariableTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\Twig\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\AppVariable;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class AppVariableTest extends TestCase
{
    /**
     * @var AppVariable
     */
    protected \$appVariable;

    protected function setUp(): void
    {
        \$this->appVariable = new AppVariable();
    }

    /**
     * @dataProvider debugDataProvider
     */
    public function testDebug(\$debugFlag)
    {
        \$this->appVariable->setDebug(\$debugFlag);

        \$this->assertEquals(\$debugFlag, \$this->appVariable->getDebug());
    }

    public function debugDataProvider()
    {
        return [
            'debug on' => [true],
            'debug off' => [false],
        ];
    }

    public function testEnvironment()
    {
        \$this->appVariable->setEnvironment('dev');

        \$this->assertEquals('dev', \$this->appVariable->getEnvironment());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetSession()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('hasSession')->willReturn(true);
        \$request->method('getSession')->willReturn(\$session = new Session());

        \$this->setRequestStack(\$request);

        \$this->assertEquals(\$session, \$this->appVariable->getSession());
    }

    public function testGetSessionWithNoRequest()
    {
        \$this->setRequestStack(null);

        \$this->assertNull(\$this->appVariable->getSession());
    }

    public function testGetRequest()
    {
        \$this->setRequestStack(\$request = new Request());

        \$this->assertEquals(\$request, \$this->appVariable->getRequest());
    }

    public function testGetToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$this->assertEquals(\$token, \$this->appVariable->getToken());
    }

    public function testGetUser()
    {
        \$this->setTokenStorage(\$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());

        \$this->assertEquals(\$user, \$this->appVariable->getUser());
    }

    public function testGetUserWithUsernameAsTokenUser()
    {
        \$this->setTokenStorage(\$user = 'username');

        \$this->assertNull(\$this->appVariable->getUser());
    }

    public function testGetTokenWithNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$this->assertNull(\$this->appVariable->getToken());
    }

    public function testGetUserWithNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$this->assertNull(\$this->appVariable->getUser());
    }

    public function testEnvironmentNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getEnvironment();
    }

    public function testDebugNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getDebug();
    }

    public function testGetTokenWithTokenStorageNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getToken();
    }

    public function testGetUserWithTokenStorageNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getUser();
    }

    public function testGetRequestWithRequestStackNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getRequest();
    }

    public function testGetSessionWithRequestStackNotSet()
    {
        \$this->expectException('RuntimeException');
        \$this->appVariable->getSession();
    }

    public function testGetFlashesWithNoRequest()
    {
        \$this->setRequestStack(null);

        \$this->assertEquals([], \$this->appVariable->getFlashes());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetFlashesWithNoSessionStarted()
    {
        \$flashMessages = \$this->setFlashMessages(false);
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes());
    }

    /**
     * @runInSeparateProcess
     */
    public function testGetFlashes()
    {
        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes(null));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes(''));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages, \$this->appVariable->getFlashes([]));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals([], \$this->appVariable->getFlashes('this-does-not-exist'));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['this-does-not-exist'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(\$flashMessages['notice'], \$this->appVariable->getFlashes('notice'));

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice']],
            \$this->appVariable->getFlashes(['notice'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice'], 'this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['notice', 'this-does-not-exist'])
        );

        \$flashMessages = \$this->setFlashMessages();
        \$this->assertEquals(
            ['notice' => \$flashMessages['notice'], 'error' => \$flashMessages['error']],
            \$this->appVariable->getFlashes(['notice', 'error'])
        );

        \$this->assertEquals(
            ['warning' => \$flashMessages['warning']],
            \$this->appVariable->getFlashes(['warning']),
            'After getting some flash types (e.g. \"notice\" and \"error\"), the rest of flash messages must remain (e.g. \"warning\").'
        );

        \$this->assertEquals(
            ['this-does-not-exist' => []],
            \$this->appVariable->getFlashes(['this-does-not-exist'])
        );
    }

    protected function setRequestStack(\$request)
    {
        \$requestStackMock = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackMock->method('getCurrentRequest')->willReturn(\$request);

        \$this->appVariable->setRequestStack(\$requestStackMock);
    }

    protected function setTokenStorage(\$user)
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->appVariable->setTokenStorage(\$tokenStorage);

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$token->method('getUser')->willReturn(\$user);
    }

    private function setFlashMessages(\$sessionHasStarted = true)
    {
        \$flashMessages = [
            'notice' => ['Notice #1 message'],
            'warning' => ['Warning #1 message'],
            'error' => ['Error #1 message', 'Error #2 message'],
        ];
        \$flashBag = new FlashBag();
        \$flashBag->initialize(\$flashMessages);

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')->disableOriginalConstructor()->getMock();
        \$session->method('isStarted')->willReturn(\$sessionHasStarted);
        \$session->method('getFlashBag')->willReturn(\$flashBag);

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('hasSession')->willReturn(true);
        \$request->method('getSession')->willReturn(\$session);
        \$this->setRequestStack(\$request);

        return \$flashMessages;
    }
}
", "vendor/symfony/twig-bridge/Tests/AppVariableTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/AppVariableTest.php");
    }
}
