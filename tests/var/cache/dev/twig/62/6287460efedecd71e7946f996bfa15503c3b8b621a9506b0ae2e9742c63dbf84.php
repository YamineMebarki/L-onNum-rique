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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php */
class __TwigTemplate_877e7e60ee450f2bad2f1a39d447a986308629f82f7268f043c7e284ad3836e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use UnexpectedValueException;

/**
 * The SQLAnywhere16Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 16 database platform.
 */
class SQLAnywhere16Platform extends SQLAnywhere12Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (\$index->hasFlag('with_nulls_distinct') && \$index->hasFlag('with_nulls_not_distinct')) {
            throw new UnexpectedValueException(
                'An Index can either have a \"with_nulls_distinct\" or \"with_nulls_not_distinct\" flag but not both.'
            );
        }

        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_distinct')) {
            return ' WITH NULLS DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere16Keywords::class;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php";
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
use UnexpectedValueException;

/**
 * The SQLAnywhere16Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 16 database platform.
 */
class SQLAnywhere16Platform extends SQLAnywhere12Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (\$index->hasFlag('with_nulls_distinct') && \$index->hasFlag('with_nulls_not_distinct')) {
            throw new UnexpectedValueException(
                'An Index can either have a \"with_nulls_distinct\" or \"with_nulls_not_distinct\" flag but not both.'
            );
        }

        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_distinct')) {
            return ' WITH NULLS DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere16Keywords::class;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php");
    }
}
