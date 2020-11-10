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

/* vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php */
class __TwigTemplate_c97be0050a42e0d5a9b6b1be401808e530d367e6a0a99ef501ea522196b3dcbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php"));

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
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

/**
 * Resize a collection form element based on the data sent from the client.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResizeFormListener implements EventSubscriberInterface
{
    protected \$type;
    protected \$options;
    protected \$allowAdd;
    protected \$allowDelete;

    private \$deleteEmpty;

    /**
     * @param bool          \$allowAdd    Whether children could be added to the group
     * @param bool          \$allowDelete Whether children could be removed from the group
     * @param bool|callable \$deleteEmpty
     */
    public function __construct(string \$type, array \$options = [], bool \$allowAdd = false, bool \$allowDelete = false, \$deleteEmpty = false)
    {
        \$this->type = \$type;
        \$this->allowAdd = \$allowAdd;
        \$this->allowDelete = \$allowDelete;
        \$this->options = \$options;
        \$this->deleteEmpty = \$deleteEmpty;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
            // (MergeCollectionListener, MergeDoctrineCollectionListener)
            FormEvents::SUBMIT => ['onSubmit', 50],
        ];
    }

    public function preSetData(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        // First remove all rows
        foreach (\$form as \$name => \$child) {
            \$form->remove(\$name);
        }

        // Then add all rows again in the correct order
        foreach (\$data as \$name => \$value) {
            \$form->add(\$name, \$this->type, array_replace([
                'property_path' => '['.\$name.']',
            ], \$this->options));
        }
    }

    public function preSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        if (!\\is_array(\$data)) {
            \$data = [];
        }

        // Remove all empty rows
        if (\$this->allowDelete) {
            foreach (\$form as \$name => \$child) {
                if (!isset(\$data[\$name])) {
                    \$form->remove(\$name);
                }
            }
        }

        // Add all additional rows
        if (\$this->allowAdd) {
            foreach (\$data as \$name => \$value) {
                if (!\$form->has(\$name)) {
                    \$form->add(\$name, \$this->type, array_replace([
                        'property_path' => '['.\$name.']',
                    ], \$this->options));
                }
            }
        }
    }

    public function onSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        // At this point, \$data is an array or an array-like object that already contains the
        // new entries, which were added by the data mapper. The data mapper ignores existing
        // entries, so we need to manually unset removed entries in the collection.

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        if (\$this->deleteEmpty) {
            \$previousData = \$form->getData();
            /** @var FormInterface \$child */
            foreach (\$form as \$name => \$child) {
                \$isNew = !isset(\$previousData[\$name]);
                \$isEmpty = \\is_callable(\$this->deleteEmpty) ? (\$this->deleteEmpty)(\$child->getData()) : \$child->isEmpty();

                // \$isNew can only be true if allowAdd is true, so we don't
                // need to check allowAdd again
                if (\$isEmpty && (\$isNew || \$this->allowDelete)) {
                    unset(\$data[\$name]);
                    \$form->remove(\$name);
                }
            }
        }

        // The data mapper only adds, but does not remove items, so do this
        // here
        if (\$this->allowDelete) {
            \$toDelete = [];

            foreach (\$data as \$name => \$child) {
                if (!\$form->has(\$name)) {
                    \$toDelete[] = \$name;
                }
            }

            foreach (\$toDelete as \$name) {
                unset(\$data[\$name]);
            }
        }

        \$event->setData(\$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

/**
 * Resize a collection form element based on the data sent from the client.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResizeFormListener implements EventSubscriberInterface
{
    protected \$type;
    protected \$options;
    protected \$allowAdd;
    protected \$allowDelete;

    private \$deleteEmpty;

    /**
     * @param bool          \$allowAdd    Whether children could be added to the group
     * @param bool          \$allowDelete Whether children could be removed from the group
     * @param bool|callable \$deleteEmpty
     */
    public function __construct(string \$type, array \$options = [], bool \$allowAdd = false, bool \$allowDelete = false, \$deleteEmpty = false)
    {
        \$this->type = \$type;
        \$this->allowAdd = \$allowAdd;
        \$this->allowDelete = \$allowDelete;
        \$this->options = \$options;
        \$this->deleteEmpty = \$deleteEmpty;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
            // (MergeCollectionListener, MergeDoctrineCollectionListener)
            FormEvents::SUBMIT => ['onSubmit', 50],
        ];
    }

    public function preSetData(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        // First remove all rows
        foreach (\$form as \$name => \$child) {
            \$form->remove(\$name);
        }

        // Then add all rows again in the correct order
        foreach (\$data as \$name => \$value) {
            \$form->add(\$name, \$this->type, array_replace([
                'property_path' => '['.\$name.']',
            ], \$this->options));
        }
    }

    public function preSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        if (!\\is_array(\$data)) {
            \$data = [];
        }

        // Remove all empty rows
        if (\$this->allowDelete) {
            foreach (\$form as \$name => \$child) {
                if (!isset(\$data[\$name])) {
                    \$form->remove(\$name);
                }
            }
        }

        // Add all additional rows
        if (\$this->allowAdd) {
            foreach (\$data as \$name => \$value) {
                if (!\$form->has(\$name)) {
                    \$form->add(\$name, \$this->type, array_replace([
                        'property_path' => '['.\$name.']',
                    ], \$this->options));
                }
            }
        }
    }

    public function onSubmit(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData();

        // At this point, \$data is an array or an array-like object that already contains the
        // new entries, which were added by the data mapper. The data mapper ignores existing
        // entries, so we need to manually unset removed entries in the collection.

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        if (\$this->deleteEmpty) {
            \$previousData = \$form->getData();
            /** @var FormInterface \$child */
            foreach (\$form as \$name => \$child) {
                \$isNew = !isset(\$previousData[\$name]);
                \$isEmpty = \\is_callable(\$this->deleteEmpty) ? (\$this->deleteEmpty)(\$child->getData()) : \$child->isEmpty();

                // \$isNew can only be true if allowAdd is true, so we don't
                // need to check allowAdd again
                if (\$isEmpty && (\$isNew || \$this->allowDelete)) {
                    unset(\$data[\$name]);
                    \$form->remove(\$name);
                }
            }
        }

        // The data mapper only adds, but does not remove items, so do this
        // here
        if (\$this->allowDelete) {
            \$toDelete = [];

            foreach (\$data as \$name => \$child) {
                if (!\$form->has(\$name)) {
                    \$toDelete[] = \$name;
                }
            }

            foreach (\$toDelete as \$name) {
                unset(\$data[\$name]);
            }
        }

        \$event->setData(\$data);
    }
}
", "vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/EventListener/ResizeFormListener.php");
    }
}
