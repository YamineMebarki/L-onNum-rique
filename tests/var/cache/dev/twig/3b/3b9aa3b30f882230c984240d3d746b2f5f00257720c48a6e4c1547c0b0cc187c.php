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

/* vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php */
class __TwigTemplate_934c94c18f2dfaa89802f13efeadc41d152088986300c8f093e4a10dd9ab9f1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser\\Shortcut;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Node\\SelectorNode;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class EmptyStringParserTest extends TestCase
{
    public function testParse()
    {
        \$parser = new EmptyStringParser();
        \$selectors = \$parser->parse('');
        \$this->assertCount(1, \$selectors);

        /** @var SelectorNode \$selector */
        \$selector = \$selectors[0];
        \$this->assertEquals('Element[*]', (string) \$selector->getTree());

        \$selectors = \$parser->parse('this will produce an empty array');
        \$this->assertCount(0, \$selectors);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser\\Shortcut;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Node\\SelectorNode;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class EmptyStringParserTest extends TestCase
{
    public function testParse()
    {
        \$parser = new EmptyStringParser();
        \$selectors = \$parser->parse('');
        \$this->assertCount(1, \$selectors);

        /** @var SelectorNode \$selector */
        \$selector = \$selectors[0];
        \$this->assertEquals('Element[*]', (string) \$selector->getTree());

        \$selectors = \$parser->parse('this will produce an empty array');
        \$this->assertCount(0, \$selectors);
    }
}
", "vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Parser/Shortcut/EmptyStringParserTest.php");
    }
}
