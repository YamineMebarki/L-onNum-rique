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

/* vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php */
class __TwigTemplate_4427335cf08669c7a6798060d8ba706d5334feeae91f878a31e68cb8e8b9f5c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Attribute;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag;

/**
 * Tests NamespacedAttributeBag.
 *
 * @author Drak <drak@zikula.org>
 */
class NamespacedAttributeBagTest extends TestCase
{
    private \$array = [];

    /**
     * @var NamespacedAttributeBag
     */
    private \$bag;

    protected function setUp(): void
    {
        \$this->array = [
            'hello' => 'world',
            'always' => 'be happy',
            'user.login' => 'drak',
            'csrf.token' => [
                'a' => '1234',
                'b' => '4321',
            ],
            'category' => [
                'fishing' => [
                    'first' => 'cod',
                    'second' => 'sole',
                ],
            ],
        ];
        \$this->bag = new NamespacedAttributeBag('_sf2', '/');
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->bag = null;
        \$this->array = [];
    }

    public function testInitialize()
    {
        \$bag = new NamespacedAttributeBag();
        \$bag->initialize(\$this->array);
        \$this->assertEquals(\$this->array, \$this->bag->all());
        \$array = ['should' => 'not stick'];
        \$bag->initialize(\$array);

        // should have remained the same
        \$this->assertEquals(\$this->array, \$this->bag->all());
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_sf2', \$this->bag->getStorageKey());
        \$attributeBag = new NamespacedAttributeBag('test');
        \$this->assertEquals('test', \$attributeBag->getStorageKey());
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testHas(\$key, \$value, \$exists)
    {
        \$this->assertEquals(\$exists, \$this->bag->has(\$key));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testHasNoSideEffect(\$key, \$value, \$expected)
    {
        \$expected = json_encode(\$this->bag->all());
        \$this->bag->has(\$key);

        \$this->assertEquals(\$expected, json_encode(\$this->bag->all()));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testGet(\$key, \$value, \$expected)
    {
        \$this->assertEquals(\$value, \$this->bag->get(\$key));
    }

    public function testGetDefaults()
    {
        \$this->assertNull(\$this->bag->get('user2.login'));
        \$this->assertEquals('default', \$this->bag->get('user2.login', 'default'));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testGetNoSideEffect(\$key, \$value, \$expected)
    {
        \$expected = json_encode(\$this->bag->all());
        \$this->bag->get(\$key);

        \$this->assertEquals(\$expected, json_encode(\$this->bag->all()));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testSet(\$key, \$value, \$expected)
    {
        \$this->bag->set(\$key, \$value);
        \$this->assertEquals(\$value, \$this->bag->get(\$key));
    }

    public function testAll()
    {
        \$this->assertEquals(\$this->array, \$this->bag->all());

        \$this->bag->set('hello', 'fabien');
        \$array = \$this->array;
        \$array['hello'] = 'fabien';
        \$this->assertEquals(\$array, \$this->bag->all());
    }

    public function testReplace()
    {
        \$array = [];
        \$array['name'] = 'jack';
        \$array['foo.bar'] = 'beep';
        \$this->bag->replace(\$array);
        \$this->assertEquals(\$array, \$this->bag->all());
        \$this->assertNull(\$this->bag->get('hello'));
        \$this->assertNull(\$this->bag->get('always'));
        \$this->assertNull(\$this->bag->get('user.login'));
    }

    public function testRemove()
    {
        \$this->assertEquals('world', \$this->bag->get('hello'));
        \$this->bag->remove('hello');
        \$this->assertNull(\$this->bag->get('hello'));

        \$this->assertEquals('be happy', \$this->bag->get('always'));
        \$this->bag->remove('always');
        \$this->assertNull(\$this->bag->get('always'));

        \$this->assertEquals('drak', \$this->bag->get('user.login'));
        \$this->bag->remove('user.login');
        \$this->assertNull(\$this->bag->get('user.login'));
    }

    public function testRemoveExistingNamespacedAttribute()
    {
        \$this->assertSame('cod', \$this->bag->remove('category/fishing/first'));
    }

    public function testRemoveNonexistingNamespacedAttribute()
    {
        \$this->assertNull(\$this->bag->remove('foo/bar/baz'));
    }

    public function testClear()
    {
        \$this->bag->clear();
        \$this->assertEquals([], \$this->bag->all());
    }

    public function attributesProvider()
    {
        return [
            ['hello', 'world', true],
            ['always', 'be happy', true],
            ['user.login', 'drak', true],
            ['csrf.token', ['a' => '1234', 'b' => '4321'], true],
            ['csrf.token/a', '1234', true],
            ['csrf.token/b', '4321', true],
            ['category', ['fishing' => ['first' => 'cod', 'second' => 'sole']], true],
            ['category/fishing', ['first' => 'cod', 'second' => 'sole'], true],
            ['category/fishing/missing/first', null, false],
            ['category/fishing/first', 'cod', true],
            ['category/fishing/second', 'sole', true],
            ['category/fishing/missing/second', null, false],
            ['user2.login', null, false],
            ['never', null, false],
            ['bye', null, false],
            ['bye/for/now', null, false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Attribute;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag;

/**
 * Tests NamespacedAttributeBag.
 *
 * @author Drak <drak@zikula.org>
 */
class NamespacedAttributeBagTest extends TestCase
{
    private \$array = [];

    /**
     * @var NamespacedAttributeBag
     */
    private \$bag;

    protected function setUp(): void
    {
        \$this->array = [
            'hello' => 'world',
            'always' => 'be happy',
            'user.login' => 'drak',
            'csrf.token' => [
                'a' => '1234',
                'b' => '4321',
            ],
            'category' => [
                'fishing' => [
                    'first' => 'cod',
                    'second' => 'sole',
                ],
            ],
        ];
        \$this->bag = new NamespacedAttributeBag('_sf2', '/');
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->bag = null;
        \$this->array = [];
    }

    public function testInitialize()
    {
        \$bag = new NamespacedAttributeBag();
        \$bag->initialize(\$this->array);
        \$this->assertEquals(\$this->array, \$this->bag->all());
        \$array = ['should' => 'not stick'];
        \$bag->initialize(\$array);

        // should have remained the same
        \$this->assertEquals(\$this->array, \$this->bag->all());
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_sf2', \$this->bag->getStorageKey());
        \$attributeBag = new NamespacedAttributeBag('test');
        \$this->assertEquals('test', \$attributeBag->getStorageKey());
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testHas(\$key, \$value, \$exists)
    {
        \$this->assertEquals(\$exists, \$this->bag->has(\$key));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testHasNoSideEffect(\$key, \$value, \$expected)
    {
        \$expected = json_encode(\$this->bag->all());
        \$this->bag->has(\$key);

        \$this->assertEquals(\$expected, json_encode(\$this->bag->all()));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testGet(\$key, \$value, \$expected)
    {
        \$this->assertEquals(\$value, \$this->bag->get(\$key));
    }

    public function testGetDefaults()
    {
        \$this->assertNull(\$this->bag->get('user2.login'));
        \$this->assertEquals('default', \$this->bag->get('user2.login', 'default'));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testGetNoSideEffect(\$key, \$value, \$expected)
    {
        \$expected = json_encode(\$this->bag->all());
        \$this->bag->get(\$key);

        \$this->assertEquals(\$expected, json_encode(\$this->bag->all()));
    }

    /**
     * @dataProvider attributesProvider
     */
    public function testSet(\$key, \$value, \$expected)
    {
        \$this->bag->set(\$key, \$value);
        \$this->assertEquals(\$value, \$this->bag->get(\$key));
    }

    public function testAll()
    {
        \$this->assertEquals(\$this->array, \$this->bag->all());

        \$this->bag->set('hello', 'fabien');
        \$array = \$this->array;
        \$array['hello'] = 'fabien';
        \$this->assertEquals(\$array, \$this->bag->all());
    }

    public function testReplace()
    {
        \$array = [];
        \$array['name'] = 'jack';
        \$array['foo.bar'] = 'beep';
        \$this->bag->replace(\$array);
        \$this->assertEquals(\$array, \$this->bag->all());
        \$this->assertNull(\$this->bag->get('hello'));
        \$this->assertNull(\$this->bag->get('always'));
        \$this->assertNull(\$this->bag->get('user.login'));
    }

    public function testRemove()
    {
        \$this->assertEquals('world', \$this->bag->get('hello'));
        \$this->bag->remove('hello');
        \$this->assertNull(\$this->bag->get('hello'));

        \$this->assertEquals('be happy', \$this->bag->get('always'));
        \$this->bag->remove('always');
        \$this->assertNull(\$this->bag->get('always'));

        \$this->assertEquals('drak', \$this->bag->get('user.login'));
        \$this->bag->remove('user.login');
        \$this->assertNull(\$this->bag->get('user.login'));
    }

    public function testRemoveExistingNamespacedAttribute()
    {
        \$this->assertSame('cod', \$this->bag->remove('category/fishing/first'));
    }

    public function testRemoveNonexistingNamespacedAttribute()
    {
        \$this->assertNull(\$this->bag->remove('foo/bar/baz'));
    }

    public function testClear()
    {
        \$this->bag->clear();
        \$this->assertEquals([], \$this->bag->all());
    }

    public function attributesProvider()
    {
        return [
            ['hello', 'world', true],
            ['always', 'be happy', true],
            ['user.login', 'drak', true],
            ['csrf.token', ['a' => '1234', 'b' => '4321'], true],
            ['csrf.token/a', '1234', true],
            ['csrf.token/b', '4321', true],
            ['category', ['fishing' => ['first' => 'cod', 'second' => 'sole']], true],
            ['category/fishing', ['first' => 'cod', 'second' => 'sole'], true],
            ['category/fishing/missing/first', null, false],
            ['category/fishing/first', 'cod', true],
            ['category/fishing/second', 'sole', true],
            ['category/fishing/missing/second', null, false],
            ['user2.login', null, false],
            ['never', null, false],
            ['bye', null, false],
            ['bye/for/now', null, false],
        ];
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Attribute/NamespacedAttributeBagTest.php");
    }
}
