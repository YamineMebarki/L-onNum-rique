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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php */
class __TwigTemplate_7451b7647b11d6184eeadcb3c5bf096be2933a559c34a1df6d2445fd74afcd69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotAvailable;
use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotValid;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Yaml;
use function assert;
use function class_exists;
use function file_get_contents;
use function is_array;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a YAML file.
 *
 * @internal
 */
class YamlConfiguration extends AbstractFileConfiguration
{
    /**
     * @inheritdoc
     */
    protected function doLoad(string \$file) : void
    {
        if (! class_exists(Yaml::class)) {
            throw YamlNotAvailable::new();
        }

        \$content = file_get_contents(\$file);

        assert(\$content !== false);

        try {
            \$config = Yaml::parse(\$content);
        } catch (ParseException \$e) {
            throw YamlNotValid::malformed();
        }

        if (! is_array(\$config)) {
            throw YamlNotValid::invalid();
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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php";
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

use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotAvailable;
use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotValid;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Yaml;
use function assert;
use function class_exists;
use function file_get_contents;
use function is_array;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a YAML file.
 *
 * @internal
 */
class YamlConfiguration extends AbstractFileConfiguration
{
    /**
     * @inheritdoc
     */
    protected function doLoad(string \$file) : void
    {
        if (! class_exists(Yaml::class)) {
            throw YamlNotAvailable::new();
        }

        \$content = file_get_contents(\$file);

        assert(\$content !== false);

        try {
            \$config = Yaml::parse(\$content);
        } catch (ParseException \$e) {
            throw YamlNotValid::malformed();
        }

        if (! is_array(\$config)) {
            throw YamlNotValid::invalid();
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
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php");
    }
}
