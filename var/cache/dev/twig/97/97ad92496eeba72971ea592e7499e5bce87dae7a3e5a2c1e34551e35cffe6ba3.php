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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php */
class __TwigTemplate_c9358d61fb7708fbcdd1aebc296b86af4a03df618fe9b66f9f3cb5fe23b9de94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConnectionHelperLoader is responsible for loading a Doctrine\\DBAL\\Connection from a Symfony Console HelperSet.
 *
 * @internal
 */
class ConnectionHelperLoader implements ConnectionLoaderInterface
{
    /** @var string */
    private \$helperName;

    /** @var  HelperSet */
    private \$helperSet;

    public function __construct(?HelperSet \$helperSet = null, string \$helperName)
    {
        \$this->helperName = \$helperName;

        if (\$helperSet === null) {
            \$helperSet = new HelperSet();
        }

        \$this->helperSet = \$helperSet;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->helperSet->has(\$this->helperName)) {
            \$connectionHelper = \$this->helperSet->get(\$this->helperName);

            if (\$connectionHelper instanceof ConnectionHelper) {
                return \$connectionHelper->getConnection();
            }
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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php";
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
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConnectionHelperLoader is responsible for loading a Doctrine\\DBAL\\Connection from a Symfony Console HelperSet.
 *
 * @internal
 */
class ConnectionHelperLoader implements ConnectionLoaderInterface
{
    /** @var string */
    private \$helperName;

    /** @var  HelperSet */
    private \$helperSet;

    public function __construct(?HelperSet \$helperSet = null, string \$helperName)
    {
        \$this->helperName = \$helperName;

        if (\$helperSet === null) {
            \$helperSet = new HelperSet();
        }

        \$this->helperSet = \$helperSet;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->helperSet->has(\$this->helperName)) {
            \$connectionHelper = \$this->helperSet->get(\$this->helperName);

            if (\$connectionHelper instanceof ConnectionHelper) {
                return \$connectionHelper->getConnection();
            }
        }

        return null;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php");
    }
}
