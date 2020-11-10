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

/* vendor/symfony/translation/Loader/IcuDatFileLoader.php */
class __TwigTemplate_7f2fccac6fa6e5e86aa6ff49f0bfa907e059b8b26e68a2cbccc515dcc1c9355d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/IcuDatFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/IcuDatFileLoader.php"));

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

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * IcuResFileLoader loads translations from a resource bundle.
 *
 * @author stealth35
 */
class IcuDatFileLoader extends IcuResFileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource.'.dat')) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource.'.dat')) {
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

        if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
            \$catalogue->addResource(new FileResource(\$resource.'.dat'));
        }

        return \$catalogue;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/IcuDatFileLoader.php";
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

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * IcuResFileLoader loads translations from a resource bundle.
 *
 * @author stealth35
 */
class IcuDatFileLoader extends IcuResFileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource.'.dat')) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource.'.dat')) {
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

        if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
            \$catalogue->addResource(new FileResource(\$resource.'.dat'));
        }

        return \$catalogue;
    }
}
", "vendor/symfony/translation/Loader/IcuDatFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/IcuDatFileLoader.php");
    }
}
