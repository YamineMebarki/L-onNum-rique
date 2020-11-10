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

/* vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php */
class __TwigTemplate_dd41c931747539ab0d75fb2c93899706bb10341bac37d2e88dceda5d885ad269 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

class MockSplFileInfo extends \\SplFileInfo
{
    const TYPE_DIRECTORY = 1;
    const TYPE_FILE = 2;
    const TYPE_UNKNOWN = 3;

    private \$contents = null;
    private \$mode = null;
    private \$type = null;
    private \$relativePath = null;
    private \$relativePathname = null;

    public function __construct(\$param)
    {
        if (\\is_string(\$param)) {
            parent::__construct(\$param);
        } elseif (\\is_array(\$param)) {
            \$defaults = [
                'name' => 'file.txt',
                'contents' => null,
                'mode' => null,
                'type' => null,
                'relativePath' => null,
                'relativePathname' => null,
            ];
            \$defaults = array_merge(\$defaults, \$param);
            parent::__construct(\$defaults['name']);
            \$this->setContents(\$defaults['contents']);
            \$this->setMode(\$defaults['mode']);
            \$this->setType(\$defaults['type']);
            \$this->setRelativePath(\$defaults['relativePath']);
            \$this->setRelativePathname(\$defaults['relativePathname']);
        } else {
            throw new \\RuntimeException(sprintf('Incorrect parameter \"%s\"', \$param));
        }
    }

    public function isFile()
    {
        if (null === \$this->type) {
            return false !== strpos(\$this->getFilename(), 'file');
        }

        return self::TYPE_FILE === \$this->type;
    }

    public function isDir()
    {
        if (null === \$this->type) {
            return false !== strpos(\$this->getFilename(), 'directory');
        }

        return self::TYPE_DIRECTORY === \$this->type;
    }

    public function isReadable()
    {
        if (null === \$this->mode) {
            return preg_match('/r\\+/', \$this->getFilename());
        }

        return preg_match('/r\\+/', \$this->mode);
    }

    public function getContents()
    {
        return \$this->contents;
    }

    public function setContents(\$contents)
    {
        \$this->contents = \$contents;
    }

    public function setMode(\$mode)
    {
        \$this->mode = \$mode;
    }

    public function setType(\$type)
    {
        if (\\is_string(\$type)) {
            switch (\$type) {
                case 'directory':
                case 'd':
                    \$this->type = self::TYPE_DIRECTORY;
                    break;
                case 'file':
                case 'f':
                    \$this->type = self::TYPE_FILE;
                    break;
                default:
                    \$this->type = self::TYPE_UNKNOWN;
            }
        } else {
            \$this->type = \$type;
        }
    }

    public function setRelativePath(\$relativePath)
    {
        \$this->relativePath = \$relativePath;
    }

    public function setRelativePathname(\$relativePathname)
    {
        \$this->relativePathname = \$relativePathname;
    }

    public function getRelativePath()
    {
        return \$this->relativePath;
    }

    public function getRelativePathname()
    {
        return \$this->relativePathname;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

class MockSplFileInfo extends \\SplFileInfo
{
    const TYPE_DIRECTORY = 1;
    const TYPE_FILE = 2;
    const TYPE_UNKNOWN = 3;

    private \$contents = null;
    private \$mode = null;
    private \$type = null;
    private \$relativePath = null;
    private \$relativePathname = null;

    public function __construct(\$param)
    {
        if (\\is_string(\$param)) {
            parent::__construct(\$param);
        } elseif (\\is_array(\$param)) {
            \$defaults = [
                'name' => 'file.txt',
                'contents' => null,
                'mode' => null,
                'type' => null,
                'relativePath' => null,
                'relativePathname' => null,
            ];
            \$defaults = array_merge(\$defaults, \$param);
            parent::__construct(\$defaults['name']);
            \$this->setContents(\$defaults['contents']);
            \$this->setMode(\$defaults['mode']);
            \$this->setType(\$defaults['type']);
            \$this->setRelativePath(\$defaults['relativePath']);
            \$this->setRelativePathname(\$defaults['relativePathname']);
        } else {
            throw new \\RuntimeException(sprintf('Incorrect parameter \"%s\"', \$param));
        }
    }

    public function isFile()
    {
        if (null === \$this->type) {
            return false !== strpos(\$this->getFilename(), 'file');
        }

        return self::TYPE_FILE === \$this->type;
    }

    public function isDir()
    {
        if (null === \$this->type) {
            return false !== strpos(\$this->getFilename(), 'directory');
        }

        return self::TYPE_DIRECTORY === \$this->type;
    }

    public function isReadable()
    {
        if (null === \$this->mode) {
            return preg_match('/r\\+/', \$this->getFilename());
        }

        return preg_match('/r\\+/', \$this->mode);
    }

    public function getContents()
    {
        return \$this->contents;
    }

    public function setContents(\$contents)
    {
        \$this->contents = \$contents;
    }

    public function setMode(\$mode)
    {
        \$this->mode = \$mode;
    }

    public function setType(\$type)
    {
        if (\\is_string(\$type)) {
            switch (\$type) {
                case 'directory':
                case 'd':
                    \$this->type = self::TYPE_DIRECTORY;
                    break;
                case 'file':
                case 'f':
                    \$this->type = self::TYPE_FILE;
                    break;
                default:
                    \$this->type = self::TYPE_UNKNOWN;
            }
        } else {
            \$this->type = \$type;
        }
    }

    public function setRelativePath(\$relativePath)
    {
        \$this->relativePath = \$relativePath;
    }

    public function setRelativePathname(\$relativePathname)
    {
        \$this->relativePathname = \$relativePathname;
    }

    public function getRelativePath()
    {
        return \$this->relativePath;
    }

    public function getRelativePathname()
    {
        return \$this->relativePathname;
    }
}
", "vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/MockSplFileInfo.php");
    }
}
