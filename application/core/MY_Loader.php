<?php

class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return) {
            $content  = $this->view('_layouts/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('_layouts/footer', $vars, $return);

            return $content;
        }

        $this->view('_layouts/header', $vars);
        $this->view($template_name, $vars);
        $this->view('_layouts/footer', $vars);
    }
}

?>