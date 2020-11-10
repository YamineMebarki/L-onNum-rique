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

/* vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php */
class __TwigTemplate_e4d7c059d50d3e0a3c5137c395a7c8037fe319ce0bc3fb20cf42f6c77aaf207d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php"));

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

namespace Symfony\\Component\\Stopwatch\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Stopwatch\\StopwatchPeriod;

class StopwatchPeriodTest extends TestCase
{
    /**
     * @dataProvider provideTimeValues
     */
    public function testGetStartTime(\$start, \$useMorePrecision, \$expected)
    {
        \$period = new StopwatchPeriod(\$start, \$start, \$useMorePrecision);
        \$this->assertSame(\$expected, \$period->getStartTime());
    }

    /**
     * @dataProvider provideTimeValues
     */
    public function testGetEndTime(\$end, \$useMorePrecision, \$expected)
    {
        \$period = new StopwatchPeriod(\$end, \$end, \$useMorePrecision);
        \$this->assertSame(\$expected, \$period->getEndTime());
    }

    /**
     * @dataProvider provideDurationValues
     */
    public function testGetDuration(\$start, \$end, \$useMorePrecision, \$duration)
    {
        \$period = new StopwatchPeriod(\$start, \$end, \$useMorePrecision);
        \$this->assertSame(\$duration, \$period->getDuration());
    }

    public function provideTimeValues()
    {
        yield [0, false, 0];
        yield [0, true, 0.0];
        yield [0.0, false, 0];
        yield [0.0, true, 0.0];
        yield [2.71, false, 2];
        yield [2.71, true, 2.71];
    }

    public function provideDurationValues()
    {
        yield [0, 0, false, 0];
        yield [0, 0, true, 0.0];
        yield [0.0, 0.0, false, 0];
        yield [0.0, 0.0, true, 0.0];
        yield [2, 3.14, false, 1];
        yield [2, 3.14, true, 1.14];
        yield [2.71, 3.14, false, 1];
        yield [2.71, 3.14, true, 0.43];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php";
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

namespace Symfony\\Component\\Stopwatch\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Stopwatch\\StopwatchPeriod;

class StopwatchPeriodTest extends TestCase
{
    /**
     * @dataProvider provideTimeValues
     */
    public function testGetStartTime(\$start, \$useMorePrecision, \$expected)
    {
        \$period = new StopwatchPeriod(\$start, \$start, \$useMorePrecision);
        \$this->assertSame(\$expected, \$period->getStartTime());
    }

    /**
     * @dataProvider provideTimeValues
     */
    public function testGetEndTime(\$end, \$useMorePrecision, \$expected)
    {
        \$period = new StopwatchPeriod(\$end, \$end, \$useMorePrecision);
        \$this->assertSame(\$expected, \$period->getEndTime());
    }

    /**
     * @dataProvider provideDurationValues
     */
    public function testGetDuration(\$start, \$end, \$useMorePrecision, \$duration)
    {
        \$period = new StopwatchPeriod(\$start, \$end, \$useMorePrecision);
        \$this->assertSame(\$duration, \$period->getDuration());
    }

    public function provideTimeValues()
    {
        yield [0, false, 0];
        yield [0, true, 0.0];
        yield [0.0, false, 0];
        yield [0.0, true, 0.0];
        yield [2.71, false, 2];
        yield [2.71, true, 2.71];
    }

    public function provideDurationValues()
    {
        yield [0, 0, false, 0];
        yield [0, 0, true, 0.0];
        yield [0.0, 0.0, false, 0];
        yield [0.0, 0.0, true, 0.0];
        yield [2, 3.14, false, 1];
        yield [2, 3.14, true, 1.14];
        yield [2.71, 3.14, false, 1];
        yield [2.71, 3.14, true, 0.43];
    }
}
", "vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/Tests/StopwatchPeriodTest.php");
    }
}
