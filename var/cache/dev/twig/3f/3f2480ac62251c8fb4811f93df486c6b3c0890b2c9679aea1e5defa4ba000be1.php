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

/* vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php */
class __TwigTemplate_24b0ea7eacc55b174d29cc00cca7f060091d849557bc7a5b66e24e60406aec26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php"));

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
use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;
use Monolog\\ResettableInterface;

/**
 * Base Handler class providing the Handler structure
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
abstract class AbstractHandler implements HandlerInterface, ResettableInterface
{
    protected \$level = Logger::DEBUG;
    protected \$bubble = true;

    /**
     * @var FormatterInterface
     */
    protected \$formatter;
    protected \$processors = array();

    /**
     * @param int  \$level  The minimum logging level at which this handler will be triggered
     * @param bool \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        \$this->setLevel(\$level);
        \$this->bubble = \$bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$record['level'] >= \$this->level;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        foreach (\$records as \$record) {
            \$this->handle(\$record);
        }
    }

    /**
     * Closes the handler.
     *
     * This will be called automatically when the object is destroyed
     */
    public function close()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function pushProcessor(\$callback)
    {
        if (!is_callable(\$callback)) {
            throw new \\InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export(\$callback, true).' given');
        }
        array_unshift(\$this->processors, \$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor()
    {
        if (!\$this->processors) {
            throw new \\LogicException('You tried to pop from an empty processor stack.');
        }

        return array_shift(\$this->processors);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        if (!\$this->formatter) {
            \$this->formatter = \$this->getDefaultFormatter();
        }

        return \$this->formatter;
    }

    /**
     * Sets minimum logging level at which this handler will be triggered.
     *
     * @param  int|string \$level Level or level name
     * @return self
     */
    public function setLevel(\$level)
    {
        \$this->level = Logger::toMonologLevel(\$level);

        return \$this;
    }

    /**
     * Gets minimum logging level at which this handler will be triggered.
     *
     * @return int
     */
    public function getLevel()
    {
        return \$this->level;
    }

    /**
     * Sets the bubbling behavior.
     *
     * @param  bool \$bubble true means that this handler allows bubbling.
     *                      false means that bubbling is not permitted.
     * @return self
     */
    public function setBubble(\$bubble)
    {
        \$this->bubble = \$bubble;

        return \$this;
    }

    /**
     * Gets the bubbling behavior.
     *
     * @return bool true means that this handler allows bubbling.
     *              false means that bubbling is not permitted.
     */
    public function getBubble()
    {
        return \$this->bubble;
    }

    public function __destruct()
    {
        try {
            \$this->close();
        } catch (\\Exception \$e) {
            // do nothing
        } catch (\\Throwable \$e) {
            // do nothing
        }
    }

    public function reset()
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof ResettableInterface) {
                \$processor->reset();
            }
        }
    }

    /**
     * Gets the default formatter.
     *
     * @return FormatterInterface
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php";
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
use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;
use Monolog\\ResettableInterface;

/**
 * Base Handler class providing the Handler structure
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
abstract class AbstractHandler implements HandlerInterface, ResettableInterface
{
    protected \$level = Logger::DEBUG;
    protected \$bubble = true;

    /**
     * @var FormatterInterface
     */
    protected \$formatter;
    protected \$processors = array();

    /**
     * @param int  \$level  The minimum logging level at which this handler will be triggered
     * @param bool \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        \$this->setLevel(\$level);
        \$this->bubble = \$bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$record['level'] >= \$this->level;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        foreach (\$records as \$record) {
            \$this->handle(\$record);
        }
    }

    /**
     * Closes the handler.
     *
     * This will be called automatically when the object is destroyed
     */
    public function close()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function pushProcessor(\$callback)
    {
        if (!is_callable(\$callback)) {
            throw new \\InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export(\$callback, true).' given');
        }
        array_unshift(\$this->processors, \$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor()
    {
        if (!\$this->processors) {
            throw new \\LogicException('You tried to pop from an empty processor stack.');
        }

        return array_shift(\$this->processors);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        if (!\$this->formatter) {
            \$this->formatter = \$this->getDefaultFormatter();
        }

        return \$this->formatter;
    }

    /**
     * Sets minimum logging level at which this handler will be triggered.
     *
     * @param  int|string \$level Level or level name
     * @return self
     */
    public function setLevel(\$level)
    {
        \$this->level = Logger::toMonologLevel(\$level);

        return \$this;
    }

    /**
     * Gets minimum logging level at which this handler will be triggered.
     *
     * @return int
     */
    public function getLevel()
    {
        return \$this->level;
    }

    /**
     * Sets the bubbling behavior.
     *
     * @param  bool \$bubble true means that this handler allows bubbling.
     *                      false means that bubbling is not permitted.
     * @return self
     */
    public function setBubble(\$bubble)
    {
        \$this->bubble = \$bubble;

        return \$this;
    }

    /**
     * Gets the bubbling behavior.
     *
     * @return bool true means that this handler allows bubbling.
     *              false means that bubbling is not permitted.
     */
    public function getBubble()
    {
        return \$this->bubble;
    }

    public function __destruct()
    {
        try {
            \$this->close();
        } catch (\\Exception \$e) {
            // do nothing
        } catch (\\Throwable \$e) {
            // do nothing
        }
    }

    public function reset()
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof ResettableInterface) {
                \$processor->reset();
            }
        }
    }

    /**
     * Gets the default formatter.
     *
     * @return FormatterInterface
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter();
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php");
    }
}
