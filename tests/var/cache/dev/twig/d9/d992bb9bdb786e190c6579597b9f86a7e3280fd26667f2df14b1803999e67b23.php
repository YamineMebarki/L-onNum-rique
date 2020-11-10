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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php */
class __TwigTemplate_45958b8637ed38a8dcb61f1f5ff92cf53b9af4cc159a1ebbfed480c905240064 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Transforms between a date string and a DateInterval object.
 *
 * @author Steffen Roßkamp <steffen.rosskamp@gimmickmedia.de>
 */
class DateIntervalToStringTransformer implements DataTransformerInterface
{
    private \$format;

    /**
     * Transforms a \\DateInterval instance to a string.
     *
     * @see \\DateInterval::format() for supported formats
     *
     * @param string \$format The date format
     */
    public function __construct(string \$format = 'P%yY%mM%dDT%hH%iM%sS')
    {
        \$this->format = \$format;
    }

    /**
     * Transforms a DateInterval object into a date string with the configured format.
     *
     * @param \\DateInterval \$value A DateInterval object
     *
     * @return string An ISO 8601 or relative date string like date interval presentation
     *
     * @throws UnexpectedTypeException if the given value is not a \\DateInterval instance
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return '';
        }
        if (!\$value instanceof \\DateInterval) {
            throw new UnexpectedTypeException(\$value, '\\DateInterval');
        }

        return \$value->format(\$this->format);
    }

    /**
     * Transforms a date string in the configured format into a DateInterval object.
     *
     * @param string \$value An ISO 8601 or date string like date interval presentation
     *
     * @return \\DateInterval|null An instance of \\DateInterval
     *
     * @throws UnexpectedTypeException       if the given value is not a string
     * @throws TransformationFailedException if the date interval could not be parsed
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }
        if (!\\is_string(\$value)) {
            throw new UnexpectedTypeException(\$value, 'string');
        }
        if ('' === \$value) {
            return null;
        }
        if (!\$this->isISO8601(\$value)) {
            throw new TransformationFailedException('Non ISO 8601 date strings are not supported yet');
        }
        \$valuePattern = '/^'.preg_replace('/%([yYmMdDhHiIsSwW])(\\w)/', '(?P<\$1>\\d+)\$2', \$this->format).'\$/';
        if (!preg_match(\$valuePattern, \$value)) {
            throw new TransformationFailedException(sprintf('Value \"%s\" contains intervals not accepted by format \"%s\".', \$value, \$this->format));
        }
        try {
            \$dateInterval = new \\DateInterval(\$value);
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return \$dateInterval;
    }

    private function isISO8601(\$string)
    {
        return preg_match('/^P(?=\\w*(?:\\d|%\\w))(?:\\d+Y|%[yY]Y)?(?:\\d+M|%[mM]M)?(?:(?:\\d+D|%[dD]D)|(?:\\d+W|%[wW]W))?(?:T(?:\\d+H|[hH]H)?(?:\\d+M|[iI]M)?(?:\\d+S|[sS]S)?)?\$/', \$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Transforms between a date string and a DateInterval object.
 *
 * @author Steffen Roßkamp <steffen.rosskamp@gimmickmedia.de>
 */
class DateIntervalToStringTransformer implements DataTransformerInterface
{
    private \$format;

    /**
     * Transforms a \\DateInterval instance to a string.
     *
     * @see \\DateInterval::format() for supported formats
     *
     * @param string \$format The date format
     */
    public function __construct(string \$format = 'P%yY%mM%dDT%hH%iM%sS')
    {
        \$this->format = \$format;
    }

    /**
     * Transforms a DateInterval object into a date string with the configured format.
     *
     * @param \\DateInterval \$value A DateInterval object
     *
     * @return string An ISO 8601 or relative date string like date interval presentation
     *
     * @throws UnexpectedTypeException if the given value is not a \\DateInterval instance
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return '';
        }
        if (!\$value instanceof \\DateInterval) {
            throw new UnexpectedTypeException(\$value, '\\DateInterval');
        }

        return \$value->format(\$this->format);
    }

    /**
     * Transforms a date string in the configured format into a DateInterval object.
     *
     * @param string \$value An ISO 8601 or date string like date interval presentation
     *
     * @return \\DateInterval|null An instance of \\DateInterval
     *
     * @throws UnexpectedTypeException       if the given value is not a string
     * @throws TransformationFailedException if the date interval could not be parsed
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }
        if (!\\is_string(\$value)) {
            throw new UnexpectedTypeException(\$value, 'string');
        }
        if ('' === \$value) {
            return null;
        }
        if (!\$this->isISO8601(\$value)) {
            throw new TransformationFailedException('Non ISO 8601 date strings are not supported yet');
        }
        \$valuePattern = '/^'.preg_replace('/%([yYmMdDhHiIsSwW])(\\w)/', '(?P<\$1>\\d+)\$2', \$this->format).'\$/';
        if (!preg_match(\$valuePattern, \$value)) {
            throw new TransformationFailedException(sprintf('Value \"%s\" contains intervals not accepted by format \"%s\".', \$value, \$this->format));
        }
        try {
            \$dateInterval = new \\DateInterval(\$value);
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return \$dateInterval;
    }

    private function isISO8601(\$string)
    {
        return preg_match('/^P(?=\\w*(?:\\d|%\\w))(?:\\d+Y|%[yY]Y)?(?:\\d+M|%[mM]M)?(?:(?:\\d+D|%[dD]D)|(?:\\d+W|%[wW]W))?(?:T(?:\\d+H|[hH]H)?(?:\\d+M|[iI]M)?(?:\\d+S|[sS]S)?)?\$/', \$string);
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateIntervalToStringTransformer.php");
    }
}
