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

/* vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php */
class __TwigTemplate_f15c5ed9bb2fbe7266902efa49f0cdff5e8185824f49396e419a28ef8d486ed1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php"));

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

namespace Symfony\\Component\\Serializer\\NameConverter;

use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class MetadataAwareNameConverter implements AdvancedNameConverterInterface
{
    private \$metadataFactory;

    /**
     * @var NameConverterInterface|AdvancedNameConverterInterface|null
     */
    private \$fallbackNameConverter;

    private static \$normalizeCache = [];

    private static \$denormalizeCache = [];

    private static \$attributesMetadataCache = [];

    public function __construct(ClassMetadataFactoryInterface \$metadataFactory, NameConverterInterface \$fallbackNameConverter = null)
    {
        \$this->metadataFactory = \$metadataFactory;
        \$this->fallbackNameConverter = \$fallbackNameConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        if (null === \$class) {
            return \$this->normalizeFallback(\$propertyName, \$class, \$format, \$context);
        }

        if (!isset(self::\$normalizeCache[\$class][\$propertyName])) {
            self::\$normalizeCache[\$class][\$propertyName] = \$this->getCacheValueForNormalization(\$propertyName, \$class);
        }

        return self::\$normalizeCache[\$class][\$propertyName] ?? \$this->normalizeFallback(\$propertyName, \$class, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        if (null === \$class) {
            return \$this->denormalizeFallback(\$propertyName, \$class, \$format, \$context);
        }

        if (!isset(self::\$denormalizeCache[\$class][\$propertyName])) {
            self::\$denormalizeCache[\$class][\$propertyName] = \$this->getCacheValueForDenormalization(\$propertyName, \$class);
        }

        return self::\$denormalizeCache[\$class][\$propertyName] ?? \$this->denormalizeFallback(\$propertyName, \$class, \$format, \$context);
    }

    private function getCacheValueForNormalization(\$propertyName, string \$class)
    {
        if (!\$this->metadataFactory->hasMetadataFor(\$class)) {
            return null;
        }

        \$attributesMetadata = \$this->metadataFactory->getMetadataFor(\$class)->getAttributesMetadata();
        if (!isset(\$attributesMetadata[\$propertyName])) {
            return null;
        }

        return \$attributesMetadata[\$propertyName]->getSerializedName() ?? null;
    }

    private function normalizeFallback(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        return \$this->fallbackNameConverter ? \$this->fallbackNameConverter->normalize(\$propertyName, \$class, \$format, \$context) : \$propertyName;
    }

    private function getCacheValueForDenormalization(\$propertyName, string \$class)
    {
        if (!isset(self::\$attributesMetadataCache[\$class])) {
            self::\$attributesMetadataCache[\$class] = \$this->getCacheValueForAttributesMetadata(\$class);
        }

        return self::\$attributesMetadataCache[\$class][\$propertyName] ?? null;
    }

    private function denormalizeFallback(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        return \$this->fallbackNameConverter ? \$this->fallbackNameConverter->denormalize(\$propertyName, \$class, \$format, \$context) : \$propertyName;
    }

    private function getCacheValueForAttributesMetadata(string \$class): array
    {
        if (!\$this->metadataFactory->hasMetadataFor(\$class)) {
            return [];
        }

        \$classMetadata = \$this->metadataFactory->getMetadataFor(\$class);

        \$cache = [];
        foreach (\$classMetadata->getAttributesMetadata() as \$name => \$metadata) {
            if (null === \$metadata->getSerializedName()) {
                continue;
            }

            \$cache[\$metadata->getSerializedName()] = \$name;
        }

        return \$cache;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php";
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

namespace Symfony\\Component\\Serializer\\NameConverter;

use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class MetadataAwareNameConverter implements AdvancedNameConverterInterface
{
    private \$metadataFactory;

    /**
     * @var NameConverterInterface|AdvancedNameConverterInterface|null
     */
    private \$fallbackNameConverter;

    private static \$normalizeCache = [];

    private static \$denormalizeCache = [];

    private static \$attributesMetadataCache = [];

    public function __construct(ClassMetadataFactoryInterface \$metadataFactory, NameConverterInterface \$fallbackNameConverter = null)
    {
        \$this->metadataFactory = \$metadataFactory;
        \$this->fallbackNameConverter = \$fallbackNameConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        if (null === \$class) {
            return \$this->normalizeFallback(\$propertyName, \$class, \$format, \$context);
        }

        if (!isset(self::\$normalizeCache[\$class][\$propertyName])) {
            self::\$normalizeCache[\$class][\$propertyName] = \$this->getCacheValueForNormalization(\$propertyName, \$class);
        }

        return self::\$normalizeCache[\$class][\$propertyName] ?? \$this->normalizeFallback(\$propertyName, \$class, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        if (null === \$class) {
            return \$this->denormalizeFallback(\$propertyName, \$class, \$format, \$context);
        }

        if (!isset(self::\$denormalizeCache[\$class][\$propertyName])) {
            self::\$denormalizeCache[\$class][\$propertyName] = \$this->getCacheValueForDenormalization(\$propertyName, \$class);
        }

        return self::\$denormalizeCache[\$class][\$propertyName] ?? \$this->denormalizeFallback(\$propertyName, \$class, \$format, \$context);
    }

    private function getCacheValueForNormalization(\$propertyName, string \$class)
    {
        if (!\$this->metadataFactory->hasMetadataFor(\$class)) {
            return null;
        }

        \$attributesMetadata = \$this->metadataFactory->getMetadataFor(\$class)->getAttributesMetadata();
        if (!isset(\$attributesMetadata[\$propertyName])) {
            return null;
        }

        return \$attributesMetadata[\$propertyName]->getSerializedName() ?? null;
    }

    private function normalizeFallback(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        return \$this->fallbackNameConverter ? \$this->fallbackNameConverter->normalize(\$propertyName, \$class, \$format, \$context) : \$propertyName;
    }

    private function getCacheValueForDenormalization(\$propertyName, string \$class)
    {
        if (!isset(self::\$attributesMetadataCache[\$class])) {
            self::\$attributesMetadataCache[\$class] = \$this->getCacheValueForAttributesMetadata(\$class);
        }

        return self::\$attributesMetadataCache[\$class][\$propertyName] ?? null;
    }

    private function denormalizeFallback(\$propertyName, string \$class = null, string \$format = null, array \$context = [])
    {
        return \$this->fallbackNameConverter ? \$this->fallbackNameConverter->denormalize(\$propertyName, \$class, \$format, \$context) : \$propertyName;
    }

    private function getCacheValueForAttributesMetadata(string \$class): array
    {
        if (!\$this->metadataFactory->hasMetadataFor(\$class)) {
            return [];
        }

        \$classMetadata = \$this->metadataFactory->getMetadataFor(\$class);

        \$cache = [];
        foreach (\$classMetadata->getAttributesMetadata() as \$name => \$metadata) {
            if (null === \$metadata->getSerializedName()) {
                continue;
            }

            \$cache[\$metadata->getSerializedName()] = \$name;
        }

        return \$cache;
    }
}
", "vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php");
    }
}
