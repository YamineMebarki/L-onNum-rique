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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php */
class __TwigTemplate_d55965e4b6f43803e4e0a63a8ebdae0d30ceda4a1dcd21558fee826abf1d4294 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private \$signatureGenerator;

    /**
     * @param SignatureGeneratorInterface \$signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface \$signatureGenerator)
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass \$class, array \$parameters)
    {
        \$propertyName      = 'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters);
        \$signature         = \$this->signatureGenerator->generateSignature(\$parameters);
        \$defaultProperties = \$class->getDefaultProperties();

        if (! \\array_key_exists(\$propertyName, \$defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature(\$class, \$parameters, \$signature);
        }

        if (\$defaultProperties[\$propertyName] !== \$signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                \$class,
                \$parameters,
                \$defaultProperties[\$propertyName],
                \$signature
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php";
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

use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private \$signatureGenerator;

    /**
     * @param SignatureGeneratorInterface \$signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface \$signatureGenerator)
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass \$class, array \$parameters)
    {
        \$propertyName      = 'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters);
        \$signature         = \$this->signatureGenerator->generateSignature(\$parameters);
        \$defaultProperties = \$class->getDefaultProperties();

        if (! \\array_key_exists(\$propertyName, \$defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature(\$class, \$parameters, \$signature);
        }

        if (\$defaultProperties[\$propertyName] !== \$signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                \$class,
                \$parameters,
                \$defaultProperties[\$propertyName],
                \$signature
            );
        }
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php");
    }
}
