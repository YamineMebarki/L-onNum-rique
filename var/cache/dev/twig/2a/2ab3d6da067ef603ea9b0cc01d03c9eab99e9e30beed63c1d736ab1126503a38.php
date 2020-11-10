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

/* vendor/fig/link-util/src/LinkTrait.php */
class __TwigTemplate_c94e33d238a169a72ba7b0aefe0b414dc6b5a674469fa841ed699ef68088ab5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/LinkTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/LinkTrait.php"));

        // line 1
        echo "<?php

namespace Fig\\Link;

use Psr\\Link\\LinkInterface;

/**
 * Class LinkTrait
 *
 * @inherits LinkInterface
 */
trait LinkTrait
{
    use TemplatedHrefTrait;

    /**
     *
     *
     * @var string
     */
    private \$href = '';

    /**
     * The set of rels on this link.
     *
     * Note: Because rels are an exclusive set, we use the keys of the array
     * to store the rels that have been added, not the values. The values
     * are simply boolean true.  A rel is present if the key is set, false
     * otherwise.
     *
     * @var string[]
     */
    private \$rel = [];

    /**
     *
     *
     * @var string
     */
    private \$attributes = [];

    /**
     * {@inheritdoc}
     */
    public function getHref()
    {
        return \$this->href;
    }

    /**
     * {@inheritdoc}
     */
    public function isTemplated()
    {
        return \$this->hrefIsTemplated(\$this->href);
    }

    /**
     * {@inheritdoc}
     */
    public function getRels()
    {
        return array_keys(\$this->rel);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/LinkTrait.php";
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

/**
 * Class LinkTrait
 *
 * @inherits LinkInterface
 */
trait LinkTrait
{
    use TemplatedHrefTrait;

    /**
     *
     *
     * @var string
     */
    private \$href = '';

    /**
     * The set of rels on this link.
     *
     * Note: Because rels are an exclusive set, we use the keys of the array
     * to store the rels that have been added, not the values. The values
     * are simply boolean true.  A rel is present if the key is set, false
     * otherwise.
     *
     * @var string[]
     */
    private \$rel = [];

    /**
     *
     *
     * @var string
     */
    private \$attributes = [];

    /**
     * {@inheritdoc}
     */
    public function getHref()
    {
        return \$this->href;
    }

    /**
     * {@inheritdoc}
     */
    public function isTemplated()
    {
        return \$this->hrefIsTemplated(\$this->href);
    }

    /**
     * {@inheritdoc}
     */
    public function getRels()
    {
        return array_keys(\$this->rel);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }
}
", "vendor/fig/link-util/src/LinkTrait.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/LinkTrait.php");
    }
}
