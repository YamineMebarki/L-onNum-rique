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

/* vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php */
class __TwigTemplate_8ea3bbd46243185ea9039a520e1636ea46ac38cc452bd3a5fb335c254e719310 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator;

use Doctrine\\Instantiator\\Exception\\InvalidArgumentException;
use Doctrine\\Instantiator\\Exception\\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use function class_exists;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * {@inheritDoc}
 */
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \\unserialize} should invoke
     * the method {@see \\Serializable::unserialize()} when dealing with classes implementing
     * the {@see \\Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static \$cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static \$cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate(\$className)
    {
        if (isset(self::\$cachedCloneables[\$className])) {
            return clone self::\$cachedCloneables[\$className];
        }

        if (isset(self::\$cachedInstantiators[\$className])) {
            \$factory = self::\$cachedInstantiators[\$className];

            return \$factory();
        }

        return \$this->buildAndCacheFromFactory(\$className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
     */
    private function buildAndCacheFromFactory(string \$className)
    {
        \$factory  = self::\$cachedInstantiators[\$className] = \$this->buildFactory(\$className);
        \$instance = \$factory();

        if (\$this->isSafeToClone(new ReflectionClass(\$instance))) {
            self::\$cachedCloneables[\$className] = clone \$instance;
        }

        return \$instance;
    }

    /**
     * Builds a callable capable of instantiating the given \$className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
     */
    private function buildFactory(string \$className) : callable
    {
        \$reflectionClass = \$this->getReflectionClass(\$className);

        if (\$this->isInstantiableViaReflection(\$reflectionClass)) {
            return [\$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        \$serializedString = sprintf(
            '%s:%d:\"%s\":0:{}',
            self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen(\$className),
            \$className
        );

        \$this->checkIfUnSerializationIsSupported(\$reflectionClass, \$serializedString);

        return static function () use (\$serializedString) {
            return unserialize(\$serializedString);
        };
    }

    /**
     * @param string \$className
     *
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getReflectionClass(\$className) : ReflectionClass
    {
        if (! class_exists(\$className)) {
            throw InvalidArgumentException::fromNonExistingClass(\$className);
        }

        \$reflection = new ReflectionClass(\$className);

        if (\$reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass(\$reflection);
        }

        return \$reflection;
    }

    /**
     * @throws UnexpectedValueException
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        set_error_handler(static function (\$code, \$message, \$file, \$line) use (\$reflectionClass, & \$error) : void {
            \$error = UnexpectedValueException::fromUncleanUnSerialization(
                \$reflectionClass,
                \$message,
                \$code,
                \$file,
                \$line
            );
        });

        try {
            \$this->attemptInstantiationViaUnSerialization(\$reflectionClass, \$serializedString);
        } finally {
            restore_error_handler();
        }

        if (\$error) {
            throw \$error;
        }
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        try {
            unserialize(\$serializedString);
        } catch (Exception \$exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException(\$reflectionClass, \$exception);
        }
    }

    private function isInstantiableViaReflection(ReflectionClass \$reflectionClass) : bool
    {
        return ! (\$this->hasInternalAncestors(\$reflectionClass) && \$reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
     */
    private function hasInternalAncestors(ReflectionClass \$reflectionClass) : bool
    {
        do {
            if (\$reflectionClass->isInternal()) {
                return true;
            }

            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
     */
    private function isSafeToClone(ReflectionClass \$reflection) : bool
    {
        return \$reflection->isCloneable() && ! \$reflection->hasMethod('__clone');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator;

use Doctrine\\Instantiator\\Exception\\InvalidArgumentException;
use Doctrine\\Instantiator\\Exception\\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use function class_exists;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * {@inheritDoc}
 */
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \\unserialize} should invoke
     * the method {@see \\Serializable::unserialize()} when dealing with classes implementing
     * the {@see \\Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static \$cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static \$cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate(\$className)
    {
        if (isset(self::\$cachedCloneables[\$className])) {
            return clone self::\$cachedCloneables[\$className];
        }

        if (isset(self::\$cachedInstantiators[\$className])) {
            \$factory = self::\$cachedInstantiators[\$className];

            return \$factory();
        }

        return \$this->buildAndCacheFromFactory(\$className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
     */
    private function buildAndCacheFromFactory(string \$className)
    {
        \$factory  = self::\$cachedInstantiators[\$className] = \$this->buildFactory(\$className);
        \$instance = \$factory();

        if (\$this->isSafeToClone(new ReflectionClass(\$instance))) {
            self::\$cachedCloneables[\$className] = clone \$instance;
        }

        return \$instance;
    }

    /**
     * Builds a callable capable of instantiating the given \$className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
     */
    private function buildFactory(string \$className) : callable
    {
        \$reflectionClass = \$this->getReflectionClass(\$className);

        if (\$this->isInstantiableViaReflection(\$reflectionClass)) {
            return [\$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        \$serializedString = sprintf(
            '%s:%d:\"%s\":0:{}',
            self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen(\$className),
            \$className
        );

        \$this->checkIfUnSerializationIsSupported(\$reflectionClass, \$serializedString);

        return static function () use (\$serializedString) {
            return unserialize(\$serializedString);
        };
    }

    /**
     * @param string \$className
     *
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getReflectionClass(\$className) : ReflectionClass
    {
        if (! class_exists(\$className)) {
            throw InvalidArgumentException::fromNonExistingClass(\$className);
        }

        \$reflection = new ReflectionClass(\$className);

        if (\$reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass(\$reflection);
        }

        return \$reflection;
    }

    /**
     * @throws UnexpectedValueException
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        set_error_handler(static function (\$code, \$message, \$file, \$line) use (\$reflectionClass, & \$error) : void {
            \$error = UnexpectedValueException::fromUncleanUnSerialization(
                \$reflectionClass,
                \$message,
                \$code,
                \$file,
                \$line
            );
        });

        try {
            \$this->attemptInstantiationViaUnSerialization(\$reflectionClass, \$serializedString);
        } finally {
            restore_error_handler();
        }

        if (\$error) {
            throw \$error;
        }
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass \$reflectionClass, string \$serializedString) : void
    {
        try {
            unserialize(\$serializedString);
        } catch (Exception \$exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException(\$reflectionClass, \$exception);
        }
    }

    private function isInstantiableViaReflection(ReflectionClass \$reflectionClass) : bool
    {
        return ! (\$this->hasInternalAncestors(\$reflectionClass) && \$reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
     */
    private function hasInternalAncestors(ReflectionClass \$reflectionClass) : bool
    {
        do {
            if (\$reflectionClass->isInternal()) {
                return true;
            }

            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
     */
    private function isSafeToClone(ReflectionClass \$reflection) : bool
    {
        return \$reflection->isCloneable() && ! \$reflection->hasMethod('__clone');
    }
}
", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php");
    }
}
