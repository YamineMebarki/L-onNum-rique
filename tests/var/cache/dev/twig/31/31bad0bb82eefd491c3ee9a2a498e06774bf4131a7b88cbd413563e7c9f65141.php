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

/* vendor/doctrine/orm/docs/en/Makefile */
class __TwigTemplate_b776da6295017a404ded96c8e4a328e3e69c9de3ab8c10ae1316c4915f5e4a10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/Makefile"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/Makefile"));

        // line 1
        echo "# Makefile for Sphinx documentation
#

# You can set these variables from the command line.
SPHINXOPTS    =
SPHINXBUILD   = sphinx-build
PAPER         =
BUILDDIR      = _build

# Internal variables.
PAPEROPT_a4     = -D latex_paper_size=a4
PAPEROPT_letter = -D latex_paper_size=letter
ALLSPHINXOPTS   = -d \$(BUILDDIR)/doctrees \$(PAPEROPT_\$(PAPER)) \$(SPHINXOPTS) .

.PHONY: help clean html dirhtml pickle json htmlhelp qthelp latex changes linkcheck doctest

help:
\t@echo \"Please use \\`make <target>' where <target> is one of\"
\t@echo \"  html      to make standalone HTML files\"
\t@echo \"  dirhtml   to make HTML files named site.html in directories\"
\t@echo \"  pickle    to make pickle files\"
\t@echo \"  json      to make JSON files\"
\t@echo \"  htmlhelp  to make HTML files and a HTML help project\"
\t@echo \"  qthelp    to make HTML files and a qthelp project\"
\t@echo \"  latex     to make LaTeX files, you can set PAPER=a4 or PAPER=letter\"
\t@echo \"  changes   to make an overview of all changed/added/deprecated items\"
\t@echo \"  linkcheck to check all external links for integrity\"
\t@echo \"  doctest   to run all doctests embedded in the documentation (if enabled)\"

clean:
\t-rm -rf \$(BUILDDIR)/*

html:
\t\$(SPHINXBUILD) -b html \$(ALLSPHINXOPTS) \$(BUILDDIR)/html
\t@echo
\t@echo \"Build finished. The HTML pages are in \$(BUILDDIR)/html.\"

dirhtml:
\t\$(SPHINXBUILD) -b dirhtml \$(ALLSPHINXOPTS) \$(BUILDDIR)/dirhtml
\t@echo
\t@echo \"Build finished. The HTML pages are in \$(BUILDDIR)/dirhtml.\"

pickle:
\t\$(SPHINXBUILD) -b pickle \$(ALLSPHINXOPTS) \$(BUILDDIR)/pickle
\t@echo
\t@echo \"Build finished; now you can process the pickle files.\"

json:
\t\$(SPHINXBUILD) -b json \$(ALLSPHINXOPTS) \$(BUILDDIR)/json
\t@echo
\t@echo \"Build finished; now you can process the JSON files.\"

htmlhelp:
\t\$(SPHINXBUILD) -b htmlhelp \$(ALLSPHINXOPTS) \$(BUILDDIR)/htmlhelp
\t@echo
\t@echo \"Build finished; now you can run HTML Help Workshop with the\" \\
\t      \".hhp project file in \$(BUILDDIR)/htmlhelp.\"

qthelp:
\t\$(SPHINXBUILD) -b qthelp \$(ALLSPHINXOPTS) \$(BUILDDIR)/qthelp
\t@echo
\t@echo \"Build finished; now you can run \"qcollectiongenerator\" with the\" \\
\t      \".qhcp project file in \$(BUILDDIR)/qthelp, like this:\"
\t@echo \"# qcollectiongenerator \$(BUILDDIR)/qthelp/Doctrine2ORM.qhcp\"
\t@echo \"To view the help file:\"
\t@echo \"# assistant -collectionFile \$(BUILDDIR)/qthelp/Doctrine2ORM.qhc\"

latex:
\t\$(SPHINXBUILD) -b latex \$(ALLSPHINXOPTS) \$(BUILDDIR)/latex
\t@echo
\t@echo \"Build finished; the LaTeX files are in \$(BUILDDIR)/latex.\"
\t@echo \"Run \\`make all-pdf' or \\`make all-ps' in that directory to\" \\
\t      \"run these through (pdf)latex.\"

changes:
\t\$(SPHINXBUILD) -b changes \$(ALLSPHINXOPTS) \$(BUILDDIR)/changes
\t@echo
\t@echo \"The overview file is in \$(BUILDDIR)/changes.\"

linkcheck:
\t\$(SPHINXBUILD) -b linkcheck \$(ALLSPHINXOPTS) \$(BUILDDIR)/linkcheck
\t@echo
\t@echo \"Link check complete; look for any errors in the above output \" \\
\t      \"or in \$(BUILDDIR)/linkcheck/output.txt.\"

doctest:
\t\$(SPHINXBUILD) -b doctest \$(ALLSPHINXOPTS) \$(BUILDDIR)/doctest
\t@echo \"Testing of doctests in the sources finished, look at the \" \\
\t      \"results in \$(BUILDDIR)/doctest/output.txt.\"
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Makefile for Sphinx documentation
#

# You can set these variables from the command line.
SPHINXOPTS    =
SPHINXBUILD   = sphinx-build
PAPER         =
BUILDDIR      = _build

# Internal variables.
PAPEROPT_a4     = -D latex_paper_size=a4
PAPEROPT_letter = -D latex_paper_size=letter
ALLSPHINXOPTS   = -d \$(BUILDDIR)/doctrees \$(PAPEROPT_\$(PAPER)) \$(SPHINXOPTS) .

.PHONY: help clean html dirhtml pickle json htmlhelp qthelp latex changes linkcheck doctest

help:
\t@echo \"Please use \\`make <target>' where <target> is one of\"
\t@echo \"  html      to make standalone HTML files\"
\t@echo \"  dirhtml   to make HTML files named site.html in directories\"
\t@echo \"  pickle    to make pickle files\"
\t@echo \"  json      to make JSON files\"
\t@echo \"  htmlhelp  to make HTML files and a HTML help project\"
\t@echo \"  qthelp    to make HTML files and a qthelp project\"
\t@echo \"  latex     to make LaTeX files, you can set PAPER=a4 or PAPER=letter\"
\t@echo \"  changes   to make an overview of all changed/added/deprecated items\"
\t@echo \"  linkcheck to check all external links for integrity\"
\t@echo \"  doctest   to run all doctests embedded in the documentation (if enabled)\"

clean:
\t-rm -rf \$(BUILDDIR)/*

html:
\t\$(SPHINXBUILD) -b html \$(ALLSPHINXOPTS) \$(BUILDDIR)/html
\t@echo
\t@echo \"Build finished. The HTML pages are in \$(BUILDDIR)/html.\"

dirhtml:
\t\$(SPHINXBUILD) -b dirhtml \$(ALLSPHINXOPTS) \$(BUILDDIR)/dirhtml
\t@echo
\t@echo \"Build finished. The HTML pages are in \$(BUILDDIR)/dirhtml.\"

pickle:
\t\$(SPHINXBUILD) -b pickle \$(ALLSPHINXOPTS) \$(BUILDDIR)/pickle
\t@echo
\t@echo \"Build finished; now you can process the pickle files.\"

json:
\t\$(SPHINXBUILD) -b json \$(ALLSPHINXOPTS) \$(BUILDDIR)/json
\t@echo
\t@echo \"Build finished; now you can process the JSON files.\"

htmlhelp:
\t\$(SPHINXBUILD) -b htmlhelp \$(ALLSPHINXOPTS) \$(BUILDDIR)/htmlhelp
\t@echo
\t@echo \"Build finished; now you can run HTML Help Workshop with the\" \\
\t      \".hhp project file in \$(BUILDDIR)/htmlhelp.\"

qthelp:
\t\$(SPHINXBUILD) -b qthelp \$(ALLSPHINXOPTS) \$(BUILDDIR)/qthelp
\t@echo
\t@echo \"Build finished; now you can run \"qcollectiongenerator\" with the\" \\
\t      \".qhcp project file in \$(BUILDDIR)/qthelp, like this:\"
\t@echo \"# qcollectiongenerator \$(BUILDDIR)/qthelp/Doctrine2ORM.qhcp\"
\t@echo \"To view the help file:\"
\t@echo \"# assistant -collectionFile \$(BUILDDIR)/qthelp/Doctrine2ORM.qhc\"

latex:
\t\$(SPHINXBUILD) -b latex \$(ALLSPHINXOPTS) \$(BUILDDIR)/latex
\t@echo
\t@echo \"Build finished; the LaTeX files are in \$(BUILDDIR)/latex.\"
\t@echo \"Run \\`make all-pdf' or \\`make all-ps' in that directory to\" \\
\t      \"run these through (pdf)latex.\"

changes:
\t\$(SPHINXBUILD) -b changes \$(ALLSPHINXOPTS) \$(BUILDDIR)/changes
\t@echo
\t@echo \"The overview file is in \$(BUILDDIR)/changes.\"

linkcheck:
\t\$(SPHINXBUILD) -b linkcheck \$(ALLSPHINXOPTS) \$(BUILDDIR)/linkcheck
\t@echo
\t@echo \"Link check complete; look for any errors in the above output \" \\
\t      \"or in \$(BUILDDIR)/linkcheck/output.txt.\"

doctest:
\t\$(SPHINXBUILD) -b doctest \$(ALLSPHINXOPTS) \$(BUILDDIR)/doctest
\t@echo \"Testing of doctests in the sources finished, look at the \" \\
\t      \"results in \$(BUILDDIR)/doctest/output.txt.\"
", "vendor/doctrine/orm/docs/en/Makefile", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/Makefile");
    }
}
