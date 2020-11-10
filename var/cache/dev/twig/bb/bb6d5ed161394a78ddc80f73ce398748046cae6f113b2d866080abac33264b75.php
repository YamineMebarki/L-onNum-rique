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

/* vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php */
class __TwigTemplate_d25a73cded86d70aea616215905444e3f780292c371110c9883fd07c4e587199 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * Decorates the original AccessDecisionManager class to log information
 * about the security voters and the decisions made by them.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @internal
 */
class TraceableAccessDecisionManager implements AccessDecisionManagerInterface
{
    private \$manager;
    private \$strategy;
    private \$voters = [];
    private \$decisionLog = []; // All decision log
    private \$currentLog = [];  // Logs being filled in

    public function __construct(AccessDecisionManagerInterface \$manager)
    {
        \$this->manager = \$manager;

        if (\$this->manager instanceof AccessDecisionManager) {
            // The strategy and voters are stored in a private properties of the decorated service
            \$reflection = new \\ReflectionProperty(AccessDecisionManager::class, 'strategy');
            \$reflection->setAccessible(true);
            \$this->strategy = \$reflection->getValue(\$manager);
            \$reflection = new \\ReflectionProperty(AccessDecisionManager::class, 'voters');
            \$reflection->setAccessible(true);
            \$this->voters = \$reflection->getValue(\$manager);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$currentDecisionLog = [
            'attributes' => \$attributes,
            'object' => \$object,
            'voterDetails' => [],
        ];

        \$this->currentLog[] = &\$currentDecisionLog;

        \$result = \$this->manager->decide(\$token, \$attributes, \$object);

        \$currentDecisionLog['result'] = \$result;

        \$this->decisionLog[] = array_pop(\$this->currentLog); // Using a stack since decide can be called by voters

        return \$result;
    }

    /**
     * Adds voter vote and class to the voter details.
     *
     * @param VoterInterface \$voter      voter
     * @param array          \$attributes attributes used for the vote
     * @param int            \$vote       vote of the voter
     */
    public function addVoterVote(VoterInterface \$voter, array \$attributes, int \$vote)
    {
        \$currentLogIndex = \\count(\$this->currentLog) - 1;
        \$this->currentLog[\$currentLogIndex]['voterDetails'][] = [
            'voter' => \$voter,
            'attributes' => \$attributes,
            'vote' => \$vote,
        ];
    }

    /**
     * @return string
     */
    public function getStrategy()
    {
        // The \$strategy property is misleading because it stores the name of its
        // method (e.g. 'decideAffirmative') instead of the original strategy name
        // (e.g. 'affirmative')
        return null === \$this->strategy ? '-' : strtolower(substr(\$this->strategy, 6));
    }

    /**
     * @return iterable|VoterInterface[]
     */
    public function getVoters()
    {
        return \$this->voters;
    }

    /**
     * @return array
     */
    public function getDecisionLog()
    {
        return \$this->decisionLog;
    }
}

class_alias(TraceableAccessDecisionManager::class, DebugAccessDecisionManager::class);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * Decorates the original AccessDecisionManager class to log information
 * about the security voters and the decisions made by them.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @internal
 */
class TraceableAccessDecisionManager implements AccessDecisionManagerInterface
{
    private \$manager;
    private \$strategy;
    private \$voters = [];
    private \$decisionLog = []; // All decision log
    private \$currentLog = [];  // Logs being filled in

    public function __construct(AccessDecisionManagerInterface \$manager)
    {
        \$this->manager = \$manager;

        if (\$this->manager instanceof AccessDecisionManager) {
            // The strategy and voters are stored in a private properties of the decorated service
            \$reflection = new \\ReflectionProperty(AccessDecisionManager::class, 'strategy');
            \$reflection->setAccessible(true);
            \$this->strategy = \$reflection->getValue(\$manager);
            \$reflection = new \\ReflectionProperty(AccessDecisionManager::class, 'voters');
            \$reflection->setAccessible(true);
            \$this->voters = \$reflection->getValue(\$manager);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$currentDecisionLog = [
            'attributes' => \$attributes,
            'object' => \$object,
            'voterDetails' => [],
        ];

        \$this->currentLog[] = &\$currentDecisionLog;

        \$result = \$this->manager->decide(\$token, \$attributes, \$object);

        \$currentDecisionLog['result'] = \$result;

        \$this->decisionLog[] = array_pop(\$this->currentLog); // Using a stack since decide can be called by voters

        return \$result;
    }

    /**
     * Adds voter vote and class to the voter details.
     *
     * @param VoterInterface \$voter      voter
     * @param array          \$attributes attributes used for the vote
     * @param int            \$vote       vote of the voter
     */
    public function addVoterVote(VoterInterface \$voter, array \$attributes, int \$vote)
    {
        \$currentLogIndex = \\count(\$this->currentLog) - 1;
        \$this->currentLog[\$currentLogIndex]['voterDetails'][] = [
            'voter' => \$voter,
            'attributes' => \$attributes,
            'vote' => \$vote,
        ];
    }

    /**
     * @return string
     */
    public function getStrategy()
    {
        // The \$strategy property is misleading because it stores the name of its
        // method (e.g. 'decideAffirmative') instead of the original strategy name
        // (e.g. 'affirmative')
        return null === \$this->strategy ? '-' : strtolower(substr(\$this->strategy, 6));
    }

    /**
     * @return iterable|VoterInterface[]
     */
    public function getVoters()
    {
        return \$this->voters;
    }

    /**
     * @return array
     */
    public function getDecisionLog()
    {
        return \$this->decisionLog;
    }
}

class_alias(TraceableAccessDecisionManager::class, DebugAccessDecisionManager::class);
", "vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php");
    }
}
