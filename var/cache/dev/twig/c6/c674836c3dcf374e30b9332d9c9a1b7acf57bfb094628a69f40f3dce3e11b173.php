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

/* vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php */
class __TwigTemplate_8de07bf3a218b76ca822f3c5421e52efd42c7edd1df62bb17a5e9b97692448aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Csrf\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfValidationListener implements EventSubscriberInterface
{
    private \$fieldName;
    private \$tokenManager;
    private \$tokenId;
    private \$errorMessage;
    private \$translator;
    private \$translationDomain;
    private \$serverParams;

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(string \$fieldName, CsrfTokenManagerInterface \$tokenManager, string \$tokenId, string \$errorMessage, \$translator = null, string \$translationDomain = null, ServerParams \$serverParams = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 5 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->fieldName = \$fieldName;
        \$this->tokenManager = \$tokenManager;
        \$this->tokenId = \$tokenId;
        \$this->errorMessage = \$errorMessage;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->serverParams = \$serverParams ?: new ServerParams();
    }

    public function preSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$postRequestSizeExceeded = 'POST' === \$form->getConfig()->getMethod() && \$this->serverParams->hasPostMaxSizeBeenExceeded();

        if (\$form->isRoot() && \$form->getConfig()->getOption('compound') && !\$postRequestSizeExceeded) {
            \$data = \$event->getData();

            \$csrfValue = \\is_string(\$data[\$this->fieldName] ?? null) ? \$data[\$this->fieldName] : null;
            \$csrfToken = new CsrfToken(\$this->tokenId, \$csrfValue);

            if (null === \$csrfValue || !\$this->tokenManager->isTokenValid(\$csrfToken)) {
                \$errorMessage = \$this->errorMessage;

                if (null !== \$this->translator) {
                    \$errorMessage = \$this->translator->trans(\$errorMessage, [], \$this->translationDomain);
                }

                \$form->addError(new FormError(\$errorMessage, \$errorMessage, [], null, \$csrfToken));
            }

            if (\\is_array(\$data)) {
                unset(\$data[\$this->fieldName]);
                \$event->setData(\$data);
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
        return "vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php";
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

namespace Symfony\\Component\\Form\\Extension\\Csrf\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfValidationListener implements EventSubscriberInterface
{
    private \$fieldName;
    private \$tokenManager;
    private \$tokenId;
    private \$errorMessage;
    private \$translator;
    private \$translationDomain;
    private \$serverParams;

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(string \$fieldName, CsrfTokenManagerInterface \$tokenManager, string \$tokenId, string \$errorMessage, \$translator = null, string \$translationDomain = null, ServerParams \$serverParams = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 5 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->fieldName = \$fieldName;
        \$this->tokenManager = \$tokenManager;
        \$this->tokenId = \$tokenId;
        \$this->errorMessage = \$errorMessage;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->serverParams = \$serverParams ?: new ServerParams();
    }

    public function preSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$postRequestSizeExceeded = 'POST' === \$form->getConfig()->getMethod() && \$this->serverParams->hasPostMaxSizeBeenExceeded();

        if (\$form->isRoot() && \$form->getConfig()->getOption('compound') && !\$postRequestSizeExceeded) {
            \$data = \$event->getData();

            \$csrfValue = \\is_string(\$data[\$this->fieldName] ?? null) ? \$data[\$this->fieldName] : null;
            \$csrfToken = new CsrfToken(\$this->tokenId, \$csrfValue);

            if (null === \$csrfValue || !\$this->tokenManager->isTokenValid(\$csrfToken)) {
                \$errorMessage = \$this->errorMessage;

                if (null !== \$this->translator) {
                    \$errorMessage = \$this->translator->trans(\$errorMessage, [], \$this->translationDomain);
                }

                \$form->addError(new FormError(\$errorMessage, \$errorMessage, [], null, \$csrfToken));
            }

            if (\\is_array(\$data)) {
                unset(\$data[\$this->fieldName]);
                \$event->setData(\$data);
            }
        }
    }
}
", "vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Csrf/EventListener/CsrfValidationListener.php");
    }
}
