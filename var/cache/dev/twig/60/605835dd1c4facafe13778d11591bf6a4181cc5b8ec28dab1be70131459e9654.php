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

/* vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php */
class __TwigTemplate_470e6badb92a2b6d525dc0c531d7b46fff9db29e5428fffc57b974c7cccbe65b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php"));

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

/**
 * Logs to Cube.
 *
 * @link http://square.github.com/cube/
 * @author Wan Chen <kami@kamisama.me>
 */
class CubeHandler extends AbstractProcessingHandler
{
    private \$udpConnection;
    private \$httpConnection;
    private \$scheme;
    private \$host;
    private \$port;
    private \$acceptedSchemes = array('http', 'udp');

    /**
     * Create a Cube handler
     *
     * @throws \\UnexpectedValueException when given url is not a valid url.
     *                                   A valid url must consist of three parts : protocol://host:port
     *                                   Only valid protocols used by Cube are http and udp
     */
    public function __construct(\$url, \$level = Logger::DEBUG, \$bubble = true)
    {
        \$urlInfo = parse_url(\$url);

        if (!isset(\$urlInfo['scheme'], \$urlInfo['host'], \$urlInfo['port'])) {
            throw new \\UnexpectedValueException('URL \"'.\$url.'\" is not valid');
        }

        if (!in_array(\$urlInfo['scheme'], \$this->acceptedSchemes)) {
            throw new \\UnexpectedValueException(
                'Invalid protocol (' . \$urlInfo['scheme']  . ').'
                . ' Valid options are ' . implode(', ', \$this->acceptedSchemes));
        }

        \$this->scheme = \$urlInfo['scheme'];
        \$this->host = \$urlInfo['host'];
        \$this->port = \$urlInfo['port'];

        parent::__construct(\$level, \$bubble);
    }

    /**
     * Establish a connection to an UDP socket
     *
     * @throws \\LogicException           when unable to connect to the socket
     * @throws MissingExtensionException when there is no socket extension
     */
    protected function connectUdp()
    {
        if (!extension_loaded('sockets')) {
            throw new MissingExtensionException('The sockets extension is required to use udp URLs with the CubeHandler');
        }

        \$this->udpConnection = socket_create(AF_INET, SOCK_DGRAM, 0);
        if (!\$this->udpConnection) {
            throw new \\LogicException('Unable to create a socket');
        }

        if (!socket_connect(\$this->udpConnection, \$this->host, \$this->port)) {
            throw new \\LogicException('Unable to connect to the socket at ' . \$this->host . ':' . \$this->port);
        }
    }

    /**
     * Establish a connection to a http server
     * @throws \\LogicException when no curl extension
     */
    protected function connectHttp()
    {
        if (!extension_loaded('curl')) {
            throw new \\LogicException('The curl extension is needed to use http URLs with the CubeHandler');
        }

        \$this->httpConnection = curl_init('http://'.\$this->host.':'.\$this->port.'/1.0/event/put');

        if (!\$this->httpConnection) {
            throw new \\LogicException('Unable to connect to ' . \$this->host . ':' . \$this->port);
        }

        curl_setopt(\$this->httpConnection, CURLOPT_CUSTOMREQUEST, \"POST\");
        curl_setopt(\$this->httpConnection, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$date = \$record['datetime'];

        \$data = array('time' => \$date->format('Y-m-d\\TH:i:s.uO'));
        unset(\$record['datetime']);

        if (isset(\$record['context']['type'])) {
            \$data['type'] = \$record['context']['type'];
            unset(\$record['context']['type']);
        } else {
            \$data['type'] = \$record['channel'];
        }

        \$data['data'] = \$record['context'];
        \$data['data']['level'] = \$record['level'];

        if (\$this->scheme === 'http') {
            \$this->writeHttp(json_encode(\$data));
        } else {
            \$this->writeUdp(json_encode(\$data));
        }
    }

    private function writeUdp(\$data)
    {
        if (!\$this->udpConnection) {
            \$this->connectUdp();
        }

        socket_send(\$this->udpConnection, \$data, strlen(\$data), 0);
    }

    private function writeHttp(\$data)
    {
        if (!\$this->httpConnection) {
            \$this->connectHttp();
        }

        curl_setopt(\$this->httpConnection, CURLOPT_POSTFIELDS, '['.\$data.']');
        curl_setopt(\$this->httpConnection, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen('['.\$data.']'),
        ));

        Curl\\Util::execute(\$this->httpConnection, 5, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php";
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

/**
 * Logs to Cube.
 *
 * @link http://square.github.com/cube/
 * @author Wan Chen <kami@kamisama.me>
 */
class CubeHandler extends AbstractProcessingHandler
{
    private \$udpConnection;
    private \$httpConnection;
    private \$scheme;
    private \$host;
    private \$port;
    private \$acceptedSchemes = array('http', 'udp');

    /**
     * Create a Cube handler
     *
     * @throws \\UnexpectedValueException when given url is not a valid url.
     *                                   A valid url must consist of three parts : protocol://host:port
     *                                   Only valid protocols used by Cube are http and udp
     */
    public function __construct(\$url, \$level = Logger::DEBUG, \$bubble = true)
    {
        \$urlInfo = parse_url(\$url);

        if (!isset(\$urlInfo['scheme'], \$urlInfo['host'], \$urlInfo['port'])) {
            throw new \\UnexpectedValueException('URL \"'.\$url.'\" is not valid');
        }

        if (!in_array(\$urlInfo['scheme'], \$this->acceptedSchemes)) {
            throw new \\UnexpectedValueException(
                'Invalid protocol (' . \$urlInfo['scheme']  . ').'
                . ' Valid options are ' . implode(', ', \$this->acceptedSchemes));
        }

        \$this->scheme = \$urlInfo['scheme'];
        \$this->host = \$urlInfo['host'];
        \$this->port = \$urlInfo['port'];

        parent::__construct(\$level, \$bubble);
    }

    /**
     * Establish a connection to an UDP socket
     *
     * @throws \\LogicException           when unable to connect to the socket
     * @throws MissingExtensionException when there is no socket extension
     */
    protected function connectUdp()
    {
        if (!extension_loaded('sockets')) {
            throw new MissingExtensionException('The sockets extension is required to use udp URLs with the CubeHandler');
        }

        \$this->udpConnection = socket_create(AF_INET, SOCK_DGRAM, 0);
        if (!\$this->udpConnection) {
            throw new \\LogicException('Unable to create a socket');
        }

        if (!socket_connect(\$this->udpConnection, \$this->host, \$this->port)) {
            throw new \\LogicException('Unable to connect to the socket at ' . \$this->host . ':' . \$this->port);
        }
    }

    /**
     * Establish a connection to a http server
     * @throws \\LogicException when no curl extension
     */
    protected function connectHttp()
    {
        if (!extension_loaded('curl')) {
            throw new \\LogicException('The curl extension is needed to use http URLs with the CubeHandler');
        }

        \$this->httpConnection = curl_init('http://'.\$this->host.':'.\$this->port.'/1.0/event/put');

        if (!\$this->httpConnection) {
            throw new \\LogicException('Unable to connect to ' . \$this->host . ':' . \$this->port);
        }

        curl_setopt(\$this->httpConnection, CURLOPT_CUSTOMREQUEST, \"POST\");
        curl_setopt(\$this->httpConnection, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$date = \$record['datetime'];

        \$data = array('time' => \$date->format('Y-m-d\\TH:i:s.uO'));
        unset(\$record['datetime']);

        if (isset(\$record['context']['type'])) {
            \$data['type'] = \$record['context']['type'];
            unset(\$record['context']['type']);
        } else {
            \$data['type'] = \$record['channel'];
        }

        \$data['data'] = \$record['context'];
        \$data['data']['level'] = \$record['level'];

        if (\$this->scheme === 'http') {
            \$this->writeHttp(json_encode(\$data));
        } else {
            \$this->writeUdp(json_encode(\$data));
        }
    }

    private function writeUdp(\$data)
    {
        if (!\$this->udpConnection) {
            \$this->connectUdp();
        }

        socket_send(\$this->udpConnection, \$data, strlen(\$data), 0);
    }

    private function writeHttp(\$data)
    {
        if (!\$this->httpConnection) {
            \$this->connectHttp();
        }

        curl_setopt(\$this->httpConnection, CURLOPT_POSTFIELDS, '['.\$data.']');
        curl_setopt(\$this->httpConnection, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen('['.\$data.']'),
        ));

        Curl\\Util::execute(\$this->httpConnection, 5, false);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php");
    }
}
