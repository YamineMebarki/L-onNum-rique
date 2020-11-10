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

/* vendor/symfony/translation/MessageCatalogueInterface.php */
class __TwigTemplate_88357f4dda4a60d34ae077bbfc3bc58d326b50809a686fc3b40476e9c5580889 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/MessageCatalogueInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/MessageCatalogueInterface.php"));

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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * MessageCatalogueInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MessageCatalogueInterface
{
    const INTL_DOMAIN_SUFFIX = '+intl-icu';

    /**
     * Gets the catalogue locale.
     *
     * @return string The locale
     */
    public function getLocale();

    /**
     * Gets the domains.
     *
     * @return array An array of domains
     */
    public function getDomains();

    /**
     * Gets the messages within a given domain.
     *
     * If \$domain is null, it returns all messages.
     *
     * @param string \$domain The domain name
     *
     * @return array An array of messages
     */
    public function all(\$domain = null);

    /**
     * Sets a message translation.
     *
     * @param string \$id          The message id
     * @param string \$translation The messages translation
     * @param string \$domain      The domain name
     */
    public function set(\$id, \$translation, \$domain = 'messages');

    /**
     * Checks if a message has a translation.
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return bool true if the message has a translation, false otherwise
     */
    public function has(\$id, \$domain = 'messages');

    /**
     * Checks if a message has a translation (it does not take into account the fallback mechanism).
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return bool true if the message has a translation, false otherwise
     */
    public function defines(\$id, \$domain = 'messages');

    /**
     * Gets a message translation.
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return string The message translation
     */
    public function get(\$id, \$domain = 'messages');

    /**
     * Sets translations for a given domain.
     *
     * @param array  \$messages An array of translations
     * @param string \$domain   The domain name
     */
    public function replace(\$messages, \$domain = 'messages');

    /**
     * Adds translations for a given domain.
     *
     * @param array  \$messages An array of translations
     * @param string \$domain   The domain name
     */
    public function add(\$messages, \$domain = 'messages');

    /**
     * Merges translations from the given Catalogue into the current one.
     *
     * The two catalogues must have the same locale.
     */
    public function addCatalogue(self \$catalogue);

    /**
     * Merges translations from the given Catalogue into the current one
     * only when the translation does not exist.
     *
     * This is used to provide default translations when they do not exist for the current locale.
     */
    public function addFallbackCatalogue(self \$catalogue);

    /**
     * Gets the fallback catalogue.
     *
     * @return self|null A MessageCatalogueInterface instance or null when no fallback has been set
     */
    public function getFallbackCatalogue();

    /**
     * Returns an array of resources loaded to build this collection.
     *
     * @return ResourceInterface[] An array of resources
     */
    public function getResources();

    /**
     * Adds a resource for this collection.
     */
    public function addResource(ResourceInterface \$resource);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/MessageCatalogueInterface.php";
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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * MessageCatalogueInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MessageCatalogueInterface
{
    const INTL_DOMAIN_SUFFIX = '+intl-icu';

    /**
     * Gets the catalogue locale.
     *
     * @return string The locale
     */
    public function getLocale();

    /**
     * Gets the domains.
     *
     * @return array An array of domains
     */
    public function getDomains();

    /**
     * Gets the messages within a given domain.
     *
     * If \$domain is null, it returns all messages.
     *
     * @param string \$domain The domain name
     *
     * @return array An array of messages
     */
    public function all(\$domain = null);

    /**
     * Sets a message translation.
     *
     * @param string \$id          The message id
     * @param string \$translation The messages translation
     * @param string \$domain      The domain name
     */
    public function set(\$id, \$translation, \$domain = 'messages');

    /**
     * Checks if a message has a translation.
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return bool true if the message has a translation, false otherwise
     */
    public function has(\$id, \$domain = 'messages');

    /**
     * Checks if a message has a translation (it does not take into account the fallback mechanism).
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return bool true if the message has a translation, false otherwise
     */
    public function defines(\$id, \$domain = 'messages');

    /**
     * Gets a message translation.
     *
     * @param string \$id     The message id
     * @param string \$domain The domain name
     *
     * @return string The message translation
     */
    public function get(\$id, \$domain = 'messages');

    /**
     * Sets translations for a given domain.
     *
     * @param array  \$messages An array of translations
     * @param string \$domain   The domain name
     */
    public function replace(\$messages, \$domain = 'messages');

    /**
     * Adds translations for a given domain.
     *
     * @param array  \$messages An array of translations
     * @param string \$domain   The domain name
     */
    public function add(\$messages, \$domain = 'messages');

    /**
     * Merges translations from the given Catalogue into the current one.
     *
     * The two catalogues must have the same locale.
     */
    public function addCatalogue(self \$catalogue);

    /**
     * Merges translations from the given Catalogue into the current one
     * only when the translation does not exist.
     *
     * This is used to provide default translations when they do not exist for the current locale.
     */
    public function addFallbackCatalogue(self \$catalogue);

    /**
     * Gets the fallback catalogue.
     *
     * @return self|null A MessageCatalogueInterface instance or null when no fallback has been set
     */
    public function getFallbackCatalogue();

    /**
     * Returns an array of resources loaded to build this collection.
     *
     * @return ResourceInterface[] An array of resources
     */
    public function getResources();

    /**
     * Adds a resource for this collection.
     */
    public function addResource(ResourceInterface \$resource);
}
", "vendor/symfony/translation/MessageCatalogueInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/MessageCatalogueInterface.php");
    }
}
