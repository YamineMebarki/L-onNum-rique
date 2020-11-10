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

/* vendor/symfony/console/Tests/Input/InputTest.php */
class __TwigTemplate_be848eb839fe37d8d8750dc3bffbf261567df01a606beb85dcc2332cd6fb7565 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputTest.php"));

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
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;

class InputTest extends TestCase
{
    public function testConstructor()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));
        \$this->assertEquals('foo', \$input->getArgument('name'), '->__construct() takes a InputDefinition as an argument');
    }

    public function testOptions()
    {
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name')]));
        \$this->assertEquals('foo', \$input->getOption('name'), '->getOption() returns the value for the given option');

        \$input->setOption('name', 'bar');
        \$this->assertEquals('bar', \$input->getOption('name'), '->setOption() sets the value for a given option');
        \$this->assertEquals(['name' => 'bar'], \$input->getOptions(), '->getOptions() returns all option values');

        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertEquals('default', \$input->getOption('bar'), '->getOption() returns the default value for optional options');
        \$this->assertEquals(['name' => 'foo', 'bar' => 'default'], \$input->getOptions(), '->getOptions() returns all option values, even optional ones');

        \$input = new ArrayInput(['--name' => 'foo', '--bar' => ''], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertEquals('', \$input->getOption('bar'), '->getOption() returns null for options explicitly passed without value (or an empty value)');
        \$this->assertEquals(['name' => 'foo', 'bar' => ''], \$input->getOptions(), '->getOptions() returns all option values.');

        \$input = new ArrayInput(['--name' => 'foo', '--bar' => null], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertNull(\$input->getOption('bar'), '->getOption() returns null for options explicitly passed without value (or an empty value)');
        \$this->assertEquals(['name' => 'foo', 'bar' => null], \$input->getOptions(), '->getOptions() returns all option values');
    }

    public function testSetInvalidOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" option does not exist.');
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$input->setOption('foo', 'bar');
    }

    public function testGetInvalidOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" option does not exist.');
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$input->getOption('foo');
    }

    public function testArguments()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));
        \$this->assertEquals('foo', \$input->getArgument('name'), '->getArgument() returns the value for the given argument');

        \$input->setArgument('name', 'bar');
        \$this->assertEquals('bar', \$input->getArgument('name'), '->setArgument() sets the value for a given argument');
        \$this->assertEquals(['name' => 'bar'], \$input->getArguments(), '->getArguments() returns all argument values');

        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$this->assertEquals('default', \$input->getArgument('bar'), '->getArgument() returns the default value for optional arguments');
        \$this->assertEquals(['name' => 'foo', 'bar' => 'default'], \$input->getArguments(), '->getArguments() returns all argument values, even optional ones');
    }

    public function testSetInvalidArgument()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" argument does not exist.');
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$input->setArgument('foo', 'bar');
    }

    public function testGetInvalidArgument()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" argument does not exist.');
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$input->getArgument('foo');
    }

    public function testValidateWithMissingArguments()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Not enough arguments (missing: \"name\").');
        \$input = new ArrayInput([]);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED)]));
        \$input->validate();
    }

    public function testValidateWithMissingRequiredArguments()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Not enough arguments (missing: \"name\").');
        \$input = new ArrayInput(['bar' => 'baz']);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED), new InputArgument('bar', InputArgument::OPTIONAL)]));
        \$input->validate();
    }

    public function testValidate()
    {
        \$input = new ArrayInput(['name' => 'foo']);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED)]));

        \$this->assertNull(\$input->validate());
    }

    public function testSetGetInteractive()
    {
        \$input = new ArrayInput([]);
        \$this->assertTrue(\$input->isInteractive(), '->isInteractive() returns whether the input should be interactive or not');
        \$input->setInteractive(false);
        \$this->assertFalse(\$input->isInteractive(), '->setInteractive() changes the interactive flag');
    }

    public function testSetGetStream()
    {
        \$input = new ArrayInput([]);
        \$stream = fopen('php://memory', 'r+', false);
        \$input->setStream(\$stream);
        \$this->assertSame(\$stream, \$input->getStream());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Input/InputTest.php";
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
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;

class InputTest extends TestCase
{
    public function testConstructor()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));
        \$this->assertEquals('foo', \$input->getArgument('name'), '->__construct() takes a InputDefinition as an argument');
    }

    public function testOptions()
    {
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name')]));
        \$this->assertEquals('foo', \$input->getOption('name'), '->getOption() returns the value for the given option');

        \$input->setOption('name', 'bar');
        \$this->assertEquals('bar', \$input->getOption('name'), '->setOption() sets the value for a given option');
        \$this->assertEquals(['name' => 'bar'], \$input->getOptions(), '->getOptions() returns all option values');

        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertEquals('default', \$input->getOption('bar'), '->getOption() returns the default value for optional options');
        \$this->assertEquals(['name' => 'foo', 'bar' => 'default'], \$input->getOptions(), '->getOptions() returns all option values, even optional ones');

        \$input = new ArrayInput(['--name' => 'foo', '--bar' => ''], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertEquals('', \$input->getOption('bar'), '->getOption() returns null for options explicitly passed without value (or an empty value)');
        \$this->assertEquals(['name' => 'foo', 'bar' => ''], \$input->getOptions(), '->getOptions() returns all option values.');

        \$input = new ArrayInput(['--name' => 'foo', '--bar' => null], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$this->assertNull(\$input->getOption('bar'), '->getOption() returns null for options explicitly passed without value (or an empty value)');
        \$this->assertEquals(['name' => 'foo', 'bar' => null], \$input->getOptions(), '->getOptions() returns all option values');
    }

    public function testSetInvalidOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" option does not exist.');
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$input->setOption('foo', 'bar');
    }

    public function testGetInvalidOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" option does not exist.');
        \$input = new ArrayInput(['--name' => 'foo'], new InputDefinition([new InputOption('name'), new InputOption('bar', '', InputOption::VALUE_OPTIONAL, '', 'default')]));
        \$input->getOption('foo');
    }

    public function testArguments()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));
        \$this->assertEquals('foo', \$input->getArgument('name'), '->getArgument() returns the value for the given argument');

        \$input->setArgument('name', 'bar');
        \$this->assertEquals('bar', \$input->getArgument('name'), '->setArgument() sets the value for a given argument');
        \$this->assertEquals(['name' => 'bar'], \$input->getArguments(), '->getArguments() returns all argument values');

        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$this->assertEquals('default', \$input->getArgument('bar'), '->getArgument() returns the default value for optional arguments');
        \$this->assertEquals(['name' => 'foo', 'bar' => 'default'], \$input->getArguments(), '->getArguments() returns all argument values, even optional ones');
    }

    public function testSetInvalidArgument()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" argument does not exist.');
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$input->setArgument('foo', 'bar');
    }

    public function testGetInvalidArgument()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"foo\" argument does not exist.');
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name'), new InputArgument('bar', InputArgument::OPTIONAL, '', 'default')]));
        \$input->getArgument('foo');
    }

    public function testValidateWithMissingArguments()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Not enough arguments (missing: \"name\").');
        \$input = new ArrayInput([]);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED)]));
        \$input->validate();
    }

    public function testValidateWithMissingRequiredArguments()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Not enough arguments (missing: \"name\").');
        \$input = new ArrayInput(['bar' => 'baz']);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED), new InputArgument('bar', InputArgument::OPTIONAL)]));
        \$input->validate();
    }

    public function testValidate()
    {
        \$input = new ArrayInput(['name' => 'foo']);
        \$input->bind(new InputDefinition([new InputArgument('name', InputArgument::REQUIRED)]));

        \$this->assertNull(\$input->validate());
    }

    public function testSetGetInteractive()
    {
        \$input = new ArrayInput([]);
        \$this->assertTrue(\$input->isInteractive(), '->isInteractive() returns whether the input should be interactive or not');
        \$input->setInteractive(false);
        \$this->assertFalse(\$input->isInteractive(), '->setInteractive() changes the interactive flag');
    }

    public function testSetGetStream()
    {
        \$input = new ArrayInput([]);
        \$stream = fopen('php://memory', 'r+', false);
        \$input->setStream(\$stream);
        \$this->assertSame(\$stream, \$input->getStream());
    }
}
", "vendor/symfony/console/Tests/Input/InputTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Input/InputTest.php");
    }
}
