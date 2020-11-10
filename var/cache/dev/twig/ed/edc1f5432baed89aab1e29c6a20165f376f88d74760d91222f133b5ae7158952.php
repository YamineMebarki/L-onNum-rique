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

/* vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php */
class __TwigTemplate_42b1617e26e940d27a209089b4c18fcd29c0de17e47178e34a5b70bac449ca8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Serializer\\Annotation\\DiscriminatorMap;
use Symfony\\Component\\Serializer\\Annotation\\Groups;
use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;
use Symfony\\Component\\Serializer\\Annotation\\SerializedName;
use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Annotation loader.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AnnotationLoader implements LoaderInterface
{
    private \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        \$reflectionClass = \$classMetadata->getReflectionClass();
        \$className = \$reflectionClass->name;
        \$loaded = false;

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();

        foreach (\$this->reader->getClassAnnotations(\$reflectionClass) as \$annotation) {
            if (\$annotation instanceof DiscriminatorMap) {
                \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                    \$annotation->getTypeProperty(),
                    \$annotation->getMapping()
                ));
            }
        }

        foreach (\$reflectionClass->getProperties() as \$property) {
            if (!isset(\$attributesMetadata[\$property->name])) {
                \$attributesMetadata[\$property->name] = new AttributeMetadata(\$property->name);
                \$classMetadata->addAttributeMetadata(\$attributesMetadata[\$property->name]);
            }

            if (\$property->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getPropertyAnnotations(\$property) as \$annotation) {
                    if (\$annotation instanceof Groups) {
                        foreach (\$annotation->getGroups() as \$group) {
                            \$attributesMetadata[\$property->name]->addGroup(\$group);
                        }
                    } elseif (\$annotation instanceof MaxDepth) {
                        \$attributesMetadata[\$property->name]->setMaxDepth(\$annotation->getMaxDepth());
                    } elseif (\$annotation instanceof SerializedName) {
                        \$attributesMetadata[\$property->name]->setSerializedName(\$annotation->getSerializedName());
                    }

                    \$loaded = true;
                }
            }
        }

        foreach (\$reflectionClass->getMethods() as \$method) {
            if (\$method->getDeclaringClass()->name !== \$className) {
                continue;
            }

            \$accessorOrMutator = preg_match('/^(get|is|has|set)(.+)\$/i', \$method->name, \$matches);
            if (\$accessorOrMutator) {
                \$attributeName = lcfirst(\$matches[2]);

                if (isset(\$attributesMetadata[\$attributeName])) {
                    \$attributeMetadata = \$attributesMetadata[\$attributeName];
                } else {
                    \$attributesMetadata[\$attributeName] = \$attributeMetadata = new AttributeMetadata(\$attributeName);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }
            }

            foreach (\$this->reader->getMethodAnnotations(\$method) as \$annotation) {
                if (\$annotation instanceof Groups) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('Groups on \"%s::%s\" cannot be added. Groups can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    foreach (\$annotation->getGroups() as \$group) {
                        \$attributeMetadata->addGroup(\$group);
                    }
                } elseif (\$annotation instanceof MaxDepth) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('MaxDepth on \"%s::%s\" cannot be added. MaxDepth can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    \$attributeMetadata->setMaxDepth(\$annotation->getMaxDepth());
                } elseif (\$annotation instanceof SerializedName) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('SerializedName on \"%s::%s\" cannot be added. SerializedName can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    \$attributeMetadata->setSerializedName(\$annotation->getSerializedName());
                }

                \$loaded = true;
            }
        }

        return \$loaded;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php";
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

namespace Symfony\\Component\\Serializer\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Serializer\\Annotation\\DiscriminatorMap;
use Symfony\\Component\\Serializer\\Annotation\\Groups;
use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;
use Symfony\\Component\\Serializer\\Annotation\\SerializedName;
use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Annotation loader.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AnnotationLoader implements LoaderInterface
{
    private \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        \$reflectionClass = \$classMetadata->getReflectionClass();
        \$className = \$reflectionClass->name;
        \$loaded = false;

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();

        foreach (\$this->reader->getClassAnnotations(\$reflectionClass) as \$annotation) {
            if (\$annotation instanceof DiscriminatorMap) {
                \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                    \$annotation->getTypeProperty(),
                    \$annotation->getMapping()
                ));
            }
        }

        foreach (\$reflectionClass->getProperties() as \$property) {
            if (!isset(\$attributesMetadata[\$property->name])) {
                \$attributesMetadata[\$property->name] = new AttributeMetadata(\$property->name);
                \$classMetadata->addAttributeMetadata(\$attributesMetadata[\$property->name]);
            }

            if (\$property->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getPropertyAnnotations(\$property) as \$annotation) {
                    if (\$annotation instanceof Groups) {
                        foreach (\$annotation->getGroups() as \$group) {
                            \$attributesMetadata[\$property->name]->addGroup(\$group);
                        }
                    } elseif (\$annotation instanceof MaxDepth) {
                        \$attributesMetadata[\$property->name]->setMaxDepth(\$annotation->getMaxDepth());
                    } elseif (\$annotation instanceof SerializedName) {
                        \$attributesMetadata[\$property->name]->setSerializedName(\$annotation->getSerializedName());
                    }

                    \$loaded = true;
                }
            }
        }

        foreach (\$reflectionClass->getMethods() as \$method) {
            if (\$method->getDeclaringClass()->name !== \$className) {
                continue;
            }

            \$accessorOrMutator = preg_match('/^(get|is|has|set)(.+)\$/i', \$method->name, \$matches);
            if (\$accessorOrMutator) {
                \$attributeName = lcfirst(\$matches[2]);

                if (isset(\$attributesMetadata[\$attributeName])) {
                    \$attributeMetadata = \$attributesMetadata[\$attributeName];
                } else {
                    \$attributesMetadata[\$attributeName] = \$attributeMetadata = new AttributeMetadata(\$attributeName);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }
            }

            foreach (\$this->reader->getMethodAnnotations(\$method) as \$annotation) {
                if (\$annotation instanceof Groups) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('Groups on \"%s::%s\" cannot be added. Groups can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    foreach (\$annotation->getGroups() as \$group) {
                        \$attributeMetadata->addGroup(\$group);
                    }
                } elseif (\$annotation instanceof MaxDepth) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('MaxDepth on \"%s::%s\" cannot be added. MaxDepth can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    \$attributeMetadata->setMaxDepth(\$annotation->getMaxDepth());
                } elseif (\$annotation instanceof SerializedName) {
                    if (!\$accessorOrMutator) {
                        throw new MappingException(sprintf('SerializedName on \"%s::%s\" cannot be added. SerializedName can only be added on methods beginning with \"get\", \"is\", \"has\" or \"set\".', \$className, \$method->name));
                    }

                    \$attributeMetadata->setSerializedName(\$annotation->getSerializedName());
                }

                \$loaded = true;
            }
        }

        return \$loaded;
    }
}
", "vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php");
    }
}
