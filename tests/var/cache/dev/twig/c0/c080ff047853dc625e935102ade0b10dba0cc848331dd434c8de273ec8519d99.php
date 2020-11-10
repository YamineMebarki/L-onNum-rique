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

/* vendor/symfony/form/Extension/Core/Type/FormType.php */
class __TwigTemplate_85b48b4848737ef45c3f83a76f8058c5c1a262681fd7b47e4ce8dccdefd584e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/FormType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/FormType.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\TrimListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

class FormType extends BaseType
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        parent::buildForm(\$builder, \$options);

        \$isDataOptionSet = \\array_key_exists('data', \$options);

        \$builder
            ->setRequired(\$options['required'])
            ->setErrorBubbling(\$options['error_bubbling'])
            ->setEmptyData(\$options['empty_data'])
            ->setPropertyPath(\$options['property_path'])
            ->setMapped(\$options['mapped'])
            ->setByReference(\$options['by_reference'])
            ->setInheritData(\$options['inherit_data'])
            ->setCompound(\$options['compound'])
            ->setData(\$isDataOptionSet ? \$options['data'] : null)
            ->setDataLocked(\$isDataOptionSet)
            ->setDataMapper(\$options['compound'] ? new PropertyPathMapper(\$this->propertyAccessor) : null)
            ->setMethod(\$options['method'])
            ->setAction(\$options['action']);

        if (\$options['trim']) {
            \$builder->addEventSubscriber(new TrimListener());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        parent::buildView(\$view, \$form, \$options);

        \$name = \$form->getName();
        \$helpTranslationParameters = \$options['help_translation_parameters'];

        if (\$view->parent) {
            if ('' === \$name) {
                throw new LogicException('Form node with empty name can be used only as root form node.');
            }

            // Complex fields are read-only if they themselves or their parents are.
            if (!isset(\$view->vars['attr']['readonly']) && isset(\$view->parent->vars['attr']['readonly']) && false !== \$view->parent->vars['attr']['readonly']) {
                \$view->vars['attr']['readonly'] = true;
            }

            \$helpTranslationParameters = array_merge(\$view->parent->vars['help_translation_parameters'], \$helpTranslationParameters);
        }

        \$formConfig = \$form->getConfig();
        \$view->vars = array_replace(\$view->vars, [
            'errors' => \$form->getErrors(),
            'valid' => \$form->isSubmitted() ? \$form->isValid() : true,
            'value' => \$form->getViewData(),
            'data' => \$form->getNormData(),
            'required' => \$form->isRequired(),
            'size' => null,
            'label_attr' => \$options['label_attr'],
            'help' => \$options['help'],
            'help_attr' => \$options['help_attr'],
            'help_html' => \$options['help_html'],
            'help_translation_parameters' => \$helpTranslationParameters,
            'compound' => \$formConfig->getCompound(),
            'method' => \$formConfig->getMethod(),
            'action' => \$formConfig->getAction(),
            'submitted' => \$form->isSubmitted(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$multipart = false;

        foreach (\$view->children as \$child) {
            if (\$child->vars['multipart']) {
                \$multipart = true;
                break;
            }
        }

        \$view->vars['multipart'] = \$multipart;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Derive \"data_class\" option from passed \"data\" object
        \$dataClass = function (Options \$options) {
            return isset(\$options['data']) && \\is_object(\$options['data']) ? \\get_class(\$options['data']) : null;
        };

        // Derive \"empty_data\" closure from \"data_class\" option
        \$emptyData = function (Options \$options) {
            \$class = \$options['data_class'];

            if (null !== \$class) {
                return function (FormInterface \$form) use (\$class) {
                    return \$form->isEmpty() && !\$form->isRequired() ? null : new \$class();
                };
            }

            return function (FormInterface \$form) {
                return \$form->getConfig()->getCompound() ? [] : '';
            };
        };

        // Wrap \"post_max_size_message\" in a closure to translate it lazily
        \$uploadMaxSizeMessage = function (Options \$options) {
            return function () use (\$options) {
                return \$options['post_max_size_message'];
            };
        };

        // For any form that is not represented by a single HTML control,
        // errors should bubble up by default
        \$errorBubbling = function (Options \$options) {
            return \$options['compound'];
        };

        // If data is given, the form is locked to that data
        // (independent of its value)
        \$resolver->setDefined([
            'data',
        ]);

        \$resolver->setDefaults([
            'data_class' => \$dataClass,
            'empty_data' => \$emptyData,
            'trim' => true,
            'required' => true,
            'property_path' => null,
            'mapped' => true,
            'by_reference' => true,
            'error_bubbling' => \$errorBubbling,
            'label_attr' => [],
            'inherit_data' => false,
            'compound' => true,
            'method' => 'POST',
            // According to RFC 2396 (http://www.ietf.org/rfc/rfc2396.txt)
            // section 4.2., empty URIs are considered same-document references
            'action' => '',
            'attr' => [],
            'post_max_size_message' => 'The uploaded file was too large. Please try to upload a smaller file.',
            'upload_max_size_message' => \$uploadMaxSizeMessage, // internal
            'allow_file_upload' => false,
            'help' => null,
            'help_attr' => [],
            'help_html' => false,
            'help_translation_parameters' => [],
        ]);

        \$resolver->setAllowedTypes('label_attr', 'array');
        \$resolver->setAllowedTypes('upload_max_size_message', ['callable']);
        \$resolver->setAllowedTypes('help', ['string', 'null']);
        \$resolver->setAllowedTypes('help_attr', 'array');
        \$resolver->setAllowedTypes('help_html', 'bool');
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'form';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/FormType.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\TrimListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

class FormType extends BaseType
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        parent::buildForm(\$builder, \$options);

        \$isDataOptionSet = \\array_key_exists('data', \$options);

        \$builder
            ->setRequired(\$options['required'])
            ->setErrorBubbling(\$options['error_bubbling'])
            ->setEmptyData(\$options['empty_data'])
            ->setPropertyPath(\$options['property_path'])
            ->setMapped(\$options['mapped'])
            ->setByReference(\$options['by_reference'])
            ->setInheritData(\$options['inherit_data'])
            ->setCompound(\$options['compound'])
            ->setData(\$isDataOptionSet ? \$options['data'] : null)
            ->setDataLocked(\$isDataOptionSet)
            ->setDataMapper(\$options['compound'] ? new PropertyPathMapper(\$this->propertyAccessor) : null)
            ->setMethod(\$options['method'])
            ->setAction(\$options['action']);

        if (\$options['trim']) {
            \$builder->addEventSubscriber(new TrimListener());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        parent::buildView(\$view, \$form, \$options);

        \$name = \$form->getName();
        \$helpTranslationParameters = \$options['help_translation_parameters'];

        if (\$view->parent) {
            if ('' === \$name) {
                throw new LogicException('Form node with empty name can be used only as root form node.');
            }

            // Complex fields are read-only if they themselves or their parents are.
            if (!isset(\$view->vars['attr']['readonly']) && isset(\$view->parent->vars['attr']['readonly']) && false !== \$view->parent->vars['attr']['readonly']) {
                \$view->vars['attr']['readonly'] = true;
            }

            \$helpTranslationParameters = array_merge(\$view->parent->vars['help_translation_parameters'], \$helpTranslationParameters);
        }

        \$formConfig = \$form->getConfig();
        \$view->vars = array_replace(\$view->vars, [
            'errors' => \$form->getErrors(),
            'valid' => \$form->isSubmitted() ? \$form->isValid() : true,
            'value' => \$form->getViewData(),
            'data' => \$form->getNormData(),
            'required' => \$form->isRequired(),
            'size' => null,
            'label_attr' => \$options['label_attr'],
            'help' => \$options['help'],
            'help_attr' => \$options['help_attr'],
            'help_html' => \$options['help_html'],
            'help_translation_parameters' => \$helpTranslationParameters,
            'compound' => \$formConfig->getCompound(),
            'method' => \$formConfig->getMethod(),
            'action' => \$formConfig->getAction(),
            'submitted' => \$form->isSubmitted(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$multipart = false;

        foreach (\$view->children as \$child) {
            if (\$child->vars['multipart']) {
                \$multipart = true;
                break;
            }
        }

        \$view->vars['multipart'] = \$multipart;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Derive \"data_class\" option from passed \"data\" object
        \$dataClass = function (Options \$options) {
            return isset(\$options['data']) && \\is_object(\$options['data']) ? \\get_class(\$options['data']) : null;
        };

        // Derive \"empty_data\" closure from \"data_class\" option
        \$emptyData = function (Options \$options) {
            \$class = \$options['data_class'];

            if (null !== \$class) {
                return function (FormInterface \$form) use (\$class) {
                    return \$form->isEmpty() && !\$form->isRequired() ? null : new \$class();
                };
            }

            return function (FormInterface \$form) {
                return \$form->getConfig()->getCompound() ? [] : '';
            };
        };

        // Wrap \"post_max_size_message\" in a closure to translate it lazily
        \$uploadMaxSizeMessage = function (Options \$options) {
            return function () use (\$options) {
                return \$options['post_max_size_message'];
            };
        };

        // For any form that is not represented by a single HTML control,
        // errors should bubble up by default
        \$errorBubbling = function (Options \$options) {
            return \$options['compound'];
        };

        // If data is given, the form is locked to that data
        // (independent of its value)
        \$resolver->setDefined([
            'data',
        ]);

        \$resolver->setDefaults([
            'data_class' => \$dataClass,
            'empty_data' => \$emptyData,
            'trim' => true,
            'required' => true,
            'property_path' => null,
            'mapped' => true,
            'by_reference' => true,
            'error_bubbling' => \$errorBubbling,
            'label_attr' => [],
            'inherit_data' => false,
            'compound' => true,
            'method' => 'POST',
            // According to RFC 2396 (http://www.ietf.org/rfc/rfc2396.txt)
            // section 4.2., empty URIs are considered same-document references
            'action' => '',
            'attr' => [],
            'post_max_size_message' => 'The uploaded file was too large. Please try to upload a smaller file.',
            'upload_max_size_message' => \$uploadMaxSizeMessage, // internal
            'allow_file_upload' => false,
            'help' => null,
            'help_attr' => [],
            'help_html' => false,
            'help_translation_parameters' => [],
        ]);

        \$resolver->setAllowedTypes('label_attr', 'array');
        \$resolver->setAllowedTypes('upload_max_size_message', ['callable']);
        \$resolver->setAllowedTypes('help', ['string', 'null']);
        \$resolver->setAllowedTypes('help_attr', 'array');
        \$resolver->setAllowedTypes('help_html', 'bool');
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'form';
    }
}
", "vendor/symfony/form/Extension/Core/Type/FormType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/FormType.php");
    }
}
