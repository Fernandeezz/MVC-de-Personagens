<!-- Validation -->
<?php
class Validation
{
    public function check_empty($data, $fields) 
    {
        $msg = null;
        if (is_array($fields)) {
            foreach ($fields as $field) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($data[$field])) {
                        $msg .= "$field está vazio<br />";
                    }
                }
            }
        }
        return $msg;
    }
}
?>