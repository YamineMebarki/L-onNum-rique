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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php */
class __TwigTemplate_db308f88e8302fd49e0279c5d3f12dd86d058f1539712ebab4ff5c4b57fbfb29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;

/**
 * Session init listener for executing a single SQL statement right after a connection is opened.
 */
class SQLSessionInit implements EventSubscriber
{
    /** @var string */
    protected \$sql;

    /**
     * @param string \$sql
     */
    public function __construct(\$sql)
    {
        \$this->sql = \$sql;
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        \$conn = \$args->getConnection();
        \$conn->exec(\$this->sql);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;

/**
 * Session init listener for executing a single SQL statement right after a connection is opened.
 */
class SQLSessionInit implements EventSubscriber
{
    /** @var string */
    protected \$sql;

    /**
     * @param string \$sql
     */
    public function __construct(\$sql)
    {
        \$this->sql = \$sql;
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        \$conn = \$args->getConnection();
        \$conn->exec(\$this->sql);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php");
    }
}
