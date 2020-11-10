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

/* vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php */
class __TwigTemplate_7c0709406b4982e7ff721350163ae2154cc725502cbddbe3ea7320c7a5d4c5f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\NodeVisitor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class TranslationNodeVisitorTest extends TestCase
{
    /** @dataProvider getMessagesExtractionTestData */
    public function testMessagesExtraction(Node \$node, array \$expectedMessages)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);
        \$this->assertEquals(\$expectedMessages, \$visitor->getMessages());
    }

    public function testMessageExtractionWithInvalidDomainNode()
    {
        \$message = 'new key';

        \$node = new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('trans', 0),
            new Node([
                new ArrayExpression([], 0),
                new NameExpression('variable', 0),
            ]),
            0
        );

        \$this->testMessagesExtraction(\$node, [[\$message, TranslationNodeVisitor::UNDEFINED_DOMAIN]]);
    }

    public function getMessagesExtractionTestData()
    {
        \$message = 'new key';
        \$domain = 'domain';

        return [
            [TwigNodeProvider::getTransFilter(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransChoiceFilter(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransTag(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransFilter(\$message, \$domain), [[\$message, \$domain]]],
            [TwigNodeProvider::getTransChoiceFilter(\$message, \$domain), [[\$message, \$domain]]],
            [TwigNodeProvider::getTransTag(\$message, \$domain), [[\$message, \$domain]]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\NodeVisitor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class TranslationNodeVisitorTest extends TestCase
{
    /** @dataProvider getMessagesExtractionTestData */
    public function testMessagesExtraction(Node \$node, array \$expectedMessages)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);
        \$this->assertEquals(\$expectedMessages, \$visitor->getMessages());
    }

    public function testMessageExtractionWithInvalidDomainNode()
    {
        \$message = 'new key';

        \$node = new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('trans', 0),
            new Node([
                new ArrayExpression([], 0),
                new NameExpression('variable', 0),
            ]),
            0
        );

        \$this->testMessagesExtraction(\$node, [[\$message, TranslationNodeVisitor::UNDEFINED_DOMAIN]]);
    }

    public function getMessagesExtractionTestData()
    {
        \$message = 'new key';
        \$domain = 'domain';

        return [
            [TwigNodeProvider::getTransFilter(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransChoiceFilter(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransTag(\$message), [[\$message, null]]],
            [TwigNodeProvider::getTransFilter(\$message, \$domain), [[\$message, \$domain]]],
            [TwigNodeProvider::getTransChoiceFilter(\$message, \$domain), [[\$message, \$domain]]],
            [TwigNodeProvider::getTransTag(\$message, \$domain), [[\$message, \$domain]]],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationNodeVisitorTest.php");
    }
}
