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

/* vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php */
class __TwigTemplate_9f97b19a3f289c8166c3d73bc24e828cd02106ba476fcc75bd9c2367f6102f92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinderInterface;
use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * @group legacy
 */
class TemplatePathsCacheWarmerTest extends TestCase
{
    /** @var Filesystem */
    private \$filesystem;

    /** @var TemplateFinderInterface */
    private \$templateFinder;

    /** @var FileLocator */
    private \$fileLocator;

    /** @var TemplateLocator */
    private \$templateLocator;

    private \$tmpDir;

    protected function setUp(): void
    {
        \$this->templateFinder = \$this
            ->getMockBuilder(TemplateFinderInterface::class)
            ->setMethods(['findAllTemplates'])
            ->getMock();

        \$this->fileLocator = \$this
            ->getMockBuilder(FileLocator::class)
            ->setMethods(['locate'])
            ->setConstructorArgs(['/path/to/fallback'])
            ->getMock();

        \$this->templateLocator = new TemplateLocator(\$this->fileLocator);

        \$this->tmpDir = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.uniqid('cache_template_paths_', true);

        \$this->filesystem = new Filesystem();
        \$this->filesystem->mkdir(\$this->tmpDir);
    }

    protected function tearDown(): void
    {
        \$this->filesystem->remove(\$this->tmpDir);
    }

    public function testWarmUp()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$this->templateFinder
            ->expects(\$this->once())
            ->method('findAllTemplates')
            ->willReturn([\$template]);

        \$this->fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->with(\$template->getPath())
            ->willReturn(\\dirname(\$this->tmpDir).'/path/to/template.html.twig');

        \$warmer = new TemplatePathsCacheWarmer(\$this->templateFinder, \$this->templateLocator);
        \$warmer->warmUp(\$this->tmpDir);

        \$this->assertFileEquals(__DIR__.'/../Fixtures/TemplatePathsCache/templates.php', \$this->tmpDir.'/templates.php');
    }

    public function testWarmUpEmpty()
    {
        \$this->templateFinder
            ->expects(\$this->once())
            ->method('findAllTemplates')
            ->willReturn([]);

        \$this->fileLocator
            ->expects(\$this->never())
            ->method('locate');

        \$warmer = new TemplatePathsCacheWarmer(\$this->templateFinder, \$this->templateLocator);
        \$warmer->warmUp(\$this->tmpDir);

        \$this->assertFileExists(\$this->tmpDir.'/templates.php');
        \$this->assertSame(file_get_contents(__DIR__.'/../Fixtures/TemplatePathsCache/templates-empty.php'), file_get_contents(\$this->tmpDir.'/templates.php'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php";
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

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinderInterface;
use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * @group legacy
 */
class TemplatePathsCacheWarmerTest extends TestCase
{
    /** @var Filesystem */
    private \$filesystem;

    /** @var TemplateFinderInterface */
    private \$templateFinder;

    /** @var FileLocator */
    private \$fileLocator;

    /** @var TemplateLocator */
    private \$templateLocator;

    private \$tmpDir;

    protected function setUp(): void
    {
        \$this->templateFinder = \$this
            ->getMockBuilder(TemplateFinderInterface::class)
            ->setMethods(['findAllTemplates'])
            ->getMock();

        \$this->fileLocator = \$this
            ->getMockBuilder(FileLocator::class)
            ->setMethods(['locate'])
            ->setConstructorArgs(['/path/to/fallback'])
            ->getMock();

        \$this->templateLocator = new TemplateLocator(\$this->fileLocator);

        \$this->tmpDir = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.uniqid('cache_template_paths_', true);

        \$this->filesystem = new Filesystem();
        \$this->filesystem->mkdir(\$this->tmpDir);
    }

    protected function tearDown(): void
    {
        \$this->filesystem->remove(\$this->tmpDir);
    }

    public function testWarmUp()
    {
        \$template = new TemplateReference('bundle', 'controller', 'name', 'format', 'engine');

        \$this->templateFinder
            ->expects(\$this->once())
            ->method('findAllTemplates')
            ->willReturn([\$template]);

        \$this->fileLocator
            ->expects(\$this->once())
            ->method('locate')
            ->with(\$template->getPath())
            ->willReturn(\\dirname(\$this->tmpDir).'/path/to/template.html.twig');

        \$warmer = new TemplatePathsCacheWarmer(\$this->templateFinder, \$this->templateLocator);
        \$warmer->warmUp(\$this->tmpDir);

        \$this->assertFileEquals(__DIR__.'/../Fixtures/TemplatePathsCache/templates.php', \$this->tmpDir.'/templates.php');
    }

    public function testWarmUpEmpty()
    {
        \$this->templateFinder
            ->expects(\$this->once())
            ->method('findAllTemplates')
            ->willReturn([]);

        \$this->fileLocator
            ->expects(\$this->never())
            ->method('locate');

        \$warmer = new TemplatePathsCacheWarmer(\$this->templateFinder, \$this->templateLocator);
        \$warmer->warmUp(\$this->tmpDir);

        \$this->assertFileExists(\$this->tmpDir.'/templates.php');
        \$this->assertSame(file_get_contents(__DIR__.'/../Fixtures/TemplatePathsCache/templates-empty.php'), file_get_contents(\$this->tmpDir.'/templates.php'));
    }
}
", "vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/CacheWarmer/TemplatePathsCacheWarmerTest.php");
    }
}
