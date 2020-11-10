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

/* vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php */
class __TwigTemplate_a8d686654e9511c1fe553ec4f2f699db5d7c0ef52a4d5a88122f3749eeb6fd60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests\\Node;

use Symfony\\Component\\CssSelector\\Node\\ElementNode;
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\Parser\\Token;

class FunctionNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new FunctionNode(new ElementNode(), 'function'), 'Function[Element[*]:function()]'],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_IDENTIFIER, 'value', 0),
            ]), \"Function[Element[*]:function(['value'])]\"],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_STRING, 'value1', 0),
                new Token(Token::TYPE_NUMBER, 'value2', 0),
            ]), \"Function[Element[*]:function(['value1', 'value2'])]\"],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new FunctionNode(new ElementNode(), 'function'), 10],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_IDENTIFIER, 'value', 0),
            ]), 10],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_STRING, 'value1', 0),
                new Token(Token::TYPE_NUMBER, 'value2', 0),
            ]), 10],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests\\Node;

use Symfony\\Component\\CssSelector\\Node\\ElementNode;
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\Parser\\Token;

class FunctionNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new FunctionNode(new ElementNode(), 'function'), 'Function[Element[*]:function()]'],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_IDENTIFIER, 'value', 0),
            ]), \"Function[Element[*]:function(['value'])]\"],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_STRING, 'value1', 0),
                new Token(Token::TYPE_NUMBER, 'value2', 0),
            ]), \"Function[Element[*]:function(['value1', 'value2'])]\"],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new FunctionNode(new ElementNode(), 'function'), 10],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_IDENTIFIER, 'value', 0),
            ]), 10],
            [new FunctionNode(new ElementNode(), 'function', [
                new Token(Token::TYPE_STRING, 'value1', 0),
                new Token(Token::TYPE_NUMBER, 'value2', 0),
            ]), 10],
        ];
    }
}
", "vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Node/FunctionNodeTest.php");
    }
}
