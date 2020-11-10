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

/* vendor/symfony/http-client/Internal/PushedResponse.php */
class __TwigTemplate_559e2463b79aa0804f8d33e10933fe1cf2d441f71eb61c50bea44d2ee63d4efb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Internal/PushedResponse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Internal/PushedResponse.php"));

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

namespace Symfony\\Component\\HttpClient\\Internal;

use Symfony\\Component\\HttpClient\\Response\\CurlResponse;

/**
 * A pushed response with its request headers.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class PushedResponse
{
    public \$response;

    /** @var string[] */
    public \$requestHeaders;

    public \$parentOptions = [];

    public function __construct(CurlResponse \$response, array \$requestHeaders, array \$parentOptions)
    {
        \$this->response = \$response;
        \$this->requestHeaders = \$requestHeaders;
        \$this->parentOptions = \$parentOptions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Internal/PushedResponse.php";
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

namespace Symfony\\Component\\HttpClient\\Internal;

use Symfony\\Component\\HttpClient\\Response\\CurlResponse;

/**
 * A pushed response with its request headers.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class PushedResponse
{
    public \$response;

    /** @var string[] */
    public \$requestHeaders;

    public \$parentOptions = [];

    public function __construct(CurlResponse \$response, array \$requestHeaders, array \$parentOptions)
    {
        \$this->response = \$response;
        \$this->requestHeaders = \$requestHeaders;
        \$this->parentOptions = \$parentOptions;
    }
}
", "vendor/symfony/http-client/Internal/PushedResponse.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Internal/PushedResponse.php");
    }
}
