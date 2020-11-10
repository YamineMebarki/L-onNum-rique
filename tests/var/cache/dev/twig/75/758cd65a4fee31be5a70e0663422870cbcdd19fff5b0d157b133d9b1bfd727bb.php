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

/* vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php */
class __TwigTemplate_304493852f37893f5fb634ed73651d22d092e3f143ba3f2fa9e4c05e56580760 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php"));

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

namespace Monolog\\Handler;

use Monolog\\Logger;

/**
 * Simple handler wrapper that filters records based on a list of levels
 *
 * It can be configured with an exact list of levels to allow, or a min/max level.
 *
 * @author Hennadiy Verkh
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class FilterHandler extends AbstractHandler
{
    /**
     * Handler or factory callable(\$record, \$this)
     *
     * @var callable|\\Monolog\\Handler\\HandlerInterface
     */
    protected \$handler;

    /**
     * Minimum level for log that are passed to handler
     *
     * @var int[]
     */
    protected \$acceptedLevels;

    /**
     * Whether the messages that are handled can bubble up the stack or not
     *
     * @var bool
     */
    protected \$bubble;

    /**
     * @param callable|HandlerInterface \$handler        Handler or factory callable(\$record, \$this).
     * @param int|array                 \$minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
     * @param int                       \$maxLevel       Maximum level to accept, only used if \$minLevelOrList is not an array
     * @param bool                      \$bubble         Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$handler, \$minLevelOrList = Logger::DEBUG, \$maxLevel = Logger::EMERGENCY, \$bubble = true)
    {
        \$this->handler  = \$handler;
        \$this->bubble   = \$bubble;
        \$this->setAcceptedLevels(\$minLevelOrList, \$maxLevel);

        if (!\$this->handler instanceof HandlerInterface && !is_callable(\$this->handler)) {
            throw new \\RuntimeException(\"The given handler (\".json_encode(\$this->handler).\") is not a callable nor a Monolog\\Handler\\HandlerInterface object\");
        }
    }

    /**
     * @return array
     */
    public function getAcceptedLevels()
    {
        return array_flip(\$this->acceptedLevels);
    }

    /**
     * @param int|string|array \$minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
     * @param int|string       \$maxLevel       Maximum level or level name to accept, only used if \$minLevelOrList is not an array
     */
    public function setAcceptedLevels(\$minLevelOrList = Logger::DEBUG, \$maxLevel = Logger::EMERGENCY)
    {
        if (is_array(\$minLevelOrList)) {
            \$acceptedLevels = array_map('Monolog\\Logger::toMonologLevel', \$minLevelOrList);
        } else {
            \$minLevelOrList = Logger::toMonologLevel(\$minLevelOrList);
            \$maxLevel = Logger::toMonologLevel(\$maxLevel);
            \$acceptedLevels = array_values(array_filter(Logger::getLevels(), function (\$level) use (\$minLevelOrList, \$maxLevel) {
                return \$level >= \$minLevelOrList && \$level <= \$maxLevel;
            }));
        }
        \$this->acceptedLevels = array_flip(\$acceptedLevels);
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return isset(\$this->acceptedLevels[\$record['level']]);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        // The same logic as in FingersCrossedHandler
        if (!\$this->handler instanceof HandlerInterface) {
            \$this->handler = call_user_func(\$this->handler, \$record, \$this);
            if (!\$this->handler instanceof HandlerInterface) {
                throw new \\RuntimeException(\"The factory callable should return a HandlerInterface\");
            }
        }

        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        \$this->handler->handle(\$record);

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$filtered = array();
        foreach (\$records as \$record) {
            if (\$this->isHandling(\$record)) {
                \$filtered[] = \$record;
            }
        }

        \$this->handler->handleBatch(\$filtered);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php";
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

namespace Monolog\\Handler;

use Monolog\\Logger;

/**
 * Simple handler wrapper that filters records based on a list of levels
 *
 * It can be configured with an exact list of levels to allow, or a min/max level.
 *
 * @author Hennadiy Verkh
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class FilterHandler extends AbstractHandler
{
    /**
     * Handler or factory callable(\$record, \$this)
     *
     * @var callable|\\Monolog\\Handler\\HandlerInterface
     */
    protected \$handler;

    /**
     * Minimum level for log that are passed to handler
     *
     * @var int[]
     */
    protected \$acceptedLevels;

    /**
     * Whether the messages that are handled can bubble up the stack or not
     *
     * @var bool
     */
    protected \$bubble;

    /**
     * @param callable|HandlerInterface \$handler        Handler or factory callable(\$record, \$this).
     * @param int|array                 \$minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
     * @param int                       \$maxLevel       Maximum level to accept, only used if \$minLevelOrList is not an array
     * @param bool                      \$bubble         Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$handler, \$minLevelOrList = Logger::DEBUG, \$maxLevel = Logger::EMERGENCY, \$bubble = true)
    {
        \$this->handler  = \$handler;
        \$this->bubble   = \$bubble;
        \$this->setAcceptedLevels(\$minLevelOrList, \$maxLevel);

        if (!\$this->handler instanceof HandlerInterface && !is_callable(\$this->handler)) {
            throw new \\RuntimeException(\"The given handler (\".json_encode(\$this->handler).\") is not a callable nor a Monolog\\Handler\\HandlerInterface object\");
        }
    }

    /**
     * @return array
     */
    public function getAcceptedLevels()
    {
        return array_flip(\$this->acceptedLevels);
    }

    /**
     * @param int|string|array \$minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
     * @param int|string       \$maxLevel       Maximum level or level name to accept, only used if \$minLevelOrList is not an array
     */
    public function setAcceptedLevels(\$minLevelOrList = Logger::DEBUG, \$maxLevel = Logger::EMERGENCY)
    {
        if (is_array(\$minLevelOrList)) {
            \$acceptedLevels = array_map('Monolog\\Logger::toMonologLevel', \$minLevelOrList);
        } else {
            \$minLevelOrList = Logger::toMonologLevel(\$minLevelOrList);
            \$maxLevel = Logger::toMonologLevel(\$maxLevel);
            \$acceptedLevels = array_values(array_filter(Logger::getLevels(), function (\$level) use (\$minLevelOrList, \$maxLevel) {
                return \$level >= \$minLevelOrList && \$level <= \$maxLevel;
            }));
        }
        \$this->acceptedLevels = array_flip(\$acceptedLevels);
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return isset(\$this->acceptedLevels[\$record['level']]);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        // The same logic as in FingersCrossedHandler
        if (!\$this->handler instanceof HandlerInterface) {
            \$this->handler = call_user_func(\$this->handler, \$record, \$this);
            if (!\$this->handler instanceof HandlerInterface) {
                throw new \\RuntimeException(\"The factory callable should return a HandlerInterface\");
            }
        }

        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        \$this->handler->handle(\$record);

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$filtered = array();
        foreach (\$records as \$record) {
            if (\$this->isHandling(\$record)) {
                \$filtered[] = \$record;
            }
        }

        \$this->handler->handleBatch(\$filtered);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php");
    }
}
