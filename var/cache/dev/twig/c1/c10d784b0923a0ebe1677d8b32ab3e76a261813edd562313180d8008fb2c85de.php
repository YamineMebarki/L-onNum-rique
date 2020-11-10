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

/* vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php */
class __TwigTemplate_7fad58e0b9ebe089b8d521735c32e557807e55263de7eadd02869a81aee7e31c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php"));

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

namespace Symfony\\Component\\Intl\\DateFormatter\\DateFormat;

/**
 * Parser and formatter for month format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class MonthTransformer extends Transformer
{
    protected static \$months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];

    /**
     * Short months names (first 3 letters).
     */
    protected static \$shortMonths = [];

    /**
     * Flipped \$months array, \$name => \$index.
     */
    protected static \$flippedMonths = [];

    /**
     * Flipped \$shortMonths array, \$name => \$index.
     */
    protected static \$flippedShortMonths = [];

    public function __construct()
    {
        if (0 === \\count(self::\$shortMonths)) {
            self::\$shortMonths = array_map(function (\$month) {
                return substr(\$month, 0, 3);
            }, self::\$months);

            self::\$flippedMonths = array_flip(self::\$months);
            self::\$flippedShortMonths = array_flip(self::\$shortMonths);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$matchLengthMap = [
            1 => 'n',
            2 => 'm',
            3 => 'M',
            4 => 'F',
        ];

        if (isset(\$matchLengthMap[\$length])) {
            return \$dateTime->format(\$matchLengthMap[\$length]);
        }

        if (5 === \$length) {
            return substr(\$dateTime->format('M'), 0, 1);
        }

        return \$this->padLeft(\$dateTime->format('m'), \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 1:
                \$regExp = '\\d{1,2}';
                break;
            case 3:
                \$regExp = implode('|', self::\$shortMonths);
                break;
            case 4:
                \$regExp = implode('|', self::\$months);
                break;
            case 5:
                \$regExp = '[JFMASOND]';
                break;
            default:
                \$regExp = '\\d{1,'.\$length.'}';
                break;
        }

        return \$regExp;
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        if (!is_numeric(\$matched)) {
            if (3 === \$length) {
                \$matched = self::\$flippedShortMonths[\$matched] + 1;
            } elseif (4 === \$length) {
                \$matched = self::\$flippedMonths[\$matched] + 1;
            } elseif (5 === \$length) {
                // IntlDateFormatter::parse() always returns false for MMMMM or LLLLL
                \$matched = false;
            }
        } else {
            \$matched = (int) \$matched;
        }

        return [
            'month' => \$matched,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php";
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

namespace Symfony\\Component\\Intl\\DateFormatter\\DateFormat;

/**
 * Parser and formatter for month format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class MonthTransformer extends Transformer
{
    protected static \$months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];

    /**
     * Short months names (first 3 letters).
     */
    protected static \$shortMonths = [];

    /**
     * Flipped \$months array, \$name => \$index.
     */
    protected static \$flippedMonths = [];

    /**
     * Flipped \$shortMonths array, \$name => \$index.
     */
    protected static \$flippedShortMonths = [];

    public function __construct()
    {
        if (0 === \\count(self::\$shortMonths)) {
            self::\$shortMonths = array_map(function (\$month) {
                return substr(\$month, 0, 3);
            }, self::\$months);

            self::\$flippedMonths = array_flip(self::\$months);
            self::\$flippedShortMonths = array_flip(self::\$shortMonths);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$matchLengthMap = [
            1 => 'n',
            2 => 'm',
            3 => 'M',
            4 => 'F',
        ];

        if (isset(\$matchLengthMap[\$length])) {
            return \$dateTime->format(\$matchLengthMap[\$length]);
        }

        if (5 === \$length) {
            return substr(\$dateTime->format('M'), 0, 1);
        }

        return \$this->padLeft(\$dateTime->format('m'), \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 1:
                \$regExp = '\\d{1,2}';
                break;
            case 3:
                \$regExp = implode('|', self::\$shortMonths);
                break;
            case 4:
                \$regExp = implode('|', self::\$months);
                break;
            case 5:
                \$regExp = '[JFMASOND]';
                break;
            default:
                \$regExp = '\\d{1,'.\$length.'}';
                break;
        }

        return \$regExp;
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        if (!is_numeric(\$matched)) {
            if (3 === \$length) {
                \$matched = self::\$flippedShortMonths[\$matched] + 1;
            } elseif (4 === \$length) {
                \$matched = self::\$flippedMonths[\$matched] + 1;
            } elseif (5 === \$length) {
                // IntlDateFormatter::parse() always returns false for MMMMM or LLLLL
                \$matched = false;
            }
        } else {
            \$matched = (int) \$matched;
        }

        return [
            'month' => \$matched,
        ];
    }
}
", "vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/DateFormatter/DateFormat/MonthTransformer.php");
    }
}
