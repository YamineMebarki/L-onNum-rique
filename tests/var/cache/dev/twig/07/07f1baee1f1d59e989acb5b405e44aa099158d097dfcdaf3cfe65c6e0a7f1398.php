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

/* vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php */
class __TwigTemplate_75374416b749a652e31763c4e6fcf9024b089e19c0d9443369695a38a35c9796 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php"));

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
use Monolog\\Formatter\\NormalizerFormatter;

/**
 * Class to record a log on a NewRelic application.
 * Enabling New Relic High Security mode may prevent capture of useful information.
 *
 * This handler requires a NormalizerFormatter to function and expects an array in \$record['formatted']
 *
 * @see https://docs.newrelic.com/docs/agents/php-agent
 * @see https://docs.newrelic.com/docs/accounts-partnerships/accounts/security/high-security
 */
class NewRelicHandler extends AbstractProcessingHandler
{
    /**
     * Name of the New Relic application that will receive log from this handler.
     *
     * @var string
     */
    protected \$appName;

    /**
     * Name of the current transaction
     *
     * @var string
     */
    protected \$transactionName;

    /**
     * Some context and extra data is passed into the handler as arrays of values. Do we send them as is
     * (useful if we are using the API), or explode them for display on the NewRelic RPM website?
     *
     * @var bool
     */
    protected \$explodeArrays;

    /**
     * {@inheritDoc}
     *
     * @param string \$appName
     * @param bool   \$explodeArrays
     * @param string \$transactionName
     */
    public function __construct(
        \$level = Logger::ERROR,
        \$bubble = true,
        \$appName = null,
        \$explodeArrays = false,
        \$transactionName = null
    ) {
        parent::__construct(\$level, \$bubble);

        \$this->appName       = \$appName;
        \$this->explodeArrays = \$explodeArrays;
        \$this->transactionName = \$transactionName;
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        if (!\$this->isNewRelicEnabled()) {
            throw new MissingExtensionException('The newrelic PHP extension is required to use the NewRelicHandler');
        }

        if (\$appName = \$this->getAppName(\$record['context'])) {
            \$this->setNewRelicAppName(\$appName);
        }

        if (\$transactionName = \$this->getTransactionName(\$record['context'])) {
            \$this->setNewRelicTransactionName(\$transactionName);
            unset(\$record['formatted']['context']['transaction_name']);
        }

        if (isset(\$record['context']['exception']) && (\$record['context']['exception'] instanceof \\Exception || (PHP_VERSION_ID >= 70000 && \$record['context']['exception'] instanceof \\Throwable))) {
            newrelic_notice_error(\$record['message'], \$record['context']['exception']);
            unset(\$record['formatted']['context']['exception']);
        } else {
            newrelic_notice_error(\$record['message']);
        }

        if (isset(\$record['formatted']['context']) && is_array(\$record['formatted']['context'])) {
            foreach (\$record['formatted']['context'] as \$key => \$parameter) {
                if (is_array(\$parameter) && \$this->explodeArrays) {
                    foreach (\$parameter as \$paramKey => \$paramValue) {
                        \$this->setNewRelicParameter('context_' . \$key . '_' . \$paramKey, \$paramValue);
                    }
                } else {
                    \$this->setNewRelicParameter('context_' . \$key, \$parameter);
                }
            }
        }

        if (isset(\$record['formatted']['extra']) && is_array(\$record['formatted']['extra'])) {
            foreach (\$record['formatted']['extra'] as \$key => \$parameter) {
                if (is_array(\$parameter) && \$this->explodeArrays) {
                    foreach (\$parameter as \$paramKey => \$paramValue) {
                        \$this->setNewRelicParameter('extra_' . \$key . '_' . \$paramKey, \$paramValue);
                    }
                } else {
                    \$this->setNewRelicParameter('extra_' . \$key, \$parameter);
                }
            }
        }
    }

    /**
     * Checks whether the NewRelic extension is enabled in the system.
     *
     * @return bool
     */
    protected function isNewRelicEnabled()
    {
        return extension_loaded('newrelic');
    }

    /**
     * Returns the appname where this log should be sent. Each log can override the default appname, set in this
     * handler's constructor, by providing the appname in it's context.
     *
     * @param  array       \$context
     * @return null|string
     */
    protected function getAppName(array \$context)
    {
        if (isset(\$context['appname'])) {
            return \$context['appname'];
        }

        return \$this->appName;
    }

    /**
     * Returns the name of the current transaction. Each log can override the default transaction name, set in this
     * handler's constructor, by providing the transaction_name in it's context
     *
     * @param array \$context
     *
     * @return null|string
     */
    protected function getTransactionName(array \$context)
    {
        if (isset(\$context['transaction_name'])) {
            return \$context['transaction_name'];
        }

        return \$this->transactionName;
    }

    /**
     * Sets the NewRelic application that should receive this log.
     *
     * @param string \$appName
     */
    protected function setNewRelicAppName(\$appName)
    {
        newrelic_set_appname(\$appName);
    }

    /**
     * Overwrites the name of the current transaction
     *
     * @param string \$transactionName
     */
    protected function setNewRelicTransactionName(\$transactionName)
    {
        newrelic_name_transaction(\$transactionName);
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     */
    protected function setNewRelicParameter(\$key, \$value)
    {
        if (null === \$value || is_scalar(\$value)) {
            newrelic_add_custom_parameter(\$key, \$value);
        } else {
            newrelic_add_custom_parameter(\$key, @json_encode(\$value));
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new NormalizerFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php";
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
use Monolog\\Formatter\\NormalizerFormatter;

/**
 * Class to record a log on a NewRelic application.
 * Enabling New Relic High Security mode may prevent capture of useful information.
 *
 * This handler requires a NormalizerFormatter to function and expects an array in \$record['formatted']
 *
 * @see https://docs.newrelic.com/docs/agents/php-agent
 * @see https://docs.newrelic.com/docs/accounts-partnerships/accounts/security/high-security
 */
class NewRelicHandler extends AbstractProcessingHandler
{
    /**
     * Name of the New Relic application that will receive log from this handler.
     *
     * @var string
     */
    protected \$appName;

    /**
     * Name of the current transaction
     *
     * @var string
     */
    protected \$transactionName;

    /**
     * Some context and extra data is passed into the handler as arrays of values. Do we send them as is
     * (useful if we are using the API), or explode them for display on the NewRelic RPM website?
     *
     * @var bool
     */
    protected \$explodeArrays;

    /**
     * {@inheritDoc}
     *
     * @param string \$appName
     * @param bool   \$explodeArrays
     * @param string \$transactionName
     */
    public function __construct(
        \$level = Logger::ERROR,
        \$bubble = true,
        \$appName = null,
        \$explodeArrays = false,
        \$transactionName = null
    ) {
        parent::__construct(\$level, \$bubble);

        \$this->appName       = \$appName;
        \$this->explodeArrays = \$explodeArrays;
        \$this->transactionName = \$transactionName;
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        if (!\$this->isNewRelicEnabled()) {
            throw new MissingExtensionException('The newrelic PHP extension is required to use the NewRelicHandler');
        }

        if (\$appName = \$this->getAppName(\$record['context'])) {
            \$this->setNewRelicAppName(\$appName);
        }

        if (\$transactionName = \$this->getTransactionName(\$record['context'])) {
            \$this->setNewRelicTransactionName(\$transactionName);
            unset(\$record['formatted']['context']['transaction_name']);
        }

        if (isset(\$record['context']['exception']) && (\$record['context']['exception'] instanceof \\Exception || (PHP_VERSION_ID >= 70000 && \$record['context']['exception'] instanceof \\Throwable))) {
            newrelic_notice_error(\$record['message'], \$record['context']['exception']);
            unset(\$record['formatted']['context']['exception']);
        } else {
            newrelic_notice_error(\$record['message']);
        }

        if (isset(\$record['formatted']['context']) && is_array(\$record['formatted']['context'])) {
            foreach (\$record['formatted']['context'] as \$key => \$parameter) {
                if (is_array(\$parameter) && \$this->explodeArrays) {
                    foreach (\$parameter as \$paramKey => \$paramValue) {
                        \$this->setNewRelicParameter('context_' . \$key . '_' . \$paramKey, \$paramValue);
                    }
                } else {
                    \$this->setNewRelicParameter('context_' . \$key, \$parameter);
                }
            }
        }

        if (isset(\$record['formatted']['extra']) && is_array(\$record['formatted']['extra'])) {
            foreach (\$record['formatted']['extra'] as \$key => \$parameter) {
                if (is_array(\$parameter) && \$this->explodeArrays) {
                    foreach (\$parameter as \$paramKey => \$paramValue) {
                        \$this->setNewRelicParameter('extra_' . \$key . '_' . \$paramKey, \$paramValue);
                    }
                } else {
                    \$this->setNewRelicParameter('extra_' . \$key, \$parameter);
                }
            }
        }
    }

    /**
     * Checks whether the NewRelic extension is enabled in the system.
     *
     * @return bool
     */
    protected function isNewRelicEnabled()
    {
        return extension_loaded('newrelic');
    }

    /**
     * Returns the appname where this log should be sent. Each log can override the default appname, set in this
     * handler's constructor, by providing the appname in it's context.
     *
     * @param  array       \$context
     * @return null|string
     */
    protected function getAppName(array \$context)
    {
        if (isset(\$context['appname'])) {
            return \$context['appname'];
        }

        return \$this->appName;
    }

    /**
     * Returns the name of the current transaction. Each log can override the default transaction name, set in this
     * handler's constructor, by providing the transaction_name in it's context
     *
     * @param array \$context
     *
     * @return null|string
     */
    protected function getTransactionName(array \$context)
    {
        if (isset(\$context['transaction_name'])) {
            return \$context['transaction_name'];
        }

        return \$this->transactionName;
    }

    /**
     * Sets the NewRelic application that should receive this log.
     *
     * @param string \$appName
     */
    protected function setNewRelicAppName(\$appName)
    {
        newrelic_set_appname(\$appName);
    }

    /**
     * Overwrites the name of the current transaction
     *
     * @param string \$transactionName
     */
    protected function setNewRelicTransactionName(\$transactionName)
    {
        newrelic_name_transaction(\$transactionName);
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     */
    protected function setNewRelicParameter(\$key, \$value)
    {
        if (null === \$value || is_scalar(\$value)) {
            newrelic_add_custom_parameter(\$key, \$value);
        } else {
            newrelic_add_custom_parameter(\$key, @json_encode(\$value));
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new NormalizerFormatter();
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php");
    }
}
