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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php */
class __TwigTemplate_8c585ad3ddaebee185696ff3bd646960593e997cb112d97be4a9f2d96c5b0218 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Logging;

use const PHP_EOL;
use function var_dump;

/**
 * A SQL logger that log to the standard output using echo/var_dump.
 */
class EchoSQLLogger implements SQLLogger
{
    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        echo \$sql . PHP_EOL;

        if (\$params) {
            var_dump(\$params);
        }

        if (! \$types) {
            return;
        }

        var_dump(\$types);
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Logging;

use const PHP_EOL;
use function var_dump;

/**
 * A SQL logger that log to the standard output using echo/var_dump.
 */
class EchoSQLLogger implements SQLLogger
{
    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        echo \$sql . PHP_EOL;

        if (\$params) {
            var_dump(\$params);
        }

        if (! \$types) {
            return;
        }

        var_dump(\$types);
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php");
    }
}
