<?php 
class mate
{
    public function radio($radio1)
    {
        $result = sprintf('%.2f', (PI * $radio1 * $radio1));
        return $result;
    }
}
?>