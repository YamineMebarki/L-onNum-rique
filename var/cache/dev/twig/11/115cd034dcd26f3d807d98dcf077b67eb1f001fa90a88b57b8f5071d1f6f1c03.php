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

/* vendor/symfony/doctrine-bridge/Form/Type/EntityType.php */
class __TwigTemplate_2ae2dc5745a8dffe48e647220fbd19927d21d93e438f3af76988b04cdf9320a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/Type/EntityType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/Type/EntityType.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\Type;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\ORM\\Query\\Parameter;
use Doctrine\\ORM\\QueryBuilder;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class EntityType extends DoctrineType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Invoke the query builder closure so that we can cache choice lists
        // for equal query builders
        \$queryBuilderNormalizer = function (Options \$options, \$queryBuilder) {
            if (\\is_callable(\$queryBuilder)) {
                \$queryBuilder = \$queryBuilder(\$options['em']->getRepository(\$options['class']));

                if (null !== \$queryBuilder && !\$queryBuilder instanceof QueryBuilder) {
                    throw new UnexpectedTypeException(\$queryBuilder, 'Doctrine\\ORM\\QueryBuilder');
                }
            }

            return \$queryBuilder;
        };

        \$resolver->setNormalizer('query_builder', \$queryBuilderNormalizer);
        \$resolver->setAllowedTypes('query_builder', ['null', 'callable', 'Doctrine\\ORM\\QueryBuilder']);
    }

    /**
     * Return the default loader object.
     *
     * @param QueryBuilder \$queryBuilder
     * @param string       \$class
     *
     * @return ORMQueryBuilderLoader
     */
    public function getLoader(ObjectManager \$manager, \$queryBuilder, \$class)
    {
        return new ORMQueryBuilderLoader(\$queryBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entity';
    }

    /**
     * We consider two query builders with an equal SQL string and
     * equal parameters to be equal.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @return array
     *
     * @internal This method is public to be usable as callback. It should not
     *           be used in user code.
     */
    public function getQueryBuilderPartsForCachingHash(\$queryBuilder)
    {
        return [
            \$queryBuilder->getQuery()->getSQL(),
            array_map([\$this, 'parameterToArray'], \$queryBuilder->getParameters()->toArray()),
        ];
    }

    /**
     * Converts a query parameter to an array.
     *
     * @return array The array representation of the parameter
     */
    private function parameterToArray(Parameter \$parameter)
    {
        return [\$parameter->getName(), \$parameter->getType(), \$parameter->getValue()];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Form/Type/EntityType.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\Type;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\ORM\\Query\\Parameter;
use Doctrine\\ORM\\QueryBuilder;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class EntityType extends DoctrineType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Invoke the query builder closure so that we can cache choice lists
        // for equal query builders
        \$queryBuilderNormalizer = function (Options \$options, \$queryBuilder) {
            if (\\is_callable(\$queryBuilder)) {
                \$queryBuilder = \$queryBuilder(\$options['em']->getRepository(\$options['class']));

                if (null !== \$queryBuilder && !\$queryBuilder instanceof QueryBuilder) {
                    throw new UnexpectedTypeException(\$queryBuilder, 'Doctrine\\ORM\\QueryBuilder');
                }
            }

            return \$queryBuilder;
        };

        \$resolver->setNormalizer('query_builder', \$queryBuilderNormalizer);
        \$resolver->setAllowedTypes('query_builder', ['null', 'callable', 'Doctrine\\ORM\\QueryBuilder']);
    }

    /**
     * Return the default loader object.
     *
     * @param QueryBuilder \$queryBuilder
     * @param string       \$class
     *
     * @return ORMQueryBuilderLoader
     */
    public function getLoader(ObjectManager \$manager, \$queryBuilder, \$class)
    {
        return new ORMQueryBuilderLoader(\$queryBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entity';
    }

    /**
     * We consider two query builders with an equal SQL string and
     * equal parameters to be equal.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @return array
     *
     * @internal This method is public to be usable as callback. It should not
     *           be used in user code.
     */
    public function getQueryBuilderPartsForCachingHash(\$queryBuilder)
    {
        return [
            \$queryBuilder->getQuery()->getSQL(),
            array_map([\$this, 'parameterToArray'], \$queryBuilder->getParameters()->toArray()),
        ];
    }

    /**
     * Converts a query parameter to an array.
     *
     * @return array The array representation of the parameter
     */
    private function parameterToArray(Parameter \$parameter)
    {
        return [\$parameter->getName(), \$parameter->getType(), \$parameter->getValue()];
    }
}
", "vendor/symfony/doctrine-bridge/Form/Type/EntityType.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php");
    }
}
