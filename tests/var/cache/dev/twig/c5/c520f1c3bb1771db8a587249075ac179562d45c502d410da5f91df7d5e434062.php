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

/* vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php */
class __TwigTemplate_ad2716ec614ecfcb583b576ffa3667a74c7ea96c5a2740f4ed00512f255407ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Predis\\Response\\ErrorInterface;
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

/**
 * Redis based session storage handler based on the Redis class
 * provided by the PHP redis extension.
 *
 * @author Dalibor Karlović <dalibor@flexolabs.io>
 */
class RedisSessionHandler extends AbstractSessionHandler
{
    private \$redis;

    /**
     * @var string Key prefix for shared environments
     */
    private \$prefix;

    /**
     * List of available options:
     *  * prefix: The prefix to use for the keys in order to avoid collision on the Redis server.
     *
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface|RedisProxy \$redis
     * @param array                                                               \$options An associative array of options
     *
     * @throws \\InvalidArgumentException When unsupported client or options are passed
     */
    public function __construct(\$redis, array \$options = [])
    {
        if (
            !\$redis instanceof \\Redis &&
            !\$redis instanceof \\RedisArray &&
            !\$redis instanceof \\RedisCluster &&
            !\$redis instanceof \\Predis\\ClientInterface &&
            !\$redis instanceof RedisProxy &&
            !\$redis instanceof RedisClusterProxy
        ) {
            throw new \\InvalidArgumentException(sprintf('%s() expects parameter 1 to be Redis, RedisArray, RedisCluster or Predis\\ClientInterface, %s given', __METHOD__, \\is_object(\$redis) ? \\get_class(\$redis) : \\gettype(\$redis)));
        }

        if (\$diff = array_diff(array_keys(\$options), ['prefix'])) {
            throw new \\InvalidArgumentException(sprintf('The following options are not supported \"%s\"', implode(', ', \$diff)));
        }

        \$this->redis = \$redis;
        \$this->prefix = \$options['prefix'] ?? 'sf_s';
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId): string
    {
        return \$this->redis->get(\$this->prefix.\$sessionId) ?: '';
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data): bool
    {
        \$result = \$this->redis->setEx(\$this->prefix.\$sessionId, (int) ini_get('session.gc_maxlifetime'), \$data);

        return \$result && !\$result instanceof ErrorInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId): bool
    {
        \$this->redis->del(\$this->prefix.\$sessionId);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function gc(\$maxlifetime): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return (bool) \$this->redis->expire(\$this->prefix.\$sessionId, (int) ini_get('session.gc_maxlifetime'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Predis\\Response\\ErrorInterface;
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

/**
 * Redis based session storage handler based on the Redis class
 * provided by the PHP redis extension.
 *
 * @author Dalibor Karlović <dalibor@flexolabs.io>
 */
class RedisSessionHandler extends AbstractSessionHandler
{
    private \$redis;

    /**
     * @var string Key prefix for shared environments
     */
    private \$prefix;

    /**
     * List of available options:
     *  * prefix: The prefix to use for the keys in order to avoid collision on the Redis server.
     *
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface|RedisProxy \$redis
     * @param array                                                               \$options An associative array of options
     *
     * @throws \\InvalidArgumentException When unsupported client or options are passed
     */
    public function __construct(\$redis, array \$options = [])
    {
        if (
            !\$redis instanceof \\Redis &&
            !\$redis instanceof \\RedisArray &&
            !\$redis instanceof \\RedisCluster &&
            !\$redis instanceof \\Predis\\ClientInterface &&
            !\$redis instanceof RedisProxy &&
            !\$redis instanceof RedisClusterProxy
        ) {
            throw new \\InvalidArgumentException(sprintf('%s() expects parameter 1 to be Redis, RedisArray, RedisCluster or Predis\\ClientInterface, %s given', __METHOD__, \\is_object(\$redis) ? \\get_class(\$redis) : \\gettype(\$redis)));
        }

        if (\$diff = array_diff(array_keys(\$options), ['prefix'])) {
            throw new \\InvalidArgumentException(sprintf('The following options are not supported \"%s\"', implode(', ', \$diff)));
        }

        \$this->redis = \$redis;
        \$this->prefix = \$options['prefix'] ?? 'sf_s';
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId): string
    {
        return \$this->redis->get(\$this->prefix.\$sessionId) ?: '';
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data): bool
    {
        \$result = \$this->redis->setEx(\$this->prefix.\$sessionId, (int) ini_get('session.gc_maxlifetime'), \$data);

        return \$result && !\$result instanceof ErrorInterface;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId): bool
    {
        \$this->redis->del(\$this->prefix.\$sessionId);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function gc(\$maxlifetime): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return (bool) \$this->redis->expire(\$this->prefix.\$sessionId, (int) ini_get('session.gc_maxlifetime'));
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php");
    }
}
