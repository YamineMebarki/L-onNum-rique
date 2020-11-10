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

/* vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php */
class __TwigTemplate_74a4fea1a0ab6b11cb2afa78c0399bc74d9eeff484820f8576c6d5c91914d560 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList\\Loader;

/**
 * Callback choice loader optimized for Intl choice types.
 *
 * @author Jules Pietri <jules@heahprod.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class IntlCallbackChoiceLoader extends CallbackChoiceLoader
{
    /**
     * {@inheritdoc}
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        // Optimize
        \$values = array_filter(\$values);
        if (empty(\$values)) {
            return [];
        }

        return \$this->loadChoiceList(\$value)->getChoicesForValues(\$values);
    }

    /**
     * {@inheritdoc}
     */
    public function loadValuesForChoices(array \$choices, \$value = null)
    {
        // Optimize
        \$choices = array_filter(\$choices);
        if (empty(\$choices)) {
            return [];
        }

        // If no callable is set, choices are the same as values
        if (null === \$value) {
            return \$choices;
        }

        return \$this->loadChoiceList(\$value)->getValuesForChoices(\$choices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php";
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

namespace Symfony\\Component\\Form\\ChoiceList\\Loader;

/**
 * Callback choice loader optimized for Intl choice types.
 *
 * @author Jules Pietri <jules@heahprod.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class IntlCallbackChoiceLoader extends CallbackChoiceLoader
{
    /**
     * {@inheritdoc}
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        // Optimize
        \$values = array_filter(\$values);
        if (empty(\$values)) {
            return [];
        }

        return \$this->loadChoiceList(\$value)->getChoicesForValues(\$values);
    }

    /**
     * {@inheritdoc}
     */
    public function loadValuesForChoices(array \$choices, \$value = null)
    {
        // Optimize
        \$choices = array_filter(\$choices);
        if (empty(\$choices)) {
            return [];
        }

        // If no callable is set, choices are the same as values
        if (null === \$value) {
            return \$choices;
        }

        return \$this->loadChoiceList(\$value)->getValuesForChoices(\$choices);
    }
}
", "vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/Loader/IntlCallbackChoiceLoader.php");
    }
}
