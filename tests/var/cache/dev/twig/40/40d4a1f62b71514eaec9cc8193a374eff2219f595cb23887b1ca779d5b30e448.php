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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php */
class __TwigTemplate_3a438d82eaf10830eedc1308135e0bc1fb8daa9b85f7cf79203729d52d4e44b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php"));

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

namespace Doctrine\\ORM\\Persisters;

use Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor;
use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\Value;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;

/**
 * Extract the values from a criteria/expression
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class SqlValueVisitor extends ExpressionVisitor
{
    /**
     * @var array
     */
    private \$values = [];

    /**
     * @var array
     */
    private \$types  = [];

    /**
     * Converts a comparison expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     *
     * @return void
     */
    public function walkComparison(Comparison \$comparison)
    {
        \$value    = \$this->getValueFromComparison(\$comparison);
        \$field    = \$comparison->getField();
        \$operator = \$comparison->getOperator();

        if ((\$operator === Comparison::EQ || \$operator === Comparison::IS) && \$value === null) {
            return;
        } else if (\$operator === Comparison::NEQ && \$value === null) {
            return;
        }

        \$this->values[] = \$value;
        \$this->types[]  = [\$field, \$value, \$operator];
    }

    /**
     * Converts a composite expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\CompositeExpression \$expr
     *
     * @return void
     */
    public function walkCompositeExpression(CompositeExpression \$expr)
    {
        foreach (\$expr->getExpressionList() as \$child) {
            \$this->dispatch(\$child);
        }
    }

    /**
     * Converts a value expression into the target query language part.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Value \$value
     *
     * @return mixed
     */
    public function walkValue(Value \$value)
    {
        return;
    }

    /**
     * Returns the Parameters and Types necessary for matching the last visited expression.
     *
     * @return array
     */
    public function getParamsAndTypes()
    {
        return [\$this->values, \$this->types];
    }

    /**
     * Returns the value from a Comparison. In case of a CONTAINS comparison,
     * the value is wrapped in %-signs, because it will be used in a LIKE clause.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     * @return mixed
     */
    protected function getValueFromComparison(Comparison \$comparison)
    {
        \$value = \$comparison->getValue()->getValue();

        switch (\$comparison->getOperator()) {
            case Comparison::CONTAINS:
                return \"%{\$value}%\";

            case Comparison::STARTS_WITH:
                return \"{\$value}%\";

            case Comparison::ENDS_WITH:
                return \"%{\$value}\";

            default:
                return \$value;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php";
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

namespace Doctrine\\ORM\\Persisters;

use Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor;
use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\Value;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;

/**
 * Extract the values from a criteria/expression
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class SqlValueVisitor extends ExpressionVisitor
{
    /**
     * @var array
     */
    private \$values = [];

    /**
     * @var array
     */
    private \$types  = [];

    /**
     * Converts a comparison expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     *
     * @return void
     */
    public function walkComparison(Comparison \$comparison)
    {
        \$value    = \$this->getValueFromComparison(\$comparison);
        \$field    = \$comparison->getField();
        \$operator = \$comparison->getOperator();

        if ((\$operator === Comparison::EQ || \$operator === Comparison::IS) && \$value === null) {
            return;
        } else if (\$operator === Comparison::NEQ && \$value === null) {
            return;
        }

        \$this->values[] = \$value;
        \$this->types[]  = [\$field, \$value, \$operator];
    }

    /**
     * Converts a composite expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\CompositeExpression \$expr
     *
     * @return void
     */
    public function walkCompositeExpression(CompositeExpression \$expr)
    {
        foreach (\$expr->getExpressionList() as \$child) {
            \$this->dispatch(\$child);
        }
    }

    /**
     * Converts a value expression into the target query language part.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Value \$value
     *
     * @return mixed
     */
    public function walkValue(Value \$value)
    {
        return;
    }

    /**
     * Returns the Parameters and Types necessary for matching the last visited expression.
     *
     * @return array
     */
    public function getParamsAndTypes()
    {
        return [\$this->values, \$this->types];
    }

    /**
     * Returns the value from a Comparison. In case of a CONTAINS comparison,
     * the value is wrapped in %-signs, because it will be used in a LIKE clause.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     * @return mixed
     */
    protected function getValueFromComparison(Comparison \$comparison)
    {
        \$value = \$comparison->getValue()->getValue();

        switch (\$comparison->getOperator()) {
            case Comparison::CONTAINS:
                return \"%{\$value}%\";

            case Comparison::STARTS_WITH:
                return \"{\$value}%\";

            case Comparison::ENDS_WITH:
                return \"%{\$value}\";

            default:
                return \$value;
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php");
    }
}
