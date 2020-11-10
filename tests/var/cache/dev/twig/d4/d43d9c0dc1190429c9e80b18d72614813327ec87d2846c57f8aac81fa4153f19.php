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

/* vendor/symfony/flex/src/Configurator.php */
class __TwigTemplate_3541092ffc0f052d5a55f1dc1da6118f9f98c54435d1ccba09a1fbb4c1c1ce12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Configurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Configurator.php"));

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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Symfony\\Flex\\Configurator\\AbstractConfigurator;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Configurator
{
    private \$composer;
    private \$io;
    private \$options;
    private \$configurators;
    private \$cache;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        // ordered list of configurators
        \$this->configurators = [
            'bundles' => Configurator\\BundlesConfigurator::class,
            'copy-from-recipe' => Configurator\\CopyFromRecipeConfigurator::class,
            'copy-from-package' => Configurator\\CopyFromPackageConfigurator::class,
            'env' => Configurator\\EnvConfigurator::class,
            'container' => Configurator\\ContainerConfigurator::class,
            'makefile' => Configurator\\MakefileConfigurator::class,
            'composer-scripts' => Configurator\\ComposerScriptsConfigurator::class,
            'gitignore' => Configurator\\GitignoreConfigurator::class,
            'dockerfile' => Configurator\\DockerfileConfigurator::class,
            'docker-compose' => Configurator\\DockerComposeConfigurator::class,
        ];
    }

    public function install(Recipe \$recipe, Lock \$lock, array \$options = [])
    {
        \$manifest = \$recipe->getManifest();
        foreach (array_keys(\$this->configurators) as \$key) {
            if (isset(\$manifest[\$key])) {
                \$this->get(\$key)->configure(\$recipe, \$manifest[\$key], \$lock, \$options);
            }
        }
    }

    public function unconfigure(Recipe \$recipe, Lock \$lock)
    {
        \$manifest = \$recipe->getManifest();
        foreach (array_keys(\$this->configurators) as \$key) {
            if (isset(\$manifest[\$key])) {
                \$this->get(\$key)->unconfigure(\$recipe, \$manifest[\$key], \$lock);
            }
        }
    }

    private function get(\$key): AbstractConfigurator
    {
        if (!isset(\$this->configurators[\$key])) {
            throw new \\InvalidArgumentException(sprintf('Unknown configurator \"%s\".', \$key));
        }

        if (isset(\$this->cache[\$key])) {
            return \$this->cache[\$key];
        }

        \$class = \$this->configurators[\$key];

        return \$this->cache[\$key] = new \$class(\$this->composer, \$this->io, \$this->options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Configurator.php";
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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Symfony\\Flex\\Configurator\\AbstractConfigurator;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Configurator
{
    private \$composer;
    private \$io;
    private \$options;
    private \$configurators;
    private \$cache;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        // ordered list of configurators
        \$this->configurators = [
            'bundles' => Configurator\\BundlesConfigurator::class,
            'copy-from-recipe' => Configurator\\CopyFromRecipeConfigurator::class,
            'copy-from-package' => Configurator\\CopyFromPackageConfigurator::class,
            'env' => Configurator\\EnvConfigurator::class,
            'container' => Configurator\\ContainerConfigurator::class,
            'makefile' => Configurator\\MakefileConfigurator::class,
            'composer-scripts' => Configurator\\ComposerScriptsConfigurator::class,
            'gitignore' => Configurator\\GitignoreConfigurator::class,
            'dockerfile' => Configurator\\DockerfileConfigurator::class,
            'docker-compose' => Configurator\\DockerComposeConfigurator::class,
        ];
    }

    public function install(Recipe \$recipe, Lock \$lock, array \$options = [])
    {
        \$manifest = \$recipe->getManifest();
        foreach (array_keys(\$this->configurators) as \$key) {
            if (isset(\$manifest[\$key])) {
                \$this->get(\$key)->configure(\$recipe, \$manifest[\$key], \$lock, \$options);
            }
        }
    }

    public function unconfigure(Recipe \$recipe, Lock \$lock)
    {
        \$manifest = \$recipe->getManifest();
        foreach (array_keys(\$this->configurators) as \$key) {
            if (isset(\$manifest[\$key])) {
                \$this->get(\$key)->unconfigure(\$recipe, \$manifest[\$key], \$lock);
            }
        }
    }

    private function get(\$key): AbstractConfigurator
    {
        if (!isset(\$this->configurators[\$key])) {
            throw new \\InvalidArgumentException(sprintf('Unknown configurator \"%s\".', \$key));
        }

        if (isset(\$this->cache[\$key])) {
            return \$this->cache[\$key];
        }

        \$class = \$this->configurators[\$key];

        return \$this->cache[\$key] = new \$class(\$this->composer, \$this->io, \$this->options);
    }
}
", "vendor/symfony/flex/src/Configurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Configurator.php");
    }
}
