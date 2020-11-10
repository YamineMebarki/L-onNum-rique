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

/* vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php */
class __TwigTemplate_ace94d06ee5c975a472af4e58f4c9845f54cf9e83fdd77506d4ee1fd84e357ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php"));

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

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Loads XML mapping files.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class XmlFileLoader extends FileLoader
{
    /**
     * An array of {@class \\SimpleXMLElement} instances.
     *
     * @var \\SimpleXMLElement[]|null
     */
    private \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromXml();
        }

        if (!\$this->classes) {
            return false;
        }

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();

        if (isset(\$this->classes[\$classMetadata->getName()])) {
            \$xml = \$this->classes[\$classMetadata->getName()];

            foreach (\$xml->attribute as \$attribute) {
                \$attributeName = (string) \$attribute['name'];

                if (isset(\$attributesMetadata[\$attributeName])) {
                    \$attributeMetadata = \$attributesMetadata[\$attributeName];
                } else {
                    \$attributeMetadata = new AttributeMetadata(\$attributeName);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }

                foreach (\$attribute->group as \$group) {
                    \$attributeMetadata->addGroup((string) \$group);
                }

                if (isset(\$attribute['max-depth'])) {
                    \$attributeMetadata->setMaxDepth((int) \$attribute['max-depth']);
                }

                if (isset(\$attribute['serialized-name'])) {
                    \$attributeMetadata->setSerializedName((string) \$attribute['serialized-name']);
                }
            }

            if (isset(\$xml->{'discriminator-map'})) {
                \$mapping = [];
                foreach (\$xml->{'discriminator-map'}->mapping as \$element) {
                    \$elementAttributes = \$element->attributes();
                    \$mapping[(string) \$elementAttributes->type] = (string) \$elementAttributes->class;
                }

                \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                    (string) \$xml->{'discriminator-map'}->attributes()->{'type-property'},
                    \$mapping
                ));
            }

            return true;
        }

        return false;
    }

    /**
     * Return the names of the classes mapped in this file.
     *
     * @return string[] The classes names
     */
    public function getMappedClasses()
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromXml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a XML File.
     *
     * @param string \$file Path of file
     *
     * @return \\SimpleXMLElement
     *
     * @throws MappingException
     */
    private function parseFile(\$file)
    {
        try {
            \$dom = XmlUtils::loadFile(\$file, __DIR__.'/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd');
        } catch (\\Exception \$e) {
            throw new MappingException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return simplexml_import_dom(\$dom);
    }

    private function getClassesFromXml()
    {
        \$xml = \$this->parseFile(\$this->file);
        \$classes = [];

        foreach (\$xml->class as \$class) {
            \$classes[(string) \$class['name']] = \$class;
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
        return "vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php";
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

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Loads XML mapping files.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class XmlFileLoader extends FileLoader
{
    /**
     * An array of {@class \\SimpleXMLElement} instances.
     *
     * @var \\SimpleXMLElement[]|null
     */
    private \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$classMetadata)
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromXml();
        }

        if (!\$this->classes) {
            return false;
        }

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();

        if (isset(\$this->classes[\$classMetadata->getName()])) {
            \$xml = \$this->classes[\$classMetadata->getName()];

            foreach (\$xml->attribute as \$attribute) {
                \$attributeName = (string) \$attribute['name'];

                if (isset(\$attributesMetadata[\$attributeName])) {
                    \$attributeMetadata = \$attributesMetadata[\$attributeName];
                } else {
                    \$attributeMetadata = new AttributeMetadata(\$attributeName);
                    \$classMetadata->addAttributeMetadata(\$attributeMetadata);
                }

                foreach (\$attribute->group as \$group) {
                    \$attributeMetadata->addGroup((string) \$group);
                }

                if (isset(\$attribute['max-depth'])) {
                    \$attributeMetadata->setMaxDepth((int) \$attribute['max-depth']);
                }

                if (isset(\$attribute['serialized-name'])) {
                    \$attributeMetadata->setSerializedName((string) \$attribute['serialized-name']);
                }
            }

            if (isset(\$xml->{'discriminator-map'})) {
                \$mapping = [];
                foreach (\$xml->{'discriminator-map'}->mapping as \$element) {
                    \$elementAttributes = \$element->attributes();
                    \$mapping[(string) \$elementAttributes->type] = (string) \$elementAttributes->class;
                }

                \$classMetadata->setClassDiscriminatorMapping(new ClassDiscriminatorMapping(
                    (string) \$xml->{'discriminator-map'}->attributes()->{'type-property'},
                    \$mapping
                ));
            }

            return true;
        }

        return false;
    }

    /**
     * Return the names of the classes mapped in this file.
     *
     * @return string[] The classes names
     */
    public function getMappedClasses()
    {
        if (null === \$this->classes) {
            \$this->classes = \$this->getClassesFromXml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a XML File.
     *
     * @param string \$file Path of file
     *
     * @return \\SimpleXMLElement
     *
     * @throws MappingException
     */
    private function parseFile(\$file)
    {
        try {
            \$dom = XmlUtils::loadFile(\$file, __DIR__.'/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd');
        } catch (\\Exception \$e) {
            throw new MappingException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return simplexml_import_dom(\$dom);
    }

    private function getClassesFromXml()
    {
        \$xml = \$this->parseFile(\$this->file);
        \$classes = [];

        foreach (\$xml->class as \$class) {
            \$classes[(string) \$class['name']] = \$class;
        }

        return \$classes;
    }
}
", "vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Loader/XmlFileLoader.php");
    }
}
