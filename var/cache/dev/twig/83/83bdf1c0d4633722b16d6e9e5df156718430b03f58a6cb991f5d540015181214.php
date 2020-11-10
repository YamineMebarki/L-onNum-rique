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

/* vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php */
class __TwigTemplate_2232b155e7a406c3bfb7f8482dde6d2ad1465c0a5f66b4f13fd4c07d969f690e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Flash;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag as FlashBag;

/**
 * AutoExpireFlashBagTest.
 *
 * @author Drak <drak@zikula.org>
 */
class AutoExpireFlashBagTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag
     */
    private \$bag;

    protected \$array = [];

    protected function setUp(): void
    {
        parent::setUp();
        \$this->bag = new FlashBag();
        \$this->array = ['new' => ['notice' => ['A previous flash message']]];
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->bag = null;
        parent::tearDown();
    }

    public function testInitialize()
    {
        \$bag = new FlashBag();
        \$array = ['new' => ['notice' => ['A previous flash message']]];
        \$bag->initialize(\$array);
        \$this->assertEquals(['A previous flash message'], \$bag->peek('notice'));
        \$array = ['new' => [
                'notice' => ['Something else'],
                'error' => ['a'],
            ]];
        \$bag->initialize(\$array);
        \$this->assertEquals(['Something else'], \$bag->peek('notice'));
        \$this->assertEquals(['a'], \$bag->peek('error'));
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_symfony_flashes', \$this->bag->getStorageKey());
        \$attributeBag = new FlashBag('test');
        \$this->assertEquals('test', \$attributeBag->getStorageKey());
    }

    public function testGetSetName()
    {
        \$this->assertEquals('flashes', \$this->bag->getName());
        \$this->bag->setName('foo');
        \$this->assertEquals('foo', \$this->bag->getName());
    }

    public function testPeek()
    {
        \$this->assertEquals([], \$this->bag->peek('non_existing'));
        \$this->assertEquals(['default'], \$this->bag->peek('non_existing', ['default']));
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
    }

    public function testSet()
    {
        \$this->bag->set('notice', 'Foo');
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
    }

    public function testHas()
    {
        \$this->assertFalse(\$this->bag->has('nothing'));
        \$this->assertTrue(\$this->bag->has('notice'));
    }

    public function testKeys()
    {
        \$this->assertEquals(['notice'], \$this->bag->keys());
    }

    public function testPeekAll()
    {
        \$array = [
            'new' => [
                'notice' => 'Foo',
                'error' => 'Bar',
            ],
        ];

        \$this->bag->initialize(\$array);
        \$this->assertEquals([
            'notice' => 'Foo',
            'error' => 'Bar',
            ], \$this->bag->peekAll()
        );

        \$this->assertEquals([
            'notice' => 'Foo',
            'error' => 'Bar',
            ], \$this->bag->peekAll()
        );
    }

    public function testGet()
    {
        \$this->assertEquals([], \$this->bag->get('non_existing'));
        \$this->assertEquals(['default'], \$this->bag->get('non_existing', ['default']));
        \$this->assertEquals(['A previous flash message'], \$this->bag->get('notice'));
        \$this->assertEquals([], \$this->bag->get('notice'));
    }

    public function testSetAll()
    {
        \$this->bag->setAll(['a' => 'first', 'b' => 'second']);
        \$this->assertFalse(\$this->bag->has('a'));
        \$this->assertFalse(\$this->bag->has('b'));
    }

    public function testAll()
    {
        \$this->bag->set('notice', 'Foo');
        \$this->bag->set('error', 'Bar');
        \$this->assertEquals([
            'notice' => ['A previous flash message'],
            ], \$this->bag->all()
        );

        \$this->assertEquals([], \$this->bag->all());
    }

    public function testClear()
    {
        \$this->assertEquals(['notice' => ['A previous flash message']], \$this->bag->clear());
    }

    public function testDoNotRemoveTheNewFlashesWhenDisplayingTheExistingOnes()
    {
        \$this->bag->add('success', 'Something');
        \$this->bag->all();

        \$this->assertEquals(['new' => ['success' => ['Something']], 'display' => []], \$this->array);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Flash;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag as FlashBag;

/**
 * AutoExpireFlashBagTest.
 *
 * @author Drak <drak@zikula.org>
 */
class AutoExpireFlashBagTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag
     */
    private \$bag;

    protected \$array = [];

    protected function setUp(): void
    {
        parent::setUp();
        \$this->bag = new FlashBag();
        \$this->array = ['new' => ['notice' => ['A previous flash message']]];
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->bag = null;
        parent::tearDown();
    }

    public function testInitialize()
    {
        \$bag = new FlashBag();
        \$array = ['new' => ['notice' => ['A previous flash message']]];
        \$bag->initialize(\$array);
        \$this->assertEquals(['A previous flash message'], \$bag->peek('notice'));
        \$array = ['new' => [
                'notice' => ['Something else'],
                'error' => ['a'],
            ]];
        \$bag->initialize(\$array);
        \$this->assertEquals(['Something else'], \$bag->peek('notice'));
        \$this->assertEquals(['a'], \$bag->peek('error'));
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_symfony_flashes', \$this->bag->getStorageKey());
        \$attributeBag = new FlashBag('test');
        \$this->assertEquals('test', \$attributeBag->getStorageKey());
    }

    public function testGetSetName()
    {
        \$this->assertEquals('flashes', \$this->bag->getName());
        \$this->bag->setName('foo');
        \$this->assertEquals('foo', \$this->bag->getName());
    }

    public function testPeek()
    {
        \$this->assertEquals([], \$this->bag->peek('non_existing'));
        \$this->assertEquals(['default'], \$this->bag->peek('non_existing', ['default']));
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
    }

    public function testSet()
    {
        \$this->bag->set('notice', 'Foo');
        \$this->assertEquals(['A previous flash message'], \$this->bag->peek('notice'));
    }

    public function testHas()
    {
        \$this->assertFalse(\$this->bag->has('nothing'));
        \$this->assertTrue(\$this->bag->has('notice'));
    }

    public function testKeys()
    {
        \$this->assertEquals(['notice'], \$this->bag->keys());
    }

    public function testPeekAll()
    {
        \$array = [
            'new' => [
                'notice' => 'Foo',
                'error' => 'Bar',
            ],
        ];

        \$this->bag->initialize(\$array);
        \$this->assertEquals([
            'notice' => 'Foo',
            'error' => 'Bar',
            ], \$this->bag->peekAll()
        );

        \$this->assertEquals([
            'notice' => 'Foo',
            'error' => 'Bar',
            ], \$this->bag->peekAll()
        );
    }

    public function testGet()
    {
        \$this->assertEquals([], \$this->bag->get('non_existing'));
        \$this->assertEquals(['default'], \$this->bag->get('non_existing', ['default']));
        \$this->assertEquals(['A previous flash message'], \$this->bag->get('notice'));
        \$this->assertEquals([], \$this->bag->get('notice'));
    }

    public function testSetAll()
    {
        \$this->bag->setAll(['a' => 'first', 'b' => 'second']);
        \$this->assertFalse(\$this->bag->has('a'));
        \$this->assertFalse(\$this->bag->has('b'));
    }

    public function testAll()
    {
        \$this->bag->set('notice', 'Foo');
        \$this->bag->set('error', 'Bar');
        \$this->assertEquals([
            'notice' => ['A previous flash message'],
            ], \$this->bag->all()
        );

        \$this->assertEquals([], \$this->bag->all());
    }

    public function testClear()
    {
        \$this->assertEquals(['notice' => ['A previous flash message']], \$this->bag->clear());
    }

    public function testDoNotRemoveTheNewFlashesWhenDisplayingTheExistingOnes()
    {
        \$this->bag->add('success', 'Something');
        \$this->bag->all();

        \$this->assertEquals(['new' => ['success' => ['Something']], 'display' => []], \$this->array);
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Flash/AutoExpireFlashBagTest.php");
    }
}
