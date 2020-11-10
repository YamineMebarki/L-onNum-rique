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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php */
class __TwigTemplate_40cbbf294b2d6127a96c5ebf33e56bcf2766e9ff1eff8b5b0ca7addbde749ea3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;

/**
 * Driver for ext/sqlsrv.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (! isset(\$params['host'])) {
            throw new SQLSrvException(\"Missing 'host' in configuration for sqlsrv driver.\");
        }

        \$serverName = \$params['host'];
        if (isset(\$params['port'])) {
            \$serverName .= ', ' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$driverOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['charset'])) {
            \$driverOptions['CharacterSet'] = \$params['charset'];
        }

        if (\$username !== null) {
            \$driverOptions['UID'] = \$username;
        }

        if (\$password !== null) {
            \$driverOptions['PWD'] = \$password;
        }

        if (! isset(\$driverOptions['ReturnDatesAsStrings'])) {
            \$driverOptions['ReturnDatesAsStrings'] = 1;
        }

        return new SQLSrvConnection(\$serverName, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sqlsrv';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;

/**
 * Driver for ext/sqlsrv.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (! isset(\$params['host'])) {
            throw new SQLSrvException(\"Missing 'host' in configuration for sqlsrv driver.\");
        }

        \$serverName = \$params['host'];
        if (isset(\$params['port'])) {
            \$serverName .= ', ' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$driverOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['charset'])) {
            \$driverOptions['CharacterSet'] = \$params['charset'];
        }

        if (\$username !== null) {
            \$driverOptions['UID'] = \$username;
        }

        if (\$password !== null) {
            \$driverOptions['PWD'] = \$password;
        }

        if (! isset(\$driverOptions['ReturnDatesAsStrings'])) {
            \$driverOptions['ReturnDatesAsStrings'] = 1;
        }

        return new SQLSrvConnection(\$serverName, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sqlsrv';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php");
    }
}
