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

/* vendor/symfony/security-core/Encoder/NativePasswordEncoder.php */
class __TwigTemplate_0feb03b9f45639b1a70c6ed16f7e3451d5a5a13a4e8f03c98c67718054ab59cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/NativePasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/NativePasswordEncoder.php"));

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
 * Hashes passwords using password_hash().
 *
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 * @author Terje Bråten <terje@braten.be>
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class NativePasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private \$algo;
    private \$options;

    public function __construct(int \$opsLimit = null, int \$memLimit = null, int \$cost = null)
    {
        \$cost = \$cost ?? 13;
        \$opsLimit = \$opsLimit ?? max(4, \\defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE : 4);
        \$memLimit = \$memLimit ?? max(64 * 1024 * 1024, \\defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 1024);

        if (3 > \$opsLimit) {
            throw new \\InvalidArgumentException('\$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > \$memLimit) {
            throw new \\InvalidArgumentException('\$memLimit must be 10k or greater.');
        }

        if (\$cost < 4 || 31 < \$cost) {
            throw new \\InvalidArgumentException('\$cost must be in the range of 4-31.');
        }

        \$this->algo = \\defined('PASSWORD_ARGON2I') ? max(PASSWORD_DEFAULT, \\defined('PASSWORD_ARGON2ID') ? PASSWORD_ARGON2ID : PASSWORD_ARGON2I) : PASSWORD_DEFAULT;
        \$this->options = [
            'cost' => \$cost,
            'time_cost' => \$opsLimit,
            'memory_cost' => \$memLimit >> 10,
            'threads' => 1,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        // Ignore \$salt, the auto-generated one is always the best

        \$encoded = password_hash(\$raw, \$this->algo, \$this->options);

        if (72 < \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // BCrypt encodes only the first 72 chars
            throw new BadCredentialsException('Invalid password.');
        }

        return \$encoded;
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (72 < \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // BCrypt encodes only the first 72 chars
            return false;
        }

        return \\strlen(\$raw) <= self::MAX_PASSWORD_LENGTH && password_verify(\$raw, \$encoded);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/NativePasswordEncoder.php";
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
 * Hashes passwords using password_hash().
 *
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 * @author Terje Bråten <terje@braten.be>
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class NativePasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private \$algo;
    private \$options;

    public function __construct(int \$opsLimit = null, int \$memLimit = null, int \$cost = null)
    {
        \$cost = \$cost ?? 13;
        \$opsLimit = \$opsLimit ?? max(4, \\defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE : 4);
        \$memLimit = \$memLimit ?? max(64 * 1024 * 1024, \\defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \\SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 1024);

        if (3 > \$opsLimit) {
            throw new \\InvalidArgumentException('\$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > \$memLimit) {
            throw new \\InvalidArgumentException('\$memLimit must be 10k or greater.');
        }

        if (\$cost < 4 || 31 < \$cost) {
            throw new \\InvalidArgumentException('\$cost must be in the range of 4-31.');
        }

        \$this->algo = \\defined('PASSWORD_ARGON2I') ? max(PASSWORD_DEFAULT, \\defined('PASSWORD_ARGON2ID') ? PASSWORD_ARGON2ID : PASSWORD_ARGON2I) : PASSWORD_DEFAULT;
        \$this->options = [
            'cost' => \$cost,
            'time_cost' => \$opsLimit,
            'memory_cost' => \$memLimit >> 10,
            'threads' => 1,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\\strlen(\$raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        // Ignore \$salt, the auto-generated one is always the best

        \$encoded = password_hash(\$raw, \$this->algo, \$this->options);

        if (72 < \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // BCrypt encodes only the first 72 chars
            throw new BadCredentialsException('Invalid password.');
        }

        return \$encoded;
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        if (72 < \\strlen(\$raw) && 0 === strpos(\$encoded, '\$2')) {
            // BCrypt encodes only the first 72 chars
            return false;
        }

        return \\strlen(\$raw) <= self::MAX_PASSWORD_LENGTH && password_verify(\$raw, \$encoded);
    }
}
", "vendor/symfony/security-core/Encoder/NativePasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/NativePasswordEncoder.php");
    }
}
