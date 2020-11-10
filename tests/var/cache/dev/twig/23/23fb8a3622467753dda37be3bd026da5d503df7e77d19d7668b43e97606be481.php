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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php */
class __TwigTemplate_725f982cdc5ddf6b9ad91be6b56ef1ed19b067f9a5d5ec28c6b04f667496af93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php"));

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

namespace Doctrine\\ORM\\Tools\\Pagination;

use Doctrine\\ORM\\NoResultException;
use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\Query\\Parser;
use Doctrine\\ORM\\Query\\ResultSetMapping;
use Doctrine\\ORM\\QueryBuilder;
use function array_map;

/**
 * The paginator can handle various complex scenarios with DQL.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @license New BSD
 */
class Paginator implements \\Countable, \\IteratorAggregate
{
    /**
     * @var Query
     */
    private \$query;

    /**
     * @var bool
     */
    private \$fetchJoinCollection;

    /**
     * @var bool|null
     */
    private \$useOutputWalkers;

    /**
     * @var int
     */
    private \$count;

    /**
     * Constructor.
     *
     * @param Query|QueryBuilder \$query               A Doctrine ORM query or query builder.
     * @param boolean            \$fetchJoinCollection Whether the query joins a collection (true by default).
     */
    public function __construct(\$query, \$fetchJoinCollection = true)
    {
        if (\$query instanceof QueryBuilder) {
            \$query = \$query->getQuery();
        }

        \$this->query = \$query;
        \$this->fetchJoinCollection = (bool) \$fetchJoinCollection;
    }

    /**
     * Returns the query.
     *
     * @return Query
     */
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * Returns whether the query joins a collection.
     *
     * @return boolean Whether the query joins a collection.
     */
    public function getFetchJoinCollection()
    {
        return \$this->fetchJoinCollection;
    }

    /**
     * Returns whether the paginator will use an output walker.
     *
     * @return bool|null
     */
    public function getUseOutputWalkers()
    {
        return \$this->useOutputWalkers;
    }

    /**
     * Sets whether the paginator will use an output walker.
     *
     * @param bool|null \$useOutputWalkers
     *
     * @return \$this
     */
    public function setUseOutputWalkers(\$useOutputWalkers)
    {
        \$this->useOutputWalkers = \$useOutputWalkers;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        if (\$this->count === null) {
            try {
                \$this->count = array_sum(array_map('current', \$this->getCountQuery()->getScalarResult()));
            } catch (NoResultException \$e) {
                \$this->count = 0;
            }
        }

        return \$this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$offset = \$this->query->getFirstResult();
        \$length = \$this->query->getMaxResults();

        if (\$this->fetchJoinCollection) {
            \$subQuery = \$this->cloneQuery(\$this->query);

            if (\$this->useOutputWalker(\$subQuery)) {
                \$subQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, LimitSubqueryOutputWalker::class);
            } else {
                \$this->appendTreeWalker(\$subQuery, LimitSubqueryWalker::class);
                \$this->unbindUnusedQueryParams(\$subQuery);
            }

            \$subQuery->setFirstResult(\$offset)->setMaxResults(\$length);

            \$foundIdRows = \$subQuery->getScalarResult();

            // don't do this for an empty id array
            if (\$foundIdRows === []) {
                return new \\ArrayIterator([]);
            }

            \$whereInQuery = \$this->cloneQuery(\$this->query);
            \$ids          = array_map('current', \$foundIdRows);

            \$this->appendTreeWalker(\$whereInQuery, WhereInWalker::class);
            \$whereInQuery->setHint(WhereInWalker::HINT_PAGINATOR_ID_COUNT, count(\$ids));
            \$whereInQuery->setFirstResult(null)->setMaxResults(null);
            \$whereInQuery->setParameter(WhereInWalker::PAGINATOR_ID_ALIAS, \$ids);
            \$whereInQuery->setCacheable(\$this->query->isCacheable());

            \$result = \$whereInQuery->getResult(\$this->query->getHydrationMode());
        } else {
            \$result = \$this->cloneQuery(\$this->query)
                ->setMaxResults(\$length)
                ->setFirstResult(\$offset)
                ->setCacheable(\$this->query->isCacheable())
                ->getResult(\$this->query->getHydrationMode())
            ;
        }

        return new \\ArrayIterator(\$result);
    }

    /**
     * Clones a query.
     *
     * @param Query \$query The query.
     *
     * @return Query The cloned query.
     */
    private function cloneQuery(Query \$query)
    {
        /* @var \$cloneQuery Query */
        \$cloneQuery = clone \$query;

        \$cloneQuery->setParameters(clone \$query->getParameters());
        \$cloneQuery->setCacheable(false);

        foreach (\$query->getHints() as \$name => \$value) {
            \$cloneQuery->setHint(\$name, \$value);
        }

        return \$cloneQuery;
    }

    /**
     * Determines whether to use an output walker for the query.
     *
     * @param Query \$query The query.
     *
     * @return bool
     */
    private function useOutputWalker(Query \$query)
    {
        if (\$this->useOutputWalkers === null) {
            return (bool) \$query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) === false;
        }

        return \$this->useOutputWalkers;
    }

    /**
     * Appends a custom tree walker to the tree walkers hint.
     *
     * @param Query  \$query
     * @param string \$walkerClass
     */
    private function appendTreeWalker(Query \$query, \$walkerClass)
    {
        \$hints = \$query->getHint(Query::HINT_CUSTOM_TREE_WALKERS);

        if (\$hints === false) {
            \$hints = [];
        }

        \$hints[] = \$walkerClass;
        \$query->setHint(Query::HINT_CUSTOM_TREE_WALKERS, \$hints);
    }

    /**
     * Returns Query prepared to count.
     *
     * @return Query
     */
    private function getCountQuery()
    {
        /* @var \$countQuery Query */
        \$countQuery = \$this->cloneQuery(\$this->query);

        if ( ! \$countQuery->hasHint(CountWalker::HINT_DISTINCT)) {
            \$countQuery->setHint(CountWalker::HINT_DISTINCT, true);
        }

        if (\$this->useOutputWalker(\$countQuery)) {
            \$platform = \$countQuery->getEntityManager()->getConnection()->getDatabasePlatform(); // law of demeter win

            \$rsm = new ResultSetMapping();
            \$rsm->addScalarResult(\$platform->getSQLResultCasing('dctrn_count'), 'count');

            \$countQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, CountOutputWalker::class);
            \$countQuery->setResultSetMapping(\$rsm);
        } else {
            \$this->appendTreeWalker(\$countQuery, CountWalker::class);
            \$this->unbindUnusedQueryParams(\$countQuery);
        }

        \$countQuery->setFirstResult(null)->setMaxResults(null);

        return \$countQuery;
    }

    private function unbindUnusedQueryParams(Query \$query): void
    {
        \$parser            = new Parser(\$query);
        \$parameterMappings = \$parser->parse()->getParameterMappings();
        /* @var \$parameters \\Doctrine\\Common\\Collections\\Collection|\\Doctrine\\ORM\\Query\\Parameter[] */
        \$parameters        = \$query->getParameters();

        foreach (\$parameters as \$key => \$parameter) {
            \$parameterName = \$parameter->getName();

            if ( ! (isset(\$parameterMappings[\$parameterName]) || array_key_exists(\$parameterName, \$parameterMappings))) {
                unset(\$parameters[\$key]);
            }
        }

        \$query->setParameters(\$parameters);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php";
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

namespace Doctrine\\ORM\\Tools\\Pagination;

use Doctrine\\ORM\\NoResultException;
use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\Query\\Parser;
use Doctrine\\ORM\\Query\\ResultSetMapping;
use Doctrine\\ORM\\QueryBuilder;
use function array_map;

/**
 * The paginator can handle various complex scenarios with DQL.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @license New BSD
 */
class Paginator implements \\Countable, \\IteratorAggregate
{
    /**
     * @var Query
     */
    private \$query;

    /**
     * @var bool
     */
    private \$fetchJoinCollection;

    /**
     * @var bool|null
     */
    private \$useOutputWalkers;

    /**
     * @var int
     */
    private \$count;

    /**
     * Constructor.
     *
     * @param Query|QueryBuilder \$query               A Doctrine ORM query or query builder.
     * @param boolean            \$fetchJoinCollection Whether the query joins a collection (true by default).
     */
    public function __construct(\$query, \$fetchJoinCollection = true)
    {
        if (\$query instanceof QueryBuilder) {
            \$query = \$query->getQuery();
        }

        \$this->query = \$query;
        \$this->fetchJoinCollection = (bool) \$fetchJoinCollection;
    }

    /**
     * Returns the query.
     *
     * @return Query
     */
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * Returns whether the query joins a collection.
     *
     * @return boolean Whether the query joins a collection.
     */
    public function getFetchJoinCollection()
    {
        return \$this->fetchJoinCollection;
    }

    /**
     * Returns whether the paginator will use an output walker.
     *
     * @return bool|null
     */
    public function getUseOutputWalkers()
    {
        return \$this->useOutputWalkers;
    }

    /**
     * Sets whether the paginator will use an output walker.
     *
     * @param bool|null \$useOutputWalkers
     *
     * @return \$this
     */
    public function setUseOutputWalkers(\$useOutputWalkers)
    {
        \$this->useOutputWalkers = \$useOutputWalkers;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        if (\$this->count === null) {
            try {
                \$this->count = array_sum(array_map('current', \$this->getCountQuery()->getScalarResult()));
            } catch (NoResultException \$e) {
                \$this->count = 0;
            }
        }

        return \$this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$offset = \$this->query->getFirstResult();
        \$length = \$this->query->getMaxResults();

        if (\$this->fetchJoinCollection) {
            \$subQuery = \$this->cloneQuery(\$this->query);

            if (\$this->useOutputWalker(\$subQuery)) {
                \$subQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, LimitSubqueryOutputWalker::class);
            } else {
                \$this->appendTreeWalker(\$subQuery, LimitSubqueryWalker::class);
                \$this->unbindUnusedQueryParams(\$subQuery);
            }

            \$subQuery->setFirstResult(\$offset)->setMaxResults(\$length);

            \$foundIdRows = \$subQuery->getScalarResult();

            // don't do this for an empty id array
            if (\$foundIdRows === []) {
                return new \\ArrayIterator([]);
            }

            \$whereInQuery = \$this->cloneQuery(\$this->query);
            \$ids          = array_map('current', \$foundIdRows);

            \$this->appendTreeWalker(\$whereInQuery, WhereInWalker::class);
            \$whereInQuery->setHint(WhereInWalker::HINT_PAGINATOR_ID_COUNT, count(\$ids));
            \$whereInQuery->setFirstResult(null)->setMaxResults(null);
            \$whereInQuery->setParameter(WhereInWalker::PAGINATOR_ID_ALIAS, \$ids);
            \$whereInQuery->setCacheable(\$this->query->isCacheable());

            \$result = \$whereInQuery->getResult(\$this->query->getHydrationMode());
        } else {
            \$result = \$this->cloneQuery(\$this->query)
                ->setMaxResults(\$length)
                ->setFirstResult(\$offset)
                ->setCacheable(\$this->query->isCacheable())
                ->getResult(\$this->query->getHydrationMode())
            ;
        }

        return new \\ArrayIterator(\$result);
    }

    /**
     * Clones a query.
     *
     * @param Query \$query The query.
     *
     * @return Query The cloned query.
     */
    private function cloneQuery(Query \$query)
    {
        /* @var \$cloneQuery Query */
        \$cloneQuery = clone \$query;

        \$cloneQuery->setParameters(clone \$query->getParameters());
        \$cloneQuery->setCacheable(false);

        foreach (\$query->getHints() as \$name => \$value) {
            \$cloneQuery->setHint(\$name, \$value);
        }

        return \$cloneQuery;
    }

    /**
     * Determines whether to use an output walker for the query.
     *
     * @param Query \$query The query.
     *
     * @return bool
     */
    private function useOutputWalker(Query \$query)
    {
        if (\$this->useOutputWalkers === null) {
            return (bool) \$query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) === false;
        }

        return \$this->useOutputWalkers;
    }

    /**
     * Appends a custom tree walker to the tree walkers hint.
     *
     * @param Query  \$query
     * @param string \$walkerClass
     */
    private function appendTreeWalker(Query \$query, \$walkerClass)
    {
        \$hints = \$query->getHint(Query::HINT_CUSTOM_TREE_WALKERS);

        if (\$hints === false) {
            \$hints = [];
        }

        \$hints[] = \$walkerClass;
        \$query->setHint(Query::HINT_CUSTOM_TREE_WALKERS, \$hints);
    }

    /**
     * Returns Query prepared to count.
     *
     * @return Query
     */
    private function getCountQuery()
    {
        /* @var \$countQuery Query */
        \$countQuery = \$this->cloneQuery(\$this->query);

        if ( ! \$countQuery->hasHint(CountWalker::HINT_DISTINCT)) {
            \$countQuery->setHint(CountWalker::HINT_DISTINCT, true);
        }

        if (\$this->useOutputWalker(\$countQuery)) {
            \$platform = \$countQuery->getEntityManager()->getConnection()->getDatabasePlatform(); // law of demeter win

            \$rsm = new ResultSetMapping();
            \$rsm->addScalarResult(\$platform->getSQLResultCasing('dctrn_count'), 'count');

            \$countQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, CountOutputWalker::class);
            \$countQuery->setResultSetMapping(\$rsm);
        } else {
            \$this->appendTreeWalker(\$countQuery, CountWalker::class);
            \$this->unbindUnusedQueryParams(\$countQuery);
        }

        \$countQuery->setFirstResult(null)->setMaxResults(null);

        return \$countQuery;
    }

    private function unbindUnusedQueryParams(Query \$query): void
    {
        \$parser            = new Parser(\$query);
        \$parameterMappings = \$parser->parse()->getParameterMappings();
        /* @var \$parameters \\Doctrine\\Common\\Collections\\Collection|\\Doctrine\\ORM\\Query\\Parameter[] */
        \$parameters        = \$query->getParameters();

        foreach (\$parameters as \$key => \$parameter) {
            \$parameterName = \$parameter->getName();

            if ( ! (isset(\$parameterMappings[\$parameterName]) || array_key_exists(\$parameterName, \$parameterMappings))) {
                unset(\$parameters[\$key]);
            }
        }

        \$query->setParameters(\$parameters);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php");
    }
}
