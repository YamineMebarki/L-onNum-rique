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

/* vendor/symfony/translation/Dumper/XliffFileDumper.php */
class __TwigTemplate_9bff0af1a25a6f0e6a3bb4c996f9d23ab3467703cef7943f0e45c6fac69f68a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/XliffFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/XliffFileDumper.php"));

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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * XliffFileDumper generates xliff files from a message catalogue.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class XliffFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$xliffVersion = '1.2';
        if (\\array_key_exists('xliff_version', \$options)) {
            \$xliffVersion = \$options['xliff_version'];
        }

        if (\\array_key_exists('default_locale', \$options)) {
            \$defaultLocale = \$options['default_locale'];
        } else {
            \$defaultLocale = \\Locale::getDefault();
        }

        if ('1.2' === \$xliffVersion) {
            return \$this->dumpXliff1(\$defaultLocale, \$messages, \$domain, \$options);
        }
        if ('2.0' === \$xliffVersion) {
            return \$this->dumpXliff2(\$defaultLocale, \$messages, \$domain, \$options);
        }

        throw new InvalidArgumentException(sprintf('No support implemented for dumping XLIFF version \"%s\".', \$xliffVersion));
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'xlf';
    }

    private function dumpXliff1(\$defaultLocale, MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$toolInfo = ['tool-id' => 'symfony', 'tool-name' => 'Symfony'];
        if (\\array_key_exists('tool_info', \$options)) {
            \$toolInfo = array_merge(\$toolInfo, \$options['tool_info']);
        }

        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;

        \$xliff = \$dom->appendChild(\$dom->createElement('xliff'));
        \$xliff->setAttribute('version', '1.2');
        \$xliff->setAttribute('xmlns', 'urn:oasis:names:tc:xliff:document:1.2');

        \$xliffFile = \$xliff->appendChild(\$dom->createElement('file'));
        \$xliffFile->setAttribute('source-language', str_replace('_', '-', \$defaultLocale));
        \$xliffFile->setAttribute('target-language', str_replace('_', '-', \$messages->getLocale()));
        \$xliffFile->setAttribute('datatype', 'plaintext');
        \$xliffFile->setAttribute('original', 'file.ext');

        \$xliffHead = \$xliffFile->appendChild(\$dom->createElement('header'));
        \$xliffTool = \$xliffHead->appendChild(\$dom->createElement('tool'));
        foreach (\$toolInfo as \$id => \$value) {
            \$xliffTool->setAttribute(\$id, \$value);
        }

        \$xliffBody = \$xliffFile->appendChild(\$dom->createElement('body'));
        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$translation = \$dom->createElement('trans-unit');

            \$translation->setAttribute('id', strtr(substr(base64_encode(hash('sha256', \$source, true)), 0, 7), '/+', '._'));
            \$translation->setAttribute('resname', \$source);

            \$s = \$translation->appendChild(\$dom->createElement('source'));
            \$s->appendChild(\$dom->createTextNode(\$source));

            // Does the target contain characters requiring a CDATA section?
            \$text = 1 === preg_match('/[&<>]/', \$target) ? \$dom->createCDATASection(\$target) : \$dom->createTextNode(\$target);

            \$targetElement = \$dom->createElement('target');
            \$metadata = \$messages->getMetadata(\$source, \$domain);
            if (\$this->hasMetadataArrayInfo('target-attributes', \$metadata)) {
                foreach (\$metadata['target-attributes'] as \$name => \$value) {
                    \$targetElement->setAttribute(\$name, \$value);
                }
            }
            \$t = \$translation->appendChild(\$targetElement);
            \$t->appendChild(\$text);

            if (\$this->hasMetadataArrayInfo('notes', \$metadata)) {
                foreach (\$metadata['notes'] as \$note) {
                    if (!isset(\$note['content'])) {
                        continue;
                    }

                    \$n = \$translation->appendChild(\$dom->createElement('note'));
                    \$n->appendChild(\$dom->createTextNode(\$note['content']));

                    if (isset(\$note['priority'])) {
                        \$n->setAttribute('priority', \$note['priority']);
                    }

                    if (isset(\$note['from'])) {
                        \$n->setAttribute('from', \$note['from']);
                    }
                }
            }

            \$xliffBody->appendChild(\$translation);
        }

        return \$dom->saveXML();
    }

    private function dumpXliff2(\$defaultLocale, MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;

        \$xliff = \$dom->appendChild(\$dom->createElement('xliff'));
        \$xliff->setAttribute('xmlns', 'urn:oasis:names:tc:xliff:document:2.0');
        \$xliff->setAttribute('version', '2.0');
        \$xliff->setAttribute('srcLang', str_replace('_', '-', \$defaultLocale));
        \$xliff->setAttribute('trgLang', str_replace('_', '-', \$messages->getLocale()));

        \$xliffFile = \$xliff->appendChild(\$dom->createElement('file'));
        if (MessageCatalogue::INTL_DOMAIN_SUFFIX === substr(\$domain, -(\$suffixLength = \\strlen(MessageCatalogue::INTL_DOMAIN_SUFFIX)))) {
            \$xliffFile->setAttribute('id', substr(\$domain, 0, -\$suffixLength).'.'.\$messages->getLocale());
        } else {
            \$xliffFile->setAttribute('id', \$domain.'.'.\$messages->getLocale());
        }

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$translation = \$dom->createElement('unit');
            \$translation->setAttribute('id', strtr(substr(base64_encode(hash('sha256', \$source, true)), 0, 7), '/+', '._'));
            \$name = \$source;
            if (\\strlen(\$source) > 80) {
                \$name = substr(md5(\$source), -7);
            }
            \$translation->setAttribute('name', \$name);
            \$metadata = \$messages->getMetadata(\$source, \$domain);

            // Add notes section
            if (\$this->hasMetadataArrayInfo('notes', \$metadata)) {
                \$notesElement = \$dom->createElement('notes');
                foreach (\$metadata['notes'] as \$note) {
                    \$n = \$dom->createElement('note');
                    \$n->appendChild(\$dom->createTextNode(isset(\$note['content']) ? \$note['content'] : ''));
                    unset(\$note['content']);

                    foreach (\$note as \$name => \$value) {
                        \$n->setAttribute(\$name, \$value);
                    }
                    \$notesElement->appendChild(\$n);
                }
                \$translation->appendChild(\$notesElement);
            }

            \$segment = \$translation->appendChild(\$dom->createElement('segment'));

            \$s = \$segment->appendChild(\$dom->createElement('source'));
            \$s->appendChild(\$dom->createTextNode(\$source));

            // Does the target contain characters requiring a CDATA section?
            \$text = 1 === preg_match('/[&<>]/', \$target) ? \$dom->createCDATASection(\$target) : \$dom->createTextNode(\$target);

            \$targetElement = \$dom->createElement('target');
            if (\$this->hasMetadataArrayInfo('target-attributes', \$metadata)) {
                foreach (\$metadata['target-attributes'] as \$name => \$value) {
                    \$targetElement->setAttribute(\$name, \$value);
                }
            }
            \$t = \$segment->appendChild(\$targetElement);
            \$t->appendChild(\$text);

            \$xliffFile->appendChild(\$translation);
        }

        return \$dom->saveXML();
    }

    /**
     * @param string     \$key
     * @param array|null \$metadata
     *
     * @return bool
     */
    private function hasMetadataArrayInfo(\$key, \$metadata = null)
    {
        return null !== \$metadata && \\array_key_exists(\$key, \$metadata) && (\$metadata[\$key] instanceof \\Traversable || \\is_array(\$metadata[\$key]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/XliffFileDumper.php";
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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * XliffFileDumper generates xliff files from a message catalogue.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class XliffFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$xliffVersion = '1.2';
        if (\\array_key_exists('xliff_version', \$options)) {
            \$xliffVersion = \$options['xliff_version'];
        }

        if (\\array_key_exists('default_locale', \$options)) {
            \$defaultLocale = \$options['default_locale'];
        } else {
            \$defaultLocale = \\Locale::getDefault();
        }

        if ('1.2' === \$xliffVersion) {
            return \$this->dumpXliff1(\$defaultLocale, \$messages, \$domain, \$options);
        }
        if ('2.0' === \$xliffVersion) {
            return \$this->dumpXliff2(\$defaultLocale, \$messages, \$domain, \$options);
        }

        throw new InvalidArgumentException(sprintf('No support implemented for dumping XLIFF version \"%s\".', \$xliffVersion));
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'xlf';
    }

    private function dumpXliff1(\$defaultLocale, MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$toolInfo = ['tool-id' => 'symfony', 'tool-name' => 'Symfony'];
        if (\\array_key_exists('tool_info', \$options)) {
            \$toolInfo = array_merge(\$toolInfo, \$options['tool_info']);
        }

        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;

        \$xliff = \$dom->appendChild(\$dom->createElement('xliff'));
        \$xliff->setAttribute('version', '1.2');
        \$xliff->setAttribute('xmlns', 'urn:oasis:names:tc:xliff:document:1.2');

        \$xliffFile = \$xliff->appendChild(\$dom->createElement('file'));
        \$xliffFile->setAttribute('source-language', str_replace('_', '-', \$defaultLocale));
        \$xliffFile->setAttribute('target-language', str_replace('_', '-', \$messages->getLocale()));
        \$xliffFile->setAttribute('datatype', 'plaintext');
        \$xliffFile->setAttribute('original', 'file.ext');

        \$xliffHead = \$xliffFile->appendChild(\$dom->createElement('header'));
        \$xliffTool = \$xliffHead->appendChild(\$dom->createElement('tool'));
        foreach (\$toolInfo as \$id => \$value) {
            \$xliffTool->setAttribute(\$id, \$value);
        }

        \$xliffBody = \$xliffFile->appendChild(\$dom->createElement('body'));
        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$translation = \$dom->createElement('trans-unit');

            \$translation->setAttribute('id', strtr(substr(base64_encode(hash('sha256', \$source, true)), 0, 7), '/+', '._'));
            \$translation->setAttribute('resname', \$source);

            \$s = \$translation->appendChild(\$dom->createElement('source'));
            \$s->appendChild(\$dom->createTextNode(\$source));

            // Does the target contain characters requiring a CDATA section?
            \$text = 1 === preg_match('/[&<>]/', \$target) ? \$dom->createCDATASection(\$target) : \$dom->createTextNode(\$target);

            \$targetElement = \$dom->createElement('target');
            \$metadata = \$messages->getMetadata(\$source, \$domain);
            if (\$this->hasMetadataArrayInfo('target-attributes', \$metadata)) {
                foreach (\$metadata['target-attributes'] as \$name => \$value) {
                    \$targetElement->setAttribute(\$name, \$value);
                }
            }
            \$t = \$translation->appendChild(\$targetElement);
            \$t->appendChild(\$text);

            if (\$this->hasMetadataArrayInfo('notes', \$metadata)) {
                foreach (\$metadata['notes'] as \$note) {
                    if (!isset(\$note['content'])) {
                        continue;
                    }

                    \$n = \$translation->appendChild(\$dom->createElement('note'));
                    \$n->appendChild(\$dom->createTextNode(\$note['content']));

                    if (isset(\$note['priority'])) {
                        \$n->setAttribute('priority', \$note['priority']);
                    }

                    if (isset(\$note['from'])) {
                        \$n->setAttribute('from', \$note['from']);
                    }
                }
            }

            \$xliffBody->appendChild(\$translation);
        }

        return \$dom->saveXML();
    }

    private function dumpXliff2(\$defaultLocale, MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$dom = new \\DOMDocument('1.0', 'utf-8');
        \$dom->formatOutput = true;

        \$xliff = \$dom->appendChild(\$dom->createElement('xliff'));
        \$xliff->setAttribute('xmlns', 'urn:oasis:names:tc:xliff:document:2.0');
        \$xliff->setAttribute('version', '2.0');
        \$xliff->setAttribute('srcLang', str_replace('_', '-', \$defaultLocale));
        \$xliff->setAttribute('trgLang', str_replace('_', '-', \$messages->getLocale()));

        \$xliffFile = \$xliff->appendChild(\$dom->createElement('file'));
        if (MessageCatalogue::INTL_DOMAIN_SUFFIX === substr(\$domain, -(\$suffixLength = \\strlen(MessageCatalogue::INTL_DOMAIN_SUFFIX)))) {
            \$xliffFile->setAttribute('id', substr(\$domain, 0, -\$suffixLength).'.'.\$messages->getLocale());
        } else {
            \$xliffFile->setAttribute('id', \$domain.'.'.\$messages->getLocale());
        }

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$translation = \$dom->createElement('unit');
            \$translation->setAttribute('id', strtr(substr(base64_encode(hash('sha256', \$source, true)), 0, 7), '/+', '._'));
            \$name = \$source;
            if (\\strlen(\$source) > 80) {
                \$name = substr(md5(\$source), -7);
            }
            \$translation->setAttribute('name', \$name);
            \$metadata = \$messages->getMetadata(\$source, \$domain);

            // Add notes section
            if (\$this->hasMetadataArrayInfo('notes', \$metadata)) {
                \$notesElement = \$dom->createElement('notes');
                foreach (\$metadata['notes'] as \$note) {
                    \$n = \$dom->createElement('note');
                    \$n->appendChild(\$dom->createTextNode(isset(\$note['content']) ? \$note['content'] : ''));
                    unset(\$note['content']);

                    foreach (\$note as \$name => \$value) {
                        \$n->setAttribute(\$name, \$value);
                    }
                    \$notesElement->appendChild(\$n);
                }
                \$translation->appendChild(\$notesElement);
            }

            \$segment = \$translation->appendChild(\$dom->createElement('segment'));

            \$s = \$segment->appendChild(\$dom->createElement('source'));
            \$s->appendChild(\$dom->createTextNode(\$source));

            // Does the target contain characters requiring a CDATA section?
            \$text = 1 === preg_match('/[&<>]/', \$target) ? \$dom->createCDATASection(\$target) : \$dom->createTextNode(\$target);

            \$targetElement = \$dom->createElement('target');
            if (\$this->hasMetadataArrayInfo('target-attributes', \$metadata)) {
                foreach (\$metadata['target-attributes'] as \$name => \$value) {
                    \$targetElement->setAttribute(\$name, \$value);
                }
            }
            \$t = \$segment->appendChild(\$targetElement);
            \$t->appendChild(\$text);

            \$xliffFile->appendChild(\$translation);
        }

        return \$dom->saveXML();
    }

    /**
     * @param string     \$key
     * @param array|null \$metadata
     *
     * @return bool
     */
    private function hasMetadataArrayInfo(\$key, \$metadata = null)
    {
        return null !== \$metadata && \\array_key_exists(\$key, \$metadata) && (\$metadata[\$key] instanceof \\Traversable || \\is_array(\$metadata[\$key]));
    }
}
", "vendor/symfony/translation/Dumper/XliffFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/XliffFileDumper.php");
    }
}
