jQuery(document).ready(function() {
$("body").on("click", "#ajaxSubmit", function() {ajaxObj.ajaxMethod(this.getAttribute("name"), formcity.namecity.value);});
$("body").on("keypress", "#ajaxPress", function() {if(event.which==13) {ajaxObj.ajaxMethod($("#ajaxSubmit").attr("name"), formcity.namecity.value);return false;}});
});

var ajaxObj={

   ajaxMethod: function(patch_name, city_name) {
      var ajaxSettings = {
          method: "GET",
          data: "namecity="+city_name,
          url: patch_name+"/modules/mod_citis/mod_citis.php",
          success: function(data) {
              $("#id_city").html(data);
          }
      };
      $.ajax(ajaxSettings);
   },

}