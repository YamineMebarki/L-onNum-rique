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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php */
class __TwigTemplate_2f46a752aaa65527e80fc153a771c323c6efb780efdfe34e48ac53db2cbe2a4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php"));

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

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Franz Wilding <franz.wilding@me.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Fred Cox <mcfedr@gmail.com>
 */
class DateTimeToHtml5LocalDateTimeTransformer extends BaseDateTimeTransformer
{
    const HTML5_FORMAT = 'Y-m-d\\\\TH:i:s';

    /**
     * Transforms a \\DateTime into a local date and time string.
     *
     * According to the HTML standard, the input string of a datetime-local
     * input is a RFC3339 date followed by 'T', followed by a RFC3339 time.
     * https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#valid-local-date-and-time-string
     *
     * @param \\DateTime|\\DateTimeInterface \$dateTime A DateTime object
     *
     * @return string The formatted date
     *
     * @throws TransformationFailedException If the given value is not an
     *                                       instance of \\DateTime or \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTime && !\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTime or \\DateTimeInterface.');
        }

        if (\$this->inputTimezone !== \$this->outputTimezone) {
            if (!\$dateTime instanceof \\DateTimeImmutable) {
                \$dateTime = clone \$dateTime;
            }

            \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        }

        return \$dateTime->format(self::HTML5_FORMAT);
    }

    /**
     * Transforms a local date and time string into a \\DateTime.
     *
     * When transforming back to DateTime the regex is slightly laxer, taking into
     * account rules for parsing a local date and time string
     * https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#parse-a-local-date-and-time-string
     *
     * @param string \$dateTimeLocal Formatted string
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException If the given value is not a string,
     *                                       if the value could not be transformed
     */
    public function reverseTransform(\$dateTimeLocal)
    {
        if (!\\is_string(\$dateTimeLocal)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$dateTimeLocal) {
            return null;
        }

        // to maintain backwards compatibility we do not strictly validate the submitted date
        // see https://github.com/symfony/symfony/issues/28699
        if (!preg_match('/^(\\d{4})-(\\d{2})-(\\d{2})[T ]\\d{2}:\\d{2}(?::\\d{2})?/', \$dateTimeLocal, \$matches)) {
            throw new TransformationFailedException(sprintf('The date \"%s\" is not a valid date.', \$dateTimeLocal));
        }

        try {
            \$dateTime = new \\DateTime(\$dateTimeLocal, new \\DateTimeZone(\$this->outputTimezone));
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->inputTimezone !== \$dateTime->getTimezone()->getName()) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        if (!checkdate(\$matches[2], \$matches[3], \$matches[1])) {
            throw new TransformationFailedException(sprintf('The date \"%s-%s-%s\" is not a valid date.', \$matches[1], \$matches[2], \$matches[3]));
        }

        return \$dateTime;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php";
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

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Franz Wilding <franz.wilding@me.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Fred Cox <mcfedr@gmail.com>
 */
class DateTimeToHtml5LocalDateTimeTransformer extends BaseDateTimeTransformer
{
    const HTML5_FORMAT = 'Y-m-d\\\\TH:i:s';

    /**
     * Transforms a \\DateTime into a local date and time string.
     *
     * According to the HTML standard, the input string of a datetime-local
     * input is a RFC3339 date followed by 'T', followed by a RFC3339 time.
     * https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#valid-local-date-and-time-string
     *
     * @param \\DateTime|\\DateTimeInterface \$dateTime A DateTime object
     *
     * @return string The formatted date
     *
     * @throws TransformationFailedException If the given value is not an
     *                                       instance of \\DateTime or \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTime && !\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTime or \\DateTimeInterface.');
        }

        if (\$this->inputTimezone !== \$this->outputTimezone) {
            if (!\$dateTime instanceof \\DateTimeImmutable) {
                \$dateTime = clone \$dateTime;
            }

            \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        }

        return \$dateTime->format(self::HTML5_FORMAT);
    }

    /**
     * Transforms a local date and time string into a \\DateTime.
     *
     * When transforming back to DateTime the regex is slightly laxer, taking into
     * account rules for parsing a local date and time string
     * https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#parse-a-local-date-and-time-string
     *
     * @param string \$dateTimeLocal Formatted string
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException If the given value is not a string,
     *                                       if the value could not be transformed
     */
    public function reverseTransform(\$dateTimeLocal)
    {
        if (!\\is_string(\$dateTimeLocal)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$dateTimeLocal) {
            return null;
        }

        // to maintain backwards compatibility we do not strictly validate the submitted date
        // see https://github.com/symfony/symfony/issues/28699
        if (!preg_match('/^(\\d{4})-(\\d{2})-(\\d{2})[T ]\\d{2}:\\d{2}(?::\\d{2})?/', \$dateTimeLocal, \$matches)) {
            throw new TransformationFailedException(sprintf('The date \"%s\" is not a valid date.', \$dateTimeLocal));
        }

        try {
            \$dateTime = new \\DateTime(\$dateTimeLocal, new \\DateTimeZone(\$this->outputTimezone));
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->inputTimezone !== \$dateTime->getTimezone()->getName()) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        if (!checkdate(\$matches[2], \$matches[3], \$matches[1])) {
            throw new TransformationFailedException(sprintf('The date \"%s-%s-%s\" is not a valid date.', \$matches[1], \$matches[2], \$matches[3]));
        }

        return \$dateTime;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformer.php");
    }
}
