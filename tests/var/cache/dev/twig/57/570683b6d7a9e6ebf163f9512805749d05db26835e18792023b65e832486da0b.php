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

/* vendor/symfony/process/Pipes/AbstractPipes.php */
class __TwigTemplate_d79972ba168f4bb1f447d3a0c018ee47c3dfb26314230486cb24ad88feae27b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/AbstractPipes.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/AbstractPipes.php"));

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

namespace Symfony\\Component\\Process\\Pipes;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;

/**
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
abstract class AbstractPipes implements PipesInterface
{
    public \$pipes = [];

    private \$inputBuffer = '';
    private \$input;
    private \$blocked = true;
    private \$lastError;

    /**
     * @param resource|string|int|float|bool|\\Iterator|null \$input
     */
    public function __construct(\$input)
    {
        if (\\is_resource(\$input) || \$input instanceof \\Iterator) {
            \$this->input = \$input;
        } elseif (\\is_string(\$input)) {
            \$this->inputBuffer = \$input;
        } else {
            \$this->inputBuffer = (string) \$input;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        foreach (\$this->pipes as \$pipe) {
            fclose(\$pipe);
        }
        \$this->pipes = [];
    }

    /**
     * Returns true if a system call has been interrupted.
     *
     * @return bool
     */
    protected function hasSystemCallBeenInterrupted()
    {
        \$lastError = \$this->lastError;
        \$this->lastError = null;

        // stream_select returns false when the `select` system call is interrupted by an incoming signal
        return null !== \$lastError && false !== stripos(\$lastError, 'interrupted system call');
    }

    /**
     * Unblocks streams.
     */
    protected function unblock()
    {
        if (!\$this->blocked) {
            return;
        }

        foreach (\$this->pipes as \$pipe) {
            stream_set_blocking(\$pipe, 0);
        }
        if (\\is_resource(\$this->input)) {
            stream_set_blocking(\$this->input, 0);
        }

        \$this->blocked = false;
    }

    /**
     * Writes input to stdin.
     *
     * @return array|null
     *
     * @throws InvalidArgumentException When an input iterator yields a non supported value
     */
    protected function write()
    {
        if (!isset(\$this->pipes[0])) {
            return null;
        }
        \$input = \$this->input;

        if (\$input instanceof \\Iterator) {
            if (!\$input->valid()) {
                \$input = null;
            } elseif (\\is_resource(\$input = \$input->current())) {
                stream_set_blocking(\$input, 0);
            } elseif (!isset(\$this->inputBuffer[0])) {
                if (!\\is_string(\$input)) {
                    if (!is_scalar(\$input)) {
                        throw new InvalidArgumentException(sprintf('%s yielded a value of type \"%s\", but only scalars and stream resources are supported', \\get_class(\$this->input), \\gettype(\$input)));
                    }
                    \$input = (string) \$input;
                }
                \$this->inputBuffer = \$input;
                \$this->input->next();
                \$input = null;
            } else {
                \$input = null;
            }
        }

        \$r = \$e = [];
        \$w = [\$this->pipes[0]];

        // let's have a look if something changed in streams
        if (false === @stream_select(\$r, \$w, \$e, 0, 0)) {
            return null;
        }

        foreach (\$w as \$stdin) {
            if (isset(\$this->inputBuffer[0])) {
                \$written = fwrite(\$stdin, \$this->inputBuffer);
                \$this->inputBuffer = substr(\$this->inputBuffer, \$written);
                if (isset(\$this->inputBuffer[0])) {
                    return [\$this->pipes[0]];
                }
            }

            if (\$input) {
                for (;;) {
                    \$data = fread(\$input, self::CHUNK_SIZE);
                    if (!isset(\$data[0])) {
                        break;
                    }
                    \$written = fwrite(\$stdin, \$data);
                    \$data = substr(\$data, \$written);
                    if (isset(\$data[0])) {
                        \$this->inputBuffer = \$data;

                        return [\$this->pipes[0]];
                    }
                }
                if (feof(\$input)) {
                    if (\$this->input instanceof \\Iterator) {
                        \$this->input->next();
                    } else {
                        \$this->input = null;
                    }
                }
            }
        }

        // no input to read on resource, buffer is empty
        if (!isset(\$this->inputBuffer[0]) && !(\$this->input instanceof \\Iterator ? \$this->input->valid() : \$this->input)) {
            \$this->input = null;
            fclose(\$this->pipes[0]);
            unset(\$this->pipes[0]);
        } elseif (!\$w) {
            return [\$this->pipes[0]];
        }

        return null;
    }

    /**
     * @internal
     */
    public function handleError(\$type, \$msg)
    {
        \$this->lastError = \$msg;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Pipes/AbstractPipes.php";
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

namespace Symfony\\Component\\Process\\Pipes;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;

/**
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
abstract class AbstractPipes implements PipesInterface
{
    public \$pipes = [];

    private \$inputBuffer = '';
    private \$input;
    private \$blocked = true;
    private \$lastError;

    /**
     * @param resource|string|int|float|bool|\\Iterator|null \$input
     */
    public function __construct(\$input)
    {
        if (\\is_resource(\$input) || \$input instanceof \\Iterator) {
            \$this->input = \$input;
        } elseif (\\is_string(\$input)) {
            \$this->inputBuffer = \$input;
        } else {
            \$this->inputBuffer = (string) \$input;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        foreach (\$this->pipes as \$pipe) {
            fclose(\$pipe);
        }
        \$this->pipes = [];
    }

    /**
     * Returns true if a system call has been interrupted.
     *
     * @return bool
     */
    protected function hasSystemCallBeenInterrupted()
    {
        \$lastError = \$this->lastError;
        \$this->lastError = null;

        // stream_select returns false when the `select` system call is interrupted by an incoming signal
        return null !== \$lastError && false !== stripos(\$lastError, 'interrupted system call');
    }

    /**
     * Unblocks streams.
     */
    protected function unblock()
    {
        if (!\$this->blocked) {
            return;
        }

        foreach (\$this->pipes as \$pipe) {
            stream_set_blocking(\$pipe, 0);
        }
        if (\\is_resource(\$this->input)) {
            stream_set_blocking(\$this->input, 0);
        }

        \$this->blocked = false;
    }

    /**
     * Writes input to stdin.
     *
     * @return array|null
     *
     * @throws InvalidArgumentException When an input iterator yields a non supported value
     */
    protected function write()
    {
        if (!isset(\$this->pipes[0])) {
            return null;
        }
        \$input = \$this->input;

        if (\$input instanceof \\Iterator) {
            if (!\$input->valid()) {
                \$input = null;
            } elseif (\\is_resource(\$input = \$input->current())) {
                stream_set_blocking(\$input, 0);
            } elseif (!isset(\$this->inputBuffer[0])) {
                if (!\\is_string(\$input)) {
                    if (!is_scalar(\$input)) {
                        throw new InvalidArgumentException(sprintf('%s yielded a value of type \"%s\", but only scalars and stream resources are supported', \\get_class(\$this->input), \\gettype(\$input)));
                    }
                    \$input = (string) \$input;
                }
                \$this->inputBuffer = \$input;
                \$this->input->next();
                \$input = null;
            } else {
                \$input = null;
            }
        }

        \$r = \$e = [];
        \$w = [\$this->pipes[0]];

        // let's have a look if something changed in streams
        if (false === @stream_select(\$r, \$w, \$e, 0, 0)) {
            return null;
        }

        foreach (\$w as \$stdin) {
            if (isset(\$this->inputBuffer[0])) {
                \$written = fwrite(\$stdin, \$this->inputBuffer);
                \$this->inputBuffer = substr(\$this->inputBuffer, \$written);
                if (isset(\$this->inputBuffer[0])) {
                    return [\$this->pipes[0]];
                }
            }

            if (\$input) {
                for (;;) {
                    \$data = fread(\$input, self::CHUNK_SIZE);
                    if (!isset(\$data[0])) {
                        break;
                    }
                    \$written = fwrite(\$stdin, \$data);
                    \$data = substr(\$data, \$written);
                    if (isset(\$data[0])) {
                        \$this->inputBuffer = \$data;

                        return [\$this->pipes[0]];
                    }
                }
                if (feof(\$input)) {
                    if (\$this->input instanceof \\Iterator) {
                        \$this->input->next();
                    } else {
                        \$this->input = null;
                    }
                }
            }
        }

        // no input to read on resource, buffer is empty
        if (!isset(\$this->inputBuffer[0]) && !(\$this->input instanceof \\Iterator ? \$this->input->valid() : \$this->input)) {
            \$this->input = null;
            fclose(\$this->pipes[0]);
            unset(\$this->pipes[0]);
        } elseif (!\$w) {
            return [\$this->pipes[0]];
        }

        return null;
    }

    /**
     * @internal
     */
    public function handleError(\$type, \$msg)
    {
        \$this->lastError = \$msg;
    }
}
", "vendor/symfony/process/Pipes/AbstractPipes.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Pipes/AbstractPipes.php");
    }
}
