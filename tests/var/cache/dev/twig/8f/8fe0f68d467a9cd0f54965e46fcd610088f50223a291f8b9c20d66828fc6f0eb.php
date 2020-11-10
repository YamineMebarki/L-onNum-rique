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

/* vendor/symfony/console/Tests/TerminalTest.php */
class __TwigTemplate_8b6542edf1181def02510271c9c7e9d420f7ca37e2bb31122da0e2517679bbab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/TerminalTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/TerminalTest.php"));

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

namespace Symfony\\Component\\Console\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Terminal;

class TerminalTest extends TestCase
{
    private \$colSize;
    private \$lineSize;
    private \$ansiCon;

    protected function setUp(): void
    {
        \$this->colSize = getenv('COLUMNS');
        \$this->lineSize = getenv('LINES');
        \$this->ansiCon = getenv('ANSICON');
        \$this->resetStatics();
    }

    protected function tearDown(): void
    {
        putenv(\$this->colSize ? 'COLUMNS='.\$this->colSize : 'COLUMNS');
        putenv(\$this->lineSize ? 'LINES' : 'LINES='.\$this->lineSize);
        putenv(\$this->ansiCon ? 'ANSICON='.\$this->ansiCon : 'ANSICON');
        \$this->resetStatics();
    }

    private function resetStatics()
    {
        foreach (['height', 'width', 'stty'] as \$name) {
            \$property = new \\ReflectionProperty(Terminal::class, \$name);
            \$property->setAccessible(true);
            \$property->setValue(null);
        }
    }

    public function test()
    {
        putenv('COLUMNS=100');
        putenv('LINES=50');
        \$terminal = new Terminal();
        \$this->assertSame(100, \$terminal->getWidth());
        \$this->assertSame(50, \$terminal->getHeight());

        putenv('COLUMNS=120');
        putenv('LINES=60');
        \$terminal = new Terminal();
        \$this->assertSame(120, \$terminal->getWidth());
        \$this->assertSame(60, \$terminal->getHeight());
    }

    public function test_zero_values()
    {
        putenv('COLUMNS=0');
        putenv('LINES=0');

        \$terminal = new Terminal();

        \$this->assertSame(0, \$terminal->getWidth());
        \$this->assertSame(0, \$terminal->getHeight());
    }

    public function testSttyOnWindows()
    {
        if ('\\\\' !== \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Must be on windows');
        }

        \$sttyString = exec('(stty -a | grep columns) 2>&1', \$output, \$exitcode);
        if (0 !== \$exitcode) {
            \$this->markTestSkipped('Must have stty support');
        }

        \$matches = [];
        if (0 === preg_match('/columns.(\\d+)/i', \$sttyString, \$matches)) {
            \$this->fail('Could not determine existing stty columns');
        }

        putenv('COLUMNS');
        putenv('LINES');
        putenv('ANSICON');

        \$terminal = new Terminal();
        \$this->assertSame((int) \$matches[1], \$terminal->getWidth());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/TerminalTest.php";
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

namespace Symfony\\Component\\Console\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Terminal;

class TerminalTest extends TestCase
{
    private \$colSize;
    private \$lineSize;
    private \$ansiCon;

    protected function setUp(): void
    {
        \$this->colSize = getenv('COLUMNS');
        \$this->lineSize = getenv('LINES');
        \$this->ansiCon = getenv('ANSICON');
        \$this->resetStatics();
    }

    protected function tearDown(): void
    {
        putenv(\$this->colSize ? 'COLUMNS='.\$this->colSize : 'COLUMNS');
        putenv(\$this->lineSize ? 'LINES' : 'LINES='.\$this->lineSize);
        putenv(\$this->ansiCon ? 'ANSICON='.\$this->ansiCon : 'ANSICON');
        \$this->resetStatics();
    }

    private function resetStatics()
    {
        foreach (['height', 'width', 'stty'] as \$name) {
            \$property = new \\ReflectionProperty(Terminal::class, \$name);
            \$property->setAccessible(true);
            \$property->setValue(null);
        }
    }

    public function test()
    {
        putenv('COLUMNS=100');
        putenv('LINES=50');
        \$terminal = new Terminal();
        \$this->assertSame(100, \$terminal->getWidth());
        \$this->assertSame(50, \$terminal->getHeight());

        putenv('COLUMNS=120');
        putenv('LINES=60');
        \$terminal = new Terminal();
        \$this->assertSame(120, \$terminal->getWidth());
        \$this->assertSame(60, \$terminal->getHeight());
    }

    public function test_zero_values()
    {
        putenv('COLUMNS=0');
        putenv('LINES=0');

        \$terminal = new Terminal();

        \$this->assertSame(0, \$terminal->getWidth());
        \$this->assertSame(0, \$terminal->getHeight());
    }

    public function testSttyOnWindows()
    {
        if ('\\\\' !== \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Must be on windows');
        }

        \$sttyString = exec('(stty -a | grep columns) 2>&1', \$output, \$exitcode);
        if (0 !== \$exitcode) {
            \$this->markTestSkipped('Must have stty support');
        }

        \$matches = [];
        if (0 === preg_match('/columns.(\\d+)/i', \$sttyString, \$matches)) {
            \$this->fail('Could not determine existing stty columns');
        }

        putenv('COLUMNS');
        putenv('LINES');
        putenv('ANSICON');

        \$terminal = new Terminal();
        \$this->assertSame((int) \$matches[1], \$terminal->getWidth());
    }
}
", "vendor/symfony/console/Tests/TerminalTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/TerminalTest.php");
    }
}
