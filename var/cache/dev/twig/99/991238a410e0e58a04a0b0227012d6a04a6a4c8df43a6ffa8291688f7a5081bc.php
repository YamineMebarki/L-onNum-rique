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

/* vendor/fig/link-util/src/Link.php */
class __TwigTemplate_afa5874f4f6b29d87c30f0275fcbf10e977833180017d2b088875ebb8f08fea9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/Link.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/Link.php"));

        // line 1
        echo "<?php


namespace Fig\\Link;

use Psr\\Link\\EvolvableLinkInterface;

class Link implements EvolvableLinkInterface
{
    use EvolvableLinkTrait;

    /**
     * Link constructor.
     *
     * @param string \$rel
     *   A single relationship to include on this link.
     * @param string \$href
     *   An href for this link.
     */
    public function __construct(\$rel = '', \$href = '')
    {
        if (\$rel) {
            \$this->rel[\$rel] = true;
        }
        \$this->href = \$href;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/Link.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Fig\\Link;

use Psr\\Link\\EvolvableLinkInterface;

class Link implements EvolvableLinkInterface
{
    use EvolvableLinkTrait;

    /**
     * Link constructor.
     *
     * @param string \$rel
     *   A single relationship to include on this link.
     * @param string \$href
     *   An href for this link.
     */
    public function __construct(\$rel = '', \$href = '')
    {
        if (\$rel) {
            \$this->rel[\$rel] = true;
        }
        \$this->href = \$href;
    }
}
", "vendor/fig/link-util/src/Link.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/Link.php");
    }
}
