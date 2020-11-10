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

/* vendor/symfony/dom-crawler/Field/FileFormField.php */
class __TwigTemplate_0010135f2d000cfeb3cb4949ca112031151978dc34f8d450855ff7ae8811eae3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/FileFormField.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/FileFormField.php"));

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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * FileFormField represents a file form field (an HTML file input tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileFormField extends FormField
{
    /**
     * Sets the PHP error code associated with the field.
     *
     * @param int \$error The error code (one of UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, or UPLOAD_ERR_EXTENSION)
     *
     * @throws \\InvalidArgumentException When error code doesn't exist
     */
    public function setErrorCode(\$error)
    {
        \$codes = [UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, UPLOAD_ERR_EXTENSION];
        if (!\\in_array(\$error, \$codes)) {
            throw new \\InvalidArgumentException(sprintf('The error code %s is not valid.', \$error));
        }

        \$this->value = ['name' => '', 'type' => '', 'tmp_name' => '', 'error' => \$error, 'size' => 0];
    }

    /**
     * Sets the value of the field.
     *
     * @param string \$value The value of the field
     */
    public function upload(\$value)
    {
        \$this->setValue(\$value);
    }

    /**
     * Sets the value of the field.
     *
     * @param string|null \$value The value of the field
     */
    public function setValue(\$value)
    {
        if (null !== \$value && is_readable(\$value)) {
            \$error = UPLOAD_ERR_OK;
            \$size = filesize(\$value);
            \$info = pathinfo(\$value);
            \$name = \$info['basename'];

            // copy to a tmp location
            \$tmp = sys_get_temp_dir().'/'.strtr(substr(base64_encode(hash('sha256', uniqid(mt_rand(), true), true)), 0, 7), '/', '_');
            if (\\array_key_exists('extension', \$info)) {
                \$tmp .= '.'.\$info['extension'];
            }
            if (is_file(\$tmp)) {
                unlink(\$tmp);
            }
            copy(\$value, \$tmp);
            \$value = \$tmp;
        } else {
            \$error = UPLOAD_ERR_NO_FILE;
            \$size = 0;
            \$name = '';
            \$value = '';
        }

        \$this->value = ['name' => \$name, 'type' => '', 'tmp_name' => \$value, 'error' => \$error, 'size' => \$size];
    }

    /**
     * Sets path to the file as string for simulating HTTP request.
     *
     * @param string \$path The path to the file
     */
    public function setFilePath(\$path)
    {
        parent::setValue(\$path);
    }

    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A FileFormField can only be created from an input tag (%s given).', \$this->node->nodeName));
        }

        if ('file' !== strtolower(\$this->node->getAttribute('type'))) {
            throw new \\LogicException(sprintf('A FileFormField can only be created from an input tag with a type of file (given type is %s).', \$this->node->getAttribute('type')));
        }

        \$this->setValue(null);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Field/FileFormField.php";
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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * FileFormField represents a file form field (an HTML file input tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileFormField extends FormField
{
    /**
     * Sets the PHP error code associated with the field.
     *
     * @param int \$error The error code (one of UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, or UPLOAD_ERR_EXTENSION)
     *
     * @throws \\InvalidArgumentException When error code doesn't exist
     */
    public function setErrorCode(\$error)
    {
        \$codes = [UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, UPLOAD_ERR_EXTENSION];
        if (!\\in_array(\$error, \$codes)) {
            throw new \\InvalidArgumentException(sprintf('The error code %s is not valid.', \$error));
        }

        \$this->value = ['name' => '', 'type' => '', 'tmp_name' => '', 'error' => \$error, 'size' => 0];
    }

    /**
     * Sets the value of the field.
     *
     * @param string \$value The value of the field
     */
    public function upload(\$value)
    {
        \$this->setValue(\$value);
    }

    /**
     * Sets the value of the field.
     *
     * @param string|null \$value The value of the field
     */
    public function setValue(\$value)
    {
        if (null !== \$value && is_readable(\$value)) {
            \$error = UPLOAD_ERR_OK;
            \$size = filesize(\$value);
            \$info = pathinfo(\$value);
            \$name = \$info['basename'];

            // copy to a tmp location
            \$tmp = sys_get_temp_dir().'/'.strtr(substr(base64_encode(hash('sha256', uniqid(mt_rand(), true), true)), 0, 7), '/', '_');
            if (\\array_key_exists('extension', \$info)) {
                \$tmp .= '.'.\$info['extension'];
            }
            if (is_file(\$tmp)) {
                unlink(\$tmp);
            }
            copy(\$value, \$tmp);
            \$value = \$tmp;
        } else {
            \$error = UPLOAD_ERR_NO_FILE;
            \$size = 0;
            \$name = '';
            \$value = '';
        }

        \$this->value = ['name' => \$name, 'type' => '', 'tmp_name' => \$value, 'error' => \$error, 'size' => \$size];
    }

    /**
     * Sets path to the file as string for simulating HTTP request.
     *
     * @param string \$path The path to the file
     */
    public function setFilePath(\$path)
    {
        parent::setValue(\$path);
    }

    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A FileFormField can only be created from an input tag (%s given).', \$this->node->nodeName));
        }

        if ('file' !== strtolower(\$this->node->getAttribute('type'))) {
            throw new \\LogicException(sprintf('A FileFormField can only be created from an input tag with a type of file (given type is %s).', \$this->node->getAttribute('type')));
        }

        \$this->setValue(null);
    }
}
", "vendor/symfony/dom-crawler/Field/FileFormField.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Field/FileFormField.php");
    }
}
