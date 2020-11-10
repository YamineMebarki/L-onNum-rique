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

/* vendor/symfony/var-dumper/Caster/AmqpCaster.php */
class __TwigTemplate_7d0eb93e366160387f65a303ff12515d73bca44df2fabd9013bf7fe564806272 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/AmqpCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/AmqpCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Amqp related classes to array representation.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class AmqpCaster
{
    private static \$flags = [
        AMQP_DURABLE => 'AMQP_DURABLE',
        AMQP_PASSIVE => 'AMQP_PASSIVE',
        AMQP_EXCLUSIVE => 'AMQP_EXCLUSIVE',
        AMQP_AUTODELETE => 'AMQP_AUTODELETE',
        AMQP_INTERNAL => 'AMQP_INTERNAL',
        AMQP_NOLOCAL => 'AMQP_NOLOCAL',
        AMQP_AUTOACK => 'AMQP_AUTOACK',
        AMQP_IFEMPTY => 'AMQP_IFEMPTY',
        AMQP_IFUNUSED => 'AMQP_IFUNUSED',
        AMQP_MANDATORY => 'AMQP_MANDATORY',
        AMQP_IMMEDIATE => 'AMQP_IMMEDIATE',
        AMQP_MULTIPLE => 'AMQP_MULTIPLE',
        AMQP_NOWAIT => 'AMQP_NOWAIT',
        AMQP_REQUEUE => 'AMQP_REQUEUE',
    ];

    private static \$exchangeTypes = [
        AMQP_EX_TYPE_DIRECT => 'AMQP_EX_TYPE_DIRECT',
        AMQP_EX_TYPE_FANOUT => 'AMQP_EX_TYPE_FANOUT',
        AMQP_EX_TYPE_TOPIC => 'AMQP_EX_TYPE_TOPIC',
        AMQP_EX_TYPE_HEADERS => 'AMQP_EX_TYPE_HEADERS',
    ];

    public static function castConnection(\\AMQPConnection \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPConnection\\x00login\"])) {
            return \$a;
        }

        // BC layer in the amqp lib
        if (method_exists(\$c, 'getReadTimeout')) {
            \$timeout = \$c->getReadTimeout();
        } else {
            \$timeout = \$c->getTimeout();
        }

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
            \$prefix.'login' => \$c->getLogin(),
            \$prefix.'password' => \$c->getPassword(),
            \$prefix.'host' => \$c->getHost(),
            \$prefix.'vhost' => \$c->getVhost(),
            \$prefix.'port' => \$c->getPort(),
            \$prefix.'read_timeout' => \$timeout,
        ];

        return \$a;
    }

    public static function castChannel(\\AMQPChannel \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
            \$prefix.'channel_id' => \$c->getChannelId(),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPChannel\\x00connection\"])) {
            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'prefetch_size' => \$c->getPrefetchSize(),
            \$prefix.'prefetch_count' => \$c->getPrefetchCount(),
        ];

        return \$a;
    }

    public static function castQueue(\\AMQPQueue \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'flags' => self::extractFlags(\$c->getFlags()),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPQueue\\x00name\"])) {
            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'channel' => \$c->getChannel(),
            \$prefix.'name' => \$c->getName(),
            \$prefix.'arguments' => \$c->getArguments(),
        ];

        return \$a;
    }

    public static function castExchange(\\AMQPExchange \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'flags' => self::extractFlags(\$c->getFlags()),
        ];

        \$type = isset(self::\$exchangeTypes[\$c->getType()]) ? new ConstStub(self::\$exchangeTypes[\$c->getType()], \$c->getType()) : \$c->getType();

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPExchange\\x00name\"])) {
            \$a[\"\\x00AMQPExchange\\x00type\"] = \$type;

            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'channel' => \$c->getChannel(),
            \$prefix.'name' => \$c->getName(),
            \$prefix.'type' => \$type,
            \$prefix.'arguments' => \$c->getArguments(),
        ];

        return \$a;
    }

    public static function castEnvelope(\\AMQPEnvelope \$c, array \$a, Stub \$stub, \$isNested, \$filter = 0)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$deliveryMode = new ConstStub(\$c->getDeliveryMode().(2 === \$c->getDeliveryMode() ? ' (persistent)' : ' (non-persistent)'), \$c->getDeliveryMode());

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPEnvelope\\x00body\"])) {
            \$a[\"\\0AMQPEnvelope\\0delivery_mode\"] = \$deliveryMode;

            return \$a;
        }

        if (!(\$filter & Caster::EXCLUDE_VERBOSE)) {
            \$a += [\$prefix.'body' => \$c->getBody()];
        }

        \$a += [
            \$prefix.'delivery_tag' => \$c->getDeliveryTag(),
            \$prefix.'is_redelivery' => \$c->isRedelivery(),
            \$prefix.'exchange_name' => \$c->getExchangeName(),
            \$prefix.'routing_key' => \$c->getRoutingKey(),
            \$prefix.'content_type' => \$c->getContentType(),
            \$prefix.'content_encoding' => \$c->getContentEncoding(),
            \$prefix.'headers' => \$c->getHeaders(),
            \$prefix.'delivery_mode' => \$deliveryMode,
            \$prefix.'priority' => \$c->getPriority(),
            \$prefix.'correlation_id' => \$c->getCorrelationId(),
            \$prefix.'reply_to' => \$c->getReplyTo(),
            \$prefix.'expiration' => \$c->getExpiration(),
            \$prefix.'message_id' => \$c->getMessageId(),
            \$prefix.'timestamp' => \$c->getTimeStamp(),
            \$prefix.'type' => \$c->getType(),
            \$prefix.'user_id' => \$c->getUserId(),
            \$prefix.'app_id' => \$c->getAppId(),
        ];

        return \$a;
    }

    private static function extractFlags(\$flags)
    {
        \$flagsArray = [];

        foreach (self::\$flags as \$value => \$name) {
            if (\$flags & \$value) {
                \$flagsArray[] = \$name;
            }
        }

        if (!\$flagsArray) {
            \$flagsArray = ['AMQP_NOPARAM'];
        }

        return new ConstStub(implode('|', \$flagsArray), \$flags);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/AmqpCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Amqp related classes to array representation.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class AmqpCaster
{
    private static \$flags = [
        AMQP_DURABLE => 'AMQP_DURABLE',
        AMQP_PASSIVE => 'AMQP_PASSIVE',
        AMQP_EXCLUSIVE => 'AMQP_EXCLUSIVE',
        AMQP_AUTODELETE => 'AMQP_AUTODELETE',
        AMQP_INTERNAL => 'AMQP_INTERNAL',
        AMQP_NOLOCAL => 'AMQP_NOLOCAL',
        AMQP_AUTOACK => 'AMQP_AUTOACK',
        AMQP_IFEMPTY => 'AMQP_IFEMPTY',
        AMQP_IFUNUSED => 'AMQP_IFUNUSED',
        AMQP_MANDATORY => 'AMQP_MANDATORY',
        AMQP_IMMEDIATE => 'AMQP_IMMEDIATE',
        AMQP_MULTIPLE => 'AMQP_MULTIPLE',
        AMQP_NOWAIT => 'AMQP_NOWAIT',
        AMQP_REQUEUE => 'AMQP_REQUEUE',
    ];

    private static \$exchangeTypes = [
        AMQP_EX_TYPE_DIRECT => 'AMQP_EX_TYPE_DIRECT',
        AMQP_EX_TYPE_FANOUT => 'AMQP_EX_TYPE_FANOUT',
        AMQP_EX_TYPE_TOPIC => 'AMQP_EX_TYPE_TOPIC',
        AMQP_EX_TYPE_HEADERS => 'AMQP_EX_TYPE_HEADERS',
    ];

    public static function castConnection(\\AMQPConnection \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPConnection\\x00login\"])) {
            return \$a;
        }

        // BC layer in the amqp lib
        if (method_exists(\$c, 'getReadTimeout')) {
            \$timeout = \$c->getReadTimeout();
        } else {
            \$timeout = \$c->getTimeout();
        }

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
            \$prefix.'login' => \$c->getLogin(),
            \$prefix.'password' => \$c->getPassword(),
            \$prefix.'host' => \$c->getHost(),
            \$prefix.'vhost' => \$c->getVhost(),
            \$prefix.'port' => \$c->getPort(),
            \$prefix.'read_timeout' => \$timeout,
        ];

        return \$a;
    }

    public static function castChannel(\\AMQPChannel \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'is_connected' => \$c->isConnected(),
            \$prefix.'channel_id' => \$c->getChannelId(),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPChannel\\x00connection\"])) {
            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'prefetch_size' => \$c->getPrefetchSize(),
            \$prefix.'prefetch_count' => \$c->getPrefetchCount(),
        ];

        return \$a;
    }

    public static function castQueue(\\AMQPQueue \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'flags' => self::extractFlags(\$c->getFlags()),
        ];

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPQueue\\x00name\"])) {
            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'channel' => \$c->getChannel(),
            \$prefix.'name' => \$c->getName(),
            \$prefix.'arguments' => \$c->getArguments(),
        ];

        return \$a;
    }

    public static function castExchange(\\AMQPExchange \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$a += [
            \$prefix.'flags' => self::extractFlags(\$c->getFlags()),
        ];

        \$type = isset(self::\$exchangeTypes[\$c->getType()]) ? new ConstStub(self::\$exchangeTypes[\$c->getType()], \$c->getType()) : \$c->getType();

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPExchange\\x00name\"])) {
            \$a[\"\\x00AMQPExchange\\x00type\"] = \$type;

            return \$a;
        }

        \$a += [
            \$prefix.'connection' => \$c->getConnection(),
            \$prefix.'channel' => \$c->getChannel(),
            \$prefix.'name' => \$c->getName(),
            \$prefix.'type' => \$type,
            \$prefix.'arguments' => \$c->getArguments(),
        ];

        return \$a;
    }

    public static function castEnvelope(\\AMQPEnvelope \$c, array \$a, Stub \$stub, \$isNested, \$filter = 0)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;

        \$deliveryMode = new ConstStub(\$c->getDeliveryMode().(2 === \$c->getDeliveryMode() ? ' (persistent)' : ' (non-persistent)'), \$c->getDeliveryMode());

        // Recent version of the extension already expose private properties
        if (isset(\$a[\"\\x00AMQPEnvelope\\x00body\"])) {
            \$a[\"\\0AMQPEnvelope\\0delivery_mode\"] = \$deliveryMode;

            return \$a;
        }

        if (!(\$filter & Caster::EXCLUDE_VERBOSE)) {
            \$a += [\$prefix.'body' => \$c->getBody()];
        }

        \$a += [
            \$prefix.'delivery_tag' => \$c->getDeliveryTag(),
            \$prefix.'is_redelivery' => \$c->isRedelivery(),
            \$prefix.'exchange_name' => \$c->getExchangeName(),
            \$prefix.'routing_key' => \$c->getRoutingKey(),
            \$prefix.'content_type' => \$c->getContentType(),
            \$prefix.'content_encoding' => \$c->getContentEncoding(),
            \$prefix.'headers' => \$c->getHeaders(),
            \$prefix.'delivery_mode' => \$deliveryMode,
            \$prefix.'priority' => \$c->getPriority(),
            \$prefix.'correlation_id' => \$c->getCorrelationId(),
            \$prefix.'reply_to' => \$c->getReplyTo(),
            \$prefix.'expiration' => \$c->getExpiration(),
            \$prefix.'message_id' => \$c->getMessageId(),
            \$prefix.'timestamp' => \$c->getTimeStamp(),
            \$prefix.'type' => \$c->getType(),
            \$prefix.'user_id' => \$c->getUserId(),
            \$prefix.'app_id' => \$c->getAppId(),
        ];

        return \$a;
    }

    private static function extractFlags(\$flags)
    {
        \$flagsArray = [];

        foreach (self::\$flags as \$value => \$name) {
            if (\$flags & \$value) {
                \$flagsArray[] = \$name;
            }
        }

        if (!\$flagsArray) {
            \$flagsArray = ['AMQP_NOPARAM'];
        }

        return new ConstStub(implode('|', \$flagsArray), \$flags);
    }
}
", "vendor/symfony/var-dumper/Caster/AmqpCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/AmqpCaster.php");
    }
}
