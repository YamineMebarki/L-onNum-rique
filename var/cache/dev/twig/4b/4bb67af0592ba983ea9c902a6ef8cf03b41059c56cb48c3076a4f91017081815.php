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

/* vendor/symfony/form/FormFactoryInterface.php */
class __TwigTemplate_deb8d18754596241fe832dd773ff617025f8d12db93fb9543b6bb4d348319d66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryInterface.php"));

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
 * Allows creating a form based on a name, a class or a property.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormFactoryInterface
{
    /**
     * Returns a form.
     *
     * @see createBuilder()
     *
     * @param string \$type    The type of the form
     * @param mixed  \$data    The initial data
     * @param array  \$options The options
     *
     * @return FormInterface The form named after the type
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function create(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form.
     *
     * @see createNamedBuilder()
     *
     * @param string \$name The name of the form
     * @param string \$type The type of the form
     * @param mixed  \$data The initial data
     *
     * @return FormInterface The form
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createNamed(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form for a property of a class.
     *
     * @see createBuilderForProperty()
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     * @param mixed  \$data     The initial data
     * @param array  \$options  The options for the builder
     *
     * @return FormInterface The form named after the property
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the form type
     */
    public function createForProperty(\$class, \$property, \$data = null, array \$options = []);

    /**
     * Returns a form builder.
     *
     * @param string \$type    The type of the form
     * @param mixed  \$data    The initial data
     * @param array  \$options The options
     *
     * @return FormBuilderInterface The form builder
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createBuilder(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form builder.
     *
     * @param string \$name The name of the form
     * @param string \$type The type of the form
     * @param mixed  \$data The initial data
     *
     * @return FormBuilderInterface The form builder
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createNamedBuilder(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form builder for a property of a class.
     *
     * If any of the 'required' and type options can be guessed,
     * and are not provided in the options argument, the guessed value is used.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     * @param mixed  \$data     The initial data
     * @param array  \$options  The options for the builder
     *
     * @return FormBuilderInterface The form builder named after the property
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the form type
     */
    public function createBuilderForProperty(\$class, \$property, \$data = null, array \$options = []);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormFactoryInterface.php";
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
 * Allows creating a form based on a name, a class or a property.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormFactoryInterface
{
    /**
     * Returns a form.
     *
     * @see createBuilder()
     *
     * @param string \$type    The type of the form
     * @param mixed  \$data    The initial data
     * @param array  \$options The options
     *
     * @return FormInterface The form named after the type
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function create(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form.
     *
     * @see createNamedBuilder()
     *
     * @param string \$name The name of the form
     * @param string \$type The type of the form
     * @param mixed  \$data The initial data
     *
     * @return FormInterface The form
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createNamed(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form for a property of a class.
     *
     * @see createBuilderForProperty()
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     * @param mixed  \$data     The initial data
     * @param array  \$options  The options for the builder
     *
     * @return FormInterface The form named after the property
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the form type
     */
    public function createForProperty(\$class, \$property, \$data = null, array \$options = []);

    /**
     * Returns a form builder.
     *
     * @param string \$type    The type of the form
     * @param mixed  \$data    The initial data
     * @param array  \$options The options
     *
     * @return FormBuilderInterface The form builder
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createBuilder(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form builder.
     *
     * @param string \$name The name of the form
     * @param string \$type The type of the form
     * @param mixed  \$data The initial data
     *
     * @return FormBuilderInterface The form builder
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the given type
     */
    public function createNamedBuilder(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = []);

    /**
     * Returns a form builder for a property of a class.
     *
     * If any of the 'required' and type options can be guessed,
     * and are not provided in the options argument, the guessed value is used.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     * @param mixed  \$data     The initial data
     * @param array  \$options  The options for the builder
     *
     * @return FormBuilderInterface The form builder named after the property
     *
     * @throws \\Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException if any given option is not applicable to the form type
     */
    public function createBuilderForProperty(\$class, \$property, \$data = null, array \$options = []);
}
", "vendor/symfony/form/FormFactoryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormFactoryInterface.php");
    }
}
