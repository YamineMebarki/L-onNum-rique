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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php */
class __TwigTemplate_91e68ae50df7085d6afd0e288764f939d90b24cb9d34e753f972a39b23ef4dcd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

/**
 * The ArrayConfiguration class is responsible for loading migration configuration information from a PHP file.
 *
 * @internal
 */
class ArrayConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        \$config = require \$file;

        if (isset(\$config['migrations_directory'])) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                \$config['migrations_directory']
            );
        }

        \$this->setConfiguration(\$config);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

/**
 * The ArrayConfiguration class is responsible for loading migration configuration information from a PHP file.
 *
 * @internal
 */
class ArrayConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        \$config = require \$file;

        if (isset(\$config['migrations_directory'])) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                \$config['migrations_directory']
            );
        }

        \$this->setConfiguration(\$config);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/ArrayConfiguration.php");
    }
}
