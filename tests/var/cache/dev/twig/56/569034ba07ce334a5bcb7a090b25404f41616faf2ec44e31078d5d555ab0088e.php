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

/* vendor/symfony/form/FormEvent.php */
class __TwigTemplate_4c67357f09d637a9db95ab70da656c4eb16c0fbd7725024191e34e8e6ea14e04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormEvent.php"));

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

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormEvent extends Event
{
    private \$form;
    protected \$data;

    /**
     * @param FormInterface \$form The associated form
     * @param mixed         \$data The data
     */
    public function __construct(FormInterface \$form, \$data)
    {
        \$this->form = \$form;
        \$this->data = \$data;
    }

    /**
     * Returns the form at the source of the event.
     *
     * @return FormInterface
     */
    public function getForm()
    {
        return \$this->form;
    }

    /**
     * Returns the data associated with this event.
     *
     * @return mixed
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * Allows updating with some filtered data.
     *
     * @param mixed \$data
     */
    public function setData(\$data)
    {
        \$this->data = \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormEvent.php";
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

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormEvent extends Event
{
    private \$form;
    protected \$data;

    /**
     * @param FormInterface \$form The associated form
     * @param mixed         \$data The data
     */
    public function __construct(FormInterface \$form, \$data)
    {
        \$this->form = \$form;
        \$this->data = \$data;
    }

    /**
     * Returns the form at the source of the event.
     *
     * @return FormInterface
     */
    public function getForm()
    {
        return \$this->form;
    }

    /**
     * Returns the data associated with this event.
     *
     * @return mixed
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * Allows updating with some filtered data.
     *
     * @param mixed \$data
     */
    public function setData(\$data)
    {
        \$this->data = \$data;
    }
}
", "vendor/symfony/form/FormEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormEvent.php");
    }
}
