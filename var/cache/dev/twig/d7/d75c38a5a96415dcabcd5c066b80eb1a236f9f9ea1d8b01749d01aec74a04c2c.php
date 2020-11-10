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

/* vendor/symfony/config/Tests/Resource/ComposerResourceTest.php */
class __TwigTemplate_36dd0a6e8646f483a990fd4a6b9d810134594388da40b9b2512e4e8920a952be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ComposerResourceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ComposerResourceTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use Composer\\Autoload\\ClassLoader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ComposerResource;

class ComposerResourceTest extends TestCase
{
    public function testGetVendor()
    {
        \$res = new ComposerResource();

        \$r = new \\ReflectionClass(ClassLoader::class);
        \$found = false;

        foreach (\$res->getVendors() as \$vendor) {
            if (\$vendor && 0 === strpos(\$r->getFileName(), \$vendor)) {
                \$found = true;
                break;
            }
        }

        \$this->assertTrue(\$found);
    }

    public function testSerializeUnserialize()
    {
        \$res = new ComposerResource();
        \$ser = unserialize(serialize(\$res));

        \$this->assertTrue(\$res->isFresh(0));
        \$this->assertTrue(\$ser->isFresh(0));

        \$this->assertEquals(\$res, \$ser);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Resource/ComposerResourceTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use Composer\\Autoload\\ClassLoader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ComposerResource;

class ComposerResourceTest extends TestCase
{
    public function testGetVendor()
    {
        \$res = new ComposerResource();

        \$r = new \\ReflectionClass(ClassLoader::class);
        \$found = false;

        foreach (\$res->getVendors() as \$vendor) {
            if (\$vendor && 0 === strpos(\$r->getFileName(), \$vendor)) {
                \$found = true;
                break;
            }
        }

        \$this->assertTrue(\$found);
    }

    public function testSerializeUnserialize()
    {
        \$res = new ComposerResource();
        \$ser = unserialize(serialize(\$res));

        \$this->assertTrue(\$res->isFresh(0));
        \$this->assertTrue(\$ser->isFresh(0));

        \$this->assertEquals(\$res, \$ser);
    }
}
", "vendor/symfony/config/Tests/Resource/ComposerResourceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Resource/ComposerResourceTest.php");
    }
}
