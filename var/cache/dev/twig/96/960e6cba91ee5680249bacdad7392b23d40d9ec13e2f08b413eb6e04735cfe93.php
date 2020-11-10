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

/* vendor/symfony/css-selector/Node/ElementNode.php */
class __TwigTemplate_a78aad7b20a0b49b456198392a2d1c2530e0b8c8143e83dc023fd63842bf3ba1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/ElementNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/ElementNode.php"));

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
 * Represents a \"<namespace>|<element>\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ElementNode extends AbstractNode
{
    private \$namespace;
    private \$element;

    public function __construct(string \$namespace = null, string \$element = null)
    {
        \$this->namespace = \$namespace;
        \$this->element = \$element;
    }

    /**
     * @return string|null
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }

    /**
     * @return string|null
     */
    public function getElement()
    {
        return \$this->element;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return new Specificity(0, 0, \$this->element ? 1 : 0);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        \$element = \$this->element ?: '*';

        return sprintf('%s[%s]', \$this->getNodeName(), \$this->namespace ? \$this->namespace.'|'.\$element : \$element);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Node/ElementNode.php";
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
 * Represents a \"<namespace>|<element>\" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ElementNode extends AbstractNode
{
    private \$namespace;
    private \$element;

    public function __construct(string \$namespace = null, string \$element = null)
    {
        \$this->namespace = \$namespace;
        \$this->element = \$element;
    }

    /**
     * @return string|null
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }

    /**
     * @return string|null
     */
    public function getElement()
    {
        return \$this->element;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecificity(): Specificity
    {
        return new Specificity(0, 0, \$this->element ? 1 : 0);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        \$element = \$this->element ?: '*';

        return sprintf('%s[%s]', \$this->getNodeName(), \$this->namespace ? \$this->namespace.'|'.\$element : \$element);
    }
}
", "vendor/symfony/css-selector/Node/ElementNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Node/ElementNode.php");
    }
}
