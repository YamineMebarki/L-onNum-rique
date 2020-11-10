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

/* vendor/symfony/dependency-injection/ServiceLocator.php */
class __TwigTemplate_c9dcefbe3daf71179187055250e7f1773c164e3acc5f4f02b316110751ce1cfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ServiceLocator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ServiceLocator.php"));

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

use Psr\\Container\\ContainerExceptionInterface;
use Psr\\Container\\NotFoundExceptionInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;
use Symfony\\Contracts\\Service\\ServiceProviderInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceLocator implements ServiceProviderInterface
{
    use ServiceLocatorTrait {
        get as private doGet;
    }

    private \$externalId;
    private \$container;

    public function get(\$id)
    {
        if (!\$this->externalId) {
            return \$this->doGet(\$id);
        }

        try {
            return \$this->doGet(\$id);
        } catch (RuntimeException \$e) {
            \$what = sprintf('service \"%s\" required by \"%s\"', \$id, \$this->externalId);
            \$message = preg_replace('/service \"\\.service_locator\\.[^\"]++\"/', \$what, \$e->getMessage());

            if (\$e->getMessage() === \$message) {
                \$message = sprintf('Cannot resolve %s: %s', \$what, \$message);
            }

            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, \$message);

            throw \$e;
        }
    }

    public function __invoke(\$id)
    {
        return isset(\$this->factories[\$id]) ? \$this->get(\$id) : null;
    }

    /**
     * @internal
     */
    public function withContext(\$externalId, Container \$container)
    {
        \$locator = clone \$this;
        \$locator->externalId = \$externalId;
        \$locator->container = \$container;

        return \$locator;
    }

    private function createNotFoundException(string \$id): NotFoundExceptionInterface
    {
        if (\$this->loading) {
            \$msg = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\". This locator %s', end(\$this->loading), \$id, \$this->formatAlternatives());

            return new ServiceNotFoundException(\$id, end(\$this->loading) ?: null, null, [], \$msg);
        }

        \$class = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS, 4);
        \$class = isset(\$class[3]['object']) ? \\get_class(\$class[3]['object']) : null;
        \$externalId = \$this->externalId ?: \$class;

        \$msg = [];
        \$msg[] = sprintf('Service \"%s\" not found:', \$id);

        if (!\$this->container) {
            \$class = null;
        } elseif (\$this->container->has(\$id) || isset(\$this->container->getRemovedIds()[\$id])) {
            \$msg[] = 'even though it exists in the app\\'s container,';
        } else {
            try {
                \$this->container->get(\$id);
                \$class = null;
            } catch (ServiceNotFoundException \$e) {
                if (\$e->getAlternatives()) {
                    \$msg[] = sprintf('did you mean %s? Anyway,', \$this->formatAlternatives(\$e->getAlternatives(), 'or'));
                } else {
                    \$class = null;
                }
            }
        }
        if (\$externalId) {
            \$msg[] = sprintf('the container inside \"%s\" is a smaller service locator that %s', \$externalId, \$this->formatAlternatives());
        } else {
            \$msg[] = sprintf('the current service locator %s', \$this->formatAlternatives());
        }

        if (!\$class) {
            // no-op
        } elseif (is_subclass_of(\$class, ServiceSubscriberInterface::class)) {
            \$msg[] = sprintf('Unless you need extra laziness, try using dependency injection instead. Otherwise, you need to declare it using \"%s::getSubscribedServices()\".', preg_replace('/([^\\\\\\\\]++\\\\\\\\)++/', '', \$class));
        } else {
            \$msg[] = 'Try using dependency injection instead.';
        }

        return new ServiceNotFoundException(\$id, end(\$this->loading) ?: null, null, [], implode(' ', \$msg));
    }

    private function createCircularReferenceException(string \$id, array \$path): ContainerExceptionInterface
    {
        return new ServiceCircularReferenceException(\$id, \$path);
    }

    private function formatAlternatives(array \$alternatives = null, \$separator = 'and')
    {
        \$format = '\"%s\"%s';
        if (null === \$alternatives) {
            if (!\$alternatives = array_keys(\$this->factories)) {
                return 'is empty...';
            }
            \$format = sprintf('only knows about the %s service%s.', \$format, 1 < \\count(\$alternatives) ? 's' : '');
        }
        \$last = array_pop(\$alternatives);

        return sprintf(\$format, \$alternatives ? implode('\", \"', \$alternatives) : \$last, \$alternatives ? sprintf(' %s \"%s\"', \$separator, \$last) : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ServiceLocator.php";
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

use Psr\\Container\\ContainerExceptionInterface;
use Psr\\Container\\NotFoundExceptionInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Contracts\\Service\\ServiceLocatorTrait;
use Symfony\\Contracts\\Service\\ServiceProviderInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceLocator implements ServiceProviderInterface
{
    use ServiceLocatorTrait {
        get as private doGet;
    }

    private \$externalId;
    private \$container;

    public function get(\$id)
    {
        if (!\$this->externalId) {
            return \$this->doGet(\$id);
        }

        try {
            return \$this->doGet(\$id);
        } catch (RuntimeException \$e) {
            \$what = sprintf('service \"%s\" required by \"%s\"', \$id, \$this->externalId);
            \$message = preg_replace('/service \"\\.service_locator\\.[^\"]++\"/', \$what, \$e->getMessage());

            if (\$e->getMessage() === \$message) {
                \$message = sprintf('Cannot resolve %s: %s', \$what, \$message);
            }

            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, \$message);

            throw \$e;
        }
    }

    public function __invoke(\$id)
    {
        return isset(\$this->factories[\$id]) ? \$this->get(\$id) : null;
    }

    /**
     * @internal
     */
    public function withContext(\$externalId, Container \$container)
    {
        \$locator = clone \$this;
        \$locator->externalId = \$externalId;
        \$locator->container = \$container;

        return \$locator;
    }

    private function createNotFoundException(string \$id): NotFoundExceptionInterface
    {
        if (\$this->loading) {
            \$msg = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\". This locator %s', end(\$this->loading), \$id, \$this->formatAlternatives());

            return new ServiceNotFoundException(\$id, end(\$this->loading) ?: null, null, [], \$msg);
        }

        \$class = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS, 4);
        \$class = isset(\$class[3]['object']) ? \\get_class(\$class[3]['object']) : null;
        \$externalId = \$this->externalId ?: \$class;

        \$msg = [];
        \$msg[] = sprintf('Service \"%s\" not found:', \$id);

        if (!\$this->container) {
            \$class = null;
        } elseif (\$this->container->has(\$id) || isset(\$this->container->getRemovedIds()[\$id])) {
            \$msg[] = 'even though it exists in the app\\'s container,';
        } else {
            try {
                \$this->container->get(\$id);
                \$class = null;
            } catch (ServiceNotFoundException \$e) {
                if (\$e->getAlternatives()) {
                    \$msg[] = sprintf('did you mean %s? Anyway,', \$this->formatAlternatives(\$e->getAlternatives(), 'or'));
                } else {
                    \$class = null;
                }
            }
        }
        if (\$externalId) {
            \$msg[] = sprintf('the container inside \"%s\" is a smaller service locator that %s', \$externalId, \$this->formatAlternatives());
        } else {
            \$msg[] = sprintf('the current service locator %s', \$this->formatAlternatives());
        }

        if (!\$class) {
            // no-op
        } elseif (is_subclass_of(\$class, ServiceSubscriberInterface::class)) {
            \$msg[] = sprintf('Unless you need extra laziness, try using dependency injection instead. Otherwise, you need to declare it using \"%s::getSubscribedServices()\".', preg_replace('/([^\\\\\\\\]++\\\\\\\\)++/', '', \$class));
        } else {
            \$msg[] = 'Try using dependency injection instead.';
        }

        return new ServiceNotFoundException(\$id, end(\$this->loading) ?: null, null, [], implode(' ', \$msg));
    }

    private function createCircularReferenceException(string \$id, array \$path): ContainerExceptionInterface
    {
        return new ServiceCircularReferenceException(\$id, \$path);
    }

    private function formatAlternatives(array \$alternatives = null, \$separator = 'and')
    {
        \$format = '\"%s\"%s';
        if (null === \$alternatives) {
            if (!\$alternatives = array_keys(\$this->factories)) {
                return 'is empty...';
            }
            \$format = sprintf('only knows about the %s service%s.', \$format, 1 < \\count(\$alternatives) ? 's' : '');
        }
        \$last = array_pop(\$alternatives);

        return sprintf(\$format, \$alternatives ? implode('\", \"', \$alternatives) : \$last, \$alternatives ? sprintf(' %s \"%s\"', \$separator, \$last) : '');
    }
}
", "vendor/symfony/dependency-injection/ServiceLocator.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ServiceLocator.php");
    }
}
