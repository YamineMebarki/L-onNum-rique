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

/* vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php */
class __TwigTemplate_368aa5c42c94fc69d37d32d5079d6e1c9b3bdcfd5ea4dac198b52edce465dcfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php"));

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

use Monolog\\Utils;

/**
 * Formats incoming records into a one-line string
 *
 * This is especially useful for logging to files
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Christophe Coevoet <stof@notk.org>
 */
class LineFormatter extends NormalizerFormatter
{
    const SIMPLE_FORMAT = \"[%datetime%] %channel%.%level_name%: %message% %context% %extra%\\n\";

    protected \$format;
    protected \$allowInlineLineBreaks;
    protected \$ignoreEmptyContextAndExtra;
    protected \$includeStacktraces;

    /**
     * @param string \$format                     The format of the message
     * @param string \$dateFormat                 The format of the timestamp: one supported by DateTime::format
     * @param bool   \$allowInlineLineBreaks      Whether to allow inline line breaks in log entries
     * @param bool   \$ignoreEmptyContextAndExtra
     */
    public function __construct(\$format = null, \$dateFormat = null, \$allowInlineLineBreaks = false, \$ignoreEmptyContextAndExtra = false)
    {
        \$this->format = \$format ?: static::SIMPLE_FORMAT;
        \$this->allowInlineLineBreaks = \$allowInlineLineBreaks;
        \$this->ignoreEmptyContextAndExtra = \$ignoreEmptyContextAndExtra;
        parent::__construct(\$dateFormat);
    }

    public function includeStacktraces(\$include = true)
    {
        \$this->includeStacktraces = \$include;
        if (\$this->includeStacktraces) {
            \$this->allowInlineLineBreaks = true;
        }
    }

    public function allowInlineLineBreaks(\$allow = true)
    {
        \$this->allowInlineLineBreaks = \$allow;
    }

    public function ignoreEmptyContextAndExtra(\$ignore = true)
    {
        \$this->ignoreEmptyContextAndExtra = \$ignore;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$vars = parent::format(\$record);

        \$output = \$this->format;

        foreach (\$vars['extra'] as \$var => \$val) {
            if (false !== strpos(\$output, '%extra.'.\$var.'%')) {
                \$output = str_replace('%extra.'.\$var.'%', \$this->stringify(\$val), \$output);
                unset(\$vars['extra'][\$var]);
            }
        }


        foreach (\$vars['context'] as \$var => \$val) {
            if (false !== strpos(\$output, '%context.'.\$var.'%')) {
                \$output = str_replace('%context.'.\$var.'%', \$this->stringify(\$val), \$output);
                unset(\$vars['context'][\$var]);
            }
        }

        if (\$this->ignoreEmptyContextAndExtra) {
            if (empty(\$vars['context'])) {
                unset(\$vars['context']);
                \$output = str_replace('%context%', '', \$output);
            }

            if (empty(\$vars['extra'])) {
                unset(\$vars['extra']);
                \$output = str_replace('%extra%', '', \$output);
            }
        }

        foreach (\$vars as \$var => \$val) {
            if (false !== strpos(\$output, '%'.\$var.'%')) {
                \$output = str_replace('%'.\$var.'%', \$this->stringify(\$val), \$output);
            }
        }

        // remove leftover %extra.xxx% and %context.xxx% if any
        if (false !== strpos(\$output, '%')) {
            \$output = preg_replace('/%(?:extra|context)\\..+?%/', '', \$output);
        }

        return \$output;
    }

    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }

    public function stringify(\$value)
    {
        return \$this->replaceNewlines(\$this->convertToString(\$value));
    }

    protected function normalizeException(\$e)
    {
        // Todo 2.0 only check for Throwable
        if (!\$e instanceof \\Exception && !\$e instanceof \\Throwable) {
            throw new \\InvalidArgumentException('Exception/Throwable expected, got '.gettype(\$e).' / '.Utils::getClass(\$e));
        }

        \$previousText = '';
        if (\$previous = \$e->getPrevious()) {
            do {
                \$previousText .= ', '.Utils::getClass(\$previous).'(code: '.\$previous->getCode().'): '.\$previous->getMessage().' at '.\$previous->getFile().':'.\$previous->getLine();
            } while (\$previous = \$previous->getPrevious());
        }

        \$str = '[object] ('.Utils::getClass(\$e).'(code: '.\$e->getCode().'): '.\$e->getMessage().' at '.\$e->getFile().':'.\$e->getLine().\$previousText.')';
        if (\$this->includeStacktraces) {
            \$str .= \"\\n[stacktrace]\\n\".\$e->getTraceAsString().\"\\n\";
        }

        return \$str;
    }

    protected function convertToString(\$data)
    {
        if (null === \$data || is_bool(\$data)) {
            return var_export(\$data, true);
        }

        if (is_scalar(\$data)) {
            return (string) \$data;
        }

        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            return \$this->toJson(\$data, true);
        }

        return str_replace('\\\\/', '/', @json_encode(\$data));
    }

    protected function replaceNewlines(\$str)
    {
        if (\$this->allowInlineLineBreaks) {
            if (0 === strpos(\$str, '{')) {
                return str_replace(array('\\r', '\\n'), array(\"\\r\", \"\\n\"), \$str);
            }

            return \$str;
        }

        return str_replace(array(\"\\r\\n\", \"\\r\", \"\\n\"), ' ', \$str);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php";
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

use Monolog\\Utils;

/**
 * Formats incoming records into a one-line string
 *
 * This is especially useful for logging to files
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Christophe Coevoet <stof@notk.org>
 */
class LineFormatter extends NormalizerFormatter
{
    const SIMPLE_FORMAT = \"[%datetime%] %channel%.%level_name%: %message% %context% %extra%\\n\";

    protected \$format;
    protected \$allowInlineLineBreaks;
    protected \$ignoreEmptyContextAndExtra;
    protected \$includeStacktraces;

    /**
     * @param string \$format                     The format of the message
     * @param string \$dateFormat                 The format of the timestamp: one supported by DateTime::format
     * @param bool   \$allowInlineLineBreaks      Whether to allow inline line breaks in log entries
     * @param bool   \$ignoreEmptyContextAndExtra
     */
    public function __construct(\$format = null, \$dateFormat = null, \$allowInlineLineBreaks = false, \$ignoreEmptyContextAndExtra = false)
    {
        \$this->format = \$format ?: static::SIMPLE_FORMAT;
        \$this->allowInlineLineBreaks = \$allowInlineLineBreaks;
        \$this->ignoreEmptyContextAndExtra = \$ignoreEmptyContextAndExtra;
        parent::__construct(\$dateFormat);
    }

    public function includeStacktraces(\$include = true)
    {
        \$this->includeStacktraces = \$include;
        if (\$this->includeStacktraces) {
            \$this->allowInlineLineBreaks = true;
        }
    }

    public function allowInlineLineBreaks(\$allow = true)
    {
        \$this->allowInlineLineBreaks = \$allow;
    }

    public function ignoreEmptyContextAndExtra(\$ignore = true)
    {
        \$this->ignoreEmptyContextAndExtra = \$ignore;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$vars = parent::format(\$record);

        \$output = \$this->format;

        foreach (\$vars['extra'] as \$var => \$val) {
            if (false !== strpos(\$output, '%extra.'.\$var.'%')) {
                \$output = str_replace('%extra.'.\$var.'%', \$this->stringify(\$val), \$output);
                unset(\$vars['extra'][\$var]);
            }
        }


        foreach (\$vars['context'] as \$var => \$val) {
            if (false !== strpos(\$output, '%context.'.\$var.'%')) {
                \$output = str_replace('%context.'.\$var.'%', \$this->stringify(\$val), \$output);
                unset(\$vars['context'][\$var]);
            }
        }

        if (\$this->ignoreEmptyContextAndExtra) {
            if (empty(\$vars['context'])) {
                unset(\$vars['context']);
                \$output = str_replace('%context%', '', \$output);
            }

            if (empty(\$vars['extra'])) {
                unset(\$vars['extra']);
                \$output = str_replace('%extra%', '', \$output);
            }
        }

        foreach (\$vars as \$var => \$val) {
            if (false !== strpos(\$output, '%'.\$var.'%')) {
                \$output = str_replace('%'.\$var.'%', \$this->stringify(\$val), \$output);
            }
        }

        // remove leftover %extra.xxx% and %context.xxx% if any
        if (false !== strpos(\$output, '%')) {
            \$output = preg_replace('/%(?:extra|context)\\..+?%/', '', \$output);
        }

        return \$output;
    }

    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }

    public function stringify(\$value)
    {
        return \$this->replaceNewlines(\$this->convertToString(\$value));
    }

    protected function normalizeException(\$e)
    {
        // Todo 2.0 only check for Throwable
        if (!\$e instanceof \\Exception && !\$e instanceof \\Throwable) {
            throw new \\InvalidArgumentException('Exception/Throwable expected, got '.gettype(\$e).' / '.Utils::getClass(\$e));
        }

        \$previousText = '';
        if (\$previous = \$e->getPrevious()) {
            do {
                \$previousText .= ', '.Utils::getClass(\$previous).'(code: '.\$previous->getCode().'): '.\$previous->getMessage().' at '.\$previous->getFile().':'.\$previous->getLine();
            } while (\$previous = \$previous->getPrevious());
        }

        \$str = '[object] ('.Utils::getClass(\$e).'(code: '.\$e->getCode().'): '.\$e->getMessage().' at '.\$e->getFile().':'.\$e->getLine().\$previousText.')';
        if (\$this->includeStacktraces) {
            \$str .= \"\\n[stacktrace]\\n\".\$e->getTraceAsString().\"\\n\";
        }

        return \$str;
    }

    protected function convertToString(\$data)
    {
        if (null === \$data || is_bool(\$data)) {
            return var_export(\$data, true);
        }

        if (is_scalar(\$data)) {
            return (string) \$data;
        }

        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            return \$this->toJson(\$data, true);
        }

        return str_replace('\\\\/', '/', @json_encode(\$data));
    }

    protected function replaceNewlines(\$str)
    {
        if (\$this->allowInlineLineBreaks) {
            if (0 === strpos(\$str, '{')) {
                return str_replace(array('\\r', '\\n'), array(\"\\r\", \"\\n\"), \$str);
            }

            return \$str;
        }

        return str_replace(array(\"\\r\\n\", \"\\r\", \"\\n\"), ' ', \$str);
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php");
    }
}
