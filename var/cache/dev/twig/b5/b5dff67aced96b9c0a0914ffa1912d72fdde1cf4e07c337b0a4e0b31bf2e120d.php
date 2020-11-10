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

/* vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php */
class __TwigTemplate_3db60e62aba59b4ef9a8ec8f41a1277dc7d21f4c4982bb95c9b63106bec04537 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php"));

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

use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator combination extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class CombinationExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getCombinationTranslators(): array
    {
        return [
            ' ' => [\$this, 'translateDescendant'],
            '>' => [\$this, 'translateChild'],
            '+' => [\$this, 'translateDirectAdjacent'],
            '~' => [\$this, 'translateIndirectAdjacent'],
        ];
    }

    public function translateDescendant(XPathExpr \$xpath, XPathExpr \$combinedXpath): XPathExpr
    {
        return \$xpath->join('/descendant-or-self::*/', \$combinedXpath);
    }

    /**
     * @return XPathExpr
     */
    public function translateChild(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath->join('/', \$combinedXpath);
    }

    /**
     * @return XPathExpr
     */
    public function translateDirectAdjacent(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath
            ->join('/following-sibling::', \$combinedXpath)
            ->addNameTest()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     */
    public function translateIndirectAdjacent(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath->join('/following-sibling::', \$combinedXpath);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'combination';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php";
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

use Symfony\\Component\\CssSelector\\XPath\\XPathExpr;

/**
 * XPath expression translator combination extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class CombinationExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getCombinationTranslators(): array
    {
        return [
            ' ' => [\$this, 'translateDescendant'],
            '>' => [\$this, 'translateChild'],
            '+' => [\$this, 'translateDirectAdjacent'],
            '~' => [\$this, 'translateIndirectAdjacent'],
        ];
    }

    public function translateDescendant(XPathExpr \$xpath, XPathExpr \$combinedXpath): XPathExpr
    {
        return \$xpath->join('/descendant-or-self::*/', \$combinedXpath);
    }

    /**
     * @return XPathExpr
     */
    public function translateChild(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath->join('/', \$combinedXpath);
    }

    /**
     * @return XPathExpr
     */
    public function translateDirectAdjacent(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath
            ->join('/following-sibling::', \$combinedXpath)
            ->addNameTest()
            ->addCondition('position() = 1');
    }

    /**
     * @return XPathExpr
     */
    public function translateIndirectAdjacent(XPathExpr \$xpath, XPathExpr \$combinedXpath)
    {
        return \$xpath->join('/following-sibling::', \$combinedXpath);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'combination';
    }
}
", "vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php");
    }
}
