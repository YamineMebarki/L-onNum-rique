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

/* src/Migrations/Version20191101140436.php */
class __TwigTemplate_6ed16e5c51f39fc259dab9dc08b8ad04784994835ac2c6aec334046aff0438e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191101140436.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191101140436.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191101140436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE article ADD category_id INT NOT NULL');
        \$this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        \$this->addSql('CREATE INDEX IDX_23A0E6612469DE2 ON article (category_id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        \$this->addSql('DROP TABLE category');
        \$this->addSql('DROP INDEX IDX_23A0E6612469DE2 ON article');
        \$this->addSql('ALTER TABLE article DROP category_id');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Migrations/Version20191101140436.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191101140436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE article ADD category_id INT NOT NULL');
        \$this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        \$this->addSql('CREATE INDEX IDX_23A0E6612469DE2 ON article (category_id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        \$this->addSql('DROP TABLE category');
        \$this->addSql('DROP INDEX IDX_23A0E6612469DE2 ON article');
        \$this->addSql('ALTER TABLE article DROP category_id');
    }
}
", "src/Migrations/Version20191101140436.php", "/var/www/public/DevLaon/templates/src/Migrations/Version20191101140436.php");
    }
}
