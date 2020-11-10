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

/* vendor/symfony/intl/Tests/Util/GitRepositoryTest.php */
class __TwigTemplate_794eceab35c8877bb76ec418d14909c63efde9b56e26828f1b338336138e6401 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/GitRepositoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/GitRepositoryTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;
use Symfony\\Component\\Intl\\Util\\GitRepository;

/**
 * @group intl-data
 */
class GitRepositoryTest extends TestCase
{
    private \$targetDir;

    const REPO_URL = 'https://github.com/symfony/intl.git';

    /**
     * @before
     * @after
     */
    protected function cleanup()
    {
        \$this->targetDir = sys_get_temp_dir().'/GitRepositoryTest/source';

        \$fs = new Filesystem();
        \$fs->remove(\$this->targetDir);
    }

    public function testItThrowsAnExceptionIfInitialisedWithNonGitDirectory()
    {
        \$this->expectException(RuntimeException::class);

        @mkdir(\$this->targetDir, 0777, true);

        new GitRepository(\$this->targetDir);
    }

    public function testItClonesTheRepository()
    {
        \$git = GitRepository::download(self::REPO_URL, \$this->targetDir);

        \$this->assertInstanceOf(GitRepository::class, \$git);
        \$this->assertDirectoryExists(\$this->targetDir.'/.git');
        \$this->assertSame(\$this->targetDir, \$git->getPath());
        \$this->assertSame(self::REPO_URL, \$git->getUrl());
        \$this->assertRegExp('#^[0-9a-z]{40}\$#', \$git->getLastCommitHash());
        \$this->assertNotEmpty(\$git->getLastAuthor());
        \$this->assertInstanceOf('DateTime', \$git->getLastAuthoredDate());
        \$this->assertStringMatchesFormat('v%s', \$git->getLastTag());
        \$this->assertStringMatchesFormat('v3%s', \$git->getLastTag(function (\$tag) { return 0 === strpos(\$tag, 'v3'); }));
    }

    public function testItCheckoutsToTheLastTag()
    {
        \$git = GitRepository::download(self::REPO_URL, \$this->targetDir);
        \$lastCommitHash = \$git->getLastCommitHash();
        \$lastV3Tag = \$git->getLastTag(function (\$tag) { return 0 === strpos(\$tag, 'v3'); });

        \$git->checkout(\$lastV3Tag);

        \$this->assertNotEquals(\$lastCommitHash, \$git->getLastCommitHash());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Util/GitRepositoryTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;
use Symfony\\Component\\Intl\\Util\\GitRepository;

/**
 * @group intl-data
 */
class GitRepositoryTest extends TestCase
{
    private \$targetDir;

    const REPO_URL = 'https://github.com/symfony/intl.git';

    /**
     * @before
     * @after
     */
    protected function cleanup()
    {
        \$this->targetDir = sys_get_temp_dir().'/GitRepositoryTest/source';

        \$fs = new Filesystem();
        \$fs->remove(\$this->targetDir);
    }

    public function testItThrowsAnExceptionIfInitialisedWithNonGitDirectory()
    {
        \$this->expectException(RuntimeException::class);

        @mkdir(\$this->targetDir, 0777, true);

        new GitRepository(\$this->targetDir);
    }

    public function testItClonesTheRepository()
    {
        \$git = GitRepository::download(self::REPO_URL, \$this->targetDir);

        \$this->assertInstanceOf(GitRepository::class, \$git);
        \$this->assertDirectoryExists(\$this->targetDir.'/.git');
        \$this->assertSame(\$this->targetDir, \$git->getPath());
        \$this->assertSame(self::REPO_URL, \$git->getUrl());
        \$this->assertRegExp('#^[0-9a-z]{40}\$#', \$git->getLastCommitHash());
        \$this->assertNotEmpty(\$git->getLastAuthor());
        \$this->assertInstanceOf('DateTime', \$git->getLastAuthoredDate());
        \$this->assertStringMatchesFormat('v%s', \$git->getLastTag());
        \$this->assertStringMatchesFormat('v3%s', \$git->getLastTag(function (\$tag) { return 0 === strpos(\$tag, 'v3'); }));
    }

    public function testItCheckoutsToTheLastTag()
    {
        \$git = GitRepository::download(self::REPO_URL, \$this->targetDir);
        \$lastCommitHash = \$git->getLastCommitHash();
        \$lastV3Tag = \$git->getLastTag(function (\$tag) { return 0 === strpos(\$tag, 'v3'); });

        \$git->checkout(\$lastV3Tag);

        \$this->assertNotEquals(\$lastCommitHash, \$git->getLastCommitHash());
    }
}
", "vendor/symfony/intl/Tests/Util/GitRepositoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Util/GitRepositoryTest.php");
    }
}
