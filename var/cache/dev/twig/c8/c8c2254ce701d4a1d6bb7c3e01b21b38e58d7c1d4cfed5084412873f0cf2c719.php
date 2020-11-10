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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php */
class __TwigTemplate_351d2dddd2f4d07c2dff8556005efd1c3af1bba2dd3ceabed36b967872606862 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php"));

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
 * Annotations class.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class Annotation
{
    /**
     * Value property. Common among all derived classes.
     *
     * @var string
     */
    public \$value;

    /**
     * Constructor.
     *
     * @param array \$data Key-value for properties to be defined in this class.
     */
    public final function __construct(array \$data)
    {
        foreach (\$data as \$key => \$value) {
            \$this->\$key = \$value;
        }
    }

    /**
     * Error handler for unknown property accessor in Annotation class.
     *
     * @param string \$name Unknown property name.
     *
     * @throws \\BadMethodCallException
     */
    public function __get(\$name)
    {
        throw new \\BadMethodCallException(
            sprintf(\"Unknown property '%s' on annotation '%s'.\", \$name, get_class(\$this))
        );
    }

    /**
     * Error handler for unknown property mutator in Annotation class.
     *
     * @param string \$name  Unknown property name.
     * @param mixed  \$value Property value.
     *
     * @throws \\BadMethodCallException
     */
    public function __set(\$name, \$value)
    {
        throw new \\BadMethodCallException(
            sprintf(\"Unknown property '%s' on annotation '%s'.\", \$name, get_class(\$this))
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php";
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
 * Annotations class.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class Annotation
{
    /**
     * Value property. Common among all derived classes.
     *
     * @var string
     */
    public \$value;

    /**
     * Constructor.
     *
     * @param array \$data Key-value for properties to be defined in this class.
     */
    public final function __construct(array \$data)
    {
        foreach (\$data as \$key => \$value) {
            \$this->\$key = \$value;
        }
    }

    /**
     * Error handler for unknown property accessor in Annotation class.
     *
     * @param string \$name Unknown property name.
     *
     * @throws \\BadMethodCallException
     */
    public function __get(\$name)
    {
        throw new \\BadMethodCallException(
            sprintf(\"Unknown property '%s' on annotation '%s'.\", \$name, get_class(\$this))
        );
    }

    /**
     * Error handler for unknown property mutator in Annotation class.
     *
     * @param string \$name  Unknown property name.
     * @param mixed  \$value Property value.
     *
     * @throws \\BadMethodCallException
     */
    public function __set(\$name, \$value)
    {
        throw new \\BadMethodCallException(
            sprintf(\"Unknown property '%s' on annotation '%s'.\", \$name, get_class(\$this))
        );
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php");
    }
}
