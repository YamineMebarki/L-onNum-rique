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

/* vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php */
class __TwigTemplate_337386439f4a98f84eed01a78b3580afdf9f7257af648de8dc3c5b2d8da66864 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage;

/**
 * DevLaon class for MockFileSessionStorage.
 *
 * @author Drak <drak@zikula.org>
 */
class MockFileSessionStorageTest extends TestCase
{
    /**
     * @var string
     */
    private \$sessionDir;

    /**
     * @var MockFileSessionStorage
     */
    protected \$storage;

    protected function setUp(): void
    {
        \$this->sessionDir = sys_get_temp_dir().'/sftest';
        \$this->storage = \$this->getStorage();
    }

    protected function tearDown(): void
    {
        \$this->sessionDir = null;
        \$this->storage = null;
        array_map('unlink', glob(\$this->sessionDir.'/*.session'));
        if (is_dir(\$this->sessionDir)) {
            rmdir(\$this->sessionDir);
        }
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->assertTrue(\$this->storage->start());
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('', \$this->storage->getId());
        \$this->assertTrue(\$this->storage->start());
        \$this->assertEquals(\$id, \$this->storage->getId());
    }

    public function testRegenerate()
    {
        \$this->storage->start();
        \$this->storage->getBag('attributes')->set('regenerate', 1234);
        \$this->storage->regenerate();
        \$this->assertEquals(1234, \$this->storage->getBag('attributes')->get('regenerate'));
        \$this->storage->regenerate(true);
        \$this->assertEquals(1234, \$this->storage->getBag('attributes')->get('regenerate'));
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$this->assertNotEquals('', \$this->storage->getId());
    }

    public function testSave()
    {
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('108', \$this->storage->getBag('attributes')->get('new'));
        \$this->assertFalse(\$this->storage->getBag('flashes')->has('newkey'));
        \$this->storage->getBag('attributes')->set('new', '108');
        \$this->storage->getBag('flashes')->set('newkey', 'test');
        \$this->storage->save();

        \$storage = \$this->getStorage();
        \$storage->setId(\$id);
        \$storage->start();
        \$this->assertEquals('108', \$storage->getBag('attributes')->get('new'));
        \$this->assertTrue(\$storage->getBag('flashes')->has('newkey'));
        \$this->assertEquals(['test'], \$storage->getBag('flashes')->peek('newkey'));
    }

    public function testMultipleInstances()
    {
        \$storage1 = \$this->getStorage();
        \$storage1->start();
        \$storage1->getBag('attributes')->set('foo', 'bar');
        \$storage1->save();

        \$storage2 = \$this->getStorage();
        \$storage2->setId(\$storage1->getId());
        \$storage2->start();
        \$this->assertEquals('bar', \$storage2->getBag('attributes')->get('foo'), 'values persist between instances');
    }

    public function testSaveWithoutStart()
    {
        \$this->expectException('RuntimeException');
        \$storage1 = \$this->getStorage();
        \$storage1->save();
    }

    private function getStorage()
    {
        \$storage = new MockFileSessionStorage(\$this->sessionDir);
        \$storage->registerBag(new FlashBag());
        \$storage->registerBag(new AttributeBag());

        return \$storage;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage;

/**
 * DevLaon class for MockFileSessionStorage.
 *
 * @author Drak <drak@zikula.org>
 */
class MockFileSessionStorageTest extends TestCase
{
    /**
     * @var string
     */
    private \$sessionDir;

    /**
     * @var MockFileSessionStorage
     */
    protected \$storage;

    protected function setUp(): void
    {
        \$this->sessionDir = sys_get_temp_dir().'/sftest';
        \$this->storage = \$this->getStorage();
    }

    protected function tearDown(): void
    {
        \$this->sessionDir = null;
        \$this->storage = null;
        array_map('unlink', glob(\$this->sessionDir.'/*.session'));
        if (is_dir(\$this->sessionDir)) {
            rmdir(\$this->sessionDir);
        }
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->assertTrue(\$this->storage->start());
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('', \$this->storage->getId());
        \$this->assertTrue(\$this->storage->start());
        \$this->assertEquals(\$id, \$this->storage->getId());
    }

    public function testRegenerate()
    {
        \$this->storage->start();
        \$this->storage->getBag('attributes')->set('regenerate', 1234);
        \$this->storage->regenerate();
        \$this->assertEquals(1234, \$this->storage->getBag('attributes')->get('regenerate'));
        \$this->storage->regenerate(true);
        \$this->assertEquals(1234, \$this->storage->getBag('attributes')->get('regenerate'));
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$this->assertNotEquals('', \$this->storage->getId());
    }

    public function testSave()
    {
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('108', \$this->storage->getBag('attributes')->get('new'));
        \$this->assertFalse(\$this->storage->getBag('flashes')->has('newkey'));
        \$this->storage->getBag('attributes')->set('new', '108');
        \$this->storage->getBag('flashes')->set('newkey', 'test');
        \$this->storage->save();

        \$storage = \$this->getStorage();
        \$storage->setId(\$id);
        \$storage->start();
        \$this->assertEquals('108', \$storage->getBag('attributes')->get('new'));
        \$this->assertTrue(\$storage->getBag('flashes')->has('newkey'));
        \$this->assertEquals(['test'], \$storage->getBag('flashes')->peek('newkey'));
    }

    public function testMultipleInstances()
    {
        \$storage1 = \$this->getStorage();
        \$storage1->start();
        \$storage1->getBag('attributes')->set('foo', 'bar');
        \$storage1->save();

        \$storage2 = \$this->getStorage();
        \$storage2->setId(\$storage1->getId());
        \$storage2->start();
        \$this->assertEquals('bar', \$storage2->getBag('attributes')->get('foo'), 'values persist between instances');
    }

    public function testSaveWithoutStart()
    {
        \$this->expectException('RuntimeException');
        \$storage1 = \$this->getStorage();
        \$storage1->save();
    }

    private function getStorage()
    {
        \$storage = new MockFileSessionStorage(\$this->sessionDir);
        \$storage->registerBag(new FlashBag());
        \$storage->registerBag(new AttributeBag());

        return \$storage;
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/MockFileSessionStorageTest.php");
    }
}
