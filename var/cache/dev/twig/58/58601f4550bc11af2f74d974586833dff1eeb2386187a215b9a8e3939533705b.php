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

/* vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php */
class __TwigTemplate_d443f66057d00ec75b22e62fd2e8d982aebc972757129296f29acd3eba6d00b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php"));

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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Aggregates several cache warmers into a single one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class CacheWarmerAggregate implements CacheWarmerInterface
{
    private \$warmers;
    private \$debug;
    private \$deprecationLogsFilepath;
    private \$optionalsEnabled = false;
    private \$onlyOptionalsEnabled = false;

    public function __construct(iterable \$warmers = [], bool \$debug = false, string \$deprecationLogsFilepath = null)
    {
        \$this->warmers = \$warmers;
        \$this->debug = \$debug;
        \$this->deprecationLogsFilepath = \$deprecationLogsFilepath;
    }

    public function enableOptionalWarmers()
    {
        \$this->optionalsEnabled = true;
    }

    public function enableOnlyOptionalWarmers()
    {
        \$this->onlyOptionalsEnabled = \$this->optionalsEnabled = true;
    }

    /**
     * Warms up the cache.
     *
     * @param string \$cacheDir The cache directory
     */
    public function warmUp(\$cacheDir)
    {
        if (\$collectDeprecations = \$this->debug && !\\defined('PHPUNIT_COMPOSER_INSTALL')) {
            \$collectedLogs = [];
            \$previousHandler = set_error_handler(function (\$type, \$message, \$file, \$line) use (&\$collectedLogs, &\$previousHandler) {
                if (E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type) {
                    return \$previousHandler ? \$previousHandler(\$type, \$message, \$file, \$line) : false;
                }

                if (isset(\$collectedLogs[\$message])) {
                    ++\$collectedLogs[\$message]['count'];

                    return null;
                }

                \$backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);
                // Clean the trace by removing first frames added by the error handler itself.
                for (\$i = 0; isset(\$backtrace[\$i]); ++\$i) {
                    if (isset(\$backtrace[\$i]['file'], \$backtrace[\$i]['line']) && \$backtrace[\$i]['line'] === \$line && \$backtrace[\$i]['file'] === \$file) {
                        \$backtrace = \\array_slice(\$backtrace, 1 + \$i);
                        break;
                    }
                }

                \$collectedLogs[\$message] = [
                    'type' => \$type,
                    'message' => \$message,
                    'file' => \$file,
                    'line' => \$line,
                    'trace' => \$backtrace,
                    'count' => 1,
                ];

                return null;
            });
        }

        try {
            foreach (\$this->warmers as \$warmer) {
                if (!\$this->optionalsEnabled && \$warmer->isOptional()) {
                    continue;
                }
                if (\$this->onlyOptionalsEnabled && !\$warmer->isOptional()) {
                    continue;
                }

                \$warmer->warmUp(\$cacheDir);
            }
        } finally {
            if (\$collectDeprecations) {
                restore_error_handler();

                if (file_exists(\$this->deprecationLogsFilepath)) {
                    \$previousLogs = unserialize(file_get_contents(\$this->deprecationLogsFilepath));
                    \$collectedLogs = array_merge(\$previousLogs, \$collectedLogs);
                }

                file_put_contents(\$this->deprecationLogsFilepath, serialize(array_values(\$collectedLogs)));
            }
        }
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always false
     */
    public function isOptional()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php";
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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Aggregates several cache warmers into a single one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class CacheWarmerAggregate implements CacheWarmerInterface
{
    private \$warmers;
    private \$debug;
    private \$deprecationLogsFilepath;
    private \$optionalsEnabled = false;
    private \$onlyOptionalsEnabled = false;

    public function __construct(iterable \$warmers = [], bool \$debug = false, string \$deprecationLogsFilepath = null)
    {
        \$this->warmers = \$warmers;
        \$this->debug = \$debug;
        \$this->deprecationLogsFilepath = \$deprecationLogsFilepath;
    }

    public function enableOptionalWarmers()
    {
        \$this->optionalsEnabled = true;
    }

    public function enableOnlyOptionalWarmers()
    {
        \$this->onlyOptionalsEnabled = \$this->optionalsEnabled = true;
    }

    /**
     * Warms up the cache.
     *
     * @param string \$cacheDir The cache directory
     */
    public function warmUp(\$cacheDir)
    {
        if (\$collectDeprecations = \$this->debug && !\\defined('PHPUNIT_COMPOSER_INSTALL')) {
            \$collectedLogs = [];
            \$previousHandler = set_error_handler(function (\$type, \$message, \$file, \$line) use (&\$collectedLogs, &\$previousHandler) {
                if (E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type) {
                    return \$previousHandler ? \$previousHandler(\$type, \$message, \$file, \$line) : false;
                }

                if (isset(\$collectedLogs[\$message])) {
                    ++\$collectedLogs[\$message]['count'];

                    return null;
                }

                \$backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);
                // Clean the trace by removing first frames added by the error handler itself.
                for (\$i = 0; isset(\$backtrace[\$i]); ++\$i) {
                    if (isset(\$backtrace[\$i]['file'], \$backtrace[\$i]['line']) && \$backtrace[\$i]['line'] === \$line && \$backtrace[\$i]['file'] === \$file) {
                        \$backtrace = \\array_slice(\$backtrace, 1 + \$i);
                        break;
                    }
                }

                \$collectedLogs[\$message] = [
                    'type' => \$type,
                    'message' => \$message,
                    'file' => \$file,
                    'line' => \$line,
                    'trace' => \$backtrace,
                    'count' => 1,
                ];

                return null;
            });
        }

        try {
            foreach (\$this->warmers as \$warmer) {
                if (!\$this->optionalsEnabled && \$warmer->isOptional()) {
                    continue;
                }
                if (\$this->onlyOptionalsEnabled && !\$warmer->isOptional()) {
                    continue;
                }

                \$warmer->warmUp(\$cacheDir);
            }
        } finally {
            if (\$collectDeprecations) {
                restore_error_handler();

                if (file_exists(\$this->deprecationLogsFilepath)) {
                    \$previousLogs = unserialize(file_get_contents(\$this->deprecationLogsFilepath));
                    \$collectedLogs = array_merge(\$previousLogs, \$collectedLogs);
                }

                file_put_contents(\$this->deprecationLogsFilepath, serialize(array_values(\$collectedLogs)));
            }
        }
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always false
     */
    public function isOptional()
    {
        return false;
    }
}
", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php");
    }
}
