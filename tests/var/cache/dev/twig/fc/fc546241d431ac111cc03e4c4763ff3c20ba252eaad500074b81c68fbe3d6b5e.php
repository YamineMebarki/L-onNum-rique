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

/* vendor/symfony/event-dispatcher/GenericEvent.php */
class __TwigTemplate_cf0222ca6c3d257ea3efaf516fb66289cab1e5f18743cf7541a2ddf41b6395f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/GenericEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/GenericEvent.php"));

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

namespace Symfony\\Component\\EventDispatcher;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
class GenericEvent extends Event implements \\ArrayAccess, \\IteratorAggregate
{
    protected \$subject;
    protected \$arguments;

    /**
     * Encapsulate an event with \$subject and \$args.
     *
     * @param mixed \$subject   The subject of the event, usually an object or a callable
     * @param array \$arguments Arguments to store in the event
     */
    public function __construct(\$subject = null, array \$arguments = [])
    {
        \$this->subject = \$subject;
        \$this->arguments = \$arguments;
    }

    /**
     * Getter for subject property.
     *
     * @return mixed The observer subject
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * Get argument by key.
     *
     * @param string \$key Key
     *
     * @return mixed Contents of array key
     *
     * @throws \\InvalidArgumentException if key is not found
     */
    public function getArgument(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            return \$this->arguments[\$key];
        }

        throw new \\InvalidArgumentException(sprintf('Argument \"%s\" not found.', \$key));
    }

    /**
     * Add argument to event.
     *
     * @param string \$key   Argument name
     * @param mixed  \$value Value
     *
     * @return \$this
     */
    public function setArgument(\$key, \$value)
    {
        \$this->arguments[\$key] = \$value;

        return \$this;
    }

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Set args property.
     *
     * @param array \$args Arguments
     *
     * @return \$this
     */
    public function setArguments(array \$args = [])
    {
        \$this->arguments = \$args;

        return \$this;
    }

    /**
     * Has argument.
     *
     * @param string \$key Key of arguments array
     *
     * @return bool
     */
    public function hasArgument(\$key)
    {
        return \\array_key_exists(\$key, \$this->arguments);
    }

    /**
     * ArrayAccess for argument getter.
     *
     * @param string \$key Array key
     *
     * @return mixed
     *
     * @throws \\InvalidArgumentException if key does not exist in \$this->args
     */
    public function offsetGet(\$key)
    {
        return \$this->getArgument(\$key);
    }

    /**
     * ArrayAccess for argument setter.
     *
     * @param string \$key   Array key to set
     * @param mixed  \$value Value
     */
    public function offsetSet(\$key, \$value)
    {
        \$this->setArgument(\$key, \$value);
    }

    /**
     * ArrayAccess for unset argument.
     *
     * @param string \$key Array key
     */
    public function offsetUnset(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            unset(\$this->arguments[\$key]);
        }
    }

    /**
     * ArrayAccess has argument.
     *
     * @param string \$key Array key
     *
     * @return bool
     */
    public function offsetExists(\$key)
    {
        return \$this->hasArgument(\$key);
    }

    /**
     * IteratorAggregate for iterating over the object like an array.
     *
     * @return \\ArrayIterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->arguments);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/GenericEvent.php";
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

namespace Symfony\\Component\\EventDispatcher;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
class GenericEvent extends Event implements \\ArrayAccess, \\IteratorAggregate
{
    protected \$subject;
    protected \$arguments;

    /**
     * Encapsulate an event with \$subject and \$args.
     *
     * @param mixed \$subject   The subject of the event, usually an object or a callable
     * @param array \$arguments Arguments to store in the event
     */
    public function __construct(\$subject = null, array \$arguments = [])
    {
        \$this->subject = \$subject;
        \$this->arguments = \$arguments;
    }

    /**
     * Getter for subject property.
     *
     * @return mixed The observer subject
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * Get argument by key.
     *
     * @param string \$key Key
     *
     * @return mixed Contents of array key
     *
     * @throws \\InvalidArgumentException if key is not found
     */
    public function getArgument(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            return \$this->arguments[\$key];
        }

        throw new \\InvalidArgumentException(sprintf('Argument \"%s\" not found.', \$key));
    }

    /**
     * Add argument to event.
     *
     * @param string \$key   Argument name
     * @param mixed  \$value Value
     *
     * @return \$this
     */
    public function setArgument(\$key, \$value)
    {
        \$this->arguments[\$key] = \$value;

        return \$this;
    }

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Set args property.
     *
     * @param array \$args Arguments
     *
     * @return \$this
     */
    public function setArguments(array \$args = [])
    {
        \$this->arguments = \$args;

        return \$this;
    }

    /**
     * Has argument.
     *
     * @param string \$key Key of arguments array
     *
     * @return bool
     */
    public function hasArgument(\$key)
    {
        return \\array_key_exists(\$key, \$this->arguments);
    }

    /**
     * ArrayAccess for argument getter.
     *
     * @param string \$key Array key
     *
     * @return mixed
     *
     * @throws \\InvalidArgumentException if key does not exist in \$this->args
     */
    public function offsetGet(\$key)
    {
        return \$this->getArgument(\$key);
    }

    /**
     * ArrayAccess for argument setter.
     *
     * @param string \$key   Array key to set
     * @param mixed  \$value Value
     */
    public function offsetSet(\$key, \$value)
    {
        \$this->setArgument(\$key, \$value);
    }

    /**
     * ArrayAccess for unset argument.
     *
     * @param string \$key Array key
     */
    public function offsetUnset(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            unset(\$this->arguments[\$key]);
        }
    }

    /**
     * ArrayAccess has argument.
     *
     * @param string \$key Array key
     *
     * @return bool
     */
    public function offsetExists(\$key)
    {
        return \$this->hasArgument(\$key);
    }

    /**
     * IteratorAggregate for iterating over the object like an array.
     *
     * @return \\ArrayIterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->arguments);
    }
}
", "vendor/symfony/event-dispatcher/GenericEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/GenericEvent.php");
    }
}
