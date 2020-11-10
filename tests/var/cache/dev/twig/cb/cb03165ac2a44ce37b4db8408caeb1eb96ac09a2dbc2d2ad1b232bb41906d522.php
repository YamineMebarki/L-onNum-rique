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

/* vendor/jdorn/sql-formatter/tests/clihighlight.html */
class __TwigTemplate_1a4919166b208dd6b6e1d60d3754c8cedd74c7e5c8cb52cd1ac6d5e3369663d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/clihighlight.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/clihighlight.html"));

        // line 1
        echo "[37mSELECT[0m 
  customer_id[0m,[0m 
  customer_name[0m,[0m 
  [37mCOUNT[0m(order_id[0m) [37mas[0m total[0m 
[37mFROM[0m 
  customers[0m 
  [37mINNER JOIN[0m orders[0m [37mON[0m customers[0m.[0mcustomer_id[0m =[0m orders[0m.[0mcustomer_id[0m 
[37mGROUP BY[0m 
  customer_id[0m,[0m 
  customer_name[0m 
[37mHAVING[0m 
  [37mCOUNT[0m(order_id[0m) >[0m [32;1m5[0m 
[37mORDER BY[0m 
  [37mCOUNT[0m(order_id[0m) [37mDESC[0m;[0m

[37mUPDATE[0m 
  customers[0m 
[37mSET[0m 
  totalorders[0m =[0m ordersummary[0m.[0mtotal[0m 
[37mFROM[0m 
  (
    [37mSELECT[0m 
      customer_id[0m,[0m 
      [37mcount[0m(order_id[0m) [37mAs[0m total[0m 
    [37mFROM[0m 
      orders[0m 
    [37mGROUP BY[0m 
      customer_id[0m
  ) [37mAs[0m ordersummary[0m 
[37mWHERE[0m 
  customers[0m.[0mcustomer_id[0m =[0m ordersummary[0m.[0mcustomer_id[0m

[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  sometable[0m 
[37mUNION ALL[0m 
[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  someothertable[0m;[0m

[37mSET[0m 
  [37mNAMES[0m [34;1m'utf8'[0m;[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_address`[0m (
  [35;1m`id_address`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mauto_increment[0m,[0m 
  [35;1m`id_country`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_state`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`id_customer`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_manufacturer`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_supplier`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_warehouse`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`alias`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`company`[0m varchar[0m([32;1m64[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`lastname`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`firstname`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`address1`[0m varchar[0m([32;1m128[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`address2`[0m varchar[0m([32;1m128[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`postcode`[0m varchar[0m([32;1m12[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`city`[0m varchar[0m([32;1m64[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`other`[0m text[0m,[0m 
  [35;1m`phone`[0m varchar[0m([32;1m16[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`phone_mobile`[0m varchar[0m([32;1m16[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`vat_number`[0m varchar[0m([32;1m32[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`dni`[0m varchar[0m([32;1m16[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`date_add`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`date_upd`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'1'[0m,[0m 
  [35;1m`deleted`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_address`[0m),[0m 
  [37mKEY[0m [35;1m`address_customer`[0m ([35;1m`id_customer`[0m),[0m 
  [37mKEY[0m [35;1m`id_country`[0m ([35;1m`id_country`[0m),[0m 
  [37mKEY[0m [35;1m`id_state`[0m ([35;1m`id_state`[0m),[0m 
  [37mKEY[0m [35;1m`id_manufacturer`[0m ([35;1m`id_manufacturer`[0m),[0m 
  [37mKEY[0m [35;1m`id_supplier`[0m ([35;1m`id_supplier`[0m),[0m 
  [37mKEY[0m [35;1m`id_warehouse`[0m ([35;1m`id_warehouse`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_alias`[0m (
  [35;1m`id_alias`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mauto_increment[0m,[0m 
  [35;1m`alias`[0m varchar[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`search`[0m varchar[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'1'[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_alias`[0m),[0m 
  [37mUNIQUE[0m [37mKEY[0m [35;1m`alias`[0m ([35;1m`alias`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_carrier`[0m (
  [35;1m`id_carrier`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mAUTO_INCREMENT[0m,[0m 
  [35;1m`id_reference`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_tax_rules_group`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`name`[0m varchar[0m([32;1m64[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`url`[0m varchar[0m([32;1m255[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`deleted`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`shipping_handling`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'1'[0m,[0m 
  [35;1m`range_behavior`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`is_module`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`is_free`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`shipping_external`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`need_range`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`external_module_name`[0m varchar[0m([32;1m64[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`shipping_method`[0m int[0m([32;1m2[0m) [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`position`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`max_width`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_height`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_depth`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_weight`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`grade`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_carrier`[0m),[0m 
  [37mKEY[0m [35;1m`deleted`[0m ([35;1m`deleted`[0m,[0m [35;1m`active`[0m),[0m 
  [37mKEY[0m [35;1m`id_tax_rules_group`[0m ([35;1m`id_tax_rules_group`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [37mIF[0m [37mNOT[0m [37mEXISTS[0m [35;1m`PREFIX_specific_price_rule`[0m (
  [35;1m`id_specific_price_rule`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mAUTO_INCREMENT[0m,[0m 
  [35;1m`name`[0m VARCHAR[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_shop`[0m int[0m([32;1m11[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'1'[0m,[0m 
  [35;1m`id_currency`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_country`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_group`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`from_quantity`[0m mediumint[0m([32;1m8[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`price`[0m DECIMAL[0m([32;1m20[0m,[0m [32;1m6[0m),[0m 
  [35;1m`reduction`[0m decimal[0m([32;1m20[0m,[0m [32;1m6[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`reduction_type`[0m enum[0m([34;1m'amount'[0m,[0m [34;1m'percentage'[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`from`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`to`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_specific_price_rule`[0m),[0m 
  [37mKEY[0m [35;1m`id_product`[0m (
    [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m [35;1m`id_country`[0m,[0m 
    [35;1m`id_group`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`from`[0m,[0m 
    [35;1m`to`[0m
  )
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mUPDATE[0m 
  [35;1m`PREFIX_configuration`[0m 
[37mSET[0m 
  value[0m =[0m [34;1m'6'[0m 
[37mWHERE[0m 
  name[0m =[0m [34;1m'PS_SEARCH_WEIGHT_PNAME'[0m

[37mUPDATE[0m 
  [35;1m`PREFIX_hook_module`[0m 
[37mSET[0m 
  position[0m =[0m [32;1m1[0m 
[37mWHERE[0m 
  id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayPayment'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'cheque'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayPaymentReturn'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'cheque'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayHome'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'homeslider'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionAuthentication'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsdata'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionShopDataDuplication'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'homeslider'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayTop'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blocklanguages'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCustomerAccountAdd'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsdata'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayCustomerAccount'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'favoriteproducts'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsModules'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsvisits'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsGraphEngine'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'graphvisifire'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsGridEngine'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'gridhtml'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayLeftColumnProduct'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blocksharefb'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionSearch'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statssearch'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryAdd'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryUpdate'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryDelete'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionAdminMetaSave'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayMyAccountBlock'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'favoriteproducts'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayFooter'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockreinsurance'[0m
  )

[37mALTER TABLE[0m 
  [35;1m`PREFIX_employee`[0m 
[37mADD[0m 
  [35;1m`bo_color`[0m varchar[0m([32;1m32[0m) [37mdefault[0m [37mNULL[0m 
[37mAFTER[0m 
  [35;1m`stats_date_to`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_cms_category_lang`[0m 
[37mVALUES[0m 
  (
    [32;1m1[0m,[0m [32;1m3[0m,[0m [34;1m'Inicio'[0m,[0m [34;1m''[0m,[0m [34;1m'home'[0m,[0m [37mNULL[0m,[0m [37mNULL[0m,[0m 
    [37mNULL[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_cms_category`[0m 
[37mVALUES[0m 
  ([32;1m1[0m,[0m [32;1m0[0m,[0m [32;1m0[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m,[0m [32;1m0[0m)

[37mUPDATE[0m 
  [35;1m`PREFIX_cms_category`[0m 
[37mSET[0m 
  [35;1m`position`[0m =[0m [32;1m0[0m

[37mALTER TABLE[0m 
  [35;1m`PREFIX_customer`[0m 
[37mADD[0m 
  [35;1m`note`[0m text[0m 
[37mAFTER[0m 
  [35;1m`secure_key`[0m

[37mALTER TABLE[0m 
  [35;1m`PREFIX_contact`[0m 
[37mADD[0m 
  [35;1m`customer_service`[0m tinyint[0m([32;1m1[0m) [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [32;1m0[0m 
[37mAFTER[0m 
  [35;1m`email`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_specific_price`[0m (
  [35;1m`id_product`[0m,[0m [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m 
  [35;1m`id_country`[0m,[0m [35;1m`id_group`[0m,[0m [35;1m`priority`[0m,[0m 
  [35;1m`price`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`reduction`[0m,[0m 
  [35;1m`reduction_type`[0m,[0m [35;1m`from`[0m,[0m [35;1m`to`[0m
) (
  [37mSELECT[0m 
    dq[0m.[0m[35;1m`id_product`[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0.00[0m,[0m 
    dq[0m.[0m[35;1m`quantity`[0m,[0m 
    [37mIF[0m(
      dq[0m.[0m[35;1m`id_discount_type`[0m =[0m [32;1m2[0m,[0m dq[0m.[0m[35;1m`value`[0m,[0m 
      dq[0m.[0m[35;1m`value`[0m /[0m [32;1m100[0m
    ),[0m 
    [37mIF[0m (
      dq[0m.[0m[35;1m`id_discount_type`[0m =[0m [32;1m2[0m,[0m [34;1m'amount'[0m,[0m 
      [34;1m'percentage'[0m
    ),[0m 
    [34;1m'0000-00-00 00:00:00'[0m,[0m 
    [34;1m'0000-00-00 00:00:00'[0m 
  [37mFROM[0m 
    [35;1m`PREFIX_discount_quantity`[0m dq[0m 
    [37mINNER JOIN[0m [35;1m`PREFIX_product`[0m p[0m [37mON[0m (p[0m.[0m[35;1m`id_product`[0m =[0m dq[0m.[0m[35;1m`id_product`[0m)
)

[37mDROP[0m 
  [37mTABLE[0m [35;1m`PREFIX_discount_quantity`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_specific_price`[0m (
  [35;1m`id_product`[0m,[0m [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m 
  [35;1m`id_country`[0m,[0m [35;1m`id_group`[0m,[0m [35;1m`priority`[0m,[0m 
  [35;1m`price`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`reduction`[0m,[0m 
  [35;1m`reduction_type`[0m,[0m [35;1m`from`[0m,[0m [35;1m`to`[0m
) (
  [37mSELECT[0m 
    p[0m.[0m[35;1m`id_product`[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0.00[0m,[0m 
    [32;1m1[0m,[0m 
    [37mIF[0m(
      p[0m.[0m[35;1m`reduction_price`[0m >[0m [32;1m0[0m,[0m p[0m.[0m[35;1m`reduction_price`[0m,[0m 
      p[0m.[0m[35;1m`reduction_percent`[0m /[0m [32;1m100[0m
    ),[0m 
    [37mIF[0m(
      p[0m.[0m[35;1m`reduction_price`[0m >[0m [32;1m0[0m,[0m [34;1m'amount'[0m,[0m 
      [34;1m'percentage'[0m
    ),[0m 
    [37mIF[0m (
      p[0m.[0m[35;1m`reduction_from`[0m =[0m p[0m.[0m[35;1m`reduction_to`[0m,[0m 
      [34;1m'0000-00-00 00:00:00'[0m,[0m p[0m.[0m[35;1m`reduction_from`[0m
    ),[0m 
    [37mIF[0m (
      p[0m.[0m[35;1m`reduction_from`[0m =[0m p[0m.[0m[35;1m`reduction_to`[0m,[0m 
      [34;1m'0000-00-00 00:00:00'[0m,[0m p[0m.[0m[35;1m`reduction_to`[0m
    ) 
  [37mFROM[0m 
    [35;1m`PREFIX_product`[0m p[0m 
  [37mWHERE[0m 
    p[0m.[0m[35;1m`reduction_price`[0m 
    [37mOR[0m p[0m.[0m[35;1m`reduction_percent`[0m
)

[37mALTER TABLE[0m 
  [35;1m`PREFIX_product`[0m 
[37mDROP[0m 
  [35;1m`reduction_price`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_percent`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_from`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_to`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_configuration`[0m (
  [35;1m`name`[0m,[0m [35;1m`value`[0m,[0m [35;1m`date_add`[0m,[0m [35;1m`date_upd`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'PS_SPECIFIC_PRICE_PRIORITIES'[0m,[0m 
    [34;1m'id_shop;id_currency;id_country;id_group'[0m,[0m 
    [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  ([34;1m'PS_TAX_DISPLAY'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m),[0m 
  (
    [34;1m'PS_SMARTY_FORCE_COMPILE'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_DISTANCE_UNIT'[0m,[0m [34;1m'km'[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_DISPLAY_CMS'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_DISPLAY_FOOTER'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_SIMPLIFIED'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_CUSTOMER_PAGESVIEWS'[0m,[0m 
    [32;1m1[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_PAGESVIEWS'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_PLUGINS'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_configuration`[0m (
  [35;1m`name`[0m,[0m [35;1m`value`[0m,[0m [35;1m`date_add`[0m,[0m [35;1m`date_upd`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'PS_CONDITIONS_CMS_ID'[0m,[0m 
    [37mIFNULL[0m(
      (
        [37mSELECT[0m 
          [35;1m`id_cms`[0m 
        [37mFROM[0m 
          [35;1m`PREFIX_cms`[0m 
        [37mWHERE[0m 
          [35;1m`id_cms`[0m =[0m [32;1m3[0m
      ),[0m 
      [32;1m0[0m
    ),[0m 
    [37mNOW()[0m,[0m 
    [37mNOW()[0m
  )

[37mCREATE[0m [37mTEMPORARY[0m [37mTABLE[0m [35;1m`PREFIX_configuration_tmp`[0m ([35;1m`value`[0m text[0m)

[37mSET[0m 
  [36;1m@defaultOOS[0m =[0m (
    [37mSELECT[0m 
      value[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_configuration`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'PS_ORDER_OUT_OF_STOCK'[0m
  )

[37mUPDATE[0m 
  [35;1m`PREFIX_product`[0m p[0m 
[37mSET[0m 
  [35;1m`cache_default_attribute`[0m =[0m [32;1m0[0m 
[37mWHERE[0m 
  [35;1m`id_product`[0m [37mNOT[0m [37mIN[0m (
    [37mSELECT[0m 
      [35;1m`id_product`[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_product_attribute`[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_hook`[0m (
  [35;1m`name`[0m,[0m [35;1m`title`[0m,[0m [35;1m`description`[0m,[0m [35;1m`position`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'processCarrier'[0m,[0m [34;1m'Carrier Process'[0m,[0m 
    [37mNULL[0m,[0m [32;1m0[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_stock_mvt_reason_lang`[0m (
  [35;1m`id_stock_mvt_reason`[0m,[0m [35;1m`id_lang`[0m,[0m 
  [35;1m`name`[0m
) 
[37mVALUES[0m 
  ([32;1m1[0m,[0m [32;1m1[0m,[0m [34;1m'Order'[0m),[0m 
  ([32;1m1[0m,[0m [32;1m2[0m,[0m [34;1m'Commande'[0m),[0m 
  ([32;1m2[0m,[0m [32;1m1[0m,[0m [34;1m'Missing Stock Movement'[0m),[0m 
  (
    [32;1m2[0m,[0m [32;1m2[0m,[0m [34;1m'Mouvement de stock manquant'[0m
  ),[0m 
  ([32;1m3[0m,[0m [32;1m1[0m,[0m [34;1m'Restocking'[0m),[0m 
  ([32;1m3[0m,[0m [32;1m2[0m,[0m [34;1m'RÃ©assort'[0m)

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_meta_lang`[0m (
  [35;1m`id_lang`[0m,[0m [35;1m`id_meta`[0m,[0m [35;1m`title`[0m,[0m [35;1m`url_rewrite`[0m
) 
[37mVALUES[0m 
  (
    [32;1m1[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'Authentication'[0m,[0m 
    [34;1m'authentication'[0m
  ),[0m 
  (
    [32;1m2[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'Authentification'[0m,[0m 
    [34;1m'authentification'[0m
  ),[0m 
  (
    [32;1m3[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'AutenticaciÃ³n'[0m,[0m 
    [34;1m'autenticacion'[0m
  )

[37mLOCK[0m [37mTABLES[0m [35;1m`admin_assert`[0m [37mWRITE[0m

[37mUNLOCK[0m [37mTABLES[0m

[37mDROP[0m 
  [37mTABLE[0m [37mIF[0m [37mEXISTS[0m [35;1m`admin_role`[0m

[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  [30;1m-- This is another comment[0m
  MyTable[0m [30;1m# One final comment[0m
  
  [30;1m/* This is a block comment 
  */[0m
[37mWHERE[0m 
  [32;1m1[0m =[0m [32;1m2[0m;[0m

[37mSELECT[0m 
  [30;1m-- This is a test[0m

[37mSELECT[0m 
  Test[0m 
[37mFROM[0m 
  Test[0m 
[37mWHERE[0m 
  (MyColumn[0m =[0m [32;1m1[0m)
[31;1;7m)[0m
[37mAND[0m (
  (
    (SomeOtherColumn[0m =[0m [32;1m2[0m);[0m 
[31;1;7mWARNING: unclosed parentheses or section[0m

[37mSELECT[0m 
  *[0m 
[37mLIMIT[0m 
  [32;1m1[0m;[0m 
[37mSELECT[0m 
  a[0m,[0m 
  b[0m,[0m 
  c[0m,[0m 
  d[0m 
[37mFROM[0m 
  e[0m 
[37mLIMIT[0m 
  [32;1m1[0m,[0m [32;1m2[0m;[0m 
[37mSELECT[0m 
  [32;1m1[0m,[0m 
  [32;1m2[0m,[0m 
  [32;1m3[0m 
[37mWHERE[0m 
  a[0m [37min[0m ([32;1m1[0m,[0m [32;1m2[0m,[0m [32;1m3[0m,[0m [32;1m4[0m,[0m [32;1m5[0m) 
  [37mand[0m b[0m =[0m [32;1m5[0m;[0m

[37mSELECT[0m 
  count[0m -[0m [32;1m50[0m 
[37mWHERE[0m 
  a[0m -[0m [32;1m50[0m =[0m b[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [37mand[0m -[0m[32;1m50[0m 
[37mWHERE[0m 
  -[0m[32;1m50[0m =[0m a[0m 
[37mWHERE[0m 
  a[0m =[0m -[0m[32;1m50[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [30;1m/*test*/[0m
  -[0m[32;1m50[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [37mand[0m -[0m[32;1m50[0m;[0m

[37mSELECT[0m 
  @[0m 
  [37mand[0m b[0m;[0m

[37mSELECT[0m 
  [36;1m@\"weird variable name\"[0m;[0m

[37mSELECT[0m 
  [34;1m\"no closing quote
[0m";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/tests/clihighlight.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[37mSELECT[0m 
  customer_id[0m,[0m 
  customer_name[0m,[0m 
  [37mCOUNT[0m(order_id[0m) [37mas[0m total[0m 
[37mFROM[0m 
  customers[0m 
  [37mINNER JOIN[0m orders[0m [37mON[0m customers[0m.[0mcustomer_id[0m =[0m orders[0m.[0mcustomer_id[0m 
[37mGROUP BY[0m 
  customer_id[0m,[0m 
  customer_name[0m 
[37mHAVING[0m 
  [37mCOUNT[0m(order_id[0m) >[0m [32;1m5[0m 
[37mORDER BY[0m 
  [37mCOUNT[0m(order_id[0m) [37mDESC[0m;[0m

[37mUPDATE[0m 
  customers[0m 
[37mSET[0m 
  totalorders[0m =[0m ordersummary[0m.[0mtotal[0m 
[37mFROM[0m 
  (
    [37mSELECT[0m 
      customer_id[0m,[0m 
      [37mcount[0m(order_id[0m) [37mAs[0m total[0m 
    [37mFROM[0m 
      orders[0m 
    [37mGROUP BY[0m 
      customer_id[0m
  ) [37mAs[0m ordersummary[0m 
[37mWHERE[0m 
  customers[0m.[0mcustomer_id[0m =[0m ordersummary[0m.[0mcustomer_id[0m

[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  sometable[0m 
[37mUNION ALL[0m 
[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  someothertable[0m;[0m

[37mSET[0m 
  [37mNAMES[0m [34;1m'utf8'[0m;[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_address`[0m (
  [35;1m`id_address`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mauto_increment[0m,[0m 
  [35;1m`id_country`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_state`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`id_customer`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_manufacturer`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_supplier`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`id_warehouse`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`alias`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`company`[0m varchar[0m([32;1m64[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`lastname`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`firstname`[0m varchar[0m([32;1m32[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`address1`[0m varchar[0m([32;1m128[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`address2`[0m varchar[0m([32;1m128[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`postcode`[0m varchar[0m([32;1m12[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`city`[0m varchar[0m([32;1m64[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`other`[0m text[0m,[0m 
  [35;1m`phone`[0m varchar[0m([32;1m16[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`phone_mobile`[0m varchar[0m([32;1m16[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`vat_number`[0m varchar[0m([32;1m32[0m) [37mdefault[0m [37mNULL[0m,[0m 
  [35;1m`dni`[0m varchar[0m([32;1m16[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`date_add`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`date_upd`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'1'[0m,[0m 
  [35;1m`deleted`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_address`[0m),[0m 
  [37mKEY[0m [35;1m`address_customer`[0m ([35;1m`id_customer`[0m),[0m 
  [37mKEY[0m [35;1m`id_country`[0m ([35;1m`id_country`[0m),[0m 
  [37mKEY[0m [35;1m`id_state`[0m ([35;1m`id_state`[0m),[0m 
  [37mKEY[0m [35;1m`id_manufacturer`[0m ([35;1m`id_manufacturer`[0m),[0m 
  [37mKEY[0m [35;1m`id_supplier`[0m ([35;1m`id_supplier`[0m),[0m 
  [37mKEY[0m [35;1m`id_warehouse`[0m ([35;1m`id_warehouse`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_alias`[0m (
  [35;1m`id_alias`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mauto_increment[0m,[0m 
  [35;1m`alias`[0m varchar[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`search`[0m varchar[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'1'[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_alias`[0m),[0m 
  [37mUNIQUE[0m [37mKEY[0m [35;1m`alias`[0m ([35;1m`alias`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [35;1m`PREFIX_carrier`[0m (
  [35;1m`id_carrier`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mAUTO_INCREMENT[0m,[0m 
  [35;1m`id_reference`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_tax_rules_group`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`name`[0m varchar[0m([32;1m64[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`url`[0m varchar[0m([32;1m255[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`active`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`deleted`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`shipping_handling`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'1'[0m,[0m 
  [35;1m`range_behavior`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`is_module`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`is_free`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`shipping_external`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`need_range`[0m tinyint[0m([32;1m1[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`external_module_name`[0m varchar[0m([32;1m64[0m) [37mDEFAULT[0m [37mNULL[0m,[0m 
  [35;1m`shipping_method`[0m int[0m([32;1m2[0m) [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'0'[0m,[0m 
  [35;1m`position`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mdefault[0m [34;1m'0'[0m,[0m 
  [35;1m`max_width`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_height`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_depth`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`max_weight`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [35;1m`grade`[0m int[0m([32;1m10[0m) [37mDEFAULT[0m [32;1m0[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_carrier`[0m),[0m 
  [37mKEY[0m [35;1m`deleted`[0m ([35;1m`deleted`[0m,[0m [35;1m`active`[0m),[0m 
  [37mKEY[0m [35;1m`id_tax_rules_group`[0m ([35;1m`id_tax_rules_group`[0m)
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mCREATE[0m [37mTABLE[0m [37mIF[0m [37mNOT[0m [37mEXISTS[0m [35;1m`PREFIX_specific_price_rule`[0m (
  [35;1m`id_specific_price_rule`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mAUTO_INCREMENT[0m,[0m 
  [35;1m`name`[0m VARCHAR[0m([32;1m255[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_shop`[0m int[0m([32;1m11[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [34;1m'1'[0m,[0m 
  [35;1m`id_currency`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_country`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`id_group`[0m int[0m([32;1m10[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`from_quantity`[0m mediumint[0m([32;1m8[0m) [37munsigned[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`price`[0m DECIMAL[0m([32;1m20[0m,[0m [32;1m6[0m),[0m 
  [35;1m`reduction`[0m decimal[0m([32;1m20[0m,[0m [32;1m6[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`reduction_type`[0m enum[0m([34;1m'amount'[0m,[0m [34;1m'percentage'[0m) [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`from`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [35;1m`to`[0m datetime[0m [37mNOT[0m [37mNULL[0m,[0m 
  [37mPRIMARY[0m [37mKEY[0m ([35;1m`id_specific_price_rule`[0m),[0m 
  [37mKEY[0m [35;1m`id_product`[0m (
    [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m [35;1m`id_country`[0m,[0m 
    [35;1m`id_group`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`from`[0m,[0m 
    [35;1m`to`[0m
  )
) [37mENGINE[0m =[0m [37mENGINE_TYPE[0m [37mDEFAULT[0m [37mCHARSET[0m =[0m utf8[0m

[37mUPDATE[0m 
  [35;1m`PREFIX_configuration`[0m 
[37mSET[0m 
  value[0m =[0m [34;1m'6'[0m 
[37mWHERE[0m 
  name[0m =[0m [34;1m'PS_SEARCH_WEIGHT_PNAME'[0m

[37mUPDATE[0m 
  [35;1m`PREFIX_hook_module`[0m 
[37mSET[0m 
  position[0m =[0m [32;1m1[0m 
[37mWHERE[0m 
  id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayPayment'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'cheque'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayPaymentReturn'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'cheque'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayHome'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'homeslider'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionAuthentication'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsdata'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionShopDataDuplication'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'homeslider'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayTop'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blocklanguages'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCustomerAccountAdd'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsdata'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayCustomerAccount'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'favoriteproducts'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsModules'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statsvisits'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsGraphEngine'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'graphvisifire'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayAdminStatsGridEngine'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'gridhtml'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayLeftColumnProduct'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blocksharefb'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionSearch'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'statssearch'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryAdd'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryUpdate'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionCategoryDelete'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'actionAdminMetaSave'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockcategories'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayMyAccountBlock'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'favoriteproducts'[0m
  ) 
  [37mOR[0m id_hook[0m =[0m (
    [37mSELECT[0m 
      id_hook[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_hook`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'displayFooter'[0m
  ) 
  [37mAND[0m id_module[0m =[0m (
    [37mSELECT[0m 
      id_module[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_module`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'blockreinsurance'[0m
  )

[37mALTER TABLE[0m 
  [35;1m`PREFIX_employee`[0m 
[37mADD[0m 
  [35;1m`bo_color`[0m varchar[0m([32;1m32[0m) [37mdefault[0m [37mNULL[0m 
[37mAFTER[0m 
  [35;1m`stats_date_to`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_cms_category_lang`[0m 
[37mVALUES[0m 
  (
    [32;1m1[0m,[0m [32;1m3[0m,[0m [34;1m'Inicio'[0m,[0m [34;1m''[0m,[0m [34;1m'home'[0m,[0m [37mNULL[0m,[0m [37mNULL[0m,[0m 
    [37mNULL[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_cms_category`[0m 
[37mVALUES[0m 
  ([32;1m1[0m,[0m [32;1m0[0m,[0m [32;1m0[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m,[0m [32;1m0[0m)

[37mUPDATE[0m 
  [35;1m`PREFIX_cms_category`[0m 
[37mSET[0m 
  [35;1m`position`[0m =[0m [32;1m0[0m

[37mALTER TABLE[0m 
  [35;1m`PREFIX_customer`[0m 
[37mADD[0m 
  [35;1m`note`[0m text[0m 
[37mAFTER[0m 
  [35;1m`secure_key`[0m

[37mALTER TABLE[0m 
  [35;1m`PREFIX_contact`[0m 
[37mADD[0m 
  [35;1m`customer_service`[0m tinyint[0m([32;1m1[0m) [37mNOT[0m [37mNULL[0m [37mDEFAULT[0m [32;1m0[0m 
[37mAFTER[0m 
  [35;1m`email`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_specific_price`[0m (
  [35;1m`id_product`[0m,[0m [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m 
  [35;1m`id_country`[0m,[0m [35;1m`id_group`[0m,[0m [35;1m`priority`[0m,[0m 
  [35;1m`price`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`reduction`[0m,[0m 
  [35;1m`reduction_type`[0m,[0m [35;1m`from`[0m,[0m [35;1m`to`[0m
) (
  [37mSELECT[0m 
    dq[0m.[0m[35;1m`id_product`[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0.00[0m,[0m 
    dq[0m.[0m[35;1m`quantity`[0m,[0m 
    [37mIF[0m(
      dq[0m.[0m[35;1m`id_discount_type`[0m =[0m [32;1m2[0m,[0m dq[0m.[0m[35;1m`value`[0m,[0m 
      dq[0m.[0m[35;1m`value`[0m /[0m [32;1m100[0m
    ),[0m 
    [37mIF[0m (
      dq[0m.[0m[35;1m`id_discount_type`[0m =[0m [32;1m2[0m,[0m [34;1m'amount'[0m,[0m 
      [34;1m'percentage'[0m
    ),[0m 
    [34;1m'0000-00-00 00:00:00'[0m,[0m 
    [34;1m'0000-00-00 00:00:00'[0m 
  [37mFROM[0m 
    [35;1m`PREFIX_discount_quantity`[0m dq[0m 
    [37mINNER JOIN[0m [35;1m`PREFIX_product`[0m p[0m [37mON[0m (p[0m.[0m[35;1m`id_product`[0m =[0m dq[0m.[0m[35;1m`id_product`[0m)
)

[37mDROP[0m 
  [37mTABLE[0m [35;1m`PREFIX_discount_quantity`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_specific_price`[0m (
  [35;1m`id_product`[0m,[0m [35;1m`id_shop`[0m,[0m [35;1m`id_currency`[0m,[0m 
  [35;1m`id_country`[0m,[0m [35;1m`id_group`[0m,[0m [35;1m`priority`[0m,[0m 
  [35;1m`price`[0m,[0m [35;1m`from_quantity`[0m,[0m [35;1m`reduction`[0m,[0m 
  [35;1m`reduction_type`[0m,[0m [35;1m`from`[0m,[0m [35;1m`to`[0m
) (
  [37mSELECT[0m 
    p[0m.[0m[35;1m`id_product`[0m,[0m 
    [32;1m1[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0[0m,[0m 
    [32;1m0.00[0m,[0m 
    [32;1m1[0m,[0m 
    [37mIF[0m(
      p[0m.[0m[35;1m`reduction_price`[0m >[0m [32;1m0[0m,[0m p[0m.[0m[35;1m`reduction_price`[0m,[0m 
      p[0m.[0m[35;1m`reduction_percent`[0m /[0m [32;1m100[0m
    ),[0m 
    [37mIF[0m(
      p[0m.[0m[35;1m`reduction_price`[0m >[0m [32;1m0[0m,[0m [34;1m'amount'[0m,[0m 
      [34;1m'percentage'[0m
    ),[0m 
    [37mIF[0m (
      p[0m.[0m[35;1m`reduction_from`[0m =[0m p[0m.[0m[35;1m`reduction_to`[0m,[0m 
      [34;1m'0000-00-00 00:00:00'[0m,[0m p[0m.[0m[35;1m`reduction_from`[0m
    ),[0m 
    [37mIF[0m (
      p[0m.[0m[35;1m`reduction_from`[0m =[0m p[0m.[0m[35;1m`reduction_to`[0m,[0m 
      [34;1m'0000-00-00 00:00:00'[0m,[0m p[0m.[0m[35;1m`reduction_to`[0m
    ) 
  [37mFROM[0m 
    [35;1m`PREFIX_product`[0m p[0m 
  [37mWHERE[0m 
    p[0m.[0m[35;1m`reduction_price`[0m 
    [37mOR[0m p[0m.[0m[35;1m`reduction_percent`[0m
)

[37mALTER TABLE[0m 
  [35;1m`PREFIX_product`[0m 
[37mDROP[0m 
  [35;1m`reduction_price`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_percent`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_from`[0m,[0m 
[37mDROP[0m 
  [35;1m`reduction_to`[0m

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_configuration`[0m (
  [35;1m`name`[0m,[0m [35;1m`value`[0m,[0m [35;1m`date_add`[0m,[0m [35;1m`date_upd`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'PS_SPECIFIC_PRICE_PRIORITIES'[0m,[0m 
    [34;1m'id_shop;id_currency;id_country;id_group'[0m,[0m 
    [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  ([34;1m'PS_TAX_DISPLAY'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m),[0m 
  (
    [34;1m'PS_SMARTY_FORCE_COMPILE'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_DISTANCE_UNIT'[0m,[0m [34;1m'km'[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_DISPLAY_CMS'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_DISPLAY_FOOTER'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STORES_SIMPLIFIED'[0m,[0m [32;1m0[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_CUSTOMER_PAGESVIEWS'[0m,[0m 
    [32;1m1[0m,[0m [37mNOW()[0m,[0m [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_PAGESVIEWS'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  ),[0m 
  (
    [34;1m'PS_STATSDATA_PLUGINS'[0m,[0m [32;1m1[0m,[0m [37mNOW()[0m,[0m 
    [37mNOW()[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_configuration`[0m (
  [35;1m`name`[0m,[0m [35;1m`value`[0m,[0m [35;1m`date_add`[0m,[0m [35;1m`date_upd`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'PS_CONDITIONS_CMS_ID'[0m,[0m 
    [37mIFNULL[0m(
      (
        [37mSELECT[0m 
          [35;1m`id_cms`[0m 
        [37mFROM[0m 
          [35;1m`PREFIX_cms`[0m 
        [37mWHERE[0m 
          [35;1m`id_cms`[0m =[0m [32;1m3[0m
      ),[0m 
      [32;1m0[0m
    ),[0m 
    [37mNOW()[0m,[0m 
    [37mNOW()[0m
  )

[37mCREATE[0m [37mTEMPORARY[0m [37mTABLE[0m [35;1m`PREFIX_configuration_tmp`[0m ([35;1m`value`[0m text[0m)

[37mSET[0m 
  [36;1m@defaultOOS[0m =[0m (
    [37mSELECT[0m 
      value[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_configuration`[0m 
    [37mWHERE[0m 
      name[0m =[0m [34;1m'PS_ORDER_OUT_OF_STOCK'[0m
  )

[37mUPDATE[0m 
  [35;1m`PREFIX_product`[0m p[0m 
[37mSET[0m 
  [35;1m`cache_default_attribute`[0m =[0m [32;1m0[0m 
[37mWHERE[0m 
  [35;1m`id_product`[0m [37mNOT[0m [37mIN[0m (
    [37mSELECT[0m 
      [35;1m`id_product`[0m 
    [37mFROM[0m 
      [35;1m`PREFIX_product_attribute`[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_hook`[0m (
  [35;1m`name`[0m,[0m [35;1m`title`[0m,[0m [35;1m`description`[0m,[0m [35;1m`position`[0m
) 
[37mVALUES[0m 
  (
    [34;1m'processCarrier'[0m,[0m [34;1m'Carrier Process'[0m,[0m 
    [37mNULL[0m,[0m [32;1m0[0m
  )

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_stock_mvt_reason_lang`[0m (
  [35;1m`id_stock_mvt_reason`[0m,[0m [35;1m`id_lang`[0m,[0m 
  [35;1m`name`[0m
) 
[37mVALUES[0m 
  ([32;1m1[0m,[0m [32;1m1[0m,[0m [34;1m'Order'[0m),[0m 
  ([32;1m1[0m,[0m [32;1m2[0m,[0m [34;1m'Commande'[0m),[0m 
  ([32;1m2[0m,[0m [32;1m1[0m,[0m [34;1m'Missing Stock Movement'[0m),[0m 
  (
    [32;1m2[0m,[0m [32;1m2[0m,[0m [34;1m'Mouvement de stock manquant'[0m
  ),[0m 
  ([32;1m3[0m,[0m [32;1m1[0m,[0m [34;1m'Restocking'[0m),[0m 
  ([32;1m3[0m,[0m [32;1m2[0m,[0m [34;1m'RÃ©assort'[0m)

[37mINSERT[0m [37mINTO[0m [35;1m`PREFIX_meta_lang`[0m (
  [35;1m`id_lang`[0m,[0m [35;1m`id_meta`[0m,[0m [35;1m`title`[0m,[0m [35;1m`url_rewrite`[0m
) 
[37mVALUES[0m 
  (
    [32;1m1[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'Authentication'[0m,[0m 
    [34;1m'authentication'[0m
  ),[0m 
  (
    [32;1m2[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'Authentification'[0m,[0m 
    [34;1m'authentification'[0m
  ),[0m 
  (
    [32;1m3[0m,[0m 
    (
      [37mSELECT[0m 
        [35;1m`id_meta`[0m 
      [37mFROM[0m 
        [35;1m`PREFIX_meta`[0m 
      [37mWHERE[0m 
        [35;1m`page`[0m =[0m [34;1m'authentication'[0m
    ),[0m 
    [34;1m'AutenticaciÃ³n'[0m,[0m 
    [34;1m'autenticacion'[0m
  )

[37mLOCK[0m [37mTABLES[0m [35;1m`admin_assert`[0m [37mWRITE[0m

[37mUNLOCK[0m [37mTABLES[0m

[37mDROP[0m 
  [37mTABLE[0m [37mIF[0m [37mEXISTS[0m [35;1m`admin_role`[0m

[37mSELECT[0m 
  *[0m 
[37mFROM[0m 
  [30;1m-- This is another comment[0m
  MyTable[0m [30;1m# One final comment[0m
  
  [30;1m/* This is a block comment 
  */[0m
[37mWHERE[0m 
  [32;1m1[0m =[0m [32;1m2[0m;[0m

[37mSELECT[0m 
  [30;1m-- This is a test[0m

[37mSELECT[0m 
  Test[0m 
[37mFROM[0m 
  Test[0m 
[37mWHERE[0m 
  (MyColumn[0m =[0m [32;1m1[0m)
[31;1;7m)[0m
[37mAND[0m (
  (
    (SomeOtherColumn[0m =[0m [32;1m2[0m);[0m 
[31;1;7mWARNING: unclosed parentheses or section[0m

[37mSELECT[0m 
  *[0m 
[37mLIMIT[0m 
  [32;1m1[0m;[0m 
[37mSELECT[0m 
  a[0m,[0m 
  b[0m,[0m 
  c[0m,[0m 
  d[0m 
[37mFROM[0m 
  e[0m 
[37mLIMIT[0m 
  [32;1m1[0m,[0m [32;1m2[0m;[0m 
[37mSELECT[0m 
  [32;1m1[0m,[0m 
  [32;1m2[0m,[0m 
  [32;1m3[0m 
[37mWHERE[0m 
  a[0m [37min[0m ([32;1m1[0m,[0m [32;1m2[0m,[0m [32;1m3[0m,[0m [32;1m4[0m,[0m [32;1m5[0m) 
  [37mand[0m b[0m =[0m [32;1m5[0m;[0m

[37mSELECT[0m 
  count[0m -[0m [32;1m50[0m 
[37mWHERE[0m 
  a[0m -[0m [32;1m50[0m =[0m b[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [37mand[0m -[0m[32;1m50[0m 
[37mWHERE[0m 
  -[0m[32;1m50[0m =[0m a[0m 
[37mWHERE[0m 
  a[0m =[0m -[0m[32;1m50[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [30;1m/*test*/[0m
  -[0m[32;1m50[0m 
[37mWHERE[0m 
  [32;1m1[0m 
  [37mand[0m -[0m[32;1m50[0m;[0m

[37mSELECT[0m 
  @[0m 
  [37mand[0m b[0m;[0m

[37mSELECT[0m 
  [36;1m@\"weird variable name\"[0m;[0m

[37mSELECT[0m 
  [34;1m\"no closing quote
[0m", "vendor/jdorn/sql-formatter/tests/clihighlight.html", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/tests/clihighlight.html");
    }
}
