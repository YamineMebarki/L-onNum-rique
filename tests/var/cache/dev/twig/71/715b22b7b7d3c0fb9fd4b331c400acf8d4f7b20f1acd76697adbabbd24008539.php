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

/* vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php */
class __TwigTemplate_763bd9ced0e70f40d98f85cca73710b4eac3740142418bbdfc9f1b56bbac0d52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder as BaseNodeBuilder;
use Symfony\\Component\\Config\\Definition\\Builder\\VariableNodeDefinition as BaseVariableNodeDefinition;

class NodeBuilderTest extends TestCase
{
    public function testThrowsAnExceptionWhenTryingToCreateANonRegisteredNodeType()
    {
        \$this->expectException('RuntimeException');
        \$builder = new BaseNodeBuilder();
        \$builder->node('', 'foobar');
    }

    public function testThrowsAnExceptionWhenTheNodeClassIsNotFound()
    {
        \$this->expectException('RuntimeException');
        \$builder = new BaseNodeBuilder();
        \$builder
            ->setNodeClass('noclasstype', '\\\\foo\\\\bar\\\\noclass')
            ->node('', 'noclasstype');
    }

    public function testAddingANewNodeType()
    {
        \$class = __NAMESPACE__.'\\\\SomeNodeDefinition';

        \$builder = new BaseNodeBuilder();
        \$node = \$builder
            ->setNodeClass('newtype', \$class)
            ->node('', 'newtype');

        \$this->assertInstanceOf(\$class, \$node);
    }

    public function testOverridingAnExistingNodeType()
    {
        \$class = __NAMESPACE__.'\\\\SomeNodeDefinition';

        \$builder = new BaseNodeBuilder();
        \$node = \$builder
            ->setNodeClass('variable', \$class)
            ->node('', 'variable');

        \$this->assertInstanceOf(\$class, \$node);
    }

    public function testNodeTypesAreNotCaseSensitive()
    {
        \$builder = new BaseNodeBuilder();

        \$node1 = \$builder->node('', 'VaRiAbLe');
        \$node2 = \$builder->node('', 'variable');

        \$this->assertInstanceOf(\\get_class(\$node1), \$node2);

        \$builder->setNodeClass('CuStOm', __NAMESPACE__.'\\\\SomeNodeDefinition');

        \$node1 = \$builder->node('', 'CUSTOM');
        \$node2 = \$builder->node('', 'custom');

        \$this->assertInstanceOf(\\get_class(\$node1), \$node2);
    }

    public function testNumericNodeCreation()
    {
        \$builder = new BaseNodeBuilder();

        \$node = \$builder->integerNode('foo')->min(3)->max(5);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\IntegerNodeDefinition', \$node);

        \$node = \$builder->floatNode('bar')->min(3.0)->max(5.0);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\FloatNodeDefinition', \$node);
    }
}

class SomeNodeDefinition extends BaseVariableNodeDefinition
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder as BaseNodeBuilder;
use Symfony\\Component\\Config\\Definition\\Builder\\VariableNodeDefinition as BaseVariableNodeDefinition;

class NodeBuilderTest extends TestCase
{
    public function testThrowsAnExceptionWhenTryingToCreateANonRegisteredNodeType()
    {
        \$this->expectException('RuntimeException');
        \$builder = new BaseNodeBuilder();
        \$builder->node('', 'foobar');
    }

    public function testThrowsAnExceptionWhenTheNodeClassIsNotFound()
    {
        \$this->expectException('RuntimeException');
        \$builder = new BaseNodeBuilder();
        \$builder
            ->setNodeClass('noclasstype', '\\\\foo\\\\bar\\\\noclass')
            ->node('', 'noclasstype');
    }

    public function testAddingANewNodeType()
    {
        \$class = __NAMESPACE__.'\\\\SomeNodeDefinition';

        \$builder = new BaseNodeBuilder();
        \$node = \$builder
            ->setNodeClass('newtype', \$class)
            ->node('', 'newtype');

        \$this->assertInstanceOf(\$class, \$node);
    }

    public function testOverridingAnExistingNodeType()
    {
        \$class = __NAMESPACE__.'\\\\SomeNodeDefinition';

        \$builder = new BaseNodeBuilder();
        \$node = \$builder
            ->setNodeClass('variable', \$class)
            ->node('', 'variable');

        \$this->assertInstanceOf(\$class, \$node);
    }

    public function testNodeTypesAreNotCaseSensitive()
    {
        \$builder = new BaseNodeBuilder();

        \$node1 = \$builder->node('', 'VaRiAbLe');
        \$node2 = \$builder->node('', 'variable');

        \$this->assertInstanceOf(\\get_class(\$node1), \$node2);

        \$builder->setNodeClass('CuStOm', __NAMESPACE__.'\\\\SomeNodeDefinition');

        \$node1 = \$builder->node('', 'CUSTOM');
        \$node2 = \$builder->node('', 'custom');

        \$this->assertInstanceOf(\\get_class(\$node1), \$node2);
    }

    public function testNumericNodeCreation()
    {
        \$builder = new BaseNodeBuilder();

        \$node = \$builder->integerNode('foo')->min(3)->max(5);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\IntegerNodeDefinition', \$node);

        \$node = \$builder->floatNode('bar')->min(3.0)->max(5.0);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\FloatNodeDefinition', \$node);
    }
}

class SomeNodeDefinition extends BaseVariableNodeDefinition
{
}
", "vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/NodeBuilderTest.php");
    }
}
