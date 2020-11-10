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

/* vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php */
class __TwigTemplate_a8a571b770d70ea0d0d2a9bfe6fd34a2bbf1c3a6905bcc18592f2d9135e97a88 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php"));

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
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack;

class OutputFormatterStyleStackTest extends TestCase
{
    public function testPush()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));

        \$this->assertEquals(\$s2, \$stack->getCurrent());

        \$stack->push(\$s3 = new OutputFormatterStyle('green', 'red'));

        \$this->assertEquals(\$s3, \$stack->getCurrent());
    }

    public function testPop()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));

        \$this->assertEquals(\$s2, \$stack->pop());
        \$this->assertEquals(\$s1, \$stack->pop());
    }

    public function testPopEmpty()
    {
        \$stack = new OutputFormatterStyleStack();
        \$style = new OutputFormatterStyle();

        \$this->assertEquals(\$style, \$stack->pop());
    }

    public function testPopNotLast()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));
        \$stack->push(\$s3 = new OutputFormatterStyle('green', 'red'));

        \$this->assertEquals(\$s2, \$stack->pop(\$s2));
        \$this->assertEquals(\$s1, \$stack->pop());
    }

    public function testInvalidPop()
    {
        \$this->expectException('InvalidArgumentException');
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(new OutputFormatterStyle('white', 'black'));
        \$stack->pop(new OutputFormatterStyle('yellow', 'blue'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php";
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
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack;

class OutputFormatterStyleStackTest extends TestCase
{
    public function testPush()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));

        \$this->assertEquals(\$s2, \$stack->getCurrent());

        \$stack->push(\$s3 = new OutputFormatterStyle('green', 'red'));

        \$this->assertEquals(\$s3, \$stack->getCurrent());
    }

    public function testPop()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));

        \$this->assertEquals(\$s2, \$stack->pop());
        \$this->assertEquals(\$s1, \$stack->pop());
    }

    public function testPopEmpty()
    {
        \$stack = new OutputFormatterStyleStack();
        \$style = new OutputFormatterStyle();

        \$this->assertEquals(\$style, \$stack->pop());
    }

    public function testPopNotLast()
    {
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(\$s1 = new OutputFormatterStyle('white', 'black'));
        \$stack->push(\$s2 = new OutputFormatterStyle('yellow', 'blue'));
        \$stack->push(\$s3 = new OutputFormatterStyle('green', 'red'));

        \$this->assertEquals(\$s2, \$stack->pop(\$s2));
        \$this->assertEquals(\$s1, \$stack->pop());
    }

    public function testInvalidPop()
    {
        \$this->expectException('InvalidArgumentException');
        \$stack = new OutputFormatterStyleStack();
        \$stack->push(new OutputFormatterStyle('white', 'black'));
        \$stack->pop(new OutputFormatterStyle('yellow', 'blue'));
    }
}
", "vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Formatter/OutputFormatterStyleStackTest.php");
    }
}
