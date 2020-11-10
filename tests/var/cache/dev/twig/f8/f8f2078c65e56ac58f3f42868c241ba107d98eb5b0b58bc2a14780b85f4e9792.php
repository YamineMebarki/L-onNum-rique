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

/* vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php */
class __TwigTemplate_6f35d59a13444e341db4840ad9fda863a3da6e3801708f58909829cbb1ef3d1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Exception\\LogicException;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\FilesystemTrait;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * Stores tag id <> cache id relationship as a symlink, and lookup on invalidation calls.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author André Rømcke <andre.romcke+symfony@gmail.com>
 *
 * @experimental in 4.3
 */
class FilesystemTagAwareAdapter extends AbstractTagAwareAdapter implements PruneableInterface
{
    use FilesystemTrait {
        doSave as doSaveCache;
        doDelete as doDeleteCache;
    }

    /**
     * Folder used for tag symlinks.
     */
    private const TAG_FOLDER = 'tags';

    /**
     * @var Filesystem|null
     */
    private \$fs;

    public function __construct(string \$namespace = '', int \$defaultLifetime = 0, string \$directory = null, MarshallerInterface \$marshaller = null)
    {
        \$this->marshaller = \$marshaller ?? new DefaultMarshaller();
        parent::__construct('', \$defaultLifetime);
        \$this->init(\$namespace, \$directory);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, ?int \$lifetime, array \$addTagData = [], array \$removeTagData = []): array
    {
        \$failed = \$this->doSaveCache(\$values, \$lifetime);

        \$fs = \$this->getFilesystem();
        // Add Tags as symlinks
        foreach (\$addTagData as \$tagId => \$ids) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$ids as \$id) {
                if (\$failed && \\in_array(\$id, \$failed, true)) {
                    continue;
                }

                \$file = \$this->getFile(\$id);
                \$fs->symlink(\$file, \$this->getFile(\$id, true, \$tagFolder));
            }
        }

        // Unlink removed Tags
        \$files = [];
        foreach (\$removeTagData as \$tagId => \$ids) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$ids as \$id) {
                if (\$failed && \\in_array(\$id, \$failed, true)) {
                    continue;
                }

                \$files[] = \$this->getFile(\$id, false, \$tagFolder);
            }
        }
        \$fs->remove(\$files);

        return \$failed;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids, array \$tagData = []): bool
    {
        \$ok = \$this->doDeleteCache(\$ids);

        // Remove tags
        \$files = [];
        \$fs = \$this->getFilesystem();
        foreach (\$tagData as \$tagId => \$idMap) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$idMap as \$id) {
                \$files[] = \$this->getFile(\$id, false, \$tagFolder);
            }
        }
        \$fs->remove(\$files);

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doInvalidate(array \$tagIds): bool
    {
        foreach (\$tagIds as \$tagId) {
            \$tagsFolder = \$this->getTagFolder(\$tagId);
            if (!file_exists(\$tagsFolder)) {
                continue;
            }

            foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$tagsFolder, \\FilesystemIterator::SKIP_DOTS)) as \$itemLink) {
                if (!\$itemLink->isLink()) {
                    throw new LogicException('Expected a (sym)link when iterating over tag folder, non link found: '.\$itemLink);
                }

                \$valueFile = \$itemLink->getRealPath();
                if (\$valueFile && file_exists(\$valueFile)) {
                    @unlink(\$valueFile);
                }

                @unlink((string) \$itemLink);
            }
        }

        return true;
    }

    private function getFilesystem(): Filesystem
    {
        return \$this->fs ?? \$this->fs = new Filesystem();
    }

    private function getTagFolder(string \$tagId): string
    {
        return \$this->getFile(\$tagId, false, \$this->directory.self::TAG_FOLDER.\\DIRECTORY_SEPARATOR).\\DIRECTORY_SEPARATOR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Exception\\LogicException;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\FilesystemTrait;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * Stores tag id <> cache id relationship as a symlink, and lookup on invalidation calls.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author André Rømcke <andre.romcke+symfony@gmail.com>
 *
 * @experimental in 4.3
 */
class FilesystemTagAwareAdapter extends AbstractTagAwareAdapter implements PruneableInterface
{
    use FilesystemTrait {
        doSave as doSaveCache;
        doDelete as doDeleteCache;
    }

    /**
     * Folder used for tag symlinks.
     */
    private const TAG_FOLDER = 'tags';

    /**
     * @var Filesystem|null
     */
    private \$fs;

    public function __construct(string \$namespace = '', int \$defaultLifetime = 0, string \$directory = null, MarshallerInterface \$marshaller = null)
    {
        \$this->marshaller = \$marshaller ?? new DefaultMarshaller();
        parent::__construct('', \$defaultLifetime);
        \$this->init(\$namespace, \$directory);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, ?int \$lifetime, array \$addTagData = [], array \$removeTagData = []): array
    {
        \$failed = \$this->doSaveCache(\$values, \$lifetime);

        \$fs = \$this->getFilesystem();
        // Add Tags as symlinks
        foreach (\$addTagData as \$tagId => \$ids) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$ids as \$id) {
                if (\$failed && \\in_array(\$id, \$failed, true)) {
                    continue;
                }

                \$file = \$this->getFile(\$id);
                \$fs->symlink(\$file, \$this->getFile(\$id, true, \$tagFolder));
            }
        }

        // Unlink removed Tags
        \$files = [];
        foreach (\$removeTagData as \$tagId => \$ids) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$ids as \$id) {
                if (\$failed && \\in_array(\$id, \$failed, true)) {
                    continue;
                }

                \$files[] = \$this->getFile(\$id, false, \$tagFolder);
            }
        }
        \$fs->remove(\$files);

        return \$failed;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids, array \$tagData = []): bool
    {
        \$ok = \$this->doDeleteCache(\$ids);

        // Remove tags
        \$files = [];
        \$fs = \$this->getFilesystem();
        foreach (\$tagData as \$tagId => \$idMap) {
            \$tagFolder = \$this->getTagFolder(\$tagId);
            foreach (\$idMap as \$id) {
                \$files[] = \$this->getFile(\$id, false, \$tagFolder);
            }
        }
        \$fs->remove(\$files);

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doInvalidate(array \$tagIds): bool
    {
        foreach (\$tagIds as \$tagId) {
            \$tagsFolder = \$this->getTagFolder(\$tagId);
            if (!file_exists(\$tagsFolder)) {
                continue;
            }

            foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$tagsFolder, \\FilesystemIterator::SKIP_DOTS)) as \$itemLink) {
                if (!\$itemLink->isLink()) {
                    throw new LogicException('Expected a (sym)link when iterating over tag folder, non link found: '.\$itemLink);
                }

                \$valueFile = \$itemLink->getRealPath();
                if (\$valueFile && file_exists(\$valueFile)) {
                    @unlink(\$valueFile);
                }

                @unlink((string) \$itemLink);
            }
        }

        return true;
    }

    private function getFilesystem(): Filesystem
    {
        return \$this->fs ?? \$this->fs = new Filesystem();
    }

    private function getTagFolder(string \$tagId): string
    {
        return \$this->getFile(\$tagId, false, \$this->directory.self::TAG_FOLDER.\\DIRECTORY_SEPARATOR).\\DIRECTORY_SEPARATOR;
    }
}
", "vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/FilesystemTagAwareAdapter.php");
    }
}
