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

/* vendor/symfony/cache/Traits/FilesystemTrait.php */
class __TwigTemplate_8b016a1565fbac514b16d2d81dbc0df2d346ad204511afe393538e2a88b19fda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/FilesystemTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/FilesystemTrait.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @internal
 */
trait FilesystemTrait
{
    use FilesystemCommonTrait;

    private \$marshaller;

    /**
     * @return bool
     */
    public function prune()
    {
        \$time = time();
        \$pruned = true;

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (!\$h = @fopen(\$file, 'rb')) {
                continue;
            }

            if ((\$expiresAt = (int) fgets(\$h)) && \$time >= \$expiresAt) {
                fclose(\$h);
                \$pruned = @unlink(\$file) && !file_exists(\$file) && \$pruned;
            } else {
                fclose(\$h);
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$values = [];
        \$now = time();

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            if (!file_exists(\$file) || !\$h = @fopen(\$file, 'rb')) {
                continue;
            }
            if ((\$expiresAt = (int) fgets(\$h)) && \$now >= \$expiresAt) {
                fclose(\$h);
                @unlink(\$file);
            } else {
                \$i = rawurldecode(rtrim(fgets(\$h)));
                \$value = stream_get_contents(\$h);
                fclose(\$h);
                if (\$i === \$id) {
                    \$values[\$id] = \$this->marshaller->unmarshall(\$value);
                }
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        \$file = \$this->getFile(\$id);

        return file_exists(\$file) && (@filemtime(\$file) > time() || \$this->doFetch([\$id]));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        \$expiresAt = \$lifetime ? (time() + \$lifetime) : 0;
        \$values = \$this->marshaller->marshall(\$values, \$failed);

        foreach (\$values as \$id => \$value) {
            if (!\$this->write(\$this->getFile(\$id, true), \$expiresAt.\"\\n\".rawurlencode(\$id).\"\\n\".\$value, \$expiresAt)) {
                \$failed[] = \$id;
            }
        }

        if (\$failed && !is_writable(\$this->directory)) {
            throw new CacheException(sprintf('Cache directory is not writable (%s)', \$this->directory));
        }

        return \$failed;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/FilesystemTrait.php";
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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rob Frawley 2nd <rmf@src.run>
 *
 * @internal
 */
trait FilesystemTrait
{
    use FilesystemCommonTrait;

    private \$marshaller;

    /**
     * @return bool
     */
    public function prune()
    {
        \$time = time();
        \$pruned = true;

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (!\$h = @fopen(\$file, 'rb')) {
                continue;
            }

            if ((\$expiresAt = (int) fgets(\$h)) && \$time >= \$expiresAt) {
                fclose(\$h);
                \$pruned = @unlink(\$file) && !file_exists(\$file) && \$pruned;
            } else {
                fclose(\$h);
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$values = [];
        \$now = time();

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            if (!file_exists(\$file) || !\$h = @fopen(\$file, 'rb')) {
                continue;
            }
            if ((\$expiresAt = (int) fgets(\$h)) && \$now >= \$expiresAt) {
                fclose(\$h);
                @unlink(\$file);
            } else {
                \$i = rawurldecode(rtrim(fgets(\$h)));
                \$value = stream_get_contents(\$h);
                fclose(\$h);
                if (\$i === \$id) {
                    \$values[\$id] = \$this->marshaller->unmarshall(\$value);
                }
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        \$file = \$this->getFile(\$id);

        return file_exists(\$file) && (@filemtime(\$file) > time() || \$this->doFetch([\$id]));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        \$expiresAt = \$lifetime ? (time() + \$lifetime) : 0;
        \$values = \$this->marshaller->marshall(\$values, \$failed);

        foreach (\$values as \$id => \$value) {
            if (!\$this->write(\$this->getFile(\$id, true), \$expiresAt.\"\\n\".rawurlencode(\$id).\"\\n\".\$value, \$expiresAt)) {
                \$failed[] = \$id;
            }
        }

        if (\$failed && !is_writable(\$this->directory)) {
            throw new CacheException(sprintf('Cache directory is not writable (%s)', \$this->directory));
        }

        return \$failed;
    }
}
", "vendor/symfony/cache/Traits/FilesystemTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/FilesystemTrait.php");
    }
}
