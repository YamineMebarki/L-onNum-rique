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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php */
class __TwigTemplate_2be09958daea03cc0b2a0b5f3132ae8f1c4fb18559d5be80eb6608fbc75a66e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

/**
 * Container for all DBAL events.
 *
 * This class cannot be instantiated.
 */
final class Events
{
    /**
     * Private constructor. This class cannot be instantiated.
     */
    private function __construct()
    {
    }

    public const postConnect = 'postConnect';

    public const onSchemaCreateTable            = 'onSchemaCreateTable';
    public const onSchemaCreateTableColumn      = 'onSchemaCreateTableColumn';
    public const onSchemaDropTable              = 'onSchemaDropTable';
    public const onSchemaAlterTable             = 'onSchemaAlterTable';
    public const onSchemaAlterTableAddColumn    = 'onSchemaAlterTableAddColumn';
    public const onSchemaAlterTableRemoveColumn = 'onSchemaAlterTableRemoveColumn';
    public const onSchemaAlterTableChangeColumn = 'onSchemaAlterTableChangeColumn';
    public const onSchemaAlterTableRenameColumn = 'onSchemaAlterTableRenameColumn';
    public const onSchemaColumnDefinition       = 'onSchemaColumnDefinition';
    public const onSchemaIndexDefinition        = 'onSchemaIndexDefinition';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

/**
 * Container for all DBAL events.
 *
 * This class cannot be instantiated.
 */
final class Events
{
    /**
     * Private constructor. This class cannot be instantiated.
     */
    private function __construct()
    {
    }

    public const postConnect = 'postConnect';

    public const onSchemaCreateTable            = 'onSchemaCreateTable';
    public const onSchemaCreateTableColumn      = 'onSchemaCreateTableColumn';
    public const onSchemaDropTable              = 'onSchemaDropTable';
    public const onSchemaAlterTable             = 'onSchemaAlterTable';
    public const onSchemaAlterTableAddColumn    = 'onSchemaAlterTableAddColumn';
    public const onSchemaAlterTableRemoveColumn = 'onSchemaAlterTableRemoveColumn';
    public const onSchemaAlterTableChangeColumn = 'onSchemaAlterTableChangeColumn';
    public const onSchemaAlterTableRenameColumn = 'onSchemaAlterTableRenameColumn';
    public const onSchemaColumnDefinition       = 'onSchemaColumnDefinition';
    public const onSchemaIndexDefinition        = 'onSchemaIndexDefinition';
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php");
    }
}
