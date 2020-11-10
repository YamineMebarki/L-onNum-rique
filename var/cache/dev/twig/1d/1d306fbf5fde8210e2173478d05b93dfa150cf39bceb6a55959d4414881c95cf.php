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

/* vendor/symfony/config/Definition/Builder/MergeBuilder.php */
class __TwigTemplate_371abe2e44c5058a1abb1247c9bcd8d3f7837e852451e605c1379f57e973c5c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/MergeBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/MergeBuilder.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Builder;

/**
 * This class builds merge conditions.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class MergeBuilder
{
    protected \$node;
    public \$allowFalse = false;
    public \$allowOverwrite = true;

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Sets whether the node can be unset.
     *
     * @param bool \$allow
     *
     * @return \$this
     */
    public function allowUnset(\$allow = true)
    {
        \$this->allowFalse = \$allow;

        return \$this;
    }

    /**
     * Sets whether the node can be overwritten.
     *
     * @param bool \$deny Whether the overwriting is forbidden or not
     *
     * @return \$this
     */
    public function denyOverwrite(\$deny = true)
    {
        \$this->allowOverwrite = !\$deny;

        return \$this;
    }

    /**
     * Returns the related node.
     *
     * @return NodeDefinition|ArrayNodeDefinition|VariableNodeDefinition
     */
    public function end()
    {
        return \$this->node;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/MergeBuilder.php";
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

namespace Symfony\\Component\\Config\\Definition\\Builder;

/**
 * This class builds merge conditions.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class MergeBuilder
{
    protected \$node;
    public \$allowFalse = false;
    public \$allowOverwrite = true;

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Sets whether the node can be unset.
     *
     * @param bool \$allow
     *
     * @return \$this
     */
    public function allowUnset(\$allow = true)
    {
        \$this->allowFalse = \$allow;

        return \$this;
    }

    /**
     * Sets whether the node can be overwritten.
     *
     * @param bool \$deny Whether the overwriting is forbidden or not
     *
     * @return \$this
     */
    public function denyOverwrite(\$deny = true)
    {
        \$this->allowOverwrite = !\$deny;

        return \$this;
    }

    /**
     * Returns the related node.
     *
     * @return NodeDefinition|ArrayNodeDefinition|VariableNodeDefinition
     */
    public function end()
    {
        return \$this->node;
    }
}
", "vendor/symfony/config/Definition/Builder/MergeBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/MergeBuilder.php");
    }
}
