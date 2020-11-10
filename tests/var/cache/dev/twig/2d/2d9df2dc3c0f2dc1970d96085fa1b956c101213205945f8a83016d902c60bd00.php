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

/* vendor/symfony/dependency-injection/ReverseContainer.php */
class __TwigTemplate_fb9bca34af4da4f4cfb16e05820601c08a6c42939bb92ea2dc0bb3a1d472f079 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ReverseContainer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ReverseContainer.php"));

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

namespace Symfony\\Component\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * Turns public and \"container.reversible\" services back to their ids.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class ReverseContainer
{
    private \$serviceContainer;
    private \$reversibleLocator;
    private \$tagName;
    private \$getServiceId;

    public function __construct(Container \$serviceContainer, ContainerInterface \$reversibleLocator, string \$tagName = 'container.reversible')
    {
        \$this->serviceContainer = \$serviceContainer;
        \$this->reversibleLocator = \$reversibleLocator;
        \$this->tagName = \$tagName;
        \$this->getServiceId = \\Closure::bind(function (\$service): ?string {
            return array_search(\$service, \$this->services, true) ?: array_search(\$service, \$this->privates, true) ?: null;
        }, \$serviceContainer, Container::class);
    }

    /**
     * Returns the id of the passed object when it exists as a service.
     *
     * To be reversible, services need to be either public or be tagged with \"container.reversible\".
     *
     * @param object \$service
     */
    public function getId(\$service): ?string
    {
        if (\$this->serviceContainer === \$service) {
            return 'service_container';
        }

        if (null === \$id = (\$this->getServiceId)(\$service)) {
            return null;
        }

        if (\$this->serviceContainer->has(\$id) || \$this->reversibleLocator->has(\$id)) {
            return \$id;
        }

        return null;
    }

    /**
     * @return object
     *
     * @throws ServiceNotFoundException When the service is not reversible
     */
    public function getService(string \$id)
    {
        if (\$this->serviceContainer->has(\$id)) {
            return \$this->serviceContainer->get(\$id);
        }

        if (\$this->reversibleLocator->has(\$id)) {
            return \$this->reversibleLocator->get(\$id);
        }

        if (isset(\$this->serviceContainer->getRemovedIds()[\$id])) {
            throw new ServiceNotFoundException(\$id, null, null, [], sprintf('The \"%s\" service is private and cannot be accessed by reference. You should either make it public, or tag it as \"%s\".', \$id, \$this->tagName));
        }

        // will throw a ServiceNotFoundException
        \$this->serviceContainer->get(\$id);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ReverseContainer.php";
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

namespace Symfony\\Component\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * Turns public and \"container.reversible\" services back to their ids.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class ReverseContainer
{
    private \$serviceContainer;
    private \$reversibleLocator;
    private \$tagName;
    private \$getServiceId;

    public function __construct(Container \$serviceContainer, ContainerInterface \$reversibleLocator, string \$tagName = 'container.reversible')
    {
        \$this->serviceContainer = \$serviceContainer;
        \$this->reversibleLocator = \$reversibleLocator;
        \$this->tagName = \$tagName;
        \$this->getServiceId = \\Closure::bind(function (\$service): ?string {
            return array_search(\$service, \$this->services, true) ?: array_search(\$service, \$this->privates, true) ?: null;
        }, \$serviceContainer, Container::class);
    }

    /**
     * Returns the id of the passed object when it exists as a service.
     *
     * To be reversible, services need to be either public or be tagged with \"container.reversible\".
     *
     * @param object \$service
     */
    public function getId(\$service): ?string
    {
        if (\$this->serviceContainer === \$service) {
            return 'service_container';
        }

        if (null === \$id = (\$this->getServiceId)(\$service)) {
            return null;
        }

        if (\$this->serviceContainer->has(\$id) || \$this->reversibleLocator->has(\$id)) {
            return \$id;
        }

        return null;
    }

    /**
     * @return object
     *
     * @throws ServiceNotFoundException When the service is not reversible
     */
    public function getService(string \$id)
    {
        if (\$this->serviceContainer->has(\$id)) {
            return \$this->serviceContainer->get(\$id);
        }

        if (\$this->reversibleLocator->has(\$id)) {
            return \$this->reversibleLocator->get(\$id);
        }

        if (isset(\$this->serviceContainer->getRemovedIds()[\$id])) {
            throw new ServiceNotFoundException(\$id, null, null, [], sprintf('The \"%s\" service is private and cannot be accessed by reference. You should either make it public, or tag it as \"%s\".', \$id, \$this->tagName));
        }

        // will throw a ServiceNotFoundException
        \$this->serviceContainer->get(\$id);
    }
}
", "vendor/symfony/dependency-injection/ReverseContainer.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ReverseContainer.php");
    }
}
