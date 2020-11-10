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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php */
class __TwigTemplate_082c040861d1e7d6d131ec5553d5f39c72eaf21f3a7858945ae464d0e438e74d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use PDO;

/**
 * Contains statement fetch modes.
 */
final class FetchMode
{
    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column name as returned in the corresponding result set. If the result
     * set contains multiple columns with the same name, the statement returns
     * only a single value per column name.
     *
     * @see \\PDO::FETCH_ASSOC
     */
    public const ASSOCIATIVE = PDO::FETCH_ASSOC;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column number as returned in the corresponding result set, starting at
     * column 0.
     *
     * @see \\PDO::FETCH_NUM
     */
    public const NUMERIC = PDO::FETCH_NUM;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by both column name and number as returned in the corresponding result set,
     * starting at column 0.
     *
     * @see \\PDO::FETCH_BOTH
     */
    public const MIXED = PDO::FETCH_BOTH;

    /**
     * Specifies that the fetch method shall return each row as an object with
     * property names that correspond to the column names returned in the result
     * set.
     *
     * @see \\PDO::FETCH_OBJ
     */
    public const STANDARD_OBJECT = PDO::FETCH_OBJ;

    /**
     * Specifies that the fetch method shall return only a single requested
     * column from the next row in the result set.
     *
     * @see \\PDO::FETCH_COLUMN
     */
    public const COLUMN = PDO::FETCH_COLUMN;

    /**
     * Specifies that the fetch method shall return a new instance of the
     * requested class, mapping the columns to named properties in the class.
     *
     * @see \\PDO::FETCH_CLASS
     */
    public const CUSTOM_OBJECT = PDO::FETCH_CLASS;

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

use PDO;

/**
 * Contains statement fetch modes.
 */
final class FetchMode
{
    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column name as returned in the corresponding result set. If the result
     * set contains multiple columns with the same name, the statement returns
     * only a single value per column name.
     *
     * @see \\PDO::FETCH_ASSOC
     */
    public const ASSOCIATIVE = PDO::FETCH_ASSOC;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by column number as returned in the corresponding result set, starting at
     * column 0.
     *
     * @see \\PDO::FETCH_NUM
     */
    public const NUMERIC = PDO::FETCH_NUM;

    /**
     * Specifies that the fetch method shall return each row as an array indexed
     * by both column name and number as returned in the corresponding result set,
     * starting at column 0.
     *
     * @see \\PDO::FETCH_BOTH
     */
    public const MIXED = PDO::FETCH_BOTH;

    /**
     * Specifies that the fetch method shall return each row as an object with
     * property names that correspond to the column names returned in the result
     * set.
     *
     * @see \\PDO::FETCH_OBJ
     */
    public const STANDARD_OBJECT = PDO::FETCH_OBJ;

    /**
     * Specifies that the fetch method shall return only a single requested
     * column from the next row in the result set.
     *
     * @see \\PDO::FETCH_COLUMN
     */
    public const COLUMN = PDO::FETCH_COLUMN;

    /**
     * Specifies that the fetch method shall return a new instance of the
     * requested class, mapping the columns to named properties in the class.
     *
     * @see \\PDO::FETCH_CLASS
     */
    public const CUSTOM_OBJECT = PDO::FETCH_CLASS;

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php");
    }
}
