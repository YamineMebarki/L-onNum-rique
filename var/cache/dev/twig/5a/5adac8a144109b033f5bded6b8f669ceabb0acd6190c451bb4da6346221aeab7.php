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

/* vendor/symfony/validator/Constraints/FileValidator.php */
class __TwigTemplate_a6c082f099c127b77f9bfac0a935a92e87c96044ceab0a73c882443164b3b747 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/FileValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/FileValidator.php"));

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

use Symfony\\Component\\HttpFoundation\\File\\File as FileObject;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileValidator extends ConstraintValidator
{
    const KB_BYTES = 1000;
    const MB_BYTES = 1000000;
    const KIB_BYTES = 1024;
    const MIB_BYTES = 1048576;

    private static \$suffices = [
        1 => 'bytes',
        self::KB_BYTES => 'kB',
        self::MB_BYTES => 'MB',
        self::KIB_BYTES => 'KiB',
        self::MIB_BYTES => 'MiB',
    ];

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof File) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\File');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof UploadedFile && !\$value->isValid()) {
            switch (\$value->getError()) {
                case UPLOAD_ERR_INI_SIZE:
                    \$iniLimitSize = UploadedFile::getMaxFilesize();
                    if (\$constraint->maxSize && \$constraint->maxSize < \$iniLimitSize) {
                        \$limitInBytes = \$constraint->maxSize;
                        \$binaryFormat = \$constraint->binaryFormat;
                    } else {
                        \$limitInBytes = \$iniLimitSize;
                        \$binaryFormat = null === \$constraint->binaryFormat ? true : \$constraint->binaryFormat;
                    }

                    list(\$sizeAsString, \$limitAsString, \$suffix) = \$this->factorizeSizes(0, \$limitInBytes, \$binaryFormat);
                    \$this->context->buildViolation(\$constraint->uploadIniSizeErrorMessage)
                        ->setParameter('";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "', \$limitAsString)
                        ->setParameter('";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "', \$suffix)
                        ->setCode(UPLOAD_ERR_INI_SIZE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_FORM_SIZE:
                    \$this->context->buildViolation(\$constraint->uploadFormSizeErrorMessage)
                        ->setCode(UPLOAD_ERR_FORM_SIZE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_PARTIAL:
                    \$this->context->buildViolation(\$constraint->uploadPartialErrorMessage)
                        ->setCode(UPLOAD_ERR_PARTIAL)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_NO_FILE:
                    \$this->context->buildViolation(\$constraint->uploadNoFileErrorMessage)
                        ->setCode(UPLOAD_ERR_NO_FILE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_NO_TMP_DIR:
                    \$this->context->buildViolation(\$constraint->uploadNoTmpDirErrorMessage)
                        ->setCode(UPLOAD_ERR_NO_TMP_DIR)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_CANT_WRITE:
                    \$this->context->buildViolation(\$constraint->uploadCantWriteErrorMessage)
                        ->setCode(UPLOAD_ERR_CANT_WRITE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_EXTENSION:
                    \$this->context->buildViolation(\$constraint->uploadExtensionErrorMessage)
                        ->setCode(UPLOAD_ERR_EXTENSION)
                        ->addViolation();

                    return;
                default:
                    \$this->context->buildViolation(\$constraint->uploadErrorMessage)
                        ->setCode(\$value->getError())
                        ->addViolation();

                    return;
            }
        }

        if (!is_scalar(\$value) && !\$value instanceof FileObject && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$path = \$value instanceof FileObject ? \$value->getPathname() : (string) \$value;

        if (!is_file(\$path)) {
            \$this->context->buildViolation(\$constraint->notFoundMessage)
                ->setParameter('";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$path))
                ->setCode(File::NOT_FOUND_ERROR)
                ->addViolation();

            return;
        }

        if (!is_readable(\$path)) {
            \$this->context->buildViolation(\$constraint->notReadableMessage)
                ->setParameter('";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$path))
                ->setCode(File::NOT_READABLE_ERROR)
                ->addViolation();

            return;
        }

        \$sizeInBytes = filesize(\$path);
        \$basename = \$value instanceof UploadedFile ? \$value->getClientOriginalName() : basename(\$path);

        if (0 === \$sizeInBytes) {
            \$this->context->buildViolation(\$constraint->disallowEmptyMessage)
                ->setParameter('";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$path))
                ->setParameter('";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$basename))
                ->setCode(File::EMPTY_ERROR)
                ->addViolation();

            return;
        }

        if (\$constraint->maxSize) {
            \$limitInBytes = \$constraint->maxSize;

            if (\$sizeInBytes > \$limitInBytes) {
                list(\$sizeAsString, \$limitAsString, \$suffix) = \$this->factorizeSizes(\$sizeInBytes, \$limitInBytes, \$constraint->binaryFormat);
                \$this->context->buildViolation(\$constraint->maxSizeMessage)
                    ->setParameter('";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$path))
                    ->setParameter('";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "', \$sizeAsString)
                    ->setParameter('";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "', \$limitAsString)
                    ->setParameter('";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "', \$suffix)
                    ->setParameter('";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$basename))
                    ->setCode(File::TOO_LARGE_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->mimeTypes) {
            if (!\$value instanceof FileObject) {
                \$value = new FileObject(\$value);
            }

            \$mimeTypes = (array) \$constraint->mimeTypes;
            \$mime = \$value->getMimeType();

            foreach (\$mimeTypes as \$mimeType) {
                if (\$mimeType === \$mime) {
                    return;
                }

                if (\$discrete = strstr(\$mimeType, '/*', true)) {
                    if (strstr(\$mime, '/', true) === \$discrete) {
                        return;
                    }
                }
            }

            \$this->context->buildViolation(\$constraint->mimeTypesMessage)
                ->setParameter('";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$path))
                ->setParameter('";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 194, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$mime))
                ->setParameter('";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "', \$this->formatValues(\$mimeTypes))
                ->setParameter('";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$basename))
                ->setCode(File::INVALID_MIME_TYPE_ERROR)
                ->addViolation();
        }
    }

    private static function moreDecimalsThan(\$double, \$numberOfDecimals)
    {
        return \\strlen((string) \$double) > \\strlen(round(\$double, \$numberOfDecimals));
    }

    /**
     * Convert the limit to the smallest possible number
     * (i.e. try \"MB\", then \"kB\", then \"bytes\").
     */
    private function factorizeSizes(\$size, \$limit, \$binaryFormat)
    {
        if (\$binaryFormat) {
            \$coef = self::MIB_BYTES;
            \$coefFactor = self::KIB_BYTES;
        } else {
            \$coef = self::MB_BYTES;
            \$coefFactor = self::KB_BYTES;
        }

        \$limitAsString = (string) (\$limit / \$coef);

        // Restrict the limit to 2 decimals (without rounding! we
        // need the precise value)
        while (self::moreDecimalsThan(\$limitAsString, 2)) {
            \$coef /= \$coefFactor;
            \$limitAsString = (string) (\$limit / \$coef);
        }

        // Convert size to the same measure, but round to 2 decimals
        \$sizeAsString = (string) round(\$size / \$coef, 2);

        // If the size and limit produce the same string output
        // (due to rounding), reduce the coefficient
        while (\$sizeAsString === \$limitAsString) {
            \$coef /= \$coefFactor;
            \$limitAsString = (string) (\$limit / \$coef);
            \$sizeAsString = (string) round(\$size / \$coef, 2);
        }

        return [\$sizeAsString, \$limitAsString, self::\$suffices[\$coef]];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/FileValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 196,  278 => 195,  274 => 194,  270 => 193,  238 => 164,  234 => 163,  230 => 162,  226 => 161,  222 => 160,  206 => 147,  202 => 146,  187 => 134,  175 => 125,  114 => 67,  110 => 66,  43 => 1,);
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

use Symfony\\Component\\HttpFoundation\\File\\File as FileObject;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileValidator extends ConstraintValidator
{
    const KB_BYTES = 1000;
    const MB_BYTES = 1000000;
    const KIB_BYTES = 1024;
    const MIB_BYTES = 1048576;

    private static \$suffices = [
        1 => 'bytes',
        self::KB_BYTES => 'kB',
        self::MB_BYTES => 'MB',
        self::KIB_BYTES => 'KiB',
        self::MIB_BYTES => 'MiB',
    ];

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof File) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\File');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof UploadedFile && !\$value->isValid()) {
            switch (\$value->getError()) {
                case UPLOAD_ERR_INI_SIZE:
                    \$iniLimitSize = UploadedFile::getMaxFilesize();
                    if (\$constraint->maxSize && \$constraint->maxSize < \$iniLimitSize) {
                        \$limitInBytes = \$constraint->maxSize;
                        \$binaryFormat = \$constraint->binaryFormat;
                    } else {
                        \$limitInBytes = \$iniLimitSize;
                        \$binaryFormat = null === \$constraint->binaryFormat ? true : \$constraint->binaryFormat;
                    }

                    list(\$sizeAsString, \$limitAsString, \$suffix) = \$this->factorizeSizes(0, \$limitInBytes, \$binaryFormat);
                    \$this->context->buildViolation(\$constraint->uploadIniSizeErrorMessage)
                        ->setParameter('{{ limit }}', \$limitAsString)
                        ->setParameter('{{ suffix }}', \$suffix)
                        ->setCode(UPLOAD_ERR_INI_SIZE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_FORM_SIZE:
                    \$this->context->buildViolation(\$constraint->uploadFormSizeErrorMessage)
                        ->setCode(UPLOAD_ERR_FORM_SIZE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_PARTIAL:
                    \$this->context->buildViolation(\$constraint->uploadPartialErrorMessage)
                        ->setCode(UPLOAD_ERR_PARTIAL)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_NO_FILE:
                    \$this->context->buildViolation(\$constraint->uploadNoFileErrorMessage)
                        ->setCode(UPLOAD_ERR_NO_FILE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_NO_TMP_DIR:
                    \$this->context->buildViolation(\$constraint->uploadNoTmpDirErrorMessage)
                        ->setCode(UPLOAD_ERR_NO_TMP_DIR)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_CANT_WRITE:
                    \$this->context->buildViolation(\$constraint->uploadCantWriteErrorMessage)
                        ->setCode(UPLOAD_ERR_CANT_WRITE)
                        ->addViolation();

                    return;
                case UPLOAD_ERR_EXTENSION:
                    \$this->context->buildViolation(\$constraint->uploadExtensionErrorMessage)
                        ->setCode(UPLOAD_ERR_EXTENSION)
                        ->addViolation();

                    return;
                default:
                    \$this->context->buildViolation(\$constraint->uploadErrorMessage)
                        ->setCode(\$value->getError())
                        ->addViolation();

                    return;
            }
        }

        if (!is_scalar(\$value) && !\$value instanceof FileObject && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$path = \$value instanceof FileObject ? \$value->getPathname() : (string) \$value;

        if (!is_file(\$path)) {
            \$this->context->buildViolation(\$constraint->notFoundMessage)
                ->setParameter('{{ file }}', \$this->formatValue(\$path))
                ->setCode(File::NOT_FOUND_ERROR)
                ->addViolation();

            return;
        }

        if (!is_readable(\$path)) {
            \$this->context->buildViolation(\$constraint->notReadableMessage)
                ->setParameter('{{ file }}', \$this->formatValue(\$path))
                ->setCode(File::NOT_READABLE_ERROR)
                ->addViolation();

            return;
        }

        \$sizeInBytes = filesize(\$path);
        \$basename = \$value instanceof UploadedFile ? \$value->getClientOriginalName() : basename(\$path);

        if (0 === \$sizeInBytes) {
            \$this->context->buildViolation(\$constraint->disallowEmptyMessage)
                ->setParameter('{{ file }}', \$this->formatValue(\$path))
                ->setParameter('{{ name }}', \$this->formatValue(\$basename))
                ->setCode(File::EMPTY_ERROR)
                ->addViolation();

            return;
        }

        if (\$constraint->maxSize) {
            \$limitInBytes = \$constraint->maxSize;

            if (\$sizeInBytes > \$limitInBytes) {
                list(\$sizeAsString, \$limitAsString, \$suffix) = \$this->factorizeSizes(\$sizeInBytes, \$limitInBytes, \$constraint->binaryFormat);
                \$this->context->buildViolation(\$constraint->maxSizeMessage)
                    ->setParameter('{{ file }}', \$this->formatValue(\$path))
                    ->setParameter('{{ size }}', \$sizeAsString)
                    ->setParameter('{{ limit }}', \$limitAsString)
                    ->setParameter('{{ suffix }}', \$suffix)
                    ->setParameter('{{ name }}', \$this->formatValue(\$basename))
                    ->setCode(File::TOO_LARGE_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->mimeTypes) {
            if (!\$value instanceof FileObject) {
                \$value = new FileObject(\$value);
            }

            \$mimeTypes = (array) \$constraint->mimeTypes;
            \$mime = \$value->getMimeType();

            foreach (\$mimeTypes as \$mimeType) {
                if (\$mimeType === \$mime) {
                    return;
                }

                if (\$discrete = strstr(\$mimeType, '/*', true)) {
                    if (strstr(\$mime, '/', true) === \$discrete) {
                        return;
                    }
                }
            }

            \$this->context->buildViolation(\$constraint->mimeTypesMessage)
                ->setParameter('{{ file }}', \$this->formatValue(\$path))
                ->setParameter('{{ type }}', \$this->formatValue(\$mime))
                ->setParameter('{{ types }}', \$this->formatValues(\$mimeTypes))
                ->setParameter('{{ name }}', \$this->formatValue(\$basename))
                ->setCode(File::INVALID_MIME_TYPE_ERROR)
                ->addViolation();
        }
    }

    private static function moreDecimalsThan(\$double, \$numberOfDecimals)
    {
        return \\strlen((string) \$double) > \\strlen(round(\$double, \$numberOfDecimals));
    }

    /**
     * Convert the limit to the smallest possible number
     * (i.e. try \"MB\", then \"kB\", then \"bytes\").
     */
    private function factorizeSizes(\$size, \$limit, \$binaryFormat)
    {
        if (\$binaryFormat) {
            \$coef = self::MIB_BYTES;
            \$coefFactor = self::KIB_BYTES;
        } else {
            \$coef = self::MB_BYTES;
            \$coefFactor = self::KB_BYTES;
        }

        \$limitAsString = (string) (\$limit / \$coef);

        // Restrict the limit to 2 decimals (without rounding! we
        // need the precise value)
        while (self::moreDecimalsThan(\$limitAsString, 2)) {
            \$coef /= \$coefFactor;
            \$limitAsString = (string) (\$limit / \$coef);
        }

        // Convert size to the same measure, but round to 2 decimals
        \$sizeAsString = (string) round(\$size / \$coef, 2);

        // If the size and limit produce the same string output
        // (due to rounding), reduce the coefficient
        while (\$sizeAsString === \$limitAsString) {
            \$coef /= \$coefFactor;
            \$limitAsString = (string) (\$limit / \$coef);
            \$sizeAsString = (string) round(\$size / \$coef, 2);
        }

        return [\$sizeAsString, \$limitAsString, self::\$suffices[\$coef]];
    }
}
", "vendor/symfony/validator/Constraints/FileValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/FileValidator.php");
    }
}
