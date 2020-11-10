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

/* vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php */
class __TwigTemplate_a255e01b9b05d70e78e159b060b7c6fa1f74cbbd6249c47a9354212f738f3464 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php"));

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

use Monolog\\Logger;
use Monolog\\Formatter\\JsonFormatter;
use PhpAmqpLib\\Message\\AMQPMessage;
use PhpAmqpLib\\Channel\\AMQPChannel;
use AMQPExchange;

class AmqpHandler extends AbstractProcessingHandler
{
    /**
     * @var AMQPExchange|AMQPChannel \$exchange
     */
    protected \$exchange;

    /**
     * @var string
     */
    protected \$exchangeName;

    /**
     * @param AMQPExchange|AMQPChannel \$exchange     AMQPExchange (php AMQP ext) or PHP AMQP lib channel, ready for use
     * @param string                   \$exchangeName
     * @param int                      \$level
     * @param bool                     \$bubble       Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$exchange, \$exchangeName = 'log', \$level = Logger::DEBUG, \$bubble = true)
    {
        if (\$exchange instanceof AMQPExchange) {
            \$exchange->setName(\$exchangeName);
        } elseif (\$exchange instanceof AMQPChannel) {
            \$this->exchangeName = \$exchangeName;
        } else {
            throw new \\InvalidArgumentException('PhpAmqpLib\\Channel\\AMQPChannel or AMQPExchange instance required');
        }
        \$this->exchange = \$exchange;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$data = \$record[\"formatted\"];
        \$routingKey = \$this->getRoutingKey(\$record);

        if (\$this->exchange instanceof AMQPExchange) {
            \$this->exchange->publish(
                \$data,
                \$routingKey,
                0,
                array(
                    'delivery_mode' => 2,
                    'content_type' => 'application/json',
                )
            );
        } else {
            \$this->exchange->basic_publish(
                \$this->createAmqpMessage(\$data),
                \$this->exchangeName,
                \$routingKey
            );
        }
    }

    /**
     * {@inheritDoc}
     */
    public function handleBatch(array \$records)
    {
        if (\$this->exchange instanceof AMQPExchange) {
            parent::handleBatch(\$records);

            return;
        }

        foreach (\$records as \$record) {
            if (!\$this->isHandling(\$record)) {
                continue;
            }

            \$record = \$this->processRecord(\$record);
            \$data = \$this->getFormatter()->format(\$record);

            \$this->exchange->batch_basic_publish(
                \$this->createAmqpMessage(\$data),
                \$this->exchangeName,
                \$this->getRoutingKey(\$record)
            );
        }

        \$this->exchange->publish_batch();
    }

    /**
     * Gets the routing key for the AMQP exchange
     *
     * @param  array  \$record
     * @return string
     */
    protected function getRoutingKey(array \$record)
    {
        \$routingKey = sprintf(
            '%s.%s',
            // Todo 2.0 remove substr call
            substr(\$record['level_name'], 0, 4),
            \$record['channel']
        );

        return strtolower(\$routingKey);
    }

    /**
     * @param  string      \$data
     * @return AMQPMessage
     */
    private function createAmqpMessage(\$data)
    {
        return new AMQPMessage(
            (string) \$data,
            array(
                'delivery_mode' => 2,
                'content_type' => 'application/json',
            )
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new JsonFormatter(JsonFormatter::BATCH_MODE_JSON, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php";
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

use Monolog\\Logger;
use Monolog\\Formatter\\JsonFormatter;
use PhpAmqpLib\\Message\\AMQPMessage;
use PhpAmqpLib\\Channel\\AMQPChannel;
use AMQPExchange;

class AmqpHandler extends AbstractProcessingHandler
{
    /**
     * @var AMQPExchange|AMQPChannel \$exchange
     */
    protected \$exchange;

    /**
     * @var string
     */
    protected \$exchangeName;

    /**
     * @param AMQPExchange|AMQPChannel \$exchange     AMQPExchange (php AMQP ext) or PHP AMQP lib channel, ready for use
     * @param string                   \$exchangeName
     * @param int                      \$level
     * @param bool                     \$bubble       Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$exchange, \$exchangeName = 'log', \$level = Logger::DEBUG, \$bubble = true)
    {
        if (\$exchange instanceof AMQPExchange) {
            \$exchange->setName(\$exchangeName);
        } elseif (\$exchange instanceof AMQPChannel) {
            \$this->exchangeName = \$exchangeName;
        } else {
            throw new \\InvalidArgumentException('PhpAmqpLib\\Channel\\AMQPChannel or AMQPExchange instance required');
        }
        \$this->exchange = \$exchange;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$data = \$record[\"formatted\"];
        \$routingKey = \$this->getRoutingKey(\$record);

        if (\$this->exchange instanceof AMQPExchange) {
            \$this->exchange->publish(
                \$data,
                \$routingKey,
                0,
                array(
                    'delivery_mode' => 2,
                    'content_type' => 'application/json',
                )
            );
        } else {
            \$this->exchange->basic_publish(
                \$this->createAmqpMessage(\$data),
                \$this->exchangeName,
                \$routingKey
            );
        }
    }

    /**
     * {@inheritDoc}
     */
    public function handleBatch(array \$records)
    {
        if (\$this->exchange instanceof AMQPExchange) {
            parent::handleBatch(\$records);

            return;
        }

        foreach (\$records as \$record) {
            if (!\$this->isHandling(\$record)) {
                continue;
            }

            \$record = \$this->processRecord(\$record);
            \$data = \$this->getFormatter()->format(\$record);

            \$this->exchange->batch_basic_publish(
                \$this->createAmqpMessage(\$data),
                \$this->exchangeName,
                \$this->getRoutingKey(\$record)
            );
        }

        \$this->exchange->publish_batch();
    }

    /**
     * Gets the routing key for the AMQP exchange
     *
     * @param  array  \$record
     * @return string
     */
    protected function getRoutingKey(array \$record)
    {
        \$routingKey = sprintf(
            '%s.%s',
            // Todo 2.0 remove substr call
            substr(\$record['level_name'], 0, 4),
            \$record['channel']
        );

        return strtolower(\$routingKey);
    }

    /**
     * @param  string      \$data
     * @return AMQPMessage
     */
    private function createAmqpMessage(\$data)
    {
        return new AMQPMessage(
            (string) \$data,
            array(
                'delivery_mode' => 2,
                'content_type' => 'application/json',
            )
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new JsonFormatter(JsonFormatter::BATCH_MODE_JSON, false);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php");
    }
}
