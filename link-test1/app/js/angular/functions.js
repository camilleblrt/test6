function getLanguage(location){
    if (location[2] === "/")
        return location.substring(0,2);
    else
        return "en";
};
// Sets the matching Id's to an image.
function show_matching_image(img_id, img_path){
  document.getElementById(img_id).setAttribute('src',img_path);
  //put a black background for the white logo
  if(img_path == '/company-information/press-kit/images/thumbnails/Logo/DKlogo_white_thumb.png')
  {
    document.getElementById(img_id).style.backgroundColor="black";
  }
  else {
  document.getElementById(img_id).style.backgroundColor="transparent"
  }



};
function show_division_zero_logo(q){
document.getElementById('logo-image').setAttribute('src',q)
};

function show_division_zero_x40(q){
document.getElementById('x40-image').setAttribute('src',q)
};

function show_division_zero_m50(q){
document.getElementById('m50-image').setAttribute('src',q)
};

function show_division_zero_47w_control(q){
document.getElementById('47W-control-image').setAttribute('src',q)
};

function show_division_zero_47w_flex(q){
document.getElementById('47W-flex-image').setAttribute('src',q)
};

function show_division_zero_47w_speed(q){
document.getElementById('47W-speed-image').setAttribute('src',q)
};

function show_division_zero_top_panel(q){
document.getElementById('top-panel-image').setAttribute('src',q)
};

function show_division_zero_bungee(q){
document.getElementById('bungee-image').setAttribute('src',q)
};

function show_dk4_pro_for_mac(q){
document.getElementById('dk4proformac-image').setAttribute('src',q)
};

function show_dk4c_pro(q){
document.getElementById('dk4cpro-image').setAttribute('src',q)
};

function show_dk4c_ultimate(q){
document.getElementById('dk4cultimate-image').setAttribute('src',q)
};

function show_dk4pro(q){
document.getElementById('dk4pro-image').setAttribute('src',q)
};

function show_dk4_ultimate(q){
document.getElementById('dk4ultimate-image').setAttribute('src',q)
};

function show_dkmedia(q){
document.getElementById('dkmedia-image').setAttribute('src',q)
};
