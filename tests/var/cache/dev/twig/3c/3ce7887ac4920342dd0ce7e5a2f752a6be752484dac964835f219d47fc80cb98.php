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

/* vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php */
class __TwigTemplate_3572b4e4edb149c30468e11859359a6a6e28639b8013cf564a6421dd5a13b0a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests\\Node;

use Symfony\\Component\\CssSelector\\Node\\AttributeNode;
use Symfony\\Component\\CssSelector\\Node\\ElementNode;

class AttributeNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new AttributeNode(new ElementNode(), null, 'attribute', 'exists', null), 'Attribute[Element[*][attribute]]'],
            [new AttributeNode(new ElementNode(), null, 'attribute', '\$=', 'value'), \"Attribute[Element[*][attribute \$= 'value']]\"],
            [new AttributeNode(new ElementNode(), 'namespace', 'attribute', '\$=', 'value'), \"Attribute[Element[*][namespace|attribute \$= 'value']]\"],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new AttributeNode(new ElementNode(), null, 'attribute', 'exists', null), 10],
            [new AttributeNode(new ElementNode(null, 'element'), null, 'attribute', 'exists', null), 11],
            [new AttributeNode(new ElementNode(), null, 'attribute', '\$=', 'value'), 10],
            [new AttributeNode(new ElementNode(), 'namespace', 'attribute', '\$=', 'value'), 10],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests\\Node;

use Symfony\\Component\\CssSelector\\Node\\AttributeNode;
use Symfony\\Component\\CssSelector\\Node\\ElementNode;

class AttributeNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new AttributeNode(new ElementNode(), null, 'attribute', 'exists', null), 'Attribute[Element[*][attribute]]'],
            [new AttributeNode(new ElementNode(), null, 'attribute', '\$=', 'value'), \"Attribute[Element[*][attribute \$= 'value']]\"],
            [new AttributeNode(new ElementNode(), 'namespace', 'attribute', '\$=', 'value'), \"Attribute[Element[*][namespace|attribute \$= 'value']]\"],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new AttributeNode(new ElementNode(), null, 'attribute', 'exists', null), 10],
            [new AttributeNode(new ElementNode(null, 'element'), null, 'attribute', 'exists', null), 11],
            [new AttributeNode(new ElementNode(), null, 'attribute', '\$=', 'value'), 10],
            [new AttributeNode(new ElementNode(), 'namespace', 'attribute', '\$=', 'value'), 10],
        ];
    }
}
", "vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Node/AttributeNodeTest.php");
    }
}
