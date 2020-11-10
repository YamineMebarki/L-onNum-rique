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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php */
class __TwigTemplate_a81d5c3900ab6c0e855865523441b2a371f21e2a4bd74855e3955685c180c9e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function end;
use function explode;
use function str_replace;

/**
 * The base class for so-called Doctrine mapping types.
 *
 * A Type object is obtained by calling the static {@link getType()} method.
 */
abstract class Type
{
    public const TARRAY               = 'array';
    public const SIMPLE_ARRAY         = 'simple_array';
    public const JSON_ARRAY           = 'json_array';
    public const JSON                 = 'json';
    public const BIGINT               = 'bigint';
    public const BOOLEAN              = 'boolean';
    public const DATETIME             = 'datetime';
    public const DATETIME_IMMUTABLE   = 'datetime_immutable';
    public const DATETIMETZ           = 'datetimetz';
    public const DATETIMETZ_IMMUTABLE = 'datetimetz_immutable';
    public const DATE                 = 'date';
    public const DATE_IMMUTABLE       = 'date_immutable';
    public const TIME                 = 'time';
    public const TIME_IMMUTABLE       = 'time_immutable';
    public const DECIMAL              = 'decimal';
    public const INTEGER              = 'integer';
    public const OBJECT               = 'object';
    public const SMALLINT             = 'smallint';
    public const STRING               = 'string';
    public const TEXT                 = 'text';
    public const BINARY               = 'binary';
    public const BLOB                 = 'blob';
    public const FLOAT                = 'float';
    public const GUID                 = 'guid';
    public const DATEINTERVAL         = 'dateinterval';

    /**
     * Map of already instantiated type objects. One instance per type (flyweight).
     *
     * @var self[]
     */
    private static \$_typeObjects = [];

    /**
     * The map of supported doctrine mapping types.
     *
     * @var string[]
     */
    private static \$_typesMap = [
        self::TARRAY => ArrayType::class,
        self::SIMPLE_ARRAY => SimpleArrayType::class,
        self::JSON_ARRAY => JsonArrayType::class,
        self::JSON => JsonType::class,
        self::OBJECT => ObjectType::class,
        self::BOOLEAN => BooleanType::class,
        self::INTEGER => IntegerType::class,
        self::SMALLINT => SmallIntType::class,
        self::BIGINT => BigIntType::class,
        self::STRING => StringType::class,
        self::TEXT => TextType::class,
        self::DATETIME => DateTimeType::class,
        self::DATETIME_IMMUTABLE => DateTimeImmutableType::class,
        self::DATETIMETZ => DateTimeTzType::class,
        self::DATETIMETZ_IMMUTABLE => DateTimeTzImmutableType::class,
        self::DATE => DateType::class,
        self::DATE_IMMUTABLE => DateImmutableType::class,
        self::TIME => TimeType::class,
        self::TIME_IMMUTABLE => TimeImmutableType::class,
        self::DECIMAL => DecimalType::class,
        self::FLOAT => FloatType::class,
        self::BINARY => BinaryType::class,
        self::BLOB => BlobType::class,
        self::GUID => GuidType::class,
        self::DATEINTERVAL => DateIntervalType::class,
    ];

    /**
     * Prevents instantiation and forces use of the factory method.
     */
    final private function __construct()
    {
    }

    /**
     * Converts a value from its PHP representation to its database representation
     * of this type.
     *
     * @param mixed            \$value    The value to convert.
     * @param AbstractPlatform \$platform The currently used database platform.
     *
     * @return mixed The database representation of the value.
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * Converts a value from its database representation to its PHP representation
     * of this type.
     *
     * @param mixed            \$value    The value to convert.
     * @param AbstractPlatform \$platform The currently used database platform.
     *
     * @return mixed The PHP representation of the value.
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * Gets the default length of this type.
     *
     * @deprecated Rely on information provided by the platform instead.
     *
     * @return int|null
     */
    public function getDefaultLength(AbstractPlatform \$platform)
    {
        return null;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param mixed[]          \$fieldDeclaration The field declaration.
     * @param AbstractPlatform \$platform         The currently used database platform.
     *
     * @return string
     */
    abstract public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform);

    /**
     * Gets the name of this type.
     *
     * @return string
     *
     * @todo Needed?
     */
    abstract public function getName();

    /**
     * Factory method to create type instances.
     * Type instances are implemented as flyweights.
     *
     * @param string \$name The name of the type (as returned by getName()).
     *
     * @return \\Doctrine\\DBAL\\Types\\Type
     *
     * @throws DBALException
     */
    public static function getType(\$name)
    {
        if (! isset(self::\$_typeObjects[\$name])) {
            if (! isset(self::\$_typesMap[\$name])) {
                throw DBALException::unknownColumnType(\$name);
            }
            self::\$_typeObjects[\$name] = new self::\$_typesMap[\$name]();
        }

        return self::\$_typeObjects[\$name];
    }

    /**
     * Adds a custom type to the type map.
     *
     * @param string \$name      The name of the type. This should correspond to what getName() returns.
     * @param string \$className The class name of the custom type.
     *
     * @return void
     *
     * @throws DBALException
     */
    public static function addType(\$name, \$className)
    {
        if (isset(self::\$_typesMap[\$name])) {
            throw DBALException::typeExists(\$name);
        }

        self::\$_typesMap[\$name] = \$className;
    }

    /**
     * Checks if exists support for a type.
     *
     * @param string \$name The name of the type.
     *
     * @return bool TRUE if type is supported; FALSE otherwise.
     */
    public static function hasType(\$name)
    {
        return isset(self::\$_typesMap[\$name]);
    }

    /**
     * Overrides an already defined type to use a different implementation.
     *
     * @param string \$name
     * @param string \$className
     *
     * @return void
     *
     * @throws DBALException
     */
    public static function overrideType(\$name, \$className)
    {
        if (! isset(self::\$_typesMap[\$name])) {
            throw DBALException::typeNotFound(\$name);
        }

        if (isset(self::\$_typeObjects[\$name])) {
            unset(self::\$_typeObjects[\$name]);
        }

        self::\$_typesMap[\$name] = \$className;
    }

    /**
     * Gets the (preferred) binding type for values of this type that
     * can be used when binding parameters to prepared statements.
     *
     * This method should return one of the {@link \\Doctrine\\DBAL\\ParameterType} constants.
     *
     * @return int
     */
    public function getBindingType()
    {
        return ParameterType::STRING;
    }

    /**
     * Gets the types array map which holds all registered types and the corresponding
     * type class
     *
     * @return string[]
     */
    public static function getTypesMap()
    {
        return self::\$_typesMap;
    }

    /**
     * @deprecated Relying on string representation is discouraged and will be removed in DBAL 3.0.
     *
     * @return string
     */
    public function __toString()
    {
        \$e = explode('\\\\', static::class);

        return str_replace('Type', '', end(\$e));
    }

    /**
     * Does working with this column require SQL conversion functions?
     *
     * This is a metadata function that is required for example in the ORM.
     * Usage of {@link convertToDatabaseValueSQL} and
     * {@link convertToPHPValueSQL} works for any type and mostly
     * does nothing. This method can additionally be used for optimization purposes.
     *
     * @return bool
     */
    public function canRequireSQLConversion()
    {
        return false;
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a database value.
     *
     * @param string \$sqlExpr
     *
     * @return string
     */
    public function convertToDatabaseValueSQL(\$sqlExpr, AbstractPlatform \$platform)
    {
        return \$sqlExpr;
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a PHP value.
     *
     * @param string           \$sqlExpr
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    public function convertToPHPValueSQL(\$sqlExpr, \$platform)
    {
        return \$sqlExpr;
    }

    /**
     * Gets an array of database types that map to this Doctrine type.
     *
     * @return string[]
     */
    public function getMappedDatabaseTypes(AbstractPlatform \$platform)
    {
        return [];
    }

    /**
     * If this Doctrine Type maps to an already mapped database type,
     * reverse schema engineering can't tell them apart. You need to mark
     * one of those types as commented, which will have Doctrine use an SQL
     * comment to typehint the actual Doctrine Type.
     *
     * @return bool
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function end;
use function explode;
use function str_replace;

/**
 * The base class for so-called Doctrine mapping types.
 *
 * A Type object is obtained by calling the static {@link getType()} method.
 */
abstract class Type
{
    public const TARRAY               = 'array';
    public const SIMPLE_ARRAY         = 'simple_array';
    public const JSON_ARRAY           = 'json_array';
    public const JSON                 = 'json';
    public const BIGINT               = 'bigint';
    public const BOOLEAN              = 'boolean';
    public const DATETIME             = 'datetime';
    public const DATETIME_IMMUTABLE   = 'datetime_immutable';
    public const DATETIMETZ           = 'datetimetz';
    public const DATETIMETZ_IMMUTABLE = 'datetimetz_immutable';
    public const DATE                 = 'date';
    public const DATE_IMMUTABLE       = 'date_immutable';
    public const TIME                 = 'time';
    public const TIME_IMMUTABLE       = 'time_immutable';
    public const DECIMAL              = 'decimal';
    public const INTEGER              = 'integer';
    public const OBJECT               = 'object';
    public const SMALLINT             = 'smallint';
    public const STRING               = 'string';
    public const TEXT                 = 'text';
    public const BINARY               = 'binary';
    public const BLOB                 = 'blob';
    public const FLOAT                = 'float';
    public const GUID                 = 'guid';
    public const DATEINTERVAL         = 'dateinterval';

    /**
     * Map of already instantiated type objects. One instance per type (flyweight).
     *
     * @var self[]
     */
    private static \$_typeObjects = [];

    /**
     * The map of supported doctrine mapping types.
     *
     * @var string[]
     */
    private static \$_typesMap = [
        self::TARRAY => ArrayType::class,
        self::SIMPLE_ARRAY => SimpleArrayType::class,
        self::JSON_ARRAY => JsonArrayType::class,
        self::JSON => JsonType::class,
        self::OBJECT => ObjectType::class,
        self::BOOLEAN => BooleanType::class,
        self::INTEGER => IntegerType::class,
        self::SMALLINT => SmallIntType::class,
        self::BIGINT => BigIntType::class,
        self::STRING => StringType::class,
        self::TEXT => TextType::class,
        self::DATETIME => DateTimeType::class,
        self::DATETIME_IMMUTABLE => DateTimeImmutableType::class,
        self::DATETIMETZ => DateTimeTzType::class,
        self::DATETIMETZ_IMMUTABLE => DateTimeTzImmutableType::class,
        self::DATE => DateType::class,
        self::DATE_IMMUTABLE => DateImmutableType::class,
        self::TIME => TimeType::class,
        self::TIME_IMMUTABLE => TimeImmutableType::class,
        self::DECIMAL => DecimalType::class,
        self::FLOAT => FloatType::class,
        self::BINARY => BinaryType::class,
        self::BLOB => BlobType::class,
        self::GUID => GuidType::class,
        self::DATEINTERVAL => DateIntervalType::class,
    ];

    /**
     * Prevents instantiation and forces use of the factory method.
     */
    final private function __construct()
    {
    }

    /**
     * Converts a value from its PHP representation to its database representation
     * of this type.
     *
     * @param mixed            \$value    The value to convert.
     * @param AbstractPlatform \$platform The currently used database platform.
     *
     * @return mixed The database representation of the value.
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * Converts a value from its database representation to its PHP representation
     * of this type.
     *
     * @param mixed            \$value    The value to convert.
     * @param AbstractPlatform \$platform The currently used database platform.
     *
     * @return mixed The PHP representation of the value.
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * Gets the default length of this type.
     *
     * @deprecated Rely on information provided by the platform instead.
     *
     * @return int|null
     */
    public function getDefaultLength(AbstractPlatform \$platform)
    {
        return null;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param mixed[]          \$fieldDeclaration The field declaration.
     * @param AbstractPlatform \$platform         The currently used database platform.
     *
     * @return string
     */
    abstract public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform);

    /**
     * Gets the name of this type.
     *
     * @return string
     *
     * @todo Needed?
     */
    abstract public function getName();

    /**
     * Factory method to create type instances.
     * Type instances are implemented as flyweights.
     *
     * @param string \$name The name of the type (as returned by getName()).
     *
     * @return \\Doctrine\\DBAL\\Types\\Type
     *
     * @throws DBALException
     */
    public static function getType(\$name)
    {
        if (! isset(self::\$_typeObjects[\$name])) {
            if (! isset(self::\$_typesMap[\$name])) {
                throw DBALException::unknownColumnType(\$name);
            }
            self::\$_typeObjects[\$name] = new self::\$_typesMap[\$name]();
        }

        return self::\$_typeObjects[\$name];
    }

    /**
     * Adds a custom type to the type map.
     *
     * @param string \$name      The name of the type. This should correspond to what getName() returns.
     * @param string \$className The class name of the custom type.
     *
     * @return void
     *
     * @throws DBALException
     */
    public static function addType(\$name, \$className)
    {
        if (isset(self::\$_typesMap[\$name])) {
            throw DBALException::typeExists(\$name);
        }

        self::\$_typesMap[\$name] = \$className;
    }

    /**
     * Checks if exists support for a type.
     *
     * @param string \$name The name of the type.
     *
     * @return bool TRUE if type is supported; FALSE otherwise.
     */
    public static function hasType(\$name)
    {
        return isset(self::\$_typesMap[\$name]);
    }

    /**
     * Overrides an already defined type to use a different implementation.
     *
     * @param string \$name
     * @param string \$className
     *
     * @return void
     *
     * @throws DBALException
     */
    public static function overrideType(\$name, \$className)
    {
        if (! isset(self::\$_typesMap[\$name])) {
            throw DBALException::typeNotFound(\$name);
        }

        if (isset(self::\$_typeObjects[\$name])) {
            unset(self::\$_typeObjects[\$name]);
        }

        self::\$_typesMap[\$name] = \$className;
    }

    /**
     * Gets the (preferred) binding type for values of this type that
     * can be used when binding parameters to prepared statements.
     *
     * This method should return one of the {@link \\Doctrine\\DBAL\\ParameterType} constants.
     *
     * @return int
     */
    public function getBindingType()
    {
        return ParameterType::STRING;
    }

    /**
     * Gets the types array map which holds all registered types and the corresponding
     * type class
     *
     * @return string[]
     */
    public static function getTypesMap()
    {
        return self::\$_typesMap;
    }

    /**
     * @deprecated Relying on string representation is discouraged and will be removed in DBAL 3.0.
     *
     * @return string
     */
    public function __toString()
    {
        \$e = explode('\\\\', static::class);

        return str_replace('Type', '', end(\$e));
    }

    /**
     * Does working with this column require SQL conversion functions?
     *
     * This is a metadata function that is required for example in the ORM.
     * Usage of {@link convertToDatabaseValueSQL} and
     * {@link convertToPHPValueSQL} works for any type and mostly
     * does nothing. This method can additionally be used for optimization purposes.
     *
     * @return bool
     */
    public function canRequireSQLConversion()
    {
        return false;
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a database value.
     *
     * @param string \$sqlExpr
     *
     * @return string
     */
    public function convertToDatabaseValueSQL(\$sqlExpr, AbstractPlatform \$platform)
    {
        return \$sqlExpr;
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a PHP value.
     *
     * @param string           \$sqlExpr
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    public function convertToPHPValueSQL(\$sqlExpr, \$platform)
    {
        return \$sqlExpr;
    }

    /**
     * Gets an array of database types that map to this Doctrine type.
     *
     * @return string[]
     */
    public function getMappedDatabaseTypes(AbstractPlatform \$platform)
    {
        return [];
    }

    /**
     * If this Doctrine Type maps to an already mapped database type,
     * reverse schema engineering can't tell them apart. You need to mark
     * one of those types as commented, which will have Doctrine use an SQL
     * comment to typehint the actual Doctrine Type.
     *
     * @return bool
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return false;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php");
    }
}
