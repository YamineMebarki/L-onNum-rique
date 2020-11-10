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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php */
class __TwigTemplate_bc5b573adc648b8821e349d1e73d100ec146561781c30f1c307bc57c622d7bff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateTimeImmutable;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create_immutable;

/**
 * Immutable type of {@see VarDateTimeType}.
 */
class VarDateTimeImmutableType extends VarDateTimeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATETIME_IMMUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeImmutable) {
            return \$value->format(\$platform->getDateTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(
            \$value,
            \$this->getName(),
            ['null', DateTimeImmutable::class]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeImmutable) {
            return \$value;
        }

        \$dateTime = date_create_immutable(\$value);

        if (! \$dateTime) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
        }

        return \$dateTime;
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use DateTimeImmutable;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create_immutable;

/**
 * Immutable type of {@see VarDateTimeType}.
 */
class VarDateTimeImmutableType extends VarDateTimeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::DATETIME_IMMUTABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return \$value;
        }

        if (\$value instanceof DateTimeImmutable) {
            return \$value->format(\$platform->getDateTimeFormatString());
        }

        throw ConversionException::conversionFailedInvalidType(
            \$value,
            \$this->getName(),
            ['null', DateTimeImmutable::class]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTimeImmutable) {
            return \$value;
        }

        \$dateTime = date_create_immutable(\$value);

        if (! \$dateTime) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
        }

        return \$dateTime;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php");
    }
}
