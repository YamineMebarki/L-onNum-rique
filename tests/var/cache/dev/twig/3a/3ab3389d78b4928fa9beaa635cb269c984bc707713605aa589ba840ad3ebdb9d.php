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

/* vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php */
class __TwigTemplate_124da82edbe9bac4786ba691bb1cdb8dd0ead263ed57f726cefbe2ce489953ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php"));

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

use Monolog\\Logger;

/**
 * Formats incoming records into an HTML table
 *
 * This is especially useful for html email logging
 *
 * @author Tiago Brito <tlfbrito@gmail.com>
 */
class HtmlFormatter extends NormalizerFormatter
{
    /**
     * Translates Monolog log levels to html color priorities.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => '#cccccc',
        Logger::INFO      => '#468847',
        Logger::NOTICE    => '#3a87ad',
        Logger::WARNING   => '#c09853',
        Logger::ERROR     => '#f0ad4e',
        Logger::CRITICAL  => '#FF7708',
        Logger::ALERT     => '#C12A19',
        Logger::EMERGENCY => '#000000',
    );

    /**
     * @param string \$dateFormat The format of the timestamp: one supported by DateTime::format
     */
    public function __construct(\$dateFormat = null)
    {
        parent::__construct(\$dateFormat);
    }

    /**
     * Creates an HTML table row
     *
     * @param  string \$th       Row header content
     * @param  string \$td       Row standard cell content
     * @param  bool   \$escapeTd false if td content must not be html escaped
     * @return string
     */
    protected function addRow(\$th, \$td = ' ', \$escapeTd = true)
    {
        \$th = htmlspecialchars(\$th, ENT_NOQUOTES, 'UTF-8');
        if (\$escapeTd) {
            \$td = '<pre>'.htmlspecialchars(\$td, ENT_NOQUOTES, 'UTF-8').'</pre>';
        }

        return \"<tr style=\\\"padding: 4px;text-align: left;\\\">\\n<th style=\\\"vertical-align: top;background: #ccc;color: #000\\\" width=\\\"100\\\">\$th:</th>\\n<td style=\\\"padding: 4px;text-align: left;vertical-align: top;background: #eee;color: #000\\\">\".\$td.\"</td>\\n</tr>\";
    }

    /**
     * Create a HTML h1 tag
     *
     * @param  string \$title Text to be in the h1
     * @param  int    \$level Error level
     * @return string
     */
    protected function addTitle(\$title, \$level)
    {
        \$title = htmlspecialchars(\$title, ENT_NOQUOTES, 'UTF-8');

        return '<h1 style=\"background: '.\$this->logLevels[\$level].';color: #ffffff;padding: 5px;\" class=\"monolog-output\">'.\$title.'</h1>';
    }

    /**
     * Formats a log record.
     *
     * @param  array \$record A record to format
     * @return mixed The formatted record
     */
    public function format(array \$record)
    {
        \$output = \$this->addTitle(\$record['level_name'], \$record['level']);
        \$output .= '<table cellspacing=\"1\" width=\"100%\" class=\"monolog-output\">';

        \$output .= \$this->addRow('Message', (string) \$record['message']);
        \$output .= \$this->addRow('Time', \$record['datetime']->format(\$this->dateFormat));
        \$output .= \$this->addRow('Channel', \$record['channel']);
        if (\$record['context']) {
            \$embeddedTable = '<table cellspacing=\"1\" width=\"100%\">';
            foreach (\$record['context'] as \$key => \$value) {
                \$embeddedTable .= \$this->addRow(\$key, \$this->convertToString(\$value));
            }
            \$embeddedTable .= '</table>';
            \$output .= \$this->addRow('Context', \$embeddedTable, false);
        }
        if (\$record['extra']) {
            \$embeddedTable = '<table cellspacing=\"1\" width=\"100%\">';
            foreach (\$record['extra'] as \$key => \$value) {
                \$embeddedTable .= \$this->addRow(\$key, \$this->convertToString(\$value));
            }
            \$embeddedTable .= '</table>';
            \$output .= \$this->addRow('Extra', \$embeddedTable, false);
        }

        return \$output.'</table>';
    }

    /**
     * Formats a set of log records.
     *
     * @param  array \$records A set of records to format
     * @return mixed The formatted set of records
     */
    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }

    protected function convertToString(\$data)
    {
        if (null === \$data || is_scalar(\$data)) {
            return (string) \$data;
        }

        \$data = \$this->normalize(\$data);
        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            return json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }

        return str_replace('\\\\/', '/', json_encode(\$data));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php";
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

use Monolog\\Logger;

/**
 * Formats incoming records into an HTML table
 *
 * This is especially useful for html email logging
 *
 * @author Tiago Brito <tlfbrito@gmail.com>
 */
class HtmlFormatter extends NormalizerFormatter
{
    /**
     * Translates Monolog log levels to html color priorities.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => '#cccccc',
        Logger::INFO      => '#468847',
        Logger::NOTICE    => '#3a87ad',
        Logger::WARNING   => '#c09853',
        Logger::ERROR     => '#f0ad4e',
        Logger::CRITICAL  => '#FF7708',
        Logger::ALERT     => '#C12A19',
        Logger::EMERGENCY => '#000000',
    );

    /**
     * @param string \$dateFormat The format of the timestamp: one supported by DateTime::format
     */
    public function __construct(\$dateFormat = null)
    {
        parent::__construct(\$dateFormat);
    }

    /**
     * Creates an HTML table row
     *
     * @param  string \$th       Row header content
     * @param  string \$td       Row standard cell content
     * @param  bool   \$escapeTd false if td content must not be html escaped
     * @return string
     */
    protected function addRow(\$th, \$td = ' ', \$escapeTd = true)
    {
        \$th = htmlspecialchars(\$th, ENT_NOQUOTES, 'UTF-8');
        if (\$escapeTd) {
            \$td = '<pre>'.htmlspecialchars(\$td, ENT_NOQUOTES, 'UTF-8').'</pre>';
        }

        return \"<tr style=\\\"padding: 4px;text-align: left;\\\">\\n<th style=\\\"vertical-align: top;background: #ccc;color: #000\\\" width=\\\"100\\\">\$th:</th>\\n<td style=\\\"padding: 4px;text-align: left;vertical-align: top;background: #eee;color: #000\\\">\".\$td.\"</td>\\n</tr>\";
    }

    /**
     * Create a HTML h1 tag
     *
     * @param  string \$title Text to be in the h1
     * @param  int    \$level Error level
     * @return string
     */
    protected function addTitle(\$title, \$level)
    {
        \$title = htmlspecialchars(\$title, ENT_NOQUOTES, 'UTF-8');

        return '<h1 style=\"background: '.\$this->logLevels[\$level].';color: #ffffff;padding: 5px;\" class=\"monolog-output\">'.\$title.'</h1>';
    }

    /**
     * Formats a log record.
     *
     * @param  array \$record A record to format
     * @return mixed The formatted record
     */
    public function format(array \$record)
    {
        \$output = \$this->addTitle(\$record['level_name'], \$record['level']);
        \$output .= '<table cellspacing=\"1\" width=\"100%\" class=\"monolog-output\">';

        \$output .= \$this->addRow('Message', (string) \$record['message']);
        \$output .= \$this->addRow('Time', \$record['datetime']->format(\$this->dateFormat));
        \$output .= \$this->addRow('Channel', \$record['channel']);
        if (\$record['context']) {
            \$embeddedTable = '<table cellspacing=\"1\" width=\"100%\">';
            foreach (\$record['context'] as \$key => \$value) {
                \$embeddedTable .= \$this->addRow(\$key, \$this->convertToString(\$value));
            }
            \$embeddedTable .= '</table>';
            \$output .= \$this->addRow('Context', \$embeddedTable, false);
        }
        if (\$record['extra']) {
            \$embeddedTable = '<table cellspacing=\"1\" width=\"100%\">';
            foreach (\$record['extra'] as \$key => \$value) {
                \$embeddedTable .= \$this->addRow(\$key, \$this->convertToString(\$value));
            }
            \$embeddedTable .= '</table>';
            \$output .= \$this->addRow('Extra', \$embeddedTable, false);
        }

        return \$output.'</table>';
    }

    /**
     * Formats a set of log records.
     *
     * @param  array \$records A set of records to format
     * @return mixed The formatted set of records
     */
    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }

    protected function convertToString(\$data)
    {
        if (null === \$data || is_scalar(\$data)) {
            return (string) \$data;
        }

        \$data = \$this->normalize(\$data);
        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            return json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }

        return str_replace('\\\\/', '/', json_encode(\$data));
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php");
    }
}
