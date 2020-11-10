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

/* vendor/symfony/flex/src/SymfonyBundle.php */
class __TwigTemplate_e013d7a1072988bdafffea7622eea57354de3b1892a7bc68437a4051ec200cfe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/SymfonyBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/SymfonyBundle.php"));

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
use Composer\\Package\\PackageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SymfonyBundle
{
    private \$package;
    private \$operation;
    private \$vendorDir;

    public function __construct(Composer \$composer, PackageInterface \$package, string \$operation)
    {
        \$this->package = \$package;
        \$this->operation = \$operation;
        \$this->vendorDir = rtrim(\$composer->getConfig()->get('vendor-dir'), '/');
    }

    public function getClassNames(): array
    {
        \$uninstall = 'uninstall' === \$this->operation;
        \$classes = [];
        \$autoload = \$this->package->getAutoload();
        \$isSyliusPlugin = 'sylius-plugin' === \$this->package->getType();
        foreach (['psr-4' => true, 'psr-0' => false] as \$psr => \$isPsr4) {
            if (!isset(\$autoload[\$psr])) {
                continue;
            }

            foreach (\$autoload[\$psr] as \$namespace => \$paths) {
                if (!\\is_array(\$paths)) {
                    \$paths = [\$paths];
                }
                foreach (\$paths as \$path) {
                    foreach (\$this->extractClassNames(\$namespace, \$isSyliusPlugin) as \$class) {
                        // we only check class existence on install as we do have the code available
                        // in contrast to uninstall operation
                        if (!\$uninstall && !\$this->checkClassExists(\$class, \$path, \$isPsr4)) {
                            continue;
                        }

                        \$classes[] = \$class;
                    }
                }
            }
        }

        return \$classes;
    }

    private function extractClassNames(string \$namespace, bool \$isSyliusPlugin): array
    {
        \$namespace = trim(\$namespace, '\\\\');
        \$class = \$namespace.'\\\\';
        \$parts = explode('\\\\', \$namespace);
        \$suffix = \$parts[\\count(\$parts) - 1];
        \$endOfWord = substr(\$suffix, -6);

        if (\$isSyliusPlugin) {
            if ('Bundle' !== \$endOfWord && 'Plugin' !== \$endOfWord) {
                \$suffix .= 'Bundle';
            }
        } elseif ('Bundle' !== \$endOfWord) {
            \$suffix .= 'Bundle';
        }

        \$classes = [\$class.\$suffix];
        \$acc = '';
        foreach (\\array_slice(\$parts, 0, -1) as \$part) {
            if ('Bundle' === \$part || (\$isSyliusPlugin && 'Plugin' === \$part)) {
                continue;
            }
            \$classes[] = \$class.\$part.\$suffix;
            \$acc .= \$part;
            \$classes[] = \$class.\$acc.\$suffix;
        }

        return array_unique(\$classes);
    }

    private function checkClassExists(string \$class, string \$path, bool \$isPsr4): bool
    {
        \$classPath = (\$this->vendorDir ? \$this->vendorDir.'/' : '').\$this->package->getPrettyName().'/'.\$path.'/';
        \$parts = explode('\\\\', \$class);
        \$class = \$parts[\\count(\$parts) - 1];
        if (!\$isPsr4) {
            \$classPath .= str_replace('\\\\', '', implode('/', \\array_slice(\$parts, 0, -1))).'/';
        }
        \$classPath .= str_replace('\\\\', '/', \$class).'.php';

        return file_exists(\$classPath);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/SymfonyBundle.php";
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
use Composer\\Package\\PackageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SymfonyBundle
{
    private \$package;
    private \$operation;
    private \$vendorDir;

    public function __construct(Composer \$composer, PackageInterface \$package, string \$operation)
    {
        \$this->package = \$package;
        \$this->operation = \$operation;
        \$this->vendorDir = rtrim(\$composer->getConfig()->get('vendor-dir'), '/');
    }

    public function getClassNames(): array
    {
        \$uninstall = 'uninstall' === \$this->operation;
        \$classes = [];
        \$autoload = \$this->package->getAutoload();
        \$isSyliusPlugin = 'sylius-plugin' === \$this->package->getType();
        foreach (['psr-4' => true, 'psr-0' => false] as \$psr => \$isPsr4) {
            if (!isset(\$autoload[\$psr])) {
                continue;
            }

            foreach (\$autoload[\$psr] as \$namespace => \$paths) {
                if (!\\is_array(\$paths)) {
                    \$paths = [\$paths];
                }
                foreach (\$paths as \$path) {
                    foreach (\$this->extractClassNames(\$namespace, \$isSyliusPlugin) as \$class) {
                        // we only check class existence on install as we do have the code available
                        // in contrast to uninstall operation
                        if (!\$uninstall && !\$this->checkClassExists(\$class, \$path, \$isPsr4)) {
                            continue;
                        }

                        \$classes[] = \$class;
                    }
                }
            }
        }

        return \$classes;
    }

    private function extractClassNames(string \$namespace, bool \$isSyliusPlugin): array
    {
        \$namespace = trim(\$namespace, '\\\\');
        \$class = \$namespace.'\\\\';
        \$parts = explode('\\\\', \$namespace);
        \$suffix = \$parts[\\count(\$parts) - 1];
        \$endOfWord = substr(\$suffix, -6);

        if (\$isSyliusPlugin) {
            if ('Bundle' !== \$endOfWord && 'Plugin' !== \$endOfWord) {
                \$suffix .= 'Bundle';
            }
        } elseif ('Bundle' !== \$endOfWord) {
            \$suffix .= 'Bundle';
        }

        \$classes = [\$class.\$suffix];
        \$acc = '';
        foreach (\\array_slice(\$parts, 0, -1) as \$part) {
            if ('Bundle' === \$part || (\$isSyliusPlugin && 'Plugin' === \$part)) {
                continue;
            }
            \$classes[] = \$class.\$part.\$suffix;
            \$acc .= \$part;
            \$classes[] = \$class.\$acc.\$suffix;
        }

        return array_unique(\$classes);
    }

    private function checkClassExists(string \$class, string \$path, bool \$isPsr4): bool
    {
        \$classPath = (\$this->vendorDir ? \$this->vendorDir.'/' : '').\$this->package->getPrettyName().'/'.\$path.'/';
        \$parts = explode('\\\\', \$class);
        \$class = \$parts[\\count(\$parts) - 1];
        if (!\$isPsr4) {
            \$classPath .= str_replace('\\\\', '', implode('/', \\array_slice(\$parts, 0, -1))).'/';
        }
        \$classPath .= str_replace('\\\\', '/', \$class).'.php';

        return file_exists(\$classPath);
    }
}
", "vendor/symfony/flex/src/SymfonyBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/SymfonyBundle.php");
    }
}
