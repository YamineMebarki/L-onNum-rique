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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php */
class __TwigTemplate_c7cebd396d80aa027d3cab466869f6b23eabe9e3c6c714172f09e1fa3396c2eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\Migrations\\Configuration\\Configuration;
use SqlFormatter;
use function array_unshift;
use function count;
use function implode;
use function sprintf;
use function stripos;
use function strlen;
use function var_export;

/**
 * The SqlGenerator class is responsible for generating the body of the up() and down() methods for a migration
 * from an array of SQL queries.
 *
 * @internal
 */
class SqlGenerator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(Configuration \$configuration, AbstractPlatform \$platform)
    {
        \$this->configuration = \$configuration;
        \$this->platform      = \$platform;
    }

    /** @param string[] \$sql */
    public function generate(
        array \$sql,
        bool \$formatted = false,
        int \$lineLength = 120,
        bool \$checkDbPlatform = true
    ) : string {
        \$code = [];

        foreach (\$sql as \$query) {
            if (stripos(\$query, \$this->configuration->getMigrationsTableName()) !== false) {
                continue;
            }

            if (\$formatted) {
                \$maxLength = \$lineLength - 18 - 8; // max - php code length - indentation

                if (strlen(\$query) > \$maxLength) {
                    \$query = SqlFormatter::format(\$query, false);
                }
            }

            \$code[] = sprintf('\$this->addSql(%s);', var_export(\$query, true));
        }

        if (count(\$code) !== 0 && \$checkDbPlatform && \$this->configuration->isDatabasePlatformChecked()) {
            \$currentPlatform = \$this->platform->getName();

            array_unshift(
                \$code,
                sprintf(
                    '\$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== %s, %s);',
                    var_export(\$currentPlatform, true),
                    var_export(sprintf(\"Migration can only be executed safely on '%s'.\", \$currentPlatform), true)
                ),
                ''
            );
        }

        return implode(\"\\n\", \$code);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\Migrations\\Configuration\\Configuration;
use SqlFormatter;
use function array_unshift;
use function count;
use function implode;
use function sprintf;
use function stripos;
use function strlen;
use function var_export;

/**
 * The SqlGenerator class is responsible for generating the body of the up() and down() methods for a migration
 * from an array of SQL queries.
 *
 * @internal
 */
class SqlGenerator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(Configuration \$configuration, AbstractPlatform \$platform)
    {
        \$this->configuration = \$configuration;
        \$this->platform      = \$platform;
    }

    /** @param string[] \$sql */
    public function generate(
        array \$sql,
        bool \$formatted = false,
        int \$lineLength = 120,
        bool \$checkDbPlatform = true
    ) : string {
        \$code = [];

        foreach (\$sql as \$query) {
            if (stripos(\$query, \$this->configuration->getMigrationsTableName()) !== false) {
                continue;
            }

            if (\$formatted) {
                \$maxLength = \$lineLength - 18 - 8; // max - php code length - indentation

                if (strlen(\$query) > \$maxLength) {
                    \$query = SqlFormatter::format(\$query, false);
                }
            }

            \$code[] = sprintf('\$this->addSql(%s);', var_export(\$query, true));
        }

        if (count(\$code) !== 0 && \$checkDbPlatform && \$this->configuration->isDatabasePlatformChecked()) {
            \$currentPlatform = \$this->platform->getName();

            array_unshift(
                \$code,
                sprintf(
                    '\$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== %s, %s);',
                    var_export(\$currentPlatform, true),
                    var_export(sprintf(\"Migration can only be executed safely on '%s'.\", \$currentPlatform), true)
                ),
                ''
            );
        }

        return implode(\"\\n\", \$code);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/SqlGenerator.php");
    }
}
