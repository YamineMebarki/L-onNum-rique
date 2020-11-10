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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php */
class __TwigTemplate_fbbf6a8b673f21075c0bb4d68a7ff740210ed78075e8ac7a0079c6ec4dd0f84f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Query;

use Doctrine\\DBAL\\DBALException;
use function implode;

class QueryException extends DBALException
{
    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function unknownAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not part of \" .
            'any FROM or JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }

    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function nonUniqueAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not unique \" .
            'in FROM and JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Query;

use Doctrine\\DBAL\\DBALException;
use function implode;

class QueryException extends DBALException
{
    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function unknownAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not part of \" .
            'any FROM or JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }

    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function nonUniqueAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not unique \" .
            'in FROM and JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php");
    }
}
