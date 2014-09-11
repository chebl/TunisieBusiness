<?php

/* BusinessAnnuaireBundle:Annuaire:listannonces.html.twig */
class __TwigTemplate_e31f6392c855f895a16e8fd4f1083a35423a3d1dcf1fd55752b3a2fcdb7d029b extends Twig_Template
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


<div class=\"clear\"></div>
<!--Script des catégories des annonces-->

<div class=\"box-stand marg33\">
<table style=\"width:100%;\" class=\"tabaff\">
\t<tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    \t<td colspan=\"2\">Rechercher une annonce</td>
    </tr>
</table>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("rechercheannonces");
        echo "\">
<fieldset>
<br>
<label><span style=\"float: left;\">Catégorie :</span>
    <select name=\"rechannonce\" id=\"rechannonce\" class=\"validate[required]\" style=\" margin-left: 122px;\" onchange=\"return remplirsouscategorie(document.getElementById('rechannonce').value,\$('#rechsousannonces'));\" >
\t<option value=\"\" >-----Choix-----</option>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 33
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
        // line 35
        echo "  
    </select>
</label>
<div id=\"rechsousannonces\"></div>

<label><span style=\"float: left;\">Région :</span>
                            <select size=\"1\" name=\"lieu\" id=\"lieu\" class=\"validate[required]\" style=\" margin-left: 141px; \">
                               <option value=\"\">--Sélectionnez--</option>
                                                              <option value=\"Ariana\">Ariana</option>
                                                                <option value=\"Béja\">Béja</option>
                                                                <option value=\"Ben Arous\">Ben Arous</option>
                                                                <option value=\"Bizerte\">Bizerte</option>
                                                                <option value=\"Gabès\">Gabès</option>
                                                                <option value=\"Gafsa\">Gafsa</option>
                                                                <option value=\"Jendouba\">Jendouba</option>
                                                                <option value=\"Kairouan\">Kairouan</option>
                                                                <option value=\"Kasserine\">Kasserine</option>
                                                                <option value=\"Kébili\">Kébili</option>
                                                                <option value=\"Kef\">Kef</option>
                                                                <option value=\"Mahdia\">Mahdia</option>
                                                                <option value=\"Manouba\">Manouba</option>
                                                                <option value=\"Médenine\">Médenine</option>
                                                                <option value=\"Monastir\">Monastir</option>
                                                                <option value=\"Nabeul\">Nabeul</option>
                                                                <option value=\"Sfax\">Sfax</option>
                                                                <option value=\"Sidi Bouzid\">Sidi Bouzid</option>
                                                                <option value=\"Siliana\">Siliana</option>
                                                                <option value=\"Sousse\">Sousse</option>
                                                                <option value=\"Tataouine\">Tataouine</option>
                                                                <option value=\"Tozeur\">Tozeur</option>
                                                                <option value=\"Tunis\">Tunis</option>
                                                                <option value=\"Zaghouan\">Zaghouan</option>
                                     
                            </select>
</label>
<label><span style=\"float: left;\">Mots clés :</span>
<input type=\"text\" name=\"keyannrech\" id=\"keyannrech\" value=\"\" style=\" margin-left: 110px; \"/>
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Rechercher\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px;margin-top: -30px;\" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
<div class=\"box-stand\">
<h4>Dernières Annonces</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>Photo</td>
    <td>Annonce</td>
    <td>Région</td>
  </tr>

  ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listannonces"]) ? $context["listannonces"] : $this->getContext($context, "listannonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["ann"]) {
            // line 85
            echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_ficheannonce", array("id" => $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "id"))), "html", null, true);
            echo "\" title=\"\">
           ";
            // line 86
            if (($this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "path") == "")) {
                echo " 
              <img itemprop=\"image\" src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>
          ";
            } else {
                // line 90
                echo "              <img itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/annonces/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "path"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>      
                 ";
            }
            // line 92
            echo " 
              </td><td style=\"width: 60%;\">
            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_ficheannonce", array("id" => $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "id"))), "html", null, true);
            echo "\" title=\"\"><strong itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "titre"), "html", null, true);
            echo "</strong></a>
                <br>publier le : ";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "datepublication"), "d/m/Y"), "html", null, true);
            echo " </td>   
<td style=\"width: 30%;\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "lieu"), "html", null, true);
            echo "</td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ann'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    
    </table>
</div>
</fieldset>
</form>
</div>  <!--Annonce en Avant-->

 <!--Annonce en Avant-->

<div class=\"clear\"></div> <!--Clear-->
     


<!--Listes Annonces-->
    
     

</div> <!--End include left-->

<!--include right-->
<div class=\"grid_2\">
    

<!--Pub right Annonceurs-->
<div class=\"box-stand\">

    <div class=\"clear\"></div>
</div> <!--Annonceurs-->

<div class=\"box-pub\">
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Carée-->
<div class=\"box-pub2\">
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
<!-- Place this tag where you want the widget to render. -->
<div class=\"g-page\" data-width=\"250\" data-href=\"https://plus.google.com/105367995533699353729\" data-showtagline=\"false\" data-rel=\"publisher\"></div>

<!-- Place this tag after the last widget tag. -->
<script type=\"text/javascript\">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
\t\t\t\t<!-- Start photoslider-mini -->
\t\t\t\t<div class=\"sliderkit photoslider-maxi\" style=\"width:252px;height:600px;\">
\t\t\t\t\t<div class=\"sliderkit-panels\">
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t
                                                </div>
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Large-->
</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">

<div class=\"box-actualite fleft\">

</div> <!--Dérniers Promotions-->

<div class=\"box-actualite fright\">
</div> <!--Dérniers annonces-->

<div class=\"clear\"></div>

</div>

";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:listannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 99,  180 => 96,  176 => 95,  170 => 94,  166 => 92,  158 => 90,  152 => 87,  148 => 86,  143 => 85,  139 => 84,  88 => 35,  77 => 33,  73 => 32,  64 => 26,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
