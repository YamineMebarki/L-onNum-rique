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

/* vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php */
class __TwigTemplate_d22113e62bfef93c72a01bf3e9f79b766c84d411cb033a9babe4350c5d304117 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php"));

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

namespace Symfony\\Component\\DomCrawler\\Tests\\Field;

use Symfony\\Component\\DomCrawler\\Field\\FileFormField;

class FileFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$this->assertEquals(['name' => '', 'type' => '', 'tmp_name' => '', 'error' => UPLOAD_ERR_NO_FILE, 'size' => 0], \$field->getValue(), '->initialize() sets the value of the field to no file uploaded');

        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new FileFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input field');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input field');
        }

        \$node = \$this->createNode('input', '', ['type' => 'text']);
        try {
            \$field = new FileFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not a file input field');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not a file input field');
        }
    }

    /**
     * @dataProvider getSetValueMethods
     */
    public function testSetValue(\$method)
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$field->\$method(null);
        \$this->assertEquals(['name' => '', 'type' => '', 'tmp_name' => '', 'error' => UPLOAD_ERR_NO_FILE, 'size' => 0], \$field->getValue(), \"->\$method() clears the uploaded file if the value is null\");

        \$field->\$method(__FILE__);
        \$value = \$field->getValue();

        \$this->assertEquals(basename(__FILE__), \$value['name'], \"->\$method() sets the name of the file field\");
        \$this->assertEquals('', \$value['type'], \"->\$method() sets the type of the file field\");
        \$this->assertIsString(\$value['tmp_name'], \"->\$method() sets the tmp_name of the file field\");
        \$this->assertFileExists(\$value['tmp_name'], \"->\$method() creates a copy of the file at the tmp_name path\");
        \$this->assertEquals(0, \$value['error'], \"->\$method() sets the error of the file field\");
        \$this->assertEquals(filesize(__FILE__), \$value['size'], \"->\$method() sets the size of the file field\");

        \$origInfo = pathinfo(__FILE__);
        \$tmpInfo = pathinfo(\$value['tmp_name']);
        \$this->assertEquals(
            \$origInfo['extension'],
            \$tmpInfo['extension'],
            \"->\$method() keeps the same file extension in the tmp_name copy\"
        );

        \$field->\$method(__DIR__.'/../Fixtures/no-extension');
        \$value = \$field->getValue();

        \$this->assertArrayNotHasKey(
            'extension',
            pathinfo(\$value['tmp_name']),
            \"->\$method() does not add a file extension in the tmp_name copy\"
        );
    }

    public function getSetValueMethods()
    {
        return [
            ['setValue'],
            ['upload'],
        ];
    }

    public function testSetErrorCode()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$field->setErrorCode(UPLOAD_ERR_FORM_SIZE);
        \$value = \$field->getValue();
        \$this->assertEquals(UPLOAD_ERR_FORM_SIZE, \$value['error'], '->setErrorCode() sets the file input field error code');

        try {
            \$field->setErrorCode('foobar');
            \$this->fail('->setErrorCode() throws a \\InvalidArgumentException if the error code is not valid');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setErrorCode() throws a \\InvalidArgumentException if the error code is not valid');
        }
    }

    public function testSetRawFilePath()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);
        \$field->setFilePath(__FILE__);

        \$this->assertEquals(__FILE__, \$field->getValue());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php";
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

namespace Symfony\\Component\\DomCrawler\\Tests\\Field;

use Symfony\\Component\\DomCrawler\\Field\\FileFormField;

class FileFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$this->assertEquals(['name' => '', 'type' => '', 'tmp_name' => '', 'error' => UPLOAD_ERR_NO_FILE, 'size' => 0], \$field->getValue(), '->initialize() sets the value of the field to no file uploaded');

        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new FileFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input field');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input field');
        }

        \$node = \$this->createNode('input', '', ['type' => 'text']);
        try {
            \$field = new FileFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not a file input field');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not a file input field');
        }
    }

    /**
     * @dataProvider getSetValueMethods
     */
    public function testSetValue(\$method)
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$field->\$method(null);
        \$this->assertEquals(['name' => '', 'type' => '', 'tmp_name' => '', 'error' => UPLOAD_ERR_NO_FILE, 'size' => 0], \$field->getValue(), \"->\$method() clears the uploaded file if the value is null\");

        \$field->\$method(__FILE__);
        \$value = \$field->getValue();

        \$this->assertEquals(basename(__FILE__), \$value['name'], \"->\$method() sets the name of the file field\");
        \$this->assertEquals('', \$value['type'], \"->\$method() sets the type of the file field\");
        \$this->assertIsString(\$value['tmp_name'], \"->\$method() sets the tmp_name of the file field\");
        \$this->assertFileExists(\$value['tmp_name'], \"->\$method() creates a copy of the file at the tmp_name path\");
        \$this->assertEquals(0, \$value['error'], \"->\$method() sets the error of the file field\");
        \$this->assertEquals(filesize(__FILE__), \$value['size'], \"->\$method() sets the size of the file field\");

        \$origInfo = pathinfo(__FILE__);
        \$tmpInfo = pathinfo(\$value['tmp_name']);
        \$this->assertEquals(
            \$origInfo['extension'],
            \$tmpInfo['extension'],
            \"->\$method() keeps the same file extension in the tmp_name copy\"
        );

        \$field->\$method(__DIR__.'/../Fixtures/no-extension');
        \$value = \$field->getValue();

        \$this->assertArrayNotHasKey(
            'extension',
            pathinfo(\$value['tmp_name']),
            \"->\$method() does not add a file extension in the tmp_name copy\"
        );
    }

    public function getSetValueMethods()
    {
        return [
            ['setValue'],
            ['upload'],
        ];
    }

    public function testSetErrorCode()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);

        \$field->setErrorCode(UPLOAD_ERR_FORM_SIZE);
        \$value = \$field->getValue();
        \$this->assertEquals(UPLOAD_ERR_FORM_SIZE, \$value['error'], '->setErrorCode() sets the file input field error code');

        try {
            \$field->setErrorCode('foobar');
            \$this->fail('->setErrorCode() throws a \\InvalidArgumentException if the error code is not valid');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setErrorCode() throws a \\InvalidArgumentException if the error code is not valid');
        }
    }

    public function testSetRawFilePath()
    {
        \$node = \$this->createNode('input', '', ['type' => 'file']);
        \$field = new FileFormField(\$node);
        \$field->setFilePath(__FILE__);

        \$this->assertEquals(__FILE__, \$field->getValue());
    }
}
", "vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Field/FileFormFieldTest.php");
    }
}
