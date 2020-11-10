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

/* vendor/symfony/form/Tests/FormConfigTest.php */
class __TwigTemplate_3c17c0a017a54c47f290ae53d90f31c674bcacb11bcc953b15997aaa03be5c95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormConfigTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormConfigTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormConfigBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormConfigTest extends TestCase
{
    public function getHtml4Ids()
    {
        return [
            ['z0'],
            ['A0'],
            ['A9'],
            ['Z0'],
            ['#', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a#', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a\$', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a%', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a ', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            [\"a\\t\", 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            [\"a\\n\", 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a-'],
            ['a_'],
            ['a:'],
            // Periods are allowed by the HTML4 spec, but disallowed by us
            // because they break the generated property paths
            ['a.', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            // Contrary to the HTML4 spec, we allow names starting with a
            // number, otherwise naming fields by collection indices is not
            // possible.
            // For root forms, leading digits will be stripped from the
            // \"id\" attribute to produce valid HTML4.
            ['0'],
            ['9'],
            // Contrary to the HTML4 spec, we allow names starting with an
            // underscore, since this is already a widely used practice in
            // Symfony.
            // For root forms, leading underscores will be stripped from the
            // \"id\" attribute to produce valid HTML4.
            ['_'],
            // Integers are allowed
            [0],
            [123],
            // NULL is allowed
            [null],
            // Other types are not
            [1.23, 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [5., 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [true, 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [new \\stdClass(), 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
        ];
    }

    /**
     * @dataProvider getHtml4Ids
     */
    public function testNameAcceptsOnlyNamesValidAsIdsInHtml4(\$name, \$expectedException = null)
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        if (null !== \$expectedException) {
            \$this->expectException(\$expectedException);
        }

        \$formConfigBuilder = new FormConfigBuilder(\$name, null, \$dispatcher);

        \$this->assertSame((string) \$name, \$formConfigBuilder->getName());
    }

    public function testGetRequestHandlerCreatesNativeRequestHandlerIfNotSet()
    {
        \$config = \$this->getConfigBuilder()->getFormConfig();

        \$this->assertInstanceOf('Symfony\\Component\\Form\\NativeRequestHandler', \$config->getRequestHandler());
    }

    public function testGetRequestHandlerReusesNativeRequestHandlerInstance()
    {
        \$config1 = \$this->getConfigBuilder()->getFormConfig();
        \$config2 = \$this->getConfigBuilder()->getFormConfig();

        \$this->assertSame(\$config1->getRequestHandler(), \$config2->getRequestHandler());
    }

    public function testSetMethodAllowsGet()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('GET');

        self::assertSame('GET', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPost()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('POST');

        self::assertSame('POST', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPut()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('PUT');

        self::assertSame('PUT', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsDelete()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('DELETE');

        self::assertSame('DELETE', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPatch()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('PATCH');

        self::assertSame('PATCH', \$formConfigBuilder->getMethod());
    }

    private function getConfigBuilder(\$name = 'name')
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        return new FormConfigBuilder(\$name, null, \$dispatcher);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/FormConfigTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormConfigBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormConfigTest extends TestCase
{
    public function getHtml4Ids()
    {
        return [
            ['z0'],
            ['A0'],
            ['A9'],
            ['Z0'],
            ['#', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a#', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a\$', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a%', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a ', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            [\"a\\t\", 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            [\"a\\n\", 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            ['a-'],
            ['a_'],
            ['a:'],
            // Periods are allowed by the HTML4 spec, but disallowed by us
            // because they break the generated property paths
            ['a.', 'Symfony\\Component\\Form\\Exception\\InvalidArgumentException'],
            // Contrary to the HTML4 spec, we allow names starting with a
            // number, otherwise naming fields by collection indices is not
            // possible.
            // For root forms, leading digits will be stripped from the
            // \"id\" attribute to produce valid HTML4.
            ['0'],
            ['9'],
            // Contrary to the HTML4 spec, we allow names starting with an
            // underscore, since this is already a widely used practice in
            // Symfony.
            // For root forms, leading underscores will be stripped from the
            // \"id\" attribute to produce valid HTML4.
            ['_'],
            // Integers are allowed
            [0],
            [123],
            // NULL is allowed
            [null],
            // Other types are not
            [1.23, 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [5., 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [true, 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
            [new \\stdClass(), 'Symfony\\Component\\Form\\Exception\\UnexpectedTypeException'],
        ];
    }

    /**
     * @dataProvider getHtml4Ids
     */
    public function testNameAcceptsOnlyNamesValidAsIdsInHtml4(\$name, \$expectedException = null)
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        if (null !== \$expectedException) {
            \$this->expectException(\$expectedException);
        }

        \$formConfigBuilder = new FormConfigBuilder(\$name, null, \$dispatcher);

        \$this->assertSame((string) \$name, \$formConfigBuilder->getName());
    }

    public function testGetRequestHandlerCreatesNativeRequestHandlerIfNotSet()
    {
        \$config = \$this->getConfigBuilder()->getFormConfig();

        \$this->assertInstanceOf('Symfony\\Component\\Form\\NativeRequestHandler', \$config->getRequestHandler());
    }

    public function testGetRequestHandlerReusesNativeRequestHandlerInstance()
    {
        \$config1 = \$this->getConfigBuilder()->getFormConfig();
        \$config2 = \$this->getConfigBuilder()->getFormConfig();

        \$this->assertSame(\$config1->getRequestHandler(), \$config2->getRequestHandler());
    }

    public function testSetMethodAllowsGet()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('GET');

        self::assertSame('GET', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPost()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('POST');

        self::assertSame('POST', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPut()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('PUT');

        self::assertSame('PUT', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsDelete()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('DELETE');

        self::assertSame('DELETE', \$formConfigBuilder->getMethod());
    }

    public function testSetMethodAllowsPatch()
    {
        \$formConfigBuilder = \$this->getConfigBuilder();
        \$formConfigBuilder->setMethod('PATCH');

        self::assertSame('PATCH', \$formConfigBuilder->getMethod());
    }

    private function getConfigBuilder(\$name = 'name')
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        return new FormConfigBuilder(\$name, null, \$dispatcher);
    }
}
", "vendor/symfony/form/Tests/FormConfigTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/FormConfigTest.php");
    }
}
