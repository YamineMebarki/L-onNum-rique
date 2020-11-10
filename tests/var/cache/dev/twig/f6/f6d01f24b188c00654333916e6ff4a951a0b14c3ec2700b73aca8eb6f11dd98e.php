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

/* vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php */
class __TwigTemplate_880f8d829185aad1748b657e181e43100830b29c622f114666cdc44eb9b69afe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php"));

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
use Symfony\\Component\\Config\\Definition\\Builder\\EnumNodeDefinition;

class EnumNodeDefinitionTest extends TestCase
{
    public function testWithOneValue()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo'], \$node->getValues());
    }

    public function testWithOneDistinctValue()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'foo']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo'], \$node->getValues());
    }

    public function testNoValuesPassed()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must call ->values() on enum nodes.');
        \$def = new EnumNodeDefinition('foo');
        \$def->getNode();
    }

    public function testWithNoValues()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('->values() must be called with at least one value.');
        \$def = new EnumNodeDefinition('foo');
        \$def->values([]);
    }

    public function testGetNode()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'bar']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo', 'bar'], \$node->getValues());
    }

    public function testSetDeprecated()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'bar']);
        \$def->setDeprecated('The \"%path%\" node is deprecated.');

        \$node = \$def->getNode();

        \$this->assertTrue(\$node->isDeprecated());
        \$this->assertSame('The \"foo\" node is deprecated.', \$def->getNode()->getDeprecationMessage(\$node->getName(), \$node->getPath()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php";
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
use Symfony\\Component\\Config\\Definition\\Builder\\EnumNodeDefinition;

class EnumNodeDefinitionTest extends TestCase
{
    public function testWithOneValue()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo'], \$node->getValues());
    }

    public function testWithOneDistinctValue()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'foo']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo'], \$node->getValues());
    }

    public function testNoValuesPassed()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must call ->values() on enum nodes.');
        \$def = new EnumNodeDefinition('foo');
        \$def->getNode();
    }

    public function testWithNoValues()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('->values() must be called with at least one value.');
        \$def = new EnumNodeDefinition('foo');
        \$def->values([]);
    }

    public function testGetNode()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'bar']);

        \$node = \$def->getNode();
        \$this->assertEquals(['foo', 'bar'], \$node->getValues());
    }

    public function testSetDeprecated()
    {
        \$def = new EnumNodeDefinition('foo');
        \$def->values(['foo', 'bar']);
        \$def->setDeprecated('The \"%path%\" node is deprecated.');

        \$node = \$def->getNode();

        \$this->assertTrue(\$node->isDeprecated());
        \$this->assertSame('The \"foo\" node is deprecated.', \$def->getNode()->getDeprecationMessage(\$node->getName(), \$node->getPath()));
    }
}
", "vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/EnumNodeDefinitionTest.php");
    }
}
