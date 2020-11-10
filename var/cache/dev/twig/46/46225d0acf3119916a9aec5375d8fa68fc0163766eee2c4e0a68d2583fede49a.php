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

/* vendor/symfony/phpunit-bridge/ClassExistsMock.php */
class __TwigTemplate_4b558f4d593b184fd2c414b7ea094518821725eb59d1be7bad469d74f7d879b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/ClassExistsMock.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/ClassExistsMock.php"));

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

namespace Symfony\\Bridge\\PhpUnit;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ClassExistsMock
{
    private static \$classes = [];

    /**
     * Configures the classes to be checked upon existence.
     *
     * @param array \$classes Mocked class names as keys (case sensitive, without leading root namespace slash) and booleans as values
     */
    public static function withMockedClasses(array \$classes)
    {
        self::\$classes = \$classes;
    }

    public static function class_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\class_exists(\$name, \$autoload));
    }

    public static function interface_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\interface_exists(\$name, \$autoload));
    }

    public static function trait_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\trait_exists(\$name, \$autoload));
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = [substr(\$class, 0, strrpos(\$class, '\\\\'))];
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            foreach (['class', 'interface', 'trait'] as \$type) {
                if (\\function_exists(\$ns.'\\\\'.\$type.'_exists')) {
                    continue;
                }
                eval(<<<EOPHP
namespace \$ns;

function {\$type}_exists(\\\$name, \\\$autoload = true)
{
    return \\\\\$self::{\$type}_exists(\\\$name, \\\$autoload);
}

EOPHP
                );
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/ClassExistsMock.php";
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

namespace Symfony\\Bridge\\PhpUnit;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ClassExistsMock
{
    private static \$classes = [];

    /**
     * Configures the classes to be checked upon existence.
     *
     * @param array \$classes Mocked class names as keys (case sensitive, without leading root namespace slash) and booleans as values
     */
    public static function withMockedClasses(array \$classes)
    {
        self::\$classes = \$classes;
    }

    public static function class_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\class_exists(\$name, \$autoload));
    }

    public static function interface_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\interface_exists(\$name, \$autoload));
    }

    public static function trait_exists(\$name, \$autoload = true)
    {
        return (bool) (self::\$classes[ltrim(\$name, '\\\\')] ?? \\trait_exists(\$name, \$autoload));
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = [substr(\$class, 0, strrpos(\$class, '\\\\'))];
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            foreach (['class', 'interface', 'trait'] as \$type) {
                if (\\function_exists(\$ns.'\\\\'.\$type.'_exists')) {
                    continue;
                }
                eval(<<<EOPHP
namespace \$ns;

function {\$type}_exists(\\\$name, \\\$autoload = true)
{
    return \\\\\$self::{\$type}_exists(\\\$name, \\\$autoload);
}

EOPHP
                );
            }
        }
    }
}
", "vendor/symfony/phpunit-bridge/ClassExistsMock.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/ClassExistsMock.php");
    }
}
