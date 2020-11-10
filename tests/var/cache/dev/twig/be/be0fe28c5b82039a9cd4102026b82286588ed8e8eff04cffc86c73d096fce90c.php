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

/* vendor/symfony/config/Definition/NumericNode.php */
class __TwigTemplate_f139570ee79a8df0b7690b75940322a9eaaf5b26c9e4e4cc3d68efaaac9914ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/NumericNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/NumericNode.php"));

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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

/**
 * This node represents a numeric value in the config tree.
 *
 * @author David Jeanmonod <david.jeanmonod@gmail.com>
 */
class NumericNode extends ScalarNode
{
    protected \$min;
    protected \$max;

    public function __construct(?string \$name, NodeInterface \$parent = null, \$min = null, \$max = null, string \$pathSeparator = BaseNode::DEFAULT_PATH_SEPARATOR)
    {
        parent::__construct(\$name, \$parent, \$pathSeparator);
        \$this->min = \$min;
        \$this->max = \$max;
    }

    /**
     * {@inheritdoc}
     */
    protected function finalizeValue(\$value)
    {
        \$value = parent::finalizeValue(\$value);

        \$errorMsg = null;
        if (isset(\$this->min) && \$value < \$this->min) {
            \$errorMsg = sprintf('The value %s is too small for path \"%s\". Should be greater than or equal to %s', \$value, \$this->getPath(), \$this->min);
        }
        if (isset(\$this->max) && \$value > \$this->max) {
            \$errorMsg = sprintf('The value %s is too big for path \"%s\". Should be less than or equal to %s', \$value, \$this->getPath(), \$this->max);
        }
        if (isset(\$errorMsg)) {
            \$ex = new InvalidConfigurationException(\$errorMsg);
            \$ex->setPath(\$this->getPath());
            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // a numeric value cannot be empty
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/NumericNode.php";
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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

/**
 * This node represents a numeric value in the config tree.
 *
 * @author David Jeanmonod <david.jeanmonod@gmail.com>
 */
class NumericNode extends ScalarNode
{
    protected \$min;
    protected \$max;

    public function __construct(?string \$name, NodeInterface \$parent = null, \$min = null, \$max = null, string \$pathSeparator = BaseNode::DEFAULT_PATH_SEPARATOR)
    {
        parent::__construct(\$name, \$parent, \$pathSeparator);
        \$this->min = \$min;
        \$this->max = \$max;
    }

    /**
     * {@inheritdoc}
     */
    protected function finalizeValue(\$value)
    {
        \$value = parent::finalizeValue(\$value);

        \$errorMsg = null;
        if (isset(\$this->min) && \$value < \$this->min) {
            \$errorMsg = sprintf('The value %s is too small for path \"%s\". Should be greater than or equal to %s', \$value, \$this->getPath(), \$this->min);
        }
        if (isset(\$this->max) && \$value > \$this->max) {
            \$errorMsg = sprintf('The value %s is too big for path \"%s\". Should be less than or equal to %s', \$value, \$this->getPath(), \$this->max);
        }
        if (isset(\$errorMsg)) {
            \$ex = new InvalidConfigurationException(\$errorMsg);
            \$ex->setPath(\$this->getPath());
            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // a numeric value cannot be empty
        return false;
    }
}
", "vendor/symfony/config/Definition/NumericNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/NumericNode.php");
    }
}
