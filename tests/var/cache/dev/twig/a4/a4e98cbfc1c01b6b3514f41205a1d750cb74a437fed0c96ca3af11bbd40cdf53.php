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

/* vendor/symfony/form/ChoiceList/LazyChoiceList.php */
class __TwigTemplate_fe9cc2c2bf4aed647dac7f392867239537299a373f389b5474298c509f8bdd98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/LazyChoiceList.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/LazyChoiceList.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList;

use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;

/**
 * A choice list that loads its choices lazily.
 *
 * The choices are fetched using a {@link ChoiceLoaderInterface} instance.
 * If only {@link getChoicesForValues()} or {@link getValuesForChoices()} is
 * called, the choice list is only loaded partially for improved performance.
 *
 * Once {@link getChoices()} or {@link getValues()} is called, the list is
 * loaded fully.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyChoiceList implements ChoiceListInterface
{
    private \$loader;

    /**
     * The callable creating string values for each choice.
     *
     * If null, choices are cast to strings.
     *
     * @var callable|null
     */
    private \$value;

    /**
     * Creates a lazily-loaded list using the given loader.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as first and the array key as the second
     * argument.
     *
     * @param ChoiceLoaderInterface \$loader The choice loader
     * @param callable|null         \$value  The callable generating the choice values
     */
    public function __construct(ChoiceLoaderInterface \$loader, callable \$value = null)
    {
        \$this->loader = \$loader;
        \$this->value = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getChoices();
    }

    /**
     * {@inheritdoc}
     */
    public function getValues()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getValues();
    }

    /**
     * {@inheritdoc}
     */
    public function getStructuredValues()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getStructuredValues();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalKeys()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getOriginalKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function getChoicesForValues(array \$values)
    {
        return \$this->loader->loadChoicesForValues(\$values, \$this->value);
    }

    /**
     * {@inheritdoc}
     */
    public function getValuesForChoices(array \$choices)
    {
        return \$this->loader->loadValuesForChoices(\$choices, \$this->value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/LazyChoiceList.php";
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

namespace Symfony\\Component\\Form\\ChoiceList;

use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;

/**
 * A choice list that loads its choices lazily.
 *
 * The choices are fetched using a {@link ChoiceLoaderInterface} instance.
 * If only {@link getChoicesForValues()} or {@link getValuesForChoices()} is
 * called, the choice list is only loaded partially for improved performance.
 *
 * Once {@link getChoices()} or {@link getValues()} is called, the list is
 * loaded fully.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyChoiceList implements ChoiceListInterface
{
    private \$loader;

    /**
     * The callable creating string values for each choice.
     *
     * If null, choices are cast to strings.
     *
     * @var callable|null
     */
    private \$value;

    /**
     * Creates a lazily-loaded list using the given loader.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as first and the array key as the second
     * argument.
     *
     * @param ChoiceLoaderInterface \$loader The choice loader
     * @param callable|null         \$value  The callable generating the choice values
     */
    public function __construct(ChoiceLoaderInterface \$loader, callable \$value = null)
    {
        \$this->loader = \$loader;
        \$this->value = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getChoices();
    }

    /**
     * {@inheritdoc}
     */
    public function getValues()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getValues();
    }

    /**
     * {@inheritdoc}
     */
    public function getStructuredValues()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getStructuredValues();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalKeys()
    {
        return \$this->loader->loadChoiceList(\$this->value)->getOriginalKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function getChoicesForValues(array \$values)
    {
        return \$this->loader->loadChoicesForValues(\$values, \$this->value);
    }

    /**
     * {@inheritdoc}
     */
    public function getValuesForChoices(array \$choices)
    {
        return \$this->loader->loadValuesForChoices(\$choices, \$this->value);
    }
}
", "vendor/symfony/form/ChoiceList/LazyChoiceList.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/LazyChoiceList.php");
    }
}
