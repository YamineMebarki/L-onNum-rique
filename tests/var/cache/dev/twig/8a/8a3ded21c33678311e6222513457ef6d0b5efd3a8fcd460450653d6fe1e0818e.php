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

/* vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php */
class __TwigTemplate_89240c394e6231ebaef3e3850fd2116341f8609606fd33a0233ca1ed1e8aff8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php"));

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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', BCryptPasswordEncoder::class, NativePasswordEncoder::class), E_USER_DEPRECATED);

use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 * @author Terje Bråten <terje@braten.be>
 *
 * @deprecated since Symfony 4.3, use NativePasswordEncoder instead
 */
class BCryptPasswordEncoder extends BasePasswordEncoder implements SelfSaltingEncoderInterface
{
    const MAX_PASSWORD_LENGTH = 72;

    private \$cost;

    /**
     * @param int \$cost The algorithmic cost that should be used
     *
     * @throws \\RuntimeException         When no BCrypt encoder is available
     * @throws \\InvalidArgumentException if cost is out of range
     */
    public function __construct(int \$cost)
    {
        if (\$cost < 4 || \$cost > 31) {
            throw new \\InvalidArgumentException('Cost must be in the range of 4-31.');
        }

        \$this->cost = \$cost;
    }

    /**
     * Encodes the raw password.
     *
     * It doesn't work with PHP versions lower than 5.3.7, since
     * the password compat library uses CRYPT_BLOWFISH hash type with
     * the \"\$2y\$\" salt prefix (which is not available in the early PHP versions).
     *
     * @see https://github.com/ircmaxell/password_compat/issues/10#issuecomment-11203833
     *
     * It is almost best to **not** pass a salt and let PHP generate one for you.
     *
     * @param string \$raw  The password to encode
     * @param string \$salt The salt
     *
     * @return string The encoded password
     *
     * @throws BadCredentialsException when the given password is too long
     *
     * @see http://lxr.php.net/xref/PHP_5_5/ext/standard/password.c#111
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        \$options = ['cost' => \$this->cost];

        if (\$salt) {
            // Ignore \$salt, the auto-generated one is always the best
        }

        return password_hash(\$raw, PASSWORD_BCRYPT, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        return !\$this->isPasswordTooLong(\$raw) && password_verify(\$raw, \$encoded);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php";
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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', BCryptPasswordEncoder::class, NativePasswordEncoder::class), E_USER_DEPRECATED);

use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 * @author Terje Bråten <terje@braten.be>
 *
 * @deprecated since Symfony 4.3, use NativePasswordEncoder instead
 */
class BCryptPasswordEncoder extends BasePasswordEncoder implements SelfSaltingEncoderInterface
{
    const MAX_PASSWORD_LENGTH = 72;

    private \$cost;

    /**
     * @param int \$cost The algorithmic cost that should be used
     *
     * @throws \\RuntimeException         When no BCrypt encoder is available
     * @throws \\InvalidArgumentException if cost is out of range
     */
    public function __construct(int \$cost)
    {
        if (\$cost < 4 || \$cost > 31) {
            throw new \\InvalidArgumentException('Cost must be in the range of 4-31.');
        }

        \$this->cost = \$cost;
    }

    /**
     * Encodes the raw password.
     *
     * It doesn't work with PHP versions lower than 5.3.7, since
     * the password compat library uses CRYPT_BLOWFISH hash type with
     * the \"\$2y\$\" salt prefix (which is not available in the early PHP versions).
     *
     * @see https://github.com/ircmaxell/password_compat/issues/10#issuecomment-11203833
     *
     * It is almost best to **not** pass a salt and let PHP generate one for you.
     *
     * @param string \$raw  The password to encode
     * @param string \$salt The salt
     *
     * @return string The encoded password
     *
     * @throws BadCredentialsException when the given password is too long
     *
     * @see http://lxr.php.net/xref/PHP_5_5/ext/standard/password.c#111
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        \$options = ['cost' => \$this->cost];

        if (\$salt) {
            // Ignore \$salt, the auto-generated one is always the best
        }

        return password_hash(\$raw, PASSWORD_BCRYPT, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        return !\$this->isPasswordTooLong(\$raw) && password_verify(\$raw, \$encoded);
    }
}
", "vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/BCryptPasswordEncoder.php");
    }
}
