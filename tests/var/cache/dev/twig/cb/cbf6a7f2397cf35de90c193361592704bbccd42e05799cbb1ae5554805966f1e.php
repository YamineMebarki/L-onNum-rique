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

/* vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php */
class __TwigTemplate_262733802cfe748b37e31d69f0dba89347a16e407a19c885b59ceddec212268b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php"));

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

namespace Symfony\\Component\\Debug\\FatalErrorHandler;

use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException;

/**
 * ErrorHandler for undefined functions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UndefinedFunctionFatalErrorHandler implements FatalErrorHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleError(array \$error, FatalErrorException \$exception)
    {
        \$messageLen = \\strlen(\$error['message']);
        \$notFoundSuffix = '()';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$error['message'], \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        \$prefix = 'Call to undefined function ';
        \$prefixLen = \\strlen(\$prefix);
        if (0 !== strpos(\$error['message'], \$prefix)) {
            return null;
        }

        \$fullyQualifiedFunctionName = substr(\$error['message'], \$prefixLen, -\$notFoundSuffixLen);
        if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedFunctionName, '\\\\')) {
            \$functionName = substr(\$fullyQualifiedFunctionName, \$namespaceSeparatorIndex + 1);
            \$namespacePrefix = substr(\$fullyQualifiedFunctionName, 0, \$namespaceSeparatorIndex);
            \$message = sprintf('Attempted to call function \"%s\" from namespace \"%s\".', \$functionName, \$namespacePrefix);
        } else {
            \$functionName = \$fullyQualifiedFunctionName;
            \$message = sprintf('Attempted to call function \"%s\" from the global namespace.', \$functionName);
        }

        \$candidates = [];
        foreach (get_defined_functions() as \$type => \$definedFunctionNames) {
            foreach (\$definedFunctionNames as \$definedFunctionName) {
                if (false !== \$namespaceSeparatorIndex = strrpos(\$definedFunctionName, '\\\\')) {
                    \$definedFunctionNameBasename = substr(\$definedFunctionName, \$namespaceSeparatorIndex + 1);
                } else {
                    \$definedFunctionNameBasename = \$definedFunctionName;
                }

                if (\$definedFunctionNameBasename === \$functionName) {
                    \$candidates[] = '\\\\'.\$definedFunctionName;
                }
            }
        }

        if (\$candidates) {
            sort(\$candidates);
            \$last = array_pop(\$candidates).'\"?';
            if (\$candidates) {
                \$candidates = 'e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$last;
            } else {
                \$candidates = '\"'.\$last;
            }
            \$message .= \"\\nDid you mean to call \".\$candidates;
        }

        return new UndefinedFunctionException(\$message, \$exception);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php";
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

namespace Symfony\\Component\\Debug\\FatalErrorHandler;

use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException;

/**
 * ErrorHandler for undefined functions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UndefinedFunctionFatalErrorHandler implements FatalErrorHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleError(array \$error, FatalErrorException \$exception)
    {
        \$messageLen = \\strlen(\$error['message']);
        \$notFoundSuffix = '()';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$error['message'], \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        \$prefix = 'Call to undefined function ';
        \$prefixLen = \\strlen(\$prefix);
        if (0 !== strpos(\$error['message'], \$prefix)) {
            return null;
        }

        \$fullyQualifiedFunctionName = substr(\$error['message'], \$prefixLen, -\$notFoundSuffixLen);
        if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedFunctionName, '\\\\')) {
            \$functionName = substr(\$fullyQualifiedFunctionName, \$namespaceSeparatorIndex + 1);
            \$namespacePrefix = substr(\$fullyQualifiedFunctionName, 0, \$namespaceSeparatorIndex);
            \$message = sprintf('Attempted to call function \"%s\" from namespace \"%s\".', \$functionName, \$namespacePrefix);
        } else {
            \$functionName = \$fullyQualifiedFunctionName;
            \$message = sprintf('Attempted to call function \"%s\" from the global namespace.', \$functionName);
        }

        \$candidates = [];
        foreach (get_defined_functions() as \$type => \$definedFunctionNames) {
            foreach (\$definedFunctionNames as \$definedFunctionName) {
                if (false !== \$namespaceSeparatorIndex = strrpos(\$definedFunctionName, '\\\\')) {
                    \$definedFunctionNameBasename = substr(\$definedFunctionName, \$namespaceSeparatorIndex + 1);
                } else {
                    \$definedFunctionNameBasename = \$definedFunctionName;
                }

                if (\$definedFunctionNameBasename === \$functionName) {
                    \$candidates[] = '\\\\'.\$definedFunctionName;
                }
            }
        }

        if (\$candidates) {
            sort(\$candidates);
            \$last = array_pop(\$candidates).'\"?';
            if (\$candidates) {
                \$candidates = 'e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$last;
            } else {
                \$candidates = '\"'.\$last;
            }
            \$message .= \"\\nDid you mean to call \".\$candidates;
        }

        return new UndefinedFunctionException(\$message, \$exception);
    }
}
", "vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php");
    }
}
