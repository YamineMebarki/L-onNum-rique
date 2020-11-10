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

/* vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php */
class __TwigTemplate_d69a9d915f2bd7400e2155cbf412a0ddce41135535fa9a332c4af2508cc0ae4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php"));

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

use Aws\\Sdk;
use Aws\\DynamoDb\\DynamoDbClient;
use Aws\\DynamoDb\\Marshaler;
use Monolog\\Formatter\\ScalarFormatter;
use Monolog\\Logger;

/**
 * Amazon DynamoDB handler (http://aws.amazon.com/dynamodb/)
 *
 * @link https://github.com/aws/aws-sdk-php/
 * @author Andrew Lawson <adlawson@gmail.com>
 */
class DynamoDbHandler extends AbstractProcessingHandler
{
    const DATE_FORMAT = 'Y-m-d\\TH:i:s.uO';

    /**
     * @var DynamoDbClient
     */
    protected \$client;

    /**
     * @var string
     */
    protected \$table;

    /**
     * @var int
     */
    protected \$version;

    /**
     * @var Marshaler
     */
    protected \$marshaler;

    /**
     * @param DynamoDbClient \$client
     * @param string         \$table
     * @param int            \$level
     * @param bool           \$bubble
     */
    public function __construct(DynamoDbClient \$client, \$table, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (defined('Aws\\Sdk::VERSION') && version_compare(Sdk::VERSION, '3.0', '>=')) {
            \$this->version = 3;
            \$this->marshaler = new Marshaler;
        } else {
            \$this->version = 2;
        }

        \$this->client = \$client;
        \$this->table = \$table;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$filtered = \$this->filterEmptyFields(\$record['formatted']);
        if (\$this->version === 3) {
            \$formatted = \$this->marshaler->marshalItem(\$filtered);
        } else {
            \$formatted = \$this->client->formatAttributes(\$filtered);
        }

        \$this->client->putItem(array(
            'TableName' => \$this->table,
            'Item' => \$formatted,
        ));
    }

    /**
     * @param  array \$record
     * @return array
     */
    protected function filterEmptyFields(array \$record)
    {
        return array_filter(\$record, function (\$value) {
            return !empty(\$value) || false === \$value || 0 === \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new ScalarFormatter(self::DATE_FORMAT);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php";
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

use Aws\\Sdk;
use Aws\\DynamoDb\\DynamoDbClient;
use Aws\\DynamoDb\\Marshaler;
use Monolog\\Formatter\\ScalarFormatter;
use Monolog\\Logger;

/**
 * Amazon DynamoDB handler (http://aws.amazon.com/dynamodb/)
 *
 * @link https://github.com/aws/aws-sdk-php/
 * @author Andrew Lawson <adlawson@gmail.com>
 */
class DynamoDbHandler extends AbstractProcessingHandler
{
    const DATE_FORMAT = 'Y-m-d\\TH:i:s.uO';

    /**
     * @var DynamoDbClient
     */
    protected \$client;

    /**
     * @var string
     */
    protected \$table;

    /**
     * @var int
     */
    protected \$version;

    /**
     * @var Marshaler
     */
    protected \$marshaler;

    /**
     * @param DynamoDbClient \$client
     * @param string         \$table
     * @param int            \$level
     * @param bool           \$bubble
     */
    public function __construct(DynamoDbClient \$client, \$table, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (defined('Aws\\Sdk::VERSION') && version_compare(Sdk::VERSION, '3.0', '>=')) {
            \$this->version = 3;
            \$this->marshaler = new Marshaler;
        } else {
            \$this->version = 2;
        }

        \$this->client = \$client;
        \$this->table = \$table;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$filtered = \$this->filterEmptyFields(\$record['formatted']);
        if (\$this->version === 3) {
            \$formatted = \$this->marshaler->marshalItem(\$filtered);
        } else {
            \$formatted = \$this->client->formatAttributes(\$filtered);
        }

        \$this->client->putItem(array(
            'TableName' => \$this->table,
            'Item' => \$formatted,
        ));
    }

    /**
     * @param  array \$record
     * @return array
     */
    protected function filterEmptyFields(array \$record)
    {
        return array_filter(\$record, function (\$value) {
            return !empty(\$value) || false === \$value || 0 === \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new ScalarFormatter(self::DATE_FORMAT);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php");
    }
}
