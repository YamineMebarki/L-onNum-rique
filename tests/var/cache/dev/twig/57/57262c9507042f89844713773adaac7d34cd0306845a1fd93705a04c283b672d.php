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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php */
class __TwigTemplate_dadad156c61c19a95d8f229b23da12c597b5ca0302ee6bd2947a86372eb3cce2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\XmlNotValid;
use Doctrine\\Migrations\\Tools\\BooleanStringFormatter;
use DOMDocument;
use SimpleXMLElement;
use const DIRECTORY_SEPARATOR;
use const LIBXML_NOCDATA;
use function assert;
use function file_get_contents;
use function libxml_clear_errors;
use function libxml_use_internal_errors;
use function simplexml_load_string;

/**
 * The XmlConfiguration class is responsible for loading migration configuration information from a XML file.
 *
 * @internal
 */
class XmlConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        libxml_use_internal_errors(true);

        \$xml = new DOMDocument();

        if (\$xml->load(\$file) === false) {
            throw XmlNotValid::malformed();
        }

        \$xsdPath = __DIR__ . DIRECTORY_SEPARATOR . 'XML' . DIRECTORY_SEPARATOR . 'configuration.xsd';

        if (! \$xml->schemaValidate(\$xsdPath)) {
            libxml_clear_errors();

            throw XmlNotValid::failedValidation();
        }

        \$rawXML = file_get_contents(\$file);
        assert(\$rawXML !== false);

        \$xml = simplexml_load_string(\$rawXML, SimpleXMLElement::class, LIBXML_NOCDATA);
        assert(\$xml !== false);

        \$config = [];

        if (isset(\$xml->name)) {
            \$config['name'] = (string) \$xml->name;
        }

        if (isset(\$xml->{'custom-template'})) {
            \$config['custom_template'] = (string) \$xml->{'custom-template'};
        }

        if (isset(\$xml->table['name'])) {
            \$config['table_name'] = (string) \$xml->table['name'];
        }

        if (isset(\$xml->table['column'])) {
            \$config['column_name'] = (string) \$xml->table['column'];
        }

        if (isset(\$xml->table['column_length'])) {
            \$config['column_length'] = (int) \$xml->table['column_length'];
        }

        if (isset(\$xml->table['executed_at_column'])) {
            \$config['executed_at_column_name'] = (string) \$xml->table['executed_at_column'];
        }

        if (isset(\$xml->{'migrations-namespace'})) {
            \$config['migrations_namespace'] = (string) \$xml->{'migrations-namespace'};
        }

        if (isset(\$xml->{'organize-migrations'})) {
            \$config['organize_migrations'] = (string) \$xml->{'organize-migrations'};
        }

        if (isset(\$xml->{'migrations-directory'})) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                (string) \$xml->{'migrations-directory'}
            );
        }

        if (isset(\$xml->{'all-or-nothing'})) {
            \$config['all_or_nothing'] = BooleanStringFormatter::toBoolean(
                (string) \$xml->{'all-or-nothing'},
                false
            );
        }

        if (isset(\$xml->migrations->migration)) {
            \$migrations = [];

            foreach (\$xml->migrations->migration as \$migration) {
                \$attributes = \$migration->attributes();

                \$version = (string) \$attributes['version'];
                \$class   = (string) \$attributes['class'];

                \$migrations[] = [
                    'version' => \$version,
                    'class' => \$class,
                ];
            }

            \$config['migrations'] = \$migrations;
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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php";
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

use Doctrine\\Migrations\\Configuration\\Exception\\XmlNotValid;
use Doctrine\\Migrations\\Tools\\BooleanStringFormatter;
use DOMDocument;
use SimpleXMLElement;
use const DIRECTORY_SEPARATOR;
use const LIBXML_NOCDATA;
use function assert;
use function file_get_contents;
use function libxml_clear_errors;
use function libxml_use_internal_errors;
use function simplexml_load_string;

/**
 * The XmlConfiguration class is responsible for loading migration configuration information from a XML file.
 *
 * @internal
 */
class XmlConfiguration extends AbstractFileConfiguration
{
    /** @inheritdoc */
    protected function doLoad(string \$file) : void
    {
        libxml_use_internal_errors(true);

        \$xml = new DOMDocument();

        if (\$xml->load(\$file) === false) {
            throw XmlNotValid::malformed();
        }

        \$xsdPath = __DIR__ . DIRECTORY_SEPARATOR . 'XML' . DIRECTORY_SEPARATOR . 'configuration.xsd';

        if (! \$xml->schemaValidate(\$xsdPath)) {
            libxml_clear_errors();

            throw XmlNotValid::failedValidation();
        }

        \$rawXML = file_get_contents(\$file);
        assert(\$rawXML !== false);

        \$xml = simplexml_load_string(\$rawXML, SimpleXMLElement::class, LIBXML_NOCDATA);
        assert(\$xml !== false);

        \$config = [];

        if (isset(\$xml->name)) {
            \$config['name'] = (string) \$xml->name;
        }

        if (isset(\$xml->{'custom-template'})) {
            \$config['custom_template'] = (string) \$xml->{'custom-template'};
        }

        if (isset(\$xml->table['name'])) {
            \$config['table_name'] = (string) \$xml->table['name'];
        }

        if (isset(\$xml->table['column'])) {
            \$config['column_name'] = (string) \$xml->table['column'];
        }

        if (isset(\$xml->table['column_length'])) {
            \$config['column_length'] = (int) \$xml->table['column_length'];
        }

        if (isset(\$xml->table['executed_at_column'])) {
            \$config['executed_at_column_name'] = (string) \$xml->table['executed_at_column'];
        }

        if (isset(\$xml->{'migrations-namespace'})) {
            \$config['migrations_namespace'] = (string) \$xml->{'migrations-namespace'};
        }

        if (isset(\$xml->{'organize-migrations'})) {
            \$config['organize_migrations'] = (string) \$xml->{'organize-migrations'};
        }

        if (isset(\$xml->{'migrations-directory'})) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                (string) \$xml->{'migrations-directory'}
            );
        }

        if (isset(\$xml->{'all-or-nothing'})) {
            \$config['all_or_nothing'] = BooleanStringFormatter::toBoolean(
                (string) \$xml->{'all-or-nothing'},
                false
            );
        }

        if (isset(\$xml->migrations->migration)) {
            \$migrations = [];

            foreach (\$xml->migrations->migration as \$migration) {
                \$attributes = \$migration->attributes();

                \$version = (string) \$attributes['version'];
                \$class   = (string) \$attributes['class'];

                \$migrations[] = [
                    'version' => \$version,
                    'class' => \$class,
                ];
            }

            \$config['migrations'] = \$migrations;
        }

        \$this->setConfiguration(\$config);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XmlConfiguration.php");
    }
}
