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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php */
class __TwigTemplate_7eeb3b83b1a9aa274192b76ed073edc56eed66cc60002e4be07e6ae862adb3d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\TableDiff;
use Doctrine\\DBAL\\Types\\Type;

/**
 * Provides the behavior, features and SQL dialect of the MySQL 5.7 (5.7.9 GA) database platform.
 */
class MySQL57Platform extends MySqlPlatform
{
    /**
     * {@inheritdoc}
     */
    public function hasNativeJsonType()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getJsonTypeDeclarationSQL(array \$field)
    {
        return 'JSON';
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAlterTableRenameIndexForeignKeySQL(TableDiff \$diff)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getPostAlterTableRenameIndexForeignKeySQL(TableDiff \$diff)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getRenameIndexSQL(\$oldIndexName, Index \$index, \$tableName)
    {
        return ['ALTER TABLE ' . \$tableName . ' RENAME INDEX ' . \$oldIndexName . ' TO ' . \$index->getQuotedName(\$this)];
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\MySQL57Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        \$this->doctrineTypeMapping['json'] = Type::JSON;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\TableDiff;
use Doctrine\\DBAL\\Types\\Type;

/**
 * Provides the behavior, features and SQL dialect of the MySQL 5.7 (5.7.9 GA) database platform.
 */
class MySQL57Platform extends MySqlPlatform
{
    /**
     * {@inheritdoc}
     */
    public function hasNativeJsonType()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getJsonTypeDeclarationSQL(array \$field)
    {
        return 'JSON';
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAlterTableRenameIndexForeignKeySQL(TableDiff \$diff)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getPostAlterTableRenameIndexForeignKeySQL(TableDiff \$diff)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getRenameIndexSQL(\$oldIndexName, Index \$index, \$tableName)
    {
        return ['ALTER TABLE ' . \$tableName . ' RENAME INDEX ' . \$oldIndexName . ' TO ' . \$index->getQuotedName(\$this)];
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\MySQL57Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        \$this->doctrineTypeMapping['json'] = Type::JSON;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php");
    }
}
