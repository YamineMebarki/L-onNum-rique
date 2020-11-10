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

/* vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php */
class __TwigTemplate_645975c1441cf44b885304f2298355a536a84b9ff0325e9dfc3c6ed649c616a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php"));

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

use Monolog\\ResettableInterface;
use Monolog\\Formatter\\FormatterInterface;

/**
 * This simple wrapper class can be used to extend handlers functionality.
 *
 * Example: A custom filtering that can be applied to any handler.
 *
 * Inherit from this class and override handle() like this:
 *
 *   public function handle(array \$record)
 *   {
 *        if (\$record meets certain conditions) {
 *            return false;
 *        }
 *        return \$this->handler->handle(\$record);
 *   }
 *
 * @author Alexey Karapetov <alexey@karapetov.com>
 */
class HandlerWrapper implements HandlerInterface, ResettableInterface
{
    /**
     * @var HandlerInterface
     */
    protected \$handler;

    /**
     * HandlerWrapper constructor.
     * @param HandlerInterface \$handler
     */
    public function __construct(HandlerInterface \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$this->handler->isHandling(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        return \$this->handler->handle(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        return \$this->handler->handleBatch(\$records);
    }

    /**
     * {@inheritdoc}
     */
    public function pushProcessor(\$callback)
    {
        \$this->handler->pushProcessor(\$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor()
    {
        return \$this->handler->popProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->handler->setFormatter(\$formatter);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->handler->getFormatter();
    }

    public function reset()
    {
        if (\$this->handler instanceof ResettableInterface) {
            return \$this->handler->reset();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php";
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

use Monolog\\ResettableInterface;
use Monolog\\Formatter\\FormatterInterface;

/**
 * This simple wrapper class can be used to extend handlers functionality.
 *
 * Example: A custom filtering that can be applied to any handler.
 *
 * Inherit from this class and override handle() like this:
 *
 *   public function handle(array \$record)
 *   {
 *        if (\$record meets certain conditions) {
 *            return false;
 *        }
 *        return \$this->handler->handle(\$record);
 *   }
 *
 * @author Alexey Karapetov <alexey@karapetov.com>
 */
class HandlerWrapper implements HandlerInterface, ResettableInterface
{
    /**
     * @var HandlerInterface
     */
    protected \$handler;

    /**
     * HandlerWrapper constructor.
     * @param HandlerInterface \$handler
     */
    public function __construct(HandlerInterface \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$this->handler->isHandling(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        return \$this->handler->handle(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        return \$this->handler->handleBatch(\$records);
    }

    /**
     * {@inheritdoc}
     */
    public function pushProcessor(\$callback)
    {
        \$this->handler->pushProcessor(\$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor()
    {
        return \$this->handler->popProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->handler->setFormatter(\$formatter);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->handler->getFormatter();
    }

    public function reset()
    {
        if (\$this->handler instanceof ResettableInterface) {
            return \$this->handler->reset();
        }
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php");
    }
}
