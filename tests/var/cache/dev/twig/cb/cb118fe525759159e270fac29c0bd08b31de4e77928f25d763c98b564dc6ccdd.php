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

/* vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php */
class __TwigTemplate_0c3ab912bc6364e3e71d3ae193ae0cd821f2026a8be37472a129f06fffae5f98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php"));

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

class ConstantNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [false, new ConstantNode(false)],
            [true, new ConstantNode(true)],
            [null, new ConstantNode(null)],
            [3, new ConstantNode(3)],
            [3.3, new ConstantNode(3.3)],
            ['foo', new ConstantNode('foo')],
            [[1, 'b' => 'a'], new ConstantNode([1, 'b' => 'a'])],
        ];
    }

    public function getCompileData()
    {
        return [
            ['false', new ConstantNode(false)],
            ['true', new ConstantNode(true)],
            ['null', new ConstantNode(null)],
            ['3', new ConstantNode(3)],
            ['3.3', new ConstantNode(3.3)],
            ['\"foo\"', new ConstantNode('foo')],
            ['[0 => 1, \"b\" => \"a\"]', new ConstantNode([1, 'b' => 'a'])],
        ];
    }

    public function getDumpData()
    {
        return [
            ['false', new ConstantNode(false)],
            ['true', new ConstantNode(true)],
            ['null', new ConstantNode(null)],
            ['3', new ConstantNode(3)],
            ['3.3', new ConstantNode(3.3)],
            ['\"foo\"', new ConstantNode('foo')],
            ['foo', new ConstantNode('foo', true)],
            ['{0: 1, \"b\": \"a\", 1: true}', new ConstantNode([1, 'b' => 'a', true])],
            ['{\"a\\\\\"b\": \"c\", \"a\\\\\\\\b\": \"d\"}', new ConstantNode(['a\"b' => 'c', 'a\\\\b' => 'd'])],
            ['[\"c\", \"d\"]', new ConstantNode(['c', 'd'])],
            ['{\"a\": [\"b\"]}', new ConstantNode(['a' => ['b']])],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php";
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

class ConstantNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            [false, new ConstantNode(false)],
            [true, new ConstantNode(true)],
            [null, new ConstantNode(null)],
            [3, new ConstantNode(3)],
            [3.3, new ConstantNode(3.3)],
            ['foo', new ConstantNode('foo')],
            [[1, 'b' => 'a'], new ConstantNode([1, 'b' => 'a'])],
        ];
    }

    public function getCompileData()
    {
        return [
            ['false', new ConstantNode(false)],
            ['true', new ConstantNode(true)],
            ['null', new ConstantNode(null)],
            ['3', new ConstantNode(3)],
            ['3.3', new ConstantNode(3.3)],
            ['\"foo\"', new ConstantNode('foo')],
            ['[0 => 1, \"b\" => \"a\"]', new ConstantNode([1, 'b' => 'a'])],
        ];
    }

    public function getDumpData()
    {
        return [
            ['false', new ConstantNode(false)],
            ['true', new ConstantNode(true)],
            ['null', new ConstantNode(null)],
            ['3', new ConstantNode(3)],
            ['3.3', new ConstantNode(3.3)],
            ['\"foo\"', new ConstantNode('foo')],
            ['foo', new ConstantNode('foo', true)],
            ['{0: 1, \"b\": \"a\", 1: true}', new ConstantNode([1, 'b' => 'a', true])],
            ['{\"a\\\\\"b\": \"c\", \"a\\\\\\\\b\": \"d\"}', new ConstantNode(['a\"b' => 'c', 'a\\\\b' => 'd'])],
            ['[\"c\", \"d\"]', new ConstantNode(['c', 'd'])],
            ['{\"a\": [\"b\"]}', new ConstantNode(['a' => ['b']])],
        ];
    }
}
", "vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Node/ConstantNodeTest.php");
    }
}
