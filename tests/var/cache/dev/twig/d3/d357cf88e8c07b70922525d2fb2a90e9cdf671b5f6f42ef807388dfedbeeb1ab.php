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

/* vendor/symfony/cache/Adapter/PdoAdapter.php */
class __TwigTemplate_390f121791430877a1ff030f033392a11171157d230b15192a995734b1e7e9e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PdoAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PdoAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Doctrine\\DBAL\\Connection;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\PdoTrait;

class PdoAdapter extends AbstractAdapter implements PruneableInterface
{
    use PdoTrait;

    protected \$maxIdLength = 255;

    /**
     * You can either pass an existing database connection as PDO instance or
     * a Doctrine DBAL Connection or a DSN string that will be used to
     * lazy-connect to the database when the cache is actually used.
     *
     * When a Doctrine DBAL Connection is passed, the cache table is created
     * automatically when possible. Otherwise, use the createTable() method.
     *
     * List of available options:
     *  * db_table: The name of the table [default: cache_items]
     *  * db_id_col: The column where to store the cache id [default: item_id]
     *  * db_data_col: The column where to store the cache data [default: item_data]
     *  * db_lifetime_col: The column where to store the lifetime [default: item_lifetime]
     *  * db_time_col: The column where to store the timestamp [default: item_time]
     *  * db_username: The username when lazy-connect [default: '']
     *  * db_password: The password when lazy-connect [default: '']
     *  * db_connection_options: An array of driver-specific connection options [default: []]
     *
     * @param \\PDO|Connection|string \$connOrDsn a \\PDO or Connection instance or DSN string or null
     *
     * @throws InvalidArgumentException When first argument is not PDO nor Connection nor string
     * @throws InvalidArgumentException When PDO error mode is not PDO::ERRMODE_EXCEPTION
     * @throws InvalidArgumentException When namespace contains invalid characters
     */
    public function __construct(\$connOrDsn, string \$namespace = '', int \$defaultLifetime = 0, array \$options = [], MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$connOrDsn, \$namespace, \$defaultLifetime, \$options, \$marshaller);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/PdoAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Doctrine\\DBAL\\Connection;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\PdoTrait;

class PdoAdapter extends AbstractAdapter implements PruneableInterface
{
    use PdoTrait;

    protected \$maxIdLength = 255;

    /**
     * You can either pass an existing database connection as PDO instance or
     * a Doctrine DBAL Connection or a DSN string that will be used to
     * lazy-connect to the database when the cache is actually used.
     *
     * When a Doctrine DBAL Connection is passed, the cache table is created
     * automatically when possible. Otherwise, use the createTable() method.
     *
     * List of available options:
     *  * db_table: The name of the table [default: cache_items]
     *  * db_id_col: The column where to store the cache id [default: item_id]
     *  * db_data_col: The column where to store the cache data [default: item_data]
     *  * db_lifetime_col: The column where to store the lifetime [default: item_lifetime]
     *  * db_time_col: The column where to store the timestamp [default: item_time]
     *  * db_username: The username when lazy-connect [default: '']
     *  * db_password: The password when lazy-connect [default: '']
     *  * db_connection_options: An array of driver-specific connection options [default: []]
     *
     * @param \\PDO|Connection|string \$connOrDsn a \\PDO or Connection instance or DSN string or null
     *
     * @throws InvalidArgumentException When first argument is not PDO nor Connection nor string
     * @throws InvalidArgumentException When PDO error mode is not PDO::ERRMODE_EXCEPTION
     * @throws InvalidArgumentException When namespace contains invalid characters
     */
    public function __construct(\$connOrDsn, string \$namespace = '', int \$defaultLifetime = 0, array \$options = [], MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$connOrDsn, \$namespace, \$defaultLifetime, \$options, \$marshaller);
    }
}
", "vendor/symfony/cache/Adapter/PdoAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/PdoAdapter.php");
    }
}
