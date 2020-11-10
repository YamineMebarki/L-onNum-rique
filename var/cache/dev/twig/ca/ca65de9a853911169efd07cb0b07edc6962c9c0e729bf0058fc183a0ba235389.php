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

/* vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php */
class __TwigTemplate_98b95d74a18e644047b5bbc71bd890924050b73410d56f0c1d66dcfd76bdc0c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php"));

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
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\NativeSessionTokenStorage;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NativeSessionTokenStorageTest extends TestCase
{
    const SESSION_NAMESPACE = 'foobar';

    /**
     * @var NativeSessionTokenStorage
     */
    private \$storage;

    protected function setUp(): void
    {
        \$_SESSION = [];

        \$this->storage = new NativeSessionTokenStorage(self::SESSION_NAMESPACE);
    }

    public function testStoreTokenInClosedSession()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    public function testStoreTokenInClosedSessionWithExistingSessionId()
    {
        session_id('foobar');

        \$this->assertSame(PHP_SESSION_NONE, session_status());

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame(PHP_SESSION_ACTIVE, session_status());
        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    public function testStoreTokenInActiveSession()
    {
        session_start();

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    /**
     * @depends testStoreTokenInClosedSession
     */
    public function testCheckToken()
    {
        \$this->assertFalse(\$this->storage->hasToken('token_id'));

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
    }

    /**
     * @depends testStoreTokenInClosedSession
     */
    public function testGetExistingToken()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->getToken('token_id'));
    }

    public function testGetNonExistingToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->storage->getToken('token_id');
    }

    /**
     * @depends testCheckToken
     */
    public function testRemoveNonExistingToken()
    {
        \$this->assertNull(\$this->storage->removeToken('token_id'));
        \$this->assertFalse(\$this->storage->hasToken('token_id'));
    }

    /**
     * @depends testCheckToken
     */
    public function testRemoveExistingToken()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
        \$this->assertFalse(\$this->storage->hasToken('token_id'));
    }

    public function testClearRemovesAllTokensFromTheConfiguredNamespace()
    {
        \$this->storage->setToken('foo', 'bar');
        \$this->storage->clear();

        \$this->assertFalse(\$this->storage->hasToken('foo'));
        \$this->assertArrayNotHasKey(self::SESSION_NAMESPACE, \$_SESSION);
    }

    public function testClearDoesNotRemoveSessionValuesFromOtherNamespaces()
    {
        \$_SESSION['foo']['bar'] = 'baz';
        \$this->storage->clear();

        \$this->assertArrayHasKey('foo', \$_SESSION);
        \$this->assertArrayHasKey('bar', \$_SESSION['foo']);
        \$this->assertSame('baz', \$_SESSION['foo']['bar']);
    }

    public function testClearDoesNotRemoveNonNamespacedSessionValues()
    {
        \$_SESSION['foo'] = 'baz';
        \$this->storage->clear();

        \$this->assertArrayHasKey('foo', \$_SESSION);
        \$this->assertSame('baz', \$_SESSION['foo']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php";
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
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\NativeSessionTokenStorage;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NativeSessionTokenStorageTest extends TestCase
{
    const SESSION_NAMESPACE = 'foobar';

    /**
     * @var NativeSessionTokenStorage
     */
    private \$storage;

    protected function setUp(): void
    {
        \$_SESSION = [];

        \$this->storage = new NativeSessionTokenStorage(self::SESSION_NAMESPACE);
    }

    public function testStoreTokenInClosedSession()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    public function testStoreTokenInClosedSessionWithExistingSessionId()
    {
        session_id('foobar');

        \$this->assertSame(PHP_SESSION_NONE, session_status());

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame(PHP_SESSION_ACTIVE, session_status());
        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    public function testStoreTokenInActiveSession()
    {
        session_start();

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame([self::SESSION_NAMESPACE => ['token_id' => 'TOKEN']], \$_SESSION);
    }

    /**
     * @depends testStoreTokenInClosedSession
     */
    public function testCheckToken()
    {
        \$this->assertFalse(\$this->storage->hasToken('token_id'));

        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertTrue(\$this->storage->hasToken('token_id'));
    }

    /**
     * @depends testStoreTokenInClosedSession
     */
    public function testGetExistingToken()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->getToken('token_id'));
    }

    public function testGetNonExistingToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException');
        \$this->storage->getToken('token_id');
    }

    /**
     * @depends testCheckToken
     */
    public function testRemoveNonExistingToken()
    {
        \$this->assertNull(\$this->storage->removeToken('token_id'));
        \$this->assertFalse(\$this->storage->hasToken('token_id'));
    }

    /**
     * @depends testCheckToken
     */
    public function testRemoveExistingToken()
    {
        \$this->storage->setToken('token_id', 'TOKEN');

        \$this->assertSame('TOKEN', \$this->storage->removeToken('token_id'));
        \$this->assertFalse(\$this->storage->hasToken('token_id'));
    }

    public function testClearRemovesAllTokensFromTheConfiguredNamespace()
    {
        \$this->storage->setToken('foo', 'bar');
        \$this->storage->clear();

        \$this->assertFalse(\$this->storage->hasToken('foo'));
        \$this->assertArrayNotHasKey(self::SESSION_NAMESPACE, \$_SESSION);
    }

    public function testClearDoesNotRemoveSessionValuesFromOtherNamespaces()
    {
        \$_SESSION['foo']['bar'] = 'baz';
        \$this->storage->clear();

        \$this->assertArrayHasKey('foo', \$_SESSION);
        \$this->assertArrayHasKey('bar', \$_SESSION['foo']);
        \$this->assertSame('baz', \$_SESSION['foo']['bar']);
    }

    public function testClearDoesNotRemoveNonNamespacedSessionValues()
    {
        \$_SESSION['foo'] = 'baz';
        \$this->storage->clear();

        \$this->assertArrayHasKey('foo', \$_SESSION);
        \$this->assertSame('baz', \$_SESSION['foo']);
    }
}
", "vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/Tests/TokenStorage/NativeSessionTokenStorageTest.php");
    }
}
