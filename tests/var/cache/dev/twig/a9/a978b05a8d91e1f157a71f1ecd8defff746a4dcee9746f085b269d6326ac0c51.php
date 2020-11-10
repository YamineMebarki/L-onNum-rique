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

/* vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php */
class __TwigTemplate_41ddadb75a260c34a9c49c9645adcce864983ecc6f0830245fecd554ecf6e3a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php"));

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

use Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode;
use Symfony\\Component\\CssSelector\\Node\\ElementNode;

class CombinedSelectorNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new CombinedSelectorNode(new ElementNode(), '>', new ElementNode()), 'CombinedSelector[Element[*] > Element[*]]'],
            [new CombinedSelectorNode(new ElementNode(), ' ', new ElementNode()), 'CombinedSelector[Element[*] <followed> Element[*]]'],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new CombinedSelectorNode(new ElementNode(), '>', new ElementNode()), 0],
            [new CombinedSelectorNode(new ElementNode(null, 'element'), '>', new ElementNode()), 1],
            [new CombinedSelectorNode(new ElementNode(null, 'element'), '>', new ElementNode(null, 'element')), 2],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php";
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

use Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode;
use Symfony\\Component\\CssSelector\\Node\\ElementNode;

class CombinedSelectorNodeTest extends AbstractNodeTest
{
    public function getToStringConversionTestData()
    {
        return [
            [new CombinedSelectorNode(new ElementNode(), '>', new ElementNode()), 'CombinedSelector[Element[*] > Element[*]]'],
            [new CombinedSelectorNode(new ElementNode(), ' ', new ElementNode()), 'CombinedSelector[Element[*] <followed> Element[*]]'],
        ];
    }

    public function getSpecificityValueTestData()
    {
        return [
            [new CombinedSelectorNode(new ElementNode(), '>', new ElementNode()), 0],
            [new CombinedSelectorNode(new ElementNode(null, 'element'), '>', new ElementNode()), 1],
            [new CombinedSelectorNode(new ElementNode(null, 'element'), '>', new ElementNode(null, 'element')), 2],
        ];
    }
}
", "vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Node/CombinedSelectorNodeTest.php");
    }
}
