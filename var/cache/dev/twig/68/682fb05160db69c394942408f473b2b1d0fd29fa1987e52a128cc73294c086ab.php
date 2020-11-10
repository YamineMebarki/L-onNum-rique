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

/* vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php */
class __TwigTemplate_afc875ddd46ad48686a5d63e50e9eb099129bdee6ae769ba64a2afb62095903d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Templating;

use Doctrine\\Common\\Persistence\\Proxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * The TemplateGuesser class handles the guessing of template name based on controller.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateGuesser
{
    /**
     * @var KernelInterface
     */
    private \$kernel;

    /**
     * @var string[]
     */
    private \$controllerPatterns;

    /**
     * @param string[] \$controllerPatterns Regexps extracting the controller name from its FQN
     */
    public function __construct(KernelInterface \$kernel, array \$controllerPatterns = [])
    {
        \$controllerPatterns[] = '/Controller\\\\\\(.+)Controller\$/';

        \$this->kernel = \$kernel;
        \$this->controllerPatterns = \$controllerPatterns;
    }

    /**
     * Guesses and returns the template name to render based on the controller
     * and action names.
     *
     * @param callable \$controller An array storing the controller object and action method
     *
     * @return string The template name
     *
     * @throws \\InvalidArgumentException
     */
    public function guessTemplateName(\$controller, Request \$request)
    {
        if (\\is_object(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        } elseif (!\\is_array(\$controller)) {
            throw new \\InvalidArgumentException(sprintf('First argument of %s must be an array callable or an object defining the magic method __invoke. \"%s\" given.', __METHOD__, \\gettype(\$controller)));
        }

        \$className = \$this->getRealClass(\\get_class(\$controller[0]));

        \$matchController = null;
        foreach (\$this->controllerPatterns as \$pattern) {
            if (preg_match(\$pattern, \$className, \$tempMatch)) {
                \$matchController = str_replace('\\\\', '/', strtolower(preg_replace('/([a-z\\d])([A-Z])/', '\\\\1_\\\\2', \$tempMatch[1])));
                break;
            }
        }
        if (null === \$matchController) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" class does not look like a controller class (its FQN must match one of the following regexps: \"%s\")', \\get_class(\$controller[0]), implode('\", \"', \$this->controllerPatterns)));
        }

        if ('__invoke' === \$controller[1]) {
            \$matchAction = \$matchController;
            \$matchController = null;
        } else {
            \$matchAction = preg_replace('/Action\$/', '', \$controller[1]);
        }

        \$matchAction = strtolower(preg_replace('/([a-z\\d])([A-Z])/', '\\\\1_\\\\2', \$matchAction));
        \$bundleName = \$this->getBundleForClass(\$className);

        return sprintf((\$bundleName ? '@'.\$bundleName.'/' : '').\$matchController.(\$matchController ? '/' : '').\$matchAction.'.'.\$request->getRequestFormat().'.twig');
    }

    /**
     * Returns the bundle name in which the given class name is located.
     *
     * @param string \$class A fully qualified controller class name
     *
     * @return string|null \$bundle A bundle name
     */
    private function getBundleForClass(\$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);
        \$bundles = \$this->kernel->getBundles();

        do {
            \$namespace = \$reflectionClass->getNamespaceName();
            foreach (\$bundles as \$bundle) {
                if ('Symfony\\Bundle\\FrameworkBundle' === \$bundle->getNamespace()) {
                    continue;
                }
                if (0 === strpos(\$namespace, \$bundle->getNamespace())) {
                    return preg_replace('/Bundle\$/', '', \$bundle->getName());
                }
            }
            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);
    }

    private static function getRealClass(string \$class): string
    {
        if (!class_exists(Proxy::class)) {
            return \$class;
        }
        if (false === \$pos = strrpos(\$class, '\\\\'.Proxy::MARKER.'\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Templating;

use Doctrine\\Common\\Persistence\\Proxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * The TemplateGuesser class handles the guessing of template name based on controller.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateGuesser
{
    /**
     * @var KernelInterface
     */
    private \$kernel;

    /**
     * @var string[]
     */
    private \$controllerPatterns;

    /**
     * @param string[] \$controllerPatterns Regexps extracting the controller name from its FQN
     */
    public function __construct(KernelInterface \$kernel, array \$controllerPatterns = [])
    {
        \$controllerPatterns[] = '/Controller\\\\\\(.+)Controller\$/';

        \$this->kernel = \$kernel;
        \$this->controllerPatterns = \$controllerPatterns;
    }

    /**
     * Guesses and returns the template name to render based on the controller
     * and action names.
     *
     * @param callable \$controller An array storing the controller object and action method
     *
     * @return string The template name
     *
     * @throws \\InvalidArgumentException
     */
    public function guessTemplateName(\$controller, Request \$request)
    {
        if (\\is_object(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        } elseif (!\\is_array(\$controller)) {
            throw new \\InvalidArgumentException(sprintf('First argument of %s must be an array callable or an object defining the magic method __invoke. \"%s\" given.', __METHOD__, \\gettype(\$controller)));
        }

        \$className = \$this->getRealClass(\\get_class(\$controller[0]));

        \$matchController = null;
        foreach (\$this->controllerPatterns as \$pattern) {
            if (preg_match(\$pattern, \$className, \$tempMatch)) {
                \$matchController = str_replace('\\\\', '/', strtolower(preg_replace('/([a-z\\d])([A-Z])/', '\\\\1_\\\\2', \$tempMatch[1])));
                break;
            }
        }
        if (null === \$matchController) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" class does not look like a controller class (its FQN must match one of the following regexps: \"%s\")', \\get_class(\$controller[0]), implode('\", \"', \$this->controllerPatterns)));
        }

        if ('__invoke' === \$controller[1]) {
            \$matchAction = \$matchController;
            \$matchController = null;
        } else {
            \$matchAction = preg_replace('/Action\$/', '', \$controller[1]);
        }

        \$matchAction = strtolower(preg_replace('/([a-z\\d])([A-Z])/', '\\\\1_\\\\2', \$matchAction));
        \$bundleName = \$this->getBundleForClass(\$className);

        return sprintf((\$bundleName ? '@'.\$bundleName.'/' : '').\$matchController.(\$matchController ? '/' : '').\$matchAction.'.'.\$request->getRequestFormat().'.twig');
    }

    /**
     * Returns the bundle name in which the given class name is located.
     *
     * @param string \$class A fully qualified controller class name
     *
     * @return string|null \$bundle A bundle name
     */
    private function getBundleForClass(\$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);
        \$bundles = \$this->kernel->getBundles();

        do {
            \$namespace = \$reflectionClass->getNamespaceName();
            foreach (\$bundles as \$bundle) {
                if ('Symfony\\Bundle\\FrameworkBundle' === \$bundle->getNamespace()) {
                    continue;
                }
                if (0 === strpos(\$namespace, \$bundle->getNamespace())) {
                    return preg_replace('/Bundle\$/', '', \$bundle->getName());
                }
            }
            \$reflectionClass = \$reflectionClass->getParentClass();
        } while (\$reflectionClass);
    }

    private static function getRealClass(string \$class): string
    {
        if (!class_exists(Proxy::class)) {
            return \$class;
        }
        if (false === \$pos = strrpos(\$class, '\\\\'.Proxy::MARKER.'\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
", "vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php");
    }
}
