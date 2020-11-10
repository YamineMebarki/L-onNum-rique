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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php */
class __TwigTemplate_2efc56f398f70de3779a8e9f01d067b42cd15ce9f877b53c0624c24299adb52c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php"));

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
 * Interface for annotation readers.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface Reader
{
    /**
     * Gets the annotations applied to a class.
     *
     * @param \\ReflectionClass \$class The ReflectionClass of the class from which
     *                                the class annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getClassAnnotations(\\ReflectionClass \$class);

    /**
     * Gets a class annotation.
     *
     * @param \\ReflectionClass \$class          The ReflectionClass of the class from which
     *                                         the class annotations should be read.
     * @param string           \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getClassAnnotation(\\ReflectionClass \$class, \$annotationName);

    /**
     * Gets the annotations applied to a method.
     *
     * @param \\ReflectionMethod \$method The ReflectionMethod of the method from which
     *                                  the annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getMethodAnnotations(\\ReflectionMethod \$method);

    /**
     * Gets a method annotation.
     *
     * @param \\ReflectionMethod \$method         The ReflectionMethod to read the annotations from.
     * @param string            \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName);

    /**
     * Gets the annotations applied to a property.
     *
     * @param \\ReflectionProperty \$property The ReflectionProperty of the property
     *                                      from which the annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getPropertyAnnotations(\\ReflectionProperty \$property);

    /**
     * Gets a property annotation.
     *
     * @param \\ReflectionProperty \$property       The ReflectionProperty to read the annotations from.
     * @param string              \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php";
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
 * Interface for annotation readers.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface Reader
{
    /**
     * Gets the annotations applied to a class.
     *
     * @param \\ReflectionClass \$class The ReflectionClass of the class from which
     *                                the class annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getClassAnnotations(\\ReflectionClass \$class);

    /**
     * Gets a class annotation.
     *
     * @param \\ReflectionClass \$class          The ReflectionClass of the class from which
     *                                         the class annotations should be read.
     * @param string           \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getClassAnnotation(\\ReflectionClass \$class, \$annotationName);

    /**
     * Gets the annotations applied to a method.
     *
     * @param \\ReflectionMethod \$method The ReflectionMethod of the method from which
     *                                  the annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getMethodAnnotations(\\ReflectionMethod \$method);

    /**
     * Gets a method annotation.
     *
     * @param \\ReflectionMethod \$method         The ReflectionMethod to read the annotations from.
     * @param string            \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName);

    /**
     * Gets the annotations applied to a property.
     *
     * @param \\ReflectionProperty \$property The ReflectionProperty of the property
     *                                      from which the annotations should be read.
     *
     * @return array An array of Annotations.
     */
    function getPropertyAnnotations(\\ReflectionProperty \$property);

    /**
     * Gets a property annotation.
     *
     * @param \\ReflectionProperty \$property       The ReflectionProperty to read the annotations from.
     * @param string              \$annotationName The name of the annotation.
     *
     * @return object|null The Annotation or NULL, if the requested annotation does not exist.
     */
    function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName);
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php");
    }
}
