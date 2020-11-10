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

/* vendor/fzaninotto/faker/test/Faker/GeneratorTest.php */
class __TwigTemplate_32f0d11a06078c64ab2bfeec888e49e49a518a0ab1a9da5a24ef2ceafc079d98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/GeneratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/GeneratorTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test;

use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class GeneratorTest extends TestCase
{
    public function testAddProviderGivesPriorityToNewlyAddedProvider()
    {
        \$generator = new Generator;
        \$generator->addProvider(new FooProvider());
        \$generator->addProvider(new BarProvider());
        \$this->assertEquals('barfoo', \$generator->format('fooFormatter'));
    }

    public function testGetFormatterReturnsCallable()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertInternalType('callable', \$generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$expected = array(\$provider, 'fooFormatter');
        \$this->assertEquals(\$expected, \$generator->getFormatter('fooFormatter'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectProvider()
    {
        \$generator = new Generator;
        \$generator->getFormatter('fooFormatter');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$generator->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('bazfoo', \$generator->format('fooFormatterWithArguments', array('foo')));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        \$generator = new Generator();
        \$this->assertEquals('fooBar#?', \$generator->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        \$generator = new Generator();
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('This is foobar a text with foobar', \$generator->parse('This is ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["fooFormatter"]) || array_key_exists("fooFormatter", $context) ? $context["fooFormatter"] : (function () { throw new RuntimeError('Variable "fooFormatter" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " a text with ";
        echo twig_escape_filter($this->env, (isset($context["fooFormatter"]) || array_key_exists("fooFormatter", $context) ? $context["fooFormatter"] : (function () { throw new RuntimeError('Variable "fooFormatter" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "'));
    }

    public function testMagicGetCallsFormat()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('bazfoo', \$generator->fooFormatterWithArguments('foo'));
    }

    public function testSeed()
    {
        \$generator = new Generator;

        \$generator->seed(0);
        \$mtRandWithSeedZero = mt_rand();
        \$generator->seed(0);
        \$this->assertEquals(\$mtRandWithSeedZero, mt_rand(), 'seed(0) should be deterministic.');

        \$generator->seed();
        \$mtRandWithoutSeed = mt_rand();
        \$this->assertNotEquals(\$mtRandWithSeedZero, \$mtRandWithoutSeed, 'seed() should be different than seed(0)');
        \$generator->seed();
        \$this->assertNotEquals(\$mtRandWithoutSeed, mt_rand(), 'seed() should not be deterministic.');

        \$generator->seed('10');
        \$this->assertTrue(true, 'seeding with a non int value doesn\\'t throw an exception');
    }
}

class FooProvider
{
    public function fooFormatter()
    {
        return 'foobar';
    }

    public function fooFormatterWithArguments(\$value = '')
    {
        return 'baz' . \$value;
    }
}

class BarProvider
{
    public function fooFormatter()
    {
        return 'barfoo';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/GeneratorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 82,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test;

use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class GeneratorTest extends TestCase
{
    public function testAddProviderGivesPriorityToNewlyAddedProvider()
    {
        \$generator = new Generator;
        \$generator->addProvider(new FooProvider());
        \$generator->addProvider(new BarProvider());
        \$this->assertEquals('barfoo', \$generator->format('fooFormatter'));
    }

    public function testGetFormatterReturnsCallable()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertInternalType('callable', \$generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$expected = array(\$provider, 'fooFormatter');
        \$this->assertEquals(\$expected, \$generator->getFormatter('fooFormatter'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectProvider()
    {
        \$generator = new Generator;
        \$generator->getFormatter('fooFormatter');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$generator->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('bazfoo', \$generator->format('fooFormatterWithArguments', array('foo')));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        \$generator = new Generator();
        \$this->assertEquals('fooBar#?', \$generator->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        \$generator = new Generator();
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('This is foobar a text with foobar', \$generator->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    public function testMagicGetCallsFormat()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('foobar', \$generator->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        \$generator = new Generator;
        \$provider = new FooProvider();
        \$generator->addProvider(\$provider);
        \$this->assertEquals('bazfoo', \$generator->fooFormatterWithArguments('foo'));
    }

    public function testSeed()
    {
        \$generator = new Generator;

        \$generator->seed(0);
        \$mtRandWithSeedZero = mt_rand();
        \$generator->seed(0);
        \$this->assertEquals(\$mtRandWithSeedZero, mt_rand(), 'seed(0) should be deterministic.');

        \$generator->seed();
        \$mtRandWithoutSeed = mt_rand();
        \$this->assertNotEquals(\$mtRandWithSeedZero, \$mtRandWithoutSeed, 'seed() should be different than seed(0)');
        \$generator->seed();
        \$this->assertNotEquals(\$mtRandWithoutSeed, mt_rand(), 'seed() should not be deterministic.');

        \$generator->seed('10');
        \$this->assertTrue(true, 'seeding with a non int value doesn\\'t throw an exception');
    }
}

class FooProvider
{
    public function fooFormatter()
    {
        return 'foobar';
    }

    public function fooFormatterWithArguments(\$value = '')
    {
        return 'baz' . \$value;
    }
}

class BarProvider
{
    public function fooFormatter()
    {
        return 'barfoo';
    }
}
", "vendor/fzaninotto/faker/test/Faker/GeneratorTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/GeneratorTest.php");
    }
}
