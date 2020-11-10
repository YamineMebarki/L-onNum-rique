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

/* vendor/symfony/form/ChoiceList/View/ChoiceListView.php */
class __TwigTemplate_a2f1c31b2aeb51d194758cc5950b656178437f4e7c4abcd51bc62460c3bf5a6b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/View/ChoiceListView.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/View/ChoiceListView.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList\\View;

/**
 * Represents a choice list in templates.
 *
 * A choice list contains choices and optionally preferred choices which are
 * displayed in the very beginning of the list. Both choices and preferred
 * choices may be grouped in {@link ChoiceGroupView} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceListView
{
    public \$choices;
    public \$preferredChoices;

    /**
     * Creates a new choice list view.
     *
     * @param ChoiceGroupView[]|ChoiceView[] \$choices          The choice views
     * @param ChoiceGroupView[]|ChoiceView[] \$preferredChoices the preferred choice views
     */
    public function __construct(array \$choices = [], array \$preferredChoices = [])
    {
        \$this->choices = \$choices;
        \$this->preferredChoices = \$preferredChoices;
    }

    /**
     * Returns whether a placeholder is in the choices.
     *
     * A placeholder must be the first child element, not be in a group and have an empty value.
     *
     * @return bool
     */
    public function hasPlaceholder()
    {
        if (\$this->preferredChoices) {
            \$firstChoice = reset(\$this->preferredChoices);

            return \$firstChoice instanceof ChoiceView && '' === \$firstChoice->value;
        }

        \$firstChoice = reset(\$this->choices);

        return \$firstChoice instanceof ChoiceView && '' === \$firstChoice->value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/View/ChoiceListView.php";
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

namespace Symfony\\Component\\Form\\ChoiceList\\View;

/**
 * Represents a choice list in templates.
 *
 * A choice list contains choices and optionally preferred choices which are
 * displayed in the very beginning of the list. Both choices and preferred
 * choices may be grouped in {@link ChoiceGroupView} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceListView
{
    public \$choices;
    public \$preferredChoices;

    /**
     * Creates a new choice list view.
     *
     * @param ChoiceGroupView[]|ChoiceView[] \$choices          The choice views
     * @param ChoiceGroupView[]|ChoiceView[] \$preferredChoices the preferred choice views
     */
    public function __construct(array \$choices = [], array \$preferredChoices = [])
    {
        \$this->choices = \$choices;
        \$this->preferredChoices = \$preferredChoices;
    }

    /**
     * Returns whether a placeholder is in the choices.
     *
     * A placeholder must be the first child element, not be in a group and have an empty value.
     *
     * @return bool
     */
    public function hasPlaceholder()
    {
        if (\$this->preferredChoices) {
            \$firstChoice = reset(\$this->preferredChoices);

            return \$firstChoice instanceof ChoiceView && '' === \$firstChoice->value;
        }

        \$firstChoice = reset(\$this->choices);

        return \$firstChoice instanceof ChoiceView && '' === \$firstChoice->value;
    }
}
", "vendor/symfony/form/ChoiceList/View/ChoiceListView.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/View/ChoiceListView.php");
    }
}
