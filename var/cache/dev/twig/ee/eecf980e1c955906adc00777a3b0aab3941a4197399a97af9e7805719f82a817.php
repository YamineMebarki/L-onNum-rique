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

/* vendor/symfony/security-core/Exception/AuthenticationException.php */
class __TwigTemplate_6e323e9533d872c06627dff23663f808cd075cbef6f25bdf2976f698d6fdd05d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/AuthenticationException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/AuthenticationException.php"));

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

namespace Symfony\\Component\\Security\\Core\\Exception;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AuthenticationException is the base class for all authentication exceptions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class AuthenticationException extends RuntimeException
{
    private \$token;

    /**
     * Get the token.
     *
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->token;
    }

    public function setToken(TokenInterface \$token)
    {
        \$this->token = \$token;
    }

    /**
     * Returns all the necessary state of the object for serialization purposes.
     *
     * There is no need to serialize any entry, they should be returned as-is.
     * If you extend this method, keep in mind you MUST guarantee parent data is present in the state.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __serialize(): array
     *     {
     *         return [\$this->childAttribute, parent::__serialize()];
     *     }
     * </code>
     *
     * @see __unserialize()
     */
    public function __serialize(): array
    {
        return [\$this->token, \$this->code, \$this->message, \$this->file, \$this->line];
    }

    /**
     * {@inheritdoc}
     *
     * @final since Symfony 4.3, use __serialize() instead
     *
     * @internal since Symfony 4.3, use __serialize() instead
     */
    public function serialize()
    {
        \$serialized = \$this->__serialize();

        if (null === \$isCalledFromOverridingMethod = \\func_num_args() ? func_get_arg(0) : null) {
            \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            \$isCalledFromOverridingMethod = isset(\$trace[1]['function'], \$trace[1]['object']) && 'serialize' === \$trace[1]['function'] && \$this === \$trace[1]['object'];
        }

        return \$isCalledFromOverridingMethod ? \$serialized : serialize(\$serialized);
    }

    /**
     * Restores the object state from an array given by __serialize().
     *
     * There is no need to unserialize any entry in \$data, they are already ready-to-use.
     * If you extend this method, keep in mind you MUST pass the parent data to its respective class.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __unserialize(array \$data): void
     *     {
     *         [\$this->childAttribute, \$parentData] = \$data;
     *         parent::__unserialize(\$parentData);
     *     }
     * </code>
     *
     * @see __serialize()
     */
    public function __unserialize(array \$data): void
    {
        [\$this->token, \$this->code, \$this->message, \$this->file, \$this->line] = \$data;
    }

    /**
     * {@inheritdoc}
     *
     * @final since Symfony 4.3, use __unserialize() instead
     *
     * @internal since Symfony 4.3, use __unserialize() instead
     */
    public function unserialize(\$serialized)
    {
        \$this->__unserialize(\\is_array(\$serialized) ? \$serialized : unserialize(\$serialized));
    }

    /**
     * @internal
     */
    public function __sleep()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'serialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::serialize()\" method is deprecated since Symfony 4.3, implement the __serialize() and __unserialize() methods instead.', \$c), E_USER_DEPRECATED);
            \$this->serialized = \$this->serialize();
        } else {
            \$this->serialized = \$this->__serialize();
        }

        return ['serialized'];
    }

    /**
     * @internal
     */
    public function __wakeup()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'unserialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::unserialize()\" method is deprecated since Symfony 4.3, implement the __serialize() and __unserialize() methods instead.', \$c), E_USER_DEPRECATED);
            \$this->unserialize(\$this->serialized);
        } else {
            \$this->__unserialize(\$this->serialized);
        }

        unset(\$this->serialized);
    }

    /**
     * Message key to be used by the translation component.
     *
     * @return string
     */
    public function getMessageKey()
    {
        return 'An authentication exception occurred.';
    }

    /**
     * Message data to be used by the translation component.
     *
     * @return array
     */
    public function getMessageData()
    {
        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Exception/AuthenticationException.php";
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

namespace Symfony\\Component\\Security\\Core\\Exception;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AuthenticationException is the base class for all authentication exceptions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class AuthenticationException extends RuntimeException
{
    private \$token;

    /**
     * Get the token.
     *
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->token;
    }

    public function setToken(TokenInterface \$token)
    {
        \$this->token = \$token;
    }

    /**
     * Returns all the necessary state of the object for serialization purposes.
     *
     * There is no need to serialize any entry, they should be returned as-is.
     * If you extend this method, keep in mind you MUST guarantee parent data is present in the state.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __serialize(): array
     *     {
     *         return [\$this->childAttribute, parent::__serialize()];
     *     }
     * </code>
     *
     * @see __unserialize()
     */
    public function __serialize(): array
    {
        return [\$this->token, \$this->code, \$this->message, \$this->file, \$this->line];
    }

    /**
     * {@inheritdoc}
     *
     * @final since Symfony 4.3, use __serialize() instead
     *
     * @internal since Symfony 4.3, use __serialize() instead
     */
    public function serialize()
    {
        \$serialized = \$this->__serialize();

        if (null === \$isCalledFromOverridingMethod = \\func_num_args() ? func_get_arg(0) : null) {
            \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            \$isCalledFromOverridingMethod = isset(\$trace[1]['function'], \$trace[1]['object']) && 'serialize' === \$trace[1]['function'] && \$this === \$trace[1]['object'];
        }

        return \$isCalledFromOverridingMethod ? \$serialized : serialize(\$serialized);
    }

    /**
     * Restores the object state from an array given by __serialize().
     *
     * There is no need to unserialize any entry in \$data, they are already ready-to-use.
     * If you extend this method, keep in mind you MUST pass the parent data to its respective class.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __unserialize(array \$data): void
     *     {
     *         [\$this->childAttribute, \$parentData] = \$data;
     *         parent::__unserialize(\$parentData);
     *     }
     * </code>
     *
     * @see __serialize()
     */
    public function __unserialize(array \$data): void
    {
        [\$this->token, \$this->code, \$this->message, \$this->file, \$this->line] = \$data;
    }

    /**
     * {@inheritdoc}
     *
     * @final since Symfony 4.3, use __unserialize() instead
     *
     * @internal since Symfony 4.3, use __unserialize() instead
     */
    public function unserialize(\$serialized)
    {
        \$this->__unserialize(\\is_array(\$serialized) ? \$serialized : unserialize(\$serialized));
    }

    /**
     * @internal
     */
    public function __sleep()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'serialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::serialize()\" method is deprecated since Symfony 4.3, implement the __serialize() and __unserialize() methods instead.', \$c), E_USER_DEPRECATED);
            \$this->serialized = \$this->serialize();
        } else {
            \$this->serialized = \$this->__serialize();
        }

        return ['serialized'];
    }

    /**
     * @internal
     */
    public function __wakeup()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'unserialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::unserialize()\" method is deprecated since Symfony 4.3, implement the __serialize() and __unserialize() methods instead.', \$c), E_USER_DEPRECATED);
            \$this->unserialize(\$this->serialized);
        } else {
            \$this->__unserialize(\$this->serialized);
        }

        unset(\$this->serialized);
    }

    /**
     * Message key to be used by the translation component.
     *
     * @return string
     */
    public function getMessageKey()
    {
        return 'An authentication exception occurred.';
    }

    /**
     * Message data to be used by the translation component.
     *
     * @return array
     */
    public function getMessageData()
    {
        return [];
    }
}
", "vendor/symfony/security-core/Exception/AuthenticationException.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Exception/AuthenticationException.php");
    }
}
