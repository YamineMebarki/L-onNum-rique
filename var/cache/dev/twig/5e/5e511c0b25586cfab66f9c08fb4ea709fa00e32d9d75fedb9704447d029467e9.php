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

/* vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php */
class __TwigTemplate_72f295b5181b70c1e031e553d779a5c1884a420fcb5e2bb6b790eec6b5c3394f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class TransformationFailureListener implements EventSubscriberInterface
{
    private \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(\$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::POST_SUBMIT => ['convertTransformationFailureToFormError', -1024],
        ];
    }

    public function convertTransformationFailureToFormError(FormEvent \$event)
    {
        \$form = \$event->getForm();

        if (null === \$form->getTransformationFailure() || !\$form->isValid()) {
            return;
        }

        foreach (\$form as \$child) {
            if (!\$child->isSynchronized()) {
                return;
            }
        }

        \$clientDataAsString = is_scalar(\$form->getViewData()) ? (string) \$form->getViewData() : \\gettype(\$form->getViewData());
        \$messageTemplate = 'The value ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " is not valid.';

        if (null !== \$this->translator) {
            \$message = \$this->translator->trans(\$messageTemplate, ['";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "' => \$clientDataAsString]);
        } else {
            \$message = strtr(\$messageTemplate, ['";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "' => \$clientDataAsString]);
        }

        \$form->addError(new FormError(\$message, \$messageTemplate, ['";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "' => \$clientDataAsString], null, \$form->getTransformationFailure()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 69,  116 => 66,  111 => 64,  105 => 61,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\Core\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class TransformationFailureListener implements EventSubscriberInterface
{
    private \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(\$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::POST_SUBMIT => ['convertTransformationFailureToFormError', -1024],
        ];
    }

    public function convertTransformationFailureToFormError(FormEvent \$event)
    {
        \$form = \$event->getForm();

        if (null === \$form->getTransformationFailure() || !\$form->isValid()) {
            return;
        }

        foreach (\$form as \$child) {
            if (!\$child->isSynchronized()) {
                return;
            }
        }

        \$clientDataAsString = is_scalar(\$form->getViewData()) ? (string) \$form->getViewData() : \\gettype(\$form->getViewData());
        \$messageTemplate = 'The value {{ value }} is not valid.';

        if (null !== \$this->translator) {
            \$message = \$this->translator->trans(\$messageTemplate, ['{{ value }}' => \$clientDataAsString]);
        } else {
            \$message = strtr(\$messageTemplate, ['{{ value }}' => \$clientDataAsString]);
        }

        \$form->addError(new FormError(\$message, \$messageTemplate, ['{{ value }}' => \$clientDataAsString], null, \$form->getTransformationFailure()));
    }
}
", "vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/EventListener/TransformationFailureListener.php");
    }
}
