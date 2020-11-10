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

/* vendor/symfony/monolog-bridge/Logger.php */
class __TwigTemplate_7efe71cc9feab627f0d86a335bc470875b077e3295360799a93280179ac5b791 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Logger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Logger.php"));

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

namespace Symfony\\Bridge\\Monolog;

use Monolog\\Logger as BaseLogger;
use Monolog\\ResettableInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Logger extends BaseLogger implements DebugLoggerInterface, ResetInterface
{
    /**
     * {@inheritdoc}
     *
     * @param Request|null \$request
     */
    public function getLogs(/* Request \$request = null */)
    {
        if (\\func_num_args() < 1 && __CLASS__ !== \\get_class(\$this) && __CLASS__ !== (new \\ReflectionMethod(\$this, __FUNCTION__))->getDeclaringClass()->getName() && !\$this instanceof \\PHPUnit\\Framework\\MockObject\\MockObject && !\$this instanceof \\Prophecy\\Prophecy\\ProphecySubjectInterface) {
            @trigger_error(sprintf('The \"%s()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }

        if (\$logger = \$this->getDebugLogger()) {
            return \$logger->getLogs(...\\func_get_args());
        }

        return [];
    }

    /**
     * {@inheritdoc}
     *
     * @param Request|null \$request
     */
    public function countErrors(/* Request \$request = null */)
    {
        if (\\func_num_args() < 1 && __CLASS__ !== \\get_class(\$this) && __CLASS__ !== (new \\ReflectionMethod(\$this, __FUNCTION__))->getDeclaringClass()->getName() && !\$this instanceof \\PHPUnit\\Framework\\MockObject\\MockObject && !\$this instanceof \\Prophecy\\Prophecy\\ProphecySubjectInterface) {
            @trigger_error(sprintf('The \"%s()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }

        if (\$logger = \$this->getDebugLogger()) {
            return \$logger->countErrors(...\\func_get_args());
        }

        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        if (\$logger = \$this->getDebugLogger()) {
            \$logger->clear();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();

        if (\$this instanceof ResettableInterface) {
            parent::reset();
        }
    }

    public function removeDebugLogger()
    {
        foreach (\$this->processors as \$k => \$processor) {
            if (\$processor instanceof DebugLoggerInterface) {
                unset(\$this->processors[\$k]);
            }
        }

        foreach (\$this->handlers as \$k => \$handler) {
            if (\$handler instanceof DebugLoggerInterface) {
                unset(\$this->handlers[\$k]);
            }
        }
    }

    /**
     * Returns a DebugLoggerInterface instance if one is registered with this logger.
     *
     * @return DebugLoggerInterface|null A DebugLoggerInterface instance or null if none is registered
     */
    private function getDebugLogger()
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof DebugLoggerInterface) {
                return \$processor;
            }
        }

        foreach (\$this->handlers as \$handler) {
            if (\$handler instanceof DebugLoggerInterface) {
                return \$handler;
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Logger.php";
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

namespace Symfony\\Bridge\\Monolog;

use Monolog\\Logger as BaseLogger;
use Monolog\\ResettableInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Logger extends BaseLogger implements DebugLoggerInterface, ResetInterface
{
    /**
     * {@inheritdoc}
     *
     * @param Request|null \$request
     */
    public function getLogs(/* Request \$request = null */)
    {
        if (\\func_num_args() < 1 && __CLASS__ !== \\get_class(\$this) && __CLASS__ !== (new \\ReflectionMethod(\$this, __FUNCTION__))->getDeclaringClass()->getName() && !\$this instanceof \\PHPUnit\\Framework\\MockObject\\MockObject && !\$this instanceof \\Prophecy\\Prophecy\\ProphecySubjectInterface) {
            @trigger_error(sprintf('The \"%s()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }

        if (\$logger = \$this->getDebugLogger()) {
            return \$logger->getLogs(...\\func_get_args());
        }

        return [];
    }

    /**
     * {@inheritdoc}
     *
     * @param Request|null \$request
     */
    public function countErrors(/* Request \$request = null */)
    {
        if (\\func_num_args() < 1 && __CLASS__ !== \\get_class(\$this) && __CLASS__ !== (new \\ReflectionMethod(\$this, __FUNCTION__))->getDeclaringClass()->getName() && !\$this instanceof \\PHPUnit\\Framework\\MockObject\\MockObject && !\$this instanceof \\Prophecy\\Prophecy\\ProphecySubjectInterface) {
            @trigger_error(sprintf('The \"%s()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }

        if (\$logger = \$this->getDebugLogger()) {
            return \$logger->countErrors(...\\func_get_args());
        }

        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        if (\$logger = \$this->getDebugLogger()) {
            \$logger->clear();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();

        if (\$this instanceof ResettableInterface) {
            parent::reset();
        }
    }

    public function removeDebugLogger()
    {
        foreach (\$this->processors as \$k => \$processor) {
            if (\$processor instanceof DebugLoggerInterface) {
                unset(\$this->processors[\$k]);
            }
        }

        foreach (\$this->handlers as \$k => \$handler) {
            if (\$handler instanceof DebugLoggerInterface) {
                unset(\$this->handlers[\$k]);
            }
        }
    }

    /**
     * Returns a DebugLoggerInterface instance if one is registered with this logger.
     *
     * @return DebugLoggerInterface|null A DebugLoggerInterface instance or null if none is registered
     */
    private function getDebugLogger()
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof DebugLoggerInterface) {
                return \$processor;
            }
        }

        foreach (\$this->handlers as \$handler) {
            if (\$handler instanceof DebugLoggerInterface) {
                return \$handler;
            }
        }

        return null;
    }
}
", "vendor/symfony/monolog-bridge/Logger.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Logger.php");
    }
}
