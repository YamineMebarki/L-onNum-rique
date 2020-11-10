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

/* vendor/symfony/config/Resource/ReflectionClassResource.php */
class __TwigTemplate_08202a004eed013e67e6a65a1e37ec7cddd8cc67b95619b1cff4268d07cd14f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/ReflectionClassResource.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/ReflectionClassResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface as LegacyServiceSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.3
 */
class ReflectionClassResource implements SelfCheckingResourceInterface
{
    private \$files = [];
    private \$className;
    private \$classReflector;
    private \$excludedVendors = [];
    private \$hash;

    public function __construct(\\ReflectionClass \$classReflector, array \$excludedVendors = [])
    {
        \$this->className = \$classReflector->name;
        \$this->classReflector = \$classReflector;
        \$this->excludedVendors = \$excludedVendors;
    }

    public function isFresh(\$timestamp)
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        foreach (\$this->files as \$file => \$v) {
            if (false === \$filemtime = @filemtime(\$file)) {
                return false;
            }

            if (\$filemtime > \$timestamp) {
                return \$this->hash === \$this->computeHash();
            }
        }

        return true;
    }

    public function __toString()
    {
        return 'reflection.'.\$this->className;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        return ['files', 'className', 'hash'];
    }

    private function loadFiles(\\ReflectionClass \$class)
    {
        foreach (\$class->getInterfaces() as \$v) {
            \$this->loadFiles(\$v);
        }
        do {
            \$file = \$class->getFileName();
            if (false !== \$file && file_exists(\$file)) {
                foreach (\$this->excludedVendors as \$vendor) {
                    if (0 === strpos(\$file, \$vendor) && false !== strpbrk(substr(\$file, \\strlen(\$vendor), 1), '/'.\\DIRECTORY_SEPARATOR)) {
                        \$file = false;
                        break;
                    }
                }
                if (\$file) {
                    \$this->files[\$file] = null;
                }
            }
            foreach (\$class->getTraits() as \$v) {
                \$this->loadFiles(\$v);
            }
        } while (\$class = \$class->getParentClass());
    }

    private function computeHash()
    {
        if (null === \$this->classReflector) {
            try {
                \$this->classReflector = new \\ReflectionClass(\$this->className);
            } catch (\\ReflectionException \$e) {
                // the class does not exist anymore
                return false;
            }
        }
        \$hash = hash_init('md5');

        foreach (\$this->generateSignature(\$this->classReflector) as \$info) {
            hash_update(\$hash, \$info);
        }

        return hash_final(\$hash);
    }

    private function generateSignature(\\ReflectionClass \$class)
    {
        yield \$class->getDocComment();
        yield (int) \$class->isFinal();
        yield (int) \$class->isAbstract();

        if (\$class->isTrait()) {
            yield print_r(class_uses(\$class->name), true);
        } else {
            yield print_r(class_parents(\$class->name), true);
            yield print_r(class_implements(\$class->name), true);
            yield print_r(\$class->getConstants(), true);
        }

        if (!\$class->isInterface()) {
            \$defaults = \$class->getDefaultProperties();

            foreach (\$class->getProperties(\\ReflectionProperty::IS_PUBLIC | \\ReflectionProperty::IS_PROTECTED) as \$p) {
                yield \$p->getDocComment().\$p;
                yield print_r(isset(\$defaults[\$p->name]) && !\\is_object(\$defaults[\$p->name]) ? \$defaults[\$p->name] : null, true);
            }
        }

        foreach (\$class->getMethods(\\ReflectionMethod::IS_PUBLIC | \\ReflectionMethod::IS_PROTECTED) as \$m) {
            yield preg_replace('/^  @@.*/m', '', \$m);

            \$defaults = [];
            foreach (\$m->getParameters() as \$p) {
                \$defaults[\$p->name] = \$p->isDefaultValueAvailable() ? \$p->getDefaultValue() : null;
            }
            yield print_r(\$defaults, true);
        }

        if (\$class->isAbstract() || \$class->isInterface() || \$class->isTrait()) {
            return;
        }

        if (interface_exists(EventSubscriberInterface::class, false) && \$class->isSubclassOf(EventSubscriberInterface::class)) {
            yield EventSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedEvents(), true);
        }

        if (interface_exists(MessageSubscriberInterface::class, false) && \$class->isSubclassOf(MessageSubscriberInterface::class)) {
            yield MessageSubscriberInterface::class;
            foreach (\$class->name::getHandledMessages() as \$key => \$value) {
                yield \$key.print_r(\$value, true);
            }
        }

        if (interface_exists(LegacyServiceSubscriberInterface::class, false) && \$class->isSubclassOf(LegacyServiceSubscriberInterface::class)) {
            yield LegacyServiceSubscriberInterface::class;
            yield print_r([\$class->name, 'getSubscribedServices'](), true);
        } elseif (interface_exists(ServiceSubscriberInterface::class, false) && \$class->isSubclassOf(ServiceSubscriberInterface::class)) {
            yield ServiceSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedServices(), true);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Resource/ReflectionClassResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface as LegacyServiceSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.3
 */
class ReflectionClassResource implements SelfCheckingResourceInterface
{
    private \$files = [];
    private \$className;
    private \$classReflector;
    private \$excludedVendors = [];
    private \$hash;

    public function __construct(\\ReflectionClass \$classReflector, array \$excludedVendors = [])
    {
        \$this->className = \$classReflector->name;
        \$this->classReflector = \$classReflector;
        \$this->excludedVendors = \$excludedVendors;
    }

    public function isFresh(\$timestamp)
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        foreach (\$this->files as \$file => \$v) {
            if (false === \$filemtime = @filemtime(\$file)) {
                return false;
            }

            if (\$filemtime > \$timestamp) {
                return \$this->hash === \$this->computeHash();
            }
        }

        return true;
    }

    public function __toString()
    {
        return 'reflection.'.\$this->className;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
            \$this->loadFiles(\$this->classReflector);
        }

        return ['files', 'className', 'hash'];
    }

    private function loadFiles(\\ReflectionClass \$class)
    {
        foreach (\$class->getInterfaces() as \$v) {
            \$this->loadFiles(\$v);
        }
        do {
            \$file = \$class->getFileName();
            if (false !== \$file && file_exists(\$file)) {
                foreach (\$this->excludedVendors as \$vendor) {
                    if (0 === strpos(\$file, \$vendor) && false !== strpbrk(substr(\$file, \\strlen(\$vendor), 1), '/'.\\DIRECTORY_SEPARATOR)) {
                        \$file = false;
                        break;
                    }
                }
                if (\$file) {
                    \$this->files[\$file] = null;
                }
            }
            foreach (\$class->getTraits() as \$v) {
                \$this->loadFiles(\$v);
            }
        } while (\$class = \$class->getParentClass());
    }

    private function computeHash()
    {
        if (null === \$this->classReflector) {
            try {
                \$this->classReflector = new \\ReflectionClass(\$this->className);
            } catch (\\ReflectionException \$e) {
                // the class does not exist anymore
                return false;
            }
        }
        \$hash = hash_init('md5');

        foreach (\$this->generateSignature(\$this->classReflector) as \$info) {
            hash_update(\$hash, \$info);
        }

        return hash_final(\$hash);
    }

    private function generateSignature(\\ReflectionClass \$class)
    {
        yield \$class->getDocComment();
        yield (int) \$class->isFinal();
        yield (int) \$class->isAbstract();

        if (\$class->isTrait()) {
            yield print_r(class_uses(\$class->name), true);
        } else {
            yield print_r(class_parents(\$class->name), true);
            yield print_r(class_implements(\$class->name), true);
            yield print_r(\$class->getConstants(), true);
        }

        if (!\$class->isInterface()) {
            \$defaults = \$class->getDefaultProperties();

            foreach (\$class->getProperties(\\ReflectionProperty::IS_PUBLIC | \\ReflectionProperty::IS_PROTECTED) as \$p) {
                yield \$p->getDocComment().\$p;
                yield print_r(isset(\$defaults[\$p->name]) && !\\is_object(\$defaults[\$p->name]) ? \$defaults[\$p->name] : null, true);
            }
        }

        foreach (\$class->getMethods(\\ReflectionMethod::IS_PUBLIC | \\ReflectionMethod::IS_PROTECTED) as \$m) {
            yield preg_replace('/^  @@.*/m', '', \$m);

            \$defaults = [];
            foreach (\$m->getParameters() as \$p) {
                \$defaults[\$p->name] = \$p->isDefaultValueAvailable() ? \$p->getDefaultValue() : null;
            }
            yield print_r(\$defaults, true);
        }

        if (\$class->isAbstract() || \$class->isInterface() || \$class->isTrait()) {
            return;
        }

        if (interface_exists(EventSubscriberInterface::class, false) && \$class->isSubclassOf(EventSubscriberInterface::class)) {
            yield EventSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedEvents(), true);
        }

        if (interface_exists(MessageSubscriberInterface::class, false) && \$class->isSubclassOf(MessageSubscriberInterface::class)) {
            yield MessageSubscriberInterface::class;
            foreach (\$class->name::getHandledMessages() as \$key => \$value) {
                yield \$key.print_r(\$value, true);
            }
        }

        if (interface_exists(LegacyServiceSubscriberInterface::class, false) && \$class->isSubclassOf(LegacyServiceSubscriberInterface::class)) {
            yield LegacyServiceSubscriberInterface::class;
            yield print_r([\$class->name, 'getSubscribedServices'](), true);
        } elseif (interface_exists(ServiceSubscriberInterface::class, false) && \$class->isSubclassOf(ServiceSubscriberInterface::class)) {
            yield ServiceSubscriberInterface::class;
            yield print_r(\$class->name::getSubscribedServices(), true);
        }
    }
}
", "vendor/symfony/config/Resource/ReflectionClassResource.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Resource/ReflectionClassResource.php");
    }
}
