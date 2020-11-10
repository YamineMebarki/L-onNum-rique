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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php */
class __TwigTemplate_14ac8ca59390691f7bc3d4b5914e070522592718ea72456efe7958909d98d463 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Migrations\\Version\\Direction;
use Doctrine\\Migrations\\Version\\Version;
use function array_filter;
use function array_reverse;
use function count;
use function in_array;

/**
 * The MigrationPlanCalculator is responsible for calculating the plan for migrating from the current
 * version to another version.
 *
 * @internal
 */
final class MigrationPlanCalculator
{
    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(MigrationRepository \$migrationRepository)
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    /** @return Version[] */
    public function getMigrationsToExecute(string \$direction, string \$to) : array
    {
        \$allVersions = \$this->migrationRepository->getMigrations();

        if (\$direction === Direction::DOWN && count(\$allVersions) !== 0) {
            \$allVersions = array_reverse(\$allVersions);
        }

        \$migrated = \$this->migrationRepository->getMigratedVersions();

        return array_filter(\$allVersions, function (Version \$version) use (
            \$migrated,
            \$direction,
            \$to
        ) {
            return \$this->shouldExecuteMigration(\$direction, \$version, \$to, \$migrated);
        });
    }

    /** @param string[] \$migrated */
    private function shouldExecuteMigration(
        string \$direction,
        Version \$version,
        string \$to,
        array \$migrated
    ) : bool {
        \$to = (int) \$to;

        if (\$direction === Direction::DOWN) {
            if (! in_array(\$version->getVersion(), \$migrated, true)) {
                return false;
            }

            return (int) \$version->getVersion() > \$to;
        }

        if (\$direction === Direction::UP) {
            if (in_array(\$version->getVersion(), \$migrated, true)) {
                return false;
            }

            return (int) \$version->getVersion() <= \$to;
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Migrations\\Version\\Direction;
use Doctrine\\Migrations\\Version\\Version;
use function array_filter;
use function array_reverse;
use function count;
use function in_array;

/**
 * The MigrationPlanCalculator is responsible for calculating the plan for migrating from the current
 * version to another version.
 *
 * @internal
 */
final class MigrationPlanCalculator
{
    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(MigrationRepository \$migrationRepository)
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    /** @return Version[] */
    public function getMigrationsToExecute(string \$direction, string \$to) : array
    {
        \$allVersions = \$this->migrationRepository->getMigrations();

        if (\$direction === Direction::DOWN && count(\$allVersions) !== 0) {
            \$allVersions = array_reverse(\$allVersions);
        }

        \$migrated = \$this->migrationRepository->getMigratedVersions();

        return array_filter(\$allVersions, function (Version \$version) use (
            \$migrated,
            \$direction,
            \$to
        ) {
            return \$this->shouldExecuteMigration(\$direction, \$version, \$to, \$migrated);
        });
    }

    /** @param string[] \$migrated */
    private function shouldExecuteMigration(
        string \$direction,
        Version \$version,
        string \$to,
        array \$migrated
    ) : bool {
        \$to = (int) \$to;

        if (\$direction === Direction::DOWN) {
            if (! in_array(\$version->getVersion(), \$migrated, true)) {
                return false;
            }

            return (int) \$version->getVersion() > \$to;
        }

        if (\$direction === Direction::UP) {
            if (in_array(\$version->getVersion(), \$migrated, true)) {
                return false;
            }

            return (int) \$version->getVersion() <= \$to;
        }

        return false;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationPlanCalculator.php");
    }
}
