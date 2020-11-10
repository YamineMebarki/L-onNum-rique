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

/* vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php */
class __TwigTemplate_328d5a710f25c09850b2473f0d666895165ef1023ef498e00c48f373370b8d53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;

/**
 * Logs to a Redis key using rpush
 *
 * usage example:
 *
 *   \$log = new Logger('application');
 *   \$redis = new RedisHandler(new Predis\\Client(\"tcp://localhost:6379\"), \"log\", \"prod\");
 *   \$log->pushHandler(\$redis);
 *
 * @author Thomas Tourlourat <thomas@tourlourat.com>
 */
class RedisHandler extends AbstractProcessingHandler
{
    private \$redisClient;
    private \$redisKey;
    protected \$capSize;

    /**
     * @param \\Predis\\Client|\\Redis \$redis   The redis instance
     * @param string                \$key     The key name to push records to
     * @param int                   \$level   The minimum logging level at which this handler will be triggered
     * @param bool                  \$bubble  Whether the messages that are handled can bubble up the stack or not
     * @param int                   \$capSize Number of entries to limit list size to
     */
    public function __construct(\$redis, \$key, \$level = Logger::DEBUG, \$bubble = true, \$capSize = false)
    {
        if (!((\$redis instanceof \\Predis\\Client) || (\$redis instanceof \\Redis))) {
            throw new \\InvalidArgumentException('Predis\\Client or Redis instance required');
        }

        \$this->redisClient = \$redis;
        \$this->redisKey = \$key;
        \$this->capSize = \$capSize;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        if (\$this->capSize) {
            \$this->writeCapped(\$record);
        } else {
            \$this->redisClient->rpush(\$this->redisKey, \$record[\"formatted\"]);
        }
    }

    /**
     * Write and cap the collection
     * Writes the record to the redis list and caps its
     *
     * @param  array \$record associative record array
     * @return void
     */
    protected function writeCapped(array \$record)
    {
        if (\$this->redisClient instanceof \\Redis) {
            \$this->redisClient->multi()
                ->rpush(\$this->redisKey, \$record[\"formatted\"])
                ->ltrim(\$this->redisKey, -\$this->capSize, -1)
                ->exec();
        } else {
            \$redisKey = \$this->redisKey;
            \$capSize = \$this->capSize;
            \$this->redisClient->transaction(function (\$tx) use (\$record, \$redisKey, \$capSize) {
                \$tx->rpush(\$redisKey, \$record[\"formatted\"]);
                \$tx->ltrim(\$redisKey, -\$capSize, -1);
            });
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;

/**
 * Logs to a Redis key using rpush
 *
 * usage example:
 *
 *   \$log = new Logger('application');
 *   \$redis = new RedisHandler(new Predis\\Client(\"tcp://localhost:6379\"), \"log\", \"prod\");
 *   \$log->pushHandler(\$redis);
 *
 * @author Thomas Tourlourat <thomas@tourlourat.com>
 */
class RedisHandler extends AbstractProcessingHandler
{
    private \$redisClient;
    private \$redisKey;
    protected \$capSize;

    /**
     * @param \\Predis\\Client|\\Redis \$redis   The redis instance
     * @param string                \$key     The key name to push records to
     * @param int                   \$level   The minimum logging level at which this handler will be triggered
     * @param bool                  \$bubble  Whether the messages that are handled can bubble up the stack or not
     * @param int                   \$capSize Number of entries to limit list size to
     */
    public function __construct(\$redis, \$key, \$level = Logger::DEBUG, \$bubble = true, \$capSize = false)
    {
        if (!((\$redis instanceof \\Predis\\Client) || (\$redis instanceof \\Redis))) {
            throw new \\InvalidArgumentException('Predis\\Client or Redis instance required');
        }

        \$this->redisClient = \$redis;
        \$this->redisKey = \$key;
        \$this->capSize = \$capSize;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        if (\$this->capSize) {
            \$this->writeCapped(\$record);
        } else {
            \$this->redisClient->rpush(\$this->redisKey, \$record[\"formatted\"]);
        }
    }

    /**
     * Write and cap the collection
     * Writes the record to the redis list and caps its
     *
     * @param  array \$record associative record array
     * @return void
     */
    protected function writeCapped(array \$record)
    {
        if (\$this->redisClient instanceof \\Redis) {
            \$this->redisClient->multi()
                ->rpush(\$this->redisKey, \$record[\"formatted\"])
                ->ltrim(\$this->redisKey, -\$this->capSize, -1)
                ->exec();
        } else {
            \$redisKey = \$this->redisKey;
            \$capSize = \$this->capSize;
            \$this->redisClient->transaction(function (\$tx) use (\$record, \$redisKey, \$capSize) {
                \$tx->rpush(\$redisKey, \$record[\"formatted\"]);
                \$tx->ltrim(\$redisKey, -\$capSize, -1);
            });
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter();
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php");
    }
}
