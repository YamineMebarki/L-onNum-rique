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

/* vendor/twig/twig/src/TwigTest.php */
class __TwigTemplate_fc2f1d1e09f2135e7424261e6a58520d29be54fb3ec92479ed673f646d82e84a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TwigTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TwigTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Expression\\TestExpression;

/**
 * Represents a template test.
 *
 * @final since Twig 2.4.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#test-operator
 */
class TwigTest
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * Creates a template test.
     *
     * @param string        \$name     Name of this test
     * @param callable|null \$callable A callable implementing the test. If null, you need to overwrite the \"node_class\" option to customize compilation.
     * @param array         \$options  Options array
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'is_variadic' => false,
            'node_class' => TestExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this test.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass()
    {
        return \$this->options['node_class'];
    }

    public function setArguments(\$arguments)
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments()
    {
        return \$this->arguments;
    }

    public function isVariadic()
    {
        return \$this->options['is_variadic'];
    }

    public function isDeprecated()
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion()
    {
        return \$this->options['deprecated'];
    }

    public function getAlternative()
    {
        return \$this->options['alternative'];
    }
}

// For Twig 1.x compatibility
class_alias('Twig\\TwigTest', 'Twig_SimpleTest', false);

class_alias('Twig\\TwigTest', 'Twig_Test');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TwigTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Expression\\TestExpression;

/**
 * Represents a template test.
 *
 * @final since Twig 2.4.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#test-operator
 */
class TwigTest
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * Creates a template test.
     *
     * @param string        \$name     Name of this test
     * @param callable|null \$callable A callable implementing the test. If null, you need to overwrite the \"node_class\" option to customize compilation.
     * @param array         \$options  Options array
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'is_variadic' => false,
            'node_class' => TestExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this test.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass()
    {
        return \$this->options['node_class'];
    }

    public function setArguments(\$arguments)
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments()
    {
        return \$this->arguments;
    }

    public function isVariadic()
    {
        return \$this->options['is_variadic'];
    }

    public function isDeprecated()
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion()
    {
        return \$this->options['deprecated'];
    }

    public function getAlternative()
    {
        return \$this->options['alternative'];
    }
}

// For Twig 1.x compatibility
class_alias('Twig\\TwigTest', 'Twig_SimpleTest', false);

class_alias('Twig\\TwigTest', 'Twig_Test');
", "vendor/twig/twig/src/TwigTest.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TwigTest.php");
    }
}
