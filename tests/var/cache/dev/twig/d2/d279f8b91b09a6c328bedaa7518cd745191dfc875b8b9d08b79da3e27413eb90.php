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

/* vendor/symfony/routing/Generator/UrlGeneratorInterface.php */
class __TwigTemplate_e15e8d8c43084345e89af3d426203a1230dedb490d906632eda20dd89c7741b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/UrlGeneratorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/UrlGeneratorInterface.php"));

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

namespace Symfony\\Component\\Routing\\Generator;

use Symfony\\Component\\Routing\\Exception\\InvalidParameterException;
use Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * UrlGeneratorInterface is the interface that all URL generator classes must implement.
 *
 * The constants in this interface define the different types of resource references that
 * are declared in RFC 3986: http://tools.ietf.org/html/rfc3986
 * We are using the term \"URL\" instead of \"URI\" as this is more common in web applications
 * and we do not need to distinguish them as the difference is mostly semantical and
 * less technical. Generating URIs, i.e. representation-independent resource identifiers,
 * is also possible.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
    /**
     * Generates an absolute URL, e.g. \"http://example.com/dir/file\".
     */
    const ABSOLUTE_URL = 0;

    /**
     * Generates an absolute path, e.g. \"/dir/file\".
     */
    const ABSOLUTE_PATH = 1;

    /**
     * Generates a relative path based on the current request path, e.g. \"../parent-file\".
     *
     * @see UrlGenerator::getRelativePath()
     */
    const RELATIVE_PATH = 2;

    /**
     * Generates a network path, e.g. \"//example.com/dir/file\".
     * Such reference reuses the current scheme but specifies the host.
     */
    const NETWORK_PATH = 3;

    /**
     * Generates a URL or path for a specific route based on the given parameters.
     *
     * Parameters that reference placeholders in the route pattern will substitute them in the
     * path or host. Extra params are added as query string to the URL.
     *
     * When the passed reference type cannot be generated for the route because it requires a different
     * host or scheme than the current one, the method will return a more comprehensive reference
     * that includes the required params. For example, when you call this method with \$referenceType = ABSOLUTE_PATH
     * but the route requires the https scheme whereas the current scheme is http, it will instead return an
     * ABSOLUTE_URL with the https scheme and the current host. This makes sure the generated URL matches
     * the route in any case.
     *
     * If there is no route with the given name, the generator must throw the RouteNotFoundException.
     *
     * The special parameter _fragment will be used as the document fragment suffixed to the final URL.
     *
     * @param string  \$name          The name of the route
     * @param mixed[] \$parameters    An array of parameters
     * @param int     \$referenceType The type of reference to be generated (one of the constants)
     *
     * @return string The generated URL
     *
     * @throws RouteNotFoundException              If the named route doesn't exist
     * @throws MissingMandatoryParametersException When some parameters are missing that are mandatory for the route
     * @throws InvalidParameterException           When a parameter value for a placeholder is not correct because
     *                                             it does not match the requirement
     */
    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Generator/UrlGeneratorInterface.php";
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

namespace Symfony\\Component\\Routing\\Generator;

use Symfony\\Component\\Routing\\Exception\\InvalidParameterException;
use Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * UrlGeneratorInterface is the interface that all URL generator classes must implement.
 *
 * The constants in this interface define the different types of resource references that
 * are declared in RFC 3986: http://tools.ietf.org/html/rfc3986
 * We are using the term \"URL\" instead of \"URI\" as this is more common in web applications
 * and we do not need to distinguish them as the difference is mostly semantical and
 * less technical. Generating URIs, i.e. representation-independent resource identifiers,
 * is also possible.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
    /**
     * Generates an absolute URL, e.g. \"http://example.com/dir/file\".
     */
    const ABSOLUTE_URL = 0;

    /**
     * Generates an absolute path, e.g. \"/dir/file\".
     */
    const ABSOLUTE_PATH = 1;

    /**
     * Generates a relative path based on the current request path, e.g. \"../parent-file\".
     *
     * @see UrlGenerator::getRelativePath()
     */
    const RELATIVE_PATH = 2;

    /**
     * Generates a network path, e.g. \"//example.com/dir/file\".
     * Such reference reuses the current scheme but specifies the host.
     */
    const NETWORK_PATH = 3;

    /**
     * Generates a URL or path for a specific route based on the given parameters.
     *
     * Parameters that reference placeholders in the route pattern will substitute them in the
     * path or host. Extra params are added as query string to the URL.
     *
     * When the passed reference type cannot be generated for the route because it requires a different
     * host or scheme than the current one, the method will return a more comprehensive reference
     * that includes the required params. For example, when you call this method with \$referenceType = ABSOLUTE_PATH
     * but the route requires the https scheme whereas the current scheme is http, it will instead return an
     * ABSOLUTE_URL with the https scheme and the current host. This makes sure the generated URL matches
     * the route in any case.
     *
     * If there is no route with the given name, the generator must throw the RouteNotFoundException.
     *
     * The special parameter _fragment will be used as the document fragment suffixed to the final URL.
     *
     * @param string  \$name          The name of the route
     * @param mixed[] \$parameters    An array of parameters
     * @param int     \$referenceType The type of reference to be generated (one of the constants)
     *
     * @return string The generated URL
     *
     * @throws RouteNotFoundException              If the named route doesn't exist
     * @throws MissingMandatoryParametersException When some parameters are missing that are mandatory for the route
     * @throws InvalidParameterException           When a parameter value for a placeholder is not correct because
     *                                             it does not match the requirement
     */
    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH);
}
", "vendor/symfony/routing/Generator/UrlGeneratorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Generator/UrlGeneratorInterface.php");
    }
}
