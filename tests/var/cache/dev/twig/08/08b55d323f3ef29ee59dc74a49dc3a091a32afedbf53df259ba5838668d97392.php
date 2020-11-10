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

/* vendor/symfony/form/FormError.php */
class __TwigTemplate_308a3bdced45d752a02af3b97ed9622a589570bcca57b0a4cf62cfca829d9530 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormError.php"));

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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\BadMethodCallException;

/**
 * Wraps errors in forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormError
{
    protected \$messageTemplate;
    protected \$messageParameters;
    protected \$messagePluralization;

    private \$message;
    private \$cause;

    /**
     * The form that spawned this error.
     *
     * @var FormInterface
     */
    private \$origin;

    /**
     * Any array key in \$messageParameters will be used as a placeholder in
     * \$messageTemplate.
     *
     * @param string      \$message              The translated error message
     * @param string|null \$messageTemplate      The template for the error message
     * @param array       \$messageParameters    The parameters that should be
     *                                          substituted in the message template
     * @param int|null    \$messagePluralization The value for error message pluralization
     * @param mixed       \$cause                The cause of the error
     *
     * @see \\Symfony\\Component\\Translation\\Translator
     */
    public function __construct(?string \$message, string \$messageTemplate = null, array \$messageParameters = [], int \$messagePluralization = null, \$cause = null)
    {
        \$this->message = (string) \$message;
        \$this->messageTemplate = \$messageTemplate ?: \$message;
        \$this->messageParameters = \$messageParameters;
        \$this->messagePluralization = \$messagePluralization;
        \$this->cause = \$cause;
    }

    /**
     * Returns the error message.
     *
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Returns the error message template.
     *
     * @return string
     */
    public function getMessageTemplate()
    {
        return \$this->messageTemplate;
    }

    /**
     * Returns the parameters to be inserted in the message template.
     *
     * @return array
     */
    public function getMessageParameters()
    {
        return \$this->messageParameters;
    }

    /**
     * Returns the value for error message pluralization.
     *
     * @return int|null
     */
    public function getMessagePluralization()
    {
        return \$this->messagePluralization;
    }

    /**
     * Returns the cause of this error.
     *
     * @return mixed The cause of this error
     */
    public function getCause()
    {
        return \$this->cause;
    }

    /**
     * Sets the form that caused this error.
     *
     * This method must only be called once.
     *
     * @param FormInterface \$origin The form that caused this error
     *
     * @throws BadMethodCallException If the method is called more than once
     */
    public function setOrigin(FormInterface \$origin)
    {
        if (null !== \$this->origin) {
            throw new BadMethodCallException('setOrigin() must only be called once.');
        }

        \$this->origin = \$origin;
    }

    /**
     * Returns the form that caused this error.
     *
     * @return FormInterface|null The form that caused this error
     */
    public function getOrigin()
    {
        return \$this->origin;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormError.php";
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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\BadMethodCallException;

/**
 * Wraps errors in forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormError
{
    protected \$messageTemplate;
    protected \$messageParameters;
    protected \$messagePluralization;

    private \$message;
    private \$cause;

    /**
     * The form that spawned this error.
     *
     * @var FormInterface
     */
    private \$origin;

    /**
     * Any array key in \$messageParameters will be used as a placeholder in
     * \$messageTemplate.
     *
     * @param string      \$message              The translated error message
     * @param string|null \$messageTemplate      The template for the error message
     * @param array       \$messageParameters    The parameters that should be
     *                                          substituted in the message template
     * @param int|null    \$messagePluralization The value for error message pluralization
     * @param mixed       \$cause                The cause of the error
     *
     * @see \\Symfony\\Component\\Translation\\Translator
     */
    public function __construct(?string \$message, string \$messageTemplate = null, array \$messageParameters = [], int \$messagePluralization = null, \$cause = null)
    {
        \$this->message = (string) \$message;
        \$this->messageTemplate = \$messageTemplate ?: \$message;
        \$this->messageParameters = \$messageParameters;
        \$this->messagePluralization = \$messagePluralization;
        \$this->cause = \$cause;
    }

    /**
     * Returns the error message.
     *
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Returns the error message template.
     *
     * @return string
     */
    public function getMessageTemplate()
    {
        return \$this->messageTemplate;
    }

    /**
     * Returns the parameters to be inserted in the message template.
     *
     * @return array
     */
    public function getMessageParameters()
    {
        return \$this->messageParameters;
    }

    /**
     * Returns the value for error message pluralization.
     *
     * @return int|null
     */
    public function getMessagePluralization()
    {
        return \$this->messagePluralization;
    }

    /**
     * Returns the cause of this error.
     *
     * @return mixed The cause of this error
     */
    public function getCause()
    {
        return \$this->cause;
    }

    /**
     * Sets the form that caused this error.
     *
     * This method must only be called once.
     *
     * @param FormInterface \$origin The form that caused this error
     *
     * @throws BadMethodCallException If the method is called more than once
     */
    public function setOrigin(FormInterface \$origin)
    {
        if (null !== \$this->origin) {
            throw new BadMethodCallException('setOrigin() must only be called once.');
        }

        \$this->origin = \$origin;
    }

    /**
     * Returns the form that caused this error.
     *
     * @return FormInterface|null The form that caused this error
     */
    public function getOrigin()
    {
        return \$this->origin;
    }
}
", "vendor/symfony/form/FormError.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormError.php");
    }
}
