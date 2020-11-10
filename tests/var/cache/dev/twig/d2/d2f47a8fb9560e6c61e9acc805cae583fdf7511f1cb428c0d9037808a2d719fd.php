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

/* vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php */
class __TwigTemplate_4657c90b18a6277fbc7bfce190016761f573ef9d342312d529ebfb5365e35637 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php"));

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

use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Trait that allows a generic method to find and sort service by priority option in the tag.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
trait PriorityTaggedServiceTrait
{
    /**
     * Finds all services with the given tag name and order them by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use that class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @param string|TaggedIteratorArgument \$tagName
     *
     * @return Reference[]
     */
    private function findAndSortTaggedServices(\$tagName, ContainerBuilder \$container)
    {
        \$indexAttribute = \$defaultIndexMethod = \$needsIndexes = null;

        if (\$tagName instanceof TaggedIteratorArgument) {
            \$indexAttribute = \$tagName->getIndexAttribute();
            \$defaultIndexMethod = \$tagName->getDefaultIndexMethod();
            \$needsIndexes = \$tagName->needsIndexes();
            \$tagName = \$tagName->getTag();
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;

            if (null === \$indexAttribute && !\$needsIndexes) {
                \$services[\$priority][] = new Reference(\$serviceId);

                continue;
            }

            \$class = \$container->getDefinition(\$serviceId)->getClass();
            \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

            if (null !== \$indexAttribute && isset(\$attributes[0][\$indexAttribute])) {
                \$services[\$priority][\$attributes[0][\$indexAttribute]] = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \$attributes[0][\$indexAttribute]);

                continue;
            }

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$serviceId));
            }

            \$class = \$r->name;

            if (!\$r->hasMethod(\$defaultIndexMethod)) {
                if (\$needsIndexes) {
                    \$services[\$priority][\$serviceId] = new TypedReference(\$serviceId, \$class);

                    continue;
                }

                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" not found: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            if (!(\$rm = \$r->getMethod(\$defaultIndexMethod))->isStatic()) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            if (!\$rm->isPublic()) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            \$key = \$rm->invoke(null);

            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return a string, got %s: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \\gettype(\$key), \$tagName, \$serviceId, \$indexAttribute));
            }

            \$services[\$priority][\$key] = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \$key);
        }

        if (\$services) {
            krsort(\$services);
            \$services = array_merge(...\$services);
        }

        return \$services;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php";
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

use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Trait that allows a generic method to find and sort service by priority option in the tag.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
trait PriorityTaggedServiceTrait
{
    /**
     * Finds all services with the given tag name and order them by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use that class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @param string|TaggedIteratorArgument \$tagName
     *
     * @return Reference[]
     */
    private function findAndSortTaggedServices(\$tagName, ContainerBuilder \$container)
    {
        \$indexAttribute = \$defaultIndexMethod = \$needsIndexes = null;

        if (\$tagName instanceof TaggedIteratorArgument) {
            \$indexAttribute = \$tagName->getIndexAttribute();
            \$defaultIndexMethod = \$tagName->getDefaultIndexMethod();
            \$needsIndexes = \$tagName->needsIndexes();
            \$tagName = \$tagName->getTag();
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;

            if (null === \$indexAttribute && !\$needsIndexes) {
                \$services[\$priority][] = new Reference(\$serviceId);

                continue;
            }

            \$class = \$container->getDefinition(\$serviceId)->getClass();
            \$class = \$container->getParameterBag()->resolveValue(\$class) ?: null;

            if (null !== \$indexAttribute && isset(\$attributes[0][\$indexAttribute])) {
                \$services[\$priority][\$attributes[0][\$indexAttribute]] = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \$attributes[0][\$indexAttribute]);

                continue;
            }

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$serviceId));
            }

            \$class = \$r->name;

            if (!\$r->hasMethod(\$defaultIndexMethod)) {
                if (\$needsIndexes) {
                    \$services[\$priority][\$serviceId] = new TypedReference(\$serviceId, \$class);

                    continue;
                }

                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" not found: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            if (!(\$rm = \$r->getMethod(\$defaultIndexMethod))->isStatic()) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be static: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            if (!\$rm->isPublic()) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should be public: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \$tagName, \$serviceId, \$indexAttribute));
            }

            \$key = \$rm->invoke(null);

            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Method \"%s::%s()\" should return a string, got %s: tag \"%s\" on service \"%s\" is missing \"%s\" attribute.', \$class, \$defaultIndexMethod, \\gettype(\$key), \$tagName, \$serviceId, \$indexAttribute));
            }

            \$services[\$priority][\$key] = new TypedReference(\$serviceId, \$class, ContainerBuilder::EXCEPTION_ON_INVALID_REFERENCE, \$key);
        }

        if (\$services) {
            krsort(\$services);
            \$services = array_merge(...\$services);
        }

        return \$services;
    }
}
", "vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/PriorityTaggedServiceTrait.php");
    }
}
