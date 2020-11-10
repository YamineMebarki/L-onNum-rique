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

/* src/Migrations/Version20191103194729.php */
class __TwigTemplate_441d2f0d87a21eb47d24133b2cf9988a99ec1513366b66c157da38b1dc6d5dea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191103194729.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Migrations/Version20191103194729.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191103194729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE article_like (id INT AUTO_INCREMENT NOT NULL, article_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_1C21C7B28F3EC46 (article_id_id), INDEX IDX_1C21C7B29D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE article_like ADD CONSTRAINT FK_1C21C7B28F3EC46 FOREIGN KEY (article_id_id) REFERENCES article (id)');
        \$this->addSql('ALTER TABLE article_like ADD CONSTRAINT FK_1C21C7B29D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('DROP TABLE article_like');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Migrations/Version20191103194729.php";
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
final class Version20191103194729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema \$schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('CREATE TABLE article_like (id INT AUTO_INCREMENT NOT NULL, article_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_1C21C7B28F3EC46 (article_id_id), INDEX IDX_1C21C7B29D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        \$this->addSql('ALTER TABLE article_like ADD CONSTRAINT FK_1C21C7B28F3EC46 FOREIGN KEY (article_id_id) REFERENCES article (id)');
        \$this->addSql('ALTER TABLE article_like ADD CONSTRAINT FK_1C21C7B29D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema \$schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

        \$this->addSql('DROP TABLE article_like');
    }
}
", "src/Migrations/Version20191103194729.php", "/var/www/public/DevLaon/templates/src/Migrations/Version20191103194729.php");
    }
}
