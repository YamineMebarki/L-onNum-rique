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

/* vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php */
class __TwigTemplate_02f6a3e0a73c8ab5761bd27f1056f66bc3e3e273746f5fc05da219543e4027ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

class LoaderLoadExceptionTest extends TestCase
{
    public function testMessageCannotLoadResource()
    {
        \$exception = new LoaderLoadException('resource', null);
        \$this->assertEquals('Cannot load resource \"resource\".', \$exception->getMessage());
    }

    public function testMessageCannotLoadResourceWithType()
    {
        \$exception = new LoaderLoadException('resource', null, null, null, 'foobar');
        \$this->assertEquals('Cannot load resource \"resource\". Make sure there is a loader supporting the \"foobar\" type.', \$exception->getMessage());
    }

    public function testMessageCannotLoadResourceWithAnnotationType()
    {
        \$exception = new LoaderLoadException('resource', null, null, null, 'annotation');
        \$this->assertEquals('Cannot load resource \"resource\". Make sure annotations are installed and enabled.', \$exception->getMessage());
    }

    public function testMessageCannotImportResourceFromSource()
    {
        \$exception = new LoaderLoadException('resource', 'sourceResource');
        \$this->assertEquals('Cannot import resource \"resource\" from \"sourceResource\".', \$exception->getMessage());
    }

    public function testMessageCannotImportBundleResource()
    {
        \$exception = new LoaderLoadException('@resource', 'sourceResource');
        \$this->assertEquals(
            'Cannot import resource \"@resource\" from \"sourceResource\". '.
            'Make sure the \"resource\" bundle is correctly registered and loaded in the application kernel class. '.
            'If the bundle is registered, make sure the bundle path \"@resource\" is not empty.',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorWithDotAndUnableToLoad()
    {
        \$exception = new LoaderLoadException(
            'resource',
            null,
            null,
            new \\Exception('There was a previous error with an ending dot.')
        );
        \$this->assertEquals(
            'There was a previous error with an ending dot in resource (which is loaded in resource \"resource\").',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorWithoutDotAndUnableToLoad()
    {
        \$exception = new LoaderLoadException(
            'resource',
            null,
            null,
            new \\Exception('There was a previous error with no ending dot')
        );
        \$this->assertEquals(
            'There was a previous error with no ending dot in resource (which is loaded in resource \"resource\").',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorAndUnableToLoadBundle()
    {
        \$exception = new LoaderLoadException(
            '@resource',
            null,
            null,
            new \\Exception('There was a previous error with an ending dot.')
        );
        \$this->assertEquals(
            'There was a previous error with an ending dot in @resource '.
            '(which is loaded in resource \"@resource\"). '.
            'Make sure the \"resource\" bundle is correctly registered and loaded in the application kernel class. '.
            'If the bundle is registered, make sure the bundle path \"@resource\" is not empty.',
            \$exception->getMessage()
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

class LoaderLoadExceptionTest extends TestCase
{
    public function testMessageCannotLoadResource()
    {
        \$exception = new LoaderLoadException('resource', null);
        \$this->assertEquals('Cannot load resource \"resource\".', \$exception->getMessage());
    }

    public function testMessageCannotLoadResourceWithType()
    {
        \$exception = new LoaderLoadException('resource', null, null, null, 'foobar');
        \$this->assertEquals('Cannot load resource \"resource\". Make sure there is a loader supporting the \"foobar\" type.', \$exception->getMessage());
    }

    public function testMessageCannotLoadResourceWithAnnotationType()
    {
        \$exception = new LoaderLoadException('resource', null, null, null, 'annotation');
        \$this->assertEquals('Cannot load resource \"resource\". Make sure annotations are installed and enabled.', \$exception->getMessage());
    }

    public function testMessageCannotImportResourceFromSource()
    {
        \$exception = new LoaderLoadException('resource', 'sourceResource');
        \$this->assertEquals('Cannot import resource \"resource\" from \"sourceResource\".', \$exception->getMessage());
    }

    public function testMessageCannotImportBundleResource()
    {
        \$exception = new LoaderLoadException('@resource', 'sourceResource');
        \$this->assertEquals(
            'Cannot import resource \"@resource\" from \"sourceResource\". '.
            'Make sure the \"resource\" bundle is correctly registered and loaded in the application kernel class. '.
            'If the bundle is registered, make sure the bundle path \"@resource\" is not empty.',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorWithDotAndUnableToLoad()
    {
        \$exception = new LoaderLoadException(
            'resource',
            null,
            null,
            new \\Exception('There was a previous error with an ending dot.')
        );
        \$this->assertEquals(
            'There was a previous error with an ending dot in resource (which is loaded in resource \"resource\").',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorWithoutDotAndUnableToLoad()
    {
        \$exception = new LoaderLoadException(
            'resource',
            null,
            null,
            new \\Exception('There was a previous error with no ending dot')
        );
        \$this->assertEquals(
            'There was a previous error with no ending dot in resource (which is loaded in resource \"resource\").',
            \$exception->getMessage()
        );
    }

    public function testMessageHasPreviousErrorAndUnableToLoadBundle()
    {
        \$exception = new LoaderLoadException(
            '@resource',
            null,
            null,
            new \\Exception('There was a previous error with an ending dot.')
        );
        \$this->assertEquals(
            'There was a previous error with an ending dot in @resource '.
            '(which is loaded in resource \"@resource\"). '.
            'Make sure the \"resource\" bundle is correctly registered and loaded in the application kernel class. '.
            'If the bundle is registered, make sure the bundle path \"@resource\" is not empty.',
            \$exception->getMessage()
        );
    }
}
", "vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Exception/LoaderLoadExceptionTest.php");
    }
}
