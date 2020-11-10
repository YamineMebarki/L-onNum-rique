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

/* vendor/symfony/form/Exception/TransformationFailedException.php */
class __TwigTemplate_ab0092255f8976503316bf19dbba229ecb01586dc423ea52a2db53f58fe8e628 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Exception/TransformationFailedException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Exception/TransformationFailedException.php"));

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

namespace Symfony\\Component\\Form\\Exception;

/**
 * Indicates a value transformation error.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TransformationFailedException extends RuntimeException
{
    private \$invalidMessage;
    private \$invalidMessageParameters;

    public function __construct(string \$message = '', int \$code = 0, \\Throwable \$previous = null, string \$invalidMessage = null, array \$invalidMessageParameters = [])
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->setInvalidMessage(\$invalidMessage, \$invalidMessageParameters);
    }

    /**
     * Sets the message that will be shown to the user.
     *
     * @param string|null \$invalidMessage           The message or message key
     * @param array       \$invalidMessageParameters Data to be passed into the translator
     */
    public function setInvalidMessage(string \$invalidMessage = null, array \$invalidMessageParameters = []): void
    {
        \$this->invalidMessage = \$invalidMessage;
        \$this->invalidMessageParameters = \$invalidMessageParameters;
    }

    public function getInvalidMessage(): ?string
    {
        return \$this->invalidMessage;
    }

    public function getInvalidMessageParameters(): array
    {
        return \$this->invalidMessageParameters;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Exception/TransformationFailedException.php";
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

namespace Symfony\\Component\\Form\\Exception;

/**
 * Indicates a value transformation error.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TransformationFailedException extends RuntimeException
{
    private \$invalidMessage;
    private \$invalidMessageParameters;

    public function __construct(string \$message = '', int \$code = 0, \\Throwable \$previous = null, string \$invalidMessage = null, array \$invalidMessageParameters = [])
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->setInvalidMessage(\$invalidMessage, \$invalidMessageParameters);
    }

    /**
     * Sets the message that will be shown to the user.
     *
     * @param string|null \$invalidMessage           The message or message key
     * @param array       \$invalidMessageParameters Data to be passed into the translator
     */
    public function setInvalidMessage(string \$invalidMessage = null, array \$invalidMessageParameters = []): void
    {
        \$this->invalidMessage = \$invalidMessage;
        \$this->invalidMessageParameters = \$invalidMessageParameters;
    }

    public function getInvalidMessage(): ?string
    {
        return \$this->invalidMessage;
    }

    public function getInvalidMessageParameters(): array
    {
        return \$this->invalidMessageParameters;
    }
}
", "vendor/symfony/form/Exception/TransformationFailedException.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Exception/TransformationFailedException.php");
    }
}
