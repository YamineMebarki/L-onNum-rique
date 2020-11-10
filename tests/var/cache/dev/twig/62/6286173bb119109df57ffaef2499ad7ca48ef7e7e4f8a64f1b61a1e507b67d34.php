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

/* vendor/symfony/form/DataMapperInterface.php */
class __TwigTemplate_042764aba12509a539d1bccaa0eae000cafdf857c47f75b947591ef3f14c8176 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/DataMapperInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/DataMapperInterface.php"));

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

namespace Symfony\\Component\\Form;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface DataMapperInterface
{
    /**
     * Maps the view data of a compound form to its children.
     *
     * The method is responsible for calling {@link FormInterface::setData()}
     * on the children of compound forms, defining their underlying model data.
     *
     * @param mixed                        \$viewData View data of the compound form being initialized
     * @param FormInterface[]|\\Traversable \$forms    A list of {@link FormInterface} instances
     *
     * @throws Exception\\UnexpectedTypeException if the type of the data parameter is not supported
     */
    public function mapDataToForms(\$viewData, \$forms);

    /**
     * Maps the model data of a list of children forms into the view data of their parent.
     *
     * This is the internal cascade call of FormInterface::submit for compound forms, since they
     * cannot be bound to any input nor the request as scalar, but their children may:
     *
     *     \$compoundForm->submit(\$arrayOfChildrenViewData)
     *     // inside:
     *     \$childForm->submit(\$childViewData);
     *     // for each entry, do the same and/or reverse transform
     *     \$this->dataMapper->mapFormsToData(\$compoundForm, \$compoundInitialViewData)
     *     // then reverse transform
     *
     * When a simple form is submitted the following is happening:
     *
     *     \$simpleForm->submit(\$submittedViewData)
     *     // inside:
     *     \$this->viewData = \$submittedViewData
     *     // then reverse transform
     *
     * The model data can be an array or an object, so this second argument is always passed
     * by reference.
     *
     * @param FormInterface[]|\\Traversable \$forms    A list of {@link FormInterface} instances
     * @param mixed                        \$viewData The compound form's view data that get mapped
     *                                               its children model data
     *
     * @throws Exception\\UnexpectedTypeException if the type of the data parameter is not supported
     */
    public function mapFormsToData(\$forms, &\$viewData);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/DataMapperInterface.php";
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

namespace Symfony\\Component\\Form;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface DataMapperInterface
{
    /**
     * Maps the view data of a compound form to its children.
     *
     * The method is responsible for calling {@link FormInterface::setData()}
     * on the children of compound forms, defining their underlying model data.
     *
     * @param mixed                        \$viewData View data of the compound form being initialized
     * @param FormInterface[]|\\Traversable \$forms    A list of {@link FormInterface} instances
     *
     * @throws Exception\\UnexpectedTypeException if the type of the data parameter is not supported
     */
    public function mapDataToForms(\$viewData, \$forms);

    /**
     * Maps the model data of a list of children forms into the view data of their parent.
     *
     * This is the internal cascade call of FormInterface::submit for compound forms, since they
     * cannot be bound to any input nor the request as scalar, but their children may:
     *
     *     \$compoundForm->submit(\$arrayOfChildrenViewData)
     *     // inside:
     *     \$childForm->submit(\$childViewData);
     *     // for each entry, do the same and/or reverse transform
     *     \$this->dataMapper->mapFormsToData(\$compoundForm, \$compoundInitialViewData)
     *     // then reverse transform
     *
     * When a simple form is submitted the following is happening:
     *
     *     \$simpleForm->submit(\$submittedViewData)
     *     // inside:
     *     \$this->viewData = \$submittedViewData
     *     // then reverse transform
     *
     * The model data can be an array or an object, so this second argument is always passed
     * by reference.
     *
     * @param FormInterface[]|\\Traversable \$forms    A list of {@link FormInterface} instances
     * @param mixed                        \$viewData The compound form's view data that get mapped
     *                                               its children model data
     *
     * @throws Exception\\UnexpectedTypeException if the type of the data parameter is not supported
     */
    public function mapFormsToData(\$forms, &\$viewData);
}
", "vendor/symfony/form/DataMapperInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/DataMapperInterface.php");
    }
}
