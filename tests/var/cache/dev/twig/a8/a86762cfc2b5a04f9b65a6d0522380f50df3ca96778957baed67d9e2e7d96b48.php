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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php */
class __TwigTemplate_bbf457200a45211d8228be996d679acc28060a04af347044269fe26662bc1b39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use const OCI_DEFAULT;

/**
 * A Doctrine DBAL driver for the Oracle OCI8 PHP extensions.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new OCI8Connection(
                \$username,
                \$password,
                \$this->_constructDsn(\$params),
                \$params['charset'] ?? null,
                \$params['sessionMode'] ?? OCI_DEFAULT,
                \$params['persistent'] ?? false
            );
        } catch (OCI8Exception \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function _constructDsn(array \$params)
    {
        return \$this->getEasyConnectString(\$params);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oci8';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use const OCI_DEFAULT;

/**
 * A Doctrine DBAL driver for the Oracle OCI8 PHP extensions.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new OCI8Connection(
                \$username,
                \$password,
                \$this->_constructDsn(\$params),
                \$params['charset'] ?? null,
                \$params['sessionMode'] ?? OCI_DEFAULT,
                \$params['persistent'] ?? false
            );
        } catch (OCI8Exception \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function _constructDsn(array \$params)
    {
        return \$this->getEasyConnectString(\$params);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oci8';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php");
    }
}
