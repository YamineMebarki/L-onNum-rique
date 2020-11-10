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

/* vendor/symfony/expression-language/Compiler.php */
class __TwigTemplate_2d09847f4c44edf439dfaff5f41211887cc4debbd8095c8464b2b0b8fa7498bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Compiler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Compiler.php"));

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

namespace Symfony\\Component\\ExpressionLanguage;

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Compiles a node to PHP code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Compiler implements ResetInterface
{
    private \$source;
    private \$functions;

    public function __construct(array \$functions)
    {
        \$this->functions = \$functions;
    }

    public function getFunction(\$name)
    {
        return \$this->functions[\$name];
    }

    /**
     * Gets the current PHP code after compilation.
     *
     * @return string The PHP code
     */
    public function getSource()
    {
        return \$this->source;
    }

    public function reset()
    {
        \$this->source = '';

        return \$this;
    }

    /**
     * Compiles a node.
     *
     * @return \$this
     */
    public function compile(Node\\Node \$node)
    {
        \$node->compile(\$this);

        return \$this;
    }

    public function subcompile(Node\\Node \$node)
    {
        \$current = \$this->source;
        \$this->source = '';

        \$node->compile(\$this);

        \$source = \$this->source;
        \$this->source = \$current;

        return \$source;
    }

    /**
     * Adds a raw string to the compiled code.
     *
     * @param string \$string The string
     *
     * @return \$this
     */
    public function raw(\$string)
    {
        \$this->source .= \$string;

        return \$this;
    }

    /**
     * Adds a quoted string to the compiled code.
     *
     * @param string \$value The string
     *
     * @return \$this
     */
    public function string(\$value)
    {
        \$this->source .= sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\$\\\\\"));

        return \$this;
    }

    /**
     * Returns a PHP representation of a given value.
     *
     * @param mixed \$value The value to convert
     *
     * @return \$this
     */
    public function repr(\$value)
    {
        if (\\is_int(\$value) || \\is_float(\$value)) {
            if (false !== \$locale = setlocale(LC_NUMERIC, 0)) {
                setlocale(LC_NUMERIC, 'C');
            }

            \$this->raw(\$value);

            if (false !== \$locale) {
                setlocale(LC_NUMERIC, \$locale);
            }
        } elseif (null === \$value) {
            \$this->raw('null');
        } elseif (\\is_bool(\$value)) {
            \$this->raw(\$value ? 'true' : 'false');
        } elseif (\\is_array(\$value)) {
            \$this->raw('[');
            \$first = true;
            foreach (\$value as \$key => \$value) {
                if (!\$first) {
                    \$this->raw(', ');
                }
                \$first = false;
                \$this->repr(\$key);
                \$this->raw(' => ');
                \$this->repr(\$value);
            }
            \$this->raw(']');
        } else {
            \$this->string(\$value);
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
        return "vendor/symfony/expression-language/Compiler.php";
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

namespace Symfony\\Component\\ExpressionLanguage;

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Compiles a node to PHP code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Compiler implements ResetInterface
{
    private \$source;
    private \$functions;

    public function __construct(array \$functions)
    {
        \$this->functions = \$functions;
    }

    public function getFunction(\$name)
    {
        return \$this->functions[\$name];
    }

    /**
     * Gets the current PHP code after compilation.
     *
     * @return string The PHP code
     */
    public function getSource()
    {
        return \$this->source;
    }

    public function reset()
    {
        \$this->source = '';

        return \$this;
    }

    /**
     * Compiles a node.
     *
     * @return \$this
     */
    public function compile(Node\\Node \$node)
    {
        \$node->compile(\$this);

        return \$this;
    }

    public function subcompile(Node\\Node \$node)
    {
        \$current = \$this->source;
        \$this->source = '';

        \$node->compile(\$this);

        \$source = \$this->source;
        \$this->source = \$current;

        return \$source;
    }

    /**
     * Adds a raw string to the compiled code.
     *
     * @param string \$string The string
     *
     * @return \$this
     */
    public function raw(\$string)
    {
        \$this->source .= \$string;

        return \$this;
    }

    /**
     * Adds a quoted string to the compiled code.
     *
     * @param string \$value The string
     *
     * @return \$this
     */
    public function string(\$value)
    {
        \$this->source .= sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\$\\\\\"));

        return \$this;
    }

    /**
     * Returns a PHP representation of a given value.
     *
     * @param mixed \$value The value to convert
     *
     * @return \$this
     */
    public function repr(\$value)
    {
        if (\\is_int(\$value) || \\is_float(\$value)) {
            if (false !== \$locale = setlocale(LC_NUMERIC, 0)) {
                setlocale(LC_NUMERIC, 'C');
            }

            \$this->raw(\$value);

            if (false !== \$locale) {
                setlocale(LC_NUMERIC, \$locale);
            }
        } elseif (null === \$value) {
            \$this->raw('null');
        } elseif (\\is_bool(\$value)) {
            \$this->raw(\$value ? 'true' : 'false');
        } elseif (\\is_array(\$value)) {
            \$this->raw('[');
            \$first = true;
            foreach (\$value as \$key => \$value) {
                if (!\$first) {
                    \$this->raw(', ');
                }
                \$first = false;
                \$this->repr(\$key);
                \$this->raw(' => ');
                \$this->repr(\$value);
            }
            \$this->raw(']');
        } else {
            \$this->string(\$value);
        }

        return \$this;
    }
}
", "vendor/symfony/expression-language/Compiler.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Compiler.php");
    }
}
