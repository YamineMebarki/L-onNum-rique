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

/* vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php */
class __TwigTemplate_46fccce93a621be08243e42d1147313eb700a387f5232dc67fc496d99e299f81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @internal
 */
final class InteractiveSecurityHelper
{
    public function guessFirewallName(SymfonyStyle \$io, array \$securityData, string \$questionText = null): string
    {
        \$realFirewalls = array_filter(
            \$securityData['security']['firewalls'] ?? [],
            function (\$item) {
                return !isset(\$item['security']) || true === \$item['security'];
            }
        );

        if (0 === \\count(\$realFirewalls)) {
            return 'main';
        }

        if (1 === \\count(\$realFirewalls)) {
            return key(\$realFirewalls);
        }

        return \$io->choice(
            \$questionText ?? 'Which firewall do you want to update?',
            array_keys(\$realFirewalls),
            key(\$realFirewalls)
        );
    }

    public function guessEntryPoint(SymfonyStyle \$io, array \$securityData, string \$authenticatorClass, string \$firewallName)
    {
        if (!isset(\$securityData['security'])) {
            \$securityData['security'] = [];
        }

        if (!isset(\$securityData['security']['firewalls'])) {
            \$securityData['security']['firewalls'] = [];
        }

        \$firewalls = \$securityData['security']['firewalls'];
        if (!isset(\$firewalls[\$firewallName])) {
            throw new RuntimeCommandException(sprintf('Firewall \"%s\" does not exist', \$firewallName));
        }

        if (!isset(\$firewalls[\$firewallName]['guard'])
            || !isset(\$firewalls[\$firewallName]['guard']['authenticators'])
            || !\$firewalls[\$firewallName]['guard']['authenticators']
            || isset(\$firewalls[\$firewallName]['guard']['entry_point'])) {
            return null;
        }

        \$authenticators = \$firewalls[\$firewallName]['guard']['authenticators'];
        \$authenticators[] = \$authenticatorClass;

        return \$io->choice(
            'The entry point for your firewall is what should happen when an anonymous user tries to access
a protected page. For example, a common \"entry point\" behavior is to redirect to the login page.
The \"entry point\" behavior is controlled by the start() method on your authenticator.
However, you will now have multiple authenticators. You need to choose which authenticator\\'s
start() method should be used as the entry point (the start() method on all other
authenticators will be ignored, and can be blank.',
            \$authenticators,
            current(\$authenticators)
        );
    }

    public function guessUserClass(SymfonyStyle \$io, array \$providers, string \$questionText = null): string
    {
        if (1 === \\count(\$providers) && isset(current(\$providers)['entity'])) {
            \$entityProvider = current(\$providers);

            return \$entityProvider['entity']['class'];
        }

        \$userClass = \$io->ask(
            \$questionText ?? 'Enter the User class that you want to authenticate (e.g. <fg=yellow>App\\\\Entity\\\\User</>)',
            \$this->guessUserClassDefault(),
            [Validator::class, 'classIsUserInterface']
        );

        return \$userClass;
    }

    private function guessUserClassDefault(): string
    {
        if (class_exists('App\\\\Entity\\\\User') && isset(class_implements('App\\\\Entity\\\\User')[UserInterface::class])) {
            return 'App\\\\Entity\\\\User';
        }

        if (class_exists('App\\\\Security\\\\User') && isset(class_implements('App\\\\Security\\\\User')[UserInterface::class])) {
            return 'App\\\\Security\\\\User';
        }

        return '';
    }

    public function guessUserNameField(SymfonyStyle \$io, string \$userClass, array \$providers): string
    {
        if (1 === \\count(\$providers) && isset(current(\$providers)['entity']) && isset(current(\$providers)['entity']['property'])) {
            \$entityProvider = current(\$providers);

            return \$entityProvider['entity']['property'];
        }

        if (property_exists(\$userClass, 'email') && !property_exists(\$userClass, 'username')) {
            return 'email';
        }

        if (!property_exists(\$userClass, 'email') && property_exists(\$userClass, 'username')) {
            return 'username';
        }

        \$classProperties = [];
        \$reflectionClass = new \\ReflectionClass(\$userClass);
        foreach (\$reflectionClass->getProperties() as \$property) {
            \$classProperties[] = \$property->name;
        }

        if (empty(\$classProperties)) {
            throw new \\LogicException(sprintf('No properties were found in \"%s\" entity', \$userClass));
        }

        return \$io->choice(
            sprintf('Which field on your <fg=yellow>%s</> class will people enter when logging in?', \$userClass),
            \$classProperties,
            property_exists(\$userClass, 'username') ? 'username' : (property_exists(\$userClass, 'email') ? 'email' : null)
        );
    }

    public function guessPasswordField(SymfonyStyle \$io, string \$userClass): string
    {
        if (property_exists(\$userClass, 'password')) {
            return 'password';
        }

        \$classProperties = [];
        \$reflectionClass = new \\ReflectionClass(\$userClass);
        foreach (\$reflectionClass->getProperties() as \$property) {
            \$classProperties[] = \$property->name;
        }

        return \$io->choice(
            sprintf('Which field on your <fg=yellow>%s</> class holds the encoded password?', \$userClass),
            \$classProperties
        );
    }

    public function getAuthenticatorClasses(array \$firewallData): array
    {
        \$authenticatorClasses = [];

        if (!isset(\$firewallData['guard'])) {
            return [];
        }

        if (!isset(\$firewallData['guard']['authenticators'])) {
            return [];
        }

        foreach (\$firewallData['guard']['authenticators'] as \$authenticator) {
            // skip service id's - as they won't work for autowiring
            if (class_exists(\$authenticator)) {
                \$authenticatorClasses[] = \$authenticator;
            }
        }

        return \$authenticatorClasses;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @internal
 */
final class InteractiveSecurityHelper
{
    public function guessFirewallName(SymfonyStyle \$io, array \$securityData, string \$questionText = null): string
    {
        \$realFirewalls = array_filter(
            \$securityData['security']['firewalls'] ?? [],
            function (\$item) {
                return !isset(\$item['security']) || true === \$item['security'];
            }
        );

        if (0 === \\count(\$realFirewalls)) {
            return 'main';
        }

        if (1 === \\count(\$realFirewalls)) {
            return key(\$realFirewalls);
        }

        return \$io->choice(
            \$questionText ?? 'Which firewall do you want to update?',
            array_keys(\$realFirewalls),
            key(\$realFirewalls)
        );
    }

    public function guessEntryPoint(SymfonyStyle \$io, array \$securityData, string \$authenticatorClass, string \$firewallName)
    {
        if (!isset(\$securityData['security'])) {
            \$securityData['security'] = [];
        }

        if (!isset(\$securityData['security']['firewalls'])) {
            \$securityData['security']['firewalls'] = [];
        }

        \$firewalls = \$securityData['security']['firewalls'];
        if (!isset(\$firewalls[\$firewallName])) {
            throw new RuntimeCommandException(sprintf('Firewall \"%s\" does not exist', \$firewallName));
        }

        if (!isset(\$firewalls[\$firewallName]['guard'])
            || !isset(\$firewalls[\$firewallName]['guard']['authenticators'])
            || !\$firewalls[\$firewallName]['guard']['authenticators']
            || isset(\$firewalls[\$firewallName]['guard']['entry_point'])) {
            return null;
        }

        \$authenticators = \$firewalls[\$firewallName]['guard']['authenticators'];
        \$authenticators[] = \$authenticatorClass;

        return \$io->choice(
            'The entry point for your firewall is what should happen when an anonymous user tries to access
a protected page. For example, a common \"entry point\" behavior is to redirect to the login page.
The \"entry point\" behavior is controlled by the start() method on your authenticator.
However, you will now have multiple authenticators. You need to choose which authenticator\\'s
start() method should be used as the entry point (the start() method on all other
authenticators will be ignored, and can be blank.',
            \$authenticators,
            current(\$authenticators)
        );
    }

    public function guessUserClass(SymfonyStyle \$io, array \$providers, string \$questionText = null): string
    {
        if (1 === \\count(\$providers) && isset(current(\$providers)['entity'])) {
            \$entityProvider = current(\$providers);

            return \$entityProvider['entity']['class'];
        }

        \$userClass = \$io->ask(
            \$questionText ?? 'Enter the User class that you want to authenticate (e.g. <fg=yellow>App\\\\Entity\\\\User</>)',
            \$this->guessUserClassDefault(),
            [Validator::class, 'classIsUserInterface']
        );

        return \$userClass;
    }

    private function guessUserClassDefault(): string
    {
        if (class_exists('App\\\\Entity\\\\User') && isset(class_implements('App\\\\Entity\\\\User')[UserInterface::class])) {
            return 'App\\\\Entity\\\\User';
        }

        if (class_exists('App\\\\Security\\\\User') && isset(class_implements('App\\\\Security\\\\User')[UserInterface::class])) {
            return 'App\\\\Security\\\\User';
        }

        return '';
    }

    public function guessUserNameField(SymfonyStyle \$io, string \$userClass, array \$providers): string
    {
        if (1 === \\count(\$providers) && isset(current(\$providers)['entity']) && isset(current(\$providers)['entity']['property'])) {
            \$entityProvider = current(\$providers);

            return \$entityProvider['entity']['property'];
        }

        if (property_exists(\$userClass, 'email') && !property_exists(\$userClass, 'username')) {
            return 'email';
        }

        if (!property_exists(\$userClass, 'email') && property_exists(\$userClass, 'username')) {
            return 'username';
        }

        \$classProperties = [];
        \$reflectionClass = new \\ReflectionClass(\$userClass);
        foreach (\$reflectionClass->getProperties() as \$property) {
            \$classProperties[] = \$property->name;
        }

        if (empty(\$classProperties)) {
            throw new \\LogicException(sprintf('No properties were found in \"%s\" entity', \$userClass));
        }

        return \$io->choice(
            sprintf('Which field on your <fg=yellow>%s</> class will people enter when logging in?', \$userClass),
            \$classProperties,
            property_exists(\$userClass, 'username') ? 'username' : (property_exists(\$userClass, 'email') ? 'email' : null)
        );
    }

    public function guessPasswordField(SymfonyStyle \$io, string \$userClass): string
    {
        if (property_exists(\$userClass, 'password')) {
            return 'password';
        }

        \$classProperties = [];
        \$reflectionClass = new \\ReflectionClass(\$userClass);
        foreach (\$reflectionClass->getProperties() as \$property) {
            \$classProperties[] = \$property->name;
        }

        return \$io->choice(
            sprintf('Which field on your <fg=yellow>%s</> class holds the encoded password?', \$userClass),
            \$classProperties
        );
    }

    public function getAuthenticatorClasses(array \$firewallData): array
    {
        \$authenticatorClasses = [];

        if (!isset(\$firewallData['guard'])) {
            return [];
        }

        if (!isset(\$firewallData['guard']['authenticators'])) {
            return [];
        }

        foreach (\$firewallData['guard']['authenticators'] as \$authenticator) {
            // skip service id's - as they won't work for autowiring
            if (class_exists(\$authenticator)) {
                \$authenticatorClasses[] = \$authenticator;
            }
        }

        return \$authenticatorClasses;
    }
}
", "vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Security/InteractiveSecurityHelper.php");
    }
}