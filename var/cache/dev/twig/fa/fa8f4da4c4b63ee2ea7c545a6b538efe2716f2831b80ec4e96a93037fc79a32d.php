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

/* vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php */
class __TwigTemplate_121996f463738e54b9e09fde8900b6f9cd7e2131cfa95df08a7605409ed67170 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php"));

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

use Zend\\Code\\Generator\\DocBlock\\Tag;
use Zend\\Code\\Generator\\DocBlock\\Tag\\TagInterface;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlockReflection;

use function explode;
use function is_array;
use function sprintf;
use function str_replace;
use function strtolower;
use function trim;
use function wordwrap;

class DocBlockGenerator extends AbstractGenerator
{
    /**
     * @var string
     */
    protected \$shortDescription;

    /**
     * @var string
     */
    protected \$longDescription;

    /**
     * @var array
     */
    protected \$tags = [];

    /**
     * @var string
     */
    protected \$indentation = '';

    /**
     * @var bool
     */
    protected \$wordwrap = true;

    /**
     * @var TagManager
     */
    protected static \$tagManager;

    /**
     * Build a DocBlock generator object from a reflection object
     *
     * @param  DocBlockReflection \$reflectionDocBlock
     * @return DocBlockGenerator
     */
    public static function fromReflection(DocBlockReflection \$reflectionDocBlock)
    {
        \$docBlock = new static();

        \$docBlock->setSourceContent(\$reflectionDocBlock->getContents());
        \$docBlock->setSourceDirty(false);

        \$docBlock->setShortDescription(\$reflectionDocBlock->getShortDescription());
        \$docBlock->setLongDescription(\$reflectionDocBlock->getLongDescription());

        foreach (\$reflectionDocBlock->getTags() as \$tag) {
            \$docBlock->setTag(self::getTagManager()->createTagFromReflection(\$tag));
        }

        return \$docBlock;
    }

    /**
     * Generate from array
     *
     * @configkey shortdescription string The short description for this doc block
     * @configkey longdescription  string The long description for this doc block
     * @configkey tags             array
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return DocBlockGenerator
     */
    public static function fromArray(array \$array)
    {
        \$docBlock = new static();

        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'shortdescription':
                    \$docBlock->setShortDescription(\$value);
                    break;
                case 'longdescription':
                    \$docBlock->setLongDescription(\$value);
                    break;
                case 'tags':
                    \$docBlock->setTags(\$value);
                    break;
            }
        }

        return \$docBlock;
    }

    /**
     * @return TagManager
     */
    protected static function getTagManager()
    {
        if (! isset(static::\$tagManager)) {
            static::\$tagManager = new TagManager();
            static::\$tagManager->initializeDefaultTags();
        }
        return static::\$tagManager;
    }

    /**
     * @param  string \$shortDescription
     * @param  string \$longDescription
     * @param  array \$tags
     */
    public function __construct(\$shortDescription = null, \$longDescription = null, array \$tags = [])
    {
        if (\$shortDescription) {
            \$this->setShortDescription(\$shortDescription);
        }
        if (\$longDescription) {
            \$this->setLongDescription(\$longDescription);
        }
        if (is_array(\$tags) && \$tags) {
            \$this->setTags(\$tags);
        }
    }

    /**
     * @param  string \$shortDescription
     * @return DocBlockGenerator
     */
    public function setShortDescription(\$shortDescription)
    {
        \$this->shortDescription = \$shortDescription;
        return \$this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return \$this->shortDescription;
    }

    /**
     * @param  string \$longDescription
     * @return DocBlockGenerator
     */
    public function setLongDescription(\$longDescription)
    {
        \$this->longDescription = \$longDescription;
        return \$this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return \$this->longDescription;
    }

    /**
     * @param  array \$tags
     * @return DocBlockGenerator
     */
    public function setTags(array \$tags)
    {
        foreach (\$tags as \$tag) {
            \$this->setTag(\$tag);
        }

        return \$this;
    }

    /**
     * @param array|TagInterface \$tag
     * @throws Exception\\InvalidArgumentException
     * @return DocBlockGenerator
     */
    public function setTag(\$tag)
    {
        if (is_array(\$tag)) {
            // use deprecated Tag class for backward compatibility to old array-keys
            \$genericTag = new Tag();
            \$genericTag->setOptions(\$tag);
            \$tag = \$genericTag;
        } elseif (! \$tag instanceof TagInterface) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects either an array of method options or an instance of %s\\DocBlock\\Tag\\TagInterface',
                __METHOD__,
                __NAMESPACE__
            ));
        }

        \$this->tags[] = \$tag;
        return \$this;
    }

    /**
     * @return TagInterface[]
     */
    public function getTags()
    {
        return \$this->tags;
    }

    /**
     * @param bool \$value
     * @return DocBlockGenerator
     */
    public function setWordWrap(\$value)
    {
        \$this->wordwrap = (bool) \$value;
        return \$this;
    }

    /**
     * @return bool
     */
    public function getWordWrap()
    {
        return \$this->wordwrap;
    }

    /**
     * @return string
     */
    public function generate()
    {
        if (! \$this->isSourceDirty()) {
            return \$this->docCommentize(trim(\$this->getSourceContent()));
        }

        \$output = '';
        if (null !== (\$sd = \$this->getShortDescription())) {
            \$output .= \$sd . self::LINE_FEED . self::LINE_FEED;
        }
        if (null !== (\$ld = \$this->getLongDescription())) {
            \$output .= \$ld . self::LINE_FEED . self::LINE_FEED;
        }

        /* @var \$tag GeneratorInterface */
        foreach (\$this->getTags() as \$tag) {
            \$output .= \$tag->generate() . self::LINE_FEED;
        }

        return \$this->docCommentize(trim(\$output));
    }

    /**
     * @param  string \$content
     * @return string
     */
    protected function docCommentize(\$content)
    {
        \$indent  = \$this->getIndentation();
        \$output  = \$indent . '/**' . self::LINE_FEED;
        \$content = \$this->getWordWrap() == true ? wordwrap(\$content, 80, self::LINE_FEED) : \$content;
        \$lines   = explode(self::LINE_FEED, \$content);
        foreach (\$lines as \$line) {
            \$output .= \$indent . ' *';
            if (\$line) {
                \$output .= ' ' . \$line;
            }
            \$output .= self::LINE_FEED;
        }
        \$output .= \$indent . ' */' . self::LINE_FEED;

        return \$output;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php";
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

use Zend\\Code\\Generator\\DocBlock\\Tag;
use Zend\\Code\\Generator\\DocBlock\\Tag\\TagInterface;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlockReflection;

use function explode;
use function is_array;
use function sprintf;
use function str_replace;
use function strtolower;
use function trim;
use function wordwrap;

class DocBlockGenerator extends AbstractGenerator
{
    /**
     * @var string
     */
    protected \$shortDescription;

    /**
     * @var string
     */
    protected \$longDescription;

    /**
     * @var array
     */
    protected \$tags = [];

    /**
     * @var string
     */
    protected \$indentation = '';

    /**
     * @var bool
     */
    protected \$wordwrap = true;

    /**
     * @var TagManager
     */
    protected static \$tagManager;

    /**
     * Build a DocBlock generator object from a reflection object
     *
     * @param  DocBlockReflection \$reflectionDocBlock
     * @return DocBlockGenerator
     */
    public static function fromReflection(DocBlockReflection \$reflectionDocBlock)
    {
        \$docBlock = new static();

        \$docBlock->setSourceContent(\$reflectionDocBlock->getContents());
        \$docBlock->setSourceDirty(false);

        \$docBlock->setShortDescription(\$reflectionDocBlock->getShortDescription());
        \$docBlock->setLongDescription(\$reflectionDocBlock->getLongDescription());

        foreach (\$reflectionDocBlock->getTags() as \$tag) {
            \$docBlock->setTag(self::getTagManager()->createTagFromReflection(\$tag));
        }

        return \$docBlock;
    }

    /**
     * Generate from array
     *
     * @configkey shortdescription string The short description for this doc block
     * @configkey longdescription  string The long description for this doc block
     * @configkey tags             array
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return DocBlockGenerator
     */
    public static function fromArray(array \$array)
    {
        \$docBlock = new static();

        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'shortdescription':
                    \$docBlock->setShortDescription(\$value);
                    break;
                case 'longdescription':
                    \$docBlock->setLongDescription(\$value);
                    break;
                case 'tags':
                    \$docBlock->setTags(\$value);
                    break;
            }
        }

        return \$docBlock;
    }

    /**
     * @return TagManager
     */
    protected static function getTagManager()
    {
        if (! isset(static::\$tagManager)) {
            static::\$tagManager = new TagManager();
            static::\$tagManager->initializeDefaultTags();
        }
        return static::\$tagManager;
    }

    /**
     * @param  string \$shortDescription
     * @param  string \$longDescription
     * @param  array \$tags
     */
    public function __construct(\$shortDescription = null, \$longDescription = null, array \$tags = [])
    {
        if (\$shortDescription) {
            \$this->setShortDescription(\$shortDescription);
        }
        if (\$longDescription) {
            \$this->setLongDescription(\$longDescription);
        }
        if (is_array(\$tags) && \$tags) {
            \$this->setTags(\$tags);
        }
    }

    /**
     * @param  string \$shortDescription
     * @return DocBlockGenerator
     */
    public function setShortDescription(\$shortDescription)
    {
        \$this->shortDescription = \$shortDescription;
        return \$this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return \$this->shortDescription;
    }

    /**
     * @param  string \$longDescription
     * @return DocBlockGenerator
     */
    public function setLongDescription(\$longDescription)
    {
        \$this->longDescription = \$longDescription;
        return \$this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return \$this->longDescription;
    }

    /**
     * @param  array \$tags
     * @return DocBlockGenerator
     */
    public function setTags(array \$tags)
    {
        foreach (\$tags as \$tag) {
            \$this->setTag(\$tag);
        }

        return \$this;
    }

    /**
     * @param array|TagInterface \$tag
     * @throws Exception\\InvalidArgumentException
     * @return DocBlockGenerator
     */
    public function setTag(\$tag)
    {
        if (is_array(\$tag)) {
            // use deprecated Tag class for backward compatibility to old array-keys
            \$genericTag = new Tag();
            \$genericTag->setOptions(\$tag);
            \$tag = \$genericTag;
        } elseif (! \$tag instanceof TagInterface) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects either an array of method options or an instance of %s\\DocBlock\\Tag\\TagInterface',
                __METHOD__,
                __NAMESPACE__
            ));
        }

        \$this->tags[] = \$tag;
        return \$this;
    }

    /**
     * @return TagInterface[]
     */
    public function getTags()
    {
        return \$this->tags;
    }

    /**
     * @param bool \$value
     * @return DocBlockGenerator
     */
    public function setWordWrap(\$value)
    {
        \$this->wordwrap = (bool) \$value;
        return \$this;
    }

    /**
     * @return bool
     */
    public function getWordWrap()
    {
        return \$this->wordwrap;
    }

    /**
     * @return string
     */
    public function generate()
    {
        if (! \$this->isSourceDirty()) {
            return \$this->docCommentize(trim(\$this->getSourceContent()));
        }

        \$output = '';
        if (null !== (\$sd = \$this->getShortDescription())) {
            \$output .= \$sd . self::LINE_FEED . self::LINE_FEED;
        }
        if (null !== (\$ld = \$this->getLongDescription())) {
            \$output .= \$ld . self::LINE_FEED . self::LINE_FEED;
        }

        /* @var \$tag GeneratorInterface */
        foreach (\$this->getTags() as \$tag) {
            \$output .= \$tag->generate() . self::LINE_FEED;
        }

        return \$this->docCommentize(trim(\$output));
    }

    /**
     * @param  string \$content
     * @return string
     */
    protected function docCommentize(\$content)
    {
        \$indent  = \$this->getIndentation();
        \$output  = \$indent . '/**' . self::LINE_FEED;
        \$content = \$this->getWordWrap() == true ? wordwrap(\$content, 80, self::LINE_FEED) : \$content;
        \$lines   = explode(self::LINE_FEED, \$content);
        foreach (\$lines as \$line) {
            \$output .= \$indent . ' *';
            if (\$line) {
                \$output .= ' ' . \$line;
            }
            \$output .= self::LINE_FEED;
        }
        \$output .= \$indent . ' */' . self::LINE_FEED;

        return \$output;
    }
}
", "vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/DocBlockGenerator.php");
    }
}
