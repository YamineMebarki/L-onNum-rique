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

/* vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php */
class __TwigTemplate_cfc47578001a2033449f145d7277bd35760dcfcbb252c11352d273c5616da57f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList\\Factory;

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;

/**
 * Default implementation of {@link ChoiceListFactoryInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DefaultChoiceListFactory implements ChoiceListFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createListFromChoices(\$choices, \$value = null)
    {
        return new ArrayChoiceList(\$choices, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromLoader(ChoiceLoaderInterface \$loader, \$value = null)
    {
        return new LazyChoiceList(\$loader, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function createView(ChoiceListInterface \$list, \$preferredChoices = null, \$label = null, \$index = null, \$groupBy = null, \$attr = null)
    {
        \$preferredViews = [];
        \$preferredViewsOrder = [];
        \$otherViews = [];
        \$choices = \$list->getChoices();
        \$keys = \$list->getOriginalKeys();

        if (!\\is_callable(\$preferredChoices) && !empty(\$preferredChoices)) {
            // make sure we have keys that reflect order
            \$preferredChoices = array_values(\$preferredChoices);
            \$preferredChoices = static function (\$choice) use (\$preferredChoices) {
                return array_search(\$choice, \$preferredChoices, true);
            };
        }

        // The names are generated from an incrementing integer by default
        if (null === \$index) {
            \$index = 0;
        }

        // If \$groupBy is a callable returning a string
        // choices are added to the group with the name returned by the callable.
        // If \$groupBy is a callable returning an array
        // choices are added to the groups with names returned by the callable
        // If the callable returns null, the choice is not added to any group
        if (\\is_callable(\$groupBy)) {
            foreach (\$choices as \$value => \$choice) {
                self::addChoiceViewsGroupedByCallable(
                    \$groupBy,
                    \$choice,
                    (string) \$value,
                    \$label,
                    \$keys,
                    \$index,
                    \$attr,
                    \$preferredChoices,
                    \$preferredViews,
                    \$preferredViewsOrder,
                    \$otherViews
                );
            }

            // Remove empty group views that may have been created by
            // addChoiceViewsGroupedByCallable()
            foreach (\$preferredViews as \$key => \$view) {
                if (\$view instanceof ChoiceGroupView && 0 === \\count(\$view->choices)) {
                    unset(\$preferredViews[\$key]);
                }
            }

            foreach (\$otherViews as \$key => \$view) {
                if (\$view instanceof ChoiceGroupView && 0 === \\count(\$view->choices)) {
                    unset(\$otherViews[\$key]);
                }
            }
        } else {
            // Otherwise use the original structure of the choices
            self::addChoiceViewsFromStructuredValues(
                \$list->getStructuredValues(),
                \$label,
                \$choices,
                \$keys,
                \$index,
                \$attr,
                \$preferredChoices,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );
        }

        uksort(\$preferredViews, static function (\$a, \$b) use (\$preferredViewsOrder): int {
            return isset(\$preferredViewsOrder[\$a], \$preferredViewsOrder[\$b])
                ? \$preferredViewsOrder[\$a] <=> \$preferredViewsOrder[\$b]
                : 0;
        });

        return new ChoiceListView(\$otherViews, \$preferredViews);
    }

    private static function addChoiceView(\$choice, \$value, \$label, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        // \$value may be an integer or a string, since it's stored in the array
        // keys. We want to guarantee it's a string though.
        \$key = \$keys[\$value];
        \$nextIndex = \\is_int(\$index) ? \$index++ : \$index(\$choice, \$key, \$value);

        // BC normalize label to accept a false value
        if (null === \$label) {
            // If the labels are null, use the original choice key by default
            \$label = (string) \$key;
        } elseif (false !== \$label) {
            // If \"choice_label\" is set to false and \"expanded\" is true, the value false
            // should be passed on to the \"label\" option of the checkboxes/radio buttons
            \$dynamicLabel = \$label(\$choice, \$key, \$value);
            \$label = false === \$dynamicLabel ? false : (string) \$dynamicLabel;
        }

        \$view = new ChoiceView(
            \$choice,
            \$value,
            \$label,
            // The attributes may be a callable or a mapping from choice indices
            // to nested arrays
            \\is_callable(\$attr) ? \$attr(\$choice, \$key, \$value) : (isset(\$attr[\$key]) ? \$attr[\$key] : [])
        );

        // \$isPreferred may be null if no choices are preferred
        if (\$isPreferred && false !== \$preferredKey = \$isPreferred(\$choice, \$key, \$value)) {
            \$preferredViews[\$nextIndex] = \$view;
            \$preferredViewsOrder[\$nextIndex] = \$preferredKey;
        } else {
            \$otherViews[\$nextIndex] = \$view;
        }
    }

    private static function addChoiceViewsFromStructuredValues(\$values, \$label, \$choices, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        foreach (\$values as \$key => \$value) {
            if (null === \$value) {
                continue;
            }

            // Add the contents of groups to new ChoiceGroupView instances
            if (\\is_array(\$value)) {
                \$preferredViewsForGroup = [];
                \$otherViewsForGroup = [];

                self::addChoiceViewsFromStructuredValues(
                    \$value,
                    \$label,
                    \$choices,
                    \$keys,
                    \$index,
                    \$attr,
                    \$isPreferred,
                    \$preferredViewsForGroup,
                    \$preferredViewsOrder,
                    \$otherViewsForGroup
                );

                if (\\count(\$preferredViewsForGroup) > 0) {
                    \$preferredViews[\$key] = new ChoiceGroupView(\$key, \$preferredViewsForGroup);
                }

                if (\\count(\$otherViewsForGroup) > 0) {
                    \$otherViews[\$key] = new ChoiceGroupView(\$key, \$otherViewsForGroup);
                }

                continue;
            }

            // Add ungrouped items directly
            self::addChoiceView(
                \$choices[\$value],
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );
        }
    }

    private static function addChoiceViewsGroupedByCallable(\$groupBy, \$choice, \$value, \$label, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        \$groupLabels = \$groupBy(\$choice, \$keys[\$value], \$value);

        if (null === \$groupLabels) {
            // If the callable returns null, don't group the choice
            self::addChoiceView(
                \$choice,
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );

            return;
        }

        \$groupLabels = \\is_array(\$groupLabels) ? array_map('strval', \$groupLabels) : [(string) \$groupLabels];

        foreach (\$groupLabels as \$groupLabel) {
            // Initialize the group views if necessary. Unnecessarily built group
            // views will be cleaned up at the end of createView()
            if (!isset(\$preferredViews[\$groupLabel])) {
                \$preferredViews[\$groupLabel] = new ChoiceGroupView(\$groupLabel);
                \$otherViews[\$groupLabel] = new ChoiceGroupView(\$groupLabel);
            }

            self::addChoiceView(
                \$choice,
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews[\$groupLabel]->choices,
                \$preferredViewsOrder,
                \$otherViews[\$groupLabel]->choices
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php";
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

namespace Symfony\\Component\\Form\\ChoiceList\\Factory;

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;

/**
 * Default implementation of {@link ChoiceListFactoryInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DefaultChoiceListFactory implements ChoiceListFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createListFromChoices(\$choices, \$value = null)
    {
        return new ArrayChoiceList(\$choices, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromLoader(ChoiceLoaderInterface \$loader, \$value = null)
    {
        return new LazyChoiceList(\$loader, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function createView(ChoiceListInterface \$list, \$preferredChoices = null, \$label = null, \$index = null, \$groupBy = null, \$attr = null)
    {
        \$preferredViews = [];
        \$preferredViewsOrder = [];
        \$otherViews = [];
        \$choices = \$list->getChoices();
        \$keys = \$list->getOriginalKeys();

        if (!\\is_callable(\$preferredChoices) && !empty(\$preferredChoices)) {
            // make sure we have keys that reflect order
            \$preferredChoices = array_values(\$preferredChoices);
            \$preferredChoices = static function (\$choice) use (\$preferredChoices) {
                return array_search(\$choice, \$preferredChoices, true);
            };
        }

        // The names are generated from an incrementing integer by default
        if (null === \$index) {
            \$index = 0;
        }

        // If \$groupBy is a callable returning a string
        // choices are added to the group with the name returned by the callable.
        // If \$groupBy is a callable returning an array
        // choices are added to the groups with names returned by the callable
        // If the callable returns null, the choice is not added to any group
        if (\\is_callable(\$groupBy)) {
            foreach (\$choices as \$value => \$choice) {
                self::addChoiceViewsGroupedByCallable(
                    \$groupBy,
                    \$choice,
                    (string) \$value,
                    \$label,
                    \$keys,
                    \$index,
                    \$attr,
                    \$preferredChoices,
                    \$preferredViews,
                    \$preferredViewsOrder,
                    \$otherViews
                );
            }

            // Remove empty group views that may have been created by
            // addChoiceViewsGroupedByCallable()
            foreach (\$preferredViews as \$key => \$view) {
                if (\$view instanceof ChoiceGroupView && 0 === \\count(\$view->choices)) {
                    unset(\$preferredViews[\$key]);
                }
            }

            foreach (\$otherViews as \$key => \$view) {
                if (\$view instanceof ChoiceGroupView && 0 === \\count(\$view->choices)) {
                    unset(\$otherViews[\$key]);
                }
            }
        } else {
            // Otherwise use the original structure of the choices
            self::addChoiceViewsFromStructuredValues(
                \$list->getStructuredValues(),
                \$label,
                \$choices,
                \$keys,
                \$index,
                \$attr,
                \$preferredChoices,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );
        }

        uksort(\$preferredViews, static function (\$a, \$b) use (\$preferredViewsOrder): int {
            return isset(\$preferredViewsOrder[\$a], \$preferredViewsOrder[\$b])
                ? \$preferredViewsOrder[\$a] <=> \$preferredViewsOrder[\$b]
                : 0;
        });

        return new ChoiceListView(\$otherViews, \$preferredViews);
    }

    private static function addChoiceView(\$choice, \$value, \$label, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        // \$value may be an integer or a string, since it's stored in the array
        // keys. We want to guarantee it's a string though.
        \$key = \$keys[\$value];
        \$nextIndex = \\is_int(\$index) ? \$index++ : \$index(\$choice, \$key, \$value);

        // BC normalize label to accept a false value
        if (null === \$label) {
            // If the labels are null, use the original choice key by default
            \$label = (string) \$key;
        } elseif (false !== \$label) {
            // If \"choice_label\" is set to false and \"expanded\" is true, the value false
            // should be passed on to the \"label\" option of the checkboxes/radio buttons
            \$dynamicLabel = \$label(\$choice, \$key, \$value);
            \$label = false === \$dynamicLabel ? false : (string) \$dynamicLabel;
        }

        \$view = new ChoiceView(
            \$choice,
            \$value,
            \$label,
            // The attributes may be a callable or a mapping from choice indices
            // to nested arrays
            \\is_callable(\$attr) ? \$attr(\$choice, \$key, \$value) : (isset(\$attr[\$key]) ? \$attr[\$key] : [])
        );

        // \$isPreferred may be null if no choices are preferred
        if (\$isPreferred && false !== \$preferredKey = \$isPreferred(\$choice, \$key, \$value)) {
            \$preferredViews[\$nextIndex] = \$view;
            \$preferredViewsOrder[\$nextIndex] = \$preferredKey;
        } else {
            \$otherViews[\$nextIndex] = \$view;
        }
    }

    private static function addChoiceViewsFromStructuredValues(\$values, \$label, \$choices, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        foreach (\$values as \$key => \$value) {
            if (null === \$value) {
                continue;
            }

            // Add the contents of groups to new ChoiceGroupView instances
            if (\\is_array(\$value)) {
                \$preferredViewsForGroup = [];
                \$otherViewsForGroup = [];

                self::addChoiceViewsFromStructuredValues(
                    \$value,
                    \$label,
                    \$choices,
                    \$keys,
                    \$index,
                    \$attr,
                    \$isPreferred,
                    \$preferredViewsForGroup,
                    \$preferredViewsOrder,
                    \$otherViewsForGroup
                );

                if (\\count(\$preferredViewsForGroup) > 0) {
                    \$preferredViews[\$key] = new ChoiceGroupView(\$key, \$preferredViewsForGroup);
                }

                if (\\count(\$otherViewsForGroup) > 0) {
                    \$otherViews[\$key] = new ChoiceGroupView(\$key, \$otherViewsForGroup);
                }

                continue;
            }

            // Add ungrouped items directly
            self::addChoiceView(
                \$choices[\$value],
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );
        }
    }

    private static function addChoiceViewsGroupedByCallable(\$groupBy, \$choice, \$value, \$label, \$keys, &\$index, \$attr, \$isPreferred, &\$preferredViews, &\$preferredViewsOrder, &\$otherViews)
    {
        \$groupLabels = \$groupBy(\$choice, \$keys[\$value], \$value);

        if (null === \$groupLabels) {
            // If the callable returns null, don't group the choice
            self::addChoiceView(
                \$choice,
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews,
                \$preferredViewsOrder,
                \$otherViews
            );

            return;
        }

        \$groupLabels = \\is_array(\$groupLabels) ? array_map('strval', \$groupLabels) : [(string) \$groupLabels];

        foreach (\$groupLabels as \$groupLabel) {
            // Initialize the group views if necessary. Unnecessarily built group
            // views will be cleaned up at the end of createView()
            if (!isset(\$preferredViews[\$groupLabel])) {
                \$preferredViews[\$groupLabel] = new ChoiceGroupView(\$groupLabel);
                \$otherViews[\$groupLabel] = new ChoiceGroupView(\$groupLabel);
            }

            self::addChoiceView(
                \$choice,
                \$value,
                \$label,
                \$keys,
                \$index,
                \$attr,
                \$isPreferred,
                \$preferredViews[\$groupLabel]->choices,
                \$preferredViewsOrder,
                \$otherViews[\$groupLabel]->choices
            );
        }
    }
}
", "vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php");
    }
}
