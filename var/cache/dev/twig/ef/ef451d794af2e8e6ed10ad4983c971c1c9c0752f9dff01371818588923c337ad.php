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

/* vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php */
class __TwigTemplate_b14afd213e7ef6bd40e11636101199494d0c054806a4106bcf761a97bf3341cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateReferenceTest extends TestCase
{
    public function testGetPathWorksWithNamespacedControllers()
    {
        \$reference = new TemplateReference('AcmeBlogBundle', 'Admin\\Post', 'index', 'html', 'twig');

        \$this->assertSame(
            '@AcmeBlogBundle/Resources/views/Admin/Post/site.html.twig',
            \$reference->getPath()
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateReference;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @group legacy
 */
class TemplateReferenceTest extends TestCase
{
    public function testGetPathWorksWithNamespacedControllers()
    {
        \$reference = new TemplateReference('AcmeBlogBundle', 'Admin\\Post', 'index', 'html', 'twig');

        \$this->assertSame(
            '@AcmeBlogBundle/Resources/views/Admin/Post/site.html.twig',
            \$reference->getPath()
        );
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/TemplateReferenceTest.php");
    }
}
