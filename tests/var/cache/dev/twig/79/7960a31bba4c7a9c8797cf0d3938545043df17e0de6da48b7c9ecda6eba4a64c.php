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

/* vendor/symfony/form/FormBuilderInterface.php */
class __TwigTemplate_37096209691147936b4f1481c691a6f95680ab6a196a6e14844125a2c96c55e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormBuilderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormBuilderInterface.php"));

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
interface FormBuilderInterface extends \\Traversable, \\Countable, FormConfigBuilderInterface
{
    /**
     * Adds a new field to this group. A field must have a unique name within
     * the group. Otherwise the existing field is overwritten.
     *
     * If you add a nested group, this group should also be represented in the
     * object hierarchy.
     *
     * @param string|FormBuilderInterface \$child
     * @param string|null                 \$type
     *
     * @return self
     */
    public function add(\$child, \$type = null, array \$options = []);

    /**
     * Creates a form builder.
     *
     * @param string      \$name The name of the form or the name of the property
     * @param string|null \$type The type of the form or null if name is a property
     *
     * @return self
     */
    public function create(\$name, \$type = null, array \$options = []);

    /**
     * Returns a child by name.
     *
     * @param string \$name The name of the child
     *
     * @return self
     *
     * @throws Exception\\InvalidArgumentException if the given child does not exist
     */
    public function get(\$name);

    /**
     * Removes the field with the given name.
     *
     * @param string \$name
     *
     * @return self
     */
    public function remove(\$name);

    /**
     * Returns whether a field with the given name exists.
     *
     * @param string \$name
     *
     * @return bool
     */
    public function has(\$name);

    /**
     * Returns the children.
     *
     * @return array
     */
    public function all();

    /**
     * Creates the form.
     *
     * @return FormInterface The form
     */
    public function getForm();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormBuilderInterface.php";
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
interface FormBuilderInterface extends \\Traversable, \\Countable, FormConfigBuilderInterface
{
    /**
     * Adds a new field to this group. A field must have a unique name within
     * the group. Otherwise the existing field is overwritten.
     *
     * If you add a nested group, this group should also be represented in the
     * object hierarchy.
     *
     * @param string|FormBuilderInterface \$child
     * @param string|null                 \$type
     *
     * @return self
     */
    public function add(\$child, \$type = null, array \$options = []);

    /**
     * Creates a form builder.
     *
     * @param string      \$name The name of the form or the name of the property
     * @param string|null \$type The type of the form or null if name is a property
     *
     * @return self
     */
    public function create(\$name, \$type = null, array \$options = []);

    /**
     * Returns a child by name.
     *
     * @param string \$name The name of the child
     *
     * @return self
     *
     * @throws Exception\\InvalidArgumentException if the given child does not exist
     */
    public function get(\$name);

    /**
     * Removes the field with the given name.
     *
     * @param string \$name
     *
     * @return self
     */
    public function remove(\$name);

    /**
     * Returns whether a field with the given name exists.
     *
     * @param string \$name
     *
     * @return bool
     */
    public function has(\$name);

    /**
     * Returns the children.
     *
     * @return array
     */
    public function all();

    /**
     * Creates the form.
     *
     * @return FormInterface The form
     */
    public function getForm();
}
", "vendor/symfony/form/FormBuilderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormBuilderInterface.php");
    }
}
