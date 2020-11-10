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

/* vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php */
class __TwigTemplate_7ed03ecb94e430cefcf0db98de7d954d39d8b30b5f6ef20b332059d3359b1c4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BaseBundle\\BaseBundle;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateFinderTest extends TestCase
{
    public function testFindAllTemplates()
    {
        \$kernel = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
        ;

        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn(['BaseBundle' => new BaseBundle()])
        ;

        \$parser = new TemplateFilenameParser();

        \$finder = new TemplateFinder(\$kernel, \$parser, __DIR__.'/../Fixtures/Resources');

        \$templates = array_map(
            function (\$template) { return \$template->getLogicalName(); },
            \$finder->findAllTemplates()
        );

        \$this->assertCount(7, \$templates, '->findAllTemplates() find all templates in the bundles and global folders');
        \$this->assertContains('BaseBundle::base.format.engine', \$templates);
        \$this->assertContains('BaseBundle::this.is.a.template.format.engine', \$templates);
        \$this->assertContains('BaseBundle:controller:base.format.engine', \$templates);
        \$this->assertContains('BaseBundle:controller:custom.format.engine', \$templates);
        \$this->assertContains('::this.is.a.template.format.engine', \$templates);
        \$this->assertContains('::resource.format.engine', \$templates);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BaseBundle\\BaseBundle;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateFinderTest extends TestCase
{
    public function testFindAllTemplates()
    {
        \$kernel = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
        ;

        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn(['BaseBundle' => new BaseBundle()])
        ;

        \$parser = new TemplateFilenameParser();

        \$finder = new TemplateFinder(\$kernel, \$parser, __DIR__.'/../Fixtures/Resources');

        \$templates = array_map(
            function (\$template) { return \$template->getLogicalName(); },
            \$finder->findAllTemplates()
        );

        \$this->assertCount(7, \$templates, '->findAllTemplates() find all templates in the bundles and global folders');
        \$this->assertContains('BaseBundle::base.format.engine', \$templates);
        \$this->assertContains('BaseBundle::this.is.a.template.format.engine', \$templates);
        \$this->assertContains('BaseBundle:controller:base.format.engine', \$templates);
        \$this->assertContains('BaseBundle:controller:custom.format.engine', \$templates);
        \$this->assertContains('::this.is.a.template.format.engine', \$templates);
        \$this->assertContains('::resource.format.engine', \$templates);
    }
}
", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplateFinderTest.php");
    }
}
