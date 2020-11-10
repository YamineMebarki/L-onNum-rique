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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php */
class __TwigTemplate_657f247733c2e236473297736bbb73bbbdc83b5a92a2b93f544f210ea3700cd7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Sqlite3 definition.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Sqlite3Definition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$sqlite3Conf   = \$config['sqlite3'];
        \$tableName     = \$sqlite3Conf['table_name'];
        \$connectionRef = \$this->getConnectionReference(\$name, \$sqlite3Conf, \$container);

        \$service->setArguments(array(\$connectionRef, \$tableName));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['connection_id'])) {
            return new Reference(\$config['connection_id']);
        }

        \$fileName  = \$config['file_name'];
        \$connClass = '%doctrine_cache.sqlite3.connection.class%';
        \$connId    = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef   = new Definition(\$connClass, array(\$fileName, SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE));

        \$connDef->setPublic(false);
        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Sqlite3 definition.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Sqlite3Definition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$sqlite3Conf   = \$config['sqlite3'];
        \$tableName     = \$sqlite3Conf['table_name'];
        \$connectionRef = \$this->getConnectionReference(\$name, \$sqlite3Conf, \$container);

        \$service->setArguments(array(\$connectionRef, \$tableName));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['connection_id'])) {
            return new Reference(\$config['connection_id']);
        }

        \$fileName  = \$config['file_name'];
        \$connClass = '%doctrine_cache.sqlite3.connection.class%';
        \$connId    = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef   = new Definition(\$connClass, array(\$fileName, SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE));

        \$connDef->setPublic(false);
        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/Sqlite3Definition.php");
    }
}
