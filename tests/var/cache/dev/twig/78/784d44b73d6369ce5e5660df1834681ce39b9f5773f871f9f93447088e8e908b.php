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

/* vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php */
class __TwigTemplate_f0feb0f0089d0c9c003dce2f789aa57b62c013705e55d414224a9aa8a9cc6267 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\IsGranted;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Handles the IsGranted annotation on controllers.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class IsGrantedListener implements EventSubscriberInterface
{
    private \$argumentNameConverter;
    private \$authChecker;

    public function __construct(ArgumentNameConverter \$argumentNameConverter, AuthorizationCheckerInterface \$authChecker = null)
    {
        \$this->argumentNameConverter = \$argumentNameConverter;
        \$this->authChecker = \$authChecker;
    }

    public function onKernelControllerArguments(KernelEvent \$event)
    {
        \$request = \$event->getRequest();

        /** @var \$configurations IsGranted[] */
        if (!\$configurations = \$request->attributes->get('_is_granted')) {
            return;
        }

        if (null === \$this->authChecker) {
            throw new \\LogicException('To use the @IsGranted tag, you need to install symfony/security-bundle and configure your security system.');
        }

        \$arguments = \$this->argumentNameConverter->getControllerArguments(\$event);

        foreach (\$configurations as \$configuration) {
            \$subjectRef = \$configuration->getSubject();
            \$subject = null;

            if (\$subjectRef) {
                if (\\is_array(\$subjectRef)) {
                    foreach (\$subjectRef as \$ref) {
                        if (!isset(\$arguments[\$ref])) {
                            throw \$this->createMissingSubjectException(\$ref);
                        }

                        \$subject[\$ref] = \$arguments[\$ref];
                    }
                } else {
                    if (!isset(\$arguments[\$subjectRef])) {
                        throw \$this->createMissingSubjectException(\$subjectRef);
                    }

                    \$subject = \$arguments[\$subjectRef];
                }
            }

            if (!\$this->authChecker->isGranted(\$configuration->getAttributes(), \$subject)) {
                \$argsString = \$this->getIsGrantedString(\$configuration);

                \$message = \$configuration->getMessage() ?: sprintf('Access Denied by controller annotation @IsGranted(%s)', \$argsString);

                if (\$statusCode = \$configuration->getStatusCode()) {
                    throw new HttpException(\$statusCode, \$message);
                }

                throw new AccessDeniedException(\$message);
            }
        }
    }

    private function createMissingSubjectException(string \$subject)
    {
        return new \\RuntimeException(sprintf('Could not find the subject \"%s\" for the @IsGranted annotation. Try adding a \"\$%s\" argument to your controller method.', \$subject, \$subject));
    }

    private function getIsGrantedString(IsGranted \$isGranted)
    {
        \$attributes = array_map(function (\$attribute) {
            return sprintf('\"%s\"', \$attribute);
        }, (array) \$isGranted->getAttributes());
        if (1 === \\count(\$attributes)) {
            \$argsString = reset(\$attributes);
        } else {
            \$argsString = sprintf('[%s]', implode(', ', \$attributes));
        }

        if (null !== \$isGranted->getSubject()) {
            \$argsString = sprintf('%s, %s', \$argsString, \$isGranted->getSubject());
        }

        return \$argsString;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelControllerArguments'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\IsGranted;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Handles the IsGranted annotation on controllers.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class IsGrantedListener implements EventSubscriberInterface
{
    private \$argumentNameConverter;
    private \$authChecker;

    public function __construct(ArgumentNameConverter \$argumentNameConverter, AuthorizationCheckerInterface \$authChecker = null)
    {
        \$this->argumentNameConverter = \$argumentNameConverter;
        \$this->authChecker = \$authChecker;
    }

    public function onKernelControllerArguments(KernelEvent \$event)
    {
        \$request = \$event->getRequest();

        /** @var \$configurations IsGranted[] */
        if (!\$configurations = \$request->attributes->get('_is_granted')) {
            return;
        }

        if (null === \$this->authChecker) {
            throw new \\LogicException('To use the @IsGranted tag, you need to install symfony/security-bundle and configure your security system.');
        }

        \$arguments = \$this->argumentNameConverter->getControllerArguments(\$event);

        foreach (\$configurations as \$configuration) {
            \$subjectRef = \$configuration->getSubject();
            \$subject = null;

            if (\$subjectRef) {
                if (\\is_array(\$subjectRef)) {
                    foreach (\$subjectRef as \$ref) {
                        if (!isset(\$arguments[\$ref])) {
                            throw \$this->createMissingSubjectException(\$ref);
                        }

                        \$subject[\$ref] = \$arguments[\$ref];
                    }
                } else {
                    if (!isset(\$arguments[\$subjectRef])) {
                        throw \$this->createMissingSubjectException(\$subjectRef);
                    }

                    \$subject = \$arguments[\$subjectRef];
                }
            }

            if (!\$this->authChecker->isGranted(\$configuration->getAttributes(), \$subject)) {
                \$argsString = \$this->getIsGrantedString(\$configuration);

                \$message = \$configuration->getMessage() ?: sprintf('Access Denied by controller annotation @IsGranted(%s)', \$argsString);

                if (\$statusCode = \$configuration->getStatusCode()) {
                    throw new HttpException(\$statusCode, \$message);
                }

                throw new AccessDeniedException(\$message);
            }
        }
    }

    private function createMissingSubjectException(string \$subject)
    {
        return new \\RuntimeException(sprintf('Could not find the subject \"%s\" for the @IsGranted annotation. Try adding a \"\$%s\" argument to your controller method.', \$subject, \$subject));
    }

    private function getIsGrantedString(IsGranted \$isGranted)
    {
        \$attributes = array_map(function (\$attribute) {
            return sprintf('\"%s\"', \$attribute);
        }, (array) \$isGranted->getAttributes());
        if (1 === \\count(\$attributes)) {
            \$argsString = reset(\$attributes);
        } else {
            \$argsString = sprintf('[%s]', implode(', ', \$attributes));
        }

        if (null !== \$isGranted->getSubject()) {
            \$argsString = sprintf('%s, %s', \$argsString, \$isGranted->getSubject());
        }

        return \$argsString;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelControllerArguments'];
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php");
    }
}
