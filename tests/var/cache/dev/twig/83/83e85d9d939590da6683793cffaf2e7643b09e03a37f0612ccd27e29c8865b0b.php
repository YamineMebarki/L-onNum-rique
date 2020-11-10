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

/* vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php */
class __TwigTemplate_db51b0d1f7427123341c8ba336d987372f7c0bf43e550d741adf09a4f8bfd3f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php"));

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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

interface SurrogateInterface
{
    /**
     * Returns surrogate name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns a new cache strategy instance.
     *
     * @return ResponseCacheStrategyInterface A ResponseCacheStrategyInterface instance
     */
    public function createCacheStrategy();

    /**
     * Checks that at least one surrogate has Surrogate capability.
     *
     * @return bool true if one surrogate has Surrogate capability, false otherwise
     */
    public function hasSurrogateCapability(Request \$request);

    /**
     * Adds Surrogate-capability to the given Request.
     */
    public function addSurrogateCapability(Request \$request);

    /**
     * Adds HTTP headers to specify that the Response needs to be parsed for Surrogate.
     *
     * This method only adds an Surrogate HTTP header if the Response has some Surrogate tags.
     */
    public function addSurrogateControl(Response \$response);

    /**
     * Checks that the Response needs to be parsed for Surrogate tags.
     *
     * @return bool true if the Response needs to be parsed, false otherwise
     */
    public function needsParsing(Response \$response);

    /**
     * Renders a Surrogate tag.
     *
     * @param string \$uri          A URI
     * @param string \$alt          An alternate URI
     * @param bool   \$ignoreErrors Whether to ignore errors or not
     * @param string \$comment      A comment to add as an esi:include tag
     *
     * @return string
     */
    public function renderIncludeTag(\$uri, \$alt = null, \$ignoreErrors = true, \$comment = '');

    /**
     * Replaces a Response Surrogate tags with the included resource content.
     *
     * @return Response
     */
    public function process(Request \$request, Response \$response);

    /**
     * Handles a Surrogate from the cache.
     *
     * @param HttpCache \$cache        An HttpCache instance
     * @param string    \$uri          The main URI
     * @param string    \$alt          An alternative URI
     * @param bool      \$ignoreErrors Whether to ignore errors or not
     *
     * @return string
     *
     * @throws \\RuntimeException
     * @throws \\Exception
     */
    public function handle(HttpCache \$cache, \$uri, \$alt, \$ignoreErrors);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php";
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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

interface SurrogateInterface
{
    /**
     * Returns surrogate name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns a new cache strategy instance.
     *
     * @return ResponseCacheStrategyInterface A ResponseCacheStrategyInterface instance
     */
    public function createCacheStrategy();

    /**
     * Checks that at least one surrogate has Surrogate capability.
     *
     * @return bool true if one surrogate has Surrogate capability, false otherwise
     */
    public function hasSurrogateCapability(Request \$request);

    /**
     * Adds Surrogate-capability to the given Request.
     */
    public function addSurrogateCapability(Request \$request);

    /**
     * Adds HTTP headers to specify that the Response needs to be parsed for Surrogate.
     *
     * This method only adds an Surrogate HTTP header if the Response has some Surrogate tags.
     */
    public function addSurrogateControl(Response \$response);

    /**
     * Checks that the Response needs to be parsed for Surrogate tags.
     *
     * @return bool true if the Response needs to be parsed, false otherwise
     */
    public function needsParsing(Response \$response);

    /**
     * Renders a Surrogate tag.
     *
     * @param string \$uri          A URI
     * @param string \$alt          An alternate URI
     * @param bool   \$ignoreErrors Whether to ignore errors or not
     * @param string \$comment      A comment to add as an esi:include tag
     *
     * @return string
     */
    public function renderIncludeTag(\$uri, \$alt = null, \$ignoreErrors = true, \$comment = '');

    /**
     * Replaces a Response Surrogate tags with the included resource content.
     *
     * @return Response
     */
    public function process(Request \$request, Response \$response);

    /**
     * Handles a Surrogate from the cache.
     *
     * @param HttpCache \$cache        An HttpCache instance
     * @param string    \$uri          The main URI
     * @param string    \$alt          An alternative URI
     * @param bool      \$ignoreErrors Whether to ignore errors or not
     *
     * @return string
     *
     * @throws \\RuntimeException
     * @throws \\Exception
     */
    public function handle(HttpCache \$cache, \$uri, \$alt, \$ignoreErrors);
}
", "vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/HttpCache/SurrogateInterface.php");
    }
}
