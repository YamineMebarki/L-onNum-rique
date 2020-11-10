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

/* vendor/symfony/console/Tests/Input/ArrayInputTest.php */
class __TwigTemplate_ffb7a8bd499e3410fd88aa207c465ac2f24ea970b5cc13805a0f1c92591ab546 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/ArrayInputTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/ArrayInputTest.php"));

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

class ArrayInputTest extends TestCase
{
    public function testGetFirstArgument()
    {
        \$input = new ArrayInput([]);
        \$this->assertNull(\$input->getFirstArgument(), '->getFirstArgument() returns null if no argument were passed');
        \$input = new ArrayInput(['name' => 'Fabien']);
        \$this->assertEquals('Fabien', \$input->getFirstArgument(), '->getFirstArgument() returns the first passed argument');
        \$input = new ArrayInput(['--foo' => 'bar', 'name' => 'Fabien']);
        \$this->assertEquals('Fabien', \$input->getFirstArgument(), '->getFirstArgument() returns the first passed argument');
    }

    public function testHasParameterOption()
    {
        \$input = new ArrayInput(['name' => 'Fabien', '--foo' => 'bar']);
        \$this->assertTrue(\$input->hasParameterOption('--foo'), '->hasParameterOption() returns true if an option is present in the passed parameters');
        \$this->assertFalse(\$input->hasParameterOption('--bar'), '->hasParameterOption() returns false if an option is not present in the passed parameters');

        \$input = new ArrayInput(['--foo']);
        \$this->assertTrue(\$input->hasParameterOption('--foo'), '->hasParameterOption() returns true if an option is present in the passed parameters');

        \$input = new ArrayInput(['--foo', '--', '--bar']);
        \$this->assertTrue(\$input->hasParameterOption('--bar'), '->hasParameterOption() returns true if an option is present in the passed parameters');
        \$this->assertFalse(\$input->hasParameterOption('--bar', true), '->hasParameterOption() returns false if an option is present in the passed parameters after an end of options signal');
    }

    public function testGetParameterOption()
    {
        \$input = new ArrayInput(['name' => 'Fabien', '--foo' => 'bar']);
        \$this->assertEquals('bar', \$input->getParameterOption('--foo'), '->getParameterOption() returns the option of specified name');
        \$this->assertEquals('default', \$input->getParameterOption('--bar', 'default'), '->getParameterOption() returns the default value if an option is not present in the passed parameters');

        \$input = new ArrayInput(['Fabien', '--foo' => 'bar']);
        \$this->assertEquals('bar', \$input->getParameterOption('--foo'), '->getParameterOption() returns the option of specified name');

        \$input = new ArrayInput(['--foo', '--', '--bar' => 'woop']);
        \$this->assertEquals('woop', \$input->getParameterOption('--bar'), '->getParameterOption() returns the correct value if an option is present in the passed parameters');
        \$this->assertEquals('default', \$input->getParameterOption('--bar', 'default', true), '->getParameterOption() returns the default value if an option is present in the passed parameters after an end of options signal');
    }

    public function testParseArguments()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));

        \$this->assertEquals(['name' => 'foo'], \$input->getArguments(), '->parse() parses required arguments');
    }

    /**
     * @dataProvider provideOptions
     */
    public function testParseOptions(\$input, \$options, \$expectedOptions, \$message)
    {
        \$input = new ArrayInput(\$input, new InputDefinition(\$options));

        \$this->assertEquals(\$expectedOptions, \$input->getOptions(), \$message);
    }

    public function provideOptions()
    {
        return [
            [
                ['--foo' => 'bar'],
                [new InputOption('foo')],
                ['foo' => 'bar'],
                '->parse() parses long options',
            ],
            [
                ['--foo' => 'bar'],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'bar'],
                '->parse() parses long options with a default value',
            ],
            [
                [],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'default'],
                '->parse() uses the default value for long options with value optional which are not passed',
            ],
            [
                ['--foo' => null],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => null],
                '->parse() parses long options with a default value',
            ],
            [
                ['-f' => 'bar'],
                [new InputOption('foo', 'f')],
                ['foo' => 'bar'],
                '->parse() parses short options',
            ],
            [
                ['--' => null, '-f' => 'bar'],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'default'],
                '->parse() does not parse opts after an end of options signal',
            ],
            [
                ['--' => null],
                [],
                [],
                '->parse() does not choke on end of options signal',
            ],
        ];
    }

    /**
     * @dataProvider provideInvalidInput
     */
    public function testParseInvalidInput(\$parameters, \$definition, \$expectedExceptionMessage)
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage(\$expectedExceptionMessage);

        new ArrayInput(\$parameters, \$definition);
    }

    public function provideInvalidInput()
    {
        return [
            [
                ['foo' => 'foo'],
                new InputDefinition([new InputArgument('name')]),
                'The \"foo\" argument does not exist.',
            ],
            [
                ['--foo' => null],
                new InputDefinition([new InputOption('foo', 'f', InputOption::VALUE_REQUIRED)]),
                'The \"--foo\" option requires a value.',
            ],
            [
                ['--foo' => 'foo'],
                new InputDefinition(),
                'The \"--foo\" option does not exist.',
            ],
            [
                ['-o' => 'foo'],
                new InputDefinition(),
                'The \"-o\" option does not exist.',
            ],
        ];
    }

    public function testToString()
    {
        \$input = new ArrayInput(['-f' => null, '-b' => 'bar', '--foo' => 'b a z', '--lala' => null, 'test' => 'Foo', 'test2' => \"A\\nB'C\"]);
        \$this->assertEquals('-f -b=bar --foo='.escapeshellarg('b a z').' --lala Foo '.escapeshellarg(\"A\\nB'C\"), (string) \$input);

        \$input = new ArrayInput(['-b' => ['bval_1', 'bval_2'], '--f' => ['fval_1', 'fval_2']]);
        \$this->assertSame('-b=bval_1 -b=bval_2 --f=fval_1 --f=fval_2', (string) \$input);

        \$input = new ArrayInput(['array_arg' => ['val_1', 'val_2']]);
        \$this->assertSame('val_1 val_2', (string) \$input);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Input/ArrayInputTest.php";
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

class ArrayInputTest extends TestCase
{
    public function testGetFirstArgument()
    {
        \$input = new ArrayInput([]);
        \$this->assertNull(\$input->getFirstArgument(), '->getFirstArgument() returns null if no argument were passed');
        \$input = new ArrayInput(['name' => 'Fabien']);
        \$this->assertEquals('Fabien', \$input->getFirstArgument(), '->getFirstArgument() returns the first passed argument');
        \$input = new ArrayInput(['--foo' => 'bar', 'name' => 'Fabien']);
        \$this->assertEquals('Fabien', \$input->getFirstArgument(), '->getFirstArgument() returns the first passed argument');
    }

    public function testHasParameterOption()
    {
        \$input = new ArrayInput(['name' => 'Fabien', '--foo' => 'bar']);
        \$this->assertTrue(\$input->hasParameterOption('--foo'), '->hasParameterOption() returns true if an option is present in the passed parameters');
        \$this->assertFalse(\$input->hasParameterOption('--bar'), '->hasParameterOption() returns false if an option is not present in the passed parameters');

        \$input = new ArrayInput(['--foo']);
        \$this->assertTrue(\$input->hasParameterOption('--foo'), '->hasParameterOption() returns true if an option is present in the passed parameters');

        \$input = new ArrayInput(['--foo', '--', '--bar']);
        \$this->assertTrue(\$input->hasParameterOption('--bar'), '->hasParameterOption() returns true if an option is present in the passed parameters');
        \$this->assertFalse(\$input->hasParameterOption('--bar', true), '->hasParameterOption() returns false if an option is present in the passed parameters after an end of options signal');
    }

    public function testGetParameterOption()
    {
        \$input = new ArrayInput(['name' => 'Fabien', '--foo' => 'bar']);
        \$this->assertEquals('bar', \$input->getParameterOption('--foo'), '->getParameterOption() returns the option of specified name');
        \$this->assertEquals('default', \$input->getParameterOption('--bar', 'default'), '->getParameterOption() returns the default value if an option is not present in the passed parameters');

        \$input = new ArrayInput(['Fabien', '--foo' => 'bar']);
        \$this->assertEquals('bar', \$input->getParameterOption('--foo'), '->getParameterOption() returns the option of specified name');

        \$input = new ArrayInput(['--foo', '--', '--bar' => 'woop']);
        \$this->assertEquals('woop', \$input->getParameterOption('--bar'), '->getParameterOption() returns the correct value if an option is present in the passed parameters');
        \$this->assertEquals('default', \$input->getParameterOption('--bar', 'default', true), '->getParameterOption() returns the default value if an option is present in the passed parameters after an end of options signal');
    }

    public function testParseArguments()
    {
        \$input = new ArrayInput(['name' => 'foo'], new InputDefinition([new InputArgument('name')]));

        \$this->assertEquals(['name' => 'foo'], \$input->getArguments(), '->parse() parses required arguments');
    }

    /**
     * @dataProvider provideOptions
     */
    public function testParseOptions(\$input, \$options, \$expectedOptions, \$message)
    {
        \$input = new ArrayInput(\$input, new InputDefinition(\$options));

        \$this->assertEquals(\$expectedOptions, \$input->getOptions(), \$message);
    }

    public function provideOptions()
    {
        return [
            [
                ['--foo' => 'bar'],
                [new InputOption('foo')],
                ['foo' => 'bar'],
                '->parse() parses long options',
            ],
            [
                ['--foo' => 'bar'],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'bar'],
                '->parse() parses long options with a default value',
            ],
            [
                [],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'default'],
                '->parse() uses the default value for long options with value optional which are not passed',
            ],
            [
                ['--foo' => null],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => null],
                '->parse() parses long options with a default value',
            ],
            [
                ['-f' => 'bar'],
                [new InputOption('foo', 'f')],
                ['foo' => 'bar'],
                '->parse() parses short options',
            ],
            [
                ['--' => null, '-f' => 'bar'],
                [new InputOption('foo', 'f', InputOption::VALUE_OPTIONAL, '', 'default')],
                ['foo' => 'default'],
                '->parse() does not parse opts after an end of options signal',
            ],
            [
                ['--' => null],
                [],
                [],
                '->parse() does not choke on end of options signal',
            ],
        ];
    }

    /**
     * @dataProvider provideInvalidInput
     */
    public function testParseInvalidInput(\$parameters, \$definition, \$expectedExceptionMessage)
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage(\$expectedExceptionMessage);

        new ArrayInput(\$parameters, \$definition);
    }

    public function provideInvalidInput()
    {
        return [
            [
                ['foo' => 'foo'],
                new InputDefinition([new InputArgument('name')]),
                'The \"foo\" argument does not exist.',
            ],
            [
                ['--foo' => null],
                new InputDefinition([new InputOption('foo', 'f', InputOption::VALUE_REQUIRED)]),
                'The \"--foo\" option requires a value.',
            ],
            [
                ['--foo' => 'foo'],
                new InputDefinition(),
                'The \"--foo\" option does not exist.',
            ],
            [
                ['-o' => 'foo'],
                new InputDefinition(),
                'The \"-o\" option does not exist.',
            ],
        ];
    }

    public function testToString()
    {
        \$input = new ArrayInput(['-f' => null, '-b' => 'bar', '--foo' => 'b a z', '--lala' => null, 'test' => 'Foo', 'test2' => \"A\\nB'C\"]);
        \$this->assertEquals('-f -b=bar --foo='.escapeshellarg('b a z').' --lala Foo '.escapeshellarg(\"A\\nB'C\"), (string) \$input);

        \$input = new ArrayInput(['-b' => ['bval_1', 'bval_2'], '--f' => ['fval_1', 'fval_2']]);
        \$this->assertSame('-b=bval_1 -b=bval_2 --f=fval_1 --f=fval_2', (string) \$input);

        \$input = new ArrayInput(['array_arg' => ['val_1', 'val_2']]);
        \$this->assertSame('val_1 val_2', (string) \$input);
    }
}
", "vendor/symfony/console/Tests/Input/ArrayInputTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Input/ArrayInputTest.php");
    }
}
