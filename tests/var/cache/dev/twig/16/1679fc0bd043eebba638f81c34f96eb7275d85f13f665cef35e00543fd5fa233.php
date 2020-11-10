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

/* vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php */
class __TwigTemplate_9cdc0d7bb0932c58f9e2523e1d9d7a21419eefda062425aef815ba4b9148e936 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php"));

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

namespace Symfony\\Component\\Security\\Core\\Encoder;

use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * PlaintextPasswordEncoder does not do any encoding.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PlaintextPasswordEncoder extends BasePasswordEncoder
{
    private \$ignorePasswordCase;

    /**
     * @param bool \$ignorePasswordCase Compare password case-insensitive
     */
    public function __construct(bool \$ignorePasswordCase = false)
    {
        \$this->ignorePasswordCase = \$ignorePasswordCase;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        return \$this->mergePasswordAndSalt(\$raw, \$salt);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            return false;
        }

        \$pass2 = \$this->mergePasswordAndSalt(\$raw, \$salt);

        if (!\$this->ignorePasswordCase) {
            return \$this->comparePasswords(\$encoded, \$pass2);
        }

        return \$this->comparePasswords(strtolower(\$encoded), strtolower(\$pass2));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php";
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

namespace Symfony\\Component\\Security\\Core\\Encoder;

use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * PlaintextPasswordEncoder does not do any encoding.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PlaintextPasswordEncoder extends BasePasswordEncoder
{
    private \$ignorePasswordCase;

    /**
     * @param bool \$ignorePasswordCase Compare password case-insensitive
     */
    public function __construct(bool \$ignorePasswordCase = false)
    {
        \$this->ignorePasswordCase = \$ignorePasswordCase;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        return \$this->mergePasswordAndSalt(\$raw, \$salt);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            return false;
        }

        \$pass2 = \$this->mergePasswordAndSalt(\$raw, \$salt);

        if (!\$this->ignorePasswordCase) {
            return \$this->comparePasswords(\$encoded, \$pass2);
        }

        return \$this->comparePasswords(strtolower(\$encoded), strtolower(\$pass2));
    }
}
", "vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/PlaintextPasswordEncoder.php");
    }
}
