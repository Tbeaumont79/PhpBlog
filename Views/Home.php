<?php

  function HomeView() {
    $htmlElement .= '<div class=" mt-5 d-flex flex-column justify-content-center">';
    $htmlElement .= '<div class="row mr-0">';
    $htmlElement .= '<div class="col-4"></div>';
    $htmlElement .= '<div class="col-4 text-center"><p style="font-familly:Roboto;font-size:23px;"><span class="text-primary">J</span>e suis développeur Web avec l\'envie de partager ce que j\'aime sur ce blog. Tu y trouveras tous les articles que j\'écris. Je travaille sur des projets open source que tu peux retrouver sur Github. 👋</p></div>';
    $htmlElement .= '<div class="col-4"></div>';
    $htmlElement .= '<div class="col-4 mt-5 pl-5 text-left" ><p style="font-familly:Roboto;font-size:23px;"><span class="text-primary">A</span>ctuellement á l\'école 42, je me forme quotidienement en parallele de mes études sur des sites comme : <br> Udemy OpenClassroom </p></div>';
    $htmlElement .= '<div class="col-4 mt-5 mb-5 pl-md-5 "><img src="../Lib/moi.JPG" class="rounded-circle" style="transform:scaleX(-1); height:400px;" /></div>';
    $htmlElement .= '<div class="col-4 mt-5 text-left"><p style="font-familly:Roboto;font-size:23px;"><span class="text-primary">V</span>ous souhaitez me contacter : </p><a href="#" class="m-auto btn lg btn-primary">Send a mail ! </a></div>';
    $htmlElement .= '<div class="col-4"></div>';
    $htmlElement .= '<div class="col-4  mt-5 text-center" style="font-size:23px;"><i class="ml-5 fab fa-linkedin-in"></i><i class="ml-5 fab fa-instagram"></i><i class="ml-5 fab fa-twitter"></i><p class="ml-5 " style="font-familly:Roboto;font-size:23px;">
    <br />
    Copyright Thibault Beaumont</p></div>';

    $htmlElement .= '</div>';
    $htmlElement .= '</div>';
    $htmlElement .= '</div>';


    return $htmlElement;
  }
?>
