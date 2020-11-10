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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php */
class __TwigTemplate_74f2b0cdce9d4122a0619df2884489c2cc456ce498993285ee8dc113a30ad8ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php"));

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
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\ResultSetMapping;

/**
 * A swappable persister context to use as a container for the current
 * generated query/resultSetMapping/type binding information.
 *
 * This class is a utility class to be used only by the persister API
 *
 * This object is highly mutable due to performance reasons. Same reasoning
 * behind its properties being public.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class CachedPersisterContext
{
    /**
     * Metadata object that describes the mapping of the mapped entity class.
     *
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public \$class;

    /**
     * ResultSetMapping that is used for all queries. Is generated lazily once per request.
     *
     * @var \\Doctrine\\ORM\\Query\\ResultSetMapping
     */
    public \$rsm;

    /**
     * The SELECT column list SQL fragment used for querying entities by this persister.
     * This SQL fragment is only generated once per request, if at all.
     *
     * @var string|null
     */
    public \$selectColumnListSql;

    /**
     * The JOIN SQL fragment used to eagerly load all many-to-one and one-to-one
     * associations configured as FETCH_EAGER, as well as all inverse one-to-one associations.
     *
     * @var string
     */
    public \$selectJoinSql;

    /**
     * Counter for creating unique SQL table and column aliases.
     *
     * @var integer
     */
    public \$sqlAliasCounter = 0;

    /**
     * Map from class names (FQCN) to the corresponding generated SQL table aliases.
     *
     * @var array
     */
    public \$sqlTableAliases = [];

    /**
     * Whether this persistent context is considering limit operations applied to the selection queries
     *
     * @var bool
     */
    public \$handlesLimits;

    /**
     * @param ClassMetadata    \$class
     * @param ResultSetMapping \$rsm
     * @param bool             \$handlesLimits
     */
    public function __construct(
        ClassMetadata \$class,
        ResultSetMapping \$rsm,
        \$handlesLimits
    ) {
        \$this->class         = \$class;
        \$this->rsm           = \$rsm;
        \$this->handlesLimits = (bool) \$handlesLimits;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php";
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
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\ResultSetMapping;

/**
 * A swappable persister context to use as a container for the current
 * generated query/resultSetMapping/type binding information.
 *
 * This class is a utility class to be used only by the persister API
 *
 * This object is highly mutable due to performance reasons. Same reasoning
 * behind its properties being public.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class CachedPersisterContext
{
    /**
     * Metadata object that describes the mapping of the mapped entity class.
     *
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public \$class;

    /**
     * ResultSetMapping that is used for all queries. Is generated lazily once per request.
     *
     * @var \\Doctrine\\ORM\\Query\\ResultSetMapping
     */
    public \$rsm;

    /**
     * The SELECT column list SQL fragment used for querying entities by this persister.
     * This SQL fragment is only generated once per request, if at all.
     *
     * @var string|null
     */
    public \$selectColumnListSql;

    /**
     * The JOIN SQL fragment used to eagerly load all many-to-one and one-to-one
     * associations configured as FETCH_EAGER, as well as all inverse one-to-one associations.
     *
     * @var string
     */
    public \$selectJoinSql;

    /**
     * Counter for creating unique SQL table and column aliases.
     *
     * @var integer
     */
    public \$sqlAliasCounter = 0;

    /**
     * Map from class names (FQCN) to the corresponding generated SQL table aliases.
     *
     * @var array
     */
    public \$sqlTableAliases = [];

    /**
     * Whether this persistent context is considering limit operations applied to the selection queries
     *
     * @var bool
     */
    public \$handlesLimits;

    /**
     * @param ClassMetadata    \$class
     * @param ResultSetMapping \$rsm
     * @param bool             \$handlesLimits
     */
    public function __construct(
        ClassMetadata \$class,
        ResultSetMapping \$rsm,
        \$handlesLimits
    ) {
        \$this->class         = \$class;
        \$this->rsm           = \$rsm;
        \$this->handlesLimits = (bool) \$handlesLimits;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php");
    }
}
