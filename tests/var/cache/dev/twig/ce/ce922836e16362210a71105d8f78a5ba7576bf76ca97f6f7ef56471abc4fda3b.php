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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php */
class __TwigTemplate_d1987fdd83fb101618b6fbc7bec19936cc69336323d099eb221694a8e5f74e73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ClearableService;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ResettableService;

class ServicesResetterTest extends TestCase
{
    protected function setUp(): void
    {
        ResettableService::\$counter = 0;
        ClearableService::\$counter = 0;
    }

    public function testResetServices()
    {
        \$resetter = new ServicesResetter(new \\ArrayIterator([
            'id1' => new ResettableService(),
            'id2' => new ClearableService(),
        ]), [
            'id1' => 'reset',
            'id2' => 'clear',
        ]);

        \$resetter->reset();

        \$this->assertEquals(1, ResettableService::\$counter);
        \$this->assertEquals(1, ClearableService::\$counter);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ClearableService;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ResettableService;

class ServicesResetterTest extends TestCase
{
    protected function setUp(): void
    {
        ResettableService::\$counter = 0;
        ClearableService::\$counter = 0;
    }

    public function testResetServices()
    {
        \$resetter = new ServicesResetter(new \\ArrayIterator([
            'id1' => new ResettableService(),
            'id2' => new ClearableService(),
        ]), [
            'id1' => 'reset',
            'id2' => 'clear',
        ]);

        \$resetter->reset();

        \$this->assertEquals(1, ResettableService::\$counter);
        \$this->assertEquals(1, ClearableService::\$counter);
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/ServicesResetterTest.php");
    }
}
