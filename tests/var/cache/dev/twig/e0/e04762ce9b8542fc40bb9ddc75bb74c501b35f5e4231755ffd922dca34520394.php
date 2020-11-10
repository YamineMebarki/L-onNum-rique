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

/* vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php */
class __TwigTemplate_0449cb7669b1de52808c7cd52207fb61b161f3632e61168d4916f216f4858def extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;

class VoteListenerTest extends TestCase
{
    public function testOnVoterVote()
    {
        \$voter = \$this->createMock(VoterInterface::class);

        \$traceableAccessDecisionManager = \$this
            ->getMockBuilder(TraceableAccessDecisionManager::class)
            ->disableOriginalConstructor()
            ->setMethods(['addVoterVote'])
            ->getMock();

        \$traceableAccessDecisionManager
            ->expects(\$this->once())
            ->method('addVoterVote')
            ->with(\$voter, ['myattr1', 'myattr2'], VoterInterface::ACCESS_GRANTED);

        \$sut = new VoteListener(\$traceableAccessDecisionManager);
        \$sut->onVoterVote(new VoteEvent(\$voter, 'mysubject', ['myattr1', 'myattr2'], VoterInterface::ACCESS_GRANTED));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;

class VoteListenerTest extends TestCase
{
    public function testOnVoterVote()
    {
        \$voter = \$this->createMock(VoterInterface::class);

        \$traceableAccessDecisionManager = \$this
            ->getMockBuilder(TraceableAccessDecisionManager::class)
            ->disableOriginalConstructor()
            ->setMethods(['addVoterVote'])
            ->getMock();

        \$traceableAccessDecisionManager
            ->expects(\$this->once())
            ->method('addVoterVote')
            ->with(\$voter, ['myattr1', 'myattr2'], VoterInterface::ACCESS_GRANTED);

        \$sut = new VoteListener(\$traceableAccessDecisionManager);
        \$sut->onVoterVote(new VoteEvent(\$voter, 'mysubject', ['myattr1', 'myattr2'], VoterInterface::ACCESS_GRANTED));
    }
}
", "vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/EventListener/VoteListenerTest.php");
    }
}
