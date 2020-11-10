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

/* vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php */
class __TwigTemplate_b9e57936555aee4e62a1164d7da77d12e223ad67218b2f17508f10713144511f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * This pass validates each definition individually only taking the information
 * into account which is contained in the definition itself.
 *
 * Later passes can rely on the following, and specifically do not need to
 * perform these checks themselves:
 *
 * - non synthetic, non abstract services always have a class set
 * - synthetic services are always public
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckDefinitionValidityPass implements CompilerPassInterface
{
    /**
     * Processes the ContainerBuilder to validate the Definition.
     *
     * @throws RuntimeException When the Definition is invalid
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getDefinitions() as \$id => \$definition) {
            // synthetic service is public
            if (\$definition->isSynthetic() && !\$definition->isPublic()) {
                throw new RuntimeException(sprintf('A synthetic service (\"%s\") must be public.', \$id));
            }

            // non-synthetic, non-abstract service has class
            if (!\$definition->isAbstract() && !\$definition->isSynthetic() && !\$definition->getClass()) {
                if (\$definition->getFactory()) {
                    throw new RuntimeException(sprintf('Please add the class to service \"%s\" even if it is constructed by a factory since we might need to add method calls based on compile-time checks.', \$id));
                }
                if (class_exists(\$id) || interface_exists(\$id, false)) {
                    if (0 === strpos(\$id, '\\\\') && 1 < substr_count(\$id, '\\\\')) {
                        throw new RuntimeException(sprintf(
                            'The definition for \"%s\" has no class attribute, and appears to reference a class or interface. '
                            .'Please specify the class attribute explicitly or remove the leading backslash by renaming '
                            .'the service to \"%s\" to get rid of this error.',
                            \$id, substr(\$id, 1)
                        ));
                    }

                    throw new RuntimeException(sprintf(
                         'The definition for \"%s\" has no class attribute, and appears to reference a '
                        .'class or interface in the global namespace. Leaving out the \"class\" attribute '
                        .'is only allowed for namespaced classes. Please specify the class attribute '
                        .'explicitly to get rid of this error.',
                        \$id
                    ));
                }

                throw new RuntimeException(sprintf('The definition for \"%s\" has no class. If you intend to inject this service dynamically at runtime, please mark it as synthetic=true. If this is an abstract definition solely used by child definitions, please add abstract=true, otherwise specify a class to get rid of this error.', \$id));
            }

            // tag attribute values must be scalars
            foreach (\$definition->getTags() as \$name => \$tags) {
                foreach (\$tags as \$attributes) {
                    foreach (\$attributes as \$attribute => \$value) {
                        if (!is_scalar(\$value) && null !== \$value) {
                            throw new RuntimeException(sprintf('A \"tags\" attribute must be of a scalar-type for service \"%s\", tag \"%s\", attribute \"%s\".', \$id, \$name, \$attribute));
                        }
                    }
                }
            }

            if (\$definition->isPublic() && !\$definition->isPrivate()) {
                \$resolvedId = \$container->resolveEnvPlaceholders(\$id, null, \$usedEnvs);
                if (null !== \$usedEnvs) {
                    throw new EnvParameterException([\$resolvedId], null, 'A service name (\"%s\") cannot contain dynamic values.');
                }
            }
        }

        foreach (\$container->getAliases() as \$id => \$alias) {
            if (\$alias->isPublic() && !\$alias->isPrivate()) {
                \$resolvedId = \$container->resolveEnvPlaceholders(\$id, null, \$usedEnvs);
                if (null !== \$usedEnvs) {
                    throw new EnvParameterException([\$resolvedId], null, 'An alias name (\"%s\") cannot contain dynamic values.');
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * This pass validates each definition individually only taking the information
 * into account which is contained in the definition itself.
 *
 * Later passes can rely on the following, and specifically do not need to
 * perform these checks themselves:
 *
 * - non synthetic, non abstract services always have a class set
 * - synthetic services are always public
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckDefinitionValidityPass implements CompilerPassInterface
{
    /**
     * Processes the ContainerBuilder to validate the Definition.
     *
     * @throws RuntimeException When the Definition is invalid
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getDefinitions() as \$id => \$definition) {
            // synthetic service is public
            if (\$definition->isSynthetic() && !\$definition->isPublic()) {
                throw new RuntimeException(sprintf('A synthetic service (\"%s\") must be public.', \$id));
            }

            // non-synthetic, non-abstract service has class
            if (!\$definition->isAbstract() && !\$definition->isSynthetic() && !\$definition->getClass()) {
                if (\$definition->getFactory()) {
                    throw new RuntimeException(sprintf('Please add the class to service \"%s\" even if it is constructed by a factory since we might need to add method calls based on compile-time checks.', \$id));
                }
                if (class_exists(\$id) || interface_exists(\$id, false)) {
                    if (0 === strpos(\$id, '\\\\') && 1 < substr_count(\$id, '\\\\')) {
                        throw new RuntimeException(sprintf(
                            'The definition for \"%s\" has no class attribute, and appears to reference a class or interface. '
                            .'Please specify the class attribute explicitly or remove the leading backslash by renaming '
                            .'the service to \"%s\" to get rid of this error.',
                            \$id, substr(\$id, 1)
                        ));
                    }

                    throw new RuntimeException(sprintf(
                         'The definition for \"%s\" has no class attribute, and appears to reference a '
                        .'class or interface in the global namespace. Leaving out the \"class\" attribute '
                        .'is only allowed for namespaced classes. Please specify the class attribute '
                        .'explicitly to get rid of this error.',
                        \$id
                    ));
                }

                throw new RuntimeException(sprintf('The definition for \"%s\" has no class. If you intend to inject this service dynamically at runtime, please mark it as synthetic=true. If this is an abstract definition solely used by child definitions, please add abstract=true, otherwise specify a class to get rid of this error.', \$id));
            }

            // tag attribute values must be scalars
            foreach (\$definition->getTags() as \$name => \$tags) {
                foreach (\$tags as \$attributes) {
                    foreach (\$attributes as \$attribute => \$value) {
                        if (!is_scalar(\$value) && null !== \$value) {
                            throw new RuntimeException(sprintf('A \"tags\" attribute must be of a scalar-type for service \"%s\", tag \"%s\", attribute \"%s\".', \$id, \$name, \$attribute));
                        }
                    }
                }
            }

            if (\$definition->isPublic() && !\$definition->isPrivate()) {
                \$resolvedId = \$container->resolveEnvPlaceholders(\$id, null, \$usedEnvs);
                if (null !== \$usedEnvs) {
                    throw new EnvParameterException([\$resolvedId], null, 'A service name (\"%s\") cannot contain dynamic values.');
                }
            }
        }

        foreach (\$container->getAliases() as \$id => \$alias) {
            if (\$alias->isPublic() && !\$alias->isPrivate()) {
                \$resolvedId = \$container->resolveEnvPlaceholders(\$id, null, \$usedEnvs);
                if (null !== \$usedEnvs) {
                    throw new EnvParameterException([\$resolvedId], null, 'An alias name (\"%s\") cannot contain dynamic values.');
                }
            }
        }
    }
}
", "vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/CheckDefinitionValidityPass.php");
    }
}
