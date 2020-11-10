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

/* vendor/symfony/framework-bundle/Controller/ControllerNameParser.php */
class __TwigTemplate_9d91ebdfe777fd6204586085a54d530bdbe5aefc63656e8940623f40ad013afc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/ControllerNameParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/ControllerNameParser.php"));

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

use Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * ControllerNameParser converts controller from the short notation a:b:c
 * (BlogBundle:Post:index) to a fully-qualified class::method string
 * (Bundle\\BlogBundle\\Controller\\PostController::indexAction).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.1
 */
class ControllerNameParser
{
    protected \$kernel;

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * Converts a short notation a:b:c to a class::method.
     *
     * @param string \$controller A short notation controller (a:b:c)
     *
     * @return string A string in the class::method notation
     *
     * @throws \\InvalidArgumentException when the specified bundle is not enabled
     *                                   or the controller cannot be found
     */
    public function parse(\$controller)
    {
        if (2 > \\func_num_args() || func_get_arg(1)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.1.', __CLASS__), E_USER_DEPRECATED);
        }

        \$parts = explode(':', \$controller);
        if (3 !== \\count(\$parts) || \\in_array('', \$parts, true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" controller is not a valid \"a:b:c\" controller string.', \$controller));
        }

        \$originalController = \$controller;
        list(\$bundleName, \$controller, \$action) = \$parts;
        \$controller = str_replace('/', '\\\\', \$controller);

        try {
            // this throws an exception if there is no such bundle
            \$bundle = \$this->kernel->getBundle(\$bundleName);
        } catch (\\InvalidArgumentException \$e) {
            \$message = sprintf(
                'The \"%s\" (from the _controller value \"%s\") does not exist or is not enabled in your kernel!',
                \$bundleName,
                \$originalController
            );

            if (\$alternative = \$this->findAlternative(\$bundleName)) {
                \$message .= sprintf(' Did you mean \"%s:%s:%s\"?', \$alternative, \$controller, \$action);
            }

            throw new \\InvalidArgumentException(\$message, 0, \$e);
        }

        \$try = \$bundle->getNamespace().'\\\\Controller\\\\'.\$controller.'Controller';
        if (class_exists(\$try)) {
            return \$try.'::'.\$action.'Action';
        }

        throw new \\InvalidArgumentException(sprintf('The _controller value \"%s:%s:%s\" maps to a \"%s\" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', \$bundleName, \$controller, \$action, \$try));
    }

    /**
     * Converts a class::method notation to a short one (a:b:c).
     *
     * @param string \$controller A string in the class::method notation
     *
     * @return string A short notation controller (a:b:c)
     *
     * @throws \\InvalidArgumentException when the controller is not valid or cannot be found in any bundle
     */
    public function build(\$controller)
    {
        @trigger_error(sprintf('The %s class is deprecated since Symfony 4.1.', __CLASS__), E_USER_DEPRECATED);

        if (0 === preg_match('#^(.*?\\\\\\\\Controller\\\\\\\\(.+)Controller)::(.+)Action\$#', \$controller, \$match)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" controller is not a valid \"class::method\" string.', \$controller));
        }

        \$className = \$match[1];
        \$controllerName = \$match[2];
        \$actionName = \$match[3];
        foreach (\$this->kernel->getBundles() as \$name => \$bundle) {
            if (0 !== strpos(\$className, \$bundle->getNamespace())) {
                continue;
            }

            return sprintf('%s:%s:%s', \$name, \$controllerName, \$actionName);
        }

        throw new \\InvalidArgumentException(sprintf('Unable to find a bundle that defines controller \"%s\".', \$controller));
    }

    /**
     * Attempts to find a bundle that is *similar* to the given bundle name.
     */
    private function findAlternative(string \$nonExistentBundleName): ?string
    {
        \$bundleNames = array_map(function (BundleInterface \$b) {
            return \$b->getName();
        }, \$this->kernel->getBundles());

        \$alternative = null;
        \$shortest = null;
        foreach (\$bundleNames as \$bundleName) {
            // if there's a partial match, return it immediately
            if (false !== strpos(\$bundleName, \$nonExistentBundleName)) {
                return \$bundleName;
            }

            \$lev = levenshtein(\$nonExistentBundleName, \$bundleName);
            if (\$lev <= \\strlen(\$nonExistentBundleName) / 3 && (null === \$alternative || \$lev < \$shortest)) {
                \$alternative = \$bundleName;
                \$shortest = \$lev;
            }
        }

        return \$alternative;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Controller/ControllerNameParser.php";
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

use Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * ControllerNameParser converts controller from the short notation a:b:c
 * (BlogBundle:Post:index) to a fully-qualified class::method string
 * (Bundle\\BlogBundle\\Controller\\PostController::indexAction).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.1
 */
class ControllerNameParser
{
    protected \$kernel;

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * Converts a short notation a:b:c to a class::method.
     *
     * @param string \$controller A short notation controller (a:b:c)
     *
     * @return string A string in the class::method notation
     *
     * @throws \\InvalidArgumentException when the specified bundle is not enabled
     *                                   or the controller cannot be found
     */
    public function parse(\$controller)
    {
        if (2 > \\func_num_args() || func_get_arg(1)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.1.', __CLASS__), E_USER_DEPRECATED);
        }

        \$parts = explode(':', \$controller);
        if (3 !== \\count(\$parts) || \\in_array('', \$parts, true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" controller is not a valid \"a:b:c\" controller string.', \$controller));
        }

        \$originalController = \$controller;
        list(\$bundleName, \$controller, \$action) = \$parts;
        \$controller = str_replace('/', '\\\\', \$controller);

        try {
            // this throws an exception if there is no such bundle
            \$bundle = \$this->kernel->getBundle(\$bundleName);
        } catch (\\InvalidArgumentException \$e) {
            \$message = sprintf(
                'The \"%s\" (from the _controller value \"%s\") does not exist or is not enabled in your kernel!',
                \$bundleName,
                \$originalController
            );

            if (\$alternative = \$this->findAlternative(\$bundleName)) {
                \$message .= sprintf(' Did you mean \"%s:%s:%s\"?', \$alternative, \$controller, \$action);
            }

            throw new \\InvalidArgumentException(\$message, 0, \$e);
        }

        \$try = \$bundle->getNamespace().'\\\\Controller\\\\'.\$controller.'Controller';
        if (class_exists(\$try)) {
            return \$try.'::'.\$action.'Action';
        }

        throw new \\InvalidArgumentException(sprintf('The _controller value \"%s:%s:%s\" maps to a \"%s\" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', \$bundleName, \$controller, \$action, \$try));
    }

    /**
     * Converts a class::method notation to a short one (a:b:c).
     *
     * @param string \$controller A string in the class::method notation
     *
     * @return string A short notation controller (a:b:c)
     *
     * @throws \\InvalidArgumentException when the controller is not valid or cannot be found in any bundle
     */
    public function build(\$controller)
    {
        @trigger_error(sprintf('The %s class is deprecated since Symfony 4.1.', __CLASS__), E_USER_DEPRECATED);

        if (0 === preg_match('#^(.*?\\\\\\\\Controller\\\\\\\\(.+)Controller)::(.+)Action\$#', \$controller, \$match)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" controller is not a valid \"class::method\" string.', \$controller));
        }

        \$className = \$match[1];
        \$controllerName = \$match[2];
        \$actionName = \$match[3];
        foreach (\$this->kernel->getBundles() as \$name => \$bundle) {
            if (0 !== strpos(\$className, \$bundle->getNamespace())) {
                continue;
            }

            return sprintf('%s:%s:%s', \$name, \$controllerName, \$actionName);
        }

        throw new \\InvalidArgumentException(sprintf('Unable to find a bundle that defines controller \"%s\".', \$controller));
    }

    /**
     * Attempts to find a bundle that is *similar* to the given bundle name.
     */
    private function findAlternative(string \$nonExistentBundleName): ?string
    {
        \$bundleNames = array_map(function (BundleInterface \$b) {
            return \$b->getName();
        }, \$this->kernel->getBundles());

        \$alternative = null;
        \$shortest = null;
        foreach (\$bundleNames as \$bundleName) {
            // if there's a partial match, return it immediately
            if (false !== strpos(\$bundleName, \$nonExistentBundleName)) {
                return \$bundleName;
            }

            \$lev = levenshtein(\$nonExistentBundleName, \$bundleName);
            if (\$lev <= \\strlen(\$nonExistentBundleName) / 3 && (null === \$alternative || \$lev < \$shortest)) {
                \$alternative = \$bundleName;
                \$shortest = \$lev;
            }
        }

        return \$alternative;
    }
}
", "vendor/symfony/framework-bundle/Controller/ControllerNameParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php");
    }
}
