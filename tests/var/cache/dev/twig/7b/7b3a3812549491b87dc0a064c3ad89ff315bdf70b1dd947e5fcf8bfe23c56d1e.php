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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php */
class __TwigTemplate_b7e1a53aa196402cca991feb58cf73880dae763d696e40cc3575c5e0dc574c66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;

/**
 * The ConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from the Migrations
 * Doctrine\\Migrations\\Configuration\\Configuration::getConnection() method.
 *
 * @internal
 */
class ConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->configuration !== null) {
            return \$this->configuration->getConnection();
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;

/**
 * The ConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from the Migrations
 * Doctrine\\Migrations\\Configuration\\Configuration::getConnection() method.
 *
 * @internal
 */
class ConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->configuration !== null) {
            return \$this->configuration->getConnection();
        }

        return null;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php");
    }
}
