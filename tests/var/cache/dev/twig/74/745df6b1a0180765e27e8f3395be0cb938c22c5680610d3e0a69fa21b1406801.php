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

/* vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php */
class __TwigTemplate_88937e287770be01854a07a51fb4a76da581350a75c32c2ac290e4692a1cccc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php"));

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
 * The ParamConverter class handles the ParamConverter annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class ParamConverter extends ConfigurationAnnotation
{
    /**
     * The parameter name.
     *
     * @var string
     */
    private \$name;

    /**
     * The parameter class.
     *
     * @var string
     */
    private \$class;

    /**
     * An array of options.
     *
     * @var array
     */
    private \$options = [];

    /**
     * Whether or not the parameter is optional.
     *
     * @var bool
     */
    private \$isOptional = false;

    /**
     * Use explicitly named converter instead of iterating by priorities.
     *
     * @var string
     */
    private \$converter;

    /**
     * Returns the parameter name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets the parameter name.
     *
     * @param string \$name The parameter name
     */
    public function setValue(\$name)
    {
        \$this->setName(\$name);
    }

    /**
     * Sets the parameter name.
     *
     * @param string \$name The parameter name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * Returns the parameter class name.
     *
     * @return string \$name
     */
    public function getClass()
    {
        return \$this->class;
    }

    /**
     * Sets the parameter class name.
     *
     * @param string \$class The parameter class name
     */
    public function setClass(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * Returns an array of options.
     *
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * Sets an array of options.
     *
     * @param array \$options An array of options
     */
    public function setOptions(\$options)
    {
        \$this->options = \$options;
    }

    /**
     * Sets whether or not the parameter is optional.
     *
     * @param bool \$optional Whether the parameter is optional
     */
    public function setIsOptional(\$optional)
    {
        \$this->isOptional = (bool) \$optional;
    }

    /**
     * Returns whether or not the parameter is optional.
     *
     * @return bool
     */
    public function isOptional()
    {
        return \$this->isOptional;
    }

    /**
     * Get explicit converter name.
     *
     * @return string
     */
    public function getConverter()
    {
        return \$this->converter;
    }

    /**
     * Set explicit converter name.
     *
     * @param string \$converter
     */
    public function setConverter(\$converter)
    {
        \$this->converter = \$converter;
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
        return 'converters';
    }

    /**
     * Multiple ParamConverters are allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php";
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
 * The ParamConverter class handles the ParamConverter annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class ParamConverter extends ConfigurationAnnotation
{
    /**
     * The parameter name.
     *
     * @var string
     */
    private \$name;

    /**
     * The parameter class.
     *
     * @var string
     */
    private \$class;

    /**
     * An array of options.
     *
     * @var array
     */
    private \$options = [];

    /**
     * Whether or not the parameter is optional.
     *
     * @var bool
     */
    private \$isOptional = false;

    /**
     * Use explicitly named converter instead of iterating by priorities.
     *
     * @var string
     */
    private \$converter;

    /**
     * Returns the parameter name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets the parameter name.
     *
     * @param string \$name The parameter name
     */
    public function setValue(\$name)
    {
        \$this->setName(\$name);
    }

    /**
     * Sets the parameter name.
     *
     * @param string \$name The parameter name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * Returns the parameter class name.
     *
     * @return string \$name
     */
    public function getClass()
    {
        return \$this->class;
    }

    /**
     * Sets the parameter class name.
     *
     * @param string \$class The parameter class name
     */
    public function setClass(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * Returns an array of options.
     *
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * Sets an array of options.
     *
     * @param array \$options An array of options
     */
    public function setOptions(\$options)
    {
        \$this->options = \$options;
    }

    /**
     * Sets whether or not the parameter is optional.
     *
     * @param bool \$optional Whether the parameter is optional
     */
    public function setIsOptional(\$optional)
    {
        \$this->isOptional = (bool) \$optional;
    }

    /**
     * Returns whether or not the parameter is optional.
     *
     * @return bool
     */
    public function isOptional()
    {
        return \$this->isOptional;
    }

    /**
     * Get explicit converter name.
     *
     * @return string
     */
    public function getConverter()
    {
        return \$this->converter;
    }

    /**
     * Set explicit converter name.
     *
     * @param string \$converter
     */
    public function setConverter(\$converter)
    {
        \$this->converter = \$converter;
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
        return 'converters';
    }

    /**
     * Multiple ParamConverters are allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return true;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Configuration/ParamConverter.php");
    }
}
