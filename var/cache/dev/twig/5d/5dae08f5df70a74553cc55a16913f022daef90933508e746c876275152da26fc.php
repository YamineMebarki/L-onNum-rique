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

/* vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php */
class __TwigTemplate_dd1d4e044c047779fe73e0d010c5b53e60006f82671a91076fb44883456a3e38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php"));

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

use Symfony\\Component\\Config\\Definition\\EnumNode;

/**
 * Enum Node Definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNodeDefinition extends ScalarNodeDefinition
{
    private \$values;

    /**
     * @return \$this
     */
    public function values(array \$values)
    {
        \$values = array_unique(\$values);

        if (empty(\$values)) {
            throw new \\InvalidArgumentException('->values() must be called with at least one value.');
        }

        \$this->values = \$values;

        return \$this;
    }

    /**
     * Instantiate a Node.
     *
     * @return EnumNode The node
     *
     * @throws \\RuntimeException
     */
    protected function instantiateNode()
    {
        if (null === \$this->values) {
            throw new \\RuntimeException('You must call ->values() on enum nodes.');
        }

        return new EnumNode(\$this->name, \$this->parent, \$this->values, \$this->pathSeparator);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php";
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

use Symfony\\Component\\Config\\Definition\\EnumNode;

/**
 * Enum Node Definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNodeDefinition extends ScalarNodeDefinition
{
    private \$values;

    /**
     * @return \$this
     */
    public function values(array \$values)
    {
        \$values = array_unique(\$values);

        if (empty(\$values)) {
            throw new \\InvalidArgumentException('->values() must be called with at least one value.');
        }

        \$this->values = \$values;

        return \$this;
    }

    /**
     * Instantiate a Node.
     *
     * @return EnumNode The node
     *
     * @throws \\RuntimeException
     */
    protected function instantiateNode()
    {
        if (null === \$this->values) {
            throw new \\RuntimeException('You must call ->values() on enum nodes.');
        }

        return new EnumNode(\$this->name, \$this->parent, \$this->values, \$this->pathSeparator);
    }
}
", "vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php");
    }
}
