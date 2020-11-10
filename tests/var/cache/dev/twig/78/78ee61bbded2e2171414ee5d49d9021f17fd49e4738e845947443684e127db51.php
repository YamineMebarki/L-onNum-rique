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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php */
class __TwigTemplate_fb4ac4ec259ce1250c902cfaa63b871d33933a1e95ee17bf174e10b9fa5a5179 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOOracle;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO Oracle driver.
 *
 * WARNING: This driver gives us segfaults in our testsuites on CLOB and other
 * stuff. PDO Oracle is not maintained by Oracle or anyone in the PHP community,
 * which leads us to the recommendation to use the \"oci8\" driver to connect
 * to Oracle instead.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function constructPdoDsn(array \$params)
    {
        \$dsn = 'oci:dbname=' . \$this->getEasyConnectString(\$params);

        if (isset(\$params['charset'])) {
            \$dsn .= ';charset=' . \$params['charset'];
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_oracle';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOOracle;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO Oracle driver.
 *
 * WARNING: This driver gives us segfaults in our testsuites on CLOB and other
 * stuff. PDO Oracle is not maintained by Oracle or anyone in the PHP community,
 * which leads us to the recommendation to use the \"oci8\" driver to connect
 * to Oracle instead.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function constructPdoDsn(array \$params)
    {
        \$dsn = 'oci:dbname=' . \$this->getEasyConnectString(\$params);

        if (isset(\$params['charset'])) {
            \$dsn .= ';charset=' . \$params['charset'];
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_oracle';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php");
    }
}
