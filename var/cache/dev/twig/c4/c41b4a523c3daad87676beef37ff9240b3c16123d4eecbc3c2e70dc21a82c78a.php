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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php */
class __TwigTemplate_aeae2f10984d25527f0ed84fb00f57bffa56f2f85c07879883505bd417955b81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Map of public properties that exist in the class being proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicPropertiesMap extends PropertyGenerator
{
    /**
     * @var bool[]
     */
    private \$publicProperties = [];

    /**
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('publicProperties'));

        foreach (\$properties->getPublicProperties() as \$publicProperty) {
            \$this->publicProperties[\$publicProperty->getName()] = true;
        }

        \$this->setDefaultValue(\$this->publicProperties);
        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock('@var bool[] map of public properties of the parent class');
    }

    public function isEmpty() : bool
    {
        return ! \$this->publicProperties;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Map of public properties that exist in the class being proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicPropertiesMap extends PropertyGenerator
{
    /**
     * @var bool[]
     */
    private \$publicProperties = [];

    /**
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('publicProperties'));

        foreach (\$properties->getPublicProperties() as \$publicProperty) {
            \$this->publicProperties[\$publicProperty->getName()] = true;
        }

        \$this->setDefaultValue(\$this->publicProperties);
        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock('@var bool[] map of public properties of the parent class');
    }

    public function isEmpty() : bool
    {
        return ! \$this->publicProperties;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/PropertyGenerator/PublicPropertiesMap.php");
    }
}
