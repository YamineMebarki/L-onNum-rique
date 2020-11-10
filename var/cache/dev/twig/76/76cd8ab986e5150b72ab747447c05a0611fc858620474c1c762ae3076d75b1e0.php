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

/* vendor/symfony/translation/LoggingTranslator.php */
class __TwigTemplate_0e8f5d9d8097e4b815324561b30e66248ceaf81cf739083fb9f8fa9ad342bd71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/LoggingTranslator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/LoggingTranslator.php"));

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

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class LoggingTranslator implements TranslatorInterface, LegacyTranslatorInterface, TranslatorBagInterface
{
    /**
     * @var TranslatorInterface|TranslatorBagInterface
     */
    private \$translator;

    private \$logger;

    /**
     * @param TranslatorInterface \$translator The translator must implement TranslatorBagInterface
     */
    public function __construct(\$translator, LoggerInterface \$logger)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        if (!\$translator instanceof TranslatorBagInterface || !\$translator instanceof LocaleAwareInterface) {
            throw new InvalidArgumentException(sprintf('The Translator \"%s\" must implement TranslatorInterface, TranslatorBagInterface and LocaleAwareInterface.', \\get_class(\$translator)));
        }

        \$this->translator = \$translator;
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        \$trans = \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
        \$this->log(\$id, \$domain, \$locale);

        return \$trans;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->translator instanceof TranslatorInterface) {
            \$trans = \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        } else {
            \$trans = \$this->translator->transChoice(\$id, \$number, \$parameters, \$domain, \$locale);
        }

        \$this->log(\$id, \$domain, \$locale);

        return \$trans;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(\$locale)
    {
        \$prev = \$this->translator->getLocale();
        \$this->translator->setLocale(\$locale);
        if (\$prev === \$locale) {
            return;
        }

        \$this->logger->debug(sprintf('The locale of the translator has changed from \"%s\" to \"%s\".', \$prev, \$locale));
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return \$this->translator->getLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogue(\$locale = null)
    {
        return \$this->translator->getCatalogue(\$locale);
    }

    /**
     * Gets the fallback locales.
     *
     * @return array The fallback locales
     */
    public function getFallbackLocales()
    {
        if (\$this->translator instanceof Translator || method_exists(\$this->translator, 'getFallbackLocales')) {
            return \$this->translator->getFallbackLocales();
        }

        return [];
    }

    /**
     * Passes through all unknown calls onto the translator object.
     */
    public function __call(\$method, \$args)
    {
        return \$this->translator->{\$method}(...\$args);
    }

    /**
     * Logs for missing translations.
     *
     * @param string      \$id
     * @param string|null \$domain
     * @param string|null \$locale
     */
    private function log(\$id, \$domain, \$locale)
    {
        if (null === \$domain) {
            \$domain = 'messages';
        }

        \$id = (string) \$id;
        \$catalogue = \$this->translator->getCatalogue(\$locale);
        if (\$catalogue->defines(\$id, \$domain)) {
            return;
        }

        if (\$catalogue->has(\$id, \$domain)) {
            \$this->logger->debug('Translation use fallback catalogue.', ['id' => \$id, 'domain' => \$domain, 'locale' => \$catalogue->getLocale()]);
        } else {
            \$this->logger->warning('Translation not found.', ['id' => \$id, 'domain' => \$domain, 'locale' => \$catalogue->getLocale()]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/LoggingTranslator.php";
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

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class LoggingTranslator implements TranslatorInterface, LegacyTranslatorInterface, TranslatorBagInterface
{
    /**
     * @var TranslatorInterface|TranslatorBagInterface
     */
    private \$translator;

    private \$logger;

    /**
     * @param TranslatorInterface \$translator The translator must implement TranslatorBagInterface
     */
    public function __construct(\$translator, LoggerInterface \$logger)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        if (!\$translator instanceof TranslatorBagInterface || !\$translator instanceof LocaleAwareInterface) {
            throw new InvalidArgumentException(sprintf('The Translator \"%s\" must implement TranslatorInterface, TranslatorBagInterface and LocaleAwareInterface.', \\get_class(\$translator)));
        }

        \$this->translator = \$translator;
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        \$trans = \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
        \$this->log(\$id, \$domain, \$locale);

        return \$trans;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->translator instanceof TranslatorInterface) {
            \$trans = \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        } else {
            \$trans = \$this->translator->transChoice(\$id, \$number, \$parameters, \$domain, \$locale);
        }

        \$this->log(\$id, \$domain, \$locale);

        return \$trans;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(\$locale)
    {
        \$prev = \$this->translator->getLocale();
        \$this->translator->setLocale(\$locale);
        if (\$prev === \$locale) {
            return;
        }

        \$this->logger->debug(sprintf('The locale of the translator has changed from \"%s\" to \"%s\".', \$prev, \$locale));
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return \$this->translator->getLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogue(\$locale = null)
    {
        return \$this->translator->getCatalogue(\$locale);
    }

    /**
     * Gets the fallback locales.
     *
     * @return array The fallback locales
     */
    public function getFallbackLocales()
    {
        if (\$this->translator instanceof Translator || method_exists(\$this->translator, 'getFallbackLocales')) {
            return \$this->translator->getFallbackLocales();
        }

        return [];
    }

    /**
     * Passes through all unknown calls onto the translator object.
     */
    public function __call(\$method, \$args)
    {
        return \$this->translator->{\$method}(...\$args);
    }

    /**
     * Logs for missing translations.
     *
     * @param string      \$id
     * @param string|null \$domain
     * @param string|null \$locale
     */
    private function log(\$id, \$domain, \$locale)
    {
        if (null === \$domain) {
            \$domain = 'messages';
        }

        \$id = (string) \$id;
        \$catalogue = \$this->translator->getCatalogue(\$locale);
        if (\$catalogue->defines(\$id, \$domain)) {
            return;
        }

        if (\$catalogue->has(\$id, \$domain)) {
            \$this->logger->debug('Translation use fallback catalogue.', ['id' => \$id, 'domain' => \$domain, 'locale' => \$catalogue->getLocale()]);
        } else {
            \$this->logger->warning('Translation not found.', ['id' => \$id, 'domain' => \$domain, 'locale' => \$catalogue->getLocale()]);
        }
    }
}
", "vendor/symfony/translation/LoggingTranslator.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/LoggingTranslator.php");
    }
}
