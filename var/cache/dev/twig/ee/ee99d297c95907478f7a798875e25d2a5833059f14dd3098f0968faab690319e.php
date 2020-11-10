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

/* vendor/symfony/translation/Dumper/FileDumper.php */
class __TwigTemplate_d9bfe8f501aa908f64a90f3824fa2e2043565beb814b65c3ea8972514f80b0e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/FileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/FileDumper.php"));

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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\RuntimeException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).
 *
 * Options:
 * - path (mandatory): the directory where the files should be saved
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
abstract class FileDumper implements DumperInterface
{
    /**
     * A template for the relative paths to files.
     *
     * @var string
     */
    protected \$relativePathTemplate = '%domain%.%locale%.%extension%';

    /**
     * Sets the template for the relative paths to files.
     *
     * @param string \$relativePathTemplate A template for the relative paths to files
     */
    public function setRelativePathTemplate(\$relativePathTemplate)
    {
        \$this->relativePathTemplate = \$relativePathTemplate;
    }

    /**
     * Sets backup flag.
     *
     * @param bool \$backup
     *
     * @deprecated since Symfony 4.1
     */
    public function setBackup(\$backup)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        if (false !== \$backup) {
            throw new \\LogicException('The backup feature is no longer supported.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dump(MessageCatalogue \$messages, \$options = [])
    {
        if (!\\array_key_exists('path', \$options)) {
            throw new InvalidArgumentException('The file dumper needs a path option.');
        }

        // save a file for each domain
        foreach (\$messages->getDomains() as \$domain) {
            \$fullpath = \$options['path'].'/'.\$this->getRelativePath(\$domain, \$messages->getLocale());
            if (!file_exists(\$fullpath)) {
                \$directory = \\dirname(\$fullpath);
                if (!file_exists(\$directory) && !@mkdir(\$directory, 0777, true)) {
                    throw new RuntimeException(sprintf('Unable to create directory \"%s\".', \$directory));
                }
            }

            \$intlDomain = \$domain.MessageCatalogue::INTL_DOMAIN_SUFFIX;
            \$intlMessages = \$messages->all(\$intlDomain);

            if (\$intlMessages) {
                \$intlPath = \$options['path'].'/'.\$this->getRelativePath(\$intlDomain, \$messages->getLocale());
                file_put_contents(\$intlPath, \$this->formatCatalogue(\$messages, \$intlDomain, \$options));

                \$messages->replace([], \$intlDomain);

                try {
                    if (\$messages->all(\$domain)) {
                        file_put_contents(\$fullpath, \$this->formatCatalogue(\$messages, \$domain, \$options));
                    }
                    continue;
                } finally {
                    \$messages->replace(\$intlMessages, \$intlDomain);
                }
            }

            file_put_contents(\$fullpath, \$this->formatCatalogue(\$messages, \$domain, \$options));
        }
    }

    /**
     * Transforms a domain of a message catalogue to its string representation.
     *
     * @param string \$domain
     *
     * @return string representation
     */
    abstract public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = []);

    /**
     * Gets the file extension of the dumper.
     *
     * @return string file extension
     */
    abstract protected function getExtension();

    /**
     * Gets the relative file path using the template.
     */
    private function getRelativePath(string \$domain, string \$locale): string
    {
        return strtr(\$this->relativePathTemplate, [
            '%domain%' => \$domain,
            '%locale%' => \$locale,
            '%extension%' => \$this->getExtension(),
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/FileDumper.php";
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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\RuntimeException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).
 *
 * Options:
 * - path (mandatory): the directory where the files should be saved
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
abstract class FileDumper implements DumperInterface
{
    /**
     * A template for the relative paths to files.
     *
     * @var string
     */
    protected \$relativePathTemplate = '%domain%.%locale%.%extension%';

    /**
     * Sets the template for the relative paths to files.
     *
     * @param string \$relativePathTemplate A template for the relative paths to files
     */
    public function setRelativePathTemplate(\$relativePathTemplate)
    {
        \$this->relativePathTemplate = \$relativePathTemplate;
    }

    /**
     * Sets backup flag.
     *
     * @param bool \$backup
     *
     * @deprecated since Symfony 4.1
     */
    public function setBackup(\$backup)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        if (false !== \$backup) {
            throw new \\LogicException('The backup feature is no longer supported.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dump(MessageCatalogue \$messages, \$options = [])
    {
        if (!\\array_key_exists('path', \$options)) {
            throw new InvalidArgumentException('The file dumper needs a path option.');
        }

        // save a file for each domain
        foreach (\$messages->getDomains() as \$domain) {
            \$fullpath = \$options['path'].'/'.\$this->getRelativePath(\$domain, \$messages->getLocale());
            if (!file_exists(\$fullpath)) {
                \$directory = \\dirname(\$fullpath);
                if (!file_exists(\$directory) && !@mkdir(\$directory, 0777, true)) {
                    throw new RuntimeException(sprintf('Unable to create directory \"%s\".', \$directory));
                }
            }

            \$intlDomain = \$domain.MessageCatalogue::INTL_DOMAIN_SUFFIX;
            \$intlMessages = \$messages->all(\$intlDomain);

            if (\$intlMessages) {
                \$intlPath = \$options['path'].'/'.\$this->getRelativePath(\$intlDomain, \$messages->getLocale());
                file_put_contents(\$intlPath, \$this->formatCatalogue(\$messages, \$intlDomain, \$options));

                \$messages->replace([], \$intlDomain);

                try {
                    if (\$messages->all(\$domain)) {
                        file_put_contents(\$fullpath, \$this->formatCatalogue(\$messages, \$domain, \$options));
                    }
                    continue;
                } finally {
                    \$messages->replace(\$intlMessages, \$intlDomain);
                }
            }

            file_put_contents(\$fullpath, \$this->formatCatalogue(\$messages, \$domain, \$options));
        }
    }

    /**
     * Transforms a domain of a message catalogue to its string representation.
     *
     * @param string \$domain
     *
     * @return string representation
     */
    abstract public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = []);

    /**
     * Gets the file extension of the dumper.
     *
     * @return string file extension
     */
    abstract protected function getExtension();

    /**
     * Gets the relative file path using the template.
     */
    private function getRelativePath(string \$domain, string \$locale): string
    {
        return strtr(\$this->relativePathTemplate, [
            '%domain%' => \$domain,
            '%locale%' => \$locale,
            '%extension%' => \$this->getExtension(),
        ]);
    }
}
", "vendor/symfony/translation/Dumper/FileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/FileDumper.php");
    }
}
