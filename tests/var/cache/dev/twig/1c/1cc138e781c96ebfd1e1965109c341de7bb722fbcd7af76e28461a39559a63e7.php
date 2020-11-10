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

/* vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php */
class __TwigTemplate_4f651cdee4e1374693f2d1bad31a2d944c8673707fcd7debe725dbc6027b0719 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php"));

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
use Symfony\\Component\\Debug\\Exception\\UndefinedMethodException;

/**
 * ErrorHandler for undefined methods.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class UndefinedMethodFatalErrorHandler implements FatalErrorHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleError(array \$error, FatalErrorException \$exception)
    {
        preg_match('/^Call to undefined method (.*)::(.*)\\(\\)\$/', \$error['message'], \$matches);
        if (!\$matches) {
            return null;
        }

        \$className = \$matches[1];
        \$methodName = \$matches[2];

        \$message = sprintf('Attempted to call an undefined method named \"%s\" of class \"%s\".', \$methodName, \$className);

        if (!class_exists(\$className) || null === \$methods = get_class_methods(\$className)) {
            // failed to get the class or its methods on which an unknown method was called (for example on an anonymous class)
            return new UndefinedMethodException(\$message, \$exception);
        }

        \$candidates = [];
        foreach (\$methods as \$definedMethodName) {
            \$lev = levenshtein(\$methodName, \$definedMethodName);
            if (\$lev <= \\strlen(\$methodName) / 3 || false !== strpos(\$definedMethodName, \$methodName)) {
                \$candidates[] = \$definedMethodName;
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

        return new UndefinedMethodException(\$message, \$exception);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php";
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
use Symfony\\Component\\Debug\\Exception\\UndefinedMethodException;

/**
 * ErrorHandler for undefined methods.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class UndefinedMethodFatalErrorHandler implements FatalErrorHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleError(array \$error, FatalErrorException \$exception)
    {
        preg_match('/^Call to undefined method (.*)::(.*)\\(\\)\$/', \$error['message'], \$matches);
        if (!\$matches) {
            return null;
        }

        \$className = \$matches[1];
        \$methodName = \$matches[2];

        \$message = sprintf('Attempted to call an undefined method named \"%s\" of class \"%s\".', \$methodName, \$className);

        if (!class_exists(\$className) || null === \$methods = get_class_methods(\$className)) {
            // failed to get the class or its methods on which an unknown method was called (for example on an anonymous class)
            return new UndefinedMethodException(\$message, \$exception);
        }

        \$candidates = [];
        foreach (\$methods as \$definedMethodName) {
            \$lev = levenshtein(\$methodName, \$definedMethodName);
            if (\$lev <= \\strlen(\$methodName) / 3 || false !== strpos(\$definedMethodName, \$methodName)) {
                \$candidates[] = \$definedMethodName;
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

        return new UndefinedMethodException(\$message, \$exception);
    }
}
", "vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php");
    }
}
