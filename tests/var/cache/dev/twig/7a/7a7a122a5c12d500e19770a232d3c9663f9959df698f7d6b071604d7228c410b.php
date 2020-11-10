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

/* vendor/symfony/finder/Tests/Comparator/ComparatorTest.php */
class __TwigTemplate_fa6a3b3e8cfe5465f70377c8aed676a42809a24f331966a3a6d7a0c7e505a42d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/ComparatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/ComparatorTest.php"));

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
use Symfony\\Component\\Finder\\Comparator\\Comparator;

class ComparatorTest extends TestCase
{
    public function testGetSetOperator()
    {
        \$comparator = new Comparator();
        try {
            \$comparator->setOperator('foo');
            \$this->fail('->setOperator() throws an \\InvalidArgumentException if the operator is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '->setOperator() throws an \\InvalidArgumentException if the operator is not valid.');
        }

        \$comparator = new Comparator();
        \$comparator->setOperator('>');
        \$this->assertEquals('>', \$comparator->getOperator(), '->getOperator() returns the current operator');
    }

    public function testGetSetTarget()
    {
        \$comparator = new Comparator();
        \$comparator->setTarget(8);
        \$this->assertEquals(8, \$comparator->getTarget(), '->getTarget() returns the target');
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$operator, \$target, \$match, \$noMatch)
    {
        \$c = new Comparator();
        \$c->setOperator(\$operator);
        \$c->setTarget(\$target);

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
            ['<', '1000', ['500', '999'], ['1000', '1500']],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Comparator/ComparatorTest.php";
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
use Symfony\\Component\\Finder\\Comparator\\Comparator;

class ComparatorTest extends TestCase
{
    public function testGetSetOperator()
    {
        \$comparator = new Comparator();
        try {
            \$comparator->setOperator('foo');
            \$this->fail('->setOperator() throws an \\InvalidArgumentException if the operator is not valid.');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '->setOperator() throws an \\InvalidArgumentException if the operator is not valid.');
        }

        \$comparator = new Comparator();
        \$comparator->setOperator('>');
        \$this->assertEquals('>', \$comparator->getOperator(), '->getOperator() returns the current operator');
    }

    public function testGetSetTarget()
    {
        \$comparator = new Comparator();
        \$comparator->setTarget(8);
        \$this->assertEquals(8, \$comparator->getTarget(), '->getTarget() returns the target');
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$operator, \$target, \$match, \$noMatch)
    {
        \$c = new Comparator();
        \$c->setOperator(\$operator);
        \$c->setTarget(\$target);

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
            ['<', '1000', ['500', '999'], ['1000', '1500']],
        ];
    }
}
", "vendor/symfony/finder/Tests/Comparator/ComparatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Comparator/ComparatorTest.php");
    }
}
