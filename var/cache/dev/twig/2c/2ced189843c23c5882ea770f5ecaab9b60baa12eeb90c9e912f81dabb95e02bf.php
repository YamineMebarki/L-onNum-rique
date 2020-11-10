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

/* vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php */
class __TwigTemplate_6d6a8bbaf0c6714851df39bc0cac2e77bcbe213968a11aae3349502ce88addc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Loader;

use Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * @group legacy
 */
class FilesystemLoaderTest extends TestCase
{
    public function testGetSourceContext()
    {
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(__DIR__.'/../DependencyInjection/Fixtures/templates/layout.html.twig')
        ;
        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates', 'namespace');

        // Twig-style
        \$this->assertEquals(\"This is a layout\\n\", \$loader->getSourceContext('@namespace/layout.html.twig')->getCode());

        // Symfony-style
        \$this->assertEquals(\"This is a layout\\n\", \$loader->getSourceContext('TwigBundle::layout.html.twig')->getCode());
    }

    public function testExists()
    {
        // should return true for templates that Twig does not find, but Symfony does
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(\$template = __DIR__.'/../DependencyInjection/Fixtures/templates/layout.html.twig')
        ;
        \$loader = new FilesystemLoader(\$locator, \$parser);

        \$this->assertTrue(\$loader->exists(\$template));
    }

    public function testTwigErrorIfLocatorThrowsInvalid()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$parser
            ->expects(\$this->once())
            ->method('parse')
            ->with('name.format.engine')
            ->willReturn(\$this->getMockBuilder(TemplateReferenceInterface::class)->getMock())
        ;

        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willThrowException(new \\InvalidArgumentException('Unable to find template \"NonExistent\".'))
        ;

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->getCacheKey('name.format.engine');
    }

    public function testTwigErrorIfLocatorReturnsFalse()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$parser
            ->expects(\$this->once())
            ->method('parse')
            ->with('name.format.engine')
            ->willReturn(\$this->getMockBuilder(TemplateReferenceInterface::class)->getMock())
        ;

        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(false)
        ;

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->getCacheKey('name.format.engine');
    }

    public function testTwigErrorIfTemplateDoesNotExist()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessageRegExp('/Unable to find template \"name\\.format\\.engine\" \\(looked into: .*Tests.Loader.\\.\\..DependencyInjection.Fixtures.templates\\)/');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates');

        \$method = new \\ReflectionMethod('Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader', 'findTemplate');
        \$method->setAccessible(true);
        \$method->invoke(\$loader, 'name.format.engine');
    }

    public function testTwigSoftErrorIfTemplateDoesNotExist()
    {
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates');

        \$method = new \\ReflectionMethod('Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader', 'findTemplate');
        \$method->setAccessible(true);
        \$this->assertFalse(\$method->invoke(\$loader, 'name.format.engine', false));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Loader;

use Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * @group legacy
 */
class FilesystemLoaderTest extends TestCase
{
    public function testGetSourceContext()
    {
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(__DIR__.'/../DependencyInjection/Fixtures/templates/layout.html.twig')
        ;
        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates', 'namespace');

        // Twig-style
        \$this->assertEquals(\"This is a layout\\n\", \$loader->getSourceContext('@namespace/layout.html.twig')->getCode());

        // Symfony-style
        \$this->assertEquals(\"This is a layout\\n\", \$loader->getSourceContext('TwigBundle::layout.html.twig')->getCode());
    }

    public function testExists()
    {
        // should return true for templates that Twig does not find, but Symfony does
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(\$template = __DIR__.'/../DependencyInjection/Fixtures/templates/layout.html.twig')
        ;
        \$loader = new FilesystemLoader(\$locator, \$parser);

        \$this->assertTrue(\$loader->exists(\$template));
    }

    public function testTwigErrorIfLocatorThrowsInvalid()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$parser
            ->expects(\$this->once())
            ->method('parse')
            ->with('name.format.engine')
            ->willReturn(\$this->getMockBuilder(TemplateReferenceInterface::class)->getMock())
        ;

        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willThrowException(new \\InvalidArgumentException('Unable to find template \"NonExistent\".'))
        ;

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->getCacheKey('name.format.engine');
    }

    public function testTwigErrorIfLocatorReturnsFalse()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$parser
            ->expects(\$this->once())
            ->method('parse')
            ->with('name.format.engine')
            ->willReturn(\$this->getMockBuilder(TemplateReferenceInterface::class)->getMock())
        ;

        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();
        \$locator
            ->expects(\$this->once())
            ->method('locate')
            ->willReturn(false)
        ;

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->getCacheKey('name.format.engine');
    }

    public function testTwigErrorIfTemplateDoesNotExist()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessageRegExp('/Unable to find template \"name\\.format\\.engine\" \\(looked into: .*Tests.Loader.\\.\\..DependencyInjection.Fixtures.templates\\)/');
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates');

        \$method = new \\ReflectionMethod('Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader', 'findTemplate');
        \$method->setAccessible(true);
        \$method->invoke(\$loader, 'name.format.engine');
    }

    public function testTwigSoftErrorIfTemplateDoesNotExist()
    {
        \$parser = \$this->getMockBuilder('Symfony\\Component\\Templating\\TemplateNameParserInterface')->getMock();
        \$locator = \$this->getMockBuilder('Symfony\\Component\\Config\\FileLocatorInterface')->getMock();

        \$loader = new FilesystemLoader(\$locator, \$parser);
        \$loader->addPath(__DIR__.'/../DependencyInjection/Fixtures/templates');

        \$method = new \\ReflectionMethod('Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader', 'findTemplate');
        \$method->setAccessible(true);
        \$this->assertFalse(\$method->invoke(\$loader, 'name.format.engine', false));
    }
}
", "vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Loader/FilesystemLoaderTest.php");
    }
}
