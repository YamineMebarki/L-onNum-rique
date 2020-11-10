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

/* vendor/doctrine/orm/docs/en/make.bat */
class __TwigTemplate_8a3c4a9b91ba9240826cdd7ac2dd9f2839fdc795807d767cc05c51240c6a958d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/make.bat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/make.bat"));

        // line 1
        echo "@ECHO OFF

REM Command file for Sphinx documentation

set SPHINXBUILD=sphinx-build
set BUILDDIR=_build
set ALLSPHINXOPTS=-d %BUILDDIR%/doctrees %SPHINXOPTS% .
if NOT \"%PAPER%\" == \"\" (
\tset ALLSPHINXOPTS=-D latex_paper_size=%PAPER% %ALLSPHINXOPTS%
)

if \"%1\" == \"\" goto help

if \"%1\" == \"help\" (
\t:help
\techo.Please use `make ^<target^>` where ^<target^> is one of
\techo.  html      to make standalone HTML files
\techo.  dirhtml   to make HTML files named site.html in directories
\techo.  pickle    to make pickle files
\techo.  json      to make JSON files
\techo.  htmlhelp  to make HTML files and a HTML help project
\techo.  qthelp    to make HTML files and a qthelp project
\techo.  latex     to make LaTeX files, you can set PAPER=a4 or PAPER=letter
\techo.  changes   to make an overview over all changed/added/deprecated items
\techo.  linkcheck to check all external links for integrity
\techo.  doctest   to run all doctests embedded in the documentation if enabled
\tgoto end
)

if \"%1\" == \"clean\" (
\tfor /d %%i in (%BUILDDIR%\\*) do rmdir /q /s %%i
\tdel /q /s %BUILDDIR%\\*
\tgoto end
)

if \"%1\" == \"html\" (
\t%SPHINXBUILD% -b html %ALLSPHINXOPTS% %BUILDDIR%/html
\techo.
\techo.Build finished. The HTML pages are in %BUILDDIR%/html.
\tgoto end
)

if \"%1\" == \"dirhtml\" (
\t%SPHINXBUILD% -b dirhtml %ALLSPHINXOPTS% %BUILDDIR%/dirhtml
\techo.
\techo.Build finished. The HTML pages are in %BUILDDIR%/dirhtml.
\tgoto end
)

if \"%1\" == \"pickle\" (
\t%SPHINXBUILD% -b pickle %ALLSPHINXOPTS% %BUILDDIR%/pickle
\techo.
\techo.Build finished; now you can process the pickle files.
\tgoto end
)

if \"%1\" == \"json\" (
\t%SPHINXBUILD% -b json %ALLSPHINXOPTS% %BUILDDIR%/json
\techo.
\techo.Build finished; now you can process the JSON files.
\tgoto end
)

if \"%1\" == \"htmlhelp\" (
\t%SPHINXBUILD% -b htmlhelp %ALLSPHINXOPTS% %BUILDDIR%/htmlhelp
\techo.
\techo.Build finished; now you can run HTML Help Workshop with the ^
.hhp project file in %BUILDDIR%/htmlhelp.
\tgoto end
)

if \"%1\" == \"qthelp\" (
\t%SPHINXBUILD% -b qthelp %ALLSPHINXOPTS% %BUILDDIR%/qthelp
\techo.
\techo.Build finished; now you can run \"qcollectiongenerator\" with the ^
.qhcp project file in %BUILDDIR%/qthelp, like this:
\techo.^> qcollectiongenerator %BUILDDIR%\\qthelp\\Doctrine2ORM.qhcp
\techo.To view the help file:
\techo.^> assistant -collectionFile %BUILDDIR%\\qthelp\\Doctrine2ORM.ghc
\tgoto end
)

if \"%1\" == \"latex\" (
\t%SPHINXBUILD% -b latex %ALLSPHINXOPTS% %BUILDDIR%/latex
\techo.
\techo.Build finished; the LaTeX files are in %BUILDDIR%/latex.
\tgoto end
)

if \"%1\" == \"changes\" (
\t%SPHINXBUILD% -b changes %ALLSPHINXOPTS% %BUILDDIR%/changes
\techo.
\techo.The overview file is in %BUILDDIR%/changes.
\tgoto end
)

if \"%1\" == \"linkcheck\" (
\t%SPHINXBUILD% -b linkcheck %ALLSPHINXOPTS% %BUILDDIR%/linkcheck
\techo.
\techo.Link check complete; look for any errors in the above output ^
or in %BUILDDIR%/linkcheck/output.txt.
\tgoto end
)

if \"%1\" == \"doctest\" (
\t%SPHINXBUILD% -b doctest %ALLSPHINXOPTS% %BUILDDIR%/doctest
\techo.
\techo.Testing of doctests in the sources finished, look at the ^
results in %BUILDDIR%/doctest/output.txt.
\tgoto end
)

:end
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/make.bat";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@ECHO OFF

REM Command file for Sphinx documentation

set SPHINXBUILD=sphinx-build
set BUILDDIR=_build
set ALLSPHINXOPTS=-d %BUILDDIR%/doctrees %SPHINXOPTS% .
if NOT \"%PAPER%\" == \"\" (
\tset ALLSPHINXOPTS=-D latex_paper_size=%PAPER% %ALLSPHINXOPTS%
)

if \"%1\" == \"\" goto help

if \"%1\" == \"help\" (
\t:help
\techo.Please use `make ^<target^>` where ^<target^> is one of
\techo.  html      to make standalone HTML files
\techo.  dirhtml   to make HTML files named site.html in directories
\techo.  pickle    to make pickle files
\techo.  json      to make JSON files
\techo.  htmlhelp  to make HTML files and a HTML help project
\techo.  qthelp    to make HTML files and a qthelp project
\techo.  latex     to make LaTeX files, you can set PAPER=a4 or PAPER=letter
\techo.  changes   to make an overview over all changed/added/deprecated items
\techo.  linkcheck to check all external links for integrity
\techo.  doctest   to run all doctests embedded in the documentation if enabled
\tgoto end
)

if \"%1\" == \"clean\" (
\tfor /d %%i in (%BUILDDIR%\\*) do rmdir /q /s %%i
\tdel /q /s %BUILDDIR%\\*
\tgoto end
)

if \"%1\" == \"html\" (
\t%SPHINXBUILD% -b html %ALLSPHINXOPTS% %BUILDDIR%/html
\techo.
\techo.Build finished. The HTML pages are in %BUILDDIR%/html.
\tgoto end
)

if \"%1\" == \"dirhtml\" (
\t%SPHINXBUILD% -b dirhtml %ALLSPHINXOPTS% %BUILDDIR%/dirhtml
\techo.
\techo.Build finished. The HTML pages are in %BUILDDIR%/dirhtml.
\tgoto end
)

if \"%1\" == \"pickle\" (
\t%SPHINXBUILD% -b pickle %ALLSPHINXOPTS% %BUILDDIR%/pickle
\techo.
\techo.Build finished; now you can process the pickle files.
\tgoto end
)

if \"%1\" == \"json\" (
\t%SPHINXBUILD% -b json %ALLSPHINXOPTS% %BUILDDIR%/json
\techo.
\techo.Build finished; now you can process the JSON files.
\tgoto end
)

if \"%1\" == \"htmlhelp\" (
\t%SPHINXBUILD% -b htmlhelp %ALLSPHINXOPTS% %BUILDDIR%/htmlhelp
\techo.
\techo.Build finished; now you can run HTML Help Workshop with the ^
.hhp project file in %BUILDDIR%/htmlhelp.
\tgoto end
)

if \"%1\" == \"qthelp\" (
\t%SPHINXBUILD% -b qthelp %ALLSPHINXOPTS% %BUILDDIR%/qthelp
\techo.
\techo.Build finished; now you can run \"qcollectiongenerator\" with the ^
.qhcp project file in %BUILDDIR%/qthelp, like this:
\techo.^> qcollectiongenerator %BUILDDIR%\\qthelp\\Doctrine2ORM.qhcp
\techo.To view the help file:
\techo.^> assistant -collectionFile %BUILDDIR%\\qthelp\\Doctrine2ORM.ghc
\tgoto end
)

if \"%1\" == \"latex\" (
\t%SPHINXBUILD% -b latex %ALLSPHINXOPTS% %BUILDDIR%/latex
\techo.
\techo.Build finished; the LaTeX files are in %BUILDDIR%/latex.
\tgoto end
)

if \"%1\" == \"changes\" (
\t%SPHINXBUILD% -b changes %ALLSPHINXOPTS% %BUILDDIR%/changes
\techo.
\techo.The overview file is in %BUILDDIR%/changes.
\tgoto end
)

if \"%1\" == \"linkcheck\" (
\t%SPHINXBUILD% -b linkcheck %ALLSPHINXOPTS% %BUILDDIR%/linkcheck
\techo.
\techo.Link check complete; look for any errors in the above output ^
or in %BUILDDIR%/linkcheck/output.txt.
\tgoto end
)

if \"%1\" == \"doctest\" (
\t%SPHINXBUILD% -b doctest %ALLSPHINXOPTS% %BUILDDIR%/doctest
\techo.
\techo.Testing of doctests in the sources finished, look at the ^
results in %BUILDDIR%/doctest/output.txt.
\tgoto end
)

:end
", "vendor/doctrine/orm/docs/en/make.bat", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/make.bat");
    }
}
