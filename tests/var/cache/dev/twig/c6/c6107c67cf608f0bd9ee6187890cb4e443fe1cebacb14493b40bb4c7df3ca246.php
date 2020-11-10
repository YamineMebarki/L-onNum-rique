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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php */
class __TwigTemplate_5f704f75ac51049457f3ca38457619213652dd9209c7fda4dd138242f9e81854 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ArrayConnectionConfigurationLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationChainLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionHelperLoader;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\ConnectionNotSpecified;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * The ConnectionLoader class is responsible for loading the Doctrine\\DBAL\\Connection instance to use for migrations.
 *
 * @internal
 */
class ConnectionLoader
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    public function getConnection(InputInterface \$input, HelperSet \$helperSet) : Connection
    {
        \$connection = \$this->createConnectionConfigurationChainLoader(\$input, \$helperSet)
            ->chosen();

        if (\$connection !== null) {
            return \$connection;
        }

        throw ConnectionNotSpecified::new();
    }

    protected function createConnectionConfigurationChainLoader(
        InputInterface \$input,
        HelperSet \$helperSet
    ) : ConnectionLoaderInterface {
        return new ConnectionConfigurationChainLoader([
            new ArrayConnectionConfigurationLoader(\$input->getOption('db-configuration')),
            new ArrayConnectionConfigurationLoader('migrations-db.php'),
            new ConnectionHelperLoader(\$helperSet, 'connection'),
            new ConnectionConfigurationLoader(\$this->configuration),
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ArrayConnectionConfigurationLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationChainLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationLoader;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionHelperLoader;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\ConnectionNotSpecified;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * The ConnectionLoader class is responsible for loading the Doctrine\\DBAL\\Connection instance to use for migrations.
 *
 * @internal
 */
class ConnectionLoader
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    public function getConnection(InputInterface \$input, HelperSet \$helperSet) : Connection
    {
        \$connection = \$this->createConnectionConfigurationChainLoader(\$input, \$helperSet)
            ->chosen();

        if (\$connection !== null) {
            return \$connection;
        }

        throw ConnectionNotSpecified::new();
    }

    protected function createConnectionConfigurationChainLoader(
        InputInterface \$input,
        HelperSet \$helperSet
    ) : ConnectionLoaderInterface {
        return new ConnectionConfigurationChainLoader([
            new ArrayConnectionConfigurationLoader(\$input->getOption('db-configuration')),
            new ArrayConnectionConfigurationLoader('migrations-db.php'),
            new ConnectionHelperLoader(\$helperSet, 'connection'),
            new ConnectionConfigurationLoader(\$this->configuration),
        ]);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConnectionLoader.php");
    }
}
