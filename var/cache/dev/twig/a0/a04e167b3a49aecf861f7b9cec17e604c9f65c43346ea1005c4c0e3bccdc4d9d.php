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

/* vendor/symfony/validator/Mapping/TraversalStrategy.php */
class __TwigTemplate_7d0a9e2b334b525f4b20a2af71b351e12a7089e5ee3ee3696d507032d2c675f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/TraversalStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/TraversalStrategy.php"));

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
 * Specifies whether and how a traversable object should be traversed.
 *
 * If the node traverser traverses a node whose value is an instance of
 * {@link \\Traversable}, and if that node is either a class node or if
 * cascading is enabled, then the node's traversal strategy will be checked.
 * Depending on the requested traversal strategy, the node traverser will
 * iterate over the object and cascade each object or collection returned by
 * the iterator.
 *
 * The traversal strategy is ignored for arrays. Arrays are always iterated.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see CascadingStrategy
 */
class TraversalStrategy
{
    /**
     * Specifies that a node's value should be iterated only if it is an
     * instance of {@link \\Traversable}.
     */
    const IMPLICIT = 1;

    /**
     * Specifies that a node's value should never be iterated.
     */
    const NONE = 2;

    /**
     * Specifies that a node's value should always be iterated. If the value is
     * not an instance of {@link \\Traversable}, an exception should be thrown.
     */
    const TRAVERSE = 4;

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
        return "vendor/symfony/validator/Mapping/TraversalStrategy.php";
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
 * Specifies whether and how a traversable object should be traversed.
 *
 * If the node traverser traverses a node whose value is an instance of
 * {@link \\Traversable}, and if that node is either a class node or if
 * cascading is enabled, then the node's traversal strategy will be checked.
 * Depending on the requested traversal strategy, the node traverser will
 * iterate over the object and cascade each object or collection returned by
 * the iterator.
 *
 * The traversal strategy is ignored for arrays. Arrays are always iterated.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see CascadingStrategy
 */
class TraversalStrategy
{
    /**
     * Specifies that a node's value should be iterated only if it is an
     * instance of {@link \\Traversable}.
     */
    const IMPLICIT = 1;

    /**
     * Specifies that a node's value should never be iterated.
     */
    const NONE = 2;

    /**
     * Specifies that a node's value should always be iterated. If the value is
     * not an instance of {@link \\Traversable}, an exception should be thrown.
     */
    const TRAVERSE = 4;

    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/validator/Mapping/TraversalStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/TraversalStrategy.php");
    }
}
