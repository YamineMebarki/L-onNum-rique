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

/* vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php */
class __TwigTemplate_0ba32b4eeb76add1343d19230e371b321ace6c712c54cd61bd6faf7658e82ae0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\app;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
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
        if (!\$fs->isAbsolutePath(\$rootConfig) && !is_file(\$rootConfig = __DIR__.'/'.\$testCase.'/'.\$rootConfig)) {
            throw new \\InvalidArgumentException(sprintf('The root config \"%s\" does not exist.', \$rootConfig));
        }
        \$this->rootConfig = \$rootConfig;

        parent::__construct(\$environment, \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function getContainerClass()
    {
        return parent::getContainerClass().substr(md5(\$this->rootConfig), -16);
    }

    public function registerBundles()
    {
        if (!is_file(\$filename = \$this->getProjectDir().'/'.\$this->testCase.'/bundles.php')) {
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

    public function serialize()
    {
        return serialize([\$this->varDir, \$this->testCase, \$this->rootConfig, \$this->getEnvironment(), \$this->isDebug()]);
    }

    public function unserialize(\$str)
    {
        \$a = unserialize(\$str);
        \$this->__construct(\$a[0], \$a[1], \$a[2], \$a[3], \$a[4]);
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
        return "vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\app;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
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
        if (!\$fs->isAbsolutePath(\$rootConfig) && !is_file(\$rootConfig = __DIR__.'/'.\$testCase.'/'.\$rootConfig)) {
            throw new \\InvalidArgumentException(sprintf('The root config \"%s\" does not exist.', \$rootConfig));
        }
        \$this->rootConfig = \$rootConfig;

        parent::__construct(\$environment, \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function getContainerClass()
    {
        return parent::getContainerClass().substr(md5(\$this->rootConfig), -16);
    }

    public function registerBundles()
    {
        if (!is_file(\$filename = \$this->getProjectDir().'/'.\$this->testCase.'/bundles.php')) {
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

    public function serialize()
    {
        return serialize([\$this->varDir, \$this->testCase, \$this->rootConfig, \$this->getEnvironment(), \$this->isDebug()]);
    }

    public function unserialize(\$str)
    {
        \$a = unserialize(\$str);
        \$this->__construct(\$a[0], \$a[1], \$a[2], \$a[3], \$a[4]);
    }

    protected function getKernelParameters()
    {
        \$parameters = parent::getKernelParameters();
        \$parameters['kernel.test_case'] = \$this->testCase;

        return \$parameters;
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/AppKernel.php");
    }
}
