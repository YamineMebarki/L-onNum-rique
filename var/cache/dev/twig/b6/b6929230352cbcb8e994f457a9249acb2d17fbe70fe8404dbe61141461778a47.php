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

/* vendor/symfony/config/Util/XmlUtils.php */
class __TwigTemplate_66e5ad5276bb45373af1316cf9e80ee3b7d0e35398ae98acd289f5e179a09c45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Util/XmlUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Util/XmlUtils.php"));

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

namespace Symfony\\Component\\Config\\Util;

use Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException;
use Symfony\\Component\\Config\\Util\\Exception\\XmlParsingException;

/**
 * XMLUtils is a bunch of utility methods to XML operations.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Martin Hasoň <martin.hason@gmail.com>
 * @author Ole Rößner <ole@roessner.it>
 */
class XmlUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Parses an XML string.
     *
     * @param string               \$content          An XML string
     * @param string|callable|null \$schemaOrCallable An XSD schema file path, a callable, or null to disable validation
     *
     * @return \\DOMDocument
     *
     * @throws XmlParsingException When parsing of XML file returns error
     * @throws InvalidXmlException When parsing of XML with schema or callable produces any errors unrelated to the XML parsing itself
     * @throws \\RuntimeException   When DOM extension is missing
     */
    public static function parse(\$content, \$schemaOrCallable = null)
    {
        if (!\\extension_loaded('dom')) {
            throw new \\LogicException('Extension DOM is required.');
        }

        \$internalErrors = libxml_use_internal_errors(true);
        \$disableEntities = libxml_disable_entity_loader(true);
        libxml_clear_errors();

        \$dom = new \\DOMDocument();
        \$dom->validateOnParse = true;
        if (!\$dom->loadXML(\$content, LIBXML_NONET | (\\defined('LIBXML_COMPACT') ? LIBXML_COMPACT : 0))) {
            libxml_disable_entity_loader(\$disableEntities);

            throw new XmlParsingException(implode(\"\\n\", static::getXmlErrors(\$internalErrors)));
        }

        \$dom->normalizeDocument();

        libxml_use_internal_errors(\$internalErrors);
        libxml_disable_entity_loader(\$disableEntities);

        foreach (\$dom->childNodes as \$child) {
            if (XML_DOCUMENT_TYPE_NODE === \$child->nodeType) {
                throw new XmlParsingException('Document types are not allowed.');
            }
        }

        if (null !== \$schemaOrCallable) {
            \$internalErrors = libxml_use_internal_errors(true);
            libxml_clear_errors();

            \$e = null;
            if (\\is_callable(\$schemaOrCallable)) {
                try {
                    \$valid = \$schemaOrCallable(\$dom, \$internalErrors);
                } catch (\\Exception \$e) {
                    \$valid = false;
                }
            } elseif (!\\is_array(\$schemaOrCallable) && is_file((string) \$schemaOrCallable)) {
                \$schemaSource = file_get_contents((string) \$schemaOrCallable);
                \$valid = @\$dom->schemaValidateSource(\$schemaSource);
            } else {
                libxml_use_internal_errors(\$internalErrors);

                throw new XmlParsingException('The schemaOrCallable argument has to be a valid path to XSD file or callable.');
            }

            if (!\$valid) {
                \$messages = static::getXmlErrors(\$internalErrors);
                if (empty(\$messages)) {
                    throw new InvalidXmlException('The XML is not valid.', 0, \$e);
                }
                throw new XmlParsingException(implode(\"\\n\", \$messages), 0, \$e);
            }
        }

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return \$dom;
    }

    /**
     * Loads an XML file.
     *
     * @param string               \$file             An XML file path
     * @param string|callable|null \$schemaOrCallable An XSD schema file path, a callable, or null to disable validation
     *
     * @return \\DOMDocument
     *
     * @throws \\InvalidArgumentException When loading of XML file returns error
     * @throws XmlParsingException       When XML parsing returns any errors
     * @throws \\RuntimeException         When DOM extension is missing
     */
    public static function loadFile(\$file, \$schemaOrCallable = null)
    {
        \$content = @file_get_contents(\$file);
        if ('' === trim(\$content)) {
            throw new \\InvalidArgumentException(sprintf('File %s does not contain valid XML, it is empty.', \$file));
        }

        try {
            return static::parse(\$content, \$schemaOrCallable);
        } catch (InvalidXmlException \$e) {
            throw new XmlParsingException(sprintf('The XML file \"%s\" is not valid.', \$file), 0, \$e->getPrevious());
        }
    }

    /**
     * Converts a \\DOMElement object to a PHP array.
     *
     * The following rules applies during the conversion:
     *
     *  * Each tag is converted to a key value or an array
     *    if there is more than one \"value\"
     *
     *  * The content of a tag is set under a \"value\" key (<foo>bar</foo>)
     *    if the tag also has some nested tags
     *
     *  * The attributes are converted to keys (<foo foo=\"bar\"/>)
     *
     *  * The nested-tags are converted to keys (<foo><foo>bar</foo></foo>)
     *
     * @param \\DOMElement \$element     A \\DOMElement instance
     * @param bool        \$checkPrefix Check prefix in an element or an attribute name
     *
     * @return mixed
     */
    public static function convertDomElementToArray(\\DOMElement \$element, \$checkPrefix = true)
    {
        \$prefix = (string) \$element->prefix;
        \$empty = true;
        \$config = [];
        foreach (\$element->attributes as \$name => \$node) {
            if (\$checkPrefix && !\\in_array((string) \$node->prefix, ['', \$prefix], true)) {
                continue;
            }
            \$config[\$name] = static::phpize(\$node->value);
            \$empty = false;
        }

        \$nodeValue = false;
        foreach (\$element->childNodes as \$node) {
            if (\$node instanceof \\DOMText) {
                if ('' !== trim(\$node->nodeValue)) {
                    \$nodeValue = trim(\$node->nodeValue);
                    \$empty = false;
                }
            } elseif (\$checkPrefix && \$prefix != (string) \$node->prefix) {
                continue;
            } elseif (!\$node instanceof \\DOMComment) {
                \$value = static::convertDomElementToArray(\$node, \$checkPrefix);

                \$key = \$node->localName;
                if (isset(\$config[\$key])) {
                    if (!\\is_array(\$config[\$key]) || !\\is_int(key(\$config[\$key]))) {
                        \$config[\$key] = [\$config[\$key]];
                    }
                    \$config[\$key][] = \$value;
                } else {
                    \$config[\$key] = \$value;
                }

                \$empty = false;
            }
        }

        if (false !== \$nodeValue) {
            \$value = static::phpize(\$nodeValue);
            if (\\count(\$config)) {
                \$config['value'] = \$value;
            } else {
                \$config = \$value;
            }
        }

        return !\$empty ? \$config : null;
    }

    /**
     * Converts an xml value to a PHP type.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public static function phpize(\$value)
    {
        \$value = (string) \$value;
        \$lowercaseValue = strtolower(\$value);

        switch (true) {
            case 'null' === \$lowercaseValue:
                return null;
            case ctype_digit(\$value):
                \$raw = \$value;
                \$cast = (int) \$value;

                return '0' == \$value[0] ? octdec(\$value) : (((string) \$raw === (string) \$cast) ? \$cast : \$raw);
            case isset(\$value[1]) && '-' === \$value[0] && ctype_digit(substr(\$value, 1)):
                \$raw = \$value;
                \$cast = (int) \$value;

                return '0' == \$value[1] ? octdec(\$value) : (((string) \$raw === (string) \$cast) ? \$cast : \$raw);
            case 'true' === \$lowercaseValue:
                return true;
            case 'false' === \$lowercaseValue:
                return false;
            case isset(\$value[1]) && '0b' == \$value[0].\$value[1] && preg_match('/^0b[01]*\$/', \$value):
                return bindec(\$value);
            case is_numeric(\$value):
                return '0x' === \$value[0].\$value[1] ? hexdec(\$value) : (float) \$value;
            case preg_match('/^0x[0-9a-f]++\$/i', \$value):
                return hexdec(\$value);
            case preg_match('/^[+-]?[0-9]+(\\.[0-9]+)?\$/', \$value):
                return (float) \$value;
            default:
                return \$value;
        }
    }

    protected static function getXmlErrors(\$internalErrors)
    {
        \$errors = [];
        foreach (libxml_get_errors() as \$error) {
            \$errors[] = sprintf('[%s %s] %s (in %s - line %d, column %d)',
                LIBXML_ERR_WARNING == \$error->level ? 'WARNING' : 'ERROR',
                \$error->code,
                trim(\$error->message),
                \$error->file ?: 'n/a',
                \$error->line,
                \$error->column
            );
        }

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return \$errors;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Util/XmlUtils.php";
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

namespace Symfony\\Component\\Config\\Util;

use Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException;
use Symfony\\Component\\Config\\Util\\Exception\\XmlParsingException;

/**
 * XMLUtils is a bunch of utility methods to XML operations.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Martin Hasoň <martin.hason@gmail.com>
 * @author Ole Rößner <ole@roessner.it>
 */
class XmlUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Parses an XML string.
     *
     * @param string               \$content          An XML string
     * @param string|callable|null \$schemaOrCallable An XSD schema file path, a callable, or null to disable validation
     *
     * @return \\DOMDocument
     *
     * @throws XmlParsingException When parsing of XML file returns error
     * @throws InvalidXmlException When parsing of XML with schema or callable produces any errors unrelated to the XML parsing itself
     * @throws \\RuntimeException   When DOM extension is missing
     */
    public static function parse(\$content, \$schemaOrCallable = null)
    {
        if (!\\extension_loaded('dom')) {
            throw new \\LogicException('Extension DOM is required.');
        }

        \$internalErrors = libxml_use_internal_errors(true);
        \$disableEntities = libxml_disable_entity_loader(true);
        libxml_clear_errors();

        \$dom = new \\DOMDocument();
        \$dom->validateOnParse = true;
        if (!\$dom->loadXML(\$content, LIBXML_NONET | (\\defined('LIBXML_COMPACT') ? LIBXML_COMPACT : 0))) {
            libxml_disable_entity_loader(\$disableEntities);

            throw new XmlParsingException(implode(\"\\n\", static::getXmlErrors(\$internalErrors)));
        }

        \$dom->normalizeDocument();

        libxml_use_internal_errors(\$internalErrors);
        libxml_disable_entity_loader(\$disableEntities);

        foreach (\$dom->childNodes as \$child) {
            if (XML_DOCUMENT_TYPE_NODE === \$child->nodeType) {
                throw new XmlParsingException('Document types are not allowed.');
            }
        }

        if (null !== \$schemaOrCallable) {
            \$internalErrors = libxml_use_internal_errors(true);
            libxml_clear_errors();

            \$e = null;
            if (\\is_callable(\$schemaOrCallable)) {
                try {
                    \$valid = \$schemaOrCallable(\$dom, \$internalErrors);
                } catch (\\Exception \$e) {
                    \$valid = false;
                }
            } elseif (!\\is_array(\$schemaOrCallable) && is_file((string) \$schemaOrCallable)) {
                \$schemaSource = file_get_contents((string) \$schemaOrCallable);
                \$valid = @\$dom->schemaValidateSource(\$schemaSource);
            } else {
                libxml_use_internal_errors(\$internalErrors);

                throw new XmlParsingException('The schemaOrCallable argument has to be a valid path to XSD file or callable.');
            }

            if (!\$valid) {
                \$messages = static::getXmlErrors(\$internalErrors);
                if (empty(\$messages)) {
                    throw new InvalidXmlException('The XML is not valid.', 0, \$e);
                }
                throw new XmlParsingException(implode(\"\\n\", \$messages), 0, \$e);
            }
        }

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return \$dom;
    }

    /**
     * Loads an XML file.
     *
     * @param string               \$file             An XML file path
     * @param string|callable|null \$schemaOrCallable An XSD schema file path, a callable, or null to disable validation
     *
     * @return \\DOMDocument
     *
     * @throws \\InvalidArgumentException When loading of XML file returns error
     * @throws XmlParsingException       When XML parsing returns any errors
     * @throws \\RuntimeException         When DOM extension is missing
     */
    public static function loadFile(\$file, \$schemaOrCallable = null)
    {
        \$content = @file_get_contents(\$file);
        if ('' === trim(\$content)) {
            throw new \\InvalidArgumentException(sprintf('File %s does not contain valid XML, it is empty.', \$file));
        }

        try {
            return static::parse(\$content, \$schemaOrCallable);
        } catch (InvalidXmlException \$e) {
            throw new XmlParsingException(sprintf('The XML file \"%s\" is not valid.', \$file), 0, \$e->getPrevious());
        }
    }

    /**
     * Converts a \\DOMElement object to a PHP array.
     *
     * The following rules applies during the conversion:
     *
     *  * Each tag is converted to a key value or an array
     *    if there is more than one \"value\"
     *
     *  * The content of a tag is set under a \"value\" key (<foo>bar</foo>)
     *    if the tag also has some nested tags
     *
     *  * The attributes are converted to keys (<foo foo=\"bar\"/>)
     *
     *  * The nested-tags are converted to keys (<foo><foo>bar</foo></foo>)
     *
     * @param \\DOMElement \$element     A \\DOMElement instance
     * @param bool        \$checkPrefix Check prefix in an element or an attribute name
     *
     * @return mixed
     */
    public static function convertDomElementToArray(\\DOMElement \$element, \$checkPrefix = true)
    {
        \$prefix = (string) \$element->prefix;
        \$empty = true;
        \$config = [];
        foreach (\$element->attributes as \$name => \$node) {
            if (\$checkPrefix && !\\in_array((string) \$node->prefix, ['', \$prefix], true)) {
                continue;
            }
            \$config[\$name] = static::phpize(\$node->value);
            \$empty = false;
        }

        \$nodeValue = false;
        foreach (\$element->childNodes as \$node) {
            if (\$node instanceof \\DOMText) {
                if ('' !== trim(\$node->nodeValue)) {
                    \$nodeValue = trim(\$node->nodeValue);
                    \$empty = false;
                }
            } elseif (\$checkPrefix && \$prefix != (string) \$node->prefix) {
                continue;
            } elseif (!\$node instanceof \\DOMComment) {
                \$value = static::convertDomElementToArray(\$node, \$checkPrefix);

                \$key = \$node->localName;
                if (isset(\$config[\$key])) {
                    if (!\\is_array(\$config[\$key]) || !\\is_int(key(\$config[\$key]))) {
                        \$config[\$key] = [\$config[\$key]];
                    }
                    \$config[\$key][] = \$value;
                } else {
                    \$config[\$key] = \$value;
                }

                \$empty = false;
            }
        }

        if (false !== \$nodeValue) {
            \$value = static::phpize(\$nodeValue);
            if (\\count(\$config)) {
                \$config['value'] = \$value;
            } else {
                \$config = \$value;
            }
        }

        return !\$empty ? \$config : null;
    }

    /**
     * Converts an xml value to a PHP type.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public static function phpize(\$value)
    {
        \$value = (string) \$value;
        \$lowercaseValue = strtolower(\$value);

        switch (true) {
            case 'null' === \$lowercaseValue:
                return null;
            case ctype_digit(\$value):
                \$raw = \$value;
                \$cast = (int) \$value;

                return '0' == \$value[0] ? octdec(\$value) : (((string) \$raw === (string) \$cast) ? \$cast : \$raw);
            case isset(\$value[1]) && '-' === \$value[0] && ctype_digit(substr(\$value, 1)):
                \$raw = \$value;
                \$cast = (int) \$value;

                return '0' == \$value[1] ? octdec(\$value) : (((string) \$raw === (string) \$cast) ? \$cast : \$raw);
            case 'true' === \$lowercaseValue:
                return true;
            case 'false' === \$lowercaseValue:
                return false;
            case isset(\$value[1]) && '0b' == \$value[0].\$value[1] && preg_match('/^0b[01]*\$/', \$value):
                return bindec(\$value);
            case is_numeric(\$value):
                return '0x' === \$value[0].\$value[1] ? hexdec(\$value) : (float) \$value;
            case preg_match('/^0x[0-9a-f]++\$/i', \$value):
                return hexdec(\$value);
            case preg_match('/^[+-]?[0-9]+(\\.[0-9]+)?\$/', \$value):
                return (float) \$value;
            default:
                return \$value;
        }
    }

    protected static function getXmlErrors(\$internalErrors)
    {
        \$errors = [];
        foreach (libxml_get_errors() as \$error) {
            \$errors[] = sprintf('[%s %s] %s (in %s - line %d, column %d)',
                LIBXML_ERR_WARNING == \$error->level ? 'WARNING' : 'ERROR',
                \$error->code,
                trim(\$error->message),
                \$error->file ?: 'n/a',
                \$error->line,
                \$error->column
            );
        }

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return \$errors;
    }
}
", "vendor/symfony/config/Util/XmlUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Util/XmlUtils.php");
    }
}
