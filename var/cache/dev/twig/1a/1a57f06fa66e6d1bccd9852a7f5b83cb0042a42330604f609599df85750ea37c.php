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

/* vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php */
class __TwigTemplate_cdf1e3a4dc17c90dc770b2ac3ee95b8aa8cf987d72a94495b5104a32556054c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php"));

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
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\Parser\\Parser;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator function extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class FunctionExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctionTranslators()
    {
        return [
            'nth-child' => [\$this, 'translateNthChild'],
            'nth-last-child' => [\$this, 'translateNthLastChild'],
            'nth-of-type' => [\$this, 'translateNthOfType'],
            'nth-last-of-type' => [\$this, 'translateNthLastOfType'],
            'contains' => [\$this, 'translateContains'],
            'lang' => [\$this, 'translateLang'],
        ];
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateNthChild(XPathExpr \$xpath, FunctionNode \$function, bool \$last = false, bool \$addNameTest = true): XPathExpr
    {
        try {
            list(\$a, \$b) = Parser::parseSeries(\$function->getArguments());
        } catch (SyntaxErrorException \$e) {
            throw new ExpressionErrorException(sprintf('Invalid series: %s', implode(', ', \$function->getArguments())), 0, \$e);
        }

        \$xpath->addStarPrefix();
        if (\$addNameTest) {
            \$xpath->addNameTest();
        }

        if (0 === \$a) {
            return \$xpath->addCondition('position() = '.(\$last ? 'last() - '.(\$b - 1) : \$b));
        }

        if (\$a < 0) {
            if (\$b < 1) {
                return \$xpath->addCondition('false()');
            }

            \$sign = '<=';
        } else {
            \$sign = '>=';
        }

        \$expr = 'position()';

        if (\$last) {
            \$expr = 'last() - '.\$expr;
            --\$b;
        }

        if (0 !== \$b) {
            \$expr .= ' - '.\$b;
        }

        \$conditions = [sprintf('%s %s 0', \$expr, \$sign)];

        if (1 !== \$a && -1 !== \$a) {
            \$conditions[] = sprintf('(%s) mod %d = 0', \$expr, \$a);
        }

        return \$xpath->addCondition(implode(' and ', \$conditions));

        // todo: handle an+b, odd, even
        // an+b means every-a, plus b, e.g., 2n+1 means odd
        // 0n+b means b
        // n+0 means a=1, i.e., all elements
        // an means every a elements, i.e., 2n means even
        // -n means -1n
        // -1n+6 means elements 6 and previous
    }

    public function translateNthLastChild(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        return \$this->translateNthChild(\$xpath, \$function, true);
    }

    public function translateNthOfType(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        return \$this->translateNthChild(\$xpath, \$function, false, false);
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateNthLastOfType(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:nth-of-type()\" is not implemented.');
        }

        return \$this->translateNthChild(\$xpath, \$function, true, false);
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateContains(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :contains(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'contains(string(.), %s)',
            Translator::getXpathLiteral(\$arguments[0]->getValue())
        ));
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateLang(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :lang(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'lang(%s)',
            Translator::getXpathLiteral(\$arguments[0]->getValue())
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'function';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php";
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
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Node\\FunctionNode;
use Symfony\\Component\\CssSelector\\Parser\\Parser;
use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator function extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class FunctionExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctionTranslators()
    {
        return [
            'nth-child' => [\$this, 'translateNthChild'],
            'nth-last-child' => [\$this, 'translateNthLastChild'],
            'nth-of-type' => [\$this, 'translateNthOfType'],
            'nth-last-of-type' => [\$this, 'translateNthLastOfType'],
            'contains' => [\$this, 'translateContains'],
            'lang' => [\$this, 'translateLang'],
        ];
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateNthChild(XPathExpr \$xpath, FunctionNode \$function, bool \$last = false, bool \$addNameTest = true): XPathExpr
    {
        try {
            list(\$a, \$b) = Parser::parseSeries(\$function->getArguments());
        } catch (SyntaxErrorException \$e) {
            throw new ExpressionErrorException(sprintf('Invalid series: %s', implode(', ', \$function->getArguments())), 0, \$e);
        }

        \$xpath->addStarPrefix();
        if (\$addNameTest) {
            \$xpath->addNameTest();
        }

        if (0 === \$a) {
            return \$xpath->addCondition('position() = '.(\$last ? 'last() - '.(\$b - 1) : \$b));
        }

        if (\$a < 0) {
            if (\$b < 1) {
                return \$xpath->addCondition('false()');
            }

            \$sign = '<=';
        } else {
            \$sign = '>=';
        }

        \$expr = 'position()';

        if (\$last) {
            \$expr = 'last() - '.\$expr;
            --\$b;
        }

        if (0 !== \$b) {
            \$expr .= ' - '.\$b;
        }

        \$conditions = [sprintf('%s %s 0', \$expr, \$sign)];

        if (1 !== \$a && -1 !== \$a) {
            \$conditions[] = sprintf('(%s) mod %d = 0', \$expr, \$a);
        }

        return \$xpath->addCondition(implode(' and ', \$conditions));

        // todo: handle an+b, odd, even
        // an+b means every-a, plus b, e.g., 2n+1 means odd
        // 0n+b means b
        // n+0 means a=1, i.e., all elements
        // an means every a elements, i.e., 2n means even
        // -n means -1n
        // -1n+6 means elements 6 and previous
    }

    public function translateNthLastChild(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        return \$this->translateNthChild(\$xpath, \$function, true);
    }

    public function translateNthOfType(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        return \$this->translateNthChild(\$xpath, \$function, false, false);
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateNthLastOfType(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        if ('*' === \$xpath->getElement()) {
            throw new ExpressionErrorException('\"*:nth-of-type()\" is not implemented.');
        }

        return \$this->translateNthChild(\$xpath, \$function, true, false);
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateContains(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :contains(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'contains(string(.), %s)',
            Translator::getXpathLiteral(\$arguments[0]->getValue())
        ));
    }

    /**
     * @throws ExpressionErrorException
     */
    public function translateLang(XPathExpr \$xpath, FunctionNode \$function): XPathExpr
    {
        \$arguments = \$function->getArguments();
        foreach (\$arguments as \$token) {
            if (!(\$token->isString() || \$token->isIdentifier())) {
                throw new ExpressionErrorException('Expected a single string or identifier for :lang(), got '.implode(', ', \$arguments));
            }
        }

        return \$xpath->addCondition(sprintf(
            'lang(%s)',
            Translator::getXpathLiteral(\$arguments[0]->getValue())
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'function';
    }
}
", "vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php");
    }
}
