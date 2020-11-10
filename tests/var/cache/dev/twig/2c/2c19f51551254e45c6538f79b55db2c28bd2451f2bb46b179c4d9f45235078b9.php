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

/* vendor/symfony/translation/Util/XliffUtils.php */
class __TwigTemplate_f3cf2baa9116b6c0414bdeb7038dc5781370ee27477cd3dcf569d0af3169d1cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Util/XliffUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Util/XliffUtils.php"));

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

namespace Symfony\\Component\\Translation\\Util;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * Provides some utility methods for XLIFF translation files, such as validating
 * their contents according to the XSD schema.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class XliffUtils
{
    /**
     * Gets xliff file version based on the root \"version\" attribute.
     *
     * Defaults to 1.2 for backwards compatibility.
     *
     * @throws InvalidArgumentException
     */
    public static function getVersionNumber(\\DOMDocument \$dom): string
    {
        /** @var \\DOMNode \$xliff */
        foreach (\$dom->getElementsByTagName('xliff') as \$xliff) {
            \$version = \$xliff->attributes->getNamedItem('version');
            if (\$version) {
                return \$version->nodeValue;
            }

            \$namespace = \$xliff->attributes->getNamedItem('xmlns');
            if (\$namespace) {
                if (0 !== substr_compare('urn:oasis:names:tc:xliff:document:', \$namespace->nodeValue, 0, 34)) {
                    throw new InvalidArgumentException(sprintf('Not a valid XLIFF namespace \"%s\"', \$namespace));
                }

                return substr(\$namespace, 34);
            }
        }

        // Falls back to v1.2
        return '1.2';
    }

    /**
     * Validates and parses the given file into a DOMDocument.
     *
     * @throws InvalidResourceException
     */
    public static function validateSchema(\\DOMDocument \$dom): array
    {
        \$xliffVersion = static::getVersionNumber(\$dom);
        \$internalErrors = libxml_use_internal_errors(true);
        \$disableEntities = libxml_disable_entity_loader(false);

        \$isValid = @\$dom->schemaValidateSource(self::getSchema(\$xliffVersion));
        if (!\$isValid) {
            libxml_disable_entity_loader(\$disableEntities);

            return self::getXmlErrors(\$internalErrors);
        }

        libxml_disable_entity_loader(\$disableEntities);

        \$dom->normalizeDocument();

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return [];
    }

    public static function getErrorsAsString(array \$xmlErrors): string
    {
        \$errorsAsString = '';

        foreach (\$xmlErrors as \$error) {
            \$errorsAsString .= sprintf(\"[%s %s] %s (in %s - line %d, column %d)\\n\",
                LIBXML_ERR_WARNING === \$error['level'] ? 'WARNING' : 'ERROR',
                \$error['code'],
                \$error['message'],
                \$error['file'],
                \$error['line'],
                \$error['column']
            );
        }

        return \$errorsAsString;
    }

    private static function getSchema(string \$xliffVersion): string
    {
        if ('1.2' === \$xliffVersion) {
            \$schemaSource = file_get_contents(__DIR__.'/../Resources/schemas/xliff-core-1.2-strict.xsd');
            \$xmlUri = 'http://www.w3.org/2001/xml.xsd';
        } elseif ('2.0' === \$xliffVersion) {
            \$schemaSource = file_get_contents(__DIR__.'/../Resources/schemas/xliff-core-2.0.xsd');
            \$xmlUri = 'informativeCopiesOf3rdPartySchemas/w3c/xml.xsd';
        } else {
            throw new InvalidArgumentException(sprintf('No support implemented for loading XLIFF version \"%s\".', \$xliffVersion));
        }

        return self::fixXmlLocation(\$schemaSource, \$xmlUri);
    }

    /**
     * Internally changes the URI of a dependent xsd to be loaded locally.
     */
    private static function fixXmlLocation(string \$schemaSource, string \$xmlUri): string
    {
        \$newPath = str_replace('\\\\', '/', __DIR__).'/../Resources/schemas/xml.xsd';
        \$parts = explode('/', \$newPath);
        \$locationstart = 'file:///';
        if (0 === stripos(\$newPath, 'phar://')) {
            \$tmpfile = tempnam(sys_get_temp_dir(), 'symfony');
            if (\$tmpfile) {
                copy(\$newPath, \$tmpfile);
                \$parts = explode('/', str_replace('\\\\', '/', \$tmpfile));
            } else {
                array_shift(\$parts);
                \$locationstart = 'phar:///';
            }
        }

        \$drive = '\\\\' === \\DIRECTORY_SEPARATOR ? array_shift(\$parts).'/' : '';
        \$newPath = \$locationstart.\$drive.implode('/', array_map('rawurlencode', \$parts));

        return str_replace(\$xmlUri, \$newPath, \$schemaSource);
    }

    /**
     * Returns the XML errors of the internal XML parser.
     */
    private static function getXmlErrors(bool \$internalErrors): array
    {
        \$errors = [];
        foreach (libxml_get_errors() as \$error) {
            \$errors[] = [
                'level' => LIBXML_ERR_WARNING == \$error->level ? 'WARNING' : 'ERROR',
                'code' => \$error->code,
                'message' => trim(\$error->message),
                'file' => \$error->file ?: 'n/a',
                'line' => \$error->line,
                'column' => \$error->column,
            ];
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
        return "vendor/symfony/translation/Util/XliffUtils.php";
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

namespace Symfony\\Component\\Translation\\Util;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * Provides some utility methods for XLIFF translation files, such as validating
 * their contents according to the XSD schema.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class XliffUtils
{
    /**
     * Gets xliff file version based on the root \"version\" attribute.
     *
     * Defaults to 1.2 for backwards compatibility.
     *
     * @throws InvalidArgumentException
     */
    public static function getVersionNumber(\\DOMDocument \$dom): string
    {
        /** @var \\DOMNode \$xliff */
        foreach (\$dom->getElementsByTagName('xliff') as \$xliff) {
            \$version = \$xliff->attributes->getNamedItem('version');
            if (\$version) {
                return \$version->nodeValue;
            }

            \$namespace = \$xliff->attributes->getNamedItem('xmlns');
            if (\$namespace) {
                if (0 !== substr_compare('urn:oasis:names:tc:xliff:document:', \$namespace->nodeValue, 0, 34)) {
                    throw new InvalidArgumentException(sprintf('Not a valid XLIFF namespace \"%s\"', \$namespace));
                }

                return substr(\$namespace, 34);
            }
        }

        // Falls back to v1.2
        return '1.2';
    }

    /**
     * Validates and parses the given file into a DOMDocument.
     *
     * @throws InvalidResourceException
     */
    public static function validateSchema(\\DOMDocument \$dom): array
    {
        \$xliffVersion = static::getVersionNumber(\$dom);
        \$internalErrors = libxml_use_internal_errors(true);
        \$disableEntities = libxml_disable_entity_loader(false);

        \$isValid = @\$dom->schemaValidateSource(self::getSchema(\$xliffVersion));
        if (!\$isValid) {
            libxml_disable_entity_loader(\$disableEntities);

            return self::getXmlErrors(\$internalErrors);
        }

        libxml_disable_entity_loader(\$disableEntities);

        \$dom->normalizeDocument();

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return [];
    }

    public static function getErrorsAsString(array \$xmlErrors): string
    {
        \$errorsAsString = '';

        foreach (\$xmlErrors as \$error) {
            \$errorsAsString .= sprintf(\"[%s %s] %s (in %s - line %d, column %d)\\n\",
                LIBXML_ERR_WARNING === \$error['level'] ? 'WARNING' : 'ERROR',
                \$error['code'],
                \$error['message'],
                \$error['file'],
                \$error['line'],
                \$error['column']
            );
        }

        return \$errorsAsString;
    }

    private static function getSchema(string \$xliffVersion): string
    {
        if ('1.2' === \$xliffVersion) {
            \$schemaSource = file_get_contents(__DIR__.'/../Resources/schemas/xliff-core-1.2-strict.xsd');
            \$xmlUri = 'http://www.w3.org/2001/xml.xsd';
        } elseif ('2.0' === \$xliffVersion) {
            \$schemaSource = file_get_contents(__DIR__.'/../Resources/schemas/xliff-core-2.0.xsd');
            \$xmlUri = 'informativeCopiesOf3rdPartySchemas/w3c/xml.xsd';
        } else {
            throw new InvalidArgumentException(sprintf('No support implemented for loading XLIFF version \"%s\".', \$xliffVersion));
        }

        return self::fixXmlLocation(\$schemaSource, \$xmlUri);
    }

    /**
     * Internally changes the URI of a dependent xsd to be loaded locally.
     */
    private static function fixXmlLocation(string \$schemaSource, string \$xmlUri): string
    {
        \$newPath = str_replace('\\\\', '/', __DIR__).'/../Resources/schemas/xml.xsd';
        \$parts = explode('/', \$newPath);
        \$locationstart = 'file:///';
        if (0 === stripos(\$newPath, 'phar://')) {
            \$tmpfile = tempnam(sys_get_temp_dir(), 'symfony');
            if (\$tmpfile) {
                copy(\$newPath, \$tmpfile);
                \$parts = explode('/', str_replace('\\\\', '/', \$tmpfile));
            } else {
                array_shift(\$parts);
                \$locationstart = 'phar:///';
            }
        }

        \$drive = '\\\\' === \\DIRECTORY_SEPARATOR ? array_shift(\$parts).'/' : '';
        \$newPath = \$locationstart.\$drive.implode('/', array_map('rawurlencode', \$parts));

        return str_replace(\$xmlUri, \$newPath, \$schemaSource);
    }

    /**
     * Returns the XML errors of the internal XML parser.
     */
    private static function getXmlErrors(bool \$internalErrors): array
    {
        \$errors = [];
        foreach (libxml_get_errors() as \$error) {
            \$errors[] = [
                'level' => LIBXML_ERR_WARNING == \$error->level ? 'WARNING' : 'ERROR',
                'code' => \$error->code,
                'message' => trim(\$error->message),
                'file' => \$error->file ?: 'n/a',
                'line' => \$error->line,
                'column' => \$error->column,
            ];
        }

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);

        return \$errors;
    }
}
", "vendor/symfony/translation/Util/XliffUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Util/XliffUtils.php");
    }
}
