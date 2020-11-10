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

/* vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php */
class __TwigTemplate_d073b13c469c29495caa798d987c865eb467a47caf1585fe392cc3db50e924c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php"));

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
use Monolog\\ResettableInterface;

/**
 * Buffers all records until closing the handler and then pass them as batch.
 *
 * This is useful for a MailHandler to send only one mail per request instead of
 * sending one per log message.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class BufferHandler extends AbstractHandler
{
    protected \$handler;
    protected \$bufferSize = 0;
    protected \$bufferLimit;
    protected \$flushOnOverflow;
    protected \$buffer = array();
    protected \$initialized = false;

    /**
     * @param HandlerInterface \$handler         Handler.
     * @param int              \$bufferLimit     How many entries should be buffered at most, beyond that the oldest items are removed from the buffer.
     * @param int              \$level           The minimum logging level at which this handler will be triggered
     * @param bool             \$bubble          Whether the messages that are handled can bubble up the stack or not
     * @param bool             \$flushOnOverflow If true, the buffer is flushed when the max size has been reached, by default oldest entries are discarded
     */
    public function __construct(HandlerInterface \$handler, \$bufferLimit = 0, \$level = Logger::DEBUG, \$bubble = true, \$flushOnOverflow = false)
    {
        parent::__construct(\$level, \$bubble);
        \$this->handler = \$handler;
        \$this->bufferLimit = (int) \$bufferLimit;
        \$this->flushOnOverflow = \$flushOnOverflow;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (\$record['level'] < \$this->level) {
            return false;
        }

        if (!\$this->initialized) {
            // __destructor() doesn't get called on Fatal errors
            register_shutdown_function(array(\$this, 'close'));
            \$this->initialized = true;
        }

        if (\$this->bufferLimit > 0 && \$this->bufferSize === \$this->bufferLimit) {
            if (\$this->flushOnOverflow) {
                \$this->flush();
            } else {
                array_shift(\$this->buffer);
                \$this->bufferSize--;
            }
        }

        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        \$this->buffer[] = \$record;
        \$this->bufferSize++;

        return false === \$this->bubble;
    }

    public function flush()
    {
        if (\$this->bufferSize === 0) {
            return;
        }

        \$this->handler->handleBatch(\$this->buffer);
        \$this->clear();
    }

    public function __destruct()
    {
        // suppress the parent behavior since we already have register_shutdown_function()
        // to call close(), and the reference contained there will prevent this from being
        // GC'd until the end of the request
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$this->flush();
    }

    /**
     * Clears the buffer without flushing any messages down to the wrapped handler.
     */
    public function clear()
    {
        \$this->bufferSize = 0;
        \$this->buffer = array();
    }

    public function reset()
    {
        \$this->flush();

        parent::reset();

        if (\$this->handler instanceof ResettableInterface) {
            \$this->handler->reset();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php";
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
use Monolog\\ResettableInterface;

/**
 * Buffers all records until closing the handler and then pass them as batch.
 *
 * This is useful for a MailHandler to send only one mail per request instead of
 * sending one per log message.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class BufferHandler extends AbstractHandler
{
    protected \$handler;
    protected \$bufferSize = 0;
    protected \$bufferLimit;
    protected \$flushOnOverflow;
    protected \$buffer = array();
    protected \$initialized = false;

    /**
     * @param HandlerInterface \$handler         Handler.
     * @param int              \$bufferLimit     How many entries should be buffered at most, beyond that the oldest items are removed from the buffer.
     * @param int              \$level           The minimum logging level at which this handler will be triggered
     * @param bool             \$bubble          Whether the messages that are handled can bubble up the stack or not
     * @param bool             \$flushOnOverflow If true, the buffer is flushed when the max size has been reached, by default oldest entries are discarded
     */
    public function __construct(HandlerInterface \$handler, \$bufferLimit = 0, \$level = Logger::DEBUG, \$bubble = true, \$flushOnOverflow = false)
    {
        parent::__construct(\$level, \$bubble);
        \$this->handler = \$handler;
        \$this->bufferLimit = (int) \$bufferLimit;
        \$this->flushOnOverflow = \$flushOnOverflow;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (\$record['level'] < \$this->level) {
            return false;
        }

        if (!\$this->initialized) {
            // __destructor() doesn't get called on Fatal errors
            register_shutdown_function(array(\$this, 'close'));
            \$this->initialized = true;
        }

        if (\$this->bufferLimit > 0 && \$this->bufferSize === \$this->bufferLimit) {
            if (\$this->flushOnOverflow) {
                \$this->flush();
            } else {
                array_shift(\$this->buffer);
                \$this->bufferSize--;
            }
        }

        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        \$this->buffer[] = \$record;
        \$this->bufferSize++;

        return false === \$this->bubble;
    }

    public function flush()
    {
        if (\$this->bufferSize === 0) {
            return;
        }

        \$this->handler->handleBatch(\$this->buffer);
        \$this->clear();
    }

    public function __destruct()
    {
        // suppress the parent behavior since we already have register_shutdown_function()
        // to call close(), and the reference contained there will prevent this from being
        // GC'd until the end of the request
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$this->flush();
    }

    /**
     * Clears the buffer without flushing any messages down to the wrapped handler.
     */
    public function clear()
    {
        \$this->bufferSize = 0;
        \$this->buffer = array();
    }

    public function reset()
    {
        \$this->flush();

        parent::reset();

        if (\$this->handler instanceof ResettableInterface) {
            \$this->handler->reset();
        }
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php");
    }
}
