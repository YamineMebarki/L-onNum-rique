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

/* vendor/symfony/property-info/PropertyInfoExtractor.php */
class __TwigTemplate_f2bad6f794d39cf05249009271fac6dd6d5ba1680b294139ac364b307bdd8e2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/PropertyInfoExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/PropertyInfoExtractor.php"));

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

namespace Symfony\\Component\\PropertyInfo;

/**
 * Default {@see PropertyInfoExtractorInterface} implementation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PropertyInfoExtractor implements PropertyInfoExtractorInterface, PropertyInitializableExtractorInterface
{
    private \$listExtractors;
    private \$typeExtractors;
    private \$descriptionExtractors;
    private \$accessExtractors;
    private \$initializableExtractors;

    /**
     * @param iterable|PropertyListExtractorInterface[]          \$listExtractors
     * @param iterable|PropertyTypeExtractorInterface[]          \$typeExtractors
     * @param iterable|PropertyDescriptionExtractorInterface[]   \$descriptionExtractors
     * @param iterable|PropertyAccessExtractorInterface[]        \$accessExtractors
     * @param iterable|PropertyInitializableExtractorInterface[] \$initializableExtractors
     */
    public function __construct(iterable \$listExtractors = [], iterable \$typeExtractors = [], iterable \$descriptionExtractors = [], iterable \$accessExtractors = [], iterable \$initializableExtractors = [])
    {
        \$this->listExtractors = \$listExtractors;
        \$this->typeExtractors = \$typeExtractors;
        \$this->descriptionExtractors = \$descriptionExtractors;
        \$this->accessExtractors = \$accessExtractors;
        \$this->initializableExtractors = \$initializableExtractors;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return \$this->extract(\$this->listExtractors, 'getProperties', [\$class, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->descriptionExtractors, 'getShortDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->descriptionExtractors, 'getLongDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->typeExtractors, 'getTypes', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->accessExtractors, 'isReadable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->accessExtractors, 'isWritable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return \$this->extract(\$this->initializableExtractors, 'isInitializable', [\$class, \$property, \$context]);
    }

    /**
     * Iterates over registered extractors and return the first value found.
     *
     * @return mixed
     */
    private function extract(iterable \$extractors, string \$method, array \$arguments)
    {
        foreach (\$extractors as \$extractor) {
            if (null !== \$value = \$extractor->{\$method}(...\$arguments)) {
                return \$value;
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/PropertyInfoExtractor.php";
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

namespace Symfony\\Component\\PropertyInfo;

/**
 * Default {@see PropertyInfoExtractorInterface} implementation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PropertyInfoExtractor implements PropertyInfoExtractorInterface, PropertyInitializableExtractorInterface
{
    private \$listExtractors;
    private \$typeExtractors;
    private \$descriptionExtractors;
    private \$accessExtractors;
    private \$initializableExtractors;

    /**
     * @param iterable|PropertyListExtractorInterface[]          \$listExtractors
     * @param iterable|PropertyTypeExtractorInterface[]          \$typeExtractors
     * @param iterable|PropertyDescriptionExtractorInterface[]   \$descriptionExtractors
     * @param iterable|PropertyAccessExtractorInterface[]        \$accessExtractors
     * @param iterable|PropertyInitializableExtractorInterface[] \$initializableExtractors
     */
    public function __construct(iterable \$listExtractors = [], iterable \$typeExtractors = [], iterable \$descriptionExtractors = [], iterable \$accessExtractors = [], iterable \$initializableExtractors = [])
    {
        \$this->listExtractors = \$listExtractors;
        \$this->typeExtractors = \$typeExtractors;
        \$this->descriptionExtractors = \$descriptionExtractors;
        \$this->accessExtractors = \$accessExtractors;
        \$this->initializableExtractors = \$initializableExtractors;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return \$this->extract(\$this->listExtractors, 'getProperties', [\$class, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->descriptionExtractors, 'getShortDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->descriptionExtractors, 'getLongDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->typeExtractors, 'getTypes', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->accessExtractors, 'isReadable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return \$this->extract(\$this->accessExtractors, 'isWritable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return \$this->extract(\$this->initializableExtractors, 'isInitializable', [\$class, \$property, \$context]);
    }

    /**
     * Iterates over registered extractors and return the first value found.
     *
     * @return mixed
     */
    private function extract(iterable \$extractors, string \$method, array \$arguments)
    {
        foreach (\$extractors as \$extractor) {
            if (null !== \$value = \$extractor->{\$method}(...\$arguments)) {
                return \$value;
            }
        }

        return null;
    }
}
", "vendor/symfony/property-info/PropertyInfoExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/PropertyInfoExtractor.php");
    }
}
