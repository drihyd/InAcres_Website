function printheader() {

   document.write( "<header class=\"main-header homemenu\" id=\"header\">");
   document.write( "<div class=\"container\">");
   document.write( "<div class=\"row\">");
   document.write("<div class=\"col-sm-12\">");
   document.write("<a href=\"home.html\" class=\"main-logo\">"); 
   document.write("<img src=\"img/logo.png\" class=\"header-logo\" alt=\"InAcres\"><\/a>");
   document.write("<div id=\"menu-overlay\" class=\"main-menu-toggle\">");
   document.write("<\/div>");
   document.write("<div class=\"mobile-slide menu\" id=\"mobile-main-menu\">");
   document.write("<div class=\"close-menu main-menu-toggle\">");
   document.write("<span class=\"remove\"><\/span><\/div>");
   document.write("<nav class=\"main-menu-items\">");
   document.write("<div class=\"navbar\">");
   document.write(" <ul class=\"nav\">");
   document.write(" <li class=\"\"> <a href=\"home.html\" class=\"link-home\"> Home <\/a> <\/li>");
   document.write(" <li class=\"button-dropdown \">");
   document.write("<a href=\"javascript:;\" class=\"dropdown-toggle link-about\">    About  <\/a>");
   document.write("<ul class=\"dropdown-menu\">");
   document.write("<li><a  href=\"our-story.html\">InAcres Story<\/a><\/li>");
   document.write("<li><a  href=\"social-responsilbilty.html\">Social Responsibilty<\/a><\/li>");
   document.write("<li><a  href=\"bhuthpur.html\">Bhuthpur<\/a><\/li>");
   document.write("<li><a  href=\"community_shadnagar.html\">CSA Model<\/a><\/li>");
   document.write("<li><a  href=\"sustainable-agriculture.html\">Sustainable Agriculture<\/a><\/li>");
   document.write("<\/ul>");
   document.write(" <\/li>");
   document.write("<li class=\"button-dropdown \">");
   document.write("<a href=\"javascript:;\" class=\"dropdown-toggle link-soil-to-store\">   Soil To Store  <\/a>");
   document.write(" <ul class=\"dropdown-menu\">");
   document.write("<li><a href=\"online-partners.html\">Online Partners<\/a><\/li>");
   document.write("<li><a href=\"bharateeyam.html\">Bharateeyam<\/a><\/li>");
   document.write("<li><a href=\"neighbouring_stores.html\">Neighbouring stores<\/a><\/li>");
   document.write("<li><a href=\"eco_village_farm_tourism.html\">Eco Village & Farm Tourism<\/a><\/li>");
   document.write("<li><a href=\"farmer_training.html\">Farmer Training<\/a><\/li>");
   document.write("<\/ul>");
   document.write("<\/li>");
   document.write("<li class=\"button-dropdown \">");
   document.write("<a href=\"gallery.html\" class=\"link-gallery\"> Gallery <\/a>");
   document.write(" <\/li>");
   document.write("<li class=\"\"> <a href=\"contact-us.html\" class=\"link-contact\">Contact <\/a> <\/li>");
   document.write("<div class=\"search-icon\"><i class=\"fa fa-search search-bar\"><\/i><\/div>");
   document.write("<div class=\"search-box-web\">");
   
   document.write("<input type=\"text\"  placeholder=\"Search keywords\" name=\"keywords\" class=\"myInput\"required>");
   document.write("<button class=\"read-more-btn-\" id=\"myInput\" type=\"submit\" value=\"Search\">Submit <\/button>"); 
                                                         
   document.write("<\/div>");
   document.write("<\/ul>");
   document.write("<\/div>");
   document.write("<\/nav>");
   document.write("<\/div>");
   document.write("<button type=\"button\" class=\"main-menu-toggle btn btn-brand\"><span class=\"glyphicon glyphicon-menu-hamburger\"><\/span> <\/button>");  
   document.write("<\/div>");
   document.write("<\/div>");
   document.write("<\/div>");
   document.write("<\/header>");
   }
   
$(document).ready(function(e){
function t(t) {
e(t).bind("click", function (t) {
t.preventDefault();
e(this).parent().fadeOut()
})
}
e(".dropdown-toggle").click(function () {
var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
e(".button-dropdown .dropdown-menu").hide();
e(".button-dropdown .dropdown-toggle").removeClass("active");
if (t) {
e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
}
});
e(document).bind("click", function (t) {
var n = e(t.target);
if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
});
e(document).bind("click", function (t) {
var n = e(t.target);
if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
})
window.onscroll = function() {myFunction()};
var header = document.getElementById("header");
var sticky = header.offsetTop;
function myFunction() {
if (window.pageYOffset > sticky) {
$("#header").addClass("sticky");
} else {
$("#header").removeClass("sticky");
}
}
$(".main-menu-toggle").click(function()
{
$(".main-menu-items").toggle();
var elem = $(this);
if (elem.hasClass('open')) {
$("#menu-overlay").removeClass('showoverlay');
$("#mobile-main-menu").removeClass('show');
$('.main-menu-toggle').removeClass('open');
}
else {
$("#mobile-main-menu").addClass('show');
$('.main-menu-toggle').addClass('open');
$("#menu-overlay").addClass('showoverlay');
}
});
(".main-menu-toggle").click(function () {
alert();
});
})
    
          
      
        