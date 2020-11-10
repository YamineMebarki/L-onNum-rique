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

/* vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php */
class __TwigTemplate_8aec1fd9c6aa5a5dcd4df9936f8467302b484e48410197a8603a15d1cd353968 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php"));

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
 * Formats a record for use with the MongoDBHandler.
 *
 * @author Florian Plattner <me@florianplattner.de>
 */
class MongoDBFormatter implements FormatterInterface
{
    private \$exceptionTraceAsString;
    private \$maxNestingLevel;

    /**
     * @param int  \$maxNestingLevel        0 means infinite nesting, the \$record itself is level 1, \$record['context'] is 2
     * @param bool \$exceptionTraceAsString set to false to log exception traces as a sub documents instead of strings
     */
    public function __construct(\$maxNestingLevel = 3, \$exceptionTraceAsString = true)
    {
        \$this->maxNestingLevel = max(\$maxNestingLevel, 0);
        \$this->exceptionTraceAsString = (bool) \$exceptionTraceAsString;
    }

    /**
     * {@inheritDoc}
     */
    public function format(array \$record)
    {
        return \$this->formatArray(\$record);
    }

    /**
     * {@inheritDoc}
     */
    public function formatBatch(array \$records)
    {
        foreach (\$records as \$key => \$record) {
            \$records[\$key] = \$this->format(\$record);
        }

        return \$records;
    }

    protected function formatArray(array \$record, \$nestingLevel = 0)
    {
        if (\$this->maxNestingLevel == 0 || \$nestingLevel <= \$this->maxNestingLevel) {
            foreach (\$record as \$name => \$value) {
                if (\$value instanceof \\DateTime) {
                    \$record[\$name] = \$this->formatDate(\$value, \$nestingLevel + 1);
                } elseif (\$value instanceof \\Exception) {
                    \$record[\$name] = \$this->formatException(\$value, \$nestingLevel + 1);
                } elseif (is_array(\$value)) {
                    \$record[\$name] = \$this->formatArray(\$value, \$nestingLevel + 1);
                } elseif (is_object(\$value)) {
                    \$record[\$name] = \$this->formatObject(\$value, \$nestingLevel + 1);
                }
            }
        } else {
            \$record = '[...]';
        }

        return \$record;
    }

    protected function formatObject(\$value, \$nestingLevel)
    {
        \$objectVars = get_object_vars(\$value);
        \$objectVars['class'] = Utils::getClass(\$value);

        return \$this->formatArray(\$objectVars, \$nestingLevel);
    }

    protected function formatException(\\Exception \$exception, \$nestingLevel)
    {
        \$formattedException = array(
            'class' => Utils::getClass(\$exception),
            'message' => \$exception->getMessage(),
            'code' => \$exception->getCode(),
            'file' => \$exception->getFile() . ':' . \$exception->getLine(),
        );

        if (\$this->exceptionTraceAsString === true) {
            \$formattedException['trace'] = \$exception->getTraceAsString();
        } else {
            \$formattedException['trace'] = \$exception->getTrace();
        }

        return \$this->formatArray(\$formattedException, \$nestingLevel);
    }

    protected function formatDate(\\DateTime \$value, \$nestingLevel)
    {
        return new \\MongoDate(\$value->getTimestamp());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php";
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
 * Formats a record for use with the MongoDBHandler.
 *
 * @author Florian Plattner <me@florianplattner.de>
 */
class MongoDBFormatter implements FormatterInterface
{
    private \$exceptionTraceAsString;
    private \$maxNestingLevel;

    /**
     * @param int  \$maxNestingLevel        0 means infinite nesting, the \$record itself is level 1, \$record['context'] is 2
     * @param bool \$exceptionTraceAsString set to false to log exception traces as a sub documents instead of strings
     */
    public function __construct(\$maxNestingLevel = 3, \$exceptionTraceAsString = true)
    {
        \$this->maxNestingLevel = max(\$maxNestingLevel, 0);
        \$this->exceptionTraceAsString = (bool) \$exceptionTraceAsString;
    }

    /**
     * {@inheritDoc}
     */
    public function format(array \$record)
    {
        return \$this->formatArray(\$record);
    }

    /**
     * {@inheritDoc}
     */
    public function formatBatch(array \$records)
    {
        foreach (\$records as \$key => \$record) {
            \$records[\$key] = \$this->format(\$record);
        }

        return \$records;
    }

    protected function formatArray(array \$record, \$nestingLevel = 0)
    {
        if (\$this->maxNestingLevel == 0 || \$nestingLevel <= \$this->maxNestingLevel) {
            foreach (\$record as \$name => \$value) {
                if (\$value instanceof \\DateTime) {
                    \$record[\$name] = \$this->formatDate(\$value, \$nestingLevel + 1);
                } elseif (\$value instanceof \\Exception) {
                    \$record[\$name] = \$this->formatException(\$value, \$nestingLevel + 1);
                } elseif (is_array(\$value)) {
                    \$record[\$name] = \$this->formatArray(\$value, \$nestingLevel + 1);
                } elseif (is_object(\$value)) {
                    \$record[\$name] = \$this->formatObject(\$value, \$nestingLevel + 1);
                }
            }
        } else {
            \$record = '[...]';
        }

        return \$record;
    }

    protected function formatObject(\$value, \$nestingLevel)
    {
        \$objectVars = get_object_vars(\$value);
        \$objectVars['class'] = Utils::getClass(\$value);

        return \$this->formatArray(\$objectVars, \$nestingLevel);
    }

    protected function formatException(\\Exception \$exception, \$nestingLevel)
    {
        \$formattedException = array(
            'class' => Utils::getClass(\$exception),
            'message' => \$exception->getMessage(),
            'code' => \$exception->getCode(),
            'file' => \$exception->getFile() . ':' . \$exception->getLine(),
        );

        if (\$this->exceptionTraceAsString === true) {
            \$formattedException['trace'] = \$exception->getTraceAsString();
        } else {
            \$formattedException['trace'] = \$exception->getTrace();
        }

        return \$this->formatArray(\$formattedException, \$nestingLevel);
    }

    protected function formatDate(\\DateTime \$value, \$nestingLevel)
    {
        return new \\MongoDate(\$value->getTimestamp());
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php");
    }
}
