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

/* vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php */
class __TwigTemplate_339fb850a4fef7465020a293e92823ffca4650e03d6ca56fb68f562e55a69a08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection;

use ReflectionParameter;

use function method_exists;

class ParameterReflection extends ReflectionParameter implements ReflectionInterface
{
    /**
     * @var bool
     */
    protected \$isFromMethod = false;

    /**
     * Get declaring class reflection object
     *
     * @return ClassReflection
     */
    public function getDeclaringClass()
    {
        \$phpReflection  = parent::getDeclaringClass();
        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get class reflection object
     *
     * @return null|ClassReflection
     */
    public function getClass()
    {
        \$phpReflection = parent::getClass();
        if (\$phpReflection === null) {
            return null;
        }

        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get declaring function reflection object
     *
     * @return FunctionReflection|MethodReflection
     */
    public function getDeclaringFunction()
    {
        \$phpReflection = parent::getDeclaringFunction();
        if (\$phpReflection instanceof \\ReflectionMethod) {
            \$zendReflection = new MethodReflection(\$this->getDeclaringClass()->getName(), \$phpReflection->getName());
        } else {
            \$zendReflection = new FunctionReflection(\$phpReflection->getName());
        }
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get parameter type
     *
     * @return string|null
     */
    public function detectType()
    {
        if (method_exists(\$this, 'getType')
            && (\$type = \$this->getType())
            && \$type->isBuiltin()
        ) {
            return (string) \$type;
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isArray()) {
            return 'array';
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isCallable()) {
            return 'callable';
        }

        if ((\$class = \$this->getClass()) instanceof \\ReflectionClass) {
            return \$class->getName();
        }

        \$docBlock = \$this->getDeclaringFunction()->getDocBlock();

        if (! \$docBlock instanceof DocBlockReflection) {
            return null;
        }

        \$params = \$docBlock->getTags('param');

        if (isset(\$params[\$this->getPosition()])) {
            return \$params[\$this->getPosition()]->getType();
        }

        return null;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return parent::__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection;

use ReflectionParameter;

use function method_exists;

class ParameterReflection extends ReflectionParameter implements ReflectionInterface
{
    /**
     * @var bool
     */
    protected \$isFromMethod = false;

    /**
     * Get declaring class reflection object
     *
     * @return ClassReflection
     */
    public function getDeclaringClass()
    {
        \$phpReflection  = parent::getDeclaringClass();
        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get class reflection object
     *
     * @return null|ClassReflection
     */
    public function getClass()
    {
        \$phpReflection = parent::getClass();
        if (\$phpReflection === null) {
            return null;
        }

        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get declaring function reflection object
     *
     * @return FunctionReflection|MethodReflection
     */
    public function getDeclaringFunction()
    {
        \$phpReflection = parent::getDeclaringFunction();
        if (\$phpReflection instanceof \\ReflectionMethod) {
            \$zendReflection = new MethodReflection(\$this->getDeclaringClass()->getName(), \$phpReflection->getName());
        } else {
            \$zendReflection = new FunctionReflection(\$phpReflection->getName());
        }
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get parameter type
     *
     * @return string|null
     */
    public function detectType()
    {
        if (method_exists(\$this, 'getType')
            && (\$type = \$this->getType())
            && \$type->isBuiltin()
        ) {
            return (string) \$type;
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isArray()) {
            return 'array';
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isCallable()) {
            return 'callable';
        }

        if ((\$class = \$this->getClass()) instanceof \\ReflectionClass) {
            return \$class->getName();
        }

        \$docBlock = \$this->getDeclaringFunction()->getDocBlock();

        if (! \$docBlock instanceof DocBlockReflection) {
            return null;
        }

        \$params = \$docBlock->getTags('param');

        if (isset(\$params[\$this->getPosition()])) {
            return \$params[\$this->getPosition()]->getType();
        }

        return null;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return parent::__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
", "vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php");
    }
}
