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

/* vendor/symfony/css-selector/XPath/XPathExpr.php */
class __TwigTemplate_aadbc71d73ed2b7098016b129adf5e94eb9ce0e879e270bf56d4c218a3dc2d59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/XPathExpr.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/XPathExpr.php"));

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

namespace Symfony\\Component\\CssSelector\\XPath;

/**
 * XPath expression translator interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class XPathExpr
{
    private \$path;
    private \$element;
    private \$condition;

    public function __construct(string \$path = '', string \$element = '*', string \$condition = '', bool \$starPrefix = false)
    {
        \$this->path = \$path;
        \$this->element = \$element;
        \$this->condition = \$condition;

        if (\$starPrefix) {
            \$this->addStarPrefix();
        }
    }

    public function getElement(): string
    {
        return \$this->element;
    }

    public function addCondition(string \$condition): self
    {
        \$this->condition = \$this->condition ? sprintf('(%s) and (%s)', \$this->condition, \$condition) : \$condition;

        return \$this;
    }

    public function getCondition(): string
    {
        return \$this->condition;
    }

    public function addNameTest(): self
    {
        if ('*' !== \$this->element) {
            \$this->addCondition('name() = '.Translator::getXpathLiteral(\$this->element));
            \$this->element = '*';
        }

        return \$this;
    }

    public function addStarPrefix(): self
    {
        \$this->path .= '*/';

        return \$this;
    }

    /**
     * Joins another XPathExpr with a combiner.
     *
     * @return \$this
     */
    public function join(string \$combiner, self \$expr): self
    {
        \$path = \$this->__toString().\$combiner;

        if ('*/' !== \$expr->path) {
            \$path .= \$expr->path;
        }

        \$this->path = \$path;
        \$this->element = \$expr->element;
        \$this->condition = \$expr->condition;

        return \$this;
    }

    public function __toString(): string
    {
        \$path = \$this->path.\$this->element;
        \$condition = null === \$this->condition || '' === \$this->condition ? '' : '['.\$this->condition.']';

        return \$path.\$condition;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/XPathExpr.php";
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

namespace Symfony\\Component\\CssSelector\\XPath;

/**
 * XPath expression translator interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class XPathExpr
{
    private \$path;
    private \$element;
    private \$condition;

    public function __construct(string \$path = '', string \$element = '*', string \$condition = '', bool \$starPrefix = false)
    {
        \$this->path = \$path;
        \$this->element = \$element;
        \$this->condition = \$condition;

        if (\$starPrefix) {
            \$this->addStarPrefix();
        }
    }

    public function getElement(): string
    {
        return \$this->element;
    }

    public function addCondition(string \$condition): self
    {
        \$this->condition = \$this->condition ? sprintf('(%s) and (%s)', \$this->condition, \$condition) : \$condition;

        return \$this;
    }

    public function getCondition(): string
    {
        return \$this->condition;
    }

    public function addNameTest(): self
    {
        if ('*' !== \$this->element) {
            \$this->addCondition('name() = '.Translator::getXpathLiteral(\$this->element));
            \$this->element = '*';
        }

        return \$this;
    }

    public function addStarPrefix(): self
    {
        \$this->path .= '*/';

        return \$this;
    }

    /**
     * Joins another XPathExpr with a combiner.
     *
     * @return \$this
     */
    public function join(string \$combiner, self \$expr): self
    {
        \$path = \$this->__toString().\$combiner;

        if ('*/' !== \$expr->path) {
            \$path .= \$expr->path;
        }

        \$this->path = \$path;
        \$this->element = \$expr->element;
        \$this->condition = \$expr->condition;

        return \$this;
    }

    public function __toString(): string
    {
        \$path = \$this->path.\$this->element;
        \$condition = null === \$this->condition || '' === \$this->condition ? '' : '['.\$this->condition.']';

        return \$path.\$condition;
    }
}
", "vendor/symfony/css-selector/XPath/XPathExpr.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/XPathExpr.php");
    }
}
