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

/* vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php */
class __TwigTemplate_c9972b009b5dfc8d5059ce3c9165eff25554069686986b09e9d1e4c9804e75c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\TokenStorage;

/**
 * Stores CSRF tokens.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface TokenStorageInterface
{
    /**
     * Reads a stored CSRF token.
     *
     * @param string \$tokenId The token ID
     *
     * @return string The stored token
     *
     * @throws \\Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException If the token ID does not exist
     */
    public function getToken(\$tokenId);

    /**
     * Stores a CSRF token.
     *
     * @param string \$tokenId The token ID
     * @param string \$token   The CSRF token
     */
    public function setToken(\$tokenId, \$token);

    /**
     * Removes a CSRF token.
     *
     * @param string \$tokenId The token ID
     *
     * @return string|null Returns the removed token if one existed, NULL
     *                     otherwise
     */
    public function removeToken(\$tokenId);

    /**
     * Checks whether a token with the given token ID exists.
     *
     * @param string \$tokenId The token ID
     *
     * @return bool Whether a token exists with the given ID
     */
    public function hasToken(\$tokenId);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php";
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

namespace Symfony\\Component\\Security\\Csrf\\TokenStorage;

/**
 * Stores CSRF tokens.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface TokenStorageInterface
{
    /**
     * Reads a stored CSRF token.
     *
     * @param string \$tokenId The token ID
     *
     * @return string The stored token
     *
     * @throws \\Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException If the token ID does not exist
     */
    public function getToken(\$tokenId);

    /**
     * Stores a CSRF token.
     *
     * @param string \$tokenId The token ID
     * @param string \$token   The CSRF token
     */
    public function setToken(\$tokenId, \$token);

    /**
     * Removes a CSRF token.
     *
     * @param string \$tokenId The token ID
     *
     * @return string|null Returns the removed token if one existed, NULL
     *                     otherwise
     */
    public function removeToken(\$tokenId);

    /**
     * Checks whether a token with the given token ID exists.
     *
     * @param string \$tokenId The token ID
     *
     * @return bool Whether a token exists with the given ID
     */
    public function hasToken(\$tokenId);
}
", "vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php");
    }
}
