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

/* vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php */
class __TwigTemplate_5a2a34a428e2042abd3001c324bc2f2c4ebdd4fbf6f22d4a2e08b03935125226 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\QueryBuilder;

/**
 * Loads entities using a {@link QueryBuilder} instance.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ORMQueryBuilderLoader implements EntityLoaderInterface
{
    /**
     * Contains the query builder that builds the query for fetching the
     * entities.
     *
     * This property should only be accessed through queryBuilder.
     *
     * @var QueryBuilder
     */
    private \$queryBuilder;

    /**
     * Construct an ORM Query Builder Loader.
     *
     * @param QueryBuilder \$queryBuilder The query builder for creating the query builder
     */
    public function __construct(QueryBuilder \$queryBuilder)
    {
        \$this->queryBuilder = \$queryBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities()
    {
        return \$this->queryBuilder->getQuery()->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesByIds(\$identifier, array \$values)
    {
        \$qb = clone \$this->queryBuilder;
        \$alias = current(\$qb->getRootAliases());
        \$parameter = 'ORMQueryBuilderLoader_getEntitiesByIds_'.\$identifier;
        \$parameter = str_replace('.', '_', \$parameter);
        \$where = \$qb->expr()->in(\$alias.'.'.\$identifier, ':'.\$parameter);

        // Guess type
        \$entity = current(\$qb->getRootEntities());
        \$metadata = \$qb->getEntityManager()->getClassMetadata(\$entity);
        if (\\in_array(\$metadata->getTypeOfField(\$identifier), ['integer', 'bigint', 'smallint'])) {
            \$parameterType = Connection::PARAM_INT_ARRAY;

            // Filter out non-integer values (e.g. \"\"). If we don't, some
            // databases such as PostgreSQL fail.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return (string) \$v === (string) (int) \$v || ctype_digit(\$v);
            }));
        } elseif (\\in_array(\$metadata->getTypeOfField(\$identifier), ['uuid', 'guid'])) {
            \$parameterType = Connection::PARAM_STR_ARRAY;

            // Like above, but we just filter out empty strings.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return '' !== (string) \$v;
            }));
        } else {
            \$parameterType = Connection::PARAM_STR_ARRAY;
        }
        if (!\$values) {
            return [];
        }

        return \$qb->andWhere(\$where)
                  ->getQuery()
                  ->setParameter(\$parameter, \$values, \$parameterType)
                  ->getResult();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\QueryBuilder;

/**
 * Loads entities using a {@link QueryBuilder} instance.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ORMQueryBuilderLoader implements EntityLoaderInterface
{
    /**
     * Contains the query builder that builds the query for fetching the
     * entities.
     *
     * This property should only be accessed through queryBuilder.
     *
     * @var QueryBuilder
     */
    private \$queryBuilder;

    /**
     * Construct an ORM Query Builder Loader.
     *
     * @param QueryBuilder \$queryBuilder The query builder for creating the query builder
     */
    public function __construct(QueryBuilder \$queryBuilder)
    {
        \$this->queryBuilder = \$queryBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities()
    {
        return \$this->queryBuilder->getQuery()->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesByIds(\$identifier, array \$values)
    {
        \$qb = clone \$this->queryBuilder;
        \$alias = current(\$qb->getRootAliases());
        \$parameter = 'ORMQueryBuilderLoader_getEntitiesByIds_'.\$identifier;
        \$parameter = str_replace('.', '_', \$parameter);
        \$where = \$qb->expr()->in(\$alias.'.'.\$identifier, ':'.\$parameter);

        // Guess type
        \$entity = current(\$qb->getRootEntities());
        \$metadata = \$qb->getEntityManager()->getClassMetadata(\$entity);
        if (\\in_array(\$metadata->getTypeOfField(\$identifier), ['integer', 'bigint', 'smallint'])) {
            \$parameterType = Connection::PARAM_INT_ARRAY;

            // Filter out non-integer values (e.g. \"\"). If we don't, some
            // databases such as PostgreSQL fail.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return (string) \$v === (string) (int) \$v || ctype_digit(\$v);
            }));
        } elseif (\\in_array(\$metadata->getTypeOfField(\$identifier), ['uuid', 'guid'])) {
            \$parameterType = Connection::PARAM_STR_ARRAY;

            // Like above, but we just filter out empty strings.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return '' !== (string) \$v;
            }));
        } else {
            \$parameterType = Connection::PARAM_STR_ARRAY;
        }
        if (!\$values) {
            return [];
        }

        return \$qb->andWhere(\$where)
                  ->getQuery()
                  ->setParameter(\$parameter, \$values, \$parameterType)
                  ->getResult();
    }
}
", "vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php");
    }
}
