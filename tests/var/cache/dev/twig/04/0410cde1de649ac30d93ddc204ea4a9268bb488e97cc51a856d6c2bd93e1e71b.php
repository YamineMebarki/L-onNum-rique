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

/* vendor/symfony/var-dumper/Server/DumpServer.php */
class __TwigTemplate_c8352f38abaa15d02c0f84512c864b491bc4b5e2fcdad9eeac84a7fbcbb20668 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Server/DumpServer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Server/DumpServer.php"));

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

namespace Symfony\\Component\\VarDumper\\Server;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * A server collecting Data clones sent by a ServerDumper.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class DumpServer
{
    private \$host;
    private \$socket;
    private \$logger;

    public function __construct(string \$host, LoggerInterface \$logger = null)
    {
        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->logger = \$logger;
    }

    public function start(): void
    {
        if (!\$this->socket = stream_socket_server(\$this->host, \$errno, \$errstr)) {
            throw new \\RuntimeException(sprintf('Server start failed on \"%s\": %s %s.', \$this->host, \$errstr, \$errno));
        }
    }

    public function listen(callable \$callback): void
    {
        if (null === \$this->socket) {
            \$this->start();
        }

        foreach (\$this->getMessages() as \$clientId => \$message) {
            \$payload = @unserialize(base64_decode(\$message), ['allowed_classes' => [Data::class, Stub::class]]);

            // Impossible to decode the message, give up.
            if (false === \$payload) {
                if (\$this->logger) {
                    \$this->logger->warning('Unable to decode a message from {clientId} client.', ['clientId' => \$clientId]);
                }

                continue;
            }

            if (!\\is_array(\$payload) || \\count(\$payload) < 2 || !\$payload[0] instanceof Data || !\\is_array(\$payload[1])) {
                if (\$this->logger) {
                    \$this->logger->warning('Invalid payload from {clientId} client. Expected an array of two elements (Data \$data, array \$context)', ['clientId' => \$clientId]);
                }

                continue;
            }

            list(\$data, \$context) = \$payload;

            \$callback(\$data, \$context, \$clientId);
        }
    }

    public function getHost(): string
    {
        return \$this->host;
    }

    private function getMessages(): iterable
    {
        \$sockets = [(int) \$this->socket => \$this->socket];
        \$write = [];

        while (true) {
            \$read = \$sockets;
            stream_select(\$read, \$write, \$write, null);

            foreach (\$read as \$stream) {
                if (\$this->socket === \$stream) {
                    \$stream = stream_socket_accept(\$this->socket);
                    \$sockets[(int) \$stream] = \$stream;
                } elseif (feof(\$stream)) {
                    unset(\$sockets[(int) \$stream]);
                    fclose(\$stream);
                } else {
                    yield (int) \$stream => fgets(\$stream);
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Server/DumpServer.php";
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

namespace Symfony\\Component\\VarDumper\\Server;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * A server collecting Data clones sent by a ServerDumper.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class DumpServer
{
    private \$host;
    private \$socket;
    private \$logger;

    public function __construct(string \$host, LoggerInterface \$logger = null)
    {
        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->logger = \$logger;
    }

    public function start(): void
    {
        if (!\$this->socket = stream_socket_server(\$this->host, \$errno, \$errstr)) {
            throw new \\RuntimeException(sprintf('Server start failed on \"%s\": %s %s.', \$this->host, \$errstr, \$errno));
        }
    }

    public function listen(callable \$callback): void
    {
        if (null === \$this->socket) {
            \$this->start();
        }

        foreach (\$this->getMessages() as \$clientId => \$message) {
            \$payload = @unserialize(base64_decode(\$message), ['allowed_classes' => [Data::class, Stub::class]]);

            // Impossible to decode the message, give up.
            if (false === \$payload) {
                if (\$this->logger) {
                    \$this->logger->warning('Unable to decode a message from {clientId} client.', ['clientId' => \$clientId]);
                }

                continue;
            }

            if (!\\is_array(\$payload) || \\count(\$payload) < 2 || !\$payload[0] instanceof Data || !\\is_array(\$payload[1])) {
                if (\$this->logger) {
                    \$this->logger->warning('Invalid payload from {clientId} client. Expected an array of two elements (Data \$data, array \$context)', ['clientId' => \$clientId]);
                }

                continue;
            }

            list(\$data, \$context) = \$payload;

            \$callback(\$data, \$context, \$clientId);
        }
    }

    public function getHost(): string
    {
        return \$this->host;
    }

    private function getMessages(): iterable
    {
        \$sockets = [(int) \$this->socket => \$this->socket];
        \$write = [];

        while (true) {
            \$read = \$sockets;
            stream_select(\$read, \$write, \$write, null);

            foreach (\$read as \$stream) {
                if (\$this->socket === \$stream) {
                    \$stream = stream_socket_accept(\$this->socket);
                    \$sockets[(int) \$stream] = \$stream;
                } elseif (feof(\$stream)) {
                    unset(\$sockets[(int) \$stream]);
                    fclose(\$stream);
                } else {
                    yield (int) \$stream => fgets(\$stream);
                }
            }
        }
    }
}
", "vendor/symfony/var-dumper/Server/DumpServer.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Server/DumpServer.php");
    }
}
