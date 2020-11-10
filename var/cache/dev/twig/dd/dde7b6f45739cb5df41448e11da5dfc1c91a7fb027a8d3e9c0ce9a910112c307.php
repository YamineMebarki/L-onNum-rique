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

/* vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php */
class __TwigTemplate_eab941a930169c22267f157a9f318ba519fb4b453efc5308b58c703cb44c8107 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class TraceableVoterTest extends TestCase
{
    public function testGetDecoratedVoterClass()
    {
        \$voter = \$this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        \$sut = new TraceableVoter(\$voter, \$this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass());
        \$this->assertSame(\$voter, \$sut->getDecoratedVoter());
    }

    public function testVote()
    {
        \$voter = \$this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        \$eventDispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMockForAbstractClass();

        \$voter
            ->expects(\$this->once())
            ->method('vote')
            ->with(\$token, 'anysubject', ['attr1'])
            ->willReturn(VoterInterface::ACCESS_DENIED);

        \$eventDispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(new VoteEvent(\$voter, 'anysubject', ['attr1'], VoterInterface::ACCESS_DENIED), 'debug.security.authorization.vote');

        \$sut = new TraceableVoter(\$voter, \$eventDispatcher);
        \$result = \$sut->vote(\$token, 'anysubject', ['attr1']);

        \$this->assertSame(VoterInterface::ACCESS_DENIED, \$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class TraceableVoterTest extends TestCase
{
    public function testGetDecoratedVoterClass()
    {
        \$voter = \$this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        \$sut = new TraceableVoter(\$voter, \$this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass());
        \$this->assertSame(\$voter, \$sut->getDecoratedVoter());
    }

    public function testVote()
    {
        \$voter = \$this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        \$eventDispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMockForAbstractClass();

        \$voter
            ->expects(\$this->once())
            ->method('vote')
            ->with(\$token, 'anysubject', ['attr1'])
            ->willReturn(VoterInterface::ACCESS_DENIED);

        \$eventDispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(new VoteEvent(\$voter, 'anysubject', ['attr1'], VoterInterface::ACCESS_DENIED), 'debug.security.authorization.vote');

        \$sut = new TraceableVoter(\$voter, \$eventDispatcher);
        \$result = \$sut->vote(\$token, 'anysubject', ['attr1']);

        \$this->assertSame(VoterInterface::ACCESS_DENIED, \$result);
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/TraceableVoterTest.php");
    }
}
