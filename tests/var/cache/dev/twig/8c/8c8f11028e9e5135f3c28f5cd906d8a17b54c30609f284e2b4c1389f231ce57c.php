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

/* vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php */
class __TwigTemplate_fd58684bb5886cef267b26401bb76ae8c46f7899fdc2ffb7acf39f62e09b36c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php"));

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
use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;

/**
 * Normalizes an instance of {@see \\DateInterval} to an interval string.
 * Denormalizes an interval string to an instance of {@see \\DateInterval}.
 *
 * @author Jérôme Parmentier <jerome@prmntr.me>
 */
class DateIntervalNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    const FORMAT_KEY = 'dateinterval_format';

    private \$defaultContext = [
        self::FORMAT_KEY => '%rP%yY%mM%dDT%hH%iM%sS',
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [])
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error(sprintf('The \"format\" parameter is deprecated since Symfony 4.2, use the \"%s\" key of the context instead.', self::FORMAT_KEY), E_USER_DEPRECATED);

            \$defaultContext = [self::FORMAT_KEY => (string) \$defaultContext];
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
        if (!\$object instanceof \\DateInterval) {
            throw new InvalidArgumentException('The object must be an instance of \"\\DateInterval\".');
        }

        return \$object->format(\$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY]);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateInterval;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (!\\is_string(\$data)) {
            throw new InvalidArgumentException(sprintf('Data expected to be a string, %s given.', \\gettype(\$data)));
        }

        if (!\$this->isISO8601(\$data)) {
            throw new UnexpectedValueException('Expected a valid ISO 8601 interval string.');
        }

        \$dateIntervalFormat = \$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY];

        \$signPattern = '';
        switch (substr(\$dateIntervalFormat, 0, 2)) {
            case '%R':
                \$signPattern = '[-+]';
                \$dateIntervalFormat = substr(\$dateIntervalFormat, 2);
                break;
            case '%r':
                \$signPattern = '-?';
                \$dateIntervalFormat = substr(\$dateIntervalFormat, 2);
                break;
        }
        \$valuePattern = '/^'.\$signPattern.preg_replace('/%([yYmMdDhHiIsSwW])(\\w)/', '(?P<\$1>\\d+)\$2', \$dateIntervalFormat).'\$/';
        if (!preg_match(\$valuePattern, \$data)) {
            throw new UnexpectedValueException(sprintf('Value \"%s\" contains intervals not accepted by format \"%s\".', \$data, \$dateIntervalFormat));
        }

        try {
            if ('-' === \$data[0]) {
                \$interval = new \\DateInterval(substr(\$data, 1));
                \$interval->invert = 1;

                return \$interval;
            }

            if ('+' === \$data[0]) {
                return new \\DateInterval(substr(\$data, 1));
            }

            return new \\DateInterval(\$data);
        } catch (\\Exception \$e) {
            throw new UnexpectedValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return \\DateInterval::class === \$type;
    }

    private function isISO8601(\$string)
    {
        return preg_match('/^[\\-+]?P(?=\\w*(?:\\d|%\\w))(?:\\d+Y|%[yY]Y)?(?:\\d+M|%[mM]M)?(?:(?:\\d+D|%[dD]D)|(?:\\d+W|%[wW]W))?(?:T(?:\\d+H|[hH]H)?(?:\\d+M|[iI]M)?(?:\\d+S|[sS]S)?)?\$/', \$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php";
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
use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;

/**
 * Normalizes an instance of {@see \\DateInterval} to an interval string.
 * Denormalizes an interval string to an instance of {@see \\DateInterval}.
 *
 * @author Jérôme Parmentier <jerome@prmntr.me>
 */
class DateIntervalNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    const FORMAT_KEY = 'dateinterval_format';

    private \$defaultContext = [
        self::FORMAT_KEY => '%rP%yY%mM%dDT%hH%iM%sS',
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [])
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error(sprintf('The \"format\" parameter is deprecated since Symfony 4.2, use the \"%s\" key of the context instead.', self::FORMAT_KEY), E_USER_DEPRECATED);

            \$defaultContext = [self::FORMAT_KEY => (string) \$defaultContext];
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
        if (!\$object instanceof \\DateInterval) {
            throw new InvalidArgumentException('The object must be an instance of \"\\DateInterval\".');
        }

        return \$object->format(\$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY]);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateInterval;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (!\\is_string(\$data)) {
            throw new InvalidArgumentException(sprintf('Data expected to be a string, %s given.', \\gettype(\$data)));
        }

        if (!\$this->isISO8601(\$data)) {
            throw new UnexpectedValueException('Expected a valid ISO 8601 interval string.');
        }

        \$dateIntervalFormat = \$context[self::FORMAT_KEY] ?? \$this->defaultContext[self::FORMAT_KEY];

        \$signPattern = '';
        switch (substr(\$dateIntervalFormat, 0, 2)) {
            case '%R':
                \$signPattern = '[-+]';
                \$dateIntervalFormat = substr(\$dateIntervalFormat, 2);
                break;
            case '%r':
                \$signPattern = '-?';
                \$dateIntervalFormat = substr(\$dateIntervalFormat, 2);
                break;
        }
        \$valuePattern = '/^'.\$signPattern.preg_replace('/%([yYmMdDhHiIsSwW])(\\w)/', '(?P<\$1>\\d+)\$2', \$dateIntervalFormat).'\$/';
        if (!preg_match(\$valuePattern, \$data)) {
            throw new UnexpectedValueException(sprintf('Value \"%s\" contains intervals not accepted by format \"%s\".', \$data, \$dateIntervalFormat));
        }

        try {
            if ('-' === \$data[0]) {
                \$interval = new \\DateInterval(substr(\$data, 1));
                \$interval->invert = 1;

                return \$interval;
            }

            if ('+' === \$data[0]) {
                return new \\DateInterval(substr(\$data, 1));
            }

            return new \\DateInterval(\$data);
        } catch (\\Exception \$e) {
            throw new UnexpectedValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return \\DateInterval::class === \$type;
    }

    private function isISO8601(\$string)
    {
        return preg_match('/^[\\-+]?P(?=\\w*(?:\\d|%\\w))(?:\\d+Y|%[yY]Y)?(?:\\d+M|%[mM]M)?(?:(?:\\d+D|%[dD]D)|(?:\\d+W|%[wW]W))?(?:T(?:\\d+H|[hH]H)?(?:\\d+M|[iI]M)?(?:\\d+S|[sS]S)?)?\$/', \$string);
    }
}
", "vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php");
    }
}
