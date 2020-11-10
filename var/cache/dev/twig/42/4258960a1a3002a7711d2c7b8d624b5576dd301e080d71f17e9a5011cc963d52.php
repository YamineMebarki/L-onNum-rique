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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php */
class __TwigTemplate_0ebbec129b5c5ce4f6064298ba34d2d3e324574f9b597d84b63363e080b9b289 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php"));

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

namespace Doctrine\\ORM\\Persisters\\Entity;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Types\\Type;

/**
 * Base class for entity persisters that implement a certain inheritance mapping strategy.
 * All these persisters are assumed to use a discriminator column to discriminate entity
 * types in the hierarchy.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.0
 */
abstract class AbstractEntityInheritancePersister extends BasicEntityPersister
{
    /**
     * {@inheritdoc}
     */
    protected function prepareInsertData(\$entity)
    {
        \$data = parent::prepareInsertData(\$entity);

        // Populate the discriminator column
        \$discColumn = \$this->class->discriminatorColumn;
        \$this->columnTypes[\$discColumn['name']] = \$discColumn['type'];
        \$data[\$this->getDiscriminatorColumnTableName()][\$discColumn['name']] = \$this->class->discriminatorValue;

        return \$data;
    }

    /**
     * Gets the name of the table that contains the discriminator column.
     *
     * @return string The table name.
     */
    abstract protected function getDiscriminatorColumnTableName();

    /**
     * {@inheritdoc}
     */
    protected function getSelectColumnSQL(\$field, ClassMetadata \$class, \$alias = 'r')
    {
        \$tableAlias   = \$alias == 'r' ? '' : \$alias;
        \$fieldMapping = \$class->fieldMappings[\$field];
        \$columnAlias  = \$this->getSQLColumnAlias(\$fieldMapping['columnName']);
        \$sql          = sprintf(
            '%s.%s',
            \$this->getSQLTableAlias(\$class->name, \$tableAlias),
            \$this->quoteStrategy->getColumnName(\$field, \$class, \$this->platform)
        );

        \$this->currentPersisterContext->rsm->addFieldResult(\$alias, \$columnAlias, \$field, \$class->name);

        if (isset(\$fieldMapping['requireSQLConversion'])) {
            \$type   = Type::getType(\$fieldMapping['type']);
            \$sql    = \$type->convertToPHPValueSQL(\$sql, \$this->platform);
        }

        return \$sql . ' AS ' . \$columnAlias;
    }

    /**
     * @param string \$tableAlias
     * @param string \$joinColumnName
     * @param string \$quotedColumnName
     *
     * @param string \$type
     *
     * @return string
     */
    protected function getSelectJoinColumnSQL(\$tableAlias, \$joinColumnName, \$quotedColumnName, \$type)
    {
        \$columnAlias = \$this->getSQLColumnAlias(\$joinColumnName);

        \$this->currentPersisterContext->rsm->addMetaResult('r', \$columnAlias, \$joinColumnName, false, \$type);

        return \$tableAlias . '.' . \$quotedColumnName . ' AS ' . \$columnAlias;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php";
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

namespace Doctrine\\ORM\\Persisters\\Entity;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Types\\Type;

/**
 * Base class for entity persisters that implement a certain inheritance mapping strategy.
 * All these persisters are assumed to use a discriminator column to discriminate entity
 * types in the hierarchy.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.0
 */
abstract class AbstractEntityInheritancePersister extends BasicEntityPersister
{
    /**
     * {@inheritdoc}
     */
    protected function prepareInsertData(\$entity)
    {
        \$data = parent::prepareInsertData(\$entity);

        // Populate the discriminator column
        \$discColumn = \$this->class->discriminatorColumn;
        \$this->columnTypes[\$discColumn['name']] = \$discColumn['type'];
        \$data[\$this->getDiscriminatorColumnTableName()][\$discColumn['name']] = \$this->class->discriminatorValue;

        return \$data;
    }

    /**
     * Gets the name of the table that contains the discriminator column.
     *
     * @return string The table name.
     */
    abstract protected function getDiscriminatorColumnTableName();

    /**
     * {@inheritdoc}
     */
    protected function getSelectColumnSQL(\$field, ClassMetadata \$class, \$alias = 'r')
    {
        \$tableAlias   = \$alias == 'r' ? '' : \$alias;
        \$fieldMapping = \$class->fieldMappings[\$field];
        \$columnAlias  = \$this->getSQLColumnAlias(\$fieldMapping['columnName']);
        \$sql          = sprintf(
            '%s.%s',
            \$this->getSQLTableAlias(\$class->name, \$tableAlias),
            \$this->quoteStrategy->getColumnName(\$field, \$class, \$this->platform)
        );

        \$this->currentPersisterContext->rsm->addFieldResult(\$alias, \$columnAlias, \$field, \$class->name);

        if (isset(\$fieldMapping['requireSQLConversion'])) {
            \$type   = Type::getType(\$fieldMapping['type']);
            \$sql    = \$type->convertToPHPValueSQL(\$sql, \$this->platform);
        }

        return \$sql . ' AS ' . \$columnAlias;
    }

    /**
     * @param string \$tableAlias
     * @param string \$joinColumnName
     * @param string \$quotedColumnName
     *
     * @param string \$type
     *
     * @return string
     */
    protected function getSelectJoinColumnSQL(\$tableAlias, \$joinColumnName, \$quotedColumnName, \$type)
    {
        \$columnAlias = \$this->getSQLColumnAlias(\$joinColumnName);

        \$this->currentPersisterContext->rsm->addMetaResult('r', \$columnAlias, \$joinColumnName, false, \$type);

        return \$tableAlias . '.' . \$quotedColumnName . ' AS ' . \$columnAlias;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php");
    }
}
