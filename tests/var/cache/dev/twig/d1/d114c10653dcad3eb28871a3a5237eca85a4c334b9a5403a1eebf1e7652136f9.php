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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php */
class __TwigTemplate_6117268966512948a1abcca52ecaf3432d8448387f1085e6273fdbb86935f1df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php"));

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
 * A set of rules for determining the physical column, alias and table quotes
 *
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultQuoteStrategy implements QuoteStrategy
{
    /**
     * {@inheritdoc}
     */
    public function getColumnName(\$fieldName, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$class->fieldMappings[\$fieldName]['quoted'])
            ? \$platform->quoteIdentifier(\$class->fieldMappings[\$fieldName]['columnName'])
            : \$class->fieldMappings[\$fieldName]['columnName'];
    }

    /**
     * {@inheritdoc}
     *
     * @todo Table names should be computed in DBAL depending on the platform
     */
    public function getTableName(ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$tableName = \$class->table['name'];

        if ( ! empty(\$class->table['schema'])) {
            \$tableName = \$class->table['schema'] . '.' . \$class->table['name'];

            if ( ! \$platform->supportsSchemas() && \$platform->canEmulateSchemas()) {
                \$tableName = \$class->table['schema'] . '__' . \$class->table['name'];
            }
        }

        return isset(\$class->table['quoted'])
            ? \$platform->quoteIdentifier(\$tableName)
            : \$tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceName(array \$definition, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$definition['quoted'])
            ? \$platform->quoteIdentifier(\$definition['sequenceName'])
            : \$definition['sequenceName'];
    }

    /**
     * {@inheritdoc}
     */
    public function getJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$joinColumn['quoted'])
            ? \$platform->quoteIdentifier(\$joinColumn['name'])
            : \$joinColumn['name'];
    }

    /**
     * {@inheritdoc}
     */
    public function getReferencedJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$joinColumn['quoted'])
            ? \$platform->quoteIdentifier(\$joinColumn['referencedColumnName'])
            : \$joinColumn['referencedColumnName'];
    }

    /**
     * {@inheritdoc}
     */
    public function getJoinTableName(array \$association, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$schema = '';

        if (isset(\$association['joinTable']['schema'])) {
            \$schema = \$association['joinTable']['schema'] . '.';
        }

        \$tableName = \$association['joinTable']['name'];

        if (isset(\$association['joinTable']['quoted'])) {
            \$tableName = \$platform->quoteIdentifier(\$tableName);
        }

        return \$schema . \$tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifierColumnNames(ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$quotedColumnNames = [];

        foreach (\$class->identifier as \$fieldName) {
            if (isset(\$class->fieldMappings[\$fieldName])) {
                \$quotedColumnNames[] = \$this->getColumnName(\$fieldName, \$class, \$platform);

                continue;
            }

            // Association defined as Id field
            \$joinColumns            = \$class->associationMappings[\$fieldName]['joinColumns'];
            \$assocQuotedColumnNames = array_map(
                function (\$joinColumn) use (\$platform)
                {
                    return isset(\$joinColumn['quoted'])
                        ? \$platform->quoteIdentifier(\$joinColumn['name'])
                        : \$joinColumn['name'];
                },
                \$joinColumns
            );

            \$quotedColumnNames = array_merge(\$quotedColumnNames, \$assocQuotedColumnNames);
        }

        return \$quotedColumnNames;
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnAlias(\$columnName, \$counter, AbstractPlatform \$platform, ClassMetadata \$class = null)
    {
        // 1 ) Concatenate column name and counter
        // 2 ) Trim the column alias to the maximum identifier length of the platform.
        //     If the alias is to long, characters are cut off from the beginning.
        // 3 ) Strip non alphanumeric characters
        // 4 ) Prefix with \"_\" if the result its numeric
        \$columnName = \$columnName . '_' . \$counter;
        \$columnName = substr(\$columnName, -\$platform->getMaxIdentifierLength());
        \$columnName = preg_replace('/[^A-Za-z0-9_]/', '', \$columnName);
        \$columnName = is_numeric(\$columnName) ? '_' . \$columnName : \$columnName;

        return \$platform->getSQLResultCasing(\$columnName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php";
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
 * A set of rules for determining the physical column, alias and table quotes
 *
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultQuoteStrategy implements QuoteStrategy
{
    /**
     * {@inheritdoc}
     */
    public function getColumnName(\$fieldName, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$class->fieldMappings[\$fieldName]['quoted'])
            ? \$platform->quoteIdentifier(\$class->fieldMappings[\$fieldName]['columnName'])
            : \$class->fieldMappings[\$fieldName]['columnName'];
    }

    /**
     * {@inheritdoc}
     *
     * @todo Table names should be computed in DBAL depending on the platform
     */
    public function getTableName(ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$tableName = \$class->table['name'];

        if ( ! empty(\$class->table['schema'])) {
            \$tableName = \$class->table['schema'] . '.' . \$class->table['name'];

            if ( ! \$platform->supportsSchemas() && \$platform->canEmulateSchemas()) {
                \$tableName = \$class->table['schema'] . '__' . \$class->table['name'];
            }
        }

        return isset(\$class->table['quoted'])
            ? \$platform->quoteIdentifier(\$tableName)
            : \$tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceName(array \$definition, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$definition['quoted'])
            ? \$platform->quoteIdentifier(\$definition['sequenceName'])
            : \$definition['sequenceName'];
    }

    /**
     * {@inheritdoc}
     */
    public function getJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$joinColumn['quoted'])
            ? \$platform->quoteIdentifier(\$joinColumn['name'])
            : \$joinColumn['name'];
    }

    /**
     * {@inheritdoc}
     */
    public function getReferencedJoinColumnName(array \$joinColumn, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        return isset(\$joinColumn['quoted'])
            ? \$platform->quoteIdentifier(\$joinColumn['referencedColumnName'])
            : \$joinColumn['referencedColumnName'];
    }

    /**
     * {@inheritdoc}
     */
    public function getJoinTableName(array \$association, ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$schema = '';

        if (isset(\$association['joinTable']['schema'])) {
            \$schema = \$association['joinTable']['schema'] . '.';
        }

        \$tableName = \$association['joinTable']['name'];

        if (isset(\$association['joinTable']['quoted'])) {
            \$tableName = \$platform->quoteIdentifier(\$tableName);
        }

        return \$schema . \$tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifierColumnNames(ClassMetadata \$class, AbstractPlatform \$platform)
    {
        \$quotedColumnNames = [];

        foreach (\$class->identifier as \$fieldName) {
            if (isset(\$class->fieldMappings[\$fieldName])) {
                \$quotedColumnNames[] = \$this->getColumnName(\$fieldName, \$class, \$platform);

                continue;
            }

            // Association defined as Id field
            \$joinColumns            = \$class->associationMappings[\$fieldName]['joinColumns'];
            \$assocQuotedColumnNames = array_map(
                function (\$joinColumn) use (\$platform)
                {
                    return isset(\$joinColumn['quoted'])
                        ? \$platform->quoteIdentifier(\$joinColumn['name'])
                        : \$joinColumn['name'];
                },
                \$joinColumns
            );

            \$quotedColumnNames = array_merge(\$quotedColumnNames, \$assocQuotedColumnNames);
        }

        return \$quotedColumnNames;
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnAlias(\$columnName, \$counter, AbstractPlatform \$platform, ClassMetadata \$class = null)
    {
        // 1 ) Concatenate column name and counter
        // 2 ) Trim the column alias to the maximum identifier length of the platform.
        //     If the alias is to long, characters are cut off from the beginning.
        // 3 ) Strip non alphanumeric characters
        // 4 ) Prefix with \"_\" if the result its numeric
        \$columnName = \$columnName . '_' . \$counter;
        \$columnName = substr(\$columnName, -\$platform->getMaxIdentifierLength());
        \$columnName = preg_replace('/[^A-Za-z0-9_]/', '', \$columnName);
        \$columnName = is_numeric(\$columnName) ? '_' . \$columnName : \$columnName;

        return \$platform->getSQLResultCasing(\$columnName);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php");
    }
}
