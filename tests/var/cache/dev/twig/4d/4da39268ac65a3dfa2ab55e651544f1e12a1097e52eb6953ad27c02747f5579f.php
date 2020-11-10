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

/* vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php */
class __TwigTemplate_52a3f016cc04a8497879d5560aa0747ec31ffd240d619b42ce16668e1304f631 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php"));

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
 * Inspired on LogEntriesHandler.
 *
 * @author Robert Kaufmann III <rok3@rok3.me>
 * @author Gabriel Machado <gabriel.ms1@hotmail.com>
 */
class InsightOpsHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$logToken;

    /**
     * @param string \$token  Log token supplied by InsightOps
     * @param string \$region Region where InsightOps account is hosted. Could be 'us' or 'eu'.
     * @param bool   \$useSSL Whether or not SSL encryption should be used
     * @param int    \$level  The minimum logging level to trigger this handler
     * @param bool   \$bubble Whether or not messages that are handled should bubble up the stack.
     *
     * @throws MissingExtensionException If SSL encryption is set to true and OpenSSL is missing
     */
    public function __construct(\$token, \$region = 'us', \$useSSL = true, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (\$useSSL && !extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP plugin is required to use SSL encrypted connection for InsightOpsHandler');
        }

        \$endpoint = \$useSSL
            ? 'ssl://' . \$region . '.data.log.insight.rapid7.com:443'
            : \$region . '.data.log.insight.rapid7.com:80';

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
        return "vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php";
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
 * Inspired on LogEntriesHandler.
 *
 * @author Robert Kaufmann III <rok3@rok3.me>
 * @author Gabriel Machado <gabriel.ms1@hotmail.com>
 */
class InsightOpsHandler extends SocketHandler
{
    /**
     * @var string
     */
    protected \$logToken;

    /**
     * @param string \$token  Log token supplied by InsightOps
     * @param string \$region Region where InsightOps account is hosted. Could be 'us' or 'eu'.
     * @param bool   \$useSSL Whether or not SSL encryption should be used
     * @param int    \$level  The minimum logging level to trigger this handler
     * @param bool   \$bubble Whether or not messages that are handled should bubble up the stack.
     *
     * @throws MissingExtensionException If SSL encryption is set to true and OpenSSL is missing
     */
    public function __construct(\$token, \$region = 'us', \$useSSL = true, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (\$useSSL && !extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP plugin is required to use SSL encrypted connection for InsightOpsHandler');
        }

        \$endpoint = \$useSSL
            ? 'ssl://' . \$region . '.data.log.insight.rapid7.com:443'
            : \$region . '.data.log.insight.rapid7.com:80';

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
", "vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php");
    }
}
