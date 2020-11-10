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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php */
class __TwigTemplate_8783a856ba9bd3d2834d8522352d3c508ba3e2b6596dcf62dcca03414548f1e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;
use PDO;
use function count;
use function func_get_args;

/**
 * PDO implementation of the Connection interface.
 * Used by all PDO-based drivers.
 */
class PDOConnection extends PDO implements Connection, ServerInfoAwareConnection
{
    /**
     * @param string       \$dsn
     * @param string|null  \$user
     * @param string|null  \$password
     * @param mixed[]|null \$options
     *
     * @throws PDOException In case of an error.
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        try {
            parent::__construct(\$dsn, \$user, \$password, \$options);
            \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [PDOStatement::class, []]);
            \$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        try {
            return parent::exec(\$statement);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        return PDO::getAttribute(PDO::ATTR_SERVER_VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString, \$driverOptions = [])
    {
        try {
            return parent::prepare(\$prepareString, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args      = func_get_args();
        \$argsCount = count(\$args);

        try {
            if (\$argsCount === 4) {
                return parent::query(\$args[0], \$args[1], \$args[2], \$args[3]);
            }

            if (\$argsCount === 3) {
                return parent::query(\$args[0], \$args[1], \$args[2]);
            }

            if (\$argsCount === 2) {
                return parent::query(\$args[0], \$args[1]);
            }

            return parent::query(\$args[0]);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        return parent::quote(\$input, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        try {
            return parent::lastInsertId(\$name);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;
use PDO;
use function count;
use function func_get_args;

/**
 * PDO implementation of the Connection interface.
 * Used by all PDO-based drivers.
 */
class PDOConnection extends PDO implements Connection, ServerInfoAwareConnection
{
    /**
     * @param string       \$dsn
     * @param string|null  \$user
     * @param string|null  \$password
     * @param mixed[]|null \$options
     *
     * @throws PDOException In case of an error.
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        try {
            parent::__construct(\$dsn, \$user, \$password, \$options);
            \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [PDOStatement::class, []]);
            \$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        try {
            return parent::exec(\$statement);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        return PDO::getAttribute(PDO::ATTR_SERVER_VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString, \$driverOptions = [])
    {
        try {
            return parent::prepare(\$prepareString, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args      = func_get_args();
        \$argsCount = count(\$args);

        try {
            if (\$argsCount === 4) {
                return parent::query(\$args[0], \$args[1], \$args[2], \$args[3]);
            }

            if (\$argsCount === 3) {
                return parent::query(\$args[0], \$args[1], \$args[2]);
            }

            if (\$argsCount === 2) {
                return parent::query(\$args[0], \$args[1]);
            }

            return parent::query(\$args[0]);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        return parent::quote(\$input, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        try {
            return parent::lastInsertId(\$name);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php");
    }
}
