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

/* vendor/symfony/monolog-bridge/Processor/DebugProcessor.php */
class __TwigTemplate_2b730eecd24fe258c500cab06728d06542f7af5421c04f3a787c81917267da8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/DebugProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/DebugProcessor.php"));

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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Monolog\\Logger;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

class DebugProcessor implements DebugLoggerInterface, ResetInterface
{
    private \$records = [];
    private \$errorCount = [];
    private \$requestStack;

    public function __construct(RequestStack \$requestStack = null)
    {
        \$this->requestStack = \$requestStack;
    }

    public function __invoke(array \$record)
    {
        \$hash = \$this->requestStack && (\$request = \$this->requestStack->getCurrentRequest()) ? spl_object_hash(\$request) : '';

        \$this->records[\$hash][] = [
            'timestamp' => \$record['datetime']->getTimestamp(),
            'message' => \$record['message'],
            'priority' => \$record['level'],
            'priorityName' => \$record['level_name'],
            'context' => \$record['context'],
            'channel' => isset(\$record['channel']) ? \$record['channel'] : '',
        ];

        if (!isset(\$this->errorCount[\$hash])) {
            \$this->errorCount[\$hash] = 0;
        }

        switch (\$record['level']) {
            case Logger::ERROR:
            case Logger::CRITICAL:
            case Logger::ALERT:
            case Logger::EMERGENCY:
                ++\$this->errorCount[\$hash];
        }

        return \$record;
    }

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

        if (1 <= \\func_num_args() && null !== \$request = func_get_arg(0)) {
            return \$this->records[spl_object_hash(\$request)] ?? [];
        }

        if (0 === \\count(\$this->records)) {
            return [];
        }

        return array_merge(...array_values(\$this->records));
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

        if (1 <= \\func_num_args() && null !== \$request = func_get_arg(0)) {
            return \$this->errorCount[spl_object_hash(\$request)] ?? 0;
        }

        return array_sum(\$this->errorCount);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->records = [];
        \$this->errorCount = [];
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Processor/DebugProcessor.php";
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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Monolog\\Logger;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

class DebugProcessor implements DebugLoggerInterface, ResetInterface
{
    private \$records = [];
    private \$errorCount = [];
    private \$requestStack;

    public function __construct(RequestStack \$requestStack = null)
    {
        \$this->requestStack = \$requestStack;
    }

    public function __invoke(array \$record)
    {
        \$hash = \$this->requestStack && (\$request = \$this->requestStack->getCurrentRequest()) ? spl_object_hash(\$request) : '';

        \$this->records[\$hash][] = [
            'timestamp' => \$record['datetime']->getTimestamp(),
            'message' => \$record['message'],
            'priority' => \$record['level'],
            'priorityName' => \$record['level_name'],
            'context' => \$record['context'],
            'channel' => isset(\$record['channel']) ? \$record['channel'] : '',
        ];

        if (!isset(\$this->errorCount[\$hash])) {
            \$this->errorCount[\$hash] = 0;
        }

        switch (\$record['level']) {
            case Logger::ERROR:
            case Logger::CRITICAL:
            case Logger::ALERT:
            case Logger::EMERGENCY:
                ++\$this->errorCount[\$hash];
        }

        return \$record;
    }

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

        if (1 <= \\func_num_args() && null !== \$request = func_get_arg(0)) {
            return \$this->records[spl_object_hash(\$request)] ?? [];
        }

        if (0 === \\count(\$this->records)) {
            return [];
        }

        return array_merge(...array_values(\$this->records));
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

        if (1 <= \\func_num_args() && null !== \$request = func_get_arg(0)) {
            return \$this->errorCount[spl_object_hash(\$request)] ?? 0;
        }

        return array_sum(\$this->errorCount);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->records = [];
        \$this->errorCount = [];
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();
    }
}
", "vendor/symfony/monolog-bridge/Processor/DebugProcessor.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php");
    }
}
