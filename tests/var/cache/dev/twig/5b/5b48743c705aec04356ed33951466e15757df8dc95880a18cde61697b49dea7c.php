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

/* vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php */
class __TwigTemplate_4a2e626a59dfc42e9ea4f0b443ed900042d82001077873ebeb4b6a8d3609fe2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class AccessDecisionManagerTest extends TestCase
{
    public function testSetUnsupportedStrategy()
    {
        \$this->expectException('InvalidArgumentException');
        new AccessDecisionManager([\$this->getVoter(VoterInterface::ACCESS_GRANTED)], 'fooBar');
    }

    /**
     * @dataProvider getStrategyTests
     */
    public function testStrategies(\$strategy, \$voters, \$allowIfAllAbstainDecisions, \$allowIfEqualGrantedDeniedDecisions, \$expected)
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$manager = new AccessDecisionManager(\$voters, \$strategy, \$allowIfAllAbstainDecisions, \$allowIfEqualGrantedDeniedDecisions);

        \$this->assertSame(\$expected, \$manager->decide(\$token, ['ROLE_FOO']));
    }

    /**
     * @dataProvider getStrategiesWith2RolesTests
     */
    public function testStrategiesWith2Roles(\$token, \$strategy, \$voter, \$expected)
    {
        \$manager = new AccessDecisionManager([\$voter], \$strategy);

        \$this->assertSame(\$expected, \$manager->decide(\$token, ['ROLE_FOO', 'ROLE_BAR']));
    }

    public function getStrategiesWith2RolesTests()
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        return [
            [\$token, 'affirmative', \$this->getVoter(VoterInterface::ACCESS_DENIED), false],
            [\$token, 'affirmative', \$this->getVoter(VoterInterface::ACCESS_GRANTED), true],

            [\$token, 'consensus', \$this->getVoter(VoterInterface::ACCESS_DENIED), false],
            [\$token, 'consensus', \$this->getVoter(VoterInterface::ACCESS_GRANTED), true],

            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_DENIED, VoterInterface::ACCESS_DENIED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_DENIED, VoterInterface::ACCESS_GRANTED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_GRANTED, VoterInterface::ACCESS_DENIED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_GRANTED, VoterInterface::ACCESS_GRANTED), true],
        ];
    }

    protected function getVoterFor2Roles(\$token, \$vote1, \$vote2)
    {
        \$voter = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface')->getMock();
        \$voter->expects(\$this->any())
              ->method('vote')
              ->willReturnMap([
                  [\$token, null, ['ROLE_FOO'], \$vote1],
                  [\$token, null, ['ROLE_BAR'], \$vote2],
              ])
        ;

        return \$voter;
    }

    public function getStrategyTests()
    {
        return [
            // affirmative
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(1, 2, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 1, 0), false, true, false],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 0, 1), false, true, false],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 0, 1), true, true, true],

            // consensus
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(1, 2, 0), false, true, false],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 1, 0), false, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(0, 0, 1), false, true, false],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(0, 0, 1), true, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 1), false, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 0), false, false, false],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 1), false, false, false],

            // unanimous
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 0, 1), false, true, true],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 1, 0), false, true, false],

            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(0, 0, 2), false, true, false],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(0, 0, 2), true, true, true],
        ];
    }

    protected function getVoters(\$grants, \$denies, \$abstains)
    {
        \$voters = [];
        for (\$i = 0; \$i < \$grants; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_GRANTED);
        }
        for (\$i = 0; \$i < \$denies; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_DENIED);
        }
        for (\$i = 0; \$i < \$abstains; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_ABSTAIN);
        }

        return \$voters;
    }

    protected function getVoter(\$vote)
    {
        \$voter = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface')->getMock();
        \$voter->expects(\$this->any())
              ->method('vote')
              ->willReturn(\$vote);

        return \$voter;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class AccessDecisionManagerTest extends TestCase
{
    public function testSetUnsupportedStrategy()
    {
        \$this->expectException('InvalidArgumentException');
        new AccessDecisionManager([\$this->getVoter(VoterInterface::ACCESS_GRANTED)], 'fooBar');
    }

    /**
     * @dataProvider getStrategyTests
     */
    public function testStrategies(\$strategy, \$voters, \$allowIfAllAbstainDecisions, \$allowIfEqualGrantedDeniedDecisions, \$expected)
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$manager = new AccessDecisionManager(\$voters, \$strategy, \$allowIfAllAbstainDecisions, \$allowIfEqualGrantedDeniedDecisions);

        \$this->assertSame(\$expected, \$manager->decide(\$token, ['ROLE_FOO']));
    }

    /**
     * @dataProvider getStrategiesWith2RolesTests
     */
    public function testStrategiesWith2Roles(\$token, \$strategy, \$voter, \$expected)
    {
        \$manager = new AccessDecisionManager([\$voter], \$strategy);

        \$this->assertSame(\$expected, \$manager->decide(\$token, ['ROLE_FOO', 'ROLE_BAR']));
    }

    public function getStrategiesWith2RolesTests()
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        return [
            [\$token, 'affirmative', \$this->getVoter(VoterInterface::ACCESS_DENIED), false],
            [\$token, 'affirmative', \$this->getVoter(VoterInterface::ACCESS_GRANTED), true],

            [\$token, 'consensus', \$this->getVoter(VoterInterface::ACCESS_DENIED), false],
            [\$token, 'consensus', \$this->getVoter(VoterInterface::ACCESS_GRANTED), true],

            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_DENIED, VoterInterface::ACCESS_DENIED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_DENIED, VoterInterface::ACCESS_GRANTED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_GRANTED, VoterInterface::ACCESS_DENIED), false],
            [\$token, 'unanimous', \$this->getVoterFor2Roles(\$token, VoterInterface::ACCESS_GRANTED, VoterInterface::ACCESS_GRANTED), true],
        ];
    }

    protected function getVoterFor2Roles(\$token, \$vote1, \$vote2)
    {
        \$voter = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface')->getMock();
        \$voter->expects(\$this->any())
              ->method('vote')
              ->willReturnMap([
                  [\$token, null, ['ROLE_FOO'], \$vote1],
                  [\$token, null, ['ROLE_BAR'], \$vote2],
              ])
        ;

        return \$voter;
    }

    public function getStrategyTests()
    {
        return [
            // affirmative
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(1, 2, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 1, 0), false, true, false],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 0, 1), false, true, false],
            [AccessDecisionManager::STRATEGY_AFFIRMATIVE, \$this->getVoters(0, 0, 1), true, true, true],

            // consensus
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(1, 2, 0), false, true, false],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 1, 0), false, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(0, 0, 1), false, true, false],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(0, 0, 1), true, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 1), false, true, true],

            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 0), false, false, false],
            [AccessDecisionManager::STRATEGY_CONSENSUS, \$this->getVoters(2, 2, 1), false, false, false],

            // unanimous
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 0, 0), false, true, true],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 0, 1), false, true, true],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(1, 1, 0), false, true, false],

            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(0, 0, 2), false, true, false],
            [AccessDecisionManager::STRATEGY_UNANIMOUS, \$this->getVoters(0, 0, 2), true, true, true],
        ];
    }

    protected function getVoters(\$grants, \$denies, \$abstains)
    {
        \$voters = [];
        for (\$i = 0; \$i < \$grants; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_GRANTED);
        }
        for (\$i = 0; \$i < \$denies; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_DENIED);
        }
        for (\$i = 0; \$i < \$abstains; ++\$i) {
            \$voters[] = \$this->getVoter(VoterInterface::ACCESS_ABSTAIN);
        }

        return \$voters;
    }

    protected function getVoter(\$vote)
    {
        \$voter = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface')->getMock();
        \$voter->expects(\$this->any())
              ->method('vote')
              ->willReturn(\$vote);

        return \$voter;
    }
}
", "vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/AccessDecisionManagerTest.php");
    }
}
