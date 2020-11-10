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

/* vendor/symfony/http-foundation/Tests/Session/SessionTest.php */
class __TwigTemplate_7989c34860b01578584990cda68d7fe7f35b64ceb74105f9350ae0046e30e8cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/SessionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/SessionTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;

/**
 * SessionTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robert Schönthal <seroscho@googlemail.com>
 * @author Drak <drak@zikula.org>
 */
class SessionTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface
     */
    protected \$storage;

    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface
     */
    protected \$session;

    protected function setUp(): void
    {
        \$this->storage = new MockArraySessionStorage();
        \$this->session = new Session(\$this->storage, new AttributeBag(), new FlashBag());
    }

    protected function tearDown(): void
    {
        \$this->storage = null;
        \$this->session = null;
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->assertTrue(\$this->session->start());
        \$this->assertNotEquals('', \$this->session->getId());
    }

    public function testIsStarted()
    {
        \$this->assertFalse(\$this->session->isStarted());
        \$this->session->start();
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testSetId()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->session->setId('0123456789abcdef');
        \$this->session->start();
        \$this->assertEquals('0123456789abcdef', \$this->session->getId());
    }

    public function testSetIdAfterStart()
    {
        \$this->session->start();
        \$id = \$this->session->getId();

        \$e = null;
        try {
            \$this->session->setId(\$id);
        } catch (\\Exception \$e) {
        }

        \$this->assertNull(\$e);

        try {
            \$this->session->setId('different');
        } catch (\\Exception \$e) {
        }

        \$this->assertInstanceOf('\\LogicException', \$e);
    }

    public function testSetName()
    {
        \$this->assertEquals('MOCKSESSID', \$this->session->getName());
        \$this->session->setName('session.test.com');
        \$this->session->start();
        \$this->assertEquals('session.test.com', \$this->session->getName());
    }

    public function testGet()
    {
        // tests defaults
        \$this->assertNull(\$this->session->get('foo'));
        \$this->assertEquals(1, \$this->session->get('foo', 1));
    }

    /**
     * @dataProvider setProvider
     */
    public function testSet(\$key, \$value)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertEquals(\$value, \$this->session->get(\$key));
    }

    /**
     * @dataProvider setProvider
     */
    public function testHas(\$key, \$value)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertTrue(\$this->session->has(\$key));
        \$this->assertFalse(\$this->session->has(\$key.'non_value'));
    }

    public function testReplace()
    {
        \$this->session->replace(['happiness' => 'be good', 'symfony' => 'awesome']);
        \$this->assertEquals(['happiness' => 'be good', 'symfony' => 'awesome'], \$this->session->all());
        \$this->session->replace([]);
        \$this->assertEquals([], \$this->session->all());
    }

    /**
     * @dataProvider setProvider
     */
    public function testAll(\$key, \$value, \$result)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertEquals(\$result, \$this->session->all());
    }

    /**
     * @dataProvider setProvider
     */
    public function testClear(\$key, \$value)
    {
        \$this->session->set('hi', 'fabien');
        \$this->session->set(\$key, \$value);
        \$this->session->clear();
        \$this->assertEquals([], \$this->session->all());
    }

    public function setProvider()
    {
        return [
            ['foo', 'bar', ['foo' => 'bar']],
            ['foo.bar', 'too much beer', ['foo.bar' => 'too much beer']],
            ['great', 'symfony is great', ['great' => 'symfony is great']],
        ];
    }

    /**
     * @dataProvider setProvider
     */
    public function testRemove(\$key, \$value)
    {
        \$this->session->set('hi.world', 'have a nice day');
        \$this->session->set(\$key, \$value);
        \$this->session->remove(\$key);
        \$this->assertEquals(['hi.world' => 'have a nice day'], \$this->session->all());
    }

    public function testInvalidate()
    {
        \$this->session->set('invalidate', 123);
        \$this->session->invalidate();
        \$this->assertEquals([], \$this->session->all());
    }

    public function testMigrate()
    {
        \$this->session->set('migrate', 321);
        \$this->session->migrate();
        \$this->assertEquals(321, \$this->session->get('migrate'));
    }

    public function testMigrateDestroy()
    {
        \$this->session->set('migrate', 333);
        \$this->session->migrate(true);
        \$this->assertEquals(333, \$this->session->get('migrate'));
    }

    public function testSave()
    {
        \$this->session->start();
        \$this->session->save();

        \$this->assertFalse(\$this->session->isStarted());
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->session->start();
        \$this->assertNotEquals('', \$this->session->getId());
    }

    public function testGetFlashBag()
    {
        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\Flash\\\\FlashBagInterface', \$this->session->getFlashBag());
    }

    public function testGetIterator()
    {
        \$attributes = ['hello' => 'world', 'symfony' => 'rocks'];
        foreach (\$attributes as \$key => \$val) {
            \$this->session->set(\$key, \$val);
        }

        \$i = 0;
        foreach (\$this->session as \$key => \$val) {
            \$this->assertEquals(\$attributes[\$key], \$val);
            ++\$i;
        }

        \$this->assertEquals(\\count(\$attributes), \$i);
    }

    public function testGetCount()
    {
        \$this->session->set('hello', 'world');
        \$this->session->set('symfony', 'rocks');

        \$this->assertCount(2, \$this->session);
    }

    public function testGetMeta()
    {
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag', \$this->session->getMetadataBag());
    }

    public function testIsEmpty()
    {
        \$this->assertTrue(\$this->session->isEmpty());

        \$this->session->set('hello', 'world');
        \$this->assertFalse(\$this->session->isEmpty());

        \$this->session->remove('hello');
        \$this->assertTrue(\$this->session->isEmpty());

        \$flash = \$this->session->getFlashBag();
        \$flash->set('hello', 'world');
        \$this->assertFalse(\$this->session->isEmpty());

        \$flash->get('hello');
        \$this->assertTrue(\$this->session->isEmpty());
    }

    public function testGetBagWithBagImplementingGetBag()
    {
        \$bag = new AttributeBag();
        \$bag->setName('foo');

        \$storage = new MockArraySessionStorage();
        \$storage->registerBag(\$bag);

        \$this->assertSame(\$bag, (new Session(\$storage))->getBag('foo'));
    }

    public function testGetBagWithBagNotImplementingGetBag()
    {
        \$data = [];

        \$bag = new AttributeBag();
        \$bag->setName('foo');

        \$storage = new MockArraySessionStorage();
        \$storage->registerBag(new SessionBagProxy(\$bag, \$data, \$usageIndex));

        \$this->assertSame(\$bag, (new Session(\$storage))->getBag('foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/SessionTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;

/**
 * SessionTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robert Schönthal <seroscho@googlemail.com>
 * @author Drak <drak@zikula.org>
 */
class SessionTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface
     */
    protected \$storage;

    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface
     */
    protected \$session;

    protected function setUp(): void
    {
        \$this->storage = new MockArraySessionStorage();
        \$this->session = new Session(\$this->storage, new AttributeBag(), new FlashBag());
    }

    protected function tearDown(): void
    {
        \$this->storage = null;
        \$this->session = null;
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->assertTrue(\$this->session->start());
        \$this->assertNotEquals('', \$this->session->getId());
    }

    public function testIsStarted()
    {
        \$this->assertFalse(\$this->session->isStarted());
        \$this->session->start();
        \$this->assertTrue(\$this->session->isStarted());
    }

    public function testSetId()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->session->setId('0123456789abcdef');
        \$this->session->start();
        \$this->assertEquals('0123456789abcdef', \$this->session->getId());
    }

    public function testSetIdAfterStart()
    {
        \$this->session->start();
        \$id = \$this->session->getId();

        \$e = null;
        try {
            \$this->session->setId(\$id);
        } catch (\\Exception \$e) {
        }

        \$this->assertNull(\$e);

        try {
            \$this->session->setId('different');
        } catch (\\Exception \$e) {
        }

        \$this->assertInstanceOf('\\LogicException', \$e);
    }

    public function testSetName()
    {
        \$this->assertEquals('MOCKSESSID', \$this->session->getName());
        \$this->session->setName('session.test.com');
        \$this->session->start();
        \$this->assertEquals('session.test.com', \$this->session->getName());
    }

    public function testGet()
    {
        // tests defaults
        \$this->assertNull(\$this->session->get('foo'));
        \$this->assertEquals(1, \$this->session->get('foo', 1));
    }

    /**
     * @dataProvider setProvider
     */
    public function testSet(\$key, \$value)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertEquals(\$value, \$this->session->get(\$key));
    }

    /**
     * @dataProvider setProvider
     */
    public function testHas(\$key, \$value)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertTrue(\$this->session->has(\$key));
        \$this->assertFalse(\$this->session->has(\$key.'non_value'));
    }

    public function testReplace()
    {
        \$this->session->replace(['happiness' => 'be good', 'symfony' => 'awesome']);
        \$this->assertEquals(['happiness' => 'be good', 'symfony' => 'awesome'], \$this->session->all());
        \$this->session->replace([]);
        \$this->assertEquals([], \$this->session->all());
    }

    /**
     * @dataProvider setProvider
     */
    public function testAll(\$key, \$value, \$result)
    {
        \$this->session->set(\$key, \$value);
        \$this->assertEquals(\$result, \$this->session->all());
    }

    /**
     * @dataProvider setProvider
     */
    public function testClear(\$key, \$value)
    {
        \$this->session->set('hi', 'fabien');
        \$this->session->set(\$key, \$value);
        \$this->session->clear();
        \$this->assertEquals([], \$this->session->all());
    }

    public function setProvider()
    {
        return [
            ['foo', 'bar', ['foo' => 'bar']],
            ['foo.bar', 'too much beer', ['foo.bar' => 'too much beer']],
            ['great', 'symfony is great', ['great' => 'symfony is great']],
        ];
    }

    /**
     * @dataProvider setProvider
     */
    public function testRemove(\$key, \$value)
    {
        \$this->session->set('hi.world', 'have a nice day');
        \$this->session->set(\$key, \$value);
        \$this->session->remove(\$key);
        \$this->assertEquals(['hi.world' => 'have a nice day'], \$this->session->all());
    }

    public function testInvalidate()
    {
        \$this->session->set('invalidate', 123);
        \$this->session->invalidate();
        \$this->assertEquals([], \$this->session->all());
    }

    public function testMigrate()
    {
        \$this->session->set('migrate', 321);
        \$this->session->migrate();
        \$this->assertEquals(321, \$this->session->get('migrate'));
    }

    public function testMigrateDestroy()
    {
        \$this->session->set('migrate', 333);
        \$this->session->migrate(true);
        \$this->assertEquals(333, \$this->session->get('migrate'));
    }

    public function testSave()
    {
        \$this->session->start();
        \$this->session->save();

        \$this->assertFalse(\$this->session->isStarted());
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->session->getId());
        \$this->session->start();
        \$this->assertNotEquals('', \$this->session->getId());
    }

    public function testGetFlashBag()
    {
        \$this->assertInstanceOf('Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\Flash\\\\FlashBagInterface', \$this->session->getFlashBag());
    }

    public function testGetIterator()
    {
        \$attributes = ['hello' => 'world', 'symfony' => 'rocks'];
        foreach (\$attributes as \$key => \$val) {
            \$this->session->set(\$key, \$val);
        }

        \$i = 0;
        foreach (\$this->session as \$key => \$val) {
            \$this->assertEquals(\$attributes[\$key], \$val);
            ++\$i;
        }

        \$this->assertEquals(\\count(\$attributes), \$i);
    }

    public function testGetCount()
    {
        \$this->session->set('hello', 'world');
        \$this->session->set('symfony', 'rocks');

        \$this->assertCount(2, \$this->session);
    }

    public function testGetMeta()
    {
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag', \$this->session->getMetadataBag());
    }

    public function testIsEmpty()
    {
        \$this->assertTrue(\$this->session->isEmpty());

        \$this->session->set('hello', 'world');
        \$this->assertFalse(\$this->session->isEmpty());

        \$this->session->remove('hello');
        \$this->assertTrue(\$this->session->isEmpty());

        \$flash = \$this->session->getFlashBag();
        \$flash->set('hello', 'world');
        \$this->assertFalse(\$this->session->isEmpty());

        \$flash->get('hello');
        \$this->assertTrue(\$this->session->isEmpty());
    }

    public function testGetBagWithBagImplementingGetBag()
    {
        \$bag = new AttributeBag();
        \$bag->setName('foo');

        \$storage = new MockArraySessionStorage();
        \$storage->registerBag(\$bag);

        \$this->assertSame(\$bag, (new Session(\$storage))->getBag('foo'));
    }

    public function testGetBagWithBagNotImplementingGetBag()
    {
        \$data = [];

        \$bag = new AttributeBag();
        \$bag->setName('foo');

        \$storage = new MockArraySessionStorage();
        \$storage->registerBag(new SessionBagProxy(\$bag, \$data, \$usageIndex));

        \$this->assertSame(\$bag, (new Session(\$storage))->getBag('foo'));
    }
}
", "vendor/symfony/http-foundation/Tests/Session/SessionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/SessionTest.php");
    }
}
