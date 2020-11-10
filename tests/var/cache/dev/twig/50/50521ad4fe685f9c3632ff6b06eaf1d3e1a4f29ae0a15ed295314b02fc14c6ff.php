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

/* vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php */
class __TwigTemplate_eb8e13eeb7f2256d89591a7dc1ed192a41b5824ea213f2bcfeacf6445b969c5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests;

use Symfony\\Bundle\\TwigBundle\\TemplateIterator;

class TemplateIteratorTest extends TestCase
{
    public function testGetIterator()
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle->expects(\$this->any())->method('getName')->willReturn('BarBundle');
        \$bundle->expects(\$this->any())->method('getPath')->willReturn(__DIR__.'/Fixtures/templates/BarBundle');

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')->disableOriginalConstructor()->getMock();
        \$kernel->expects(\$this->any())->method('getBundles')->willReturn([
            \$bundle,
        ]);
        \$iterator = new TemplateIterator(\$kernel, __DIR__.'/Fixtures/templates', [__DIR__.'/Fixtures/templates/Foo' => 'Foo'], __DIR__.'/DependencyInjection/Fixtures/templates');

        \$sorted = iterator_to_array(\$iterator);
        sort(\$sorted);
        \$this->assertEquals(
            [
                '@Bar/base.html.twig',
                '@Bar/site.html.twig',
                '@Bar/layout.html.twig',
                '@Foo/site.html.twig',
                'layout.html.twig',
                'sub/sub.html.twig',
            ],
            \$sorted
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests;

use Symfony\\Bundle\\TwigBundle\\TemplateIterator;

class TemplateIteratorTest extends TestCase
{
    public function testGetIterator()
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle->expects(\$this->any())->method('getName')->willReturn('BarBundle');
        \$bundle->expects(\$this->any())->method('getPath')->willReturn(__DIR__.'/Fixtures/templates/BarBundle');

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')->disableOriginalConstructor()->getMock();
        \$kernel->expects(\$this->any())->method('getBundles')->willReturn([
            \$bundle,
        ]);
        \$iterator = new TemplateIterator(\$kernel, __DIR__.'/Fixtures/templates', [__DIR__.'/Fixtures/templates/Foo' => 'Foo'], __DIR__.'/DependencyInjection/Fixtures/templates');

        \$sorted = iterator_to_array(\$iterator);
        sort(\$sorted);
        \$this->assertEquals(
            [
                '@Bar/base.html.twig',
                '@Bar/site.html.twig',
                '@Bar/layout.html.twig',
                '@Foo/site.html.twig',
                'layout.html.twig',
                'sub/sub.html.twig',
            ],
            \$sorted
        );
    }
}
", "vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/TemplateIteratorTest.php");
    }
}
