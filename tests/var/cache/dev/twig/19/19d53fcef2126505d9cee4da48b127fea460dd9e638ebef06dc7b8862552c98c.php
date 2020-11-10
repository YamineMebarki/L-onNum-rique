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

/* vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php */
class __TwigTemplate_7b0189cb8ae121cefb89c1e6c86d7b7192790cbb2306af5979b902ea9d111190 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\app;

use Psr\\Log\\NullLogger;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * App DevLaon Kernel for functional tests.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AppKernel extends Kernel
{
    private \$varDir;
    private \$testCase;
    private \$rootConfig;

    public function __construct(\$varDir, \$testCase, \$rootConfig, \$environment, \$debug)
    {
        if (!is_dir(__DIR__.'/'.\$testCase)) {
            throw new \\InvalidArgumentException(sprintf('The test case \"%s\" does not exist.', \$testCase));
        }
        \$this->varDir = \$varDir;
        \$this->testCase = \$testCase;

        \$fs = new Filesystem();
        if (!\$fs->isAbsolutePath(\$rootConfig) && !file_exists(\$rootConfig = __DIR__.'/'.\$testCase.'/'.\$rootConfig)) {
            throw new \\InvalidArgumentException(sprintf('The root config \"%s\" does not exist.', \$rootConfig));
        }
        \$this->rootConfig = \$rootConfig;

        parent::__construct(\$environment, \$debug);
    }

    public function registerBundles()
    {
        if (!file_exists(\$filename = \$this->getProjectDir().'/'.\$this->testCase.'/bundles.php')) {
            throw new \\RuntimeException(sprintf('The bundles file \"%s\" does not exist.', \$filename));
        }

        return include \$filename;
    }

    public function getProjectDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.\$this->varDir.'/'.\$this->testCase.'/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.\$this->varDir.'/'.\$this->testCase.'/log';
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(\$this->rootConfig);
    }

    protected function build(ContainerBuilder \$container)
    {
        \$container->register('logger', NullLogger::class);
    }

    public function __sleep()
    {
        return ['varDir', 'testCase', 'rootConfig', 'environment', 'debug'];
    }

    public function __wakeup()
    {
        \$this->__construct(\$this->varDir, \$this->testCase, \$this->rootConfig, \$this->environment, \$this->debug);
    }

    protected function getKernelParameters()
    {
        \$parameters = parent::getKernelParameters();
        \$parameters['kernel.test_case'] = \$this->testCase;

        return \$parameters;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\app;

use Psr\\Log\\NullLogger;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * App DevLaon Kernel for functional tests.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AppKernel extends Kernel
{
    private \$varDir;
    private \$testCase;
    private \$rootConfig;

    public function __construct(\$varDir, \$testCase, \$rootConfig, \$environment, \$debug)
    {
        if (!is_dir(__DIR__.'/'.\$testCase)) {
            throw new \\InvalidArgumentException(sprintf('The test case \"%s\" does not exist.', \$testCase));
        }
        \$this->varDir = \$varDir;
        \$this->testCase = \$testCase;

        \$fs = new Filesystem();
        if (!\$fs->isAbsolutePath(\$rootConfig) && !file_exists(\$rootConfig = __DIR__.'/'.\$testCase.'/'.\$rootConfig)) {
            throw new \\InvalidArgumentException(sprintf('The root config \"%s\" does not exist.', \$rootConfig));
        }
        \$this->rootConfig = \$rootConfig;

        parent::__construct(\$environment, \$debug);
    }

    public function registerBundles()
    {
        if (!file_exists(\$filename = \$this->getProjectDir().'/'.\$this->testCase.'/bundles.php')) {
            throw new \\RuntimeException(sprintf('The bundles file \"%s\" does not exist.', \$filename));
        }

        return include \$filename;
    }

    public function getProjectDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.\$this->varDir.'/'.\$this->testCase.'/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.\$this->varDir.'/'.\$this->testCase.'/log';
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(\$this->rootConfig);
    }

    protected function build(ContainerBuilder \$container)
    {
        \$container->register('logger', NullLogger::class);
    }

    public function __sleep()
    {
        return ['varDir', 'testCase', 'rootConfig', 'environment', 'debug'];
    }

    public function __wakeup()
    {
        \$this->__construct(\$this->varDir, \$this->testCase, \$this->rootConfig, \$this->environment, \$this->debug);
    }

    protected function getKernelParameters()
    {
        \$parameters = parent::getKernelParameters();
        \$parameters['kernel.test_case'] = \$this->testCase;

        return \$parameters;
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/AppKernel.php");
    }
}
