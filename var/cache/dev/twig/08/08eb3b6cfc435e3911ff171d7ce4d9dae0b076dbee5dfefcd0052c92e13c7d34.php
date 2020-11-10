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

/* vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php */
class __TwigTemplate_c7e75449144cd4fe43abe373b929494e93d36d458cacd8ba0e337efebff1e4aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php"));

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

namespace Monolog\\Handler\\SyslogUdp;

class UdpSocket
{
    const DATAGRAM_MAX_LENGTH = 65023;

    protected \$ip;
    protected \$port;
    protected \$socket;

    public function __construct(\$ip, \$port = 514)
    {
        \$this->ip = \$ip;
        \$this->port = \$port;
        \$this->socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    }

    public function write(\$line, \$header = \"\")
    {
        \$this->send(\$this->assembleMessage(\$line, \$header));
    }

    public function close()
    {
        if (is_resource(\$this->socket)) {
            socket_close(\$this->socket);
            \$this->socket = null;
        }
    }

    protected function send(\$chunk)
    {
        if (!is_resource(\$this->socket)) {
            throw new \\LogicException('The UdpSocket to '.\$this->ip.':'.\$this->port.' has been closed and can not be written to anymore');
        }
        socket_sendto(\$this->socket, \$chunk, strlen(\$chunk), \$flags = 0, \$this->ip, \$this->port);
    }

    protected function assembleMessage(\$line, \$header)
    {
        \$chunkSize = self::DATAGRAM_MAX_LENGTH - strlen(\$header);

        return \$header . substr(\$line, 0, \$chunkSize);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php";
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

namespace Monolog\\Handler\\SyslogUdp;

class UdpSocket
{
    const DATAGRAM_MAX_LENGTH = 65023;

    protected \$ip;
    protected \$port;
    protected \$socket;

    public function __construct(\$ip, \$port = 514)
    {
        \$this->ip = \$ip;
        \$this->port = \$port;
        \$this->socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    }

    public function write(\$line, \$header = \"\")
    {
        \$this->send(\$this->assembleMessage(\$line, \$header));
    }

    public function close()
    {
        if (is_resource(\$this->socket)) {
            socket_close(\$this->socket);
            \$this->socket = null;
        }
    }

    protected function send(\$chunk)
    {
        if (!is_resource(\$this->socket)) {
            throw new \\LogicException('The UdpSocket to '.\$this->ip.':'.\$this->port.' has been closed and can not be written to anymore');
        }
        socket_sendto(\$this->socket, \$chunk, strlen(\$chunk), \$flags = 0, \$this->ip, \$this->port);
    }

    protected function assembleMessage(\$line, \$header)
    {
        \$chunkSize = self::DATAGRAM_MAX_LENGTH - strlen(\$header);

        return \$header . substr(\$line, 0, \$chunkSize);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php");
    }
}
