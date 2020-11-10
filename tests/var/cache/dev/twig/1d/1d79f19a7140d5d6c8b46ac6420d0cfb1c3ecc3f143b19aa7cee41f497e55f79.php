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

/* vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php */
class __TwigTemplate_6506e129f7c5effa8e0e4362573c8015c342ad2f67facf424fe0254ee3fe2ab4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command\\Helper;

use Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DoctrineCommandHelper as BaseDoctrineCommandHelper;
use Doctrine\\Bundle\\DoctrineBundle\\Registry;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use LogicException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use function count;
use function sprintf;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper extends BaseDoctrineCommandHelper
{
    public static function setApplicationHelper(Application \$application, InputInterface \$input) : void
    {
        \$container = \$application->getKernel()->getContainer();

        /** @var Registry \$doctrine */
        \$doctrine = \$container->get('doctrine');

        \$managerNames = \$doctrine->getManagerNames();

        if (\$input->getOption('db') !== null || count(\$managerNames) === 0) {
            self::setApplicationConnection(\$application, \$input->getOption('db'));
        } else {
            self::setApplicationEntityManager(\$application, \$input->getOption('em'));
        }

        if (\$input->getOption('shard') === null) {
            return;
        }

        /** @var ConnectionHelper \$dbHelper */
        \$dbHelper = \$application->getHelperSet()->get('db');

        \$connection = \$dbHelper->getConnection();

        if (! \$connection instanceof PoolingShardConnection) {
            if (count(\$managerNames) === 0) {
                throw new LogicException(sprintf(
                    \"Connection '%s' must implement shards configuration.\",
                    \$input->getOption('db')
                ));
            }

            throw new LogicException(sprintf(
                \"Connection of EntityManager '%s' must implement shards configuration.\",
                \$input->getOption('em')
            ));
        }

        \$connection->connect(\$input->getOption('shard'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command\\Helper;

use Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DoctrineCommandHelper as BaseDoctrineCommandHelper;
use Doctrine\\Bundle\\DoctrineBundle\\Registry;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use LogicException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use function count;
use function sprintf;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper extends BaseDoctrineCommandHelper
{
    public static function setApplicationHelper(Application \$application, InputInterface \$input) : void
    {
        \$container = \$application->getKernel()->getContainer();

        /** @var Registry \$doctrine */
        \$doctrine = \$container->get('doctrine');

        \$managerNames = \$doctrine->getManagerNames();

        if (\$input->getOption('db') !== null || count(\$managerNames) === 0) {
            self::setApplicationConnection(\$application, \$input->getOption('db'));
        } else {
            self::setApplicationEntityManager(\$application, \$input->getOption('em'));
        }

        if (\$input->getOption('shard') === null) {
            return;
        }

        /** @var ConnectionHelper \$dbHelper */
        \$dbHelper = \$application->getHelperSet()->get('db');

        \$connection = \$dbHelper->getConnection();

        if (! \$connection instanceof PoolingShardConnection) {
            if (count(\$managerNames) === 0) {
                throw new LogicException(sprintf(
                    \"Connection '%s' must implement shards configuration.\",
                    \$input->getOption('db')
                ));
            }

            throw new LogicException(sprintf(
                \"Connection of EntityManager '%s' must implement shards configuration.\",
                \$input->getOption('em')
            ));
        }

        \$connection->connect(\$input->getOption('shard'));
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Command/Helper/DoctrineCommandHelper.php");
    }
}
