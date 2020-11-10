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

/* vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php */
class __TwigTemplate_ffb27448e5626b567c1fab65401a9f94ee6d50f62d6e914033b2c60bf2f0e410 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php"));

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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a timezone identifier string and a IntlTimeZone object.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class IntlTimeZoneToStringTransformer implements DataTransformerInterface
{
    private \$multiple;

    public function __construct(bool \$multiple = false)
    {
        \$this->multiple = \$multiple;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$intlTimeZone)
    {
        if (null === \$intlTimeZone) {
            return null;
        }

        if (\$this->multiple) {
            if (!\\is_array(\$intlTimeZone)) {
                throw new TransformationFailedException('Expected an array of \\IntlTimeZone objects.');
            }

            return array_map([new self(), 'transform'], \$intlTimeZone);
        }

        if (!\$intlTimeZone instanceof \\IntlTimeZone) {
            throw new TransformationFailedException('Expected a \\IntlTimeZone object.');
        }

        return \$intlTimeZone->getID();
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return;
        }

        if (\$this->multiple) {
            if (!\\is_array(\$value)) {
                throw new TransformationFailedException('Expected an array of timezone identifier strings.');
            }

            return array_map([new self(), 'reverseTransform'], \$value);
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a timezone identifier string.');
        }

        \$intlTimeZone = \\IntlTimeZone::createTimeZone(\$value);

        if ('Etc/Unknown' === \$intlTimeZone->getID()) {
            throw new TransformationFailedException(sprintf('Unknown timezone identifier \"%s\".', \$value));
        }

        return \$intlTimeZone;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php";
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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a timezone identifier string and a IntlTimeZone object.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class IntlTimeZoneToStringTransformer implements DataTransformerInterface
{
    private \$multiple;

    public function __construct(bool \$multiple = false)
    {
        \$this->multiple = \$multiple;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$intlTimeZone)
    {
        if (null === \$intlTimeZone) {
            return null;
        }

        if (\$this->multiple) {
            if (!\\is_array(\$intlTimeZone)) {
                throw new TransformationFailedException('Expected an array of \\IntlTimeZone objects.');
            }

            return array_map([new self(), 'transform'], \$intlTimeZone);
        }

        if (!\$intlTimeZone instanceof \\IntlTimeZone) {
            throw new TransformationFailedException('Expected a \\IntlTimeZone object.');
        }

        return \$intlTimeZone->getID();
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return;
        }

        if (\$this->multiple) {
            if (!\\is_array(\$value)) {
                throw new TransformationFailedException('Expected an array of timezone identifier strings.');
            }

            return array_map([new self(), 'reverseTransform'], \$value);
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a timezone identifier string.');
        }

        \$intlTimeZone = \\IntlTimeZone::createTimeZone(\$value);

        if ('Etc/Unknown' === \$intlTimeZone->getID()) {
            throw new TransformationFailedException(sprintf('Unknown timezone identifier \"%s\".', \$value));
        }

        return \$intlTimeZone;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformer.php");
    }
}
