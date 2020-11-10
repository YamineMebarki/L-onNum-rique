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

/* vendor/fig/link-util/src/LinkProviderTrait.php */
class __TwigTemplate_f6017723672bd7d680537428fc7ccb9199deb52c59d4b893e8adbb9d39d633f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/LinkProviderTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/LinkProviderTrait.php"));

        // line 1
        echo "<?php


namespace Fig\\Link;

use Psr\\Link\\LinkProviderInterface;
use Psr\\Link\\LinkInterface;

/**
 * Class LinkProviderTrait
 *
 * @implements LinkProviderInterface
 */
trait LinkProviderTrait
{
    /**
     * An array of the links in this provider.
     *
     * The keys of the array MUST be the spl_object_hash() of the object being stored.
     * That helps to ensure uniqueness.
     *
     * @var LinkInterface[]
     */
    private \$links = [];

    /**
     * {@inheritdoc}
     */
    public function getLinks()
    {
        return \$this->links;
    }

    /**
     * {@inheritdoc}
     */
    public function getLinksByRel(\$rel)
    {
        \$filter = function (LinkInterface \$link) use (\$rel) {
            return in_array(\$rel, \$link->getRels());
        };
        return array_filter(\$this->links, \$filter);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/LinkProviderTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Fig\\Link;

use Psr\\Link\\LinkProviderInterface;
use Psr\\Link\\LinkInterface;

/**
 * Class LinkProviderTrait
 *
 * @implements LinkProviderInterface
 */
trait LinkProviderTrait
{
    /**
     * An array of the links in this provider.
     *
     * The keys of the array MUST be the spl_object_hash() of the object being stored.
     * That helps to ensure uniqueness.
     *
     * @var LinkInterface[]
     */
    private \$links = [];

    /**
     * {@inheritdoc}
     */
    public function getLinks()
    {
        return \$this->links;
    }

    /**
     * {@inheritdoc}
     */
    public function getLinksByRel(\$rel)
    {
        \$filter = function (LinkInterface \$link) use (\$rel) {
            return in_array(\$rel, \$link->getRels());
        };
        return array_filter(\$this->links, \$filter);
    }
}
", "vendor/fig/link-util/src/LinkProviderTrait.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/LinkProviderTrait.php");
    }
}
