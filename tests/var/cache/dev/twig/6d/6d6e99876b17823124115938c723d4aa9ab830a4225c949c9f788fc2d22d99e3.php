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

/* vendor/symfony/property-info/Type.php */
class __TwigTemplate_5a437e11b8b124fe8c7f769a756d50c9ce6b2687a0f264b61aa80cd1ca757862 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Type.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Type.php"));

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

namespace Symfony\\Component\\PropertyInfo;

/**
 * Type value object (immutable).
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class Type
{
    const BUILTIN_TYPE_INT = 'int';
    const BUILTIN_TYPE_FLOAT = 'float';
    const BUILTIN_TYPE_STRING = 'string';
    const BUILTIN_TYPE_BOOL = 'bool';
    const BUILTIN_TYPE_RESOURCE = 'resource';
    const BUILTIN_TYPE_OBJECT = 'object';
    const BUILTIN_TYPE_ARRAY = 'array';
    const BUILTIN_TYPE_NULL = 'null';
    const BUILTIN_TYPE_CALLABLE = 'callable';
    const BUILTIN_TYPE_ITERABLE = 'iterable';

    /**
     * List of PHP builtin types.
     *
     * @var string[]
     */
    public static \$builtinTypes = [
        self::BUILTIN_TYPE_INT,
        self::BUILTIN_TYPE_FLOAT,
        self::BUILTIN_TYPE_STRING,
        self::BUILTIN_TYPE_BOOL,
        self::BUILTIN_TYPE_RESOURCE,
        self::BUILTIN_TYPE_OBJECT,
        self::BUILTIN_TYPE_ARRAY,
        self::BUILTIN_TYPE_CALLABLE,
        self::BUILTIN_TYPE_NULL,
        self::BUILTIN_TYPE_ITERABLE,
    ];

    private \$builtinType;
    private \$nullable;
    private \$class;
    private \$collection;
    private \$collectionKeyType;
    private \$collectionValueType;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$builtinType, bool \$nullable = false, string \$class = null, bool \$collection = false, self \$collectionKeyType = null, self \$collectionValueType = null)
    {
        if (!\\in_array(\$builtinType, self::\$builtinTypes)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid PHP type.', \$builtinType));
        }

        \$this->builtinType = \$builtinType;
        \$this->nullable = \$nullable;
        \$this->class = \$class;
        \$this->collection = \$collection;
        \$this->collectionKeyType = \$collectionKeyType;
        \$this->collectionValueType = \$collectionValueType;
    }

    /**
     * Gets built-in type.
     *
     * Can be bool, int, float, string, array, object, resource, null, callback or iterable.
     */
    public function getBuiltinType(): string
    {
        return \$this->builtinType;
    }

    public function isNullable(): bool
    {
        return \$this->nullable;
    }

    /**
     * Gets the class name.
     *
     * Only applicable if the built-in type is object.
     */
    public function getClassName(): ?string
    {
        return \$this->class;
    }

    public function isCollection(): bool
    {
        return \$this->collection;
    }

    /**
     * Gets collection key type.
     *
     * Only applicable for a collection type.
     */
    public function getCollectionKeyType(): ?self
    {
        return \$this->collectionKeyType;
    }

    /**
     * Gets collection value type.
     *
     * Only applicable for a collection type.
     */
    public function getCollectionValueType(): ?self
    {
        return \$this->collectionValueType;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Type.php";
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

namespace Symfony\\Component\\PropertyInfo;

/**
 * Type value object (immutable).
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class Type
{
    const BUILTIN_TYPE_INT = 'int';
    const BUILTIN_TYPE_FLOAT = 'float';
    const BUILTIN_TYPE_STRING = 'string';
    const BUILTIN_TYPE_BOOL = 'bool';
    const BUILTIN_TYPE_RESOURCE = 'resource';
    const BUILTIN_TYPE_OBJECT = 'object';
    const BUILTIN_TYPE_ARRAY = 'array';
    const BUILTIN_TYPE_NULL = 'null';
    const BUILTIN_TYPE_CALLABLE = 'callable';
    const BUILTIN_TYPE_ITERABLE = 'iterable';

    /**
     * List of PHP builtin types.
     *
     * @var string[]
     */
    public static \$builtinTypes = [
        self::BUILTIN_TYPE_INT,
        self::BUILTIN_TYPE_FLOAT,
        self::BUILTIN_TYPE_STRING,
        self::BUILTIN_TYPE_BOOL,
        self::BUILTIN_TYPE_RESOURCE,
        self::BUILTIN_TYPE_OBJECT,
        self::BUILTIN_TYPE_ARRAY,
        self::BUILTIN_TYPE_CALLABLE,
        self::BUILTIN_TYPE_NULL,
        self::BUILTIN_TYPE_ITERABLE,
    ];

    private \$builtinType;
    private \$nullable;
    private \$class;
    private \$collection;
    private \$collectionKeyType;
    private \$collectionValueType;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$builtinType, bool \$nullable = false, string \$class = null, bool \$collection = false, self \$collectionKeyType = null, self \$collectionValueType = null)
    {
        if (!\\in_array(\$builtinType, self::\$builtinTypes)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid PHP type.', \$builtinType));
        }

        \$this->builtinType = \$builtinType;
        \$this->nullable = \$nullable;
        \$this->class = \$class;
        \$this->collection = \$collection;
        \$this->collectionKeyType = \$collectionKeyType;
        \$this->collectionValueType = \$collectionValueType;
    }

    /**
     * Gets built-in type.
     *
     * Can be bool, int, float, string, array, object, resource, null, callback or iterable.
     */
    public function getBuiltinType(): string
    {
        return \$this->builtinType;
    }

    public function isNullable(): bool
    {
        return \$this->nullable;
    }

    /**
     * Gets the class name.
     *
     * Only applicable if the built-in type is object.
     */
    public function getClassName(): ?string
    {
        return \$this->class;
    }

    public function isCollection(): bool
    {
        return \$this->collection;
    }

    /**
     * Gets collection key type.
     *
     * Only applicable for a collection type.
     */
    public function getCollectionKeyType(): ?self
    {
        return \$this->collectionKeyType;
    }

    /**
     * Gets collection value type.
     *
     * Only applicable for a collection type.
     */
    public function getCollectionValueType(): ?self
    {
        return \$this->collectionValueType;
    }
}
", "vendor/symfony/property-info/Type.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Type.php");
    }
}
