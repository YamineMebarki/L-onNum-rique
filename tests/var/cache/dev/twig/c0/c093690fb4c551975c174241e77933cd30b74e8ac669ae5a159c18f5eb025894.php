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

/* vendor/symfony/serializer/Mapping/ClassMetadata.php */
class __TwigTemplate_1721ed79c81d7e2f1fb038f8012f90faec2964057b858042db03912d8ba7b29c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassMetadata.php"));

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

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadata implements ClassMetadataInterface
{
    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getName()} instead.
     */
    public \$name;

    /**
     * @var AttributeMetadataInterface[]
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getAttributesMetadata()} instead.
     */
    public \$attributesMetadata = [];

    /**
     * @var \\ReflectionClass
     */
    private \$reflClass;

    /**
     * @var ClassDiscriminatorMapping|null
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getClassDiscriminatorMapping()} instead.
     */
    public \$classDiscriminatorMapping;

    /**
     * Constructs a metadata for the given class.
     */
    public function __construct(string \$class, ClassDiscriminatorMapping \$classDiscriminatorMapping = null)
    {
        \$this->name = \$class;
        \$this->classDiscriminatorMapping = \$classDiscriminatorMapping;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeMetadata(AttributeMetadataInterface \$attributeMetadata)
    {
        \$this->attributesMetadata[\$attributeMetadata->getName()] = \$attributeMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesMetadata()
    {
        return \$this->attributesMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(ClassMetadataInterface \$classMetadata)
    {
        foreach (\$classMetadata->getAttributesMetadata() as \$attributeMetadata) {
            if (isset(\$this->attributesMetadata[\$attributeMetadata->getName()])) {
                \$this->attributesMetadata[\$attributeMetadata->getName()]->merge(\$attributeMetadata);
            } else {
                \$this->addAttributeMetadata(\$attributeMetadata);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReflectionClass()
    {
        if (!\$this->reflClass) {
            \$this->reflClass = new \\ReflectionClass(\$this->getName());
        }

        return \$this->reflClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassDiscriminatorMapping()
    {
        return \$this->classDiscriminatorMapping;
    }

    /**
     * {@inheritdoc}
     */
    public function setClassDiscriminatorMapping(ClassDiscriminatorMapping \$mapping = null)
    {
        \$this->classDiscriminatorMapping = \$mapping;
    }

    /**
     * Returns the names of the properties that should be serialized.
     *
     * @return string[]
     */
    public function __sleep()
    {
        return [
            'name',
            'attributesMetadata',
            'classDiscriminatorMapping',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/ClassMetadata.php";
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

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadata implements ClassMetadataInterface
{
    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getName()} instead.
     */
    public \$name;

    /**
     * @var AttributeMetadataInterface[]
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getAttributesMetadata()} instead.
     */
    public \$attributesMetadata = [];

    /**
     * @var \\ReflectionClass
     */
    private \$reflClass;

    /**
     * @var ClassDiscriminatorMapping|null
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getClassDiscriminatorMapping()} instead.
     */
    public \$classDiscriminatorMapping;

    /**
     * Constructs a metadata for the given class.
     */
    public function __construct(string \$class, ClassDiscriminatorMapping \$classDiscriminatorMapping = null)
    {
        \$this->name = \$class;
        \$this->classDiscriminatorMapping = \$classDiscriminatorMapping;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeMetadata(AttributeMetadataInterface \$attributeMetadata)
    {
        \$this->attributesMetadata[\$attributeMetadata->getName()] = \$attributeMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesMetadata()
    {
        return \$this->attributesMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(ClassMetadataInterface \$classMetadata)
    {
        foreach (\$classMetadata->getAttributesMetadata() as \$attributeMetadata) {
            if (isset(\$this->attributesMetadata[\$attributeMetadata->getName()])) {
                \$this->attributesMetadata[\$attributeMetadata->getName()]->merge(\$attributeMetadata);
            } else {
                \$this->addAttributeMetadata(\$attributeMetadata);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReflectionClass()
    {
        if (!\$this->reflClass) {
            \$this->reflClass = new \\ReflectionClass(\$this->getName());
        }

        return \$this->reflClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassDiscriminatorMapping()
    {
        return \$this->classDiscriminatorMapping;
    }

    /**
     * {@inheritdoc}
     */
    public function setClassDiscriminatorMapping(ClassDiscriminatorMapping \$mapping = null)
    {
        \$this->classDiscriminatorMapping = \$mapping;
    }

    /**
     * Returns the names of the properties that should be serialized.
     *
     * @return string[]
     */
    public function __sleep()
    {
        return [
            'name',
            'attributesMetadata',
            'classDiscriminatorMapping',
        ];
    }
}
", "vendor/symfony/serializer/Mapping/ClassMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/ClassMetadata.php");
    }
}
