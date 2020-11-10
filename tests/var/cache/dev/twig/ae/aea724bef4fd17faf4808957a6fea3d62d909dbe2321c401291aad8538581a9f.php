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

/* vendor/symfony/twig-bundle/Controller/PreviewErrorController.php */
class __TwigTemplate_1e3604256046135fc4174ea693650053c4bd2f349ee14f621f564766c17b51e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Controller/PreviewErrorController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Controller/PreviewErrorController.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Controller;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * PreviewErrorController can be used to test error pages.
 *
 * It will create a test exception and forward it to another controller.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class PreviewErrorController
{
    protected \$kernel;
    protected \$controller;

    public function __construct(HttpKernelInterface \$kernel, \$controller)
    {
        \$this->kernel = \$kernel;
        \$this->controller = \$controller;
    }

    public function previewErrorPageAction(Request \$request, \$code)
    {
        \$exception = FlattenException::create(new \\Exception('Something has intentionally gone wrong.'), \$code);

        /*
         * This Request mimics the parameters set by
         * \\Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener::duplicateRequest, with
         * the additional \"showException\" flag.
         */

        \$subRequest = \$request->duplicate(null, null, [
            '_controller' => \$this->controller,
            'exception' => \$exception,
            'logger' => null,
            'format' => \$request->getRequestFormat(),
            'showException' => false,
        ]);

        return \$this->kernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Controller/PreviewErrorController.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Controller;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * PreviewErrorController can be used to test error pages.
 *
 * It will create a test exception and forward it to another controller.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class PreviewErrorController
{
    protected \$kernel;
    protected \$controller;

    public function __construct(HttpKernelInterface \$kernel, \$controller)
    {
        \$this->kernel = \$kernel;
        \$this->controller = \$controller;
    }

    public function previewErrorPageAction(Request \$request, \$code)
    {
        \$exception = FlattenException::create(new \\Exception('Something has intentionally gone wrong.'), \$code);

        /*
         * This Request mimics the parameters set by
         * \\Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener::duplicateRequest, with
         * the additional \"showException\" flag.
         */

        \$subRequest = \$request->duplicate(null, null, [
            '_controller' => \$this->controller,
            'exception' => \$exception,
            'logger' => null,
            'format' => \$request->getRequestFormat(),
            'showException' => false,
        ]);

        return \$this->kernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
    }
}
", "vendor/symfony/twig-bundle/Controller/PreviewErrorController.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Controller/PreviewErrorController.php");
    }
}
