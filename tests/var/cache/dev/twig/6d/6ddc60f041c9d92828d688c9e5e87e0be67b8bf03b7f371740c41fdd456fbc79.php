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

/* vendor/symfony/validator/Mapping/CascadingStrategy.php */
class __TwigTemplate_027c8807f733bcc3b6a7d4c0b9878dbfe6d0bfbc69482298ff82512e93ac5bed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/CascadingStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/CascadingStrategy.php"));

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

namespace Symfony\\Component\\Validator\\Mapping;

/**
 * Specifies whether an object should be cascaded.
 *
 * Cascading is relevant for any node type but class nodes. If such a node
 * contains an object of value, and if cascading is enabled, then the node
 * traverser will try to find class metadata for that object and validate the
 * object against that metadata.
 *
 * If no metadata is found for a cascaded object, and if that object implements
 * {@link \\Traversable}, the node traverser will iterate over the object and
 * cascade each object or collection contained within, unless iteration is
 * prohibited by the specified {@link TraversalStrategy}.
 *
 * Although the constants currently represent a boolean switch, they are
 * implemented as bit mask in order to allow future extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see TraversalStrategy
 */
class CascadingStrategy
{
    /**
     * Specifies that a node should not be cascaded.
     */
    const NONE = 1;

    /**
     * Specifies that a node should be cascaded.
     */
    const CASCADE = 2;

    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/CascadingStrategy.php";
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

namespace Symfony\\Component\\Validator\\Mapping;

/**
 * Specifies whether an object should be cascaded.
 *
 * Cascading is relevant for any node type but class nodes. If such a node
 * contains an object of value, and if cascading is enabled, then the node
 * traverser will try to find class metadata for that object and validate the
 * object against that metadata.
 *
 * If no metadata is found for a cascaded object, and if that object implements
 * {@link \\Traversable}, the node traverser will iterate over the object and
 * cascade each object or collection contained within, unless iteration is
 * prohibited by the specified {@link TraversalStrategy}.
 *
 * Although the constants currently represent a boolean switch, they are
 * implemented as bit mask in order to allow future extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see TraversalStrategy
 */
class CascadingStrategy
{
    /**
     * Specifies that a node should not be cascaded.
     */
    const NONE = 1;

    /**
     * Specifies that a node should be cascaded.
     */
    const CASCADE = 2;

    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/validator/Mapping/CascadingStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/CascadingStrategy.php");
    }
}
