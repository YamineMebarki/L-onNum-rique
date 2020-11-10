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

/* vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php */
class __TwigTemplate_ad14f9358dd842ea8ed1364c750ecc03f4580e5091d797e8c2542f3960504134 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping;

use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
class ClassDiscriminatorFromClassMetadata implements ClassDiscriminatorResolverInterface
{
    /**
     * @var ClassMetadataFactoryInterface
     */
    private \$classMetadataFactory;
    private \$mappingForMappedObjectCache = [];

    public function __construct(ClassMetadataFactoryInterface \$classMetadataFactory)
    {
        \$this->classMetadataFactory = \$classMetadataFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getMappingForClass(string \$class): ?ClassDiscriminatorMapping
    {
        if (\$this->classMetadataFactory->hasMetadataFor(\$class)) {
            return \$this->classMetadataFactory->getMetadataFor(\$class)->getClassDiscriminatorMapping();
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMappingForMappedObject(\$object): ?ClassDiscriminatorMapping
    {
        if (\$this->classMetadataFactory->hasMetadataFor(\$object)) {
            \$metadata = \$this->classMetadataFactory->getMetadataFor(\$object);

            if (null !== \$metadata->getClassDiscriminatorMapping()) {
                return \$metadata->getClassDiscriminatorMapping();
            }
        }

        \$cacheKey = \\is_object(\$object) ? \\get_class(\$object) : \$object;
        if (!\\array_key_exists(\$cacheKey, \$this->mappingForMappedObjectCache)) {
            \$this->mappingForMappedObjectCache[\$cacheKey] = \$this->resolveMappingForMappedObject(\$object);
        }

        return \$this->mappingForMappedObjectCache[\$cacheKey];
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeForMappedObject(\$object): ?string
    {
        if (null === \$mapping = \$this->getMappingForMappedObject(\$object)) {
            return null;
        }

        return \$mapping->getMappedObjectType(\$object);
    }

    private function resolveMappingForMappedObject(\$object)
    {
        \$reflectionClass = new \\ReflectionClass(\$object);
        if (\$parentClass = \$reflectionClass->getParentClass()) {
            return \$this->getMappingForMappedObject(\$parentClass->getName());
        }

        foreach (\$reflectionClass->getInterfaceNames() as \$interfaceName) {
            if (null !== (\$interfaceMapping = \$this->getMappingForMappedObject(\$interfaceName))) {
                return \$interfaceMapping;
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
        return "vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php";
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

namespace Symfony\\Component\\Serializer\\Mapping;

use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
class ClassDiscriminatorFromClassMetadata implements ClassDiscriminatorResolverInterface
{
    /**
     * @var ClassMetadataFactoryInterface
     */
    private \$classMetadataFactory;
    private \$mappingForMappedObjectCache = [];

    public function __construct(ClassMetadataFactoryInterface \$classMetadataFactory)
    {
        \$this->classMetadataFactory = \$classMetadataFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getMappingForClass(string \$class): ?ClassDiscriminatorMapping
    {
        if (\$this->classMetadataFactory->hasMetadataFor(\$class)) {
            return \$this->classMetadataFactory->getMetadataFor(\$class)->getClassDiscriminatorMapping();
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMappingForMappedObject(\$object): ?ClassDiscriminatorMapping
    {
        if (\$this->classMetadataFactory->hasMetadataFor(\$object)) {
            \$metadata = \$this->classMetadataFactory->getMetadataFor(\$object);

            if (null !== \$metadata->getClassDiscriminatorMapping()) {
                return \$metadata->getClassDiscriminatorMapping();
            }
        }

        \$cacheKey = \\is_object(\$object) ? \\get_class(\$object) : \$object;
        if (!\\array_key_exists(\$cacheKey, \$this->mappingForMappedObjectCache)) {
            \$this->mappingForMappedObjectCache[\$cacheKey] = \$this->resolveMappingForMappedObject(\$object);
        }

        return \$this->mappingForMappedObjectCache[\$cacheKey];
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeForMappedObject(\$object): ?string
    {
        if (null === \$mapping = \$this->getMappingForMappedObject(\$object)) {
            return null;
        }

        return \$mapping->getMappedObjectType(\$object);
    }

    private function resolveMappingForMappedObject(\$object)
    {
        \$reflectionClass = new \\ReflectionClass(\$object);
        if (\$parentClass = \$reflectionClass->getParentClass()) {
            return \$this->getMappingForMappedObject(\$parentClass->getName());
        }

        foreach (\$reflectionClass->getInterfaceNames() as \$interfaceName) {
            if (null !== (\$interfaceMapping = \$this->getMappingForMappedObject(\$interfaceName))) {
                return \$interfaceMapping;
            }
        }

        return null;
    }
}
", "vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php");
    }
}
