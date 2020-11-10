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

/* vendor/symfony/config/Tests/Definition/ScalarNodeTest.php */
class __TwigTemplate_9ac168198fb7de92d04cf1dc0cf8a56d9c5e3170ab1325643028b055b040b081 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/ScalarNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/ScalarNodeTest.php"));

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
use Symfony\\Component\\Config\\Definition\\ArrayNode;
use Symfony\\Component\\Config\\Definition\\ScalarNode;

class ScalarNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize(\$value)
    {
        \$node = new ScalarNode('test');
        \$this->assertSame(\$value, \$node->normalize(\$value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
        ];
    }

    public function testSetDeprecated()
    {
        \$childNode = new ScalarNode('foo');
        \$childNode->setDeprecated('\"%node%\" is deprecated');

        \$this->assertTrue(\$childNode->isDeprecated());
        \$this->assertSame('\"foo\" is deprecated', \$childNode->getDeprecationMessage(\$childNode->getName(), \$childNode->getPath()));

        \$node = new ArrayNode('root');
        \$node->addChild(\$childNode);

        \$deprecationTriggered = 0;
        \$deprecationHandler = function (\$level, \$message, \$file, \$line) use (&\$prevErrorHandler, &\$deprecationTriggered) {
            if (E_USER_DEPRECATED === \$level) {
                return ++\$deprecationTriggered;
            }

            return \$prevErrorHandler ? \$prevErrorHandler(\$level, \$message, \$file, \$line) : false;
        };

        \$prevErrorHandler = set_error_handler(\$deprecationHandler);
        \$node->finalize([]);
        restore_error_handler();
        \$this->assertSame(0, \$deprecationTriggered, '->finalize() should not trigger if the deprecated node is not set');

        \$prevErrorHandler = set_error_handler(\$deprecationHandler);
        \$node->finalize(['foo' => '']);
        restore_error_handler();
        \$this->assertSame(1, \$deprecationTriggered, '->finalize() should trigger if the deprecated node is set');
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testNormalizeThrowsExceptionOnInvalidValues(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$node = new ScalarNode('test');
        \$node->normalize(\$value);
    }

    public function getInvalidValues()
    {
        return [
            [[]],
            [['foo' => 'bar']],
            [new \\stdClass()],
        ];
    }

    public function testNormalizeThrowsExceptionWithoutHint()
    {
        \$node = new ScalarNode('test');

        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$this->expectExceptionMessage('Invalid type for path \"test\". Expected scalar, but got array.');

        \$node->normalize([]);
    }

    public function testNormalizeThrowsExceptionWithErrorMessage()
    {
        \$node = new ScalarNode('test');
        \$node->setInfo('\"the test value\"');

        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$this->expectExceptionMessage(\"Invalid type for path \\\"test\\\". Expected scalar, but got array.\\nHint: \\\"the test value\\\"\");

        \$node->normalize([]);
    }

    /**
     * @dataProvider getValidNonEmptyValues
     *
     * @param mixed \$value
     */
    public function testValidNonEmptyValues(\$value)
    {
        \$node = new ScalarNode('test');
        \$node->setAllowEmptyValue(false);

        \$this->assertSame(\$value, \$node->finalize(\$value));
    }

    public function getValidNonEmptyValues()
    {
        return [
            [false],
            [true],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
        ];
    }

    /**
     * @dataProvider getEmptyValues
     *
     * @param mixed \$value
     */
    public function testNotAllowedEmptyValuesThrowException(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$node = new ScalarNode('test');
        \$node->setAllowEmptyValue(false);
        \$node->finalize(\$value);
    }

    public function getEmptyValues()
    {
        return [
            [null],
            [''],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/ScalarNodeTest.php";
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
use Symfony\\Component\\Config\\Definition\\ArrayNode;
use Symfony\\Component\\Config\\Definition\\ScalarNode;

class ScalarNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize(\$value)
    {
        \$node = new ScalarNode('test');
        \$this->assertSame(\$value, \$node->normalize(\$value));
    }

    public function getValidValues()
    {
        return [
            [false],
            [true],
            [null],
            [''],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
        ];
    }

    public function testSetDeprecated()
    {
        \$childNode = new ScalarNode('foo');
        \$childNode->setDeprecated('\"%node%\" is deprecated');

        \$this->assertTrue(\$childNode->isDeprecated());
        \$this->assertSame('\"foo\" is deprecated', \$childNode->getDeprecationMessage(\$childNode->getName(), \$childNode->getPath()));

        \$node = new ArrayNode('root');
        \$node->addChild(\$childNode);

        \$deprecationTriggered = 0;
        \$deprecationHandler = function (\$level, \$message, \$file, \$line) use (&\$prevErrorHandler, &\$deprecationTriggered) {
            if (E_USER_DEPRECATED === \$level) {
                return ++\$deprecationTriggered;
            }

            return \$prevErrorHandler ? \$prevErrorHandler(\$level, \$message, \$file, \$line) : false;
        };

        \$prevErrorHandler = set_error_handler(\$deprecationHandler);
        \$node->finalize([]);
        restore_error_handler();
        \$this->assertSame(0, \$deprecationTriggered, '->finalize() should not trigger if the deprecated node is not set');

        \$prevErrorHandler = set_error_handler(\$deprecationHandler);
        \$node->finalize(['foo' => '']);
        restore_error_handler();
        \$this->assertSame(1, \$deprecationTriggered, '->finalize() should trigger if the deprecated node is set');
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testNormalizeThrowsExceptionOnInvalidValues(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$node = new ScalarNode('test');
        \$node->normalize(\$value);
    }

    public function getInvalidValues()
    {
        return [
            [[]],
            [['foo' => 'bar']],
            [new \\stdClass()],
        ];
    }

    public function testNormalizeThrowsExceptionWithoutHint()
    {
        \$node = new ScalarNode('test');

        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$this->expectExceptionMessage('Invalid type for path \"test\". Expected scalar, but got array.');

        \$node->normalize([]);
    }

    public function testNormalizeThrowsExceptionWithErrorMessage()
    {
        \$node = new ScalarNode('test');
        \$node->setInfo('\"the test value\"');

        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        \$this->expectExceptionMessage(\"Invalid type for path \\\"test\\\". Expected scalar, but got array.\\nHint: \\\"the test value\\\"\");

        \$node->normalize([]);
    }

    /**
     * @dataProvider getValidNonEmptyValues
     *
     * @param mixed \$value
     */
    public function testValidNonEmptyValues(\$value)
    {
        \$node = new ScalarNode('test');
        \$node->setAllowEmptyValue(false);

        \$this->assertSame(\$value, \$node->finalize(\$value));
    }

    public function getValidNonEmptyValues()
    {
        return [
            [false],
            [true],
            ['foo'],
            [0],
            [1],
            [0.0],
            [0.1],
        ];
    }

    /**
     * @dataProvider getEmptyValues
     *
     * @param mixed \$value
     */
    public function testNotAllowedEmptyValuesThrowException(\$value)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$node = new ScalarNode('test');
        \$node->setAllowEmptyValue(false);
        \$node->finalize(\$value);
    }

    public function getEmptyValues()
    {
        return [
            [null],
            [''],
        ];
    }
}
", "vendor/symfony/config/Tests/Definition/ScalarNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/ScalarNodeTest.php");
    }
}
