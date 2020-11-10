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

/* vendor/symfony/doctrine-bridge/ManagerRegistry.php */
class __TwigTemplate_3d930fba043f6c2e14f405c7feb30041a87ad79f1cd015610fb16841452eba50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/ManagerRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/ManagerRegistry.php"));

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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\Persistence\\AbstractManagerRegistry;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * References Doctrine connections and entity/document managers.
 *
 * @author  Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Container
     */
    protected \$container;

    /**
     * {@inheritdoc}
     */
    protected function getService(\$name)
    {
        return \$this->container->get(\$name);
    }

    /**
     * {@inheritdoc}
     */
    protected function resetService(\$name)
    {
        if (!\$this->container->initialized(\$name)) {
            return;
        }
        \$manager = \$this->container->get(\$name);

        if (!\$manager instanceof LazyLoadingInterface) {
            throw new \\LogicException('Resetting a non-lazy manager service is not supported. '.(interface_exists(LazyLoadingInterface::class) ? sprintf('Declare the \"%s\" service as lazy.', \$name) : 'Try running \"composer require symfony/proxy-manager-bridge\".'));
        }
        \$manager->setProxyInitializer(\\Closure::bind(
            function (&\$wrappedInstance, LazyLoadingInterface \$manager) use (\$name) {
                if (isset(\$this->normalizedIds[\$normalizedId = strtolower(\$name)])) { // BC with DI v3.4
                    \$name = \$this->normalizedIds[\$normalizedId];
                }
                if (isset(\$this->aliases[\$name])) {
                    \$name = \$this->aliases[\$name];
                }
                if (isset(\$this->fileMap[\$name])) {
                    \$wrappedInstance = \$this->load(\$this->fileMap[\$name]);
                } else {
                    \$method = \$this->methodMap[\$name] ?? 'get'.strtr(\$name, \$this->underscoreMap).'Service'; // BC with DI v3.4
                    \$wrappedInstance = \$this->{\$method}(false);
                }

                \$manager->setProxyInitializer(null);

                return true;
            },
            \$this->container,
            Container::class
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/ManagerRegistry.php";
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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\Persistence\\AbstractManagerRegistry;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * References Doctrine connections and entity/document managers.
 *
 * @author  Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Container
     */
    protected \$container;

    /**
     * {@inheritdoc}
     */
    protected function getService(\$name)
    {
        return \$this->container->get(\$name);
    }

    /**
     * {@inheritdoc}
     */
    protected function resetService(\$name)
    {
        if (!\$this->container->initialized(\$name)) {
            return;
        }
        \$manager = \$this->container->get(\$name);

        if (!\$manager instanceof LazyLoadingInterface) {
            throw new \\LogicException('Resetting a non-lazy manager service is not supported. '.(interface_exists(LazyLoadingInterface::class) ? sprintf('Declare the \"%s\" service as lazy.', \$name) : 'Try running \"composer require symfony/proxy-manager-bridge\".'));
        }
        \$manager->setProxyInitializer(\\Closure::bind(
            function (&\$wrappedInstance, LazyLoadingInterface \$manager) use (\$name) {
                if (isset(\$this->normalizedIds[\$normalizedId = strtolower(\$name)])) { // BC with DI v3.4
                    \$name = \$this->normalizedIds[\$normalizedId];
                }
                if (isset(\$this->aliases[\$name])) {
                    \$name = \$this->aliases[\$name];
                }
                if (isset(\$this->fileMap[\$name])) {
                    \$wrappedInstance = \$this->load(\$this->fileMap[\$name]);
                } else {
                    \$method = \$this->methodMap[\$name] ?? 'get'.strtr(\$name, \$this->underscoreMap).'Service'; // BC with DI v3.4
                    \$wrappedInstance = \$this->{\$method}(false);
                }

                \$manager->setProxyInitializer(null);

                return true;
            },
            \$this->container,
            Container::class
        ));
    }
}
", "vendor/symfony/doctrine-bridge/ManagerRegistry.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/ManagerRegistry.php");
    }
}
