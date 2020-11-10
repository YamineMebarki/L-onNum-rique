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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php */
class __TwigTemplate_e2494f568613fd8cc96fe2d2df95fa4c6743c6b1a718a30383c5ab18a775b094 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Type that maps a database SMALLINT to a PHP integer.
 */
class SmallIntType extends Type implements PhpIntegerMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::SMALLINT;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getSmallIntTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value === null ? null : (int) \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::INTEGER;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\ParameterType;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Type that maps a database SMALLINT to a PHP integer.
 */
class SmallIntType extends Type implements PhpIntegerMappingType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return Type::SMALLINT;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getSmallIntTypeDeclarationSQL(\$fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value === null ? null : (int) \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getBindingType()
    {
        return ParameterType::INTEGER;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php");
    }
}
