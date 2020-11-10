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

/* vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php */
class __TwigTemplate_ef641199bd99158cc96874eda9549757b021084ceba7241cc46a72fd6b6adfca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php"));

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
 * Serializes a log message according to Wildfire's header requirements
 *
 * @author Eric Clemmons (@ericclemmons) <eric@uxdriven.com>
 * @author Christophe Coevoet <stof@notk.org>
 * @author Kirill chEbba Chebunin <iam@chebba.org>
 */
class WildfireFormatter extends NormalizerFormatter
{
    const TABLE = 'table';

    /**
     * Translates Monolog log levels to Wildfire levels.
     */
    private \$logLevels = array(
        Logger::DEBUG     => 'LOG',
        Logger::INFO      => 'INFO',
        Logger::NOTICE    => 'INFO',
        Logger::WARNING   => 'WARN',
        Logger::ERROR     => 'ERROR',
        Logger::CRITICAL  => 'ERROR',
        Logger::ALERT     => 'ERROR',
        Logger::EMERGENCY => 'ERROR',
    );

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        // Retrieve the line and file if set and remove them from the formatted extra
        \$file = \$line = '';
        if (isset(\$record['extra']['file'])) {
            \$file = \$record['extra']['file'];
            unset(\$record['extra']['file']);
        }
        if (isset(\$record['extra']['line'])) {
            \$line = \$record['extra']['line'];
            unset(\$record['extra']['line']);
        }

        \$record = \$this->normalize(\$record);
        \$message = array('message' => \$record['message']);
        \$handleError = false;
        if (\$record['context']) {
            \$message['context'] = \$record['context'];
            \$handleError = true;
        }
        if (\$record['extra']) {
            \$message['extra'] = \$record['extra'];
            \$handleError = true;
        }
        if (count(\$message) === 1) {
            \$message = reset(\$message);
        }

        if (isset(\$record['context'][self::TABLE])) {
            \$type  = 'TABLE';
            \$label = \$record['channel'] .': '. \$record['message'];
            \$message = \$record['context'][self::TABLE];
        } else {
            \$type  = \$this->logLevels[\$record['level']];
            \$label = \$record['channel'];
        }

        // Create JSON object describing the appearance of the message in the console
        \$json = \$this->toJson(array(
            array(
                'Type'  => \$type,
                'File'  => \$file,
                'Line'  => \$line,
                'Label' => \$label,
            ),
            \$message,
        ), \$handleError);

        // The message itself is a serialization of the above JSON object + it's length
        return sprintf(
            '%s|%s|',
            strlen(\$json),
            \$json
        );
    }

    public function formatBatch(array \$records)
    {
        throw new \\BadMethodCallException('Batch formatting does not make sense for the WildfireFormatter');
    }

    protected function normalize(\$data, \$depth = 0)
    {
        if (is_object(\$data) && !\$data instanceof \\DateTime) {
            return \$data;
        }

        return parent::normalize(\$data, \$depth);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php";
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
 * Serializes a log message according to Wildfire's header requirements
 *
 * @author Eric Clemmons (@ericclemmons) <eric@uxdriven.com>
 * @author Christophe Coevoet <stof@notk.org>
 * @author Kirill chEbba Chebunin <iam@chebba.org>
 */
class WildfireFormatter extends NormalizerFormatter
{
    const TABLE = 'table';

    /**
     * Translates Monolog log levels to Wildfire levels.
     */
    private \$logLevels = array(
        Logger::DEBUG     => 'LOG',
        Logger::INFO      => 'INFO',
        Logger::NOTICE    => 'INFO',
        Logger::WARNING   => 'WARN',
        Logger::ERROR     => 'ERROR',
        Logger::CRITICAL  => 'ERROR',
        Logger::ALERT     => 'ERROR',
        Logger::EMERGENCY => 'ERROR',
    );

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        // Retrieve the line and file if set and remove them from the formatted extra
        \$file = \$line = '';
        if (isset(\$record['extra']['file'])) {
            \$file = \$record['extra']['file'];
            unset(\$record['extra']['file']);
        }
        if (isset(\$record['extra']['line'])) {
            \$line = \$record['extra']['line'];
            unset(\$record['extra']['line']);
        }

        \$record = \$this->normalize(\$record);
        \$message = array('message' => \$record['message']);
        \$handleError = false;
        if (\$record['context']) {
            \$message['context'] = \$record['context'];
            \$handleError = true;
        }
        if (\$record['extra']) {
            \$message['extra'] = \$record['extra'];
            \$handleError = true;
        }
        if (count(\$message) === 1) {
            \$message = reset(\$message);
        }

        if (isset(\$record['context'][self::TABLE])) {
            \$type  = 'TABLE';
            \$label = \$record['channel'] .': '. \$record['message'];
            \$message = \$record['context'][self::TABLE];
        } else {
            \$type  = \$this->logLevels[\$record['level']];
            \$label = \$record['channel'];
        }

        // Create JSON object describing the appearance of the message in the console
        \$json = \$this->toJson(array(
            array(
                'Type'  => \$type,
                'File'  => \$file,
                'Line'  => \$line,
                'Label' => \$label,
            ),
            \$message,
        ), \$handleError);

        // The message itself is a serialization of the above JSON object + it's length
        return sprintf(
            '%s|%s|',
            strlen(\$json),
            \$json
        );
    }

    public function formatBatch(array \$records)
    {
        throw new \\BadMethodCallException('Batch formatting does not make sense for the WildfireFormatter');
    }

    protected function normalize(\$data, \$depth = 0)
    {
        if (is_object(\$data) && !\$data instanceof \\DateTime) {
            return \$data;
        }

        return parent::normalize(\$data, \$depth);
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php");
    }
}
