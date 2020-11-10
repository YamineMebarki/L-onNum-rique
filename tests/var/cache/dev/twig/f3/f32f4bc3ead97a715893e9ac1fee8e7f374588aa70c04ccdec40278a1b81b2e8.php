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

/* vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php */
class __TwigTemplate_8469acf6be917dc7b9acf057f644f8e0432e7ccf8824311e7613accd2440c9c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php"));

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
 * @author Robert Kaufmann III <rok3@rok3.me>
 */
class LogEntriesHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$logToken;

    /**
     * @param string \$token  Log token supplied by LogEntries
     * @param bool   \$useSSL Whether or not SSL encryption should be used.
     * @param int    \$level  The minimum logging level to trigger this handler
     * @param bool   \$bubble Whether or not messages that are handled should bubble up the stack.
     *
     * @throws MissingExtensionException If SSL encryption is set to true and OpenSSL is missing
     */
    public function __construct(\$token, \$useSSL = true, \$level = Logger::DEBUG, \$bubble = true, \$host = 'data.logentries.com')
    {
        if (\$useSSL && !extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP plugin is required to use SSL encrypted connection for LogEntriesHandler');
        }

        \$endpoint = \$useSSL ? 'ssl://' . \$host . ':443' : \$host . ':80';
        parent::__construct(\$endpoint, \$level, \$bubble);
        \$this->logToken = \$token;
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        return \$this->logToken . ' ' . \$record['formatted'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php";
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
 * @author Robert Kaufmann III <rok3@rok3.me>
 */
class LogEntriesHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$logToken;

    /**
     * @param string \$token  Log token supplied by LogEntries
     * @param bool   \$useSSL Whether or not SSL encryption should be used.
     * @param int    \$level  The minimum logging level to trigger this handler
     * @param bool   \$bubble Whether or not messages that are handled should bubble up the stack.
     *
     * @throws MissingExtensionException If SSL encryption is set to true and OpenSSL is missing
     */
    public function __construct(\$token, \$useSSL = true, \$level = Logger::DEBUG, \$bubble = true, \$host = 'data.logentries.com')
    {
        if (\$useSSL && !extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP plugin is required to use SSL encrypted connection for LogEntriesHandler');
        }

        \$endpoint = \$useSSL ? 'ssl://' . \$host . ':443' : \$host . ':80';
        parent::__construct(\$endpoint, \$level, \$bubble);
        \$this->logToken = \$token;
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        return \$this->logToken . ' ' . \$record['formatted'];
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php");
    }
}
