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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php */
class __TwigTemplate_64604685203acee41aeafa31589ac539974961c150f90795091ca2efb6029ccf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php"));

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

namespace Doctrine\\ORM\\Internal\\Hydration;

use PDO;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query;

class SimpleObjectHydrator extends AbstractHydrator
{
    /**
     * @var ClassMetadata
     */
    private \$class;

    /**
     * {@inheritdoc}
     */
    protected function prepare()
    {
        if (count(\$this->_rsm->aliasMap) !== 1) {
            throw new \\RuntimeException(\"Cannot use SimpleObjectHydrator with a ResultSetMapping that contains more than one object result.\");
        }

        if (\$this->_rsm->scalarMappings) {
            throw new \\RuntimeException(\"Cannot use SimpleObjectHydrator with a ResultSetMapping that contains scalar mappings.\");
        }

        \$this->class = \$this->getClassMetadata(reset(\$this->_rsm->aliasMap));
    }

    /**
     * {@inheritdoc}
     */
    protected function cleanup()
    {
        parent::cleanup();

        \$this->_uow->triggerEagerLoads();
        \$this->_uow->hydrationComplete();
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateAllData()
    {
        \$result = [];

        while (\$row = \$this->_stmt->fetch(PDO::FETCH_ASSOC)) {
            \$this->hydrateRowData(\$row, \$result);
        }

        \$this->_em->getUnitOfWork()->triggerEagerLoads();

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateRowData(array \$sqlResult, array &\$result)
    {
        \$entityName = \$this->class->name;
        \$data       = [];

        // We need to find the correct entity class name if we have inheritance in resultset
        if (\$this->class->inheritanceType !== ClassMetadata::INHERITANCE_TYPE_NONE) {
            \$discrColumnName = \$this->_platform->getSQLResultCasing(\$this->class->discriminatorColumn['name']);

            // Find mapped discriminator column from the result set.
            if (\$metaMappingDiscrColumnName = array_search(\$discrColumnName, \$this->_rsm->metaMappings)) {
                \$discrColumnName = \$metaMappingDiscrColumnName;
            }

            if ( ! isset(\$sqlResult[\$discrColumnName])) {
                throw HydrationException::missingDiscriminatorColumn(\$entityName, \$discrColumnName, key(\$this->_rsm->aliasMap));
            }

            if (\$sqlResult[\$discrColumnName] === '') {
                throw HydrationException::emptyDiscriminatorValue(key(\$this->_rsm->aliasMap));
            }

            \$discrMap = \$this->class->discriminatorMap;

            if ( ! isset(\$discrMap[\$sqlResult[\$discrColumnName]])) {
                throw HydrationException::invalidDiscriminatorValue(\$sqlResult[\$discrColumnName], array_keys(\$discrMap));
            }

            \$entityName = \$discrMap[\$sqlResult[\$discrColumnName]];

            unset(\$sqlResult[\$discrColumnName]);
        }

        foreach (\$sqlResult as \$column => \$value) {
            // An ObjectHydrator should be used instead of SimpleObjectHydrator
            if (isset(\$this->_rsm->relationMap[\$column])) {
                throw new \\Exception(sprintf('Unable to retrieve association information for column \"%s\"', \$column));
            }

            \$cacheKeyInfo = \$this->hydrateColumnInfo(\$column);

            if ( ! \$cacheKeyInfo) {
                continue;
            }

            // Check if value is null before conversion (because some types convert null to something else)
            \$valueIsNull = null === \$value;

            // Convert field to a valid PHP value
            if (isset(\$cacheKeyInfo['type'])) {
                \$type  = \$cacheKeyInfo['type'];
                \$value = \$type->convertToPHPValue(\$value, \$this->_platform);
            }

            \$fieldName = \$cacheKeyInfo['fieldName'];

            // Prevent overwrite in case of inherit classes using same property name (See AbstractHydrator)
            if ( ! isset(\$data[\$fieldName]) || ! \$valueIsNull) {
                \$data[\$fieldName] = \$value;
            }
        }

        if (isset(\$this->_hints[Query::HINT_REFRESH_ENTITY])) {
            \$this->registerManaged(\$this->class, \$this->_hints[Query::HINT_REFRESH_ENTITY], \$data);
        }

        \$uow    = \$this->_em->getUnitOfWork();
        \$entity = \$uow->createEntity(\$entityName, \$data, \$this->_hints);

        \$result[] = \$entity;

        if (isset(\$this->_hints[Query::HINT_INTERNAL_ITERATION]) && \$this->_hints[Query::HINT_INTERNAL_ITERATION]) {
            \$this->_uow->hydrationComplete();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php";
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

namespace Doctrine\\ORM\\Internal\\Hydration;

use PDO;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query;

class SimpleObjectHydrator extends AbstractHydrator
{
    /**
     * @var ClassMetadata
     */
    private \$class;

    /**
     * {@inheritdoc}
     */
    protected function prepare()
    {
        if (count(\$this->_rsm->aliasMap) !== 1) {
            throw new \\RuntimeException(\"Cannot use SimpleObjectHydrator with a ResultSetMapping that contains more than one object result.\");
        }

        if (\$this->_rsm->scalarMappings) {
            throw new \\RuntimeException(\"Cannot use SimpleObjectHydrator with a ResultSetMapping that contains scalar mappings.\");
        }

        \$this->class = \$this->getClassMetadata(reset(\$this->_rsm->aliasMap));
    }

    /**
     * {@inheritdoc}
     */
    protected function cleanup()
    {
        parent::cleanup();

        \$this->_uow->triggerEagerLoads();
        \$this->_uow->hydrationComplete();
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateAllData()
    {
        \$result = [];

        while (\$row = \$this->_stmt->fetch(PDO::FETCH_ASSOC)) {
            \$this->hydrateRowData(\$row, \$result);
        }

        \$this->_em->getUnitOfWork()->triggerEagerLoads();

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateRowData(array \$sqlResult, array &\$result)
    {
        \$entityName = \$this->class->name;
        \$data       = [];

        // We need to find the correct entity class name if we have inheritance in resultset
        if (\$this->class->inheritanceType !== ClassMetadata::INHERITANCE_TYPE_NONE) {
            \$discrColumnName = \$this->_platform->getSQLResultCasing(\$this->class->discriminatorColumn['name']);

            // Find mapped discriminator column from the result set.
            if (\$metaMappingDiscrColumnName = array_search(\$discrColumnName, \$this->_rsm->metaMappings)) {
                \$discrColumnName = \$metaMappingDiscrColumnName;
            }

            if ( ! isset(\$sqlResult[\$discrColumnName])) {
                throw HydrationException::missingDiscriminatorColumn(\$entityName, \$discrColumnName, key(\$this->_rsm->aliasMap));
            }

            if (\$sqlResult[\$discrColumnName] === '') {
                throw HydrationException::emptyDiscriminatorValue(key(\$this->_rsm->aliasMap));
            }

            \$discrMap = \$this->class->discriminatorMap;

            if ( ! isset(\$discrMap[\$sqlResult[\$discrColumnName]])) {
                throw HydrationException::invalidDiscriminatorValue(\$sqlResult[\$discrColumnName], array_keys(\$discrMap));
            }

            \$entityName = \$discrMap[\$sqlResult[\$discrColumnName]];

            unset(\$sqlResult[\$discrColumnName]);
        }

        foreach (\$sqlResult as \$column => \$value) {
            // An ObjectHydrator should be used instead of SimpleObjectHydrator
            if (isset(\$this->_rsm->relationMap[\$column])) {
                throw new \\Exception(sprintf('Unable to retrieve association information for column \"%s\"', \$column));
            }

            \$cacheKeyInfo = \$this->hydrateColumnInfo(\$column);

            if ( ! \$cacheKeyInfo) {
                continue;
            }

            // Check if value is null before conversion (because some types convert null to something else)
            \$valueIsNull = null === \$value;

            // Convert field to a valid PHP value
            if (isset(\$cacheKeyInfo['type'])) {
                \$type  = \$cacheKeyInfo['type'];
                \$value = \$type->convertToPHPValue(\$value, \$this->_platform);
            }

            \$fieldName = \$cacheKeyInfo['fieldName'];

            // Prevent overwrite in case of inherit classes using same property name (See AbstractHydrator)
            if ( ! isset(\$data[\$fieldName]) || ! \$valueIsNull) {
                \$data[\$fieldName] = \$value;
            }
        }

        if (isset(\$this->_hints[Query::HINT_REFRESH_ENTITY])) {
            \$this->registerManaged(\$this->class, \$this->_hints[Query::HINT_REFRESH_ENTITY], \$data);
        }

        \$uow    = \$this->_em->getUnitOfWork();
        \$entity = \$uow->createEntity(\$entityName, \$data, \$this->_hints);

        \$result[] = \$entity;

        if (isset(\$this->_hints[Query::HINT_INTERNAL_ITERATION]) && \$this->_hints[Query::HINT_INTERNAL_ITERATION]) {
            \$this->_uow->hydrationComplete();
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php");
    }
}
