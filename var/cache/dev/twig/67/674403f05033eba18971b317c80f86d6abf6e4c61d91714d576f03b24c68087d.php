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

/* vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php */
class __TwigTemplate_5f625ef200a20715a211487c4f418ddff9c2b2037d837b16ae4687f35b88d092 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php"));

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

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

use Symfony\\Component\\Routing\\Loader\\PhpFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RoutingConfigurator
{
    use Traits\\AddTrait;

    private \$loader;
    private \$path;
    private \$file;

    public function __construct(RouteCollection \$collection, PhpFileLoader \$loader, string \$path, string \$file)
    {
        \$this->collection = \$collection;
        \$this->loader = \$loader;
        \$this->path = \$path;
        \$this->file = \$file;
    }

    /**
     * @return ImportConfigurator
     */
    final public function import(\$resource, \$type = null, \$ignoreErrors = false)
    {
        \$this->loader->setCurrentDir(\\dirname(\$this->path));
        \$imported = \$this->loader->import(\$resource, \$type, \$ignoreErrors, \$this->file);
        if (!\\is_array(\$imported)) {
            return new ImportConfigurator(\$this->collection, \$imported);
        }

        \$mergedCollection = new RouteCollection();
        foreach (\$imported as \$subCollection) {
            \$mergedCollection->addCollection(\$subCollection);
        }

        return new ImportConfigurator(\$this->collection, \$mergedCollection);
    }

    /**
     * @return CollectionConfigurator
     */
    final public function collection(\$name = '')
    {
        return new CollectionConfigurator(\$this->collection, \$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php";
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

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

use Symfony\\Component\\Routing\\Loader\\PhpFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RoutingConfigurator
{
    use Traits\\AddTrait;

    private \$loader;
    private \$path;
    private \$file;

    public function __construct(RouteCollection \$collection, PhpFileLoader \$loader, string \$path, string \$file)
    {
        \$this->collection = \$collection;
        \$this->loader = \$loader;
        \$this->path = \$path;
        \$this->file = \$file;
    }

    /**
     * @return ImportConfigurator
     */
    final public function import(\$resource, \$type = null, \$ignoreErrors = false)
    {
        \$this->loader->setCurrentDir(\\dirname(\$this->path));
        \$imported = \$this->loader->import(\$resource, \$type, \$ignoreErrors, \$this->file);
        if (!\\is_array(\$imported)) {
            return new ImportConfigurator(\$this->collection, \$imported);
        }

        \$mergedCollection = new RouteCollection();
        foreach (\$imported as \$subCollection) {
            \$mergedCollection->addCollection(\$subCollection);
        }

        return new ImportConfigurator(\$this->collection, \$mergedCollection);
    }

    /**
     * @return CollectionConfigurator
     */
    final public function collection(\$name = '')
    {
        return new CollectionConfigurator(\$this->collection, \$name);
    }
}
", "vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/Configurator/RoutingConfigurator.php");
    }
}
