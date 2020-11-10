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

/* vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php */
class __TwigTemplate_c1984243d33e0293757715dd5fca7e089193296a638003f6425bfccdd5422263 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\ClockMock;

/**
 * @author Dominic Tubach <dominic.tubach@to.com>
 *
 * @covers \\Symfony\\Bridge\\PhpUnit\\ClockMock
 */
class ClockMockTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        ClockMock::register(__CLASS__);
    }

    protected function setUp(): void
    {
        ClockMock::withClockMock(1234567890.125);
    }

    public function testTime()
    {
        \$this->assertSame(1234567890, time());
    }

    public function testSleep()
    {
        sleep(2);
        \$this->assertSame(1234567892, time());
    }

    public function testMicrotime()
    {
        \$this->assertSame('0.12500000 1234567890', microtime());
    }

    public function testMicrotimeAsFloat()
    {
        \$this->assertSame(1234567890.125, microtime(true));
    }

    public function testUsleep()
    {
        usleep(2);
        \$this->assertSame(1234567890.125002, microtime(true));
    }

    public function testDate()
    {
        \$this->assertSame('1234567890', date('U'));
    }

    public function testGmDate()
    {
        ClockMock::withClockMock(1555075769);

        \$this->assertSame('1555075769', gmdate('U'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\ClockMock;

/**
 * @author Dominic Tubach <dominic.tubach@to.com>
 *
 * @covers \\Symfony\\Bridge\\PhpUnit\\ClockMock
 */
class ClockMockTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        ClockMock::register(__CLASS__);
    }

    protected function setUp(): void
    {
        ClockMock::withClockMock(1234567890.125);
    }

    public function testTime()
    {
        \$this->assertSame(1234567890, time());
    }

    public function testSleep()
    {
        sleep(2);
        \$this->assertSame(1234567892, time());
    }

    public function testMicrotime()
    {
        \$this->assertSame('0.12500000 1234567890', microtime());
    }

    public function testMicrotimeAsFloat()
    {
        \$this->assertSame(1234567890.125, microtime(true));
    }

    public function testUsleep()
    {
        usleep(2);
        \$this->assertSame(1234567890.125002, microtime(true));
    }

    public function testDate()
    {
        \$this->assertSame('1234567890', date('U'));
    }

    public function testGmDate()
    {
        ClockMock::withClockMock(1555075769);

        \$this->assertSame('1555075769', gmdate('U'));
    }
}
", "vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/ClockMockTest.php");
    }
}
