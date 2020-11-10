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

/* vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php */
class __TwigTemplate_67d1da32c6d1d8b0eec21c8ed2b438b50eb9185a3ccde11d1bf214555332ece3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php"));

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
 * MessageDigestPasswordEncoder uses a message digest algorithm.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class MessageDigestPasswordEncoder extends BasePasswordEncoder
{
    private \$algorithm;
    private \$encodeHashAsBase64;
    private \$iterations;

    /**
     * @param string \$algorithm          The digest algorithm to use
     * @param bool   \$encodeHashAsBase64 Whether to base64 encode the password hash
     * @param int    \$iterations         The number of iterations to use to stretch the password hash
     */
    public function __construct(string \$algorithm = 'sha512', bool \$encodeHashAsBase64 = true, int \$iterations = 5000)
    {
        \$this->algorithm = \$algorithm;
        \$this->encodeHashAsBase64 = \$encodeHashAsBase64;
        \$this->iterations = \$iterations;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (!\\in_array(\$this->algorithm, hash_algos(), true)) {
            throw new \\LogicException(sprintf('The algorithm \"%s\" is not supported.', \$this->algorithm));
        }

        \$salted = \$this->mergePasswordAndSalt(\$raw, \$salt);
        \$digest = hash(\$this->algorithm, \$salted, true);

        // \"stretch\" hash
        for (\$i = 1; \$i < \$this->iterations; ++\$i) {
            \$digest = hash(\$this->algorithm, \$digest.\$salted, true);
        }

        return \$this->encodeHashAsBase64 ? base64_encode(\$digest) : bin2hex(\$digest);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        return !\$this->isPasswordTooLong(\$raw) && \$this->comparePasswords(\$encoded, \$this->encodePassword(\$raw, \$salt));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php";
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
 * MessageDigestPasswordEncoder uses a message digest algorithm.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class MessageDigestPasswordEncoder extends BasePasswordEncoder
{
    private \$algorithm;
    private \$encodeHashAsBase64;
    private \$iterations;

    /**
     * @param string \$algorithm          The digest algorithm to use
     * @param bool   \$encodeHashAsBase64 Whether to base64 encode the password hash
     * @param int    \$iterations         The number of iterations to use to stretch the password hash
     */
    public function __construct(string \$algorithm = 'sha512', bool \$encodeHashAsBase64 = true, int \$iterations = 5000)
    {
        \$this->algorithm = \$algorithm;
        \$this->encodeHashAsBase64 = \$encodeHashAsBase64;
        \$this->iterations = \$iterations;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(\$raw, \$salt)
    {
        if (\$this->isPasswordTooLong(\$raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (!\\in_array(\$this->algorithm, hash_algos(), true)) {
            throw new \\LogicException(sprintf('The algorithm \"%s\" is not supported.', \$this->algorithm));
        }

        \$salted = \$this->mergePasswordAndSalt(\$raw, \$salt);
        \$digest = hash(\$this->algorithm, \$salted, true);

        // \"stretch\" hash
        for (\$i = 1; \$i < \$this->iterations; ++\$i) {
            \$digest = hash(\$this->algorithm, \$digest.\$salted, true);
        }

        return \$this->encodeHashAsBase64 ? base64_encode(\$digest) : bin2hex(\$digest);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
        return !\$this->isPasswordTooLong(\$raw) && \$this->comparePasswords(\$encoded, \$this->encodePassword(\$raw, \$salt));
    }
}
", "vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/MessageDigestPasswordEncoder.php");
    }
}
