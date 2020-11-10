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

/* vendor/symfony/form/FormEvents.php */
class __TwigTemplate_ea8e780d97b1012990b8179554fd6d3feb0f93710a213e1bd1127427ccd5662d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormEvents.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormEvents.php"));

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
 * To learn more about how form events work check the documentation
 * entry at {@link https://symfony.com/doc/any/components/form/form_events.html}.
 *
 * To learn how to dynamically modify forms using events check the cookbook
 * entry at {@link https://symfony.com/doc/any/cookbook/form/dynamic_form_modification.html}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class FormEvents
{
    /**
     * The PRE_SUBMIT event is dispatched at the beginning of the Form::submit() method.
     *
     * It can be used to:
     *  - Change data from the request, before submitting the data to the form.
     *  - Add or remove form fields, before submitting the data to the form.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PreSubmitEvent\")
     */
    const PRE_SUBMIT = 'form.pre_submit';

    /**
     * The SUBMIT event is dispatched after the Form::submit() method
     * has changed the view data by the request data, or submitted and mapped
     * the children if the form is compound, and after reverse transformation
     * to normalized representation.
     *
     * It's also dispatched just before the Form::submit() method transforms back
     * the normalized data to the model and view data.
     *
     * So at this stage children of compound forms are submitted and synchronized, unless
     * their transformation failed, but a parent would still be at the PRE_SUBMIT level.
     *
     * Since the current form is not synchronized yet, it is still possible to add and
     * remove fields.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\SubmitEvent\")
     */
    const SUBMIT = 'form.submit';

    /**
     * The FormEvents::POST_SUBMIT event is dispatched at the very end of the Form::submit().
     *
     * It this stage the model and view data may have been denormalized. Otherwise the form
     * is desynchronized because transformation failed during submission.
     *
     * It can be used to fetch data after denormalization.
     *
     * The event attaches the current view data. To know whether this is the renormalized data
     * or the invalid request data, call Form::isSynchronized() first.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PostSubmitEvent\")
     */
    const POST_SUBMIT = 'form.post_submit';

    /**
     * The FormEvents::PRE_SET_DATA event is dispatched at the beginning of the Form::setData() method.
     *
     * It can be used to:
     *  - Modify the data given during pre-population;
     *  - Keep synchronized the form depending on the data (adding or removing fields dynamically).
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PreSetDataEvent\")
     */
    const PRE_SET_DATA = 'form.pre_set_data';

    /**
     * The FormEvents::POST_SET_DATA event is dispatched at the end of the Form::setData() method.
     *
     * This event can be used to modify the form depending on the final state of the underlying data
     * accessible in every representation: model, normalized and view.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PostSetDataEvent\")
     */
    const POST_SET_DATA = 'form.post_set_data';

    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormEvents.php";
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
 * To learn more about how form events work check the documentation
 * entry at {@link https://symfony.com/doc/any/components/form/form_events.html}.
 *
 * To learn how to dynamically modify forms using events check the cookbook
 * entry at {@link https://symfony.com/doc/any/cookbook/form/dynamic_form_modification.html}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class FormEvents
{
    /**
     * The PRE_SUBMIT event is dispatched at the beginning of the Form::submit() method.
     *
     * It can be used to:
     *  - Change data from the request, before submitting the data to the form.
     *  - Add or remove form fields, before submitting the data to the form.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PreSubmitEvent\")
     */
    const PRE_SUBMIT = 'form.pre_submit';

    /**
     * The SUBMIT event is dispatched after the Form::submit() method
     * has changed the view data by the request data, or submitted and mapped
     * the children if the form is compound, and after reverse transformation
     * to normalized representation.
     *
     * It's also dispatched just before the Form::submit() method transforms back
     * the normalized data to the model and view data.
     *
     * So at this stage children of compound forms are submitted and synchronized, unless
     * their transformation failed, but a parent would still be at the PRE_SUBMIT level.
     *
     * Since the current form is not synchronized yet, it is still possible to add and
     * remove fields.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\SubmitEvent\")
     */
    const SUBMIT = 'form.submit';

    /**
     * The FormEvents::POST_SUBMIT event is dispatched at the very end of the Form::submit().
     *
     * It this stage the model and view data may have been denormalized. Otherwise the form
     * is desynchronized because transformation failed during submission.
     *
     * It can be used to fetch data after denormalization.
     *
     * The event attaches the current view data. To know whether this is the renormalized data
     * or the invalid request data, call Form::isSynchronized() first.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PostSubmitEvent\")
     */
    const POST_SUBMIT = 'form.post_submit';

    /**
     * The FormEvents::PRE_SET_DATA event is dispatched at the beginning of the Form::setData() method.
     *
     * It can be used to:
     *  - Modify the data given during pre-population;
     *  - Keep synchronized the form depending on the data (adding or removing fields dynamically).
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PreSetDataEvent\")
     */
    const PRE_SET_DATA = 'form.pre_set_data';

    /**
     * The FormEvents::POST_SET_DATA event is dispatched at the end of the Form::setData() method.
     *
     * This event can be used to modify the form depending on the final state of the underlying data
     * accessible in every representation: model, normalized and view.
     *
     * @Event(\"Symfony\\Component\\Form\\Event\\PostSetDataEvent\")
     */
    const POST_SET_DATA = 'form.post_set_data';

    private function __construct()
    {
    }
}
", "vendor/symfony/form/FormEvents.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormEvents.php");
    }
}
