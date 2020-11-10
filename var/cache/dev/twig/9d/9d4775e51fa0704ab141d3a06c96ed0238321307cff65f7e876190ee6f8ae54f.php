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

/* vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php */
class __TwigTemplate_1ea993f905d33ce06dabb7bf4effad3801922029ed58d6e01cd66336be3ddfab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php"));

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

namespace Symfony\\Flex\\Configurator;

use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromRecipeConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = [])
    {
        \$this->write('Setting configuration and copying files');
        \$options = array_merge(\$this->options->toArray(), \$options);

        \$lock->add(\$recipe->getName(), ['files' => \$this->copyFiles(\$config, \$recipe->getFiles(), \$options)]);
    }

    public function unconfigure(Recipe \$recipe, \$config, Lock \$lock)
    {
        \$this->write('Removing configuration and files');
        \$this->removeFiles(\$config, \$this->getRemovableFilesFromRecipeAndLock(\$recipe, \$lock), \$this->options->get('root-dir'));
    }

    private function getRemovableFilesFromRecipeAndLock(Recipe \$recipe, Lock \$lock): array
    {
        \$lockedFiles = array_unique(
            array_reduce(
                array_column(\$lock->all(), 'files'),
                function (array \$carry, array \$package) {
                    return array_merge(\$carry, \$package);
                },
                []
            )
        );

        \$removableFiles = \$recipe->getFiles();
        foreach (\$lockedFiles as \$file) {
            if (isset(\$removableFiles[\$file])) {
                unset(\$removableFiles[\$file]);
            }
        }

        return \$removableFiles;
    }

    private function copyFiles(array \$manifest, array \$files, array \$options): array
    {
        \$copiedFiles = [];
        \$to = \$options['root-dir'] ?? '.';

        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$copiedFiles = array_merge(
                    \$copiedFiles,
                    \$this->copyDir(\$source, \$this->path->concatenate([\$to, \$target]), \$files, \$options)
                );
            } else {
                \$copiedFiles[] = \$this->copyFile(\$this->path->concatenate([\$to, \$target]), \$files[\$source]['contents'], \$files[\$source]['executable'], \$options);
            }
        }

        return \$copiedFiles;
    }

    private function copyDir(string \$source, string \$target, array \$files, array \$options): array
    {
        \$copiedFiles = [];
        foreach (\$files as \$file => \$data) {
            if (0 === strpos(\$file, \$source)) {
                \$file = \$this->path->concatenate([\$target, substr(\$file, \\strlen(\$source))]);
                \$copiedFiles[] = \$this->copyFile(\$file, \$data['contents'], \$data['executable'], \$options);
            }
        }

        return \$copiedFiles;
    }

    private function copyFile(string \$to, string \$contents, bool \$executable, array \$options): string
    {
        \$overwrite = \$options['force'] ?? false;
        \$basePath = \$options['root-dir'] ?? '.';
        \$copiedFile = str_replace(\$basePath.\\DIRECTORY_SEPARATOR, '', \$to);

        if (!\$this->options->shouldWriteFile(\$to, \$overwrite)) {
            return \$copiedFile;
        }

        if (!is_dir(\\dirname(\$to))) {
            mkdir(\\dirname(\$to), 0777, true);
        }

        file_put_contents(\$to, \$this->options->expandTargetDir(\$contents));
        if (\$executable) {
            @chmod(\$to, fileperms(\$to) | 0111);
        }

        \$this->write(sprintf('Created <fg=green>\"%s\"</>', \$this->path->relativize(\$to)));

        return \$copiedFile;
    }

    private function removeFiles(array \$manifest, array \$files, string \$to)
    {
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);

            if ('.git' === \$target) {
                // never remove the main Git directory, even if it was created by a recipe
                continue;
            }

            if ('/' === substr(\$source, -1)) {
                foreach (array_keys(\$files) as \$file) {
                    if (0 === strpos(\$file, \$source)) {
                        \$this->removeFile(\$this->path->concatenate([\$to, \$target, substr(\$file, \\strlen(\$source))]));
                    }
                }
            } else {
                \$this->removeFile(\$this->path->concatenate([\$to, \$target]));
            }
        }
    }

    private function removeFile(string \$to)
    {
        if (!file_exists(\$to)) {
            return;
        }

        @unlink(\$to);
        \$this->write(sprintf('Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$to)));

        if (0 === \\count(glob(\\dirname(\$to).'/*', GLOB_NOSORT))) {
            @rmdir(\\dirname(\$to));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php";
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

namespace Symfony\\Flex\\Configurator;

use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromRecipeConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = [])
    {
        \$this->write('Setting configuration and copying files');
        \$options = array_merge(\$this->options->toArray(), \$options);

        \$lock->add(\$recipe->getName(), ['files' => \$this->copyFiles(\$config, \$recipe->getFiles(), \$options)]);
    }

    public function unconfigure(Recipe \$recipe, \$config, Lock \$lock)
    {
        \$this->write('Removing configuration and files');
        \$this->removeFiles(\$config, \$this->getRemovableFilesFromRecipeAndLock(\$recipe, \$lock), \$this->options->get('root-dir'));
    }

    private function getRemovableFilesFromRecipeAndLock(Recipe \$recipe, Lock \$lock): array
    {
        \$lockedFiles = array_unique(
            array_reduce(
                array_column(\$lock->all(), 'files'),
                function (array \$carry, array \$package) {
                    return array_merge(\$carry, \$package);
                },
                []
            )
        );

        \$removableFiles = \$recipe->getFiles();
        foreach (\$lockedFiles as \$file) {
            if (isset(\$removableFiles[\$file])) {
                unset(\$removableFiles[\$file]);
            }
        }

        return \$removableFiles;
    }

    private function copyFiles(array \$manifest, array \$files, array \$options): array
    {
        \$copiedFiles = [];
        \$to = \$options['root-dir'] ?? '.';

        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$copiedFiles = array_merge(
                    \$copiedFiles,
                    \$this->copyDir(\$source, \$this->path->concatenate([\$to, \$target]), \$files, \$options)
                );
            } else {
                \$copiedFiles[] = \$this->copyFile(\$this->path->concatenate([\$to, \$target]), \$files[\$source]['contents'], \$files[\$source]['executable'], \$options);
            }
        }

        return \$copiedFiles;
    }

    private function copyDir(string \$source, string \$target, array \$files, array \$options): array
    {
        \$copiedFiles = [];
        foreach (\$files as \$file => \$data) {
            if (0 === strpos(\$file, \$source)) {
                \$file = \$this->path->concatenate([\$target, substr(\$file, \\strlen(\$source))]);
                \$copiedFiles[] = \$this->copyFile(\$file, \$data['contents'], \$data['executable'], \$options);
            }
        }

        return \$copiedFiles;
    }

    private function copyFile(string \$to, string \$contents, bool \$executable, array \$options): string
    {
        \$overwrite = \$options['force'] ?? false;
        \$basePath = \$options['root-dir'] ?? '.';
        \$copiedFile = str_replace(\$basePath.\\DIRECTORY_SEPARATOR, '', \$to);

        if (!\$this->options->shouldWriteFile(\$to, \$overwrite)) {
            return \$copiedFile;
        }

        if (!is_dir(\\dirname(\$to))) {
            mkdir(\\dirname(\$to), 0777, true);
        }

        file_put_contents(\$to, \$this->options->expandTargetDir(\$contents));
        if (\$executable) {
            @chmod(\$to, fileperms(\$to) | 0111);
        }

        \$this->write(sprintf('Created <fg=green>\"%s\"</>', \$this->path->relativize(\$to)));

        return \$copiedFile;
    }

    private function removeFiles(array \$manifest, array \$files, string \$to)
    {
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);

            if ('.git' === \$target) {
                // never remove the main Git directory, even if it was created by a recipe
                continue;
            }

            if ('/' === substr(\$source, -1)) {
                foreach (array_keys(\$files) as \$file) {
                    if (0 === strpos(\$file, \$source)) {
                        \$this->removeFile(\$this->path->concatenate([\$to, \$target, substr(\$file, \\strlen(\$source))]));
                    }
                }
            } else {
                \$this->removeFile(\$this->path->concatenate([\$to, \$target]));
            }
        }
    }

    private function removeFile(string \$to)
    {
        if (!file_exists(\$to)) {
            return;
        }

        @unlink(\$to);
        \$this->write(sprintf('Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$to)));

        if (0 === \\count(glob(\\dirname(\$to).'/*', GLOB_NOSORT))) {
            @rmdir(\\dirname(\$to));
        }
    }
}
", "vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php");
    }
}
