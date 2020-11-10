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

/* vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php */
class __TwigTemplate_dfc29fc0c28981f5e6ef47e2633ee47ecea196382bd6b3ac871b3e25777881bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Annotation\\Parser;

use Doctrine\\Common\\Annotations\\AnnotationRegistry;
use Doctrine\\Common\\Annotations\\DocParser;
use Traversable;
use Zend\\Code\\Exception;
use Zend\\EventManager\\EventInterface;

use function array_shift;
use function class_exists;
use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function preg_replace;
use function sprintf;

/**
 * A parser for docblock annotations that utilizes the annotation parser from
 * Doctrine\\Common.
 *
 * Consumes Doctrine\\Common\\Annotations\\DocParser, and responds to events from
 * AnnotationManager. If the annotation examined is in the list of classes we
 * are interested in, the raw annotation is passed to the DocParser in order to
 * retrieve the annotation object instance. Otherwise, it is skipped.
 */
class DoctrineAnnotationParser implements ParserInterface
{
    /**
     * @var array Annotation classes we support on this iteration
     */
    protected \$allowedAnnotations = [];

    /**
     * @var DocParser
     */
    protected \$docParser;

    public function __construct()
    {
        // Hack to ensure an attempt to autoload an annotation class is made
        AnnotationRegistry::registerLoader(function (\$class) {
            return (bool) class_exists(\$class);
        });
    }

    /**
     * Set the DocParser instance
     *
     * @param  DocParser \$docParser
     * @return DoctrineAnnotationParser
     */
    public function setDocParser(DocParser \$docParser)
    {
        \$this->docParser = \$docParser;
        return \$this;
    }

    /**
     * Retrieve the DocParser instance
     *
     * If none is registered, lazy-loads a new instance.
     *
     * @return DocParser
     */
    public function getDocParser()
    {
        if (! \$this->docParser instanceof DocParser) {
            \$this->setDocParser(new DocParser());
        }

        return \$this->docParser;
    }

    /**
     * Handle annotation creation
     *
     * @param  EventInterface \$e
     * @return false|\\stdClass
     */
    public function onCreateAnnotation(EventInterface \$e)
    {
        \$annotationClass = \$e->getParam('class', false);
        if (! \$annotationClass) {
            return false;
        }

        if (! isset(\$this->allowedAnnotations[\$annotationClass])) {
            return false;
        }

        \$annotationString = \$e->getParam('raw', false);
        if (! \$annotationString) {
            return false;
        }

        // Annotation classes provided by the AnnotationScanner are already
        // resolved to fully-qualified class names. Adding the global namespace
        // prefix allows the Doctrine annotation parser to locate the annotation
        // class correctly.
        \$annotationString = preg_replace('/^(@)/', '\$1\\\\', \$annotationString);

        \$parser      = \$this->getDocParser();
        \$annotations = \$parser->parse(\$annotationString);
        if (empty(\$annotations)) {
            return false;
        }

        \$annotation = array_shift(\$annotations);
        if (! is_object(\$annotation)) {
            return false;
        }

        return \$annotation;
    }

    /**
     * Specify an allowed annotation class
     *
     * @param  string \$annotation
     * @return DoctrineAnnotationParser
     */
    public function registerAnnotation(\$annotation)
    {
        \$this->allowedAnnotations[\$annotation] = true;
        return \$this;
    }

    /**
     * Set many allowed annotations at once
     *
     * @param  array|Traversable \$annotations Array or traversable object of
     *         annotation class names
     * @throws Exception\\InvalidArgumentException
     * @return DoctrineAnnotationParser
     */
    public function registerAnnotations(\$annotations)
    {
        if (! is_array(\$annotations) && ! \$annotations instanceof Traversable) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s: expects an array or Traversable; received \"%s\"',
                __METHOD__,
                is_object(\$annotations) ? get_class(\$annotations) : gettype(\$annotations)
            ));
        }

        foreach (\$annotations as \$annotation) {
            \$this->allowedAnnotations[\$annotation] = true;
        }

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php";
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

namespace Zend\\Code\\Annotation\\Parser;

use Doctrine\\Common\\Annotations\\AnnotationRegistry;
use Doctrine\\Common\\Annotations\\DocParser;
use Traversable;
use Zend\\Code\\Exception;
use Zend\\EventManager\\EventInterface;

use function array_shift;
use function class_exists;
use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function preg_replace;
use function sprintf;

/**
 * A parser for docblock annotations that utilizes the annotation parser from
 * Doctrine\\Common.
 *
 * Consumes Doctrine\\Common\\Annotations\\DocParser, and responds to events from
 * AnnotationManager. If the annotation examined is in the list of classes we
 * are interested in, the raw annotation is passed to the DocParser in order to
 * retrieve the annotation object instance. Otherwise, it is skipped.
 */
class DoctrineAnnotationParser implements ParserInterface
{
    /**
     * @var array Annotation classes we support on this iteration
     */
    protected \$allowedAnnotations = [];

    /**
     * @var DocParser
     */
    protected \$docParser;

    public function __construct()
    {
        // Hack to ensure an attempt to autoload an annotation class is made
        AnnotationRegistry::registerLoader(function (\$class) {
            return (bool) class_exists(\$class);
        });
    }

    /**
     * Set the DocParser instance
     *
     * @param  DocParser \$docParser
     * @return DoctrineAnnotationParser
     */
    public function setDocParser(DocParser \$docParser)
    {
        \$this->docParser = \$docParser;
        return \$this;
    }

    /**
     * Retrieve the DocParser instance
     *
     * If none is registered, lazy-loads a new instance.
     *
     * @return DocParser
     */
    public function getDocParser()
    {
        if (! \$this->docParser instanceof DocParser) {
            \$this->setDocParser(new DocParser());
        }

        return \$this->docParser;
    }

    /**
     * Handle annotation creation
     *
     * @param  EventInterface \$e
     * @return false|\\stdClass
     */
    public function onCreateAnnotation(EventInterface \$e)
    {
        \$annotationClass = \$e->getParam('class', false);
        if (! \$annotationClass) {
            return false;
        }

        if (! isset(\$this->allowedAnnotations[\$annotationClass])) {
            return false;
        }

        \$annotationString = \$e->getParam('raw', false);
        if (! \$annotationString) {
            return false;
        }

        // Annotation classes provided by the AnnotationScanner are already
        // resolved to fully-qualified class names. Adding the global namespace
        // prefix allows the Doctrine annotation parser to locate the annotation
        // class correctly.
        \$annotationString = preg_replace('/^(@)/', '\$1\\\\', \$annotationString);

        \$parser      = \$this->getDocParser();
        \$annotations = \$parser->parse(\$annotationString);
        if (empty(\$annotations)) {
            return false;
        }

        \$annotation = array_shift(\$annotations);
        if (! is_object(\$annotation)) {
            return false;
        }

        return \$annotation;
    }

    /**
     * Specify an allowed annotation class
     *
     * @param  string \$annotation
     * @return DoctrineAnnotationParser
     */
    public function registerAnnotation(\$annotation)
    {
        \$this->allowedAnnotations[\$annotation] = true;
        return \$this;
    }

    /**
     * Set many allowed annotations at once
     *
     * @param  array|Traversable \$annotations Array or traversable object of
     *         annotation class names
     * @throws Exception\\InvalidArgumentException
     * @return DoctrineAnnotationParser
     */
    public function registerAnnotations(\$annotations)
    {
        if (! is_array(\$annotations) && ! \$annotations instanceof Traversable) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s: expects an array or Traversable; received \"%s\"',
                __METHOD__,
                is_object(\$annotations) ? get_class(\$annotations) : gettype(\$annotations)
            ));
        }

        foreach (\$annotations as \$annotation) {
            \$this->allowedAnnotations[\$annotation] = true;
        }

        return \$this;
    }
}
", "vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Annotation/Parser/DoctrineAnnotationParser.php");
    }
}
