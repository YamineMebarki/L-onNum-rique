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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php */
class __TwigTemplate_ca12f1638f419e8cc8dfcbd6fc243ffa162c23369475039b79ac343070f9e371 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php"));

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
 * Description of AnnotationException
 *
 * @since  2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class AnnotationException extends \\Exception
{
    /**
     * Creates a new AnnotationException describing a Syntax error.
     *
     * @param string \$message Exception message
     *
     * @return AnnotationException
     */
    public static function syntaxError(\$message)
    {
        return new self('[Syntax Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a Semantical error.
     *
     * @param string \$message Exception message
     *
     * @return AnnotationException
     */
    public static function semanticalError(\$message)
    {
        return new self('[Semantical Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing an error which occurred during
     * the creation of the annotation.
     *
     * @since 2.2
     *
     * @param string \$message
     *
     * @return AnnotationException
     */
    public static function creationError(\$message)
    {
        return new self('[Creation Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a type error.
     *
     * @since 1.1
     *
     * @param string \$message
     *
     * @return AnnotationException
     */
    public static function typeError(\$message)
    {
        return new self('[Type Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a constant semantical error.
     *
     * @since 2.3
     *
     * @param string \$identifier
     * @param string \$context
     *
     * @return AnnotationException
     */
    public static function semanticalErrorConstants(\$identifier, \$context = null)
    {
        return self::semanticalError(sprintf(
            \"Couldn't find constant %s%s.\",
            \$identifier,
            \$context ? ', ' . \$context : ''
        ));
    }

    /**
     * Creates a new AnnotationException describing an type error of an attribute.
     *
     * @since 2.2
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param string \$expected
     * @param mixed  \$actual
     *
     * @return AnnotationException
     */
    public static function attributeTypeError(\$attributeName, \$annotationName, \$context, \$expected, \$actual)
    {
        return self::typeError(sprintf(
            'Attribute \"%s\" of @%s declared on %s expects %s, but got %s.',
            \$attributeName,
            \$annotationName,
            \$context,
            \$expected,
            is_object(\$actual) ? 'an instance of ' . get_class(\$actual) : gettype(\$actual)
        ));
    }

    /**
     * Creates a new AnnotationException describing an required error of an attribute.
     *
     * @since 2.2
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param string \$expected
     *
     * @return AnnotationException
     */
    public static function requiredError(\$attributeName, \$annotationName, \$context, \$expected)
    {
        return self::typeError(sprintf(
            'Attribute \"%s\" of @%s declared on %s expects %s. This value should not be null.',
            \$attributeName,
            \$annotationName,
            \$context,
            \$expected
        ));
    }

    /**
     * Creates a new AnnotationException describing a invalid enummerator.
     *
     * @since 2.4
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param array  \$available
     * @param mixed  \$given
     *
     * @return AnnotationException
     */
    public static function enumeratorError(\$attributeName, \$annotationName, \$context, \$available, \$given)
    {
        return new self(sprintf(
            '[Enum Error] Attribute \"%s\" of @%s declared on %s accept only [%s], but got %s.',
            \$attributeName, 
            \$annotationName,
            \$context,
            implode(', ', \$available),
            is_object(\$given) ? get_class(\$given) : \$given
        ));
    }

    /**
     * @return AnnotationException
     */
    public static function optimizerPlusSaveComments()
    {
        return new self(
            \"You have to enable opcache.save_comments=1 or zend_optimizerplus.save_comments=1.\"
        );
    }

    /**
     * @return AnnotationException
     */
    public static function optimizerPlusLoadComments()
    {
        return new self(
            \"You have to enable opcache.load_comments=1 or zend_optimizerplus.load_comments=1.\"
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php";
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
 * Description of AnnotationException
 *
 * @since  2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class AnnotationException extends \\Exception
{
    /**
     * Creates a new AnnotationException describing a Syntax error.
     *
     * @param string \$message Exception message
     *
     * @return AnnotationException
     */
    public static function syntaxError(\$message)
    {
        return new self('[Syntax Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a Semantical error.
     *
     * @param string \$message Exception message
     *
     * @return AnnotationException
     */
    public static function semanticalError(\$message)
    {
        return new self('[Semantical Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing an error which occurred during
     * the creation of the annotation.
     *
     * @since 2.2
     *
     * @param string \$message
     *
     * @return AnnotationException
     */
    public static function creationError(\$message)
    {
        return new self('[Creation Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a type error.
     *
     * @since 1.1
     *
     * @param string \$message
     *
     * @return AnnotationException
     */
    public static function typeError(\$message)
    {
        return new self('[Type Error] ' . \$message);
    }

    /**
     * Creates a new AnnotationException describing a constant semantical error.
     *
     * @since 2.3
     *
     * @param string \$identifier
     * @param string \$context
     *
     * @return AnnotationException
     */
    public static function semanticalErrorConstants(\$identifier, \$context = null)
    {
        return self::semanticalError(sprintf(
            \"Couldn't find constant %s%s.\",
            \$identifier,
            \$context ? ', ' . \$context : ''
        ));
    }

    /**
     * Creates a new AnnotationException describing an type error of an attribute.
     *
     * @since 2.2
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param string \$expected
     * @param mixed  \$actual
     *
     * @return AnnotationException
     */
    public static function attributeTypeError(\$attributeName, \$annotationName, \$context, \$expected, \$actual)
    {
        return self::typeError(sprintf(
            'Attribute \"%s\" of @%s declared on %s expects %s, but got %s.',
            \$attributeName,
            \$annotationName,
            \$context,
            \$expected,
            is_object(\$actual) ? 'an instance of ' . get_class(\$actual) : gettype(\$actual)
        ));
    }

    /**
     * Creates a new AnnotationException describing an required error of an attribute.
     *
     * @since 2.2
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param string \$expected
     *
     * @return AnnotationException
     */
    public static function requiredError(\$attributeName, \$annotationName, \$context, \$expected)
    {
        return self::typeError(sprintf(
            'Attribute \"%s\" of @%s declared on %s expects %s. This value should not be null.',
            \$attributeName,
            \$annotationName,
            \$context,
            \$expected
        ));
    }

    /**
     * Creates a new AnnotationException describing a invalid enummerator.
     *
     * @since 2.4
     *
     * @param string \$attributeName
     * @param string \$annotationName
     * @param string \$context
     * @param array  \$available
     * @param mixed  \$given
     *
     * @return AnnotationException
     */
    public static function enumeratorError(\$attributeName, \$annotationName, \$context, \$available, \$given)
    {
        return new self(sprintf(
            '[Enum Error] Attribute \"%s\" of @%s declared on %s accept only [%s], but got %s.',
            \$attributeName, 
            \$annotationName,
            \$context,
            implode(', ', \$available),
            is_object(\$given) ? get_class(\$given) : \$given
        ));
    }

    /**
     * @return AnnotationException
     */
    public static function optimizerPlusSaveComments()
    {
        return new self(
            \"You have to enable opcache.save_comments=1 or zend_optimizerplus.save_comments=1.\"
        );
    }

    /**
     * @return AnnotationException
     */
    public static function optimizerPlusLoadComments()
    {
        return new self(
            \"You have to enable opcache.load_comments=1 or zend_optimizerplus.load_comments=1.\"
        );
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php");
    }
}
