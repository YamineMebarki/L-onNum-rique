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

/* vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php */
class __TwigTemplate_71068187de07aeb85a38ba5711bfc04c5bad95c6c81dab887bcbabdaa812a742 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class AuthorTag extends AbstractGenerator implements TagInterface
{
    /**
     * @var string
     */
    protected \$authorName;

    /**
     * @var string
     */
    protected \$authorEmail;

    /**
     * @param string \$authorName
     * @param string \$authorEmail
     */
    public function __construct(\$authorName = null, \$authorEmail = null)
    {
        if (! empty(\$authorName)) {
            \$this->setAuthorName(\$authorName);
        }

        if (! empty(\$authorEmail)) {
            \$this->setAuthorEmail(\$authorEmail);
        }
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return AuthorTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'author';
    }

    /**
     * @param string \$authorEmail
     * @return AuthorTag
     */
    public function setAuthorEmail(\$authorEmail)
    {
        \$this->authorEmail = \$authorEmail;
        return \$this;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return \$this->authorEmail;
    }

    /**
     * @param string \$authorName
     * @return AuthorTag
     */
    public function setAuthorName(\$authorName)
    {
        \$this->authorName = \$authorName;
        return \$this;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return \$this->authorName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@author'
            . (! empty(\$this->authorName) ? ' ' . \$this->authorName : '')
            . (! empty(\$this->authorEmail) ? ' <' . \$this->authorEmail . '>' : '');

        return \$output;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php";
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

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class AuthorTag extends AbstractGenerator implements TagInterface
{
    /**
     * @var string
     */
    protected \$authorName;

    /**
     * @var string
     */
    protected \$authorEmail;

    /**
     * @param string \$authorName
     * @param string \$authorEmail
     */
    public function __construct(\$authorName = null, \$authorEmail = null)
    {
        if (! empty(\$authorName)) {
            \$this->setAuthorName(\$authorName);
        }

        if (! empty(\$authorEmail)) {
            \$this->setAuthorEmail(\$authorEmail);
        }
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return AuthorTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'author';
    }

    /**
     * @param string \$authorEmail
     * @return AuthorTag
     */
    public function setAuthorEmail(\$authorEmail)
    {
        \$this->authorEmail = \$authorEmail;
        return \$this;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return \$this->authorEmail;
    }

    /**
     * @param string \$authorName
     * @return AuthorTag
     */
    public function setAuthorName(\$authorName)
    {
        \$this->authorName = \$authorName;
        return \$this;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return \$this->authorName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@author'
            . (! empty(\$this->authorName) ? ' ' . \$this->authorName : '')
            . (! empty(\$this->authorEmail) ? ' <' . \$this->authorEmail . '>' : '');

        return \$output;
    }
}
", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AuthorTag.php");
    }
}
