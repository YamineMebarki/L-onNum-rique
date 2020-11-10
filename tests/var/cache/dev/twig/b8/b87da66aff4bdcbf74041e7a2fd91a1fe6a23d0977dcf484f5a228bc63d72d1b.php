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

/* vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php */
class __TwigTemplate_de58cd02e2966cac1562a1723a0bdbe76f201a051268cf6e9f23e1a5fc029c79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;

class RoleVoterTest extends TestCase
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            [[], [], VoterInterface::ACCESS_ABSTAIN],
            [[], ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            [[], ['ROLE_FOO'], VoterInterface::ACCESS_DENIED],
            [['ROLE_FOO'], ['ROLE_FOO'], VoterInterface::ACCESS_GRANTED],
            [['ROLE_FOO'], ['FOO', 'ROLE_FOO'], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR', 'ROLE_FOO'], ['ROLE_FOO'], VoterInterface::ACCESS_GRANTED],

            // DevLaon mixed Types
            [[], [[]], VoterInterface::ACCESS_ABSTAIN],
            [[], [new \\stdClass()], VoterInterface::ACCESS_ABSTAIN],
        ];
    }

    /**
     * @group legacy
     * @dataProvider getLegacyVoteOnRoleObjectsTests
     */
    public function testVoteOnRoleObjects(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    public function getLegacyVoteOnRoleObjectsTests()
    {
        return [
            [['ROLE_BAR'], [new Role('ROLE_BAR')], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR'], [new Role('ROLE_FOO')], VoterInterface::ACCESS_DENIED],
        ];
    }

    protected function getToken(array \$roles)
    {
        foreach (\$roles as \$i => \$role) {
            \$roles[\$i] = new Role(\$role);
        }
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->once())
              ->method('getRoles')
              ->willReturn(\$roles);

        return \$token;
    }

    protected function getTokenWithRoleNames(array \$roles)
    {
        \$token = \$this->getMockBuilder(AbstractToken::class)->getMock();
        \$token->expects(\$this->once())
              ->method('getRoleNames')
              ->willReturn(\$roles);

        return \$token;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php";
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
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;

class RoleVoterTest extends TestCase
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            [[], [], VoterInterface::ACCESS_ABSTAIN],
            [[], ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            [[], ['ROLE_FOO'], VoterInterface::ACCESS_DENIED],
            [['ROLE_FOO'], ['ROLE_FOO'], VoterInterface::ACCESS_GRANTED],
            [['ROLE_FOO'], ['FOO', 'ROLE_FOO'], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR', 'ROLE_FOO'], ['ROLE_FOO'], VoterInterface::ACCESS_GRANTED],

            // DevLaon mixed Types
            [[], [[]], VoterInterface::ACCESS_ABSTAIN],
            [[], [new \\stdClass()], VoterInterface::ACCESS_ABSTAIN],
        ];
    }

    /**
     * @group legacy
     * @dataProvider getLegacyVoteOnRoleObjectsTests
     */
    public function testVoteOnRoleObjects(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleVoter();

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    public function getLegacyVoteOnRoleObjectsTests()
    {
        return [
            [['ROLE_BAR'], [new Role('ROLE_BAR')], VoterInterface::ACCESS_GRANTED],
            [['ROLE_BAR'], [new Role('ROLE_FOO')], VoterInterface::ACCESS_DENIED],
        ];
    }

    protected function getToken(array \$roles)
    {
        foreach (\$roles as \$i => \$role) {
            \$roles[\$i] = new Role(\$role);
        }
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->once())
              ->method('getRoles')
              ->willReturn(\$roles);

        return \$token;
    }

    protected function getTokenWithRoleNames(array \$roles)
    {
        \$token = \$this->getMockBuilder(AbstractToken::class)->getMock();
        \$token->expects(\$this->once())
              ->method('getRoleNames')
              ->willReturn(\$roles);

        return \$token;
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/RoleVoterTest.php");
    }
}
