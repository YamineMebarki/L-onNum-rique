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

/* vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php */
class __TwigTemplate_09314679dbcfb35c1ed76f835a682f1e830ff651350fef64fe1fc70b2c030646 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata from an XML file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class XmlFileLoader extends FileLoader
{
    /**
     * The XML nodes of the mapping file.
     *
     * @var \\SimpleXMLElement[]|null
     */
    protected \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        if (null === \$this->classes) {
            \$this->loadClassesFromXml();
        }

        if (isset(\$this->classes[\$metadata->getClassName()])) {
            \$classDescription = \$this->classes[\$metadata->getClassName()];

            \$this->loadClassMetadataFromXml(\$metadata, \$classDescription);

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
            \$this->loadClassesFromXml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a collection of \"constraint\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The Constraint instances
     */
    protected function parseConstraints(\\SimpleXMLElement \$nodes)
    {
        \$constraints = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$options = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$options = \$this->parseConstraints(\$node->constraint);
                } elseif (\\count(\$node->option) > 0) {
                    \$options = \$this->parseOptions(\$node->option);
                } else {
                    \$options = [];
                }
            } elseif (\\strlen((string) \$node) > 0) {
                \$options = XmlUtils::phpize(trim(\$node));
            } else {
                \$options = null;
            }

            \$constraints[] = \$this->newConstraint((string) \$node['name'], \$options);
        }

        return \$constraints;
    }

    /**
     * Parses a collection of \"value\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The values
     */
    protected function parseValues(\\SimpleXMLElement \$nodes)
    {
        \$values = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$value = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$value = \$this->parseConstraints(\$node->constraint);
                } else {
                    \$value = [];
                }
            } else {
                \$value = trim(\$node);
            }

            if (isset(\$node['key'])) {
                \$values[(string) \$node['key']] = \$value;
            } else {
                \$values[] = \$value;
            }
        }

        return \$values;
    }

    /**
     * Parses a collection of \"option\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The options
     */
    protected function parseOptions(\\SimpleXMLElement \$nodes)
    {
        \$options = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$value = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$value = \$this->parseConstraints(\$node->constraint);
                } else {
                    \$value = [];
                }
            } else {
                \$value = XmlUtils::phpize(\$node);
                if (\\is_string(\$value)) {
                    \$value = trim(\$value);
                }
            }

            \$options[(string) \$node['name']] = \$value;
        }

        return \$options;
    }

    /**
     * Loads the XML class descriptions from the given file.
     *
     * @param string \$path The path of the XML file
     *
     * @return \\SimpleXMLElement The class descriptions
     *
     * @throws MappingException If the file could not be loaded
     */
    protected function parseFile(\$path)
    {
        try {
            \$dom = XmlUtils::loadFile(\$path, __DIR__.'/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd');
        } catch (\\Exception \$e) {
            throw new MappingException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return simplexml_import_dom(\$dom);
    }

    private function loadClassesFromXml()
    {
        // This method may throw an exception. Do not modify the class'
        // state before it completes
        \$xml = \$this->parseFile(\$this->file);

        \$this->classes = [];

        foreach (\$xml->namespace as \$namespace) {
            \$this->addNamespaceAlias((string) \$namespace['prefix'], trim((string) \$namespace));
        }

        foreach (\$xml->class as \$class) {
            \$this->classes[(string) \$class['name']] = \$class;
        }
    }

    private function loadClassMetadataFromXml(ClassMetadata \$metadata, \\SimpleXMLElement \$classDescription)
    {
        if (\\count(\$classDescription->{'group-sequence-provider'}) > 0) {
            \$metadata->setGroupSequenceProvider(true);
        }

        foreach (\$classDescription->{'group-sequence'} as \$groupSequence) {
            if (\\count(\$groupSequence->value) > 0) {
                \$metadata->setGroupSequence(\$this->parseValues(\$groupSequence[0]->value));
            }
        }

        foreach (\$this->parseConstraints(\$classDescription->constraint) as \$constraint) {
            \$metadata->addConstraint(\$constraint);
        }

        foreach (\$classDescription->property as \$property) {
            foreach (\$this->parseConstraints(\$property->constraint) as \$constraint) {
                \$metadata->addPropertyConstraint((string) \$property['name'], \$constraint);
            }
        }

        foreach (\$classDescription->getter as \$getter) {
            foreach (\$this->parseConstraints(\$getter->constraint) as \$constraint) {
                \$metadata->addGetterConstraint((string) \$getter['property'], \$constraint);
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
        return "vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata from an XML file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class XmlFileLoader extends FileLoader
{
    /**
     * The XML nodes of the mapping file.
     *
     * @var \\SimpleXMLElement[]|null
     */
    protected \$classes;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        if (null === \$this->classes) {
            \$this->loadClassesFromXml();
        }

        if (isset(\$this->classes[\$metadata->getClassName()])) {
            \$classDescription = \$this->classes[\$metadata->getClassName()];

            \$this->loadClassMetadataFromXml(\$metadata, \$classDescription);

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
            \$this->loadClassesFromXml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a collection of \"constraint\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The Constraint instances
     */
    protected function parseConstraints(\\SimpleXMLElement \$nodes)
    {
        \$constraints = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$options = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$options = \$this->parseConstraints(\$node->constraint);
                } elseif (\\count(\$node->option) > 0) {
                    \$options = \$this->parseOptions(\$node->option);
                } else {
                    \$options = [];
                }
            } elseif (\\strlen((string) \$node) > 0) {
                \$options = XmlUtils::phpize(trim(\$node));
            } else {
                \$options = null;
            }

            \$constraints[] = \$this->newConstraint((string) \$node['name'], \$options);
        }

        return \$constraints;
    }

    /**
     * Parses a collection of \"value\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The values
     */
    protected function parseValues(\\SimpleXMLElement \$nodes)
    {
        \$values = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$value = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$value = \$this->parseConstraints(\$node->constraint);
                } else {
                    \$value = [];
                }
            } else {
                \$value = trim(\$node);
            }

            if (isset(\$node['key'])) {
                \$values[(string) \$node['key']] = \$value;
            } else {
                \$values[] = \$value;
            }
        }

        return \$values;
    }

    /**
     * Parses a collection of \"option\" XML nodes.
     *
     * @param \\SimpleXMLElement \$nodes The XML nodes
     *
     * @return array The options
     */
    protected function parseOptions(\\SimpleXMLElement \$nodes)
    {
        \$options = [];

        foreach (\$nodes as \$node) {
            if (\\count(\$node) > 0) {
                if (\\count(\$node->value) > 0) {
                    \$value = \$this->parseValues(\$node->value);
                } elseif (\\count(\$node->constraint) > 0) {
                    \$value = \$this->parseConstraints(\$node->constraint);
                } else {
                    \$value = [];
                }
            } else {
                \$value = XmlUtils::phpize(\$node);
                if (\\is_string(\$value)) {
                    \$value = trim(\$value);
                }
            }

            \$options[(string) \$node['name']] = \$value;
        }

        return \$options;
    }

    /**
     * Loads the XML class descriptions from the given file.
     *
     * @param string \$path The path of the XML file
     *
     * @return \\SimpleXMLElement The class descriptions
     *
     * @throws MappingException If the file could not be loaded
     */
    protected function parseFile(\$path)
    {
        try {
            \$dom = XmlUtils::loadFile(\$path, __DIR__.'/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd');
        } catch (\\Exception \$e) {
            throw new MappingException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return simplexml_import_dom(\$dom);
    }

    private function loadClassesFromXml()
    {
        // This method may throw an exception. Do not modify the class'
        // state before it completes
        \$xml = \$this->parseFile(\$this->file);

        \$this->classes = [];

        foreach (\$xml->namespace as \$namespace) {
            \$this->addNamespaceAlias((string) \$namespace['prefix'], trim((string) \$namespace));
        }

        foreach (\$xml->class as \$class) {
            \$this->classes[(string) \$class['name']] = \$class;
        }
    }

    private function loadClassMetadataFromXml(ClassMetadata \$metadata, \\SimpleXMLElement \$classDescription)
    {
        if (\\count(\$classDescription->{'group-sequence-provider'}) > 0) {
            \$metadata->setGroupSequenceProvider(true);
        }

        foreach (\$classDescription->{'group-sequence'} as \$groupSequence) {
            if (\\count(\$groupSequence->value) > 0) {
                \$metadata->setGroupSequence(\$this->parseValues(\$groupSequence[0]->value));
            }
        }

        foreach (\$this->parseConstraints(\$classDescription->constraint) as \$constraint) {
            \$metadata->addConstraint(\$constraint);
        }

        foreach (\$classDescription->property as \$property) {
            foreach (\$this->parseConstraints(\$property->constraint) as \$constraint) {
                \$metadata->addPropertyConstraint((string) \$property['name'], \$constraint);
            }
        }

        foreach (\$classDescription->getter as \$getter) {
            foreach (\$this->parseConstraints(\$getter->constraint) as \$constraint) {
                \$metadata->addGetterConstraint((string) \$getter['property'], \$constraint);
            }
        }
    }
}
", "vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/XmlFileLoader.php");
    }
}
