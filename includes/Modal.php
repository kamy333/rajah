<?php


///*
///**
// * Created by PhpStorm.
// * User: Kamran
// * Date: 07-Jul-16
// * Time: 7:13 PM
// */
class Modal
{

   public $modal_id;
   public $text_button="Edit";

   public $modal_body;

   public $modal_title_h4;
   public $modal_title_small_text;
   public $modal_footer;



    public function modal_html(){


        $output = "";
        $output .= "<div class='text-center'>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='"
            .$this->modal_id
            .">"
            .$this->text_button
            ."</button></div>";
        return $output;
    }

 public   function modal_large(){

        $output = "";
        $output .= "
    <div class='modal inmodal fade' id='myModal5' tabindex='-1' role='dialog'  aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";

     if (isset($this->modal_title)){
         $output .="<h4 class='modal-title'>"
         .$this->modal_title_
         ." </h4>";

         if (isset($this->modal_title_body)) {
             $output .= "<small class='font-bold'>"
                 .$this->modal_title_small_text
                 ."</small>";
         }
     }


       $output .="     </div>
            <div class='modal-body'>"

              .  $this->modal_body

             . "</div>";


         $output .= "  <div class='modal-footer'>
         $output .=        <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>";
         if (isset($this->modal_title_body)) {
             $output .= "      <button type='button' class='btn btn-primary'>Save changes</button>";
         }
         $output .= "   </div>";



       $output .="</div>
            </div>
      </div>
    ";
       return $output;

    }

}