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

/* vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php */
class __TwigTemplate_eb5fe3c000a45ac954d40c3293294db09791ce2a8b251ead4ecf7fb6e7619e87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php"));

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
use Symfony\\Component\\Security\\Core\\Exception\\LogicException;

/**
 * Hashes passwords using libsodium.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Zan Baldwin <hello@zanbaldwin.com>
 * @author Dominik Müller <dominik.mueller@jkweb.ch>
 */
final class SodiumPasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private \$opsLimit;
    private \$memLimit;

    public function __construct(int \$opsLimit = null, int \$memLimit = null)
    {
        if (!self::isSupported()) {
            throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
        }

        \$this->opsLimit = \$opsLimit ?? max(4, \\defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE : 4);
        \$this->memLimit = \$memLimit ?? max(64 * 1024 * 1024, \\defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 2014);

        if (3 > \$this->opsLimit) {
            throw new \\InvalidArgumentException('\$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > \$this->memLimit) {
            throw new \\InvalidArgumentException('\$memLimit must be 10k or greater.');
        }
    }

    public static function isSupported(): bool
    {
        return version_compare(\\extension_loaded('sodium') ? \\SODIUM_LIBRARY_VERSION : phpversion('libsodium'), '1.0.14', '>=');
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (\\function_exists('sodium_crypto_pwhash_str')) {
            return sodium_crypto_pwhash_str(\$raw, \$this->opsLimit, \$this->memLimit);
        }

        if (\\extension_loaded('libsodium')) {
            return \\Sodium\\crypto_pwhash_str(\$raw, \$this->opsLimit, \$this->memLimit);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            return false;
        }

        if (72 >= \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // Accept validating BCrypt passwords for seamless migrations
            return password_verify(\$raw, \$encoded);
        }

        if (\\function_exists('sodium_crypto_pwhash_str_verify')) {
            return sodium_crypto_pwhash_str_verify(\$encoded, \$raw);
        }

        if (\\extension_loaded('libsodium')) {
            return \\Sodium\\crypto_pwhash_str_verify(\$encoded, \$raw);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php";
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
use Symfony\\Component\\Security\\Core\\Exception\\LogicException;

/**
 * Hashes passwords using libsodium.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Zan Baldwin <hello@zanbaldwin.com>
 * @author Dominik Müller <dominik.mueller@jkweb.ch>
 */
final class SodiumPasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private \$opsLimit;
    private \$memLimit;

    public function __construct(int \$opsLimit = null, int \$memLimit = null)
    {
        if (!self::isSupported()) {
            throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
        }

        \$this->opsLimit = \$opsLimit ?? max(4, \\defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE : 4);
        \$this->memLimit = \$memLimit ?? max(64 * 1024 * 1024, \\defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 2014);

        if (3 > \$this->opsLimit) {
            throw new \\InvalidArgumentException('\$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > \$this->memLimit) {
            throw new \\InvalidArgumentException('\$memLimit must be 10k or greater.');
        }
    }

    public static function isSupported(): bool
    {
        return version_compare(\\extension_loaded('sodium') ? \\SODIUM_LIBRARY_VERSION : phpversion('libsodium'), '1.0.14', '>=');
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (\\function_exists('sodium_crypto_pwhash_str')) {
            return sodium_crypto_pwhash_str(\$raw, \$this->opsLimit, \$this->memLimit);
        }

        if (\\extension_loaded('libsodium')) {
            return \\Sodium\\crypto_pwhash_str(\$raw, \$this->opsLimit, \$this->memLimit);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            return false;
        }

        if (72 >= \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // Accept validating BCrypt passwords for seamless migrations
            return password_verify(\$raw, \$encoded);
        }

        if (\\function_exists('sodium_crypto_pwhash_str_verify')) {
            return sodium_crypto_pwhash_str_verify(\$encoded, \$raw);
        }

        if (\\extension_loaded('libsodium')) {
            return \\Sodium\\crypto_pwhash_str_verify(\$encoded, \$raw);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }
}
", "vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/SodiumPasswordEncoder.php");
    }
}
