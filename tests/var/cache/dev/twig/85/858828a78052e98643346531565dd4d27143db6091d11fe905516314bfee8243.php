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

/* vendor/symfony/translation/Interval.php */
class __TwigTemplate_b716ae8c99023fcfbf95d794ffc70f0e8d0106699fb7cc311afbfff316a8fcfe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Interval.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Interval.php"));

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

namespace Symfony\\Component\\Translation;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use IdentityTranslator instead.', Interval::class), E_USER_DEPRECATED);

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;

/**
 * Tests if a given number belongs to a given math interval.
 *
 * An interval can represent a finite set of numbers:
 *
 *  {1,2,3,4}
 *
 * An interval can represent numbers between two numbers:
 *
 *  [1, +Inf]
 *  ]-1,2[
 *
 * The left delimiter can be [ (inclusive) or ] (exclusive).
 * The right delimiter can be [ (exclusive) or ] (inclusive).
 * Beside numbers, you can use -Inf and +Inf for the infinite.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see    http://en.wikipedia.org/wiki/Interval_%28mathematics%29#The_ISO_notation
 * @deprecated since Symfony 4.2, use IdentityTranslator instead
 */
class Interval
{
    /**
     * Tests if the given number is in the math interval.
     *
     * @param int    \$number   A number
     * @param string \$interval An interval
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public static function test(\$number, \$interval)
    {
        \$interval = trim(\$interval);

        if (!preg_match('/^'.self::getIntervalRegexp().'\$/x', \$interval, \$matches)) {
            throw new InvalidArgumentException(sprintf('\"%s\" is not a valid interval.', \$interval));
        }

        if (\$matches[1]) {
            foreach (explode(',', \$matches[2]) as \$n) {
                if (\$number == \$n) {
                    return true;
                }
            }
        } else {
            \$leftNumber = self::convertNumber(\$matches['left']);
            \$rightNumber = self::convertNumber(\$matches['right']);

            return
                ('[' === \$matches['left_delimiter'] ? \$number >= \$leftNumber : \$number > \$leftNumber)
                && (']' === \$matches['right_delimiter'] ? \$number <= \$rightNumber : \$number < \$rightNumber)
            ;
        }

        return false;
    }

    /**
     * Returns a Regexp that matches valid intervals.
     *
     * @return string A Regexp (without the delimiters)
     */
    public static function getIntervalRegexp()
    {
        return <<<EOF
        ({\\s*
            (\\-?\\d+(\\.\\d+)?[\\s*,\\s*\\-?\\d+(\\.\\d+)?]*)
        \\s*})

            |

        (?P<left_delimiter>[\\[\\]])
            \\s*
            (?P<left>-Inf|\\-?\\d+(\\.\\d+)?)
            \\s*,\\s*
            (?P<right>\\+?Inf|\\-?\\d+(\\.\\d+)?)
            \\s*
        (?P<right_delimiter>[\\[\\]])
EOF;
    }

    private static function convertNumber(\$number)
    {
        if ('-Inf' === \$number) {
            return log(0);
        } elseif ('+Inf' === \$number || 'Inf' === \$number) {
            return -log(0);
        }

        return (float) \$number;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Interval.php";
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

namespace Symfony\\Component\\Translation;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use IdentityTranslator instead.', Interval::class), E_USER_DEPRECATED);

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;

/**
 * Tests if a given number belongs to a given math interval.
 *
 * An interval can represent a finite set of numbers:
 *
 *  {1,2,3,4}
 *
 * An interval can represent numbers between two numbers:
 *
 *  [1, +Inf]
 *  ]-1,2[
 *
 * The left delimiter can be [ (inclusive) or ] (exclusive).
 * The right delimiter can be [ (exclusive) or ] (inclusive).
 * Beside numbers, you can use -Inf and +Inf for the infinite.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see    http://en.wikipedia.org/wiki/Interval_%28mathematics%29#The_ISO_notation
 * @deprecated since Symfony 4.2, use IdentityTranslator instead
 */
class Interval
{
    /**
     * Tests if the given number is in the math interval.
     *
     * @param int    \$number   A number
     * @param string \$interval An interval
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public static function test(\$number, \$interval)
    {
        \$interval = trim(\$interval);

        if (!preg_match('/^'.self::getIntervalRegexp().'\$/x', \$interval, \$matches)) {
            throw new InvalidArgumentException(sprintf('\"%s\" is not a valid interval.', \$interval));
        }

        if (\$matches[1]) {
            foreach (explode(',', \$matches[2]) as \$n) {
                if (\$number == \$n) {
                    return true;
                }
            }
        } else {
            \$leftNumber = self::convertNumber(\$matches['left']);
            \$rightNumber = self::convertNumber(\$matches['right']);

            return
                ('[' === \$matches['left_delimiter'] ? \$number >= \$leftNumber : \$number > \$leftNumber)
                && (']' === \$matches['right_delimiter'] ? \$number <= \$rightNumber : \$number < \$rightNumber)
            ;
        }

        return false;
    }

    /**
     * Returns a Regexp that matches valid intervals.
     *
     * @return string A Regexp (without the delimiters)
     */
    public static function getIntervalRegexp()
    {
        return <<<EOF
        ({\\s*
            (\\-?\\d+(\\.\\d+)?[\\s*,\\s*\\-?\\d+(\\.\\d+)?]*)
        \\s*})

            |

        (?P<left_delimiter>[\\[\\]])
            \\s*
            (?P<left>-Inf|\\-?\\d+(\\.\\d+)?)
            \\s*,\\s*
            (?P<right>\\+?Inf|\\-?\\d+(\\.\\d+)?)
            \\s*
        (?P<right_delimiter>[\\[\\]])
EOF;
    }

    private static function convertNumber(\$number)
    {
        if ('-Inf' === \$number) {
            return log(0);
        } elseif ('+Inf' === \$number || 'Inf' === \$number) {
            return -log(0);
        }

        return (float) \$number;
    }
}
", "vendor/symfony/translation/Interval.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Interval.php");
    }
}
