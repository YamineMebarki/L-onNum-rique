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

/* vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php */
class __TwigTemplate_1c15e2c7a2be6695b8a07756aedcb6ac04b690c6dc91a69e8bdc71d905e0a512 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php"));

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

use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator attribute extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class AttributeMatchingExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getAttributeMatchingTranslators()
    {
        return [
            'exists' => [\$this, 'translateExists'],
            '=' => [\$this, 'translateEquals'],
            '~=' => [\$this, 'translateIncludes'],
            '|=' => [\$this, 'translateDashMatch'],
            '^=' => [\$this, 'translatePrefixMatch'],
            '\$=' => [\$this, 'translateSuffixMatch'],
            '*=' => [\$this, 'translateSubstringMatch'],
            '!=' => [\$this, 'translateDifferent'],
        ];
    }

    public function translateExists(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$attribute);
    }

    public function translateEquals(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf('%s = %s', \$attribute, Translator::getXpathLiteral(\$value)));
    }

    public function translateIncludes(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and contains(concat(\\' \\', normalize-space(%1\$s), \\' \\'), %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(' '.\$value.' ')
        ) : '0');
    }

    public function translateDashMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf(
            '%1\$s and (%1\$s = %2\$s or starts-with(%1\$s, %3\$s))',
            \$attribute,
            Translator::getXpathLiteral(\$value),
            Translator::getXpathLiteral(\$value.'-')
        ));
    }

    public function translatePrefixMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and starts-with(%1\$s, %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateSuffixMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and substring(%1\$s, string-length(%1\$s)-%2\$s) = %3\$s',
            \$attribute,
            \\strlen(\$value) - 1,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateSubstringMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and contains(%1\$s, %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateDifferent(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf(
            \$value ? 'not(%1\$s) or %1\$s != %2\$s' : '%s != %s',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'attribute-matching';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php";
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

use Symfony\\Component\\CssSelector\\XPath\\Translator;
use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator attribute extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class AttributeMatchingExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getAttributeMatchingTranslators()
    {
        return [
            'exists' => [\$this, 'translateExists'],
            '=' => [\$this, 'translateEquals'],
            '~=' => [\$this, 'translateIncludes'],
            '|=' => [\$this, 'translateDashMatch'],
            '^=' => [\$this, 'translatePrefixMatch'],
            '\$=' => [\$this, 'translateSuffixMatch'],
            '*=' => [\$this, 'translateSubstringMatch'],
            '!=' => [\$this, 'translateDifferent'],
        ];
    }

    public function translateExists(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$attribute);
    }

    public function translateEquals(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf('%s = %s', \$attribute, Translator::getXpathLiteral(\$value)));
    }

    public function translateIncludes(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and contains(concat(\\' \\', normalize-space(%1\$s), \\' \\'), %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(' '.\$value.' ')
        ) : '0');
    }

    public function translateDashMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf(
            '%1\$s and (%1\$s = %2\$s or starts-with(%1\$s, %3\$s))',
            \$attribute,
            Translator::getXpathLiteral(\$value),
            Translator::getXpathLiteral(\$value.'-')
        ));
    }

    public function translatePrefixMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and starts-with(%1\$s, %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateSuffixMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and substring(%1\$s, string-length(%1\$s)-%2\$s) = %3\$s',
            \$attribute,
            \\strlen(\$value) - 1,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateSubstringMatch(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(\$value ? sprintf(
            '%1\$s and contains(%1\$s, %2\$s)',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ) : '0');
    }

    public function translateDifferent(XPathExpr \$xpath, string \$attribute, ?string \$value): XPathExpr
    {
        return \$xpath->addCondition(sprintf(
            \$value ? 'not(%1\$s) or %1\$s != %2\$s' : '%s != %s',
            \$attribute,
            Translator::getXpathLiteral(\$value)
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'attribute-matching';
    }
}
", "vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php");
    }
}
