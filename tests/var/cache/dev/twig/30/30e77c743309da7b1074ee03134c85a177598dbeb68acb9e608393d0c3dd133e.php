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

/* vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php */
class __TwigTemplate_20ca084ff6046c156bed8fd66fa1a7d1a6206f5efc04a812b279ca91f1a89c52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php"));

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

/**
 * Used for testing purposes.
 *
 * It records all records and gives you access to them for verification.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @method bool hasEmergency(\$record)
 * @method bool hasAlert(\$record)
 * @method bool hasCritical(\$record)
 * @method bool hasError(\$record)
 * @method bool hasWarning(\$record)
 * @method bool hasNotice(\$record)
 * @method bool hasInfo(\$record)
 * @method bool hasDebug(\$record)
 *
 * @method bool hasEmergencyRecords()
 * @method bool hasAlertRecords()
 * @method bool hasCriticalRecords()
 * @method bool hasErrorRecords()
 * @method bool hasWarningRecords()
 * @method bool hasNoticeRecords()
 * @method bool hasInfoRecords()
 * @method bool hasDebugRecords()
 *
 * @method bool hasEmergencyThatContains(\$message)
 * @method bool hasAlertThatContains(\$message)
 * @method bool hasCriticalThatContains(\$message)
 * @method bool hasErrorThatContains(\$message)
 * @method bool hasWarningThatContains(\$message)
 * @method bool hasNoticeThatContains(\$message)
 * @method bool hasInfoThatContains(\$message)
 * @method bool hasDebugThatContains(\$message)
 *
 * @method bool hasEmergencyThatMatches(\$message)
 * @method bool hasAlertThatMatches(\$message)
 * @method bool hasCriticalThatMatches(\$message)
 * @method bool hasErrorThatMatches(\$message)
 * @method bool hasWarningThatMatches(\$message)
 * @method bool hasNoticeThatMatches(\$message)
 * @method bool hasInfoThatMatches(\$message)
 * @method bool hasDebugThatMatches(\$message)
 *
 * @method bool hasEmergencyThatPasses(\$message)
 * @method bool hasAlertThatPasses(\$message)
 * @method bool hasCriticalThatPasses(\$message)
 * @method bool hasErrorThatPasses(\$message)
 * @method bool hasWarningThatPasses(\$message)
 * @method bool hasNoticeThatPasses(\$message)
 * @method bool hasInfoThatPasses(\$message)
 * @method bool hasDebugThatPasses(\$message)
 */
class TestHandler extends AbstractProcessingHandler
{
    protected \$records = array();
    protected \$recordsByLevel = array();
    private \$skipReset = false;

    public function getRecords()
    {
        return \$this->records;
    }

    public function clear()
    {
        \$this->records = array();
        \$this->recordsByLevel = array();
    }

    public function reset()
    {
        if (!\$this->skipReset) {
            \$this->clear();
        }
    }

    public function setSkipReset(\$skipReset)
    {
        \$this->skipReset = \$skipReset;
    }

    public function hasRecords(\$level)
    {
        return isset(\$this->recordsByLevel[\$level]);
    }

    /**
     * @param string|array \$record Either a message string or an array containing message and optionally context keys that will be checked against all records
     * @param int          \$level  Logger::LEVEL constant value
     */
    public function hasRecord(\$record, \$level)
    {
        if (is_string(\$record)) {
            \$record = array('message' => \$record);
        }

        return \$this->hasRecordThatPasses(function (\$rec) use (\$record) {
            if (\$rec['message'] !== \$record['message']) {
                return false;
            }
            if (isset(\$record['context']) && \$rec['context'] !== \$record['context']) {
                return false;
            }
            return true;
        }, \$level);
    }

    public function hasRecordThatContains(\$message, \$level)
    {
        return \$this->hasRecordThatPasses(function (\$rec) use (\$message) {
            return strpos(\$rec['message'], \$message) !== false;
        }, \$level);
    }

    public function hasRecordThatMatches(\$regex, \$level)
    {
        return \$this->hasRecordThatPasses(function (\$rec) use (\$regex) {
            return preg_match(\$regex, \$rec['message']) > 0;
        }, \$level);
    }

    public function hasRecordThatPasses(\$predicate, \$level)
    {
        if (!is_callable(\$predicate)) {
            throw new \\InvalidArgumentException(\"Expected a callable for hasRecordThatSucceeds\");
        }

        if (!isset(\$this->recordsByLevel[\$level])) {
            return false;
        }

        foreach (\$this->recordsByLevel[\$level] as \$i => \$rec) {
            if (call_user_func(\$predicate, \$rec, \$i)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->recordsByLevel[\$record['level']][] = \$record;
        \$this->records[] = \$record;
    }

    public function __call(\$method, \$args)
    {
        if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', \$method, \$matches) > 0) {
            \$genericMethod = \$matches[1] . ('Records' !== \$matches[3] ? 'Record' : '') . \$matches[3];
            \$level = constant('Monolog\\Logger::' . strtoupper(\$matches[2]));
            if (method_exists(\$this, \$genericMethod)) {
                \$args[] = \$level;

                return call_user_func_array(array(\$this, \$genericMethod), \$args);
            }
        }

        throw new \\BadMethodCallException('Call to undefined method ' . get_class(\$this) . '::' . \$method . '()');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php";
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

/**
 * Used for testing purposes.
 *
 * It records all records and gives you access to them for verification.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @method bool hasEmergency(\$record)
 * @method bool hasAlert(\$record)
 * @method bool hasCritical(\$record)
 * @method bool hasError(\$record)
 * @method bool hasWarning(\$record)
 * @method bool hasNotice(\$record)
 * @method bool hasInfo(\$record)
 * @method bool hasDebug(\$record)
 *
 * @method bool hasEmergencyRecords()
 * @method bool hasAlertRecords()
 * @method bool hasCriticalRecords()
 * @method bool hasErrorRecords()
 * @method bool hasWarningRecords()
 * @method bool hasNoticeRecords()
 * @method bool hasInfoRecords()
 * @method bool hasDebugRecords()
 *
 * @method bool hasEmergencyThatContains(\$message)
 * @method bool hasAlertThatContains(\$message)
 * @method bool hasCriticalThatContains(\$message)
 * @method bool hasErrorThatContains(\$message)
 * @method bool hasWarningThatContains(\$message)
 * @method bool hasNoticeThatContains(\$message)
 * @method bool hasInfoThatContains(\$message)
 * @method bool hasDebugThatContains(\$message)
 *
 * @method bool hasEmergencyThatMatches(\$message)
 * @method bool hasAlertThatMatches(\$message)
 * @method bool hasCriticalThatMatches(\$message)
 * @method bool hasErrorThatMatches(\$message)
 * @method bool hasWarningThatMatches(\$message)
 * @method bool hasNoticeThatMatches(\$message)
 * @method bool hasInfoThatMatches(\$message)
 * @method bool hasDebugThatMatches(\$message)
 *
 * @method bool hasEmergencyThatPasses(\$message)
 * @method bool hasAlertThatPasses(\$message)
 * @method bool hasCriticalThatPasses(\$message)
 * @method bool hasErrorThatPasses(\$message)
 * @method bool hasWarningThatPasses(\$message)
 * @method bool hasNoticeThatPasses(\$message)
 * @method bool hasInfoThatPasses(\$message)
 * @method bool hasDebugThatPasses(\$message)
 */
class TestHandler extends AbstractProcessingHandler
{
    protected \$records = array();
    protected \$recordsByLevel = array();
    private \$skipReset = false;

    public function getRecords()
    {
        return \$this->records;
    }

    public function clear()
    {
        \$this->records = array();
        \$this->recordsByLevel = array();
    }

    public function reset()
    {
        if (!\$this->skipReset) {
            \$this->clear();
        }
    }

    public function setSkipReset(\$skipReset)
    {
        \$this->skipReset = \$skipReset;
    }

    public function hasRecords(\$level)
    {
        return isset(\$this->recordsByLevel[\$level]);
    }

    /**
     * @param string|array \$record Either a message string or an array containing message and optionally context keys that will be checked against all records
     * @param int          \$level  Logger::LEVEL constant value
     */
    public function hasRecord(\$record, \$level)
    {
        if (is_string(\$record)) {
            \$record = array('message' => \$record);
        }

        return \$this->hasRecordThatPasses(function (\$rec) use (\$record) {
            if (\$rec['message'] !== \$record['message']) {
                return false;
            }
            if (isset(\$record['context']) && \$rec['context'] !== \$record['context']) {
                return false;
            }
            return true;
        }, \$level);
    }

    public function hasRecordThatContains(\$message, \$level)
    {
        return \$this->hasRecordThatPasses(function (\$rec) use (\$message) {
            return strpos(\$rec['message'], \$message) !== false;
        }, \$level);
    }

    public function hasRecordThatMatches(\$regex, \$level)
    {
        return \$this->hasRecordThatPasses(function (\$rec) use (\$regex) {
            return preg_match(\$regex, \$rec['message']) > 0;
        }, \$level);
    }

    public function hasRecordThatPasses(\$predicate, \$level)
    {
        if (!is_callable(\$predicate)) {
            throw new \\InvalidArgumentException(\"Expected a callable for hasRecordThatSucceeds\");
        }

        if (!isset(\$this->recordsByLevel[\$level])) {
            return false;
        }

        foreach (\$this->recordsByLevel[\$level] as \$i => \$rec) {
            if (call_user_func(\$predicate, \$rec, \$i)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->recordsByLevel[\$record['level']][] = \$record;
        \$this->records[] = \$record;
    }

    public function __call(\$method, \$args)
    {
        if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', \$method, \$matches) > 0) {
            \$genericMethod = \$matches[1] . ('Records' !== \$matches[3] ? 'Record' : '') . \$matches[3];
            \$level = constant('Monolog\\Logger::' . strtoupper(\$matches[2]));
            if (method_exists(\$this, \$genericMethod)) {
                \$args[] = \$level;

                return call_user_func_array(array(\$this, \$genericMethod), \$args);
            }
        }

        throw new \\BadMethodCallException('Call to undefined method ' . get_class(\$this) . '::' . \$method . '()');
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php");
    }
}
