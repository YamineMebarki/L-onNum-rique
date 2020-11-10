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

/* vendor/symfony/serializer/Normalizer/PropertyNormalizer.php */
class __TwigTemplate_b32da5ae08b647472b7e95b0314598f140256a759ba51475409d04f5dda3f378 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/PropertyNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/PropertyNormalizer.php"));

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

namespace Symfony\\Component\\Serializer\\Normalizer;

/**
 * Converts between objects and arrays by mapping properties.
 *
 * The normalization process looks for all the object's properties (public and private).
 * The result is a map from property names to property values. Property values
 * are normalized through the serializer.
 *
 * The denormalization first looks at the constructor of the given class to see
 * if any of the parameters have the same name as one of the properties. The
 * constructor is then called with all parameters or an exception is thrown if
 * any required parameters were not present as properties. Then the denormalizer
 * walks through the given map of property names to property values to see if a
 * property with the corresponding name exists. If found, the property gets the value.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyNormalizer extends AbstractObjectNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return parent::supportsNormalization(\$data, \$format) && \$this->supports(\\get_class(\$data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return parent::supportsDenormalization(\$data, \$type, \$format) && \$this->supports(\$type);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Checks if the given class has any non-static property.
     */
    private function supports(string \$class): bool
    {
        \$class = new \\ReflectionClass(\$class);

        // We look for at least one non-static property
        do {
            foreach (\$class->getProperties() as \$property) {
                if (!\$property->isStatic()) {
                    return true;
                }
            }
        } while (\$class = \$class->getParentClass());

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function isAllowedAttribute(\$classOrObject, \$attribute, \$format = null, array \$context = [])
    {
        if (!parent::isAllowedAttribute(\$classOrObject, \$attribute, \$format, \$context)) {
            return false;
        }

        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$classOrObject, \$attribute);
            if (\$reflectionProperty->isStatic()) {
                return false;
            }
        } catch (\\ReflectionException \$reflectionException) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function extractAttributes(\$object, \$format = null, array \$context = [])
    {
        \$reflectionObject = new \\ReflectionObject(\$object);
        \$attributes = [];

        do {
            foreach (\$reflectionObject->getProperties() as \$property) {
                if (!\$this->isAllowedAttribute(\$reflectionObject->getName(), \$property->name, \$format, \$context)) {
                    continue;
                }

                \$attributes[] = \$property->name;
            }
        } while (\$reflectionObject = \$reflectionObject->getParentClass());

        return \$attributes;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeValue(\$object, \$attribute, \$format = null, array \$context = [])
    {
        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$object, \$attribute);
        } catch (\\ReflectionException \$reflectionException) {
            return null;
        }

        // Override visibility
        if (!\$reflectionProperty->isPublic()) {
            \$reflectionProperty->setAccessible(true);
        }

        return \$reflectionProperty->getValue(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function setAttributeValue(\$object, \$attribute, \$value, \$format = null, array \$context = [])
    {
        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$object, \$attribute);
        } catch (\\ReflectionException \$reflectionException) {
            return;
        }

        if (\$reflectionProperty->isStatic()) {
            return;
        }

        // Override visibility
        if (!\$reflectionProperty->isPublic()) {
            \$reflectionProperty->setAccessible(true);
        }

        \$reflectionProperty->setValue(\$object, \$value);
    }

    /**
     * @param string|object \$classOrObject
     *
     * @throws \\ReflectionException
     */
    private function getReflectionProperty(\$classOrObject, string \$attribute): \\ReflectionProperty
    {
        \$reflectionClass = new \\ReflectionClass(\$classOrObject);
        while (true) {
            try {
                return \$reflectionClass->getProperty(\$attribute);
            } catch (\\ReflectionException \$e) {
                if (!\$reflectionClass = \$reflectionClass->getParentClass()) {
                    throw \$e;
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/PropertyNormalizer.php";
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

namespace Symfony\\Component\\Serializer\\Normalizer;

/**
 * Converts between objects and arrays by mapping properties.
 *
 * The normalization process looks for all the object's properties (public and private).
 * The result is a map from property names to property values. Property values
 * are normalized through the serializer.
 *
 * The denormalization first looks at the constructor of the given class to see
 * if any of the parameters have the same name as one of the properties. The
 * constructor is then called with all parameters or an exception is thrown if
 * any required parameters were not present as properties. Then the denormalizer
 * walks through the given map of property names to property values to see if a
 * property with the corresponding name exists. If found, the property gets the value.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyNormalizer extends AbstractObjectNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return parent::supportsNormalization(\$data, \$format) && \$this->supports(\\get_class(\$data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return parent::supportsDenormalization(\$data, \$type, \$format) && \$this->supports(\$type);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Checks if the given class has any non-static property.
     */
    private function supports(string \$class): bool
    {
        \$class = new \\ReflectionClass(\$class);

        // We look for at least one non-static property
        do {
            foreach (\$class->getProperties() as \$property) {
                if (!\$property->isStatic()) {
                    return true;
                }
            }
        } while (\$class = \$class->getParentClass());

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function isAllowedAttribute(\$classOrObject, \$attribute, \$format = null, array \$context = [])
    {
        if (!parent::isAllowedAttribute(\$classOrObject, \$attribute, \$format, \$context)) {
            return false;
        }

        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$classOrObject, \$attribute);
            if (\$reflectionProperty->isStatic()) {
                return false;
            }
        } catch (\\ReflectionException \$reflectionException) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function extractAttributes(\$object, \$format = null, array \$context = [])
    {
        \$reflectionObject = new \\ReflectionObject(\$object);
        \$attributes = [];

        do {
            foreach (\$reflectionObject->getProperties() as \$property) {
                if (!\$this->isAllowedAttribute(\$reflectionObject->getName(), \$property->name, \$format, \$context)) {
                    continue;
                }

                \$attributes[] = \$property->name;
            }
        } while (\$reflectionObject = \$reflectionObject->getParentClass());

        return \$attributes;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeValue(\$object, \$attribute, \$format = null, array \$context = [])
    {
        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$object, \$attribute);
        } catch (\\ReflectionException \$reflectionException) {
            return null;
        }

        // Override visibility
        if (!\$reflectionProperty->isPublic()) {
            \$reflectionProperty->setAccessible(true);
        }

        return \$reflectionProperty->getValue(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function setAttributeValue(\$object, \$attribute, \$value, \$format = null, array \$context = [])
    {
        try {
            \$reflectionProperty = \$this->getReflectionProperty(\$object, \$attribute);
        } catch (\\ReflectionException \$reflectionException) {
            return;
        }

        if (\$reflectionProperty->isStatic()) {
            return;
        }

        // Override visibility
        if (!\$reflectionProperty->isPublic()) {
            \$reflectionProperty->setAccessible(true);
        }

        \$reflectionProperty->setValue(\$object, \$value);
    }

    /**
     * @param string|object \$classOrObject
     *
     * @throws \\ReflectionException
     */
    private function getReflectionProperty(\$classOrObject, string \$attribute): \\ReflectionProperty
    {
        \$reflectionClass = new \\ReflectionClass(\$classOrObject);
        while (true) {
            try {
                return \$reflectionClass->getProperty(\$attribute);
            } catch (\\ReflectionException \$e) {
                if (!\$reflectionClass = \$reflectionClass->getParentClass()) {
                    throw \$e;
                }
            }
        }
    }
}
", "vendor/symfony/serializer/Normalizer/PropertyNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/PropertyNormalizer.php");
    }
}
