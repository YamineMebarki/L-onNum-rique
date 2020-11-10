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

/* vendor/symfony/translation/Writer/TranslationWriter.php */
class __TwigTemplate_21edb7722f4da94d001ddea00a2b012012fd821f07c29bfbe68a957566ddd3b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Writer/TranslationWriter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Writer/TranslationWriter.php"));

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

namespace Symfony\\Component\\Translation\\Writer;

use Symfony\\Component\\Translation\\Dumper\\DumperInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\RuntimeException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * TranslationWriter writes translation messages.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class TranslationWriter implements TranslationWriterInterface
{
    private \$dumpers = [];

    /**
     * Adds a dumper to the writer.
     *
     * @param string          \$format The format of the dumper
     * @param DumperInterface \$dumper The dumper
     */
    public function addDumper(\$format, DumperInterface \$dumper)
    {
        \$this->dumpers[\$format] = \$dumper;
    }

    /**
     * Disables dumper backup.
     *
     * @deprecated since Symfony 4.1
     */
    public function disableBackup()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        foreach (\$this->dumpers as \$dumper) {
            if (method_exists(\$dumper, 'setBackup')) {
                \$dumper->setBackup(false);
            }
        }
    }

    /**
     * Obtains the list of supported formats.
     *
     * @return array
     */
    public function getFormats()
    {
        return array_keys(\$this->dumpers);
    }

    /**
     * Writes translation from the catalogue according to the selected format.
     *
     * @param MessageCatalogue \$catalogue The message catalogue to write
     * @param string           \$format    The format to use to dump the messages
     * @param array            \$options   Options that are passed to the dumper
     *
     * @throws InvalidArgumentException
     */
    public function write(MessageCatalogue \$catalogue, \$format, \$options = [])
    {
        if (!isset(\$this->dumpers[\$format])) {
            throw new InvalidArgumentException(sprintf('There is no dumper associated with format \"%s\".', \$format));
        }

        // get the right dumper
        \$dumper = \$this->dumpers[\$format];

        if (isset(\$options['path']) && !is_dir(\$options['path']) && !@mkdir(\$options['path'], 0777, true) && !is_dir(\$options['path'])) {
            throw new RuntimeException(sprintf('Translation Writer was not able to create directory \"%s\"', \$options['path']));
        }

        // save
        \$dumper->dump(\$catalogue, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Writer/TranslationWriter.php";
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

namespace Symfony\\Component\\Translation\\Writer;

use Symfony\\Component\\Translation\\Dumper\\DumperInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\RuntimeException;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * TranslationWriter writes translation messages.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class TranslationWriter implements TranslationWriterInterface
{
    private \$dumpers = [];

    /**
     * Adds a dumper to the writer.
     *
     * @param string          \$format The format of the dumper
     * @param DumperInterface \$dumper The dumper
     */
    public function addDumper(\$format, DumperInterface \$dumper)
    {
        \$this->dumpers[\$format] = \$dumper;
    }

    /**
     * Disables dumper backup.
     *
     * @deprecated since Symfony 4.1
     */
    public function disableBackup()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);

        foreach (\$this->dumpers as \$dumper) {
            if (method_exists(\$dumper, 'setBackup')) {
                \$dumper->setBackup(false);
            }
        }
    }

    /**
     * Obtains the list of supported formats.
     *
     * @return array
     */
    public function getFormats()
    {
        return array_keys(\$this->dumpers);
    }

    /**
     * Writes translation from the catalogue according to the selected format.
     *
     * @param MessageCatalogue \$catalogue The message catalogue to write
     * @param string           \$format    The format to use to dump the messages
     * @param array            \$options   Options that are passed to the dumper
     *
     * @throws InvalidArgumentException
     */
    public function write(MessageCatalogue \$catalogue, \$format, \$options = [])
    {
        if (!isset(\$this->dumpers[\$format])) {
            throw new InvalidArgumentException(sprintf('There is no dumper associated with format \"%s\".', \$format));
        }

        // get the right dumper
        \$dumper = \$this->dumpers[\$format];

        if (isset(\$options['path']) && !is_dir(\$options['path']) && !@mkdir(\$options['path'], 0777, true) && !is_dir(\$options['path'])) {
            throw new RuntimeException(sprintf('Translation Writer was not able to create directory \"%s\"', \$options['path']));
        }

        // save
        \$dumper->dump(\$catalogue, \$options);
    }
}
", "vendor/symfony/translation/Writer/TranslationWriter.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Writer/TranslationWriter.php");
    }
}
