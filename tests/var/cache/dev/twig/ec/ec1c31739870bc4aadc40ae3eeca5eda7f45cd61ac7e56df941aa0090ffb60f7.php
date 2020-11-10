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

/* vendor/symfony/http-foundation/ApacheRequest.php */
class __TwigTemplate_afd63ff45be694f784eb1be978f5430e79ca7dffb0a0048ea79523d6c5b29dee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ApacheRequest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ApacheRequest.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Request represents an HTTP request from an Apache server.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApacheRequest extends Request
{
    /**
     * {@inheritdoc}
     */
    protected function prepareRequestUri()
    {
        return \$this->server->get('REQUEST_URI');
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareBaseUrl()
    {
        \$baseUrl = \$this->server->get('SCRIPT_NAME');

        if (false === strpos(\$this->server->get('REQUEST_URI'), \$baseUrl)) {
            // assume mod_rewrite
            return rtrim(\\dirname(\$baseUrl), '/\\\\');
        }

        return \$baseUrl;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/ApacheRequest.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Request represents an HTTP request from an Apache server.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApacheRequest extends Request
{
    /**
     * {@inheritdoc}
     */
    protected function prepareRequestUri()
    {
        return \$this->server->get('REQUEST_URI');
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareBaseUrl()
    {
        \$baseUrl = \$this->server->get('SCRIPT_NAME');

        if (false === strpos(\$this->server->get('REQUEST_URI'), \$baseUrl)) {
            // assume mod_rewrite
            return rtrim(\\dirname(\$baseUrl), '/\\\\');
        }

        return \$baseUrl;
    }
}
", "vendor/symfony/http-foundation/ApacheRequest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/ApacheRequest.php");
    }
}
