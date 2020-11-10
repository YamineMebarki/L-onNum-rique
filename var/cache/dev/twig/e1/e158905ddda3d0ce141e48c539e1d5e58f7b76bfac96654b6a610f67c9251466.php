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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php */
class __TwigTemplate_2ca70442ba48b46579b0cee67d43062b02052dc4aac31d995e461e7c83bd7379 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateInterval;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Throwable;
use function substr;

/**
 * Type that maps interval string to a PHP DateInterval Object.
 */
class DateIntervalType extends Type
{
    public const FORMAT = '%RP%YY%MM%DDT%HH%IM%SS';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATEINTERVAL;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        \$fieldDeclaration['length'] = 255;

        return \$platform->getVarcharTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        if (\$value instanceof DateInterval) {
            return \$value->format(self::FORMAT);
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateInterval']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateInterval) {
            return \$value;
        }

        \$negative = false;

        if (isset(\$value[0]) && (\$value[0] === '+' || \$value[0] === '-')) {
            \$negative = \$value[0] === '-';
            \$value    = substr(\$value, 1);
        }

        try {
            \$interval = new DateInterval(\$value);

            if (\$negative) {
                \$interval->invert = 1;
            }

            return \$interval;
        } catch (Throwable \$exception) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), self::FORMAT, \$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use DateInterval;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Throwable;
use function substr;

/**
 * Type that maps interval string to a PHP DateInterval Object.
 */
class DateIntervalType extends Type
{
    public const FORMAT = '%RP%YY%MM%DDT%HH%IM%SS';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATEINTERVAL;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        \$fieldDeclaration['length'] = 255;

        return \$platform->getVarcharTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        if (\$value instanceof DateInterval) {
            return \$value->format(self::FORMAT);
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateInterval']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateInterval) {
            return \$value;
        }

        \$negative = false;

        if (isset(\$value[0]) && (\$value[0] === '+' || \$value[0] === '-')) {
            \$negative = \$value[0] === '-';
            \$value    = substr(\$value, 1);
        }

        try {
            \$interval = new DateInterval(\$value);

            if (\$negative) {
                \$interval->invert = 1;
            }

            return \$interval;
        } catch (Throwable \$exception) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), self::FORMAT, \$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php");
    }
}
