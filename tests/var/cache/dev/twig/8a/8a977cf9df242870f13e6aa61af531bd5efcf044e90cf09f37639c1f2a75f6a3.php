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

/* vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php */
class __TwigTemplate_db96f2e18d92eefa9a01e3915bd7e494ea3e6e5a0265a507aa0a45c6902cfa87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php"));

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
 * An interface that must be implemented by nodes which can have children.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @method NodeDefinition[] getChildNodeDefinitions() Gets the child node definitions - not implementing it is deprecated since Symfony 4.2
 */
interface ParentNodeDefinitionInterface extends BuilderAwareInterface
{
    /**
     * Returns a builder to add children nodes.
     *
     * @return NodeBuilder
     */
    public function children();

    /**
     * Appends a node definition.
     *
     * Usage:
     *
     *     \$node = \$parentNode
     *         ->children()
     *             ->scalarNode('foo')->end()
     *             ->scalarNode('baz')->end()
     *             ->append(\$this->getBarNodeDefinition())
     *         ->end()
     *     ;
     *
     * @return \$this
     */
    public function append(NodeDefinition \$node);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php";
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
 * An interface that must be implemented by nodes which can have children.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @method NodeDefinition[] getChildNodeDefinitions() Gets the child node definitions - not implementing it is deprecated since Symfony 4.2
 */
interface ParentNodeDefinitionInterface extends BuilderAwareInterface
{
    /**
     * Returns a builder to add children nodes.
     *
     * @return NodeBuilder
     */
    public function children();

    /**
     * Appends a node definition.
     *
     * Usage:
     *
     *     \$node = \$parentNode
     *         ->children()
     *             ->scalarNode('foo')->end()
     *             ->scalarNode('baz')->end()
     *             ->append(\$this->getBarNodeDefinition())
     *         ->end()
     *     ;
     *
     * @return \$this
     */
    public function append(NodeDefinition \$node);
}
", "vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php");
    }
}
