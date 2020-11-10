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

/* vendor/symfony/security-core/Exception/AccountStatusException.php */
class __TwigTemplate_cd64378215657509454eb67f8af961e752dc7183a245673915c331027c24ec70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/AccountStatusException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/AccountStatusException.php"));

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

namespace Symfony\\Component\\Security\\Core\\Exception;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * AccountStatusException is the base class for authentication exceptions
 * caused by the user account status.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
abstract class AccountStatusException extends AuthenticationException
{
    private \$user;

    /**
     * Get the user.
     *
     * @return UserInterface
     */
    public function getUser()
    {
        return \$this->user;
    }

    public function setUser(UserInterface \$user)
    {
        \$this->user = \$user;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->user, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->user, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Exception/AccountStatusException.php";
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

namespace Symfony\\Component\\Security\\Core\\Exception;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * AccountStatusException is the base class for authentication exceptions
 * caused by the user account status.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
abstract class AccountStatusException extends AuthenticationException
{
    private \$user;

    /**
     * Get the user.
     *
     * @return UserInterface
     */
    public function getUser()
    {
        return \$this->user;
    }

    public function setUser(UserInterface \$user)
    {
        \$this->user = \$user;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->user, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->user, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Exception/AccountStatusException.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Exception/AccountStatusException.php");
    }
}
