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

/* vendor/symfony/dependency-injection/Loader/PhpFileLoader.php */
class __TwigTemplate_63f9413e732281c16500b9611b4fe860d2ad9ddd001398d9593c3392203701c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/PhpFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/PhpFileLoader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

/**
 * PhpFileLoader loads service definitions from a PHP file.
 *
 * The PHP file is required and the \$container variable can be
 * used within the file to change the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        // the container and loader variables are exposed to the included file below
        \$container = \$this->container;
        \$loader = \$this;

        \$path = \$this->locator->locate(\$resource);
        \$this->setCurrentDir(\\dirname(\$path));
        \$this->container->fileExists(\$path);

        // the closure forbids access to the private scope in the included file
        \$load = \\Closure::bind(function (\$path) use (\$container, \$loader, \$resource, \$type) {
            return include \$path;
        }, \$this, ProtectedPhpFileLoader::class);

        \$callback = \$load(\$path);

        if (\\is_object(\$callback) && \\is_callable(\$callback)) {
            \$callback(new ContainerConfigurator(\$this->container, \$this, \$this->instanceof, \$path, \$resource), \$this->container, \$this);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'php' === \$type;
    }
}

/**
 * @internal
 */
final class ProtectedPhpFileLoader extends PhpFileLoader
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/PhpFileLoader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

/**
 * PhpFileLoader loads service definitions from a PHP file.
 *
 * The PHP file is required and the \$container variable can be
 * used within the file to change the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        // the container and loader variables are exposed to the included file below
        \$container = \$this->container;
        \$loader = \$this;

        \$path = \$this->locator->locate(\$resource);
        \$this->setCurrentDir(\\dirname(\$path));
        \$this->container->fileExists(\$path);

        // the closure forbids access to the private scope in the included file
        \$load = \\Closure::bind(function (\$path) use (\$container, \$loader, \$resource, \$type) {
            return include \$path;
        }, \$this, ProtectedPhpFileLoader::class);

        \$callback = \$load(\$path);

        if (\\is_object(\$callback) && \\is_callable(\$callback)) {
            \$callback(new ContainerConfigurator(\$this->container, \$this, \$this->instanceof, \$path, \$resource), \$this->container, \$this);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'php' === \$type;
    }
}

/**
 * @internal
 */
final class ProtectedPhpFileLoader extends PhpFileLoader
{
}
", "vendor/symfony/dependency-injection/Loader/PhpFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/PhpFileLoader.php");
    }
}
