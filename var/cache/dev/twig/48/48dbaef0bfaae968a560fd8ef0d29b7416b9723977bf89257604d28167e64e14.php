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

/* vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php */
class __TwigTemplate_f189d63acbeaa1f9236912545df0877a784d6cfe0fe4c0721b800f11b95e54b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Zend\\Code\\Reflection\\ClassReflection;

use function sprintf;
use function str_replace;
use function strtolower;

class InterfaceGenerator extends ClassGenerator
{
    const OBJECT_TYPE = 'interface';
    const IMPLEMENTS_KEYWORD = 'extends';

    /**
     * Build a Code Generation Php Object from a Class Reflection
     *
     * @param  ClassReflection \$classReflection
     * @return InterfaceGenerator
     */
    public static function fromReflection(ClassReflection \$classReflection)
    {
        if (! \$classReflection->isInterface()) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'Class %s is not a interface',
                \$classReflection->getName()
            ));
        }

        // class generator
        \$cg      = new static(\$classReflection->getName());
        \$methods = [];

        \$cg->setSourceContent(\$cg->getSourceContent());
        \$cg->setSourceDirty(false);

        if (\$classReflection->getDocComment() != '') {
            \$cg->setDocBlock(DocBlockGenerator::fromReflection(\$classReflection->getDocBlock()));
        }

        // set the namespace
        if (\$classReflection->inNamespace()) {
            \$cg->setNamespaceName(\$classReflection->getNamespaceName());
        }

        foreach (\$classReflection->getMethods() as \$reflectionMethod) {
            \$className = \$cg->getNamespaceName()
                ? \$cg->getNamespaceName() . '\\\\' . \$cg->getName()
                : \$cg->getName();

            if (\$reflectionMethod->getDeclaringClass()->getName() == \$className) {
                \$methods[] = MethodGenerator::fromReflection(\$reflectionMethod);
            }
        }

        foreach (\$classReflection->getConstants() as \$name => \$value) {
            \$cg->addConstant(\$name, \$value);
        }

        \$cg->addMethods(\$methods);

        return \$cg;
    }

    /**
     * Generate from array
     *
     * @configkey name           string        [required] Class Name
     * @configkey filegenerator  FileGenerator File generator that holds this class
     * @configkey namespacename  string        The namespace for this class
     * @configkey docblock       string        The docblock information
     * @configkey constants
     * @configkey methods
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return InterfaceGenerator
     */
    public static function fromArray(array \$array)
    {
        if (! isset(\$array['name'])) {
            throw new Exception\\InvalidArgumentException(
                'Class generator requires that a name is provided for this object'
            );
        }

        \$cg = new static(\$array['name']);
        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'containingfile':
                    \$cg->setContainingFileGenerator(\$value);
                    break;
                case 'namespacename':
                    \$cg->setNamespaceName(\$value);
                    break;
                case 'docblock':
                    \$docBlock = \$value instanceof DocBlockGenerator ? \$value : DocBlockGenerator::fromArray(\$value);
                    \$cg->setDocBlock(\$docBlock);
                    break;
                case 'methods':
                    \$cg->addMethods(\$value);
                    break;
                case 'constants':
                    \$cg->addConstants(\$value);
                    break;
            }
        }

        return \$cg;
    }

    /**
     * {@inheritDoc}
     */
    public function addPropertyFromGenerator(PropertyGenerator \$property)
    {
        return \$this;
    }

    /**
     * {@inheritDoc}
     */
    public function addMethodFromGenerator(MethodGenerator \$method)
    {
        \$method->setInterface(true);

        return parent::addMethodFromGenerator(\$method);
    }

    /**
     * {@inheritDoc}
     */
    public function setExtendedClass(\$extendedClass)
    {
        return \$this;
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract(\$isAbstract)
    {
        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php";
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

namespace Zend\\Code\\Generator;

use Zend\\Code\\Reflection\\ClassReflection;

use function sprintf;
use function str_replace;
use function strtolower;

class InterfaceGenerator extends ClassGenerator
{
    const OBJECT_TYPE = 'interface';
    const IMPLEMENTS_KEYWORD = 'extends';

    /**
     * Build a Code Generation Php Object from a Class Reflection
     *
     * @param  ClassReflection \$classReflection
     * @return InterfaceGenerator
     */
    public static function fromReflection(ClassReflection \$classReflection)
    {
        if (! \$classReflection->isInterface()) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'Class %s is not a interface',
                \$classReflection->getName()
            ));
        }

        // class generator
        \$cg      = new static(\$classReflection->getName());
        \$methods = [];

        \$cg->setSourceContent(\$cg->getSourceContent());
        \$cg->setSourceDirty(false);

        if (\$classReflection->getDocComment() != '') {
            \$cg->setDocBlock(DocBlockGenerator::fromReflection(\$classReflection->getDocBlock()));
        }

        // set the namespace
        if (\$classReflection->inNamespace()) {
            \$cg->setNamespaceName(\$classReflection->getNamespaceName());
        }

        foreach (\$classReflection->getMethods() as \$reflectionMethod) {
            \$className = \$cg->getNamespaceName()
                ? \$cg->getNamespaceName() . '\\\\' . \$cg->getName()
                : \$cg->getName();

            if (\$reflectionMethod->getDeclaringClass()->getName() == \$className) {
                \$methods[] = MethodGenerator::fromReflection(\$reflectionMethod);
            }
        }

        foreach (\$classReflection->getConstants() as \$name => \$value) {
            \$cg->addConstant(\$name, \$value);
        }

        \$cg->addMethods(\$methods);

        return \$cg;
    }

    /**
     * Generate from array
     *
     * @configkey name           string        [required] Class Name
     * @configkey filegenerator  FileGenerator File generator that holds this class
     * @configkey namespacename  string        The namespace for this class
     * @configkey docblock       string        The docblock information
     * @configkey constants
     * @configkey methods
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return InterfaceGenerator
     */
    public static function fromArray(array \$array)
    {
        if (! isset(\$array['name'])) {
            throw new Exception\\InvalidArgumentException(
                'Class generator requires that a name is provided for this object'
            );
        }

        \$cg = new static(\$array['name']);
        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'containingfile':
                    \$cg->setContainingFileGenerator(\$value);
                    break;
                case 'namespacename':
                    \$cg->setNamespaceName(\$value);
                    break;
                case 'docblock':
                    \$docBlock = \$value instanceof DocBlockGenerator ? \$value : DocBlockGenerator::fromArray(\$value);
                    \$cg->setDocBlock(\$docBlock);
                    break;
                case 'methods':
                    \$cg->addMethods(\$value);
                    break;
                case 'constants':
                    \$cg->addConstants(\$value);
                    break;
            }
        }

        return \$cg;
    }

    /**
     * {@inheritDoc}
     */
    public function addPropertyFromGenerator(PropertyGenerator \$property)
    {
        return \$this;
    }

    /**
     * {@inheritDoc}
     */
    public function addMethodFromGenerator(MethodGenerator \$method)
    {
        \$method->setInterface(true);

        return parent::addMethodFromGenerator(\$method);
    }

    /**
     * {@inheritDoc}
     */
    public function setExtendedClass(\$extendedClass)
    {
        return \$this;
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract(\$isAbstract)
    {
        return \$this;
    }
}
", "vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/InterfaceGenerator.php");
    }
}
