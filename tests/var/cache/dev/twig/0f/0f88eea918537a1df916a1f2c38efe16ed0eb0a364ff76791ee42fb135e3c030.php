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

/* vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php */
class __TwigTemplate_652af0dd67e6bbdec0ddf202090698976c152688d66e68601e76050afb749278 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php"));

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
 * Parser and formatter for day of week format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class DayOfWeekTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$dayOfWeek = \$dateTime->format('l');
        switch (\$length) {
            case 4:
                return \$dayOfWeek;
            case 5:
                return \$dayOfWeek[0];
            case 6:
                return substr(\$dayOfWeek, 0, 2);
            default:
                return substr(\$dayOfWeek, 0, 3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 4:
                return 'Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday';
            case 5:
                return '[MTWFS]';
            case 6:
                return 'Mo|Tu|We|Th|Fr|Sa|Su';
            default:
                return 'Mon|Tue|Wed|Thu|Fri|Sat|Sun';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php";
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
 * Parser and formatter for day of week format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class DayOfWeekTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$dayOfWeek = \$dateTime->format('l');
        switch (\$length) {
            case 4:
                return \$dayOfWeek;
            case 5:
                return \$dayOfWeek[0];
            case 6:
                return substr(\$dayOfWeek, 0, 2);
            default:
                return substr(\$dayOfWeek, 0, 3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 4:
                return 'Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday';
            case 5:
                return '[MTWFS]';
            case 6:
                return 'Mo|Tu|We|Th|Fr|Sa|Su';
            default:
                return 'Mon|Tue|Wed|Thu|Fri|Sat|Sun';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        return [];
    }
}
", "vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/DateFormatter/DateFormat/DayOfWeekTransformer.php");
    }
}
