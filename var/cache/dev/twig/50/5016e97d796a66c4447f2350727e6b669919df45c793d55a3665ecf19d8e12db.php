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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php */
class __TwigTemplate_2f6701842842f15878f8255c4cfabdddb27b9277a2b39bc19e1a15e89e1dc29a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php"));

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

/**
 * \"SUBSTRING\" \"(\" StringPrimary \",\" SimpleArithmeticExpression \",\" SimpleArithmeticExpression \")\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class SubstringFunction extends FunctionNode
{
    public \$stringPrimary;

    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression
     */
    public \$firstSimpleArithmeticExpression;

    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression|null
     */
    public \$secondSimpleArithmeticExpression = null;

    /**
     * @override
     * @inheritdoc
     */
    public function getSql(\\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker)
    {
        \$optionalSecondSimpleArithmeticExpression = null;
        if (\$this->secondSimpleArithmeticExpression !== null) {
            \$optionalSecondSimpleArithmeticExpression = \$sqlWalker->walkSimpleArithmeticExpression(\$this->secondSimpleArithmeticExpression);
        }

        return \$sqlWalker->getConnection()->getDatabasePlatform()->getSubstringExpression(
            \$sqlWalker->walkStringPrimary(\$this->stringPrimary),
            \$sqlWalker->walkSimpleArithmeticExpression(\$this->firstSimpleArithmeticExpression),
            \$optionalSecondSimpleArithmeticExpression
        );
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(\\Doctrine\\ORM\\Query\\Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->stringPrimary = \$parser->StringPrimary();

        \$parser->match(Lexer::T_COMMA);

        \$this->firstSimpleArithmeticExpression = \$parser->SimpleArithmeticExpression();

        \$lexer = \$parser->getLexer();
        if (\$lexer->isNextToken(Lexer::T_COMMA)) {
            \$parser->match(Lexer::T_COMMA);

            \$this->secondSimpleArithmeticExpression = \$parser->SimpleArithmeticExpression();
        }

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php";
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

/**
 * \"SUBSTRING\" \"(\" StringPrimary \",\" SimpleArithmeticExpression \",\" SimpleArithmeticExpression \")\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class SubstringFunction extends FunctionNode
{
    public \$stringPrimary;

    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression
     */
    public \$firstSimpleArithmeticExpression;

    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression|null
     */
    public \$secondSimpleArithmeticExpression = null;

    /**
     * @override
     * @inheritdoc
     */
    public function getSql(\\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker)
    {
        \$optionalSecondSimpleArithmeticExpression = null;
        if (\$this->secondSimpleArithmeticExpression !== null) {
            \$optionalSecondSimpleArithmeticExpression = \$sqlWalker->walkSimpleArithmeticExpression(\$this->secondSimpleArithmeticExpression);
        }

        return \$sqlWalker->getConnection()->getDatabasePlatform()->getSubstringExpression(
            \$sqlWalker->walkStringPrimary(\$this->stringPrimary),
            \$sqlWalker->walkSimpleArithmeticExpression(\$this->firstSimpleArithmeticExpression),
            \$optionalSecondSimpleArithmeticExpression
        );
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(\\Doctrine\\ORM\\Query\\Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->stringPrimary = \$parser->StringPrimary();

        \$parser->match(Lexer::T_COMMA);

        \$this->firstSimpleArithmeticExpression = \$parser->SimpleArithmeticExpression();

        \$lexer = \$parser->getLexer();
        if (\$lexer->isNextToken(Lexer::T_COMMA)) {
            \$parser->match(Lexer::T_COMMA);

            \$this->secondSimpleArithmeticExpression = \$parser->SimpleArithmeticExpression();
        }

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php");
    }
}
