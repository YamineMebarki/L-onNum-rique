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

/* vendor/symfony/maker-bundle/src/Validator.php */
class __TwigTemplate_ef5b909ea4c23d856989b809f8d70887f230ff0718421bece5dadb7b13d24618 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Validator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Validator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
final class Validator
{
    public static function validateClassName(string \$className, string \$errorMessage = ''): string
    {
        // remove potential opening slash so we don't match on it
        \$pieces = explode('\\\\', ltrim(\$className, '\\\\'));
        \$shortClassName = Str::getShortClassName(\$className);

        \$reservedKeywords = ['__halt_compiler', 'abstract', 'and', 'array',
            'as', 'break', 'callable', 'case', 'catch', 'class',
            'clone', 'const', 'continue', 'declare', 'default', 'die', 'do',
            'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor',
            'endforeach', 'endif', 'endswitch', 'endwhile', 'eval',
            'exit', 'extends', 'final', 'finally', 'for', 'foreach', 'function',
            'global', 'goto', 'if', 'implements', 'include',
            'include_once', 'instanceof', 'insteadof', 'interface', 'isset',
            'list', 'namespace', 'new', 'or', 'print', 'private',
            'protected', 'public', 'require', 'require_once', 'return',
            'static', 'switch', 'throw', 'trait', 'try', 'unset',
            'use', 'var', 'while', 'xor', 'yield',
            'int', 'float', 'bool', 'string', 'true', 'false', 'null', 'void',
            'iterable', 'object', '__file__', '__line__', '__dir__', '__function__', '__class__',
            '__method__', '__namespace__', '__trait__', 'self', 'parent',
        ];

        foreach (\$pieces as \$piece) {
            if (!mb_check_encoding(\$piece, 'UTF-8')) {
                \$errorMessage = \$errorMessage ?: sprintf('\"%s\" is not a UTF-8-encoded string.', \$piece);

                throw new RuntimeCommandException(\$errorMessage);
            }

            if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*\$/', \$piece)) {
                \$errorMessage = \$errorMessage ?: sprintf('\"%s\" is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores)', \$className);

                throw new RuntimeCommandException(\$errorMessage);
            }

            if (\\in_array(strtolower(\$shortClassName), \$reservedKeywords, true)) {
                throw new RuntimeCommandException(sprintf('\"%s\" is a reserved keyword and thus cannot be used as class name in PHP.', \$shortClassName));
            }
        }

        // return original class name
        return \$className;
    }

    public static function notBlank(string \$value = null): string
    {
        if (null === \$value || '' === \$value) {
            throw new RuntimeCommandException('This value cannot be blank.');
        }

        return \$value;
    }

    public static function validateLength(\$length)
    {
        if (!\$length) {
            return \$length;
        }

        \$result = filter_var(\$length, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid length \"%s\".', \$length));
        }

        return \$result;
    }

    public static function validatePrecision(\$precision)
    {
        if (!\$precision) {
            return \$precision;
        }

        \$result = filter_var(\$precision, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1, 'max_range' => 65],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid precision \"%s\".', \$precision));
        }

        return \$result;
    }

    public static function validateScale(\$scale)
    {
        if (!\$scale) {
            return \$scale;
        }

        \$result = filter_var(\$scale, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 0, 'max_range' => 30],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid scale \"%s\".', \$scale));
        }

        return \$result;
    }

    public static function validateBoolean(\$value)
    {
        if ('yes' == \$value) {
            return true;
        }

        if ('no' == \$value) {
            return false;
        }

        if (null === \$valueAsBool = filter_var(\$value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
            throw new RuntimeCommandException(sprintf('Invalid bool value \"%s\".', \$value));
        }

        return \$valueAsBool;
    }

    public static function validatePropertyName(string \$name)
    {
        // check for valid PHP variable name
        if (null !== \$name && !Str::isValidPhpVariableName(\$name)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid PHP property name.', \$name));
        }

        return \$name;
    }

    public static function validateDoctrineFieldName(string \$name, ManagerRegistry \$registry)
    {
        // check reserved words
        if (\$registry->getConnection()->getDatabasePlatform()->getReservedKeywordsList()->isKeyword(\$name)) {
            throw new \\InvalidArgumentException(sprintf('Name \"%s\" is a reserved word.', \$name));
        }

        self::validatePropertyName(\$name);

        return \$name;
    }

    public static function existsOrNull(string \$className = null, array \$entities = [])
    {
        if (null !== \$className) {
            self::validateClassName(\$className);

            if (0 === strpos(\$className, '\\\\')) {
                self::classExists(\$className);
            } else {
                self::entityExists(\$className, \$entities);
            }
        }

        return \$className;
    }

    public static function classExists(string \$className, string \$errorMessage = ''): string
    {
        self::notBlank(\$className);

        if (!class_exists(\$className)) {
            \$errorMessage = \$errorMessage ?: sprintf('Class \"%s\" doesn\\'t exist; please enter an existing full class name.', \$className);

            throw new RuntimeCommandException(\$errorMessage);
        }

        return \$className;
    }

    public static function entityExists(string \$className = null, array \$entities = []): string
    {
        self::notBlank(\$className);

        if (empty(\$entities)) {
            throw new RuntimeCommandException('There are no registered entities; please create an entity before using this command.');
        }

        if (0 === strpos(\$className, '\\\\')) {
            self::classExists(\$className, sprintf('Entity \"%s\" doesn\\'t exist; please enter an existing one or create a new one.', \$className));
        }

        if (!\\in_array(\$className, \$entities)) {
            throw new RuntimeCommandException(sprintf('Entity \"%s\" doesn\\'t exist; please enter an existing one or create a new one.', \$className));
        }

        return \$className;
    }

    public static function classDoesNotExist(\$className): string
    {
        self::notBlank(\$className);

        if (class_exists(\$className)) {
            throw new RuntimeCommandException(sprintf('Class \"%s\" already exists.', \$className));
        }

        return \$className;
    }

    public static function classIsUserInterface(\$userClassName): string
    {
        self::classExists(\$userClassName);

        if (!isset(class_implements(\$userClassName)[UserInterface::class])) {
            throw new RuntimeCommandException(sprintf('The class \"%s\" must implement \"%s\".', \$userClassName, UserInterface::class));
        }

        return \$userClassName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Validator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
final class Validator
{
    public static function validateClassName(string \$className, string \$errorMessage = ''): string
    {
        // remove potential opening slash so we don't match on it
        \$pieces = explode('\\\\', ltrim(\$className, '\\\\'));
        \$shortClassName = Str::getShortClassName(\$className);

        \$reservedKeywords = ['__halt_compiler', 'abstract', 'and', 'array',
            'as', 'break', 'callable', 'case', 'catch', 'class',
            'clone', 'const', 'continue', 'declare', 'default', 'die', 'do',
            'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor',
            'endforeach', 'endif', 'endswitch', 'endwhile', 'eval',
            'exit', 'extends', 'final', 'finally', 'for', 'foreach', 'function',
            'global', 'goto', 'if', 'implements', 'include',
            'include_once', 'instanceof', 'insteadof', 'interface', 'isset',
            'list', 'namespace', 'new', 'or', 'print', 'private',
            'protected', 'public', 'require', 'require_once', 'return',
            'static', 'switch', 'throw', 'trait', 'try', 'unset',
            'use', 'var', 'while', 'xor', 'yield',
            'int', 'float', 'bool', 'string', 'true', 'false', 'null', 'void',
            'iterable', 'object', '__file__', '__line__', '__dir__', '__function__', '__class__',
            '__method__', '__namespace__', '__trait__', 'self', 'parent',
        ];

        foreach (\$pieces as \$piece) {
            if (!mb_check_encoding(\$piece, 'UTF-8')) {
                \$errorMessage = \$errorMessage ?: sprintf('\"%s\" is not a UTF-8-encoded string.', \$piece);

                throw new RuntimeCommandException(\$errorMessage);
            }

            if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*\$/', \$piece)) {
                \$errorMessage = \$errorMessage ?: sprintf('\"%s\" is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores)', \$className);

                throw new RuntimeCommandException(\$errorMessage);
            }

            if (\\in_array(strtolower(\$shortClassName), \$reservedKeywords, true)) {
                throw new RuntimeCommandException(sprintf('\"%s\" is a reserved keyword and thus cannot be used as class name in PHP.', \$shortClassName));
            }
        }

        // return original class name
        return \$className;
    }

    public static function notBlank(string \$value = null): string
    {
        if (null === \$value || '' === \$value) {
            throw new RuntimeCommandException('This value cannot be blank.');
        }

        return \$value;
    }

    public static function validateLength(\$length)
    {
        if (!\$length) {
            return \$length;
        }

        \$result = filter_var(\$length, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid length \"%s\".', \$length));
        }

        return \$result;
    }

    public static function validatePrecision(\$precision)
    {
        if (!\$precision) {
            return \$precision;
        }

        \$result = filter_var(\$precision, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1, 'max_range' => 65],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid precision \"%s\".', \$precision));
        }

        return \$result;
    }

    public static function validateScale(\$scale)
    {
        if (!\$scale) {
            return \$scale;
        }

        \$result = filter_var(\$scale, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 0, 'max_range' => 30],
        ]);

        if (false === \$result) {
            throw new RuntimeCommandException(sprintf('Invalid scale \"%s\".', \$scale));
        }

        return \$result;
    }

    public static function validateBoolean(\$value)
    {
        if ('yes' == \$value) {
            return true;
        }

        if ('no' == \$value) {
            return false;
        }

        if (null === \$valueAsBool = filter_var(\$value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
            throw new RuntimeCommandException(sprintf('Invalid bool value \"%s\".', \$value));
        }

        return \$valueAsBool;
    }

    public static function validatePropertyName(string \$name)
    {
        // check for valid PHP variable name
        if (null !== \$name && !Str::isValidPhpVariableName(\$name)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid PHP property name.', \$name));
        }

        return \$name;
    }

    public static function validateDoctrineFieldName(string \$name, ManagerRegistry \$registry)
    {
        // check reserved words
        if (\$registry->getConnection()->getDatabasePlatform()->getReservedKeywordsList()->isKeyword(\$name)) {
            throw new \\InvalidArgumentException(sprintf('Name \"%s\" is a reserved word.', \$name));
        }

        self::validatePropertyName(\$name);

        return \$name;
    }

    public static function existsOrNull(string \$className = null, array \$entities = [])
    {
        if (null !== \$className) {
            self::validateClassName(\$className);

            if (0 === strpos(\$className, '\\\\')) {
                self::classExists(\$className);
            } else {
                self::entityExists(\$className, \$entities);
            }
        }

        return \$className;
    }

    public static function classExists(string \$className, string \$errorMessage = ''): string
    {
        self::notBlank(\$className);

        if (!class_exists(\$className)) {
            \$errorMessage = \$errorMessage ?: sprintf('Class \"%s\" doesn\\'t exist; please enter an existing full class name.', \$className);

            throw new RuntimeCommandException(\$errorMessage);
        }

        return \$className;
    }

    public static function entityExists(string \$className = null, array \$entities = []): string
    {
        self::notBlank(\$className);

        if (empty(\$entities)) {
            throw new RuntimeCommandException('There are no registered entities; please create an entity before using this command.');
        }

        if (0 === strpos(\$className, '\\\\')) {
            self::classExists(\$className, sprintf('Entity \"%s\" doesn\\'t exist; please enter an existing one or create a new one.', \$className));
        }

        if (!\\in_array(\$className, \$entities)) {
            throw new RuntimeCommandException(sprintf('Entity \"%s\" doesn\\'t exist; please enter an existing one or create a new one.', \$className));
        }

        return \$className;
    }

    public static function classDoesNotExist(\$className): string
    {
        self::notBlank(\$className);

        if (class_exists(\$className)) {
            throw new RuntimeCommandException(sprintf('Class \"%s\" already exists.', \$className));
        }

        return \$className;
    }

    public static function classIsUserInterface(\$userClassName): string
    {
        self::classExists(\$userClassName);

        if (!isset(class_implements(\$userClassName)[UserInterface::class])) {
            throw new RuntimeCommandException(sprintf('The class \"%s\" must implement \"%s\".', \$userClassName, UserInterface::class));
        }

        return \$userClassName;
    }
}
", "vendor/symfony/maker-bundle/src/Validator.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Validator.php");
    }
}
