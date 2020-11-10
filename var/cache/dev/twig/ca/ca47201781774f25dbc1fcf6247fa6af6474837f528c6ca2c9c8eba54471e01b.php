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

/* vendor/symfony/debug/Exception/FatalErrorException.php */
class __TwigTemplate_67613e89fd6da75c88d1c4a6ad97968e10f80208a61197cf0786d68e22f76e62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Exception/FatalErrorException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Exception/FatalErrorException.php"));

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

namespace Symfony\\Component\\Debug\\Exception;

/**
 * Fatal Error Exception.
 *
 * @author Konstanton Myakshin <koc-dp@yandex.ru>
 */
class FatalErrorException extends \\ErrorException
{
    public function __construct(string \$message, int \$code, int \$severity, string \$filename, int \$lineno, int \$traceOffset = null, bool \$traceArgs = true, array \$trace = null, \\Throwable \$previous = null)
    {
        parent::__construct(\$message, \$code, \$severity, \$filename, \$lineno, \$previous);

        if (null !== \$trace) {
            if (!\$traceArgs) {
                foreach (\$trace as &\$frame) {
                    unset(\$frame['args'], \$frame['this'], \$frame);
                }
            }

            \$this->setTrace(\$trace);
        } elseif (null !== \$traceOffset) {
            if (\\function_exists('xdebug_get_function_stack')) {
                \$trace = xdebug_get_function_stack();
                if (0 < \$traceOffset) {
                    array_splice(\$trace, -\$traceOffset);
                }

                foreach (\$trace as &\$frame) {
                    if (!isset(\$frame['type'])) {
                        // XDebug pre 2.1.1 doesn't currently set the call type key http://bugs.xdebug.org/view.php?id=695
                        if (isset(\$frame['class'])) {
                            \$frame['type'] = '::';
                        }
                    } elseif ('dynamic' === \$frame['type']) {
                        \$frame['type'] = '->';
                    } elseif ('static' === \$frame['type']) {
                        \$frame['type'] = '::';
                    }

                    // XDebug also has a different name for the parameters array
                    if (!\$traceArgs) {
                        unset(\$frame['params'], \$frame['args']);
                    } elseif (isset(\$frame['params']) && !isset(\$frame['args'])) {
                        \$frame['args'] = \$frame['params'];
                        unset(\$frame['params']);
                    }
                }

                unset(\$frame);
                \$trace = array_reverse(\$trace);
            } else {
                \$trace = [];
            }

            \$this->setTrace(\$trace);
        }
    }

    protected function setTrace(\$trace)
    {
        \$traceReflector = new \\ReflectionProperty('Exception', 'trace');
        \$traceReflector->setAccessible(true);
        \$traceReflector->setValue(\$this, \$trace);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Exception/FatalErrorException.php";
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

namespace Symfony\\Component\\Debug\\Exception;

/**
 * Fatal Error Exception.
 *
 * @author Konstanton Myakshin <koc-dp@yandex.ru>
 */
class FatalErrorException extends \\ErrorException
{
    public function __construct(string \$message, int \$code, int \$severity, string \$filename, int \$lineno, int \$traceOffset = null, bool \$traceArgs = true, array \$trace = null, \\Throwable \$previous = null)
    {
        parent::__construct(\$message, \$code, \$severity, \$filename, \$lineno, \$previous);

        if (null !== \$trace) {
            if (!\$traceArgs) {
                foreach (\$trace as &\$frame) {
                    unset(\$frame['args'], \$frame['this'], \$frame);
                }
            }

            \$this->setTrace(\$trace);
        } elseif (null !== \$traceOffset) {
            if (\\function_exists('xdebug_get_function_stack')) {
                \$trace = xdebug_get_function_stack();
                if (0 < \$traceOffset) {
                    array_splice(\$trace, -\$traceOffset);
                }

                foreach (\$trace as &\$frame) {
                    if (!isset(\$frame['type'])) {
                        // XDebug pre 2.1.1 doesn't currently set the call type key http://bugs.xdebug.org/view.php?id=695
                        if (isset(\$frame['class'])) {
                            \$frame['type'] = '::';
                        }
                    } elseif ('dynamic' === \$frame['type']) {
                        \$frame['type'] = '->';
                    } elseif ('static' === \$frame['type']) {
                        \$frame['type'] = '::';
                    }

                    // XDebug also has a different name for the parameters array
                    if (!\$traceArgs) {
                        unset(\$frame['params'], \$frame['args']);
                    } elseif (isset(\$frame['params']) && !isset(\$frame['args'])) {
                        \$frame['args'] = \$frame['params'];
                        unset(\$frame['params']);
                    }
                }

                unset(\$frame);
                \$trace = array_reverse(\$trace);
            } else {
                \$trace = [];
            }

            \$this->setTrace(\$trace);
        }
    }

    protected function setTrace(\$trace)
    {
        \$traceReflector = new \\ReflectionProperty('Exception', 'trace');
        \$traceReflector->setAccessible(true);
        \$traceReflector->setValue(\$this, \$trace);
    }
}
", "vendor/symfony/debug/Exception/FatalErrorException.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Exception/FatalErrorException.php");
    }
}
