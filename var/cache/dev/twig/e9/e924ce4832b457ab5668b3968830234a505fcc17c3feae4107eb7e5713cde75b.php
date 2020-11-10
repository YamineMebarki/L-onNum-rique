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

/* vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php */
class __TwigTemplate_fe4568a743ab81559afe0756cde94b0b0f5ff5f031c5a8900fe0c76c89f644d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php"));

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

use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\UnaryNode;

class UnaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [-1, new UnaryNode('-', new ConstantNode(1))],
            [3, new UnaryNode('+', new ConstantNode(3))],
            [false, new UnaryNode('!', new ConstantNode(true))],
            [false, new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getCompileData()
    {
        return [
            ['(-1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+3)', new UnaryNode('+', new ConstantNode(3))],
            ['(!true)', new UnaryNode('!', new ConstantNode(true))],
            ['(!true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getDumpData()
    {
        return [
            ['(- 1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+ 3)', new UnaryNode('+', new ConstantNode(3))],
            ['(! true)', new UnaryNode('!', new ConstantNode(true))],
            ['(not true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php";
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

use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\UnaryNode;

class UnaryNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [-1, new UnaryNode('-', new ConstantNode(1))],
            [3, new UnaryNode('+', new ConstantNode(3))],
            [false, new UnaryNode('!', new ConstantNode(true))],
            [false, new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getCompileData()
    {
        return [
            ['(-1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+3)', new UnaryNode('+', new ConstantNode(3))],
            ['(!true)', new UnaryNode('!', new ConstantNode(true))],
            ['(!true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }

    public function getDumpData()
    {
        return [
            ['(- 1)', new UnaryNode('-', new ConstantNode(1))],
            ['(+ 3)', new UnaryNode('+', new ConstantNode(3))],
            ['(! true)', new UnaryNode('!', new ConstantNode(true))],
            ['(not true)', new UnaryNode('not', new ConstantNode(true))],
        ];
    }
}
", "vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Node/UnaryNodeTest.php");
    }
}
