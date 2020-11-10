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

/* vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php */
class __TwigTemplate_deb624afc215db0f1a71515c2d658ef5de72aeece3675815001d9ac7e07ea8c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use Predis\\Connection\\StreamConnection;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;

class PredisAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::\$redis = new \\Predis\\Client(['host' => getenv('REDIS_HOST')]);
    }

    public function testCreateConnection()
    {
        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisAdapter::createConnection('redis://'.\$redisHost.'/1', ['class' => \\Predis\\Client::class, 'timeout' => 3]);
        \$this->assertInstanceOf(\\Predis\\Client::class, \$redis);

        \$connection = \$redis->getConnection();
        \$this->assertInstanceOf(StreamConnection::class, \$connection);

        \$params = [
            'scheme' => 'tcp',
            'host' => \$redisHost,
            'port' => 6379,
            'persistent' => 0,
            'timeout' => 3,
            'read_write_timeout' => 0,
            'tcp_nodelay' => true,
            'database' => '1',
        ];
        \$this->assertSame(\$params, \$connection->getParameters()->toArray());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use Predis\\Connection\\StreamConnection;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;

class PredisAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::\$redis = new \\Predis\\Client(['host' => getenv('REDIS_HOST')]);
    }

    public function testCreateConnection()
    {
        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisAdapter::createConnection('redis://'.\$redisHost.'/1', ['class' => \\Predis\\Client::class, 'timeout' => 3]);
        \$this->assertInstanceOf(\\Predis\\Client::class, \$redis);

        \$connection = \$redis->getConnection();
        \$this->assertInstanceOf(StreamConnection::class, \$connection);

        \$params = [
            'scheme' => 'tcp',
            'host' => \$redisHost,
            'port' => 6379,
            'persistent' => 0,
            'timeout' => 3,
            'read_write_timeout' => 0,
            'tcp_nodelay' => true,
            'database' => '1',
        ];
        \$this->assertSame(\$params, \$connection->getParameters()->toArray());
    }
}
", "vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/PredisAdapterTest.php");
    }
}
