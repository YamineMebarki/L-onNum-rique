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

/* vendor/psr/link/src/EvolvableLinkProviderInterface.php */
class __TwigTemplate_709e59919d1d3243bc4c8c5fba84e676820b20bbab1564c2038a2795396fc63c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/src/EvolvableLinkProviderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/src/EvolvableLinkProviderInterface.php"));

        // line 1
        echo "<?php

namespace Psr\\Link;

/**
 * An evolvable link provider value object.
 */
interface EvolvableLinkProviderInterface extends LinkProviderInterface
{
    /**
     * Returns an instance with the specified link included.
     *
     * If the specified link is already present, this method MUST return normally
     * without errors. The link is present if \$link is === identical to a link
     * object already in the collection.
     *
     * @param LinkInterface \$link
     *   A link object that should be included in this collection.
     * @return static
     */
    public function withLink(LinkInterface \$link);

    /**
     * Returns an instance with the specifed link removed.
     *
     * If the specified link is not present, this method MUST return normally
     * without errors. The link is present if \$link is === identical to a link
     * object already in the collection.
     *
     * @param LinkInterface \$link
     *   The link to remove.
     * @return static
     */
    public function withoutLink(LinkInterface \$link);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/link/src/EvolvableLinkProviderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Psr\\Link;

/**
 * An evolvable link provider value object.
 */
interface EvolvableLinkProviderInterface extends LinkProviderInterface
{
    /**
     * Returns an instance with the specified link included.
     *
     * If the specified link is already present, this method MUST return normally
     * without errors. The link is present if \$link is === identical to a link
     * object already in the collection.
     *
     * @param LinkInterface \$link
     *   A link object that should be included in this collection.
     * @return static
     */
    public function withLink(LinkInterface \$link);

    /**
     * Returns an instance with the specifed link removed.
     *
     * If the specified link is not present, this method MUST return normally
     * without errors. The link is present if \$link is === identical to a link
     * object already in the collection.
     *
     * @param LinkInterface \$link
     *   The link to remove.
     * @return static
     */
    public function withoutLink(LinkInterface \$link);
}
", "vendor/psr/link/src/EvolvableLinkProviderInterface.php", "/var/www/public/DevLaon/templates/vendor/psr/link/src/EvolvableLinkProviderInterface.php");
    }
}
