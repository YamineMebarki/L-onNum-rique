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

/* vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php */
class __TwigTemplate_26555cd46dc88440b542817355820665670b5a46a3eefa636519dd8285846a37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionException;
use ReflectionMethod;

class StaticReflectionMethod extends ReflectionMethod
{
    /**
     * The PSR-0 parser object.
     *
     * @var StaticReflectionParser
     */
    protected \$staticReflectionParser;

    /**
     * The name of the method.
     *
     * @var string
     */
    protected \$methodName;

    /**
     * @param string \$methodName
     */
    public function __construct(StaticReflectionParser \$staticReflectionParser, \$methodName)
    {
        \$this->staticReflectionParser = \$staticReflectionParser;
        \$this->methodName             = \$methodName;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return \$this->methodName;
    }

    /**
     * @return StaticReflectionParser
     */
    protected function getStaticReflectionParser()
    {
        return \$this->staticReflectionParser->getStaticReflectionParserForDeclaringClass('method', \$this->methodName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaringClass()
    {
        return \$this->getStaticReflectionParser()->getReflectionClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getNamespaceName()
    {
        return \$this->getStaticReflectionParser()->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocComment()
    {
        return \$this->getStaticReflectionParser()->getDocComment('method', \$this->methodName);
    }

    /**
     * @return string[]
     */
    public function getUseStatements()
    {
        return \$this->getStaticReflectionParser()->getUseStatements();
    }

    /**
     * {@inheritDoc}
     */
    public static function export(\$class, \$name, \$return = false)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getClosure(\$object)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiers()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getPrototype()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function invoke(\$object, \$parameter = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function invokeArgs(\$object, array \$args)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isAbstract()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isConstructor()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDestructor()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isFinal()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivate()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isProtected()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPublic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isStatic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessible(\$accessible)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getClosureThis()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getEndLine()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensionName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfRequiredParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getStartLine()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getStaticVariables()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function inNamespace()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isClosure()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDeprecated()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isInternal()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isUserDefined()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function returnsReference()
    {
        throw new ReflectionException('Method not implemented');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionException;
use ReflectionMethod;

class StaticReflectionMethod extends ReflectionMethod
{
    /**
     * The PSR-0 parser object.
     *
     * @var StaticReflectionParser
     */
    protected \$staticReflectionParser;

    /**
     * The name of the method.
     *
     * @var string
     */
    protected \$methodName;

    /**
     * @param string \$methodName
     */
    public function __construct(StaticReflectionParser \$staticReflectionParser, \$methodName)
    {
        \$this->staticReflectionParser = \$staticReflectionParser;
        \$this->methodName             = \$methodName;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return \$this->methodName;
    }

    /**
     * @return StaticReflectionParser
     */
    protected function getStaticReflectionParser()
    {
        return \$this->staticReflectionParser->getStaticReflectionParserForDeclaringClass('method', \$this->methodName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaringClass()
    {
        return \$this->getStaticReflectionParser()->getReflectionClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getNamespaceName()
    {
        return \$this->getStaticReflectionParser()->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocComment()
    {
        return \$this->getStaticReflectionParser()->getDocComment('method', \$this->methodName);
    }

    /**
     * @return string[]
     */
    public function getUseStatements()
    {
        return \$this->getStaticReflectionParser()->getUseStatements();
    }

    /**
     * {@inheritDoc}
     */
    public static function export(\$class, \$name, \$return = false)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getClosure(\$object)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiers()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getPrototype()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function invoke(\$object, \$parameter = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function invokeArgs(\$object, array \$args)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isAbstract()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isConstructor()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDestructor()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isFinal()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivate()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isProtected()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPublic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isStatic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessible(\$accessible)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getClosureThis()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getEndLine()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensionName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfRequiredParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getStartLine()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getStaticVariables()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function inNamespace()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isClosure()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDeprecated()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isInternal()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isUserDefined()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function returnsReference()
    {
        throw new ReflectionException('Method not implemented');
    }
}
", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php");
    }
}
