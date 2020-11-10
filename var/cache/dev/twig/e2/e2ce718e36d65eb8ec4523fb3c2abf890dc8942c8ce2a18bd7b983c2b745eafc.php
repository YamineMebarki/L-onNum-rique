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

/* vendor/psr/link/src/EvolvableLinkInterface.php */
class __TwigTemplate_61437531c5190bac4d6af9e8ded10c7bb94965d4f6a879758e8b223e9684a366 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/src/EvolvableLinkInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/src/EvolvableLinkInterface.php"));

        // line 1
        echo "<?php

namespace Psr\\Link;

/**
 * An evolvable link value object.
 */
interface EvolvableLinkInterface extends LinkInterface
{
    /**
     * Returns an instance with the specified href.
     *
     * @param string \$href
     *   The href value to include.  It must be one of:
     *     - An absolute URI, as defined by RFC 5988.
     *     - A relative URI, as defined by RFC 5988. The base of the relative link
     *       is assumed to be known based on context by the client.
     *     - A URI template as defined by RFC 6570.
     *     - An object implementing __toString() that produces one of the above
     *       values.
     *
     * An implementing library SHOULD evaluate a passed object to a string
     * immediately rather than waiting for it to be returned later.
     *
     * @return static
     */
    public function withHref(\$href);

    /**
     * Returns an instance with the specified relationship included.
     *
     * If the specified rel is already present, this method MUST return
     * normally without errors, but without adding the rel a second time.
     *
     * @param string \$rel
     *   The relationship value to add.
     * @return static
     */
    public function withRel(\$rel);

    /**
     * Returns an instance with the specified relationship excluded.
     *
     * If the specified rel is already not present, this method MUST return
     * normally without errors.
     *
     * @param string \$rel
     *   The relationship value to exclude.
     * @return static
     */
    public function withoutRel(\$rel);

    /**
     * Returns an instance with the specified attribute added.
     *
     * If the specified attribute is already present, it will be overwritten
     * with the new value.
     *
     * @param string \$attribute
     *   The attribute to include.
     * @param string \$value
     *   The value of the attribute to set.
     * @return static
     */
    public function withAttribute(\$attribute, \$value);


    /**
     * Returns an instance with the specified attribute excluded.
     *
     * If the specified attribute is not present, this method MUST return
     * normally without errors.
     *
     * @param string \$attribute
     *   The attribute to remove.
     * @return static
     */
    public function withoutAttribute(\$attribute);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/link/src/EvolvableLinkInterface.php";
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
 * An evolvable link value object.
 */
interface EvolvableLinkInterface extends LinkInterface
{
    /**
     * Returns an instance with the specified href.
     *
     * @param string \$href
     *   The href value to include.  It must be one of:
     *     - An absolute URI, as defined by RFC 5988.
     *     - A relative URI, as defined by RFC 5988. The base of the relative link
     *       is assumed to be known based on context by the client.
     *     - A URI template as defined by RFC 6570.
     *     - An object implementing __toString() that produces one of the above
     *       values.
     *
     * An implementing library SHOULD evaluate a passed object to a string
     * immediately rather than waiting for it to be returned later.
     *
     * @return static
     */
    public function withHref(\$href);

    /**
     * Returns an instance with the specified relationship included.
     *
     * If the specified rel is already present, this method MUST return
     * normally without errors, but without adding the rel a second time.
     *
     * @param string \$rel
     *   The relationship value to add.
     * @return static
     */
    public function withRel(\$rel);

    /**
     * Returns an instance with the specified relationship excluded.
     *
     * If the specified rel is already not present, this method MUST return
     * normally without errors.
     *
     * @param string \$rel
     *   The relationship value to exclude.
     * @return static
     */
    public function withoutRel(\$rel);

    /**
     * Returns an instance with the specified attribute added.
     *
     * If the specified attribute is already present, it will be overwritten
     * with the new value.
     *
     * @param string \$attribute
     *   The attribute to include.
     * @param string \$value
     *   The value of the attribute to set.
     * @return static
     */
    public function withAttribute(\$attribute, \$value);


    /**
     * Returns an instance with the specified attribute excluded.
     *
     * If the specified attribute is not present, this method MUST return
     * normally without errors.
     *
     * @param string \$attribute
     *   The attribute to remove.
     * @return static
     */
    public function withoutAttribute(\$attribute);
}
", "vendor/psr/link/src/EvolvableLinkInterface.php", "/var/www/public/DevLaon/templates/vendor/psr/link/src/EvolvableLinkInterface.php");
    }
}
