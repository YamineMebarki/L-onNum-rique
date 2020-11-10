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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php */
class __TwigTemplate_55a7e813df7b426beb2aeacaa02fbdf9cbc564ad22231151d5d5b10b29352bfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Sequence;

/**
 * The SQLAnywhere12Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 12 database platform.
 */
class SQLAnywhere12Platform extends SQLAnywhere11Platform
{
    /**
     * {@inheritdoc}
     */
    public function getCreateSequenceSQL(Sequence \$sequence)
    {
        return 'CREATE SEQUENCE ' . \$sequence->getQuotedName(\$this) .
            ' INCREMENT BY ' . \$sequence->getAllocationSize() .
            ' START WITH ' . \$sequence->getInitialValue() .
            ' MINVALUE ' . \$sequence->getInitialValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlterSequenceSQL(Sequence \$sequence)
    {
        return 'ALTER SEQUENCE ' . \$sequence->getQuotedName(\$this) .
            ' INCREMENT BY ' . \$sequence->getAllocationSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getDateTimeTzFormatString()
    {
        return 'Y-m-d H:i:s.uP';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateTimeTzTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'TIMESTAMP WITH TIME ZONE';
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSequenceSQL(\$sequence)
    {
        if (\$sequence instanceof Sequence) {
            \$sequence = \$sequence->getQuotedName(\$this);
        }

        return 'DROP SEQUENCE ' . \$sequence;
    }

    /**
     * {@inheritdoc}
     */
    public function getListSequencesSQL(\$database)
    {
        return 'SELECT sequence_name, increment_by, start_with, min_value FROM SYS.SYSSEQUENCE';
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceNextValSQL(\$sequenceName)
    {
        return 'SELECT ' . \$sequenceName . '.NEXTVAL';
    }

    /**
     * {@inheritdoc}
     */
    public function supportsSequences()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_not_distinct')) {
            return ' WITH NULLS NOT DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere12Keywords::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();
        \$this->doctrineTypeMapping['timestamp with time zone'] = 'datetime';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php";
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
use Doctrine\\DBAL\\Schema\\Sequence;

/**
 * The SQLAnywhere12Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 12 database platform.
 */
class SQLAnywhere12Platform extends SQLAnywhere11Platform
{
    /**
     * {@inheritdoc}
     */
    public function getCreateSequenceSQL(Sequence \$sequence)
    {
        return 'CREATE SEQUENCE ' . \$sequence->getQuotedName(\$this) .
            ' INCREMENT BY ' . \$sequence->getAllocationSize() .
            ' START WITH ' . \$sequence->getInitialValue() .
            ' MINVALUE ' . \$sequence->getInitialValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlterSequenceSQL(Sequence \$sequence)
    {
        return 'ALTER SEQUENCE ' . \$sequence->getQuotedName(\$this) .
            ' INCREMENT BY ' . \$sequence->getAllocationSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getDateTimeTzFormatString()
    {
        return 'Y-m-d H:i:s.uP';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateTimeTzTypeDeclarationSQL(array \$fieldDeclaration)
    {
        return 'TIMESTAMP WITH TIME ZONE';
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSequenceSQL(\$sequence)
    {
        if (\$sequence instanceof Sequence) {
            \$sequence = \$sequence->getQuotedName(\$this);
        }

        return 'DROP SEQUENCE ' . \$sequence;
    }

    /**
     * {@inheritdoc}
     */
    public function getListSequencesSQL(\$database)
    {
        return 'SELECT sequence_name, increment_by, start_with, min_value FROM SYS.SYSSEQUENCE';
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceNextValSQL(\$sequenceName)
    {
        return 'SELECT ' . \$sequenceName . '.NEXTVAL';
    }

    /**
     * {@inheritdoc}
     */
    public function supportsSequences()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_not_distinct')) {
            return ' WITH NULLS NOT DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere12Keywords::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();
        \$this->doctrineTypeMapping['timestamp with time zone'] = 'datetime';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php");
    }
}
