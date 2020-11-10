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

/* vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php */
class __TwigTemplate_f4f4478f369f7639d20c4c81e63bd58a44cd3cffd099958aa58560ef5e321cda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php"));

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

namespace Symfony\\Component\\Form\\Extension\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;

/**
 * Collects and structures information about forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormDataCollectorInterface extends DataCollectorInterface
{
    /**
     * Stores configuration data of the given form and its children.
     */
    public function collectConfiguration(FormInterface \$form);

    /**
     * Stores the default data of the given form and its children.
     */
    public function collectDefaultData(FormInterface \$form);

    /**
     * Stores the submitted data of the given form and its children.
     */
    public function collectSubmittedData(FormInterface \$form);

    /**
     * Stores the view variables of the given form view and its children.
     */
    public function collectViewVariables(FormView \$view);

    /**
     * Specifies that the given objects represent the same conceptual form.
     */
    public function associateFormWithView(FormInterface \$form, FormView \$view);

    /**
     * Assembles the data collected about the given form and its children as
     * a tree-like data structure.
     *
     * The result can be queried using {@link getData()}.
     */
    public function buildPreliminaryFormTree(FormInterface \$form);

    /**
     * Assembles the data collected about the given form and its children as
     * a tree-like data structure.
     *
     * The result can be queried using {@link getData()}.
     *
     * Contrary to {@link buildPreliminaryFormTree()}, a {@link FormView}
     * object has to be passed. The tree structure of this view object will be
     * used for structuring the resulting data. That means, if a child is
     * present in the view, but not in the form, it will be present in the final
     * data array anyway.
     *
     * When {@link FormView} instances are present in the view tree, for which
     * no corresponding {@link FormInterface} objects can be found in the form
     * tree, only the view data will be included in the result. If a
     * corresponding {@link FormInterface} exists otherwise, call
     * {@link associateFormWithView()} before calling this method.
     */
    public function buildFinalFormTree(FormInterface \$form, FormView \$view);

    /**
     * Returns all collected data.
     *
     * @return array|Data
     */
    public function getData();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php";
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

namespace Symfony\\Component\\Form\\Extension\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;

/**
 * Collects and structures information about forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormDataCollectorInterface extends DataCollectorInterface
{
    /**
     * Stores configuration data of the given form and its children.
     */
    public function collectConfiguration(FormInterface \$form);

    /**
     * Stores the default data of the given form and its children.
     */
    public function collectDefaultData(FormInterface \$form);

    /**
     * Stores the submitted data of the given form and its children.
     */
    public function collectSubmittedData(FormInterface \$form);

    /**
     * Stores the view variables of the given form view and its children.
     */
    public function collectViewVariables(FormView \$view);

    /**
     * Specifies that the given objects represent the same conceptual form.
     */
    public function associateFormWithView(FormInterface \$form, FormView \$view);

    /**
     * Assembles the data collected about the given form and its children as
     * a tree-like data structure.
     *
     * The result can be queried using {@link getData()}.
     */
    public function buildPreliminaryFormTree(FormInterface \$form);

    /**
     * Assembles the data collected about the given form and its children as
     * a tree-like data structure.
     *
     * The result can be queried using {@link getData()}.
     *
     * Contrary to {@link buildPreliminaryFormTree()}, a {@link FormView}
     * object has to be passed. The tree structure of this view object will be
     * used for structuring the resulting data. That means, if a child is
     * present in the view, but not in the form, it will be present in the final
     * data array anyway.
     *
     * When {@link FormView} instances are present in the view tree, for which
     * no corresponding {@link FormInterface} objects can be found in the form
     * tree, only the view data will be included in the result. If a
     * corresponding {@link FormInterface} exists otherwise, call
     * {@link associateFormWithView()} before calling this method.
     */
    public function buildFinalFormTree(FormInterface \$form, FormView \$view);

    /**
     * Returns all collected data.
     *
     * @return array|Data
     */
    public function getData();
}
", "vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php");
    }
}
