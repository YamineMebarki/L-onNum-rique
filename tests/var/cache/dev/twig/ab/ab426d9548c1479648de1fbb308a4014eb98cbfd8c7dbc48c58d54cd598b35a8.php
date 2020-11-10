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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php */
class __TwigTemplate_e3b6443e03a7cd4fcdea59ed005627e8e4ce0c97a8e82f79ca2fba402974cf90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use DateTime;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create;

/**
 * Variable DateTime Type using date_create() instead of DateTime::createFromFormat().
 *
 * This type has performance implications as it runs twice as long as the regular
 * {@see DateTimeType}, however in certain PostgreSQL configurations with
 * TIMESTAMP(n) columns where n > 0 it is necessary to use this type.
 */
class VarDateTimeType extends DateTimeType
{
    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTime) {
            return \$value;
        }

        \$val = date_create(\$value);
        if (! \$val) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php";
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
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use function date_create;

/**
 * Variable DateTime Type using date_create() instead of DateTime::createFromFormat().
 *
 * This type has performance implications as it runs twice as long as the regular
 * {@see DateTimeType}, however in certain PostgreSQL configurations with
 * TIMESTAMP(n) columns where n > 0 it is necessary to use this type.
 */
class VarDateTimeType extends DateTimeType
{
    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value instanceof DateTime) {
            return \$value;
        }

        \$val = date_create(\$value);
        if (! \$val) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
        }

        return \$val;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php");
    }
}
