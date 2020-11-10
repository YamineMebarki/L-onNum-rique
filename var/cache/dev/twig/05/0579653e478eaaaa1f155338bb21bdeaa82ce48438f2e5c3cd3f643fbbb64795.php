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

/* vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php */
class __TwigTemplate_646ba4c03a2dda4b3e996b0f449a7161bc392e4c775adae970bf4f208ac5e45d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php"));

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

namespace Monolog\\Formatter;

/**
 * Serializes a log message to Logstash Event Format
 *
 * @see http://logstash.net/
 * @see https://github.com/logstash/logstash/blob/master/lib/logstash/event.rb
 *
 * @author Tim Mower <timothy.mower@gmail.com>
 */
class LogstashFormatter extends NormalizerFormatter
{
    const V0 = 0;
    const V1 = 1;

    /**
     * @var string the name of the system for the Logstash log message, used to fill the @source field
     */
    protected \$systemName;

    /**
     * @var string an application name for the Logstash log message, used to fill the @type field
     */
    protected \$applicationName;

    /**
     * @var string a prefix for 'extra' fields from the Monolog record (optional)
     */
    protected \$extraPrefix;

    /**
     * @var string a prefix for 'context' fields from the Monolog record (optional)
     */
    protected \$contextPrefix;

    /**
     * @var int logstash format version to use
     */
    protected \$version;

    /**
     * @param string \$applicationName the application that sends the data, used as the \"type\" field of logstash
     * @param string \$systemName      the system/machine name, used as the \"source\" field of logstash, defaults to the hostname of the machine
     * @param string \$extraPrefix     prefix for extra keys inside logstash \"fields\"
     * @param string \$contextPrefix   prefix for context keys inside logstash \"fields\", defaults to ctxt_
     * @param int    \$version         the logstash format version to use, defaults to 0
     */
    public function __construct(\$applicationName, \$systemName = null, \$extraPrefix = null, \$contextPrefix = 'ctxt_', \$version = self::V0)
    {
        // logstash requires a ISO 8601 format date with optional millisecond precision.
        parent::__construct('Y-m-d\\TH:i:s.uP');

        \$this->systemName = \$systemName ?: gethostname();
        \$this->applicationName = \$applicationName;
        \$this->extraPrefix = \$extraPrefix;
        \$this->contextPrefix = \$contextPrefix;
        \$this->version = \$version;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$record = parent::format(\$record);

        if (\$this->version === self::V1) {
            \$message = \$this->formatV1(\$record);
        } else {
            \$message = \$this->formatV0(\$record);
        }

        return \$this->toJson(\$message) . \"\\n\";
    }

    protected function formatV0(array \$record)
    {
        if (empty(\$record['datetime'])) {
            \$record['datetime'] = gmdate('c');
        }
        \$message = array(
            '@timestamp' => \$record['datetime'],
            '@source' => \$this->systemName,
            '@fields' => array(),
        );
        if (isset(\$record['message'])) {
            \$message['@message'] = \$record['message'];
        }
        if (isset(\$record['channel'])) {
            \$message['@tags'] = array(\$record['channel']);
            \$message['@fields']['channel'] = \$record['channel'];
        }
        if (isset(\$record['level'])) {
            \$message['@fields']['level'] = \$record['level'];
        }
        if (\$this->applicationName) {
            \$message['@type'] = \$this->applicationName;
        }
        if (isset(\$record['extra']['server'])) {
            \$message['@source_host'] = \$record['extra']['server'];
        }
        if (isset(\$record['extra']['url'])) {
            \$message['@source_path'] = \$record['extra']['url'];
        }
        if (!empty(\$record['extra'])) {
            foreach (\$record['extra'] as \$key => \$val) {
                \$message['@fields'][\$this->extraPrefix . \$key] = \$val;
            }
        }
        if (!empty(\$record['context'])) {
            foreach (\$record['context'] as \$key => \$val) {
                \$message['@fields'][\$this->contextPrefix . \$key] = \$val;
            }
        }

        return \$message;
    }

    protected function formatV1(array \$record)
    {
        if (empty(\$record['datetime'])) {
            \$record['datetime'] = gmdate('c');
        }
        \$message = array(
            '@timestamp' => \$record['datetime'],
            '@version' => 1,
            'host' => \$this->systemName,
        );
        if (isset(\$record['message'])) {
            \$message['message'] = \$record['message'];
        }
        if (isset(\$record['channel'])) {
            \$message['type'] = \$record['channel'];
            \$message['channel'] = \$record['channel'];
        }
        if (isset(\$record['level_name'])) {
            \$message['level'] = \$record['level_name'];
        }
        if (\$this->applicationName) {
            \$message['type'] = \$this->applicationName;
        }
        if (!empty(\$record['extra'])) {
            foreach (\$record['extra'] as \$key => \$val) {
                \$message[\$this->extraPrefix . \$key] = \$val;
            }
        }
        if (!empty(\$record['context'])) {
            foreach (\$record['context'] as \$key => \$val) {
                \$message[\$this->contextPrefix . \$key] = \$val;
            }
        }

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php";
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

namespace Monolog\\Formatter;

/**
 * Serializes a log message to Logstash Event Format
 *
 * @see http://logstash.net/
 * @see https://github.com/logstash/logstash/blob/master/lib/logstash/event.rb
 *
 * @author Tim Mower <timothy.mower@gmail.com>
 */
class LogstashFormatter extends NormalizerFormatter
{
    const V0 = 0;
    const V1 = 1;

    /**
     * @var string the name of the system for the Logstash log message, used to fill the @source field
     */
    protected \$systemName;

    /**
     * @var string an application name for the Logstash log message, used to fill the @type field
     */
    protected \$applicationName;

    /**
     * @var string a prefix for 'extra' fields from the Monolog record (optional)
     */
    protected \$extraPrefix;

    /**
     * @var string a prefix for 'context' fields from the Monolog record (optional)
     */
    protected \$contextPrefix;

    /**
     * @var int logstash format version to use
     */
    protected \$version;

    /**
     * @param string \$applicationName the application that sends the data, used as the \"type\" field of logstash
     * @param string \$systemName      the system/machine name, used as the \"source\" field of logstash, defaults to the hostname of the machine
     * @param string \$extraPrefix     prefix for extra keys inside logstash \"fields\"
     * @param string \$contextPrefix   prefix for context keys inside logstash \"fields\", defaults to ctxt_
     * @param int    \$version         the logstash format version to use, defaults to 0
     */
    public function __construct(\$applicationName, \$systemName = null, \$extraPrefix = null, \$contextPrefix = 'ctxt_', \$version = self::V0)
    {
        // logstash requires a ISO 8601 format date with optional millisecond precision.
        parent::__construct('Y-m-d\\TH:i:s.uP');

        \$this->systemName = \$systemName ?: gethostname();
        \$this->applicationName = \$applicationName;
        \$this->extraPrefix = \$extraPrefix;
        \$this->contextPrefix = \$contextPrefix;
        \$this->version = \$version;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$record = parent::format(\$record);

        if (\$this->version === self::V1) {
            \$message = \$this->formatV1(\$record);
        } else {
            \$message = \$this->formatV0(\$record);
        }

        return \$this->toJson(\$message) . \"\\n\";
    }

    protected function formatV0(array \$record)
    {
        if (empty(\$record['datetime'])) {
            \$record['datetime'] = gmdate('c');
        }
        \$message = array(
            '@timestamp' => \$record['datetime'],
            '@source' => \$this->systemName,
            '@fields' => array(),
        );
        if (isset(\$record['message'])) {
            \$message['@message'] = \$record['message'];
        }
        if (isset(\$record['channel'])) {
            \$message['@tags'] = array(\$record['channel']);
            \$message['@fields']['channel'] = \$record['channel'];
        }
        if (isset(\$record['level'])) {
            \$message['@fields']['level'] = \$record['level'];
        }
        if (\$this->applicationName) {
            \$message['@type'] = \$this->applicationName;
        }
        if (isset(\$record['extra']['server'])) {
            \$message['@source_host'] = \$record['extra']['server'];
        }
        if (isset(\$record['extra']['url'])) {
            \$message['@source_path'] = \$record['extra']['url'];
        }
        if (!empty(\$record['extra'])) {
            foreach (\$record['extra'] as \$key => \$val) {
                \$message['@fields'][\$this->extraPrefix . \$key] = \$val;
            }
        }
        if (!empty(\$record['context'])) {
            foreach (\$record['context'] as \$key => \$val) {
                \$message['@fields'][\$this->contextPrefix . \$key] = \$val;
            }
        }

        return \$message;
    }

    protected function formatV1(array \$record)
    {
        if (empty(\$record['datetime'])) {
            \$record['datetime'] = gmdate('c');
        }
        \$message = array(
            '@timestamp' => \$record['datetime'],
            '@version' => 1,
            'host' => \$this->systemName,
        );
        if (isset(\$record['message'])) {
            \$message['message'] = \$record['message'];
        }
        if (isset(\$record['channel'])) {
            \$message['type'] = \$record['channel'];
            \$message['channel'] = \$record['channel'];
        }
        if (isset(\$record['level_name'])) {
            \$message['level'] = \$record['level_name'];
        }
        if (\$this->applicationName) {
            \$message['type'] = \$this->applicationName;
        }
        if (!empty(\$record['extra'])) {
            foreach (\$record['extra'] as \$key => \$val) {
                \$message[\$this->extraPrefix . \$key] = \$val;
            }
        }
        if (!empty(\$record['context'])) {
            foreach (\$record['context'] as \$key => \$val) {
                \$message[\$this->contextPrefix . \$key] = \$val;
            }
        }

        return \$message;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php");
    }
}
