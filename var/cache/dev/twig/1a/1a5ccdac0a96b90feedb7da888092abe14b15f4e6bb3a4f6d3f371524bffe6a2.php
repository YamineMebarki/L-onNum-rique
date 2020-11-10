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

/* vendor/symfony/twig-bridge/Extension/SecurityExtension.php */
class __TwigTemplate_de237023872394790e1e886c64d3f304c6fe34205c9a51f60f354386ec3f7007 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/SecurityExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/SecurityExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Security\\Acl\\Voter\\FieldVote;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * SecurityExtension exposes security context features.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityExtension extends AbstractExtension
{
    private \$securityChecker;

    public function __construct(AuthorizationCheckerInterface \$securityChecker = null)
    {
        \$this->securityChecker = \$securityChecker;
    }

    public function isGranted(\$role, \$object = null, \$field = null)
    {
        if (null === \$this->securityChecker) {
            return false;
        }

        if (null !== \$field) {
            \$object = new FieldVote(\$object, \$field);
        }

        try {
            return \$this->securityChecker->isGranted(\$role, \$object);
        } catch (AuthenticationCredentialsNotFoundException \$e) {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('is_granted', [\$this, 'isGranted']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'security';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/SecurityExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Security\\Acl\\Voter\\FieldVote;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * SecurityExtension exposes security context features.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityExtension extends AbstractExtension
{
    private \$securityChecker;

    public function __construct(AuthorizationCheckerInterface \$securityChecker = null)
    {
        \$this->securityChecker = \$securityChecker;
    }

    public function isGranted(\$role, \$object = null, \$field = null)
    {
        if (null === \$this->securityChecker) {
            return false;
        }

        if (null !== \$field) {
            \$object = new FieldVote(\$object, \$field);
        }

        try {
            return \$this->securityChecker->isGranted(\$role, \$object);
        } catch (AuthenticationCredentialsNotFoundException \$e) {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('is_granted', [\$this, 'isGranted']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'security';
    }
}
", "vendor/symfony/twig-bridge/Extension/SecurityExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/SecurityExtension.php");
    }
}
