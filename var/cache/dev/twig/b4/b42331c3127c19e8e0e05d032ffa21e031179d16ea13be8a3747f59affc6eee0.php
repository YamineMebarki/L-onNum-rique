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

/* vendor/symfony/dependency-injection/ChildDefinition.php */
class __TwigTemplate_44f152d05fc8c2a643b8ba1865df2dc96db2c2a36f01e4d52f6bf3f3c7b19753 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ChildDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ChildDefinition.php"));

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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\OutOfBoundsException;

/**
 * This definition extends another definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ChildDefinition extends Definition
{
    private \$parent;

    /**
     * @param string \$parent The id of Definition instance to decorate
     */
    public function __construct(string \$parent)
    {
        \$this->parent = \$parent;
        \$this->setPrivate(false);
    }

    /**
     * Returns the Definition to inherit from.
     *
     * @return string
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * Sets the Definition to inherit from.
     *
     * @param string \$parent
     *
     * @return \$this
     */
    public function setParent(\$parent)
    {
        \$this->parent = \$parent;

        return \$this;
    }

    /**
     * Gets an argument to pass to the service constructor/factory method.
     *
     * If replaceArgument() has been used to replace an argument, this method
     * will return the replacement value.
     *
     * @param int|string \$index
     *
     * @return mixed The argument value
     *
     * @throws OutOfBoundsException When the argument does not exist
     */
    public function getArgument(\$index)
    {
        if (\\array_key_exists('index_'.\$index, \$this->arguments)) {
            return \$this->arguments['index_'.\$index];
        }

        return parent::getArgument(\$index);
    }

    /**
     * You should always use this method when overwriting existing arguments
     * of the parent definition.
     *
     * If you directly call setArguments() keep in mind that you must follow
     * certain conventions when you want to overwrite the arguments of the
     * parent definition, otherwise your arguments will only be appended.
     *
     * @param int|string \$index
     * @param mixed      \$value
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when \$index isn't an integer
     */
    public function replaceArgument(\$index, \$value)
    {
        if (\\is_int(\$index)) {
            \$this->arguments['index_'.\$index] = \$value;
        } elseif (0 === strpos(\$index, '\$')) {
            \$this->arguments[\$index] = \$value;
        } else {
            throw new InvalidArgumentException('The argument must be an existing index or the name of a constructor\\'s parameter.');
        }

        return \$this;
    }

    /**
     * @internal
     */
    public function setAutoconfigured(\$autoconfigured)
    {
        throw new BadMethodCallException('A ChildDefinition cannot be autoconfigured.');
    }

    /**
     * @internal
     */
    public function setInstanceofConditionals(array \$instanceof)
    {
        throw new BadMethodCallException('A ChildDefinition cannot have instanceof conditionals set on it.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ChildDefinition.php";
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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\OutOfBoundsException;

/**
 * This definition extends another definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ChildDefinition extends Definition
{
    private \$parent;

    /**
     * @param string \$parent The id of Definition instance to decorate
     */
    public function __construct(string \$parent)
    {
        \$this->parent = \$parent;
        \$this->setPrivate(false);
    }

    /**
     * Returns the Definition to inherit from.
     *
     * @return string
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * Sets the Definition to inherit from.
     *
     * @param string \$parent
     *
     * @return \$this
     */
    public function setParent(\$parent)
    {
        \$this->parent = \$parent;

        return \$this;
    }

    /**
     * Gets an argument to pass to the service constructor/factory method.
     *
     * If replaceArgument() has been used to replace an argument, this method
     * will return the replacement value.
     *
     * @param int|string \$index
     *
     * @return mixed The argument value
     *
     * @throws OutOfBoundsException When the argument does not exist
     */
    public function getArgument(\$index)
    {
        if (\\array_key_exists('index_'.\$index, \$this->arguments)) {
            return \$this->arguments['index_'.\$index];
        }

        return parent::getArgument(\$index);
    }

    /**
     * You should always use this method when overwriting existing arguments
     * of the parent definition.
     *
     * If you directly call setArguments() keep in mind that you must follow
     * certain conventions when you want to overwrite the arguments of the
     * parent definition, otherwise your arguments will only be appended.
     *
     * @param int|string \$index
     * @param mixed      \$value
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when \$index isn't an integer
     */
    public function replaceArgument(\$index, \$value)
    {
        if (\\is_int(\$index)) {
            \$this->arguments['index_'.\$index] = \$value;
        } elseif (0 === strpos(\$index, '\$')) {
            \$this->arguments[\$index] = \$value;
        } else {
            throw new InvalidArgumentException('The argument must be an existing index or the name of a constructor\\'s parameter.');
        }

        return \$this;
    }

    /**
     * @internal
     */
    public function setAutoconfigured(\$autoconfigured)
    {
        throw new BadMethodCallException('A ChildDefinition cannot be autoconfigured.');
    }

    /**
     * @internal
     */
    public function setInstanceofConditionals(array \$instanceof)
    {
        throw new BadMethodCallException('A ChildDefinition cannot have instanceof conditionals set on it.');
    }
}
", "vendor/symfony/dependency-injection/ChildDefinition.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ChildDefinition.php");
    }
}
