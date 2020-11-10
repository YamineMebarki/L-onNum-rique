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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php */
class __TwigTemplate_7ba438ee9a4ab80e6d3573c6ddb9993b14083aa6c60d9b217240593d5056e955 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;

class FragmentController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction(Environment \$twig)
    {
        return new Response(\$twig->render('fragment.html.twig', ['bar' => new Bar()]));
    }

    public function inlinedAction(\$options, \$_format)
    {
        return new Response(\$options['bar']->getBar().' '.\$_format);
    }

    public function customFormatAction(\$_format)
    {
        return new Response(\$_format);
    }

    public function customLocaleAction(Request \$request)
    {
        return new Response(\$request->getLocale());
    }

    public function forwardLocaleAction(Request \$request)
    {
        return new Response(\$request->getLocale());
    }
}

class Bar
{
    private \$bar = 'bar';

    public function getBar()
    {
        return \$this->bar;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;

class FragmentController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction(Environment \$twig)
    {
        return new Response(\$twig->render('fragment.html.twig', ['bar' => new Bar()]));
    }

    public function inlinedAction(\$options, \$_format)
    {
        return new Response(\$options['bar']->getBar().' '.\$_format);
    }

    public function customFormatAction(\$_format)
    {
        return new Response(\$_format);
    }

    public function customLocaleAction(Request \$request)
    {
        return new Response(\$request->getLocale());
    }

    public function forwardLocaleAction(Request \$request)
    {
        return new Response(\$request->getLocale());
    }
}

class Bar
{
    private \$bar = 'bar';

    public function getBar()
    {
        return \$this->bar;
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/FragmentController.php");
    }
}
