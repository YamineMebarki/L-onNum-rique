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

/* vendor/symfony/config/Tests/Definition/EnumNodeTest.php */
class __TwigTemplate_8eb3582e95ada50473fec6e97dcb226271c7558747e7ec260c4c54e668aeb384 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/EnumNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/EnumNodeTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\EnumNode;

class EnumNodeTest extends TestCase
{
    public function testFinalizeValue()
    {
        \$node = new EnumNode('foo', null, ['foo', 'bar']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithNoValues()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('\$values must contain at least one element.');
        new EnumNode('foo', null, []);
    }

    public function testConstructionWithOneValue()
    {
        \$node = new EnumNode('foo', null, ['foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithOneDistinctValue()
    {
        \$node = new EnumNode('foo', null, ['foo', 'foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithNullName()
    {
        \$node = new EnumNode(null, null, ['foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testFinalizeWithInvalidValue()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The value \"foobar\" is not allowed for path \"foo\". Permissible values: \"foo\", \"bar\"');
        \$node = new EnumNode('foo', null, ['foo', 'bar']);
        \$node->finalize('foobar');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/EnumNodeTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\EnumNode;

class EnumNodeTest extends TestCase
{
    public function testFinalizeValue()
    {
        \$node = new EnumNode('foo', null, ['foo', 'bar']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithNoValues()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('\$values must contain at least one element.');
        new EnumNode('foo', null, []);
    }

    public function testConstructionWithOneValue()
    {
        \$node = new EnumNode('foo', null, ['foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithOneDistinctValue()
    {
        \$node = new EnumNode('foo', null, ['foo', 'foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testConstructionWithNullName()
    {
        \$node = new EnumNode(null, null, ['foo']);
        \$this->assertSame('foo', \$node->finalize('foo'));
    }

    public function testFinalizeWithInvalidValue()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The value \"foobar\" is not allowed for path \"foo\". Permissible values: \"foo\", \"bar\"');
        \$node = new EnumNode('foo', null, ['foo', 'bar']);
        \$node->finalize('foobar');
    }
}
", "vendor/symfony/config/Tests/Definition/EnumNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/EnumNodeTest.php");
    }
}
