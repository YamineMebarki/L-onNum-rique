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

/* vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php */
class __TwigTemplate_3147e4a4270722459dbd2fbf2fbbc7302d7d9015e30b33cc1407c48229861d60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage;

/**
 * DevLaon class for PhpSessionStorage.
 *
 * @author Drak <drak@zikula.org>
 *
 * These tests require separate processes.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class PhpBridgeSessionStorageTest extends TestCase
{
    private \$savePath;

    protected function setUp(): void
    {
        \$this->iniSet('session.save_handler', 'files');
        \$this->iniSet('session.save_path', \$this->savePath = sys_get_temp_dir().'/sftest');
        if (!is_dir(\$this->savePath)) {
            mkdir(\$this->savePath);
        }
    }

    protected function tearDown(): void
    {
        session_write_close();
        array_map('unlink', glob(\$this->savePath.'/*'));
        if (is_dir(\$this->savePath)) {
            rmdir(\$this->savePath);
        }

        \$this->savePath = null;
    }

    /**
     * @return PhpBridgeSessionStorage
     */
    protected function getStorage()
    {
        \$storage = new PhpBridgeSessionStorage();
        \$storage->registerBag(new AttributeBag());

        return \$storage;
    }

    public function testPhpSession()
    {
        \$storage = \$this->getStorage();

        \$this->assertNotSame(\\PHP_SESSION_ACTIVE, session_status());
        \$this->assertFalse(\$storage->isStarted());

        session_start();
        \$this->assertTrue(isset(\$_SESSION));
        \$this->assertSame(\\PHP_SESSION_ACTIVE, session_status());
        // PHP session might have started, but the storage driver has not, so false is correct here
        \$this->assertFalse(\$storage->isStarted());

        \$key = \$storage->getMetadataBag()->getStorageKey();
        \$this->assertArrayNotHasKey(\$key, \$_SESSION);
        \$storage->start();
        \$this->assertArrayHasKey(\$key, \$_SESSION);
    }

    public function testClear()
    {
        \$storage = \$this->getStorage();
        session_start();
        \$_SESSION['drak'] = 'loves symfony';
        \$storage->getBag('attributes')->set('symfony', 'greatness');
        \$key = \$storage->getBag('attributes')->getStorageKey();
        \$this->assertEquals(\$_SESSION[\$key], ['symfony' => 'greatness']);
        \$this->assertEquals(\$_SESSION['drak'], 'loves symfony');
        \$storage->clear();
        \$this->assertEquals(\$_SESSION[\$key], []);
        \$this->assertEquals(\$_SESSION['drak'], 'loves symfony');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage;

/**
 * DevLaon class for PhpSessionStorage.
 *
 * @author Drak <drak@zikula.org>
 *
 * These tests require separate processes.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class PhpBridgeSessionStorageTest extends TestCase
{
    private \$savePath;

    protected function setUp(): void
    {
        \$this->iniSet('session.save_handler', 'files');
        \$this->iniSet('session.save_path', \$this->savePath = sys_get_temp_dir().'/sftest');
        if (!is_dir(\$this->savePath)) {
            mkdir(\$this->savePath);
        }
    }

    protected function tearDown(): void
    {
        session_write_close();
        array_map('unlink', glob(\$this->savePath.'/*'));
        if (is_dir(\$this->savePath)) {
            rmdir(\$this->savePath);
        }

        \$this->savePath = null;
    }

    /**
     * @return PhpBridgeSessionStorage
     */
    protected function getStorage()
    {
        \$storage = new PhpBridgeSessionStorage();
        \$storage->registerBag(new AttributeBag());

        return \$storage;
    }

    public function testPhpSession()
    {
        \$storage = \$this->getStorage();

        \$this->assertNotSame(\\PHP_SESSION_ACTIVE, session_status());
        \$this->assertFalse(\$storage->isStarted());

        session_start();
        \$this->assertTrue(isset(\$_SESSION));
        \$this->assertSame(\\PHP_SESSION_ACTIVE, session_status());
        // PHP session might have started, but the storage driver has not, so false is correct here
        \$this->assertFalse(\$storage->isStarted());

        \$key = \$storage->getMetadataBag()->getStorageKey();
        \$this->assertArrayNotHasKey(\$key, \$_SESSION);
        \$storage->start();
        \$this->assertArrayHasKey(\$key, \$_SESSION);
    }

    public function testClear()
    {
        \$storage = \$this->getStorage();
        session_start();
        \$_SESSION['drak'] = 'loves symfony';
        \$storage->getBag('attributes')->set('symfony', 'greatness');
        \$key = \$storage->getBag('attributes')->getStorageKey();
        \$this->assertEquals(\$_SESSION[\$key], ['symfony' => 'greatness']);
        \$this->assertEquals(\$_SESSION['drak'], 'loves symfony');
        \$storage->clear();
        \$this->assertEquals(\$_SESSION[\$key], []);
        \$this->assertEquals(\$_SESSION['drak'], 'loves symfony');
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/PhpBridgeSessionStorageTest.php");
    }
}
