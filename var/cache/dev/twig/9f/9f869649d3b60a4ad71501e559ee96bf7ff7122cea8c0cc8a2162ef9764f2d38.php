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

/* vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php */
class __TwigTemplate_585ff9886e80dcd03f0461a7a56880f0495cff1dcf23b053c208eeac2f500a5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php"));

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
 * Sends log to Fleep.io using Webhook integrations
 *
 * You'll need a Fleep.io account to use this handler.
 *
 * @see https://fleep.io/integrations/webhooks/ Fleep Webhooks Documentation
 * @author Ando Roots <ando@sqroot.eu>
 */
class FleepHookHandler extends SocketHandler
{
    const FLEEP_HOST = 'fleep.io';

    const FLEEP_HOOK_URI = '/hook/';

    /**
     * @var string Webhook token (specifies the conversation where log are sent)
     */
    protected \$token;

    /**
     * Construct a new Fleep.io Handler.
     *
     * For instructions on how to create a new web hook in your conversations
     * see https://fleep.io/integrations/webhooks/
     *
     * @param  string                    \$token  Webhook token
     * @param  bool|int                  \$level  The minimum logging level at which this handler will be triggered
     * @param  bool                      \$bubble Whether the messages that are handled can bubble up the stack or not
     * @throws MissingExtensionException
     */
    public function __construct(\$token, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the FleepHookHandler');
        }

        \$this->token = \$token;

        \$connectionString = 'ssl://' . self::FLEEP_HOST . ':443';
        parent::__construct(\$connectionString, \$level, \$bubble);
    }

    /**
     * Returns the default formatter to use with this handler
     *
     * Overloaded to remove empty context and extra arrays from the end of the log message.
     *
     * @return LineFormatter
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter(null, null, true, true);
    }

    /**
     * Handles a log record
     *
     * @param array \$record
     */
    public function write(array \$record)
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
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST \" . self::FLEEP_HOOK_URI . \$this->token . \" HTTP/1.1\\r\\n\";
        \$header .= \"Host: \" . self::FLEEP_HOST . \"\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        \$dataArray = array(
            'message' => \$record['formatted'],
        );

        return http_build_query(\$dataArray);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php";
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
 * Sends log to Fleep.io using Webhook integrations
 *
 * You'll need a Fleep.io account to use this handler.
 *
 * @see https://fleep.io/integrations/webhooks/ Fleep Webhooks Documentation
 * @author Ando Roots <ando@sqroot.eu>
 */
class FleepHookHandler extends SocketHandler
{
    const FLEEP_HOST = 'fleep.io';

    const FLEEP_HOOK_URI = '/hook/';

    /**
     * @var string Webhook token (specifies the conversation where log are sent)
     */
    protected \$token;

    /**
     * Construct a new Fleep.io Handler.
     *
     * For instructions on how to create a new web hook in your conversations
     * see https://fleep.io/integrations/webhooks/
     *
     * @param  string                    \$token  Webhook token
     * @param  bool|int                  \$level  The minimum logging level at which this handler will be triggered
     * @param  bool                      \$bubble Whether the messages that are handled can bubble up the stack or not
     * @throws MissingExtensionException
     */
    public function __construct(\$token, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the FleepHookHandler');
        }

        \$this->token = \$token;

        \$connectionString = 'ssl://' . self::FLEEP_HOST . ':443';
        parent::__construct(\$connectionString, \$level, \$bubble);
    }

    /**
     * Returns the default formatter to use with this handler
     *
     * Overloaded to remove empty context and extra arrays from the end of the log message.
     *
     * @return LineFormatter
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter(null, null, true, true);
    }

    /**
     * Handles a log record
     *
     * @param array \$record
     */
    public function write(array \$record)
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
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST \" . self::FLEEP_HOOK_URI . \$this->token . \" HTTP/1.1\\r\\n\";
        \$header .= \"Host: \" . self::FLEEP_HOST . \"\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        \$dataArray = array(
            'message' => \$record['formatted'],
        );

        return http_build_query(\$dataArray);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php");
    }
}
