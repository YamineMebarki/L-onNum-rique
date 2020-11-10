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

/* vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php */
class __TwigTemplate_059930ac8d7bf1b1264a1a974cd37c75ce903df57cdee17d176a44275c262395 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;

/**
 * DevLaon class for MockArraySessionStorage.
 *
 * @author Drak <drak@zikula.org>
 */
class MockArraySessionStorageTest extends TestCase
{
    /**
     * @var MockArraySessionStorage
     */
    private \$storage;

    /**
     * @var AttributeBag
     */
    private \$attributes;

    /**
     * @var FlashBag
     */
    private \$flashes;

    private \$data;

    protected function setUp(): void
    {
        \$this->attributes = new AttributeBag();
        \$this->flashes = new FlashBag();

        \$this->data = [
            \$this->attributes->getStorageKey() => ['foo' => 'bar'],
            \$this->flashes->getStorageKey() => ['notice' => 'hello'],
        ];

        \$this->storage = new MockArraySessionStorage();
        \$this->storage->registerBag(\$this->flashes);
        \$this->storage->registerBag(\$this->attributes);
        \$this->storage->setSessionData(\$this->data);
    }

    protected function tearDown(): void
    {
        \$this->data = null;
        \$this->flashes = null;
        \$this->attributes = null;
        \$this->storage = null;
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('', \$id);
        \$this->storage->start();
        \$this->assertEquals(\$id, \$this->storage->getId());
    }

    public function testRegenerate()
    {
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->storage->regenerate();
        \$this->assertNotEquals(\$id, \$this->storage->getId());
        \$this->assertEquals(['foo' => 'bar'], \$this->storage->getBag('attributes')->all());
        \$this->assertEquals(['notice' => 'hello'], \$this->storage->getBag('flashes')->peekAll());

        \$id = \$this->storage->getId();
        \$this->storage->regenerate(true);
        \$this->assertNotEquals(\$id, \$this->storage->getId());
        \$this->assertEquals(['foo' => 'bar'], \$this->storage->getBag('attributes')->all());
        \$this->assertEquals(['notice' => 'hello'], \$this->storage->getBag('flashes')->peekAll());
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$this->assertNotEquals('', \$this->storage->getId());
    }

    public function testClearClearsBags()
    {
        \$this->storage->clear();

        \$this->assertSame([], \$this->storage->getBag('attributes')->all());
        \$this->assertSame([], \$this->storage->getBag('flashes')->peekAll());
    }

    public function testClearStartsSession()
    {
        \$this->storage->clear();

        \$this->assertTrue(\$this->storage->isStarted());
    }

    public function testClearWithNoBagsStartsSession()
    {
        \$storage = new MockArraySessionStorage();

        \$storage->clear();

        \$this->assertTrue(\$storage->isStarted());
    }

    public function testUnstartedSave()
    {
        \$this->expectException('RuntimeException');
        \$this->storage->save();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;

/**
 * DevLaon class for MockArraySessionStorage.
 *
 * @author Drak <drak@zikula.org>
 */
class MockArraySessionStorageTest extends TestCase
{
    /**
     * @var MockArraySessionStorage
     */
    private \$storage;

    /**
     * @var AttributeBag
     */
    private \$attributes;

    /**
     * @var FlashBag
     */
    private \$flashes;

    private \$data;

    protected function setUp(): void
    {
        \$this->attributes = new AttributeBag();
        \$this->flashes = new FlashBag();

        \$this->data = [
            \$this->attributes->getStorageKey() => ['foo' => 'bar'],
            \$this->flashes->getStorageKey() => ['notice' => 'hello'],
        ];

        \$this->storage = new MockArraySessionStorage();
        \$this->storage->registerBag(\$this->flashes);
        \$this->storage->registerBag(\$this->attributes);
        \$this->storage->setSessionData(\$this->data);
    }

    protected function tearDown(): void
    {
        \$this->data = null;
        \$this->flashes = null;
        \$this->attributes = null;
        \$this->storage = null;
    }

    public function testStart()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->assertNotEquals('', \$id);
        \$this->storage->start();
        \$this->assertEquals(\$id, \$this->storage->getId());
    }

    public function testRegenerate()
    {
        \$this->storage->start();
        \$id = \$this->storage->getId();
        \$this->storage->regenerate();
        \$this->assertNotEquals(\$id, \$this->storage->getId());
        \$this->assertEquals(['foo' => 'bar'], \$this->storage->getBag('attributes')->all());
        \$this->assertEquals(['notice' => 'hello'], \$this->storage->getBag('flashes')->peekAll());

        \$id = \$this->storage->getId();
        \$this->storage->regenerate(true);
        \$this->assertNotEquals(\$id, \$this->storage->getId());
        \$this->assertEquals(['foo' => 'bar'], \$this->storage->getBag('attributes')->all());
        \$this->assertEquals(['notice' => 'hello'], \$this->storage->getBag('flashes')->peekAll());
    }

    public function testGetId()
    {
        \$this->assertEquals('', \$this->storage->getId());
        \$this->storage->start();
        \$this->assertNotEquals('', \$this->storage->getId());
    }

    public function testClearClearsBags()
    {
        \$this->storage->clear();

        \$this->assertSame([], \$this->storage->getBag('attributes')->all());
        \$this->assertSame([], \$this->storage->getBag('flashes')->peekAll());
    }

    public function testClearStartsSession()
    {
        \$this->storage->clear();

        \$this->assertTrue(\$this->storage->isStarted());
    }

    public function testClearWithNoBagsStartsSession()
    {
        \$storage = new MockArraySessionStorage();

        \$storage->clear();

        \$this->assertTrue(\$storage->isStarted());
    }

    public function testUnstartedSave()
    {
        \$this->expectException('RuntimeException');
        \$this->storage->save();
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/MockArraySessionStorageTest.php");
    }
}
