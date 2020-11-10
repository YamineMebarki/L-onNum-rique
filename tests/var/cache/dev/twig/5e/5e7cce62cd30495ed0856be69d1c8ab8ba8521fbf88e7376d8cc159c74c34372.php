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

/* vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php */
class __TwigTemplate_c888f388131b61a492aa4d7a1b0714915d5ef596885b407fae3954909dfb2a7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php"));

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
use Monolog\\Formatter\\FlowdockFormatter;
use Monolog\\Formatter\\FormatterInterface;

/**
 * Sends notifications through the Flowdock push API
 *
 * This must be configured with a FlowdockFormatter instance via setFormatter()
 *
 * Notes:
 * API token - Flowdock API token
 *
 * @author Dominik Liebler <liebler.dominik@gmail.com>
 * @see https://www.flowdock.com/api/push
 */
class FlowdockHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$apiToken;

    /**
     * @param string   \$apiToken
     * @param bool|int \$level    The minimum logging level at which this handler will be triggered
     * @param bool     \$bubble   Whether the messages that are handled can bubble up the stack or not
     *
     * @throws MissingExtensionException if OpenSSL is missing
     */
    public function __construct(\$apiToken, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the FlowdockHandler');
        }

        parent::__construct('ssl://api.flowdock.com:443', \$level, \$bubble);
        \$this->apiToken = \$apiToken;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        if (!\$formatter instanceof FlowdockFormatter) {
            throw new \\InvalidArgumentException('The FlowdockHandler requires an instance of Monolog\\Formatter\\FlowdockFormatter to function correctly');
        }

        return parent::setFormatter(\$formatter);
    }

    /**
     * Gets the default formatter.
     *
     * @return FormatterInterface
     */
    protected function getDefaultFormatter()
    {
        throw new \\InvalidArgumentException('The FlowdockHandler must be configured (via setFormatter) with an instance of Monolog\\Formatter\\FlowdockFormatter to function correctly');
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        parent::write(\$record);

        \$this->closeSocket();
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        return json_encode(\$record['formatted']['flowdock']);
    }

    /**
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST /v1/messages/team_inbox/\" . \$this->apiToken . \" HTTP/1.1\\r\\n\";
        \$header .= \"Host: api.flowdock.com\\r\\n\";
        \$header .= \"Content-Type: application/json\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php";
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
use Monolog\\Formatter\\FlowdockFormatter;
use Monolog\\Formatter\\FormatterInterface;

/**
 * Sends notifications through the Flowdock push API
 *
 * This must be configured with a FlowdockFormatter instance via setFormatter()
 *
 * Notes:
 * API token - Flowdock API token
 *
 * @author Dominik Liebler <liebler.dominik@gmail.com>
 * @see https://www.flowdock.com/api/push
 */
class FlowdockHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$apiToken;

    /**
     * @param string   \$apiToken
     * @param bool|int \$level    The minimum logging level at which this handler will be triggered
     * @param bool     \$bubble   Whether the messages that are handled can bubble up the stack or not
     *
     * @throws MissingExtensionException if OpenSSL is missing
     */
    public function __construct(\$apiToken, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the FlowdockHandler');
        }

        parent::__construct('ssl://api.flowdock.com:443', \$level, \$bubble);
        \$this->apiToken = \$apiToken;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        if (!\$formatter instanceof FlowdockFormatter) {
            throw new \\InvalidArgumentException('The FlowdockHandler requires an instance of Monolog\\Formatter\\FlowdockFormatter to function correctly');
        }

        return parent::setFormatter(\$formatter);
    }

    /**
     * Gets the default formatter.
     *
     * @return FormatterInterface
     */
    protected function getDefaultFormatter()
    {
        throw new \\InvalidArgumentException('The FlowdockHandler must be configured (via setFormatter) with an instance of Monolog\\Formatter\\FlowdockFormatter to function correctly');
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        parent::write(\$record);

        \$this->closeSocket();
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        return json_encode(\$record['formatted']['flowdock']);
    }

    /**
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST /v1/messages/team_inbox/\" . \$this->apiToken . \" HTTP/1.1\\r\\n\";
        \$header .= \"Host: api.flowdock.com\\r\\n\";
        \$header .= \"Content-Type: application/json\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php");
    }
}
