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

/* vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php */
class __TwigTemplate_8928c650efbbd5f3a4e23c04cfc08168fc0580d327d8c2e9a22b5855b2f823c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php"));

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

namespace Symfony\\Component\\CssSelector\\XPath\\Extension;

use Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator pseudo-class extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class PseudoClassExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getPseudoClassTranslators()
    {
        return [
            'root' => [\$this, 'translateRoot'],
            'first-child' => [\$this, 'translateFirstChild'],
            'last-child' => [\$this, 'translateLastChild'],
            'first-of-type' => [\$this, 'translateFirstOfType'],
            'last-of-type' => [\$this, 'translateLastOfType'],
            'only-child' => [\$this, 'translateOnlyChild'],
            'only-of-type' => [\$this, 'translateOnlyOfType'],
            'empty' => [\$this, 'translateEmpty'],
        ];
    }

    /**
     * @return XPathExpr
     */
    public function translateRoot(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('not(parent::*)');
    }

    /**
     * @return XPathExpr
     */
    public function translateFirstChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     */
    public function translateLastChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = last()');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateFirstOfType(XPathExpr \$xpath)
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:first-of-type\" is not implemented.');
        }

        return \$xpath
            ->addStarPrefix()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateLastOfType(XPathExpr \$xpath)
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:last-of-type\" is not implemented.');
        }

        return \$xpath
            ->addStarPrefix()
            ->addCondition('position() = last()');
    }

    /**
     * @return XPathExpr
     */
    public function translateOnlyChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('last() = 1');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateOnlyOfType(XPathExpr \$xpath)
    {
        \$element = \$xpath->getElement();

        if ('*' === \$element) {
            throw new ExpressionErrorException('\"*:only-of-type\" is not implemented.');
        }

        return \$xpath->addCondition(sprintf('count(preceding-sibling::%s)=0 and count(following-sibling::%s)=0', \$element, \$element));
    }

    /**
     * @return XPathExpr
     */
    public function translateEmpty(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('not(*) and not(string-length())');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pseudo-class';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php";
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

namespace Symfony\\Component\\CssSelector\\XPath\\Extension;

use Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator pseudo-class extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class PseudoClassExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getPseudoClassTranslators()
    {
        return [
            'root' => [\$this, 'translateRoot'],
            'first-child' => [\$this, 'translateFirstChild'],
            'last-child' => [\$this, 'translateLastChild'],
            'first-of-type' => [\$this, 'translateFirstOfType'],
            'last-of-type' => [\$this, 'translateLastOfType'],
            'only-child' => [\$this, 'translateOnlyChild'],
            'only-of-type' => [\$this, 'translateOnlyOfType'],
            'empty' => [\$this, 'translateEmpty'],
        ];
    }

    /**
     * @return XPathExpr
     */
    public function translateRoot(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('not(parent::*)');
    }

    /**
     * @return XPathExpr
     */
    public function translateFirstChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     */
    public function translateLastChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = last()');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateFirstOfType(XPathExpr \$xpath)
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:first-of-type\" is not implemented.');
        }

        return \$xpath
            ->addStarPrefix()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateLastOfType(XPathExpr \$xpath)
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:last-of-type\" is not implemented.');
        }

        return \$xpath
            ->addStarPrefix()
            ->addCondition('position() = last()');
    }

    /**
     * @return XPathExpr
     */
    public function translateOnlyChild(XPathExpr \$xpath)
    {
        return \$xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('last() = 1');
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateOnlyOfType(XPathExpr \$xpath)
    {
        \$element = \$xpath->getElement();

        if ('*' === \$element) {
            throw new ExpressionErrorException('\"*:only-of-type\" is not implemented.');
        }

        return \$xpath->addCondition(sprintf('count(preceding-sibling::%s)=0 and count(following-sibling::%s)=0', \$element, \$element));
    }

    /**
     * @return XPathExpr
     */
    public function translateEmpty(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('not(*) and not(string-length())');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pseudo-class';
    }
}
", "vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php");
    }
}
