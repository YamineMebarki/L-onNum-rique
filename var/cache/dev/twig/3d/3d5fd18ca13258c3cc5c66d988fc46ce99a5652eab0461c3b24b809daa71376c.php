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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php */
class __TwigTemplate_5601494ef039b455724655753534986c1fd67ccb9d606a948ab49396fec5d616 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Generator\\Exception\\InvalidTemplateSpecified;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\MigrationDirectoryHelper;
use function explode;
use function file_get_contents;
use function file_put_contents;
use function implode;
use function is_file;
use function is_readable;
use function preg_replace;
use function str_replace;
use function trim;

/**
 * The Generator class is responsible for generating a migration class.
 *
 * @internal
 */
class Generator
{
    private const MIGRATION_TEMPLATE = <<<'TEMPLATE'
<?php

declare(strict_types=1);

namespace <namespace>;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version<version> extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
<up>
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
<down>
    }
}

TEMPLATE;

    /** @var Configuration */
    private \$configuration;

    /** @var string|null */
    private \$template;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    public function generateMigration(
        string \$version,
        ?string \$up = null,
        ?string \$down = null
    ) : string {
        \$placeHolders = [
            '<namespace>',
            '<version>',
            '<up>',
            '<down>',
        ];

        \$replacements = [
            \$this->configuration->getMigrationsNamespace(),
            \$version,
            \$up !== null ? '        ' . implode(\"\\n        \", explode(\"\\n\", \$up)) : null,
            \$down !== null ? '        ' . implode(\"\\n        \", explode(\"\\n\", \$down)) : null,
        ];

        \$code = str_replace(\$placeHolders, \$replacements, \$this->getTemplate());
        \$code = preg_replace('/^ +\$/m', '', \$code);

        \$directoryHelper = new MigrationDirectoryHelper(\$this->configuration);
        \$dir             = \$directoryHelper->getMigrationDirectory();
        \$path            = \$dir . '/Version' . \$version . '.php';

        file_put_contents(\$path, \$code);

        return \$path;
    }

    private function getTemplate() : string
    {
        if (\$this->template === null) {
            \$this->template = \$this->loadCustomTemplate();

            if (\$this->template === null) {
                \$this->template = self::MIGRATION_TEMPLATE;
            }
        }

        return \$this->template;
    }

    /**
     * @throws InvalidTemplateSpecified
     */
    private function loadCustomTemplate() : ?string
    {
        \$customTemplate = \$this->configuration->getCustomTemplate();

        if (\$customTemplate === null) {
            return null;
        }

        if (! is_file(\$customTemplate) || ! is_readable(\$customTemplate)) {
            throw InvalidTemplateSpecified::notFoundOrNotReadable(\$customTemplate);
        }

        \$content = file_get_contents(\$customTemplate);

        if (\$content === false) {
            throw InvalidTemplateSpecified::notReadable(\$customTemplate);
        }

        if (trim(\$content) === '') {
            throw InvalidTemplateSpecified::empty(\$customTemplate);
        }

        return \$content;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php";
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

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Generator\\Exception\\InvalidTemplateSpecified;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\MigrationDirectoryHelper;
use function explode;
use function file_get_contents;
use function file_put_contents;
use function implode;
use function is_file;
use function is_readable;
use function preg_replace;
use function str_replace;
use function trim;

/**
 * The Generator class is responsible for generating a migration class.
 *
 * @internal
 */
class Generator
{
    private const MIGRATION_TEMPLATE = <<<'TEMPLATE'
<?php

declare(strict_types=1);

namespace <namespace>;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version<version> extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
<up>
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
<down>
    }
}

TEMPLATE;

    /** @var Configuration */
    private \$configuration;

    /** @var string|null */
    private \$template;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    public function generateMigration(
        string \$version,
        ?string \$up = null,
        ?string \$down = null
    ) : string {
        \$placeHolders = [
            '<namespace>',
            '<version>',
            '<up>',
            '<down>',
        ];

        \$replacements = [
            \$this->configuration->getMigrationsNamespace(),
            \$version,
            \$up !== null ? '        ' . implode(\"\\n        \", explode(\"\\n\", \$up)) : null,
            \$down !== null ? '        ' . implode(\"\\n        \", explode(\"\\n\", \$down)) : null,
        ];

        \$code = str_replace(\$placeHolders, \$replacements, \$this->getTemplate());
        \$code = preg_replace('/^ +\$/m', '', \$code);

        \$directoryHelper = new MigrationDirectoryHelper(\$this->configuration);
        \$dir             = \$directoryHelper->getMigrationDirectory();
        \$path            = \$dir . '/Version' . \$version . '.php';

        file_put_contents(\$path, \$code);

        return \$path;
    }

    private function getTemplate() : string
    {
        if (\$this->template === null) {
            \$this->template = \$this->loadCustomTemplate();

            if (\$this->template === null) {
                \$this->template = self::MIGRATION_TEMPLATE;
            }
        }

        return \$this->template;
    }

    /**
     * @throws InvalidTemplateSpecified
     */
    private function loadCustomTemplate() : ?string
    {
        \$customTemplate = \$this->configuration->getCustomTemplate();

        if (\$customTemplate === null) {
            return null;
        }

        if (! is_file(\$customTemplate) || ! is_readable(\$customTemplate)) {
            throw InvalidTemplateSpecified::notFoundOrNotReadable(\$customTemplate);
        }

        \$content = file_get_contents(\$customTemplate);

        if (\$content === false) {
            throw InvalidTemplateSpecified::notReadable(\$customTemplate);
        }

        if (trim(\$content) === '') {
            throw InvalidTemplateSpecified::empty(\$customTemplate);
        }

        return \$content;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Generator.php");
    }
}
