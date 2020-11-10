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

/* vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php */
class __TwigTemplate_4f5a45ddf0e394256c88a761e01b640220a598ddbb5fdeb5bda3745a610a799e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Formatter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;

class OutputFormatterStyleTest extends TestCase
{
    public function testConstructor()
    {
        \$style = new OutputFormatterStyle('green', 'black', ['bold', 'underscore']);
        \$this->assertEquals(\"\\033[32;40;1;4mfoo\\033[39;49;22;24m\", \$style->apply('foo'));

        \$style = new OutputFormatterStyle('red', null, ['blink']);
        \$this->assertEquals(\"\\033[31;5mfoo\\033[39;25m\", \$style->apply('foo'));

        \$style = new OutputFormatterStyle(null, 'white');
        \$this->assertEquals(\"\\033[47mfoo\\033[49m\", \$style->apply('foo'));
    }

    public function testForeground()
    {
        \$style = new OutputFormatterStyle();

        \$style->setForeground('black');
        \$this->assertEquals(\"\\033[30mfoo\\033[39m\", \$style->apply('foo'));

        \$style->setForeground('blue');
        \$this->assertEquals(\"\\033[34mfoo\\033[39m\", \$style->apply('foo'));

        \$style->setForeground('default');
        \$this->assertEquals(\"\\033[39mfoo\\033[39m\", \$style->apply('foo'));

        \$this->expectException('InvalidArgumentException');
        \$style->setForeground('undefined-color');
    }

    public function testBackground()
    {
        \$style = new OutputFormatterStyle();

        \$style->setBackground('black');
        \$this->assertEquals(\"\\033[40mfoo\\033[49m\", \$style->apply('foo'));

        \$style->setBackground('yellow');
        \$this->assertEquals(\"\\033[43mfoo\\033[49m\", \$style->apply('foo'));

        \$style->setBackground('default');
        \$this->assertEquals(\"\\033[49mfoo\\033[49m\", \$style->apply('foo'));

        \$this->expectException('InvalidArgumentException');
        \$style->setBackground('undefined-color');
    }

    public function testOptions()
    {
        \$style = new OutputFormatterStyle();

        \$style->setOptions(['reverse', 'conceal']);
        \$this->assertEquals(\"\\033[7;8mfoo\\033[27;28m\", \$style->apply('foo'));

        \$style->setOption('bold');
        \$this->assertEquals(\"\\033[7;8;1mfoo\\033[27;28;22m\", \$style->apply('foo'));

        \$style->unsetOption('reverse');
        \$this->assertEquals(\"\\033[8;1mfoo\\033[28;22m\", \$style->apply('foo'));

        \$style->setOption('bold');
        \$this->assertEquals(\"\\033[8;1mfoo\\033[28;22m\", \$style->apply('foo'));

        \$style->setOptions(['bold']);
        \$this->assertEquals(\"\\033[1mfoo\\033[22m\", \$style->apply('foo'));

        try {
            \$style->setOption('foo');
            \$this->fail('->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
            \$this->assertStringContainsString('Invalid option specified: \"foo\"', \$e->getMessage(), '->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        }

        try {
            \$style->unsetOption('foo');
            \$this->fail('->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
            \$this->assertStringContainsString('Invalid option specified: \"foo\"', \$e->getMessage(), '->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        }
    }

    public function testHref()
    {
        \$prevTerminalEmulator = getenv('TERMINAL_EMULATOR');
        putenv('TERMINAL_EMULATOR');

        \$style = new OutputFormatterStyle();

        try {
            \$style->setHref('idea://open/?file=/path/SomeFile.php&line=12');
            \$this->assertSame(\"\\e]8;;idea://open/?file=/path/SomeFile.php&line=12\\e\\\\some URL\\e]8;;\\e\\\\\", \$style->apply('some URL'));
        } finally {
            putenv('TERMINAL_EMULATOR'.(\$prevTerminalEmulator ? \"=\$prevTerminalEmulator\" : ''));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Formatter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;

class OutputFormatterStyleTest extends TestCase
{
    public function testConstructor()
    {
        \$style = new OutputFormatterStyle('green', 'black', ['bold', 'underscore']);
        \$this->assertEquals(\"\\033[32;40;1;4mfoo\\033[39;49;22;24m\", \$style->apply('foo'));

        \$style = new OutputFormatterStyle('red', null, ['blink']);
        \$this->assertEquals(\"\\033[31;5mfoo\\033[39;25m\", \$style->apply('foo'));

        \$style = new OutputFormatterStyle(null, 'white');
        \$this->assertEquals(\"\\033[47mfoo\\033[49m\", \$style->apply('foo'));
    }

    public function testForeground()
    {
        \$style = new OutputFormatterStyle();

        \$style->setForeground('black');
        \$this->assertEquals(\"\\033[30mfoo\\033[39m\", \$style->apply('foo'));

        \$style->setForeground('blue');
        \$this->assertEquals(\"\\033[34mfoo\\033[39m\", \$style->apply('foo'));

        \$style->setForeground('default');
        \$this->assertEquals(\"\\033[39mfoo\\033[39m\", \$style->apply('foo'));

        \$this->expectException('InvalidArgumentException');
        \$style->setForeground('undefined-color');
    }

    public function testBackground()
    {
        \$style = new OutputFormatterStyle();

        \$style->setBackground('black');
        \$this->assertEquals(\"\\033[40mfoo\\033[49m\", \$style->apply('foo'));

        \$style->setBackground('yellow');
        \$this->assertEquals(\"\\033[43mfoo\\033[49m\", \$style->apply('foo'));

        \$style->setBackground('default');
        \$this->assertEquals(\"\\033[49mfoo\\033[49m\", \$style->apply('foo'));

        \$this->expectException('InvalidArgumentException');
        \$style->setBackground('undefined-color');
    }

    public function testOptions()
    {
        \$style = new OutputFormatterStyle();

        \$style->setOptions(['reverse', 'conceal']);
        \$this->assertEquals(\"\\033[7;8mfoo\\033[27;28m\", \$style->apply('foo'));

        \$style->setOption('bold');
        \$this->assertEquals(\"\\033[7;8;1mfoo\\033[27;28;22m\", \$style->apply('foo'));

        \$style->unsetOption('reverse');
        \$this->assertEquals(\"\\033[8;1mfoo\\033[28;22m\", \$style->apply('foo'));

        \$style->setOption('bold');
        \$this->assertEquals(\"\\033[8;1mfoo\\033[28;22m\", \$style->apply('foo'));

        \$style->setOptions(['bold']);
        \$this->assertEquals(\"\\033[1mfoo\\033[22m\", \$style->apply('foo'));

        try {
            \$style->setOption('foo');
            \$this->fail('->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
            \$this->assertStringContainsString('Invalid option specified: \"foo\"', \$e->getMessage(), '->setOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        }

        try {
            \$style->unsetOption('foo');
            \$this->fail('->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
            \$this->assertStringContainsString('Invalid option specified: \"foo\"', \$e->getMessage(), '->unsetOption() throws an \\InvalidArgumentException when the option does not exist in the available options');
        }
    }

    public function testHref()
    {
        \$prevTerminalEmulator = getenv('TERMINAL_EMULATOR');
        putenv('TERMINAL_EMULATOR');

        \$style = new OutputFormatterStyle();

        try {
            \$style->setHref('idea://open/?file=/path/SomeFile.php&line=12');
            \$this->assertSame(\"\\e]8;;idea://open/?file=/path/SomeFile.php&line=12\\e\\\\some URL\\e]8;;\\e\\\\\", \$style->apply('some URL'));
        } finally {
            putenv('TERMINAL_EMULATOR'.(\$prevTerminalEmulator ? \"=\$prevTerminalEmulator\" : ''));
        }
    }
}
", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Formatter/OutputFormatterStyleTest.php");
    }
}
