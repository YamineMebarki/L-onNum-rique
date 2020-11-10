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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php */
class __TwigTemplate_19cf707eceb5cef0d02c327d4c939b3cd5f86a833399031650086af0db1a787b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * PostgreSQL 9.2 reserved keywords list.
 */
class PostgreSQL92Keywords extends PostgreSQL91Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL92';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.2/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), ['COLLATION']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * PostgreSQL 9.2 reserved keywords list.
 */
class PostgreSQL92Keywords extends PostgreSQL91Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL92';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.2/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), ['COLLATION']);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php");
    }
}
