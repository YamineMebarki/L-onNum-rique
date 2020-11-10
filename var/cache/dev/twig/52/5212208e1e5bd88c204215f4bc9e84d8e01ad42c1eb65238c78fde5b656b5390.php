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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php */
class __TwigTemplate_47b11de7b125c6e9aee0ba20f7833fd99cc2513c864fd3ba8b1b5671f023762b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassSignatureGeneratorInterface
{
    /**
     * Applies a signature to a given class generator
     */
    public function addSignature(ClassGenerator \$classGenerator, array \$parameters) : ClassGenerator;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassSignatureGeneratorInterface
{
    /**
     * Applies a signature to a given class generator
     */
    public function addSignature(ClassGenerator \$classGenerator, array \$parameters) : ClassGenerator;
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGeneratorInterface.php");
    }
}
