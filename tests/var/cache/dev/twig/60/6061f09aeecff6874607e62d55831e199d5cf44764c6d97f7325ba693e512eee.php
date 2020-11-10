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

/* vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php */
class __TwigTemplate_6f7b7b644f848ef5646b02b4bdc4be2b712deeb3db2deb68c5a53517261f9447 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\Tests\\TokenStorage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SessionTokenStorageTest extends TestCase
{
    const SESSION_NAMESPACE = 'foobar';

    /**
     * @var Session
     */
    private \$session;

    /**
     * @var SessionTokenStorage
     */
    private \$storage;

    protected function setUp(): void
    {
        \$this->session = new Session(new MockArraySessionStorage());
        \$this->storage = new SessionTokenStorage(\$this->session, self::SESSION_NAMESPACE);
    }

    public function testStoreTokenInNotStartedSessionStartsTheSession()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testStoreTokenInActiveSession()
    {
        \$this->session->start();
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->session->get(self::SESSION_NAMESPACE.'/token_id'));
    }

    public function testCheckTokenInClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testCheckTokenInActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
    }

    public function testGetExistingTokenFromClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertSame('RESULT', \$this->storage->getToken('token_id'));
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testGetExistingTokenFromActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertSame('RESULT', \$this->storage->getToken('token_id'));
    }

    public function testGetNonExistingTokenFromClosedSession()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->storage->getToken('token_id');
    }

    public function testGetNonExistingTokenFromActiveSession()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->session->start();
        \$this->storage->getToken('token_id');
    }

    public function testRemoveNonExistingTokenFromClosedSession()
    {
        \$this->assertNull(\$this->storage->removeToken('token_id'));
    }

    public function testRemoveNonExistingTokenFromActiveSession()
    {
        \$this->session->start();

        \$this->assertNull(\$this->storage->removeToken('token_id'));
    }

    public function testRemoveExistingTokenFromClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
    }

    public function testRemoveExistingTokenFromActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
    }

    public function testClearRemovesAllTokensFromTheConfiguredNamespace()
    {
        \$this->storage->setToken('foo', 'bar');
        \$this->storage->clear();

        \$this->assertFalse(\$this->storage->hasToken('foo'));
        \$this->assertFalse(\$this->session->has(self::SESSION_NAMESPACE.'/foo'));
    }

    public function testClearDoesNotRemoveSessionValuesFromOtherNamespaces()
    {
        \$this->session->set('foo/bar', 'baz');
        \$this->storage->clear();

        \$this->assertTrue(\$this->session->has('foo/bar'));
        \$this->assertSame('baz', \$this->session->get('foo/bar'));
    }

    public function testClearDoesNotRemoveNonNamespacedSessionValues()
    {
        \$this->session->set('foo', 'baz');
        \$this->storage->clear();

        \$this->assertTrue(\$this->session->has('foo'));
        \$this->assertSame('baz', \$this->session->get('foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php";
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

namespace Symfony\\Component\\Security\\Csrf\\Tests\\TokenStorage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SessionTokenStorageTest extends TestCase
{
    const SESSION_NAMESPACE = 'foobar';

    /**
     * @var Session
     */
    private \$session;

    /**
     * @var SessionTokenStorage
     */
    private \$storage;

    protected function setUp(): void
    {
        \$this->session = new Session(new MockArraySessionStorage());
        \$this->storage = new SessionTokenStorage(\$this->session, self::SESSION_NAMESPACE);
    }

    public function testStoreTokenInNotStartedSessionStartsTheSession()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testStoreTokenInActiveSession()
    {
        \$this->session->start();
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->session->get(self::SESSION_NAMESPACE.'/token_id'));
    }

    public function testCheckTokenInClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testCheckTokenInActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
    }

    public function testGetExistingTokenFromClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertSame('RESULT', \$this->storage->getToken('token_id'));
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testGetExistingTokenFromActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'RESULT');

        \$this->assertSame('RESULT', \$this->storage->getToken('token_id'));
    }

    public function testGetNonExistingTokenFromClosedSession()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->storage->getToken('token_id');
    }

    public function testGetNonExistingTokenFromActiveSession()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->session->start();
        \$this->storage->getToken('token_id');
    }

    public function testRemoveNonExistingTokenFromClosedSession()
    {
        \$this->assertNull(\$this->storage->removeToken('token_id'));
    }

    public function testRemoveNonExistingTokenFromActiveSession()
    {
        \$this->session->start();

        \$this->assertNull(\$this->storage->removeToken('token_id'));
    }

    public function testRemoveExistingTokenFromClosedSession()
    {
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
    }

    public function testRemoveExistingTokenFromActiveSession()
    {
        \$this->session->start();
        \$this->session->set(self::SESSION_NAMESPACE.'/token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
    }

    public function testClearRemovesAllTokensFromTheConfiguredNamespace()
    {
        \$this->storage->setToken('foo', 'bar');
        \$this->storage->clear();

        \$this->assertFalse(\$this->storage->hasToken('foo'));
        \$this->assertFalse(\$this->session->has(self::SESSION_NAMESPACE.'/foo'));
    }

    public function testClearDoesNotRemoveSessionValuesFromOtherNamespaces()
    {
        \$this->session->set('foo/bar', 'baz');
        \$this->storage->clear();

        \$this->assertTrue(\$this->session->has('foo/bar'));
        \$this->assertSame('baz', \$this->session->get('foo/bar'));
    }

    public function testClearDoesNotRemoveNonNamespacedSessionValues()
    {
        \$this->session->set('foo', 'baz');
        \$this->storage->clear();

        \$this->assertTrue(\$this->session->has('foo'));
        \$this->assertSame('baz', \$this->session->get('foo'));
    }
}
", "vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/Tests/TokenStorage/SessionTokenStorageTest.php");
    }
}
