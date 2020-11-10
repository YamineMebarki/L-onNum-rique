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

/* vendor/symfony/dom-crawler/Field/TextareaFormField.php */
class __TwigTemplate_e00689824246b3bac77f05cb189a4eefd4199df3311465ce7d8fcbe1791455c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/TextareaFormField.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/TextareaFormField.php"));

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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * TextareaFormField represents a textarea form field (an HTML textarea tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TextareaFormField extends FormField
{
    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('textarea' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A TextareaFormField can only be created from a textarea tag (%s given).', \$this->node->nodeName));
        }

        \$this->value = '';
        foreach (\$this->node->childNodes as \$node) {
            \$this->value .= \$node->wholeText;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Field/TextareaFormField.php";
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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * TextareaFormField represents a textarea form field (an HTML textarea tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TextareaFormField extends FormField
{
    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('textarea' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A TextareaFormField can only be created from a textarea tag (%s given).', \$this->node->nodeName));
        }

        \$this->value = '';
        foreach (\$this->node->childNodes as \$node) {
            \$this->value .= \$node->wholeText;
        }
    }
}
", "vendor/symfony/dom-crawler/Field/TextareaFormField.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Field/TextareaFormField.php");
    }
}
