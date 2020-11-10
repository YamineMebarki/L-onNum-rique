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

/* vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php */
class __TwigTemplate_31aa73cfaf2a20974e2757b7e8c49c5836fb62cbe53eff1c381d438a2ce39227 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\Debug\\Exception\\SilencedErrorContext;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * LogDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoggerDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$logger;
    private \$containerPathPrefix;
    private \$currentRequest;
    private \$requestStack;

    public function __construct(\$logger = null, string \$containerPathPrefix = null, RequestStack \$requestStack = null)
    {
        if (null !== \$logger && \$logger instanceof DebugLoggerInterface) {
            \$this->logger = \$logger;
        }

        \$this->containerPathPrefix = \$containerPathPrefix;
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->currentRequest = \$this->requestStack && \$this->requestStack->getMasterRequest() !== \$request ? \$request : null;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->logger instanceof DebugLoggerInterface) {
            \$this->logger->clear();
        }
        \$this->data = [];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== \$this->logger) {
            \$containerDeprecationLogs = \$this->getContainerDeprecationLogs();
            \$this->data = \$this->computeErrorsCount(\$containerDeprecationLogs);
            // get compiler log later (only when they are needed) to improve performance
            \$this->data['compiler_logs'] = [];
            \$this->data['compiler_logs_filepath'] = \$this->containerPathPrefix.'Compiler.log';
            \$this->data['log'] = \$this->sanitizeLogs(array_merge(\$this->logger->getLogs(\$this->currentRequest), \$containerDeprecationLogs));
            \$this->data = \$this->cloneVar(\$this->data);
        }
        \$this->currentRequest = null;
    }

    public function getLogs()
    {
        return isset(\$this->data['log']) ? \$this->data['log'] : [];
    }

    public function getPriorities()
    {
        return isset(\$this->data['priorities']) ? \$this->data['priorities'] : [];
    }

    public function countErrors()
    {
        return isset(\$this->data['error_count']) ? \$this->data['error_count'] : 0;
    }

    public function countDeprecations()
    {
        return isset(\$this->data['deprecation_count']) ? \$this->data['deprecation_count'] : 0;
    }

    public function countWarnings()
    {
        return isset(\$this->data['warning_count']) ? \$this->data['warning_count'] : 0;
    }

    public function countScreams()
    {
        return isset(\$this->data['scream_count']) ? \$this->data['scream_count'] : 0;
    }

    public function getCompilerLogs()
    {
        return \$this->cloneVar(\$this->getContainerCompilerLogs(\$this->data['compiler_logs_filepath'] ?? null));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'logger';
    }

    private function getContainerDeprecationLogs()
    {
        if (null === \$this->containerPathPrefix || !file_exists(\$file = \$this->containerPathPrefix.'Deprecations.log')) {
            return [];
        }

        if ('' === \$logContent = trim(file_get_contents(\$file))) {
            return [];
        }

        \$bootTime = filemtime(\$file);
        \$log = [];
        foreach (unserialize(\$logContent) as \$log) {
            \$log['context'] = ['exception' => new SilencedErrorContext(\$log['type'], \$log['file'], \$log['line'], \$log['trace'], \$log['count'])];
            \$log['timestamp'] = \$bootTime;
            \$log['priority'] = 100;
            \$log['priorityName'] = 'DEBUG';
            \$log['channel'] = null;
            \$log['scream'] = false;
            unset(\$log['type'], \$log['file'], \$log['line'], \$log['trace'], \$log['trace'], \$log['count']);
            \$log[] = \$log;
        }

        return \$log;
    }

    private function getContainerCompilerLogs(string \$compilerLogsFilepath = null): array
    {
        if (!file_exists(\$compilerLogsFilepath)) {
            return [];
        }

        \$log = [];
        foreach (file(\$compilerLogsFilepath, FILE_IGNORE_NEW_LINES) as \$log) {
            \$log = explode(': ', \$log, 2);
            if (!isset(\$log[1]) || !preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)++\$/', \$log[0])) {
                \$log = ['Unknown Compiler Pass', implode(': ', \$log)];
            }

            \$log[\$log[0]][] = ['message' => \$log[1]];
        }

        return \$log;
    }

    private function sanitizeLogs(\$log)
    {
        \$sanitizedLogs = [];
        \$silencedLogs = [];

        foreach (\$log as \$log) {
            if (!\$this->isSilencedOrDeprecationErrorLog(\$log)) {
                \$sanitizedLogs[] = \$log;

                continue;
            }

            \$message = \$log['message'];
            \$exception = \$log['context']['exception'];

            if (\$exception instanceof SilencedErrorContext) {
                if (isset(\$silencedLogs[\$h = spl_object_hash(\$exception)])) {
                    continue;
                }
                \$silencedLogs[\$h] = true;

                if (!isset(\$sanitizedLogs[\$message])) {
                    \$sanitizedLogs[\$message] = \$log + [
                        'errorCount' => 0,
                        'scream' => true,
                    ];
                }
                \$sanitizedLogs[\$message]['errorCount'] += \$exception->count;

                continue;
            }

            \$errorId = md5(\"{\$exception->getSeverity()}/{\$exception->getLine()}/{\$exception->getFile()}\\0{\$message}\", true);

            if (isset(\$sanitizedLogs[\$errorId])) {
                ++\$sanitizedLogs[\$errorId]['errorCount'];
            } else {
                \$log += [
                    'errorCount' => 1,
                    'scream' => false,
                ];

                \$sanitizedLogs[\$errorId] = \$log;
            }
        }

        return array_values(\$sanitizedLogs);
    }

    private function isSilencedOrDeprecationErrorLog(array \$log)
    {
        if (!isset(\$log['context']['exception'])) {
            return false;
        }

        \$exception = \$log['context']['exception'];

        if (\$exception instanceof SilencedErrorContext) {
            return true;
        }

        if (\$exception instanceof \\ErrorException && \\in_array(\$exception->getSeverity(), [E_DEPRECATED, E_USER_DEPRECATED], true)) {
            return true;
        }

        return false;
    }

    private function computeErrorsCount(array \$containerDeprecationLogs)
    {
        \$silencedLogs = [];
        \$count = [
            'error_count' => \$this->logger->countErrors(\$this->currentRequest),
            'deprecation_count' => 0,
            'warning_count' => 0,
            'scream_count' => 0,
            'priorities' => [],
        ];

        foreach (\$this->logger->getLogs(\$this->currentRequest) as \$log) {
            if (isset(\$count['priorities'][\$log['priority']])) {
                ++\$count['priorities'][\$log['priority']]['count'];
            } else {
                \$count['priorities'][\$log['priority']] = [
                    'count' => 1,
                    'name' => \$log['priorityName'],
                ];
            }
            if ('WARNING' === \$log['priorityName']) {
                ++\$count['warning_count'];
            }

            if (\$this->isSilencedOrDeprecationErrorLog(\$log)) {
                \$exception = \$log['context']['exception'];
                if (\$exception instanceof SilencedErrorContext) {
                    if (isset(\$silencedLogs[\$h = spl_object_hash(\$exception)])) {
                        continue;
                    }
                    \$silencedLogs[\$h] = true;
                    \$count['scream_count'] += \$exception->count;
                } else {
                    ++\$count['deprecation_count'];
                }
            }
        }

        foreach (\$containerDeprecationLogs as \$deprecationLog) {
            \$count['deprecation_count'] += \$deprecationLog['context']['exception']->count;
        }

        ksort(\$count['priorities']);

        return \$count;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\Debug\\Exception\\SilencedErrorContext;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * LogDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoggerDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$logger;
    private \$containerPathPrefix;
    private \$currentRequest;
    private \$requestStack;

    public function __construct(\$logger = null, string \$containerPathPrefix = null, RequestStack \$requestStack = null)
    {
        if (null !== \$logger && \$logger instanceof DebugLoggerInterface) {
            \$this->logger = \$logger;
        }

        \$this->containerPathPrefix = \$containerPathPrefix;
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->currentRequest = \$this->requestStack && \$this->requestStack->getMasterRequest() !== \$request ? \$request : null;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->logger instanceof DebugLoggerInterface) {
            \$this->logger->clear();
        }
        \$this->data = [];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== \$this->logger) {
            \$containerDeprecationLogs = \$this->getContainerDeprecationLogs();
            \$this->data = \$this->computeErrorsCount(\$containerDeprecationLogs);
            // get compiler log later (only when they are needed) to improve performance
            \$this->data['compiler_logs'] = [];
            \$this->data['compiler_logs_filepath'] = \$this->containerPathPrefix.'Compiler.log';
            \$this->data['log'] = \$this->sanitizeLogs(array_merge(\$this->logger->getLogs(\$this->currentRequest), \$containerDeprecationLogs));
            \$this->data = \$this->cloneVar(\$this->data);
        }
        \$this->currentRequest = null;
    }

    public function getLogs()
    {
        return isset(\$this->data['log']) ? \$this->data['log'] : [];
    }

    public function getPriorities()
    {
        return isset(\$this->data['priorities']) ? \$this->data['priorities'] : [];
    }

    public function countErrors()
    {
        return isset(\$this->data['error_count']) ? \$this->data['error_count'] : 0;
    }

    public function countDeprecations()
    {
        return isset(\$this->data['deprecation_count']) ? \$this->data['deprecation_count'] : 0;
    }

    public function countWarnings()
    {
        return isset(\$this->data['warning_count']) ? \$this->data['warning_count'] : 0;
    }

    public function countScreams()
    {
        return isset(\$this->data['scream_count']) ? \$this->data['scream_count'] : 0;
    }

    public function getCompilerLogs()
    {
        return \$this->cloneVar(\$this->getContainerCompilerLogs(\$this->data['compiler_logs_filepath'] ?? null));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'logger';
    }

    private function getContainerDeprecationLogs()
    {
        if (null === \$this->containerPathPrefix || !file_exists(\$file = \$this->containerPathPrefix.'Deprecations.log')) {
            return [];
        }

        if ('' === \$logContent = trim(file_get_contents(\$file))) {
            return [];
        }

        \$bootTime = filemtime(\$file);
        \$log = [];
        foreach (unserialize(\$logContent) as \$log) {
            \$log['context'] = ['exception' => new SilencedErrorContext(\$log['type'], \$log['file'], \$log['line'], \$log['trace'], \$log['count'])];
            \$log['timestamp'] = \$bootTime;
            \$log['priority'] = 100;
            \$log['priorityName'] = 'DEBUG';
            \$log['channel'] = null;
            \$log['scream'] = false;
            unset(\$log['type'], \$log['file'], \$log['line'], \$log['trace'], \$log['trace'], \$log['count']);
            \$log[] = \$log;
        }

        return \$log;
    }

    private function getContainerCompilerLogs(string \$compilerLogsFilepath = null): array
    {
        if (!file_exists(\$compilerLogsFilepath)) {
            return [];
        }

        \$log = [];
        foreach (file(\$compilerLogsFilepath, FILE_IGNORE_NEW_LINES) as \$log) {
            \$log = explode(': ', \$log, 2);
            if (!isset(\$log[1]) || !preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)++\$/', \$log[0])) {
                \$log = ['Unknown Compiler Pass', implode(': ', \$log)];
            }

            \$log[\$log[0]][] = ['message' => \$log[1]];
        }

        return \$log;
    }

    private function sanitizeLogs(\$log)
    {
        \$sanitizedLogs = [];
        \$silencedLogs = [];

        foreach (\$log as \$log) {
            if (!\$this->isSilencedOrDeprecationErrorLog(\$log)) {
                \$sanitizedLogs[] = \$log;

                continue;
            }

            \$message = \$log['message'];
            \$exception = \$log['context']['exception'];

            if (\$exception instanceof SilencedErrorContext) {
                if (isset(\$silencedLogs[\$h = spl_object_hash(\$exception)])) {
                    continue;
                }
                \$silencedLogs[\$h] = true;

                if (!isset(\$sanitizedLogs[\$message])) {
                    \$sanitizedLogs[\$message] = \$log + [
                        'errorCount' => 0,
                        'scream' => true,
                    ];
                }
                \$sanitizedLogs[\$message]['errorCount'] += \$exception->count;

                continue;
            }

            \$errorId = md5(\"{\$exception->getSeverity()}/{\$exception->getLine()}/{\$exception->getFile()}\\0{\$message}\", true);

            if (isset(\$sanitizedLogs[\$errorId])) {
                ++\$sanitizedLogs[\$errorId]['errorCount'];
            } else {
                \$log += [
                    'errorCount' => 1,
                    'scream' => false,
                ];

                \$sanitizedLogs[\$errorId] = \$log;
            }
        }

        return array_values(\$sanitizedLogs);
    }

    private function isSilencedOrDeprecationErrorLog(array \$log)
    {
        if (!isset(\$log['context']['exception'])) {
            return false;
        }

        \$exception = \$log['context']['exception'];

        if (\$exception instanceof SilencedErrorContext) {
            return true;
        }

        if (\$exception instanceof \\ErrorException && \\in_array(\$exception->getSeverity(), [E_DEPRECATED, E_USER_DEPRECATED], true)) {
            return true;
        }

        return false;
    }

    private function computeErrorsCount(array \$containerDeprecationLogs)
    {
        \$silencedLogs = [];
        \$count = [
            'error_count' => \$this->logger->countErrors(\$this->currentRequest),
            'deprecation_count' => 0,
            'warning_count' => 0,
            'scream_count' => 0,
            'priorities' => [],
        ];

        foreach (\$this->logger->getLogs(\$this->currentRequest) as \$log) {
            if (isset(\$count['priorities'][\$log['priority']])) {
                ++\$count['priorities'][\$log['priority']]['count'];
            } else {
                \$count['priorities'][\$log['priority']] = [
                    'count' => 1,
                    'name' => \$log['priorityName'],
                ];
            }
            if ('WARNING' === \$log['priorityName']) {
                ++\$count['warning_count'];
            }

            if (\$this->isSilencedOrDeprecationErrorLog(\$log)) {
                \$exception = \$log['context']['exception'];
                if (\$exception instanceof SilencedErrorContext) {
                    if (isset(\$silencedLogs[\$h = spl_object_hash(\$exception)])) {
                        continue;
                    }
                    \$silencedLogs[\$h] = true;
                    \$count['scream_count'] += \$exception->count;
                } else {
                    ++\$count['deprecation_count'];
                }
            }
        }

        foreach (\$containerDeprecationLogs as \$deprecationLog) {
            \$count['deprecation_count'] += \$deprecationLog['context']['exception']->count;
        }

        ksort(\$count['priorities']);

        return \$count;
    }
}
", "vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php");
    }
}
