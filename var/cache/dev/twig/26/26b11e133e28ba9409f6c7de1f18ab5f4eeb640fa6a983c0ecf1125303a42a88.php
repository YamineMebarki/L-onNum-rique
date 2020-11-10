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

/* vendor/symfony/validator/Constraints/File.php */
class __TwigTemplate_ebc7acbcb54f9274dba12a27a7adb15e212e987fb22fb92c9cfcf1cdedaf2b0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/File.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/File.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @property int \$maxSize
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class File extends Constraint
{
    // Check the Image constraint for clashes if adding new constants here

    const NOT_FOUND_ERROR = 'd2a3fb6e-7ddc-4210-8fbf-2ab345ce1998';
    const NOT_READABLE_ERROR = 'c20c92a4-5bfa-4202-9477-28e800e0f6ff';
    const EMPTY_ERROR = '5d743385-9775-4aa5-8ff5-495fb1e60137';
    const TOO_LARGE_ERROR = 'df8637af-d466-48c6-a59d-e7126250a654';
    const INVALID_MIME_TYPE_ERROR = '744f00bc-4389-4c74-92de-9a43cde55534';

    protected static \$errorNames = [
        self::NOT_FOUND_ERROR => 'NOT_FOUND_ERROR',
        self::NOT_READABLE_ERROR => 'NOT_READABLE_ERROR',
        self::EMPTY_ERROR => 'EMPTY_ERROR',
        self::TOO_LARGE_ERROR => 'TOO_LARGE_ERROR',
        self::INVALID_MIME_TYPE_ERROR => 'INVALID_MIME_TYPE_ERROR',
    ];

    public \$binaryFormat;
    public \$mimeTypes = [];
    public \$notFoundMessage = 'The file could not be found.';
    public \$notReadableMessage = 'The file is not readable.';
    public \$maxSizeMessage = 'The file is too large (";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo ".';
    public \$mimeTypesMessage = 'The mime type of the file is invalid (";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 48, $this->source); })()), "html", null, true);
        echo ".';
    public \$disallowEmptyMessage = 'An empty file is not allowed.';

    public \$uploadIniSizeErrorMessage = 'The file is too large. Allowed maximum size is ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 51, $this->source); })()), "html", null, true);
        echo ".';
    public \$uploadFormSizeErrorMessage = 'The file is too large.';
    public \$uploadPartialErrorMessage = 'The file was only partially uploaded.';
    public \$uploadNoFileErrorMessage = 'No file was uploaded.';
    public \$uploadNoTmpDirErrorMessage = 'No temporary folder was configured in php.ini.';
    public \$uploadCantWriteErrorMessage = 'Cannot write temporary file to disk.';
    public \$uploadExtensionErrorMessage = 'A PHP extension caused the upload to fail.';
    public \$uploadErrorMessage = 'The file could not be uploaded.';

    protected \$maxSize;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null !== \$this->maxSize) {
            \$this->normalizeBinaryFormat(\$this->maxSize);
        }
    }

    public function __set(\$option, \$value)
    {
        if ('maxSize' === \$option) {
            \$this->normalizeBinaryFormat(\$value);

            return;
        }

        parent::__set(\$option, \$value);
    }

    public function __get(\$option)
    {
        if ('maxSize' === \$option) {
            return \$this->maxSize;
        }

        return parent::__get(\$option);
    }

    public function __isset(\$option)
    {
        if ('maxSize' === \$option) {
            return true;
        }

        return parent::__isset(\$option);
    }

    private function normalizeBinaryFormat(\$maxSize)
    {
        \$factors = [
            'k' => 1000,
            'ki' => 1 << 10,
            'm' => 1000 * 1000,
            'mi' => 1 << 20,
            'g' => 1000 * 1000 * 1000,
            'gi' => 1 << 30,
        ];
        if (ctype_digit((string) \$maxSize)) {
            \$this->maxSize = (int) \$maxSize;
            \$this->binaryFormat = null === \$this->binaryFormat ? false : \$this->binaryFormat;
        } elseif (preg_match('/^(\\d++)('.implode('|', array_keys(\$factors)).')\$/i', \$maxSize, \$matches)) {
            \$this->maxSize = \$matches[1] * \$factors[\$unit = strtolower(\$matches[2])];
            \$this->binaryFormat = null === \$this->binaryFormat ? 2 === \\strlen(\$unit) : \$this->binaryFormat;
        } else {
            throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum size', \$this->maxSize));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/File.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  101 => 48,  91 => 47,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @property int \$maxSize
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class File extends Constraint
{
    // Check the Image constraint for clashes if adding new constants here

    const NOT_FOUND_ERROR = 'd2a3fb6e-7ddc-4210-8fbf-2ab345ce1998';
    const NOT_READABLE_ERROR = 'c20c92a4-5bfa-4202-9477-28e800e0f6ff';
    const EMPTY_ERROR = '5d743385-9775-4aa5-8ff5-495fb1e60137';
    const TOO_LARGE_ERROR = 'df8637af-d466-48c6-a59d-e7126250a654';
    const INVALID_MIME_TYPE_ERROR = '744f00bc-4389-4c74-92de-9a43cde55534';

    protected static \$errorNames = [
        self::NOT_FOUND_ERROR => 'NOT_FOUND_ERROR',
        self::NOT_READABLE_ERROR => 'NOT_READABLE_ERROR',
        self::EMPTY_ERROR => 'EMPTY_ERROR',
        self::TOO_LARGE_ERROR => 'TOO_LARGE_ERROR',
        self::INVALID_MIME_TYPE_ERROR => 'INVALID_MIME_TYPE_ERROR',
    ];

    public \$binaryFormat;
    public \$mimeTypes = [];
    public \$notFoundMessage = 'The file could not be found.';
    public \$notReadableMessage = 'The file is not readable.';
    public \$maxSizeMessage = 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.';
    public \$mimeTypesMessage = 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.';
    public \$disallowEmptyMessage = 'An empty file is not allowed.';

    public \$uploadIniSizeErrorMessage = 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.';
    public \$uploadFormSizeErrorMessage = 'The file is too large.';
    public \$uploadPartialErrorMessage = 'The file was only partially uploaded.';
    public \$uploadNoFileErrorMessage = 'No file was uploaded.';
    public \$uploadNoTmpDirErrorMessage = 'No temporary folder was configured in php.ini.';
    public \$uploadCantWriteErrorMessage = 'Cannot write temporary file to disk.';
    public \$uploadExtensionErrorMessage = 'A PHP extension caused the upload to fail.';
    public \$uploadErrorMessage = 'The file could not be uploaded.';

    protected \$maxSize;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null !== \$this->maxSize) {
            \$this->normalizeBinaryFormat(\$this->maxSize);
        }
    }

    public function __set(\$option, \$value)
    {
        if ('maxSize' === \$option) {
            \$this->normalizeBinaryFormat(\$value);

            return;
        }

        parent::__set(\$option, \$value);
    }

    public function __get(\$option)
    {
        if ('maxSize' === \$option) {
            return \$this->maxSize;
        }

        return parent::__get(\$option);
    }

    public function __isset(\$option)
    {
        if ('maxSize' === \$option) {
            return true;
        }

        return parent::__isset(\$option);
    }

    private function normalizeBinaryFormat(\$maxSize)
    {
        \$factors = [
            'k' => 1000,
            'ki' => 1 << 10,
            'm' => 1000 * 1000,
            'mi' => 1 << 20,
            'g' => 1000 * 1000 * 1000,
            'gi' => 1 << 30,
        ];
        if (ctype_digit((string) \$maxSize)) {
            \$this->maxSize = (int) \$maxSize;
            \$this->binaryFormat = null === \$this->binaryFormat ? false : \$this->binaryFormat;
        } elseif (preg_match('/^(\\d++)('.implode('|', array_keys(\$factors)).')\$/i', \$maxSize, \$matches)) {
            \$this->maxSize = \$matches[1] * \$factors[\$unit = strtolower(\$matches[2])];
            \$this->binaryFormat = null === \$this->binaryFormat ? 2 === \\strlen(\$unit) : \$this->binaryFormat;
        } else {
            throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum size', \$this->maxSize));
        }
    }
}
", "vendor/symfony/validator/Constraints/File.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/File.php");
    }
}
