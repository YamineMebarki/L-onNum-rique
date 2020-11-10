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

/* vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php */
class __TwigTemplate_43ecf7b06dd355005c24de345d3ff487d4b3117aae03cc62400b0cf899a344b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php"));

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

use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Parser as YamlParser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * Loads validation metadata from a YAML file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class YamlFileLoader extends FileLoader
{
    /**
     * An array of YAML class descriptions.
     *
     * @var array
     */
    protected \$classes = null;

    /**
     * Caches the used YAML parser.
     *
     * @var YamlParser
     */
    private \$yamlParser;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        if (null === \$this->classes) {
            \$this->loadClassesFromYaml();
        }

        if (isset(\$this->classes[\$metadata->getClassName()])) {
            \$classDescription = \$this->classes[\$metadata->getClassName()];

            \$this->loadClassMetadataFromYaml(\$metadata, \$classDescription);

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
            \$this->loadClassesFromYaml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a collection of YAML nodes.
     *
     * @param array \$nodes The YAML nodes
     *
     * @return array An array of values or Constraint instances
     */
    protected function parseNodes(array \$nodes)
    {
        \$values = [];

        foreach (\$nodes as \$name => \$childNodes) {
            if (is_numeric(\$name) && \\is_array(\$childNodes) && 1 === \\count(\$childNodes)) {
                \$options = current(\$childNodes);

                if (\\is_array(\$options)) {
                    \$options = \$this->parseNodes(\$options);
                }

                \$values[] = \$this->newConstraint(key(\$childNodes), \$options);
            } else {
                if (\\is_array(\$childNodes)) {
                    \$childNodes = \$this->parseNodes(\$childNodes);
                }

                \$values[\$name] = \$childNodes;
            }
        }

        return \$values;
    }

    /**
     * Loads the YAML class descriptions from the given file.
     *
     * @param string \$path The path of the YAML file
     *
     * @return array The class descriptions
     *
     * @throws \\InvalidArgumentException If the file could not be loaded or did
     *                                   not contain a YAML array
     */
    private function parseFile(\$path)
    {
        try {
            \$classes = \$this->yamlParser->parseFile(\$path, Yaml::PARSE_CONSTANT);
        } catch (ParseException \$e) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not contain valid YAML.', \$path), 0, \$e);
        }

        // empty file
        if (null === \$classes) {
            return [];
        }

        // not an array
        if (!\\is_array(\$classes)) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" must contain a YAML array.', \$this->file));
        }

        return \$classes;
    }

    private function loadClassesFromYaml()
    {
        if (null === \$this->yamlParser) {
            \$this->yamlParser = new YamlParser();
        }

        \$this->classes = \$this->parseFile(\$this->file);

        if (isset(\$this->classes['namespaces'])) {
            foreach (\$this->classes['namespaces'] as \$alias => \$namespace) {
                \$this->addNamespaceAlias(\$alias, \$namespace);
            }

            unset(\$this->classes['namespaces']);
        }
    }

    private function loadClassMetadataFromYaml(ClassMetadata \$metadata, array \$classDescription)
    {
        if (isset(\$classDescription['group_sequence_provider'])) {
            \$metadata->setGroupSequenceProvider(
                (bool) \$classDescription['group_sequence_provider']
            );
        }

        if (isset(\$classDescription['group_sequence'])) {
            \$metadata->setGroupSequence(\$classDescription['group_sequence']);
        }

        if (isset(\$classDescription['constraints']) && \\is_array(\$classDescription['constraints'])) {
            foreach (\$this->parseNodes(\$classDescription['constraints']) as \$constraint) {
                \$metadata->addConstraint(\$constraint);
            }
        }

        if (isset(\$classDescription['properties']) && \\is_array(\$classDescription['properties'])) {
            foreach (\$classDescription['properties'] as \$property => \$constraints) {
                if (null !== \$constraints) {
                    foreach (\$this->parseNodes(\$constraints) as \$constraint) {
                        \$metadata->addPropertyConstraint(\$property, \$constraint);
                    }
                }
            }
        }

        if (isset(\$classDescription['getters']) && \\is_array(\$classDescription['getters'])) {
            foreach (\$classDescription['getters'] as \$getter => \$constraints) {
                if (null !== \$constraints) {
                    foreach (\$this->parseNodes(\$constraints) as \$constraint) {
                        \$metadata->addGetterConstraint(\$getter, \$constraint);
                    }
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
        return "vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php";
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

use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Parser as YamlParser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * Loads validation metadata from a YAML file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class YamlFileLoader extends FileLoader
{
    /**
     * An array of YAML class descriptions.
     *
     * @var array
     */
    protected \$classes = null;

    /**
     * Caches the used YAML parser.
     *
     * @var YamlParser
     */
    private \$yamlParser;

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        if (null === \$this->classes) {
            \$this->loadClassesFromYaml();
        }

        if (isset(\$this->classes[\$metadata->getClassName()])) {
            \$classDescription = \$this->classes[\$metadata->getClassName()];

            \$this->loadClassMetadataFromYaml(\$metadata, \$classDescription);

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
            \$this->loadClassesFromYaml();
        }

        return array_keys(\$this->classes);
    }

    /**
     * Parses a collection of YAML nodes.
     *
     * @param array \$nodes The YAML nodes
     *
     * @return array An array of values or Constraint instances
     */
    protected function parseNodes(array \$nodes)
    {
        \$values = [];

        foreach (\$nodes as \$name => \$childNodes) {
            if (is_numeric(\$name) && \\is_array(\$childNodes) && 1 === \\count(\$childNodes)) {
                \$options = current(\$childNodes);

                if (\\is_array(\$options)) {
                    \$options = \$this->parseNodes(\$options);
                }

                \$values[] = \$this->newConstraint(key(\$childNodes), \$options);
            } else {
                if (\\is_array(\$childNodes)) {
                    \$childNodes = \$this->parseNodes(\$childNodes);
                }

                \$values[\$name] = \$childNodes;
            }
        }

        return \$values;
    }

    /**
     * Loads the YAML class descriptions from the given file.
     *
     * @param string \$path The path of the YAML file
     *
     * @return array The class descriptions
     *
     * @throws \\InvalidArgumentException If the file could not be loaded or did
     *                                   not contain a YAML array
     */
    private function parseFile(\$path)
    {
        try {
            \$classes = \$this->yamlParser->parseFile(\$path, Yaml::PARSE_CONSTANT);
        } catch (ParseException \$e) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not contain valid YAML.', \$path), 0, \$e);
        }

        // empty file
        if (null === \$classes) {
            return [];
        }

        // not an array
        if (!\\is_array(\$classes)) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" must contain a YAML array.', \$this->file));
        }

        return \$classes;
    }

    private function loadClassesFromYaml()
    {
        if (null === \$this->yamlParser) {
            \$this->yamlParser = new YamlParser();
        }

        \$this->classes = \$this->parseFile(\$this->file);

        if (isset(\$this->classes['namespaces'])) {
            foreach (\$this->classes['namespaces'] as \$alias => \$namespace) {
                \$this->addNamespaceAlias(\$alias, \$namespace);
            }

            unset(\$this->classes['namespaces']);
        }
    }

    private function loadClassMetadataFromYaml(ClassMetadata \$metadata, array \$classDescription)
    {
        if (isset(\$classDescription['group_sequence_provider'])) {
            \$metadata->setGroupSequenceProvider(
                (bool) \$classDescription['group_sequence_provider']
            );
        }

        if (isset(\$classDescription['group_sequence'])) {
            \$metadata->setGroupSequence(\$classDescription['group_sequence']);
        }

        if (isset(\$classDescription['constraints']) && \\is_array(\$classDescription['constraints'])) {
            foreach (\$this->parseNodes(\$classDescription['constraints']) as \$constraint) {
                \$metadata->addConstraint(\$constraint);
            }
        }

        if (isset(\$classDescription['properties']) && \\is_array(\$classDescription['properties'])) {
            foreach (\$classDescription['properties'] as \$property => \$constraints) {
                if (null !== \$constraints) {
                    foreach (\$this->parseNodes(\$constraints) as \$constraint) {
                        \$metadata->addPropertyConstraint(\$property, \$constraint);
                    }
                }
            }
        }

        if (isset(\$classDescription['getters']) && \\is_array(\$classDescription['getters'])) {
            foreach (\$classDescription['getters'] as \$getter => \$constraints) {
                if (null !== \$constraints) {
                    foreach (\$this->parseNodes(\$constraints) as \$constraint) {
                        \$metadata->addGetterConstraint(\$getter, \$constraint);
                    }
                }
            }
        }
    }
}
", "vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/YamlFileLoader.php");
    }
}
