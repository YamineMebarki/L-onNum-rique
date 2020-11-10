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

/* vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php */
class __TwigTemplate_5c85488681eb6560fabb51bd9d913673c4130088cf0bd5fe2f772661ba9cfa3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php"));

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

use Reflector;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as DocBlockTagInterface;
use Zend\\Code\\Reflection\\DocBlock\\TagManager as DocBlockTagManager;
use Zend\\Code\\Scanner\\DocBlockScanner;

use function count;
use function get_class;
use function is_string;
use function ltrim;
use function method_exists;
use function preg_replace;
use function sprintf;
use function substr_count;

class DocBlockReflection implements ReflectionInterface
{
    /**
     * @var Reflector
     */
    protected \$reflector;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var DocBlockTagManager
     */
    protected \$tagManager;

    /**
     * @var int
     */
    protected \$startLine;

    /**
     * @var int
     */
    protected \$endLine;

    /**
     * @var string
     */
    protected \$cleanDocComment;

    /**
     * @var string
     */
    protected \$longDescription;

    /**
     * @var string
     */
    protected \$shortDescription;

    /**
     * @var array
     */
    protected \$tags = [];

    /**
     * @var bool
     */
    protected \$isReflected = false;

    /**
     * Export reflection
     *
     * Required by the Reflector interface.
     *
     * @todo   What should this do?
     * @return void
     */
    public static function export()
    {
    }

    /**
     * @param  Reflector|string \$commentOrReflector
     * @param  null|DocBlockTagManager \$tagManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$commentOrReflector, DocBlockTagManager \$tagManager = null)
    {
        if (! \$tagManager) {
            \$tagManager = new DocBlockTagManager();
            \$tagManager->initializeDefaultTags();
        }
        \$this->tagManager = \$tagManager;

        if (\$commentOrReflector instanceof Reflector) {
            \$this->reflector = \$commentOrReflector;
            if (! method_exists(\$commentOrReflector, 'getDocComment')) {
                throw new Exception\\InvalidArgumentException('Reflector must contain method \"getDocComment\"');
            }
            /* @var MethodReflection \$commentOrReflector */
            \$this->docComment = \$commentOrReflector->getDocComment();

            // determine line numbers
            \$lineCount       = substr_count(\$this->docComment, \"\\n\");
            \$this->startLine = \$this->reflector->getStartLine() - \$lineCount - 1;
            \$this->endLine   = \$this->reflector->getStartLine() - 1;
        } elseif (is_string(\$commentOrReflector)) {
            \$this->docComment = \$commentOrReflector;
        } else {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s must have a (string) DocComment or a Reflector in the constructor',
                get_class(\$this)
            ));
        }

        if (\$this->docComment == '') {
            throw new Exception\\InvalidArgumentException('DocComment cannot be empty');
        }

        \$this->reflect();
    }

    /**
     * Retrieve contents of DocBlock
     *
     * @return string
     */
    public function getContents()
    {
        \$this->reflect();

        return \$this->cleanDocComment;
    }

    /**
     * Get start line (position) of DocBlock
     *
     * @return int
     */
    public function getStartLine()
    {
        \$this->reflect();

        return \$this->startLine;
    }

    /**
     * Get last line (position) of DocBlock
     *
     * @return int
     */
    public function getEndLine()
    {
        \$this->reflect();

        return \$this->endLine;
    }

    /**
     * Get DocBlock short description
     *
     * @return string
     */
    public function getShortDescription()
    {
        \$this->reflect();

        return \$this->shortDescription;
    }

    /**
     * Get DocBlock long description
     *
     * @return string
     */
    public function getLongDescription()
    {
        \$this->reflect();

        return \$this->longDescription;
    }

    /**
     * Does the DocBlock contain the given annotation tag?
     *
     * @param  string \$name
     * @return bool
     */
    public function hasTag(\$name)
    {
        \$this->reflect();
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Retrieve the given DocBlock tag
     *
     * @param  string \$name
     * @return DocBlockTagInterface|false
     */
    public function getTag(\$name)
    {
        \$this->reflect();
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$name) {
                return \$tag;
            }
        }

        return false;
    }

    /**
     * Get all DocBlock annotation tags
     *
     * @param  string \$filter
     * @return DocBlockTagInterface[]
     */
    public function getTags(\$filter = null)
    {
        \$this->reflect();
        if (\$filter === null || ! is_string(\$filter)) {
            return \$this->tags;
        }

        \$returnTags = [];
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$filter) {
                \$returnTags[] = \$tag;
            }
        }

        return \$returnTags;
    }

    /**
     * Parse the DocBlock
     *
     * @return void
     */
    protected function reflect()
    {
        if (\$this->isReflected) {
            return;
        }

        \$docComment = preg_replace('#[ ]{0,1}\\*/\$#', '', \$this->docComment);

        // create a clean docComment
        \$this->cleanDocComment = preg_replace(\"#[ \\t]*(?:/\\*\\*|\\*/|\\*)[ ]{0,1}(.*)?#\", '\$1', \$docComment);

        // @todo should be changed to remove first and last empty line
        \$this->cleanDocComment = ltrim(\$this->cleanDocComment, \"\\r\\n\");

        \$scanner                = new DocBlockScanner(\$docComment);
        \$this->shortDescription = ltrim(\$scanner->getShortDescription());
        \$this->longDescription  = ltrim(\$scanner->getLongDescription());

        foreach (\$scanner->getTags() as \$tag) {
            \$this->tags[] = \$this->tagManager->createTag(ltrim(\$tag['name'], '@'), ltrim(\$tag['value']));
        }

        \$this->isReflected = true;
    }

    /**
     * @return string
     */
    public function toString()
    {
        \$str = 'DocBlock [ /* DocBlock */ ] {' . \"\\n\\n\";
        \$str .= '  - Tags [' . count(\$this->tags) . '] {' . \"\\n\";

        foreach (\$this->tags as \$tag) {
            \$str .= '    ' . \$tag;
        }

        \$str .= '  }' . \"\\n\";
        \$str .= '}' . \"\\n\";

        return \$str;
    }

    /**
     * Serialize to string
     *
     * Required by the Reflector interface
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->toString();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php";
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

use Reflector;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as DocBlockTagInterface;
use Zend\\Code\\Reflection\\DocBlock\\TagManager as DocBlockTagManager;
use Zend\\Code\\Scanner\\DocBlockScanner;

use function count;
use function get_class;
use function is_string;
use function ltrim;
use function method_exists;
use function preg_replace;
use function sprintf;
use function substr_count;

class DocBlockReflection implements ReflectionInterface
{
    /**
     * @var Reflector
     */
    protected \$reflector;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var DocBlockTagManager
     */
    protected \$tagManager;

    /**
     * @var int
     */
    protected \$startLine;

    /**
     * @var int
     */
    protected \$endLine;

    /**
     * @var string
     */
    protected \$cleanDocComment;

    /**
     * @var string
     */
    protected \$longDescription;

    /**
     * @var string
     */
    protected \$shortDescription;

    /**
     * @var array
     */
    protected \$tags = [];

    /**
     * @var bool
     */
    protected \$isReflected = false;

    /**
     * Export reflection
     *
     * Required by the Reflector interface.
     *
     * @todo   What should this do?
     * @return void
     */
    public static function export()
    {
    }

    /**
     * @param  Reflector|string \$commentOrReflector
     * @param  null|DocBlockTagManager \$tagManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$commentOrReflector, DocBlockTagManager \$tagManager = null)
    {
        if (! \$tagManager) {
            \$tagManager = new DocBlockTagManager();
            \$tagManager->initializeDefaultTags();
        }
        \$this->tagManager = \$tagManager;

        if (\$commentOrReflector instanceof Reflector) {
            \$this->reflector = \$commentOrReflector;
            if (! method_exists(\$commentOrReflector, 'getDocComment')) {
                throw new Exception\\InvalidArgumentException('Reflector must contain method \"getDocComment\"');
            }
            /* @var MethodReflection \$commentOrReflector */
            \$this->docComment = \$commentOrReflector->getDocComment();

            // determine line numbers
            \$lineCount       = substr_count(\$this->docComment, \"\\n\");
            \$this->startLine = \$this->reflector->getStartLine() - \$lineCount - 1;
            \$this->endLine   = \$this->reflector->getStartLine() - 1;
        } elseif (is_string(\$commentOrReflector)) {
            \$this->docComment = \$commentOrReflector;
        } else {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s must have a (string) DocComment or a Reflector in the constructor',
                get_class(\$this)
            ));
        }

        if (\$this->docComment == '') {
            throw new Exception\\InvalidArgumentException('DocComment cannot be empty');
        }

        \$this->reflect();
    }

    /**
     * Retrieve contents of DocBlock
     *
     * @return string
     */
    public function getContents()
    {
        \$this->reflect();

        return \$this->cleanDocComment;
    }

    /**
     * Get start line (position) of DocBlock
     *
     * @return int
     */
    public function getStartLine()
    {
        \$this->reflect();

        return \$this->startLine;
    }

    /**
     * Get last line (position) of DocBlock
     *
     * @return int
     */
    public function getEndLine()
    {
        \$this->reflect();

        return \$this->endLine;
    }

    /**
     * Get DocBlock short description
     *
     * @return string
     */
    public function getShortDescription()
    {
        \$this->reflect();

        return \$this->shortDescription;
    }

    /**
     * Get DocBlock long description
     *
     * @return string
     */
    public function getLongDescription()
    {
        \$this->reflect();

        return \$this->longDescription;
    }

    /**
     * Does the DocBlock contain the given annotation tag?
     *
     * @param  string \$name
     * @return bool
     */
    public function hasTag(\$name)
    {
        \$this->reflect();
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Retrieve the given DocBlock tag
     *
     * @param  string \$name
     * @return DocBlockTagInterface|false
     */
    public function getTag(\$name)
    {
        \$this->reflect();
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$name) {
                return \$tag;
            }
        }

        return false;
    }

    /**
     * Get all DocBlock annotation tags
     *
     * @param  string \$filter
     * @return DocBlockTagInterface[]
     */
    public function getTags(\$filter = null)
    {
        \$this->reflect();
        if (\$filter === null || ! is_string(\$filter)) {
            return \$this->tags;
        }

        \$returnTags = [];
        foreach (\$this->tags as \$tag) {
            if (\$tag->getName() == \$filter) {
                \$returnTags[] = \$tag;
            }
        }

        return \$returnTags;
    }

    /**
     * Parse the DocBlock
     *
     * @return void
     */
    protected function reflect()
    {
        if (\$this->isReflected) {
            return;
        }

        \$docComment = preg_replace('#[ ]{0,1}\\*/\$#', '', \$this->docComment);

        // create a clean docComment
        \$this->cleanDocComment = preg_replace(\"#[ \\t]*(?:/\\*\\*|\\*/|\\*)[ ]{0,1}(.*)?#\", '\$1', \$docComment);

        // @todo should be changed to remove first and last empty line
        \$this->cleanDocComment = ltrim(\$this->cleanDocComment, \"\\r\\n\");

        \$scanner                = new DocBlockScanner(\$docComment);
        \$this->shortDescription = ltrim(\$scanner->getShortDescription());
        \$this->longDescription  = ltrim(\$scanner->getLongDescription());

        foreach (\$scanner->getTags() as \$tag) {
            \$this->tags[] = \$this->tagManager->createTag(ltrim(\$tag['name'], '@'), ltrim(\$tag['value']));
        }

        \$this->isReflected = true;
    }

    /**
     * @return string
     */
    public function toString()
    {
        \$str = 'DocBlock [ /* DocBlock */ ] {' . \"\\n\\n\";
        \$str .= '  - Tags [' . count(\$this->tags) . '] {' . \"\\n\";

        foreach (\$this->tags as \$tag) {
            \$str .= '    ' . \$tag;
        }

        \$str .= '  }' . \"\\n\";
        \$str .= '}' . \"\\n\";

        return \$str;
    }

    /**
     * Serialize to string
     *
     * Required by the Reflector interface
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->toString();
    }
}
", "vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/DocBlockReflection.php");
    }
}
