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

/* vendor/symfony/translation/Loader/IcuResFileLoader.php */
class __TwigTemplate_6e76fb2aedf4f165f6e084e46a4958bfc6da947727fc31e74672e7928a26c56c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/IcuResFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/IcuResFileLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * IcuResFileLoader loads translations from a resource bundle.
 *
 * @author stealth35
 */
class IcuResFileLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!is_dir(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        try {
            \$rb = new \\ResourceBundle(\$locale, \$resource);
        } catch (\\Exception \$e) {
            \$rb = null;
        }

        if (!\$rb) {
            throw new InvalidResourceException(sprintf('Cannot load resource \"%s\"', \$resource));
        } elseif (intl_is_failure(\$rb->getErrorCode())) {
            throw new InvalidResourceException(\$rb->getErrorMessage(), \$rb->getErrorCode());
        }

        \$messages = \$this->flatten(\$rb);
        \$catalogue = new MessageCatalogue(\$locale);
        \$catalogue->add(\$messages, \$domain);

        if (class_exists('Symfony\\Component\\Config\\Resource\\DirectoryResource')) {
            \$catalogue->addResource(new DirectoryResource(\$resource));
        }

        return \$catalogue;
    }

    /**
     * Flattens an ResourceBundle.
     *
     * The scheme used is:
     *   key { key2 { key3 { \"value\" } } }
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param \\ResourceBundle \$rb       The ResourceBundle that will be flattened
     * @param array           \$messages Used internally for recursive calls
     * @param string          \$path     Current path being parsed, used internally for recursive calls
     *
     * @return array the flattened ResourceBundle
     */
    protected function flatten(\\ResourceBundle \$rb, array &\$messages = [], \$path = null)
    {
        foreach (\$rb as \$key => \$value) {
            \$nodePath = \$path ? \$path.'.'.\$key : \$key;
            if (\$value instanceof \\ResourceBundle) {
                \$this->flatten(\$value, \$messages, \$nodePath);
            } else {
                \$messages[\$nodePath] = \$value;
            }
        }

        return \$messages;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/IcuResFileLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * IcuResFileLoader loads translations from a resource bundle.
 *
 * @author stealth35
 */
class IcuResFileLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!is_dir(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        try {
            \$rb = new \\ResourceBundle(\$locale, \$resource);
        } catch (\\Exception \$e) {
            \$rb = null;
        }

        if (!\$rb) {
            throw new InvalidResourceException(sprintf('Cannot load resource \"%s\"', \$resource));
        } elseif (intl_is_failure(\$rb->getErrorCode())) {
            throw new InvalidResourceException(\$rb->getErrorMessage(), \$rb->getErrorCode());
        }

        \$messages = \$this->flatten(\$rb);
        \$catalogue = new MessageCatalogue(\$locale);
        \$catalogue->add(\$messages, \$domain);

        if (class_exists('Symfony\\Component\\Config\\Resource\\DirectoryResource')) {
            \$catalogue->addResource(new DirectoryResource(\$resource));
        }

        return \$catalogue;
    }

    /**
     * Flattens an ResourceBundle.
     *
     * The scheme used is:
     *   key { key2 { key3 { \"value\" } } }
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param \\ResourceBundle \$rb       The ResourceBundle that will be flattened
     * @param array           \$messages Used internally for recursive calls
     * @param string          \$path     Current path being parsed, used internally for recursive calls
     *
     * @return array the flattened ResourceBundle
     */
    protected function flatten(\\ResourceBundle \$rb, array &\$messages = [], \$path = null)
    {
        foreach (\$rb as \$key => \$value) {
            \$nodePath = \$path ? \$path.'.'.\$key : \$key;
            if (\$value instanceof \\ResourceBundle) {
                \$this->flatten(\$value, \$messages, \$nodePath);
            } else {
                \$messages[\$nodePath] = \$value;
            }
        }

        return \$messages;
    }
}
", "vendor/symfony/translation/Loader/IcuResFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/IcuResFileLoader.php");
    }
}
