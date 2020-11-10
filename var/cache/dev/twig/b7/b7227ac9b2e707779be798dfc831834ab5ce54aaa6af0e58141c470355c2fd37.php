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

/* vendor/symfony/css-selector/XPath/Extension/NodeExtension.php */
class __TwigTemplate_79bd89bb8210b4889fe9613ae349c415c2957efdcf59e6651463c397ef1f7f7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/NodeExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/NodeExtension.php"));

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

use Symfony\\Component\\CssSelector\\Node;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator node extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class NodeExtension extends AbstractExtension
{
    const ELEMENT_NAME_IN_LOWER_CASE = 1;
    const ATTRIBUTE_NAME_IN_LOWER_CASE = 2;
    const ATTRIBUTE_VALUE_IN_LOWER_CASE = 4;

    private \$flags;

    public function __construct(int \$flags = 0)
    {
        \$this->flags = \$flags;
    }

    /**
     * @return \$this
     */
    public function setFlag(int \$flag, bool \$on)
    {
        if (\$on && !\$this->hasFlag(\$flag)) {
            \$this->flags += \$flag;
        }

        if (!\$on && \$this->hasFlag(\$flag)) {
            \$this->flags -= \$flag;
        }

        return \$this;
    }

    public function hasFlag(int \$flag): bool
    {
        return (bool) (\$this->flags & \$flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeTranslators()
    {
        return [
            'Selector' => [\$this, 'translateSelector'],
            'CombinedSelector' => [\$this, 'translateCombinedSelector'],
            'Negation' => [\$this, 'translateNegation'],
            'Function' => [\$this, 'translateFunction'],
            'Pseudo' => [\$this, 'translatePseudo'],
            'Attribute' => [\$this, 'translateAttribute'],
            'Class' => [\$this, 'translateClass'],
            'Hash' => [\$this, 'translateHash'],
            'Element' => [\$this, 'translateElement'],
        ];
    }

    public function translateSelector(Node\\SelectorNode \$node, Translator \$translator): XPathExpr
    {
        return \$translator->nodeToXPath(\$node->getTree());
    }

    public function translateCombinedSelector(Node\\CombinedSelectorNode \$node, Translator \$translator): XPathExpr
    {
        return \$translator->addCombination(\$node->getCombinator(), \$node->getSelector(), \$node->getSubSelector());
    }

    public function translateNegation(Node\\NegationNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());
        \$subXpath = \$translator->nodeToXPath(\$node->getSubSelector());
        \$subXpath->addNameTest();

        if (\$subXpath->getCondition()) {
            return \$xpath->addCondition(sprintf('not(%s)', \$subXpath->getCondition()));
        }

        return \$xpath->addCondition('0');
    }

    public function translateFunction(Node\\FunctionNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addFunction(\$xpath, \$node);
    }

    public function translatePseudo(Node\\PseudoNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addPseudoClass(\$xpath, \$node->getIdentifier());
    }

    public function translateAttribute(Node\\AttributeNode \$node, Translator \$translator): XPathExpr
    {
        \$name = \$node->getAttribute();
        \$safe = \$this->isSafeName(\$name);

        if (\$this->hasFlag(self::ATTRIBUTE_NAME_IN_LOWER_CASE)) {
            \$name = strtolower(\$name);
        }

        if (\$node->getNamespace()) {
            \$name = sprintf('%s:%s', \$node->getNamespace(), \$name);
            \$safe = \$safe && \$this->isSafeName(\$node->getNamespace());
        }

        \$attribute = \$safe ? '@'.\$name : sprintf('attribute::*[name() = %s]', Translator::getXpathLiteral(\$name));
        \$value = \$node->getValue();
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        if (\$this->hasFlag(self::ATTRIBUTE_VALUE_IN_LOWER_CASE)) {
            \$value = strtolower(\$value);
        }

        return \$translator->addAttributeMatching(\$xpath, \$node->getOperator(), \$attribute, \$value);
    }

    public function translateClass(Node\\ClassNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addAttributeMatching(\$xpath, '~=', '@class', \$node->getName());
    }

    public function translateHash(Node\\HashNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addAttributeMatching(\$xpath, '=', '@id', \$node->getId());
    }

    public function translateElement(Node\\ElementNode \$node): XPathExpr
    {
        \$element = \$node->getElement();

        if (\$this->hasFlag(self::ELEMENT_NAME_IN_LOWER_CASE)) {
            \$element = strtolower(\$element);
        }

        if (\$element) {
            \$safe = \$this->isSafeName(\$element);
        } else {
            \$element = '*';
            \$safe = true;
        }

        if (\$node->getNamespace()) {
            \$element = sprintf('%s:%s', \$node->getNamespace(), \$element);
            \$safe = \$safe && \$this->isSafeName(\$node->getNamespace());
        }

        \$xpath = new XPathExpr('', \$element);

        if (!\$safe) {
            \$xpath->addNameTest();
        }

        return \$xpath;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'node';
    }

    private function isSafeName(string \$name): bool
    {
        return 0 < preg_match('~^[a-zA-Z_][a-zA-Z0-9_.-]*\$~', \$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/NodeExtension.php";
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

use Symfony\\Component\\CssSelector\\Node;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator node extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class NodeExtension extends AbstractExtension
{
    const ELEMENT_NAME_IN_LOWER_CASE = 1;
    const ATTRIBUTE_NAME_IN_LOWER_CASE = 2;
    const ATTRIBUTE_VALUE_IN_LOWER_CASE = 4;

    private \$flags;

    public function __construct(int \$flags = 0)
    {
        \$this->flags = \$flags;
    }

    /**
     * @return \$this
     */
    public function setFlag(int \$flag, bool \$on)
    {
        if (\$on && !\$this->hasFlag(\$flag)) {
            \$this->flags += \$flag;
        }

        if (!\$on && \$this->hasFlag(\$flag)) {
            \$this->flags -= \$flag;
        }

        return \$this;
    }

    public function hasFlag(int \$flag): bool
    {
        return (bool) (\$this->flags & \$flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getNodeTranslators()
    {
        return [
            'Selector' => [\$this, 'translateSelector'],
            'CombinedSelector' => [\$this, 'translateCombinedSelector'],
            'Negation' => [\$this, 'translateNegation'],
            'Function' => [\$this, 'translateFunction'],
            'Pseudo' => [\$this, 'translatePseudo'],
            'Attribute' => [\$this, 'translateAttribute'],
            'Class' => [\$this, 'translateClass'],
            'Hash' => [\$this, 'translateHash'],
            'Element' => [\$this, 'translateElement'],
        ];
    }

    public function translateSelector(Node\\SelectorNode \$node, Translator \$translator): XPathExpr
    {
        return \$translator->nodeToXPath(\$node->getTree());
    }

    public function translateCombinedSelector(Node\\CombinedSelectorNode \$node, Translator \$translator): XPathExpr
    {
        return \$translator->addCombination(\$node->getCombinator(), \$node->getSelector(), \$node->getSubSelector());
    }

    public function translateNegation(Node\\NegationNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());
        \$subXpath = \$translator->nodeToXPath(\$node->getSubSelector());
        \$subXpath->addNameTest();

        if (\$subXpath->getCondition()) {
            return \$xpath->addCondition(sprintf('not(%s)', \$subXpath->getCondition()));
        }

        return \$xpath->addCondition('0');
    }

    public function translateFunction(Node\\FunctionNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addFunction(\$xpath, \$node);
    }

    public function translatePseudo(Node\\PseudoNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addPseudoClass(\$xpath, \$node->getIdentifier());
    }

    public function translateAttribute(Node\\AttributeNode \$node, Translator \$translator): XPathExpr
    {
        \$name = \$node->getAttribute();
        \$safe = \$this->isSafeName(\$name);

        if (\$this->hasFlag(self::ATTRIBUTE_NAME_IN_LOWER_CASE)) {
            \$name = strtolower(\$name);
        }

        if (\$node->getNamespace()) {
            \$name = sprintf('%s:%s', \$node->getNamespace(), \$name);
            \$safe = \$safe && \$this->isSafeName(\$node->getNamespace());
        }

        \$attribute = \$safe ? '@'.\$name : sprintf('attribute::*[name() = %s]', Translator::getXpathLiteral(\$name));
        \$value = \$node->getValue();
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        if (\$this->hasFlag(self::ATTRIBUTE_VALUE_IN_LOWER_CASE)) {
            \$value = strtolower(\$value);
        }

        return \$translator->addAttributeMatching(\$xpath, \$node->getOperator(), \$attribute, \$value);
    }

    public function translateClass(Node\\ClassNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addAttributeMatching(\$xpath, '~=', '@class', \$node->getName());
    }

    public function translateHash(Node\\HashNode \$node, Translator \$translator): XPathExpr
    {
        \$xpath = \$translator->nodeToXPath(\$node->getSelector());

        return \$translator->addAttributeMatching(\$xpath, '=', '@id', \$node->getId());
    }

    public function translateElement(Node\\ElementNode \$node): XPathExpr
    {
        \$element = \$node->getElement();

        if (\$this->hasFlag(self::ELEMENT_NAME_IN_LOWER_CASE)) {
            \$element = strtolower(\$element);
        }

        if (\$element) {
            \$safe = \$this->isSafeName(\$element);
        } else {
            \$element = '*';
            \$safe = true;
        }

        if (\$node->getNamespace()) {
            \$element = sprintf('%s:%s', \$node->getNamespace(), \$element);
            \$safe = \$safe && \$this->isSafeName(\$node->getNamespace());
        }

        \$xpath = new XPathExpr('', \$element);

        if (!\$safe) {
            \$xpath->addNameTest();
        }

        return \$xpath;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'node';
    }

    private function isSafeName(string \$name): bool
    {
        return 0 < preg_match('~^[a-zA-Z_][a-zA-Z0-9_.-]*\$~', \$name);
    }
}
", "vendor/symfony/css-selector/XPath/Extension/NodeExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/NodeExtension.php");
    }
}
