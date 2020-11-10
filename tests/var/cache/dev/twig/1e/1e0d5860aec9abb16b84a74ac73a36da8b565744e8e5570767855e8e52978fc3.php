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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php */
class __TwigTemplate_ade42f15138b9d930b8c3fda7e489b21f25fce28624eb80f54088387deea5bf9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php"));

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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\Lexer;
use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\Parser;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * \"DATE_ADD\" \"(\" ArithmeticPrimary \",\" ArithmeticPrimary \",\" StringPrimary \")\"
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateAddFunction extends FunctionNode
{
    public \$firstDateExpression = null;
    public \$intervalExpression = null;
    public \$unit = null;

    /**
     * @override
     * @inheritdoc
     */
    public function getSql(SqlWalker \$sqlWalker)
    {
        switch (strtolower(\$this->unit->value)) {
            case 'second':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddSecondsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'minute':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddMinutesExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'hour':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddHourExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'day':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddDaysExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'week':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddWeeksExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'month':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddMonthExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'year':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddYearsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );

            default:
                throw QueryException::semanticalError(
                    'DATE_ADD() only supports units of type second, minute, hour, day, week, month and year.'
                );
        }
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->firstDateExpression = \$parser->ArithmeticPrimary();
        \$parser->match(Lexer::T_COMMA);
        \$this->intervalExpression = \$parser->ArithmeticPrimary();
        \$parser->match(Lexer::T_COMMA);
        \$this->unit = \$parser->StringPrimary();

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php";
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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\Lexer;
use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\Parser;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * \"DATE_ADD\" \"(\" ArithmeticPrimary \",\" ArithmeticPrimary \",\" StringPrimary \")\"
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateAddFunction extends FunctionNode
{
    public \$firstDateExpression = null;
    public \$intervalExpression = null;
    public \$unit = null;

    /**
     * @override
     * @inheritdoc
     */
    public function getSql(SqlWalker \$sqlWalker)
    {
        switch (strtolower(\$this->unit->value)) {
            case 'second':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddSecondsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'minute':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddMinutesExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'hour':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddHourExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'day':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddDaysExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'week':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddWeeksExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'month':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddMonthExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'year':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateAddYearsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );

            default:
                throw QueryException::semanticalError(
                    'DATE_ADD() only supports units of type second, minute, hour, day, week, month and year.'
                );
        }
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->firstDateExpression = \$parser->ArithmeticPrimary();
        \$parser->match(Lexer::T_COMMA);
        \$this->intervalExpression = \$parser->ArithmeticPrimary();
        \$parser->match(Lexer::T_COMMA);
        \$this->unit = \$parser->StringPrimary();

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php");
    }
}
