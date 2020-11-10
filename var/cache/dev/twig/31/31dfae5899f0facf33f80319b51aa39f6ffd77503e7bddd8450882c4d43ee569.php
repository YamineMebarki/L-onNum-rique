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

/* vendor/symfony/config/Tests/Definition/BooleanNodeTest.php */
class __TwigTemplate_34215ca3e786518fd9c062ac5fab4311ce69c944e23cee135c92fd36c7871d7e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/BooleanNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/BooleanNodeTest.php"));

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
use Symfony\\Component\\Config\\Definition\\BooleanNode;

class BooleanNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize(\$value)
    {
        \$node = new BooleanNode('test');
        \$this->assertSame(\$value, \$node->normalize(\$value));
    }

    /**
     * @dataProvider getValidValues
     *
     * @param bool \$value
     */
    public function testValidNonEmptyValues(\$value)
    {
        \$node = new BooleanNode('test');
        \$node->setAllowEmptyValue(false);

        \$this->assertSame(\$value, \$node->finalize(\$value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testNormalizeThrowsExceptionOnInvalidValues(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$node = new BooleanNode('test');
        \$node->normalize(\$value);
    }

    public function getInvalidValues()
    {
        return [
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
            [[]],
            [['foo' => 'bar']],
            [new \\stdClass()],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/BooleanNodeTest.php";
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
use Symfony\\Component\\Config\\Definition\\BooleanNode;

class BooleanNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize(\$value)
    {
        \$node = new BooleanNode('test');
        \$this->assertSame(\$value, \$node->normalize(\$value));
    }

    /**
     * @dataProvider getValidValues
     *
     * @param bool \$value
     */
    public function testValidNonEmptyValues(\$value)
    {
        \$node = new BooleanNode('test');
        \$node->setAllowEmptyValue(false);

        \$this->assertSame(\$value, \$node->finalize(\$value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testNormalizeThrowsExceptionOnInvalidValues(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$node = new BooleanNode('test');
        \$node->normalize(\$value);
    }

    public function getInvalidValues()
    {
        return [
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
            [[]],
            [['foo' => 'bar']],
            [new \\stdClass()],
        ];
    }
}
", "vendor/symfony/config/Tests/Definition/BooleanNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/BooleanNodeTest.php");
    }
}
