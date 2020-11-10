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

/* vendor/symfony/security-bundle/EventListener/VoteListener.php */
class __TwigTemplate_78376b5832e9fa089f3ab6105b813c4ad40f17b5131279bf1035cb8d2946d642 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/EventListener/VoteListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/EventListener/VoteListener.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;

/**
 * Listen to vote events from traceable voters.
 *
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
class VoteListener implements EventSubscriberInterface
{
    private \$traceableAccessDecisionManager;

    public function __construct(TraceableAccessDecisionManager \$traceableAccessDecisionManager)
    {
        \$this->traceableAccessDecisionManager = \$traceableAccessDecisionManager;
    }

    /**
     * Event dispatched by a voter during access manager decision.
     *
     * @param VoteEvent \$event event with voter data
     */
    public function onVoterVote(VoteEvent \$event)
    {
        \$this->traceableAccessDecisionManager->addVoterVote(\$event->getVoter(), \$event->getAttributes(), \$event->getVote());
    }

    public static function getSubscribedEvents()
    {
        return ['debug.security.authorization.vote' => 'onVoterVote'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/EventListener/VoteListener.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Event\\VoteEvent;

/**
 * Listen to vote events from traceable voters.
 *
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
class VoteListener implements EventSubscriberInterface
{
    private \$traceableAccessDecisionManager;

    public function __construct(TraceableAccessDecisionManager \$traceableAccessDecisionManager)
    {
        \$this->traceableAccessDecisionManager = \$traceableAccessDecisionManager;
    }

    /**
     * Event dispatched by a voter during access manager decision.
     *
     * @param VoteEvent \$event event with voter data
     */
    public function onVoterVote(VoteEvent \$event)
    {
        \$this->traceableAccessDecisionManager->addVoterVote(\$event->getVoter(), \$event->getAttributes(), \$event->getVote());
    }

    public static function getSubscribedEvents()
    {
        return ['debug.security.authorization.vote' => 'onVoterVote'];
    }
}
", "vendor/symfony/security-bundle/EventListener/VoteListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/EventListener/VoteListener.php");
    }
}
