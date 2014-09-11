<?php

/* BusinessAnnuaireBundle:Profil:promotion.html.twig */
class __TwigTemplate_f5030f15c12c8e6fa21d6b4ef7a2d965516c9d5283d41c3044d1f1a21244284c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "<!--Form Validator-->

";
        // line 5
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "


";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "

<div class=\"grid_1\"> 
    <div class=\"box-stand\">
        ";
        // line 15
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            echo " 
            <h4>Modifier une promotion</h4>
        ";
        } else {
            // line 18
            echo "            
    <h4>Ajouter une promotion</h4>
     ";
        }
        // line 21
        echo "    <table style=\"width:100%;\" class=\"tabsoc\">
        <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
            <td>Veuillez bien remplire le formulaire ci-dessus :</td>
        </tr>
    </table>
            <form id=\"pro_form1\" method=\"post\" action=\"\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " onsubmit=\"alert('promotion ajouté avec success !')\">
                <fieldset>
        <br>
        <label><span style=\"float:left;\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "</span>
        ";
        // line 31
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("id" => "nom", "class" => "validate[required]", "name" => "nom", "style" => " margin-left: 138px;")));
        echo "
        
        </label>
        <br>
        <label><span style=\"float:left;\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "</span>
        ";
        // line 37
        echo "             ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("id" => "prenom", "class" => "validate[required]", "name" => "prenom", "style" => " margin-left: 117px;")));
        echo "     
        </label>
        <br>
        <label><span style=\"float:left;\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
        echo "</span>
        ";
        // line 42
        echo "         ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("id" => "titreprom", "class" => "validate[required]", "name" => "titreprom", "style" => " margin-left: 62px;")));
        echo "        
        </label>
        <br>
        <label><span style=\"float:left;\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label');
        echo "</span>
        ";
        // line 47
        echo "           ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("id" => "tel", "class" => "validate[required]", "name" => "tel", "style" => " margin-left: 99px;")));
        echo "        
                
        </label>
        <br>
        ";
        // line 51
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 52
            echo "        
        <label><span style=\"float:left;\">Image :</span>
         <span  style=\"margin-left:180px;\">
        <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/promotions/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"), "html", null, true);
            echo "\" style=\"width:250px; height:250px;\">
         </span>
        </label>
        <br>
       
        <br>
        <label><span style=\"float:left;\">Modifier Photo</span>
           ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "photo", "class" => "validate[required]", "name" => "photo", "style" => " margin-left: 130px;")));
            echo "        
          </label>     
        
";
        } else {
            // line 65
            echo "    
        <label>
        
                <span style=\"float:left;\">";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
            echo "</span>   
           ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "photo", "class" => "validate[required]", "name" => "photo", "style" => " margin-left: 130px;")));
            echo "        
          </label>     
             ";
        }
        // line 72
        echo "        ";
        // line 73
        echo "               
         
        <br>
       
        <label><span style=\"float:left;\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</span>
        ";
        // line 79
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("id" => "des", "class" => "validate[required,length[10,800]]", "name" => "des", "style" => " margin-left: 94px;")));
        echo "        
                
        </label>
        <br>
        <div class=\"btns\">
             ";
        // line 84
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 85
            echo "            <input name=\"send\" id=\"submit\" type=\"submit\" value=\"Modifier\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
          ";
        } else {
            // line 87
            echo "            <input name=\"send\" id=\"submit\" type=\"submit\" value=\"Ajouter\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
        ";
        }
        // line 89
        echo "        <div class=\"clear\"></div>
        </fieldset>
             ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "       
        </form>
    </div>\t<!--inscription société-->
<div class=\"clear\"></div>  <!--Clear-->
</div> <!--End include left-->
<!--include right-->


";
        // line 99
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 100
        echo "<div class=\"grid_2\">

<!--Pub right Annonceurs-->
<div class=\"box-stand\">
<div class=\"clear\"></div>
</div> <!--Annonceurs-->

</div> <!--FB like blocs-->

</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">



<div class=\"clear\"></div>
</div>



";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 100,  209 => 99,  198 => 91,  194 => 89,  190 => 87,  186 => 85,  184 => 84,  175 => 79,  171 => 77,  165 => 73,  163 => 72,  157 => 69,  153 => 68,  148 => 65,  141 => 62,  130 => 55,  125 => 52,  123 => 51,  115 => 47,  111 => 45,  104 => 42,  100 => 40,  93 => 37,  89 => 35,  81 => 31,  77 => 29,  71 => 26,  64 => 21,  59 => 18,  53 => 15,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
