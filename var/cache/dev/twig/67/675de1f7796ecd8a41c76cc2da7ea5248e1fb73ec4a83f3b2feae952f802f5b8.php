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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php */
class __TwigTemplate_20253c67b9e9d2db66049a66e79ca8692e6564206eed8e9a0fb12dc09fcb1533 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the initializer for a lazy object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PrivatePropertiesMap extends PropertyGenerator
{
    const KEY_DEFAULT_VALUE = 'defaultValue';

    /**
     * Constructor
     *
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(
            IdentifierSuffixer::getIdentifier('privateProperties')
        );

        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock(
            '@var array[][] visibility and default value of defined properties, indexed by property name and class name'
        );
        \$this->setDefaultValue(\$this->getMap(\$properties));
    }

    /**
     * @param Properties \$properties
     *
     * @return int[][]|mixed[][]
     */
    private function getMap(Properties \$properties) : array
    {
        \$map = [];

        foreach (\$properties->getPrivateProperties() as \$property) {
            \$propertyKey = & \$map[\$property->getName()];

            \$propertyKey[\$property->getDeclaringClass()->getName()] = true;
        }

        return \$map;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the initializer for a lazy object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PrivatePropertiesMap extends PropertyGenerator
{
    const KEY_DEFAULT_VALUE = 'defaultValue';

    /**
     * Constructor
     *
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(
            IdentifierSuffixer::getIdentifier('privateProperties')
        );

        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock(
            '@var array[][] visibility and default value of defined properties, indexed by property name and class name'
        );
        \$this->setDefaultValue(\$this->getMap(\$properties));
    }

    /**
     * @param Properties \$properties
     *
     * @return int[][]|mixed[][]
     */
    private function getMap(Properties \$properties) : array
    {
        \$map = [];

        foreach (\$properties->getPrivateProperties() as \$property) {
            \$propertyKey = & \$map[\$property->getName()];

            \$propertyKey[\$property->getDeclaringClass()->getName()] = true;
        }

        return \$map;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/PrivatePropertiesMap.php");
    }
}
