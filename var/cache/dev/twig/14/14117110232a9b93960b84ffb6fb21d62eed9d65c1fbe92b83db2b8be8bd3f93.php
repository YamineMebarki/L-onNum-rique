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

/* vendor/symfony/mime/Resources/bin/update_mime_types.php */
class __TwigTemplate_493e6fd654d18df9295680a280642bfe507c7acb5a570547c6052dabad44d6e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Resources/bin/update_mime_types.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Resources/bin/update_mime_types.php"));

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

// load new map
\$data = file_get_contents('https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types');
\$new = [];
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!\$line || '#' == \$line[0]) {
        continue;
    }
    \$mimeType = substr(\$line, 0, strpos(\$line, \"\\t\"));
    \$extensions = explode(' ', substr(\$line, strrpos(\$line, \"\\t\") + 1));
    \$new[\$mimeType] = \$extensions;
}

\$xml = simplexml_load_string(file_get_contents('https://raw.github.com/minad/mimemagic/master/script/freedesktop.org.xml'));
foreach (\$xml as \$node) {
    \$exts = [];
    foreach (\$node->glob as \$glob) {
        \$pattern = (string) \$glob['pattern'];
        if ('*' != \$pattern[0] || '.' != \$pattern[1]) {
            continue;
        }

        \$exts[] = substr(\$pattern, 2);
    }

    if (!\$exts) {
        continue;
    }

    \$mt = strtolower((string) \$node['type']);
    \$new[\$mt] = array_merge(\$new[\$mt] ?? [], \$exts);
    foreach (\$node->alias as \$alias) {
        \$mt = strtolower((string) \$alias['type']);
        \$new[\$mt] = array_merge(\$new[\$mt] ?? [], \$exts);
    }
}

// load current map
\$data = file_get_contents(\$output = __DIR__.'/../../MimeTypes.php');
\$current = [];
\$pre = '';
\$post = '';
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!preg_match(\"{^        '([^']+/[^']+)' => \\['(.+)'\\],\$}\", \$line, \$matches)) {
        if (!\$current) {
            \$pre .= \$line.\"\\n\";
        } else {
            \$post .= \$line.\"\\n\";
        }
        continue;
    }
    \$current[\$matches[1]] = explode(\"', '\", \$matches[2]);
}

// we merge the 2 maps (we never remove old mime types)
\$map = array_replace_recursive(\$current, \$new);
ksort(\$map);

\$data = \$pre;
foreach (\$map as \$mimeType => \$exts) {
    \$data .= sprintf(\"        '%s' => ['%s'],\\n\", \$mimeType, implode(\"', '\", array_unique(\$exts)));
}
\$data .= \$post;

// reverse map
// we prefill the extensions with some preferences for content-types
\$exts = [
    'aif' => ['audio/x-aiff'],
    'aiff' => ['audio/x-aiff'],
    'aps' => ['application/postscript'],
    'avi' => ['video/avi'],
    'bmp' => ['image/bmp'],
    'bz2' => ['application/x-bz2'],
    'css' => ['text/css'],
    'csv' => ['text/csv'],
    'dmg' => ['application/x-apple-diskimage'],
    'doc' => ['application/msword'],
    'docx' => ['application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
    'eml' => ['message/rfc822'],
    'exe' => ['application/x-ms-dos-executable'],
    'flv' => ['video/x-flv'],
    'gif' => ['image/gif'],
    'gz' => ['application/x-gzip'],
    'hqx' => ['application/stuffit'],
    'htm' => ['text/html'],
    'html' => ['text/html'],
    'jar' => ['application/x-java-archive'],
    'jpeg' => ['image/jpeg'],
    'jpg' => ['image/jpeg'],
    'js' => ['text/javascript'],
    'm3u' => ['audio/x-mpegurl'],
    'm4a' => ['audio/mp4'],
    'mdb' => ['application/x-msaccess'],
    'mid' => ['audio/midi'],
    'midi' => ['audio/midi'],
    'mov' => ['video/quicktime'],
    'mp3' => ['audio/mpeg'],
    'mp4' => ['video/mp4'],
    'mpeg' => ['video/mpeg'],
    'mpg' => ['video/mpeg'],
    'ogg' => ['audio/ogg'],
    'pdf' => ['application/pdf'],
    'php' => ['application/x-php'],
    'php3' => ['application/x-php'],
    'php4' => ['application/x-php'],
    'php5' => ['application/x-php'],
    'png' => ['image/png'],
    'ppt' => ['application/vnd.ms-powerpoint'],
    'pptx' => ['application/vnd.openxmlformats-officedocument.presentationml.presentation'],
    'ps' => ['application/postscript'],
    'rar' => ['application/x-rar-compressed'],
    'rtf' => ['application/rtf'],
    'sit' => ['application/x-stuffit'],
    'svg' => ['image/svg+xml'],
    'tar' => ['application/x-tar'],
    'tif' => ['image/tiff'],
    'tiff' => ['image/tiff'],
    'ttf' => ['application/x-font-truetype'],
    'txt' => ['text/plain'],
    'vcf' => ['text/x-vcard'],
    'wav' => ['audio/wav'],
    'wma' => ['audio/x-ms-wma'],
    'wmv' => ['audio/x-ms-wmv'],
    'xls' => ['application/vnd.ms-excel'],
    'xlsx' => ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
    'xml' => ['application/xml'],
    'zip' => ['application/zip'],
];
foreach (\$map as \$mimeType => \$extensions) {
    foreach (\$extensions as \$extension) {
        \$exts[\$extension][] = \$mimeType;
    }
}
ksort(\$exts);

\$updated = '';
\$state = 0;
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!preg_match(\"{^        '([^'/]+)' => \\['(.+)'\\],\$}\", \$line, \$matches)) {
        if (1 === \$state) {
            \$state = 2;
            foreach (\$exts as \$ext => \$mimeTypes) {
                \$updated .= sprintf(\"        '%s' => ['%s'],\\n\", \$ext, implode(\"', '\", array_unique(\$mimeTypes)));
            }
        }
        \$updated .= \$line.\"\\n\";
        continue;
    }
    \$state = 1;
}

\$updated = preg_replace('{Updated from upstream on .+?\\.}', 'Updated from upstream on '.date('Y-m-d'), \$updated, -1);

file_put_contents(\$output, rtrim(\$updated, \"\\n\").\"\\n\");

echo \"Done.\\n\";
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Resources/bin/update_mime_types.php";
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

// load new map
\$data = file_get_contents('https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types');
\$new = [];
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!\$line || '#' == \$line[0]) {
        continue;
    }
    \$mimeType = substr(\$line, 0, strpos(\$line, \"\\t\"));
    \$extensions = explode(' ', substr(\$line, strrpos(\$line, \"\\t\") + 1));
    \$new[\$mimeType] = \$extensions;
}

\$xml = simplexml_load_string(file_get_contents('https://raw.github.com/minad/mimemagic/master/script/freedesktop.org.xml'));
foreach (\$xml as \$node) {
    \$exts = [];
    foreach (\$node->glob as \$glob) {
        \$pattern = (string) \$glob['pattern'];
        if ('*' != \$pattern[0] || '.' != \$pattern[1]) {
            continue;
        }

        \$exts[] = substr(\$pattern, 2);
    }

    if (!\$exts) {
        continue;
    }

    \$mt = strtolower((string) \$node['type']);
    \$new[\$mt] = array_merge(\$new[\$mt] ?? [], \$exts);
    foreach (\$node->alias as \$alias) {
        \$mt = strtolower((string) \$alias['type']);
        \$new[\$mt] = array_merge(\$new[\$mt] ?? [], \$exts);
    }
}

// load current map
\$data = file_get_contents(\$output = __DIR__.'/../../MimeTypes.php');
\$current = [];
\$pre = '';
\$post = '';
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!preg_match(\"{^        '([^']+/[^']+)' => \\['(.+)'\\],\$}\", \$line, \$matches)) {
        if (!\$current) {
            \$pre .= \$line.\"\\n\";
        } else {
            \$post .= \$line.\"\\n\";
        }
        continue;
    }
    \$current[\$matches[1]] = explode(\"', '\", \$matches[2]);
}

// we merge the 2 maps (we never remove old mime types)
\$map = array_replace_recursive(\$current, \$new);
ksort(\$map);

\$data = \$pre;
foreach (\$map as \$mimeType => \$exts) {
    \$data .= sprintf(\"        '%s' => ['%s'],\\n\", \$mimeType, implode(\"', '\", array_unique(\$exts)));
}
\$data .= \$post;

// reverse map
// we prefill the extensions with some preferences for content-types
\$exts = [
    'aif' => ['audio/x-aiff'],
    'aiff' => ['audio/x-aiff'],
    'aps' => ['application/postscript'],
    'avi' => ['video/avi'],
    'bmp' => ['image/bmp'],
    'bz2' => ['application/x-bz2'],
    'css' => ['text/css'],
    'csv' => ['text/csv'],
    'dmg' => ['application/x-apple-diskimage'],
    'doc' => ['application/msword'],
    'docx' => ['application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
    'eml' => ['message/rfc822'],
    'exe' => ['application/x-ms-dos-executable'],
    'flv' => ['video/x-flv'],
    'gif' => ['image/gif'],
    'gz' => ['application/x-gzip'],
    'hqx' => ['application/stuffit'],
    'htm' => ['text/html'],
    'html' => ['text/html'],
    'jar' => ['application/x-java-archive'],
    'jpeg' => ['image/jpeg'],
    'jpg' => ['image/jpeg'],
    'js' => ['text/javascript'],
    'm3u' => ['audio/x-mpegurl'],
    'm4a' => ['audio/mp4'],
    'mdb' => ['application/x-msaccess'],
    'mid' => ['audio/midi'],
    'midi' => ['audio/midi'],
    'mov' => ['video/quicktime'],
    'mp3' => ['audio/mpeg'],
    'mp4' => ['video/mp4'],
    'mpeg' => ['video/mpeg'],
    'mpg' => ['video/mpeg'],
    'ogg' => ['audio/ogg'],
    'pdf' => ['application/pdf'],
    'php' => ['application/x-php'],
    'php3' => ['application/x-php'],
    'php4' => ['application/x-php'],
    'php5' => ['application/x-php'],
    'png' => ['image/png'],
    'ppt' => ['application/vnd.ms-powerpoint'],
    'pptx' => ['application/vnd.openxmlformats-officedocument.presentationml.presentation'],
    'ps' => ['application/postscript'],
    'rar' => ['application/x-rar-compressed'],
    'rtf' => ['application/rtf'],
    'sit' => ['application/x-stuffit'],
    'svg' => ['image/svg+xml'],
    'tar' => ['application/x-tar'],
    'tif' => ['image/tiff'],
    'tiff' => ['image/tiff'],
    'ttf' => ['application/x-font-truetype'],
    'AideTxt' => ['text/plain'],
    'vcf' => ['text/x-vcard'],
    'wav' => ['audio/wav'],
    'wma' => ['audio/x-ms-wma'],
    'wmv' => ['audio/x-ms-wmv'],
    'xls' => ['application/vnd.ms-excel'],
    'xlsx' => ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
    'xml' => ['application/xml'],
    'zip' => ['application/zip'],
];
foreach (\$map as \$mimeType => \$extensions) {
    foreach (\$extensions as \$extension) {
        \$exts[\$extension][] = \$mimeType;
    }
}
ksort(\$exts);

\$updated = '';
\$state = 0;
foreach (explode(\"\\n\", \$data) as \$line) {
    if (!preg_match(\"{^        '([^'/]+)' => \\['(.+)'\\],\$}\", \$line, \$matches)) {
        if (1 === \$state) {
            \$state = 2;
            foreach (\$exts as \$ext => \$mimeTypes) {
                \$updated .= sprintf(\"        '%s' => ['%s'],\\n\", \$ext, implode(\"', '\", array_unique(\$mimeTypes)));
            }
        }
        \$updated .= \$line.\"\\n\";
        continue;
    }
    \$state = 1;
}

\$updated = preg_replace('{Updated from upstream on .+?\\.}', 'Updated from upstream on '.date('Y-m-d'), \$updated, -1);

file_put_contents(\$output, rtrim(\$updated, \"\\n\").\"\\n\");

echo \"Done.\\n\";
", "vendor/symfony/mime/Resources/bin/update_mime_types.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Resources/bin/update_mime_types.php");
    }
}
