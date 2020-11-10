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

/* vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php */
class __TwigTemplate_0ead66a363436158c082199a41ab5ba6eec0f6c749d5da7434ff626e0343bb67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php"));

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

use Monolog\\Formatter\\WildfireFormatter;

/**
 * Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.
 *
 * @author Eric Clemmons (@ericclemmons) <eric@uxdriven.com>
 */
class FirePHPHandler extends AbstractProcessingHandler
{
    /**
     * WildFire JSON header message format
     */
    const PROTOCOL_URI = 'http://meta.wildfirehq.org/Protocol/JsonStream/0.2';

    /**
     * FirePHP structure for parsing messages & their presentation
     */
    const STRUCTURE_URI = 'http://meta.firephp.org/Wildfire/Structure/FirePHP/FirebugConsole/0.1';

    /**
     * Must reference a \"known\" plugin, otherwise headers won't display in FirePHP
     */
    const PLUGIN_URI = 'http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3';

    /**
     * Header prefix for Wildfire to recognize & parse headers
     */
    const HEADER_PREFIX = 'X-Wf';

    /**
     * Whether or not Wildfire vendor-specific headers have been generated & sent yet
     */
    protected static \$initialized = false;

    /**
     * Shared static message index between potentially multiple handlers
     * @var int
     */
    protected static \$messageIndex = 1;

    protected static \$sendHeaders = true;

    /**
     * Base header creation function used by init headers & record headers
     *
     * @param  array  \$meta    Wildfire Plugin, Protocol & Structure Indexes
     * @param  string \$message Log message
     * @return array  Complete header string ready for the client as key and message as value
     */
    protected function createHeader(array \$meta, \$message)
    {
        \$header = sprintf('%s-%s', self::HEADER_PREFIX, join('-', \$meta));

        return array(\$header => \$message);
    }

    /**
     * Creates message header from record
     *
     * @see createHeader()
     * @param  array  \$record
     * @return string
     */
    protected function createRecordHeader(array \$record)
    {
        // Wildfire is extensible to support multiple protocols & plugins in a single request,
        // but we're not taking advantage of that (yet), so we're using \"1\" for simplicity's sake.
        return \$this->createHeader(
            array(1, 1, 1, self::\$messageIndex++),
            \$record['formatted']
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new WildfireFormatter();
    }

    /**
     * Wildfire initialization headers to enable message parsing
     *
     * @see createHeader()
     * @see sendHeader()
     * @return array
     */
    protected function getInitHeaders()
    {
        // Initial payload consists of required headers for Wildfire
        return array_merge(
            \$this->createHeader(array('Protocol', 1), self::PROTOCOL_URI),
            \$this->createHeader(array(1, 'Structure', 1), self::STRUCTURE_URI),
            \$this->createHeader(array(1, 'Plugin', 1), self::PLUGIN_URI)
        );
    }

    /**
     * Send header string to the client
     *
     * @param string \$header
     * @param string \$content
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!headers_sent() && self::\$sendHeaders) {
            header(sprintf('%s: %s', \$header, \$content));
        }
    }

    /**
     * Creates & sends header for a record, ensuring init headers have been sent prior
     *
     * @see sendHeader()
     * @see sendInitHeaders()
     * @param array \$record
     */
    protected function write(array \$record)
    {
        if (!self::\$sendHeaders) {
            return;
        }

        // WildFire-specific headers must be sent prior to any messages
        if (!self::\$initialized) {
            self::\$initialized = true;

            self::\$sendHeaders = \$this->headersAccepted();
            if (!self::\$sendHeaders) {
                return;
            }

            foreach (\$this->getInitHeaders() as \$header => \$content) {
                \$this->sendHeader(\$header, \$content);
            }
        }

        \$header = \$this->createRecordHeader(\$record);
        if (trim(current(\$header)) !== '') {
            \$this->sendHeader(key(\$header), current(\$header));
        }
    }

    /**
     * Verifies if the headers are accepted by the current user agent
     *
     * @return bool
     */
    protected function headersAccepted()
    {
        if (!empty(\$_SERVER['HTTP_USER_AGENT']) && preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', \$_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }

        return isset(\$_SERVER['HTTP_X_FIREPHP_VERSION']);
    }

    /**
     * BC getter for the sendHeaders property that has been made static
     */
    public function __get(\$property)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        return static::\$sendHeaders;
    }

    /**
     * BC setter for the sendHeaders property that has been made static
     */
    public function __set(\$property, \$value)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        static::\$sendHeaders = \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php";
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

use Monolog\\Formatter\\WildfireFormatter;

/**
 * Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.
 *
 * @author Eric Clemmons (@ericclemmons) <eric@uxdriven.com>
 */
class FirePHPHandler extends AbstractProcessingHandler
{
    /**
     * WildFire JSON header message format
     */
    const PROTOCOL_URI = 'http://meta.wildfirehq.org/Protocol/JsonStream/0.2';

    /**
     * FirePHP structure for parsing messages & their presentation
     */
    const STRUCTURE_URI = 'http://meta.firephp.org/Wildfire/Structure/FirePHP/FirebugConsole/0.1';

    /**
     * Must reference a \"known\" plugin, otherwise headers won't display in FirePHP
     */
    const PLUGIN_URI = 'http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3';

    /**
     * Header prefix for Wildfire to recognize & parse headers
     */
    const HEADER_PREFIX = 'X-Wf';

    /**
     * Whether or not Wildfire vendor-specific headers have been generated & sent yet
     */
    protected static \$initialized = false;

    /**
     * Shared static message index between potentially multiple handlers
     * @var int
     */
    protected static \$messageIndex = 1;

    protected static \$sendHeaders = true;

    /**
     * Base header creation function used by init headers & record headers
     *
     * @param  array  \$meta    Wildfire Plugin, Protocol & Structure Indexes
     * @param  string \$message Log message
     * @return array  Complete header string ready for the client as key and message as value
     */
    protected function createHeader(array \$meta, \$message)
    {
        \$header = sprintf('%s-%s', self::HEADER_PREFIX, join('-', \$meta));

        return array(\$header => \$message);
    }

    /**
     * Creates message header from record
     *
     * @see createHeader()
     * @param  array  \$record
     * @return string
     */
    protected function createRecordHeader(array \$record)
    {
        // Wildfire is extensible to support multiple protocols & plugins in a single request,
        // but we're not taking advantage of that (yet), so we're using \"1\" for simplicity's sake.
        return \$this->createHeader(
            array(1, 1, 1, self::\$messageIndex++),
            \$record['formatted']
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new WildfireFormatter();
    }

    /**
     * Wildfire initialization headers to enable message parsing
     *
     * @see createHeader()
     * @see sendHeader()
     * @return array
     */
    protected function getInitHeaders()
    {
        // Initial payload consists of required headers for Wildfire
        return array_merge(
            \$this->createHeader(array('Protocol', 1), self::PROTOCOL_URI),
            \$this->createHeader(array(1, 'Structure', 1), self::STRUCTURE_URI),
            \$this->createHeader(array(1, 'Plugin', 1), self::PLUGIN_URI)
        );
    }

    /**
     * Send header string to the client
     *
     * @param string \$header
     * @param string \$content
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!headers_sent() && self::\$sendHeaders) {
            header(sprintf('%s: %s', \$header, \$content));
        }
    }

    /**
     * Creates & sends header for a record, ensuring init headers have been sent prior
     *
     * @see sendHeader()
     * @see sendInitHeaders()
     * @param array \$record
     */
    protected function write(array \$record)
    {
        if (!self::\$sendHeaders) {
            return;
        }

        // WildFire-specific headers must be sent prior to any messages
        if (!self::\$initialized) {
            self::\$initialized = true;

            self::\$sendHeaders = \$this->headersAccepted();
            if (!self::\$sendHeaders) {
                return;
            }

            foreach (\$this->getInitHeaders() as \$header => \$content) {
                \$this->sendHeader(\$header, \$content);
            }
        }

        \$header = \$this->createRecordHeader(\$record);
        if (trim(current(\$header)) !== '') {
            \$this->sendHeader(key(\$header), current(\$header));
        }
    }

    /**
     * Verifies if the headers are accepted by the current user agent
     *
     * @return bool
     */
    protected function headersAccepted()
    {
        if (!empty(\$_SERVER['HTTP_USER_AGENT']) && preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', \$_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }

        return isset(\$_SERVER['HTTP_X_FIREPHP_VERSION']);
    }

    /**
     * BC getter for the sendHeaders property that has been made static
     */
    public function __get(\$property)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        return static::\$sendHeaders;
    }

    /**
     * BC setter for the sendHeaders property that has been made static
     */
    public function __set(\$property, \$value)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        static::\$sendHeaders = \$value;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php");
    }
}
