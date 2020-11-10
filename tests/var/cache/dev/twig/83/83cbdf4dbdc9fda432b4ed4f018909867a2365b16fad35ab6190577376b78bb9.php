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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php */
class __TwigTemplate_a988ac36d7330112283c4cfd5c8624c7cbc6d3f7e8a393e9287a341b91ae0673 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php"));

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

namespace Doctrine\\ORM\\Mapping;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * A set of rules for determining the column, alias and table quotes.
 *
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface QuoteStrategy
{
    /**
     * Gets the (possibly quoted) column name for safe use in an SQL statement.
     *
     * @param string           \$fieldName
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getColumnName(\$fieldName, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) primary table name for safe use in an SQL statement.
     *
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getTableName(ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) sequence name for safe use in an SQL statement.
     *
     * @param array            \$definition
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getSequenceName(array \$definition, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) name of the join table.
     *
     * @param array            \$association
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getJoinTableName(array \$association, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) join column name.
     *
     * @param array            \$joinColumn
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) join column name.
     *
     * @param array            \$joinColumn
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getReferencedJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) identifier column names for safe use in an SQL statement.
     *
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return array
     */
    function getIdentifierColumnNames(ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the column alias.
     *
     * @param string             \$columnName
     * @param integer            \$counter
     * @param AbstractPlatform   \$platform
     * @param ClassMetadata|null \$class
     *
     * @return string
     */
    function getColumnAlias(\$columnName, \$counter, AbstractPlatform \$platform, ClassMetadata \$class = null);

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php";
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

namespace Doctrine\\ORM\\Mapping;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * A set of rules for determining the column, alias and table quotes.
 *
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface QuoteStrategy
{
    /**
     * Gets the (possibly quoted) column name for safe use in an SQL statement.
     *
     * @param string           \$fieldName
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getColumnName(\$fieldName, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) primary table name for safe use in an SQL statement.
     *
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getTableName(ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) sequence name for safe use in an SQL statement.
     *
     * @param array            \$definition
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getSequenceName(array \$definition, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) name of the join table.
     *
     * @param array            \$association
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getJoinTableName(array \$association, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) join column name.
     *
     * @param array            \$joinColumn
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) join column name.
     *
     * @param array            \$joinColumn
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return string
     */
    function getReferencedJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the (possibly quoted) identifier column names for safe use in an SQL statement.
     *
     * @param ClassMetadata    \$class
     * @param AbstractPlatform \$platform
     *
     * @return array
     */
    function getIdentifierColumnNames(ClassMetadata \$class, AbstractPlatform \$platform);

    /**
     * Gets the column alias.
     *
     * @param string             \$columnName
     * @param integer            \$counter
     * @param AbstractPlatform   \$platform
     * @param ClassMetadata|null \$class
     *
     * @return string
     */
    function getColumnAlias(\$columnName, \$counter, AbstractPlatform \$platform, ClassMetadata \$class = null);

}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php");
    }
}
