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

/* vendor/symfony/dependency-injection/TypedReference.php */
class __TwigTemplate_232a4c1d08819ca728c99d72a64052bfaf5d914e8a76a92a92f31b368fa8bab4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/TypedReference.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/TypedReference.php"));

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

/**
 * Represents a PHP type-hinted service reference.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TypedReference extends Reference
{
    private \$type;
    private \$name;
    private \$requiringClass;

    /**
     * @param string \$id              The service identifier
     * @param string \$type            The PHP type of the identified service
     * @param int    \$invalidBehavior The behavior when the service does not exist
     * @param string \$name            The name of the argument targeting the service
     */
    public function __construct(string \$id, string \$type, \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$name = null)
    {
        if (\\is_string(\$invalidBehavior ?? '') || \\is_int(\$name)) {
            @trigger_error(sprintf('The \$requiringClass argument of \"%s()\" is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

            \$this->requiringClass = \$invalidBehavior;
            \$invalidBehavior = 3 < \\func_num_args() ? func_get_arg(3) : ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        } else {
            \$this->name = \$type === \$id ? \$name : null;
        }
        parent::__construct(\$id, \$invalidBehavior);
        \$this->type = \$type;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }

    /**
     * @deprecated since Symfony 4.1
     */
    public function getRequiringClass()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        return \$this->requiringClass ?? '';
    }

    /**
     * @deprecated since Symfony 4.1
     */
    public function canBeAutoregistered()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        return \$this->requiringClass && (false !== \$i = strpos(\$this->type, '\\\\')) && 0 === strncasecmp(\$this->type, \$this->requiringClass, 1 + \$i);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/TypedReference.php";
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

/**
 * Represents a PHP type-hinted service reference.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TypedReference extends Reference
{
    private \$type;
    private \$name;
    private \$requiringClass;

    /**
     * @param string \$id              The service identifier
     * @param string \$type            The PHP type of the identified service
     * @param int    \$invalidBehavior The behavior when the service does not exist
     * @param string \$name            The name of the argument targeting the service
     */
    public function __construct(string \$id, string \$type, \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$name = null)
    {
        if (\\is_string(\$invalidBehavior ?? '') || \\is_int(\$name)) {
            @trigger_error(sprintf('The \$requiringClass argument of \"%s()\" is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

            \$this->requiringClass = \$invalidBehavior;
            \$invalidBehavior = 3 < \\func_num_args() ? func_get_arg(3) : ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        } else {
            \$this->name = \$type === \$id ? \$name : null;
        }
        parent::__construct(\$id, \$invalidBehavior);
        \$this->type = \$type;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }

    /**
     * @deprecated since Symfony 4.1
     */
    public function getRequiringClass()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        return \$this->requiringClass ?? '';
    }

    /**
     * @deprecated since Symfony 4.1
     */
    public function canBeAutoregistered()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        return \$this->requiringClass && (false !== \$i = strpos(\$this->type, '\\\\')) && 0 === strncasecmp(\$this->type, \$this->requiringClass, 1 + \$i);
    }
}
", "vendor/symfony/dependency-injection/TypedReference.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/TypedReference.php");
    }
}
