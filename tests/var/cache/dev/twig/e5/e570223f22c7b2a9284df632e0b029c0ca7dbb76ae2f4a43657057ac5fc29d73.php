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

/* vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php */
class __TwigTemplate_0f2970c123f29b0c1e7065983a5b1570791ef6fff046d1d97368dc07a46c715b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization\\Voter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;

class ExpressionVoterTest extends TestCase
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected, \$tokenExpectsGetRoles = true, \$expressionLanguageExpectsEvaluate = true)
    {
        \$voter = new ExpressionVoter(\$this->createExpressionLanguage(\$expressionLanguageExpectsEvaluate), \$this->createTrustResolver(), \$this->createAuthorizationChecker());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles, \$tokenExpectsGetRoles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteWithTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected, \$tokenExpectsGetRoles = true, \$expressionLanguageExpectsEvaluate = true)
    {
        \$voter = new ExpressionVoter(\$this->createExpressionLanguage(\$expressionLanguageExpectsEvaluate), \$this->createTrustResolver(), \$this->createAuthorizationChecker());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles, \$tokenExpectsGetRoles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            [[], [], VoterInterface::ACCESS_ABSTAIN, false, false],
            [[], ['FOO'], VoterInterface::ACCESS_ABSTAIN, false, false],

            [[], [\$this->createExpression()], VoterInterface::ACCESS_DENIED, true, false],

            [['ROLE_FOO'], [\$this->createExpression(), \$this->createExpression()], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR', 'ROLE_FOO'], [\$this->createExpression()], VoterInterface::ACCESS_GRANTED],
        ];
    }

    protected function getToken(array \$roles, \$tokenExpectsGetRoles = true)
    {
        foreach (\$roles as \$i => \$role) {
            \$roles[\$i] = new Role(\$role);
        }
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        if (\$tokenExpectsGetRoles) {
            \$token->expects(\$this->once())
                ->method('getRoles')
                ->willReturn(\$roles);
        }

        return \$token;
    }

    protected function getTokenWithRoleNames(array \$roles, \$tokenExpectsGetRoles = true)
    {
        \$token = \$this->getMockBuilder(AbstractToken::class)->getMock();

        if (\$tokenExpectsGetRoles) {
            \$token->expects(\$this->once())
                ->method('getRoleNames')
                ->willReturn(\$roles);
        }

        return \$token;
    }

    protected function createExpressionLanguage(\$expressionLanguageExpectsEvaluate = true)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage')->getMock();

        if (\$expressionLanguageExpectsEvaluate) {
            \$mock->expects(\$this->once())
                ->method('evaluate')
                ->willReturn(true);
        }

        return \$mock;
    }

    protected function createTrustResolver()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock();
    }

    protected function createAuthorizationChecker()
    {
        return \$this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();
    }

    protected function createExpression()
    {
        return \$this->getMockBuilder('Symfony\\Component\\ExpressionLanguage\\Expression')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization\\Voter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;

class ExpressionVoterTest extends TestCase
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected, \$tokenExpectsGetRoles = true, \$expressionLanguageExpectsEvaluate = true)
    {
        \$voter = new ExpressionVoter(\$this->createExpressionLanguage(\$expressionLanguageExpectsEvaluate), \$this->createTrustResolver(), \$this->createAuthorizationChecker());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles, \$tokenExpectsGetRoles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteWithTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected, \$tokenExpectsGetRoles = true, \$expressionLanguageExpectsEvaluate = true)
    {
        \$voter = new ExpressionVoter(\$this->createExpressionLanguage(\$expressionLanguageExpectsEvaluate), \$this->createTrustResolver(), \$this->createAuthorizationChecker());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles, \$tokenExpectsGetRoles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            [[], [], VoterInterface::ACCESS_ABSTAIN, false, false],
            [[], ['FOO'], VoterInterface::ACCESS_ABSTAIN, false, false],

            [[], [\$this->createExpression()], VoterInterface::ACCESS_DENIED, true, false],

            [['ROLE_FOO'], [\$this->createExpression(), \$this->createExpression()], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR', 'ROLE_FOO'], [\$this->createExpression()], VoterInterface::ACCESS_GRANTED],
        ];
    }

    protected function getToken(array \$roles, \$tokenExpectsGetRoles = true)
    {
        foreach (\$roles as \$i => \$role) {
            \$roles[\$i] = new Role(\$role);
        }
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        if (\$tokenExpectsGetRoles) {
            \$token->expects(\$this->once())
                ->method('getRoles')
                ->willReturn(\$roles);
        }

        return \$token;
    }

    protected function getTokenWithRoleNames(array \$roles, \$tokenExpectsGetRoles = true)
    {
        \$token = \$this->getMockBuilder(AbstractToken::class)->getMock();

        if (\$tokenExpectsGetRoles) {
            \$token->expects(\$this->once())
                ->method('getRoleNames')
                ->willReturn(\$roles);
        }

        return \$token;
    }

    protected function createExpressionLanguage(\$expressionLanguageExpectsEvaluate = true)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage')->getMock();

        if (\$expressionLanguageExpectsEvaluate) {
            \$mock->expects(\$this->once())
                ->method('evaluate')
                ->willReturn(true);
        }

        return \$mock;
    }

    protected function createTrustResolver()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock();
    }

    protected function createAuthorizationChecker()
    {
        return \$this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();
    }

    protected function createExpression()
    {
        return \$this->getMockBuilder('Symfony\\Component\\ExpressionLanguage\\Expression')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/ExpressionVoterTest.php");
    }
}
