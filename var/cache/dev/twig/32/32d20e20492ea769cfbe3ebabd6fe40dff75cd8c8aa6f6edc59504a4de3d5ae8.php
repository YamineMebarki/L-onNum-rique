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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php */
class __TwigTemplate_3cbd722cf8517c7c8869e826f26c1ef482b3e008903f0d4ce4dddee884b3972d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

use Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation;
use Doctrine\\Common\\Annotations\\Annotation\\Target;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

/**
 * A reader for docblock annotations.
 *
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AnnotationReader implements Reader
{
    /**
     * Global map for imports.
     *
     * @var array
     */
    private static \$globalImports = [
        'ignoreannotation' => 'Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation',
    ];

    /**
     * A list with annotations that are not causing exceptions when not resolved to an annotation class.
     *
     * The names are case sensitive.
     *
     * @var array
     */
    private static \$globalIgnoredNames = [
        // Annotation tags
        'Annotation' => true, 'Attribute' => true, 'Attributes' => true,
        /* Can we enable this? 'Enum' => true, */
        'Required' => true,
        'Target' => true,
        // Widely used tags (but not existent in phpdoc)
        'fix' => true , 'fixme' => true,
        'override' => true,
        // PHPDocumentor 1 tags
        'abstract'=> true, 'access'=> true,
        'code' => true,
        'deprec'=> true,
        'endcode' => true, 'exception'=> true,
        'final'=> true,
        'ingroup' => true, 'inheritdoc'=> true, 'inheritDoc'=> true,
        'magic' => true,
        'name'=> true,
        'toc' => true, 'tutorial'=> true,
        'private' => true,
        'static'=> true, 'staticvar'=> true, 'staticVar'=> true,
        'throw' => true,
        // PHPDocumentor 2 tags.
        'api' => true, 'author'=> true,
        'category'=> true, 'copyright'=> true,
        'deprecated'=> true,
        'example'=> true,
        'filesource'=> true,
        'global'=> true,
        'ignore'=> true, /* Can we enable this? 'index' => true, */ 'internal'=> true,
        'license'=> true, 'link'=> true,
        'method' => true,
        'package'=> true, 'param'=> true, 'property' => true, 'property-read' => true, 'property-write' => true,
        'return'=> true,
        'see'=> true, 'since'=> true, 'source' => true, 'subpackage'=> true,
        'throws'=> true, 'todo'=> true, 'Todo'=> true,
        'usedby'=> true, 'uses' => true,
        'var'=> true, 'version'=> true,
        // PHPUnit tags
        'codeCoverageIgnore' => true, 'codeCoverageIgnoreStart' => true, 'codeCoverageIgnoreEnd' => true,
        // PHPCheckStyle
        'SuppressWarnings' => true,
        // PHPStorm
        'noinspection' => true,
        // PEAR
        'package_version' => true,
        // PlantUML
        'startuml' => true, 'enduml' => true,
        // Symfony 3.3 Cache Adapter
        'experimental' => true,
        // Slevomat Coding Standard
        'phpcsSuppress' => true,
        // PHP CodeSniffer
        'codingStandardsIgnoreStart' => true,
        'codingStandardsIgnoreEnd' => true,
    ];

    /**
     * A list with annotations that are not causing exceptions when not resolved to an annotation class.
     *
     * The names are case sensitive.
     *
     * @var array
     */
    private static \$globalIgnoredNamespaces = [];

    /**
     * Add a new annotation to the globally ignored annotation names with regard to exception handling.
     *
     * @param string \$name
     */
    static public function addGlobalIgnoredName(\$name)
    {
        self::\$globalIgnoredNames[\$name] = true;
    }

    /**
     * Add a new annotation to the globally ignored annotation namespaces with regard to exception handling.
     *
     * @param string \$namespace
     */
    static public function addGlobalIgnoredNamespace(\$namespace)
    {
        self::\$globalIgnoredNamespaces[\$namespace] = true;
    }

    /**
     * Annotations parser.
     *
     * @var \\Doctrine\\Common\\Annotations\\DocParser
     */
    private \$parser;

    /**
     * Annotations parser used to collect parsing metadata.
     *
     * @var \\Doctrine\\Common\\Annotations\\DocParser
     */
    private \$preParser;

    /**
     * PHP parser used to collect imports.
     *
     * @var \\Doctrine\\Common\\Annotations\\PhpParser
     */
    private \$phpParser;

    /**
     * In-memory cache mechanism to store imported annotations per class.
     *
     * @var array
     */
    private \$imports = [];

    /**
     * In-memory cache mechanism to store ignored annotations per class.
     *
     * @var array
     */
    private \$ignoredAnnotationNames = [];

    /**
     * Constructor.
     *
     * Initializes a new AnnotationReader.
     *
     * @param DocParser \$parser
     *
     * @throws AnnotationException
     */
    public function __construct(DocParser \$parser = null)
    {
        if (extension_loaded('Zend Optimizer+') && (ini_get('zend_optimizerplus.save_comments') === \"0\" || ini_get('opcache.save_comments') === \"0\")) {
            throw AnnotationException::optimizerPlusSaveComments();
        }

        if (extension_loaded('Zend OPcache') && ini_get('opcache.save_comments') == 0) {
            throw AnnotationException::optimizerPlusSaveComments();
        }

        AnnotationRegistry::registerFile(__DIR__ . '/Annotation/IgnoreAnnotation.php');

        \$this->parser = \$parser ?: new DocParser();

        \$this->preParser = new DocParser;

        \$this->preParser->setImports(self::\$globalImports);
        \$this->preParser->setIgnoreNotImportedAnnotations(true);
        \$this->preParser->setIgnoredAnnotationNames(self::\$globalIgnoredNames);

        \$this->phpParser = new PhpParser;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(ReflectionClass \$class)
    {
        \$this->parser->setTarget(Target::TARGET_CLASS);
        \$this->parser->setImports(\$this->getClassImports(\$class));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$class->getDocComment(), 'class ' . \$class->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(ReflectionClass \$class, \$annotationName)
    {
        \$annotations = \$this->getClassAnnotations(\$class);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(ReflectionProperty \$property)
    {
        \$class   = \$property->getDeclaringClass();
        \$context = 'property ' . \$class->getName() . \"::\\\$\" . \$property->getName();

        \$this->parser->setTarget(Target::TARGET_PROPERTY);
        \$this->parser->setImports(\$this->getPropertyImports(\$property));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$property->getDocComment(), \$context);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(ReflectionProperty \$property, \$annotationName)
    {
        \$annotations = \$this->getPropertyAnnotations(\$property);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(ReflectionMethod \$method)
    {
        \$class   = \$method->getDeclaringClass();
        \$context = 'method ' . \$class->getName() . '::' . \$method->getName() . '()';

        \$this->parser->setTarget(Target::TARGET_METHOD);
        \$this->parser->setImports(\$this->getMethodImports(\$method));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$method->getDocComment(), \$context);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(ReflectionMethod \$method, \$annotationName)
    {
        \$annotations = \$this->getMethodAnnotations(\$method);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * Returns the ignored annotations for the given class.
     *
     * @param \\ReflectionClass \$class
     *
     * @return array
     */
    private function getIgnoredAnnotationNames(ReflectionClass \$class)
    {
        \$name = \$class->getName();
        if (isset(\$this->ignoredAnnotationNames[\$name])) {
            return \$this->ignoredAnnotationNames[\$name];
        }

        \$this->collectParsingMetadata(\$class);

        return \$this->ignoredAnnotationNames[\$name];
    }

    /**
     * Retrieves imports.
     *
     * @param \\ReflectionClass \$class
     *
     * @return array
     */
    private function getClassImports(ReflectionClass \$class)
    {
        \$name = \$class->getName();
        if (isset(\$this->imports[\$name])) {
            return \$this->imports[\$name];
        }

        \$this->collectParsingMetadata(\$class);

        return \$this->imports[\$name];
    }

    /**
     * Retrieves imports for methods.
     *
     * @param \\ReflectionMethod \$method
     *
     * @return array
     */
    private function getMethodImports(ReflectionMethod \$method)
    {
        \$class = \$method->getDeclaringClass();
        \$classImports = \$this->getClassImports(\$class);

        \$traitImports = [];

        foreach (\$class->getTraits() as \$trait) {
            if (\$trait->hasMethod(\$method->getName())
                && \$trait->getFileName() === \$method->getFileName()
            ) {
                \$traitImports = array_merge(\$traitImports, \$this->phpParser->parseClass(\$trait));
            }
        }

        return array_merge(\$classImports, \$traitImports);
    }

    /**
     * Retrieves imports for properties.
     *
     * @param \\ReflectionProperty \$property
     *
     * @return array
     */
    private function getPropertyImports(ReflectionProperty \$property)
    {
        \$class = \$property->getDeclaringClass();
        \$classImports = \$this->getClassImports(\$class);

        \$traitImports = [];

        foreach (\$class->getTraits() as \$trait) {
            if (\$trait->hasProperty(\$property->getName())) {
                \$traitImports = array_merge(\$traitImports, \$this->phpParser->parseClass(\$trait));
            }
        }

        return array_merge(\$classImports, \$traitImports);
    }

    /**
     * Collects parsing metadata for a given class.
     *
     * @param \\ReflectionClass \$class
     */
    private function collectParsingMetadata(ReflectionClass \$class)
    {
        \$ignoredAnnotationNames = self::\$globalIgnoredNames;
        \$annotations            = \$this->preParser->parse(\$class->getDocComment(), 'class ' . \$class->name);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof IgnoreAnnotation) {
                foreach (\$annotation->names AS \$annot) {
                    \$ignoredAnnotationNames[\$annot] = true;
                }
            }
        }

        \$name = \$class->getName();

        \$this->imports[\$name] = array_merge(
            self::\$globalImports,
            \$this->phpParser->parseClass(\$class),
            ['__NAMESPACE__' => \$class->getNamespaceName()]
        );

        \$this->ignoredAnnotationNames[\$name] = \$ignoredAnnotationNames;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

use Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation;
use Doctrine\\Common\\Annotations\\Annotation\\Target;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

/**
 * A reader for docblock annotations.
 *
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AnnotationReader implements Reader
{
    /**
     * Global map for imports.
     *
     * @var array
     */
    private static \$globalImports = [
        'ignoreannotation' => 'Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation',
    ];

    /**
     * A list with annotations that are not causing exceptions when not resolved to an annotation class.
     *
     * The names are case sensitive.
     *
     * @var array
     */
    private static \$globalIgnoredNames = [
        // Annotation tags
        'Annotation' => true, 'Attribute' => true, 'Attributes' => true,
        /* Can we enable this? 'Enum' => true, */
        'Required' => true,
        'Target' => true,
        // Widely used tags (but not existent in phpdoc)
        'fix' => true , 'fixme' => true,
        'override' => true,
        // PHPDocumentor 1 tags
        'abstract'=> true, 'access'=> true,
        'code' => true,
        'deprec'=> true,
        'endcode' => true, 'exception'=> true,
        'final'=> true,
        'ingroup' => true, 'inheritdoc'=> true, 'inheritDoc'=> true,
        'magic' => true,
        'name'=> true,
        'toc' => true, 'tutorial'=> true,
        'private' => true,
        'static'=> true, 'staticvar'=> true, 'staticVar'=> true,
        'throw' => true,
        // PHPDocumentor 2 tags.
        'api' => true, 'author'=> true,
        'category'=> true, 'copyright'=> true,
        'deprecated'=> true,
        'example'=> true,
        'filesource'=> true,
        'global'=> true,
        'ignore'=> true, /* Can we enable this? 'index' => true, */ 'internal'=> true,
        'license'=> true, 'link'=> true,
        'method' => true,
        'package'=> true, 'param'=> true, 'property' => true, 'property-read' => true, 'property-write' => true,
        'return'=> true,
        'see'=> true, 'since'=> true, 'source' => true, 'subpackage'=> true,
        'throws'=> true, 'todo'=> true, 'Todo'=> true,
        'usedby'=> true, 'uses' => true,
        'var'=> true, 'version'=> true,
        // PHPUnit tags
        'codeCoverageIgnore' => true, 'codeCoverageIgnoreStart' => true, 'codeCoverageIgnoreEnd' => true,
        // PHPCheckStyle
        'SuppressWarnings' => true,
        // PHPStorm
        'noinspection' => true,
        // PEAR
        'package_version' => true,
        // PlantUML
        'startuml' => true, 'enduml' => true,
        // Symfony 3.3 Cache Adapter
        'experimental' => true,
        // Slevomat Coding Standard
        'phpcsSuppress' => true,
        // PHP CodeSniffer
        'codingStandardsIgnoreStart' => true,
        'codingStandardsIgnoreEnd' => true,
    ];

    /**
     * A list with annotations that are not causing exceptions when not resolved to an annotation class.
     *
     * The names are case sensitive.
     *
     * @var array
     */
    private static \$globalIgnoredNamespaces = [];

    /**
     * Add a new annotation to the globally ignored annotation names with regard to exception handling.
     *
     * @param string \$name
     */
    static public function addGlobalIgnoredName(\$name)
    {
        self::\$globalIgnoredNames[\$name] = true;
    }

    /**
     * Add a new annotation to the globally ignored annotation namespaces with regard to exception handling.
     *
     * @param string \$namespace
     */
    static public function addGlobalIgnoredNamespace(\$namespace)
    {
        self::\$globalIgnoredNamespaces[\$namespace] = true;
    }

    /**
     * Annotations parser.
     *
     * @var \\Doctrine\\Common\\Annotations\\DocParser
     */
    private \$parser;

    /**
     * Annotations parser used to collect parsing metadata.
     *
     * @var \\Doctrine\\Common\\Annotations\\DocParser
     */
    private \$preParser;

    /**
     * PHP parser used to collect imports.
     *
     * @var \\Doctrine\\Common\\Annotations\\PhpParser
     */
    private \$phpParser;

    /**
     * In-memory cache mechanism to store imported annotations per class.
     *
     * @var array
     */
    private \$imports = [];

    /**
     * In-memory cache mechanism to store ignored annotations per class.
     *
     * @var array
     */
    private \$ignoredAnnotationNames = [];

    /**
     * Constructor.
     *
     * Initializes a new AnnotationReader.
     *
     * @param DocParser \$parser
     *
     * @throws AnnotationException
     */
    public function __construct(DocParser \$parser = null)
    {
        if (extension_loaded('Zend Optimizer+') && (ini_get('zend_optimizerplus.save_comments') === \"0\" || ini_get('opcache.save_comments') === \"0\")) {
            throw AnnotationException::optimizerPlusSaveComments();
        }

        if (extension_loaded('Zend OPcache') && ini_get('opcache.save_comments') == 0) {
            throw AnnotationException::optimizerPlusSaveComments();
        }

        AnnotationRegistry::registerFile(__DIR__ . '/Annotation/IgnoreAnnotation.php');

        \$this->parser = \$parser ?: new DocParser();

        \$this->preParser = new DocParser;

        \$this->preParser->setImports(self::\$globalImports);
        \$this->preParser->setIgnoreNotImportedAnnotations(true);
        \$this->preParser->setIgnoredAnnotationNames(self::\$globalIgnoredNames);

        \$this->phpParser = new PhpParser;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(ReflectionClass \$class)
    {
        \$this->parser->setTarget(Target::TARGET_CLASS);
        \$this->parser->setImports(\$this->getClassImports(\$class));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$class->getDocComment(), 'class ' . \$class->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(ReflectionClass \$class, \$annotationName)
    {
        \$annotations = \$this->getClassAnnotations(\$class);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(ReflectionProperty \$property)
    {
        \$class   = \$property->getDeclaringClass();
        \$context = 'property ' . \$class->getName() . \"::\\\$\" . \$property->getName();

        \$this->parser->setTarget(Target::TARGET_PROPERTY);
        \$this->parser->setImports(\$this->getPropertyImports(\$property));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$property->getDocComment(), \$context);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(ReflectionProperty \$property, \$annotationName)
    {
        \$annotations = \$this->getPropertyAnnotations(\$property);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(ReflectionMethod \$method)
    {
        \$class   = \$method->getDeclaringClass();
        \$context = 'method ' . \$class->getName() . '::' . \$method->getName() . '()';

        \$this->parser->setTarget(Target::TARGET_METHOD);
        \$this->parser->setImports(\$this->getMethodImports(\$method));
        \$this->parser->setIgnoredAnnotationNames(\$this->getIgnoredAnnotationNames(\$class));
        \$this->parser->setIgnoredAnnotationNamespaces(self::\$globalIgnoredNamespaces);

        return \$this->parser->parse(\$method->getDocComment(), \$context);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(ReflectionMethod \$method, \$annotationName)
    {
        \$annotations = \$this->getMethodAnnotations(\$method);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof \$annotationName) {
                return \$annotation;
            }
        }

        return null;
    }

    /**
     * Returns the ignored annotations for the given class.
     *
     * @param \\ReflectionClass \$class
     *
     * @return array
     */
    private function getIgnoredAnnotationNames(ReflectionClass \$class)
    {
        \$name = \$class->getName();
        if (isset(\$this->ignoredAnnotationNames[\$name])) {
            return \$this->ignoredAnnotationNames[\$name];
        }

        \$this->collectParsingMetadata(\$class);

        return \$this->ignoredAnnotationNames[\$name];
    }

    /**
     * Retrieves imports.
     *
     * @param \\ReflectionClass \$class
     *
     * @return array
     */
    private function getClassImports(ReflectionClass \$class)
    {
        \$name = \$class->getName();
        if (isset(\$this->imports[\$name])) {
            return \$this->imports[\$name];
        }

        \$this->collectParsingMetadata(\$class);

        return \$this->imports[\$name];
    }

    /**
     * Retrieves imports for methods.
     *
     * @param \\ReflectionMethod \$method
     *
     * @return array
     */
    private function getMethodImports(ReflectionMethod \$method)
    {
        \$class = \$method->getDeclaringClass();
        \$classImports = \$this->getClassImports(\$class);

        \$traitImports = [];

        foreach (\$class->getTraits() as \$trait) {
            if (\$trait->hasMethod(\$method->getName())
                && \$trait->getFileName() === \$method->getFileName()
            ) {
                \$traitImports = array_merge(\$traitImports, \$this->phpParser->parseClass(\$trait));
            }
        }

        return array_merge(\$classImports, \$traitImports);
    }

    /**
     * Retrieves imports for properties.
     *
     * @param \\ReflectionProperty \$property
     *
     * @return array
     */
    private function getPropertyImports(ReflectionProperty \$property)
    {
        \$class = \$property->getDeclaringClass();
        \$classImports = \$this->getClassImports(\$class);

        \$traitImports = [];

        foreach (\$class->getTraits() as \$trait) {
            if (\$trait->hasProperty(\$property->getName())) {
                \$traitImports = array_merge(\$traitImports, \$this->phpParser->parseClass(\$trait));
            }
        }

        return array_merge(\$classImports, \$traitImports);
    }

    /**
     * Collects parsing metadata for a given class.
     *
     * @param \\ReflectionClass \$class
     */
    private function collectParsingMetadata(ReflectionClass \$class)
    {
        \$ignoredAnnotationNames = self::\$globalIgnoredNames;
        \$annotations            = \$this->preParser->parse(\$class->getDocComment(), 'class ' . \$class->name);

        foreach (\$annotations as \$annotation) {
            if (\$annotation instanceof IgnoreAnnotation) {
                foreach (\$annotation->names AS \$annot) {
                    \$ignoredAnnotationNames[\$annot] = true;
                }
            }
        }

        \$name = \$class->getName();

        \$this->imports[\$name] = array_merge(
            self::\$globalImports,
            \$this->phpParser->parseClass(\$class),
            ['__NAMESPACE__' => \$class->getNamespaceName()]
        );

        \$this->ignoredAnnotationNames[\$name] = \$ignoredAnnotationNames;
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php");
    }
}