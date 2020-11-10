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

/* vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php */
class __TwigTemplate_8a6cf8701d011c806cfb9d71609b613144d78c2f9bbf95192641ed9f5738e4d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Templating\\TemplateReference as BaseTemplateReference;

/**
 * @group legacy
 */
class TemplateNameParserTest extends TestCase
{
    protected \$parser;

    protected function setUp(): void
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
            ->willReturnCallback(function (\$bundle) {
                if (\\in_array(\$bundle, ['SensioFooBundle', 'SensioCmsFooBundle', 'FooBundle'])) {
                    return true;
                }

                throw new \\InvalidArgumentException();
            })
        ;
        \$this->parser = new TemplateNameParser(\$kernel);
    }

    protected function tearDown(): void
    {
        \$this->parser = null;
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParse(\$name, \$logicalName, \$path, \$ref)
    {
        \$template = \$this->parser->parse(\$name);

        \$this->assertSame(\$ref->getLogicalName(), \$template->getLogicalName());
        \$this->assertSame(\$logicalName, \$template->getLogicalName());
        \$this->assertSame(\$path, \$template->getPath());
    }

    public function parseProvider()
    {
        return [
            ['FooBundle:Post:site.html.php', 'FooBundle:Post:site.html.php', '@FooBundle/Resources/views/Post/site.html.php', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'php')],
            ['FooBundle:Post:site.html.twig', 'FooBundle:Post:site.html.twig', '@FooBundle/Resources/views/Post/site.html.twig', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'twig')],
            ['FooBundle:Post:index.xml.php', 'FooBundle:Post:index.xml.php', '@FooBundle/Resources/views/Post/index.xml.php', new TemplateReference('FooBundle', 'Post', 'index', 'xml', 'php')],
            ['SensioFooBundle:Post:site.html.php', 'SensioFooBundle:Post:site.html.php', '@SensioFooBundle/Resources/views/Post/site.html.php', new TemplateReference('SensioFooBundle', 'Post', 'index', 'html', 'php')],
            ['SensioCmsFooBundle:Post:site.html.php', 'SensioCmsFooBundle:Post:site.html.php', '@SensioCmsFooBundle/Resources/views/Post/site.html.php', new TemplateReference('SensioCmsFooBundle', 'Post', 'index', 'html', 'php')],
            [':Post:site.html.php', ':Post:site.html.php', 'views/Post/site.html.php', new TemplateReference('', 'Post', 'index', 'html', 'php')],
            ['::site.html.php', '::site.html.php', 'views/site.html.php', new TemplateReference('', '', 'index', 'html', 'php')],
            ['site.html.php', '::site.html.php', 'views/site.html.php', new TemplateReference('', '', 'index', 'html', 'php')],
            ['FooBundle:Post:foo.bar.site.html.php', 'FooBundle:Post:foo.bar.site.html.php', '@FooBundle/Resources/views/Post/foo.bar.site.html.php', new TemplateReference('FooBundle', 'Post', 'foo.bar.index', 'html', 'php')],
            ['@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', new BaseTemplateReference('@FooBundle/Resources/views/layout.html.twig', 'twig')],
            ['@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', new BaseTemplateReference('@FooBundle/Foo/layout.html.twig', 'twig')],
            ['name.twig', 'name.twig', 'name.twig', new BaseTemplateReference('name.twig', 'twig')],
            ['name', 'name', 'name', new BaseTemplateReference('name')],
            ['default/site.html.php', '::default/site.html.php', 'views/default/site.html.php', new TemplateReference(null, null, 'default/index', 'html', 'php')],
        ];
    }

    public function testParseValidNameWithNotFoundBundle()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->parser->parse('BarBundle:Post:site.html.php');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Templating\\TemplateReference as BaseTemplateReference;

/**
 * @group legacy
 */
class TemplateNameParserTest extends TestCase
{
    protected \$parser;

    protected function setUp(): void
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
            ->willReturnCallback(function (\$bundle) {
                if (\\in_array(\$bundle, ['SensioFooBundle', 'SensioCmsFooBundle', 'FooBundle'])) {
                    return true;
                }

                throw new \\InvalidArgumentException();
            })
        ;
        \$this->parser = new TemplateNameParser(\$kernel);
    }

    protected function tearDown(): void
    {
        \$this->parser = null;
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParse(\$name, \$logicalName, \$path, \$ref)
    {
        \$template = \$this->parser->parse(\$name);

        \$this->assertSame(\$ref->getLogicalName(), \$template->getLogicalName());
        \$this->assertSame(\$logicalName, \$template->getLogicalName());
        \$this->assertSame(\$path, \$template->getPath());
    }

    public function parseProvider()
    {
        return [
            ['FooBundle:Post:site.html.php', 'FooBundle:Post:site.html.php', '@FooBundle/Resources/views/Post/site.html.php', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'php')],
            ['FooBundle:Post:site.html.twig', 'FooBundle:Post:site.html.twig', '@FooBundle/Resources/views/Post/site.html.twig', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'twig')],
            ['FooBundle:Post:index.xml.php', 'FooBundle:Post:index.xml.php', '@FooBundle/Resources/views/Post/index.xml.php', new TemplateReference('FooBundle', 'Post', 'index', 'xml', 'php')],
            ['SensioFooBundle:Post:site.html.php', 'SensioFooBundle:Post:site.html.php', '@SensioFooBundle/Resources/views/Post/site.html.php', new TemplateReference('SensioFooBundle', 'Post', 'index', 'html', 'php')],
            ['SensioCmsFooBundle:Post:site.html.php', 'SensioCmsFooBundle:Post:site.html.php', '@SensioCmsFooBundle/Resources/views/Post/site.html.php', new TemplateReference('SensioCmsFooBundle', 'Post', 'index', 'html', 'php')],
            [':Post:site.html.php', ':Post:site.html.php', 'views/Post/site.html.php', new TemplateReference('', 'Post', 'index', 'html', 'php')],
            ['::site.html.php', '::site.html.php', 'views/site.html.php', new TemplateReference('', '', 'index', 'html', 'php')],
            ['site.html.php', '::site.html.php', 'views/site.html.php', new TemplateReference('', '', 'index', 'html', 'php')],
            ['FooBundle:Post:foo.bar.site.html.php', 'FooBundle:Post:foo.bar.site.html.php', '@FooBundle/Resources/views/Post/foo.bar.site.html.php', new TemplateReference('FooBundle', 'Post', 'foo.bar.index', 'html', 'php')],
            ['@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', new BaseTemplateReference('@FooBundle/Resources/views/layout.html.twig', 'twig')],
            ['@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', new BaseTemplateReference('@FooBundle/Foo/layout.html.twig', 'twig')],
            ['name.twig', 'name.twig', 'name.twig', new BaseTemplateReference('name.twig', 'twig')],
            ['name', 'name', 'name', new BaseTemplateReference('name')],
            ['default/site.html.php', '::default/site.html.php', 'views/default/site.html.php', new TemplateReference(null, null, 'default/index', 'html', 'php')],
        ];
    }

    public function testParseValidNameWithNotFoundBundle()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->parser->parse('BarBundle:Post:site.html.php');
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/TemplateNameParserTest.php");
    }
}
