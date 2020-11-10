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

/* vendor/symfony/security-csrf/CsrfTokenManagerInterface.php */
class __TwigTemplate_a402b98119a7c4b13f0aa563d33b9835f11eeef28dadcd45c55472f2c4b81742 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfTokenManagerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfTokenManagerInterface.php"));

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

namespace Symfony\\Component\\Security\\Csrf;

/**
 * Manages CSRF tokens.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface CsrfTokenManagerInterface
{
    /**
     * Returns a CSRF token for the given ID.
     *
     * If previously no token existed for the given ID, a new token is
     * generated. Otherwise the existing token is returned (with the same value,
     * not the same instance).
     *
     * @param string \$tokenId The token ID. You may choose an arbitrary value
     *                        for the ID
     *
     * @return CsrfToken The CSRF token
     */
    public function getToken(\$tokenId);

    /**
     * Generates a new token value for the given ID.
     *
     * This method will generate a new token for the given token ID, independent
     * of whether a token value previously existed or not. It can be used to
     * enforce once-only tokens in environments with high security needs.
     *
     * @param string \$tokenId The token ID. You may choose an arbitrary value
     *                        for the ID
     *
     * @return CsrfToken The CSRF token
     */
    public function refreshToken(\$tokenId);

    /**
     * Invalidates the CSRF token with the given ID, if one exists.
     *
     * @param string \$tokenId The token ID
     *
     * @return string|null Returns the removed token value if one existed, NULL
     *                     otherwise
     */
    public function removeToken(\$tokenId);

    /**
     * Returns whether the given CSRF token is valid.
     *
     * @return bool Returns true if the token is valid, false otherwise
     */
    public function isTokenValid(CsrfToken \$token);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/CsrfTokenManagerInterface.php";
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

namespace Symfony\\Component\\Security\\Csrf;

/**
 * Manages CSRF tokens.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface CsrfTokenManagerInterface
{
    /**
     * Returns a CSRF token for the given ID.
     *
     * If previously no token existed for the given ID, a new token is
     * generated. Otherwise the existing token is returned (with the same value,
     * not the same instance).
     *
     * @param string \$tokenId The token ID. You may choose an arbitrary value
     *                        for the ID
     *
     * @return CsrfToken The CSRF token
     */
    public function getToken(\$tokenId);

    /**
     * Generates a new token value for the given ID.
     *
     * This method will generate a new token for the given token ID, independent
     * of whether a token value previously existed or not. It can be used to
     * enforce once-only tokens in environments with high security needs.
     *
     * @param string \$tokenId The token ID. You may choose an arbitrary value
     *                        for the ID
     *
     * @return CsrfToken The CSRF token
     */
    public function refreshToken(\$tokenId);

    /**
     * Invalidates the CSRF token with the given ID, if one exists.
     *
     * @param string \$tokenId The token ID
     *
     * @return string|null Returns the removed token value if one existed, NULL
     *                     otherwise
     */
    public function removeToken(\$tokenId);

    /**
     * Returns whether the given CSRF token is valid.
     *
     * @return bool Returns true if the token is valid, false otherwise
     */
    public function isTokenValid(CsrfToken \$token);
}
", "vendor/symfony/security-csrf/CsrfTokenManagerInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php");
    }
}
