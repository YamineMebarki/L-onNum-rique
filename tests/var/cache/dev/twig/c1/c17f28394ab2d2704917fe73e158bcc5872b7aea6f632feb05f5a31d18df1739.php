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

/* vendor/symfony/translation/Loader/FileLoader.php */
class __TwigTemplate_f7696f5a7eb105a9dd868f98bcda9443d36467c054539b4db3b2ffba47c904e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/FileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/FileLoader.php"));

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

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
abstract class FileLoader extends ArrayLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        \$messages = \$this->loadResource(\$resource);

        // empty resource
        if (null === \$messages) {
            \$messages = [];
        }

        // not an array
        if (!\\is_array(\$messages)) {
            throw new InvalidResourceException(sprintf('Unable to load file \"%s\".', \$resource));
        }

        \$catalogue = parent::load(\$messages, \$locale, \$domain);

        if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
            \$catalogue->addResource(new FileResource(\$resource));
        }

        return \$catalogue;
    }

    /**
     * @param string \$resource
     *
     * @return array
     *
     * @throws InvalidResourceException if stream content has an invalid format
     */
    abstract protected function loadResource(\$resource);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/FileLoader.php";
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

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
abstract class FileLoader extends ArrayLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        if (!stream_is_local(\$resource)) {
            throw new InvalidResourceException(sprintf('This is not a local file \"%s\".', \$resource));
        }

        if (!file_exists(\$resource)) {
            throw new NotFoundResourceException(sprintf('File \"%s\" not found.', \$resource));
        }

        \$messages = \$this->loadResource(\$resource);

        // empty resource
        if (null === \$messages) {
            \$messages = [];
        }

        // not an array
        if (!\\is_array(\$messages)) {
            throw new InvalidResourceException(sprintf('Unable to load file \"%s\".', \$resource));
        }

        \$catalogue = parent::load(\$messages, \$locale, \$domain);

        if (class_exists('Symfony\\Component\\Config\\Resource\\FileResource')) {
            \$catalogue->addResource(new FileResource(\$resource));
        }

        return \$catalogue;
    }

    /**
     * @param string \$resource
     *
     * @return array
     *
     * @throws InvalidResourceException if stream content has an invalid format
     */
    abstract protected function loadResource(\$resource);
}
", "vendor/symfony/translation/Loader/FileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/FileLoader.php");
    }
}
