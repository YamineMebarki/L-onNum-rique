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

/* vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php */
class __TwigTemplate_8ed42230dd4205e3447633f7a30feed58df5cc0418e54ed7fd096180ee42275b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php"));

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

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;

/**
 * Loads an {@link ArrayChoiceList} instance from a callable returning an array of choices.
 *
 * @author Jules Pietri <jules@heahprod.com>
 */
class CallbackChoiceLoader implements ChoiceLoaderInterface
{
    private \$callback;

    /**
     * The loaded choice list.
     *
     * @var ArrayChoiceList
     */
    private \$choiceList;

    /**
     * @param callable \$callback The callable returning an array of choices
     */
    public function __construct(callable \$callback)
    {
        \$this->callback = \$callback;
    }

    /**
     * {@inheritdoc}
     */
    public function loadChoiceList(\$value = null)
    {
        if (null !== \$this->choiceList) {
            return \$this->choiceList;
        }

        return \$this->choiceList = new ArrayChoiceList((\$this->callback)(), \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        // Optimize
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
        if (empty(\$choices)) {
            return [];
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
        return "vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php";
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

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;

/**
 * Loads an {@link ArrayChoiceList} instance from a callable returning an array of choices.
 *
 * @author Jules Pietri <jules@heahprod.com>
 */
class CallbackChoiceLoader implements ChoiceLoaderInterface
{
    private \$callback;

    /**
     * The loaded choice list.
     *
     * @var ArrayChoiceList
     */
    private \$choiceList;

    /**
     * @param callable \$callback The callable returning an array of choices
     */
    public function __construct(callable \$callback)
    {
        \$this->callback = \$callback;
    }

    /**
     * {@inheritdoc}
     */
    public function loadChoiceList(\$value = null)
    {
        if (null !== \$this->choiceList) {
            return \$this->choiceList;
        }

        return \$this->choiceList = new ArrayChoiceList((\$this->callback)(), \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        // Optimize
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
        if (empty(\$choices)) {
            return [];
        }

        return \$this->loadChoiceList(\$value)->getValuesForChoices(\$choices);
    }
}
", "vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/Loader/CallbackChoiceLoader.php");
    }
}
