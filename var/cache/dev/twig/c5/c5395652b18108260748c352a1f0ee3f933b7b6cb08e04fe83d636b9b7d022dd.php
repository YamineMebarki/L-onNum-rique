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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php */
class __TwigTemplate_52b7a80ca033d91fa9bcee13fa356e1f1c9216ff8405ea77d6862449b9453285 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use PDO;

/**
 * Contains statement parameter types.
 */
final class ParameterType
{
    /**
     * Represents the SQL NULL data type.
     *
     * @see \\PDO::PARAM_NULL
     */
    public const NULL = PDO::PARAM_NULL;

    /**
     * Represents the SQL INTEGER data type.
     *
     * @see \\PDO::PARAM_INT
     */
    public const INTEGER = PDO::PARAM_INT;

    /**
     * Represents the SQL CHAR, VARCHAR, or other string data type.
     *
     * @see \\PDO::PARAM_STR
     */
    public const STRING = PDO::PARAM_STR;

    /**
     * Represents the SQL large object data type.
     *
     * @see \\PDO::PARAM_LOB
     */
    public const LARGE_OBJECT = PDO::PARAM_LOB;

    /**
     * Represents a boolean data type.
     *
     * @see \\PDO::PARAM_BOOL
     */
    public const BOOLEAN = PDO::PARAM_BOOL;

    /**
     * Represents a binary string data type.
     */
    public const BINARY = 16;

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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php";
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
 * Contains statement parameter types.
 */
final class ParameterType
{
    /**
     * Represents the SQL NULL data type.
     *
     * @see \\PDO::PARAM_NULL
     */
    public const NULL = PDO::PARAM_NULL;

    /**
     * Represents the SQL INTEGER data type.
     *
     * @see \\PDO::PARAM_INT
     */
    public const INTEGER = PDO::PARAM_INT;

    /**
     * Represents the SQL CHAR, VARCHAR, or other string data type.
     *
     * @see \\PDO::PARAM_STR
     */
    public const STRING = PDO::PARAM_STR;

    /**
     * Represents the SQL large object data type.
     *
     * @see \\PDO::PARAM_LOB
     */
    public const LARGE_OBJECT = PDO::PARAM_LOB;

    /**
     * Represents a boolean data type.
     *
     * @see \\PDO::PARAM_BOOL
     */
    public const BOOLEAN = PDO::PARAM_BOOL;

    /**
     * Represents a binary string data type.
     */
    public const BINARY = 16;

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php");
    }
}
