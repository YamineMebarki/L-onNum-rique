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

/* vendor/symfony/form/Extension/Core/Type/CollectionType.php */
class __TwigTemplate_a4a6f4ee49ae0b2be1b127816f5c9d96ceb413853946ca902e9734c2e616cc83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/CollectionType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/CollectionType.php"));

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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\ResizeFormListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class CollectionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (\$options['allow_add'] && \$options['prototype']) {
            \$prototypeOptions = array_replace([
                'required' => \$options['required'],
                'label' => \$options['prototype_name'].'label__',
            ], \$options['entry_options']);

            if (null !== \$options['prototype_data']) {
                \$prototypeOptions['data'] = \$options['prototype_data'];
            }

            \$prototype = \$builder->create(\$options['prototype_name'], \$options['entry_type'], \$prototypeOptions);
            \$builder->setAttribute('prototype', \$prototype->getForm());
        }

        \$resizeListener = new ResizeFormListener(
            \$options['entry_type'],
            \$options['entry_options'],
            \$options['allow_add'],
            \$options['allow_delete'],
            \$options['delete_empty']
        );

        \$builder->addEventSubscriber(\$resizeListener);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars = array_replace(\$view->vars, [
            'allow_add' => \$options['allow_add'],
            'allow_delete' => \$options['allow_delete'],
        ]);

        if (\$form->getConfig()->hasAttribute('prototype')) {
            \$prototype = \$form->getConfig()->getAttribute('prototype');
            \$view->vars['prototype'] = \$prototype->setParent(\$form)->createView(\$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$form->getConfig()->hasAttribute('prototype') && \$view->vars['prototype']->vars['multipart']) {
            \$view->vars['multipart'] = true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$entryOptionsNormalizer = function (Options \$options, \$value) {
            \$value['block_name'] = 'entry';

            return \$value;
        };

        \$resolver->setDefaults([
            'allow_add' => false,
            'allow_delete' => false,
            'prototype' => true,
            'prototype_data' => null,
            'prototype_name' => '__name__',
            'entry_type' => __NAMESPACE__.'\\TextType',
            'entry_options' => [],
            'delete_empty' => false,
        ]);

        \$resolver->setNormalizer('entry_options', \$entryOptionsNormalizer);
        \$resolver->setAllowedTypes('delete_empty', ['bool', 'callable']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'collection';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/CollectionType.php";
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\ResizeFormListener;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class CollectionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (\$options['allow_add'] && \$options['prototype']) {
            \$prototypeOptions = array_replace([
                'required' => \$options['required'],
                'label' => \$options['prototype_name'].'label__',
            ], \$options['entry_options']);

            if (null !== \$options['prototype_data']) {
                \$prototypeOptions['data'] = \$options['prototype_data'];
            }

            \$prototype = \$builder->create(\$options['prototype_name'], \$options['entry_type'], \$prototypeOptions);
            \$builder->setAttribute('prototype', \$prototype->getForm());
        }

        \$resizeListener = new ResizeFormListener(
            \$options['entry_type'],
            \$options['entry_options'],
            \$options['allow_add'],
            \$options['allow_delete'],
            \$options['delete_empty']
        );

        \$builder->addEventSubscriber(\$resizeListener);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars = array_replace(\$view->vars, [
            'allow_add' => \$options['allow_add'],
            'allow_delete' => \$options['allow_delete'],
        ]);

        if (\$form->getConfig()->hasAttribute('prototype')) {
            \$prototype = \$form->getConfig()->getAttribute('prototype');
            \$view->vars['prototype'] = \$prototype->setParent(\$form)->createView(\$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$form->getConfig()->hasAttribute('prototype') && \$view->vars['prototype']->vars['multipart']) {
            \$view->vars['multipart'] = true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$entryOptionsNormalizer = function (Options \$options, \$value) {
            \$value['block_name'] = 'entry';

            return \$value;
        };

        \$resolver->setDefaults([
            'allow_add' => false,
            'allow_delete' => false,
            'prototype' => true,
            'prototype_data' => null,
            'prototype_name' => '__name__',
            'entry_type' => __NAMESPACE__.'\\TextType',
            'entry_options' => [],
            'delete_empty' => false,
        ]);

        \$resolver->setNormalizer('entry_options', \$entryOptionsNormalizer);
        \$resolver->setAllowedTypes('delete_empty', ['bool', 'callable']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'collection';
    }
}
", "vendor/symfony/form/Extension/Core/Type/CollectionType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/CollectionType.php");
    }
}
