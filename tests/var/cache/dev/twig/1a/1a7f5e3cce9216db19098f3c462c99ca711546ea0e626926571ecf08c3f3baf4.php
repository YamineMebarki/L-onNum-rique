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

/* vendor/symfony/framework-bundle/Test/KernelTestCase.php */
class __TwigTemplate_41105e778b050424ba95936685103c83b8c8460e56bc47ccbdc3d9bca6030bba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/KernelTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/KernelTestCase.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * KernelTestCase is the base class for tests needing a Kernel.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class KernelTestCase extends TestCase
{
    use ForwardCompatTestTrait;

    protected static \$class;

    /**
     * @var KernelInterface
     */
    protected static \$kernel;

    /**
     * @var ContainerInterface
     */
    protected static \$container;

    private function doTearDown()
    {
        static::ensureKernelShutdown();
    }

    /**
     * @return string The Kernel class name
     *
     * @throws \\RuntimeException
     * @throws \\LogicException
     */
    protected static function getKernelClass()
    {
        if (!isset(\$_SERVER['KERNEL_CLASS']) && !isset(\$_ENV['KERNEL_CLASS'])) {
            throw new \\LogicException(sprintf('You must set the KERNEL_CLASS environment variable to the fully-qualified class name of your Kernel in phpunit.xml / phpunit.xml.dist or override the %1\$s::createKernel() or %1\$s::getKernelClass() method.', static::class));
        }

        if (!class_exists(\$class = \$_ENV['KERNEL_CLASS'] ?? \$_SERVER['KERNEL_CLASS'])) {
            throw new \\RuntimeException(sprintf('Class \"%s\" doesn\\'t exist or cannot be autoloaded. Check that the KERNEL_CLASS value in phpunit.xml matches the fully-qualified class name of your Kernel or override the %s::createKernel() method.', \$class, static::class));
        }

        return \$class;
    }

    /**
     * Boots the Kernel for this test.
     *
     * @return KernelInterface A KernelInterface instance
     */
    protected static function bootKernel(array \$options = [])
    {
        static::ensureKernelShutdown();

        static::\$kernel = static::createKernel(\$options);
        static::\$kernel->boot();

        \$container = static::\$kernel->getContainer();
        static::\$container = \$container->has('test.service_container') ? \$container->get('test.service_container') : \$container;

        return static::\$kernel;
    }

    /**
     * Creates a Kernel.
     *
     * Available options:
     *
     *  * environment
     *  * debug
     *
     * @return KernelInterface A KernelInterface instance
     */
    protected static function createKernel(array \$options = [])
    {
        if (null === static::\$class) {
            static::\$class = static::getKernelClass();
        }

        if (isset(\$options['environment'])) {
            \$env = \$options['environment'];
        } elseif (isset(\$_ENV['APP_ENV'])) {
            \$env = \$_ENV['APP_ENV'];
        } elseif (isset(\$_SERVER['APP_ENV'])) {
            \$env = \$_SERVER['APP_ENV'];
        } else {
            \$env = 'test';
        }

        if (isset(\$options['debug'])) {
            \$debug = \$options['debug'];
        } elseif (isset(\$_ENV['APP_DEBUG'])) {
            \$debug = \$_ENV['APP_DEBUG'];
        } elseif (isset(\$_SERVER['APP_DEBUG'])) {
            \$debug = \$_SERVER['APP_DEBUG'];
        } else {
            \$debug = true;
        }

        return new static::\$class(\$env, \$debug);
    }

    /**
     * Shuts the kernel down if it was used in the test - called by the tearDown method by default.
     */
    protected static function ensureKernelShutdown()
    {
        if (null !== static::\$kernel) {
            \$container = static::\$kernel->getContainer();
            static::\$kernel->shutdown();
            if (\$container instanceof ResetInterface) {
                \$container->reset();
            }
        }
        static::\$container = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Test/KernelTestCase.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * KernelTestCase is the base class for tests needing a Kernel.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class KernelTestCase extends TestCase
{
    use ForwardCompatTestTrait;

    protected static \$class;

    /**
     * @var KernelInterface
     */
    protected static \$kernel;

    /**
     * @var ContainerInterface
     */
    protected static \$container;

    private function doTearDown()
    {
        static::ensureKernelShutdown();
    }

    /**
     * @return string The Kernel class name
     *
     * @throws \\RuntimeException
     * @throws \\LogicException
     */
    protected static function getKernelClass()
    {
        if (!isset(\$_SERVER['KERNEL_CLASS']) && !isset(\$_ENV['KERNEL_CLASS'])) {
            throw new \\LogicException(sprintf('You must set the KERNEL_CLASS environment variable to the fully-qualified class name of your Kernel in phpunit.xml / phpunit.xml.dist or override the %1\$s::createKernel() or %1\$s::getKernelClass() method.', static::class));
        }

        if (!class_exists(\$class = \$_ENV['KERNEL_CLASS'] ?? \$_SERVER['KERNEL_CLASS'])) {
            throw new \\RuntimeException(sprintf('Class \"%s\" doesn\\'t exist or cannot be autoloaded. Check that the KERNEL_CLASS value in phpunit.xml matches the fully-qualified class name of your Kernel or override the %s::createKernel() method.', \$class, static::class));
        }

        return \$class;
    }

    /**
     * Boots the Kernel for this test.
     *
     * @return KernelInterface A KernelInterface instance
     */
    protected static function bootKernel(array \$options = [])
    {
        static::ensureKernelShutdown();

        static::\$kernel = static::createKernel(\$options);
        static::\$kernel->boot();

        \$container = static::\$kernel->getContainer();
        static::\$container = \$container->has('test.service_container') ? \$container->get('test.service_container') : \$container;

        return static::\$kernel;
    }

    /**
     * Creates a Kernel.
     *
     * Available options:
     *
     *  * environment
     *  * debug
     *
     * @return KernelInterface A KernelInterface instance
     */
    protected static function createKernel(array \$options = [])
    {
        if (null === static::\$class) {
            static::\$class = static::getKernelClass();
        }

        if (isset(\$options['environment'])) {
            \$env = \$options['environment'];
        } elseif (isset(\$_ENV['APP_ENV'])) {
            \$env = \$_ENV['APP_ENV'];
        } elseif (isset(\$_SERVER['APP_ENV'])) {
            \$env = \$_SERVER['APP_ENV'];
        } else {
            \$env = 'test';
        }

        if (isset(\$options['debug'])) {
            \$debug = \$options['debug'];
        } elseif (isset(\$_ENV['APP_DEBUG'])) {
            \$debug = \$_ENV['APP_DEBUG'];
        } elseif (isset(\$_SERVER['APP_DEBUG'])) {
            \$debug = \$_SERVER['APP_DEBUG'];
        } else {
            \$debug = true;
        }

        return new static::\$class(\$env, \$debug);
    }

    /**
     * Shuts the kernel down if it was used in the test - called by the tearDown method by default.
     */
    protected static function ensureKernelShutdown()
    {
        if (null !== static::\$kernel) {
            \$container = static::\$kernel->getContainer();
            static::\$kernel->shutdown();
            if (\$container instanceof ResetInterface) {
                \$container->reset();
            }
        }
        static::\$container = null;
    }
}
", "vendor/symfony/framework-bundle/Test/KernelTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Test/KernelTestCase.php");
    }
}
