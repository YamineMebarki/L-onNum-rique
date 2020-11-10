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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php */
class __TwigTemplate_12e2a96c4f13630a0f374435eb89be753b9c48adec8486ae328077a496060a5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

/**
 * Configuration for a Schema.
 */
class SchemaConfig
{
    /** @var bool */
    protected \$hasExplicitForeignKeyIndexes = false;

    /** @var int */
    protected \$maxIdentifierLength = 63;

    /** @var string */
    protected \$name;

    /** @var mixed[] */
    protected \$defaultTableOptions = [];

    /**
     * @return bool
     */
    public function hasExplicitForeignKeyIndexes()
    {
        return \$this->hasExplicitForeignKeyIndexes;
    }

    /**
     * @param bool \$flag
     *
     * @return void
     */
    public function setExplicitForeignKeyIndexes(\$flag)
    {
        \$this->hasExplicitForeignKeyIndexes = (bool) \$flag;
    }

    /**
     * @param int \$length
     *
     * @return void
     */
    public function setMaxIdentifierLength(\$length)
    {
        \$this->maxIdentifierLength = (int) \$length;
    }

    /**
     * @return int
     */
    public function getMaxIdentifierLength()
    {
        return \$this->maxIdentifierLength;
    }

    /**
     * Gets the default namespace of schema objects.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets the default namespace name of schema objects.
     *
     * @param string \$name The value to set.
     *
     * @return void
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * Gets the default options that are passed to Table instances created with
     * Schema#createTable().
     *
     * @return mixed[]
     */
    public function getDefaultTableOptions()
    {
        return \$this->defaultTableOptions;
    }

    /**
     * @param mixed[] \$defaultTableOptions
     *
     * @return void
     */
    public function setDefaultTableOptions(array \$defaultTableOptions)
    {
        \$this->defaultTableOptions = \$defaultTableOptions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

/**
 * Configuration for a Schema.
 */
class SchemaConfig
{
    /** @var bool */
    protected \$hasExplicitForeignKeyIndexes = false;

    /** @var int */
    protected \$maxIdentifierLength = 63;

    /** @var string */
    protected \$name;

    /** @var mixed[] */
    protected \$defaultTableOptions = [];

    /**
     * @return bool
     */
    public function hasExplicitForeignKeyIndexes()
    {
        return \$this->hasExplicitForeignKeyIndexes;
    }

    /**
     * @param bool \$flag
     *
     * @return void
     */
    public function setExplicitForeignKeyIndexes(\$flag)
    {
        \$this->hasExplicitForeignKeyIndexes = (bool) \$flag;
    }

    /**
     * @param int \$length
     *
     * @return void
     */
    public function setMaxIdentifierLength(\$length)
    {
        \$this->maxIdentifierLength = (int) \$length;
    }

    /**
     * @return int
     */
    public function getMaxIdentifierLength()
    {
        return \$this->maxIdentifierLength;
    }

    /**
     * Gets the default namespace of schema objects.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets the default namespace name of schema objects.
     *
     * @param string \$name The value to set.
     *
     * @return void
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * Gets the default options that are passed to Table instances created with
     * Schema#createTable().
     *
     * @return mixed[]
     */
    public function getDefaultTableOptions()
    {
        return \$this->defaultTableOptions;
    }

    /**
     * @param mixed[] \$defaultTableOptions
     *
     * @return void
     */
    public function setDefaultTableOptions(array \$defaultTableOptions)
    {
        \$this->defaultTableOptions = \$defaultTableOptions;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php");
    }
}
