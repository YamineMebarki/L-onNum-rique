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

/* vendor/symfony/validator/Mapping/MetadataInterface.php */
class __TwigTemplate_5b5f1d0d1a34f53a1a9c938c2fef0a4689346a3c2a908d2ada1fa7a56ac1eea2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/MetadataInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/MetadataInterface.php"));

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

use Symfony\\Component\\Validator\\Constraint;

/**
 * A container for validation metadata.
 *
 * Most importantly, the metadata stores the constraints against which an object
 * and its properties should be validated.
 *
 * Additionally, the metadata stores whether objects should be validated
 * against their class' metadata and whether traversable objects should be
 * traversed or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see CascadingStrategy
 * @see TraversalStrategy
 */
interface MetadataInterface
{
    /**
     * Returns the strategy for cascading objects.
     *
     * @return int The cascading strategy
     *
     * @see CascadingStrategy
     */
    public function getCascadingStrategy();

    /**
     * Returns the strategy for traversing traversable objects.
     *
     * @return int The traversal strategy
     *
     * @see TraversalStrategy
     */
    public function getTraversalStrategy();

    /**
     * Returns all constraints of this element.
     *
     * @return Constraint[] A list of Constraint instances
     */
    public function getConstraints();

    /**
     * Returns all constraints for a given validation group.
     *
     * @param string \$group The validation group
     *
     * @return Constraint[] A list of constraint instances
     */
    public function findConstraints(\$group);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/MetadataInterface.php";
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

use Symfony\\Component\\Validator\\Constraint;

/**
 * A container for validation metadata.
 *
 * Most importantly, the metadata stores the constraints against which an object
 * and its properties should be validated.
 *
 * Additionally, the metadata stores whether objects should be validated
 * against their class' metadata and whether traversable objects should be
 * traversed or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see CascadingStrategy
 * @see TraversalStrategy
 */
interface MetadataInterface
{
    /**
     * Returns the strategy for cascading objects.
     *
     * @return int The cascading strategy
     *
     * @see CascadingStrategy
     */
    public function getCascadingStrategy();

    /**
     * Returns the strategy for traversing traversable objects.
     *
     * @return int The traversal strategy
     *
     * @see TraversalStrategy
     */
    public function getTraversalStrategy();

    /**
     * Returns all constraints of this element.
     *
     * @return Constraint[] A list of Constraint instances
     */
    public function getConstraints();

    /**
     * Returns all constraints for a given validation group.
     *
     * @param string \$group The validation group
     *
     * @return Constraint[] A list of constraint instances
     */
    public function findConstraints(\$group);
}
", "vendor/symfony/validator/Mapping/MetadataInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/MetadataInterface.php");
    }
}
