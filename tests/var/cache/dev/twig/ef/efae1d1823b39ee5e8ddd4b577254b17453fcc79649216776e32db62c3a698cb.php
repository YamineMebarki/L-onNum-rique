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

/* vendor/symfony/console/Tests/Input/InputOptionTest.php */
class __TwigTemplate_68d95153a331fb9d71aa91c1543df6833ac98e43beef3d77132b3996715d7dc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputOptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputOptionTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Input;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\InputOption;

class InputOptionTest extends TestCase
{
    public function testConstructor()
    {
        \$option = new InputOption('foo');
        \$this->assertEquals('foo', \$option->getName(), '__construct() takes a name as its first argument');
        \$option = new InputOption('--foo');
        \$this->assertEquals('foo', \$option->getName(), '__construct() removes the leading -- of the option name');
    }

    public function testArrayModeWithoutValue()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
        new InputOption('foo', 'f', InputOption::VALUE_IS_ARRAY);
    }

    public function testShortcut()
    {
        \$option = new InputOption('foo', 'f');
        \$this->assertEquals('f', \$option->getShortcut(), '__construct() can take a shortcut as its second argument');
        \$option = new InputOption('foo', '-f|-ff|fff');
        \$this->assertEquals('f|ff|fff', \$option->getShortcut(), '__construct() removes the leading - of the shortcuts');
        \$option = new InputOption('foo', ['f', 'ff', '-fff']);
        \$this->assertEquals('f|ff|fff', \$option->getShortcut(), '__construct() removes the leading - of the shortcuts');
        \$option = new InputOption('foo');
        \$this->assertNull(\$option->getShortcut(), '__construct() makes the shortcut null by default');
    }

    public function testModes()
    {
        \$option = new InputOption('foo', 'f');
        \$this->assertFalse(\$option->acceptValue(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');

        \$option = new InputOption('foo', 'f', null);
        \$this->assertFalse(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_REQUIRED);
        \$this->assertTrue(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');
        \$this->assertTrue(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL);
        \$this->assertTrue(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
        \$this->assertTrue(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
    }

    public function testInvalidModes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Option mode \"-1\" is not valid.');

        new InputOption('foo', 'f', '-1');
    }

    public function testEmptyNameIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('');
    }

    public function testDoubleDashNameIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('--');
    }

    public function testSingleDashOptionIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('foo', '-');
    }

    public function testIsArray()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$this->assertTrue(\$option->isArray(), '->isArray() returns true if the option can be an array');
        \$option = new InputOption('foo', null, InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->isArray(), '->isArray() returns false if the option can not be an array');
    }

    public function testGetDescription()
    {
        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$this->assertEquals('Some description', \$option->getDescription(), '->getDescription() returns the description message');
    }

    public function testGetDefault()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL, '', 'default');
        \$this->assertEquals('default', \$option->getDefault(), '->getDefault() returns the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED, '', 'default');
        \$this->assertEquals('default', \$option->getDefault(), '->getDefault() returns the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED);
        \$this->assertNull(\$option->getDefault(), '->getDefault() returns null if no default value is configured');

        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$this->assertEquals([], \$option->getDefault(), '->getDefault() returns an empty array if option is an array');

        \$option = new InputOption('foo', null, InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->getDefault(), '->getDefault() returns false if the option does not take a value');
    }

    public function testSetDefault()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED, '', 'default');
        \$option->setDefault(null);
        \$this->assertNull(\$option->getDefault(), '->setDefault() can reset the default value by passing null');
        \$option->setDefault('another');
        \$this->assertEquals('another', \$option->getDefault(), '->setDefault() changes the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY);
        \$option->setDefault([1, 2]);
        \$this->assertEquals([1, 2], \$option->getDefault(), '->setDefault() changes the default value');
    }

    public function testDefaultValueWithValueNoneMode()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('Cannot set a default value when using InputOption::VALUE_NONE mode.');
        \$option = new InputOption('foo', 'f', InputOption::VALUE_NONE);
        \$option->setDefault('default');
    }

    public function testDefaultValueWithIsArrayMode()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('A default value for an array option must be an array.');
        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$option->setDefault('default');
    }

    public function testEquals()
    {
        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', 'f', null, 'Alternative description');
        \$this->assertTrue(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description');
        \$option2 = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description', true);
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('bar', 'f', null, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', '', null, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Input/InputOptionTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Input;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\InputOption;

class InputOptionTest extends TestCase
{
    public function testConstructor()
    {
        \$option = new InputOption('foo');
        \$this->assertEquals('foo', \$option->getName(), '__construct() takes a name as its first argument');
        \$option = new InputOption('--foo');
        \$this->assertEquals('foo', \$option->getName(), '__construct() removes the leading -- of the option name');
    }

    public function testArrayModeWithoutValue()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
        new InputOption('foo', 'f', InputOption::VALUE_IS_ARRAY);
    }

    public function testShortcut()
    {
        \$option = new InputOption('foo', 'f');
        \$this->assertEquals('f', \$option->getShortcut(), '__construct() can take a shortcut as its second argument');
        \$option = new InputOption('foo', '-f|-ff|fff');
        \$this->assertEquals('f|ff|fff', \$option->getShortcut(), '__construct() removes the leading - of the shortcuts');
        \$option = new InputOption('foo', ['f', 'ff', '-fff']);
        \$this->assertEquals('f|ff|fff', \$option->getShortcut(), '__construct() removes the leading - of the shortcuts');
        \$option = new InputOption('foo');
        \$this->assertNull(\$option->getShortcut(), '__construct() makes the shortcut null by default');
    }

    public function testModes()
    {
        \$option = new InputOption('foo', 'f');
        \$this->assertFalse(\$option->acceptValue(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() gives a \"InputOption::VALUE_NONE\" mode by default');

        \$option = new InputOption('foo', 'f', null);
        \$this->assertFalse(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_NONE\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_REQUIRED);
        \$this->assertTrue(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');
        \$this->assertTrue(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');
        \$this->assertFalse(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_REQUIRED\" as its mode');

        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL);
        \$this->assertTrue(\$option->acceptValue(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
        \$this->assertFalse(\$option->isValueRequired(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
        \$this->assertTrue(\$option->isValueOptional(), '__construct() can take \"InputOption::VALUE_OPTIONAL\" as its mode');
    }

    public function testInvalidModes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Option mode \"-1\" is not valid.');

        new InputOption('foo', 'f', '-1');
    }

    public function testEmptyNameIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('');
    }

    public function testDoubleDashNameIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('--');
    }

    public function testSingleDashOptionIsInvalid()
    {
        \$this->expectException('InvalidArgumentException');
        new InputOption('foo', '-');
    }

    public function testIsArray()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$this->assertTrue(\$option->isArray(), '->isArray() returns true if the option can be an array');
        \$option = new InputOption('foo', null, InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->isArray(), '->isArray() returns false if the option can not be an array');
    }

    public function testGetDescription()
    {
        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$this->assertEquals('Some description', \$option->getDescription(), '->getDescription() returns the description message');
    }

    public function testGetDefault()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL, '', 'default');
        \$this->assertEquals('default', \$option->getDefault(), '->getDefault() returns the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED, '', 'default');
        \$this->assertEquals('default', \$option->getDefault(), '->getDefault() returns the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED);
        \$this->assertNull(\$option->getDefault(), '->getDefault() returns null if no default value is configured');

        \$option = new InputOption('foo', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$this->assertEquals([], \$option->getDefault(), '->getDefault() returns an empty array if option is an array');

        \$option = new InputOption('foo', null, InputOption::VALUE_NONE);
        \$this->assertFalse(\$option->getDefault(), '->getDefault() returns false if the option does not take a value');
    }

    public function testSetDefault()
    {
        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED, '', 'default');
        \$option->setDefault(null);
        \$this->assertNull(\$option->getDefault(), '->setDefault() can reset the default value by passing null');
        \$option->setDefault('another');
        \$this->assertEquals('another', \$option->getDefault(), '->setDefault() changes the default value');

        \$option = new InputOption('foo', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY);
        \$option->setDefault([1, 2]);
        \$this->assertEquals([1, 2], \$option->getDefault(), '->setDefault() changes the default value');
    }

    public function testDefaultValueWithValueNoneMode()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('Cannot set a default value when using InputOption::VALUE_NONE mode.');
        \$option = new InputOption('foo', 'f', InputOption::VALUE_NONE);
        \$option->setDefault('default');
    }

    public function testDefaultValueWithIsArrayMode()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('A default value for an array option must be an array.');
        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY);
        \$option->setDefault('default');
    }

    public function testEquals()
    {
        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', 'f', null, 'Alternative description');
        \$this->assertTrue(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description');
        \$option2 = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description', true);
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('bar', 'f', null, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', '', null, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));

        \$option = new InputOption('foo', 'f', null, 'Some description');
        \$option2 = new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, 'Some description');
        \$this->assertFalse(\$option->equals(\$option2));
    }
}
", "vendor/symfony/console/Tests/Input/InputOptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Input/InputOptionTest.php");
    }
}
