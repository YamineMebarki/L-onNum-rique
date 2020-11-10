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

/* vendor/fig/link-util/src/EvolvableLinkProviderTrait.php */
class __TwigTemplate_bf5d0e1d9d064f6e2dbd90a05f02520aa2f34abf94838809416d5c080fbb9487 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/EvolvableLinkProviderTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/EvolvableLinkProviderTrait.php"));

        // line 1
        echo "<?php

namespace Fig\\Link;

use Psr\\Link\\LinkInterface;
use Psr\\Link\\EvolvableLinkProviderInterface;

/**
 * Class EvolvableLinkProviderTrait
 *
 * @implements EvolvableLinkProviderInterface
 */
trait EvolvableLinkProviderTrait
{
    use LinkProviderTrait;

    /**
     * {@inheritdoc}
     */
    public function withLink(LinkInterface \$link)
    {
        \$that = clone(\$this);
        \$splosh = spl_object_hash(\$link);
        if (!array_key_exists(\$splosh, \$that->links)) {
            \$that->links[\$splosh] = \$link;
        }
        return \$that;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutLink(LinkInterface \$link)
    {
        \$that = clone(\$this);
        \$splosh = spl_object_hash(\$link);
        unset(\$that->links[\$splosh]);
        return \$that;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/EvolvableLinkProviderTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Fig\\Link;

use Psr\\Link\\LinkInterface;
use Psr\\Link\\EvolvableLinkProviderInterface;

/**
 * Class EvolvableLinkProviderTrait
 *
 * @implements EvolvableLinkProviderInterface
 */
trait EvolvableLinkProviderTrait
{
    use LinkProviderTrait;

    /**
     * {@inheritdoc}
     */
    public function withLink(LinkInterface \$link)
    {
        \$that = clone(\$this);
        \$splosh = spl_object_hash(\$link);
        if (!array_key_exists(\$splosh, \$that->links)) {
            \$that->links[\$splosh] = \$link;
        }
        return \$that;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutLink(LinkInterface \$link)
    {
        \$that = clone(\$this);
        \$splosh = spl_object_hash(\$link);
        unset(\$that->links[\$splosh]);
        return \$that;
    }
}
", "vendor/fig/link-util/src/EvolvableLinkProviderTrait.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/EvolvableLinkProviderTrait.php");
    }
}
