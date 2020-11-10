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

/* vendor/symfony/expression-language/ExpressionFunction.php */
class __TwigTemplate_9c9b8b4b106e7955d21500cb309bfe039eb3a551819f67ad3b9f4b8526f952e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/ExpressionFunction.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/ExpressionFunction.php"));

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

/**
 * Represents a function that can be used in an expression.
 *
 * A function is defined by two PHP callables. The callables are used
 * by the language to compile and/or evaluate the function.
 *
 * The \"compiler\" function is used at compilation time and must return a
 * PHP representation of the function call (it receives the function
 * arguments as arguments).
 *
 * The \"evaluator\" function is used for expression evaluation and must return
 * the value of the function call based on the values defined for the
 * expression (it receives the values as a first argument and the function
 * arguments as remaining arguments).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionFunction
{
    private \$name;
    private \$compiler;
    private \$evaluator;

    /**
     * @param string   \$name      The function name
     * @param callable \$compiler  A callable able to compile the function
     * @param callable \$evaluator A callable able to evaluate the function
     */
    public function __construct(string \$name, callable \$compiler, callable \$evaluator)
    {
        \$this->name = \$name;
        \$this->compiler = \$compiler;
        \$this->evaluator = \$evaluator;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function getCompiler()
    {
        return \$this->compiler;
    }

    public function getEvaluator()
    {
        return \$this->evaluator;
    }

    /**
     * Creates an ExpressionFunction from a PHP function name.
     *
     * @param string      \$phpFunctionName        The PHP function name
     * @param string|null \$expressionFunctionName The expression function name (default: same than the PHP function name)
     *
     * @return self
     *
     * @throws \\InvalidArgumentException if given PHP function name does not exist
     * @throws \\InvalidArgumentException if given PHP function name is in namespace
     *                                   and expression function name is not defined
     */
    public static function fromPhp(\$phpFunctionName, \$expressionFunctionName = null)
    {
        \$phpFunctionName = ltrim(\$phpFunctionName, '\\\\');
        if (!\\function_exists(\$phpFunctionName)) {
            throw new \\InvalidArgumentException(sprintf('PHP function \"%s\" does not exist.', \$phpFunctionName));
        }

        \$parts = explode('\\\\', \$phpFunctionName);
        if (!\$expressionFunctionName && \\count(\$parts) > 1) {
            throw new \\InvalidArgumentException(sprintf('An expression function name must be defined when PHP function \"%s\" is namespaced.', \$phpFunctionName));
        }

        \$compiler = function () use (\$phpFunctionName) {
            return sprintf('\\%s(%s)', \$phpFunctionName, implode(', ', \\func_get_args()));
        };

        \$evaluator = function () use (\$phpFunctionName) {
            return \$phpFunctionName(...\\array_slice(\\func_get_args(), 1));
        };

        return new self(\$expressionFunctionName ?: end(\$parts), \$compiler, \$evaluator);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/ExpressionFunction.php";
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

/**
 * Represents a function that can be used in an expression.
 *
 * A function is defined by two PHP callables. The callables are used
 * by the language to compile and/or evaluate the function.
 *
 * The \"compiler\" function is used at compilation time and must return a
 * PHP representation of the function call (it receives the function
 * arguments as arguments).
 *
 * The \"evaluator\" function is used for expression evaluation and must return
 * the value of the function call based on the values defined for the
 * expression (it receives the values as a first argument and the function
 * arguments as remaining arguments).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionFunction
{
    private \$name;
    private \$compiler;
    private \$evaluator;

    /**
     * @param string   \$name      The function name
     * @param callable \$compiler  A callable able to compile the function
     * @param callable \$evaluator A callable able to evaluate the function
     */
    public function __construct(string \$name, callable \$compiler, callable \$evaluator)
    {
        \$this->name = \$name;
        \$this->compiler = \$compiler;
        \$this->evaluator = \$evaluator;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function getCompiler()
    {
        return \$this->compiler;
    }

    public function getEvaluator()
    {
        return \$this->evaluator;
    }

    /**
     * Creates an ExpressionFunction from a PHP function name.
     *
     * @param string      \$phpFunctionName        The PHP function name
     * @param string|null \$expressionFunctionName The expression function name (default: same than the PHP function name)
     *
     * @return self
     *
     * @throws \\InvalidArgumentException if given PHP function name does not exist
     * @throws \\InvalidArgumentException if given PHP function name is in namespace
     *                                   and expression function name is not defined
     */
    public static function fromPhp(\$phpFunctionName, \$expressionFunctionName = null)
    {
        \$phpFunctionName = ltrim(\$phpFunctionName, '\\\\');
        if (!\\function_exists(\$phpFunctionName)) {
            throw new \\InvalidArgumentException(sprintf('PHP function \"%s\" does not exist.', \$phpFunctionName));
        }

        \$parts = explode('\\\\', \$phpFunctionName);
        if (!\$expressionFunctionName && \\count(\$parts) > 1) {
            throw new \\InvalidArgumentException(sprintf('An expression function name must be defined when PHP function \"%s\" is namespaced.', \$phpFunctionName));
        }

        \$compiler = function () use (\$phpFunctionName) {
            return sprintf('\\%s(%s)', \$phpFunctionName, implode(', ', \\func_get_args()));
        };

        \$evaluator = function () use (\$phpFunctionName) {
            return \$phpFunctionName(...\\array_slice(\\func_get_args(), 1));
        };

        return new self(\$expressionFunctionName ?: end(\$parts), \$compiler, \$evaluator);
    }
}
", "vendor/symfony/expression-language/ExpressionFunction.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/ExpressionFunction.php");
    }
}
