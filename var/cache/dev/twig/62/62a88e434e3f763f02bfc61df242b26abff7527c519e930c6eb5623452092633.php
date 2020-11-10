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

/* vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php */
class __TwigTemplate_17c172b58c8abf6a7500b6c23c4a4574dfc0b95bc0e8c2c2db9e4fd7e64a2f08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php"));

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
use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\GetAttrNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\NameNode;

class GetAttrNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            ['b', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b']]],
            ['a', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b']]],

            ['bar', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['baz', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['a', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b'], 'index' => 'b']],
        ];
    }

    public function getCompileData()
    {
        return [
            ['\$foo[0]', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
            ['\$foo[\"b\"]', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],

            ['\$foo->foo', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['\$foo->foo([\"b\" => \"a\", 0 => \"b\"])', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['\$foo[\$index]', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
        ];
    }

    public function getDumpData()
    {
        return [
            ['foo[0]', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
            ['foo[\"b\"]', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],

            ['foo.foo', new GetAttrNode(new NameNode('foo'), new NameNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['foo.foo({\"b\": \"a\", 0: \"b\"})', new GetAttrNode(new NameNode('foo'), new NameNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['foo[index]', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
        ];
    }

    protected function getArrayNode()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'), new ConstantNode('b'));
        \$array->addElement(new ConstantNode('b'));

        return \$array;
    }
}

class Obj
{
    public \$foo = 'bar';

    public function foo()
    {
        return 'baz';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php";
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
use Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\GetAttrNode;
use Symfony\\Component\\ExpressionLanguage\\Node\\NameNode;

class GetAttrNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return [
            ['b', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b']]],
            ['a', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b']]],

            ['bar', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['baz', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['a', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL), ['foo' => ['b' => 'a', 'b'], 'index' => 'b']],
        ];
    }

    public function getCompileData()
    {
        return [
            ['\$foo[0]', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
            ['\$foo[\"b\"]', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],

            ['\$foo->foo', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['\$foo->foo([\"b\" => \"a\", 0 => \"b\"])', new GetAttrNode(new NameNode('foo'), new ConstantNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['\$foo[\$index]', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
        ];
    }

    public function getDumpData()
    {
        return [
            ['foo[0]', new GetAttrNode(new NameNode('foo'), new ConstantNode(0), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
            ['foo[\"b\"]', new GetAttrNode(new NameNode('foo'), new ConstantNode('b'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],

            ['foo.foo', new GetAttrNode(new NameNode('foo'), new NameNode('foo'), \$this->getArrayNode(), GetAttrNode::PROPERTY_CALL), ['foo' => new Obj()]],

            ['foo.foo({\"b\": \"a\", 0: \"b\"})', new GetAttrNode(new NameNode('foo'), new NameNode('foo'), \$this->getArrayNode(), GetAttrNode::METHOD_CALL), ['foo' => new Obj()]],
            ['foo[index]', new GetAttrNode(new NameNode('foo'), new NameNode('index'), \$this->getArrayNode(), GetAttrNode::ARRAY_CALL)],
        ];
    }

    protected function getArrayNode()
    {
        \$array = new ArrayNode();
        \$array->addElement(new ConstantNode('a'), new ConstantNode('b'));
        \$array->addElement(new ConstantNode('b'));

        return \$array;
    }
}

class Obj
{
    public \$foo = 'bar';

    public function foo()
    {
        return 'baz';
    }
}
", "vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Node/GetAttrNodeTest.php");
    }
}
