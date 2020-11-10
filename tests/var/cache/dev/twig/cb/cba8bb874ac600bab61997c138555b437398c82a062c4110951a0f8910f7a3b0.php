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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php */
class __TwigTemplate_eb1478599c3018c4bf4bffc06d00c9b296db87c6c2151b92cbff262fdb55826d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateTime;
use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create;

/**
 * Type that maps an SQL DATETIME/TIMESTAMP to a PHP DateTime object.
 */
class DateTimeType extends Type implements PhpDateTimeMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATETIME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getDateTimeTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeInterface) {
            return \$value->format(\$platform->getDateTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateTime']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeInterface) {
            return \$value;
        }

        \$val = DateTime::createFromFormat(\$platform->getDateTimeFormatString(), \$value);

        if (! \$val) {
            \$val = date_create(\$value);
        }

        if (! \$val) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), \$platform->getDateTimeFormatString());
        }

        return \$val;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use DateTime;
use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create;

/**
 * Type that maps an SQL DATETIME/TIMESTAMP to a PHP DateTime object.
 */
class DateTimeType extends Type implements PhpDateTimeMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATETIME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getDateTimeTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeInterface) {
            return \$value->format(\$platform->getDateTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(\$value, \$this->getName(), ['null', 'DateTime']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeInterface) {
            return \$value;
        }

        \$val = DateTime::createFromFormat(\$platform->getDateTimeFormatString(), \$value);

        if (! \$val) {
            \$val = date_create(\$value);
        }

        if (! \$val) {
            throw ConversionException::conversionFailedFormat(\$value, \$this->getName(), \$platform->getDateTimeFormatString());
        }

        return \$val;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php");
    }
}
