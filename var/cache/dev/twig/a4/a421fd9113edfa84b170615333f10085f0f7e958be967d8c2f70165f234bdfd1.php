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

/* vendor/symfony/intl/Resources/data/locales/pt_PT.json */
class __TwigTemplate_c506e8edb4d48e58f1689048499334fe727c61d465cd7ae93f353a43bec925de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/pt_PT.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/pt_PT.json"));

        // line 1
        echo "{
    \"Names\": {
        \"af\": \"africanês\",
        \"af_NA\": \"africanês (Namíbia)\",
        \"af_ZA\": \"africanês (África do Sul)\",
        \"ar_BH\": \"árabe (Barém)\",
        \"ar_DJ\": \"árabe (Jibuti)\",
        \"ar_EH\": \"árabe (Sara Ocidental)\",
        \"ar_KW\": \"árabe (Koweit)\",
        \"ar_PS\": \"árabe (Territórios palestinianos)\",
        \"ar_YE\": \"árabe (Iémen)\",
        \"bn\": \"bengalês\",
        \"bn_BD\": \"bengalês (Bangladeche)\",
        \"bn_IN\": \"bengalês (Índia)\",
        \"cs\": \"checo\",
        \"cs_CZ\": \"checo (Chéquia)\",
        \"da_GL\": \"dinamarquês (Gronelândia)\",
        \"de_LI\": \"alemão (Listenstaine)\",
        \"ee\": \"ewe\",
        \"ee_GH\": \"ewe (Gana)\",
        \"ee_TG\": \"ewe (Togo)\",
        \"en_BS\": \"inglês (Baamas)\",
        \"en_CC\": \"inglês (Ilhas dos Cocos [Keeling])\",
        \"en_CX\": \"inglês (Ilha do Natal)\",
        \"en_DM\": \"inglês (Domínica)\",
        \"en_FK\": \"inglês (Ilhas Malvinas [Falkland])\",
        \"en_GG\": \"inglês (Guernesey)\",
        \"en_GU\": \"inglês (Guame)\",
        \"en_KE\": \"inglês (Quénia)\",
        \"en_KI\": \"inglês (Quiribáti)\",
        \"en_KN\": \"inglês (São Cristóvão e Neves)\",
        \"en_KY\": \"inglês (Ilhas Caimão)\",
        \"en_MG\": \"inglês (Madagáscar)\",
        \"en_MS\": \"inglês (Monserrate)\",
        \"en_MU\": \"inglês (Maurícia)\",
        \"en_MW\": \"inglês (Maláui)\",
        \"en_NU\": \"inglês (Niuê)\",
        \"en_SI\": \"inglês (Eslovénia)\",
        \"en_SX\": \"inglês (São Martinho [Sint Maarten])\",
        \"en_TK\": \"inglês (Toquelau)\",
        \"en_TT\": \"inglês (Trindade e Tobago)\",
        \"en_UM\": \"inglês (Ilhas Menores Afastadas dos EUA)\",
        \"en_VI\": \"inglês (Ilhas Virgens dos EUA)\",
        \"en_ZW\": \"inglês (Zimbabué)\",
        \"es_SV\": \"espanhol (Salvador)\",
        \"et\": \"estónio\",
        \"et_EE\": \"estónio (Estónia)\",
        \"fa_IR\": \"persa (Irão)\",
        \"fo_FO\": \"feroês (Ilhas Faroé)\",
        \"fr_BJ\": \"francês (Benim)\",
        \"fr_CD\": \"francês (Congo-Kinshasa)\",
        \"fr_CG\": \"francês (Congo-Brazzaville)\",
        \"fr_CI\": \"francês (Côte d’Ivoire [Costa do Marfim])\",
        \"fr_DJ\": \"francês (Jibuti)\",
        \"fr_MC\": \"francês (Mónaco)\",
        \"fr_MG\": \"francês (Madagáscar)\",
        \"fr_MU\": \"francês (Maurícia)\",
        \"fr_NC\": \"francês (Nova Caledónia)\",
        \"fr_YT\": \"francês (Maiote)\",
        \"fy\": \"frísico ocidental\",
        \"fy_NL\": \"frísico ocidental (Países Baixos)\",
        \"ha\": \"haúça\",
        \"ha_GH\": \"haúça (Gana)\",
        \"ha_NE\": \"haúça (Níger)\",
        \"ha_NG\": \"haúça (Nigéria)\",
        \"hi\": \"hindi\",
        \"hi_IN\": \"hindi (Índia)\",
        \"hy\": \"arménio\",
        \"hy_AM\": \"arménio (Arménia)\",
        \"it_SM\": \"italiano (São Marinho)\",
        \"ki_KE\": \"quicuio (Quénia)\",
        \"kl\": \"gronelandês\",
        \"kl_GL\": \"gronelandês (Gronelândia)\",
        \"lg\": \"ganda\",
        \"lg_UG\": \"ganda (Uganda)\",
        \"ln_CD\": \"lingala (Congo-Kinshasa)\",
        \"ln_CG\": \"lingala (Congo-Brazzaville)\",
        \"lu_CD\": \"luba-catanga (Congo-Kinshasa)\",
        \"lv_LV\": \"letão (Letónia)\",
        \"mg_MG\": \"malgaxe (Madagáscar)\",
        \"mk\": \"macedónio\",
        \"mk_MK\": \"macedónio (Macedónia do Norte)\",
        \"mr\": \"marata\",
        \"mr_IN\": \"marata (Índia)\",
        \"nb\": \"norueguês bokmål\",
        \"nb_NO\": \"norueguês bokmål (Noruega)\",
        \"nb_SJ\": \"norueguês bokmål (Svalbard e Jan Mayen)\",
        \"nd_ZW\": \"ndebele do norte (Zimbabué)\",
        \"nl\": \"neerlandês\",
        \"nl_AW\": \"neerlandês (Aruba)\",
        \"nl_BE\": \"neerlandês (Bélgica)\",
        \"nl_BQ\": \"neerlandês (Países Baixos Caribenhos)\",
        \"nl_CW\": \"neerlandês (Curaçau)\",
        \"nl_NL\": \"neerlandês (Países Baixos)\",
        \"nl_SR\": \"neerlandês (Suriname)\",
        \"nl_SX\": \"neerlandês (São Martinho [Sint Maarten])\",
        \"nn\": \"norueguês nynorsk\",
        \"nn_NO\": \"norueguês nynorsk (Noruega)\",
        \"om_KE\": \"oromo (Quénia)\",
        \"or\": \"oriya\",
        \"or_IN\": \"oriya (Índia)\",
        \"os\": \"ossético\",
        \"os_GE\": \"ossético (Geórgia)\",
        \"os_RU\": \"ossético (Rússia)\",
        \"pl\": \"polaco\",
        \"pl_PL\": \"polaco (Polónia)\",
        \"ps\": \"pastó\",
        \"ps_AF\": \"pastó (Afeganistão)\",
        \"ps_PK\": \"pastó (Paquistão)\",
        \"ro_MD\": \"romeno (Moldávia)\",
        \"ro_RO\": \"romeno (Roménia)\",
        \"ru_MD\": \"russo (Moldávia)\",
        \"se\": \"sami do norte\",
        \"se_FI\": \"sami do norte (Finlândia)\",
        \"se_NO\": \"sami do norte (Noruega)\",
        \"se_SE\": \"sami do norte (Suécia)\",
        \"si_LK\": \"cingalês (Sri Lanca)\",
        \"sl_SI\": \"esloveno (Eslovénia)\",
        \"sn\": \"shona\",
        \"sn_ZW\": \"shona (Zimbabué)\",
        \"so_DJ\": \"somali (Jibuti)\",
        \"so_KE\": \"somali (Quénia)\",
        \"sq_MK\": \"albanês (Macedónia do Norte)\",
        \"sv_AX\": \"sueco (Alanda)\",
        \"sw_CD\": \"suaíli (Congo-Kinshasa)\",
        \"sw_KE\": \"suaíli (Quénia)\",
        \"ta_LK\": \"tâmil (Sri Lanca)\",
        \"te\": \"telugu\",
        \"te_IN\": \"telugu (Índia)\",
        \"tg\": \"tajique\",
        \"tg_TJ\": \"tajique (Tajiquistão)\",
        \"tk\": \"turcomano\",
        \"tk_TM\": \"turcomano (Turquemenistão)\",
        \"to\": \"tonga\",
        \"to_TO\": \"tonga (Tonga)\",
        \"tt\": \"tatar\",
        \"tt_RU\": \"tatar (Rússia)\",
        \"uz\": \"usbeque\",
        \"uz_AF\": \"usbeque (Afeganistão)\",
        \"uz_Arab\": \"usbeque (árabe)\",
        \"uz_Arab_AF\": \"usbeque (árabe, Afeganistão)\",
        \"uz_Cyrl\": \"usbeque (cirílico)\",
        \"uz_Cyrl_UZ\": \"usbeque (cirílico, Usbequistão)\",
        \"uz_Latn\": \"usbeque (latim)\",
        \"uz_Latn_UZ\": \"usbeque (latim, Usbequistão)\",
        \"uz_UZ\": \"usbeque (Usbequistão)\",
        \"vi_VN\": \"vietnamita (Vietname)\",
        \"wo\": \"uólofe\",
        \"wo_SN\": \"uólofe (Senegal)\",
        \"xh\": \"xosa\",
        \"xh_ZA\": \"xosa (África do Sul)\",
        \"yo\": \"ioruba\",
        \"yo_BJ\": \"ioruba (Benim)\",
        \"yo_NG\": \"ioruba (Nigéria)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/pt_PT.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"af\": \"africanês\",
        \"af_NA\": \"africanês (Namíbia)\",
        \"af_ZA\": \"africanês (África do Sul)\",
        \"ar_BH\": \"árabe (Barém)\",
        \"ar_DJ\": \"árabe (Jibuti)\",
        \"ar_EH\": \"árabe (Sara Ocidental)\",
        \"ar_KW\": \"árabe (Koweit)\",
        \"ar_PS\": \"árabe (Territórios palestinianos)\",
        \"ar_YE\": \"árabe (Iémen)\",
        \"bn\": \"bengalês\",
        \"bn_BD\": \"bengalês (Bangladeche)\",
        \"bn_IN\": \"bengalês (Índia)\",
        \"cs\": \"checo\",
        \"cs_CZ\": \"checo (Chéquia)\",
        \"da_GL\": \"dinamarquês (Gronelândia)\",
        \"de_LI\": \"alemão (Listenstaine)\",
        \"ee\": \"ewe\",
        \"ee_GH\": \"ewe (Gana)\",
        \"ee_TG\": \"ewe (Togo)\",
        \"en_BS\": \"inglês (Baamas)\",
        \"en_CC\": \"inglês (Ilhas dos Cocos [Keeling])\",
        \"en_CX\": \"inglês (Ilha do Natal)\",
        \"en_DM\": \"inglês (Domínica)\",
        \"en_FK\": \"inglês (Ilhas Malvinas [Falkland])\",
        \"en_GG\": \"inglês (Guernesey)\",
        \"en_GU\": \"inglês (Guame)\",
        \"en_KE\": \"inglês (Quénia)\",
        \"en_KI\": \"inglês (Quiribáti)\",
        \"en_KN\": \"inglês (São Cristóvão e Neves)\",
        \"en_KY\": \"inglês (Ilhas Caimão)\",
        \"en_MG\": \"inglês (Madagáscar)\",
        \"en_MS\": \"inglês (Monserrate)\",
        \"en_MU\": \"inglês (Maurícia)\",
        \"en_MW\": \"inglês (Maláui)\",
        \"en_NU\": \"inglês (Niuê)\",
        \"en_SI\": \"inglês (Eslovénia)\",
        \"en_SX\": \"inglês (São Martinho [Sint Maarten])\",
        \"en_TK\": \"inglês (Toquelau)\",
        \"en_TT\": \"inglês (Trindade e Tobago)\",
        \"en_UM\": \"inglês (Ilhas Menores Afastadas dos EUA)\",
        \"en_VI\": \"inglês (Ilhas Virgens dos EUA)\",
        \"en_ZW\": \"inglês (Zimbabué)\",
        \"es_SV\": \"espanhol (Salvador)\",
        \"et\": \"estónio\",
        \"et_EE\": \"estónio (Estónia)\",
        \"fa_IR\": \"persa (Irão)\",
        \"fo_FO\": \"feroês (Ilhas Faroé)\",
        \"fr_BJ\": \"francês (Benim)\",
        \"fr_CD\": \"francês (Congo-Kinshasa)\",
        \"fr_CG\": \"francês (Congo-Brazzaville)\",
        \"fr_CI\": \"francês (Côte d’Ivoire [Costa do Marfim])\",
        \"fr_DJ\": \"francês (Jibuti)\",
        \"fr_MC\": \"francês (Mónaco)\",
        \"fr_MG\": \"francês (Madagáscar)\",
        \"fr_MU\": \"francês (Maurícia)\",
        \"fr_NC\": \"francês (Nova Caledónia)\",
        \"fr_YT\": \"francês (Maiote)\",
        \"fy\": \"frísico ocidental\",
        \"fy_NL\": \"frísico ocidental (Países Baixos)\",
        \"ha\": \"haúça\",
        \"ha_GH\": \"haúça (Gana)\",
        \"ha_NE\": \"haúça (Níger)\",
        \"ha_NG\": \"haúça (Nigéria)\",
        \"hi\": \"hindi\",
        \"hi_IN\": \"hindi (Índia)\",
        \"hy\": \"arménio\",
        \"hy_AM\": \"arménio (Arménia)\",
        \"it_SM\": \"italiano (São Marinho)\",
        \"ki_KE\": \"quicuio (Quénia)\",
        \"kl\": \"gronelandês\",
        \"kl_GL\": \"gronelandês (Gronelândia)\",
        \"lg\": \"ganda\",
        \"lg_UG\": \"ganda (Uganda)\",
        \"ln_CD\": \"lingala (Congo-Kinshasa)\",
        \"ln_CG\": \"lingala (Congo-Brazzaville)\",
        \"lu_CD\": \"luba-catanga (Congo-Kinshasa)\",
        \"lv_LV\": \"letão (Letónia)\",
        \"mg_MG\": \"malgaxe (Madagáscar)\",
        \"mk\": \"macedónio\",
        \"mk_MK\": \"macedónio (Macedónia do Norte)\",
        \"mr\": \"marata\",
        \"mr_IN\": \"marata (Índia)\",
        \"nb\": \"norueguês bokmål\",
        \"nb_NO\": \"norueguês bokmål (Noruega)\",
        \"nb_SJ\": \"norueguês bokmål (Svalbard e Jan Mayen)\",
        \"nd_ZW\": \"ndebele do norte (Zimbabué)\",
        \"nl\": \"neerlandês\",
        \"nl_AW\": \"neerlandês (Aruba)\",
        \"nl_BE\": \"neerlandês (Bélgica)\",
        \"nl_BQ\": \"neerlandês (Países Baixos Caribenhos)\",
        \"nl_CW\": \"neerlandês (Curaçau)\",
        \"nl_NL\": \"neerlandês (Países Baixos)\",
        \"nl_SR\": \"neerlandês (Suriname)\",
        \"nl_SX\": \"neerlandês (São Martinho [Sint Maarten])\",
        \"nn\": \"norueguês nynorsk\",
        \"nn_NO\": \"norueguês nynorsk (Noruega)\",
        \"om_KE\": \"oromo (Quénia)\",
        \"or\": \"oriya\",
        \"or_IN\": \"oriya (Índia)\",
        \"os\": \"ossético\",
        \"os_GE\": \"ossético (Geórgia)\",
        \"os_RU\": \"ossético (Rússia)\",
        \"pl\": \"polaco\",
        \"pl_PL\": \"polaco (Polónia)\",
        \"ps\": \"pastó\",
        \"ps_AF\": \"pastó (Afeganistão)\",
        \"ps_PK\": \"pastó (Paquistão)\",
        \"ro_MD\": \"romeno (Moldávia)\",
        \"ro_RO\": \"romeno (Roménia)\",
        \"ru_MD\": \"russo (Moldávia)\",
        \"se\": \"sami do norte\",
        \"se_FI\": \"sami do norte (Finlândia)\",
        \"se_NO\": \"sami do norte (Noruega)\",
        \"se_SE\": \"sami do norte (Suécia)\",
        \"si_LK\": \"cingalês (Sri Lanca)\",
        \"sl_SI\": \"esloveno (Eslovénia)\",
        \"sn\": \"shona\",
        \"sn_ZW\": \"shona (Zimbabué)\",
        \"so_DJ\": \"somali (Jibuti)\",
        \"so_KE\": \"somali (Quénia)\",
        \"sq_MK\": \"albanês (Macedónia do Norte)\",
        \"sv_AX\": \"sueco (Alanda)\",
        \"sw_CD\": \"suaíli (Congo-Kinshasa)\",
        \"sw_KE\": \"suaíli (Quénia)\",
        \"ta_LK\": \"tâmil (Sri Lanca)\",
        \"te\": \"telugu\",
        \"te_IN\": \"telugu (Índia)\",
        \"tg\": \"tajique\",
        \"tg_TJ\": \"tajique (Tajiquistão)\",
        \"tk\": \"turcomano\",
        \"tk_TM\": \"turcomano (Turquemenistão)\",
        \"to\": \"tonga\",
        \"to_TO\": \"tonga (Tonga)\",
        \"tt\": \"tatar\",
        \"tt_RU\": \"tatar (Rússia)\",
        \"uz\": \"usbeque\",
        \"uz_AF\": \"usbeque (Afeganistão)\",
        \"uz_Arab\": \"usbeque (árabe)\",
        \"uz_Arab_AF\": \"usbeque (árabe, Afeganistão)\",
        \"uz_Cyrl\": \"usbeque (cirílico)\",
        \"uz_Cyrl_UZ\": \"usbeque (cirílico, Usbequistão)\",
        \"uz_Latn\": \"usbeque (latim)\",
        \"uz_Latn_UZ\": \"usbeque (latim, Usbequistão)\",
        \"uz_UZ\": \"usbeque (Usbequistão)\",
        \"vi_VN\": \"vietnamita (Vietname)\",
        \"wo\": \"uólofe\",
        \"wo_SN\": \"uólofe (Senegal)\",
        \"xh\": \"xosa\",
        \"xh_ZA\": \"xosa (África do Sul)\",
        \"yo\": \"ioruba\",
        \"yo_BJ\": \"ioruba (Benim)\",
        \"yo_NG\": \"ioruba (Nigéria)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/pt_PT.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/pt_PT.json");
    }
}
