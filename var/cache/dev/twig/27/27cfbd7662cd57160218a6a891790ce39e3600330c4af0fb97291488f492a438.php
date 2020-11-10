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

/* vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php */
class __TwigTemplate_7c6c8b6c8199d23c52cb356f254acd43fe614cf374119e73b477d5685a34869a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function file_exists;
use function md5;
use function realpath;
use function spl_object_hash;
use function sprintf;

class CachingFileScanner extends FileScanner
{
    /**
     * @var array
     */
    protected static \$cache = [];

    /**
     * @var null|FileScanner
     */
    protected \$fileScanner;

    /**
     * @param  string \$file
     * @param  AnnotationManager \$annotationManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$file, AnnotationManager \$annotationManager = null)
    {
        if (! file_exists(\$file)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'File \"%s\" not found',
                \$file
            ));
        }

        \$file = realpath(\$file);

        \$cacheId = md5(\$file) . '/' . (isset(\$annotationManager)
            ? spl_object_hash(\$annotationManager)
            : 'no-annotation');

        if (isset(static::\$cache[\$cacheId])) {
            \$this->fileScanner = static::\$cache[\$cacheId];
        } else {
            \$this->fileScanner       = new FileScanner(\$file, \$annotationManager);
            static::\$cache[\$cacheId] = \$this->fileScanner;
        }
    }

    /**
     * @return void
     */
    public static function clearCache()
    {
        static::\$cache = [];
    }

    /**
     * @return AnnotationManager
     */
    public function getAnnotationManager()
    {
        return \$this->fileScanner->getAnnotationManager();
    }

    /**
     * @return array|null|string
     */
    public function getFile()
    {
        return \$this->fileScanner->getFile();
    }

    /**
     * @return null|string
     */
    public function getDocComment()
    {
        return \$this->fileScanner->getDocComment();
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        return \$this->fileScanner->getNamespaces();
    }

    /**
     * @param  null|string \$namespace
     * @return array|null
     */
    public function getUses(\$namespace = null)
    {
        return \$this->fileScanner->getUses(\$namespace);
    }

    /**
     * @return array
     */
    public function getIncludes()
    {
        return \$this->fileScanner->getIncludes();
    }

    /**
     * @return array
     */
    public function getClassNames()
    {
        return \$this->fileScanner->getClassNames();
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return \$this->fileScanner->getClasses();
    }

    /**
     * @param  int|string \$className
     * @return ClassScanner
     */
    public function getClass(\$className)
    {
        return \$this->fileScanner->getClass(\$className);
    }

    /**
     * @param  string \$className
     * @return bool|null|NameInformation
     */
    public function getClassNameInformation(\$className)
    {
        return \$this->fileScanner->getClassNameInformation(\$className);
    }

    /**
     * @return array
     */
    public function getFunctionNames()
    {
        return \$this->fileScanner->getFunctionNames();
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return \$this->fileScanner->getFunctions();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php";
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

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function file_exists;
use function md5;
use function realpath;
use function spl_object_hash;
use function sprintf;

class CachingFileScanner extends FileScanner
{
    /**
     * @var array
     */
    protected static \$cache = [];

    /**
     * @var null|FileScanner
     */
    protected \$fileScanner;

    /**
     * @param  string \$file
     * @param  AnnotationManager \$annotationManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$file, AnnotationManager \$annotationManager = null)
    {
        if (! file_exists(\$file)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'File \"%s\" not found',
                \$file
            ));
        }

        \$file = realpath(\$file);

        \$cacheId = md5(\$file) . '/' . (isset(\$annotationManager)
            ? spl_object_hash(\$annotationManager)
            : 'no-annotation');

        if (isset(static::\$cache[\$cacheId])) {
            \$this->fileScanner = static::\$cache[\$cacheId];
        } else {
            \$this->fileScanner       = new FileScanner(\$file, \$annotationManager);
            static::\$cache[\$cacheId] = \$this->fileScanner;
        }
    }

    /**
     * @return void
     */
    public static function clearCache()
    {
        static::\$cache = [];
    }

    /**
     * @return AnnotationManager
     */
    public function getAnnotationManager()
    {
        return \$this->fileScanner->getAnnotationManager();
    }

    /**
     * @return array|null|string
     */
    public function getFile()
    {
        return \$this->fileScanner->getFile();
    }

    /**
     * @return null|string
     */
    public function getDocComment()
    {
        return \$this->fileScanner->getDocComment();
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        return \$this->fileScanner->getNamespaces();
    }

    /**
     * @param  null|string \$namespace
     * @return array|null
     */
    public function getUses(\$namespace = null)
    {
        return \$this->fileScanner->getUses(\$namespace);
    }

    /**
     * @return array
     */
    public function getIncludes()
    {
        return \$this->fileScanner->getIncludes();
    }

    /**
     * @return array
     */
    public function getClassNames()
    {
        return \$this->fileScanner->getClassNames();
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return \$this->fileScanner->getClasses();
    }

    /**
     * @param  int|string \$className
     * @return ClassScanner
     */
    public function getClass(\$className)
    {
        return \$this->fileScanner->getClass(\$className);
    }

    /**
     * @param  string \$className
     * @return bool|null|NameInformation
     */
    public function getClassNameInformation(\$className)
    {
        return \$this->fileScanner->getClassNameInformation(\$className);
    }

    /**
     * @return array
     */
    public function getFunctionNames()
    {
        return \$this->fileScanner->getFunctionNames();
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return \$this->fileScanner->getFunctions();
    }
}
", "vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/CachingFileScanner.php");
    }
}
