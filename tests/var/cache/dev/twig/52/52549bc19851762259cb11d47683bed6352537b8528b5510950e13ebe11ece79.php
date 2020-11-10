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

/* vendor/symfony/routing/Tests/CompiledRouteTest.php */
class __TwigTemplate_680f8476b5e0b5921782e3b377835fe38ca0295edd0125a217ad312c7359cd53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/CompiledRouteTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/CompiledRouteTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\CompiledRoute;

class CompiledRouteTest extends TestCase
{
    public function testAccessors()
    {
        \$compiled = new CompiledRoute('prefix', 'regex', ['tokens'], [], null, [], [], ['variables']);
        \$this->assertEquals('prefix', \$compiled->getStaticPrefix(), '__construct() takes a static prefix as its second argument');
        \$this->assertEquals('regex', \$compiled->getRegex(), '__construct() takes a regexp as its third argument');
        \$this->assertEquals(['tokens'], \$compiled->getTokens(), '__construct() takes an array of tokens as its fourth argument');
        \$this->assertEquals(['variables'], \$compiled->getVariables(), '__construct() takes an array of variables as its ninth argument');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/CompiledRouteTest.php";
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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\CompiledRoute;

class CompiledRouteTest extends TestCase
{
    public function testAccessors()
    {
        \$compiled = new CompiledRoute('prefix', 'regex', ['tokens'], [], null, [], [], ['variables']);
        \$this->assertEquals('prefix', \$compiled->getStaticPrefix(), '__construct() takes a static prefix as its second argument');
        \$this->assertEquals('regex', \$compiled->getRegex(), '__construct() takes a regexp as its third argument');
        \$this->assertEquals(['tokens'], \$compiled->getTokens(), '__construct() takes an array of tokens as its fourth argument');
        \$this->assertEquals(['variables'], \$compiled->getVariables(), '__construct() takes an array of variables as its ninth argument');
    }
}
", "vendor/symfony/routing/Tests/CompiledRouteTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/CompiledRouteTest.php");
    }
}
