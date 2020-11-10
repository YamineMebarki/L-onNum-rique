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

/* vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php */
class __TwigTemplate_5be6f2fa88bbf44cbdff8463771ae74ddd761bc5e131518925de185c23683283 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * Compiler pass to register tagged services that require a service locator.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterServiceSubscribersPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition || \$value->isAbstract() || \$value->isSynthetic() || !\$value->hasTag('container.service_subscriber')) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$serviceMap = [];
        \$autowire = \$value->isAutowired();

        foreach (\$value->getTag('container.service_subscriber') as \$attributes) {
            if (!\$attributes) {
                \$autowire = true;
                continue;
            }
            ksort(\$attributes);
            if ([] !== array_diff(array_keys(\$attributes), ['id', 'key'])) {
                throw new InvalidArgumentException(sprintf('The \"container.service_subscriber\" tag accepts only the \"key\" and \"id\" attributes, \"%s\" given for service \"%s\".', implode('\", \"', array_keys(\$attributes)), \$this->currentId));
            }
            if (!\\array_key_exists('id', \$attributes)) {
                throw new InvalidArgumentException(sprintf('Missing \"id\" attribute on \"container.service_subscriber\" tag with key=\"%s\" for service \"%s\".', \$attributes['key'], \$this->currentId));
            }
            if (!\\array_key_exists('key', \$attributes)) {
                \$attributes['key'] = \$attributes['id'];
            }
            if (isset(\$serviceMap[\$attributes['key']])) {
                continue;
            }
            \$serviceMap[\$attributes['key']] = new Reference(\$attributes['id']);
        }
        \$class = \$value->getClass();

        if (!\$r = \$this->container->getReflectionClass(\$class)) {
            throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$this->currentId));
        }
        if (!\$r->isSubclassOf(ServiceSubscriberInterface::class)) {
            throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$this->currentId, ServiceSubscriberInterface::class));
        }
        \$class = \$r->name;

        \$subscriberMap = [];

        foreach (\$class::getSubscribedServices() as \$key => \$type) {
            if (!\\is_string(\$type) || !preg_match('/^\\??[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+\$/', \$type)) {
                throw new InvalidArgumentException(sprintf('\"%s::getSubscribedServices()\" must return valid PHP types for service \"%s\" key \"%s\", \"%s\" returned.', \$class, \$this->currentId, \$key, \\is_string(\$type) ? \$type : \\gettype(\$type)));
            }
            if (\$optionalBehavior = '?' === \$type[0]) {
                \$type = substr(\$type, 1);
                \$optionalBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;
            }
            if (\\is_int(\$name = \$key)) {
                \$key = \$type;
                \$name = null;
            }
            if (!isset(\$serviceMap[\$key])) {
                if (!\$autowire) {
                    throw new InvalidArgumentException(sprintf('Service \"%s\" misses a \"container.service_subscriber\" tag with \"key\"/\"id\" attributes corresponding to entry \"%s\" as returned by \"%s::getSubscribedServices()\".', \$this->currentId, \$key, \$class));
                }
                \$serviceMap[\$key] = new Reference(\$type);
            }

            if (false !== \$i = strpos(\$name, '::get')) {
                \$name = lcfirst(substr(\$name, 5 + \$i));
            } elseif (false !== strpos(\$name, '::')) {
                \$name = null;
            }

            if (null !== \$name && !\$this->container->has(\$name) && !\$this->container->has(\$type.' \$'.\$name)) {
                \$camelCaseName = lcfirst(str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$name))));
                \$name = \$this->container->has(\$type.' \$'.\$camelCaseName) ? \$camelCaseName : \$name;
            }

            \$subscriberMap[\$key] = new TypedReference((string) \$serviceMap[\$key], \$type, \$optionalBehavior ?: ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$name);
            unset(\$serviceMap[\$key]);
        }

        if (\$serviceMap = array_keys(\$serviceMap)) {
            \$message = sprintf(1 < \\count(\$serviceMap) ? 'keys \"%s\" do' : 'key \"%s\" does', str_replace('%', '%%', implode('\", \"', \$serviceMap)));
            throw new InvalidArgumentException(sprintf('Service %s not exist in the map returned by \"%s::getSubscribedServices()\" for service \"%s\".', \$message, \$class, \$this->currentId));
        }

        \$value->addTag('container.service_subscriber.locator', ['id' => (string) ServiceLocatorTagPass::register(\$this->container, \$subscriberMap, \$this->currentId)]);

        return parent::processValue(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * Compiler pass to register tagged services that require a service locator.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterServiceSubscribersPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition || \$value->isAbstract() || \$value->isSynthetic() || !\$value->hasTag('container.service_subscriber')) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$serviceMap = [];
        \$autowire = \$value->isAutowired();

        foreach (\$value->getTag('container.service_subscriber') as \$attributes) {
            if (!\$attributes) {
                \$autowire = true;
                continue;
            }
            ksort(\$attributes);
            if ([] !== array_diff(array_keys(\$attributes), ['id', 'key'])) {
                throw new InvalidArgumentException(sprintf('The \"container.service_subscriber\" tag accepts only the \"key\" and \"id\" attributes, \"%s\" given for service \"%s\".', implode('\", \"', array_keys(\$attributes)), \$this->currentId));
            }
            if (!\\array_key_exists('id', \$attributes)) {
                throw new InvalidArgumentException(sprintf('Missing \"id\" attribute on \"container.service_subscriber\" tag with key=\"%s\" for service \"%s\".', \$attributes['key'], \$this->currentId));
            }
            if (!\\array_key_exists('key', \$attributes)) {
                \$attributes['key'] = \$attributes['id'];
            }
            if (isset(\$serviceMap[\$attributes['key']])) {
                continue;
            }
            \$serviceMap[\$attributes['key']] = new Reference(\$attributes['id']);
        }
        \$class = \$value->getClass();

        if (!\$r = \$this->container->getReflectionClass(\$class)) {
            throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$this->currentId));
        }
        if (!\$r->isSubclassOf(ServiceSubscriberInterface::class)) {
            throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$this->currentId, ServiceSubscriberInterface::class));
        }
        \$class = \$r->name;

        \$subscriberMap = [];

        foreach (\$class::getSubscribedServices() as \$key => \$type) {
            if (!\\is_string(\$type) || !preg_match('/^\\??[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+\$/', \$type)) {
                throw new InvalidArgumentException(sprintf('\"%s::getSubscribedServices()\" must return valid PHP types for service \"%s\" key \"%s\", \"%s\" returned.', \$class, \$this->currentId, \$key, \\is_string(\$type) ? \$type : \\gettype(\$type)));
            }
            if (\$optionalBehavior = '?' === \$type[0]) {
                \$type = substr(\$type, 1);
                \$optionalBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;
            }
            if (\\is_int(\$name = \$key)) {
                \$key = \$type;
                \$name = null;
            }
            if (!isset(\$serviceMap[\$key])) {
                if (!\$autowire) {
                    throw new InvalidArgumentException(sprintf('Service \"%s\" misses a \"container.service_subscriber\" tag with \"key\"/\"id\" attributes corresponding to entry \"%s\" as returned by \"%s::getSubscribedServices()\".', \$this->currentId, \$key, \$class));
                }
                \$serviceMap[\$key] = new Reference(\$type);
            }

            if (false !== \$i = strpos(\$name, '::get')) {
                \$name = lcfirst(substr(\$name, 5 + \$i));
            } elseif (false !== strpos(\$name, '::')) {
                \$name = null;
            }

            if (null !== \$name && !\$this->container->has(\$name) && !\$this->container->has(\$type.' \$'.\$name)) {
                \$camelCaseName = lcfirst(str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$name))));
                \$name = \$this->container->has(\$type.' \$'.\$camelCaseName) ? \$camelCaseName : \$name;
            }

            \$subscriberMap[\$key] = new TypedReference((string) \$serviceMap[\$key], \$type, \$optionalBehavior ?: ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$name);
            unset(\$serviceMap[\$key]);
        }

        if (\$serviceMap = array_keys(\$serviceMap)) {
            \$message = sprintf(1 < \\count(\$serviceMap) ? 'keys \"%s\" do' : 'key \"%s\" does', str_replace('%', '%%', implode('\", \"', \$serviceMap)));
            throw new InvalidArgumentException(sprintf('Service %s not exist in the map returned by \"%s::getSubscribedServices()\" for service \"%s\".', \$message, \$class, \$this->currentId));
        }

        \$value->addTag('container.service_subscriber.locator', ['id' => (string) ServiceLocatorTagPass::register(\$this->container, \$subscriberMap, \$this->currentId)]);

        return parent::processValue(\$value);
    }
}
", "vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/RegisterServiceSubscribersPass.php");
    }
}
