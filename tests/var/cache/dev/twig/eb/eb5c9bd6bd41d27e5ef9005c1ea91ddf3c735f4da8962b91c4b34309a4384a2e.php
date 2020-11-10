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

/* vendor/symfony/security-core/Encoder/BasePasswordEncoder.php */
class __TwigTemplate_eefdab178c0f511e3d3f875f06c76d689907d24d6034c077c772c20a980b02fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/BasePasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/BasePasswordEncoder.php"));

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

/**
 * BasePasswordEncoder is the base class for all password encoders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class BasePasswordEncoder implements PasswordEncoderInterface
{
    const MAX_PASSWORD_LENGTH = 4096;

    /**
     * Demerges a merge password and salt string.
     *
     * @param string \$mergedPasswordSalt The merged password and salt string
     *
     * @return array An array where the first element is the password and the second the salt
     */
    protected function demergePasswordAndSalt(\$mergedPasswordSalt)
    {
        if (empty(\$mergedPasswordSalt)) {
            return ['', ''];
        }

        \$password = \$mergedPasswordSalt;
        \$salt = '';
        \$saltBegins = strrpos(\$mergedPasswordSalt, '{');

        if (false !== \$saltBegins && \$saltBegins + 1 < \\strlen(\$mergedPasswordSalt)) {
            \$salt = substr(\$mergedPasswordSalt, \$saltBegins + 1, -1);
            \$password = substr(\$mergedPasswordSalt, 0, \$saltBegins);
        }

        return [\$password, \$salt];
    }

    /**
     * Merges a password and a salt.
     *
     * @param string      \$password The password to be used
     * @param string|null \$salt     The salt to be used
     *
     * @return string a merged password and salt
     *
     * @throws \\InvalidArgumentException
     */
    protected function mergePasswordAndSalt(\$password, \$salt)
    {
        if (empty(\$salt)) {
            return \$password;
        }

        if (false !== strrpos(\$salt, '{') || false !== strrpos(\$salt, '}')) {
            throw new \\InvalidArgumentException('Cannot use { or } in salt.');
        }

        return \$password.'{'.\$salt.'}';
    }

    /**
     * Compares two passwords.
     *
     * This method implements a constant-time algorithm to compare passwords to
     * avoid (remote) timing attacks.
     *
     * @param string \$password1 The first password
     * @param string \$password2 The second password
     *
     * @return bool true if the two passwords are the same, false otherwise
     */
    protected function comparePasswords(\$password1, \$password2)
    {
        return hash_equals(\$password1, \$password2);
    }

    /**
     * Checks if the password is too long.
     *
     * @param string \$password The password to check
     *
     * @return bool true if the password is too long, false otherwise
     */
    protected function isPasswordTooLong(\$password)
    {
        return \\strlen(\$password) > static::MAX_PASSWORD_LENGTH;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/BasePasswordEncoder.php";
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

/**
 * BasePasswordEncoder is the base class for all password encoders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class BasePasswordEncoder implements PasswordEncoderInterface
{
    const MAX_PASSWORD_LENGTH = 4096;

    /**
     * Demerges a merge password and salt string.
     *
     * @param string \$mergedPasswordSalt The merged password and salt string
     *
     * @return array An array where the first element is the password and the second the salt
     */
    protected function demergePasswordAndSalt(\$mergedPasswordSalt)
    {
        if (empty(\$mergedPasswordSalt)) {
            return ['', ''];
        }

        \$password = \$mergedPasswordSalt;
        \$salt = '';
        \$saltBegins = strrpos(\$mergedPasswordSalt, '{');

        if (false !== \$saltBegins && \$saltBegins + 1 < \\strlen(\$mergedPasswordSalt)) {
            \$salt = substr(\$mergedPasswordSalt, \$saltBegins + 1, -1);
            \$password = substr(\$mergedPasswordSalt, 0, \$saltBegins);
        }

        return [\$password, \$salt];
    }

    /**
     * Merges a password and a salt.
     *
     * @param string      \$password The password to be used
     * @param string|null \$salt     The salt to be used
     *
     * @return string a merged password and salt
     *
     * @throws \\InvalidArgumentException
     */
    protected function mergePasswordAndSalt(\$password, \$salt)
    {
        if (empty(\$salt)) {
            return \$password;
        }

        if (false !== strrpos(\$salt, '{') || false !== strrpos(\$salt, '}')) {
            throw new \\InvalidArgumentException('Cannot use { or } in salt.');
        }

        return \$password.'{'.\$salt.'}';
    }

    /**
     * Compares two passwords.
     *
     * This method implements a constant-time algorithm to compare passwords to
     * avoid (remote) timing attacks.
     *
     * @param string \$password1 The first password
     * @param string \$password2 The second password
     *
     * @return bool true if the two passwords are the same, false otherwise
     */
    protected function comparePasswords(\$password1, \$password2)
    {
        return hash_equals(\$password1, \$password2);
    }

    /**
     * Checks if the password is too long.
     *
     * @param string \$password The password to check
     *
     * @return bool true if the password is too long, false otherwise
     */
    protected function isPasswordTooLong(\$password)
    {
        return \\strlen(\$password) > static::MAX_PASSWORD_LENGTH;
    }
}
", "vendor/symfony/security-core/Encoder/BasePasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/BasePasswordEncoder.php");
    }
}
