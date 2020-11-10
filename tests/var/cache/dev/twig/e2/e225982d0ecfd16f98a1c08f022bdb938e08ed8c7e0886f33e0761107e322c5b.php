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

/* vendor/symfony/translation/Loader/QtFileLoader.php */
class __TwigTemplate_7385cc86b3eda55bc910eaf51f27a60d0ffb6eb30b51be44397e7b7944b2c553 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/QtFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/QtFileLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * QtFileLoader loads translations from QT Translations XML files.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class QtFileLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        try {
            \$dom = XmlUtils::loadFile(\$resource);
        } catch (\\InvalidArgumentException \$e) {
            throw new InvalidResourceException(sprintf('Unable to load \"%s\".', \$resource), \$e->getCode(), \$e);
        }

        \$internalErrors = libxml_use_internal_errors(true);
        libxml_clear_errors();

        \$xpath = new \\DOMXPath(\$dom);
        \$nodes = \$xpath->evaluate('//TS/context/name[text()=\"'.\$domain.'\"]');

        \$catalogue = new MessageCatalogue(\$locale);
        if (1 == \$nodes->length) {
            \$translations = \$nodes->item(0)->nextSibling->parentNode->parentNode->getElementsByTagName('message');
            foreach (\$translations as \$translation) {
                \$translationValue = (string) \$translation->getElementsByTagName('translation')->item(0)->nodeValue;

                if (!empty(\$translationValue)) {
                    \$catalogue->set(
                        (string) \$translation->getElementsByTagName('source')->item(0)->nodeValue,
                        \$translationValue,
                        \$domain
                    );
                }
                \$translation = \$translation->nextSibling;
            }

            if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
                \$catalogue->addResource(new FileResource(\$resource));
            }
        }

        libxml_use_internal_errors(\$internalErrors);

        return \$catalogue;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/QtFileLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * QtFileLoader loads translations from QT Translations XML files.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class QtFileLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        try {
            \$dom = XmlUtils::loadFile(\$resource);
        } catch (\\InvalidArgumentException \$e) {
            throw new InvalidResourceException(sprintf('Unable to load \"%s\".', \$resource), \$e->getCode(), \$e);
        }

        \$internalErrors = libxml_use_internal_errors(true);
        libxml_clear_errors();

        \$xpath = new \\DOMXPath(\$dom);
        \$nodes = \$xpath->evaluate('//TS/context/name[text()=\"'.\$domain.'\"]');

        \$catalogue = new MessageCatalogue(\$locale);
        if (1 == \$nodes->length) {
            \$translations = \$nodes->item(0)->nextSibling->parentNode->parentNode->getElementsByTagName('message');
            foreach (\$translations as \$translation) {
                \$translationValue = (string) \$translation->getElementsByTagName('translation')->item(0)->nodeValue;

                if (!empty(\$translationValue)) {
                    \$catalogue->set(
                        (string) \$translation->getElementsByTagName('source')->item(0)->nodeValue,
                        \$translationValue,
                        \$domain
                    );
                }
                \$translation = \$translation->nextSibling;
            }

            if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
                \$catalogue->addResource(new FileResource(\$resource));
            }
        }

        libxml_use_internal_errors(\$internalErrors);

        return \$catalogue;
    }
}
", "vendor/symfony/translation/Loader/QtFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/QtFileLoader.php");
    }
}
