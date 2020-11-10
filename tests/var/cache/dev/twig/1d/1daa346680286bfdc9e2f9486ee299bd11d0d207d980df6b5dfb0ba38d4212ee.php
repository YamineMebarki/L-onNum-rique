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

/* vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php */
class __TwigTemplate_80461b16be89af6da86359b09036a28bf7a5952952ee2b1401fbb79c5beb3c83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php"));

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
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator HTML extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class HtmlExtension extends AbstractExtension
{
    public function __construct(Translator \$translator)
    {
        \$translator
            ->getExtension('node')
            ->setFlag(NodeExtension::ELEMENT_NAME_IN_LOWER_CASE, true)
            ->setFlag(NodeExtension::ATTRIBUTE_NAME_IN_LOWER_CASE, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getPseudoClassTranslators()
    {
        return [
            'checked' => [\$this, 'translateChecked'],
            'link' => [\$this, 'translateLink'],
            'disabled' => [\$this, 'translateDisabled'],
            'enabled' => [\$this, 'translateEnabled'],
            'selected' => [\$this, 'translateSelected'],
            'invalid' => [\$this, 'translateInvalid'],
            'hover' => [\$this, 'translateHover'],
            'visited' => [\$this, 'translateVisited'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctionTranslators()
    {
        return [
            'lang' => [\$this, 'translateLang'],
        ];
    }

    /**
     * @return XPathExpr
     */
    public function translateChecked(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '(@checked '
            .\"and (name(.) = 'input' or name(.) = 'command')\"
            .\"and (@type = 'checkbox' or @type = 'radio'))\"
        );
    }

    /**
     * @return XPathExpr
     */
    public function translateLink(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(\"@href and (name(.) = 'a' or name(.) = 'link' or name(.) = 'area')\");
    }

    /**
     * @return XPathExpr
     */
    public function translateDisabled(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '('
                .'@disabled and'
                .'('
                    .\"(name(.) = 'input' and @type != 'hidden')\"
                    .\" or name(.) = 'button'\"
                    .\" or name(.) = 'select'\"
                    .\" or name(.) = 'textarea'\"
                    .\" or name(.) = 'command'\"
                    .\" or name(.) = 'fieldset'\"
                    .\" or name(.) = 'optgroup'\"
                    .\" or name(.) = 'option'\"
                .')'
            .') or ('
                .\"(name(.) = 'input' and @type != 'hidden')\"
                .\" or name(.) = 'button'\"
                .\" or name(.) = 'select'\"
                .\" or name(.) = 'textarea'\"
            .')'
            .' and ancestor::fieldset[@disabled]'
        );
        // todo: in the second half, add \"and is not a descendant of that fieldset element's first legend element child, if any.\"
    }

    /**
     * @return XPathExpr
     */
    public function translateEnabled(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '('
                .'@href and ('
                    .\"name(.) = 'a'\"
                    .\" or name(.) = 'link'\"
                    .\" or name(.) = 'area'\"
                .')'
            .') or ('
                .'('
                    .\"name(.) = 'command'\"
                    .\" or name(.) = 'fieldset'\"
                    .\" or name(.) = 'optgroup'\"
                .')'
                .' and not(@disabled)'
            .') or ('
                .'('
                    .\"(name(.) = 'input' and @type != 'hidden')\"
                    .\" or name(.) = 'button'\"
                    .\" or name(.) = 'select'\"
                    .\" or name(.) = 'textarea'\"
                    .\" or name(.) = 'keygen'\"
                .')'
                .' and not (@disabled or ancestor::fieldset[@disabled])'
            .') or ('
                .\"name(.) = 'option' and not(\"
                    .'@disabled or ancestor::optgroup[@disabled]'
                .')'
            .')'
        );
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateLang(XPathExpr \$xpath, FunctionNode \$function)
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :lang(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'ancestor-or-self::*[@lang][1][starts-with(concat('
            .\"translate(@%s, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), '-')\"
            .', %s)]',
            'lang',
            Translator::getXpathLiteral(strtolower(\$arguments[0]->getValue()).'-')
        ));
    }

    /**
     * @return XPathExpr
     */
    public function translateSelected(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(\"(@selected and name(.) = 'option')\");
    }

    /**
     * @return XPathExpr
     */
    public function translateInvalid(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * @return XPathExpr
     */
    public function translateHover(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * @return XPathExpr
     */
    public function translateVisited(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'html';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php";
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
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator HTML extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class HtmlExtension extends AbstractExtension
{
    public function __construct(Translator \$translator)
    {
        \$translator
            ->getExtension('node')
            ->setFlag(NodeExtension::ELEMENT_NAME_IN_LOWER_CASE, true)
            ->setFlag(NodeExtension::ATTRIBUTE_NAME_IN_LOWER_CASE, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getPseudoClassTranslators()
    {
        return [
            'checked' => [\$this, 'translateChecked'],
            'link' => [\$this, 'translateLink'],
            'disabled' => [\$this, 'translateDisabled'],
            'enabled' => [\$this, 'translateEnabled'],
            'selected' => [\$this, 'translateSelected'],
            'invalid' => [\$this, 'translateInvalid'],
            'hover' => [\$this, 'translateHover'],
            'visited' => [\$this, 'translateVisited'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctionTranslators()
    {
        return [
            'lang' => [\$this, 'translateLang'],
        ];
    }

    /**
     * @return XPathExpr
     */
    public function translateChecked(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '(@checked '
            .\"and (name(.) = 'input' or name(.) = 'command')\"
            .\"and (@type = 'checkbox' or @type = 'radio'))\"
        );
    }

    /**
     * @return XPathExpr
     */
    public function translateLink(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(\"@href and (name(.) = 'a' or name(.) = 'link' or name(.) = 'area')\");
    }

    /**
     * @return XPathExpr
     */
    public function translateDisabled(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '('
                .'@disabled and'
                .'('
                    .\"(name(.) = 'input' and @type != 'hidden')\"
                    .\" or name(.) = 'button'\"
                    .\" or name(.) = 'select'\"
                    .\" or name(.) = 'textarea'\"
                    .\" or name(.) = 'command'\"
                    .\" or name(.) = 'fieldset'\"
                    .\" or name(.) = 'optgroup'\"
                    .\" or name(.) = 'option'\"
                .')'
            .') or ('
                .\"(name(.) = 'input' and @type != 'hidden')\"
                .\" or name(.) = 'button'\"
                .\" or name(.) = 'select'\"
                .\" or name(.) = 'textarea'\"
            .')'
            .' and ancestor::fieldset[@disabled]'
        );
        // todo: in the second half, add \"and is not a descendant of that fieldset element's first legend element child, if any.\"
    }

    /**
     * @return XPathExpr
     */
    public function translateEnabled(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(
            '('
                .'@href and ('
                    .\"name(.) = 'a'\"
                    .\" or name(.) = 'link'\"
                    .\" or name(.) = 'area'\"
                .')'
            .') or ('
                .'('
                    .\"name(.) = 'command'\"
                    .\" or name(.) = 'fieldset'\"
                    .\" or name(.) = 'optgroup'\"
                .')'
                .' and not(@disabled)'
            .') or ('
                .'('
                    .\"(name(.) = 'input' and @type != 'hidden')\"
                    .\" or name(.) = 'button'\"
                    .\" or name(.) = 'select'\"
                    .\" or name(.) = 'textarea'\"
                    .\" or name(.) = 'keygen'\"
                .')'
                .' and not (@disabled or ancestor::fieldset[@disabled])'
            .') or ('
                .\"name(.) = 'option' and not(\"
                    .'@disabled or ancestor::optgroup[@disabled]'
                .')'
            .')'
        );
    }

    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateLang(XPathExpr \$xpath, FunctionNode \$function)
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :lang(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'ancestor-or-self::*[@lang][1][starts-with(concat('
            .\"translate(@%s, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), '-')\"
            .', %s)]',
            'lang',
            Translator::getXpathLiteral(strtolower(\$arguments[0]->getValue()).'-')
        ));
    }

    /**
     * @return XPathExpr
     */
    public function translateSelected(XPathExpr \$xpath)
    {
        return \$xpath->addCondition(\"(@selected and name(.) = 'option')\");
    }

    /**
     * @return XPathExpr
     */
    public function translateInvalid(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * @return XPathExpr
     */
    public function translateHover(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * @return XPathExpr
     */
    public function translateVisited(XPathExpr \$xpath)
    {
        return \$xpath->addCondition('0');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'html';
    }
}
", "vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php");
    }
}
