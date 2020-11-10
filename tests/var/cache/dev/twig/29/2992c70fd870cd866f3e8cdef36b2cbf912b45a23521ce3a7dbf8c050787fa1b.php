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

/* vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php */
class __TwigTemplate_6c72c89c1e3c9d32f8968818662a21eeb7983b83f8411449e677702fa1f16723 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php"));

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

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MergeCollectionListener implements EventSubscriberInterface
{
    private \$allowAdd;
    private \$allowDelete;

    /**
     * @param bool \$allowAdd    Whether values might be added to the collection
     * @param bool \$allowDelete Whether values might be removed from the collection
     */
    public function __construct(bool \$allowAdd = false, bool \$allowDelete = false)
    {
        \$this->allowAdd = \$allowAdd;
        \$this->allowDelete = \$allowDelete;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::SUBMIT => 'onSubmit',
        ];
    }

    public function onSubmit(FormEvent \$event)
    {
        \$dataToMergeInto = \$event->getForm()->getNormData();
        \$data = \$event->getData();

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        if (null !== \$dataToMergeInto && !\\is_array(\$dataToMergeInto) && !(\$dataToMergeInto instanceof \\Traversable && \$dataToMergeInto instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$dataToMergeInto, 'array or (\\Traversable and \\ArrayAccess)');
        }

        // If we are not allowed to change anything, return immediately
        if (\$data === \$dataToMergeInto || (!\$this->allowAdd && !\$this->allowDelete)) {
            \$event->setData(\$dataToMergeInto);

            return;
        }

        if (null === \$dataToMergeInto) {
            // No original data was set. Set it if allowed
            if (\$this->allowAdd) {
                \$dataToMergeInto = \$data;
            }
        } else {
            // Calculate delta
            \$itemsToAdd = \\is_object(\$data) ? clone \$data : \$data;
            \$itemsToDelete = [];

            foreach (\$dataToMergeInto as \$beforeKey => \$beforeItem) {
                foreach (\$data as \$afterKey => \$afterItem) {
                    if (\$afterItem === \$beforeItem) {
                        // Item found, next original item
                        unset(\$itemsToAdd[\$afterKey]);
                        continue 2;
                    }
                }

                // Item not found, remember for deletion
                \$itemsToDelete[] = \$beforeKey;
            }

            // Remove deleted items before adding to free keys that are to be
            // replaced
            if (\$this->allowDelete) {
                foreach (\$itemsToDelete as \$key) {
                    unset(\$dataToMergeInto[\$key]);
                }
            }

            // Add remaining items
            if (\$this->allowAdd) {
                foreach (\$itemsToAdd as \$key => \$item) {
                    if (!isset(\$dataToMergeInto[\$key])) {
                        \$dataToMergeInto[\$key] = \$item;
                    } else {
                        \$dataToMergeInto[] = \$item;
                    }
                }
            }
        }

        \$event->setData(\$dataToMergeInto);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php";
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

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MergeCollectionListener implements EventSubscriberInterface
{
    private \$allowAdd;
    private \$allowDelete;

    /**
     * @param bool \$allowAdd    Whether values might be added to the collection
     * @param bool \$allowDelete Whether values might be removed from the collection
     */
    public function __construct(bool \$allowAdd = false, bool \$allowDelete = false)
    {
        \$this->allowAdd = \$allowAdd;
        \$this->allowDelete = \$allowDelete;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::SUBMIT => 'onSubmit',
        ];
    }

    public function onSubmit(FormEvent \$event)
    {
        \$dataToMergeInto = \$event->getForm()->getNormData();
        \$data = \$event->getData();

        if (null === \$data) {
            \$data = [];
        }

        if (!\\is_array(\$data) && !(\$data instanceof \\Traversable && \$data instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$data, 'array or (\\Traversable and \\ArrayAccess)');
        }

        if (null !== \$dataToMergeInto && !\\is_array(\$dataToMergeInto) && !(\$dataToMergeInto instanceof \\Traversable && \$dataToMergeInto instanceof \\ArrayAccess)) {
            throw new UnexpectedTypeException(\$dataToMergeInto, 'array or (\\Traversable and \\ArrayAccess)');
        }

        // If we are not allowed to change anything, return immediately
        if (\$data === \$dataToMergeInto || (!\$this->allowAdd && !\$this->allowDelete)) {
            \$event->setData(\$dataToMergeInto);

            return;
        }

        if (null === \$dataToMergeInto) {
            // No original data was set. Set it if allowed
            if (\$this->allowAdd) {
                \$dataToMergeInto = \$data;
            }
        } else {
            // Calculate delta
            \$itemsToAdd = \\is_object(\$data) ? clone \$data : \$data;
            \$itemsToDelete = [];

            foreach (\$dataToMergeInto as \$beforeKey => \$beforeItem) {
                foreach (\$data as \$afterKey => \$afterItem) {
                    if (\$afterItem === \$beforeItem) {
                        // Item found, next original item
                        unset(\$itemsToAdd[\$afterKey]);
                        continue 2;
                    }
                }

                // Item not found, remember for deletion
                \$itemsToDelete[] = \$beforeKey;
            }

            // Remove deleted items before adding to free keys that are to be
            // replaced
            if (\$this->allowDelete) {
                foreach (\$itemsToDelete as \$key) {
                    unset(\$dataToMergeInto[\$key]);
                }
            }

            // Add remaining items
            if (\$this->allowAdd) {
                foreach (\$itemsToAdd as \$key => \$item) {
                    if (!isset(\$dataToMergeInto[\$key])) {
                        \$dataToMergeInto[\$key] = \$item;
                    } else {
                        \$dataToMergeInto[] = \$item;
                    }
                }
            }
        }

        \$event->setData(\$dataToMergeInto);
    }
}
", "vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/EventListener/MergeCollectionListener.php");
    }
}
