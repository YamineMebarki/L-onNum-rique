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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Name.php */
class __TwigTemplate_8ea165803b519724470b581700ad97d35f8a7e84b07368ba9c94364d1f80f407 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Name.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Name.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class Name extends NodeAbstract
{
    /** @var string[] Parts of the name */
    public \$parts;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs a name node.
     *
     * @param string|string[]|self \$name       Name as string, part array or Name instance (copy ctor)
     * @param array                \$attributes Additional attributes
     */
    public function __construct(\$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->parts = self::prepareName(\$name);
    }

    public function getSubNodeNames() : array {
        return ['parts'];
    }

    /**
     * Gets the first part of the name, i.e. everything before the first namespace separator.
     *
     * @return string First part of the name
     */
    public function getFirst() : string {
        return \$this->parts[0];
    }

    /**
     * Gets the last part of the name, i.e. everything after the last namespace separator.
     *
     * @return string Last part of the name
     */
    public function getLast() : string {
        return \$this->parts[count(\$this->parts) - 1];
    }

    /**
     * Checks whether the name is unqualified. (E.g. Name)
     *
     * @return bool Whether the name is unqualified
     */
    public function isUnqualified() : bool {
        return 1 === count(\$this->parts);
    }

    /**
     * Checks whether the name is qualified. (E.g. Name\\Name)
     *
     * @return bool Whether the name is qualified
     */
    public function isQualified() : bool {
        return 1 < count(\$this->parts);
    }

    /**
     * Checks whether the name is fully qualified. (E.g. \\Name)
     *
     * @return bool Whether the name is fully qualified
     */
    public function isFullyQualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\\Name)
     *
     * @return bool Whether the name is relative
     */
    public function isRelative() : bool {
        return false;
    }

    /**
     * Returns a string representation of the name itself, without taking taking the name type into
     * account (e.g., not including a leading backslash for fully qualified names).
     *
     * @return string String representation
     */
    public function toString() : string {
        return implode('\\\\', \$this->parts);
    }

    /**
     * Returns a string representation of the name as it would occur in code (e.g., including
     * leading backslash for fully qualified names.
     *
     * @return string String representation
     */
    public function toCodeString() : string {
        return \$this->toString();
    }

    /**
     * Returns lowercased string representation of the name, without taking the name type into
     * account (e.g., no leading backslash for fully qualified names).
     *
     * @return string Lowercased string representation
     */
    public function toLowerString() : string {
        return strtolower(implode('\\\\', \$this->parts));
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return count(\$this->parts) === 1
            && isset(self::\$specialClassNames[strtolower(\$this->parts[0])]);
    }

    /**
     * Returns a string representation of the name by imploding the namespace parts with the
     * namespace separator.
     *
     * @return string String representation
     */
    public function __toString() : string {
        return implode('\\\\', \$this->parts);
    }

    /**
     * Gets a slice of a name (similar to array_slice).
     *
     * This method returns a new instance of the same type as the original and with the same
     * attributes.
     *
     * If the slice is empty, null is returned. The null value will be correctly handled in
     * concatenations using concat().
     *
     * Offset and length have the same meaning as in array_slice().
     *
     * @param int      \$offset Offset to start the slice at (may be negative)
     * @param int|null \$length Length of the slice (may be negative)
     *
     * @return static|null Sliced name
     */
    public function slice(int \$offset, int \$length = null) {
        \$numParts = count(\$this->parts);

        \$realOffset = \$offset < 0 ? \$offset + \$numParts : \$offset;
        if (\$realOffset < 0 || \$realOffset > \$numParts) {
            throw new \\OutOfBoundsException(sprintf('Offset %d is out of bounds', \$offset));
        }

        if (null === \$length) {
            \$realLength = \$numParts - \$realOffset;
        } else {
            \$realLength = \$length < 0 ? \$length + \$numParts - \$realOffset : \$length;
            if (\$realLength < 0 || \$realLength > \$numParts) {
                throw new \\OutOfBoundsException(sprintf('Length %d is out of bounds', \$length));
            }
        }

        if (\$realLength === 0) {
            // Empty slice is represented as null
            return null;
        }

        return new static(array_slice(\$this->parts, \$realOffset, \$realLength), \$this->attributes);
    }

    /**
     * Concatenate two names, yielding a new Name instance.
     *
     * The type of the generated instance depends on which class this method is called on, for
     * example Name\\FullyQualified::concat() will yield a Name\\FullyQualified instance.
     *
     * If one of the arguments is null, a new instance of the other name will be returned. If both
     * arguments are null, null will be returned. As such, writing
     *     Name::concat(\$namespace, \$shortName)
     * where \$namespace is a Name node or null will work as expected.
     *
     * @param string|string[]|self|null \$name1      The first name
     * @param string|string[]|self|null \$name2      The second name
     * @param array                     \$attributes Attributes to assign to concatenated name
     *
     * @return static|null Concatenated name
     */
    public static function concat(\$name1, \$name2, array \$attributes = []) {
        if (null === \$name1 && null === \$name2) {
            return null;
        } elseif (null === \$name1) {
            return new static(self::prepareName(\$name2), \$attributes);
        } elseif (null === \$name2) {
            return new static(self::prepareName(\$name1), \$attributes);
        } else {
            return new static(
                array_merge(self::prepareName(\$name1), self::prepareName(\$name2)), \$attributes
            );
        }
    }

    /**
     * Prepares a (string, array or Name node) name for use in name changing methods by converting
     * it to an array.
     *
     * @param string|string[]|self \$name Name to prepare
     *
     * @return string[] Prepared name
     */
    private static function prepareName(\$name) : array {
        if (\\is_string(\$name)) {
            if ('' === \$name) {
                throw new \\InvalidArgumentException('Name cannot be empty');
            }

            return explode('\\\\', \$name);
        } elseif (\\is_array(\$name)) {
            if (empty(\$name)) {
                throw new \\InvalidArgumentException('Name cannot be empty');
            }

            return \$name;
        } elseif (\$name instanceof self) {
            return \$name->parts;
        }

        throw new \\InvalidArgumentException(
            'Expected string, array of parts or Name instance'
        );
    }

    public function getType() : string {
        return 'Name';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Name.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class Name extends NodeAbstract
{
    /** @var string[] Parts of the name */
    public \$parts;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs a name node.
     *
     * @param string|string[]|self \$name       Name as string, part array or Name instance (copy ctor)
     * @param array                \$attributes Additional attributes
     */
    public function __construct(\$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->parts = self::prepareName(\$name);
    }

    public function getSubNodeNames() : array {
        return ['parts'];
    }

    /**
     * Gets the first part of the name, i.e. everything before the first namespace separator.
     *
     * @return string First part of the name
     */
    public function getFirst() : string {
        return \$this->parts[0];
    }

    /**
     * Gets the last part of the name, i.e. everything after the last namespace separator.
     *
     * @return string Last part of the name
     */
    public function getLast() : string {
        return \$this->parts[count(\$this->parts) - 1];
    }

    /**
     * Checks whether the name is unqualified. (E.g. Name)
     *
     * @return bool Whether the name is unqualified
     */
    public function isUnqualified() : bool {
        return 1 === count(\$this->parts);
    }

    /**
     * Checks whether the name is qualified. (E.g. Name\\Name)
     *
     * @return bool Whether the name is qualified
     */
    public function isQualified() : bool {
        return 1 < count(\$this->parts);
    }

    /**
     * Checks whether the name is fully qualified. (E.g. \\Name)
     *
     * @return bool Whether the name is fully qualified
     */
    public function isFullyQualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\\Name)
     *
     * @return bool Whether the name is relative
     */
    public function isRelative() : bool {
        return false;
    }

    /**
     * Returns a string representation of the name itself, without taking taking the name type into
     * account (e.g., not including a leading backslash for fully qualified names).
     *
     * @return string String representation
     */
    public function toString() : string {
        return implode('\\\\', \$this->parts);
    }

    /**
     * Returns a string representation of the name as it would occur in code (e.g., including
     * leading backslash for fully qualified names.
     *
     * @return string String representation
     */
    public function toCodeString() : string {
        return \$this->toString();
    }

    /**
     * Returns lowercased string representation of the name, without taking the name type into
     * account (e.g., no leading backslash for fully qualified names).
     *
     * @return string Lowercased string representation
     */
    public function toLowerString() : string {
        return strtolower(implode('\\\\', \$this->parts));
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return count(\$this->parts) === 1
            && isset(self::\$specialClassNames[strtolower(\$this->parts[0])]);
    }

    /**
     * Returns a string representation of the name by imploding the namespace parts with the
     * namespace separator.
     *
     * @return string String representation
     */
    public function __toString() : string {
        return implode('\\\\', \$this->parts);
    }

    /**
     * Gets a slice of a name (similar to array_slice).
     *
     * This method returns a new instance of the same type as the original and with the same
     * attributes.
     *
     * If the slice is empty, null is returned. The null value will be correctly handled in
     * concatenations using concat().
     *
     * Offset and length have the same meaning as in array_slice().
     *
     * @param int      \$offset Offset to start the slice at (may be negative)
     * @param int|null \$length Length of the slice (may be negative)
     *
     * @return static|null Sliced name
     */
    public function slice(int \$offset, int \$length = null) {
        \$numParts = count(\$this->parts);

        \$realOffset = \$offset < 0 ? \$offset + \$numParts : \$offset;
        if (\$realOffset < 0 || \$realOffset > \$numParts) {
            throw new \\OutOfBoundsException(sprintf('Offset %d is out of bounds', \$offset));
        }

        if (null === \$length) {
            \$realLength = \$numParts - \$realOffset;
        } else {
            \$realLength = \$length < 0 ? \$length + \$numParts - \$realOffset : \$length;
            if (\$realLength < 0 || \$realLength > \$numParts) {
                throw new \\OutOfBoundsException(sprintf('Length %d is out of bounds', \$length));
            }
        }

        if (\$realLength === 0) {
            // Empty slice is represented as null
            return null;
        }

        return new static(array_slice(\$this->parts, \$realOffset, \$realLength), \$this->attributes);
    }

    /**
     * Concatenate two names, yielding a new Name instance.
     *
     * The type of the generated instance depends on which class this method is called on, for
     * example Name\\FullyQualified::concat() will yield a Name\\FullyQualified instance.
     *
     * If one of the arguments is null, a new instance of the other name will be returned. If both
     * arguments are null, null will be returned. As such, writing
     *     Name::concat(\$namespace, \$shortName)
     * where \$namespace is a Name node or null will work as expected.
     *
     * @param string|string[]|self|null \$name1      The first name
     * @param string|string[]|self|null \$name2      The second name
     * @param array                     \$attributes Attributes to assign to concatenated name
     *
     * @return static|null Concatenated name
     */
    public static function concat(\$name1, \$name2, array \$attributes = []) {
        if (null === \$name1 && null === \$name2) {
            return null;
        } elseif (null === \$name1) {
            return new static(self::prepareName(\$name2), \$attributes);
        } elseif (null === \$name2) {
            return new static(self::prepareName(\$name1), \$attributes);
        } else {
            return new static(
                array_merge(self::prepareName(\$name1), self::prepareName(\$name2)), \$attributes
            );
        }
    }

    /**
     * Prepares a (string, array or Name node) name for use in name changing methods by converting
     * it to an array.
     *
     * @param string|string[]|self \$name Name to prepare
     *
     * @return string[] Prepared name
     */
    private static function prepareName(\$name) : array {
        if (\\is_string(\$name)) {
            if ('' === \$name) {
                throw new \\InvalidArgumentException('Name cannot be empty');
            }

            return explode('\\\\', \$name);
        } elseif (\\is_array(\$name)) {
            if (empty(\$name)) {
                throw new \\InvalidArgumentException('Name cannot be empty');
            }

            return \$name;
        } elseif (\$name instanceof self) {
            return \$name->parts;
        }

        throw new \\InvalidArgumentException(
            'Expected string, array of parts or Name instance'
        );
    }

    public function getType() : string {
        return 'Name';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Name.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Name.php");
    }
}
