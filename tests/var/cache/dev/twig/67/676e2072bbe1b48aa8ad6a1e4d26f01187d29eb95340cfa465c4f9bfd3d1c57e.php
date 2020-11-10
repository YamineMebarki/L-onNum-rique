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

/* vendor/symfony/browser-kit/Tests/TestClient.php */
class __TwigTemplate_eca509447ab0d479b8902bb0783c3e4f94f1bb9b1d1faa8d1379d255ea97768e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/TestClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/TestClient.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Response;

class TestClient extends AbstractBrowser
{
    protected \$nextResponse = null;
    protected \$nextScript = null;

    public function setNextResponse(Response \$response)
    {
        \$this->nextResponse = \$response;
    }

    public function setNextScript(\$script)
    {
        \$this->nextScript = \$script;
    }

    protected function doRequest(\$request): Response
    {
        if (null === \$this->nextResponse) {
            return new Response();
        }

        \$response = \$this->nextResponse;
        \$this->nextResponse = null;

        return \$response;
    }

    protected function getScript(\$request)
    {
        \$r = new \\ReflectionClass('Symfony\\Component\\BrowserKit\\Response');
        \$path = \$r->getFileName();

        return <<<EOF
<?php

require_once('\$path');

echo serialize(\$this->nextScript);
EOF;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/TestClient.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Response;

class TestClient extends AbstractBrowser
{
    protected \$nextResponse = null;
    protected \$nextScript = null;

    public function setNextResponse(Response \$response)
    {
        \$this->nextResponse = \$response;
    }

    public function setNextScript(\$script)
    {
        \$this->nextScript = \$script;
    }

    protected function doRequest(\$request): Response
    {
        if (null === \$this->nextResponse) {
            return new Response();
        }

        \$response = \$this->nextResponse;
        \$this->nextResponse = null;

        return \$response;
    }

    protected function getScript(\$request)
    {
        \$r = new \\ReflectionClass('Symfony\\Component\\BrowserKit\\Response');
        \$path = \$r->getFileName();

        return <<<EOF
<?php

require_once('\$path');

echo serialize(\$this->nextScript);
EOF;
    }
}
", "vendor/symfony/browser-kit/Tests/TestClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/TestClient.php");
    }
}
