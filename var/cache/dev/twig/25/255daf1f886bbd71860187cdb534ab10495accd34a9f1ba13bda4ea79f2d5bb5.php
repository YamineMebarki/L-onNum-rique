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

/* vendor/symfony/css-selector/Node/FunctionNode.php */
class __TwigTemplate_d354397a803dcb8a2525e69a63685d42dbaf7c767ed22f3bbb52018521b92fa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/FunctionNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/FunctionNode.php"));

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

use Symfony\\Component\\CssSelector\\Parser\\Token;

/**
 * Represents a \"<selector>:<name>(<arguments>)\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class FunctionNode extends AbstractNode
{
    private \$selector;
    private \$name;
    private \$arguments;

    /**
     * @param Token[] \$arguments
     */
    public function __construct(NodeInterface \$selector, string \$name, array \$arguments = [])
    {
        \$this->selector = \$selector;
        \$this->name = strtolower(\$name);
        \$this->arguments = \$arguments;
    }

    public function getSelector(): NodeInterface
    {
        return \$this->selector;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * @return Token[]
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return \$this->selector->getSpecificity()->plus(new Specificity(0, 1, 0));
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        \$arguments = implode(', ', array_map(function (Token \$token) {
            return \"'\".\$token->getValue().\"'\";
        }, \$this->arguments));

        return sprintf('%s[%s:%s(%s)]', \$this->getNodeName(), \$this->selector, \$this->name, \$arguments ? '['.\$arguments.']' : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Node/FunctionNode.php";
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

use Symfony\\Component\\CssSelector\\Parser\\Token;

/**
 * Represents a \"<selector>:<name>(<arguments>)\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class FunctionNode extends AbstractNode
{
    private \$selector;
    private \$name;
    private \$arguments;

    /**
     * @param Token[] \$arguments
     */
    public function __construct(NodeInterface \$selector, string \$name, array \$arguments = [])
    {
        \$this->selector = \$selector;
        \$this->name = strtolower(\$name);
        \$this->arguments = \$arguments;
    }

    public function getSelector(): NodeInterface
    {
        return \$this->selector;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * @return Token[]
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return \$this->selector->getSpecificity()->plus(new Specificity(0, 1, 0));
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        \$arguments = implode(', ', array_map(function (Token \$token) {
            return \"'\".\$token->getValue().\"'\";
        }, \$this->arguments));

        return sprintf('%s[%s:%s(%s)]', \$this->getNodeName(), \$this->selector, \$this->name, \$arguments ? '['.\$arguments.']' : '');
    }
}
", "vendor/symfony/css-selector/Node/FunctionNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Node/FunctionNode.php");
    }
}
