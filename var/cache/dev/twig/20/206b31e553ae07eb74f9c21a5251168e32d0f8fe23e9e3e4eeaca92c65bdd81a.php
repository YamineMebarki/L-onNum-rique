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

/* vendor/symfony/security-core/Authorization/AccessDecisionManager.php */
class __TwigTemplate_3fd6f69a99aeace141b9273f4d9b851f7c77a9cc763fbebf9b9e578f9ddb076f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AccessDecisionManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AccessDecisionManager.php"));

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
 * AccessDecisionManager is the base class for all access decision managers
 * that use decision voters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AccessDecisionManager implements AccessDecisionManagerInterface
{
    const STRATEGY_AFFIRMATIVE = 'affirmative';
    const STRATEGY_CONSENSUS = 'consensus';
    const STRATEGY_UNANIMOUS = 'unanimous';

    private \$voters;
    private \$strategy;
    private \$allowIfAllAbstainDecisions;
    private \$allowIfEqualGrantedDeniedDecisions;

    /**
     * @param iterable|VoterInterface[] \$voters                             An array or an iterator of VoterInterface instances
     * @param string                    \$strategy                           The vote strategy
     * @param bool                      \$allowIfAllAbstainDecisions         Whether to grant access if all voters abstained or not
     * @param bool                      \$allowIfEqualGrantedDeniedDecisions Whether to grant access if result are equals
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(iterable \$voters = [], string \$strategy = self::STRATEGY_AFFIRMATIVE, bool \$allowIfAllAbstainDecisions = false, bool \$allowIfEqualGrantedDeniedDecisions = true)
    {
        \$strategyMethod = 'decide'.ucfirst(\$strategy);
        if ('' === \$strategy || !\\is_callable([\$this, \$strategyMethod])) {
            throw new \\InvalidArgumentException(sprintf('The strategy \"%s\" is not supported.', \$strategy));
        }

        \$this->voters = \$voters;
        \$this->strategy = \$strategyMethod;
        \$this->allowIfAllAbstainDecisions = \$allowIfAllAbstainDecisions;
        \$this->allowIfEqualGrantedDeniedDecisions = \$allowIfEqualGrantedDeniedDecisions;
    }

    /**
     * {@inheritdoc}
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null)
    {
        return \$this->{\$this->strategy}(\$token, \$attributes, \$object);
    }

    /**
     * Grants access if any voter returns an affirmative response.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideAffirmative(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$deny = 0;
        foreach (\$this->voters as \$voter) {
            \$result = \$voter->vote(\$token, \$object, \$attributes);
            switch (\$result) {
                case VoterInterface::ACCESS_GRANTED:
                    return true;

                case VoterInterface::ACCESS_DENIED:
                    ++\$deny;

                    break;

                default:
                    break;
            }
        }

        if (\$deny > 0) {
            return false;
        }

        return \$this->allowIfAllAbstainDecisions;
    }

    /**
     * Grants access if there is consensus of granted against denied responses.
     *
     * Consensus means majority-rule (ignoring abstains) rather than unanimous
     * agreement (ignoring abstains). If you require unanimity, see
     * UnanimousBased.
     *
     * If there were an equal number of grant and deny votes, the decision will
     * be based on the allowIfEqualGrantedDeniedDecisions property value
     * (defaults to true).
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideConsensus(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$grant = 0;
        \$deny = 0;
        foreach (\$this->voters as \$voter) {
            \$result = \$voter->vote(\$token, \$object, \$attributes);

            switch (\$result) {
                case VoterInterface::ACCESS_GRANTED:
                    ++\$grant;

                    break;

                case VoterInterface::ACCESS_DENIED:
                    ++\$deny;

                    break;
            }
        }

        if (\$grant > \$deny) {
            return true;
        }

        if (\$deny > \$grant) {
            return false;
        }

        if (\$grant > 0) {
            return \$this->allowIfEqualGrantedDeniedDecisions;
        }

        return \$this->allowIfAllAbstainDecisions;
    }

    /**
     * Grants access if only grant (or abstain) votes were received.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideUnanimous(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$grant = 0;
        foreach (\$this->voters as \$voter) {
            foreach (\$attributes as \$attribute) {
                \$result = \$voter->vote(\$token, \$object, [\$attribute]);

                switch (\$result) {
                    case VoterInterface::ACCESS_GRANTED:
                        ++\$grant;

                        break;

                    case VoterInterface::ACCESS_DENIED:
                        return false;

                    default:
                        break;
                }
            }
        }

        // no deny votes
        if (\$grant > 0) {
            return true;
        }

        return \$this->allowIfAllAbstainDecisions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/AccessDecisionManager.php";
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
 * AccessDecisionManager is the base class for all access decision managers
 * that use decision voters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AccessDecisionManager implements AccessDecisionManagerInterface
{
    const STRATEGY_AFFIRMATIVE = 'affirmative';
    const STRATEGY_CONSENSUS = 'consensus';
    const STRATEGY_UNANIMOUS = 'unanimous';

    private \$voters;
    private \$strategy;
    private \$allowIfAllAbstainDecisions;
    private \$allowIfEqualGrantedDeniedDecisions;

    /**
     * @param iterable|VoterInterface[] \$voters                             An array or an iterator of VoterInterface instances
     * @param string                    \$strategy                           The vote strategy
     * @param bool                      \$allowIfAllAbstainDecisions         Whether to grant access if all voters abstained or not
     * @param bool                      \$allowIfEqualGrantedDeniedDecisions Whether to grant access if result are equals
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(iterable \$voters = [], string \$strategy = self::STRATEGY_AFFIRMATIVE, bool \$allowIfAllAbstainDecisions = false, bool \$allowIfEqualGrantedDeniedDecisions = true)
    {
        \$strategyMethod = 'decide'.ucfirst(\$strategy);
        if ('' === \$strategy || !\\is_callable([\$this, \$strategyMethod])) {
            throw new \\InvalidArgumentException(sprintf('The strategy \"%s\" is not supported.', \$strategy));
        }

        \$this->voters = \$voters;
        \$this->strategy = \$strategyMethod;
        \$this->allowIfAllAbstainDecisions = \$allowIfAllAbstainDecisions;
        \$this->allowIfEqualGrantedDeniedDecisions = \$allowIfEqualGrantedDeniedDecisions;
    }

    /**
     * {@inheritdoc}
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null)
    {
        return \$this->{\$this->strategy}(\$token, \$attributes, \$object);
    }

    /**
     * Grants access if any voter returns an affirmative response.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideAffirmative(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$deny = 0;
        foreach (\$this->voters as \$voter) {
            \$result = \$voter->vote(\$token, \$object, \$attributes);
            switch (\$result) {
                case VoterInterface::ACCESS_GRANTED:
                    return true;

                case VoterInterface::ACCESS_DENIED:
                    ++\$deny;

                    break;

                default:
                    break;
            }
        }

        if (\$deny > 0) {
            return false;
        }

        return \$this->allowIfAllAbstainDecisions;
    }

    /**
     * Grants access if there is consensus of granted against denied responses.
     *
     * Consensus means majority-rule (ignoring abstains) rather than unanimous
     * agreement (ignoring abstains). If you require unanimity, see
     * UnanimousBased.
     *
     * If there were an equal number of grant and deny votes, the decision will
     * be based on the allowIfEqualGrantedDeniedDecisions property value
     * (defaults to true).
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideConsensus(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$grant = 0;
        \$deny = 0;
        foreach (\$this->voters as \$voter) {
            \$result = \$voter->vote(\$token, \$object, \$attributes);

            switch (\$result) {
                case VoterInterface::ACCESS_GRANTED:
                    ++\$grant;

                    break;

                case VoterInterface::ACCESS_DENIED:
                    ++\$deny;

                    break;
            }
        }

        if (\$grant > \$deny) {
            return true;
        }

        if (\$deny > \$grant) {
            return false;
        }

        if (\$grant > 0) {
            return \$this->allowIfEqualGrantedDeniedDecisions;
        }

        return \$this->allowIfAllAbstainDecisions;
    }

    /**
     * Grants access if only grant (or abstain) votes were received.
     *
     * If all voters abstained from voting, the decision will be based on the
     * allowIfAllAbstainDecisions property value (defaults to false).
     */
    private function decideUnanimous(TokenInterface \$token, array \$attributes, \$object = null)
    {
        \$grant = 0;
        foreach (\$this->voters as \$voter) {
            foreach (\$attributes as \$attribute) {
                \$result = \$voter->vote(\$token, \$object, [\$attribute]);

                switch (\$result) {
                    case VoterInterface::ACCESS_GRANTED:
                        ++\$grant;

                        break;

                    case VoterInterface::ACCESS_DENIED:
                        return false;

                    default:
                        break;
                }
            }
        }

        // no deny votes
        if (\$grant > 0) {
            return true;
        }

        return \$this->allowIfAllAbstainDecisions;
    }
}
", "vendor/symfony/security-core/Authorization/AccessDecisionManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/AccessDecisionManager.php");
    }
}
