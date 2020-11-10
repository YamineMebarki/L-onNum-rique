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

/* vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php */
class __TwigTemplate_e7fa561210d8e61b5bf99ecbc09fdddceb3e626803803c15f1819cffb6e1eeed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php"));

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

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;

/**
 * Loads a choice list.
 *
 * The methods {@link loadChoicesForValues()} and {@link loadValuesForChoices()}
 * can be used to load the list only partially in cases where a fully-loaded
 * list is not necessary.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ChoiceLoaderInterface
{
    /**
     * Loads a list of choices.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param callable|null \$value The callable which generates the values
     *                             from choices
     *
     * @return ChoiceListInterface The loaded choice list
     */
    public function loadChoiceList(\$value = null);

    /**
     * Loads the choices corresponding to the given values.
     *
     * The choices are returned with the same keys and in the same order as the
     * corresponding values in the given array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param string[]      \$values An array of choice values. Non-existing
     *                              values in this array are ignored
     * @param callable|null \$value  The callable generating the choice values
     *
     * @return array An array of choices
     */
    public function loadChoicesForValues(array \$values, \$value = null);

    /**
     * Loads the values corresponding to the given choices.
     *
     * The values are returned with the same keys and in the same order as the
     * corresponding choices in the given array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param array         \$choices An array of choices. Non-existing choices in
     *                               this array are ignored
     * @param callable|null \$value   The callable generating the choice values
     *
     * @return string[] An array of choice values
     */
    public function loadValuesForChoices(array \$choices, \$value = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php";
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

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;

/**
 * Loads a choice list.
 *
 * The methods {@link loadChoicesForValues()} and {@link loadValuesForChoices()}
 * can be used to load the list only partially in cases where a fully-loaded
 * list is not necessary.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ChoiceLoaderInterface
{
    /**
     * Loads a list of choices.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param callable|null \$value The callable which generates the values
     *                             from choices
     *
     * @return ChoiceListInterface The loaded choice list
     */
    public function loadChoiceList(\$value = null);

    /**
     * Loads the choices corresponding to the given values.
     *
     * The choices are returned with the same keys and in the same order as the
     * corresponding values in the given array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param string[]      \$values An array of choice values. Non-existing
     *                              values in this array are ignored
     * @param callable|null \$value  The callable generating the choice values
     *
     * @return array An array of choices
     */
    public function loadChoicesForValues(array \$values, \$value = null);

    /**
     * Loads the values corresponding to the given choices.
     *
     * The values are returned with the same keys and in the same order as the
     * corresponding choices in the given array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param array         \$choices An array of choices. Non-existing choices in
     *                               this array are ignored
     * @param callable|null \$value   The callable generating the choice values
     *
     * @return string[] An array of choice values
     */
    public function loadValuesForChoices(array \$choices, \$value = null);
}
", "vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/Loader/ChoiceLoaderInterface.php");
    }
}
