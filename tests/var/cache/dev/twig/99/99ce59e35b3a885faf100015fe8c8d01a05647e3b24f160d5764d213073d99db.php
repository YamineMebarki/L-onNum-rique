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

/* vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php */
class __TwigTemplate_80386f9948d9529924f15e5f892fc2ac95a7ad79f009a4133e7e7674aff507dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php"));

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

use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;

class RoleHierarchyVoterTest extends RoleVoterTest
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return array_merge(parent::getVoteTests(), [
            [['ROLE_FOO'], ['ROLE_FOOBAR'], VoterInterface::ACCESS_GRANTED],
        ]);
    }

    /**
     * @group legacy
     * @dataProvider getLegacyVoteOnRoleObjectsTests
     */
    public function testVoteOnRoleObjects(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @group legacy
     * @dataProvider getVoteWithEmptyHierarchyTests
     */
    public function testVoteWithEmptyHierarchy(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy([]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteWithEmptyHierarchyTests
     */
    public function testVoteWithEmptyHierarchyUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy([]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteWithEmptyHierarchyTests()
    {
        return parent::getVoteTests();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php";
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

use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;

class RoleHierarchyVoterTest extends RoleVoterTest
{
    /**
     * @group legacy
     * @dataProvider getVoteTests
     */
    public function testVote(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteTests
     */
    public function testVoteUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteTests()
    {
        return array_merge(parent::getVoteTests(), [
            [['ROLE_FOO'], ['ROLE_FOOBAR'], VoterInterface::ACCESS_GRANTED],
        ]);
    }

    /**
     * @group legacy
     * @dataProvider getLegacyVoteOnRoleObjectsTests
     */
    public function testVoteOnRoleObjects(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy(['ROLE_FOO' => ['ROLE_FOOBAR']]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @group legacy
     * @dataProvider getVoteWithEmptyHierarchyTests
     */
    public function testVoteWithEmptyHierarchy(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy([]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$roles), null, \$attributes));
    }

    /**
     * @dataProvider getVoteWithEmptyHierarchyTests
     */
    public function testVoteWithEmptyHierarchyUsingTokenThatReturnsRoleNames(\$roles, \$attributes, \$expected)
    {
        \$voter = new RoleHierarchyVoter(new RoleHierarchy([]));

        \$this->assertSame(\$expected, \$voter->vote(\$this->getTokenWithRoleNames(\$roles), null, \$attributes));
    }

    public function getVoteWithEmptyHierarchyTests()
    {
        return parent::getVoteTests();
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/RoleHierarchyVoterTest.php");
    }
}
