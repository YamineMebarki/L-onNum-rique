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

/* vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php */
class __TwigTemplate_f19704ded508001d79cf244d2691c64b572c1b7499130eb1bfa686f7ba687517 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList\\View;

/**
 * Represents a group of choices in templates.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceGroupView implements \\IteratorAggregate
{
    public \$label;
    public \$choices;

    /**
     * Creates a new choice group view.
     *
     * @param string                         \$label   The label of the group
     * @param ChoiceGroupView[]|ChoiceView[] \$choices the choice views in the group
     */
    public function __construct(\$label, array \$choices = [])
    {
        \$this->label = \$label;
        \$this->choices = \$choices;
    }

    /**
     * {@inheritdoc}
     *
     * @return self[]|ChoiceView[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->choices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php";
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

namespace Symfony\\Component\\Form\\ChoiceList\\View;

/**
 * Represents a group of choices in templates.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceGroupView implements \\IteratorAggregate
{
    public \$label;
    public \$choices;

    /**
     * Creates a new choice group view.
     *
     * @param string                         \$label   The label of the group
     * @param ChoiceGroupView[]|ChoiceView[] \$choices the choice views in the group
     */
    public function __construct(\$label, array \$choices = [])
    {
        \$this->label = \$label;
        \$this->choices = \$choices;
    }

    /**
     * {@inheritdoc}
     *
     * @return self[]|ChoiceView[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->choices);
    }
}
", "vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/View/ChoiceGroupView.php");
    }
}
