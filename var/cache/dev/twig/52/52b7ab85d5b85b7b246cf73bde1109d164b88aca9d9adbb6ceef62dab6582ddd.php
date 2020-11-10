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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php */
class __TwigTemplate_9b084e56c90d396fe389a6a3c3dbe0004b8b6cef459f5140f28e5f92ce1917c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2008 version.
 *
 * Differences to SQL Server 2005 and before are that a new DATETIME2 type was
 * introduced that has a higher precision.
 */
class SQLServer2008Platform extends SQLServer2005Platform
{
    /**
     * {@inheritDoc}
     */
    public function getListTablesSQL()
    {
        // \"sysdiagrams\" table must be ignored as it's internal SQL Server table for Database Diagrams
        // Category 2 must be ignored as it is \"MS SQL Server 'pseudo-system' object[s]\" for replication
        return \"SELECT name, SCHEMA_NAME (uid) AS schema_name FROM sysobjects WHERE type = 'U' AND name != 'sysdiagrams' AND category != 2 ORDER BY name\";
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTypeDeclarationSQL(array \$fieldDeclaration)
    {
        // 3 - microseconds precision length
        // http://msdn.microsoft.com/en-us/library/ms187819.aspx
        return 'DATETIME2(6)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'DATE';
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'TIME(0)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'DATETIMEOFFSET(6)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeFormatString()
    {
        return 'Y-m-d H:i:s.u';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzFormatString()
    {
        return 'Y-m-d H:i:s.u P';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatString()
    {
        return 'Y-m-d';
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeFormatString()
    {
        return 'H:i:s';
    }

    /**
     * {@inheritDoc}
     *
     * Adding Datetime2 Type
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();
        \$this->doctrineTypeMapping['datetime2']      = 'datetime';
        \$this->doctrineTypeMapping['date']           = 'date';
        \$this->doctrineTypeMapping['time']           = 'time';
        \$this->doctrineTypeMapping['datetimeoffset'] = 'datetimetz';
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2008 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2008Keywords::class;
    }

    protected function getLikeWildcardCharacters() : string
    {
        return parent::getLikeWildcardCharacters() . '[]^';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2008 version.
 *
 * Differences to SQL Server 2005 and before are that a new DATETIME2 type was
 * introduced that has a higher precision.
 */
class SQLServer2008Platform extends SQLServer2005Platform
{
    /**
     * {@inheritDoc}
     */
    public function getListTablesSQL()
    {
        // \"sysdiagrams\" table must be ignored as it's internal SQL Server table for Database Diagrams
        // Category 2 must be ignored as it is \"MS SQL Server 'pseudo-system' object[s]\" for replication
        return \"SELECT name, SCHEMA_NAME (uid) AS schema_name FROM sysobjects WHERE type = 'U' AND name != 'sysdiagrams' AND category != 2 ORDER BY name\";
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTypeDeclarationSQL(array \$fieldDeclaration)
    {
        // 3 - microseconds precision length
        // http://msdn.microsoft.com/en-us/library/ms187819.aspx
        return 'DATETIME2(6)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'DATE';
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'TIME(0)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'DATETIMEOFFSET(6)';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeFormatString()
    {
        return 'Y-m-d H:i:s.u';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzFormatString()
    {
        return 'Y-m-d H:i:s.u P';
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatString()
    {
        return 'Y-m-d';
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeFormatString()
    {
        return 'H:i:s';
    }

    /**
     * {@inheritDoc}
     *
     * Adding Datetime2 Type
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();
        \$this->doctrineTypeMapping['datetime2']      = 'datetime';
        \$this->doctrineTypeMapping['date']           = 'date';
        \$this->doctrineTypeMapping['time']           = 'time';
        \$this->doctrineTypeMapping['datetimeoffset'] = 'datetimetz';
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2008 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2008Keywords::class;
    }

    protected function getLikeWildcardCharacters() : string
    {
        return parent::getLikeWildcardCharacters() . '[]^';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php");
    }
}
