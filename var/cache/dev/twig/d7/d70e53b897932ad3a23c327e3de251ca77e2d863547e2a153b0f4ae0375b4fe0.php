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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php */
class __TwigTemplate_f241e4879676bc530849cd03e5ab155c28e436a1615cb57931353bf16740e998 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php"));

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

namespace Doctrine\\ORM\\Decorator;

use Doctrine\\ORM\\Query\\ResultSetMapping;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\Persistence\\ObjectManagerDecorator;

/**
 * Base class for EntityManager decorators
 *
 * @since   2.4
 * @author  Lars Strojny <lars@strojny.net
 */
abstract class EntityManagerDecorator extends ObjectManagerDecorator implements EntityManagerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected \$wrapped;

    /**
     * @param EntityManagerInterface \$wrapped
     */
    public function __construct(EntityManagerInterface \$wrapped)
    {
        \$this->wrapped = \$wrapped;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return \$this->wrapped->getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressionBuilder()
    {
        return \$this->wrapped->getExpressionBuilder();
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return \$this->wrapped->beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function transactional(\$func)
    {
        return \$this->wrapped->transactional(\$func);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->wrapped->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollback()
    {
        return \$this->wrapped->rollback();
    }

    /**
     * {@inheritdoc}
     */
    public function createQuery(\$dql = '')
    {
        return \$this->wrapped->createQuery(\$dql);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedQuery(\$name)
    {
        return \$this->wrapped->createNamedQuery(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function createNativeQuery(\$sql, ResultSetMapping \$rsm)
    {
        return \$this->wrapped->createNativeQuery(\$sql, \$rsm);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedNativeQuery(\$name)
    {
        return \$this->wrapped->createNamedNativeQuery(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function createQueryBuilder()
    {
        return \$this->wrapped->createQueryBuilder();
    }

    /**
     * {@inheritdoc}
     */
    public function getReference(\$entityName, \$id)
    {
        return \$this->wrapped->getReference(\$entityName, \$id);
    }

    /**
     * {@inheritdoc}
     */
    public function getPartialReference(\$entityName, \$identifier)
    {
        return \$this->wrapped->getPartialReference(\$entityName, \$identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return \$this->wrapped->close();
    }

    /**
     * {@inheritdoc}
     */
    public function copy(\$entity, \$deep = false)
    {
        return \$this->wrapped->copy(\$entity, \$deep);
    }

    /**
     * {@inheritdoc}
     */
    public function lock(\$entity, \$lockMode, \$lockVersion = null)
    {
        return \$this->wrapped->lock(\$entity, \$lockMode, \$lockVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function find(\$entityName, \$id, \$lockMode = null, \$lockVersion = null)
    {
        return \$this->wrapped->find(\$entityName, \$id, \$lockMode, \$lockVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function flush(\$entity = null)
    {
        return \$this->wrapped->flush(\$entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getEventManager()
    {
        return \$this->wrapped->getEventManager();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        return \$this->wrapped->getConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function isOpen()
    {
        return \$this->wrapped->isOpen();
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitOfWork()
    {
        return \$this->wrapped->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function getHydrator(\$hydrationMode)
    {
        return \$this->wrapped->getHydrator(\$hydrationMode);
    }

    /**
     * {@inheritdoc}
     */
    public function newHydrator(\$hydrationMode)
    {
        return \$this->wrapped->newHydrator(\$hydrationMode);
    }

    /**
     * {@inheritdoc}
     */
    public function getProxyFactory()
    {
        return \$this->wrapped->getProxyFactory();
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return \$this->wrapped->getFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function isFiltersStateClean()
    {
        return \$this->wrapped->isFiltersStateClean();
    }

    /**
     * {@inheritdoc}
     */
    public function hasFilters()
    {
        return \$this->wrapped->hasFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function getCache()
    {
        return \$this->wrapped->getCache();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php";
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

namespace Doctrine\\ORM\\Decorator;

use Doctrine\\ORM\\Query\\ResultSetMapping;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\Persistence\\ObjectManagerDecorator;

/**
 * Base class for EntityManager decorators
 *
 * @since   2.4
 * @author  Lars Strojny <lars@strojny.net
 */
abstract class EntityManagerDecorator extends ObjectManagerDecorator implements EntityManagerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected \$wrapped;

    /**
     * @param EntityManagerInterface \$wrapped
     */
    public function __construct(EntityManagerInterface \$wrapped)
    {
        \$this->wrapped = \$wrapped;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return \$this->wrapped->getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressionBuilder()
    {
        return \$this->wrapped->getExpressionBuilder();
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return \$this->wrapped->beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function transactional(\$func)
    {
        return \$this->wrapped->transactional(\$func);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->wrapped->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollback()
    {
        return \$this->wrapped->rollback();
    }

    /**
     * {@inheritdoc}
     */
    public function createQuery(\$dql = '')
    {
        return \$this->wrapped->createQuery(\$dql);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedQuery(\$name)
    {
        return \$this->wrapped->createNamedQuery(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function createNativeQuery(\$sql, ResultSetMapping \$rsm)
    {
        return \$this->wrapped->createNativeQuery(\$sql, \$rsm);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedNativeQuery(\$name)
    {
        return \$this->wrapped->createNamedNativeQuery(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function createQueryBuilder()
    {
        return \$this->wrapped->createQueryBuilder();
    }

    /**
     * {@inheritdoc}
     */
    public function getReference(\$entityName, \$id)
    {
        return \$this->wrapped->getReference(\$entityName, \$id);
    }

    /**
     * {@inheritdoc}
     */
    public function getPartialReference(\$entityName, \$identifier)
    {
        return \$this->wrapped->getPartialReference(\$entityName, \$identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return \$this->wrapped->close();
    }

    /**
     * {@inheritdoc}
     */
    public function copy(\$entity, \$deep = false)
    {
        return \$this->wrapped->copy(\$entity, \$deep);
    }

    /**
     * {@inheritdoc}
     */
    public function lock(\$entity, \$lockMode, \$lockVersion = null)
    {
        return \$this->wrapped->lock(\$entity, \$lockMode, \$lockVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function find(\$entityName, \$id, \$lockMode = null, \$lockVersion = null)
    {
        return \$this->wrapped->find(\$entityName, \$id, \$lockMode, \$lockVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function flush(\$entity = null)
    {
        return \$this->wrapped->flush(\$entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getEventManager()
    {
        return \$this->wrapped->getEventManager();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        return \$this->wrapped->getConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function isOpen()
    {
        return \$this->wrapped->isOpen();
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitOfWork()
    {
        return \$this->wrapped->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function getHydrator(\$hydrationMode)
    {
        return \$this->wrapped->getHydrator(\$hydrationMode);
    }

    /**
     * {@inheritdoc}
     */
    public function newHydrator(\$hydrationMode)
    {
        return \$this->wrapped->newHydrator(\$hydrationMode);
    }

    /**
     * {@inheritdoc}
     */
    public function getProxyFactory()
    {
        return \$this->wrapped->getProxyFactory();
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return \$this->wrapped->getFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function isFiltersStateClean()
    {
        return \$this->wrapped->isFiltersStateClean();
    }

    /**
     * {@inheritdoc}
     */
    public function hasFilters()
    {
        return \$this->wrapped->hasFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function getCache()
    {
        return \$this->wrapped->getCache();
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php");
    }
}
