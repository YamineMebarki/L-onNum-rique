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

/* vendor/symfony/twig-bridge/Translation/TwigExtractor.php */
class __TwigTemplate_a1cd0c6b71aa121e2e7869a480bbc02e7b0f1d62223994b0cb54e0dcc6f55274 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Translation/TwigExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Translation/TwigExtractor.php"));

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

namespace Symfony\\Bridge\\Twig\\Translation;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\SplFileInfo;
use Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor;
use Symfony\\Component\\Translation\\Extractor\\ExtractorInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Source;

/**
 * TwigExtractor extracts translation messages from a twig template.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigExtractor extends AbstractFileExtractor implements ExtractorInterface
{
    /**
     * Default domain for found messages.
     *
     * @var string
     */
    private \$defaultDomain = 'messages';

    /**
     * Prefix for found message.
     *
     * @var string
     */
    private \$prefix = '';

    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * {@inheritdoc}
     */
    public function extract(\$resource, MessageCatalogue \$catalogue)
    {
        foreach (\$this->extractFiles(\$resource) as \$file) {
            try {
                \$this->extractTemplate(file_get_contents(\$file->getPathname()), \$catalogue);
            } catch (Error \$e) {
                if (\$file instanceof \\SplFileInfo) {
                    \$path = \$file->getRealPath() ?: \$file->getPathname();
                    \$name = \$file instanceof SplFileInfo ? \$file->getRelativePathname() : \$path;
                    \$e->setSourceContext(new Source('', \$name, \$path));
                }

                throw \$e;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPrefix(\$prefix)
    {
        \$this->prefix = \$prefix;
    }

    protected function extractTemplate(\$template, MessageCatalogue \$catalogue)
    {
        \$visitor = \$this->twig->getExtension('Symfony\\Bridge\\Twig\\Extension\\TranslationExtension')->getTranslationNodeVisitor();
        \$visitor->enable();

        \$this->twig->parse(\$this->twig->tokenize(new Source(\$template, '')));

        foreach (\$visitor->getMessages() as \$message) {
            \$catalogue->set(trim(\$message[0]), \$this->prefix.trim(\$message[0]), \$message[1] ?: \$this->defaultDomain);
        }

        \$visitor->disable();
    }

    /**
     * @param string \$file
     *
     * @return bool
     */
    protected function canBeExtracted(\$file)
    {
        return \$this->isFile(\$file) && 'twig' === pathinfo(\$file, PATHINFO_EXTENSION);
    }

    /**
     * {@inheritdoc}
     */
    protected function extractFromDirectory(\$directory)
    {
        \$finder = new Finder();

        return \$finder->files()->name('*.twig')->in(\$directory);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Translation/TwigExtractor.php";
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

namespace Symfony\\Bridge\\Twig\\Translation;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\SplFileInfo;
use Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor;
use Symfony\\Component\\Translation\\Extractor\\ExtractorInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Source;

/**
 * TwigExtractor extracts translation messages from a twig template.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigExtractor extends AbstractFileExtractor implements ExtractorInterface
{
    /**
     * Default domain for found messages.
     *
     * @var string
     */
    private \$defaultDomain = 'messages';

    /**
     * Prefix for found message.
     *
     * @var string
     */
    private \$prefix = '';

    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * {@inheritdoc}
     */
    public function extract(\$resource, MessageCatalogue \$catalogue)
    {
        foreach (\$this->extractFiles(\$resource) as \$file) {
            try {
                \$this->extractTemplate(file_get_contents(\$file->getPathname()), \$catalogue);
            } catch (Error \$e) {
                if (\$file instanceof \\SplFileInfo) {
                    \$path = \$file->getRealPath() ?: \$file->getPathname();
                    \$name = \$file instanceof SplFileInfo ? \$file->getRelativePathname() : \$path;
                    \$e->setSourceContext(new Source('', \$name, \$path));
                }

                throw \$e;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPrefix(\$prefix)
    {
        \$this->prefix = \$prefix;
    }

    protected function extractTemplate(\$template, MessageCatalogue \$catalogue)
    {
        \$visitor = \$this->twig->getExtension('Symfony\\Bridge\\Twig\\Extension\\TranslationExtension')->getTranslationNodeVisitor();
        \$visitor->enable();

        \$this->twig->parse(\$this->twig->tokenize(new Source(\$template, '')));

        foreach (\$visitor->getMessages() as \$message) {
            \$catalogue->set(trim(\$message[0]), \$this->prefix.trim(\$message[0]), \$message[1] ?: \$this->defaultDomain);
        }

        \$visitor->disable();
    }

    /**
     * @param string \$file
     *
     * @return bool
     */
    protected function canBeExtracted(\$file)
    {
        return \$this->isFile(\$file) && 'twig' === pathinfo(\$file, PATHINFO_EXTENSION);
    }

    /**
     * {@inheritdoc}
     */
    protected function extractFromDirectory(\$directory)
    {
        \$finder = new Finder();

        return \$finder->files()->name('*.twig')->in(\$directory);
    }
}
", "vendor/symfony/twig-bridge/Translation/TwigExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Translation/TwigExtractor.php");
    }
}
