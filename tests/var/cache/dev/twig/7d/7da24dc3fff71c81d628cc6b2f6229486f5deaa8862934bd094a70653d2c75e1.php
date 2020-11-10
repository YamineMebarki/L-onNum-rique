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

/* vendor/symfony/security-core/Event/VoteEvent.php */
class __TwigTemplate_649a363ec9f78a2e75820269c8a3f89e40122a370b5eddec36ae108bfde60be7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Event/VoteEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Event/VoteEvent.php"));

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

namespace Symfony\\Component\\Security\\Core\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * This event is dispatched on voter vote.
 *
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
class VoteEvent extends Event
{
    private \$voter;
    private \$subject;
    private \$attributes;
    private \$vote;

    public function __construct(VoterInterface \$voter, \$subject, array \$attributes, int \$vote)
    {
        \$this->voter = \$voter;
        \$this->subject = \$subject;
        \$this->attributes = \$attributes;
        \$this->vote = \$vote;
    }

    public function getVoter(): VoterInterface
    {
        return \$this->voter;
    }

    public function getSubject()
    {
        return \$this->subject;
    }

    public function getAttributes(): array
    {
        return \$this->attributes;
    }

    public function getVote(): int
    {
        return \$this->vote;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Event/VoteEvent.php";
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

namespace Symfony\\Component\\Security\\Core\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * This event is dispatched on voter vote.
 *
 * @author Laurent VOULLEMIER <laurent.voullemier@gmail.com>
 *
 * @internal
 */
class VoteEvent extends Event
{
    private \$voter;
    private \$subject;
    private \$attributes;
    private \$vote;

    public function __construct(VoterInterface \$voter, \$subject, array \$attributes, int \$vote)
    {
        \$this->voter = \$voter;
        \$this->subject = \$subject;
        \$this->attributes = \$attributes;
        \$this->vote = \$vote;
    }

    public function getVoter(): VoterInterface
    {
        return \$this->voter;
    }

    public function getSubject()
    {
        return \$this->subject;
    }

    public function getAttributes(): array
    {
        return \$this->attributes;
    }

    public function getVote(): int
    {
        return \$this->vote;
    }
}
", "vendor/symfony/security-core/Event/VoteEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Event/VoteEvent.php");
    }
}
