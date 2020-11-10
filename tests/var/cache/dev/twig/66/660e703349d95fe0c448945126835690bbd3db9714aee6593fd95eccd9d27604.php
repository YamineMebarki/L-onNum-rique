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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php */
class __TwigTemplate_7a78429d9864645f43f1b36d5f32b1fd063ca0920a91494b9a600935e53f29bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php"));

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
 * Expression class for DQL join.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class Join
{
    const INNER_JOIN    = 'INNER';
    const LEFT_JOIN     = 'LEFT';

    const ON            = 'ON';
    const WITH          = 'WITH';

    /**
     * @var string
     */
    protected \$joinType;

    /**
     * @var string
     */
    protected \$join;

    /**
     * @var string
     */
    protected \$alias;

    /**
     * @var string
     */
    protected \$conditionType;

    /**
     * @var string
     */
    protected \$condition;

    /**
     * @var string
     */
    protected \$indexBy;

    /**
     * @param string      \$joinType      The condition type constant. Either INNER_JOIN or LEFT_JOIN.
     * @param string      \$join          The relationship to join.
     * @param string|null \$alias         The alias of the join.
     * @param string|null \$conditionType The condition type constant. Either ON or WITH.
     * @param string|null \$condition     The condition for the join.
     * @param string|null \$indexBy       The index for the join.
     */
    public function __construct(\$joinType, \$join, \$alias = null, \$conditionType = null, \$condition = null, \$indexBy = null)
    {
        \$this->joinType       = \$joinType;
        \$this->join           = \$join;
        \$this->alias          = \$alias;
        \$this->conditionType  = \$conditionType;
        \$this->condition      = \$condition;
        \$this->indexBy        = \$indexBy;
    }

    /**
     * @return string 
     */
    public function getJoinType()
    {
        return \$this->joinType;
    }

    /**
     * @return string
     */
    public function getJoin()
    {
        return \$this->join;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * @return string
     */
    public function getConditionType()
    {
        return \$this->conditionType;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return \$this->condition;
    }

    /**
     * @return string
     */
    public function getIndexBy()
    {
        return \$this->indexBy;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return strtoupper(\$this->joinType) . ' JOIN ' . \$this->join
             . (\$this->alias ? ' ' . \$this->alias : '')
             . (\$this->indexBy ? ' INDEX BY ' . \$this->indexBy : '')
             . (\$this->condition ? ' ' . strtoupper(\$this->conditionType) . ' ' . \$this->condition : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php";
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
 * Expression class for DQL join.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class Join
{
    const INNER_JOIN    = 'INNER';
    const LEFT_JOIN     = 'LEFT';

    const ON            = 'ON';
    const WITH          = 'WITH';

    /**
     * @var string
     */
    protected \$joinType;

    /**
     * @var string
     */
    protected \$join;

    /**
     * @var string
     */
    protected \$alias;

    /**
     * @var string
     */
    protected \$conditionType;

    /**
     * @var string
     */
    protected \$condition;

    /**
     * @var string
     */
    protected \$indexBy;

    /**
     * @param string      \$joinType      The condition type constant. Either INNER_JOIN or LEFT_JOIN.
     * @param string      \$join          The relationship to join.
     * @param string|null \$alias         The alias of the join.
     * @param string|null \$conditionType The condition type constant. Either ON or WITH.
     * @param string|null \$condition     The condition for the join.
     * @param string|null \$indexBy       The index for the join.
     */
    public function __construct(\$joinType, \$join, \$alias = null, \$conditionType = null, \$condition = null, \$indexBy = null)
    {
        \$this->joinType       = \$joinType;
        \$this->join           = \$join;
        \$this->alias          = \$alias;
        \$this->conditionType  = \$conditionType;
        \$this->condition      = \$condition;
        \$this->indexBy        = \$indexBy;
    }

    /**
     * @return string 
     */
    public function getJoinType()
    {
        return \$this->joinType;
    }

    /**
     * @return string
     */
    public function getJoin()
    {
        return \$this->join;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * @return string
     */
    public function getConditionType()
    {
        return \$this->conditionType;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return \$this->condition;
    }

    /**
     * @return string
     */
    public function getIndexBy()
    {
        return \$this->indexBy;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return strtoupper(\$this->joinType) . ' JOIN ' . \$this->join
             . (\$this->alias ? ' ' . \$this->alias : '')
             . (\$this->indexBy ? ' INDEX BY ' . \$this->indexBy : '')
             . (\$this->condition ? ' ' . strtoupper(\$this->conditionType) . ' ' . \$this->condition : '');
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php");
    }
}
