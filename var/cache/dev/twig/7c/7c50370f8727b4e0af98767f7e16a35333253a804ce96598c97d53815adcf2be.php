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

/* vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php */
class __TwigTemplate_6c0835305c5210bc543f296262c8300851947e10fde7842407f4ff16a979a82c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php"));

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

use Exception;
use Monolog\\Utils;
use Throwable;

/**
 * Encodes whatever record data is passed to it as json
 *
 * This can be useful to log to databases or remote APIs
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonFormatter extends NormalizerFormatter
{
    const BATCH_MODE_JSON = 1;
    const BATCH_MODE_NEWLINES = 2;

    protected \$batchMode;
    protected \$appendNewline;

    /**
     * @var bool
     */
    protected \$includeStacktraces = false;

    /**
     * @param int \$batchMode
     * @param bool \$appendNewline
     */
    public function __construct(\$batchMode = self::BATCH_MODE_JSON, \$appendNewline = true)
    {
        \$this->batchMode = \$batchMode;
        \$this->appendNewline = \$appendNewline;
    }

    /**
     * The batch mode option configures the formatting style for
     * multiple records. By default, multiple records will be
     * formatted as a JSON-encoded array. However, for
     * compatibility with some API endpoints, alternative styles
     * are available.
     *
     * @return int
     */
    public function getBatchMode()
    {
        return \$this->batchMode;
    }

    /**
     * True if newlines are appended to every formatted record
     *
     * @return bool
     */
    public function isAppendingNewlines()
    {
        return \$this->appendNewline;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        return \$this->toJson(\$this->normalize(\$record), true) . (\$this->appendNewline ? \"\\n\" : '');
    }

    /**
     * {@inheritdoc}
     */
    public function formatBatch(array \$records)
    {
        switch (\$this->batchMode) {
            case static::BATCH_MODE_NEWLINES:
                return \$this->formatBatchNewlines(\$records);

            case static::BATCH_MODE_JSON:
            default:
                return \$this->formatBatchJson(\$records);
        }
    }

    /**
     * @param bool \$include
     */
    public function includeStacktraces(\$include = true)
    {
        \$this->includeStacktraces = \$include;
    }

    /**
     * Return a JSON-encoded array of records.
     *
     * @param  array  \$records
     * @return string
     */
    protected function formatBatchJson(array \$records)
    {
        return \$this->toJson(\$this->normalize(\$records), true);
    }

    /**
     * Use new lines to separate records instead of a
     * JSON-encoded array.
     *
     * @param  array  \$records
     * @return string
     */
    protected function formatBatchNewlines(array \$records)
    {
        \$instance = \$this;

        \$oldNewline = \$this->appendNewline;
        \$this->appendNewline = false;
        array_walk(\$records, function (&\$value, \$key) use (\$instance) {
            \$value = \$instance->format(\$value);
        });
        \$this->appendNewline = \$oldNewline;

        return implode(\"\\n\", \$records);
    }

    /**
     * Normalizes given \$data.
     *
     * @param mixed \$data
     *
     * @return mixed
     */
    protected function normalize(\$data, \$depth = 0)
    {
        if (\$depth > 9) {
            return 'Over 9 levels deep, aborting normalization';
        }

        if (is_array(\$data) || \$data instanceof \\Traversable) {
            \$normalized = array();

            \$count = 1;
            foreach (\$data as \$key => \$value) {
                if (\$count++ > 1000) {
                    \$normalized['...'] = 'Over 1000 items ('.count(\$data).' total), aborting normalization';
                    break;
                }

                \$normalized[\$key] = \$this->normalize(\$value, \$depth+1);
            }

            return \$normalized;
        }

        if (\$data instanceof Exception || \$data instanceof Throwable) {
            return \$this->normalizeException(\$data);
        }

        return \$data;
    }

    /**
     * Normalizes given exception with or without its own stack trace based on
     * `includeStacktraces` property.
     *
     * @param Exception|Throwable \$e
     *
     * @return array
     */
    protected function normalizeException(\$e)
    {
        // Todo 2.0 only check for Throwable
        if (!\$e instanceof Exception && !\$e instanceof Throwable) {
            throw new \\InvalidArgumentException('Exception/Throwable expected, got '.gettype(\$e).' / '.Utils::getClass(\$e));
        }

        \$data = array(
            'class' => Utils::getClass(\$e),
            'message' => \$e->getMessage(),
            'code' => \$e->getCode(),
            'file' => \$e->getFile().':'.\$e->getLine(),
        );

        if (\$this->includeStacktraces) {
            \$trace = \$e->getTrace();
            foreach (\$trace as \$frame) {
                if (isset(\$frame['file'])) {
                    \$data['trace'][] = \$frame['file'].':'.\$frame['line'];
                }
            }
        }

        if (\$previous = \$e->getPrevious()) {
            \$data['previous'] = \$this->normalizeException(\$previous);
        }

        return \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php";
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

use Exception;
use Monolog\\Utils;
use Throwable;

/**
 * Encodes whatever record data is passed to it as json
 *
 * This can be useful to log to databases or remote APIs
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonFormatter extends NormalizerFormatter
{
    const BATCH_MODE_JSON = 1;
    const BATCH_MODE_NEWLINES = 2;

    protected \$batchMode;
    protected \$appendNewline;

    /**
     * @var bool
     */
    protected \$includeStacktraces = false;

    /**
     * @param int \$batchMode
     * @param bool \$appendNewline
     */
    public function __construct(\$batchMode = self::BATCH_MODE_JSON, \$appendNewline = true)
    {
        \$this->batchMode = \$batchMode;
        \$this->appendNewline = \$appendNewline;
    }

    /**
     * The batch mode option configures the formatting style for
     * multiple records. By default, multiple records will be
     * formatted as a JSON-encoded array. However, for
     * compatibility with some API endpoints, alternative styles
     * are available.
     *
     * @return int
     */
    public function getBatchMode()
    {
        return \$this->batchMode;
    }

    /**
     * True if newlines are appended to every formatted record
     *
     * @return bool
     */
    public function isAppendingNewlines()
    {
        return \$this->appendNewline;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        return \$this->toJson(\$this->normalize(\$record), true) . (\$this->appendNewline ? \"\\n\" : '');
    }

    /**
     * {@inheritdoc}
     */
    public function formatBatch(array \$records)
    {
        switch (\$this->batchMode) {
            case static::BATCH_MODE_NEWLINES:
                return \$this->formatBatchNewlines(\$records);

            case static::BATCH_MODE_JSON:
            default:
                return \$this->formatBatchJson(\$records);
        }
    }

    /**
     * @param bool \$include
     */
    public function includeStacktraces(\$include = true)
    {
        \$this->includeStacktraces = \$include;
    }

    /**
     * Return a JSON-encoded array of records.
     *
     * @param  array  \$records
     * @return string
     */
    protected function formatBatchJson(array \$records)
    {
        return \$this->toJson(\$this->normalize(\$records), true);
    }

    /**
     * Use new lines to separate records instead of a
     * JSON-encoded array.
     *
     * @param  array  \$records
     * @return string
     */
    protected function formatBatchNewlines(array \$records)
    {
        \$instance = \$this;

        \$oldNewline = \$this->appendNewline;
        \$this->appendNewline = false;
        array_walk(\$records, function (&\$value, \$key) use (\$instance) {
            \$value = \$instance->format(\$value);
        });
        \$this->appendNewline = \$oldNewline;

        return implode(\"\\n\", \$records);
    }

    /**
     * Normalizes given \$data.
     *
     * @param mixed \$data
     *
     * @return mixed
     */
    protected function normalize(\$data, \$depth = 0)
    {
        if (\$depth > 9) {
            return 'Over 9 levels deep, aborting normalization';
        }

        if (is_array(\$data) || \$data instanceof \\Traversable) {
            \$normalized = array();

            \$count = 1;
            foreach (\$data as \$key => \$value) {
                if (\$count++ > 1000) {
                    \$normalized['...'] = 'Over 1000 items ('.count(\$data).' total), aborting normalization';
                    break;
                }

                \$normalized[\$key] = \$this->normalize(\$value, \$depth+1);
            }

            return \$normalized;
        }

        if (\$data instanceof Exception || \$data instanceof Throwable) {
            return \$this->normalizeException(\$data);
        }

        return \$data;
    }

    /**
     * Normalizes given exception with or without its own stack trace based on
     * `includeStacktraces` property.
     *
     * @param Exception|Throwable \$e
     *
     * @return array
     */
    protected function normalizeException(\$e)
    {
        // Todo 2.0 only check for Throwable
        if (!\$e instanceof Exception && !\$e instanceof Throwable) {
            throw new \\InvalidArgumentException('Exception/Throwable expected, got '.gettype(\$e).' / '.Utils::getClass(\$e));
        }

        \$data = array(
            'class' => Utils::getClass(\$e),
            'message' => \$e->getMessage(),
            'code' => \$e->getCode(),
            'file' => \$e->getFile().':'.\$e->getLine(),
        );

        if (\$this->includeStacktraces) {
            \$trace = \$e->getTrace();
            foreach (\$trace as \$frame) {
                if (isset(\$frame['file'])) {
                    \$data['trace'][] = \$frame['file'].':'.\$frame['line'];
                }
            }
        }

        if (\$previous = \$e->getPrevious()) {
            \$data['previous'] = \$this->normalizeException(\$previous);
        }

        return \$data;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php");
    }
}
