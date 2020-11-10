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

/* vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php */
class __TwigTemplate_5d73d6801fe6f155995942a8ea54ffa2c2e39df64c4fec88f92f190a552c1099 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * @group legacy
 */
class CacheWarmingTest extends TestCase
{
    public function testCacheIsProperlyWarmedWhenTemplatingIsAvailable()
    {
        \$kernel = new CacheWarmingKernel(true);
        \$kernel->boot();

        \$warmer = \$kernel->getContainer()->get('cache_warmer');
        \$warmer->enableOptionalWarmers();
        \$warmer->warmUp(\$kernel->getCacheDir());

        \$this->assertFileExists(\$kernel->getCacheDir().'/twig');
    }

    public function testCacheIsProperlyWarmedWhenTemplatingIsDisabled()
    {
        \$kernel = new CacheWarmingKernel(false);
        \$kernel->boot();

        \$warmer = \$kernel->getContainer()->get('cache_warmer');
        \$warmer->enableOptionalWarmers();
        \$warmer->warmUp(\$kernel->getCacheDir());

        \$this->assertFileExists(\$kernel->getCacheDir().'/twig');
    }

    protected function setUp(): void
    {
        \$this->deleteTempDir();
    }

    protected function tearDown(): void
    {
        \$this->deleteTempDir();
    }

    private function deleteTempDir()
    {
        if (!file_exists(\$dir = sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel')) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }
}

class CacheWarmingKernel extends Kernel
{
    private \$withTemplating;

    public function __construct(\$withTemplating)
    {
        \$this->withTemplating = \$withTemplating;

        parent::__construct((\$withTemplating ? 'with' : 'without').'_templating', true);
    }

    public function getName()
    {
        return 'CacheWarming';
    }

    public function registerBundles()
    {
        return [new FrameworkBundle(), new TwigBundle()];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (\$container) {
            \$container
                ->loadFromExtension('framework', [
                    'secret' => '\$ecret',
                    'form' => ['enabled' => false],
                ])
                ->loadFromExtension('twig', [ // to be removed in 5.0 relying on default
                    'strict_variables' => false,
                ])
            ;
        });

        if (\$this->withTemplating) {
            \$loader->load(function (\$container) {
                \$container->loadFromExtension('framework', [
                    'secret' => '\$ecret',
                    'templating' => ['engines' => ['twig']],
                    'router' => ['resource' => '%kernel.project_dir%/Resources/config/empty_routing.yml'],
                    'form' => ['enabled' => false],
                ]);
            });
        }
    }

    public function getProjectDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel/log';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * @group legacy
 */
class CacheWarmingTest extends TestCase
{
    public function testCacheIsProperlyWarmedWhenTemplatingIsAvailable()
    {
        \$kernel = new CacheWarmingKernel(true);
        \$kernel->boot();

        \$warmer = \$kernel->getContainer()->get('cache_warmer');
        \$warmer->enableOptionalWarmers();
        \$warmer->warmUp(\$kernel->getCacheDir());

        \$this->assertFileExists(\$kernel->getCacheDir().'/twig');
    }

    public function testCacheIsProperlyWarmedWhenTemplatingIsDisabled()
    {
        \$kernel = new CacheWarmingKernel(false);
        \$kernel->boot();

        \$warmer = \$kernel->getContainer()->get('cache_warmer');
        \$warmer->enableOptionalWarmers();
        \$warmer->warmUp(\$kernel->getCacheDir());

        \$this->assertFileExists(\$kernel->getCacheDir().'/twig');
    }

    protected function setUp(): void
    {
        \$this->deleteTempDir();
    }

    protected function tearDown(): void
    {
        \$this->deleteTempDir();
    }

    private function deleteTempDir()
    {
        if (!file_exists(\$dir = sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel')) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }
}

class CacheWarmingKernel extends Kernel
{
    private \$withTemplating;

    public function __construct(\$withTemplating)
    {
        \$this->withTemplating = \$withTemplating;

        parent::__construct((\$withTemplating ? 'with' : 'without').'_templating', true);
    }

    public function getName()
    {
        return 'CacheWarming';
    }

    public function registerBundles()
    {
        return [new FrameworkBundle(), new TwigBundle()];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (\$container) {
            \$container
                ->loadFromExtension('framework', [
                    'secret' => '\$ecret',
                    'form' => ['enabled' => false],
                ])
                ->loadFromExtension('twig', [ // to be removed in 5.0 relying on default
                    'strict_variables' => false,
                ])
            ;
        });

        if (\$this->withTemplating) {
            \$loader->load(function (\$container) {
                \$container->loadFromExtension('framework', [
                    'secret' => '\$ecret',
                    'templating' => ['engines' => ['twig']],
                    'router' => ['resource' => '%kernel.project_dir%/Resources/config/empty_routing.yml'],
                    'form' => ['enabled' => false],
                ]);
            });
        }
    }

    public function getProjectDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/CacheWarmingKernel/log';
    }
}
", "vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Functional/CacheWarmingTest.php");
    }
}
