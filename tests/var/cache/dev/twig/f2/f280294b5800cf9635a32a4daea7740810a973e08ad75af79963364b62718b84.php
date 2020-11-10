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

/* vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php */
class __TwigTemplate_7caeaaf4c455d452f7b17544b4266f4c8cbe8ed49934432d3b0a33dc8354d7da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php"));

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

use Symfony\\Bundle\\MakerBundle\\Util\\YamlSourceManipulator;
use Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder;

/**
 * @internal
 */
final class SecurityConfigUpdater
{
    /** @var YamlSourceManipulator */
    private \$manipulator;

    /**
     * Updates security.yaml contents based on a new User class.
     *
     * @param string                 \$yamlSource
     * @param UserClassConfiguration \$userConfig
     * @param string                 \$userClass
     *
     * @return string
     */
    public function updateForUserClass(string \$yamlSource, UserClassConfiguration \$userConfig, string \$userClass): string
    {
        \$this->manipulator = new YamlSourceManipulator(\$yamlSource);

        \$this->normalizeSecurityYamlFile();

        \$this->updateProviders(\$userConfig, \$userClass);

        if (\$userConfig->hasPassword()) {
            \$this->updateEncoders(\$userConfig, \$userClass);
        }

        \$contents = \$this->manipulator->getContents();
        \$this->manipulator = null;

        return \$contents;
    }

    public function updateForAuthenticator(string \$yamlSource, string \$firewallName, \$chosenEntryPoint, string \$authenticatorClass, bool \$logoutSetup): string
    {
        \$this->manipulator = new YamlSourceManipulator(\$yamlSource);

        \$this->normalizeSecurityYamlFile();

        \$newData = \$this->manipulator->getData();

        if (!isset(\$newData['security']['firewalls'])) {
            \$newData['security']['firewalls'] = [];
        }

        if (!isset(\$newData['security']['firewalls'][\$firewallName])) {
            \$newData['security']['firewalls'][\$firewallName] = ['anonymous' => true];
        }

        \$firewall = \$newData['security']['firewalls'][\$firewallName];

        if (!isset(\$firewall['guard'])) {
            \$firewall['guard'] = [];
        }

        if (!isset(\$firewall['guard']['authenticators'])) {
            \$firewall['guard']['authenticators'] = [];
        }

        \$firewall['guard']['authenticators'][] = \$authenticatorClass;

        if (\\count(\$firewall['guard']['authenticators']) > 1) {
            \$firewall['guard']['entry_point'] = \$chosenEntryPoint ?? current(\$firewall['guard']['authenticators']);
        }

        if (!isset(\$firewall['logout']) && \$logoutSetup) {
            \$firewall['logout'] = ['path' => 'app_logout'];
            \$firewall['logout'][] = \$this->manipulator->createCommentLine(
                ' where to redirect after logout'
            );
            \$firewall['logout'][] = \$this->manipulator->createCommentLine(
                ' target: app_any_route'
            );
        }

        \$newData['security']['firewalls'][\$firewallName] = \$firewall;
        \$this->manipulator->setData(\$newData);
        \$contents = \$this->manipulator->getContents();

        return \$contents;
    }

    private function normalizeSecurityYamlFile()
    {
        if (!isset(\$this->manipulator->getData()['security'])) {
            \$newData = \$this->manipulator->getData();
            \$newData['security'] = [];
            \$this->manipulator->setData(\$newData);
        }
    }

    private function updateProviders(UserClassConfiguration \$userConfig, string \$userClass)
    {
        if (\$this->isSingleInMemoryProviderConfigured()) {
            // empty the providers if the generic \"in_memory\" is the only one
            \$newData = \$this->manipulator->getData();
            \$newData['security']['providers'] = [];
            \$this->manipulator->setData(\$newData);
        }

        \$newData = \$this->manipulator->getData();
        \$newData['security']['providers']['__'] = \$this->manipulator->createCommentLine(
            ' used to reload user from session & other features (e.g. switch_user)'
        );
        if (\$userConfig->isEntity()) {
            \$newData['security']['providers']['app_user_provider'] = [
                'entity' => [
                    'class' => \$userClass,
                    'property' => \$userConfig->getIdentityPropertyName(),
                ],
            ];
        } else {
            if (!\$userConfig->getUserProviderClass()) {
                throw new \\LogicException('User provider class must be set for non-entity user.');
            }

            \$newData['security']['providers']['app_user_provider'] = [
                'id' => \$userConfig->getUserProviderClass(),
            ];
        }
        \$this->manipulator->setData(\$newData);
    }

    private function updateEncoders(UserClassConfiguration \$userConfig, string \$userClass)
    {
        \$newData = \$this->manipulator->getData();
        if (!isset(\$newData['security']['encoders'])) {
            // encoders is usually the first key, by convention
            \$newData['security'] = ['encoders' => []] + \$newData['security'];
        }

        \$newData['security']['encoders'][\$userClass] = [
            'algorithm' => \$userConfig->shouldUseArgon2() ? 'argon2i' : (class_exists(NativePasswordEncoder::class) ? 'auto' : 'bcrypt'),
        ];
        \$newData['security']['encoders']['_'] = \$this->manipulator->createEmptyLine();

        \$this->manipulator->setData(\$newData);
    }

    private function isSingleInMemoryProviderConfigured(): bool
    {
        if (!isset(\$this->manipulator->getData()['security']['providers'])) {
            return false;
        }

        \$providersConfig = \$this->manipulator->getData()['security']['providers'];

        if (1 !== \\count(\$providersConfig)) {
            return false;
        }

        \$firstProviderConfig = array_values(\$providersConfig)[0];

        return \\array_key_exists('memory', \$firstProviderConfig);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php";
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

use Symfony\\Bundle\\MakerBundle\\Util\\YamlSourceManipulator;
use Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder;

/**
 * @internal
 */
final class SecurityConfigUpdater
{
    /** @var YamlSourceManipulator */
    private \$manipulator;

    /**
     * Updates security.yaml contents based on a new User class.
     *
     * @param string                 \$yamlSource
     * @param UserClassConfiguration \$userConfig
     * @param string                 \$userClass
     *
     * @return string
     */
    public function updateForUserClass(string \$yamlSource, UserClassConfiguration \$userConfig, string \$userClass): string
    {
        \$this->manipulator = new YamlSourceManipulator(\$yamlSource);

        \$this->normalizeSecurityYamlFile();

        \$this->updateProviders(\$userConfig, \$userClass);

        if (\$userConfig->hasPassword()) {
            \$this->updateEncoders(\$userConfig, \$userClass);
        }

        \$contents = \$this->manipulator->getContents();
        \$this->manipulator = null;

        return \$contents;
    }

    public function updateForAuthenticator(string \$yamlSource, string \$firewallName, \$chosenEntryPoint, string \$authenticatorClass, bool \$logoutSetup): string
    {
        \$this->manipulator = new YamlSourceManipulator(\$yamlSource);

        \$this->normalizeSecurityYamlFile();

        \$newData = \$this->manipulator->getData();

        if (!isset(\$newData['security']['firewalls'])) {
            \$newData['security']['firewalls'] = [];
        }

        if (!isset(\$newData['security']['firewalls'][\$firewallName])) {
            \$newData['security']['firewalls'][\$firewallName] = ['anonymous' => true];
        }

        \$firewall = \$newData['security']['firewalls'][\$firewallName];

        if (!isset(\$firewall['guard'])) {
            \$firewall['guard'] = [];
        }

        if (!isset(\$firewall['guard']['authenticators'])) {
            \$firewall['guard']['authenticators'] = [];
        }

        \$firewall['guard']['authenticators'][] = \$authenticatorClass;

        if (\\count(\$firewall['guard']['authenticators']) > 1) {
            \$firewall['guard']['entry_point'] = \$chosenEntryPoint ?? current(\$firewall['guard']['authenticators']);
        }

        if (!isset(\$firewall['logout']) && \$logoutSetup) {
            \$firewall['logout'] = ['path' => 'app_logout'];
            \$firewall['logout'][] = \$this->manipulator->createCommentLine(
                ' where to redirect after logout'
            );
            \$firewall['logout'][] = \$this->manipulator->createCommentLine(
                ' target: app_any_route'
            );
        }

        \$newData['security']['firewalls'][\$firewallName] = \$firewall;
        \$this->manipulator->setData(\$newData);
        \$contents = \$this->manipulator->getContents();

        return \$contents;
    }

    private function normalizeSecurityYamlFile()
    {
        if (!isset(\$this->manipulator->getData()['security'])) {
            \$newData = \$this->manipulator->getData();
            \$newData['security'] = [];
            \$this->manipulator->setData(\$newData);
        }
    }

    private function updateProviders(UserClassConfiguration \$userConfig, string \$userClass)
    {
        if (\$this->isSingleInMemoryProviderConfigured()) {
            // empty the providers if the generic \"in_memory\" is the only one
            \$newData = \$this->manipulator->getData();
            \$newData['security']['providers'] = [];
            \$this->manipulator->setData(\$newData);
        }

        \$newData = \$this->manipulator->getData();
        \$newData['security']['providers']['__'] = \$this->manipulator->createCommentLine(
            ' used to reload user from session & other features (e.g. switch_user)'
        );
        if (\$userConfig->isEntity()) {
            \$newData['security']['providers']['app_user_provider'] = [
                'entity' => [
                    'class' => \$userClass,
                    'property' => \$userConfig->getIdentityPropertyName(),
                ],
            ];
        } else {
            if (!\$userConfig->getUserProviderClass()) {
                throw new \\LogicException('User provider class must be set for non-entity user.');
            }

            \$newData['security']['providers']['app_user_provider'] = [
                'id' => \$userConfig->getUserProviderClass(),
            ];
        }
        \$this->manipulator->setData(\$newData);
    }

    private function updateEncoders(UserClassConfiguration \$userConfig, string \$userClass)
    {
        \$newData = \$this->manipulator->getData();
        if (!isset(\$newData['security']['encoders'])) {
            // encoders is usually the first key, by convention
            \$newData['security'] = ['encoders' => []] + \$newData['security'];
        }

        \$newData['security']['encoders'][\$userClass] = [
            'algorithm' => \$userConfig->shouldUseArgon2() ? 'argon2i' : (class_exists(NativePasswordEncoder::class) ? 'auto' : 'bcrypt'),
        ];
        \$newData['security']['encoders']['_'] = \$this->manipulator->createEmptyLine();

        \$this->manipulator->setData(\$newData);
    }

    private function isSingleInMemoryProviderConfigured(): bool
    {
        if (!isset(\$this->manipulator->getData()['security']['providers'])) {
            return false;
        }

        \$providersConfig = \$this->manipulator->getData()['security']['providers'];

        if (1 !== \\count(\$providersConfig)) {
            return false;
        }

        \$firstProviderConfig = array_values(\$providersConfig)[0];

        return \\array_key_exists('memory', \$firstProviderConfig);
    }
}
", "vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php");
    }
}
