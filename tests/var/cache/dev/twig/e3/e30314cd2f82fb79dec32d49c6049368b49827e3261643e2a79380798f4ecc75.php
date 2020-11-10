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

/* vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php */
class __TwigTemplate_a0cd3d5fa6531dca86bb8d0d187b5ad0f62b8f62f0765a04da19a537f71853aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php"));

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

namespace Symfony\\Component\\VarDumper\\Dumper\\ContextProvider;

use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\VarDumper;
use Twig\\Template;

/**
 * Tries to provide context from sources (class name, file, line, code excerpt, ...).
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class SourceContextProvider implements ContextProviderInterface
{
    private \$limit;
    private \$charset;
    private \$projectDir;
    private \$fileLinkFormatter;

    public function __construct(string \$charset = null, string \$projectDir = null, FileLinkFormatter \$fileLinkFormatter = null, int \$limit = 9)
    {
        \$this->charset = \$charset;
        \$this->projectDir = \$projectDir;
        \$this->fileLinkFormatter = \$fileLinkFormatter;
        \$this->limit = \$limit;
    }

    public function getContext(): ?array
    {
        \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS, \$this->limit);

        \$file = \$trace[1]['file'];
        \$line = \$trace[1]['line'];
        \$name = false;
        \$fileExcerpt = false;

        for (\$i = 2; \$i < \$this->limit; ++\$i) {
            if (isset(\$trace[\$i]['class'], \$trace[\$i]['function'])
                && 'dump' === \$trace[\$i]['function']
                && VarDumper::class === \$trace[\$i]['class']
            ) {
                \$file = \$trace[\$i]['file'];
                \$line = \$trace[\$i]['line'];

                while (++\$i < \$this->limit) {
                    if (isset(\$trace[\$i]['function'], \$trace[\$i]['file']) && empty(\$trace[\$i]['class']) && 0 !== strpos(\$trace[\$i]['function'], 'call_user_func')) {
                        \$file = \$trace[\$i]['file'];
                        \$line = \$trace[\$i]['line'];

                        break;
                    } elseif (isset(\$trace[\$i]['object']) && \$trace[\$i]['object'] instanceof Template) {
                        \$template = \$trace[\$i]['object'];
                        \$name = \$template->getTemplateName();
                        \$src = method_exists(\$template, 'getSourceContext') ? \$template->getSourceContext()->getCode() : (method_exists(\$template, 'getSource') ? \$template->getSource() : false);
                        \$info = \$template->getDebugInfo();
                        if (isset(\$info[\$trace[\$i - 1]['line']])) {
                            \$line = \$info[\$trace[\$i - 1]['line']];
                            \$file = method_exists(\$template, 'getSourceContext') ? \$template->getSourceContext()->getPath() : null;

                            if (\$src) {
                                \$src = explode(\"\\n\", \$src);
                                \$fileExcerpt = [];

                                for (\$i = max(\$line - 3, 1), \$max = min(\$line + 3, \\count(\$src)); \$i <= \$max; ++\$i) {
                                    \$fileExcerpt[] = '<li'.(\$i === \$line ? ' class=\"selected\"' : '').'><code>'.\$this->htmlEncode(\$src[\$i - 1]).'</code></li>';
                                }

                                \$fileExcerpt = '<ol start=\"'.max(\$line - 3, 1).'\">'.implode(\"\\n\", \$fileExcerpt).'</ol>';
                            }
                        }
                        break;
                    }
                }
                break;
            }
        }

        if (false === \$name) {
            \$name = str_replace('\\\\', '/', \$file);
            \$name = substr(\$name, strrpos(\$name, '/') + 1);
        }

        \$context = ['name' => \$name, 'file' => \$file, 'line' => \$line];
        \$context['file_excerpt'] = \$fileExcerpt;

        if (null !== \$this->projectDir) {
            \$context['project_dir'] = \$this->projectDir;
            if (0 === strpos(\$file, \$this->projectDir)) {
                \$context['file_relative'] = ltrim(substr(\$file, \\strlen(\$this->projectDir)), \\DIRECTORY_SEPARATOR);
            }
        }

        if (\$this->fileLinkFormatter && \$fileLink = \$this->fileLinkFormatter->format(\$context['file'], \$context['line'])) {
            \$context['file_link'] = \$fileLink;
        }

        return \$context;
    }

    private function htmlEncode(string \$s): string
    {
        \$html = '';

        \$dumper = new HtmlDumper(function (\$line) use (&\$html) { \$html .= \$line; }, \$this->charset);
        \$dumper->setDumpHeader('');
        \$dumper->setDumpBoundaries('', '');

        \$cloner = new VarCloner();
        \$dumper->dump(\$cloner->cloneVar(\$s));

        return substr(strip_tags(\$html), 1, -1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php";
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

namespace Symfony\\Component\\VarDumper\\Dumper\\ContextProvider;

use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\VarDumper;
use Twig\\Template;

/**
 * Tries to provide context from sources (class name, file, line, code excerpt, ...).
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class SourceContextProvider implements ContextProviderInterface
{
    private \$limit;
    private \$charset;
    private \$projectDir;
    private \$fileLinkFormatter;

    public function __construct(string \$charset = null, string \$projectDir = null, FileLinkFormatter \$fileLinkFormatter = null, int \$limit = 9)
    {
        \$this->charset = \$charset;
        \$this->projectDir = \$projectDir;
        \$this->fileLinkFormatter = \$fileLinkFormatter;
        \$this->limit = \$limit;
    }

    public function getContext(): ?array
    {
        \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS, \$this->limit);

        \$file = \$trace[1]['file'];
        \$line = \$trace[1]['line'];
        \$name = false;
        \$fileExcerpt = false;

        for (\$i = 2; \$i < \$this->limit; ++\$i) {
            if (isset(\$trace[\$i]['class'], \$trace[\$i]['function'])
                && 'dump' === \$trace[\$i]['function']
                && VarDumper::class === \$trace[\$i]['class']
            ) {
                \$file = \$trace[\$i]['file'];
                \$line = \$trace[\$i]['line'];

                while (++\$i < \$this->limit) {
                    if (isset(\$trace[\$i]['function'], \$trace[\$i]['file']) && empty(\$trace[\$i]['class']) && 0 !== strpos(\$trace[\$i]['function'], 'call_user_func')) {
                        \$file = \$trace[\$i]['file'];
                        \$line = \$trace[\$i]['line'];

                        break;
                    } elseif (isset(\$trace[\$i]['object']) && \$trace[\$i]['object'] instanceof Template) {
                        \$template = \$trace[\$i]['object'];
                        \$name = \$template->getTemplateName();
                        \$src = method_exists(\$template, 'getSourceContext') ? \$template->getSourceContext()->getCode() : (method_exists(\$template, 'getSource') ? \$template->getSource() : false);
                        \$info = \$template->getDebugInfo();
                        if (isset(\$info[\$trace[\$i - 1]['line']])) {
                            \$line = \$info[\$trace[\$i - 1]['line']];
                            \$file = method_exists(\$template, 'getSourceContext') ? \$template->getSourceContext()->getPath() : null;

                            if (\$src) {
                                \$src = explode(\"\\n\", \$src);
                                \$fileExcerpt = [];

                                for (\$i = max(\$line - 3, 1), \$max = min(\$line + 3, \\count(\$src)); \$i <= \$max; ++\$i) {
                                    \$fileExcerpt[] = '<li'.(\$i === \$line ? ' class=\"selected\"' : '').'><code>'.\$this->htmlEncode(\$src[\$i - 1]).'</code></li>';
                                }

                                \$fileExcerpt = '<ol start=\"'.max(\$line - 3, 1).'\">'.implode(\"\\n\", \$fileExcerpt).'</ol>';
                            }
                        }
                        break;
                    }
                }
                break;
            }
        }

        if (false === \$name) {
            \$name = str_replace('\\\\', '/', \$file);
            \$name = substr(\$name, strrpos(\$name, '/') + 1);
        }

        \$context = ['name' => \$name, 'file' => \$file, 'line' => \$line];
        \$context['file_excerpt'] = \$fileExcerpt;

        if (null !== \$this->projectDir) {
            \$context['project_dir'] = \$this->projectDir;
            if (0 === strpos(\$file, \$this->projectDir)) {
                \$context['file_relative'] = ltrim(substr(\$file, \\strlen(\$this->projectDir)), \\DIRECTORY_SEPARATOR);
            }
        }

        if (\$this->fileLinkFormatter && \$fileLink = \$this->fileLinkFormatter->format(\$context['file'], \$context['line'])) {
            \$context['file_link'] = \$fileLink;
        }

        return \$context;
    }

    private function htmlEncode(string \$s): string
    {
        \$html = '';

        \$dumper = new HtmlDumper(function (\$line) use (&\$html) { \$html .= \$line; }, \$this->charset);
        \$dumper->setDumpHeader('');
        \$dumper->setDumpBoundaries('', '');

        \$cloner = new VarCloner();
        \$dumper->dump(\$cloner->cloneVar(\$s));

        return substr(strip_tags(\$html), 1, -1);
    }
}
", "vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php");
    }
}
