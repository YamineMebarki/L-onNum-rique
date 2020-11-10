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

/* vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php */
class __TwigTemplate_c7eea3645f9fcf96b251193d30007e3fe06378b1a66189f822b36aa60e9954a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Comparator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Comparator\\DateComparator;

class DateComparatorTest extends TestCase
{
    public function testConstructor()
    {
        try {
            new DateComparator('foobar');
            \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        }

        try {
            new DateComparator('');
            \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        }
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$test, \$match, \$noMatch)
    {
        \$c = new DateComparator(\$test);

        foreach (\$match as \$m) {
            \$this->assertTrue(\$c->test(\$m), '->test() tests a string against the expression');
        }

        foreach (\$noMatch as \$m) {
            \$this->assertFalse(\$c->test(\$m), '->test() tests a string against the expression');
        }
    }

    public function getTestData()
    {
        return [
            ['< 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['until 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['before 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['> 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['after 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['since 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['!= 2005-10-10', [strtotime('2005-10-11')], [strtotime('2005-10-10')]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Comparator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Comparator\\DateComparator;

class DateComparatorTest extends TestCase
{
    public function testConstructor()
    {
        try {
            new DateComparator('foobar');
            \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        }

        try {
            new DateComparator('');
            \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
        }
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$test, \$match, \$noMatch)
    {
        \$c = new DateComparator(\$test);

        foreach (\$match as \$m) {
            \$this->assertTrue(\$c->test(\$m), '->test() tests a string against the expression');
        }

        foreach (\$noMatch as \$m) {
            \$this->assertFalse(\$c->test(\$m), '->test() tests a string against the expression');
        }
    }

    public function getTestData()
    {
        return [
            ['< 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['until 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['before 2005-10-10', [strtotime('2005-10-09')], [strtotime('2005-10-15')]],
            ['> 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['after 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['since 2005-10-10', [strtotime('2005-10-15')], [strtotime('2005-10-09')]],
            ['!= 2005-10-10', [strtotime('2005-10-11')], [strtotime('2005-10-10')]],
        ];
    }
}
", "vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Comparator/DateComparatorTest.php");
    }
}
