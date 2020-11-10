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

/* vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php */
class __TwigTemplate_c6236810c9120884bc17528b5085874062b0d09a4aa9d4d840b3f7550e9378bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php"));

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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Formatter\\ElasticaFormatter;
use Monolog\\Logger;
use Elastica\\Client;
use Elastica\\Exception\\ExceptionInterface;

/**
 * Elastic Search handler
 *
 * Usage example:
 *
 *    \$client = new \\Elastica\\Client();
 *    \$options = array(
 *        'index' => 'elastic_index_name',
 *        'type' => 'elastic_doc_type',
 *    );
 *    \$handler = new ElasticSearchHandler(\$client, \$options);
 *    \$log = new Logger('application');
 *    \$log->pushHandler(\$handler);
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
 */
class ElasticSearchHandler extends AbstractProcessingHandler
{
    /**
     * @var Client
     */
    protected \$client;

    /**
     * @var array Handler config options
     */
    protected \$options = array();

    /**
     * @param Client \$client  Elastica Client object
     * @param array  \$options Handler configuration
     * @param int    \$level   The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(Client \$client, array \$options = array(), \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);
        \$this->client = \$client;
        \$this->options = array_merge(
            array(
                'index'          => 'monolog',      // Elastic index name
                'type'           => 'record',       // Elastic document type
                'ignore_error'   => false,          // Suppress Elastica exceptions
            ),
            \$options
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$this->bulkSend(array(\$record['formatted']));
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        if (\$formatter instanceof ElasticaFormatter) {
            return parent::setFormatter(\$formatter);
        }
        throw new \\InvalidArgumentException('ElasticSearchHandler is only compatible with ElasticaFormatter');
    }

    /**
     * Getter options
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new ElasticaFormatter(\$this->options['index'], \$this->options['type']);
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$documents = \$this->getFormatter()->formatBatch(\$records);
        \$this->bulkSend(\$documents);
    }

    /**
     * Use Elasticsearch bulk API to send list of documents
     * @param  array             \$documents
     * @throws \\RuntimeException
     */
    protected function bulkSend(array \$documents)
    {
        try {
            \$this->client->addDocuments(\$documents);
        } catch (ExceptionInterface \$e) {
            if (!\$this->options['ignore_error']) {
                throw new \\RuntimeException(\"Error sending messages to Elasticsearch\", 0, \$e);
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
        return "vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php";
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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Formatter\\ElasticaFormatter;
use Monolog\\Logger;
use Elastica\\Client;
use Elastica\\Exception\\ExceptionInterface;

/**
 * Elastic Search handler
 *
 * Usage example:
 *
 *    \$client = new \\Elastica\\Client();
 *    \$options = array(
 *        'index' => 'elastic_index_name',
 *        'type' => 'elastic_doc_type',
 *    );
 *    \$handler = new ElasticSearchHandler(\$client, \$options);
 *    \$log = new Logger('application');
 *    \$log->pushHandler(\$handler);
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
 */
class ElasticSearchHandler extends AbstractProcessingHandler
{
    /**
     * @var Client
     */
    protected \$client;

    /**
     * @var array Handler config options
     */
    protected \$options = array();

    /**
     * @param Client \$client  Elastica Client object
     * @param array  \$options Handler configuration
     * @param int    \$level   The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(Client \$client, array \$options = array(), \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);
        \$this->client = \$client;
        \$this->options = array_merge(
            array(
                'index'          => 'monolog',      // Elastic index name
                'type'           => 'record',       // Elastic document type
                'ignore_error'   => false,          // Suppress Elastica exceptions
            ),
            \$options
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$this->bulkSend(array(\$record['formatted']));
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        if (\$formatter instanceof ElasticaFormatter) {
            return parent::setFormatter(\$formatter);
        }
        throw new \\InvalidArgumentException('ElasticSearchHandler is only compatible with ElasticaFormatter');
    }

    /**
     * Getter options
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new ElasticaFormatter(\$this->options['index'], \$this->options['type']);
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$documents = \$this->getFormatter()->formatBatch(\$records);
        \$this->bulkSend(\$documents);
    }

    /**
     * Use Elasticsearch bulk API to send list of documents
     * @param  array             \$documents
     * @throws \\RuntimeException
     */
    protected function bulkSend(array \$documents)
    {
        try {
            \$this->client->addDocuments(\$documents);
        } catch (ExceptionInterface \$e) {
            if (!\$this->options['ignore_error']) {
                throw new \\RuntimeException(\"Error sending messages to Elasticsearch\", 0, \$e);
            }
        }
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php");
    }
}
