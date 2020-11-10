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

/* vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php */
class __TwigTemplate_bcb0e27c7a87c5241950d0ba35258508d4093eecebc541d61a97c64ef428ee2d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php"));

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

use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YAML File Loader.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlFileLoader extends FileLoader
{
    private \$yamlParser;

    /**
     * An array of YAML class descriptions.
     *
     * @var array
     */
    private \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromYaml();
        }

        if (!\$this->classes) {
            return false;
        }

        if (!isset(\$this->classes[\$classMetadata->getName()])) {
            return false;
        }

        \$yaml = \$this->classes[\$classMetadata->getName()];

        if (isset(\$yaml['attributes']) && \\is_array(\$yaml['attributes'])) {
            \$attributesMetadata = \$classMetadata->getAttributesMetadata();

            foreach (\$yaml['attributes'] as \$attribute => \$data) {
                if (isset(\$attributesMetadata[\$attribute])) {
                    \$attributeMetadata = \$attributesMetadata[\$attribute];
                } else {
                    \$attributeMetadata = new AttributeMetadata(\$attribute);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }

                if (isset(\$data['groups'])) {
                    if (!\\is_array(\$data['groups'])) {
                        throw new MappingException(sprintf('The \"groups\" key must be an array of strings in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    foreach (\$data['groups'] as \$group) {
                        if (!\\is_string(\$group)) {
                            throw new MappingException(sprintf('Group names must be strings in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                        }

                        \$attributeMetadata->addGroup(\$group);
                    }
                }

                if (isset(\$data['max_depth'])) {
                    if (!\\is_int(\$data['max_depth'])) {
                        throw new MappingException(sprintf('The \"max_depth\" value must be an integer in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    \$attributeMetadata->setMaxDepth(\$data['max_depth']);
                }

                if (isset(\$data['serialized_name'])) {
                    if (!\\is_string(\$data['serialized_name']) || empty(\$data['serialized_name'])) {
                        throw new MappingException(sprintf('The \"serialized_name\" value must be a non-empty string in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    \$attributeMetadata->setSerializedName(\$data['serialized_name']);
                }
            }
        }

        if (isset(\$yaml['discriminator_map'])) {
            if (!isset(\$yaml['discriminator_map']['type_property'])) {
                throw new MappingException(sprintf('The \"type_property\" key must be set for the discriminator map of the class \"%s\" in \"%s\".', \$classMetadata->getName(), \$this->file));
            }

            if (!isset(\$yaml['discriminator_map']['mapping'])) {
                throw new MappingException(sprintf('The \"mapping\" key must be set for the discriminator map of the class \"%s\" in \"%s\".', \$classMetadata->getName(), \$this->file));
            }

            \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                \$yaml['discriminator_map']['type_property'],
                \$yaml['discriminator_map']['mapping']
            ));
        }

        return true;
    }

    /**
     * Return the names of the classes mapped in this file.
     *
     * @return string[] The classes names
     */
    public function getMappedClasses()
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromYaml();
        }

        return array_keys(\$this->classes);
    }

    private function getClassesFromYaml()
    {
        if (!stream_is_local(\$this->file)) {
            throw new MappingException(sprintf('This is not a local file \"%s\".', \$this->file));
        }

        if (null === \$this->yamlParser) {
            \$this->yamlParser = new Parser();
        }

        \$classes = \$this->yamlParser->parseFile(\$this->file, Yaml::PARSE_CONSTANT);

        if (empty(\$classes)) {
            return [];
        }

        if (!\\is_array(\$classes)) {
            throw new MappingException(sprintf('The file \"%s\" must contain a YAML array.', \$this->file));
        }

        return \$classes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php";
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

use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YAML File Loader.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlFileLoader extends FileLoader
{
    private \$yamlParser;

    /**
     * An array of YAML class descriptions.
     *
     * @var array
     */
    private \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromYaml();
        }

        if (!\$this->classes) {
            return false;
        }

        if (!isset(\$this->classes[\$classMetadata->getName()])) {
            return false;
        }

        \$yaml = \$this->classes[\$classMetadata->getName()];

        if (isset(\$yaml['attributes']) && \\is_array(\$yaml['attributes'])) {
            \$attributesMetadata = \$classMetadata->getAttributesMetadata();

            foreach (\$yaml['attributes'] as \$attribute => \$data) {
                if (isset(\$attributesMetadata[\$attribute])) {
                    \$attributeMetadata = \$attributesMetadata[\$attribute];
                } else {
                    \$attributeMetadata = new AttributeMetadata(\$attribute);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }

                if (isset(\$data['groups'])) {
                    if (!\\is_array(\$data['groups'])) {
                        throw new MappingException(sprintf('The \"groups\" key must be an array of strings in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    foreach (\$data['groups'] as \$group) {
                        if (!\\is_string(\$group)) {
                            throw new MappingException(sprintf('Group names must be strings in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                        }

                        \$attributeMetadata->addGroup(\$group);
                    }
                }

                if (isset(\$data['max_depth'])) {
                    if (!\\is_int(\$data['max_depth'])) {
                        throw new MappingException(sprintf('The \"max_depth\" value must be an integer in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    \$attributeMetadata->setMaxDepth(\$data['max_depth']);
                }

                if (isset(\$data['serialized_name'])) {
                    if (!\\is_string(\$data['serialized_name']) || empty(\$data['serialized_name'])) {
                        throw new MappingException(sprintf('The \"serialized_name\" value must be a non-empty string in \"%s\" for the attribute \"%s\" of the class \"%s\".', \$this->file, \$attribute, \$classMetadata->getName()));
                    }

                    \$attributeMetadata->setSerializedName(\$data['serialized_name']);
                }
            }
        }

        if (isset(\$yaml['discriminator_map'])) {
            if (!isset(\$yaml['discriminator_map']['type_property'])) {
                throw new MappingException(sprintf('The \"type_property\" key must be set for the discriminator map of the class \"%s\" in \"%s\".', \$classMetadata->getName(), \$this->file));
            }

            if (!isset(\$yaml['discriminator_map']['mapping'])) {
                throw new MappingException(sprintf('The \"mapping\" key must be set for the discriminator map of the class \"%s\" in \"%s\".', \$classMetadata->getName(), \$this->file));
            }

            \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                \$yaml['discriminator_map']['type_property'],
                \$yaml['discriminator_map']['mapping']
            ));
        }

        return true;
    }

    /**
     * Return the names of the classes mapped in this file.
     *
     * @return string[] The classes names
     */
    public function getMappedClasses()
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromYaml();
        }

        return array_keys(\$this->classes);
    }

    private function getClassesFromYaml()
    {
        if (!stream_is_local(\$this->file)) {
            throw new MappingException(sprintf('This is not a local file \"%s\".', \$this->file));
        }

        if (null === \$this->yamlParser) {
            \$this->yamlParser = new Parser();
        }

        \$classes = \$this->yamlParser->parseFile(\$this->file, Yaml::PARSE_CONSTANT);

        if (empty(\$classes)) {
            return [];
        }

        if (!\\is_array(\$classes)) {
            throw new MappingException(sprintf('The file \"%s\" must contain a YAML array.', \$this->file));
        }

        return \$classes;
    }
}
", "vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php");
    }
}
