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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php */
class __TwigTemplate_16cecb628425d14d83330ad42273560bed8602834fc43c71bd1f57281b2e94b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use function explode;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.1 database platform.
 */
class PostgreSQL91Platform extends PostgreSqlPlatform
{
    /**
     * {@inheritDoc}
     */
    public function supportsColumnCollation()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\PostgreSQL91Keywords::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getColumnCollationDeclarationSQL(\$collation)
    {
        return 'COLLATE ' . \$this->quoteSingleIdentifier(\$collation);
    }

    /**
     * {@inheritDoc}
     */
    public function getListTableColumnsSQL(\$table, \$database = null)
    {
        \$sql   = parent::getListTableColumnsSQL(\$table, \$database);
        \$parts = explode('AS complete_type,', \$sql, 2);

        return \$parts[0] . 'AS complete_type, (SELECT tc.collcollate FROM pg_catalog.pg_collation tc WHERE tc.oid = a.attcollation) AS collation,' . \$parts[1];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use function explode;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.1 database platform.
 */
class PostgreSQL91Platform extends PostgreSqlPlatform
{
    /**
     * {@inheritDoc}
     */
    public function supportsColumnCollation()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\PostgreSQL91Keywords::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getColumnCollationDeclarationSQL(\$collation)
    {
        return 'COLLATE ' . \$this->quoteSingleIdentifier(\$collation);
    }

    /**
     * {@inheritDoc}
     */
    public function getListTableColumnsSQL(\$table, \$database = null)
    {
        \$sql   = parent::getListTableColumnsSQL(\$table, \$database);
        \$parts = explode('AS complete_type,', \$sql, 2);

        return \$parts[0] . 'AS complete_type, (SELECT tc.collcollate FROM pg_catalog.pg_collation tc WHERE tc.oid = a.attcollation) AS collation,' . \$parts[1];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php");
    }
}
