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

/* vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php */
class __TwigTemplate_5554c0fc2365dce6e53d48577096ca037fe0f2d9ad6355943d17529affc96bb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class AuthenticatedVoterTest extends TestCase
{
    /**
     * @dataProvider getVoteTests
     */
    public function testVote(\$authenticated, \$attributes, \$expected)
    {
        \$voter = new AuthenticatedVoter(new AuthenticationTrustResolver());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$authenticated), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            ['fully', [], VoterInterface::ACCESS_ABSTAIN],
            ['fully', ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            ['remembered', [], VoterInterface::ACCESS_ABSTAIN],
            ['remembered', ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            ['anonymously', [], VoterInterface::ACCESS_ABSTAIN],
            ['anonymously', ['FOO'], VoterInterface::ACCESS_ABSTAIN],

            ['fully', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],
            ['anonymously', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],

            ['fully', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_GRANTED],
            ['anonymously', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_DENIED],

            ['fully', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_DENIED],
            ['anonymously', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_DENIED],
        ];
    }

    protected function getToken(\$authenticated)
    {
        if ('fully' === \$authenticated) {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        } elseif ('remembered' === \$authenticated) {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')->setMethods(['setPersistent'])->disableOriginalConstructor()->getMock();
        } else {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken')->setConstructorArgs(['', ''])->getMock();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class AuthenticatedVoterTest extends TestCase
{
    /**
     * @dataProvider getVoteTests
     */
    public function testVote(\$authenticated, \$attributes, \$expected)
    {
        \$voter = new AuthenticatedVoter(new AuthenticationTrustResolver());

        \$this->assertSame(\$expected, \$voter->vote(\$this->getToken(\$authenticated), null, \$attributes));
    }

    public function getVoteTests()
    {
        return [
            ['fully', [], VoterInterface::ACCESS_ABSTAIN],
            ['fully', ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            ['remembered', [], VoterInterface::ACCESS_ABSTAIN],
            ['remembered', ['FOO'], VoterInterface::ACCESS_ABSTAIN],
            ['anonymously', [], VoterInterface::ACCESS_ABSTAIN],
            ['anonymously', ['FOO'], VoterInterface::ACCESS_ABSTAIN],

            ['fully', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],
            ['anonymously', ['IS_AUTHENTICATED_ANONYMOUSLY'], VoterInterface::ACCESS_GRANTED],

            ['fully', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_GRANTED],
            ['anonymously', ['IS_AUTHENTICATED_REMEMBERED'], VoterInterface::ACCESS_DENIED],

            ['fully', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_GRANTED],
            ['remembered', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_DENIED],
            ['anonymously', ['IS_AUTHENTICATED_FULLY'], VoterInterface::ACCESS_DENIED],
        ];
    }

    protected function getToken(\$authenticated)
    {
        if ('fully' === \$authenticated) {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        } elseif ('remembered' === \$authenticated) {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')->setMethods(['setPersistent'])->disableOriginalConstructor()->getMock();
        } else {
            return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken')->setConstructorArgs(['', ''])->getMock();
        }
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/AuthenticatedVoterTest.php");
    }
}
