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

/* vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php */
class __TwigTemplate_dd0c609af48cb7bb0d299f920da5e8da22d59ce432405db27db71c6958d4ebca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php"));

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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes an object implementing the {@see \\DateTimeInterface} to a date string.
 * Denormalizes a date string to an instance of {@see \\DateTime} or {@see \\DateTimeImmutable}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DateTimeNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    const FORMAT_KEY = 'datetime_format';
    const TIMEZONE_KEY = 'datetime_timezone';

    private \$defaultContext;

    private static \$supportedTypes = [
        \\DateTimeInterface::class => true,
        \\DateTimeImmutable::class => true,
        \\DateTime::class => true,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [], \\DateTimeZone \$timezone = null)
    {
        \$this->defaultContext = [
            self::FORMAT_KEY => \\DateTime::RFC3339,
            self::TIMEZONE_KEY => null,
        ];

        if (!\\is_array(\$defaultContext)) {
            @trigger_error('Passing configuration options directly to the constructor is deprecated since Symfony 4.2, use the default context instead.', E_USER_DEPRECATED);

            \$defaultContext = [self::FORMAT_KEY => (string) \$defaultContext];
            \$defaultContext[self::TIMEZONE_KEY] = \$timezone;
        }

        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\DateTimeInterface) {
            throw new InvalidArgumentException('The object must implement the \"\\DateTimeInterface\".');
        }

        \$dateTimeFormat = \$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY];
        \$timezone = \$this->getTimezone(\$context);

        if (null !== \$timezone) {
            \$object = clone \$object;
            \$object = \$object->setTimezone(\$timezone);
        }

        return \$object->format(\$dateTimeFormat);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateTimeInterface;
    }

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        \$dateTimeFormat = \$context[self::FORMAT_KEY] ?? null;
        \$timezone = \$this->getTimezone(\$context);

        if ('' === \$data || null === \$data) {
            throw new NotNormalizableValueException('The data is either an empty string or null, you should pass a string that can be parsed with the passed format or a valid DateTime string.');
        }

        if (null !== \$dateTimeFormat) {
            \$object = \\DateTime::class === \$type ? \\DateTime::createFromFormat(\$dateTimeFormat, \$data, \$timezone) : \\DateTimeImmutable::createFromFormat(\$dateTimeFormat, \$data, \$timezone);

            if (false !== \$object) {
                return \$object;
            }

            \$dateTimeErrors = \\DateTime::class === \$type ? \\DateTime::getLastErrors() : \\DateTimeImmutable::getLastErrors();

            throw new NotNormalizableValueException(sprintf(
                'Parsing datetime string \"%s\" using format \"%s\" resulted in %d errors:'.\"\\n\".'%s',
                \$data,
                \$dateTimeFormat,
                \$dateTimeErrors['error_count'],
                implode(\"\\n\", \$this->formatDateTimeErrors(\$dateTimeErrors['errors']))
            ));
        }

        try {
            return \\DateTime::class === \$type ? new \\DateTime(\$data, \$timezone) : new \\DateTimeImmutable(\$data, \$timezone);
        } catch (\\Exception \$e) {
            throw new NotNormalizableValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return isset(self::\$supportedTypes[\$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Formats datetime errors.
     *
     * @return string[]
     */
    private function formatDateTimeErrors(array \$errors)
    {
        \$formattedErrors = [];

        foreach (\$errors as \$pos => \$message) {
            \$formattedErrors[] = sprintf('at position %d: %s', \$pos, \$message);
        }

        return \$formattedErrors;
    }

    private function getTimezone(array \$context)
    {
        \$dateTimeZone = \$context[self::TIMEZONE_KEY] ?? \$this->defaultContext[self::TIMEZONE_KEY];

        if (null === \$dateTimeZone) {
            return null;
        }

        return \$dateTimeZone instanceof \\DateTimeZone ? \$dateTimeZone : new \\DateTimeZone(\$dateTimeZone);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php";
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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes an object implementing the {@see \\DateTimeInterface} to a date string.
 * Denormalizes a date string to an instance of {@see \\DateTime} or {@see \\DateTimeImmutable}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DateTimeNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    const FORMAT_KEY = 'datetime_format';
    const TIMEZONE_KEY = 'datetime_timezone';

    private \$defaultContext;

    private static \$supportedTypes = [
        \\DateTimeInterface::class => true,
        \\DateTimeImmutable::class => true,
        \\DateTime::class => true,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [], \\DateTimeZone \$timezone = null)
    {
        \$this->defaultContext = [
            self::FORMAT_KEY => \\DateTime::RFC3339,
            self::TIMEZONE_KEY => null,
        ];

        if (!\\is_array(\$defaultContext)) {
            @trigger_error('Passing configuration options directly to the constructor is deprecated since Symfony 4.2, use the default context instead.', E_USER_DEPRECATED);

            \$defaultContext = [self::FORMAT_KEY => (string) \$defaultContext];
            \$defaultContext[self::TIMEZONE_KEY] = \$timezone;
        }

        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\DateTimeInterface) {
            throw new InvalidArgumentException('The object must implement the \"\\DateTimeInterface\".');
        }

        \$dateTimeFormat = \$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY];
        \$timezone = \$this->getTimezone(\$context);

        if (null !== \$timezone) {
            \$object = clone \$object;
            \$object = \$object->setTimezone(\$timezone);
        }

        return \$object->format(\$dateTimeFormat);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateTimeInterface;
    }

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        \$dateTimeFormat = \$context[self::FORMAT_KEY] ?? null;
        \$timezone = \$this->getTimezone(\$context);

        if ('' === \$data || null === \$data) {
            throw new NotNormalizableValueException('The data is either an empty string or null, you should pass a string that can be parsed with the passed format or a valid DateTime string.');
        }

        if (null !== \$dateTimeFormat) {
            \$object = \\DateTime::class === \$type ? \\DateTime::createFromFormat(\$dateTimeFormat, \$data, \$timezone) : \\DateTimeImmutable::createFromFormat(\$dateTimeFormat, \$data, \$timezone);

            if (false !== \$object) {
                return \$object;
            }

            \$dateTimeErrors = \\DateTime::class === \$type ? \\DateTime::getLastErrors() : \\DateTimeImmutable::getLastErrors();

            throw new NotNormalizableValueException(sprintf(
                'Parsing datetime string \"%s\" using format \"%s\" resulted in %d errors:'.\"\\n\".'%s',
                \$data,
                \$dateTimeFormat,
                \$dateTimeErrors['error_count'],
                implode(\"\\n\", \$this->formatDateTimeErrors(\$dateTimeErrors['errors']))
            ));
        }

        try {
            return \\DateTime::class === \$type ? new \\DateTime(\$data, \$timezone) : new \\DateTimeImmutable(\$data, \$timezone);
        } catch (\\Exception \$e) {
            throw new NotNormalizableValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return isset(self::\$supportedTypes[\$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Formats datetime errors.
     *
     * @return string[]
     */
    private function formatDateTimeErrors(array \$errors)
    {
        \$formattedErrors = [];

        foreach (\$errors as \$pos => \$message) {
            \$formattedErrors[] = sprintf('at position %d: %s', \$pos, \$message);
        }

        return \$formattedErrors;
    }

    private function getTimezone(array \$context)
    {
        \$dateTimeZone = \$context[self::TIMEZONE_KEY] ?? \$this->defaultContext[self::TIMEZONE_KEY];

        if (null === \$dateTimeZone) {
            return null;
        }

        return \$dateTimeZone instanceof \\DateTimeZone ? \$dateTimeZone : new \\DateTimeZone(\$dateTimeZone);
    }
}
", "vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php");
    }
}
