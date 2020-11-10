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

/* vendor/symfony/cache/Marshaller/DefaultMarshaller.php */
class __TwigTemplate_392a7386dd7781555471120ad9563e9ad0d3170dff273bfaaf908ede45ab9a88 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Marshaller/DefaultMarshaller.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Marshaller/DefaultMarshaller.php"));

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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Serializes/unserializes values using igbinary_serialize() if available, serialize() otherwise.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultMarshaller implements MarshallerInterface
{
    private \$useIgbinarySerialize = true;

    public function __construct(bool \$useIgbinarySerialize = null)
    {
        if (null === \$useIgbinarySerialize) {
            \$useIgbinarySerialize = \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400;
        } elseif (\$useIgbinarySerialize && (!\\extension_loaded('igbinary') || \\PHP_VERSION_ID === 70400)) {
            throw new CacheException('The \"igbinary\" PHP extension is not '.(\\PHP_VERSION_ID === 70400 ? 'compatible with PHP 7.4.0.' : 'loaded.'));
        }
        \$this->useIgbinarySerialize = \$useIgbinarySerialize;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        \$serialized = \$failed = [];

        foreach (\$values as \$id => \$value) {
            try {
                if (\$this->useIgbinarySerialize) {
                    \$serialized[\$id] = igbinary_serialize(\$value);
                } else {
                    \$serialized[\$id] = serialize(\$value);
                }
            } catch (\\Exception \$e) {
                \$failed[] = \$id;
            }
        }

        return \$serialized;
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if ('b:0;' === \$value) {
            return false;
        }
        if ('N;' === \$value) {
            return null;
        }
        static \$igbinaryNull;
        if (\$value === (\$igbinaryNull ?? \$igbinaryNull = \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400 ? igbinary_serialize(null) : false)) {
            return null;
        }
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            if (':' === (\$value[1] ?? ':')) {
                if (false !== \$value = unserialize(\$value)) {
                    return \$value;
                }
            } elseif (false === \$igbinaryNull) {
                throw new \\RuntimeException('Failed to unserialize values, did you forget to install the \"igbinary\" extension?');
            } elseif (null !== \$value = igbinary_unserialize(\$value)) {
                return \$value;
            }

            throw new \\DomainException(error_get_last() ? error_get_last()['message'] : 'Failed to unserialize values.');
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(\$class)
    {
        throw new \\DomainException('Class not found: '.\$class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Marshaller/DefaultMarshaller.php";
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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Serializes/unserializes values using igbinary_serialize() if available, serialize() otherwise.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultMarshaller implements MarshallerInterface
{
    private \$useIgbinarySerialize = true;

    public function __construct(bool \$useIgbinarySerialize = null)
    {
        if (null === \$useIgbinarySerialize) {
            \$useIgbinarySerialize = \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400;
        } elseif (\$useIgbinarySerialize && (!\\extension_loaded('igbinary') || \\PHP_VERSION_ID === 70400)) {
            throw new CacheException('The \"igbinary\" PHP extension is not '.(\\PHP_VERSION_ID === 70400 ? 'compatible with PHP 7.4.0.' : 'loaded.'));
        }
        \$this->useIgbinarySerialize = \$useIgbinarySerialize;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        \$serialized = \$failed = [];

        foreach (\$values as \$id => \$value) {
            try {
                if (\$this->useIgbinarySerialize) {
                    \$serialized[\$id] = igbinary_serialize(\$value);
                } else {
                    \$serialized[\$id] = serialize(\$value);
                }
            } catch (\\Exception \$e) {
                \$failed[] = \$id;
            }
        }

        return \$serialized;
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if ('b:0;' === \$value) {
            return false;
        }
        if ('N;' === \$value) {
            return null;
        }
        static \$igbinaryNull;
        if (\$value === (\$igbinaryNull ?? \$igbinaryNull = \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400 ? igbinary_serialize(null) : false)) {
            return null;
        }
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            if (':' === (\$value[1] ?? ':')) {
                if (false !== \$value = unserialize(\$value)) {
                    return \$value;
                }
            } elseif (false === \$igbinaryNull) {
                throw new \\RuntimeException('Failed to unserialize values, did you forget to install the \"igbinary\" extension?');
            } elseif (null !== \$value = igbinary_unserialize(\$value)) {
                return \$value;
            }

            throw new \\DomainException(error_get_last() ? error_get_last()['message'] : 'Failed to unserialize values.');
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(\$class)
    {
        throw new \\DomainException('Class not found: '.\$class);
    }
}
", "vendor/symfony/cache/Marshaller/DefaultMarshaller.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Marshaller/DefaultMarshaller.php");
    }
}
