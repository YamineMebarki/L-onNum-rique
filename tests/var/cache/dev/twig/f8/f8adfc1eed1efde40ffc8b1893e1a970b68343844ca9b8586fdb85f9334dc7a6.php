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

/* vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php */
class __TwigTemplate_c75c0f58b9c19fd96fc929a7d76f6c97d78c8170042676c6c5a13ae719f6e919 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Loader;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateLocatorTest extends TestCase
{
    public function testLocateATemplate()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->with(\$template->getPath())
            ->willReturn('/path/to/template')
        ;

        \$locator = new TemplateLocator(\$fileLocator);

        \$this->assertEquals('/path/to/template', \$locator->locate(\$template));

        // Assert cache is used as \$fileLocator->locate should be called only once
        \$this->assertEquals('/path/to/template', \$locator->locate(\$template));
    }

    public function testLocateATemplateFromCacheDir()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$locator = new TemplateLocator(\$fileLocator, __DIR__.'/../../Fixtures');

        \$this->assertEquals(realpath(__DIR__.'/../../Fixtures/Resources/views/this.is.a.template.format.engine'), \$locator->locate(\$template));
    }

    public function testThrowsExceptionWhenTemplateNotFound()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$errorMessage = 'FileLocator exception message';

        \$fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->willThrowException(new \\InvalidArgumentException(\$errorMessage))
        ;

        \$locator = new TemplateLocator(\$fileLocator);

        try {
            \$locator->locate(\$template);
            \$this->fail('->locate() should throw an exception when the file is not found.');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString(
                \$errorMessage,
                \$e->getMessage(),
                'TemplateLocator exception should propagate the FileLocator exception message'
            );
        }
    }

    public function testThrowsAnExceptionWhenTemplateIsNotATemplateReferenceInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$locator = new TemplateLocator(\$this->getFileLocator());
        \$locator->locate('template');
    }

    protected function getFileLocator()
    {
        return \$this
            ->getMockBuilder('Symfony\\Component\\Config\\FileLocator')
            ->setMethods(['locate'])
            ->setConstructorArgs(['/path/to/fallback'])
            ->getMock()
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Loader;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateLocatorTest extends TestCase
{
    public function testLocateATemplate()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->with(\$template->getPath())
            ->willReturn('/path/to/template')
        ;

        \$locator = new TemplateLocator(\$fileLocator);

        \$this->assertEquals('/path/to/template', \$locator->locate(\$template));

        // Assert cache is used as \$fileLocator->locate should be called only once
        \$this->assertEquals('/path/to/template', \$locator->locate(\$template));
    }

    public function testLocateATemplateFromCacheDir()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$locator = new TemplateLocator(\$fileLocator, __DIR__.'/../../Fixtures');

        \$this->assertEquals(realpath(__DIR__.'/../../Fixtures/Resources/views/this.is.a.template.format.engine'), \$locator->locate(\$template));
    }

    public function testThrowsExceptionWhenTemplateNotFound()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$fileLocator = \$this->getFileLocator();

        \$errorMessage = 'FileLocator exception message';

        \$fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->willThrowException(new \\InvalidArgumentException(\$errorMessage))
        ;

        \$locator = new TemplateLocator(\$fileLocator);

        try {
            \$locator->locate(\$template);
            \$this->fail('->locate() should throw an exception when the file is not found.');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString(
                \$errorMessage,
                \$e->getMessage(),
                'TemplateLocator exception should propagate the FileLocator exception message'
            );
        }
    }

    public function testThrowsAnExceptionWhenTemplateIsNotATemplateReferenceInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$locator = new TemplateLocator(\$this->getFileLocator());
        \$locator->locate('template');
    }

    protected function getFileLocator()
    {
        return \$this
            ->getMockBuilder('Symfony\\Component\\Config\\FileLocator')
            ->setMethods(['locate'])
            ->setConstructorArgs(['/path/to/fallback'])
            ->getMock()
        ;
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Loader/TemplateLocatorTest.php");
    }
}
