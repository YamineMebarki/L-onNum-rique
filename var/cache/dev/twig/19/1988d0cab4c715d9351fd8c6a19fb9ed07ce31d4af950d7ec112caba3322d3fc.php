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

/* vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php */
class __TwigTemplate_2c50cbf24959f6ac13dddb27844cc2668cd7067371f6df8c521376bfa1e0da52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php"));

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
 * Parser and formatter for quarter format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class QuarterTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$month = (int) \$dateTime->format('n');
        \$quarter = (int) floor((\$month - 1) / 3) + 1;
        switch (\$length) {
            case 1:
            case 2:
                return \$this->padLeft(\$quarter, \$length);
            case 3:
                return 'Q'.\$quarter;
            default:
                \$map = [1 => '1st quarter', 2 => '2nd quarter', 3 => '3rd quarter', 4 => '4th quarter'];

                return \$map[\$quarter];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 1:
            case 2:
                return '\\d{'.\$length.'}';
            case 3:
                return 'Q\\d';
            default:
                return '(?:1st|2nd|3rd|4th) quarter';
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
        return "vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php";
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
 * Parser and formatter for quarter format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class QuarterTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$month = (int) \$dateTime->format('n');
        \$quarter = (int) floor((\$month - 1) / 3) + 1;
        switch (\$length) {
            case 1:
            case 2:
                return \$this->padLeft(\$quarter, \$length);
            case 3:
                return 'Q'.\$quarter;
            default:
                \$map = [1 => '1st quarter', 2 => '2nd quarter', 3 => '3rd quarter', 4 => '4th quarter'];

                return \$map[\$quarter];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        switch (\$length) {
            case 1:
            case 2:
                return '\\d{'.\$length.'}';
            case 3:
                return 'Q\\d';
            default:
                return '(?:1st|2nd|3rd|4th) quarter';
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
", "vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/DateFormatter/DateFormat/QuarterTransformer.php");
    }
}
