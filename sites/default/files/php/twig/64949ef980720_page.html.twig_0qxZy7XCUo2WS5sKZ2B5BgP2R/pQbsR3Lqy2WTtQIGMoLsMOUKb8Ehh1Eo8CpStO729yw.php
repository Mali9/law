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

/* themes/custom/law_theme/templates/layout/page.html.twig */
class __TwigTemplate_79411c4a61dbf187b2f221d61121361d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<style>
img {
    vertical-align: middle;
    border-style: none;
    width: -webkit-fill-available;
    margin-bottom:20px;
    
}
.views-element-container {
    position: relative;
    overflow: hidden;
    text-align: center;
}
.row {text-align:center;margin-right:74px};
.col-3{
  width:400px;text-align:center
}
#block-exposedformsolr-search-contentpage-1-2 {
    margin-top: 0;
    margin-bottom: 20px;
}
</style>


<div id=\"page-wrapper\" clas=\"color-bw\" style=\"margin-buttom:20px\">
  <div class=\"overlay\"></div>
   <div class=\"myoverlay\">
\t\t<div class=\"blockloader\"></div>
\t</div>
  <div id=\"page\">
    <a class=\"scroll-to-top\" href=\"#\"></a>
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\" data-font=\"16\">
      <nav class=\"navbar navbar-dark bg-secondary\" id=\"navbar-top\" data-font=\"16\">             
      <div class=\"top\" data-font=\"16\">
    <section class=\"row region region-top-header\" data-font=\"16\">
    <div class=\"brand\" data-font=\"16\">
  <div class=\"burger-icon\" data-font=\"16\">
    <svg class=\"burger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18.7\" height=\"12.467\" viewBox=\"0 0 18.7 12.467\" data-font=\"16\">
      <path id=\"ic_menu_24px\" d=\"M3,18.467H21.7V16.389H3Zm0-5.195H21.7V11.195H3ZM3,6V8.078H21.7V6Z\" transform=\"translate(-3 -6)\" data-font=\"16\"></path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" data-font=\"24\">
      <path id=\"ic_close_24px\" d=\"M23,6.813,21.187,5,14,12.187,6.813,5,5,6.813,12.187,14,5,21.187,6.813,23,14,15.813,21.187,23,23,21.187,15.813,14Z\" transform=\"translate(-5 -5)\" fill=\"#333333\" data-font=\"24\"></path>
    </svg>
  </div>
  <a href=\"/ar\" title=\"الرئيسية\" rel=\"home\" class=\"navbar-brand\" data-font=\"20\">
  <img src=\"/sites/default/files/logo.svg\" alt=\"الرئيسية\" class=\"img-fluid d-inline-block align-top\" data-font=\"20\">
  </a>
</div>
</br>
</br>
</br>
<nav role=\"navigation\" aria-labelledby=\"block-mainnavigation-menu\" id=\"block-mainnavigation\" class=\"contextual-region block block-menu navigation menu--main\" data-font=\"16\">
            
  <h2 class=\"visually-hidden\" id=\"block-mainnavigation-menu\" data-font=\"32\">Main navigation</h2>
 
<ul id=\"block-mainnavigation\" class=\"clearfix nav navbar-nav\" data-font=\"16\">
  ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "

  </ul>
  </nav>

  </section>
   </div>
   <div class=\"form-inline navbar-form ml-auto\" data-font=\"16\">     
 <section class=\"row region region-top-header-form\" data-font=\"16\">
 

<div class=\"language-switcher-language-url contextual-region block block-language block-language-blocklanguage-interface\" id=\"block-languageswitcher\" role=\"navigation\" data-font=\"16\">
  
    <div data-contextual-id=\"block:block=languageswitcher:langcode=ar\" data-contextual-token=\"_gu2Kj_lb5K9J3iFEvH7_LOvNPymnI4k8TUXdOvqDV8\" data-once=\"contextual-render\" data-font=\"16\" class=\"contextual\"><button class=\"trigger focusable visually-hidden\" type=\"button\" aria-pressed=\"false\">مفتوح  configuration options</button>


</div>
      <div class=\"content\" data-font=\"16\">
    
      <nav class=\"links nav links-inline\" data-font=\"16\">
    <div class=\"lang-icon\" data-font=\"16\">
      <div class=\"world-icon\" data-font=\"16\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22.692\" height=\"22.225\" viewBox=\"0 0 22.692 22.225\" data-font=\"16\">
          <g id=\"Group_13124\" data-name=\"Group 13124\" transform=\"translate(0.335 0.1)\" data-font=\"16\">
            <g id=\"Group_13123\" data-name=\"Group 13123\" data-font=\"16\">
              <path id=\"Path_3830\" data-name=\"Path 3830\" d=\"M20,4.654a.185.185,0,0,0,0-.021c-.028-.039-.061-.073-.09-.112q-.308-.42-.653-.809c-.063-.071-.126-.141-.19-.21q-.355-.38-.744-.725c-.048-.043-.093-.087-.141-.128A11.028,11.028,0,0,0,16.1,1.239c-.03-.016-.061-.029-.092-.045A10.943,10.943,0,0,0,14.98.739C14.9.71,14.83.684,14.755.66Q14.29.492,13.811.367c-.094-.025-.189-.051-.285-.073C13.212.22,12.9.164,12.575.119c-.1-.014-.194-.033-.292-.045a10.344,10.344,0,0,0-2.5,0C9.689.086,9.593.1,9.5.119c-.322.046-.64.1-.951.175-.1.022-.19.048-.285.073Q7.777.492,7.315.66L7.09.739a10.936,10.936,0,0,0-1.023.456c-.031.016-.062.029-.092.045a11.03,11.03,0,0,0-2.1,1.41c-.048.042-.093.086-.141.128a10.234,10.234,0,0,0-.744.725c-.064.069-.127.139-.19.21q-.345.388-.653.809c-.028.039-.062.072-.09.112a.179.179,0,0,0-.009.021,10.944,10.944,0,0,0,0,12.713.171.171,0,0,0,.009.021c.028.039.061.073.09.112q.308.42.653.809c.063.071.126.141.19.21q.356.38.744.725c.048.043.093.087.141.128a11.028,11.028,0,0,0,2.088,1.41c.03.016.061.029.092.045a10.942,10.942,0,0,0,1.023.456c.079.028.15.055.225.079q.465.168.944.293c.094.025.189.051.285.073.315.073.629.129.951.175.1.014.194.033.292.045a10.344,10.344,0,0,0,2.5,0c.1-.012.194-.031.292-.045.322-.046.64-.1.951-.175.1-.022.19-.048.285-.073q.483-.126.944-.293l.225-.079A10.935,10.935,0,0,0,16,20.827c.031-.016.062-.029.092-.045a11.03,11.03,0,0,0,2.088-1.41c.048-.042.093-.086.141-.128a10.018,10.018,0,0,0,.744-.725c.064-.069.127-.139.19-.21q.345-.389.653-.809c.028-.039.062-.072.09-.112A.179.179,0,0,0,20,17.367,10.944,10.944,0,0,0,20,4.654Zm-.9,1.489a9.362,9.362,0,0,1,1.327,4.081H15.721a14.682,14.682,0,0,0-.441-2.777A14.139,14.139,0,0,0,19.106,6.143ZM13.034,1.786c.044.01.087.024.131.035A8.467,8.467,0,0,1,14,2.057c.042.014.083.031.124.046q.406.142.8.315l.136.066q.375.179.733.386l.157.1q.34.208.661.445c.055.04.11.079.164.123a7.179,7.179,0,0,1,.6.506c.05.046.1.091.152.138.2.191.393.393.579.6.024.028.049.053.072.079a13.2,13.2,0,0,1-3.356,1.078,20.007,20.007,0,0,0-2.118-4.2C12.814,1.751,12.926,1.762,13.034,1.786ZM7.913,10.224a13.128,13.128,0,0,1,.433-2.518,22.547,22.547,0,0,0,2.686.157A22.6,22.6,0,0,0,13.721,7.7a13.1,13.1,0,0,1,.43,2.522ZM14.151,11.8a13.128,13.128,0,0,1-.433,2.518,23.028,23.028,0,0,0-5.375,0,13.108,13.108,0,0,1-.43-2.518ZM11.032,2.082a19,19,0,0,1,2.193,4.092,20.825,20.825,0,0,1-2.193.116,20.983,20.983,0,0,1-2.191-.117A19.154,19.154,0,0,1,11.032,2.082Zm-7.074,2.7c.185-.209.378-.412.579-.6.05-.047.1-.092.152-.138q.291-.265.6-.506c.054-.042.109-.079.164-.123q.321-.236.661-.445l.157-.1q.358-.209.733-.386l.136-.066q.392-.177.8-.315c.041-.015.079-.031.124-.046.273-.091.551-.167.834-.236.044-.01.087-.024.131-.034.108-.024.22-.035.329-.054a20.008,20.008,0,0,0-2.119,4.2A13.2,13.2,0,0,1,3.886,4.858C3.91,4.83,3.935,4.805,3.959,4.778Zm-1,1.365a14.136,14.136,0,0,0,3.826,1.3,14.682,14.682,0,0,0-.44,2.777H1.63A9.364,9.364,0,0,1,2.958,6.143Zm0,9.736A9.362,9.362,0,0,1,1.63,11.8H6.343a14.682,14.682,0,0,0,.441,2.777A14.136,14.136,0,0,0,2.958,15.879ZM9.03,20.235c-.044-.01-.087-.024-.131-.035a8.468,8.468,0,0,1-.834-.236c-.042-.014-.083-.031-.124-.046q-.406-.142-.8-.315l-.136-.066q-.375-.179-.733-.386l-.157-.1q-.34-.208-.661-.445c-.055-.04-.11-.079-.164-.123a7.179,7.179,0,0,1-.6-.506c-.05-.046-.1-.091-.152-.138-.2-.191-.393-.393-.579-.6-.024-.028-.049-.053-.072-.079a13.2,13.2,0,0,1,3.356-1.078,20.007,20.007,0,0,0,2.118,4.2C9.25,20.27,9.138,20.259,9.03,20.235Zm2-.3a19,19,0,0,1-2.193-4.092,20.484,20.484,0,0,1,4.384,0h0A19.15,19.15,0,0,1,11.032,19.94Zm7.074-2.7c-.185.209-.378.412-.579.6-.05.047-.1.092-.152.138q-.291.266-.6.506c-.054.042-.109.083-.164.123q-.321.236-.661.445l-.157.1q-.357.209-.733.386l-.136.066q-.392.177-.8.315c-.041.015-.079.031-.124.046-.273.091-.551.167-.834.236-.044.01-.087.024-.131.034-.108.024-.22.035-.329.054a20,20,0,0,0,2.118-4.2,13.2,13.2,0,0,1,3.356,1.078C18.154,17.191,18.129,17.216,18.106,17.244Zm1-1.365a14.136,14.136,0,0,0-3.826-1.3,14.682,14.682,0,0,0,.44-2.777h4.713A9.364,9.364,0,0,1,19.106,15.879Z\" transform=\"translate(-0.016 0.002)\" fill=\"#070705\" stroke=\"#f8f8f8\" stroke-width=\"0.2\" data-font=\"16\"></path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"arrow-icon\" data-font=\"16\">
      </div>
    </div>
    <div class=\"lang-list\" data-font=\"16\">
      <div class=\"list\" data-font=\"16\"><span hreflang=\"ar\" data-drupal-link-system-path=\"<front>\" class=\"ar nav-link is-active\" data-font=\"16\"><a href=\"/ar\" class=\"language-link is-active\" hreflang=\"ar\" data-drupal-link-system-path=\"<front>\" data-font=\"15\">العربية</a></span></div>
    </div>
  </nav>

    </div>
  </div>
<nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region block block-menu navigation menu--account\" data-font=\"16\">
            
  <h2 class=\"sr-only\" id=\"block-useraccountmenu-menu\" data-font=\"32\">User account menu</h2>


              <div class=\"loged-user-info\" data-font=\"16\">
        <div class=\"pic\" data-font=\"16\">
          
        </div>

        
   ";
        // line 177
        if (($context["logged_in"] ?? null)) {
            // line 178
            echo "  <div class=\"welcome\" data-font=\"16\">
    <div class=\"loged-name\" data-font=\"16\">
      <div class=\"username\" data-font=\"16\">
        أهلاً, ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_user_name"] ?? null), 181, $this->source), "html", null, true);
            echo "!
        <div class=\"arrow\" data-font=\"16\"></div>
      </div>
    </div>
  </div>
  <div class=\"logedin\" data-font=\"16\">
    <div id=\"block-useraccountmenu\" class=\"clearfix nav navbar-nav\" data-font=\"16\">
      <li class=\"nav-item\" data-font=\"16\">
        <a href=\"/ar/user/logout\" class=\"nav-link nav-link--ar-user-logout\" data-drupal-link-system-path=\"user/logout\" data-font=\"15\">تسجيل الخروج</a>
      </li>
    </div>
  </div>
";
        } else {
            // line 194
            echo "  ";
            // line 197
            echo "

      </div>
   
      </nav>
        <a href=\"/user/login\" class=\"nav-link nav-link--ar-user-login\" data-drupal-link-system-path=\"user/login\" data-font=\"15\">تسجيل الدخول</a>
      ";
        }
        // line 207
        echo "
  </section>
 </div>                              
 </nav>
 <nav class=\"navbar navbar-dark bg-primary navbar-expand-lg\" id=\"navbar-main\" data-font=\"16\">
 <div class=\"container\" data-font=\"16\">
 </div>
 </nav>
</header>


    ";
        // line 223
        echo "

        <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">

      ";
        // line 227
        $this->displayBlock('content', $context, $blocks);
        // line 246
        echo "</div>

<footer id=\"site-footer\" data-font=\"16\" style=\"font-size: 16px;\">
<div class=\"site-footer__top\" data-font=\"16\" style=\"font-size: 16px;\">
 <div class=\"top-footer\" data-font=\"16\" style=\"font-size: 16px;\">
  <section class=\"row region region-footer-first\" data-font=\"16\" style=\"font-size: 16px;\">
  <nav role=\"navigation\" aria-labelledby=\"block-footer-menu\" id=\"block-footer\" class=\"contextual-region block block-menu navigation menu--footer\" data-font=\"16\" style=\"font-size: 16px;\">     
  <h2 class=\"visually-hidden\" id=\"block-footer-menu\" data-font=\"32\" style=\"font-size: 32px;\">Footer</h2>


";
        // line 269
        echo "

  </nav>

  </section>

                
                
          
          </div>
      </div>
      <div class=\"bottom-footer\" data-font=\"16\" style=\"font-size: 16px;\">
        <div class=\"container-fluid\" data-font=\"16\" style=\"font-size: 16px;\">
            <section class=\"row region region-footer-fourth\" data-font=\"16\" style=\"font-size: 16px;\">
    <div data-quickedit-entity-id=\"block_content/4\" id=\"block-sharelinks\" class=\"contextual-region block block-block-content block-block-contentd07539e6-6bfb-4b5c-95f6-058255130f61\" data-once=\"quickedit\" data-quickedit-entity-instance-id=\"0\" data-font=\"16\" style=\"font-size: 16px;\">
  

      <div class=\"content\" data-font=\"16\" style=\"font-size: 16px;\">
      
            <div data-quickedit-field-id=\"block_content/4/body/en/full\" class=\"clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item quickedit-field\" data-once=\"quickedit\" data-font=\"15\" style=\"font-size: 15px;\"><p data-font=\"15\" style=\"font-size: 15px;\"><a href=\"https://www.facebook.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"><svg height=\"18.151\" viewBox=\"0 0 9.076 18.151\" width=\"9.076\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M13.606,3.014h1.657V.128A21.4,21.4,0,0,0,12.849,0C10.46,0,8.823,1.5,8.823,4.265V6.806H6.187v3.226H8.823v8.118h3.232V10.033h2.53l.4-3.226H12.055V4.585c0-.932.252-1.571,1.551-1.571Z\" fill=\"#fff\" id=\"Path_12488\" transform=\"translate(-6.187)\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a> <a href=\"https://www.twitter.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"16.122\" viewBox=\"0 0 19.842 16.122\" width=\"19.842\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><g id=\"twitter\" transform=\"translate(0 -48)\" data-font=\"15\" style=\"font-size: 15px;\"><g data-name=\"Group 15177\" id=\"Group_15177\" transform=\"translate(0 48)\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M19.842,49.909a8.481,8.481,0,0,1-2.344.642,4.045,4.045,0,0,0,1.79-2.248,8.129,8.129,0,0,1-2.579.985,4.068,4.068,0,0,0-7.036,2.782A4.189,4.189,0,0,0,9.766,53a11.514,11.514,0,0,1-8.384-4.255,4.069,4.069,0,0,0,1.25,5.437,4.017,4.017,0,0,1-1.838-.5v.045a4.087,4.087,0,0,0,3.259,4,4.06,4.06,0,0,1-1.067.134,3.6,3.6,0,0,1-.77-.069,4.107,4.107,0,0,0,3.8,2.834A8.174,8.174,0,0,1,.973,62.352,7.619,7.619,0,0,1,0,62.3a11.452,11.452,0,0,0,6.24,1.825A11.5,11.5,0,0,0,17.818,52.546c0-.18-.006-.353-.015-.526A8.115,8.115,0,0,0,19.842,49.909Z\" data-name=\"Path 12488\" fill=\"#fff\" id=\"Path_12488\" transform=\"translate(0 -48)\" data-font=\"15\" style=\"font-size: 15px;\"></path></g></g></svg></a> <a href=\"https://www.instagram.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"18.19\" id=\"instagram-logo\" viewBox=\"0 0 18.19 18.19\" width=\"18.19\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M13.17,0H5.02A5.025,5.025,0,0,0,0,5.02v8.15a5.025,5.025,0,0,0,5.02,5.02h8.15a5.026,5.026,0,0,0,5.02-5.02V5.02A5.025,5.025,0,0,0,13.17,0Zm3.406,13.17a3.41,3.41,0,0,1-3.406,3.406H5.02A3.41,3.41,0,0,1,1.614,13.17V5.02A3.41,3.41,0,0,1,5.02,1.614h8.15A3.41,3.41,0,0,1,16.576,5.02v8.15Z\" data-name=\"Path 12489\" fill=\"#fff\" id=\"Path_12489\" data-font=\"15\" style=\"font-size: 15px;\"></path><path d=\"M45.9,40.97a4.93,4.93,0,1,0,4.93,4.93A4.936,4.936,0,0,0,45.9,40.97Zm0,8.163A3.233,3.233,0,1,1,49.131,45.9,3.236,3.236,0,0,1,45.9,49.133Z\" data-name=\"Path 12490\" fill=\"#fff\" id=\"Path_12490\" transform=\"translate(-36.803 -36.805)\" data-font=\"15\" style=\"font-size: 15px;\"></path><path d=\"M120.039,28.251a1.118,1.118,0,1,0,.791.327A1.123,1.123,0,0,0,120.039,28.251Z\" data-name=\"Path 12491\" fill=\"#fff\" id=\"Path_12491\" transform=\"translate(-106.02 -25.186)\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a> <a href=\"https://www.linkedin.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"16.651\" viewBox=\"0 0 16.651 16.651\" width=\"16.651\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M5.2,13.757H2.927V6.407H5.2Zm.227-9.692A1.333,1.333,0,1,0,4.1,5.4,1.333,1.333,0,0,0,5.431,4.065Zm8.293,5.648c0-1.973-.417-3.436-2.722-3.436a2.362,2.362,0,0,0-2.154,1.13h0v-1H6.634v7.35H8.846V10.107c0-.956.243-1.882,1.428-1.882,1.168,0,1.206,1.093,1.206,1.942v3.589h2.244ZM16.651,14.7V1.951A1.953,1.953,0,0,0,14.7,0H1.951A1.953,1.953,0,0,0,0,1.951V14.7a1.953,1.953,0,0,0,1.951,1.951H14.7A1.953,1.953,0,0,0,16.651,14.7ZM14.7,1.3a.651.651,0,0,1,.65.65V14.7a.651.651,0,0,1-.65.65H1.951a.651.651,0,0,1-.65-.65V1.951a.651.651,0,0,1,.65-.65Zm0,0\" fill=\"#fff\" id=\"linkedin\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a></p></div>
      
    </div>
  </div>
<div data-quickedit-entity-id=\"block_content/2\" id=\"block-copyright\" class=\"contextual-region block block-block-content block-block-content283d9059-ec00-4d40-8aff-d297582eae42\" data-once=\"quickedit\" data-quickedit-entity-instance-id=\"0\" data-font=\"16\" style=\"font-size: 16px;\">
  

      <div class=\"content\" data-font=\"16\" style=\"font-size: 16px;\">
      
            <div data-quickedit-field-id=\"block_content/2/body/ar/full\" class=\"clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item quickedit-field\" data-once=\"quickedit\" data-font=\"15\" style=\"font-size: 15px;\"><p data-font=\"15\" style=\"font-size: 15px;\">جميع الحقوق محفوظة لشركة  - 2023</p>
</div>
      
    </div>
  </div>

  </section>


        </div>
                      </div>
      </footer>
</div>
</div>";
    }

    // line 227
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 228
        echo "      <div id=\"block-exposedformsolr-search-contentpage-1-2\"
       class=\"views-exposed-form main-search-box contextual-region block block-views block-views-exposed-filter-blocksolr-search-content-page-1\" 
       data-drupal-selector=\"views-exposed-form-solr-search-content-page-1\" data-font=\"16\" style=\"font-size: 16px;  background-image: url('/sites/default/files/weqaya-final.png');\">
 
</div>
      <div id=\"main\">
        ";
        // line 234
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
        echo "
        <div class=\"row-offcanvas row-offcanvas-left clearfix\">
          <main";
        // line 236
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 236, $this->source), "html", null, true);
        echo " class=\"p-0\">
            <section class=\"section\">
              <a id=\"main-content p-0\" tabindex=\"-1\"></a>
              ";
        // line 239
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
        echo "
            </section>
            </main>
            
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/law_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 239,  281 => 236,  276 => 234,  268 => 228,  264 => 227,  219 => 269,  207 => 246,  205 => 227,  199 => 223,  186 => 207,  177 => 197,  175 => 194,  159 => 181,  154 => 178,  152 => 177,  98 => 126,  40 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Bootstrap Barrio's theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template normally located in the
* core/modules/system directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
* - logo: The url of the logo image, as defined in theme settings.
* - site_name: The name of the site. This is empty when displaying the site
* name has been disabled in the theme settings.
* - site_slogan: The slogan of the site. This is empty when displaying the site
* slogan has been disabled in theme settings.

* Page content (in order of occurrence in the default page.html.twig):
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.top_header: Items for the top header region.
* - page.top_header_form: Items for the top header form region.
* - page.header: Items for the header region.
* - page.header_form: Items for the header form region.
* - page.highlighted: Items for the highlighted region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.featured_top: Items for the featured top region.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.featured_bottom_first: Items for the first featured bottom region.
* - page.featured_bottom_second: Items for the second featured bottom region.
* - page.featured_bottom_third: Items for the third featured bottom region.
* - page.footer_first: Items for the first footer column.
* - page.footer_second: Items for the second footer column.
* - page.footer_third: Items for the third footer column.
* - page.footer_fourth: Items for the fourth footer column.
* - page.footer_fifth: Items for the fifth footer column.
* - page.breadcrumb: Items for the breadcrumb region.
*
* Theme variables:
* - navbar_top_attributes: Items for the header region.
* - navbar_attributes: Items for the header region.
* - content_attributes: Items for the header region.
* - sidebar_first_attributes: Items for the highlighted region.
* - sidebar_second_attributes: Items for the primary menu region.
* - sidebar_collapse: If the sidebar_first will collapse.
*
* @see template_preprocess_page()
* @see bootstrap_barrio_preprocess_page()
* @see html.html.twig
*/
#}
<style>
img {
    vertical-align: middle;
    border-style: none;
    width: -webkit-fill-available;
    margin-bottom:20px;
    
}
.views-element-container {
    position: relative;
    overflow: hidden;
    text-align: center;
}
.row {text-align:center;margin-right:74px};
.col-3{
  width:400px;text-align:center
}
#block-exposedformsolr-search-contentpage-1-2 {
    margin-top: 0;
    margin-bottom: 20px;
}
</style>


<div id=\"page-wrapper\" clas=\"color-bw\" style=\"margin-buttom:20px\">
  <div class=\"overlay\"></div>
   <div class=\"myoverlay\">
\t\t<div class=\"blockloader\"></div>
\t</div>
  <div id=\"page\">
    <a class=\"scroll-to-top\" href=\"#\"></a>
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\" data-font=\"16\">
      <nav class=\"navbar navbar-dark bg-secondary\" id=\"navbar-top\" data-font=\"16\">             
      <div class=\"top\" data-font=\"16\">
    <section class=\"row region region-top-header\" data-font=\"16\">
    <div class=\"brand\" data-font=\"16\">
  <div class=\"burger-icon\" data-font=\"16\">
    <svg class=\"burger\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18.7\" height=\"12.467\" viewBox=\"0 0 18.7 12.467\" data-font=\"16\">
      <path id=\"ic_menu_24px\" d=\"M3,18.467H21.7V16.389H3Zm0-5.195H21.7V11.195H3ZM3,6V8.078H21.7V6Z\" transform=\"translate(-3 -6)\" data-font=\"16\"></path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" data-font=\"24\">
      <path id=\"ic_close_24px\" d=\"M23,6.813,21.187,5,14,12.187,6.813,5,5,6.813,12.187,14,5,21.187,6.813,23,14,15.813,21.187,23,23,21.187,15.813,14Z\" transform=\"translate(-5 -5)\" fill=\"#333333\" data-font=\"24\"></path>
    </svg>
  </div>
  <a href=\"/ar\" title=\"الرئيسية\" rel=\"home\" class=\"navbar-brand\" data-font=\"20\">
  <img src=\"/sites/default/files/logo.svg\" alt=\"الرئيسية\" class=\"img-fluid d-inline-block align-top\" data-font=\"20\">
  </a>
</div>
</br>
</br>
</br>
<nav role=\"navigation\" aria-labelledby=\"block-mainnavigation-menu\" id=\"block-mainnavigation\" class=\"contextual-region block block-menu navigation menu--main\" data-font=\"16\">
            
  <h2 class=\"visually-hidden\" id=\"block-mainnavigation-menu\" data-font=\"32\">Main navigation</h2>
 
<ul id=\"block-mainnavigation\" class=\"clearfix nav navbar-nav\" data-font=\"16\">
  {{ page.header }}

  </ul>
  </nav>

  </section>
   </div>
   <div class=\"form-inline navbar-form ml-auto\" data-font=\"16\">     
 <section class=\"row region region-top-header-form\" data-font=\"16\">
 

<div class=\"language-switcher-language-url contextual-region block block-language block-language-blocklanguage-interface\" id=\"block-languageswitcher\" role=\"navigation\" data-font=\"16\">
  
    <div data-contextual-id=\"block:block=languageswitcher:langcode=ar\" data-contextual-token=\"_gu2Kj_lb5K9J3iFEvH7_LOvNPymnI4k8TUXdOvqDV8\" data-once=\"contextual-render\" data-font=\"16\" class=\"contextual\"><button class=\"trigger focusable visually-hidden\" type=\"button\" aria-pressed=\"false\">مفتوح  configuration options</button>


</div>
      <div class=\"content\" data-font=\"16\">
    
      <nav class=\"links nav links-inline\" data-font=\"16\">
    <div class=\"lang-icon\" data-font=\"16\">
      <div class=\"world-icon\" data-font=\"16\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22.692\" height=\"22.225\" viewBox=\"0 0 22.692 22.225\" data-font=\"16\">
          <g id=\"Group_13124\" data-name=\"Group 13124\" transform=\"translate(0.335 0.1)\" data-font=\"16\">
            <g id=\"Group_13123\" data-name=\"Group 13123\" data-font=\"16\">
              <path id=\"Path_3830\" data-name=\"Path 3830\" d=\"M20,4.654a.185.185,0,0,0,0-.021c-.028-.039-.061-.073-.09-.112q-.308-.42-.653-.809c-.063-.071-.126-.141-.19-.21q-.355-.38-.744-.725c-.048-.043-.093-.087-.141-.128A11.028,11.028,0,0,0,16.1,1.239c-.03-.016-.061-.029-.092-.045A10.943,10.943,0,0,0,14.98.739C14.9.71,14.83.684,14.755.66Q14.29.492,13.811.367c-.094-.025-.189-.051-.285-.073C13.212.22,12.9.164,12.575.119c-.1-.014-.194-.033-.292-.045a10.344,10.344,0,0,0-2.5,0C9.689.086,9.593.1,9.5.119c-.322.046-.64.1-.951.175-.1.022-.19.048-.285.073Q7.777.492,7.315.66L7.09.739a10.936,10.936,0,0,0-1.023.456c-.031.016-.062.029-.092.045a11.03,11.03,0,0,0-2.1,1.41c-.048.042-.093.086-.141.128a10.234,10.234,0,0,0-.744.725c-.064.069-.127.139-.19.21q-.345.388-.653.809c-.028.039-.062.072-.09.112a.179.179,0,0,0-.009.021,10.944,10.944,0,0,0,0,12.713.171.171,0,0,0,.009.021c.028.039.061.073.09.112q.308.42.653.809c.063.071.126.141.19.21q.356.38.744.725c.048.043.093.087.141.128a11.028,11.028,0,0,0,2.088,1.41c.03.016.061.029.092.045a10.942,10.942,0,0,0,1.023.456c.079.028.15.055.225.079q.465.168.944.293c.094.025.189.051.285.073.315.073.629.129.951.175.1.014.194.033.292.045a10.344,10.344,0,0,0,2.5,0c.1-.012.194-.031.292-.045.322-.046.64-.1.951-.175.1-.022.19-.048.285-.073q.483-.126.944-.293l.225-.079A10.935,10.935,0,0,0,16,20.827c.031-.016.062-.029.092-.045a11.03,11.03,0,0,0,2.088-1.41c.048-.042.093-.086.141-.128a10.018,10.018,0,0,0,.744-.725c.064-.069.127-.139.19-.21q.345-.389.653-.809c.028-.039.062-.072.09-.112A.179.179,0,0,0,20,17.367,10.944,10.944,0,0,0,20,4.654Zm-.9,1.489a9.362,9.362,0,0,1,1.327,4.081H15.721a14.682,14.682,0,0,0-.441-2.777A14.139,14.139,0,0,0,19.106,6.143ZM13.034,1.786c.044.01.087.024.131.035A8.467,8.467,0,0,1,14,2.057c.042.014.083.031.124.046q.406.142.8.315l.136.066q.375.179.733.386l.157.1q.34.208.661.445c.055.04.11.079.164.123a7.179,7.179,0,0,1,.6.506c.05.046.1.091.152.138.2.191.393.393.579.6.024.028.049.053.072.079a13.2,13.2,0,0,1-3.356,1.078,20.007,20.007,0,0,0-2.118-4.2C12.814,1.751,12.926,1.762,13.034,1.786ZM7.913,10.224a13.128,13.128,0,0,1,.433-2.518,22.547,22.547,0,0,0,2.686.157A22.6,22.6,0,0,0,13.721,7.7a13.1,13.1,0,0,1,.43,2.522ZM14.151,11.8a13.128,13.128,0,0,1-.433,2.518,23.028,23.028,0,0,0-5.375,0,13.108,13.108,0,0,1-.43-2.518ZM11.032,2.082a19,19,0,0,1,2.193,4.092,20.825,20.825,0,0,1-2.193.116,20.983,20.983,0,0,1-2.191-.117A19.154,19.154,0,0,1,11.032,2.082Zm-7.074,2.7c.185-.209.378-.412.579-.6.05-.047.1-.092.152-.138q.291-.265.6-.506c.054-.042.109-.079.164-.123q.321-.236.661-.445l.157-.1q.358-.209.733-.386l.136-.066q.392-.177.8-.315c.041-.015.079-.031.124-.046.273-.091.551-.167.834-.236.044-.01.087-.024.131-.034.108-.024.22-.035.329-.054a20.008,20.008,0,0,0-2.119,4.2A13.2,13.2,0,0,1,3.886,4.858C3.91,4.83,3.935,4.805,3.959,4.778Zm-1,1.365a14.136,14.136,0,0,0,3.826,1.3,14.682,14.682,0,0,0-.44,2.777H1.63A9.364,9.364,0,0,1,2.958,6.143Zm0,9.736A9.362,9.362,0,0,1,1.63,11.8H6.343a14.682,14.682,0,0,0,.441,2.777A14.136,14.136,0,0,0,2.958,15.879ZM9.03,20.235c-.044-.01-.087-.024-.131-.035a8.468,8.468,0,0,1-.834-.236c-.042-.014-.083-.031-.124-.046q-.406-.142-.8-.315l-.136-.066q-.375-.179-.733-.386l-.157-.1q-.34-.208-.661-.445c-.055-.04-.11-.079-.164-.123a7.179,7.179,0,0,1-.6-.506c-.05-.046-.1-.091-.152-.138-.2-.191-.393-.393-.579-.6-.024-.028-.049-.053-.072-.079a13.2,13.2,0,0,1,3.356-1.078,20.007,20.007,0,0,0,2.118,4.2C9.25,20.27,9.138,20.259,9.03,20.235Zm2-.3a19,19,0,0,1-2.193-4.092,20.484,20.484,0,0,1,4.384,0h0A19.15,19.15,0,0,1,11.032,19.94Zm7.074-2.7c-.185.209-.378.412-.579.6-.05.047-.1.092-.152.138q-.291.266-.6.506c-.054.042-.109.083-.164.123q-.321.236-.661.445l-.157.1q-.357.209-.733.386l-.136.066q-.392.177-.8.315c-.041.015-.079.031-.124.046-.273.091-.551.167-.834.236-.044.01-.087.024-.131.034-.108.024-.22.035-.329.054a20,20,0,0,0,2.118-4.2,13.2,13.2,0,0,1,3.356,1.078C18.154,17.191,18.129,17.216,18.106,17.244Zm1-1.365a14.136,14.136,0,0,0-3.826-1.3,14.682,14.682,0,0,0,.44-2.777h4.713A9.364,9.364,0,0,1,19.106,15.879Z\" transform=\"translate(-0.016 0.002)\" fill=\"#070705\" stroke=\"#f8f8f8\" stroke-width=\"0.2\" data-font=\"16\"></path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"arrow-icon\" data-font=\"16\">
      </div>
    </div>
    <div class=\"lang-list\" data-font=\"16\">
      <div class=\"list\" data-font=\"16\"><span hreflang=\"ar\" data-drupal-link-system-path=\"<front>\" class=\"ar nav-link is-active\" data-font=\"16\"><a href=\"/ar\" class=\"language-link is-active\" hreflang=\"ar\" data-drupal-link-system-path=\"<front>\" data-font=\"15\">العربية</a></span></div>
    </div>
  </nav>

    </div>
  </div>
<nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region block block-menu navigation menu--account\" data-font=\"16\">
            
  <h2 class=\"sr-only\" id=\"block-useraccountmenu-menu\" data-font=\"32\">User account menu</h2>


              <div class=\"loged-user-info\" data-font=\"16\">
        <div class=\"pic\" data-font=\"16\">
          
        </div>

        
   {% if logged_in %}
  <div class=\"welcome\" data-font=\"16\">
    <div class=\"loged-name\" data-font=\"16\">
      <div class=\"username\" data-font=\"16\">
        أهلاً, {{current_user_name}}!
        <div class=\"arrow\" data-font=\"16\"></div>
      </div>
    </div>
  </div>
  <div class=\"logedin\" data-font=\"16\">
    <div id=\"block-useraccountmenu\" class=\"clearfix nav navbar-nav\" data-font=\"16\">
      <li class=\"nav-item\" data-font=\"16\">
        <a href=\"/ar/user/logout\" class=\"nav-link nav-link--ar-user-logout\" data-drupal-link-system-path=\"user/logout\" data-font=\"15\">تسجيل الخروج</a>
      </li>
    </div>
  </div>
{% else %}
  {# <div class=\"logedin\" data-font=\"16\">
    <div id=\"block-useraccountmenu\" class=\"clearfix nav navbar-nav\" data-font=\"16\">
      <li class=\"nav-item\" data-font=\"16\"> #}


      </div>
   
      </nav>
        <a href=\"/user/login\" class=\"nav-link nav-link--ar-user-login\" data-drupal-link-system-path=\"user/login\" data-font=\"15\">تسجيل الدخول</a>
      {# </li>
    </div>
  </div> #}
{% endif %}

  </section>
 </div>                              
 </nav>
 <nav class=\"navbar navbar-dark bg-primary navbar-expand-lg\" id=\"navbar-main\" data-font=\"16\">
 <div class=\"container\" data-font=\"16\">
 </div>
 </nav>
</header>


    {# <div class=\"highlighted\">
      <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
        {{ page.highlighted }}
      </aside>
    </div> #}


        <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">

      {% block content %}
      <div id=\"block-exposedformsolr-search-contentpage-1-2\"
       class=\"views-exposed-form main-search-box contextual-region block block-views block-views-exposed-filter-blocksolr-search-content-page-1\" 
       data-drupal-selector=\"views-exposed-form-solr-search-content-page-1\" data-font=\"16\" style=\"font-size: 16px;  background-image: url('/sites/default/files/weqaya-final.png');\">
 
</div>
      <div id=\"main\">
        {{ page.breadcrumb }}
        <div class=\"row-offcanvas row-offcanvas-left clearfix\">
          <main{{ content_attributes }} class=\"p-0\">
            <section class=\"section\">
              <a id=\"main-content p-0\" tabindex=\"-1\"></a>
              {{ page.content }}
            </section>
            </main>
            
    </div>
  </div>
  {% endblock %}
</div>

<footer id=\"site-footer\" data-font=\"16\" style=\"font-size: 16px;\">
<div class=\"site-footer__top\" data-font=\"16\" style=\"font-size: 16px;\">
 <div class=\"top-footer\" data-font=\"16\" style=\"font-size: 16px;\">
  <section class=\"row region region-footer-first\" data-font=\"16\" style=\"font-size: 16px;\">
  <nav role=\"navigation\" aria-labelledby=\"block-footer-menu\" id=\"block-footer\" class=\"contextual-region block block-menu navigation menu--footer\" data-font=\"16\" style=\"font-size: 16px;\">     
  <h2 class=\"visually-hidden\" id=\"block-footer-menu\" data-font=\"32\" style=\"font-size: 32px;\">Footer</h2>


{#         
              <ul class=\"clearfix nav navbar-nav\" data-font=\"16\" style=\"font-size: 16px;\">
                    <li class=\"nav-item\" data-font=\"16\" style=\"font-size: 16px;\">
                <a href=\"/ar/terms-and-conditions\" class=\"nav-link nav-link--ar-terms-and-conditions\" data-drupal-link-system-path=\"node/30\" data-font=\"15\" style=\"font-size: 15px;\">الشروط والأحكام</a>
              </li>
                <li class=\"nav-item\" data-font=\"16\" style=\"font-size: 16px;\">
                <a href=\"/ar/privacy-policy\" class=\"nav-link nav-link--ar-privacy-policy\" data-drupal-link-system-path=\"node/29\" data-font=\"15\" style=\"font-size: 15px;\">سياسة الخصوصية</a>
              </li>
                <li class=\"nav-item\" data-font=\"16\" style=\"font-size: 16px;\">
                <a href=\"/ar/about-us\" class=\"nav-link nav-link--ar-about-us\" data-drupal-link-system-path=\"node/28\" data-font=\"15\" style=\"font-size: 15px;\">معلومات عنا</a>
              </li>
        </ul>
   #}


  </nav>

  </section>

                
                
          
          </div>
      </div>
      <div class=\"bottom-footer\" data-font=\"16\" style=\"font-size: 16px;\">
        <div class=\"container-fluid\" data-font=\"16\" style=\"font-size: 16px;\">
            <section class=\"row region region-footer-fourth\" data-font=\"16\" style=\"font-size: 16px;\">
    <div data-quickedit-entity-id=\"block_content/4\" id=\"block-sharelinks\" class=\"contextual-region block block-block-content block-block-contentd07539e6-6bfb-4b5c-95f6-058255130f61\" data-once=\"quickedit\" data-quickedit-entity-instance-id=\"0\" data-font=\"16\" style=\"font-size: 16px;\">
  

      <div class=\"content\" data-font=\"16\" style=\"font-size: 16px;\">
      
            <div data-quickedit-field-id=\"block_content/4/body/en/full\" class=\"clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item quickedit-field\" data-once=\"quickedit\" data-font=\"15\" style=\"font-size: 15px;\"><p data-font=\"15\" style=\"font-size: 15px;\"><a href=\"https://www.facebook.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"><svg height=\"18.151\" viewBox=\"0 0 9.076 18.151\" width=\"9.076\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M13.606,3.014h1.657V.128A21.4,21.4,0,0,0,12.849,0C10.46,0,8.823,1.5,8.823,4.265V6.806H6.187v3.226H8.823v8.118h3.232V10.033h2.53l.4-3.226H12.055V4.585c0-.932.252-1.571,1.551-1.571Z\" fill=\"#fff\" id=\"Path_12488\" transform=\"translate(-6.187)\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a> <a href=\"https://www.twitter.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"16.122\" viewBox=\"0 0 19.842 16.122\" width=\"19.842\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><g id=\"twitter\" transform=\"translate(0 -48)\" data-font=\"15\" style=\"font-size: 15px;\"><g data-name=\"Group 15177\" id=\"Group_15177\" transform=\"translate(0 48)\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M19.842,49.909a8.481,8.481,0,0,1-2.344.642,4.045,4.045,0,0,0,1.79-2.248,8.129,8.129,0,0,1-2.579.985,4.068,4.068,0,0,0-7.036,2.782A4.189,4.189,0,0,0,9.766,53a11.514,11.514,0,0,1-8.384-4.255,4.069,4.069,0,0,0,1.25,5.437,4.017,4.017,0,0,1-1.838-.5v.045a4.087,4.087,0,0,0,3.259,4,4.06,4.06,0,0,1-1.067.134,3.6,3.6,0,0,1-.77-.069,4.107,4.107,0,0,0,3.8,2.834A8.174,8.174,0,0,1,.973,62.352,7.619,7.619,0,0,1,0,62.3a11.452,11.452,0,0,0,6.24,1.825A11.5,11.5,0,0,0,17.818,52.546c0-.18-.006-.353-.015-.526A8.115,8.115,0,0,0,19.842,49.909Z\" data-name=\"Path 12488\" fill=\"#fff\" id=\"Path_12488\" transform=\"translate(0 -48)\" data-font=\"15\" style=\"font-size: 15px;\"></path></g></g></svg></a> <a href=\"https://www.instagram.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"18.19\" id=\"instagram-logo\" viewBox=\"0 0 18.19 18.19\" width=\"18.19\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M13.17,0H5.02A5.025,5.025,0,0,0,0,5.02v8.15a5.025,5.025,0,0,0,5.02,5.02h8.15a5.026,5.026,0,0,0,5.02-5.02V5.02A5.025,5.025,0,0,0,13.17,0Zm3.406,13.17a3.41,3.41,0,0,1-3.406,3.406H5.02A3.41,3.41,0,0,1,1.614,13.17V5.02A3.41,3.41,0,0,1,5.02,1.614h8.15A3.41,3.41,0,0,1,16.576,5.02v8.15Z\" data-name=\"Path 12489\" fill=\"#fff\" id=\"Path_12489\" data-font=\"15\" style=\"font-size: 15px;\"></path><path d=\"M45.9,40.97a4.93,4.93,0,1,0,4.93,4.93A4.936,4.936,0,0,0,45.9,40.97Zm0,8.163A3.233,3.233,0,1,1,49.131,45.9,3.236,3.236,0,0,1,45.9,49.133Z\" data-name=\"Path 12490\" fill=\"#fff\" id=\"Path_12490\" transform=\"translate(-36.803 -36.805)\" data-font=\"15\" style=\"font-size: 15px;\"></path><path d=\"M120.039,28.251a1.118,1.118,0,1,0,.791.327A1.123,1.123,0,0,0,120.039,28.251Z\" data-name=\"Path 12491\" fill=\"#fff\" id=\"Path_12491\" transform=\"translate(-106.02 -25.186)\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a> <a href=\"https://www.linkedin.com/\" target=\"_blank\" data-font=\"15\" style=\"font-size: 15px;\"> <svg height=\"16.651\" viewBox=\"0 0 16.651 16.651\" width=\"16.651\" xmlns=\"http://www.w3.org/2000/svg\" data-font=\"15\" style=\"font-size: 15px;\"><path d=\"M5.2,13.757H2.927V6.407H5.2Zm.227-9.692A1.333,1.333,0,1,0,4.1,5.4,1.333,1.333,0,0,0,5.431,4.065Zm8.293,5.648c0-1.973-.417-3.436-2.722-3.436a2.362,2.362,0,0,0-2.154,1.13h0v-1H6.634v7.35H8.846V10.107c0-.956.243-1.882,1.428-1.882,1.168,0,1.206,1.093,1.206,1.942v3.589h2.244ZM16.651,14.7V1.951A1.953,1.953,0,0,0,14.7,0H1.951A1.953,1.953,0,0,0,0,1.951V14.7a1.953,1.953,0,0,0,1.951,1.951H14.7A1.953,1.953,0,0,0,16.651,14.7ZM14.7,1.3a.651.651,0,0,1,.65.65V14.7a.651.651,0,0,1-.65.65H1.951a.651.651,0,0,1-.65-.65V1.951a.651.651,0,0,1,.65-.65Zm0,0\" fill=\"#fff\" id=\"linkedin\" data-font=\"15\" style=\"font-size: 15px;\"></path></svg></a></p></div>
      
    </div>
  </div>
<div data-quickedit-entity-id=\"block_content/2\" id=\"block-copyright\" class=\"contextual-region block block-block-content block-block-content283d9059-ec00-4d40-8aff-d297582eae42\" data-once=\"quickedit\" data-quickedit-entity-instance-id=\"0\" data-font=\"16\" style=\"font-size: 16px;\">
  

      <div class=\"content\" data-font=\"16\" style=\"font-size: 16px;\">
      
            <div data-quickedit-field-id=\"block_content/2/body/ar/full\" class=\"clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item quickedit-field\" data-once=\"quickedit\" data-font=\"15\" style=\"font-size: 15px;\"><p data-font=\"15\" style=\"font-size: 15px;\">جميع الحقوق محفوظة لشركة  - 2023</p>
</div>
      
    </div>
  </div>

  </section>


        </div>
                      </div>
      </footer>
</div>
</div>", "themes/custom/law_theme/templates/layout/page.html.twig", "/var/www/test.com/themes/custom/law_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 177, "block" => 227);
        static $filters = array("escape" => 126);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
