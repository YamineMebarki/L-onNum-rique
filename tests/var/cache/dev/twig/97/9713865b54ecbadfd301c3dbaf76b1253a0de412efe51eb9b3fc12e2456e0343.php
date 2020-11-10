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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php */
class __TwigTemplate_a29edd98224c270e3da295ca9148b22612eb63f17ed3febfe3dcec566a1a69d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The Factory class is responsible for creating instances of the Version class for a version number
 * and a migration class name.
 *
 * @var internal
 */
class Factory
{
    /** @var Configuration */
    private \$configuration;

    /** @var ExecutorInterface */
    private \$versionExecutor;

    public function __construct(Configuration \$configuration, ExecutorInterface \$versionExecutor)
    {
        \$this->configuration   = \$configuration;
        \$this->versionExecutor = \$versionExecutor;
    }

    public function createVersion(string \$version, string \$migrationClassName) : Version
    {
        return new Version(
            \$this->configuration,
            \$version,
            \$migrationClassName,
            \$this->versionExecutor
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The Factory class is responsible for creating instances of the Version class for a version number
 * and a migration class name.
 *
 * @var internal
 */
class Factory
{
    /** @var Configuration */
    private \$configuration;

    /** @var ExecutorInterface */
    private \$versionExecutor;

    public function __construct(Configuration \$configuration, ExecutorInterface \$versionExecutor)
    {
        \$this->configuration   = \$configuration;
        \$this->versionExecutor = \$versionExecutor;
    }

    public function createVersion(string \$version, string \$migrationClassName) : Version
    {
        return new Version(
            \$this->configuration,
            \$version,
            \$migrationClassName,
            \$this->versionExecutor
        );
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Factory.php");
    }
}
