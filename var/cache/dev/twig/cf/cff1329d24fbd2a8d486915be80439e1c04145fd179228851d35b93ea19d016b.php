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

/* vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php */
class __TwigTemplate_bf7f26f6c5bf5d02c2262775f71c94002e54bb8e04ca4bab94d1af6d549dd203 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\TokenGenerator;

/**
 * Generates CSRF tokens.
 *
 * @author Bernhard Schussek <bernhard.schussek@symfony.com>
 */
class UriSafeTokenGenerator implements TokenGeneratorInterface
{
    private \$entropy;

    /**
     * Generates URI-safe CSRF tokens.
     *
     * @param int \$entropy The amount of entropy collected for each token (in bits)
     */
    public function __construct(int \$entropy = 256)
    {
        \$this->entropy = \$entropy;
    }

    /**
     * {@inheritdoc}
     */
    public function generateToken()
    {
        // Generate an URI safe base64 encoded string that does not contain \"+\",
        // \"/\" or \"=\" which need to be URL encoded and make URLs unnecessarily
        // longer.
        \$bytes = random_bytes(\$this->entropy / 8);

        return rtrim(strtr(base64_encode(\$bytes), '+/', '-_'), '=');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php";
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

namespace Symfony\\Component\\Security\\Csrf\\TokenGenerator;

/**
 * Generates CSRF tokens.
 *
 * @author Bernhard Schussek <bernhard.schussek@symfony.com>
 */
class UriSafeTokenGenerator implements TokenGeneratorInterface
{
    private \$entropy;

    /**
     * Generates URI-safe CSRF tokens.
     *
     * @param int \$entropy The amount of entropy collected for each token (in bits)
     */
    public function __construct(int \$entropy = 256)
    {
        \$this->entropy = \$entropy;
    }

    /**
     * {@inheritdoc}
     */
    public function generateToken()
    {
        // Generate an URI safe base64 encoded string that does not contain \"+\",
        // \"/\" or \"=\" which need to be URL encoded and make URLs unnecessarily
        // longer.
        \$bytes = random_bytes(\$this->entropy / 8);

        return rtrim(strtr(base64_encode(\$bytes), '+/', '-_'), '=');
    }
}
", "vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php");
    }
}
