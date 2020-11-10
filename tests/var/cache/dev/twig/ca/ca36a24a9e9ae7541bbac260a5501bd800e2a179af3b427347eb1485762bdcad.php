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

/* vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php */
class __TwigTemplate_7aa4b0ef35d75db10e452cdde7c7226f68c99efe5a2a1a76b9f0459a00469978 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Controller;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Exception;
use PDO;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Symfony\\Component\\VarDumper\\Cloner\\Data;

class ProfilerController implements ContainerAwareInterface
{
    /** @var ContainerInterface */
    private \$container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    /**
     * Renders the profiler panel for the given token.
     *
     * @param string \$token          The profiler token
     * @param string \$connectionName
     * @param int    \$query
     *
     * @return Response A Response instance
     */
    public function explainAction(\$token, \$connectionName, \$query)
    {
        /** @var Profiler \$profiler */
        \$profiler = \$this->container->get('profiler');
        \$profiler->disable();

        \$profile = \$profiler->loadProfile(\$token);
        \$queries = \$profile->getCollector('db')->getQueries();

        if (! isset(\$queries[\$connectionName][\$query])) {
            return new Response('This query does not exist.');
        }

        \$query = \$queries[\$connectionName][\$query];
        if (! \$query['explainable']) {
            return new Response('This query cannot be explained.');
        }

        /** @var Connection \$connection */
        \$connection = \$this->container->get('doctrine')->getConnection(\$connectionName);
        try {
            if (\$connection->getDatabasePlatform() instanceof SQLServerPlatform) {
                \$results = \$this->explainSQLServerPlatform(\$connection, \$query);
            } else {
                \$results = \$this->explainOtherPlatform(\$connection, \$query);
            }
        } catch (Exception \$e) {
            return new Response('This query cannot be explained.');
        }

        return new Response(\$this->container->get('twig')->render('@Doctrine/Collector/explain.html.twig', [
            'data' => \$results,
            'query' => \$query,
        ]));
    }

    private function explainSQLServerPlatform(Connection \$connection, \$query)
    {
        if (stripos(\$query['sql'], 'SELECT') === 0) {
            \$sql = 'SET STATISTICS PROFILE ON; ' . \$query['sql'] . '; SET STATISTICS PROFILE OFF;';
        } else {
            \$sql = 'SET SHOWPLAN_TEXT ON; GO; SET NOEXEC ON; ' . \$query['sql'] . '; SET NOEXEC OFF; GO; SET SHOWPLAN_TEXT OFF;';
        }

        \$params = \$query['params'];

        if (\$params instanceof Data) {
            \$params = \$params->getValue(true);
        }

        \$stmt = \$connection->executeQuery(\$sql, \$params, \$query['types']);
        \$stmt->nextRowset();

        return \$stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private function explainOtherPlatform(Connection \$connection, \$query)
    {
        \$params = \$query['params'];

        if (\$params instanceof Data) {
            \$params = \$params->getValue(true);
        }

        return \$connection->executeQuery('EXPLAIN ' . \$query['sql'], \$params, \$query['types'])
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Controller;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Exception;
use PDO;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Symfony\\Component\\VarDumper\\Cloner\\Data;

class ProfilerController implements ContainerAwareInterface
{
    /** @var ContainerInterface */
    private \$container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    /**
     * Renders the profiler panel for the given token.
     *
     * @param string \$token          The profiler token
     * @param string \$connectionName
     * @param int    \$query
     *
     * @return Response A Response instance
     */
    public function explainAction(\$token, \$connectionName, \$query)
    {
        /** @var Profiler \$profiler */
        \$profiler = \$this->container->get('profiler');
        \$profiler->disable();

        \$profile = \$profiler->loadProfile(\$token);
        \$queries = \$profile->getCollector('db')->getQueries();

        if (! isset(\$queries[\$connectionName][\$query])) {
            return new Response('This query does not exist.');
        }

        \$query = \$queries[\$connectionName][\$query];
        if (! \$query['explainable']) {
            return new Response('This query cannot be explained.');
        }

        /** @var Connection \$connection */
        \$connection = \$this->container->get('doctrine')->getConnection(\$connectionName);
        try {
            if (\$connection->getDatabasePlatform() instanceof SQLServerPlatform) {
                \$results = \$this->explainSQLServerPlatform(\$connection, \$query);
            } else {
                \$results = \$this->explainOtherPlatform(\$connection, \$query);
            }
        } catch (Exception \$e) {
            return new Response('This query cannot be explained.');
        }

        return new Response(\$this->container->get('twig')->render('@Doctrine/Collector/explain.html.twig', [
            'data' => \$results,
            'query' => \$query,
        ]));
    }

    private function explainSQLServerPlatform(Connection \$connection, \$query)
    {
        if (stripos(\$query['sql'], 'SELECT') === 0) {
            \$sql = 'SET STATISTICS PROFILE ON; ' . \$query['sql'] . '; SET STATISTICS PROFILE OFF;';
        } else {
            \$sql = 'SET SHOWPLAN_TEXT ON; GO; SET NOEXEC ON; ' . \$query['sql'] . '; SET NOEXEC OFF; GO; SET SHOWPLAN_TEXT OFF;';
        }

        \$params = \$query['params'];

        if (\$params instanceof Data) {
            \$params = \$params->getValue(true);
        }

        \$stmt = \$connection->executeQuery(\$sql, \$params, \$query['types']);
        \$stmt->nextRowset();

        return \$stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private function explainOtherPlatform(Connection \$connection, \$query)
    {
        \$params = \$query['params'];

        if (\$params instanceof Data) {
            \$params = \$params->getValue(true);
        }

        return \$connection->executeQuery('EXPLAIN ' . \$query['sql'], \$params, \$query['types'])
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}
", "vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Controller/ProfilerController.php");
    }
}
