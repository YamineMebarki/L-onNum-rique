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

/* vendor/doctrine/migrations/UPGRADE.md */
class __TwigTemplate_4418216a1760429d6f140c17ca59b6a08abaa9da1bcd86e80d61870369edfe67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/UPGRADE.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/UPGRADE.md"));

        // line 1
        echo "# Upgrade to 2.0

## BC Break: Moved `Doctrine\\DBAL\\Migrations` to `Doctrine\\Migrations`

Your migration classes that previously used to extend `Doctrine\\DBAL\\Migrations\\AbstractMigration` now need to extend
`Doctrine\\Migrations\\AbstractMigration` instead. The `Doctrine\\DBAL\\Migrations\\AbstractMigration` class will be
deprecated in the `1.8.0` release to prepare for the BC break.

## BC Break: Removed `Doctrine\\DBAL\\Migrations\\MigrationsVersion`

The `Doctrine\\DBAL\\Migrations\\MigrationsVersion` class is no longer available: please refrain from checking the Migrations version at runtime.

## BC Break: Moved `Doctrine\\Migrations\\Migration` to `Doctrine\\Migrations\\Migrator`

To make the name more clear and to differentiate from the `AbstractMigration` class, `Migration` was renamed to `Migrator`.

## BC Break: Moved exception classes from `Doctrine\\Migrations\\%name%Exception` to `Doctrine\\Migrations\\Exception\\%name%`
doctrine/migrations#636
Follows concept introduced in ORM (doctrine/orm#6743 + doctrine/orm#7210) and naming follows pattern accepted in Doctrine CS.

# Upgrade from 1.0-alpha1 to 1.0.0-alpha3

## AbstractMigration

### Before:

The method `getName()` was defined and it's implementation would change the order in which the migration would be processed.
It would cause discrepancies between the file order in a file browser and the order of execution of the migrations.

### After:

The `getName()` method as been removed | set final and new `getDescription()` method has been added.
The goal of this method is to be able to provide context for the migration.
This context is shown for the last migrated migration when the status command is called.

## --write-sql option from the migrate command

### Before:

The `--write-sql` option would only output sql contained in the migration and would not update the table containing the migrated migrations.

### After:

That option now also output the sql queries necessary to update the table containing the state of the migrations.
If you want to go back to the previous behavior just make a request on the bug tracker as for now the need for it is not very clear.

## MigrationsVersion::VERSION

### Before:

`MigrationsVersion::VERSION` used to be a property.
The returned value was fanciful.

### After:

It is now a a function so that a different value can be automatically send back if it's a modified version that's used.
The returned value is now the git tag.
The tag is in lowercase as the other doctrine projects.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/UPGRADE.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Upgrade to 2.0

## BC Break: Moved `Doctrine\\DBAL\\Migrations` to `Doctrine\\Migrations`

Your migration classes that previously used to extend `Doctrine\\DBAL\\Migrations\\AbstractMigration` now need to extend
`Doctrine\\Migrations\\AbstractMigration` instead. The `Doctrine\\DBAL\\Migrations\\AbstractMigration` class will be
deprecated in the `1.8.0` release to prepare for the BC break.

## BC Break: Removed `Doctrine\\DBAL\\Migrations\\MigrationsVersion`

The `Doctrine\\DBAL\\Migrations\\MigrationsVersion` class is no longer available: please refrain from checking the Migrations version at runtime.

## BC Break: Moved `Doctrine\\Migrations\\Migration` to `Doctrine\\Migrations\\Migrator`

To make the name more clear and to differentiate from the `AbstractMigration` class, `Migration` was renamed to `Migrator`.

## BC Break: Moved exception classes from `Doctrine\\Migrations\\%name%Exception` to `Doctrine\\Migrations\\Exception\\%name%`
doctrine/migrations#636
Follows concept introduced in ORM (doctrine/orm#6743 + doctrine/orm#7210) and naming follows pattern accepted in Doctrine CS.

# Upgrade from 1.0-alpha1 to 1.0.0-alpha3

## AbstractMigration

### Before:

The method `getName()` was defined and it's implementation would change the order in which the migration would be processed.
It would cause discrepancies between the file order in a file browser and the order of execution of the migrations.

### After:

The `getName()` method as been removed | set final and new `getDescription()` method has been added.
The goal of this method is to be able to provide context for the migration.
This context is shown for the last migrated migration when the status command is called.

## --write-sql option from the migrate command

### Before:

The `--write-sql` option would only output sql contained in the migration and would not update the table containing the migrated migrations.

### After:

That option now also output the sql queries necessary to update the table containing the state of the migrations.
If you want to go back to the previous behavior just make a request on the bug tracker as for now the need for it is not very clear.

## MigrationsVersion::VERSION

### Before:

`MigrationsVersion::VERSION` used to be a property.
The returned value was fanciful.

### After:

It is now a a function so that a different value can be automatically send back if it's a modified version that's used.
The returned value is now the git tag.
The tag is in lowercase as the other doctrine projects.
", "vendor/doctrine/migrations/UPGRADE.md", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/UPGRADE.md");
    }
}
