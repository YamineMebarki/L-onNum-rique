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

/* vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php */
class __TwigTemplate_6728691599ac427d4f78a4cb6854f3c614a325e599189e4cb1aca98daadc1dd2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\RememberMe;

use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * Interface for TokenProviders.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface TokenProviderInterface
{
    /**
     * Loads the active token for the given series.
     *
     * @param string \$series
     *
     * @return PersistentTokenInterface
     *
     * @throws TokenNotFoundException if the token is not found
     */
    public function loadTokenBySeries(\$series);

    /**
     * Deletes all tokens belonging to series.
     *
     * @param string \$series
     */
    public function deleteTokenBySeries(\$series);

    /**
     * Updates the token according to this data.
     *
     * @param string \$series
     * @param string \$tokenValue
     *
     * @throws TokenNotFoundException if the token is not found
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed);

    /**
     * Creates a new token.
     */
    public function createNewToken(PersistentTokenInterface \$token);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\RememberMe;

use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * Interface for TokenProviders.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface TokenProviderInterface
{
    /**
     * Loads the active token for the given series.
     *
     * @param string \$series
     *
     * @return PersistentTokenInterface
     *
     * @throws TokenNotFoundException if the token is not found
     */
    public function loadTokenBySeries(\$series);

    /**
     * Deletes all tokens belonging to series.
     *
     * @param string \$series
     */
    public function deleteTokenBySeries(\$series);

    /**
     * Updates the token according to this data.
     *
     * @param string \$series
     * @param string \$tokenValue
     *
     * @throws TokenNotFoundException if the token is not found
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed);

    /**
     * Creates a new token.
     */
    public function createNewToken(PersistentTokenInterface \$token);
}
", "vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/RememberMe/TokenProviderInterface.php");
    }
}
