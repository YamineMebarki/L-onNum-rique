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

/* vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php */
class __TwigTemplate_b8e4498f602c51aecd0339807776fe06d2b5ff7c27b7f36a89e3ff0c89a9d392 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php"));

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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\AbstractHandler;
use Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Formatter\\VarDumperFormatter;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ServerLogHandler extends AbstractHandler
{
    private \$host;
    private \$context;
    private \$socket;

    public function __construct(string \$host, int \$level = Logger::DEBUG, bool \$bubble = true, array \$context = [])
    {
        parent::__construct(\$level, \$bubble);

        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->context = stream_context_create(\$context);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        set_error_handler(self::class.'::nullErrorHandler');

        try {
            if (!\$this->socket = \$this->socket ?: \$this->createSocket()) {
                return false === \$this->bubble;
            }
        } finally {
            restore_error_handler();
        }

        \$recordFormatted = \$this->formatRecord(\$record);

        set_error_handler(self::class.'::nullErrorHandler');

        try {
            if (-1 === stream_socket_sendto(\$this->socket, \$recordFormatted)) {
                stream_socket_shutdown(\$this->socket, STREAM_SHUT_RDWR);

                // Let's retry: the persistent connection might just be stale
                if (\$this->socket = \$this->createSocket()) {
                    stream_socket_sendto(\$this->socket, \$recordFormatted);
                }
            }
        } finally {
            restore_error_handler();
        }

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new VarDumperFormatter();
    }

    private static function nullErrorHandler()
    {
    }

    private function createSocket()
    {
        \$socket = stream_socket_client(\$this->host, \$errno, \$errstr, 0, STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT | STREAM_CLIENT_PERSISTENT, \$this->context);

        if (\$socket) {
            stream_set_blocking(\$socket, false);
        }

        return \$socket;
    }

    private function formatRecord(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = \$processor(\$record);
            }
        }

        \$recordFormatted = \$this->getFormatter()->format(\$record);

        foreach (['log_uuid', 'uuid', 'uid'] as \$key) {
            if (isset(\$record['extra'][\$key])) {
                \$recordFormatted['log_id'] = \$record['extra'][\$key];
                break;
            }
        }

        return base64_encode(serialize(\$recordFormatted)).\"\\n\";
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php";
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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\AbstractHandler;
use Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Formatter\\VarDumperFormatter;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ServerLogHandler extends AbstractHandler
{
    private \$host;
    private \$context;
    private \$socket;

    public function __construct(string \$host, int \$level = Logger::DEBUG, bool \$bubble = true, array \$context = [])
    {
        parent::__construct(\$level, \$bubble);

        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->context = stream_context_create(\$context);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        set_error_handler(self::class.'::nullErrorHandler');

        try {
            if (!\$this->socket = \$this->socket ?: \$this->createSocket()) {
                return false === \$this->bubble;
            }
        } finally {
            restore_error_handler();
        }

        \$recordFormatted = \$this->formatRecord(\$record);

        set_error_handler(self::class.'::nullErrorHandler');

        try {
            if (-1 === stream_socket_sendto(\$this->socket, \$recordFormatted)) {
                stream_socket_shutdown(\$this->socket, STREAM_SHUT_RDWR);

                // Let's retry: the persistent connection might just be stale
                if (\$this->socket = \$this->createSocket()) {
                    stream_socket_sendto(\$this->socket, \$recordFormatted);
                }
            }
        } finally {
            restore_error_handler();
        }

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new VarDumperFormatter();
    }

    private static function nullErrorHandler()
    {
    }

    private function createSocket()
    {
        \$socket = stream_socket_client(\$this->host, \$errno, \$errstr, 0, STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT | STREAM_CLIENT_PERSISTENT, \$this->context);

        if (\$socket) {
            stream_set_blocking(\$socket, false);
        }

        return \$socket;
    }

    private function formatRecord(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = \$processor(\$record);
            }
        }

        \$recordFormatted = \$this->getFormatter()->format(\$record);

        foreach (['log_uuid', 'uuid', 'uid'] as \$key) {
            if (isset(\$record['extra'][\$key])) {
                \$recordFormatted['log_id'] = \$record['extra'][\$key];
                break;
            }
        }

        return base64_encode(serialize(\$recordFormatted)).\"\\n\";
    }
}
", "vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/ServerLogHandler.php");
    }
}
