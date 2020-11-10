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

/* src/Migrations/Version20191101193225.php */
class __TwigTemplate_fe290005b0692b149325fceb10bc04662617cf1e1294cccceda8c02abae92d94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191101193225.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191101193225.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191101193225 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, author VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL,stats TINYINT(1) NOT NULL, INDEX IDX_9474526C7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('DROP TABLE comment');
        \$this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        \$this->addSql('DROP INDEX IDX_23A0E6612469DE2 ON article');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Migrations/Version20191101193225.php";
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
final class Version20191101193225 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, author VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL,stats TINYINT(1) NOT NULL, INDEX IDX_9474526C7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('DROP TABLE comment');
        \$this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        \$this->addSql('DROP INDEX IDX_23A0E6612469DE2 ON article');
    }
}
", "src/Migrations/Version20191101193225.php", "/var/www/public/DevLaon/templates/src/Migrations/Version20191101193225.php");
    }
}
