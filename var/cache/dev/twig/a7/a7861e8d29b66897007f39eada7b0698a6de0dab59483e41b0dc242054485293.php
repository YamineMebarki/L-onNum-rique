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

/* vendor/psr/log/Psr/Log/Test/TestLogger.php */
class __TwigTemplate_2961085134ad621ab12edbf469463e54e708cdeb47fe39d44c8a4969dd35ad8f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/log/Psr/Log/Test/TestLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/log/Psr/Log/Test/TestLogger.php"));

        // line 1
        echo "<?php

namespace Psr\\Log\\Test;

use Psr\\Log\\AbstractLogger;

/**
 * Used for testing purposes.
 *
 * It records all records and gives you access to them for verification.
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
class TestLogger extends AbstractLogger
{
    /**
     * @var array
     */
    public \$records = [];

    public \$recordsByLevel = [];

    /**
     * @inheritdoc
     */
    public function log(\$level, \$message, array \$context = [])
    {
        \$record = [
            'level' => \$level,
            'message' => \$message,
            'context' => \$context,
        ];

        \$this->recordsByLevel[\$record['level']][] = \$record;
        \$this->records[] = \$record;
    }

    public function hasRecords(\$level)
    {
        return isset(\$this->recordsByLevel[\$level]);
    }

    public function hasRecord(\$record, \$level)
    {
        if (is_string(\$record)) {
            \$record = ['message' => \$record];
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

    public function hasRecordThatPasses(callable \$predicate, \$level)
    {
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

    public function __call(\$method, \$args)
    {
        if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', \$method, \$matches) > 0) {
            \$genericMethod = \$matches[1] . ('Records' !== \$matches[3] ? 'Record' : '') . \$matches[3];
            \$level = strtolower(\$matches[2]);
            if (method_exists(\$this, \$genericMethod)) {
                \$args[] = \$level;
                return call_user_func_array([\$this, \$genericMethod], \$args);
            }
        }
        throw new \\BadMethodCallException('Call to undefined method ' . get_class(\$this) . '::' . \$method . '()');
    }

    public function reset()
    {
        \$this->records = [];
        \$this->recordsByLevel = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/log/Psr/Log/Test/TestLogger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Psr\\Log\\Test;

use Psr\\Log\\AbstractLogger;

/**
 * Used for testing purposes.
 *
 * It records all records and gives you access to them for verification.
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
class TestLogger extends AbstractLogger
{
    /**
     * @var array
     */
    public \$records = [];

    public \$recordsByLevel = [];

    /**
     * @inheritdoc
     */
    public function log(\$level, \$message, array \$context = [])
    {
        \$record = [
            'level' => \$level,
            'message' => \$message,
            'context' => \$context,
        ];

        \$this->recordsByLevel[\$record['level']][] = \$record;
        \$this->records[] = \$record;
    }

    public function hasRecords(\$level)
    {
        return isset(\$this->recordsByLevel[\$level]);
    }

    public function hasRecord(\$record, \$level)
    {
        if (is_string(\$record)) {
            \$record = ['message' => \$record];
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

    public function hasRecordThatPasses(callable \$predicate, \$level)
    {
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

    public function __call(\$method, \$args)
    {
        if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', \$method, \$matches) > 0) {
            \$genericMethod = \$matches[1] . ('Records' !== \$matches[3] ? 'Record' : '') . \$matches[3];
            \$level = strtolower(\$matches[2]);
            if (method_exists(\$this, \$genericMethod)) {
                \$args[] = \$level;
                return call_user_func_array([\$this, \$genericMethod], \$args);
            }
        }
        throw new \\BadMethodCallException('Call to undefined method ' . get_class(\$this) . '::' . \$method . '()');
    }

    public function reset()
    {
        \$this->records = [];
        \$this->recordsByLevel = [];
    }
}
", "vendor/psr/log/Psr/Log/Test/TestLogger.php", "/var/www/public/DevLaon/templates/vendor/psr/log/Psr/Log/Test/TestLogger.php");
    }
}
