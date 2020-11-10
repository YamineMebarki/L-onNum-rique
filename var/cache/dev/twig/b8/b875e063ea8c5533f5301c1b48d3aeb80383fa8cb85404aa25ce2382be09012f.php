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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php */
class __TwigTemplate_ea00987ad625573ffc767636cdf2565de3c9cbbb51bfea73339612ff017fb864 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Types\\Type;
use function sprintf;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.2 database platform.
 */
class PostgreSQL92Platform extends PostgreSQL91Platform
{
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
    public function getSmallIntTypeDeclarationSQL(array \$field)
    {
        if (! empty(\$field['autoincrement'])) {
            return 'SMALLSERIAL';
        }

        return parent::getSmallIntTypeDeclarationSQL(\$field);
    }

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
    protected function getReservedKeywordsClass()
    {
        return Keywords\\PostgreSQL92Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        \$this->doctrineTypeMapping['json'] = Type::JSON;
    }

    /**
     * {@inheritdoc}
     */
    public function getCloseActiveDatabaseConnectionsSQL(\$database)
    {
        return sprintf(
            'SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = %s',
            \$this->quoteStringLiteral(\$database)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Types\\Type;
use function sprintf;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 9.2 database platform.
 */
class PostgreSQL92Platform extends PostgreSQL91Platform
{
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
    public function getSmallIntTypeDeclarationSQL(array \$field)
    {
        if (! empty(\$field['autoincrement'])) {
            return 'SMALLSERIAL';
        }

        return parent::getSmallIntTypeDeclarationSQL(\$field);
    }

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
    protected function getReservedKeywordsClass()
    {
        return Keywords\\PostgreSQL92Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        \$this->doctrineTypeMapping['json'] = Type::JSON;
    }

    /**
     * {@inheritdoc}
     */
    public function getCloseActiveDatabaseConnectionsSQL(\$database)
    {
        return sprintf(
            'SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = %s',
            \$this->quoteStringLiteral(\$database)
        );
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php");
    }
}
