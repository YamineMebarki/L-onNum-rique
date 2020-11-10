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

/* vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php */
class __TwigTemplate_51f042ddbb8ea313a96b5738d9b3d4c790fb3f5cade4f2431ab6d4f5985c592b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Fixtures;

use Symfony\\Component\\HttpKernel\\HttpKernelBrowser;

class TestClient extends HttpKernelBrowser
{
    protected function getScript(\$request)
    {
        \$script = parent::getScript(\$request);

        \$autoload = file_exists(__DIR__.'/../../vendor/autoload.php')
            ? __DIR__.'/../../vendor/autoload.php'
            : __DIR__.'/../../../../../../vendor/autoload.php'
        ;

        \$script = preg_replace('/(\\->register\\(\\);)/', \"\$0\\nrequire_once '\$autoload';\\n\", \$script);

        return \$script;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Fixtures;

use Symfony\\Component\\HttpKernel\\HttpKernelBrowser;

class TestClient extends HttpKernelBrowser
{
    protected function getScript(\$request)
    {
        \$script = parent::getScript(\$request);

        \$autoload = file_exists(__DIR__.'/../../vendor/autoload.php')
            ? __DIR__.'/../../vendor/autoload.php'
            : __DIR__.'/../../../../../../vendor/autoload.php'
        ;

        \$script = preg_replace('/(\\->register\\(\\);)/', \"\$0\\nrequire_once '\$autoload';\\n\", \$script);

        return \$script;
    }
}
", "vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Fixtures/TestClient.php");
    }
}
