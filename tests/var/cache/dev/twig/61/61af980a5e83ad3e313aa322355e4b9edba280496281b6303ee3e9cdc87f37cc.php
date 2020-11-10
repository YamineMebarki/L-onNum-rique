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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php */
class __TwigTemplate_a05c4ccbf8e3ceb4dc55f73fc0feead5e01cdfa64abd4e3969454e0b7d2fd217 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use const JSON_ERROR_NONE;
use function is_resource;
use function json_decode;
use function json_encode;
use function json_last_error;
use function json_last_error_msg;
use function stream_get_contents;

/**
 * Type generating json objects values
 */
class JsonType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getJsonTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        \$encoded = json_encode(\$value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw ConversionException::conversionFailedSerialization(\$value, 'json', json_last_error_msg());
        }

        return \$encoded;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value === '') {
            return null;
        }

        if (is_resource(\$value)) {
            \$value = stream_get_contents(\$value);
        }

        \$val = json_decode(\$value, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
        }

        return \$val;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::JSON;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return ! \$platform->hasNativeJsonType();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use const JSON_ERROR_NONE;
use function is_resource;
use function json_decode;
use function json_encode;
use function json_last_error;
use function json_last_error_msg;
use function stream_get_contents;

/**
 * Type generating json objects values
 */
class JsonType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getJsonTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null) {
            return null;
        }

        \$encoded = json_encode(\$value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw ConversionException::conversionFailedSerialization(\$value, 'json', json_last_error_msg());
        }

        return \$encoded;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (\$value === null || \$value === '') {
            return null;
        }

        if (is_resource(\$value)) {
            \$value = stream_get_contents(\$value);
        }

        \$val = json_decode(\$value, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw ConversionException::conversionFailed(\$value, \$this->getName());
        }

        return \$val;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::JSON;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return ! \$platform->hasNativeJsonType();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php");
    }
}
