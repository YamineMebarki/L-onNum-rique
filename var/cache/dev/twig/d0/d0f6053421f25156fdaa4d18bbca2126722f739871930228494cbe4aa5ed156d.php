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

/* vendor/symfony/http-foundation/FileBag.php */
class __TwigTemplate_d2e9be03b46876c27e5f810cdce9bbcaf58e11be1a4d2ba0c4e7f51f6a9352c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/FileBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/FileBag.php"));

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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * FileBag is a container for uploaded files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class FileBag extends ParameterBag
{
    private static \$fileKeys = ['error', 'name', 'size', 'tmp_name', 'type'];

    /**
     * @param array \$parameters An array of HTTP files
     */
    public function __construct(array \$parameters = [])
    {
        \$this->replace(\$parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$files = [])
    {
        \$this->parameters = [];
        \$this->add(\$files);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value)
    {
        if (!\\is_array(\$value) && !\$value instanceof UploadedFile) {
            throw new \\InvalidArgumentException('An uploaded file must be an array or an instance of UploadedFile.');
        }

        parent::set(\$key, \$this->convertFileInformation(\$value));
    }

    /**
     * {@inheritdoc}
     */
    public function add(array \$files = [])
    {
        foreach (\$files as \$key => \$file) {
            \$this->set(\$key, \$file);
        }
    }

    /**
     * Converts uploaded files to UploadedFile instances.
     *
     * @param array|UploadedFile \$file A (multi-dimensional) array of uploaded file information
     *
     * @return UploadedFile[]|UploadedFile|null A (multi-dimensional) array of UploadedFile instances
     */
    protected function convertFileInformation(\$file)
    {
        if (\$file instanceof UploadedFile) {
            return \$file;
        }

        if (\\is_array(\$file)) {
            \$file = \$this->fixPhpFilesArray(\$file);
            \$keys = array_keys(\$file);
            sort(\$keys);

            if (\$keys == self::\$fileKeys) {
                if (UPLOAD_ERR_NO_FILE == \$file['error']) {
                    \$file = null;
                } else {
                    \$file = new UploadedFile(\$file['tmp_name'], \$file['name'], \$file['type'], \$file['error'], false);
                }
            } else {
                \$file = array_map([\$this, 'convertFileInformation'], \$file);
                if (array_keys(\$keys) === \$keys) {
                    \$file = array_filter(\$file);
                }
            }
        }

        return \$file;
    }

    /**
     * Fixes a malformed PHP \$_FILES array.
     *
     * PHP has a bug that the format of the \$_FILES array differs, depending on
     * whether the uploaded file fields had normal field names or array-like
     * field names (\"normal\" vs. \"parent[child]\").
     *
     * This method fixes the array to look like the \"normal\" \$_FILES array.
     *
     * It's safe to pass an already converted array, in which case this method
     * just returns the original array unmodified.
     *
     * @param array \$data
     *
     * @return array
     */
    protected function fixPhpFilesArray(\$data)
    {
        \$keys = array_keys(\$data);
        sort(\$keys);

        if (self::\$fileKeys != \$keys || !isset(\$data['name']) || !\\is_array(\$data['name'])) {
            return \$data;
        }

        \$files = \$data;
        foreach (self::\$fileKeys as \$k) {
            unset(\$files[\$k]);
        }

        foreach (\$data['name'] as \$key => \$name) {
            \$files[\$key] = \$this->fixPhpFilesArray([
                'error' => \$data['error'][\$key],
                'name' => \$name,
                'type' => \$data['type'][\$key],
                'tmp_name' => \$data['tmp_name'][\$key],
                'size' => \$data['size'][\$key],
            ]);
        }

        return \$files;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/FileBag.php";
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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * FileBag is a container for uploaded files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class FileBag extends ParameterBag
{
    private static \$fileKeys = ['error', 'name', 'size', 'tmp_name', 'type'];

    /**
     * @param array \$parameters An array of HTTP files
     */
    public function __construct(array \$parameters = [])
    {
        \$this->replace(\$parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$files = [])
    {
        \$this->parameters = [];
        \$this->add(\$files);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value)
    {
        if (!\\is_array(\$value) && !\$value instanceof UploadedFile) {
            throw new \\InvalidArgumentException('An uploaded file must be an array or an instance of UploadedFile.');
        }

        parent::set(\$key, \$this->convertFileInformation(\$value));
    }

    /**
     * {@inheritdoc}
     */
    public function add(array \$files = [])
    {
        foreach (\$files as \$key => \$file) {
            \$this->set(\$key, \$file);
        }
    }

    /**
     * Converts uploaded files to UploadedFile instances.
     *
     * @param array|UploadedFile \$file A (multi-dimensional) array of uploaded file information
     *
     * @return UploadedFile[]|UploadedFile|null A (multi-dimensional) array of UploadedFile instances
     */
    protected function convertFileInformation(\$file)
    {
        if (\$file instanceof UploadedFile) {
            return \$file;
        }

        if (\\is_array(\$file)) {
            \$file = \$this->fixPhpFilesArray(\$file);
            \$keys = array_keys(\$file);
            sort(\$keys);

            if (\$keys == self::\$fileKeys) {
                if (UPLOAD_ERR_NO_FILE == \$file['error']) {
                    \$file = null;
                } else {
                    \$file = new UploadedFile(\$file['tmp_name'], \$file['name'], \$file['type'], \$file['error'], false);
                }
            } else {
                \$file = array_map([\$this, 'convertFileInformation'], \$file);
                if (array_keys(\$keys) === \$keys) {
                    \$file = array_filter(\$file);
                }
            }
        }

        return \$file;
    }

    /**
     * Fixes a malformed PHP \$_FILES array.
     *
     * PHP has a bug that the format of the \$_FILES array differs, depending on
     * whether the uploaded file fields had normal field names or array-like
     * field names (\"normal\" vs. \"parent[child]\").
     *
     * This method fixes the array to look like the \"normal\" \$_FILES array.
     *
     * It's safe to pass an already converted array, in which case this method
     * just returns the original array unmodified.
     *
     * @param array \$data
     *
     * @return array
     */
    protected function fixPhpFilesArray(\$data)
    {
        \$keys = array_keys(\$data);
        sort(\$keys);

        if (self::\$fileKeys != \$keys || !isset(\$data['name']) || !\\is_array(\$data['name'])) {
            return \$data;
        }

        \$files = \$data;
        foreach (self::\$fileKeys as \$k) {
            unset(\$files[\$k]);
        }

        foreach (\$data['name'] as \$key => \$name) {
            \$files[\$key] = \$this->fixPhpFilesArray([
                'error' => \$data['error'][\$key],
                'name' => \$name,
                'type' => \$data['type'][\$key],
                'tmp_name' => \$data['tmp_name'][\$key],
                'size' => \$data['size'][\$key],
            ]);
        }

        return \$files;
    }
}
", "vendor/symfony/http-foundation/FileBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/FileBag.php");
    }
}
