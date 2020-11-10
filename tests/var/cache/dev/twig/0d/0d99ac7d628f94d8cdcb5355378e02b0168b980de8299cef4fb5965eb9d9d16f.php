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

/* vendor/symfony/console/Input/Input.php */
class __TwigTemplate_c6724e1726908bc4874f7a2297fe943226bd049a34c9580927aabf6aaed3b0df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/Input.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/Input.php"));

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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface, StreamableInputInterface
{
    protected \$definition;
    protected \$stream;
    protected \$options = [];
    protected \$arguments = [];
    protected \$interactive = true;

    public function __construct(InputDefinition \$definition = null)
    {
        if (null === \$definition) {
            \$this->definition = new InputDefinition();
        } else {
            \$this->bind(\$definition);
            \$this->validate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bind(InputDefinition \$definition)
    {
        \$this->arguments = [];
        \$this->options = [];
        \$this->definition = \$definition;

        \$this->parse();
    }

    /**
     * Processes command line arguments.
     */
    abstract protected function parse();

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        \$definition = \$this->definition;
        \$givenArguments = \$this->arguments;

        \$missingArguments = array_filter(array_keys(\$definition->getArguments()), function (\$argument) use (\$definition, \$givenArguments) {
            return !\\array_key_exists(\$argument, \$givenArguments) && \$definition->getArgument(\$argument)->isRequired();
        });

        if (\\count(\$missingArguments) > 0) {
            throw new RuntimeException(sprintf('Not enough arguments (missing: \"%s\").', implode(', ', \$missingArguments)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInteractive()
    {
        return \$this->interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteractive(\$interactive)
    {
        \$this->interactive = (bool) \$interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments()
    {
        return array_merge(\$this->definition->getArgumentDefaults(), \$this->arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getArgument(\$name)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        return isset(\$this->arguments[\$name]) ? \$this->arguments[\$name] : \$this->definition->getArgument(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setArgument(\$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasArgument(\$name)
    {
        return \$this->definition->hasArgument(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return array_merge(\$this->definition->getOptionDefaults(), \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(\$name)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$this->definition->getOption(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(\$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(\$name)
    {
        return \$this->definition->hasOption(\$name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     *
     * @param string \$token
     *
     * @return string
     */
    public function escapeToken(\$token)
    {
        return preg_match('{^[\\w-]+\$}', \$token) ? \$token : escapeshellarg(\$token);
    }

    /**
     * {@inheritdoc}
     */
    public function setStream(\$stream)
    {
        \$this->stream = \$stream;
    }

    /**
     * {@inheritdoc}
     */
    public function getStream()
    {
        return \$this->stream;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Input/Input.php";
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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface, StreamableInputInterface
{
    protected \$definition;
    protected \$stream;
    protected \$options = [];
    protected \$arguments = [];
    protected \$interactive = true;

    public function __construct(InputDefinition \$definition = null)
    {
        if (null === \$definition) {
            \$this->definition = new InputDefinition();
        } else {
            \$this->bind(\$definition);
            \$this->validate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bind(InputDefinition \$definition)
    {
        \$this->arguments = [];
        \$this->options = [];
        \$this->definition = \$definition;

        \$this->parse();
    }

    /**
     * Processes command line arguments.
     */
    abstract protected function parse();

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        \$definition = \$this->definition;
        \$givenArguments = \$this->arguments;

        \$missingArguments = array_filter(array_keys(\$definition->getArguments()), function (\$argument) use (\$definition, \$givenArguments) {
            return !\\array_key_exists(\$argument, \$givenArguments) && \$definition->getArgument(\$argument)->isRequired();
        });

        if (\\count(\$missingArguments) > 0) {
            throw new RuntimeException(sprintf('Not enough arguments (missing: \"%s\").', implode(', ', \$missingArguments)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInteractive()
    {
        return \$this->interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteractive(\$interactive)
    {
        \$this->interactive = (bool) \$interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments()
    {
        return array_merge(\$this->definition->getArgumentDefaults(), \$this->arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getArgument(\$name)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        return isset(\$this->arguments[\$name]) ? \$this->arguments[\$name] : \$this->definition->getArgument(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setArgument(\$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasArgument(\$name)
    {
        return \$this->definition->hasArgument(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return array_merge(\$this->definition->getOptionDefaults(), \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(\$name)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$this->definition->getOption(\$name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(\$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" option does not exist.', \$name));
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(\$name)
    {
        return \$this->definition->hasOption(\$name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     *
     * @param string \$token
     *
     * @return string
     */
    public function escapeToken(\$token)
    {
        return preg_match('{^[\\w-]+\$}', \$token) ? \$token : escapeshellarg(\$token);
    }

    /**
     * {@inheritdoc}
     */
    public function setStream(\$stream)
    {
        \$this->stream = \$stream;
    }

    /**
     * {@inheritdoc}
     */
    public function getStream()
    {
        return \$this->stream;
    }
}
", "vendor/symfony/console/Input/Input.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Input/Input.php");
    }
}
