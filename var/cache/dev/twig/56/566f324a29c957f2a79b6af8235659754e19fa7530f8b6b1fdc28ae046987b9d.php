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

/* vendor/symfony/dom-crawler/Field/InputFormField.php */
class __TwigTemplate_dfd2a01ac3ec8f7efa966f0c98ac06f589a8217ec11b76674c857e93d5714a44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/InputFormField.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/InputFormField.php"));

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
 * InputFormField represents an input form field (an HTML input tag).
 *
 * For inputs with type of file, checkbox, or radio, there are other more
 * specialized classes (cf. FileFormField and ChoiceFormField).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputFormField extends FormField
{
    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName && 'button' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('An InputFormField can only be created from an input or button tag (%s given).', \$this->node->nodeName));
        }

        \$type = strtolower(\$this->node->getAttribute('type'));
        if ('checkbox' === \$type) {
            throw new \\LogicException('Checkboxes should be instances of ChoiceFormField.');
        }

        if ('file' === \$type) {
            throw new \\LogicException('File inputs should be instances of FileFormField.');
        }

        \$this->value = \$this->node->getAttribute('value');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Field/InputFormField.php";
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
 * InputFormField represents an input form field (an HTML input tag).
 *
 * For inputs with type of file, checkbox, or radio, there are other more
 * specialized classes (cf. FileFormField and ChoiceFormField).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputFormField extends FormField
{
    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName && 'button' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('An InputFormField can only be created from an input or button tag (%s given).', \$this->node->nodeName));
        }

        \$type = strtolower(\$this->node->getAttribute('type'));
        if ('checkbox' === \$type) {
            throw new \\LogicException('Checkboxes should be instances of ChoiceFormField.');
        }

        if ('file' === \$type) {
            throw new \\LogicException('File inputs should be instances of FileFormField.');
        }

        \$this->value = \$this->node->getAttribute('value');
    }
}
", "vendor/symfony/dom-crawler/Field/InputFormField.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Field/InputFormField.php");
    }
}
