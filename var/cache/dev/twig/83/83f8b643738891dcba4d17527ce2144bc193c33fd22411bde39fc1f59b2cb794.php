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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php */
class __TwigTemplate_f30f445bfa6631ab805d60ab60c8ab239b1a5fff8985bdf512b017bf39d607e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\JsonNotValid;
use const JSON_ERROR_NONE;
use function assert;
use function file_get_contents;
use function json_decode;
use function json_last_error;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a JSON file.
 *
 * @internal
 */
class JsonConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        \$contents = file_get_contents(\$file);

        assert(\$contents !== false);

        \$config = json_decode(\$contents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw JsonNotValid::new();
        }

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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php";
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

use Doctrine\\Migrations\\Configuration\\Exception\\JsonNotValid;
use const JSON_ERROR_NONE;
use function assert;
use function file_get_contents;
use function json_decode;
use function json_last_error;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a JSON file.
 *
 * @internal
 */
class JsonConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        \$contents = file_get_contents(\$file);

        assert(\$contents !== false);

        \$config = json_decode(\$contents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw JsonNotValid::new();
        }

        if (isset(\$config['migrations_directory'])) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                \$config['migrations_directory']
            );
        }

        \$this->setConfiguration(\$config);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/JsonConfiguration.php");
    }
}
