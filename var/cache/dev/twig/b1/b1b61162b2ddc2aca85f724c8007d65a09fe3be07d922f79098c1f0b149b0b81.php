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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php */
class __TwigTemplate_adb3c9f422cf443fd1fbd52c37642a6d90ea5f1bbfc391c4c15c1c62df7e292f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Table;
use InvalidArgumentException;
use function is_string;

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private \$table;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string|null */
    private \$sql = null;

    /**
     * @param string|Table \$table
     *
     * @throws InvalidArgumentException
     */
    public function __construct(\$table, AbstractPlatform \$platform)
    {
        if (! \$table instanceof Table && ! is_string(\$table)) {
            throw new InvalidArgumentException('SchemaDropTableEventArgs expects \$table parameter to be string or \\Doctrine\\DBAL\\Schema\\Table.');
        }

        \$this->table    = \$table;
        \$this->platform = \$platform;
    }

    /**
     * @return string|Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaDropTableEventArgs
     */
    public function setSql(\$sql)
    {
        \$this->sql = \$sql;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Table;
use InvalidArgumentException;
use function is_string;

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private \$table;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string|null */
    private \$sql = null;

    /**
     * @param string|Table \$table
     *
     * @throws InvalidArgumentException
     */
    public function __construct(\$table, AbstractPlatform \$platform)
    {
        if (! \$table instanceof Table && ! is_string(\$table)) {
            throw new InvalidArgumentException('SchemaDropTableEventArgs expects \$table parameter to be string or \\Doctrine\\DBAL\\Schema\\Table.');
        }

        \$this->table    = \$table;
        \$this->platform = \$platform;
    }

    /**
     * @return string|Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaDropTableEventArgs
     */
    public function setSql(\$sql)
    {
        \$this->sql = \$sql;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php");
    }
}
