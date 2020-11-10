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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php */
class __TwigTemplate_c3fcdd2cf437018af0bf8cd0e93c1f2a94f2136164c4f95f3899df8102e9abce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php"));

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
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Transforms between a normalized time and a localized time string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToLocalizedStringTransformer extends BaseDateTimeTransformer
{
    private \$dateFormat;
    private \$timeFormat;
    private \$pattern;
    private \$calendar;

    /**
     * @see BaseDateTimeTransformer::formats for available format options
     *
     * @param string \$inputTimezone  The name of the input timezone
     * @param string \$outputTimezone The name of the output timezone
     * @param int    \$dateFormat     The date format
     * @param int    \$timeFormat     The time format
     * @param int    \$calendar       One of the \\IntlDateFormatter calendar constants
     * @param string \$pattern        A pattern to pass to \\IntlDateFormatter
     *
     * @throws UnexpectedTypeException If a format is not supported or if a timezone is not a string
     */
    public function __construct(string \$inputTimezone = null, string \$outputTimezone = null, int \$dateFormat = null, int \$timeFormat = null, int \$calendar = \\IntlDateFormatter::GREGORIAN, string \$pattern = null)
    {
        parent::__construct(\$inputTimezone, \$outputTimezone);

        if (null === \$dateFormat) {
            \$dateFormat = \\IntlDateFormatter::MEDIUM;
        }

        if (null === \$timeFormat) {
            \$timeFormat = \\IntlDateFormatter::SHORT;
        }

        if (!\\in_array(\$dateFormat, self::\$formats, true)) {
            throw new UnexpectedTypeException(\$dateFormat, implode('\", \"', self::\$formats));
        }

        if (!\\in_array(\$timeFormat, self::\$formats, true)) {
            throw new UnexpectedTypeException(\$timeFormat, implode('\", \"', self::\$formats));
        }

        \$this->dateFormat = \$dateFormat;
        \$this->timeFormat = \$timeFormat;
        \$this->calendar = \$calendar;
        \$this->pattern = \$pattern;
    }

    /**
     * Transforms a normalized date into a localized date string/array.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return string|array Localized date string/array
     *
     * @throws TransformationFailedException if the given value is not a \\DateTimeInterface
     *                                       or if the date could not be transformed
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        \$value = \$this->getIntlDateFormatter()->format(\$dateTime->getTimestamp());

        if (0 != intl_get_error_code()) {
            throw new TransformationFailedException(intl_get_error_message());
        }

        return \$value;
    }

    /**
     * Transforms a localized date string/array into a normalized date.
     *
     * @param string|array \$value Localized date string/array
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException if the given value is not a string,
     *                                       if the date could not be parsed
     */
    public function reverseTransform(\$value)
    {
        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$value) {
            return null;
        }

        // date-only patterns require parsing to be done in UTC, as midnight might not exist in the local timezone due
        // to DST changes
        \$dateOnly = \$this->isPatternDateOnly();

        \$timestamp = \$this->getIntlDateFormatter(\$dateOnly)->parse(\$value);

        if (0 != intl_get_error_code()) {
            throw new TransformationFailedException(intl_get_error_message());
        } elseif (\$timestamp > 253402214400) {
            // This timestamp represents UTC midnight of 9999-12-31 to prevent 5+ digit years
            throw new TransformationFailedException('Years beyond 9999 are not supported.');
        }

        try {
            if (\$dateOnly) {
                // we only care about year-month-date, which has been delivered as a timestamp pointing to UTC midnight
                \$dateTime = new \\DateTime(gmdate('Y-m-d', \$timestamp), new \\DateTimeZone(\$this->outputTimezone));
            } else {
                // read timestamp into DateTime object - the formatter delivers a timestamp
                \$dateTime = new \\DateTime(sprintf('@%s', \$timestamp));
            }
            // set timezone separately, as it would be ignored if set via the constructor,
            // see https://php.net/datetime.construct
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->outputTimezone !== \$this->inputTimezone) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        return \$dateTime;
    }

    /**
     * Returns a preconfigured IntlDateFormatter instance.
     *
     * @param bool \$ignoreTimezone Use UTC regardless of the configured timezone
     *
     * @return \\IntlDateFormatter
     *
     * @throws TransformationFailedException in case the date formatter can not be constructed
     */
    protected function getIntlDateFormatter(\$ignoreTimezone = false)
    {
        \$dateFormat = \$this->dateFormat;
        \$timeFormat = \$this->timeFormat;
        \$timezone = new \\DateTimeZone(\$ignoreTimezone ? 'UTC' : \$this->outputTimezone);

        \$calendar = \$this->calendar;
        \$pattern = \$this->pattern;

        \$intlDateFormatter = new \\IntlDateFormatter(\\Locale::getDefault(), \$dateFormat, \$timeFormat, \$timezone, \$calendar, \$pattern);

        // new \\intlDateFormatter may return null instead of false in case of failure, see https://bugs.php.net/66323
        if (!\$intlDateFormatter) {
            throw new TransformationFailedException(intl_get_error_message(), intl_get_error_code());
        }

        \$intlDateFormatter->setLenient(false);

        return \$intlDateFormatter;
    }

    /**
     * Checks if the pattern contains only a date.
     *
     * @return bool
     */
    protected function isPatternDateOnly()
    {
        if (null === \$this->pattern) {
            return false;
        }

        // strip escaped text
        \$pattern = preg_replace(\"#'(.*?)'#\", '', \$this->pattern);

        // check for the absence of time-related placeholders
        return 0 === preg_match('#[ahHkKmsSAzZOvVxX]#', \$pattern);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php";
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
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Transforms between a normalized time and a localized time string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToLocalizedStringTransformer extends BaseDateTimeTransformer
{
    private \$dateFormat;
    private \$timeFormat;
    private \$pattern;
    private \$calendar;

    /**
     * @see BaseDateTimeTransformer::formats for available format options
     *
     * @param string \$inputTimezone  The name of the input timezone
     * @param string \$outputTimezone The name of the output timezone
     * @param int    \$dateFormat     The date format
     * @param int    \$timeFormat     The time format
     * @param int    \$calendar       One of the \\IntlDateFormatter calendar constants
     * @param string \$pattern        A pattern to pass to \\IntlDateFormatter
     *
     * @throws UnexpectedTypeException If a format is not supported or if a timezone is not a string
     */
    public function __construct(string \$inputTimezone = null, string \$outputTimezone = null, int \$dateFormat = null, int \$timeFormat = null, int \$calendar = \\IntlDateFormatter::GREGORIAN, string \$pattern = null)
    {
        parent::__construct(\$inputTimezone, \$outputTimezone);

        if (null === \$dateFormat) {
            \$dateFormat = \\IntlDateFormatter::MEDIUM;
        }

        if (null === \$timeFormat) {
            \$timeFormat = \\IntlDateFormatter::SHORT;
        }

        if (!\\in_array(\$dateFormat, self::\$formats, true)) {
            throw new UnexpectedTypeException(\$dateFormat, implode('\", \"', self::\$formats));
        }

        if (!\\in_array(\$timeFormat, self::\$formats, true)) {
            throw new UnexpectedTypeException(\$timeFormat, implode('\", \"', self::\$formats));
        }

        \$this->dateFormat = \$dateFormat;
        \$this->timeFormat = \$timeFormat;
        \$this->calendar = \$calendar;
        \$this->pattern = \$pattern;
    }

    /**
     * Transforms a normalized date into a localized date string/array.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return string|array Localized date string/array
     *
     * @throws TransformationFailedException if the given value is not a \\DateTimeInterface
     *                                       or if the date could not be transformed
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        \$value = \$this->getIntlDateFormatter()->format(\$dateTime->getTimestamp());

        if (0 != intl_get_error_code()) {
            throw new TransformationFailedException(intl_get_error_message());
        }

        return \$value;
    }

    /**
     * Transforms a localized date string/array into a normalized date.
     *
     * @param string|array \$value Localized date string/array
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException if the given value is not a string,
     *                                       if the date could not be parsed
     */
    public function reverseTransform(\$value)
    {
        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$value) {
            return null;
        }

        // date-only patterns require parsing to be done in UTC, as midnight might not exist in the local timezone due
        // to DST changes
        \$dateOnly = \$this->isPatternDateOnly();

        \$timestamp = \$this->getIntlDateFormatter(\$dateOnly)->parse(\$value);

        if (0 != intl_get_error_code()) {
            throw new TransformationFailedException(intl_get_error_message());
        } elseif (\$timestamp > 253402214400) {
            // This timestamp represents UTC midnight of 9999-12-31 to prevent 5+ digit years
            throw new TransformationFailedException('Years beyond 9999 are not supported.');
        }

        try {
            if (\$dateOnly) {
                // we only care about year-month-date, which has been delivered as a timestamp pointing to UTC midnight
                \$dateTime = new \\DateTime(gmdate('Y-m-d', \$timestamp), new \\DateTimeZone(\$this->outputTimezone));
            } else {
                // read timestamp into DateTime object - the formatter delivers a timestamp
                \$dateTime = new \\DateTime(sprintf('@%s', \$timestamp));
            }
            // set timezone separately, as it would be ignored if set via the constructor,
            // see https://php.net/datetime.construct
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->outputTimezone !== \$this->inputTimezone) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        return \$dateTime;
    }

    /**
     * Returns a preconfigured IntlDateFormatter instance.
     *
     * @param bool \$ignoreTimezone Use UTC regardless of the configured timezone
     *
     * @return \\IntlDateFormatter
     *
     * @throws TransformationFailedException in case the date formatter can not be constructed
     */
    protected function getIntlDateFormatter(\$ignoreTimezone = false)
    {
        \$dateFormat = \$this->dateFormat;
        \$timeFormat = \$this->timeFormat;
        \$timezone = new \\DateTimeZone(\$ignoreTimezone ? 'UTC' : \$this->outputTimezone);

        \$calendar = \$this->calendar;
        \$pattern = \$this->pattern;

        \$intlDateFormatter = new \\IntlDateFormatter(\\Locale::getDefault(), \$dateFormat, \$timeFormat, \$timezone, \$calendar, \$pattern);

        // new \\intlDateFormatter may return null instead of false in case of failure, see https://bugs.php.net/66323
        if (!\$intlDateFormatter) {
            throw new TransformationFailedException(intl_get_error_message(), intl_get_error_code());
        }

        \$intlDateFormatter->setLenient(false);

        return \$intlDateFormatter;
    }

    /**
     * Checks if the pattern contains only a date.
     *
     * @return bool
     */
    protected function isPatternDateOnly()
    {
        if (null === \$this->pattern) {
            return false;
        }

        // strip escaped text
        \$pattern = preg_replace(\"#'(.*?)'#\", '', \$this->pattern);

        // check for the absence of time-related placeholders
        return 0 === preg_match('#[ahHkKmsSAzZOvVxX]#', \$pattern);
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToLocalizedStringTransformer.php");
    }
}
