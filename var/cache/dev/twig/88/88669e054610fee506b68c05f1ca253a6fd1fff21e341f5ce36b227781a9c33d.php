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

/* vendor/symfony/intl/Util/GitRepository.php */
class __TwigTemplate_32cd8b0f836dbe1af5e03b1b06b9858b41cedfa82b881ae2c52955bfccceef69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/GitRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/GitRepository.php"));

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

namespace Symfony\\Component\\Intl\\Util;

use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * @internal
 */
final class GitRepository
{
    private \$path;

    public function __construct(string \$path)
    {
        \$this->path = \$path;

        \$this->getUrl();
    }

    public static function download(string \$remote, string \$targetDir): self
    {
        self::exec('which git', 'The command \"git\" is not installed.');

        \$filesystem = new Filesystem();

        if (!\$filesystem->exists(\$targetDir.'/.git')) {
            \$filesystem->remove(\$targetDir);
            \$filesystem->mkdir(\$targetDir);

            self::exec(sprintf('git clone %s %s', escapeshellarg(\$remote), escapeshellarg(\$targetDir)));
        }

        return new self(realpath(\$targetDir));
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function getUrl()
    {
        return \$this->getLastLine(\$this->execInPath('git config --get remote.origin.url'));
    }

    public function getLastCommitHash()
    {
        return \$this->getLastLine(\$this->execInPath('git log -1 --format=\"%H\"'));
    }

    public function getLastAuthor()
    {
        return \$this->getLastLine(\$this->execInPath('git log -1 --format=\"%an\"'));
    }

    public function getLastAuthoredDate()
    {
        return new \\DateTime(\$this->getLastLine(\$this->execInPath('git log -1 --format=\"%ai\"')));
    }

    public function getLastTag(callable \$filter = null)
    {
        \$tags = \$this->execInPath('git tag -l --sort=v:refname');

        if (null !== \$filter) {
            \$tags = array_filter(\$tags, \$filter);
        }

        return \$this->getLastLine(\$tags);
    }

    public function checkout(\$branch)
    {
        \$this->execInPath(sprintf('git checkout %s', escapeshellarg(\$branch)));
    }

    private function execInPath(\$command)
    {
        return self::exec(sprintf('cd %s && %s', escapeshellarg(\$this->path), \$command));
    }

    private static function exec(\$command, \$customErrorMessage = null)
    {
        exec(sprintf('%s 2>&1', \$command), \$output, \$result);

        if (0 !== \$result) {
            throw new RuntimeException(null !== \$customErrorMessage ? \$customErrorMessage : sprintf('The \"%s\" command failed.', \$command));
        }

        return \$output;
    }

    private function getLastLine(array \$output)
    {
        return array_pop(\$output);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Util/GitRepository.php";
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

namespace Symfony\\Component\\Intl\\Util;

use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * @internal
 */
final class GitRepository
{
    private \$path;

    public function __construct(string \$path)
    {
        \$this->path = \$path;

        \$this->getUrl();
    }

    public static function download(string \$remote, string \$targetDir): self
    {
        self::exec('which git', 'The command \"git\" is not installed.');

        \$filesystem = new Filesystem();

        if (!\$filesystem->exists(\$targetDir.'/.git')) {
            \$filesystem->remove(\$targetDir);
            \$filesystem->mkdir(\$targetDir);

            self::exec(sprintf('git clone %s %s', escapeshellarg(\$remote), escapeshellarg(\$targetDir)));
        }

        return new self(realpath(\$targetDir));
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function getUrl()
    {
        return \$this->getLastLine(\$this->execInPath('git config --get remote.origin.url'));
    }

    public function getLastCommitHash()
    {
        return \$this->getLastLine(\$this->execInPath('git log -1 --format=\"%H\"'));
    }

    public function getLastAuthor()
    {
        return \$this->getLastLine(\$this->execInPath('git log -1 --format=\"%an\"'));
    }

    public function getLastAuthoredDate()
    {
        return new \\DateTime(\$this->getLastLine(\$this->execInPath('git log -1 --format=\"%ai\"')));
    }

    public function getLastTag(callable \$filter = null)
    {
        \$tags = \$this->execInPath('git tag -l --sort=v:refname');

        if (null !== \$filter) {
            \$tags = array_filter(\$tags, \$filter);
        }

        return \$this->getLastLine(\$tags);
    }

    public function checkout(\$branch)
    {
        \$this->execInPath(sprintf('git checkout %s', escapeshellarg(\$branch)));
    }

    private function execInPath(\$command)
    {
        return self::exec(sprintf('cd %s && %s', escapeshellarg(\$this->path), \$command));
    }

    private static function exec(\$command, \$customErrorMessage = null)
    {
        exec(sprintf('%s 2>&1', \$command), \$output, \$result);

        if (0 !== \$result) {
            throw new RuntimeException(null !== \$customErrorMessage ? \$customErrorMessage : sprintf('The \"%s\" command failed.', \$command));
        }

        return \$output;
    }

    private function getLastLine(array \$output)
    {
        return array_pop(\$output);
    }
}
", "vendor/symfony/intl/Util/GitRepository.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Util/GitRepository.php");
    }
}
