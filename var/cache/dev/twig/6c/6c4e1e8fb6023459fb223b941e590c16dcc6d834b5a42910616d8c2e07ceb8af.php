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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php */
class __TwigTemplate_501ccca04a49b0a929756164ca801cc964a2fe1ef0b45af139bb9eefc5158d85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Platforms\\Keywords\\PostgreSQL100Keywords;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 10.0 database platform.
 */
class PostgreSQL100Platform extends PostgreSQL94Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return PostgreSQL100Keywords::class;
    }

    public function getListSequencesSQL(\$database) : string
    {
        return 'SELECT sequence_name AS relname,
                       sequence_schema AS schemaname,
                       minimum_value AS min_value, 
                       increment AS increment_by
                FROM   information_schema.sequences
                WHERE  sequence_catalog = ' . \$this->quoteStringLiteral(\$database) . \"
                AND    sequence_schema NOT LIKE 'pg\\_%'
                AND    sequence_schema != 'information_schema'\";
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Platforms\\Keywords\\PostgreSQL100Keywords;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 10.0 database platform.
 */
class PostgreSQL100Platform extends PostgreSQL94Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return PostgreSQL100Keywords::class;
    }

    public function getListSequencesSQL(\$database) : string
    {
        return 'SELECT sequence_name AS relname,
                       sequence_schema AS schemaname,
                       minimum_value AS min_value, 
                       increment AS increment_by
                FROM   information_schema.sequences
                WHERE  sequence_catalog = ' . \$this->quoteStringLiteral(\$database) . \"
                AND    sequence_schema NOT LIKE 'pg\\_%'
                AND    sequence_schema != 'information_schema'\";
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php");
    }
}
