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

/* vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml */
class __TwigTemplate_d53ab62b0769fb5e21685cd49428fece46a6e699deb40d57ba77daf88cf511bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml");
    }
}
