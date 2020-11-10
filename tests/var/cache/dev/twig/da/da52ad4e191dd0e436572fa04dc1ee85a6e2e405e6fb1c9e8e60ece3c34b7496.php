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

/* vendor/zendframework/zend-code/src/Reflection/ClassReflection.php */
class __TwigTemplate_2c62148661b00d7ce101557eb5097b6a758eb77075653e7548f80d5612562a73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/ClassReflection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/ClassReflection.php"));

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

use ReflectionClass;
use Zend\\Code\\Annotation\\AnnotationCollection;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Scanner\\AnnotationScanner;
use Zend\\Code\\Scanner\\FileScanner;

use function array_shift;
use function array_slice;
use function array_unshift;
use function file;
use function file_exists;
use function implode;
use function strstr;

class ClassReflection extends ReflectionClass implements ReflectionInterface
{
    /**
     * @var AnnotationScanner
     */
    protected \$annotations;

    /**
     * @var DocBlockReflection
     */
    protected \$docBlock;

    /**
     * Return the reflection file of the declaring file.
     *
     * @return FileReflection
     */
    public function getDeclaringFile()
    {
        \$instance = new FileReflection(\$this->getFileName());

        return \$instance;
    }

    /**
     * Return the classes DocBlock reflection object
     *
     * @return DocBlockReflection|false
     * @throws Exception\\ExceptionInterface for missing DocBock or invalid reflection class
     */
    public function getDocBlock()
    {
        if (isset(\$this->docBlock)) {
            return \$this->docBlock;
        }

        if ('' == \$this->getDocComment()) {
            return false;
        }

        \$this->docBlock = new DocBlockReflection(\$this);

        return \$this->docBlock;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationCollection|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        \$docComment = \$this->getDocComment();

        if (\$docComment == '') {
            return false;
        }

        if (\$this->annotations) {
            return \$this->annotations;
        }

        \$fileScanner       = \$this->createFileScanner(\$this->getFileName());
        \$nameInformation   = \$fileScanner->getClassNameInformation(\$this->getName());

        if (! \$nameInformation) {
            return false;
        }

        \$this->annotations = new AnnotationScanner(\$annotationManager, \$docComment, \$nameInformation);

        return \$this->annotations;
    }

    /**
     * Return the start line of the class
     *
     * @param  bool \$includeDocComment
     * @return int
     */
    public function getStartLine(\$includeDocComment = false)
    {
        if (\$includeDocComment && \$this->getDocComment() != '') {
            return \$this->getDocBlock()->getStartLine();
        }

        return parent::getStartLine();
    }

    /**
     * Return the contents of the class
     *
     * @param  bool \$includeDocBlock
     * @return string
     */
    public function getContents(\$includeDocBlock = true)
    {
        \$fileName = \$this->getFileName();

        if (false === \$fileName || ! file_exists(\$fileName)) {
            return '';
        }

        \$filelines = file(\$fileName);
        \$startnum  = \$this->getStartLine(\$includeDocBlock);
        \$endnum    = \$this->getEndLine() - \$this->getStartLine();

        // Ensure we get between the open and close braces
        \$lines = array_slice(\$filelines, \$startnum, \$endnum);
        array_unshift(\$lines, \$filelines[\$startnum - 1]);

        return strstr(implode('', \$lines), '{');
    }

    /**
     * Get all reflection objects of implemented interfaces
     *
     * @return ClassReflection[]
     */
    public function getInterfaces()
    {
        \$phpReflections  = parent::getInterfaces();
        \$zendReflections = [];
        while (\$phpReflections && (\$phpReflection = array_shift(\$phpReflections))) {
            \$instance          = new ClassReflection(\$phpReflection->getName());
            \$zendReflections[] = \$instance;
            unset(\$phpReflection);
        }
        unset(\$phpReflections);

        return \$zendReflections;
    }

    /**
     * Return method reflection by name
     *
     * @param  string \$name
     * @return MethodReflection
     */
    public function getMethod(\$name)
    {
        \$method = new MethodReflection(\$this->getName(), parent::getMethod(\$name)->getName());

        return \$method;
    }

    /**
     * Get reflection objects of all methods
     *
     * @param  int \$filter
     * @return MethodReflection[]
     */
    public function getMethods(\$filter = -1)
    {
        \$methods = [];
        foreach (parent::getMethods(\$filter) as \$method) {
            \$instance  = new MethodReflection(\$this->getName(), \$method->getName());
            \$methods[] = \$instance;
        }

        return \$methods;
    }

    /**
     * Returns an array of reflection classes of traits used by this class.
     *
     * @return null|array
     */
    public function getTraits()
    {
        \$vals = [];
        \$traits = parent::getTraits();
        if (\$traits === null) {
            return;
        }

        foreach (\$traits as \$trait) {
            \$vals[] = new ClassReflection(\$trait->getName());
        }

        return \$vals;
    }

    /**
     * Get parent reflection class of reflected class
     *
     * @return ClassReflection|bool
     */
    public function getParentClass()
    {
        \$phpReflection = parent::getParentClass();
        if (\$phpReflection) {
            \$zendReflection = new ClassReflection(\$phpReflection->getName());
            unset(\$phpReflection);

            return \$zendReflection;
        }

        return false;
    }

    /**
     * Return reflection property of this class by name
     *
     * @param  string \$name
     * @return PropertyReflection
     */
    public function getProperty(\$name)
    {
        \$phpReflection  = parent::getProperty(\$name);
        \$zendReflection = new PropertyReflection(\$this->getName(), \$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Return reflection properties of this class
     *
     * @param  int \$filter
     * @return PropertyReflection[]
     */
    public function getProperties(\$filter = -1)
    {
        \$phpReflections  = parent::getProperties(\$filter);
        \$zendReflections = [];
        while (\$phpReflections && (\$phpReflection = array_shift(\$phpReflections))) {
            \$instance          = new PropertyReflection(\$this->getName(), \$phpReflection->getName());
            \$zendReflections[] = \$instance;
            unset(\$phpReflection);
        }
        unset(\$phpReflections);

        return \$zendReflections;
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

    /**
     * Creates a new FileScanner instance.
     *
     * By having this as a separate method it allows the method to be overridden
     * if a different FileScanner is needed.
     *
     * @param  string \$filename
     *
     * @return FileScanner
     */
    protected function createFileScanner(\$filename)
    {
        return new FileScanner(\$filename);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/ClassReflection.php";
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

use ReflectionClass;
use Zend\\Code\\Annotation\\AnnotationCollection;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Scanner\\AnnotationScanner;
use Zend\\Code\\Scanner\\FileScanner;

use function array_shift;
use function array_slice;
use function array_unshift;
use function file;
use function file_exists;
use function implode;
use function strstr;

class ClassReflection extends ReflectionClass implements ReflectionInterface
{
    /**
     * @var AnnotationScanner
     */
    protected \$annotations;

    /**
     * @var DocBlockReflection
     */
    protected \$docBlock;

    /**
     * Return the reflection file of the declaring file.
     *
     * @return FileReflection
     */
    public function getDeclaringFile()
    {
        \$instance = new FileReflection(\$this->getFileName());

        return \$instance;
    }

    /**
     * Return the classes DocBlock reflection object
     *
     * @return DocBlockReflection|false
     * @throws Exception\\ExceptionInterface for missing DocBock or invalid reflection class
     */
    public function getDocBlock()
    {
        if (isset(\$this->docBlock)) {
            return \$this->docBlock;
        }

        if ('' == \$this->getDocComment()) {
            return false;
        }

        \$this->docBlock = new DocBlockReflection(\$this);

        return \$this->docBlock;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationCollection|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        \$docComment = \$this->getDocComment();

        if (\$docComment == '') {
            return false;
        }

        if (\$this->annotations) {
            return \$this->annotations;
        }

        \$fileScanner       = \$this->createFileScanner(\$this->getFileName());
        \$nameInformation   = \$fileScanner->getClassNameInformation(\$this->getName());

        if (! \$nameInformation) {
            return false;
        }

        \$this->annotations = new AnnotationScanner(\$annotationManager, \$docComment, \$nameInformation);

        return \$this->annotations;
    }

    /**
     * Return the start line of the class
     *
     * @param  bool \$includeDocComment
     * @return int
     */
    public function getStartLine(\$includeDocComment = false)
    {
        if (\$includeDocComment && \$this->getDocComment() != '') {
            return \$this->getDocBlock()->getStartLine();
        }

        return parent::getStartLine();
    }

    /**
     * Return the contents of the class
     *
     * @param  bool \$includeDocBlock
     * @return string
     */
    public function getContents(\$includeDocBlock = true)
    {
        \$fileName = \$this->getFileName();

        if (false === \$fileName || ! file_exists(\$fileName)) {
            return '';
        }

        \$filelines = file(\$fileName);
        \$startnum  = \$this->getStartLine(\$includeDocBlock);
        \$endnum    = \$this->getEndLine() - \$this->getStartLine();

        // Ensure we get between the open and close braces
        \$lines = array_slice(\$filelines, \$startnum, \$endnum);
        array_unshift(\$lines, \$filelines[\$startnum - 1]);

        return strstr(implode('', \$lines), '{');
    }

    /**
     * Get all reflection objects of implemented interfaces
     *
     * @return ClassReflection[]
     */
    public function getInterfaces()
    {
        \$phpReflections  = parent::getInterfaces();
        \$zendReflections = [];
        while (\$phpReflections && (\$phpReflection = array_shift(\$phpReflections))) {
            \$instance          = new ClassReflection(\$phpReflection->getName());
            \$zendReflections[] = \$instance;
            unset(\$phpReflection);
        }
        unset(\$phpReflections);

        return \$zendReflections;
    }

    /**
     * Return method reflection by name
     *
     * @param  string \$name
     * @return MethodReflection
     */
    public function getMethod(\$name)
    {
        \$method = new MethodReflection(\$this->getName(), parent::getMethod(\$name)->getName());

        return \$method;
    }

    /**
     * Get reflection objects of all methods
     *
     * @param  int \$filter
     * @return MethodReflection[]
     */
    public function getMethods(\$filter = -1)
    {
        \$methods = [];
        foreach (parent::getMethods(\$filter) as \$method) {
            \$instance  = new MethodReflection(\$this->getName(), \$method->getName());
            \$methods[] = \$instance;
        }

        return \$methods;
    }

    /**
     * Returns an array of reflection classes of traits used by this class.
     *
     * @return null|array
     */
    public function getTraits()
    {
        \$vals = [];
        \$traits = parent::getTraits();
        if (\$traits === null) {
            return;
        }

        foreach (\$traits as \$trait) {
            \$vals[] = new ClassReflection(\$trait->getName());
        }

        return \$vals;
    }

    /**
     * Get parent reflection class of reflected class
     *
     * @return ClassReflection|bool
     */
    public function getParentClass()
    {
        \$phpReflection = parent::getParentClass();
        if (\$phpReflection) {
            \$zendReflection = new ClassReflection(\$phpReflection->getName());
            unset(\$phpReflection);

            return \$zendReflection;
        }

        return false;
    }

    /**
     * Return reflection property of this class by name
     *
     * @param  string \$name
     * @return PropertyReflection
     */
    public function getProperty(\$name)
    {
        \$phpReflection  = parent::getProperty(\$name);
        \$zendReflection = new PropertyReflection(\$this->getName(), \$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Return reflection properties of this class
     *
     * @param  int \$filter
     * @return PropertyReflection[]
     */
    public function getProperties(\$filter = -1)
    {
        \$phpReflections  = parent::getProperties(\$filter);
        \$zendReflections = [];
        while (\$phpReflections && (\$phpReflection = array_shift(\$phpReflections))) {
            \$instance          = new PropertyReflection(\$this->getName(), \$phpReflection->getName());
            \$zendReflections[] = \$instance;
            unset(\$phpReflection);
        }
        unset(\$phpReflections);

        return \$zendReflections;
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

    /**
     * Creates a new FileScanner instance.
     *
     * By having this as a separate method it allows the method to be overridden
     * if a different FileScanner is needed.
     *
     * @param  string \$filename
     *
     * @return FileScanner
     */
    protected function createFileScanner(\$filename)
    {
        return new FileScanner(\$filename);
    }
}
", "vendor/zendframework/zend-code/src/Reflection/ClassReflection.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/ClassReflection.php");
    }
}
