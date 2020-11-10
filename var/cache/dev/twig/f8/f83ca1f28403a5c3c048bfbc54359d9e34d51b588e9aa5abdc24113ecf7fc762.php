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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php */
class __TwigTemplate_e1d56d9eb9a8690a98efc75e9f2bbb2f55c077308b2c09392959277f9207b457 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DateTimeToRfc3339Transformer extends BaseDateTimeTransformer
{
    /**
     * Transforms a normalized date into a localized date.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return string The formatted date
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        if (\$this->inputTimezone !== \$this->outputTimezone) {
            if (!\$dateTime instanceof \\DateTimeImmutable) {
                \$dateTime = clone \$dateTime;
            }

            \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        }

        return preg_replace('/\\+00:00\$/', 'Z', \$dateTime->format('c'));
    }

    /**
     * Transforms a formatted string following RFC 3339 into a normalized date.
     *
     * @param string \$rfc3339 Formatted string
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException If the given value is not a string,
     *                                       if the value could not be transformed
     */
    public function reverseTransform(\$rfc3339)
    {
        if (!\\is_string(\$rfc3339)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$rfc3339) {
            return null;
        }

        if (!preg_match('/^(\\d{4})-(\\d{2})-(\\d{2})T\\d{2}:\\d{2}(?::\\d{2})?(?:\\.\\d+)?(?:Z|(?:(?:\\+|-)\\d{2}:\\d{2}))\$/', \$rfc3339, \$matches)) {
            throw new TransformationFailedException(sprintf('The date \"%s\" is not a valid date.', \$rfc3339));
        }

        try {
            \$dateTime = new \\DateTime(\$rfc3339);
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->inputTimezone !== \$dateTime->getTimezone()->getName()) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        if (!checkdate(\$matches[2], \$matches[3], \$matches[1])) {
            throw new TransformationFailedException(sprintf('The date \"%s-%s-%s\" is not a valid date.', \$matches[1], \$matches[2], \$matches[3]));
        }

        return \$dateTime;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DateTimeToRfc3339Transformer extends BaseDateTimeTransformer
{
    /**
     * Transforms a normalized date into a localized date.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return string The formatted date
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return '';
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        if (\$this->inputTimezone !== \$this->outputTimezone) {
            if (!\$dateTime instanceof \\DateTimeImmutable) {
                \$dateTime = clone \$dateTime;
            }

            \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
        }

        return preg_replace('/\\+00:00\$/', 'Z', \$dateTime->format('c'));
    }

    /**
     * Transforms a formatted string following RFC 3339 into a normalized date.
     *
     * @param string \$rfc3339 Formatted string
     *
     * @return \\DateTime|null Normalized date
     *
     * @throws TransformationFailedException If the given value is not a string,
     *                                       if the value could not be transformed
     */
    public function reverseTransform(\$rfc3339)
    {
        if (!\\is_string(\$rfc3339)) {
            throw new TransformationFailedException('Expected a string.');
        }

        if ('' === \$rfc3339) {
            return null;
        }

        if (!preg_match('/^(\\d{4})-(\\d{2})-(\\d{2})T\\d{2}:\\d{2}(?::\\d{2})?(?:\\.\\d+)?(?:Z|(?:(?:\\+|-)\\d{2}:\\d{2}))\$/', \$rfc3339, \$matches)) {
            throw new TransformationFailedException(sprintf('The date \"%s\" is not a valid date.', \$rfc3339));
        }

        try {
            \$dateTime = new \\DateTime(\$rfc3339);
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        if (\$this->inputTimezone !== \$dateTime->getTimezone()->getName()) {
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
        }

        if (!checkdate(\$matches[2], \$matches[3], \$matches[1])) {
            throw new TransformationFailedException(sprintf('The date \"%s-%s-%s\" is not a valid date.', \$matches[1], \$matches[2], \$matches[3]));
        }

        return \$dateTime;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToRfc3339Transformer.php");
    }
}
