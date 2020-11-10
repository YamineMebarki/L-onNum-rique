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

/* vendor/symfony/framework-bundle/Controller/TemplateController.php */
class __TwigTemplate_d80cbf4f5eaa170a89c2a79e48039274423dff4292da780de2d808ce350089ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/TemplateController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/TemplateController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\EngineInterface;
use Twig\\Environment;

/**
 * TemplateController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TemplateController
{
    private \$twig;
    private \$templating;

    public function __construct(Environment \$twig = null, EngineInterface \$templating = null)
    {
        \$this->twig = \$twig;
        \$this->templating = \$templating;
    }

    /**
     * Renders a template.
     *
     * @param string    \$template  The template name
     * @param int|null  \$maxAge    Max age for client caching
     * @param int|null  \$sharedAge Max age for shared (proxy) caching
     * @param bool|null \$private   Whether or not caching should apply for client caches only
     */
    public function templateAction(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        if (\$this->templating) {
            \$response = new Response(\$this->templating->render(\$template));
        } elseif (\$this->twig) {
            \$response = new Response(\$this->twig->render(\$template));
        } else {
            throw new \\LogicException('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.');
        }

        if (\$maxAge) {
            \$response->setMaxAge(\$maxAge);
        }

        if (\$sharedAge) {
            \$response->setSharedMaxAge(\$sharedAge);
        }

        if (\$private) {
            \$response->setPrivate();
        } elseif (false === \$private || (null === \$private && (\$maxAge || \$sharedAge))) {
            \$response->setPublic();
        }

        return \$response;
    }

    public function __invoke(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        return \$this->templateAction(\$template, \$maxAge, \$sharedAge, \$private);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Controller/TemplateController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\EngineInterface;
use Twig\\Environment;

/**
 * TemplateController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TemplateController
{
    private \$twig;
    private \$templating;

    public function __construct(Environment \$twig = null, EngineInterface \$templating = null)
    {
        \$this->twig = \$twig;
        \$this->templating = \$templating;
    }

    /**
     * Renders a template.
     *
     * @param string    \$template  The template name
     * @param int|null  \$maxAge    Max age for client caching
     * @param int|null  \$sharedAge Max age for shared (proxy) caching
     * @param bool|null \$private   Whether or not caching should apply for client caches only
     */
    public function templateAction(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        if (\$this->templating) {
            \$response = new Response(\$this->templating->render(\$template));
        } elseif (\$this->twig) {
            \$response = new Response(\$this->twig->render(\$template));
        } else {
            throw new \\LogicException('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.');
        }

        if (\$maxAge) {
            \$response->setMaxAge(\$maxAge);
        }

        if (\$sharedAge) {
            \$response->setSharedMaxAge(\$sharedAge);
        }

        if (\$private) {
            \$response->setPrivate();
        } elseif (false === \$private || (null === \$private && (\$maxAge || \$sharedAge))) {
            \$response->setPublic();
        }

        return \$response;
    }

    public function __invoke(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        return \$this->templateAction(\$template, \$maxAge, \$sharedAge, \$private);
    }
}
", "vendor/symfony/framework-bundle/Controller/TemplateController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Controller/TemplateController.php");
    }
}
