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

/* vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php */
class __TwigTemplate_debd00c65dbb8824b2e7bf41bc38b11a49b47ff0135bda59a9e2b5b837281d0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php"));

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
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationDefaultDomainNodeVisitor;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;

class TranslationDefaultDomainNodeVisitorTest extends TestCase
{
    private static \$message = 'message';
    private static \$domain = 'domain';

    /** @dataProvider getDefaultDomainAssignmentTestData */
    public function testDefaultDomainAssignment(Node \$node)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationDefaultDomainNodeVisitor();

        // visit trans_default_domain tag
        \$defaultDomain = TwigNodeProvider::getTransDefaultDomainTag(self::\$domain);
        \$visitor->enterNode(\$defaultDomain, \$env);
        \$visitor->leaveNode(\$defaultDomain, \$env);

        // visit tested node
        \$enteredNode = \$visitor->enterNode(\$node, \$env);
        \$leavedNode = \$visitor->leaveNode(\$node, \$env);
        \$this->assertSame(\$node, \$enteredNode);
        \$this->assertSame(\$node, \$leavedNode);

        // extracting tested node messages
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);

        \$this->assertEquals([[self::\$message, self::\$domain]], \$visitor->getMessages());
    }

    /** @dataProvider getDefaultDomainAssignmentTestData */
    public function testNewModuleWithoutDefaultDomainTag(Node \$node)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationDefaultDomainNodeVisitor();

        // visit trans_default_domain tag
        \$newModule = TwigNodeProvider::getModule('test');
        \$visitor->enterNode(\$newModule, \$env);
        \$visitor->leaveNode(\$newModule, \$env);

        // visit tested node
        \$enteredNode = \$visitor->enterNode(\$node, \$env);
        \$leavedNode = \$visitor->leaveNode(\$node, \$env);
        \$this->assertSame(\$node, \$enteredNode);
        \$this->assertSame(\$node, \$leavedNode);

        // extracting tested node messages
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);

        \$this->assertEquals([[self::\$message, null]], \$visitor->getMessages());
    }

    public function getDefaultDomainAssignmentTestData()
    {
        return [
            [TwigNodeProvider::getTransFilter(self::\$message)],
            [TwigNodeProvider::getTransChoiceFilter(self::\$message)],
            [TwigNodeProvider::getTransTag(self::\$message)],
            // with named arguments
            [TwigNodeProvider::getTransFilter(self::\$message, null, [
                'arguments' => new ArrayExpression([], 0),
            ])],
            [TwigNodeProvider::getTransChoiceFilter(self::\$message), null, [
                'arguments' => new ArrayExpression([], 0),
            ]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php";
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
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationDefaultDomainNodeVisitor;
use Symfony\\Bridge\\Twig\\NodeVisitor\\TranslationNodeVisitor;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;

class TranslationDefaultDomainNodeVisitorTest extends TestCase
{
    private static \$message = 'message';
    private static \$domain = 'domain';

    /** @dataProvider getDefaultDomainAssignmentTestData */
    public function testDefaultDomainAssignment(Node \$node)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationDefaultDomainNodeVisitor();

        // visit trans_default_domain tag
        \$defaultDomain = TwigNodeProvider::getTransDefaultDomainTag(self::\$domain);
        \$visitor->enterNode(\$defaultDomain, \$env);
        \$visitor->leaveNode(\$defaultDomain, \$env);

        // visit tested node
        \$enteredNode = \$visitor->enterNode(\$node, \$env);
        \$leavedNode = \$visitor->leaveNode(\$node, \$env);
        \$this->assertSame(\$node, \$enteredNode);
        \$this->assertSame(\$node, \$leavedNode);

        // extracting tested node messages
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);

        \$this->assertEquals([[self::\$message, self::\$domain]], \$visitor->getMessages());
    }

    /** @dataProvider getDefaultDomainAssignmentTestData */
    public function testNewModuleWithoutDefaultDomainTag(Node \$node)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$visitor = new TranslationDefaultDomainNodeVisitor();

        // visit trans_default_domain tag
        \$newModule = TwigNodeProvider::getModule('test');
        \$visitor->enterNode(\$newModule, \$env);
        \$visitor->leaveNode(\$newModule, \$env);

        // visit tested node
        \$enteredNode = \$visitor->enterNode(\$node, \$env);
        \$leavedNode = \$visitor->leaveNode(\$node, \$env);
        \$this->assertSame(\$node, \$enteredNode);
        \$this->assertSame(\$node, \$leavedNode);

        // extracting tested node messages
        \$visitor = new TranslationNodeVisitor();
        \$visitor->enable();
        \$visitor->enterNode(\$node, \$env);
        \$visitor->leaveNode(\$node, \$env);

        \$this->assertEquals([[self::\$message, null]], \$visitor->getMessages());
    }

    public function getDefaultDomainAssignmentTestData()
    {
        return [
            [TwigNodeProvider::getTransFilter(self::\$message)],
            [TwigNodeProvider::getTransChoiceFilter(self::\$message)],
            [TwigNodeProvider::getTransTag(self::\$message)],
            // with named arguments
            [TwigNodeProvider::getTransFilter(self::\$message, null, [
                'arguments' => new ArrayExpression([], 0),
            ])],
            [TwigNodeProvider::getTransChoiceFilter(self::\$message), null, [
                'arguments' => new ArrayExpression([], 0),
            ]],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/NodeVisitor/TranslationDefaultDomainNodeVisitorTest.php");
    }
}
