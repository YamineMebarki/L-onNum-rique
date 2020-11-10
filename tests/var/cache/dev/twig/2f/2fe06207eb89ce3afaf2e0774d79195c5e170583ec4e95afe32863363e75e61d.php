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

/* vendor/symfony/property-info/PropertyInfoCacheExtractor.php */
class __TwigTemplate_dda4e55084433996fc5c1193b3115bf0e2972893a2c6bce12bdadb8551b5887b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/PropertyInfoCacheExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/PropertyInfoCacheExtractor.php"));

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

use Psr\\Cache\\CacheItemPoolInterface;

/**
 * Adds a PSR-6 cache layer on top of an extractor.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PropertyInfoCacheExtractor implements PropertyInfoExtractorInterface, PropertyInitializableExtractorInterface
{
    private \$propertyInfoExtractor;
    private \$cacheItemPool;
    private \$arrayCache = [];

    public function __construct(PropertyInfoExtractorInterface \$propertyInfoExtractor, CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->propertyInfoExtractor = \$propertyInfoExtractor;
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return \$this->extract('isReadable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return \$this->extract('isWritable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getShortDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getLongDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return \$this->extract('getProperties', [\$class, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getTypes', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return \$this->extract('isInitializable', [\$class, \$property, \$context]);
    }

    /**
     * Retrieves the cached data if applicable or delegates to the decorated extractor.
     *
     * @return mixed
     */
    private function extract(string \$method, array \$arguments)
    {
        try {
            \$serializedArguments = serialize(\$arguments);
        } catch (\\Exception \$exception) {
            // If arguments are not serializable, skip the cache
            return \$this->propertyInfoExtractor->{\$method}(...\$arguments);
        }

        // Calling rawurlencode escapes special characters not allowed in PSR-6's keys
        \$key = rawurlencode(\$method.'.'.\$serializedArguments);

        if (\\array_key_exists(\$key, \$this->arrayCache)) {
            return \$this->arrayCache[\$key];
        }

        \$item = \$this->cacheItemPool->getItem(\$key);

        if (\$item->isHit()) {
            return \$this->arrayCache[\$key] = \$item->get();
        }

        \$value = \$this->propertyInfoExtractor->{\$method}(...\$arguments);
        \$item->set(\$value);
        \$this->cacheItemPool->save(\$item);

        return \$this->arrayCache[\$key] = \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/PropertyInfoCacheExtractor.php";
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

use Psr\\Cache\\CacheItemPoolInterface;

/**
 * Adds a PSR-6 cache layer on top of an extractor.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PropertyInfoCacheExtractor implements PropertyInfoExtractorInterface, PropertyInitializableExtractorInterface
{
    private \$propertyInfoExtractor;
    private \$cacheItemPool;
    private \$arrayCache = [];

    public function __construct(PropertyInfoExtractorInterface \$propertyInfoExtractor, CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->propertyInfoExtractor = \$propertyInfoExtractor;
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return \$this->extract('isReadable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return \$this->extract('isWritable', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getShortDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getLongDescription', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return \$this->extract('getProperties', [\$class, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return \$this->extract('getTypes', [\$class, \$property, \$context]);
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return \$this->extract('isInitializable', [\$class, \$property, \$context]);
    }

    /**
     * Retrieves the cached data if applicable or delegates to the decorated extractor.
     *
     * @return mixed
     */
    private function extract(string \$method, array \$arguments)
    {
        try {
            \$serializedArguments = serialize(\$arguments);
        } catch (\\Exception \$exception) {
            // If arguments are not serializable, skip the cache
            return \$this->propertyInfoExtractor->{\$method}(...\$arguments);
        }

        // Calling rawurlencode escapes special characters not allowed in PSR-6's keys
        \$key = rawurlencode(\$method.'.'.\$serializedArguments);

        if (\\array_key_exists(\$key, \$this->arrayCache)) {
            return \$this->arrayCache[\$key];
        }

        \$item = \$this->cacheItemPool->getItem(\$key);

        if (\$item->isHit()) {
            return \$this->arrayCache[\$key] = \$item->get();
        }

        \$value = \$this->propertyInfoExtractor->{\$method}(...\$arguments);
        \$item->set(\$value);
        \$this->cacheItemPool->save(\$item);

        return \$this->arrayCache[\$key] = \$value;
    }
}
", "vendor/symfony/property-info/PropertyInfoCacheExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/PropertyInfoCacheExtractor.php");
    }
}
