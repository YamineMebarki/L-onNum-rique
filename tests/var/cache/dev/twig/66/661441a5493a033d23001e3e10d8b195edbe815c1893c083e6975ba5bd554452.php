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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php */
class __TwigTemplate_9b968d9d68d3f202757a147f66b94ab0251cec2c19995e3eac274bae345cbfb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use ProxyManager\\Inflector\\Util\\ParameterEncoder;
use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureGenerator implements SignatureGeneratorInterface
{
    /**
     * @var ParameterEncoder
     */
    private \$parameterEncoder;

    /**
     * @var ParameterHasher
     */
    private \$parameterHasher;

    /**
     * Constructor.
     */
    public function __construct()
    {
        \$this->parameterEncoder = new ParameterEncoder();
        \$this->parameterHasher  = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignature(array \$parameters) : string
    {
        return \$this->parameterEncoder->encodeParameters(\$parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignatureKey(array \$parameters) : string
    {
        return \$this->parameterHasher->hashParameters(\$parameters);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php";
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

use ProxyManager\\Inflector\\Util\\ParameterEncoder;
use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureGenerator implements SignatureGeneratorInterface
{
    /**
     * @var ParameterEncoder
     */
    private \$parameterEncoder;

    /**
     * @var ParameterHasher
     */
    private \$parameterHasher;

    /**
     * Constructor.
     */
    public function __construct()
    {
        \$this->parameterEncoder = new ParameterEncoder();
        \$this->parameterHasher  = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignature(array \$parameters) : string
    {
        return \$this->parameterEncoder->encodeParameters(\$parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignatureKey(array \$parameters) : string
    {
        return \$this->parameterHasher->hashParameters(\$parameters);
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php");
    }
}
