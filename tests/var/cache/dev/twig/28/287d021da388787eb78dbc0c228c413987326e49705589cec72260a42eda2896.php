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

/* vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php */
class __TwigTemplate_87068f3ababf1f26a22ecc35e3ffe431e39d35d0fab7ba8801a3050879014cad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand\\Fixture\\TestAppKernel;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Config\\ConfigCacheFactory;
use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

class CacheClearCommandTest extends TestCase
{
    /** @var TestAppKernel */
    private \$kernel;
    /** @var Filesystem */
    private \$fs;

    protected function setUp(): void
    {
        \$this->fs = new Filesystem();
        \$this->kernel = new TestAppKernel('test', true);
        \$this->fs->mkdir(\$this->kernel->getProjectDir());
    }

    protected function tearDown(): void
    {
        \$this->fs->remove(\$this->kernel->getProjectDir());
    }

    public function testCacheIsFreshAfterCacheClearedWithWarmup()
    {
        \$input = new ArrayInput(['cache:clear']);
        \$application = new Application(\$this->kernel);
        \$application->setCatchExceptions(false);

        \$application->doRun(\$input, new NullOutput());

        // Ensure that all *.meta files are fresh
        \$finder = new Finder();
        \$metaFiles = \$finder->files()->in(\$this->kernel->getCacheDir())->name('*.php.meta');
        // check that cache is warmed up
        \$this->assertNotEmpty(\$metaFiles);
        \$configCacheFactory = new ConfigCacheFactory(true);

        foreach (\$metaFiles as \$file) {
            \$configCacheFactory->cache(substr(\$file, 0, -5), function () use (\$file) {
                \$this->fail(sprintf('Meta file \"%s\" is not fresh', (string) \$file));
            });
        }

        // check that app kernel file present in meta file of container's cache
        \$containerClass = \$this->kernel->getContainer()->getParameter('kernel.container_class');
        \$containerRef = new \\ReflectionClass(\$containerClass);
        \$containerFile = \\dirname(\$containerRef->getFileName(), 2).'/'.\$containerClass.'.php';
        \$containerMetaFile = \$containerFile.'.meta';
        \$kernelRef = new \\ReflectionObject(\$this->kernel);
        \$kernelFile = \$kernelRef->getFileName();
        /** @var ResourceInterface[] \$meta */
        \$meta = unserialize(file_get_contents(\$containerMetaFile));
        \$found = false;
        foreach (\$meta as \$resource) {
            if ((string) \$resource === \$kernelFile) {
                \$found = true;
                break;
            }
        }
        \$this->assertTrue(\$found, 'Kernel file should present as resource');

        \$containerRef = new \\ReflectionClass(require \$containerFile);
        \$containerFile = str_replace('tes_'.\\DIRECTORY_SEPARATOR, 'test'.\\DIRECTORY_SEPARATOR, \$containerRef->getFileName());
        \$this->assertRegExp(sprintf('/\\'kernel.container_class\\'\\s*=>\\s*\\'%s\\'/', \$containerClass), file_get_contents(\$containerFile), 'kernel.container_class is properly set on the dumped container');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand\\Fixture\\TestAppKernel;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Config\\ConfigCacheFactory;
use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

class CacheClearCommandTest extends TestCase
{
    /** @var TestAppKernel */
    private \$kernel;
    /** @var Filesystem */
    private \$fs;

    protected function setUp(): void
    {
        \$this->fs = new Filesystem();
        \$this->kernel = new TestAppKernel('test', true);
        \$this->fs->mkdir(\$this->kernel->getProjectDir());
    }

    protected function tearDown(): void
    {
        \$this->fs->remove(\$this->kernel->getProjectDir());
    }

    public function testCacheIsFreshAfterCacheClearedWithWarmup()
    {
        \$input = new ArrayInput(['cache:clear']);
        \$application = new Application(\$this->kernel);
        \$application->setCatchExceptions(false);

        \$application->doRun(\$input, new NullOutput());

        // Ensure that all *.meta files are fresh
        \$finder = new Finder();
        \$metaFiles = \$finder->files()->in(\$this->kernel->getCacheDir())->name('*.php.meta');
        // check that cache is warmed up
        \$this->assertNotEmpty(\$metaFiles);
        \$configCacheFactory = new ConfigCacheFactory(true);

        foreach (\$metaFiles as \$file) {
            \$configCacheFactory->cache(substr(\$file, 0, -5), function () use (\$file) {
                \$this->fail(sprintf('Meta file \"%s\" is not fresh', (string) \$file));
            });
        }

        // check that app kernel file present in meta file of container's cache
        \$containerClass = \$this->kernel->getContainer()->getParameter('kernel.container_class');
        \$containerRef = new \\ReflectionClass(\$containerClass);
        \$containerFile = \\dirname(\$containerRef->getFileName(), 2).'/'.\$containerClass.'.php';
        \$containerMetaFile = \$containerFile.'.meta';
        \$kernelRef = new \\ReflectionObject(\$this->kernel);
        \$kernelFile = \$kernelRef->getFileName();
        /** @var ResourceInterface[] \$meta */
        \$meta = unserialize(file_get_contents(\$containerMetaFile));
        \$found = false;
        foreach (\$meta as \$resource) {
            if ((string) \$resource === \$kernelFile) {
                \$found = true;
                break;
            }
        }
        \$this->assertTrue(\$found, 'Kernel file should present as resource');

        \$containerRef = new \\ReflectionClass(require \$containerFile);
        \$containerFile = str_replace('tes_'.\\DIRECTORY_SEPARATOR, 'test'.\\DIRECTORY_SEPARATOR, \$containerRef->getFileName());
        \$this->assertRegExp(sprintf('/\\'kernel.container_class\\'\\s*=>\\s*\\'%s\\'/', \$containerClass), file_get_contents(\$containerFile), 'kernel.container_class is properly set on the dumped container');
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/CacheClearCommandTest.php");
    }
}
