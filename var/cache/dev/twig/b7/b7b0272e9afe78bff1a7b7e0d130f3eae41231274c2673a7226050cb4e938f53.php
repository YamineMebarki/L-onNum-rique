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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php */
class __TwigTemplate_d15125d4996b0828c77348900105bdd7041f5fe5637c010c013f0958635d86c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The StubSchemaProvider takes a Doctrine\\DBAL\\Schema\\Schema instance through the constructor and returns it
 * from the createSchema() method.
 */
final class StubSchemaProvider implements SchemaProviderInterface
{
    /** @var Schema */
    private \$toSchema;

    public function __construct(Schema \$schema)
    {
        \$this->toSchema = \$schema;
    }

    public function createSchema() : Schema
    {
        return \$this->toSchema;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php";
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

/**
 * The StubSchemaProvider takes a Doctrine\\DBAL\\Schema\\Schema instance through the constructor and returns it
 * from the createSchema() method.
 */
final class StubSchemaProvider implements SchemaProviderInterface
{
    /** @var Schema */
    private \$toSchema;

    public function __construct(Schema \$schema)
    {
        \$this->toSchema = \$schema;
    }

    public function createSchema() : Schema
    {
        return \$this->toSchema;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/StubSchemaProvider.php");
    }
}
