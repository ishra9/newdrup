<?php

/* themes/custom/ria/templates/page.html.twig */
class __TwigTemplate_d7e5f719ee9903c964ae4858a641388912be67c1f9e50c3a549524354b1ee861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 49);
        $filters = array("t" => 50);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">
";
        // line 49
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 50
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
      </a>
    ";
        }
        // line 54
        echo "
  <header role=\"banner\">
  </header>
  ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
        echo "
  ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_bottom", array()), "html", null, true));
        echo "
  ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 64
        echo "
    <div class=\"layout-content\">
      ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 68
        echo "
    ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 70
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 76
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 80
        echo "
  </main>

  ";
        // line 83
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 84
            echo "    <footer role=\"contentinfo\">
      ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 88
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ria/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 88,  132 => 85,  129 => 84,  127 => 83,  122 => 80,  116 => 77,  113 => 76,  111 => 75,  108 => 74,  102 => 71,  99 => 70,  97 => 69,  94 => 68,  90 => 66,  86 => 64,  80 => 60,  76 => 59,  72 => 58,  68 => 57,  63 => 54,  55 => 51,  48 => 50,  46 => 49,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/* {% if logo %}*/
/*       <a id="logo" href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*         <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*       </a>*/
/*     {% endif %}*/
/* */
/*   <header role="banner">*/
/*   </header>*/
/*   {{ page.header_top }}*/
/*   {{ page.header}}*/
/*   {{ page.header_bottom }}*/
/*   {{ page.main_menu }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content">*/
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="layout-sidebar-first" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="layout-sidebar-second" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
