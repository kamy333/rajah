<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 07-Jul-16
 * Time: 7:13 PM
 */
class Modal
{
public $title;
public $body="body content \$body";
public $footer;
public $id="modal-form \$id";
public $view="click here \$view";


 public function modal_output(){

        $output = "";


        $output .= "<div class='ibox-content'>";
        $output .= "<div class='text-center'>";
        $output .= "<a data-toggle='modal' class='btn btn-primary' href='#{$this->id}'>{$this->view}</a> ";
        $output .= "                            </div>";


        $output .= "                            <div id='{$this->id}' class='modal fade' aria-hidden='true'>";
        $output .= "                                <div class='modal-dialog'>";
        $output .= "                                    <div class='modal-content'>";

        $output .= "                                      <div class='modal-header'>";
        $output .= "                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span                                                        aria-hidden=\"true\">&times;</span></button>";

        if(!empty($this->title)){
            $output .= "<h4 class='modal-title'>$this->title</h4>";
        }
        $output.="                                         </div>";
        $output .= "                                       <div class='modal-body'>";

        $output .= $this->body;

        $output .= "                                         </div>";

        if(!empty($this->footer)) {
            $output .= "<div class=\"modal-footer\">";
            $output.="        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
            $output.="</div>";
        }

        $output .= "</div>";
        $output .= "</div>";
        $output .= "</div>";
        $output .= "</div>";
        $output .= "</div>";

        return $output;

    }



}