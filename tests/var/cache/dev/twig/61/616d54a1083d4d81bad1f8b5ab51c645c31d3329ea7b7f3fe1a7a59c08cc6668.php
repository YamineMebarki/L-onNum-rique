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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php */
class __TwigTemplate_40ce5aeae4a3fbae1cea9bb01c9cd8cb6239b04a91b5ecd7ff90cb9a026fcfea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php"));

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

namespace Doctrine\\ORM\\Query\\Filter;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\ParameterTypeInferer;

/**
 * The base class that user defined filters should extend.
 *
 * Handles the setting and escaping of parameters.
 *
 * @author Alexander <iam.asm89@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @abstract
 */
abstract class SQLFilter
{
    /**
     * The entity manager.
     *
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * Parameters for the filter.
     *
     * @var array
     */
    private \$parameters = [];

    /**
     * Constructs the SQLFilter object.
     *
     * @param EntityManagerInterface \$em The entity manager.
     */
    final public function __construct(EntityManagerInterface \$em)
    {
        \$this->em = \$em;
    }

    /**
     * Sets a parameter that can be used by the filter.
     *
     * @param string      \$name  Name of the parameter.
     * @param string      \$value Value of the parameter.
     * @param string|null \$type  The parameter type. If specified, the given value will be run through
     *                           the type conversion of this type. This is usually not needed for
     *                           strings and numeric types.
     *
     * @return SQLFilter The current SQL filter.
     */
    final public function setParameter(\$name, \$value, \$type = null)
    {
        if (null === \$type) {
            \$type = ParameterTypeInferer::inferType(\$value);
        }

        \$this->parameters[\$name] = ['value' => \$value, 'type' => \$type];

        // Keep the parameters sorted for the hash
        ksort(\$this->parameters);

        // The filter collection of the EM is now dirty
        \$this->em->getFilters()->setFiltersStateDirty();

        return \$this;
    }

    /**
     * Gets a parameter to use in a query.
     *
     * The function is responsible for the right output escaping to use the
     * value in a query.
     *
     * @param string \$name Name of the parameter.
     *
     * @return string The SQL escaped parameter to use in a query.
     *
     * @throws \\InvalidArgumentException
     */
    final public function getParameter(\$name)
    {
        if (!isset(\$this->parameters[\$name])) {
            throw new \\InvalidArgumentException(\"Parameter '\" . \$name . \"' does not exist.\");
        }

        return \$this->em->getConnection()->quote(\$this->parameters[\$name]['value'], \$this->parameters[\$name]['type']);
    }

    /**
     * Checks if a parameter was set for the filter.
     *
     * @param string \$name Name of the parameter.
     *
     * @return boolean
     */
    final public function hasParameter(\$name)
    {
        if (!isset(\$this->parameters[\$name])) {
            return false;
        }

        return true;
    }

    /**
     * Returns as string representation of the SQLFilter parameters (the state).
     *
     * @return string String representation of the SQLFilter.
     */
    final public function __toString()
    {
        return serialize(\$this->parameters);
    }

    /**
     * Returns the database connection used by the entity manager
     *
     * @return \\Doctrine\\DBAL\\Connection
     */
    final protected function getConnection()
    {
        return \$this->em->getConnection();
    }

    /**
     * Gets the SQL query part to add to a query.
     *
     * @param ClassMetaData \$targetEntity
     * @param string        \$targetTableAlias
     *
     * @return string The constraint SQL if there is available, empty string otherwise.
     */
    abstract public function addFilterConstraint(ClassMetadata \$targetEntity, \$targetTableAlias);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php";
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

namespace Doctrine\\ORM\\Query\\Filter;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\ParameterTypeInferer;

/**
 * The base class that user defined filters should extend.
 *
 * Handles the setting and escaping of parameters.
 *
 * @author Alexander <iam.asm89@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @abstract
 */
abstract class SQLFilter
{
    /**
     * The entity manager.
     *
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * Parameters for the filter.
     *
     * @var array
     */
    private \$parameters = [];

    /**
     * Constructs the SQLFilter object.
     *
     * @param EntityManagerInterface \$em The entity manager.
     */
    final public function __construct(EntityManagerInterface \$em)
    {
        \$this->em = \$em;
    }

    /**
     * Sets a parameter that can be used by the filter.
     *
     * @param string      \$name  Name of the parameter.
     * @param string      \$value Value of the parameter.
     * @param string|null \$type  The parameter type. If specified, the given value will be run through
     *                           the type conversion of this type. This is usually not needed for
     *                           strings and numeric types.
     *
     * @return SQLFilter The current SQL filter.
     */
    final public function setParameter(\$name, \$value, \$type = null)
    {
        if (null === \$type) {
            \$type = ParameterTypeInferer::inferType(\$value);
        }

        \$this->parameters[\$name] = ['value' => \$value, 'type' => \$type];

        // Keep the parameters sorted for the hash
        ksort(\$this->parameters);

        // The filter collection of the EM is now dirty
        \$this->em->getFilters()->setFiltersStateDirty();

        return \$this;
    }

    /**
     * Gets a parameter to use in a query.
     *
     * The function is responsible for the right output escaping to use the
     * value in a query.
     *
     * @param string \$name Name of the parameter.
     *
     * @return string The SQL escaped parameter to use in a query.
     *
     * @throws \\InvalidArgumentException
     */
    final public function getParameter(\$name)
    {
        if (!isset(\$this->parameters[\$name])) {
            throw new \\InvalidArgumentException(\"Parameter '\" . \$name . \"' does not exist.\");
        }

        return \$this->em->getConnection()->quote(\$this->parameters[\$name]['value'], \$this->parameters[\$name]['type']);
    }

    /**
     * Checks if a parameter was set for the filter.
     *
     * @param string \$name Name of the parameter.
     *
     * @return boolean
     */
    final public function hasParameter(\$name)
    {
        if (!isset(\$this->parameters[\$name])) {
            return false;
        }

        return true;
    }

    /**
     * Returns as string representation of the SQLFilter parameters (the state).
     *
     * @return string String representation of the SQLFilter.
     */
    final public function __toString()
    {
        return serialize(\$this->parameters);
    }

    /**
     * Returns the database connection used by the entity manager
     *
     * @return \\Doctrine\\DBAL\\Connection
     */
    final protected function getConnection()
    {
        return \$this->em->getConnection();
    }

    /**
     * Gets the SQL query part to add to a query.
     *
     * @param ClassMetaData \$targetEntity
     * @param string        \$targetTableAlias
     *
     * @return string The constraint SQL if there is available, empty string otherwise.
     */
    abstract public function addFilterConstraint(ClassMetadata \$targetEntity, \$targetTableAlias);
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php");
    }
}
