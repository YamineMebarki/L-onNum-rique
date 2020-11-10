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

/* vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php */
class __TwigTemplate_f35631cad70549ccd078f8df440580e46915a57a2fb87906bc1efc9e62afa84a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\Scalar;
use PhpParser\\Node\\Stmt;

/**
 * This class defines helpers used in the implementation of builders. Don't use it directly.
 *
 * @internal
 */
final class BuilderHelpers
{
    /**
     * Normalizes a node: Converts builder objects to nodes.
     *
     * @param Node|Builder \$node The node to normalize
     *
     * @return Node The normalized node
     */
    public static function normalizeNode(\$node) : Node {
        if (\$node instanceof Builder) {
            return \$node->getNode();
        } elseif (\$node instanceof Node) {
            return \$node;
        }

        throw new \\LogicException('Expected node or builder object');
    }

    /**
     * Normalizes a node to a statement.
     *
     * Expressions are wrapped in a Stmt\\Expression node.
     *
     * @param Node|Builder \$node The node to normalize
     *
     * @return Stmt The normalized statement node
     */
    public static function normalizeStmt(\$node) : Stmt {
        \$node = self::normalizeNode(\$node);
        if (\$node instanceof Stmt) {
            return \$node;
        }

        if (\$node instanceof Expr) {
            return new Stmt\\Expression(\$node);
        }

        throw new \\LogicException('Expected statement or expression node');
    }

    /**
     * Normalizes strings to Identifier.
     *
     * @param string|Identifier \$name The identifier to normalize
     *
     * @return Identifier The normalized identifier
     */
    public static function normalizeIdentifier(\$name) : Identifier {
        if (\$name instanceof Identifier) {
            return \$name;
        }

        if (\\is_string(\$name)) {
            return new Identifier(\$name);
        }

        throw new \\LogicException('Expected string or instance of Node\\Identifier');
    }

    /**
     * Normalizes strings to Identifier, also allowing expressions.
     *
     * @param string|Identifier|Expr \$name The identifier to normalize
     *
     * @return Identifier|Expr The normalized identifier or expression
     */
    public static function normalizeIdentifierOrExpr(\$name) {
        if (\$name instanceof Identifier || \$name instanceof Expr) {
            return \$name;
        }

        if (\\is_string(\$name)) {
            return new Identifier(\$name);
        }

        throw new \\LogicException('Expected string or instance of Node\\Identifier or Node\\Expr');
    }

    /**
     * Normalizes a name: Converts string names to Name nodes.
     *
     * @param Name|string \$name The name to normalize
     *
     * @return Name The normalized name
     */
    public static function normalizeName(\$name) : Name {
        return self::normalizeNameCommon(\$name, false);
    }

    /**
     * Normalizes a name: Converts string names to Name nodes, while also allowing expressions.
     *
     * @param Expr|Name|string \$name The name to normalize
     *
     * @return Name|Expr The normalized name or expression
     */
    public static function normalizeNameOrExpr(\$name) {
        return self::normalizeNameCommon(\$name, true);
    }

    /**
     * Normalizes a name: Converts string names to Name nodes, optionally allowing expressions.
     *
     * @param Expr|Name|string \$name      The name to normalize
     * @param bool             \$allowExpr Whether to also allow expressions
     *
     * @return Name|Expr The normalized name, or expression (if allowed)
     */
    private static function normalizeNameCommon(\$name, bool \$allowExpr) {
        if (\$name instanceof Name) {
            return \$name;
        } elseif (is_string(\$name)) {
            if (!\$name) {
                throw new \\LogicException('Name cannot be empty');
            }

            if (\$name[0] === '\\\\') {
                return new Name\\FullyQualified(substr(\$name, 1));
            } elseif (0 === strpos(\$name, 'namespace\\\\')) {
                return new Name\\Relative(substr(\$name, strlen('namespace\\\\')));
            } else {
                return new Name(\$name);
            }
        }

        if (\$allowExpr) {
            if (\$name instanceof Expr) {
                return \$name;
            }
            throw new \\LogicException(
                'Name must be a string or an instance of Node\\Name or Node\\Expr'
            );
        } else {
            throw new \\LogicException('Name must be a string or an instance of Node\\Name');
        }
    }

    /**
     * Normalizes a type: Converts plain-text type names into proper AST representation.
     *
     * In particular, builtin types become Identifiers, custom types become Names and nullables
     * are wrapped in NullableType nodes.
     *
     * @param string|Name|Identifier|NullableType \$type The type to normalize
     *
     * @return Name|Identifier|NullableType The normalized type
     */
    public static function normalizeType(\$type) {
        if (!is_string(\$type)) {
            if (!\$type instanceof Name && !\$type instanceof Identifier
                    && !\$type instanceof NullableType) {
                throw new \\LogicException(
                    'Type must be a string, or an instance of Name, Identifier or NullableType');
            }
            return \$type;
        }

        \$nullable = false;
        if (strlen(\$type) > 0 && \$type[0] === '?') {
            \$nullable = true;
            \$type = substr(\$type, 1);
        }

        \$builtinTypes = [
            'array', 'callable', 'string', 'int', 'float', 'bool', 'iterable', 'void', 'object'
        ];

        \$lowerType = strtolower(\$type);
        if (in_array(\$lowerType, \$builtinTypes)) {
            \$type = new Identifier(\$lowerType);
        } else {
            \$type = self::normalizeName(\$type);
        }

        if (\$nullable && (string) \$type === 'void') {
            throw new \\LogicException('void type cannot be nullable');
        }

        return \$nullable ? new Node\\NullableType(\$type) : \$type;
    }

    /**
     * Normalizes a value: Converts nulls, booleans, integers,
     * floats, strings and arrays into their respective nodes
     *
     * @param Node\\Expr|bool|null|int|float|string|array \$value The value to normalize
     *
     * @return Expr The normalized value
     */
    public static function normalizeValue(\$value) : Expr {
        if (\$value instanceof Node\\Expr) {
            return \$value;
        } elseif (is_null(\$value)) {
            return new Expr\\ConstFetch(
                new Name('null')
            );
        } elseif (is_bool(\$value)) {
            return new Expr\\ConstFetch(
                new Name(\$value ? 'true' : 'false')
            );
        } elseif (is_int(\$value)) {
            return new Scalar\\LNumber(\$value);
        } elseif (is_float(\$value)) {
            return new Scalar\\DNumber(\$value);
        } elseif (is_string(\$value)) {
            return new Scalar\\String_(\$value);
        } elseif (is_array(\$value)) {
            \$items = [];
            \$lastKey = -1;
            foreach (\$value as \$itemKey => \$itemValue) {
                // for consecutive, numeric keys don't generate keys
                if (null !== \$lastKey && ++\$lastKey === \$itemKey) {
                    \$items[] = new Expr\\ArrayItem(
                        self::normalizeValue(\$itemValue)
                    );
                } else {
                    \$lastKey = null;
                    \$items[] = new Expr\\ArrayItem(
                        self::normalizeValue(\$itemValue),
                        self::normalizeValue(\$itemKey)
                    );
                }
            }

            return new Expr\\Array_(\$items);
        } else {
            throw new \\LogicException('Invalid value');
        }
    }

    /**
     * Normalizes a doc comment: Converts plain strings to PhpParser\\Comments\\Doc.
     *
     * @param Comments\\Doc|string \$docComment The doc comment to normalize
     *
     * @return Comments\\Doc The normalized doc comment
     */
    public static function normalizeDocComment(\$docComment) : Comments\\Doc {
        if (\$docComment instanceof Comments\\Doc) {
            return \$docComment;
        } elseif (is_string(\$docComment)) {
            return new Comments\\Doc(\$docComment);
        } else {
            throw new \\LogicException('Doc comment must be a string or an instance of PhpParser\\Comments\\Doc');
        }
    }

    /**
     * Adds a modifier and returns new modifier bitmask.
     *
     * @param int \$modifiers Existing modifiers
     * @param int \$modifier  Modifier to set
     *
     * @return int New modifiers
     */
    public static function addModifier(int \$modifiers, int \$modifier) : int {
        Stmt\\Class_::verifyModifier(\$modifiers, \$modifier);
        return \$modifiers | \$modifier;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\Scalar;
use PhpParser\\Node\\Stmt;

/**
 * This class defines helpers used in the implementation of builders. Don't use it directly.
 *
 * @internal
 */
final class BuilderHelpers
{
    /**
     * Normalizes a node: Converts builder objects to nodes.
     *
     * @param Node|Builder \$node The node to normalize
     *
     * @return Node The normalized node
     */
    public static function normalizeNode(\$node) : Node {
        if (\$node instanceof Builder) {
            return \$node->getNode();
        } elseif (\$node instanceof Node) {
            return \$node;
        }

        throw new \\LogicException('Expected node or builder object');
    }

    /**
     * Normalizes a node to a statement.
     *
     * Expressions are wrapped in a Stmt\\Expression node.
     *
     * @param Node|Builder \$node The node to normalize
     *
     * @return Stmt The normalized statement node
     */
    public static function normalizeStmt(\$node) : Stmt {
        \$node = self::normalizeNode(\$node);
        if (\$node instanceof Stmt) {
            return \$node;
        }

        if (\$node instanceof Expr) {
            return new Stmt\\Expression(\$node);
        }

        throw new \\LogicException('Expected statement or expression node');
    }

    /**
     * Normalizes strings to Identifier.
     *
     * @param string|Identifier \$name The identifier to normalize
     *
     * @return Identifier The normalized identifier
     */
    public static function normalizeIdentifier(\$name) : Identifier {
        if (\$name instanceof Identifier) {
            return \$name;
        }

        if (\\is_string(\$name)) {
            return new Identifier(\$name);
        }

        throw new \\LogicException('Expected string or instance of Node\\Identifier');
    }

    /**
     * Normalizes strings to Identifier, also allowing expressions.
     *
     * @param string|Identifier|Expr \$name The identifier to normalize
     *
     * @return Identifier|Expr The normalized identifier or expression
     */
    public static function normalizeIdentifierOrExpr(\$name) {
        if (\$name instanceof Identifier || \$name instanceof Expr) {
            return \$name;
        }

        if (\\is_string(\$name)) {
            return new Identifier(\$name);
        }

        throw new \\LogicException('Expected string or instance of Node\\Identifier or Node\\Expr');
    }

    /**
     * Normalizes a name: Converts string names to Name nodes.
     *
     * @param Name|string \$name The name to normalize
     *
     * @return Name The normalized name
     */
    public static function normalizeName(\$name) : Name {
        return self::normalizeNameCommon(\$name, false);
    }

    /**
     * Normalizes a name: Converts string names to Name nodes, while also allowing expressions.
     *
     * @param Expr|Name|string \$name The name to normalize
     *
     * @return Name|Expr The normalized name or expression
     */
    public static function normalizeNameOrExpr(\$name) {
        return self::normalizeNameCommon(\$name, true);
    }

    /**
     * Normalizes a name: Converts string names to Name nodes, optionally allowing expressions.
     *
     * @param Expr|Name|string \$name      The name to normalize
     * @param bool             \$allowExpr Whether to also allow expressions
     *
     * @return Name|Expr The normalized name, or expression (if allowed)
     */
    private static function normalizeNameCommon(\$name, bool \$allowExpr) {
        if (\$name instanceof Name) {
            return \$name;
        } elseif (is_string(\$name)) {
            if (!\$name) {
                throw new \\LogicException('Name cannot be empty');
            }

            if (\$name[0] === '\\\\') {
                return new Name\\FullyQualified(substr(\$name, 1));
            } elseif (0 === strpos(\$name, 'namespace\\\\')) {
                return new Name\\Relative(substr(\$name, strlen('namespace\\\\')));
            } else {
                return new Name(\$name);
            }
        }

        if (\$allowExpr) {
            if (\$name instanceof Expr) {
                return \$name;
            }
            throw new \\LogicException(
                'Name must be a string or an instance of Node\\Name or Node\\Expr'
            );
        } else {
            throw new \\LogicException('Name must be a string or an instance of Node\\Name');
        }
    }

    /**
     * Normalizes a type: Converts plain-text type names into proper AST representation.
     *
     * In particular, builtin types become Identifiers, custom types become Names and nullables
     * are wrapped in NullableType nodes.
     *
     * @param string|Name|Identifier|NullableType \$type The type to normalize
     *
     * @return Name|Identifier|NullableType The normalized type
     */
    public static function normalizeType(\$type) {
        if (!is_string(\$type)) {
            if (!\$type instanceof Name && !\$type instanceof Identifier
                    && !\$type instanceof NullableType) {
                throw new \\LogicException(
                    'Type must be a string, or an instance of Name, Identifier or NullableType');
            }
            return \$type;
        }

        \$nullable = false;
        if (strlen(\$type) > 0 && \$type[0] === '?') {
            \$nullable = true;
            \$type = substr(\$type, 1);
        }

        \$builtinTypes = [
            'array', 'callable', 'string', 'int', 'float', 'bool', 'iterable', 'void', 'object'
        ];

        \$lowerType = strtolower(\$type);
        if (in_array(\$lowerType, \$builtinTypes)) {
            \$type = new Identifier(\$lowerType);
        } else {
            \$type = self::normalizeName(\$type);
        }

        if (\$nullable && (string) \$type === 'void') {
            throw new \\LogicException('void type cannot be nullable');
        }

        return \$nullable ? new Node\\NullableType(\$type) : \$type;
    }

    /**
     * Normalizes a value: Converts nulls, booleans, integers,
     * floats, strings and arrays into their respective nodes
     *
     * @param Node\\Expr|bool|null|int|float|string|array \$value The value to normalize
     *
     * @return Expr The normalized value
     */
    public static function normalizeValue(\$value) : Expr {
        if (\$value instanceof Node\\Expr) {
            return \$value;
        } elseif (is_null(\$value)) {
            return new Expr\\ConstFetch(
                new Name('null')
            );
        } elseif (is_bool(\$value)) {
            return new Expr\\ConstFetch(
                new Name(\$value ? 'true' : 'false')
            );
        } elseif (is_int(\$value)) {
            return new Scalar\\LNumber(\$value);
        } elseif (is_float(\$value)) {
            return new Scalar\\DNumber(\$value);
        } elseif (is_string(\$value)) {
            return new Scalar\\String_(\$value);
        } elseif (is_array(\$value)) {
            \$items = [];
            \$lastKey = -1;
            foreach (\$value as \$itemKey => \$itemValue) {
                // for consecutive, numeric keys don't generate keys
                if (null !== \$lastKey && ++\$lastKey === \$itemKey) {
                    \$items[] = new Expr\\ArrayItem(
                        self::normalizeValue(\$itemValue)
                    );
                } else {
                    \$lastKey = null;
                    \$items[] = new Expr\\ArrayItem(
                        self::normalizeValue(\$itemValue),
                        self::normalizeValue(\$itemKey)
                    );
                }
            }

            return new Expr\\Array_(\$items);
        } else {
            throw new \\LogicException('Invalid value');
        }
    }

    /**
     * Normalizes a doc comment: Converts plain strings to PhpParser\\Comments\\Doc.
     *
     * @param Comments\\Doc|string \$docComment The doc comment to normalize
     *
     * @return Comments\\Doc The normalized doc comment
     */
    public static function normalizeDocComment(\$docComment) : Comments\\Doc {
        if (\$docComment instanceof Comments\\Doc) {
            return \$docComment;
        } elseif (is_string(\$docComment)) {
            return new Comments\\Doc(\$docComment);
        } else {
            throw new \\LogicException('Doc comment must be a string or an instance of PhpParser\\Comments\\Doc');
        }
    }

    /**
     * Adds a modifier and returns new modifier bitmask.
     *
     * @param int \$modifiers Existing modifiers
     * @param int \$modifier  Modifier to set
     *
     * @return int New modifiers
     */
    public static function addModifier(int \$modifiers, int \$modifier) : int {
        Stmt\\Class_::verifyModifier(\$modifiers, \$modifier);
        return \$modifiers | \$modifier;
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/BuilderHelpers.php");
    }
}
