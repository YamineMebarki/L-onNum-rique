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

/* vendor/symfony/translation/Tests/IntervalTest.php */
class __TwigTemplate_e00f5213d2499cbdac78d9905831585674163a04249d968e15766b79c03e7a0d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/IntervalTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/IntervalTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Interval;

/**
 * @group legacy
 */
class IntervalTest extends TestCase
{
    /**
     * @dataProvider getTests
     */
    public function testTest(\$expected, \$number, \$interval)
    {
        \$this->assertEquals(\$expected, Interval::test(\$number, \$interval));
    }

    public function testTestException()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidArgumentException');
        Interval::test(1, 'foobar');
    }

    public function getTests()
    {
        return [
            [true, 3, '{1,2, 3 ,4}'],
            [false, 10, '{1,2, 3 ,4}'],
            [false, 3, '[1,2]'],
            [true, 1, '[1,2]'],
            [true, 2, '[1,2]'],
            [false, 1, ']1,2['],
            [false, 2, ']1,2['],
            [true, log(0), '[-Inf,2['],
            [true, -log(0), '[-2,+Inf]'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/IntervalTest.php";
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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Interval;

/**
 * @group legacy
 */
class IntervalTest extends TestCase
{
    /**
     * @dataProvider getTests
     */
    public function testTest(\$expected, \$number, \$interval)
    {
        \$this->assertEquals(\$expected, Interval::test(\$number, \$interval));
    }

    public function testTestException()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidArgumentException');
        Interval::test(1, 'foobar');
    }

    public function getTests()
    {
        return [
            [true, 3, '{1,2, 3 ,4}'],
            [false, 10, '{1,2, 3 ,4}'],
            [false, 3, '[1,2]'],
            [true, 1, '[1,2]'],
            [true, 2, '[1,2]'],
            [false, 1, ']1,2['],
            [false, 2, ']1,2['],
            [true, log(0), '[-Inf,2['],
            [true, -log(0), '[-2,+Inf]'],
        ];
    }
}
", "vendor/symfony/translation/Tests/IntervalTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/IntervalTest.php");
    }
}
