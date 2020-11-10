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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php */
class __TwigTemplate_4f6dd63a523781b2e6b79fd448598a5c55b7e381614bfefe8e40676ab30f1e2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use function is_object;
use function method_exists;
use function restore_error_handler;
use function serialize;
use function set_error_handler;
use function sprintf;
use function time;
use function var_export;

/**
 * Php file cache driver.
 */
class PhpFileCache extends FileCache
{
    public const EXTENSION = '.doctrinecache.php';

    /**
     * @var callable
     *
     * This is cached in a local static variable to avoid instantiating a closure each time we need an empty handler
     */
    private static \$emptyErrorHandler;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$directory, \$extension = self::EXTENSION, \$umask = 0002)
    {
        parent::__construct(\$directory, \$extension, \$umask);

        self::\$emptyErrorHandler = function () {
        };
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$value = \$this->includeFileForId(\$id);

        if (\$value === null) {
            return false;
        }

        if (\$value['lifetime'] !== 0 && \$value['lifetime'] < time()) {
            return false;
        }

        return \$value['data'];
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$value = \$this->includeFileForId(\$id);

        if (\$value === null) {
            return false;
        }

        return \$value['lifetime'] === 0 || \$value['lifetime'] > time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            \$lifeTime = time() + \$lifeTime;
        }

        \$filename = \$this->getFilename(\$id);

        \$value = [
            'lifetime'  => \$lifeTime,
            'data'      => \$data,
        ];

        if (is_object(\$data) && method_exists(\$data, '__set_state')) {
            \$value = var_export(\$value, true);
            \$code  = sprintf('<?php return %s;', \$value);
        } else {
            \$value = var_export(serialize(\$value), true);
            \$code  = sprintf('<?php return unserialize(%s);', \$value);
        }

        return \$this->writeFile(\$filename, \$code);
    }

    /**
     * @return array|null
     */
    private function includeFileForId(string \$id) : ?array
    {
        \$fileName = \$this->getFilename(\$id);

        // note: error suppression is still faster than `file_exists`, `is_file` and `is_readable`
        set_error_handler(self::\$emptyErrorHandler);

        \$value = include \$fileName;

        restore_error_handler();

        if (! isset(\$value['lifetime'])) {
            return null;
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use function is_object;
use function method_exists;
use function restore_error_handler;
use function serialize;
use function set_error_handler;
use function sprintf;
use function time;
use function var_export;

/**
 * Php file cache driver.
 */
class PhpFileCache extends FileCache
{
    public const EXTENSION = '.doctrinecache.php';

    /**
     * @var callable
     *
     * This is cached in a local static variable to avoid instantiating a closure each time we need an empty handler
     */
    private static \$emptyErrorHandler;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$directory, \$extension = self::EXTENSION, \$umask = 0002)
    {
        parent::__construct(\$directory, \$extension, \$umask);

        self::\$emptyErrorHandler = function () {
        };
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$value = \$this->includeFileForId(\$id);

        if (\$value === null) {
            return false;
        }

        if (\$value['lifetime'] !== 0 && \$value['lifetime'] < time()) {
            return false;
        }

        return \$value['data'];
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$value = \$this->includeFileForId(\$id);

        if (\$value === null) {
            return false;
        }

        return \$value['lifetime'] === 0 || \$value['lifetime'] > time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            \$lifeTime = time() + \$lifeTime;
        }

        \$filename = \$this->getFilename(\$id);

        \$value = [
            'lifetime'  => \$lifeTime,
            'data'      => \$data,
        ];

        if (is_object(\$data) && method_exists(\$data, '__set_state')) {
            \$value = var_export(\$value, true);
            \$code  = sprintf('<?php return %s;', \$value);
        } else {
            \$value = var_export(serialize(\$value), true);
            \$code  = sprintf('<?php return unserialize(%s);', \$value);
        }

        return \$this->writeFile(\$filename, \$code);
    }

    /**
     * @return array|null
     */
    private function includeFileForId(string \$id) : ?array
    {
        \$fileName = \$this->getFilename(\$id);

        // note: error suppression is still faster than `file_exists`, `is_file` and `is_readable`
        set_error_handler(self::\$emptyErrorHandler);

        \$value = include \$fileName;

        restore_error_handler();

        if (! isset(\$value['lifetime'])) {
            return null;
        }

        return \$value;
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php");
    }
}
