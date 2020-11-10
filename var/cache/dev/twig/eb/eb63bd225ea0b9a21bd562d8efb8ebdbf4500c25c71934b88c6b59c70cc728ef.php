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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php */
class __TwigTemplate_d5e4d13d8d4e23865b738f9f4afc1b094eb610c045f25fb24e309e352441b9d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php"));

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

namespace Doctrine\\ORM\\Query\\Expr;

/**
 * Abstract base Expr class for building DQL parts.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
abstract class Base
{
    /**
     * @var string
     */
    protected \$preSeparator = '(';

    /**
     * @var string
     */
    protected \$separator = ', ';

    /**
     * @var string
     */
    protected \$postSeparator = ')';

    /**
     * @var array
     */
    protected \$allowedClasses = [];

    /**
     * @var array
     */
    protected \$parts = [];

    /**
     * @param mixed \$args
     */
    public function __construct(\$args = [])
    {
        \$this->addMultiple(\$args);
    }

    /**
     * @param array \$args
     *
     * @return Base
     */
    public function addMultiple(\$args = [])
    {
        foreach ((array) \$args as \$arg) {
            \$this->add(\$arg);
        }

        return \$this;
    }

    /**
     * @param mixed \$arg
     *
     * @return Base
     *
     * @throws \\InvalidArgumentException
     */
    public function add(\$arg)
    {
        if ( \$arg !== null && (!\$arg instanceof self || \$arg->count() > 0) ) {
            // If we decide to keep Expr\\Base instances, we can use this check
            if ( ! is_string(\$arg)) {
                \$class = get_class(\$arg);

                if ( ! in_array(\$class, \$this->allowedClasses)) {
                    throw new \\InvalidArgumentException(\"Expression of type '\$class' not allowed in this context.\");
                }
            }

            \$this->parts[] = \$arg;
        }

        return \$this;
    }

    /**
     * @return integer
     */
    public function count()
    {
        return count(\$this->parts);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (\$this->count() == 1) {
            return (string) \$this->parts[0];
        }

        return \$this->preSeparator . implode(\$this->separator, \$this->parts) . \$this->postSeparator;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php";
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

namespace Doctrine\\ORM\\Query\\Expr;

/**
 * Abstract base Expr class for building DQL parts.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
abstract class Base
{
    /**
     * @var string
     */
    protected \$preSeparator = '(';

    /**
     * @var string
     */
    protected \$separator = ', ';

    /**
     * @var string
     */
    protected \$postSeparator = ')';

    /**
     * @var array
     */
    protected \$allowedClasses = [];

    /**
     * @var array
     */
    protected \$parts = [];

    /**
     * @param mixed \$args
     */
    public function __construct(\$args = [])
    {
        \$this->addMultiple(\$args);
    }

    /**
     * @param array \$args
     *
     * @return Base
     */
    public function addMultiple(\$args = [])
    {
        foreach ((array) \$args as \$arg) {
            \$this->add(\$arg);
        }

        return \$this;
    }

    /**
     * @param mixed \$arg
     *
     * @return Base
     *
     * @throws \\InvalidArgumentException
     */
    public function add(\$arg)
    {
        if ( \$arg !== null && (!\$arg instanceof self || \$arg->count() > 0) ) {
            // If we decide to keep Expr\\Base instances, we can use this check
            if ( ! is_string(\$arg)) {
                \$class = get_class(\$arg);

                if ( ! in_array(\$class, \$this->allowedClasses)) {
                    throw new \\InvalidArgumentException(\"Expression of type '\$class' not allowed in this context.\");
                }
            }

            \$this->parts[] = \$arg;
        }

        return \$this;
    }

    /**
     * @return integer
     */
    public function count()
    {
        return count(\$this->parts);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (\$this->count() == 1) {
            return (string) \$this->parts[0];
        }

        return \$this->preSeparator . implode(\$this->separator, \$this->parts) . \$this->postSeparator;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php");
    }
}
