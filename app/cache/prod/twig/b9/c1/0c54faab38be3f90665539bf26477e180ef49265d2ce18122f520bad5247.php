<?php

/* BusinessAnnuaireBundle:Profil:ajoutannonce.html.twig */
class __TwigTemplate_b9c10c54faab38be3f90665539bf26477e180ef49265d2ce18122f520bad5247 extends Twig_Template
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
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"grid_1\"> 
<div class=\"box-stand\">
<h4>Ajouter une annonce</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td>Veuillez bien remplire le formulaire ci-dessus :</td>
  </tr>
</table>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  onsubmit=\"alert('Annonce Ajouté avec success !')\">
<fieldset>
<br>
<label><span>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
        echo "</span>
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "titreann", "name" => "titreann")));
        echo " 
</label>
<label><span>Catégorie :</span>
<select name=\"categann\" id=\"categannonce\" class=\"validate[required]\" onchange=\"return remplirsouscategorie(document.getElementById('categannonce').value,\$('#souscategoriesann'));\" >
\t<option value=\"\" >-----Choix-----</option>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 27
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "nom"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "       

</select>
</label>
<div id=\"souscategoriesann\"></div>

<label><span>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureevalidite"), 'label');
        echo "</span>
   ";
        // line 37
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureevalidite"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "duree", "size" => "1", "name" => "duree")));
        echo " 
</label>
<label><span>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'label');
        echo "</span>
";
        // line 41
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'widget', array("attr" => array("id" => "prix", "name" => "prix")));
        echo " 
</label>
<label><span>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu"), 'label');
        echo "</span>
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu"), 'widget', array("attr" => array("id" => "lieu", "name" => "lieu", "class" => "validate[required]", "size" => "1")));
        echo " 
         

</label>
<label><span>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "</span>
\t\t<table id='myTable'><tbody><tr id=\"fileRow_0\">
\t\t\t\t\t<!--<td>File 1</td>-->
\t\t\t\t\t<td>
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "file_0", "name" => "upFile[]")));
        echo " 
                                        </td>
\t\t\t\t\t
\t\t\t\t </tr></tbody></table></label>
<label><span>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</span>
";
        // line 58
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("id" => "des", "name" => "des", "class" => "validate[required,length[10,800]]")));
        echo " 
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"D&eacute;poser\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</div> <!--Ajouter une annonce-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->";
        // line 69
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:ajoutannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  153 => 63,  144 => 58,  140 => 56,  133 => 52,  126 => 48,  119 => 44,  115 => 43,  109 => 41,  105 => 39,  99 => 37,  95 => 35,  87 => 29,  76 => 27,  72 => 26,  64 => 21,  60 => 19,  52 => 16,  41 => 7,  38 => 6,  32 => 3,  29 => 2,);
    }
}
