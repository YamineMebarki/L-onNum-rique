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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php */
class __TwigTemplate_e7319bf00beb2045b6fe041022b98f4cb0c864be20ab39ab9abdbe6458afe7cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use OutOfBoundsException as BaseOutOfBoundsException;

/**
 * Proxy Invalid Argument Exception.
 *
 * @link   www.doctrine-project.org
 * @author Fredrik Wendel <fredrik_w@users.sourceforge.net>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class OutOfBoundsException extends BaseOutOfBoundsException implements ProxyException
{
    /**
     * @param string \$className
     * @param string \$idField
     *
     * @return self
     */
    public static function missingPrimaryKeyValue(\$className, \$idField)
    {
        return new self(sprintf(\"Missing value for primary key %s on %s\", \$idField, \$className));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use OutOfBoundsException as BaseOutOfBoundsException;

/**
 * Proxy Invalid Argument Exception.
 *
 * @link   www.doctrine-project.org
 * @author Fredrik Wendel <fredrik_w@users.sourceforge.net>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class OutOfBoundsException extends BaseOutOfBoundsException implements ProxyException
{
    /**
     * @param string \$className
     * @param string \$idField
     *
     * @return self
     */
    public static function missingPrimaryKeyValue(\$className, \$idField)
    {
        return new self(sprintf(\"Missing value for primary key %s on %s\", \$idField, \$className));
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php");
    }
}
