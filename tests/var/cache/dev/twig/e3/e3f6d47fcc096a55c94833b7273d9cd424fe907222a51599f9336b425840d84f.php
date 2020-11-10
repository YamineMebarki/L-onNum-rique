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

/* vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php */
class __TwigTemplate_eddb99c5afee3dfba2429e2b00bdaab8983419e033133d688c55311f70d6d126 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Node;

use Symfony\\Component\\ExpressionLanguage\\Node\\ArrayNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\BinaryNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;

class BinaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            [true, new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            [true, new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            [false, new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            [false, new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            [0, new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            [6, new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            [6, new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            [true, new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            [false, new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            [false, new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            [true, new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            [false, new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            [false, new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            [true, new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            [-1, new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            [3, new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            [4, new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            [1, new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            [1, new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            [25, new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['ab', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            [true, new BinaryNode('in', new ConstantNode('a'), \$array)],
            [false, new BinaryNode('in', new ConstantNode('c'), \$array)],
            [true, new BinaryNode('not in', new ConstantNode('c'), \$array)],
            [false, new BinaryNode('not in', new ConstantNode('a'), \$array)],

            [[1, 2, 3], new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            [1, new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+\$/'))],
        ];
    }

    public function getCompileData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            ['(true || false)', new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            ['(true || false)', new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            ['(2 & 4)', new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            ['(2 | 4)', new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            ['(2 ^ 4)', new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            ['(1 < 2)', new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 2)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 1)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            ['(1 > 2)', new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 2)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 1)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            ['(true === true)', new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            ['(true !== true)', new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            ['(2 == 1)', new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            ['(2 != 1)', new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            ['(1 - 2)', new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            ['(1 + 2)', new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            ['(2 * 2)', new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            ['(2 / 2)', new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            ['(5 % 2)', new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            ['pow(5, 2)', new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['(\"a\" . \"b\")', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            ['in_array(\"a\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('in', new ConstantNode('a'), \$array)],
            ['in_array(\"c\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('in', new ConstantNode('c'), \$array)],
            ['!in_array(\"c\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('not in', new ConstantNode('c'), \$array)],
            ['!in_array(\"a\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('not in', new ConstantNode('a'), \$array)],

            ['range(1, 3)', new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            ['preg_match(\"/^[a-z]+/i\\\$/\", \"abc\")', new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+/i\$/'))],
        ];
    }

    public function getDumpData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            ['(true or false)', new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            ['(true || false)', new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            ['(true and false)', new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            ['(2 & 4)', new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            ['(2 | 4)', new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            ['(2 ^ 4)', new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            ['(1 < 2)', new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 2)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 1)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            ['(1 > 2)', new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 2)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 1)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            ['(true === true)', new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            ['(true !== true)', new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            ['(2 == 1)', new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            ['(2 != 1)', new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            ['(1 - 2)', new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            ['(1 + 2)', new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            ['(2 * 2)', new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            ['(2 / 2)', new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            ['(5 % 2)', new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            ['(5 ** 2)', new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['(\"a\" ~ \"b\")', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            ['(\"a\" in [\"a\", \"b\"])', new BinaryNode('in', new ConstantNode('a'), \$array)],
            ['(\"c\" in [\"a\", \"b\"])', new BinaryNode('in', new ConstantNode('c'), \$array)],
            ['(\"c\" not in [\"a\", \"b\"])', new BinaryNode('not in', new ConstantNode('c'), \$array)],
            ['(\"a\" not in [\"a\", \"b\"])', new BinaryNode('not in', new ConstantNode('a'), \$array)],

            ['(1 .. 3)', new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            ['(\"abc\" matches \"/^[a-z]+/i\$/\")', new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+/i\$/'))],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Node;

use Symfony\\Component\\ExpressionLanguage\\Node\\ArrayNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\BinaryNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;

class BinaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            [true, new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            [true, new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            [false, new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            [false, new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            [0, new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            [6, new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            [6, new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            [true, new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            [false, new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            [false, new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            [true, new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            [true, new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            [false, new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            [false, new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            [true, new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            [-1, new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            [3, new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            [4, new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            [1, new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            [1, new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            [25, new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['ab', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            [true, new BinaryNode('in', new ConstantNode('a'), \$array)],
            [false, new BinaryNode('in', new ConstantNode('c'), \$array)],
            [true, new BinaryNode('not in', new ConstantNode('c'), \$array)],
            [false, new BinaryNode('not in', new ConstantNode('a'), \$array)],

            [[1, 2, 3], new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            [1, new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+\$/'))],
        ];
    }

    public function getCompileData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            ['(true || false)', new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            ['(true || false)', new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            ['(2 & 4)', new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            ['(2 | 4)', new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            ['(2 ^ 4)', new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            ['(1 < 2)', new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 2)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 1)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            ['(1 > 2)', new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 2)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 1)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            ['(true === true)', new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            ['(true !== true)', new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            ['(2 == 1)', new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            ['(2 != 1)', new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            ['(1 - 2)', new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            ['(1 + 2)', new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            ['(2 * 2)', new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            ['(2 / 2)', new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            ['(5 % 2)', new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            ['pow(5, 2)', new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['(\"a\" . \"b\")', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            ['in_array(\"a\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('in', new ConstantNode('a'), \$array)],
            ['in_array(\"c\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('in', new ConstantNode('c'), \$array)],
            ['!in_array(\"c\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('not in', new ConstantNode('c'), \$array)],
            ['!in_array(\"a\", [0 => \"a\", 1 => \"b\"])', new BinaryNode('not in', new ConstantNode('a'), \$array)],

            ['range(1, 3)', new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            ['preg_match(\"/^[a-z]+/i\\\$/\", \"abc\")', new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+/i\$/'))],
        ];
    }

    public function getDumpData()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'));
        \$array->addElement(new ConstantNode('b'));

        return [
            ['(true or false)', new BinaryNode('or', new ConstantNode(true), new ConstantNode(false))],
            ['(true || false)', new BinaryNode('||', new ConstantNode(true), new ConstantNode(false))],
            ['(true and false)', new BinaryNode('and', new ConstantNode(true), new ConstantNode(false))],
            ['(true && false)', new BinaryNode('&&', new ConstantNode(true), new ConstantNode(false))],

            ['(2 & 4)', new BinaryNode('&', new ConstantNode(2), new ConstantNode(4))],
            ['(2 | 4)', new BinaryNode('|', new ConstantNode(2), new ConstantNode(4))],
            ['(2 ^ 4)', new BinaryNode('^', new ConstantNode(2), new ConstantNode(4))],

            ['(1 < 2)', new BinaryNode('<', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 2)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 <= 1)', new BinaryNode('<=', new ConstantNode(1), new ConstantNode(1))],

            ['(1 > 2)', new BinaryNode('>', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 2)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(2))],
            ['(1 >= 1)', new BinaryNode('>=', new ConstantNode(1), new ConstantNode(1))],

            ['(true === true)', new BinaryNode('===', new ConstantNode(true), new ConstantNode(true))],
            ['(true !== true)', new BinaryNode('!==', new ConstantNode(true), new ConstantNode(true))],

            ['(2 == 1)', new BinaryNode('==', new ConstantNode(2), new ConstantNode(1))],
            ['(2 != 1)', new BinaryNode('!=', new ConstantNode(2), new ConstantNode(1))],

            ['(1 - 2)', new BinaryNode('-', new ConstantNode(1), new ConstantNode(2))],
            ['(1 + 2)', new BinaryNode('+', new ConstantNode(1), new ConstantNode(2))],
            ['(2 * 2)', new BinaryNode('*', new ConstantNode(2), new ConstantNode(2))],
            ['(2 / 2)', new BinaryNode('/', new ConstantNode(2), new ConstantNode(2))],
            ['(5 % 2)', new BinaryNode('%', new ConstantNode(5), new ConstantNode(2))],
            ['(5 ** 2)', new BinaryNode('**', new ConstantNode(5), new ConstantNode(2))],
            ['(\"a\" ~ \"b\")', new BinaryNode('~', new ConstantNode('a'), new ConstantNode('b'))],

            ['(\"a\" in [\"a\", \"b\"])', new BinaryNode('in', new ConstantNode('a'), \$array)],
            ['(\"c\" in [\"a\", \"b\"])', new BinaryNode('in', new ConstantNode('c'), \$array)],
            ['(\"c\" not in [\"a\", \"b\"])', new BinaryNode('not in', new ConstantNode('c'), \$array)],
            ['(\"a\" not in [\"a\", \"b\"])', new BinaryNode('not in', new ConstantNode('a'), \$array)],

            ['(1 .. 3)', new BinaryNode('..', new ConstantNode(1), new ConstantNode(3))],

            ['(\"abc\" matches \"/^[a-z]+/i\$/\")', new BinaryNode('matches', new ConstantNode('abc'), new ConstantNode('/^[a-z]+/i\$/'))],
        ];
    }
}
", "vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Node/BinaryNodeTest.php");
    }
}
