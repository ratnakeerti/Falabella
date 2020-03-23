<?php
public function index(){
  $count = 100;
        for($i=1;$i<=$count;$i++){
            $a = $i%3;
            $b = $i%5;
            
            $c = [$a,$b];
            foreach ($c as $idx=>$val){
                if($val>0){
                    $c[$idx] = 1;
                }
            }
            $temp = $c[0].$c[1];
            switch ($temp){
                case '11':
                    echo $i.',';
                    break;
                case '01':
                    echo 'Linio,';
                    break;
                case '10':
                    echo 'IT,';
                    break;
                case '00':
                    echo 'Linianos,';
                    break;
            }
        }
}
?>
