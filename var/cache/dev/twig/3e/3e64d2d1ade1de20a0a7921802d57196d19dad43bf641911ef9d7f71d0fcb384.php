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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php */
class __TwigTemplate_5b40645fb6794dc2f25bbf35140ece1af50089dfb39fda6c88d45b9286afc644 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php"));

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

/**
 * Simple Annotation Reader.
 *
 * This annotation reader is intended to be used in projects where you have
 * full-control over all annotations that are available.
 *
 * @since  2.2
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class SimpleAnnotationReader implements Reader
{
    /**
     * @var DocParser
     */
    private \$parser;

    /**
     * Constructor.
     *
     * Initializes a new SimpleAnnotationReader.
     */
    public function __construct()
    {
        \$this->parser = new DocParser();
        \$this->parser->setIgnoreNotImportedAnnotations(true);
    }

    /**
     * Adds a namespace in which we will look for annotations.
     *
     * @param string \$namespace
     *
     * @return void
     */
    public function addNamespace(\$namespace)
    {
        \$this->parser->addNamespace(\$namespace);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(\\ReflectionClass \$class)
    {
        return \$this->parser->parse(\$class->getDocComment(), 'class '.\$class->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        return \$this->parser->parse(\$method->getDocComment(), 'method '.\$method->getDeclaringClass()->name.'::'.\$method->getName().'()');
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        return \$this->parser->parse(\$property->getDocComment(), 'property '.\$property->getDeclaringClass()->name.'::\$'.\$property->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(\\ReflectionClass \$class, \$annotationName)
    {
        foreach (\$this->getClassAnnotations(\$class) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName)
    {
        foreach (\$this->getMethodAnnotations(\$method) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName)
    {
        foreach (\$this->getPropertyAnnotations(\$property) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php";
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

/**
 * Simple Annotation Reader.
 *
 * This annotation reader is intended to be used in projects where you have
 * full-control over all annotations that are available.
 *
 * @since  2.2
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class SimpleAnnotationReader implements Reader
{
    /**
     * @var DocParser
     */
    private \$parser;

    /**
     * Constructor.
     *
     * Initializes a new SimpleAnnotationReader.
     */
    public function __construct()
    {
        \$this->parser = new DocParser();
        \$this->parser->setIgnoreNotImportedAnnotations(true);
    }

    /**
     * Adds a namespace in which we will look for annotations.
     *
     * @param string \$namespace
     *
     * @return void
     */
    public function addNamespace(\$namespace)
    {
        \$this->parser->addNamespace(\$namespace);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(\\ReflectionClass \$class)
    {
        return \$this->parser->parse(\$class->getDocComment(), 'class '.\$class->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        return \$this->parser->parse(\$method->getDocComment(), 'method '.\$method->getDeclaringClass()->name.'::'.\$method->getName().'()');
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        return \$this->parser->parse(\$property->getDocComment(), 'property '.\$property->getDeclaringClass()->name.'::\$'.\$property->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(\\ReflectionClass \$class, \$annotationName)
    {
        foreach (\$this->getClassAnnotations(\$class) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName)
    {
        foreach (\$this->getMethodAnnotations(\$method) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName)
    {
        foreach (\$this->getPropertyAnnotations(\$property) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php");
    }
}
