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

/* vendor/symfony/security-core/Authorization/Voter/Voter.php */
class __TwigTemplate_32faf193d4b81eace006ff69a312cd75229437fe2454bf0f13b434f6cd464f54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/Voter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/Voter.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * Voter is an abstract default implementation of a voter.
 *
 * @author Roman Marintšenko <inoryy@gmail.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
abstract class Voter implements VoterInterface
{
    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        // abstain vote by default in case none of the attributes are supported
        \$vote = self::ACCESS_ABSTAIN;

        foreach (\$attributes as \$attribute) {
            if (!\$this->supports(\$attribute, \$subject)) {
                continue;
            }

            // as soon as at least one attribute is supported, default is to deny access
            \$vote = self::ACCESS_DENIED;

            if (\$this->voteOnAttribute(\$attribute, \$subject, \$token)) {
                // grant access as soon as at least one attribute returns a positive response
                return self::ACCESS_GRANTED;
            }
        }

        return \$vote;
    }

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string \$attribute An attribute
     * @param mixed  \$subject   The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    abstract protected function supports(\$attribute, \$subject);

    /**
     * Perform a single access check operation on a given attribute, subject and token.
     * It is safe to assume that \$attribute and \$subject already passed the \"supports()\" method check.
     *
     * @param string \$attribute
     * @param mixed  \$subject
     *
     * @return bool
     */
    abstract protected function voteOnAttribute(\$attribute, \$subject, TokenInterface \$token);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/Voter/Voter.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * Voter is an abstract default implementation of a voter.
 *
 * @author Roman Marintšenko <inoryy@gmail.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
abstract class Voter implements VoterInterface
{
    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        // abstain vote by default in case none of the attributes are supported
        \$vote = self::ACCESS_ABSTAIN;

        foreach (\$attributes as \$attribute) {
            if (!\$this->supports(\$attribute, \$subject)) {
                continue;
            }

            // as soon as at least one attribute is supported, default is to deny access
            \$vote = self::ACCESS_DENIED;

            if (\$this->voteOnAttribute(\$attribute, \$subject, \$token)) {
                // grant access as soon as at least one attribute returns a positive response
                return self::ACCESS_GRANTED;
            }
        }

        return \$vote;
    }

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string \$attribute An attribute
     * @param mixed  \$subject   The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    abstract protected function supports(\$attribute, \$subject);

    /**
     * Perform a single access check operation on a given attribute, subject and token.
     * It is safe to assume that \$attribute and \$subject already passed the \"supports()\" method check.
     *
     * @param string \$attribute
     * @param mixed  \$subject
     *
     * @return bool
     */
    abstract protected function voteOnAttribute(\$attribute, \$subject, TokenInterface \$token);
}
", "vendor/symfony/security-core/Authorization/Voter/Voter.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/Voter/Voter.php");
    }
}
