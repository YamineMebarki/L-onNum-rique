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

/* vendor/symfony/phpunit-bridge/ClockMock.php */
class __TwigTemplate_e6585b0a4b82b73857a8e9083ac6189c1d335caa2b2384132c3e5ce4a199a025 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/ClockMock.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/ClockMock.php"));

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
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Dominic Tubach <dominic.tubach@to.com>
 */
class ClockMock
{
    private static \$now;

    public static function withClockMock(\$enable = null)
    {
        if (null === \$enable) {
            return null !== self::\$now;
        }

        self::\$now = is_numeric(\$enable) ? (float) \$enable : (\$enable ? microtime(true) : null);

        return null;
    }

    public static function time()
    {
        if (null === self::\$now) {
            return \\time();
        }

        return (int) self::\$now;
    }

    public static function sleep(\$s)
    {
        if (null === self::\$now) {
            return \\sleep(\$s);
        }

        self::\$now += (int) \$s;

        return 0;
    }

    public static function usleep(\$us)
    {
        if (null === self::\$now) {
            \\usleep(\$us);
        } else {
            self::\$now += \$us / 1000000;
        }
    }

    public static function microtime(\$asFloat = false)
    {
        if (null === self::\$now) {
            return \\microtime(\$asFloat);
        }

        if (\$asFloat) {
            return self::\$now;
        }

        return sprintf('%0.6f00 %d', self::\$now - (int) self::\$now, (int) self::\$now);
    }

    public static function date(\$format, \$timestamp = null)
    {
        if (null === \$timestamp) {
            \$timestamp = self::time();
        }

        return \\date(\$format, \$timestamp);
    }

    public static function gmdate(\$format, \$timestamp = null)
    {
        if (null === \$timestamp) {
            \$timestamp = self::time();
        }

        return \\gmdate(\$format, \$timestamp);
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = array(substr(\$class, 0, strrpos(\$class, '\\\\')));
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            if (\\function_exists(\$ns.'\\time')) {
                continue;
            }
            eval(<<<EOPHP
namespace \$ns;

function time()
{
    return \\\\\$self::time();
}

function microtime(\\\$asFloat = false)
{
    return \\\\\$self::microtime(\\\$asFloat);
}

function sleep(\\\$s)
{
    return \\\\\$self::sleep(\\\$s);
}

function usleep(\\\$us)
{
    \\\\\$self::usleep(\\\$us);
}

function date(\\\$format, \\\$timestamp = null)
{
    return \\\\\$self::date(\\\$format, \\\$timestamp);
}

function gmdate(\\\$format, \\\$timestamp = null)
{
    return \\\\\$self::gmdate(\\\$format, \\\$timestamp);
}
EOPHP
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/ClockMock.php";
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
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Dominic Tubach <dominic.tubach@to.com>
 */
class ClockMock
{
    private static \$now;

    public static function withClockMock(\$enable = null)
    {
        if (null === \$enable) {
            return null !== self::\$now;
        }

        self::\$now = is_numeric(\$enable) ? (float) \$enable : (\$enable ? microtime(true) : null);

        return null;
    }

    public static function time()
    {
        if (null === self::\$now) {
            return \\time();
        }

        return (int) self::\$now;
    }

    public static function sleep(\$s)
    {
        if (null === self::\$now) {
            return \\sleep(\$s);
        }

        self::\$now += (int) \$s;

        return 0;
    }

    public static function usleep(\$us)
    {
        if (null === self::\$now) {
            \\usleep(\$us);
        } else {
            self::\$now += \$us / 1000000;
        }
    }

    public static function microtime(\$asFloat = false)
    {
        if (null === self::\$now) {
            return \\microtime(\$asFloat);
        }

        if (\$asFloat) {
            return self::\$now;
        }

        return sprintf('%0.6f00 %d', self::\$now - (int) self::\$now, (int) self::\$now);
    }

    public static function date(\$format, \$timestamp = null)
    {
        if (null === \$timestamp) {
            \$timestamp = self::time();
        }

        return \\date(\$format, \$timestamp);
    }

    public static function gmdate(\$format, \$timestamp = null)
    {
        if (null === \$timestamp) {
            \$timestamp = self::time();
        }

        return \\gmdate(\$format, \$timestamp);
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = array(substr(\$class, 0, strrpos(\$class, '\\\\')));
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            if (\\function_exists(\$ns.'\\time')) {
                continue;
            }
            eval(<<<EOPHP
namespace \$ns;

function time()
{
    return \\\\\$self::time();
}

function microtime(\\\$asFloat = false)
{
    return \\\\\$self::microtime(\\\$asFloat);
}

function sleep(\\\$s)
{
    return \\\\\$self::sleep(\\\$s);
}

function usleep(\\\$us)
{
    \\\\\$self::usleep(\\\$us);
}

function date(\\\$format, \\\$timestamp = null)
{
    return \\\\\$self::date(\\\$format, \\\$timestamp);
}

function gmdate(\\\$format, \\\$timestamp = null)
{
    return \\\\\$self::gmdate(\\\$format, \\\$timestamp);
}
EOPHP
            );
        }
    }
}
", "vendor/symfony/phpunit-bridge/ClockMock.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/ClockMock.php");
    }
}
