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

/* vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php */
class __TwigTemplate_387921347debbe13e41e3b09ebe89d75e8ad7b8e899ff4d62c8d5c0f070357f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php"));

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

use ReflectionProperty as PhpReflectionProperty;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Scanner\\AnnotationScanner;
use Zend\\Code\\Scanner\\CachingFileScanner;

/**
 * @todo       implement line numbers
 */
class PropertyReflection extends PhpReflectionProperty implements ReflectionInterface
{
    /**
     * @var AnnotationScanner
     */
    protected \$annotations;

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
     * Get DocBlock comment
     *
     * @return string|false False if no DocBlock defined
     */
    public function getDocComment()
    {
        return parent::getDocComment();
    }

    /**
     * @return false|DocBlockReflection
     */
    public function getDocBlock()
    {
        if (! (\$docComment = \$this->getDocComment())) {
            return false;
        }

        \$docBlockReflection = new DocBlockReflection(\$docComment);

        return \$docBlockReflection;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationScanner|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        if (null !== \$this->annotations) {
            return \$this->annotations;
        }

        if ((\$docComment = \$this->getDocComment()) == '') {
            return false;
        }

        \$class              = \$this->getDeclaringClass();
        \$cachingFileScanner = \$this->createFileScanner(\$class->getFileName());
        \$nameInformation    = \$cachingFileScanner->getClassNameInformation(\$class->getName());

        if (! \$nameInformation) {
            return false;
        }

        \$this->annotations  = new AnnotationScanner(\$annotationManager, \$docComment, \$nameInformation);

        return \$this->annotations;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return \$this->__toString();
    }

    /**
     * Creates a new FileScanner instance.
     *
     * By having this as a separate method it allows the method to be overridden
     * if a different FileScanner is needed.
     *
     * @param  string \$filename
     *
     * @return CachingFileScanner
     */
    protected function createFileScanner(\$filename)
    {
        return new CachingFileScanner(\$filename);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php";
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

use ReflectionProperty as PhpReflectionProperty;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Scanner\\AnnotationScanner;
use Zend\\Code\\Scanner\\CachingFileScanner;

/**
 * @todo       implement line numbers
 */
class PropertyReflection extends PhpReflectionProperty implements ReflectionInterface
{
    /**
     * @var AnnotationScanner
     */
    protected \$annotations;

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
     * Get DocBlock comment
     *
     * @return string|false False if no DocBlock defined
     */
    public function getDocComment()
    {
        return parent::getDocComment();
    }

    /**
     * @return false|DocBlockReflection
     */
    public function getDocBlock()
    {
        if (! (\$docComment = \$this->getDocComment())) {
            return false;
        }

        \$docBlockReflection = new DocBlockReflection(\$docComment);

        return \$docBlockReflection;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationScanner|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        if (null !== \$this->annotations) {
            return \$this->annotations;
        }

        if ((\$docComment = \$this->getDocComment()) == '') {
            return false;
        }

        \$class              = \$this->getDeclaringClass();
        \$cachingFileScanner = \$this->createFileScanner(\$class->getFileName());
        \$nameInformation    = \$cachingFileScanner->getClassNameInformation(\$class->getName());

        if (! \$nameInformation) {
            return false;
        }

        \$this->annotations  = new AnnotationScanner(\$annotationManager, \$docComment, \$nameInformation);

        return \$this->annotations;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return \$this->__toString();
    }

    /**
     * Creates a new FileScanner instance.
     *
     * By having this as a separate method it allows the method to be overridden
     * if a different FileScanner is needed.
     *
     * @param  string \$filename
     *
     * @return CachingFileScanner
     */
    protected function createFileScanner(\$filename)
    {
        return new CachingFileScanner(\$filename);
    }
}
", "vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/PropertyReflection.php");
    }
}
