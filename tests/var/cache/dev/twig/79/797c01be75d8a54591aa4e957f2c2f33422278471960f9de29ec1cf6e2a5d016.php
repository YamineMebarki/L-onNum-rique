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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php */
class __TwigTemplate_c40322ff3ca4fd8b3b5437bfda4ee00bf17329ab5695c5fcb0020ee3fa55a8f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature\\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for invalid provided signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidSignature(
        ReflectionClass \$class,
        array \$parameters,
        string \$signature,
        string \$expected
    ) : self {
        return new self(sprintf(
            'Found signature \"%s\" for class \"%s\" does not correspond to expected signature \"%s\" for %d parameters',
            \$signature,
            \$class->getName(),
            \$expected,
            count(\$parameters)
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Signature\\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for invalid provided signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidSignature(
        ReflectionClass \$class,
        array \$parameters,
        string \$signature,
        string \$expected
    ) : self {
        return new self(sprintf(
            'Found signature \"%s\" for class \"%s\" does not correspond to expected signature \"%s\" for %d parameters',
            \$signature,
            \$class->getName(),
            \$expected,
            count(\$parameters)
        ));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php");
    }
}
