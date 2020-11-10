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

/* vendor/symfony/css-selector/Node/SelectorNode.php */
class __TwigTemplate_c9f91f9b3e21cd70aa07dbcfe11e5184a0fb4b2c6f8221bbbcb65b0679a4b150 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/SelectorNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/SelectorNode.php"));

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

namespace Symfony\\Component\\CssSelector\\Node;

/**
 * Represents a \"<selector>(::|:)<pseudoElement>\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class SelectorNode extends AbstractNode
{
    private \$tree;
    private \$pseudoElement;

    public function __construct(NodeInterface \$tree, string \$pseudoElement = null)
    {
        \$this->tree = \$tree;
        \$this->pseudoElement = \$pseudoElement ? strtolower(\$pseudoElement) : null;
    }

    public function getTree(): NodeInterface
    {
        return \$this->tree;
    }

    public function getPseudoElement(): ?string
    {
        return \$this->pseudoElement;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return \$this->tree->getSpecificity()->plus(new Specificity(0, 0, \$this->pseudoElement ? 1 : 0));
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return sprintf('%s[%s%s]', \$this->getNodeName(), \$this->tree, \$this->pseudoElement ? '::'.\$this->pseudoElement : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Node/SelectorNode.php";
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

namespace Symfony\\Component\\CssSelector\\Node;

/**
 * Represents a \"<selector>(::|:)<pseudoElement>\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class SelectorNode extends AbstractNode
{
    private \$tree;
    private \$pseudoElement;

    public function __construct(NodeInterface \$tree, string \$pseudoElement = null)
    {
        \$this->tree = \$tree;
        \$this->pseudoElement = \$pseudoElement ? strtolower(\$pseudoElement) : null;
    }

    public function getTree(): NodeInterface
    {
        return \$this->tree;
    }

    public function getPseudoElement(): ?string
    {
        return \$this->pseudoElement;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return \$this->tree->getSpecificity()->plus(new Specificity(0, 0, \$this->pseudoElement ? 1 : 0));
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return sprintf('%s[%s%s]', \$this->getNodeName(), \$this->tree, \$this->pseudoElement ? '::'.\$this->pseudoElement : '');
    }
}
", "vendor/symfony/css-selector/Node/SelectorNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Node/SelectorNode.php");
    }
}
