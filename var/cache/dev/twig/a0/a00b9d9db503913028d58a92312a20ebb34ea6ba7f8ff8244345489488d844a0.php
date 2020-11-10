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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php */
class __TwigTemplate_077b01eb387aa5b7e699a400eac45a3b27113e0d139fa429b8c0ca9f137bfd7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function implode;
use function str_replace;

class ReservedKeywordsValidator implements Visitor
{
    /** @var KeywordList[] */
    private \$keywordLists = [];

    /** @var string[] */
    private \$violations = [];

    /**
     * @param KeywordList[] \$keywordLists
     */
    public function __construct(array \$keywordLists)
    {
        \$this->keywordLists = \$keywordLists;
    }

    /**
     * @return string[]
     */
    public function getViolations()
    {
        return \$this->violations;
    }

    /**
     * @param string \$word
     *
     * @return string[]
     */
    private function isReservedWord(\$word)
    {
        if (\$word[0] === '`') {
            \$word = str_replace('`', '', \$word);
        }

        \$keywordLists = [];
        foreach (\$this->keywordLists as \$keywordList) {
            if (! \$keywordList->isKeyword(\$word)) {
                continue;
            }

            \$keywordLists[] = \$keywordList->getName();
        }

        return \$keywordLists;
    }

    /**
     * @param string   \$asset
     * @param string[] \$violatedPlatforms
     *
     * @return void
     */
    private function addViolation(\$asset, \$violatedPlatforms)
    {
        if (! \$violatedPlatforms) {
            return;
        }

        \$this->violations[] = \$asset . ' keyword violations: ' . implode(', ', \$violatedPlatforms);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
        \$this->addViolation(
            'Table ' . \$table->getName() . ' column ' . \$column->getName(),
            \$this->isReservedWord(\$column->getName())
        );
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->addViolation(
            'Table ' . \$table->getName(),
            \$this->isReservedWord(\$table->getName())
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function implode;
use function str_replace;

class ReservedKeywordsValidator implements Visitor
{
    /** @var KeywordList[] */
    private \$keywordLists = [];

    /** @var string[] */
    private \$violations = [];

    /**
     * @param KeywordList[] \$keywordLists
     */
    public function __construct(array \$keywordLists)
    {
        \$this->keywordLists = \$keywordLists;
    }

    /**
     * @return string[]
     */
    public function getViolations()
    {
        return \$this->violations;
    }

    /**
     * @param string \$word
     *
     * @return string[]
     */
    private function isReservedWord(\$word)
    {
        if (\$word[0] === '`') {
            \$word = str_replace('`', '', \$word);
        }

        \$keywordLists = [];
        foreach (\$this->keywordLists as \$keywordList) {
            if (! \$keywordList->isKeyword(\$word)) {
                continue;
            }

            \$keywordLists[] = \$keywordList->getName();
        }

        return \$keywordLists;
    }

    /**
     * @param string   \$asset
     * @param string[] \$violatedPlatforms
     *
     * @return void
     */
    private function addViolation(\$asset, \$violatedPlatforms)
    {
        if (! \$violatedPlatforms) {
            return;
        }

        \$this->violations[] = \$asset . ' keyword violations: ' . implode(', ', \$violatedPlatforms);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
        \$this->addViolation(
            'Table ' . \$table->getName() . ' column ' . \$column->getName(),
            \$this->isReservedWord(\$column->getName())
        );
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->addViolation(
            'Table ' . \$table->getName(),
            \$this->isReservedWord(\$table->getName())
        );
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php");
    }
}
