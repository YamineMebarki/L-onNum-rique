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

/* vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php */
class __TwigTemplate_17751936e951c1e1463cf3972b9f835410db1fe2ff9b483a560f5d27a91e8139 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php"));

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

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects line/file:class/function where the log message came from
 *
 * Warning: This only works if the handler processes the log directly.
 * If you put the processor on a handler that is behind a FingersCrossedHandler
 * for example, the processor will only be called once the trigger level is reached,
 * and all the log records will have the same file/line/.. data from the call that
 * triggered the FingersCrossedHandler.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class IntrospectionProcessor implements ProcessorInterface
{
    private \$level;

    private \$skipClassesPartials;

    private \$skipStackFramesCount;

    private \$skipFunctions = array(
        'call_user_func',
        'call_user_func_array',
    );

    public function __construct(\$level = Logger::DEBUG, array \$skipClassesPartials = array(), \$skipStackFramesCount = 0)
    {
        \$this->level = Logger::toMonologLevel(\$level);
        \$this->skipClassesPartials = array_merge(array('Monolog\\\\'), \$skipClassesPartials);
        \$this->skipStackFramesCount = \$skipStackFramesCount;
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // return if the level is not high enough
        if (\$record['level'] < \$this->level) {
            return \$record;
        }

        /*
        * http://php.net/manual/en/function.debug-backtrace.php
        * As of 5.3.6, DEBUG_BACKTRACE_IGNORE_ARGS option was added.
        * Any version less than 5.3.6 must use the DEBUG_BACKTRACE_IGNORE_ARGS constant value '2'.
        */
        \$trace = debug_backtrace((PHP_VERSION_ID < 50306) ? 2 : DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift(\$trace);
        // the call_user_func call is also skipped
        array_shift(\$trace);

        \$i = 0;

        while (\$this->isTraceClassOrSkippedFunction(\$trace, \$i)) {
            if (isset(\$trace[\$i]['class'])) {
                foreach (\$this->skipClassesPartials as \$part) {
                    if (strpos(\$trace[\$i]['class'], \$part) !== false) {
                        \$i++;
                        continue 2;
                    }
                }
            } elseif (in_array(\$trace[\$i]['function'], \$this->skipFunctions)) {
                \$i++;
                continue;
            }

            break;
        }

        \$i += \$this->skipStackFramesCount;

        // we should have the call source now
        \$record['extra'] = array_merge(
            \$record['extra'],
            array(
                'file'      => isset(\$trace[\$i - 1]['file']) ? \$trace[\$i - 1]['file'] : null,
                'line'      => isset(\$trace[\$i - 1]['line']) ? \$trace[\$i - 1]['line'] : null,
                'class'     => isset(\$trace[\$i]['class']) ? \$trace[\$i]['class'] : null,
                'function'  => isset(\$trace[\$i]['function']) ? \$trace[\$i]['function'] : null,
            )
        );

        return \$record;
    }

    private function isTraceClassOrSkippedFunction(array \$trace, \$index)
    {
        if (!isset(\$trace[\$index])) {
            return false;
        }

        return isset(\$trace[\$index]['class']) || in_array(\$trace[\$index]['function'], \$this->skipFunctions);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php";
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

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects line/file:class/function where the log message came from
 *
 * Warning: This only works if the handler processes the log directly.
 * If you put the processor on a handler that is behind a FingersCrossedHandler
 * for example, the processor will only be called once the trigger level is reached,
 * and all the log records will have the same file/line/.. data from the call that
 * triggered the FingersCrossedHandler.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class IntrospectionProcessor implements ProcessorInterface
{
    private \$level;

    private \$skipClassesPartials;

    private \$skipStackFramesCount;

    private \$skipFunctions = array(
        'call_user_func',
        'call_user_func_array',
    );

    public function __construct(\$level = Logger::DEBUG, array \$skipClassesPartials = array(), \$skipStackFramesCount = 0)
    {
        \$this->level = Logger::toMonologLevel(\$level);
        \$this->skipClassesPartials = array_merge(array('Monolog\\\\'), \$skipClassesPartials);
        \$this->skipStackFramesCount = \$skipStackFramesCount;
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // return if the level is not high enough
        if (\$record['level'] < \$this->level) {
            return \$record;
        }

        /*
        * http://php.net/manual/en/function.debug-backtrace.php
        * As of 5.3.6, DEBUG_BACKTRACE_IGNORE_ARGS option was added.
        * Any version less than 5.3.6 must use the DEBUG_BACKTRACE_IGNORE_ARGS constant value '2'.
        */
        \$trace = debug_backtrace((PHP_VERSION_ID < 50306) ? 2 : DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift(\$trace);
        // the call_user_func call is also skipped
        array_shift(\$trace);

        \$i = 0;

        while (\$this->isTraceClassOrSkippedFunction(\$trace, \$i)) {
            if (isset(\$trace[\$i]['class'])) {
                foreach (\$this->skipClassesPartials as \$part) {
                    if (strpos(\$trace[\$i]['class'], \$part) !== false) {
                        \$i++;
                        continue 2;
                    }
                }
            } elseif (in_array(\$trace[\$i]['function'], \$this->skipFunctions)) {
                \$i++;
                continue;
            }

            break;
        }

        \$i += \$this->skipStackFramesCount;

        // we should have the call source now
        \$record['extra'] = array_merge(
            \$record['extra'],
            array(
                'file'      => isset(\$trace[\$i - 1]['file']) ? \$trace[\$i - 1]['file'] : null,
                'line'      => isset(\$trace[\$i - 1]['line']) ? \$trace[\$i - 1]['line'] : null,
                'class'     => isset(\$trace[\$i]['class']) ? \$trace[\$i]['class'] : null,
                'function'  => isset(\$trace[\$i]['function']) ? \$trace[\$i]['function'] : null,
            )
        );

        return \$record;
    }

    private function isTraceClassOrSkippedFunction(array \$trace, \$index)
    {
        if (!isset(\$trace[\$index])) {
            return false;
        }

        return isset(\$trace[\$index]['class']) || in_array(\$trace[\$index]['function'], \$this->skipFunctions);
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php");
    }
}
