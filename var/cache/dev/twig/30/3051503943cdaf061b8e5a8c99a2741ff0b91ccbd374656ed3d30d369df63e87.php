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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php */
class __TwigTemplate_201cf4c6fff83822ae75a407582e2ef07786409fd32c5a497bbbdcce2e3f3b1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php"));

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

namespace Doctrine\\ORM\\Mapping\\Builder;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

class AssociationBuilder
{
    /**
     * @var ClassMetadataBuilder
     */
    protected \$builder;

    /**
     * @var array
     */
    protected \$mapping;

    /**
     * @var array|null
     */
    protected \$joinColumns;

    /**
     * @var int
     */
    protected \$type;

    /**
     * @param ClassMetadataBuilder \$builder
     * @param array                \$mapping
     * @param int                  \$type
     */
    public function __construct(ClassMetadataBuilder \$builder, array \$mapping, \$type)
    {
        \$this->builder = \$builder;
        \$this->mapping = \$mapping;
        \$this->type = \$type;
    }

    /**
     * @param string \$fieldName
     *
     * @return AssociationBuilder
     */
    public function mappedBy(\$fieldName)
    {
        \$this->mapping['mappedBy'] = \$fieldName;

        return \$this;
    }

    /**
     * @param string \$fieldName
     *
     * @return AssociationBuilder
     */
    public function inversedBy(\$fieldName)
    {
        \$this->mapping['inversedBy'] = \$fieldName;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeAll()
    {
        \$this->mapping['cascade'] = [\"ALL\"];

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadePersist()
    {
        \$this->mapping['cascade'][] = \"persist\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeRemove()
    {
        \$this->mapping['cascade'][] = \"remove\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeMerge()
    {
        \$this->mapping['cascade'][] = \"merge\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeDetach()
    {
        \$this->mapping['cascade'][] = \"detach\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeRefresh()
    {
        \$this->mapping['cascade'][] = \"refresh\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchExtraLazy()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_EXTRA_LAZY;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchEager()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_EAGER;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchLazy()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_LAZY;

        return \$this;
    }

    /**
     * Add Join Columns.
     *
     * @param string      \$columnName
     * @param string      \$referencedColumnName
     * @param bool        \$nullable
     * @param bool        \$unique
     * @param string|null \$onDelete
     * @param string|null \$columnDef
     *
     * @return AssociationBuilder
     */
    public function addJoinColumn(\$columnName, \$referencedColumnName, \$nullable = true, \$unique = false, \$onDelete = null, \$columnDef = null)
    {
        \$this->joinColumns[] = [
            'name' => \$columnName,
            'referencedColumnName' => \$referencedColumnName,
            'nullable' => \$nullable,
            'unique' => \$unique,
            'onDelete' => \$onDelete,
            'columnDefinition' => \$columnDef,
        ];

        return \$this;
    }

    /**
     * Sets field as primary key.
     *
     * @return self
     */
    public function makePrimaryKey()
    {
        \$this->mapping['id'] = true;

        return \$this;
    }

    /**
     * Removes orphan entities when detached from their parent.
     *
     * @return self
     */
    public function orphanRemoval()
    {
        \$this->mapping['orphanRemoval'] = true;

        return \$this;
    }

    /**
     * @return ClassMetadataBuilder
     *
     * @throws \\InvalidArgumentException
     */
    public function build()
    {
        \$mapping = \$this->mapping;
        if (\$this->joinColumns) {
            \$mapping['joinColumns'] = \$this->joinColumns;
        }
        \$cm = \$this->builder->getClassMetadata();
        if (\$this->type == ClassMetadata::MANY_TO_ONE) {
            \$cm->mapManyToOne(\$mapping);
        } else if (\$this->type == ClassMetadata::ONE_TO_ONE) {
            \$cm->mapOneToOne(\$mapping);
        } else {
            throw new \\InvalidArgumentException(\"Type should be a ToOne Association here\");
        }

        return \$this->builder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php";
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

namespace Doctrine\\ORM\\Mapping\\Builder;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

class AssociationBuilder
{
    /**
     * @var ClassMetadataBuilder
     */
    protected \$builder;

    /**
     * @var array
     */
    protected \$mapping;

    /**
     * @var array|null
     */
    protected \$joinColumns;

    /**
     * @var int
     */
    protected \$type;

    /**
     * @param ClassMetadataBuilder \$builder
     * @param array                \$mapping
     * @param int                  \$type
     */
    public function __construct(ClassMetadataBuilder \$builder, array \$mapping, \$type)
    {
        \$this->builder = \$builder;
        \$this->mapping = \$mapping;
        \$this->type = \$type;
    }

    /**
     * @param string \$fieldName
     *
     * @return AssociationBuilder
     */
    public function mappedBy(\$fieldName)
    {
        \$this->mapping['mappedBy'] = \$fieldName;

        return \$this;
    }

    /**
     * @param string \$fieldName
     *
     * @return AssociationBuilder
     */
    public function inversedBy(\$fieldName)
    {
        \$this->mapping['inversedBy'] = \$fieldName;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeAll()
    {
        \$this->mapping['cascade'] = [\"ALL\"];

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadePersist()
    {
        \$this->mapping['cascade'][] = \"persist\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeRemove()
    {
        \$this->mapping['cascade'][] = \"remove\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeMerge()
    {
        \$this->mapping['cascade'][] = \"merge\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeDetach()
    {
        \$this->mapping['cascade'][] = \"detach\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function cascadeRefresh()
    {
        \$this->mapping['cascade'][] = \"refresh\";

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchExtraLazy()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_EXTRA_LAZY;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchEager()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_EAGER;

        return \$this;
    }

    /**
     * @return AssociationBuilder
     */
    public function fetchLazy()
    {
        \$this->mapping['fetch'] = ClassMetadata::FETCH_LAZY;

        return \$this;
    }

    /**
     * Add Join Columns.
     *
     * @param string      \$columnName
     * @param string      \$referencedColumnName
     * @param bool        \$nullable
     * @param bool        \$unique
     * @param string|null \$onDelete
     * @param string|null \$columnDef
     *
     * @return AssociationBuilder
     */
    public function addJoinColumn(\$columnName, \$referencedColumnName, \$nullable = true, \$unique = false, \$onDelete = null, \$columnDef = null)
    {
        \$this->joinColumns[] = [
            'name' => \$columnName,
            'referencedColumnName' => \$referencedColumnName,
            'nullable' => \$nullable,
            'unique' => \$unique,
            'onDelete' => \$onDelete,
            'columnDefinition' => \$columnDef,
        ];

        return \$this;
    }

    /**
     * Sets field as primary key.
     *
     * @return self
     */
    public function makePrimaryKey()
    {
        \$this->mapping['id'] = true;

        return \$this;
    }

    /**
     * Removes orphan entities when detached from their parent.
     *
     * @return self
     */
    public function orphanRemoval()
    {
        \$this->mapping['orphanRemoval'] = true;

        return \$this;
    }

    /**
     * @return ClassMetadataBuilder
     *
     * @throws \\InvalidArgumentException
     */
    public function build()
    {
        \$mapping = \$this->mapping;
        if (\$this->joinColumns) {
            \$mapping['joinColumns'] = \$this->joinColumns;
        }
        \$cm = \$this->builder->getClassMetadata();
        if (\$this->type == ClassMetadata::MANY_TO_ONE) {
            \$cm->mapManyToOne(\$mapping);
        } else if (\$this->type == ClassMetadata::ONE_TO_ONE) {
            \$cm->mapOneToOne(\$mapping);
        } else {
            throw new \\InvalidArgumentException(\"Type should be a ToOne Association here\");
        }

        return \$this->builder;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php");
    }
}
