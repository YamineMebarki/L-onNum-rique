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

/* vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php */
class __TwigTemplate_7a61e6b0a47c6098be0d3e02bf02353ea38aaed1498bd3ce9ba3e5dcd7d45943 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator\\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
use const PHP_VERSION_ID;
use function interface_exists;
use function sprintf;
use function trait_exists;

/**
 * Exception for invalid arguments provided to the instantiator
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
    public static function fromNonExistingClass(string \$className) : self
    {
        if (interface_exists(\$className)) {
            return new self(sprintf('The provided type \"%s\" is an interface, and can not be instantiated', \$className));
        }

        if (PHP_VERSION_ID >= 50400 && trait_exists(\$className)) {
            return new self(sprintf('The provided type \"%s\" is a trait, and can not be instantiated', \$className));
        }

        return new self(sprintf('The provided class \"%s\" does not exist', \$className));
    }

    public static function fromAbstractClass(ReflectionClass \$reflectionClass) : self
    {
        return new self(sprintf(
            'The provided class \"%s\" is abstract, and can not be instantiated',
            \$reflectionClass->getName()
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator\\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
use const PHP_VERSION_ID;
use function interface_exists;
use function sprintf;
use function trait_exists;

/**
 * Exception for invalid arguments provided to the instantiator
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
    public static function fromNonExistingClass(string \$className) : self
    {
        if (interface_exists(\$className)) {
            return new self(sprintf('The provided type \"%s\" is an interface, and can not be instantiated', \$className));
        }

        if (PHP_VERSION_ID >= 50400 && trait_exists(\$className)) {
            return new self(sprintf('The provided type \"%s\" is a trait, and can not be instantiated', \$className));
        }

        return new self(sprintf('The provided class \"%s\" does not exist', \$className));
    }

    public static function fromAbstractClass(ReflectionClass \$reflectionClass) : self
    {
        return new self(sprintf(
            'The provided class \"%s\" is abstract, and can not be instantiated',
            \$reflectionClass->getName()
        ));
    }
}
", "vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php");
    }
}
