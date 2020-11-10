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

/* vendor/symfony/maker-bundle/src/Str.php */
class __TwigTemplate_f321ee3dfad7bae26c8a88483b29ce649b4783f277ac02dd80a19443b009731e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Str.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Str.php"));

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

use Doctrine\\Common\\Inflector\\Inflector;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class Str
{
    /**
     * Looks for suffixes in strings in a case-insensitive way.
     */
    public static function hasSuffix(string \$value, string \$suffix): bool
    {
        return 0 === strcasecmp(\$suffix, substr(\$value, -\\strlen(\$suffix)));
    }

    /**
     * Ensures that the given string ends with the given suffix. If the string
     * already contains the suffix, it's not added twice. It's case-insensitive
     * (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'FooCommand').
     */
    public static function addSuffix(string \$value, string \$suffix): string
    {
        return self::removeSuffix(\$value, \$suffix).\$suffix;
    }

    /**
     * Ensures that the given string doesn't end with the given suffix. If the
     * string contains the suffix multiple times, only the last one is removed.
     * It's case-insensitive (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'Foo'.
     */
    public static function removeSuffix(string \$value, string \$suffix): string
    {
        return self::hasSuffix(\$value, \$suffix) ? substr(\$value, 0, -\\strlen(\$suffix)) : \$value;
    }

    /**
     * Transforms the given string into the format commonly used by PHP classes,
     * (e.g. `app:do_this-and_that` -> `AppDoThisAndThat`) but it doesn't check
     * the validity of the class name.
     */
    public static function asClassName(string \$value, string \$suffix = ''): string
    {
        \$value = trim(\$value);
        \$value = str_replace(['-', '_', '.', ':'], ' ', \$value);
        \$value = ucwords(\$value);
        \$value = str_replace(' ', '', \$value);
        \$value = ucfirst(\$value);
        \$value = self::addSuffix(\$value, \$suffix);

        return \$value;
    }

    /**
     * Transforms the given string into the format commonly used by Twig variables
     * (e.g. `BlogPostType` -> `blog_post_type`).
     */
    public static function asTwigVariable(string \$value): string
    {
        \$value = trim(\$value);
        \$value = preg_replace('/[^a-zA-Z0-9_]/', '_', \$value);
        \$value = preg_replace('/(?<=\\\\w)([A-Z])/', '_\$1', \$value);
        \$value = preg_replace('/_{2,}/', '_', \$value);
        \$value = strtolower(\$value);

        return \$value;
    }

    public static function asLowerCamelCase(string \$str): string
    {
        return lcfirst(self::asCamelCase(\$str));
    }

    public static function asCamelCase(string \$str): string
    {
        return strtr(ucwords(strtr(\$str, ['_' => ' ', '.' => ' ', '\\\\' => ' '])), [' ' => '']);
    }

    public static function asRoutePath(string \$value): string
    {
        return '/'.str_replace('_', '/', self::asTwigVariable(\$value));
    }

    public static function asRouteName(string \$value): string
    {
        return self::asTwigVariable(\$value);
    }

    public static function asSnakeCase(string \$value): string
    {
        return self::asTwigVariable(\$value);
    }

    public static function asCommand(string \$value): string
    {
        return str_replace('_', '-', self::asTwigVariable(\$value));
    }

    public static function asEventMethod(string \$eventName): string
    {
        return sprintf('on%s', self::asClassName(\$eventName));
    }

    public static function getShortClassName(string \$fullClassName): string
    {
        if (empty(self::getNamespace(\$fullClassName))) {
            return \$fullClassName;
        }

        return substr(\$fullClassName, strrpos(\$fullClassName, '\\\\') + 1);
    }

    public static function getNamespace(string \$fullClassName): string
    {
        return substr(\$fullClassName, 0, strrpos(\$fullClassName, '\\\\'));
    }

    public static function asFilePath(string \$value): string
    {
        \$value = Container::underscore(trim(\$value));
        \$value = str_replace('\\\\', '/', \$value);

        return \$value;
    }

    public static function singularCamelCaseToPluralCamelCase(string \$camelCase): string
    {
        \$snake = self::asSnakeCase(\$camelCase);
        \$words = explode('_', \$snake);
        \$words[\\count(\$words) - 1] = Inflector::pluralize(\$words[\\count(\$words) - 1]);
        \$reSnaked = implode('_', \$words);

        return self::asLowerCamelCase(\$reSnaked);
    }

    public static function pluralCamelCaseToSingular(string \$camelCase): string
    {
        \$snake = self::asSnakeCase(\$camelCase);
        \$words = explode('_', \$snake);
        \$words[\\count(\$words) - 1] = Inflector::singularize(\$words[\\count(\$words) - 1]);
        \$reSnaked = implode('_', \$words);

        return self::asLowerCamelCase(\$reSnaked);
    }

    public static function getRandomTerm(): string
    {
        \$adjectives = [
            'tiny',
            'delicious',
            'gentle',
            'agreeable',
            'brave',
            'orange',
            'grumpy',
            'fierce',
            'victorious',
        ];
        \$nouns = [
            'elephant',
            'pizza',
            'jellybean',
            'chef',
            'puppy',
            'gnome',
            'kangaroo',
        ];

        return sprintf('%s %s', \$adjectives[array_rand(\$adjectives)], \$nouns[array_rand(\$nouns)]);
    }

    /**
     * Checks if the given name is a valid PHP variable name.
     *
     * @see http://php.net/manual/en/language.variables.basics.php
     *
     * @param \$name string
     *
     * @return bool
     */
    public static function isValidPhpVariableName(\$name)
    {
        return (bool) preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*\$/', \$name, \$matches);
    }

    public static function areClassesAlphabetical(string \$class1, string \$class2)
    {
        \$arr1 = [\$class1, \$class2];
        \$arr2 = [\$class1, \$class2];
        sort(\$arr2);

        return \$arr1[0] == \$arr2[0];
    }

    public static function asHumanWords(string \$variableName): string
    {
        return implode(' ', preg_split('/(?=[A-Z])/', \$variableName));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Str.php";
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

use Doctrine\\Common\\Inflector\\Inflector;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class Str
{
    /**
     * Looks for suffixes in strings in a case-insensitive way.
     */
    public static function hasSuffix(string \$value, string \$suffix): bool
    {
        return 0 === strcasecmp(\$suffix, substr(\$value, -\\strlen(\$suffix)));
    }

    /**
     * Ensures that the given string ends with the given suffix. If the string
     * already contains the suffix, it's not added twice. It's case-insensitive
     * (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'FooCommand').
     */
    public static function addSuffix(string \$value, string \$suffix): string
    {
        return self::removeSuffix(\$value, \$suffix).\$suffix;
    }

    /**
     * Ensures that the given string doesn't end with the given suffix. If the
     * string contains the suffix multiple times, only the last one is removed.
     * It's case-insensitive (e.g. value: 'Foocommand' suffix: 'Command' -> result: 'Foo'.
     */
    public static function removeSuffix(string \$value, string \$suffix): string
    {
        return self::hasSuffix(\$value, \$suffix) ? substr(\$value, 0, -\\strlen(\$suffix)) : \$value;
    }

    /**
     * Transforms the given string into the format commonly used by PHP classes,
     * (e.g. `app:do_this-and_that` -> `AppDoThisAndThat`) but it doesn't check
     * the validity of the class name.
     */
    public static function asClassName(string \$value, string \$suffix = ''): string
    {
        \$value = trim(\$value);
        \$value = str_replace(['-', '_', '.', ':'], ' ', \$value);
        \$value = ucwords(\$value);
        \$value = str_replace(' ', '', \$value);
        \$value = ucfirst(\$value);
        \$value = self::addSuffix(\$value, \$suffix);

        return \$value;
    }

    /**
     * Transforms the given string into the format commonly used by Twig variables
     * (e.g. `BlogPostType` -> `blog_post_type`).
     */
    public static function asTwigVariable(string \$value): string
    {
        \$value = trim(\$value);
        \$value = preg_replace('/[^a-zA-Z0-9_]/', '_', \$value);
        \$value = preg_replace('/(?<=\\\\w)([A-Z])/', '_\$1', \$value);
        \$value = preg_replace('/_{2,}/', '_', \$value);
        \$value = strtolower(\$value);

        return \$value;
    }

    public static function asLowerCamelCase(string \$str): string
    {
        return lcfirst(self::asCamelCase(\$str));
    }

    public static function asCamelCase(string \$str): string
    {
        return strtr(ucwords(strtr(\$str, ['_' => ' ', '.' => ' ', '\\\\' => ' '])), [' ' => '']);
    }

    public static function asRoutePath(string \$value): string
    {
        return '/'.str_replace('_', '/', self::asTwigVariable(\$value));
    }

    public static function asRouteName(string \$value): string
    {
        return self::asTwigVariable(\$value);
    }

    public static function asSnakeCase(string \$value): string
    {
        return self::asTwigVariable(\$value);
    }

    public static function asCommand(string \$value): string
    {
        return str_replace('_', '-', self::asTwigVariable(\$value));
    }

    public static function asEventMethod(string \$eventName): string
    {
        return sprintf('on%s', self::asClassName(\$eventName));
    }

    public static function getShortClassName(string \$fullClassName): string
    {
        if (empty(self::getNamespace(\$fullClassName))) {
            return \$fullClassName;
        }

        return substr(\$fullClassName, strrpos(\$fullClassName, '\\\\') + 1);
    }

    public static function getNamespace(string \$fullClassName): string
    {
        return substr(\$fullClassName, 0, strrpos(\$fullClassName, '\\\\'));
    }

    public static function asFilePath(string \$value): string
    {
        \$value = Container::underscore(trim(\$value));
        \$value = str_replace('\\\\', '/', \$value);

        return \$value;
    }

    public static function singularCamelCaseToPluralCamelCase(string \$camelCase): string
    {
        \$snake = self::asSnakeCase(\$camelCase);
        \$words = explode('_', \$snake);
        \$words[\\count(\$words) - 1] = Inflector::pluralize(\$words[\\count(\$words) - 1]);
        \$reSnaked = implode('_', \$words);

        return self::asLowerCamelCase(\$reSnaked);
    }

    public static function pluralCamelCaseToSingular(string \$camelCase): string
    {
        \$snake = self::asSnakeCase(\$camelCase);
        \$words = explode('_', \$snake);
        \$words[\\count(\$words) - 1] = Inflector::singularize(\$words[\\count(\$words) - 1]);
        \$reSnaked = implode('_', \$words);

        return self::asLowerCamelCase(\$reSnaked);
    }

    public static function getRandomTerm(): string
    {
        \$adjectives = [
            'tiny',
            'delicious',
            'gentle',
            'agreeable',
            'brave',
            'orange',
            'grumpy',
            'fierce',
            'victorious',
        ];
        \$nouns = [
            'elephant',
            'pizza',
            'jellybean',
            'chef',
            'puppy',
            'gnome',
            'kangaroo',
        ];

        return sprintf('%s %s', \$adjectives[array_rand(\$adjectives)], \$nouns[array_rand(\$nouns)]);
    }

    /**
     * Checks if the given name is a valid PHP variable name.
     *
     * @see http://php.net/manual/en/language.variables.basics.php
     *
     * @param \$name string
     *
     * @return bool
     */
    public static function isValidPhpVariableName(\$name)
    {
        return (bool) preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*\$/', \$name, \$matches);
    }

    public static function areClassesAlphabetical(string \$class1, string \$class2)
    {
        \$arr1 = [\$class1, \$class2];
        \$arr2 = [\$class1, \$class2];
        sort(\$arr2);

        return \$arr1[0] == \$arr2[0];
    }

    public static function asHumanWords(string \$variableName): string
    {
        return implode(' ', preg_split('/(?=[A-Z])/', \$variableName));
    }
}
", "vendor/symfony/maker-bundle/src/Str.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Str.php");
    }
}
