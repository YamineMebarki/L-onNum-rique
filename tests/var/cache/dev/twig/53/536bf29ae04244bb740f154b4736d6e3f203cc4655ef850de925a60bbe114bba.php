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

/* vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php */
class __TwigTemplate_db1f55028d6985a3cf4355d2a9bb202c73afb94fbb9d067b531839f70b9d1603 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php"));

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
 * Formats a log message according to the ChromePHP array format
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChromePHPFormatter implements FormatterInterface
{
    /**
     * Translates Monolog log levels to Wildfire levels.
     */
    private \$logLevels = array(
        Logger::DEBUG     => 'log',
        Logger::INFO      => 'info',
        Logger::NOTICE    => 'info',
        Logger::WARNING   => 'warn',
        Logger::ERROR     => 'error',
        Logger::CRITICAL  => 'error',
        Logger::ALERT     => 'error',
        Logger::EMERGENCY => 'error',
    );

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        // Retrieve the line and file if set and remove them from the formatted extra
        \$backtrace = 'unknown';
        if (isset(\$record['extra']['file'], \$record['extra']['line'])) {
            \$backtrace = \$record['extra']['file'].' : '.\$record['extra']['line'];
            unset(\$record['extra']['file'], \$record['extra']['line']);
        }

        \$message = array('message' => \$record['message']);
        if (\$record['context']) {
            \$message['context'] = \$record['context'];
        }
        if (\$record['extra']) {
            \$message['extra'] = \$record['extra'];
        }
        if (count(\$message) === 1) {
            \$message = reset(\$message);
        }

        return array(
            \$record['channel'],
            \$message,
            \$backtrace,
            \$this->logLevels[\$record['level']],
        );
    }

    public function formatBatch(array \$records)
    {
        \$formatted = array();

        foreach (\$records as \$record) {
            \$formatted[] = \$this->format(\$record);
        }

        return \$formatted;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php";
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
 * Formats a log message according to the ChromePHP array format
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChromePHPFormatter implements FormatterInterface
{
    /**
     * Translates Monolog log levels to Wildfire levels.
     */
    private \$logLevels = array(
        Logger::DEBUG     => 'log',
        Logger::INFO      => 'info',
        Logger::NOTICE    => 'info',
        Logger::WARNING   => 'warn',
        Logger::ERROR     => 'error',
        Logger::CRITICAL  => 'error',
        Logger::ALERT     => 'error',
        Logger::EMERGENCY => 'error',
    );

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        // Retrieve the line and file if set and remove them from the formatted extra
        \$backtrace = 'unknown';
        if (isset(\$record['extra']['file'], \$record['extra']['line'])) {
            \$backtrace = \$record['extra']['file'].' : '.\$record['extra']['line'];
            unset(\$record['extra']['file'], \$record['extra']['line']);
        }

        \$message = array('message' => \$record['message']);
        if (\$record['context']) {
            \$message['context'] = \$record['context'];
        }
        if (\$record['extra']) {
            \$message['extra'] = \$record['extra'];
        }
        if (count(\$message) === 1) {
            \$message = reset(\$message);
        }

        return array(
            \$record['channel'],
            \$message,
            \$backtrace,
            \$this->logLevels[\$record['level']],
        );
    }

    public function formatBatch(array \$records)
    {
        \$formatted = array();

        foreach (\$records as \$record) {
            \$formatted[] = \$this->format(\$record);
        }

        return \$formatted;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php");
    }
}
