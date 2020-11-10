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

/* vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php */
class __TwigTemplate_00c12a1288f0be613fcd9b1c5f7fa42f909244e4701bb18686296b5c5a203248 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Sandbox;

/**
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 *
 * @final
 */
class SecurityNotAllowedPropertyError extends SecurityError
{
    private \$className;
    private \$propertyName;

    public function __construct(string \$message, string \$className, string \$propertyName, int \$lineno = -1, string \$filename = null, \\Exception \$previous = null)
    {
        if (-1 !== \$lineno) {
            @trigger_error(sprintf('Passing \$lineno as a 3th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        if (null !== \$filename) {
            @trigger_error(sprintf('Passing \$filename as a 4th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        if (null !== \$previous) {
            @trigger_error(sprintf('Passing \$previous as a 5th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        parent::__construct(\$message, \$lineno, \$filename, \$previous);
        \$this->className = \$className;
        \$this->propertyName = \$propertyName;
    }

    public function getClassName()
    {
        return \$this->className;
    }

    public function getPropertyName()
    {
        return \$this->propertyName;
    }
}

class_alias('Twig\\Sandbox\\SecurityNotAllowedPropertyError', 'Twig_Sandbox_SecurityNotAllowedPropertyError');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Sandbox;

/**
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 *
 * @final
 */
class SecurityNotAllowedPropertyError extends SecurityError
{
    private \$className;
    private \$propertyName;

    public function __construct(string \$message, string \$className, string \$propertyName, int \$lineno = -1, string \$filename = null, \\Exception \$previous = null)
    {
        if (-1 !== \$lineno) {
            @trigger_error(sprintf('Passing \$lineno as a 3th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        if (null !== \$filename) {
            @trigger_error(sprintf('Passing \$filename as a 4th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        if (null !== \$previous) {
            @trigger_error(sprintf('Passing \$previous as a 5th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), E_USER_DEPRECATED);
        }
        parent::__construct(\$message, \$lineno, \$filename, \$previous);
        \$this->className = \$className;
        \$this->propertyName = \$propertyName;
    }

    public function getClassName()
    {
        return \$this->className;
    }

    public function getPropertyName()
    {
        return \$this->propertyName;
    }
}

class_alias('Twig\\Sandbox\\SecurityNotAllowedPropertyError', 'Twig_Sandbox_SecurityNotAllowedPropertyError');
", "vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php");
    }
}
