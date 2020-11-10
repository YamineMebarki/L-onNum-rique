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

/* vendor/symfony/routing/Loader/PhpFileLoader.php */
class __TwigTemplate_73103cbd31d9fcb662beca6e378728d8a22820c7571cc4a381afdc03d88f4468 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/PhpFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/PhpFileLoader.php"));

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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * PhpFileLoader loads routes from a PHP file.
 *
 * The file must return a RouteCollection instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    /**
     * Loads a PHP file.
     *
     * @param string      \$file A PHP file path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection A RouteCollection instance
     */
    public function load(\$file, \$type = null)
    {
        \$path = \$this->locator->locate(\$file);
        \$this->setCurrentDir(\\dirname(\$path));

        // the closure forbids access to the private scope in the included file
        \$loader = \$this;
        \$load = \\Closure::bind(static function (\$file) use (\$loader) {
            return include \$file;
        }, null, ProtectedPhpFileLoader::class);

        \$result = \$load(\$path);

        if (\\is_object(\$result) && \\is_callable(\$result)) {
            \$collection = new RouteCollection();
            \$result(new RoutingConfigurator(\$collection, \$this, \$path, \$file));
        } else {
            \$collection = \$result;
        }

        \$collection->addResource(new FileResource(\$path));

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        return \\is_string(\$resource) && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION) && (!\$type || 'php' === \$type);
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
        return "vendor/symfony/routing/Loader/PhpFileLoader.php";
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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * PhpFileLoader loads routes from a PHP file.
 *
 * The file must return a RouteCollection instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    /**
     * Loads a PHP file.
     *
     * @param string      \$file A PHP file path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection A RouteCollection instance
     */
    public function load(\$file, \$type = null)
    {
        \$path = \$this->locator->locate(\$file);
        \$this->setCurrentDir(\\dirname(\$path));

        // the closure forbids access to the private scope in the included file
        \$loader = \$this;
        \$load = \\Closure::bind(static function (\$file) use (\$loader) {
            return include \$file;
        }, null, ProtectedPhpFileLoader::class);

        \$result = \$load(\$path);

        if (\\is_object(\$result) && \\is_callable(\$result)) {
            \$collection = new RouteCollection();
            \$result(new RoutingConfigurator(\$collection, \$this, \$path, \$file));
        } else {
            \$collection = \$result;
        }

        \$collection->addResource(new FileResource(\$path));

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        return \\is_string(\$resource) && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION) && (!\$type || 'php' === \$type);
    }
}

/**
 * @internal
 */
final class ProtectedPhpFileLoader extends PhpFileLoader
{
}
", "vendor/symfony/routing/Loader/PhpFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/PhpFileLoader.php");
    }
}
