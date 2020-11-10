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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php */
class __TwigTemplate_ab69a7ce64b04e7deba36808baf04acb3c4347da613a6cf2c06ebf1886435023 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Provider\\Exception\\NoMappingFound;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Tools\\SchemaTool;
use function count;

/**
 * The OrmSchemaProvider class is responsible for creating a Doctrine\\DBAL\\Schema\\Schema instance from the mapping
 * information provided by the Doctrine ORM. This is then used to diff against your current database schema to produce
 * a migration to bring your database in sync with the ORM mapping information.
 *
 * @internal
 */
final class OrmSchemaProvider implements SchemaProviderInterface
{
    /** @var EntityManagerInterface */
    private \$entityManager;

    public function __construct(EntityManagerInterface \$em)
    {
        \$this->entityManager = \$em;
    }

    /**
     * @throws NoMappingFound
     */
    public function createSchema() : Schema
    {
        \$metadata = \$this->entityManager->getMetadataFactory()->getAllMetadata();

        if (count(\$metadata) === 0) {
            throw NoMappingFound::new();
        }

        \$tool = new SchemaTool(\$this->entityManager);

        return \$tool->getSchemaFromMetadata(\$metadata);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Provider\\Exception\\NoMappingFound;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Tools\\SchemaTool;
use function count;

/**
 * The OrmSchemaProvider class is responsible for creating a Doctrine\\DBAL\\Schema\\Schema instance from the mapping
 * information provided by the Doctrine ORM. This is then used to diff against your current database schema to produce
 * a migration to bring your database in sync with the ORM mapping information.
 *
 * @internal
 */
final class OrmSchemaProvider implements SchemaProviderInterface
{
    /** @var EntityManagerInterface */
    private \$entityManager;

    public function __construct(EntityManagerInterface \$em)
    {
        \$this->entityManager = \$em;
    }

    /**
     * @throws NoMappingFound
     */
    public function createSchema() : Schema
    {
        \$metadata = \$this->entityManager->getMetadataFactory()->getAllMetadata();

        if (count(\$metadata) === 0) {
            throw NoMappingFound::new();
        }

        \$tool = new SchemaTool(\$this->entityManager);

        return \$tool->getSchemaFromMetadata(\$metadata);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/OrmSchemaProvider.php");
    }
}
