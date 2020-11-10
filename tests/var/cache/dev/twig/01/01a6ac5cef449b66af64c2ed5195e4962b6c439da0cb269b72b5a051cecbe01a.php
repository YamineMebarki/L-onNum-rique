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

/* vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php */
class __TwigTemplate_d1b9357a0ab969ea0bc29d06a9b9b0a644db570eb7ea32640ae8134d771ed12b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php"));

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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\ResettableInterface;

/**
 * Forwards records to multiple handlers
 *
 * @author Lenar Lõhmus <lenar@city.ee>
 */
class GroupHandler extends AbstractHandler
{
    protected \$handlers;

    /**
     * @param array \$handlers Array of Handlers.
     * @param bool  \$bubble   Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(array \$handlers, \$bubble = true)
    {
        foreach (\$handlers as \$handler) {
            if (!\$handler instanceof HandlerInterface) {
                throw new \\InvalidArgumentException('The first argument of the GroupHandler must be an array of HandlerInterface instances.');
            }
        }

        \$this->handlers = \$handlers;
        \$this->bubble = \$bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        foreach (\$this->handlers as \$handler) {
            if (\$handler->isHandling(\$record)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        foreach (\$this->handlers as \$handler) {
            \$handler->handle(\$record);
        }

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        if (\$this->processors) {
            \$processed = array();
            foreach (\$records as \$record) {
                foreach (\$this->processors as \$processor) {
                    \$record = call_user_func(\$processor, \$record);
                }
                \$processed[] = \$record;
            }
            \$records = \$processed;
        }

        foreach (\$this->handlers as \$handler) {
            \$handler->handleBatch(\$records);
        }
    }

    public function reset()
    {
        parent::reset();

        foreach (\$this->handlers as \$handler) {
            if (\$handler instanceof ResettableInterface) {
                \$handler->reset();
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        foreach (\$this->handlers as \$handler) {
            \$handler->setFormatter(\$formatter);
        }

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php";
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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\ResettableInterface;

/**
 * Forwards records to multiple handlers
 *
 * @author Lenar Lõhmus <lenar@city.ee>
 */
class GroupHandler extends AbstractHandler
{
    protected \$handlers;

    /**
     * @param array \$handlers Array of Handlers.
     * @param bool  \$bubble   Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(array \$handlers, \$bubble = true)
    {
        foreach (\$handlers as \$handler) {
            if (!\$handler instanceof HandlerInterface) {
                throw new \\InvalidArgumentException('The first argument of the GroupHandler must be an array of HandlerInterface instances.');
            }
        }

        \$this->handlers = \$handlers;
        \$this->bubble = \$bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        foreach (\$this->handlers as \$handler) {
            if (\$handler->isHandling(\$record)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        foreach (\$this->handlers as \$handler) {
            \$handler->handle(\$record);
        }

        return false === \$this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        if (\$this->processors) {
            \$processed = array();
            foreach (\$records as \$record) {
                foreach (\$this->processors as \$processor) {
                    \$record = call_user_func(\$processor, \$record);
                }
                \$processed[] = \$record;
            }
            \$records = \$processed;
        }

        foreach (\$this->handlers as \$handler) {
            \$handler->handleBatch(\$records);
        }
    }

    public function reset()
    {
        parent::reset();

        foreach (\$this->handlers as \$handler) {
            if (\$handler instanceof ResettableInterface) {
                \$handler->reset();
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        foreach (\$this->handlers as \$handler) {
            \$handler->setFormatter(\$formatter);
        }

        return \$this;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php");
    }
}
