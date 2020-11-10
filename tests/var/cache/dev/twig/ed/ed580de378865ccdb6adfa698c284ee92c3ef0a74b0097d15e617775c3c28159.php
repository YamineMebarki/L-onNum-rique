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

/* vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php */
class __TwigTemplate_e552ef600e8d1e6a47bdb86e03449b28d9e7d82e128eef6fe5c5587aa2b28a31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock;

use Zend\\Code\\Generator\\DocBlock\\Tag\\TagInterface;
use Zend\\Code\\Generic\\Prototype\\PrototypeClassFactory;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

use function method_exists;
use function substr;
use function strpos;
use function ucfirst;

/**
 * This class is used in DocBlockGenerator and creates the needed
 * Tag classes depending on the tag. So for example an @author tag
 * will trigger the creation of an AuthorTag class.
 *
 * If none of the classes is applicable, the GenericTag class will be
 * created
 */
class TagManager extends PrototypeClassFactory
{
    /**
     * @return void
     */
    public function initializeDefaultTags()
    {
        \$this->addPrototype(new Tag\\ParamTag());
        \$this->addPrototype(new Tag\\ReturnTag());
        \$this->addPrototype(new Tag\\MethodTag());
        \$this->addPrototype(new Tag\\PropertyTag());
        \$this->addPrototype(new Tag\\AuthorTag());
        \$this->addPrototype(new Tag\\LicenseTag());
        \$this->addPrototype(new Tag\\ThrowsTag());
        \$this->addPrototype(new Tag\\VarTag());
        \$this->setGenericPrototype(new Tag\\GenericTag());
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return TagInterface
     */
    public function createTagFromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagName = \$reflectionTag->getName();

        /* @var TagInterface \$newTag */
        \$newTag = \$this->getClonedPrototype(\$tagName);

        // transport any properties via accessors and mutators from reflection to codegen object
        \$reflectionClass = new \\ReflectionClass(\$reflectionTag);
        foreach (\$reflectionClass->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$method) {
            if (0 === strpos(\$method->getName(), 'get')) {
                \$propertyName = substr(\$method->getName(), 3);
                if (method_exists(\$newTag, 'set' . \$propertyName)) {
                    \$newTag->{'set' . \$propertyName}(\$reflectionTag->{'get' . \$propertyName}());
                }
            } elseif (0 === strpos(\$method->getName(), 'is')) {
                \$propertyName = ucfirst(\$method->getName());
                if (method_exists(\$newTag, 'set' . \$propertyName)) {
                    \$newTag->{'set' . \$propertyName}(\$reflectionTag->{\$method->getName()}());
                }
            }
        }
        return \$newTag;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php";
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

namespace Zend\\Code\\Generator\\DocBlock;

use Zend\\Code\\Generator\\DocBlock\\Tag\\TagInterface;
use Zend\\Code\\Generic\\Prototype\\PrototypeClassFactory;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

use function method_exists;
use function substr;
use function strpos;
use function ucfirst;

/**
 * This class is used in DocBlockGenerator and creates the needed
 * Tag classes depending on the tag. So for example an @author tag
 * will trigger the creation of an AuthorTag class.
 *
 * If none of the classes is applicable, the GenericTag class will be
 * created
 */
class TagManager extends PrototypeClassFactory
{
    /**
     * @return void
     */
    public function initializeDefaultTags()
    {
        \$this->addPrototype(new Tag\\ParamTag());
        \$this->addPrototype(new Tag\\ReturnTag());
        \$this->addPrototype(new Tag\\MethodTag());
        \$this->addPrototype(new Tag\\PropertyTag());
        \$this->addPrototype(new Tag\\AuthorTag());
        \$this->addPrototype(new Tag\\LicenseTag());
        \$this->addPrototype(new Tag\\ThrowsTag());
        \$this->addPrototype(new Tag\\VarTag());
        \$this->setGenericPrototype(new Tag\\GenericTag());
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return TagInterface
     */
    public function createTagFromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagName = \$reflectionTag->getName();

        /* @var TagInterface \$newTag */
        \$newTag = \$this->getClonedPrototype(\$tagName);

        // transport any properties via accessors and mutators from reflection to codegen object
        \$reflectionClass = new \\ReflectionClass(\$reflectionTag);
        foreach (\$reflectionClass->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$method) {
            if (0 === strpos(\$method->getName(), 'get')) {
                \$propertyName = substr(\$method->getName(), 3);
                if (method_exists(\$newTag, 'set' . \$propertyName)) {
                    \$newTag->{'set' . \$propertyName}(\$reflectionTag->{'get' . \$propertyName}());
                }
            } elseif (0 === strpos(\$method->getName(), 'is')) {
                \$propertyName = ucfirst(\$method->getName());
                if (method_exists(\$newTag, 'set' . \$propertyName)) {
                    \$newTag->{'set' . \$propertyName}(\$reflectionTag->{\$method->getName()}());
                }
            }
        }
        return \$newTag;
    }
}
", "vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/DocBlock/TagManager.php");
    }
}
