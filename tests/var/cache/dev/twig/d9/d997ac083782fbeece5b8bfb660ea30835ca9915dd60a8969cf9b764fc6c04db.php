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

/* vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php */
class __TwigTemplate_068cdb9a80acbcd0c68caf7c9e64425dba7e1f30f0ceb55818f499cdf054a97b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\DataTransformer;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionToArrayTransformer implements DataTransformerInterface
{
    /**
     * Transforms a collection into an array.
     *
     * @return mixed An array of entities
     *
     * @throws TransformationFailedException
     */
    public function transform(\$collection)
    {
        if (null === \$collection) {
            return [];
        }

        // For cases when the collection getter returns \$collection->toArray()
        // in order to prevent modifications of the returned collection
        if (\\is_array(\$collection)) {
            return \$collection;
        }

        if (!\$collection instanceof Collection) {
            throw new TransformationFailedException('Expected a Doctrine\\Common\\Collections\\Collection object.');
        }

        return \$collection->toArray();
    }

    /**
     * Transforms choice keys into entities.
     *
     * @param mixed \$array An array of entities
     *
     * @return Collection A collection of entities
     */
    public function reverseTransform(\$array)
    {
        if ('' === \$array || null === \$array) {
            \$array = [];
        } else {
            \$array = (array) \$array;
        }

        return new ArrayCollection(\$array);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\DataTransformer;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionToArrayTransformer implements DataTransformerInterface
{
    /**
     * Transforms a collection into an array.
     *
     * @return mixed An array of entities
     *
     * @throws TransformationFailedException
     */
    public function transform(\$collection)
    {
        if (null === \$collection) {
            return [];
        }

        // For cases when the collection getter returns \$collection->toArray()
        // in order to prevent modifications of the returned collection
        if (\\is_array(\$collection)) {
            return \$collection;
        }

        if (!\$collection instanceof Collection) {
            throw new TransformationFailedException('Expected a Doctrine\\Common\\Collections\\Collection object.');
        }

        return \$collection->toArray();
    }

    /**
     * Transforms choice keys into entities.
     *
     * @param mixed \$array An array of entities
     *
     * @return Collection A collection of entities
     */
    public function reverseTransform(\$array)
    {
        if ('' === \$array || null === \$array) {
            \$array = [];
        } else {
            \$array = (array) \$array;
        }

        return new ArrayCollection(\$array);
    }
}
", "vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Form/DataTransformer/CollectionToArrayTransformer.php");
    }
}
