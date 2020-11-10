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

/* vendor/sensio/framework-extra-bundle/src/Configuration/Template.php */
class __TwigTemplate_9249b0619f8b82d2e84c46dae75289a043c18a8c5b38b960a5a3f3103285a119 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Template.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Template.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

/**
 * The Template class handles the Template annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class Template extends ConfigurationAnnotation
{
    /**
     * The template.
     *
     * @var string
     */
    protected \$template;

    /**
     * The associative array of template variables.
     *
     * @var array
     */
    private \$vars = [];

    /**
     * Should the template be streamed?
     *
     * @var bool
     */
    private \$streamable = false;

    /**
     * The controller (+action) this annotation is set to.
     *
     * @var array
     */
    private \$owner = [];

    /**
     * Returns the array of templates variables.
     *
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @param bool \$streamable
     */
    public function setIsStreamable(\$streamable)
    {
        \$this->streamable = \$streamable;
    }

    /**
     * @return bool
     */
    public function isStreamable()
    {
        return (bool) \$this->streamable;
    }

    /**
     * Sets the template variables.
     *
     * @param array \$vars The template variables
     */
    public function setVars(\$vars)
    {
        \$this->vars = \$vars;
    }

    /**
     * Sets the template logic name.
     *
     * @param string \$template The template logic name
     */
    public function setValue(\$template)
    {
        \$this->setTemplate(\$template);
    }

    /**
     * Returns the template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return \$this->template;
    }

    /**
     * Sets the template.
     *
     * @param string \$template The template
     */
    public function setTemplate(\$template)
    {
        \$this->template = \$template;
    }

    /**
     * Returns the annotation alias name.
     *
     * @return string
     *
     * @see ConfigurationInterface
     */
    public function getAliasName()
    {
        return 'template';
    }

    /**
     * Only one template directive is allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return false;
    }

    public function setOwner(array \$owner)
    {
        \$this->owner = \$owner;
    }

    /**
     * The controller (+action) this annotation is attached to.
     *
     * @return array
     */
    public function getOwner()
    {
        return \$this->owner;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Configuration/Template.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

/**
 * The Template class handles the Template annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class Template extends ConfigurationAnnotation
{
    /**
     * The template.
     *
     * @var string
     */
    protected \$template;

    /**
     * The associative array of template variables.
     *
     * @var array
     */
    private \$vars = [];

    /**
     * Should the template be streamed?
     *
     * @var bool
     */
    private \$streamable = false;

    /**
     * The controller (+action) this annotation is set to.
     *
     * @var array
     */
    private \$owner = [];

    /**
     * Returns the array of templates variables.
     *
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @param bool \$streamable
     */
    public function setIsStreamable(\$streamable)
    {
        \$this->streamable = \$streamable;
    }

    /**
     * @return bool
     */
    public function isStreamable()
    {
        return (bool) \$this->streamable;
    }

    /**
     * Sets the template variables.
     *
     * @param array \$vars The template variables
     */
    public function setVars(\$vars)
    {
        \$this->vars = \$vars;
    }

    /**
     * Sets the template logic name.
     *
     * @param string \$template The template logic name
     */
    public function setValue(\$template)
    {
        \$this->setTemplate(\$template);
    }

    /**
     * Returns the template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return \$this->template;
    }

    /**
     * Sets the template.
     *
     * @param string \$template The template
     */
    public function setTemplate(\$template)
    {
        \$this->template = \$template;
    }

    /**
     * Returns the annotation alias name.
     *
     * @return string
     *
     * @see ConfigurationInterface
     */
    public function getAliasName()
    {
        return 'template';
    }

    /**
     * Only one template directive is allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return false;
    }

    public function setOwner(array \$owner)
    {
        \$this->owner = \$owner;
    }

    /**
     * The controller (+action) this annotation is attached to.
     *
     * @return array
     */
    public function getOwner()
    {
        return \$this->owner;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Configuration/Template.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Configuration/Template.php");
    }
}
