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

/* vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php */
class __TwigTemplate_a4fe12b6e15f5e235d2bd1cc1813d6144a3cec94ed1f5dfcf33fbb4cb3c3fd4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PrototypeConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'load';

    use Traits\\AbstractTrait;
    use Traits\\ArgumentTrait;
    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\CallTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\DeprecateTrait;
    use Traits\\FactoryTrait;
    use Traits\\LazyTrait;
    use Traits\\ParentTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\TagTrait;

    private \$loader;
    private \$resource;
    private \$excludes;
    private \$allowParent;

    public function __construct(ServicesConfigurator \$parent, PhpFileLoader \$loader, Definition \$defaults, string \$namespace, string \$resource, bool \$allowParent)
    {
        \$definition = new Definition();
        \$definition->setPublic(\$defaults->isPublic());
        \$definition->setAutowired(\$defaults->isAutowired());
        \$definition->setAutoconfigured(\$defaults->isAutoconfigured());
        \$definition->setBindings(\$defaults->getBindings());
        \$definition->setChanges([]);

        \$this->loader = \$loader;
        \$this->resource = \$resource;
        \$this->allowParent = \$allowParent;

        parent::__construct(\$parent, \$definition, \$namespace, \$defaults->getTags());
    }

    public function __destruct()
    {
        parent::__destruct();

        if (\$this->loader) {
            \$this->loader->registerClasses(\$this->definition, \$this->id, \$this->resource, \$this->excludes);
        }
        \$this->loader = null;
    }

    /**
     * Excludes files from register using glob patterns.
     *
     * @param string[]|string \$excludes
     *
     * @return \$this
     */
    final public function exclude(\$excludes)
    {
        \$this->excludes = (array) \$excludes;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PrototypeConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'load';

    use Traits\\AbstractTrait;
    use Traits\\ArgumentTrait;
    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\CallTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\DeprecateTrait;
    use Traits\\FactoryTrait;
    use Traits\\LazyTrait;
    use Traits\\ParentTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\TagTrait;

    private \$loader;
    private \$resource;
    private \$excludes;
    private \$allowParent;

    public function __construct(ServicesConfigurator \$parent, PhpFileLoader \$loader, Definition \$defaults, string \$namespace, string \$resource, bool \$allowParent)
    {
        \$definition = new Definition();
        \$definition->setPublic(\$defaults->isPublic());
        \$definition->setAutowired(\$defaults->isAutowired());
        \$definition->setAutoconfigured(\$defaults->isAutoconfigured());
        \$definition->setBindings(\$defaults->getBindings());
        \$definition->setChanges([]);

        \$this->loader = \$loader;
        \$this->resource = \$resource;
        \$this->allowParent = \$allowParent;

        parent::__construct(\$parent, \$definition, \$namespace, \$defaults->getTags());
    }

    public function __destruct()
    {
        parent::__destruct();

        if (\$this->loader) {
            \$this->loader->registerClasses(\$this->definition, \$this->id, \$this->resource, \$this->excludes);
        }
        \$this->loader = null;
    }

    /**
     * Excludes files from register using glob patterns.
     *
     * @param string[]|string \$excludes
     *
     * @return \$this
     */
    final public function exclude(\$excludes)
    {
        \$this->excludes = (array) \$excludes;

        return \$this;
    }
}
", "vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/Configurator/PrototypeConfigurator.php");
    }
}
