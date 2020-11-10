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

/* vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php */
class __TwigTemplate_7cb56b0b9abcc768cf9cbba25005496ceeb958bb03b3c8ce5f16a1c30c676d2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php"));

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

namespace Symfony\\Component\\Security\\Guard\\Tests\\Authenticator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Guard\\Authenticator\\AbstractFormLoginAuthenticator;

/**
 * @author Jean Pasdeloup <jpasdeloup@sedona.fr>
 */
class FormLoginAuthenticatorTest extends TestCase
{
    private \$requestWithoutSession;
    private \$requestWithSession;
    private \$authenticator;

    const LOGIN_URL = 'http://login';
    const DEFAULT_SUCCESS_URL = 'http://defaultsuccess';
    const CUSTOM_SUCCESS_URL = 'http://customsuccess';

    public function testAuthenticationFailureWithoutSession()
    {
        \$failureResponse = \$this->authenticator->onAuthenticationFailure(\$this->requestWithoutSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testAuthenticationFailureWithSession()
    {
        \$this->requestWithSession->getSession()
            ->expects(\$this->once())
            ->method('set');

        \$failureResponse = \$this->authenticator->onAuthenticationFailure(\$this->requestWithSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testRememberMe()
    {
        \$doSupport = \$this->authenticator->supportsRememberMe();

        \$this->assertTrue(\$doSupport);
    }

    public function testStartWithoutSession()
    {
        \$failureResponse = \$this->authenticator->start(\$this->requestWithoutSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testStartWithSession()
    {
        \$failureResponse = \$this->authenticator->start(\$this->requestWithSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    protected function setUp(): void
    {
        \$this->requestWithoutSession = new Request([], [], [], [], [], []);
        \$this->requestWithSession = new Request([], [], [], [], [], []);

        \$session = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\SessionInterface')
            ->disableOriginalConstructor()
            ->getMock();
        \$this->requestWithSession->setSession(\$session);

        \$this->authenticator = new TestFormLoginAuthenticator();
        \$this->authenticator
            ->setLoginUrl(self::LOGIN_URL)
            ->setDefaultSuccessRedirectUrl(self::DEFAULT_SUCCESS_URL)
        ;
    }
}

class TestFormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    private \$loginUrl;
    private \$defaultSuccessRedirectUrl;

    public function supports(Request \$request)
    {
        return true;
    }

    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
    }

    /**
     * @param mixed \$defaultSuccessRedirectUrl
     *
     * @return TestFormLoginAuthenticator
     */
    public function setDefaultSuccessRedirectUrl(\$defaultSuccessRedirectUrl)
    {
        \$this->defaultSuccessRedirectUrl = \$defaultSuccessRedirectUrl;

        return \$this;
    }

    /**
     * @param mixed \$loginUrl
     *
     * @return TestFormLoginAuthenticator
     */
    public function setLoginUrl(\$loginUrl)
    {
        \$this->loginUrl = \$loginUrl;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    protected function getLoginUrl()
    {
        return \$this->loginUrl;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultSuccessRedirectUrl()
    {
        return \$this->defaultSuccessRedirectUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request \$request)
    {
        return 'credentials';
    }

    /**
     * {@inheritdoc}
     */
    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        return \$userProvider->loadUserByUsername(\$credentials);
    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php";
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

namespace Symfony\\Component\\Security\\Guard\\Tests\\Authenticator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Guard\\Authenticator\\AbstractFormLoginAuthenticator;

/**
 * @author Jean Pasdeloup <jpasdeloup@sedona.fr>
 */
class FormLoginAuthenticatorTest extends TestCase
{
    private \$requestWithoutSession;
    private \$requestWithSession;
    private \$authenticator;

    const LOGIN_URL = 'http://login';
    const DEFAULT_SUCCESS_URL = 'http://defaultsuccess';
    const CUSTOM_SUCCESS_URL = 'http://customsuccess';

    public function testAuthenticationFailureWithoutSession()
    {
        \$failureResponse = \$this->authenticator->onAuthenticationFailure(\$this->requestWithoutSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testAuthenticationFailureWithSession()
    {
        \$this->requestWithSession->getSession()
            ->expects(\$this->once())
            ->method('set');

        \$failureResponse = \$this->authenticator->onAuthenticationFailure(\$this->requestWithSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testRememberMe()
    {
        \$doSupport = \$this->authenticator->supportsRememberMe();

        \$this->assertTrue(\$doSupport);
    }

    public function testStartWithoutSession()
    {
        \$failureResponse = \$this->authenticator->start(\$this->requestWithoutSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    public function testStartWithSession()
    {
        \$failureResponse = \$this->authenticator->start(\$this->requestWithSession, new AuthenticationException());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\RedirectResponse', \$failureResponse);
        \$this->assertEquals(self::LOGIN_URL, \$failureResponse->getTargetUrl());
    }

    protected function setUp(): void
    {
        \$this->requestWithoutSession = new Request([], [], [], [], [], []);
        \$this->requestWithSession = new Request([], [], [], [], [], []);

        \$session = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\SessionInterface')
            ->disableOriginalConstructor()
            ->getMock();
        \$this->requestWithSession->setSession(\$session);

        \$this->authenticator = new TestFormLoginAuthenticator();
        \$this->authenticator
            ->setLoginUrl(self::LOGIN_URL)
            ->setDefaultSuccessRedirectUrl(self::DEFAULT_SUCCESS_URL)
        ;
    }
}

class TestFormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    private \$loginUrl;
    private \$defaultSuccessRedirectUrl;

    public function supports(Request \$request)
    {
        return true;
    }

    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
    }

    /**
     * @param mixed \$defaultSuccessRedirectUrl
     *
     * @return TestFormLoginAuthenticator
     */
    public function setDefaultSuccessRedirectUrl(\$defaultSuccessRedirectUrl)
    {
        \$this->defaultSuccessRedirectUrl = \$defaultSuccessRedirectUrl;

        return \$this;
    }

    /**
     * @param mixed \$loginUrl
     *
     * @return TestFormLoginAuthenticator
     */
    public function setLoginUrl(\$loginUrl)
    {
        \$this->loginUrl = \$loginUrl;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    protected function getLoginUrl()
    {
        return \$this->loginUrl;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultSuccessRedirectUrl()
    {
        return \$this->defaultSuccessRedirectUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request \$request)
    {
        return 'credentials';
    }

    /**
     * {@inheritdoc}
     */
    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        return \$userProvider->loadUserByUsername(\$credentials);
    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        return true;
    }
}
", "vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Tests/Authenticator/FormLoginAuthenticatorTest.php");
    }
}
