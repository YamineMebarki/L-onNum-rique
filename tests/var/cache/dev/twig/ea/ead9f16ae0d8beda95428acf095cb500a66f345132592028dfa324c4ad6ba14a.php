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

/* vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php */
class __TwigTemplate_acccac319226702a79cfed256d1f52d86a3a72ca29711930952dee78bfbe2ca5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Csrf\\Type;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Csrf\\EventListener\\CsrfValidationListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormTypeCsrfExtension extends AbstractTypeExtension
{
    private \$defaultTokenManager;
    private \$defaultEnabled;
    private \$defaultFieldName;
    private \$translator;
    private \$translationDomain;
    private \$serverParams;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(CsrfTokenManagerInterface \$defaultTokenManager, bool \$defaultEnabled = true, string \$defaultFieldName = '_token', \$translator = null, string \$translationDomain = null, ServerParams \$serverParams = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 4 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->defaultTokenManager = \$defaultTokenManager;
        \$this->defaultEnabled = \$defaultEnabled;
        \$this->defaultFieldName = \$defaultFieldName;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->serverParams = \$serverParams;
    }

    /**
     * Adds a CSRF field to the form when the CSRF protection is enabled.
     *
     * @param FormBuilderInterface \$builder The form builder
     * @param array                \$options The options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (!\$options['csrf_protection']) {
            return;
        }

        \$builder
            ->addEventSubscriber(new CsrfValidationListener(
                \$options['csrf_field_name'],
                \$options['csrf_token_manager'],
                \$options['csrf_token_id'] ?: (\$builder->getName() ?: \\get_class(\$builder->getType()->getInnerType())),
                \$options['csrf_message'],
                \$this->translator,
                \$this->translationDomain,
                \$this->serverParams
            ))
        ;
    }

    /**
     * Adds a CSRF field to the root form view.
     *
     * @param FormView      \$view    The form view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['csrf_protection'] && !\$view->parent && \$options['compound']) {
            \$factory = \$form->getConfig()->getFormFactory();
            \$tokenId = \$options['csrf_token_id'] ?: (\$form->getName() ?: \\get_class(\$form->getConfig()->getType()->getInnerType()));
            \$data = (string) \$options['csrf_token_manager']->getToken(\$tokenId);

            \$csrfForm = \$factory->createNamed(\$options['csrf_field_name'], 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', \$data, [
                'block_prefix' => 'csrf_token',
                'mapped' => false,
            ]);

            \$view->children[\$options['csrf_field_name']] = \$csrfForm->createView(\$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'csrf_protection' => \$this->defaultEnabled,
            'csrf_field_name' => \$this->defaultFieldName,
            'csrf_message' => 'The CSRF token is invalid. Please try to resubmit the form.',
            'csrf_token_manager' => \$this->defaultTokenManager,
            'csrf_token_id' => null,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php";
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

namespace Symfony\\Component\\Form\\Extension\\Csrf\\Type;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Csrf\\EventListener\\CsrfValidationListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormTypeCsrfExtension extends AbstractTypeExtension
{
    private \$defaultTokenManager;
    private \$defaultEnabled;
    private \$defaultFieldName;
    private \$translator;
    private \$translationDomain;
    private \$serverParams;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(CsrfTokenManagerInterface \$defaultTokenManager, bool \$defaultEnabled = true, string \$defaultFieldName = '_token', \$translator = null, string \$translationDomain = null, ServerParams \$serverParams = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 4 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->defaultTokenManager = \$defaultTokenManager;
        \$this->defaultEnabled = \$defaultEnabled;
        \$this->defaultFieldName = \$defaultFieldName;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->serverParams = \$serverParams;
    }

    /**
     * Adds a CSRF field to the form when the CSRF protection is enabled.
     *
     * @param FormBuilderInterface \$builder The form builder
     * @param array                \$options The options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (!\$options['csrf_protection']) {
            return;
        }

        \$builder
            ->addEventSubscriber(new CsrfValidationListener(
                \$options['csrf_field_name'],
                \$options['csrf_token_manager'],
                \$options['csrf_token_id'] ?: (\$builder->getName() ?: \\get_class(\$builder->getType()->getInnerType())),
                \$options['csrf_message'],
                \$this->translator,
                \$this->translationDomain,
                \$this->serverParams
            ))
        ;
    }

    /**
     * Adds a CSRF field to the root form view.
     *
     * @param FormView      \$view    The form view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['csrf_protection'] && !\$view->parent && \$options['compound']) {
            \$factory = \$form->getConfig()->getFormFactory();
            \$tokenId = \$options['csrf_token_id'] ?: (\$form->getName() ?: \\get_class(\$form->getConfig()->getType()->getInnerType()));
            \$data = (string) \$options['csrf_token_manager']->getToken(\$tokenId);

            \$csrfForm = \$factory->createNamed(\$options['csrf_field_name'], 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', \$data, [
                'block_prefix' => 'csrf_token',
                'mapped' => false,
            ]);

            \$view->children[\$options['csrf_field_name']] = \$csrfForm->createView(\$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'csrf_protection' => \$this->defaultEnabled,
            'csrf_field_name' => \$this->defaultFieldName,
            'csrf_message' => 'The CSRF token is invalid. Please try to resubmit the form.',
            'csrf_token_manager' => \$this->defaultTokenManager,
            'csrf_token_id' => null,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
", "vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php");
    }
}
