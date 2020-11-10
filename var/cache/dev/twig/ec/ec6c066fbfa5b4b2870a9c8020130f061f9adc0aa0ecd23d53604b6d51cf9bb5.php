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

/* vendor/fig/link-util/src/EvolvableLinkTrait.php */
class __TwigTemplate_f844b59ffe5a166eda5f4e568ace46fab20b28484d396837bd177bdcd3fad3bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/EvolvableLinkTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/EvolvableLinkTrait.php"));

        // line 1
        echo "<?php


namespace Fig\\Link;

use Psr\\Link\\EvolvableLinkInterface;

/**
 * Class EvolvableLinkTrait
 *
 * @implements EvolvableLinkInterface
 */
trait EvolvableLinkTrait
{
    use LinkTrait;

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withHref(\$href)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->href = \$href;

        \$that->templated = (\$this->hrefIsTemplated(\$href));

        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withRel(\$rel)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->rel[\$rel] = true;
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withoutRel(\$rel)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        unset(\$that->rel[\$rel]);
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withAttribute(\$attribute, \$value)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->attributes[\$attribute] = \$value;
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withoutAttribute(\$attribute)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        unset(\$that->attributes[\$attribute]);
        return \$that;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/EvolvableLinkTrait.php";
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

/**
 * Class EvolvableLinkTrait
 *
 * @implements EvolvableLinkInterface
 */
trait EvolvableLinkTrait
{
    use LinkTrait;

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withHref(\$href)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->href = \$href;

        \$that->templated = (\$this->hrefIsTemplated(\$href));

        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withRel(\$rel)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->rel[\$rel] = true;
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withoutRel(\$rel)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        unset(\$that->rel[\$rel]);
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withAttribute(\$attribute, \$value)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        \$that->attributes[\$attribute] = \$value;
        return \$that;
    }

    /**
     * {@inheritdoc}
     *
     * @return EvolvableLinkInterface
     */
    public function withoutAttribute(\$attribute)
    {
        /** @var EvolvableLinkInterface \$that */
        \$that = clone(\$this);
        unset(\$that->attributes[\$attribute]);
        return \$that;
    }
}
", "vendor/fig/link-util/src/EvolvableLinkTrait.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/EvolvableLinkTrait.php");
    }
}
