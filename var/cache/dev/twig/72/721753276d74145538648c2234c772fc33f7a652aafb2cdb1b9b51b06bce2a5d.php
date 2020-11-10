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

/* vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php */
class __TwigTemplate_f8e778193422865f471cf6ccf12a39b659be7b6d1b2583ccfc1ff4c39b80e01a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php"));

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

namespace Symfony\\Component\\VarDumper\\Dumper\\ContextProvider;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * Tries to provide context from a request.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class RequestContextProvider implements ContextProviderInterface
{
    private \$requestStack;
    private \$cloner;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
        \$this->cloner = new VarCloner();
        \$this->cloner->setMaxItems(0);
        \$this->cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);
    }

    public function getContext(): ?array
    {
        if (null === \$request = \$this->requestStack->getCurrentRequest()) {
            return null;
        }

        \$controller = \$request->attributes->get('_controller');

        return [
            'uri' => \$request->getUri(),
            'method' => \$request->getMethod(),
            'controller' => \$controller ? \$this->cloner->cloneVar(\$controller) : \$controller,
            'identifier' => spl_object_hash(\$request),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php";
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

namespace Symfony\\Component\\VarDumper\\Dumper\\ContextProvider;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * Tries to provide context from a request.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class RequestContextProvider implements ContextProviderInterface
{
    private \$requestStack;
    private \$cloner;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
        \$this->cloner = new VarCloner();
        \$this->cloner->setMaxItems(0);
        \$this->cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);
    }

    public function getContext(): ?array
    {
        if (null === \$request = \$this->requestStack->getCurrentRequest()) {
            return null;
        }

        \$controller = \$request->attributes->get('_controller');

        return [
            'uri' => \$request->getUri(),
            'method' => \$request->getMethod(),
            'controller' => \$controller ? \$this->cloner->cloneVar(\$controller) : \$controller,
            'identifier' => spl_object_hash(\$request),
        ];
    }
}
", "vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php");
    }
}
